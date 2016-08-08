<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\User;

class CommunityController extends Controller
{

    /**
     * Show the index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('app.community.list', compact('users'));
    }
}
