<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use App\Models\Type;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('pages.admin.dashboard');
    }





    // OTHER || OTHER || OTHER || OTHER || OTHER || OTHER || OTHER || OTHER || OTHER || OTHER ||
    public function other()
    {
        $types = Type::all();
        $categories = Category::all();
        return view('pages.admin.services.other', compact('types', 'categories'));
    }

    public function typeAdd(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:types,name',
        ]);

        Type::create($data);

        return redirect()->route('other')->with('success', 'ADD TYPE SUCCESS');
    }

    public function typeEdit(Request $request, $slug)
    {
        $type = Type::where('slug', $slug)->first();
        $request->validate([
            'name' => 'required|unique:types,name,'.$type->id,
        ]);

        $type->name = $request->name;
        $type->save();

        return redirect()->route('other')->with('success', 'TYPE SUCCESSFULLY EDITED');
    }

    public function typeDelete($slug)
    {
        $type = Type::where('slug', $slug)->first();
        $services = Service::where('type_id', $type->id)->get();

        if ($services->count() > 0) {
            foreach ($services as $service) {
                $service->type_id = null;
                $service->save();
            }
        }

        $type->delete();

        return response()->json([
            'status' => 200,
        ]);
    }



    public function categoryAdd(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|unique:types,name',
        ]);

        $data = [
            'name' => $request->name
        ];

        Category::create($data);

        return redirect()->route('other')->with('success', 'ADD CATEGORY SUCCESS');
    }

    public function categoryEdit(Request $request, $slug)
    {
        $category = Category::where('slug', $slug)->first();
        $request->validate([
            'name' => 'required|unique:categories,name,'.$category->id,
        ]);

        $category->name = $request->name;
        $category->save();

        return redirect()->route('other')->with('success', 'TYPE SUCCESSFULLY EDITED');
    }

    public function categoryDelete($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $services = Service::where('category_id', $category->id)->get();

        if ($services->count() > 0) {
            foreach ($services as $service) {
                $service->type_id = null;
                $service->save();
            }
        }

        $category->delete();

        return response()->json([
            'status' => 200,
        ]);
    }




















    // SERVICE || SERVICE || SERVICE || SERVICE || SERVICE || SERVICE || SERVICE || SERVICE || SERVICE || SERVICE ||
    public function service(Request $request)
    {
        return view('');
    }
}
