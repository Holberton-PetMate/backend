<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Feeder;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        $newUser = User::create($request->all());
        return response()->json($newUser, 201);
    }

    /**
     * Display all the feeders of a user
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user['feeders'] = $user->feeders;
        return response()->json($user);
    }

    public function redeem_feeder(User $user, Feeder $feeder)
    {
        if ($feeder->is_redeemed)
            return response()->json("This feeder is already redeemed", 400);

        $user->feeders()->attach($feeder->id);
        $feeder->is_redeemed = true;
        $feeder->save();

        return response()->json("Ok", 201);
    }

    /**
     * Display all the feeders of a user
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_feeders(User $user)
    {
        $feeders = $user->feeders;
        return response()->json($feeders);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->except(['email']);
        $user->update($data);
        return response()->json($user, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json("OK", 200);
    }
}
