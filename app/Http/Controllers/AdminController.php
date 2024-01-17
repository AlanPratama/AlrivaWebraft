<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use App\Models\Transaction;
use App\Models\Type;
use App\Models\User;
use Carbon\Carbon;
use COM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        $services = Service::orderBy('sold', 'desc')->get();
        $profit = 0;
        $transactions = Transaction::where('status', '!=', 'Belum Bayar')->paginate(5);
        $countTransaction = Transaction::where('status', '!=', 'Belum Bayar')->get();

        foreach ($countTransaction as $item) {
            $profit += $item->total_price;
        }

        $user = User::where('role', '!=', 'Admin')->count();

        return view('pages.admin.dashboard', compact('services', 'countTransaction', 'profit', 'transactions', 'user'));
    }

    // BELUM BAYAR

    public function transactionBelum(Request $request)
    {
        if ($request->search) {
            $transactions = Transaction::where('status', 'Belum Bayar')
                ->orderBy('created_at', 'desc')
                ->where('code', 'like', '%' . $request->search . '%')
                ->get();
        } else {
            $transactions = Transaction::where('status', 'Belum Bayar')->orderBy('created_at', 'desc')->get();
        }

        return view('pages.admin.transactions.transactionBelum', compact('transactions'));
    }

    public function transactionToProses(Request $request, $code)
    {
        $transaction = Transaction::where('code', $code)->first();

        if ($transaction) {
            $transaction->estimation = $request->estimation;
            $transaction->status = 'Diproses';
            $transaction->save();

            return redirect()->route('adminTransactionBelum')->with('success', 'TRANSACTION ACTIVED');
        } else {
            return redirect()->back();
        }
    }


    // DIPROSES

    public function transactionDiproses(Request $request)
    {
        if ($request->search) {
            $transactions = Transaction::where('status', 'Diproses')
                ->orderBy('created_at', 'desc')
                ->where('code', 'like', '%' . $request->search . '%')
                ->get();
        } else {
            $transactions = Transaction::where('status', 'Diproses')->orderBy('created_at', 'desc')->get();
        }
        return view('pages.admin.transactions.transactionDiproses', compact('transactions'));
    }

    public function transactionToPeriksa(Request $request, $code)
    {
        $transaction = Transaction::where('code', $code)->where('status', 'Diproses')->first();

        if ($transaction) {
            $transaction->status = 'Diperiksa';
            $transaction->save();

            return redirect()->route('adminTransactionDiproses')->with('success', 'TRANSACTION STATUS CHANGED');
        } else {
            return redirect()->back();
        }
    }

    // DIPERIKSA
    public function transactionDiperiksa(Request $request)
    {
        if ($request->search) {
            $transactions = Transaction::where('status', 'Diperiksa')
                ->orderBy('created_at', 'desc')
                ->where('code', 'like', '%' . $request->search . '%')
                ->get();
        } else {
            $transactions = Transaction::where('status', 'Diperiksa')->orderBy('created_at', 'desc')->get();
        }
        return view('pages.admin.transactions.transactionDiperiksa', compact('transactions'));
    }

    public function transactionToSelesai(Request $request, $code)
    {
        $transaction = Transaction::where('code', $code)->where('status', 'Diperiksa')->first();

        if ($transaction) {
            $transaction->status = 'Selesai';
            $transaction->date_end = Carbon::now()->toDateString();
            $transaction->save();

            if (Auth::user()->role == 'Admin') {
                return redirect()->route('adminTransactionDiperiksa')->with('success', 'TRANSACTION STATUS CHANGED');
            } else {
                return redirect('/transaksi')->with('success', 'TERIMA KASIH SUDAH MENGGUNAKAN DAN PERCAYA PADA JASA KAMI');
            }
        } else {
            return redirect()->back();
        }
    }


    // SELESAI
    public function transactionSelesai(Request $request)
    {
        if ($request->search) {
            $transactions = Transaction::where('status', 'Selesai')
                ->orderBy('created_at', 'desc')
                ->where('code', 'like', '%' . $request->search . '%')
                ->get();
        } else {
            $transactions = Transaction::where('status', 'Selesai')->orderBy('created_at', 'desc')->get();
        }

        return view('pages.admin.transactions.transactionSelesai', compact('transactions'));
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
            'name' => 'required|unique:types,name,' . $type->id,
        ]);

        $type->name = $request->name;
        $type->slug = null;
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
            'name' => 'required|unique:categories,name,' . $category->id,
        ]);

        $category->name = $request->name;
        $category->slug = null;
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
        if ($request->filter) {
            if ($request->filter == 'terbanyak') {
                $services = Service::orderBy('type_id', 'desc')->get();
            } elseif ($request->filter == 'tersedikit') {
                $services = Service::orderBy('type_id', 'asc')->get();
            }
        } else {
            $services = Service::orderBy('type_id', 'desc')->get();
        }

        return view('pages.admin.services.service', compact('services'));
    }

    public function serviceCreateIndex()
    {
        $types = Type::all();
        $categories = Category::all();
        return view('pages.admin.services.createService', compact('types', 'categories'));
    }

    public function serviceCreate(Request $request)
    {
        $validate = $request->validate([
            'type_id' => 'required',
            'category_id' => 'required',
            'image' => 'required',
            'name' => 'required|unique:services,name',
            'estimation' => 'required',
            'description' => 'required',
            'price_before' => 'required',
            'price_after' => 'required',
        ]);

        $data = [
            'type_id' => $request->type_id,
            'category_id' => $request->category_id,
            'image' => $request->image,
            'image_link' => 'YES',
            'name' => $request->name,
            'estimation' => $request->estimation,
            'description' => $request->description,
            'price_before' => $request->price_before,
            'price_after' => $request->price_after,
            'sold' => 0,
            'status' => 'avalaible',
        ];

        Service::create($data);

        return redirect('/admin/service')->with('success', 'SERVICE SUCCESS TO CREATE');
    }


    public function serviceEditIndex($slug)
    {
        $service = Service::where('slug', $slug)->first();
        $types = Type::where('id', '!=', $service->id)->get();
        $categories = Category::where('id', '!=', $service->id)->get();

        return view('pages.admin.services.editService', compact('service', 'types', 'categories'));
    }

    public function serviceEdit(Request $request, $slug)
    {
        $service = Service::where('slug', $slug)->first();

        $validate = $request->validate([
            'type_id' => 'required',
            'category_id' => 'required',
            'image' => 'required',
            'name' => 'required|unique:services,name,' . $service->id,
            'estimation' => 'required',
            'description' => 'required',
            'price_before' => 'required',
            'price_after' => 'required',
        ]);

        $data = [
            'type_id' => $request->type_id,
            'category_id' => $request->category_id,
            'image' => $request->image,
            'name' => $request->name,
            'estimation' => $request->estimation,
            'description' => $request->description,
            'price_before' => $request->price_before,
            'price_after' => $request->price_after,
        ];

        $service->slug = null;
        $service->update($data);

        return redirect()->route('service')->with('success', 'EDIT SERVICE SUCCESS');
    }

    public function statusUpdateService($slug)
    {
        $service = Service::where('slug', $slug)->first();

        if ($service->status == 'avalaible') {
            $service->status = 'not avalaible';
            $service->save();
        } else {
            $service->status = 'avalaible';
            $service->save();
        }

        return redirect()->route('service')->with('success', 'STATUS UPDATED');
    }







    public function users()
    {
        $users = User::where('role', '!=', 'Admin')->get();

        return view('pages.admin.user', compact('users'));
    }


    public function editUser(Request $request, $slug)
    {
        $user = User::where('slug', $slug)->first();

        if ($user) {
            $data = $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'username' => 'required|unique:users,username,' . $user->id,
                'password' => '',
                'role' => 'required',
            ]);

            $user->slug = null;
            $user->update($data);

            return redirect()->route('adminUser')->with('success', 'USER INFORMATION SUCCES TO EDIT');
        } else {
            return redirect()->back();
        }
    }
}
