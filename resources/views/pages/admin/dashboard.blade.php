@extends('layouts.admin')

@section('title', 'Dashboard')


@section('content')
{{-- TOTAL SERVICES | TOTAL TRANSACTIONS | PROFIT --}}


    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>

    <style>
        @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
        @import url(https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css);
    </style>

    <div class="w-full grid lg:grid-cols-3 grid-cols-1  gap-2 mb-4">
        <a href="{{ url('daftar-user') }}"
            class="flex justify-between items-center text-white border border-gray-200 rounded-lg shadow md:flex-row lg:max-w-xl bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300">
            <div class="flex justify-between items-center p-4 leading-normal ">
                <div class="text-left">
                    <p class="text-3xl pl-4">
                        {{ $countTransaction->count() }}
                    </p>
                    <h5 class=" mb-2 text-xl font-bold tracking-tight ">Total Transactions</h5>
                </div>

            </div>
            <div class="icon flex justify-between items-center p-4 leading-normal">
                <i class="fa-solid fa-users text-2xl"></i>
            </div>
        </a>
        <a href="{{ url('daftar-user') }}"
            class="flex justify-between items-center text-white border border-gray-200 rounded-lg shadow md:flex-row lg:max-w-xl bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300">
            <div class="flex justify-between items-center p-4 leading-normal ">
                <div class="text-left">
                    <p class="text-3xl pl-4">
                        RP {{ number_format($profit) }}K
                    </p>
                    <h5 class=" mb-2 text-xl font-bold tracking-tight ">Total Profit</h5>
                </div>

            </div>
            <div class="icon flex justify-between items-center p-4 leading-normal">
                <i class="fa-solid fa-users text-2xl"></i>
            </div>
        </a>
        <a href="{{ url('daftar-user') }}"
            class="flex justify-between items-center text-white border border-gray-200 rounded-lg shadow md:flex-row lg:max-w-xl bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300">
            <div class="flex justify-between items-center p-4 leading-normal ">
                <div class="text-left">
                    <p class="text-3xl pl-4">
                        {{ $user }}
                    </p>
                    <h5 class=" mb-2 text-xl font-bold tracking-tight ">Total User</h5>
                </div>

            </div>
            <div class="icon flex justify-between items-center p-4 leading-normal">
                <i class="fa-solid fa-users text-2xl"></i>
            </div>
        </a>
    </div>


    <div class="w-full grid lg:grid-cols-3 grid-cols-1  gap-2 mb-4">
        <a href="{{ url('daftar-user') }}"
            class="flex justify-between items-center text-white border border-gray-200 rounded-lg shadow md:flex-row lg:max-w-xl bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300">
            <div class="flex justify-between items-center p-4 leading-normal ">
                <div class="text-left">
                    <p class="text-3xl pl-4">
                        RP {{ number_format($thisWeek) }}K
                    </p>
                    <h5 class=" mb-2 text-xl font-bold tracking-tight ">Profit Minggu Ini</h5>
                </div>

            </div>
            <div class="icon flex justify-between items-center p-4 leading-normal">
                <i class="fa-solid fa-users text-2xl"></i>
            </div>
        </a>
        <a href="{{ url('daftar-user') }}"
            class="flex justify-between items-center text-white border border-gray-200 rounded-lg shadow md:flex-row lg:max-w-xl bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300">
            <div class="flex justify-between items-center p-4 leading-normal ">
                <div class="text-left">
                    <p class="text-3xl pl-4">
                        RP {{ number_format($thisMonth) }}K
                    </p>
                    <h5 class=" mb-2 text-xl font-bold tracking-tight ">Profit Bulan Ini</h5>
                </div>

            </div>
            <div class="icon flex justify-between items-center p-4 leading-normal">
                <i class="fa-solid fa-users text-2xl"></i>
            </div>
        </a>
        <a href="{{ url('daftar-user') }}"
            class="flex justify-between items-center text-white border border-gray-200 rounded-lg shadow md:flex-row lg:max-w-xl bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300">
            <div class="flex justify-between items-center p-4 leading-normal ">
                <div class="text-left">
                    <p class="text-3xl pl-4">
                        RP {{ number_format($thisYear) }}K
                    </p>
                    <h5 class=" mb-2 text-xl font-bold tracking-tight ">Profit Tahun Ini</h5>
                </div>

            </div>
            <div class="icon flex justify-between items-center p-4 leading-normal">
                <i class="fa-solid fa-users text-2xl"></i>
            </div>
        </a>
    </div>



    <div class="w-full flex justify-between items-center  gap-2 mb-4">
        <div
            class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-white dark:border-gray-700">
            <div class="flex items-center justify-between mb-4">
                <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Latest Transaction</h5>
                <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                    View all
                </a>
            </div>
            <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($transactions as $item)
                    <li class="py-3 sm:py-4">

                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="w-8 rounded shadow" src="{{ $item->services->image_link == 'NO' ? asset($item->services->image) : $item->services->image }}"
                                    alt="Neil image">
                            </div>
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    {{ $item->code }}
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    {{ $item->users->name }}
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                Rp {{ number_format($item->total_price) }}K
                            </div>
                        </div>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>





        <div class="w-full bg-white flex items-center justify-center px-5 py-5">
            <div class="bg-white text-gray-500 rounded shadow-xl py-5 px-5 w-full lg:w-1/2" x-data="{ chartData: chartData() }"
                x-init="chartData.fetch()">
                <div class="flex flex-wrap items-end">
                    <div class="flex-1">
                        <h3 class="text-lg font-semibold leading-tight">Income</h3>
                    </div>
                    <div class="relative" @click.away="chartData.showDropdown=false">
                        <button class="text-xs hover:text-gray-300 h-6 focus:outline-none"
                            @click="chartData.showDropdown=!chartData.showDropdown">
                            <span x-text="chartData.options[chartData.selectedOption].label"></span><i
                                class="ml-1 mdi mdi-chevron-down"></i>
                        </button>
                        <div class="bg-white shadow-lg rounded text-sm absolute top-auto right-0 min-w-full w-32 z-30 mt-1 -mr-3"
                            x-show="chartData.showDropdown" style="display: none;"
                            x-transition:enter="transition ease duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease duration-300 transform"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-4">
                            <span class="absolute top-0 right-0 w-3 h-3 bg-white transform rotate-45 -mt-1 mr-3"></span>
                            <div class="bg-white rounded w-full relative z-10 py-1">
                                <ul class="list-reset text-xs">
                                    <template x-for="(item,index) in chartData.options">
                                        <li class="px-4 py-2 hover:bg-white hover:text-white transition-colors duration-100 cursor-pointer"
                                            :class="{ 'text-white': index == chartData.selectedOption }"
                                            @click="chartData.selectOption(index);chartData.showDropdown=false">
                                            <span x-text="item.label"></span>
                                        </li>
                                    </template>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap items-end mb-5">
                    <h4 class="text-2xl lg:text-3xl text-white font-semibold leading-tight inline-block mr-2"
                        x-text="'$'+(chartData.data?chartData.data[chartData.date].total.comma_formatter():0)">0</h4>
                    <span class="inline-block"
                        :class="chartData.data && chartData.data[chartData.date].upDown < 0 ? 'text-red-500' : 'text-green-500'"><span
                            x-text="chartData.data&&chartData.data[chartData.date].upDown<0?'▼':'▲'">0</span> <span
                            x-text="chartData.data?chartData.data[chartData.date].upDown:0">0</span>%</span>
                </div>
                <div>
                    <canvas id="chart" class="w-full"></canvas>
                </div>
            </div>
        </div>

    </div>




<div class="w-full relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4">
                    No.
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Estimation
                </th>
                <th scope="col" class="px-6 py-3">
                    Price Before
                </th>
                <th scope="col" class="px-6 py-3">
                    Price After
                </th>
                <th scope="col" class="px-6 py-3">
                    Sold
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
            @if ($services->count() > 0)
                @foreach ($services as $service)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            1
                        </td>
                        <th scope="row"
                            class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="w-12 rounded shadow border border-gray-300"
                                src="{{ $service->image_link == 'NO' ? asset($service->image) : $service->image }}"
                                alt="Jese image">
                            <div class="ps-3">
                                <div class="text-base font-semibold">{{ $service->name }}</div>
                                <div class="font-normal text-gray-500">{{ $service->type->name }} - {{ $service->category->name }}</div>
                            </div>
                        </th>
                        {{-- // image, Name & type, category, estimation, price_before, price_After, sold, description, status,  --}}

                        <td class="px-6 py-4">
                            {{ $service->estimation }} Day
                        </td>

                        <td class="px-6 py-4">
                            RP {{ number_format($service->price_before) }}K
                        </td>

                        <td class="px-6 py-4">
                            RP {{ number_format($service->price_after) }}K
                        </td>

                        <td class="px-6 py-4">
                            {{ $service->sold }}
                        </td>

                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div
                                    class="h-2.5 w-2.5 rounded-full bg-{{ $service->status == 'avalaible' ? 'green' : 'red' }}-500 me-2">
                                </div> {{ $service->status }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex justify-center items-center ">
                                <a href="{{ url('/') }}" class="font-medium w-auto">
                                    <i
                                        class="fa-solid fa-circle-info text-lg text-white bg-blue-500 py-1 px-1 rounded"></i>
                                </a>
                                <button data-modal-target="edit-modal-{{ $service->slug }}" data-modal-toggle="edit-modal-{{ $service->slug }}"
                                    class="font-medium w-auto" style="margin: 0px 1px;">
                                    <i
                                        class="fa-solid fa-pen-to-square text-lg text-white bg-green-500 py-1 px-1 rounded"></i>
                                </button>

                                <!-- Main modal -->
                                <div id="edit-modal-{{ $service->slug }}" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                    {{ $service->name }}
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-toggle="edit-modal-{{ $service->slug }}">
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
                                                        <a href="{{ url('/admin/service/edit/' . $service->slug) }}"
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
                                                        <form action="{{ route('statusUpdateService', ['slug' => $service->slug]) }}" method="post"
                                                            class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                                            @csrf
                                                            @method('put')
                                                            <button type="submit" class="block">
                                                                <div class="w-full text-lg font-semibold">UPDATE STATUS</div>
                                                                <div
                                                                    class="w-full text-gray-500 dark:text-gray-400">
                                                                    {{ $service->status == 'avalaible' ? 'avalaible' : 'not avalaible' }} => {{ $service->status != 'avalaible' ? 'avalaible' : 'not avalaible' }}</div>
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

                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
            @endif
        </tbody>
    </table>
</div>




    <script>
        Number.prototype.comma_formatter = function() {
            return this.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
        }

        let chartData = function() {
            return {
                date: 'today',
                options: [{
                        label: 'Today',
                        value: 'today',
                    },
                    {
                        label: 'Last 7 Days',
                        value: '7days',
                    },
                    {
                        label: 'Last 30 Days',
                        value: '30days',
                    },
                    {
                        label: 'Last 6 Months',
                        value: '6months',
                    },
                    {
                        label: 'This Year',
                        value: 'year',
                    },
                ],
                showDropdown: false,
                selectedOption: 0,
                selectOption: function(index) {
                    this.selectedOption = index;
                    this.date = this.options[index].value;
                    this.renderChart();
                },
                data: null,
                fetch: function() {
                    fetch('https://cdn.jsdelivr.net/gh/swindon/fake-api@master/tailwindAlpineJsChartJsEx1.json')
                        .then(res => res.json())
                        .then(res => {
                            this.data = res.dates;
                            this.renderChart();
                        })
                },
                renderChart: function() {
                    let c = false;

                    Chart.helpers.each(Chart.instances, function(instance) {
                        if (instance.chart.canvas.id == 'chart') {
                            c = instance;
                        }
                    });

                    if (c) {
                        c.destroy();
                    }

                    let ctx = document.getElementById('chart').getContext('2d');

                    let chart = new Chart(ctx, {
                        type: "line",
                        data: {
                            labels: this.data[this.date].data.labels,
                            datasets: [{
                                    label: "Income",
                                    backgroundColor: "rgba(102, 126, 234, 0.25)",
                                    borderColor: "rgba(102, 126, 234, 1)",
                                    pointBackgroundColor: "rgba(102, 126, 234, 1)",
                                    data: this.data[this.date].data.income,
                                },
                                {
                                    label: "Expenses",
                                    backgroundColor: "rgba(237, 100, 166, 0.25)",
                                    borderColor: "rgba(237, 100, 166, 1)",
                                    pointBackgroundColor: "rgba(237, 100, 166, 1)",
                                    data: this.data[this.date].data.expenses,
                                },
                            ],
                        },
                        layout: {
                            padding: {
                                right: 10
                            }
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    gridLines: {
                                        display: false
                                    },
                                    ticks: {
                                        callback: function(value, index, array) {
                                            return value > 1000 ? ((value < 1000000) ? value /
                                                1000 + 'K' : value / 1000000 + 'M') : value;
                                        }
                                    }
                                }]
                            }
                        }
                    });
                }
            }
        }
    </script>
@endsection
