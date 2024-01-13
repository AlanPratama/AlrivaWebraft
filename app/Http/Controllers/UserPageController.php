<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class UserPageController extends Controller
{
    public function homepage()
    {
        $services = Service::orderBy('sold', 'desc')->paginate(6);
        return view('pages.user.homepage', compact('services'));
    }


    public function wishList()
    {
        return view('pages.user.service.wishList');
    }


    public function service(Request $request)
    {
        $services = Service::orderBy('sold', 'desc')->get();
        return view('pages.user.service.allService', compact('services'));
    }


    public function serviceDetail(Request $request, $slug)
    {
        $service = Service::where('slug', $slug)->first();
        return view('pages.user.service.detailService', compact('service'));
    }

}
