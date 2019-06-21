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

    public function show($id)
    {
        return Farmer::find($id);
    }

    public function store(Request $request)
    {
        $farmer = Farmer::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
            'location' => $request->location,
            'api_token' => Str::random(60),
        ]);

        return response()->json($farmer, 201);
        // return $this->respondWithToken($api_token);
    }

    public function login(Request $request)
    {
      $credentials = $request->only(['email', 'password']);

      return $this->respondWithToken($token);
    }

    public function location(Request $request, $location)
    {
        $data = $request->get('data');

        $farmers = Farmer::where('location', 'like', "%{$data}%")
                         ->get();
        
        return Response()->json([
        'status' => 'success',
        'data' => $farmers
    ], 200);
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
