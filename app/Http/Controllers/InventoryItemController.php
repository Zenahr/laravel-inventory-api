<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryItemController extends Controller
{
    public function index()
    {
        return InventoryItem::all();
    }

    public function show(InventoryItem $item)
    {
        return $item;
    }

    public function store(Request $request)
    {
        $item = InventoryItem::create($request->all());

        return response()->json($item, 201);
    }

    public function update(Request $request, InventoryItem $item)
    {
        $item->update($request->all());

        return response()->json($item, 200);
    }

    public function delete(InventoryItem $item)
    {
        $item->delete();

        return response()->json(null, 204);
    }
}
