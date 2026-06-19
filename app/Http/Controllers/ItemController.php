<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::orderBy('created_at', 'desc')->get();

        if (Auth::user()->role === 'user') {
            return view('items.user_index', compact('items'));
        }

        return view('items.index', compact('items'));
    }

    public function userIndex()
    {
        $items = Item::orderBy('created_at', 'desc')->get();
        return view('items.user_index', compact('items'));
    }

    public function create()
    {
        if (Auth::user()->role === 'user') {
            abort(403, 'Forbidden - Anda tidak boleh masuk!');
        }
        return view('items.create');
    }

    public function store(Request $request)
    {
        if (Auth::user()->role === 'user') {
            abort(403, 'Forbidden - Anda tidak boleh masuk!');
        }

        $request->validate([
            'nama' => 'required|min:3|max:100',
            'kode' => 'required|unique:items,kode|max:50',
            'stok' => 'required|integer|min:0',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'nullable'
        ]);

        Item::create($request->all());
        return redirect('/items')->with('success', 'Item berhasil ditambahkan!');
    }

    public function show($id)
    {
        $item = Item::findOrFail($id);
        return view('items.show', compact('item'));
    }

    public function edit($id)
    {
        if (Auth::user()->role === 'user') {
            abort(403, 'Forbidden - Anda tidak boleh masuk!');
        }

        $item = Item::findOrFail($id);
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        if (Auth::user()->role === 'user') {
            abort(403, 'Forbidden - Anda tidak boleh masuk!');
        }

        $item = Item::findOrFail($id);

        $request->validate([
            'nama' => 'required|min:3|max:100',
            'kode' => 'required|max:50|unique:items,kode,' . $id,
            'stok' => 'required|integer|min:1',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'nullable'
        ]);

        $item->update($request->all());
        return redirect('/items')->with('success', 'Item berhasil diubah!');
    }

    public function destroy($id)
    {
        if (Auth::user()->role === 'user') {
            abort(403, 'Forbidden - Anda tidak boleh masuk!');
        }

        $item = Item::findOrFail($id);
        $item->delete();
        return redirect('/items')->with('success', ' dihapus!');
    }
}
