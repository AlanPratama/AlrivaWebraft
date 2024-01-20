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

    public function allTransaction()
    {
        $belum = Transaction::where('status', 'Belum Bayar')->orderBy('created_at', 'desc')->where('user_id', Auth::user()->id)->get();
        $diproses = Transaction::where('status', 'Diproses')->orderBy('created_at', 'desc')->where('user_id', Auth::user()->id)->get();
        $diperiksa = Transaction::where('status', 'Diperiksa')->orderBy('created_at', 'desc')->where('user_id', Auth::user()->id)->get();
        $selesai = Transaction::where('status', 'Selesai')->orderBy('created_at', 'desc')->where('user_id', Auth::user()->id)->get();

        return view('pages.user.transaction.allTransaction', compact('belum', 'diproses', 'diperiksa', 'selesai'));
    }



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
        $service->sold += 1;
        $service->save();

        $data = [
            'code' =>  Str::random(10) . '-' . Auth::user()->slug,
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
        return redirect('/transaksi/belum-bayar/' . $data['code'])->with('success', 'BERHASIL MEMBUAT ORDER');
    }


    public function cancelTransaction($code)
    {
        $transaction = Transaction::where('code', $code)->first();
        $transaction->services->sold -= 1;
        $transaction->services->save();

        $transaction->delete();

        if (Auth::user()->role == 'Admin') {
            return redirect('/admin/transaction/belum-bayar')->with('success', 'TRANSACTION CANCELED SUCCESSFULLY');
        } else {
            return redirect('/transaksi')->with('success', 'TRANSAKSI TELAH DICANCEL');
        }
    }



    // INDEX FOR BELUM BAYAR
    public function transactionIndexBelum($code)
    {
        $transaction = Transaction::where('code', $code)->where('status', 'Belum Bayar')->first();

        if ($transaction) {
            if (Auth::user()->id == $transaction->user_id || Auth::user()->role == 'Admin') {
                return view('pages.user.transaction.belumBayar', compact('transaction'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    // INDEX FOR DIPROSES
    public function transactionIndexProses($code)
    {
        $transaction = Transaction::where('code', $code)->where('status', 'Diproses')->first();

        if ($transaction) {
            if (Auth::user()->id == $transaction->user_id || Auth::user()->role == 'Admin') {
                return view('pages.user.transaction.diproses', compact('transaction'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    // INDEX FOR DIPERIKSA
    public function transactionIndexPeriksa($code)
    {
        $transaction = Transaction::where('code', $code)->where('status', 'Diperiksa')->first();

        if ($transaction) {
            if (Auth::user()->id == $transaction->user_id || Auth::user()->role == 'Admin') {
                return view('pages.user.transaction.diperiksa', compact('transaction'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }


    // INDEX FOR SELESAI
    public function transactionIndexSelesai($code)
    {
        $transaction = Transaction::where('code', $code)->where('status', 'Selesai')->first();

        if ($transaction) {
            if (Auth::user()->id == $transaction->user_id || Auth::user()->role == 'Admin') {
                return view('pages.user.transaction.selesai', compact('transaction'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
}
