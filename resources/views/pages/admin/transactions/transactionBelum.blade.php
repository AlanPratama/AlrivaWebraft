@extends('layouts.admin')

@section('title', 'Belum Bayar')

@section('content')


    <div class="w-full">
        <form class="flex flex-column sm:flex-row flex-wrap p-2 space-y-4 sm:space-y-0 items-center justify-between pb-4">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="table-search-users" name="search"
                    class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search for transaction">
            </div>

        </form>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Service
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Buyer
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date Start
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Estimation
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if ($transactions->count() > 0)
                        @foreach ($transactions as $transaction)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    {{ $loop->iteration }}
                                </td>
                                <th scope="row"
                                    class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-12 rounded shadow border border-gray-300"
                                        src="{{ $transaction->services->image_link == 'NO' ? asset($transaction->services->image) : $transaction->services->image }}"
                                        alt="Jese image">
                                    <div class="ps-3">
                                        <div class="text-base font-semibold">{{ $transaction->code }}</div>
                                        <div class="font-normal text-gray-500">{{ $transaction->services->name }} -
                                            {{ $transaction->services->type->name }}</div>
                                    </div>
                                </th>
                                {{-- // image, Name & type, category, estimation, price_before, price_After, sold, description, status,  --}}

                                <td class="px-6 py-4">
                                    {{ $transaction->users->name }}
                                </td>

                                <td class="px-6 py-4">
                                    RP {{ number_format($transaction->total_price) }}K
                                </td>

                                <td class="px-6 py-4">
                                    {{ \Carbon\Carbon::parse($transaction->date_start)->format('d F Y') }}
                                </td>

                                <td class="px-6 py-4">
                                    -
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full bg-orange-500 me-2">
                                        </div> {{ $transaction->status }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex justify-center items-center ">
                                        <a href="{{ url('/transaksi/belum-bayar/' . $transaction->code) }}"
                                            class="font-medium w-auto">
                                            <i
                                                class="fa-solid fa-circle-info text-lg text-white bg-blue-500 py-1 px-1 rounded"></i>
                                        </a>
                                        <button data-modal-target="edit-modal-{{ $transaction->services->slug }}"
                                            data-modal-toggle="edit-modal-{{ $transaction->services->slug }}"
                                            class="font-medium w-auto" style="margin: 0px 1px;">
                                            <i
                                                class="fa-solid fa-pen-to-square text-lg text-white bg-green-500 py-1 px-1 rounded"></i>
                                        </button>

                                        <!-- Main modal -->
                                        <div id="edit-modal-{{ $transaction->services->slug }}" tabindex="-1"
                                            aria-hidden="true"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-md max-h-full">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <!-- Modal header -->
                                                    <div
                                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                            {{ $transaction->code }}
                                                        </h3>
                                                        <button type="button"
                                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                            data-modal-toggle="edit-modal-{{ $transaction->services->slug }}">
                                                            <svg class="w-3 h-3" aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 14 14">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="p-4 md:p-5">
                                                        <ul class="space-y-4 mb-4">
                                                            <li>
                                                                <div
                                                                    class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                                                    <button type="button" class="block"
                                                                        data-modal-target="update-status-{{ $transaction->code }}"
                                                                        data-modal-toggle="update-status-{{ $transaction->code }}">
                                                                        <div class="w-full text-lg font-semibold">UPDATE
                                                                            STATUS</div>
                                                                    </button>
                                                                    <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                                                                        aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 14 10">
                                                                        <path stroke="currentColor" stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                                                                    </svg>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{--  --}}

                                        <!-- Main modal -->
                                        <div id="update-status-{{ $transaction->code }}" tabindex="-1"
                                            aria-hidden="true"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-md max-h-full">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <!-- Modal header -->
                                                    <div
                                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                            {{ $transaction->code }}
                                                        </h3>
                                                        <button type="button"
                                                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                            data-modal-hide="update-status-{{ $transaction->code }}">
                                                            <svg class="w-3 h-3" aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 14 14">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="p-4 md:p-5">
                                                        <form class="space-y-4"
                                                            action="{{ route('transactionToProses', ['code' => $transaction->code]) }}"
                                                            method="post">
                                                            @csrf
                                                            <div>
                                                                <label for="estimation"
                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estimation</label>
                                                                <input type="date" name="estimation" id="estimation"
                                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                                    required>
                                                            </div>
                                                            <button type="submit"
                                                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{--  --}}

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                    @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection
