@extends('layouts.admin')

@section('title', 'Diproses')

@section('content')


    <div class="w-full">
        <div class="flex flex-column sm:flex-row flex-wrap p-2 space-y-4 sm:space-y-0 items-center justify-between pb-4">
            <form>
                <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio"
                    class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                    type="button">
                    <i class="fa-solid fa-sort w-3 h-3 text-gray-500 dark:text-gray-400 me-3"></i>
                    FILTER
                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownRadio"
                    class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                    <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200"
                        aria-labelledby="dropdownRadioButton">

                        <li>
                            <button type="submit" name="filter" value="terbanyak"
                                class="w-full text-start flex items-center p-1 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                Terbanyak
                            </button>
                        </li>

                        <li>
                            <button type="submit" name="filter" value="tersedikit"
                                class="w-full text-start flex items-center p-1 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                Tersedikit
                            </button>
                        </li>



                    </ul>
                </div>
            </form>
            <button type="button"
                class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded text-sm px-2.5 py-1.5 text-center"
                data-modal-target="type-add-modal" data-modal-toggle="type-add-modal">+ ADD SERVICE</button>

        </div>
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
                                        <div class="font-normal text-gray-500">{{ $transaction->services->name }} - {{ $transaction->services->type->name }}</div>
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
                                    {{ $transaction->estimation }}
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div
                                            class="h-2.5 w-2.5 rounded-full bg-blue-500 me-2">
                                        </div> {{ $transaction->status }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex justify-center items-center ">
                                        <a href="{{ url('/transaksi/belum-bayar/'.$transaction->code) }}" class="font-medium w-auto">
                                            <i
                                                class="fa-solid fa-circle-info text-lg text-white bg-blue-500 py-1 px-1 rounded"></i>
                                        </a>
                                        <button data-modal-target="edit-modal-{{ $transaction->services->slug }}" data-modal-toggle="edit-modal-{{ $transaction->services->slug }}"
                                            class="font-medium w-auto" style="margin: 0px 1px;">
                                            <i
                                                class="fa-solid fa-pen-to-square text-lg text-white bg-green-500 py-1 px-1 rounded"></i>
                                        </button>

                                        <!-- Main modal -->
                                        <div id="edit-modal-{{ $transaction->services->slug }}" tabindex="-1" aria-hidden="true"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-md max-h-full">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <!-- Modal header -->
                                                    <div
                                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                            {{ $transaction->services->name }}
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
                                                        <p class="text-gray-500 dark:text-gray-400 mb-4">What do you want to do?</p>
                                                        <ul class="space-y-4 mb-4">
                                                            <li>
                                                                <a href="{{ url('/admin/service/edit/' . $transaction->services->slug) }}"
                                                                    class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                                                    <div class="block">
                                                                        <div class="w-full text-lg font-semibold">EDIT INFORMATION</div>
                                                                        <div
                                                                            class="w-full text-gray-500 dark:text-gray-400">
                                                                            REDIRECT TO EDIT PAGE</div>
                                                                    </div>
                                                                    <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                                                                        aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 14 10">
                                                                        <path stroke="currentColor" stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <form action="{{ route('statusUpdateService', ['slug' => $transaction->services->slug]) }}" method="post"
                                                                    class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                                                    @csrf
                                                                    @method('put')
                                                                    <button type="submit" class="block">
                                                                        <div class="w-full text-lg font-semibold">UPDATE STATUS</div>
                                                                        <div
                                                                            class="w-full text-gray-500 dark:text-gray-400">
                                                                            {{ $transaction->services->status == 'avalaible' ? 'avalaible' : 'not avalaible' }} => {{ $transaction->services->status != 'avalaible' ? 'avalaible' : 'not avalaible' }}</div>
                                                                    </button>
                                                                    <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                                                                        aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 14 10">
                                                                        <path stroke="currentColor" stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                                                                    </svg>
                                                                </form>
                                                            </li>
                                                        </ul>
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
