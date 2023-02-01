<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FeedingTime;
use App\Http\Requests\CreateFeedingTimeRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateFeedingTimeRequest;

class FeedingTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FeedingTime::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFeedingTimeRequest $request)
    {
        $newFeedingTime = FeedingTime::create($request->all());
        return response()->json($newFeedingTime, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(FeedingTime $feeding_time)
    {
        return response()->json($feeding_time);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFeedingTimeRequest $request, FeedingTime $feeding_time)
    {
        $feeding_time->update($request->all());
        return response()->json($feeding_time, 200);
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
