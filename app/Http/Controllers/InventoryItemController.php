<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryItemController extends Controller
{
    public function index()
    {
        return InventoryItem::all();
    }
 
    public function show($id)
    {
        return InventoryItem::find($id);
    }

    public function store(Request $request)
    {
        return InventoryItem::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $item = InventoryItem::findOrFail($id);
        $item->update($request->all());

        return $item;
    }

    public function delete(Request $request, $id)
    {
        $item = InventoryItem::findOrFail($id);
        $item->delete();

        return 204;
    }
}
