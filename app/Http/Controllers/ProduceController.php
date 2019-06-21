<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produce;


class ProduceController extends Controller
{
    //
    public function index()
    {
        return Produce::all();
    }

    public function show($id)
    {
        return Produce::find($id);
    }

    public function store(Request $request)
    {
        $produce = Produce::create([
            'farmer_id' => $request->farmer_id,
            'quantity' => $request->quantity,
            'cost' => $request->cost
        ]);

        return response()->json($produce, 201);
    }

    public function update(Request $request, Produce $produce)
    {
        $produce->update($request->all());

        return response()->json($produce, 200);
    }

    public function delete(Produce $produce)
    {
        $produce->delete();

        return response()->json(null, 204);
    }

}
