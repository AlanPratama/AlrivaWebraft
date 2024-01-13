@extends('layouts.admin')

@section('title', 'Create Service')

@section('content')

    <form class="w-full" action="{{ route('serviceCreate') }}" method="post">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error}}
            @endforeach
        @endif
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>

                <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TYPE</label>
                <select id="type" name="type_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose Type</option>
                    @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>

            </div>
            <div>
                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CATEGORY</label>
                <select id="category" name="category_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose Category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>

                    @endforeach
                </select>
            </div>

            {{--  --}}
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NAME</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name..." required>
            </div>
            <div>
                <label for="estimation"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ESTIMATION</label>
                <input type="number" id="estimation" name="estimation" value="{{ old('estimation') }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="estimation..." pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
            </div>


            {{--  --}}
            <div>
                <label for="description"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DESCRIPTION</label>
                <textarea id="description" rows="10" name="description"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="description...">{{ old('description') }}</textarea>

            </div>
            <div>
                <div class="mb-4">
                    <label for="price_before" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PRICE
                        BEFORE</label>
                    <input type="text" id="price_before" name="price_before" value="{{ old('price_before') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Rp 1,500K" required>
                </div>
                <div class="mb-4">
                    <label for="price_after" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PRICE
                        AFTER</label>
                    <input type="text" id="price_after" name="price_after" value="{{ old('price_after') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="RP 1,000K" required>
                </div>
                <div class="mb-4">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">IMAGE
                        LINK</label>
                    <input type="text" id="image" name="image" value="{{ old('image') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="https://..." required>
                </div>
            </div>
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

@endsection
