<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateFeedingRecordRequest;
use App\Http\Requests\UpdateFeedingRecordRequest;
use App\Models\FeedingRecord;

class FeedingRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FeedingRecord::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFeedingRecordRequest $request)
    {
        $newFeedingRecord = FeedingRecord::create($request->all());
        return response()->json($newFeedingRecord, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(FeedingRecord $feedingRecord)
    {
        return response()->json($feedingRecord);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFeedingRecordRequest $request, FeedingRecord $feedingRecord)
    {
        $feedingRecord->update($request->all());
        return response()->json($feedingRecord, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeedingRecord $feedingRecord)
    {
        $feedingRecord->delete();
        return response()->json('OK', 200);
    }
}
