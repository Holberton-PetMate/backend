<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Feeder;
use App\Http\Requests\CreateFeederRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateFeederRequest;

class FeederController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Feeder::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFeederRequest $request)
    {
        $newFeeder = Feeder::create($request->all());
        return response()->json($newFeeder, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Feeder $feeder)
    {
        return response()->json($feeder);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFeederRequest $request, Feeder $feeder)
    {
        $data = $request->except(['code_id']);
        $feeder->update($data);
        return response()->json($feeder, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
