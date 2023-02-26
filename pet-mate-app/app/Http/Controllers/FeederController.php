<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Feeder;
use App\Models\FeedingTime;
use App\Models\Food;
use App\Http\Requests\CreateFeederRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateFeederRequest;
use App\Models\FeedingRecord;

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
        $feeder["food"] = Food::where("id", $feeder->active_food)->first();
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


    /**
     * Check if the redeem is true or false.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        $feeding_times = FeedingTime::where("feeder_id", $feeder->id)->orderBy("hour", "ASC")->get();
        return response()->json($feeding_times);
    }

    /**
     * Display all the notifications of a feeder
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_notifications(Feeder $feeder)
    {
        $notifications = $feeder->notifications;
        return response()->json($notifications);
    }

    /**
     * Display all the foods of a feeder
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_foods(Feeder $feeder)
    {
        $foods = $feeder->foods;
        return response()->json($foods);
    }

    /**
     * Display all the feeding_records of a feeder
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_feeding_records(Request $request, Feeder $feeder)
    {
        $mode = $request->get('mode');
        $feeding_records = FeedingRecord::mode($mode)
            ->where("feeder_id", $feeder->id)
            ->get();
        return response()->json($feeding_records);
    }
}
