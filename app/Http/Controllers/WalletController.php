<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wallet;
use App\Http\Resources\WalletResource;



class WalletController extends Controller
{
    //

    //
    public function index()
    {
        return Wallet::all();
    }

    public function show(Wallet $wallet)
    {
        // return $wallet;
        return response()->json($wallet, 200);
        //return new WalletResource($wallet);

    }

    public function store(Request $request)
    {
        $wallet = Wallet::create([
            'buyer_id' => $request->buyer_id,
            'debit' => $request->debit,
            'credit' => $request->credit
        ]);
        $balance = $request->debit - $request->credit;

        // return response()->json($balance, 201);
        return new WalletResource($wallet);
    }

    public function update(Request $request, Wallet $wallet)
    {
        $wallet->update($request->all());

        // return response()->json($wallet, 200);
        return new WalletResource($wallet);

    }

    public function delete(Wallet $wallet)
    {
        $wallet->delete();

        return response()->json(null, 204);
    }
}
