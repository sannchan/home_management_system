<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function create(Request $request)
{
    $item = new Item;
    $item->name = $request->name;
    $item->price = $request->price;
    $item->buyer_id = $request->buyer_id;
    $item->is_shared = $request->is_shared;
    $item->save();

    return response()->json($item);
}
}
