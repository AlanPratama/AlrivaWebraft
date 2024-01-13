@extends('layouts.admin')

@section('title', 'Other')


@section('content')
    <div class="w-full grid lg:grid-cols-2 grid-cols-1  gap-2 mb-4">

        <div class="sm:rounded-lg">
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
                    data-modal-target="type-add-modal" data-modal-toggle="type-add-modal">+ ADD TYPE</button>
                <!-- Main modal -->
                <div id="type-add-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div
                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    ADD TYPE
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="type-add-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <form class="p-4 md:p-5" method="post" action="{{ route('typeAdd') }}">
                                @csrf
                                <div class="grid gap-4 mb-4 grid-cols-2">
                                    <div class="col-span-2">
                                        <label for="name" style="text-align: start !important;"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name
                                            Type</label>
                                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="TYPE NAME" required="">
                                    </div>
                                </div>
                                <button type="submit"
                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    SUBMIT
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="relative overflow-x-auto shadow-md">

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="p-4">
                                No.
                            </th>
                            <th scope="col" class="px-6 py-3">
                                TYPE NAME
                            </th>
                            <th scope="col" class="px-6 py-3">
                                SERVICES
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($types->count() > 0)
                            @foreach ($types as $type)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="w-4 p-4">
                                        {{ $loop->iteration }}
                                    </td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $type->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $type->service->count() }}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <a href="{{ url('/') }}" class="font-medium w-auto">
                                            <i
                                                class="fa-solid fa-circle-info text-lg text-white bg-blue-500 py-1 px-1 rounded"></i>
                                        </a>

                                        <button type="button" data-modal-target="type-modal-{{ $type->name }}"
                                            data-modal-toggle="type-modal-{{ $type->name }}" class="font-medium w-auto"
                                            style="margin: 0px 1px;">
                                            <i
                                                class="fa-solid fa-pen-to-square text-lg text-white bg-green-500 py-1 px-1 rounded"></i>
                                        </button>

                                        <!-- Main modal -->
                                        <div id="type-modal-{{ $type->name }}" tabindex="-1" aria-hidden="true"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-md max-h-full">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <!-- Modal header -->
                                                    <div
                                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                            Edit - Type
                                                        </h3>
                                                        <button type="button"
                                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                            data-modal-toggle="type-modal-{{ $type->name }}">
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
                                                    <form class="p-4 md:p-5" method="post"
                                                        action="{{ route('typeEdit', ['slug' => $type->slug]) }}">
                                                        @csrf
                                                        <div class="grid gap-4 mb-4 grid-cols-2">
                                                            <div class="col-span-2">
                                                                <label for="name"
                                                                    style="text-align: start !important;"
                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name
                                                                    Type</label>
                                                                <input type="text" name="name" id="name"
                                                                    value="{{ $type->name }}"
                                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                    placeholder="TYPE NAME" required="">
                                                            </div>
                                                        </div>
                                                        <button type="submit"
                                                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                            SUBMIT
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        <button type="button" class="font-medium w-auto"
                                            onclick="event.preventDefault(); deleteType('{{ $type->slug }}');">
                                            <i
                                                class="fa-solid fa-trash-can text-lg text-white bg-red-500 py-1 px-1 rounded"></i>
                                        </button>

                                        <script>
                                            function deleteType(slug) {
                                                Swal.fire({
                                                    title: 'Are You Sure?',
                                                    text: 'You Cannot Take It Back!',
                                                    icon: 'warning',
                                                    showCancelButton: true,
                                                    confirmButtonText: 'Delete',
                                                    confirmButtonColor: '#ff3d41',
                                                    cancelButtonText: 'Cancel',
                                                    cancelButtonColor: '#8fcc34',
                                                }).then((result) => {
                                                    if (result.isConfirmed || result.status == 200) {
                                                        axios.delete(`other.type.delete.${slug}`)
                                                            .then(response => {
                                                                let timerInterval;
                                                                Swal.fire({
                                                                    title: "SUCCESS!",
                                                                    html: "TYPE DELETED!",
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
                                                                        window.location.reload(true);
                                                                    }
                                                                    window.location.reload(true);
                                                                });
                                                            })
                                                            .catch(error => {
                                                                console.error(error);
                                                                window.location.reload(true);

                                                            });
                                                    }
                                                });
                                            }
                                        </script>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="">
                                <td colspan="4" class="">
                                    <div class="flex flex-col justify-center items-center pb-1">
                                        <img src="{{ asset('assets/data/no-data.jpg') }}" alt="no-data" class="w-48">
                                        <p>TIDAK ADA DATA</p>
                                    </div>
                                </td>
                            </tr>
                        @endif


                    </tbody>
                </table>
            </div>
        </div>


        <div class="shadow-md sm:rounded-lg">
            <div
                class="flex flex-column sm:flex-row flex-wrap p-2 space-y-4 sm:space-y-0 items-center justify-between pb-4">
                <form>
                    <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio"
                        class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                        type="button">
                        <i class="fa-solid fa-sort w-3 h-3 text-gray-500 dark:text-gray-400 me-3"></i>
                        FILTER
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
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
                    data-modal-target="category-add-modal" data-modal-toggle="category-add-modal">+ ADD CATEGORY</button>
                <!-- Main modal -->
                <div id="category-add-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div
                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    ADD CATEGORY
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="category-add-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <form class="p-4 md:p-5" method="post" action="{{ route('categoryAdd') }}">
                                @csrf
                                <div class="grid gap-4 mb-4 grid-cols-2">
                                    <div class="col-span-2">
                                        <label for="name" style="text-align: start !important;"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name
                                            Category</label>
                                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="TYPE NAME" required="">
                                    </div>
                                </div>
                                <button type="submit"
                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    SUBMIT
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative overflow-x-auto">

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="p-4">
                                No.
                            </th>
                            <th scope="col" class="px-6 py-3">
                                CATEGORY NAME
                            </th>
                            <th scope="col" class="px-6 py-3">
                                SERVICES
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($categories->count() > 0)
                            @foreach ($categories as $category)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="w-4 p-4">
                                        {{ $loop->iteration }}
                                    </td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $category->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $category->service->count() }}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <a href="{{ url('/') }}" class="font-medium w-auto">
                                            <i
                                                class="fa-solid fa-circle-info text-lg text-white bg-blue-500 py-1 px-1 rounded"></i>
                                        </a>

                                        <button type="button" data-modal-target="type-modal-{{ $category->name }}"
                                            data-modal-toggle="type-modal-{{ $category->name }}"
                                            class="font-medium w-auto" style="margin: 0px 1px;">
                                            <i
                                                class="fa-solid fa-pen-to-square text-lg text-white bg-green-500 py-1 px-1 rounded"></i>
                                        </button>

                                        <!-- Main modal -->
                                        <div id="type-modal-{{ $category->name }}" tabindex="-1" aria-hidden="true"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-md max-h-full">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <!-- Modal header -->
                                                    <div
                                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                            Edit - Category
                                                        </h3>
                                                        <button type="button"
                                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                            data-modal-toggle="type-modal-{{ $category->name }}">
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
                                                    <form class="p-4 md:p-5" method="post"
                                                        action="{{ route('categoryEdit', ['slug' => $category->slug]) }}">
                                                        @csrf
                                                        <div class="grid gap-4 mb-4 grid-cols-2">
                                                            <div class="col-span-2">
                                                                <label for="name"
                                                                    style="text-align: start !important;"
                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name
                                                                    Category</label>
                                                                <input type="text" name="name" id="name"
                                                                    value="{{ $category->name }}"
                                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                    placeholder="TYPE NAME" required="">
                                                            </div>
                                                        </div>
                                                        <button type="submit"
                                                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                            SUBMIT
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        <button type="button" class="font-medium w-auto"
                                            onclick="event.preventDefault(); deleteCategory('{{ $category->slug }}');">
                                            <i
                                                class="fa-solid fa-trash-can text-lg text-white bg-red-500 py-1 px-1 rounded"></i>
                                        </button>

                                        <script>
                                            function deleteCategory(slug) {
                                                Swal.fire({
                                                    title: 'Are You Sure?',
                                                    text: 'You Cannot Take It Back!',
                                                    icon: 'warning',
                                                    showCancelButton: true,
                                                    confirmButtonText: 'Delete',
                                                    confirmButtonColor: '#ff3d41',
                                                    cancelButtonText: 'Cancel',
                                                    cancelButtonColor: '#8fcc34',
                                                }).then((result) => {
                                                    if (result.isConfirmed || result.status == 200) {
                                                        axios.delete(`other.category.delete.${slug}`)
                                                            .then(response => {
                                                                let timerInterval;
                                                                Swal.fire({
                                                                    title: "SUCCESS!",
                                                                    html: "CATEGORY DELETED!",
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
                                                                        window.location.reload(true);
                                                                    }
                                                                    window.location.reload(true);
                                                                });
                                                            })
                                                            .catch(error => {
                                                                console.error(error);
                                                                window.location.reload(true);

                                                            });
                                                    }
                                                });
                                            }
                                        </script>

                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="">
                                <td colspan="4" class="">
                                    <div class="flex flex-col justify-center items-center pb-1">
                                        <img src="{{ asset('assets/data/no-data.jpg') }}" alt="no-data" class="w-48">
                                        <p>TIDAK ADA DATA</p>
                                    </div>
                                </td>
                            </tr>
                        @endif


                    </tbody>
                </table>
            </div>
        </div>



    </div>
@endsection
