<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class TransactionController extends Controller
{
    public function transactionCheckout(Request $request, $slug)
    {
        $service = Service::where('slug', $slug)->first();
        session()->put('service', $service);

        return redirect()->route('transaction.detail');
    }




    public function transactionDetail()
    {
        $service = session()->get('service');

        return view('pages.user.transaction.transactionDetail', compact('service'));
    }


    public function transactionStart(Request $request, $slug)
    {
        $service = Service::where('slug', $slug)->first();

        $data = [
            'code' =>  Str::random(5). '-' . Auth::user()->slug . '-' . Carbon::now()->toDateString(),
            'user_id' => Auth::user()->id,
            'service_id' => $service->id,
            'message' => $request->message,
            'total_price' => $service->price_after,
            'date_start' => Carbon::now()->toDateString(),
            // 'estimation' ,
            // 'actualDateEnd',
            'status' => 'Belum Bayar',
            // 'payment_image',
        ];

        Transaction::create($data);
        return redirect('/transaksi/belum-bayar/'.$data['code'])->with('success', 'BERHASIL MEMBUAT ORDER');
    }



    // INDEX FOR BELUM BAYAR
    public function transactionIndexBelum($code)
    {
        $transaction = Transaction::where('code', $code)->first();

        if ($transaction) {
            return view('pages.user.transaction.belumBayar', compact('transaction'));
        } else {
            return redirect()->back();
        }

    }

}
