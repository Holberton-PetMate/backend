<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Feeder;
use App\Http\Requests\CreateFeederRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateFeederRequest;
use App\Models\Record;

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
     * Display all the users of a feeder
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Feeder $feeder)
    {
        $feeder['users'] = $feeder->users;
        return response()->json($feeder);
    }

    /**
     * Display all the users of a feeder
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_users(Feeder $feeder)
    {
        $users = $feeder->users;
        return response()->json($users);
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
    public function destroy(Feeder $feeder)
    {
        $feeder->delete();
        return response()->json("OK", 200);
    }

    public function check_redeemed(Request $request)
    {
        $code_id = $request->get("code_id");
        $feeder = Feeder::where("code_id", $code_id)
            ->where("is_redeemed", false)
            ->firstOrFail();
        return response()->json($feeder, 200);
    }

    /**
     * Display all the feeding_times of a feeder
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_feeding_times(Feeder $feeder)
    {
        $feeding_times = $feeder->feeding_times;
        return response()->json($feeding_times);
    }

    /**
     * Display all the records of a feeder
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_records(Feeder $feeder)
    {
        $records = $feeder->records;
        return response()->json($records);
    }
}
