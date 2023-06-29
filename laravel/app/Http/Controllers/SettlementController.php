<?php

namespace App\Http\Controllers;
use App\Models\Settlement;
use App\Models\Item;
use App\Http\Controllers\Controller;

class SettlementController extends Controller
{
    public function show($month)
{
    $sharedItems = Item::where('is_shared', true)
        ->whereMonth('created_at', $month)
        ->get();

    $totalCost = $sharedItems->sum('price');
    $splitCost = $totalCost / 2; // 2人の割り勘

    // 精算情報の作成はもっと複雑になるかもしれません
    // 以下は単純化した例です
    $settlement = new Settlement;
    $settlement->month = $month;
    $settlement->payer_id = $sharedItems->first()->buyer_id;
    $settlement->receiver_id = $sharedItems->last()->buyer_id;
    $settlement->amount = $splitCost;
    $settlement->save();

    return response()->json($settlement);
}

public function index()
{
    $settlements = Settlement::all();

    return response()->json($settlements);
}
}
