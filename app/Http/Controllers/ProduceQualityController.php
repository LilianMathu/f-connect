<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produce_Quality;


class ProduceQualityController extends Controller
{
    //

    //
    public function index()
    {
        return Produce_Quality::all();
    }

    public function show(Produce_Quality $produce_quality)
    {
        return $produce_quality;
    }

    public function store(Request $request)
    {
        $produce_quality = Produce_Quality::create([
            'produce_id' => $request->produce_id,
            'weight' => $request->weight,
            'skin' => $request->skin,
            'color' => $request->color

        ]);

        return response()->json($produce_quality, 201);
    }

    public function update(Request $request, Produce_Quality $produce_quality)
    {
        $produce_quality->update($request->all());

        return response()->json($produce_quality, 200);
    }

    public function delete(Produce_Quality $produce_quality)
    {
        $produce_quality->delete();

        return response()->json(null, 204);
    }



}
