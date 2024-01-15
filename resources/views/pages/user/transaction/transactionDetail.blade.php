@extends('layouts.main')

@section('content')
<section class="text-gray-700 body-font overflow-hidden bg-white" style=" min-height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <div class="container px-5 py-24 mx-auto">
      <div class="lg:w-4/5 mx-auto flex flex-wrap">
        <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="{{ $service->image_link == 'NO' ? asset($service->image) : $service->image }}">
        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
          <h2 class="text-sm title-font text-gray-500 tracking-widest" style="font-size: 16px;">ALRIVA WEBCRAFT</h2>
          <h1 class="text-gray-900 text-3xl title-font font-medium mb-1" style="margin: 17px 0px; font-size: 30px;">{{ $service->name }}</h1>

          <!-- HOW TO BUY -->
<div class="flex items-start justify-start bg-white px-6">
    <div class="space-y-6 border-l-2 border-dashed">

      <div class="relative w-full">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="absolute -top-0.5 z-10 -ml-3.5 h-7 w-7 rounded-full text-blue-500">
          <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
        </svg>
        <div class="ml-6">
          <h4 style="font-size: 19px;" class="font-bold text-blue-500">SALIN KODE TRANSAKSI</h4>
          <p style="font-size: 16px;" class="mt-2 max-w-screen-sm text-gray-500">Salin Kode Transaksi dan Hubungi Admin Kami.</p>
          {{-- <span style="font-size: 16px;" class="mt-1 block font-semibold text-blue-500">(kode)</span> --}}
        </div>
      </div>

      <div class="relative w-full">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="absolute -top-0.5 z-10 -ml-3.5 h-7 w-7 rounded-full text-blue-500">
          <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
        </svg>
        <div class="ml-6">
          <h4 style="font-size: 19px;" class="font-bold text-blue-500">HUBUNGI ADMIN KAMI</h4>
          <p style="font-size: 16px;" class="mt-2 max-w-screen-sm text-gray-500">Hubungi Admin Kami dan Kirim Kode Transaksi, Lalu Lakukan Pembayaran Kepada Admin.</p>
          {{-- <button style="font-size: 14px;" class="px-2.5 py-1.5 rounded mt-1 block font-semibold text-white bg-green-500">(kode)</button> --}}
        </div>
      </div>

      <div class="relative w-full">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="absolute -top-0.5 z-10 -ml-3.5 h-7 w-7 rounded-full text-blue-500">
          <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
        </svg>
        <div class="ml-6">
          <h4 style="font-size: 19px;" class="font-bold text-blue-500">TUNGGU WEBSITE KAMU DIBUAT</h4>
          <p style="font-size: 16px;" class="mt-2 max-w-screen-sm text-gray-500">Setelah Melakukan Pembayaran, Admin Akan Mengubah Status Transaksi Menjadi Diproses dan Segera Membuat Website Sesuai Dengan Persetujuan.</p>
          {{-- <button style="font-size: 14px;" class="px-2.5 py-1.5 rounded mt-1 block font-semibold text-white bg-green-500">(kode)</button> --}}
        </div>
      </div>

    </div>
  </div>
          {{-- <p class="leading-relaxed " style="font-size: 20px;">{{ $service->description }}</p> --}}
          <form action="{{ route('transaction.start', ['slug' => $service->slug]) }}" method="post" class="border-t-2 border-gray-200 pt-2 mt-5 flex flex-col justify-center items-start">
            @csrf
            <div class="w-full my-4">
                <label for="message" style="font-size: 17px;" class="block font-medium leading-6 text-gray-900">Pesan / Message</label>
                <div class="relative mt-2 rounded-md shadow-sm">
                  <input type="text" name="message" id="message" style="font-size: 17px;" class="block w-full rounded-md border-0 py-1.5 pl-4 pr-20 text-gray-900 ring-2 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600" placeholder="Website nya yang keren ya...">
                </div>
              </div>
            <div class="flex justify-between items-center w-full">
                <span class="title-font font-semibold text-2xl text-gray-900" style="font-size: 22px; font-weight: bold; opacity: 0.92;">TOTAL: RP {{ number_format($service->price_after) }}K</span>
            <div class="flex items-center ">
                <a href="{{ url('/service/detail/'.$service->slug) }}">
                    <button type="button" style="color: #525DE0; border: 1px solid #525DE0; background-color: white;" class="flex ml-auto text-white border-0 py-2 px-6 focus:outline-none rounded">Cancel</button>
                </a>
                <button type="submit" style="background-color: #525DE0;" class="flex ml-4 text-white border-0 py-2 px-6 focus:outline-none rounded">Beli</button>
            </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
  @endsection
