<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserPageController extends Controller
{
    public function homepage()
    {
        return view('pages.user.homepage');
    }


    public function wishList()
    {
        return view('pages.user.service.wishList');
    }


    public function service(Request $request)
    {
        return view('pages.user.service.allService');
    }


    public function serviceDetail(Request $request)
    {
        return view('pages.user.service.detailService');
    }

}
