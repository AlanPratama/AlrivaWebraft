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
                <div class="w-1/4">
                    Bayar
                </div>

                <div class="w-1/4">
                    Diproses
                </div>

                <div class="w-1/4">
                    Diperiksa
                </div>

                <div class="w-1/4">
                    Selesai
                </div>

            </div>
        </div>
    </div>


    <section class="text-gray-700 body-font overflow-hidden bg-white px-6" style="padding-bottom: 50px;"
        style="  display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <div class="container px-5 mx-auto" style="padding: 40px 0px">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200"
                    src="{{ $transaction->services->image_link == 'NO' ? asset($transaction->services->image) : $transaction->services->image }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest" style="font-size: 16px;">Status:
                        {{ $transaction->status }}
                    </h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1"
                        style="margin: 17px 0px; font-size: 27px;">{{ $transaction->code }}</h1>
                    <p style="font-size: 18px;"><span class="inline font-semibold">Pesan:</span> {{ $transaction->message }}
                    </p>
                    <p style="font-size: 18px;"><span class="inline font-semibold">Tanggal:</span>
                        {{ \Carbon\Carbon::parse($transaction->date_start)->format('d F Y') }}</p>
                    <p style="font-size: 18px;"><span class="inline font-semibold">Estimasi:</span> -</p>
                    <p style="font-size: 18px;"><span class="inline font-semibold">Tanggal Selesai:</span> -</p>

                    <div class="border-t-2 border-gray-200 pt-2 mt-5 flex flex-col justify-center items-start">
                        <div class="flex justify-between items-center w-full mt-4">
                            <span class="title-font font-semibold text-2xl text-gray-900"
                                style="font-size: 22px; font-weight: bold; opacity: 0.92;">TOTAL: RP
                                {{ number_format($transaction->services->price_after) }}K</span>
                            <div class="flex items-center gap-2">


                               <button type="button"
                                    style="color: #525DE0; border: 1px solid #525DE0; background-color: white;"
                                    class="flex ml-auto text-white border-0 py-2 px-6 focus:outline-none rounded"
                                    onclick="openModalCancel()">Cancel</button>


                                    <div class="main-modal-cancel fixed w-full p-8 h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
                                        style="background: rgba(0,0,0,.7);">
                                        <div
                                            class="border border-teal-500 shadow-lg modal-container bg-white md:w-1/2  w-full mx-auto rounded shadow-lg z-50 overflow-y-auto">
                                            <div class="modal-content py-4 text-left px-6">
                                                <!--Title-->
                                                <div class="flex justify-between items-center pb-3">
                                                    <p class="text-2xl font-bold">Menu</p>
                                                    <div class="modal-close-cancel cursor-pointer z-50">
                                                        <svg class="fill-current text-black"
                                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                            viewBox="0 0 18 18">
                                                            <path
                                                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <!--Body-->
                                                <div class="my-5">
                                                    <h3>APAKAH KAMU YAKIN? TRANSAKSI AKAN DIHAPUS...</h3>
                                                    <form action="/cancelTransaction/{{$transaction->code}}" method="post" class="flex flex-wrap justify-start items-start gap-4">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="button"
                                                            style="text-align: center !important; color: #525DE0; border: 1px solid #525DE0; background-color: #fff;" onclick="modalCloseCancel()"
                                                            class="flex w-auto mt-4 text-white border-0 py-2 px-6 focus:outline-none rounded">Tidak</button>
                                                        <button type="submit"
                                                            style="text-align: center !important; color: white; border: 1px solid #525DE0; background-color: #525DE0;"
                                                            class="flex w-auto mt-4 text-white border-0 py-2 px-6 focus:outline-none rounded">Cancel</button>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        const modalCancel = document.querySelector('.main-modal-cancel');
                                        const closeButtonCancel = document.querySelectorAll('.modal-close-cancel');

                                        const modalCloseCancel = () => {
                                            modalCancel.classList.remove('fadeIn');
                                            modalCancel.classList.add('fadeOut');
                                            setTimeout(() => {
                                                modalCancel.style.display = 'none';
                                            }, 500);
                                        }

                                        const openModalCancel = () => {
                                            modalCancel.classList.remove('fadeOut');
                                            modalCancel.classList.add('fadeIn');
                                            modalCancel.style.display = 'flex';
                                        }

                                        for (let i = 0; i < closeButtonCancel.length; i++) {

                                            const elementsProses = closeButtonCancel[i];

                                            elementsProses.onclick = (e) => modalCloseCancel();

                                            modalCancel.style.display = 'none';

                                            window.onclick = function(event) {
                                                if (event.target == modalCancel) modalCloseCancel();
                                            }
                                        }
                                    </script>
                                {{-- <button type="button"
                                    style="color: #525DE0; border: 1px solid #525DE0; background-color: white;"
                                    class="flex ml-auto text-white border-0 py-2 px-6 focus:outline-none rounded"
                                    onclick="event.preventDefault(); cancelTransaction('{{ $transaction->code }}');">Cancel</button>

                                <script>
                                    function cancelTransaction(transaction) {
                                        Swal.fire({
                                            title: 'Apakah Anda yakin ?',
                                            text: 'Anda tidak dapat mengembalikan ini!',
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonText: 'Hapus',
                                            confirmButtonColor: '#ff3d41',
                                            cancelButtonText: 'Batal',
                                            cancelButtonColor: '#8fcc34',
                                        }).then((result) => {
                                            if (result.isConfirmed || result.status == 200) {
                                                axios.delete(`/cancelTransaction/${transaction}`)
                                                    .then(response => {
                                                        let timerInterval;
                                                        Swal.fire({
                                                            title: "BERHASIL!",
                                                            html: "TRANSACTION DIBATALKAN!",
                                                            timer: 1000,
                                                            icon: 'success',
                                                            timerProgressBar: true,
                                                            didOpen: () => {
                                                                Swal.showLoading();
                                                                const timer = Swal.getPopup().querySelector("b");
                                                                timerInterval = setInterval(() => {
                                                                    timer.textContent = `${Swal.getTimerLeft()}`;
                                                                }, 100);
                                                            },
                                                            willClose: () => {
                                                                clearInterval(timerInterval);
                                                            }
                                                        }).then((result) => {
                                                            if (result.dismiss === Swal.DismissReason.timer) {
                                                                window.location.href = '/service';
                                                            }
                                                            window.location.href = '/service';
                                                        });
                                                    })
                                                    .catch(error => {
                                                        console.error(error);
                                                        window.location.reload(true);

                                                    });
                                            }
                                        });
                                    }
                                </script> --}}

                                @if (Auth::user()->role == 'Admin')
                                    <button type="button"
                                        style="color: white; border: 1px solid #525DE0; background-color: #525DE0;"
                                        class="flex ml-auto text-white border-0 py-2 px-6 focus:outline-none rounded"
                                        onclick="openModalProses()">Diproses</button>


                                    <div class="main-modal-proses fixed w-full p-8 h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
                                        style="background: rgba(0,0,0,.7);">
                                        <div
                                            class="border border-teal-500 shadow-lg modal-container bg-white md:w-1/2  w-full mx-auto rounded shadow-lg z-50 overflow-y-auto">
                                            <div class="modal-content py-4 text-left px-6">
                                                <!--Title-->
                                                <div class="flex justify-between items-center pb-3">
                                                    <p class="text-2xl font-bold">Menu</p>
                                                    <div class="modal-close-proses cursor-pointer z-50">
                                                        <svg class="fill-current text-black"
                                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                            viewBox="0 0 18 18">
                                                            <path
                                                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <!--Body-->
                                                <div class="my-5">
                                                    <form action="{{ route('transactionToProses', ['code' => $transaction->code]) }}" method="post" class="flex flex-col flex-wrap justify-start items-start gap-4">
                                                        @csrf
                                                        <label for="estimation" style="font-size: 17px;"
                                                            class="block font-medium leading-6 text-gray-900">Estimation</label>
                                                        <input type="date" name="estimation" id="estimation"
                                                            style="font-size: 17px;"
                                                            class="block w-full rounded-md border-0 py-1.5 pl-4 pr-20 text-gray-900 ring-2 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                                                        <button type="submit"
                                                            style="text-align: center !important; color: white; border: 1px solid #525DE0; background-color: #525DE0;"
                                                            class="flex w-auto mt-4 text-white border-0 py-2 px-6 focus:outline-none rounded">Submit</button>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        const modalProses = document.querySelector('.main-modal-proses');
                                        const closeButtonProses = document.querySelectorAll('.modal-close-proses');

                                        const modalCloseProses = () => {
                                            modalProses.classList.remove('fadeIn');
                                            modalProses.classList.add('fadeOut');
                                            setTimeout(() => {
                                                modalProses.style.display = 'none';
                                            }, 500);
                                        }

                                        const openModalProses = () => {
                                            modalProses.classList.remove('fadeOut');
                                            modalProses.classList.add('fadeIn');
                                            modalProses.style.display = 'flex';
                                        }

                                        for (let i = 0; i < closeButtonProses.length; i++) {

                                            const elementsProses = closeButtonProses[i];

                                            elementsProses.onclick = (e) => modalCloseProses();

                                            modalProses.style.display = 'none';

                                            window.onclick = function(event) {
                                                if (event.target == modalProses) modalCloseProses();
                                            }
                                        }
                                    </script>
                                @endif

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="w-full flex justify-center items-center">
            <!-- HOW TO BUY -->
            <div class="pembayaran flex items-start justify-start bg-white px-6">
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
                            <p style="width: 70% !important; font-size: 16px;"
                                class="mt-2 shadow max-w-screen-sm text-white bg-blue-500 w-auto px-2 py-1 rounded">
                                {{ $transaction->code }}</p>
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
                            <a href="{{ url('https://wa.me/+6285817000942?text=Hallo%20Kak!%20Saya%20Sudah%20Membuat%20Order%20di%20Alriva%20WebCraft.%20Ini%20Kode%20Transaksi-nya:%20'.$transaction->code) }}">
                                <button style="width: auto !important; font-size: 16px;"
                                    class="mt-2 shadow max-w-screen-sm text-white bg-green-500 w-auto px-2 py-1 rounded">Hubungi
                                    Admin</button>
                            </a>
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

                    <div class="relative w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="absolute -top-0.5 -ml-3.5 h-7 w-7 rounded-full text-blue-500">
                            <path fill-rule="evenodd"
                                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="ml-6">
                            <h4 style="font-size: 19px;" class="font-bold text-blue-500">PERIKSA WEBSITE YANG TELAH DIBUAT
                            </h4>
                            <p style="font-size: 16px;" class="mt-2 max-w-screen-sm text-gray-500">Setelah Kami Membuat Website-nya, Kamu Akan Diminta Mengecek Website Yang Telah Kami Buat.</p>
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
                            <h4 style="font-size: 19px;" class="font-bold text-blue-500">SELESAI
                            </h4>
                            <p style="font-size: 16px;" class="mt-2 max-w-screen-sm text-gray-500">Setelah Kamu Mengecek Website Yang Telah Dibuat Selamat! Kamu Sudah Memiliki Website Keren Dengan Harga Terjangkau.</p>
                            {{-- <button style="font-size: 14px;" class="px-2.5 py-1.5 rounded mt-1 block font-semibold text-white bg-green-500">(kode)</button> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
