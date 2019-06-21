<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buyer;


class BuyerController extends Controller
{
    //
    public function index()
    {
        return Buyer::all();
    }

    public function show(Buyer $buyer)
    {
        return $buyer;
    }

    public function store(Request $request)
    {
        $buyer = Buyer::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password
        ]);

        return response()->json($buyer, 201);
    }

    public function update(Request $request, Buyer $buyer)
    {
        $buyer->update($request->all());

        return response()->json($buyer, 200);
    }

    public function delete(Buyer $buyer)
    {
        $buyer->delete();

        return response()->json(null, 204);
    }
}
