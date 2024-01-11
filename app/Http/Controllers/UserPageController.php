<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPageController extends Controller
{
    public function homepage()
    {
        return view('pages.user.homepage');
    }
}
