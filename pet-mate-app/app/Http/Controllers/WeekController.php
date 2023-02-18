<?php

namespace App\Http\Controllers;
use App\Models\Week;
use App\Http\Requests\CreateWeekRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateWeekRequest;

class WeekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Week::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateWeekRequest $request)
    {
        $newWeek = Week::create($request->all());
        return response()->json($newWeek, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Week $week)
    {
        return response()->json($week);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWeekRequest $request, Week $week)
    {
        $week->update($request->all());
        return response()->json($week, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Week $week)
    {
        $week->delete();
        return response()->json('OK', 200);
    }
}
