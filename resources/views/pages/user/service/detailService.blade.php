@extends('layouts.main')

@section('content')
    <section class="sm:pt-20 pt-12 text-gray-700 body-font overflow-hidden bg-white"
        style=" min-height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="{{ $service->name }}" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200"
                    src="{{ $service->image_link == 'NO' ? asset($service->image) : $service->image }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest" style="font-size: 16px;">ALRIVA WEBCRAFT</h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1 leading-snug"
                        style="margin: 17px 0px; font-size: 30px;">{{ $service->name }} lalalala lalalala lalala</h1>
                    <div class="flex mb-4">
                        <span class="flex items-center">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <span class="text-gray-600 ml-3">{{ $service->sold }} Dibeli</span>
                        </span>
                        <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
                            <a class="text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </a>
                            <a class="ml-2 text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                    </path>
                                </svg>
                            </a>
                            <a class="ml-2 text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                    </path>
                                </svg>
                            </a>
                        </span>
                    </div>
                    <p class="leading-relaxed" style="font-size: 20px;">{{ $service->description }}</p>
                    <div class="detail-text flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
                        <span class="badge shadow"><a href="{{ url('') }}">{{ $service->type->name }}</a></span>
                        <span class="">|</span>
                        <span class="badge shadow"><a
                                href="{{ url('/category/' . $service->category->slug) }}">{{ $service->category->name }}</a></span>
                    </div>
                    @if (Auth::user())
                    <div class="flex flex-wrap gap-4 items-center justify-between">

                        <span class="title-font font-semibold text-2xl text-gray-900"
                                style="font-size: 22px; font-weight: bold; opacity: 0.92;">RP
                                {{ number_format($service->price_after) }}K</span>
                        <div class="flex items-center">

                                <form action="{{ route('transaction.checkout', ['slug' => $service->slug]) }}" method="post"
                            class="flex items-center" >
                            @csrf

                            <button type="submit" style="background-color: #525DE0;"
                                class="flex ml-auto text-white border-0 py-2 px-6 focus:outline-none rounded">Beli</button>
                        </form>

                            @php
                                $wl = $service->wishlist->where('user_id', Auth::user()->id)->first();
                            @endphp
                            @if ($wl)
                                <form action="{{ route('addToWishlistDetailPage') }}" method="post">
                                    @csrf
                                    <button type="submit" name="serviceSlug" value="{{ $service->slug }}"
                                        style="color: #525DE0; border: 1px solid #525DE0; opacity: .7; background-color: white;"
                                        class="flex items-center justify-between gap-1 ml-4 text-white border-0 py-2 px-6 focus:outline-none rounded"><ion-icon
                                            name="checkmark-circle-outline" style="font-size: 19px;"></ion-icon> Add To
                                        Whishlist</button>
                                </form>
                            @else
                                <form action="{{ route('addToWishlistDetailPage') }}" method="post">
                                    @csrf
                                    <button type="submit" name="serviceSlug" value="{{ $service->slug }}"
                                        style="color: #525DE0; border: 1px solid #525DE0; background-color: white;"
                                        class="addWl flex ml-4 text-white border-0 py-2 px-6 focus:outline-none rounded">Add
                                        To
                                        Whishlist</button>
                                </form>
                            @endif
                        </div>

                    </div>

                    @else
                        <div class="flex items-center">
                            <span class="title-font font-semibold text-2xl text-gray-900"
                                style="font-size: 22px; font-weight: bold; opacity: 0.92;">RP
                                {{ number_format($service->price_after) }}K</span>
                            <a href="{{ url('/auth/login') }}">
                                <button style="background-color: #525DE0;"
                                    class="flex ml-auto text-white border-0 py-2 px-6 focus:outline-none rounded">Beli</button>
                            </a>
                            <a href="{{ url('/auth/login') }}">
                                <button style="color: #525DE0; border: 1px solid #525DE0; background-color: white;"
                                    class="flex ml-4 text-white border-0 py-2 px-6 focus:outline-none rounded">Add To
                                    Whishlist</button>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection
