<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index() {
        $items = Item::all();
        return view('home', compact('items'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        Item::create($request->all());
        return redirect('/');
    }

    public function edit($id) {
        $item = Item::findOrFail($id);
        return response()->json($item);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        $item = Item::findOrFail($id);
        $item->update($request->all());
        return redirect('/');
    }

    public function destroy($id) {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect('/');
    }
}

