<?php

namespace App\Http\Controllers\Admin;

class HelpController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('docs.index');
    }
}
