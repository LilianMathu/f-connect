<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Farmer;

class FarmerController extends Controller
{
    //
    public function index()
    {
        return Farmer::all();
    }

    public function show(Farmer $farmer)
    {
        return $farmer;
    }

    public function store(Request $request)
    {
        $farmer = Farmer::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
            'location' => $request->location,
            // 'api_token' => Str::random(60),
        ]);

        return response()->json($farmer, 201);
        // return $this->respondWithToken($api_token);
    }

    public function farmerlogin(Request $request)
    {
      $credentials = $request->only(['email', 'password']);

      return $this->respondWithToken($token);
    }

    public function update(Request $request, Farmer $farmer)
    {
        $farmer->update($request->all());

        return response()->json($farmer, 200);
    }

    public function delete(Farmer $farmer)
    {
        $farmer->delete();

        return response()->json(null, 204);
    }
}
