@extends('layouts.main')

@section('content')
    <div class="" style="margin-top: 130px;">
        <div class="w-full  my-4 border-b-2 pb-4">
            <div class="flex pb-3">
                <div class="flex-1">
                </div>

                <div class="flex-1">
                    <div class="w-10 h-10 bg-green-500 mx-auto rounded-full text-lg text-white flex items-center">
                        <span class="text-white text-center w-full"><ion-icon name="checkmark-done-outline" class="w-full"
                                style="font-size: 16px;"></ion-icon></span>
                    </div>
                </div>

                {{-- PANAH --}}
                <div class="w-1/6 align-center items-center align-middle content-center flex">
                    <div class="w-full bg-grey-light rounded items-center align-middle align-center flex-1">
                        <div class="bg-gray-500 text-xs leading-none py-1 text-center text-grey-darkest rounded "
                            style="width: 100%"></div>
                    </div>
                </div>


                <div class="flex-1">
                    <div class="w-10 h-10 bg-gray-500 text-white mx-auto rounded-full text-lg text-white flex items-center">
                        <span class="text-white text-center w-full"><ion-icon name="checkmark-done-outline" class="w-full"
                                style="font-size: 16px;"></ion-icon></span>
                    </div>
                </div>

                {{-- PANAH --}}
                <div class="w-1/6 align-center items-center align-middle content-center flex">
                    <div class="w-full bg-grey-light rounded items-center align-middle align-center flex-1">
                        <div class="bg-gray-500 text-xs leading-none py-1 text-center text-grey-darkest rounded "
                            style="width: 100%"></div>
                    </div>
                </div>

                <div class="flex-1">
                    <div class="w-10 h-10 bg-gray-500 text-white mx-auto rounded-full text-lg text-white flex items-center">
                        <span class="text-grey-darker text-center w-full"><ion-icon name="checkmark-done-outline"
                                class="w-full" style="font-size: 16px;"></ion-icon></span>
                    </div>
                </div>


                <div class="flex-1">
                </div>
            </div>

            <div style="font-size: 16px;" class="flex content-center text-center">
                <div class="w-1/3">
                    Belum Bayar
                </div>

                <div class="w-1/3">
                    Diproses
                </div>

                <div class="w-1/3">
                    Selesai
                </div>

            </div>
        </div>
    </div>


    <section class="text-gray-700 body-font overflow-hidden bg-white"
        style="  display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <div class="container px-5 mx-auto" style="padding: 40px 0px">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200"
                    src="{{ $transaction->services->image_link == 'NO' ? asset($transaction->services->image) : $transaction->services->image }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest" style="font-size: 16px;">{{ $transaction->status }}
                    </h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1"
                        style="margin: 17px 0px; font-size: 30px;">{{ $transaction->services->name }}</h1>


                    {{-- <p class="leading-relaxed " style="font-size: 20px;">{{ $transaction->services->description }}</p> --}}
                    <form action="{{ route('transaction.start', ['slug' => $transaction->services->slug]) }}" method="post"
                        class="border-t-2 border-gray-200 pt-2 mt-5 flex flex-col justify-center items-start">
                        @csrf
                        <div class="flex justify-between items-center w-full mt-4">
                            <span class="title-font font-semibold text-2xl text-gray-900"
                                style="font-size: 22px; font-weight: bold; opacity: 0.92;">TOTAL: RP
                                {{ number_format($transaction->services->price_after) }}K</span>
                            <div class="flex items-center ">
                                <a href="{{ url('/service/detail/' . $transaction->services->slug) }}">
                                    <button type="button"
                                        style="color: #525DE0; border: 1px solid #525DE0; background-color: white;"
                                        class="flex ml-auto text-white border-0 py-2 px-6 focus:outline-none rounded">Cancel</button>
                                </a>
                                <button type="submit" style="background-color: #525DE0;"
                                    class="flex ml-4 text-white border-0 py-2 px-6 focus:outline-none rounded">Beli</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>


        <div class="w-full flex justify-center items-center">
<!-- HOW TO BUY -->
<div style="width: 80%;" class="flex items-start justify-start bg-white px-6">
    <div class="space-y-6 border-l-2 border-dashed">

        <div class="relative w-full">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="absolute -top-0.5 -ml-3.5 h-7 w-7 rounded-full text-blue-500">
                <path fill-rule="evenodd"
                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                    clip-rule="evenodd" />
            </svg>
            <div class="ml-6">
                <h4 style="font-size: 19px;" class="font-bold text-blue-500">SALIN KODE TRANSAKSI</h4>
                <p style="font-size: 16px;" class="mt-2 max-w-screen-sm text-gray-500">Salin Kode
                    Transaksi dan Hubungi Admin Kami.</p>
                {{-- <span style="font-size: 16px;" class="mt-1 block font-semibold text-blue-500">(kode)</span> --}}
            </div>
        </div>

        <div class="relative w-full">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="absolute -top-0.5 -ml-3.5 h-7 w-7 rounded-full text-blue-500">
                <path fill-rule="evenodd"
                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                    clip-rule="evenodd" />
            </svg>
            <div class="ml-6">
                <h4 style="font-size: 19px;" class="font-bold text-blue-500">HUBUNGI ADMIN KAMI</h4>
                <p style="font-size: 16px;" class="mt-2 max-w-screen-sm text-gray-500">Hubungi Admin
                    Kami dan Kirim Kode Transaksi, Lalu Lakukan Pembayaran Kepada Admin.</p>
                {{-- <button style="font-size: 14px;" class="px-2.5 py-1.5 rounded mt-1 block font-semibold text-white bg-green-500">(kode)</button> --}}
            </div>
        </div>

        <div class="relative w-full">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="absolute -top-0.5 -ml-3.5 h-7 w-7 rounded-full text-blue-500">
                <path fill-rule="evenodd"
                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                    clip-rule="evenodd" />
            </svg>
            <div class="ml-6">
                <h4 style="font-size: 19px;" class="font-bold text-blue-500">TUNGGU WEBSITE KAMU DIBUAT
                </h4>
                <p style="font-size: 16px;" class="mt-2 max-w-screen-sm text-gray-500">Setelah Melakukan
                    Pembayaran, Admin Akan Mengubah Status Transaksi Menjadi Diproses dan Segera Membuat
                    Website Sesuai Dengan Persetujuan.</p>
                {{-- <button style="font-size: 14px;" class="px-2.5 py-1.5 rounded mt-1 block font-semibold text-white bg-green-500">(kode)</button> --}}
            </div>
        </div>

    </div>
</div>
        </div>
    </section>


@endsection
