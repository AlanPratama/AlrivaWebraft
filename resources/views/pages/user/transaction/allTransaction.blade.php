@extends('layouts.main')

@section('content')
    <div class="bg-gray-100 font-sans flex items-center justify-center" style="padding-top: 140px; padding-bottom: 20px;">
        <div x-data="{ openTab: 1 }" class="sm:px-8 px-4 w-full">
            <div class="w-full mx-auto">
                <div class="mb-4 flex sm:space-x-4 space-x-2 p-2 bg-white rounded-lg shadow-md">
                    <button x-on:click="openTab = 1" :class="{ 'bg-blue-600 text-white': openTab === 1 }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300"><span class="sm:inline-block hidden">Belum</span>
                        Bayar</button>
                    <button x-on:click="openTab = 2" :class="{ 'bg-blue-600 text-white': openTab === 2 }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Diproses</button>
                    <button x-on:click="openTab = 3" :class="{ 'bg-blue-600 text-white': openTab === 3 }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Diperiksa</button>
                    <button x-on:click="openTab = 4" :class="{ 'bg-blue-600 text-white': openTab === 4 }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Selesai</button>
                </div>

                <div x-show="openTab === 1"
                    class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 border-blue-600">
                    @if ($belum->count() > 0)
                        <div class="flex flex-wrap justify-center items-center gap-6">
                            @foreach ($belum as $blm)
                                <a href="{{ url('/transaksi/belum-bayar/' . $blm->code) }}" class="">
                                    <div class="max-w-md">
                                        <img src="{{ $blm->services->image_link == 'NO' ? asset($blm->services->image) : $blm->services->image }}"
                                            alt="" class="w-full rounded shadow">
                                        <div class="px-2 mt-2">
                                            <h2 style="font-size: 17px;" class="font-semibold mb-2 text-blue-600">
                                                {{ $blm->code }}</h2>
                                            <div class="flex justify-between items-start">
                                                <p>{{ $blm->date_start }}</p>
                                                <p>Rp {{ number_format($blm->total_price) }}K</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    @else
                        <div class="flex flex-wrap justify-center items-center gap-6">
                            <div class="max-w-md">
                                <img src="{{ asset('assets/data/no-data.jpg') }}" alt="" class="w-full rounded">
                                <div class="px-2 mt-2 flex flex-col justify-center items-center">
                                    <h2 style="font-size: 17px;" class="font-semibold mb-2 text-center text-blue-600">TIDAK
                                        ADA TRANSAKSI</h2>
                                    <a href="{{ url('/service') }}">
                                        <button
                                            class="bg-blue-500 text-white w-auto rounded shadow px-2 py-1 text-center">Cari
                                            Jasa</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <div x-show="openTab === 2"
                    class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 border-blue-600">
                    @if ($diproses->count() > 0)
                        <div class="flex flex-wrap justify-center items-center gap-6">
                            @foreach ($diproses as $proses)
                                <a href="{{ url('/transaksi/diproses/' . $proses->code) }}" class="">
                                    <div class="max-w-md">
                                        <img src="{{ $proses->services->image_link == 'NO' ? asset($proses->services->image) : $proses->services->image }}"
                                            alt="" class="w-full rounded shadow">
                                        <div class="px-2 mt-2">
                                            <h2 style="font-size: 16px;" class="font-semibold mb-2 text-blue-600">
                                                {{ $proses->code }}</h2>
                                            <div class="flex justify-between items-start">
                                                <p>{{ $proses->date_start }}</p>
                                                <p>Rp {{ number_format($proses->total_price) }}K</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    @else
                        <div class="flex flex-wrap justify-center items-center gap-6">
                            <div class="max-w-md">
                                <img src="{{ asset('assets/data/no-data.jpg') }}" alt="" class="w-full rounded">
                                <div class="px-2 mt-2 flex flex-col justify-center items-center">
                                    <h2 style="font-size: 16px;" class="font-semibold mb-2 text-center text-blue-600">TIDAK
                                        ADA TRANSAKSI DIPROSES</h2>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <div x-show="openTab === 3"
                    class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 border-blue-600">
                    @if ($diperiksa->count() > 0)
                        <div class="flex flex-wrap justify-center items-center gap-6">
                            @foreach ($diperiksa as $dprks)
                                <a href="{{ url('/transaksi/diperiksa/' . $dprks->code) }}" class="">
                                    <div class="max-w-md">
                                        <img src="{{ $dprks->services->image_link == 'NO' ? asset($dprks->services->image) : $dprks->services->image }}"
                                            alt="" class="w-full rounded shadow">
                                        <div class="px-2 mt-2">
                                            <h2 style="font-size: 16px;" class="font-semibold mb-2 text-blue-600">
                                                {{ $dprks->code }}</h2>
                                            <div class="flex justify-between items-start">
                                                <p>{{ $dprks->date_start }}</p>
                                                <p>Rp {{ number_format($dprks->total_price) }}K</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    @else
                        <div class="flex flex-wrap justify-center items-center gap-6">
                            <div class="max-w-md">
                                <img src="{{ asset('assets/data/no-data.jpg') }}" alt="" class="w-full rounded">
                                <div class="px-2 mt-2 flex flex-col justify-center items-center">
                                    <h2 style="font-size: 17px;" class="font-semibold mb-2 text-center text-blue-600">TIDAK
                                        ADA TRANSAKSI DIPERIKSA</h2>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <div x-show="openTab === 4"
                    class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 border-blue-600">
                    @if ($selesai->count() > 0)
                        <div class="flex flex-wrap justify-center items-center gap-6">
                            @foreach ($selesai as $sls)
                                <a href="{{ url('/transaksi/selesai/' . $sls->code) }}" class="">
                                    <div class="max-w-md">
                                        <img src="{{ $sls->services->image_link == 'NO' ? asset($sls->services->image) : $sls->services->image }}"
                                            alt="" class="w-full rounded shadow">
                                        <div class="px-2 mt-2">
                                            <h2 style="font-size: 16px;" class="font-semibold mb-2 text-blue-600">
                                                {{ $sls->code }}</h2>
                                            <div class="flex justify-between items-start">
                                                <p>{{ $sls->date_start }}</p>
                                                <p>Rp {{ number_format($sls->total_price) }}K</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    @else
                        <div class="flex flex-wrap justify-center items-center gap-6">
                            <div class="max-w-md">
                                <img src="{{ asset('assets/data/no-data.jpg') }}" alt="" class="w-full rounded">
                                <div class="px-2 mt-2 flex flex-col justify-center items-center">
                                    <h2 style="font-size: 17px;" class="font-semibold mb-2 text-center text-blue-600">TIDAK
                                        ADA TRANSAKSI SELESAI</h2>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
@endsection
