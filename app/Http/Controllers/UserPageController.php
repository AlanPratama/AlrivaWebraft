<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class UserPageController extends Controller
{
    public function homepage()
    {
        $services = Service::orderBy('sold', 'desc')->paginate(6);
        $category = Category::whereHas('service')->get();

        // $wlId = Wishlist::where('user_id', Auth::user()->id)->get();

        return view('pages.user.homepage', compact('services', 'category'));
    }


    public function wishList()
    {
        if (Auth::user()) {
            $wishLists = Wishlist::where('user_id', Auth::user()->id)->get();
            $category = Category::whereHas('service')->get();

            return view('pages.user.service.wishList', compact('wishLists', 'category'));
        } else {
            $category = Category::whereHas('service')->get();

            return view('pages.user.service.wishList', compact('category'));
        }
    }

    public function addToWishlist(Request $request)
    {
        $service = Service::where('slug', $request->serviceSlug)->first();
        $wishList = Wishlist::where('service_id', $service->id)->first();
        $data = [
            'user_id' => Auth::user()->id,
            'service_id' => $service->id,
        ];


        if ($wishList) {
            $wishList->delete();
            return response()->json(['status' => 'deleted']);
        } else {
            Wishlist::create($data);
            return response()->json(['status' => 'success']);
        }

    }



    public function service(Request $request)
    {
        $services = Service::orderBy('sold', 'desc')->get();
        $category = Category::whereHas('service')->get();

        return view('pages.user.service.allService', compact('services', 'category'));
    }


    public function serviceDetail(Request $request, $slug)
    {
        $service = Service::where('slug', $slug)->first();
        return view('pages.user.service.detailService', compact('service'));
    }


    public function categoryWebsite($slug)
    {
        $idCategory = Category::where('slug', $slug)->first();
        $services = Service::where('category_id', $idCategory->id)->get();

        $category = Category::whereHas('service')->get();

        return view('pages.user.service.byCategory', compact('idCategory', 'services', 'category'));
    }
}
