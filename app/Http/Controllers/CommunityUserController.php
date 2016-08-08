<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\User;
use App\Models\City;
use Illuminate\Http\Request;

class CommunityUserController extends Controller
{

    /**
     * Show the index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->to('community');
    }

    /**
     * Show current user profile
     *
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(User $user)
    {
       return view('app.community.user.profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User $user
     * @return Response
     */
    public function edit(User $user)
    {
        $cities = City::all();
        return view('app.community.user.edit', compact('user', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  $request
     * @param $user
     * @return Response
     */
    public function update(Request $request, User $user)
    {
        return;
    }
}
