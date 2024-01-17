@extends('layouts.main')

@section('content')
    <main>
        <article>

            <!--
                - #HERO
              -->

            <section class="hero" id="home" aria-label="hero"
                style="background-image: url('./assets/images/hero-bg.jpg')">
                <div class="container">

                    <div class="hero-content">

                        <p class="section-subtitle">BUATKAN DIRIMU MENJADI TERDIGITALISASI</p>

                        <h2 class="h1 hero-title">Jasa Pembuatan Website Terbaik</h2>

                        <p class="hero-text" style="text-transform: capitalize;">
                            Membutuhkan Website dengan tampilan keren dengan harga yang murah? alriva webcraft tentu
                            solusinya!
                        </p>

                        <a href="https://wa.wizard.id/452953" class="btn btn-primary">
                            <span class="span">Hubungi Sekarang</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>

                    <figure class="hero-banner">

                        <img src="./assets/images/hero-banner.png" width="500" height="500" loading="lazy"
                            alt="hero image" class="w-100">

                        <img src="./assets/images/hero-abs2.png" style="width: 160px;" loading="lazy" aria-hidden="true"
                            class="abs-img abs-img-1">

                        <img src="./assets/images/hero-abs3.png" width="160" height="160" loading="lazy"
                            aria-hidden="true" class="abs-img abs-img-2">

                    </figure>

                </div>
            </section>





            <!--
                - #CATEGORY
              -->

            <section class="section category" aria-label="category" id="kategori">
                <div class="container">

                    <p class="section-subtitle">Website Kategori</p>

                    <h2 class="h2 section-title">POPULER KATEGORI</h2>

                    <ul class="grid-list">

                        @foreach ($category as $item)
                            <li>
                                <a href="{{ url('/category/' . $item->slug) }}">
                                    <div class="category-card">

                                        <div class="card-icon">
                                            <ion-icon name="star-outline"></ion-icon>
                                        </div>

                                        <div>
                                            <h3 class="h3 card-title">
                                                <p>{{ $item->name }}</p>
                                            </h3>

                                            <span class="card-meta">{{ $item->service->count() }} Website</span>
                                        </div>

                                    </div>
                                </a>
                            </li>
                        @endforeach

                    </ul>

                </div>
            </section>





            <!--
                - #ABOUT
              -->

            <section class="section about" id="about" aria-label="about">
                <div class="container">

                    <figure class="about-banner">

                        <img src="./assets/images/about-banner.png" width="450" height="590" loading="lazy"
                            alt="about banner" class="w-100 about-img">

                        <img src="./assets/images/about-abs-1.png" width="188" height="242" loading="lazy"
                            aria-hidden="true" class="abs-img abs-img-1">

                        <!-- <img src="./assets/images/about-abs-2.png" width="150" height="200" loading="lazy" aria-hidden="true"
                      class="abs-img abs-img-2"> -->

                    </figure>

                    <div class="about-content">

                        <p class="section-subtitle">APA ITU ALRIVA WEBCRAFT?</p>

                        <h2 class="h2 section-title">Kami Menawarkan Website Terbaik Untuk Anda</h2>

                        <ul class="about-list">

                            <li class="about-item">

                                <div class="item-icon item-icon-1">
                                    <img src="./assets/images/about-icon-1.png" width="30" height="30" loading="lazy"
                                        aria-hidden="true">
                                </div>

                                <div>
                                    <h3 class="h3 item-title">Desain Menarik</h3>

                                    <p class="item-text">
                                        memberikan tampilan yang profesional dan sesuai dengan identitas brand Anda.
                                    </p>
                                </div>

                            </li>

                            <li class="about-item">

                                <div class="item-icon item-icon-2">
                                    <img src="./assets/images/about-icon-2.png" width="30" height="30" loading="lazy"
                                        aria-hidden="true">
                                </div>

                                <div>
                                    <h3 class="h3 item-title">Responsif di Berbagai Perangkat</h3>

                                    <p class="item-text">
                                        Ini memastikan bahwa pengunjung dapat mengakses informasi dengan mudah, di device
                                        apapun.
                                    </p>
                                </div>

                            </li>

                            <li class="about-item">

                                <div class="item-icon item-icon-2">
                                    <img src="./assets/images/about-icon-2.png" width="30" height="30" loading="lazy"
                                        aria-hidden="true">
                                </div>

                                <div>
                                    <h3 class="h3 item-title">Fungsionalitas Optimal</h3>

                                    <p class="item-text">
                                        memastikan setiap fitur berjalan dengan baik untuk memberikan pengalaman pengguna
                                        yang memuaskan.
                                    </p>
                                </div>

                            </li>

                            <li class="about-item">

                                <div class="item-icon item-icon-2">
                                    <img src="./assets/images/about-icon-2.png" width="30" height="30"
                                        loading="lazy" aria-hidden="true">
                                </div>

                                <div>
                                    <h3 class="h3 item-title">Keamanan Terjamin</h3>

                                    <p class="item-text">
                                        Kami mengimplementasikan langkah-langkah keamanan yang canggih untuk melindungi data
                                        Anda, agar anda merasa aman.
                                    </p>
                                </div>

                            </li>

                            <li class="about-item">

                                <div class="item-icon item-icon-3">
                                    <img src="./assets/images/about-icon-3.png" width="30" height="30"
                                        loading="lazy" aria-hidden="true">
                                </div>

                                <div>
                                    <h3 class="h3 item-title">Kustomisasi yang Sesuai Kebutuhan</h3>

                                    <p class="item-text">
                                        Setiap bisnis pasti terdapat keunikan tersendiri, maka website dari kami dapat
                                        disesuaikan dengan
                                        kebutuhan spesifik bisnis Anda.
                                    </p>
                                </div>

                            </li>

                        </ul>

                        <a href="https://wa.wizard.id/452953" class="btn btn-primary">
                            <span class="span">Hubungi Kami</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>

                </div>
            </section>



            <!--
                - #PRICING
               -->
            <div class="min-h-screen items-center" id="harga">
                <div class="" style="padding: 0px 15px;">
                    <div class="text-center font-semibold">
                        <h1 style="font-size: 50px;" class="flex justify-center gap-2">
                            <span class="text-indigo-500 tracking-wide">Pricing </span>
                            <span>Plans</span>
                        </h1>
                        <p style="font-size: 24px;" class="pt-6 text-gray-400 font-normal w-full px-8 md:w-full">
                            Jasa Yang Kami Tawarkan Untuk Membuat Website Yang Kamu Mau
                        </p>
                    </div>
                    <!-- cards -->
                    <div class="my-16 sm:flex flex-wrap justify-center items-center gap-8">
                        <!-- Basic -->
                        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 px-4 py-4 bg-white mt-6 shadow-lg rounded-lg"
                            style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
                            <div class="px-6 py-8 sm:p-10 sm:pb-6">
                                <div class="flex justify-center">
                                    <span style="font-size: 22px;"
                                        class="inline-flex px-4 py-1 rounded-full leading-5 font-semibold tracking-wide uppercase">
                                        Statis
                                    </span>
                                </div>
                                <div style="font-size: 40px; font-weight: bolder; margin-top: 2px;" class="text-center">
                                    Rp 99K
                                </div>
                            </div>
                            <p class="text-md mt-4">
                                Plan include :
                            </p>
                            <ul class="text-2xl w-full mt-6 mb-6">
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-10 w-10 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                        height="6" stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    All illimited components
                                </li>
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-10 w-10 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                        height="6" stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Own custom Tailwind styles
                                </li>
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-10 w-10 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                        height="6" stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Unlimited Templates
                                </li>
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-10 w-10 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                        height="6" stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Free premium dashboard
                                </li>
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-10 w-10 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                        height="6" stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Best ranking
                                </li>
                                <li class="mb-3 flex items-center opacity-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                        class="h-10 w-10 mr-2" fill="red" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Prenium svg
                                </li>
                                <li class="mb-3 flex items-center opacity-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                        class="h-10 w-10 mr-2" fill="red" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    My wife
                                </li>
                            </ul>
                            <a href="https://wa.wizard.id/d6f438">
                                <button type="button" style="font-size: 20px;"
                                    class="w-full px-3 py-3 shadow rounded-lg text-indigo-500 hover:text-white bg-white hover:bg-indigo-500 transition-colors duration-700 transform">
                                    Beli Sekarang
                                </button>
                            </a>
                        </div>

                        <!-- Popular -->

                        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 px-4 py-4 bg-indigo-500 text-white mt-6 rounded-lg"
                            style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
                            <div class="px-6 py-8 sm:p-10 sm:pb-6">
                                <div class="flex justify-center">
                                    <span style="font-size: 22px;"
                                        class="inline-flex px-4 py-1 rounded-full leading-5 font-semibold tracking-wide uppercase">
                                        Dinamis
                                    </span>
                                </div>
                                <div style="font-size: 40px; font-weight: bolder; margin-top: 2px;" class="text-center">
                                    RP 499K
                                </div>
                            </div>
                            <p class="text-md mt-4">
                                Plan include :
                            </p>
                            <ul class="text-2xl w-full mt-6 mb-6">
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-10 w-10 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                        height="6" stroke="currentColor" fill="currentColor"
                                        viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    All illimited components
                                </li>
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-10 w-10 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                        height="6" stroke="currentColor" fill="currentColor"
                                        viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Own custom Tailwind styles
                                </li>
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-10 w-10 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                        height="6" stroke="currentColor" fill="currentColor"
                                        viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Unlimited Templates
                                </li>
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-10 w-10 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                        height="6" stroke="currentColor" fill="currentColor"
                                        viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Free premium dashboard
                                </li>
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-10 w-10 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                        height="6" stroke="currentColor" fill="currentColor"
                                        viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Best ranking
                                </li>
                                <li class="mb-3 flex items-center opacity-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                        class="h-10 w-10 mr-2" fill="currentColor" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Prenium svg
                                </li>
                                <li class="mb-3 flex items-center opacity-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                        class="h-10 w-10 mr-2" fill="currentColor" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    My wife
                                </li>
                            </ul>
                            <a href="https://wa.wizard.id/d6f438">
                                <button type="button" style="font-size: 20px;"
                                    class="w-full px-3 py-3 shadow rounded-lg text-white bg-indigo-600 hover:bg-indigo-700 transition-colors duration-700 transform">
                                    Beli Sekarang
                                </button>
                            </a>
                        </div>

                        <!-- premium -->
                        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 px-4 py-4 bg-white mt-6 shadow-lg rounded-lg"
                            style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
                            <div class="px-6 py-8 sm:p-10 sm:pb-6">
                                <div class="flex justify-center">
                                    <span style="font-size: 22px;"
                                        class="inline-flex px-4 py-1 rounded-full leading-5 font-semibold tracking-wide uppercase">
                                        Custom Website
                                    </span>
                                </div>
                                <div style="font-size: 40px; font-weight: bolder; margin-top: 2px;" class="text-center">
                                    CONTACT US

                                </div>
                            </div>
                            <p class="text-md mt-4">
                                Plan include :
                            </p>
                            <ul class="text-2xl w-full mt-6 mb-6">
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-10 w-10 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                        height="6" stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    All illimited components
                                </li>
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-10 w-10 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                        height="6" stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Own custom Tailwind styles
                                </li>
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-10 w-10 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                        height="6" stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Unlimited Templates
                                </li>
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-10 w-10 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                        height="6" stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Free premium dashboard
                                </li>
                                <li class="mb-3 flex items-center ">
                                    <svg class="h-10 w-10 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                        height="6" stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Best ranking
                                </li>
                                <li class="mb-3 flex items-center opacity-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                        class="h-10 w-10 mr-2" fill="red" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    Prenium svg
                                </li>
                                <li class="mb-3 flex items-center opacity-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                        class="h-10 w-10 mr-2" fill="red" viewBox="0 0 1792 1792">
                                        <path
                                            d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                        </path>
                                    </svg>
                                    My wife
                                </li>
                            </ul>
                            <a href="https://wa.wizard.id/d6f438">
                                <button type="button" style="font-size: 20px;"
                                    class="w-full px-3 py-3 shadow rounded-lg text-indigo-500 hover:text-white bg-white hover:bg-indigo-500 transition-colors duration-700 transform">
                                    Beli Sekarang
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>







            <!--
                - #COURSE
              -->

            <section class="section course" id="website" aria-label="course"
                style="background-image: url('./assets/images/course-bg.jpg')">
                <div class="container">

                    <p class="section-subtitle">Website Terpopuler</p>

                    <h2 class="h2 section-title">JASA TERPOPULER KAMI</h2>

                    <ul class="grid-list">
                        @foreach ($services as $service)
                            <li>
                                <div class="course-card"
                                    style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px !important;">

                                    <figure class="card-banner">
                                        <img src="{{ $service->image_link == 'NO' ? asset($service->image) : $service->image }}"
                                            width="370" height="270" loading="lazy"
                                            alt="Competitive Strategy law for all students" class="img-cover">
                                    </figure>

                                    <div class="card-actions">

                                        <span class="badge shadow">{{ $service->category->name }}</span>

                                        @if (Auth::user())
                                            @php
                                                $wlUser = $service->wishlist->where('user_id', Auth::user()->id)->first();
                                                $activeClass = $wlUser ? 'active' : '';
                                            @endphp
                                            <button class="whishlist-btn {{ $activeClass }}"
                                                data-service-slug="{{ $service->slug }}" aria-label="Add to whishlist"
                                                data-whish-btn>
                                                <ion-icon name="heart"></ion-icon>
                                            </button>
                                        @else
                                            <a href="{{ url('/auth/login') }}">
                                                <button class="whishlist-btn" data-service-slug="{{ $service->slug }}"
                                                    aria-label="Add to whishlist" data-whish-btn>
                                                    <ion-icon name="heart"></ion-icon>
                                                </button>
                                            </a>
                                        @endif

                                    </div>

                                    <div class="card-content">

                                        <ul class="card-meta-list">

                                            <li class="card-meta-item badge shadow">
                                                <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                                                <span class="card-meta-text">{{ $service->type->name }}</span>
                                            </li>

                                            <li class="card-meta-item badge shadow">
                                                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                                <time datetime="PT18H15M44S"
                                                    class="card-meta-text">{{ $service->estimation }} Hari</time>
                                            </li>

                                        </ul>

                                        <h3 class="h3">
                                            <a href="{{ url('/service/detail/' . $service->slug) }}"
                                                class="card-title">{{ $service->name }}</a>
                                        </h3>

                                        <p class=""
                                            style="text-transform: capitalize; overflow: hidden;
                                                display: -webkit-box;
                                                -webkit-line-clamp: 3;
                                                        line-clamp: 2;
                                                -webkit-box-orient: vertical;
                                            ">
                                            {{ $service->description }}
                                        </p>

                                        <!-- <div class="rating-wrapper">

                                            <div class="rating">
                                                <ion-icon name="star"></ion-icon>
                                                <ion-icon name="star"></ion-icon>
                                                <ion-icon name="star"></ion-icon>
                                                <ion-icon name="star"></ion-icon>
                                                <ion-icon name="star"></ion-icon>
                                            </div>

                                            <span class="rating-text">(18 Review)</span>

                                            </div> -->

                                        <div class="card-footer">

                                            <div class="card-price">
                                                <span class="span">Rp {{ number_format($service->price_after) }}K</span>

                                                <del class="del">Rp {{ number_format($service->price_before) }}K</del>
                                            </div>

                                            <div class="card-meta-item">
                                                <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                                <span class="card-meta-text">{{ $service->sold }} Dibeli</span>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </li>
                        @endforeach


                    </ul>

                    <a href="{{ url('/service') }}" class="btn btn-primary">
                        <span class="span">Lihat Semua Website</span>

                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </a>

                </div>
            </section>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('.whishlist-btn').on('click', function() {
                        var serviceSlug = $(this).data('service-slug');

                        $.ajax({
                            url: '/addToWishlist',
                            type: 'POST',
                            data: {
                                serviceSlug: serviceSlug,
                                _token: $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {
                                if (response.success) {
                                    const Toast = Swal.mixin({
                                        toast: true,
                                        position: "top-start",
                                        showConfirmButton: false,
                                        timer: 3000,
                                        timerProgressBar: true,
                                        didOpen: (toast) => {
                                            toast.onmouseenter = Swal.stopTimer;
                                            toast.onmouseleave = Swal.resumeTimer;
                                        }
                                    });
                                    Toast.fire({
                                        icon: "success",
                                        title: "BERHASIL MENAMBAH SERVICE DI WISHLIST"
                                    });

                                }
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        });
                    });
                });
            </script>

            <!--
                - #INSTRUCTOR
              -->

            <section class="instructor" id="developer">
                <div class="container">


                    <div class="title-wrapper">
                        <h2 class="h2 instructor-title"><span style="color: #525DE0; display: inline;">ALRIVA
                                WEBCRAFT'S</span> DEVELOPERS</h2>

                        <!-- <button class="btn btn-primary">View All Teachers</button> -->
                    </div>

                    <ul class="instructor-list">

                        <li>
                            <div class="instructor-card">

                                <figure class="card-banner">
                                    <img src="./assets/images/instructor-1.png" alt="alan pratama">
                                </figure>

                                <a href="#">
                                    <h3 class="card-title">Alan Pratama</h3>
                                </a>

                                <p class="card-subtitle">Manager - Frontend</p>

                                <ul class="card-social-list">



                                    <li>
                                        <a href="#" class="card-social-link">
                                            <ion-icon name="logo-instagram"></ion-icon>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="card-social-link">
                                            <ion-icon name="logo-linkedin"></ion-icon>
                                        </a>
                                    </li>

                                </ul>

                            </div>
                        </li>

                        <li>
                            <div class="instructor-card">

                                <figure class="card-banner">
                                    <img src="./assets/images/instructor-2.png" alt="arif">
                                </figure>

                                <a href="#">
                                    <h3 class="card-title">Arif Ibrahim</h3>
                                </a>

                                <p class="card-subtitle">Admin - UI/UX Design</p>

                                <ul class="card-social-list">



                                    <li>
                                        <a href="#" class="card-social-link">
                                            <ion-icon name="logo-instagram"></ion-icon>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="card-social-link">
                                            <ion-icon name="logo-linkedin"></ion-icon>
                                        </a>
                                    </li>

                                </ul>

                            </div>
                        </li>

                        <li>
                            <div class="instructor-card">

                                <figure class="card-banner">
                                    <img src="./assets/images/instructor-3.png" alt="arva revanza">
                                </figure>

                                <a href="#">
                                    <h3 class="card-title">Arva Revanza</h3>
                                </a>

                                <p class="card-subtitle">Supervisor - Backend</p>

                                <ul class="card-social-list">



                                    <li>
                                        <a href="#" class="card-social-link">
                                            <ion-icon name="logo-instagram"></ion-icon>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="card-social-link">
                                            <ion-icon name="logo-linkedin"></ion-icon>
                                        </a>
                                    </li>

                                </ul>

                            </div>
                        </li>

                    </ul>


                </div>
            </section>



            <!--
                - #CTA
              -->

            <section class="section cta" aria-label="workshop"
                style="background-image: url('./assets/images/cta-bg.png')" id="contact">
                <div class="container">

                    <figure class="cta-banner">
                        <img src="./assets/images/person-front-computer-working-html.jpg" width="580" height="380"
                            alt="cta banner" class="img-cover">
                    </figure>

                    <div class="cta-content">

                        <p class="section-subtitle">Contact Us</p>

                        <h2 class="h2 section-title">Hubungi Kami Sekarang!</h2>

                        <a href="https://wa.wizard.id/452953" class="flex justify-start items-center gap-1 mt-2" style="font-size: 21px;">
                            <ion-icon name="logo-whatsapp"></ion-icon>
                            <p>Whatsapp</p>
                        </a>

                        <a href="https://www.instagram.com/alrivawebcraft" class="flex justify-start items-center gap-1 mt-2" style="font-size: 21px;">
                            <ion-icon name="logo-instagram"></ion-icon>
                            <p>Instagram</p>
                        </a>

                        <a href="https://wa.wizard.id/452953" class="flex justify-start items-center gap-1 mt-2" style="font-size: 21px;">
                            <ion-icon name="location-outline"></ion-icon>
                            <p>Lokasi Kami</p>
                        </a>

                        <p href="https://wa.wizard.id/452953" class="mt-2" style="font-size: 21px;">
                            Kami Siap Membantu Membangun Website Dengan Desain dan Fungsional Yang Bagus Dengan Harga Yang Sangat Terjangkau
                        </p>

                        <a href="https://wa.wizard.id/452953" class="btn btn-secondary mt-6">
                            <span class="span">Hubungi Kami</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>

                </div>
            </section>





            <!--
                - #EVENT
              -->

            <section class="section event" id="portofolio" aria-label="event">
                <div class="container">

                    <p class="section-subtitle">PORTOFOLIO KAMI</p>

                    <h2 class="h2 section-title">LIHAT HASIL KERJA KAMI</h2>

                    <ul class="grid-list">

                        <li>
                            <div class="event-card">

                                <figure class="card-banner">
                                    <img src="{{ asset('assets/porto/spancagame.png') }}" width="370" height="250" loading="lazy"
                                        alt="Innovation & Technological Entrepreneurship Team" class="img-cover">
                                </figure>

                                <time class="badge" datetime="2022-12-04">DINAMIS</time>

                                <div class="card-content">

                                    <address class="card-address">
                                        <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">Website</span>
                                    </address>

                                    <h3 class="h3">
                                        <a href="https://alanpratama.github.io/spanca-games/" class="card-title">Spanca Games - Platform Penyedia Game Klasik</a>
                                    </h3>

                                    <a href="https://alanpratama.github.io/spanca-games/" class="btn-link">
                                        <span class="span">Lihat Sekarang</span>

                                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                    </a>

                                </div>

                            </div>
                        </li>


                        <li>
                            <div class="event-card">

                                <figure class="card-banner">
                                    <img src="{{ asset('assets/porto/spanLib.png') }}" width="370" height="250" loading="lazy"
                                        alt="Innovation & Technological Entrepreneurship Team" class="img-cover">
                                </figure>

                                <time class="badge" datetime="2022-12-04">DINAMIS</time>

                                <div class="card-content">

                                    <address class="card-address">
                                        <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">Website</span>
                                    </address>

                                    <h3 class="h3">
                                        <a href="#" class="card-title">Spanca Library - Perpustakaan Online</a>
                                    </h3>

                                    <a href="#" class="btn-link">
                                        <span class="span">Lihat Sekarang</span>

                                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                    </a>

                                </div>

                            </div>
                        </li>


                        <li>
                            <div class="event-card">

                                <figure class="card-banner">
                                    <img src="{{ asset('assets/porto/ccc.png') }}" width="370" height="250" loading="lazy"
                                        alt="Innovation & Technological Entrepreneurship Team" class="img-cover">
                                </figure>

                                <time class="badge" datetime="2022-12-04">DINAMIS</time>

                                <div class="card-content">

                                    <address class="card-address">
                                        <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">Website</span>
                                    </address>

                                    <h3 class="h3">
                                        <a href="#" class="card-title">CCC - Web App Kegiatan Ekskul Coding</a>
                                    </h3>

                                    <a href="#" class="btn-link">
                                        <span class="span">Lihat Sekarang</span>

                                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                    </a>

                                </div>

                            </div>
                        </li>


                        <li>
                            <div class="event-card">

                                <figure class="card-banner">
                                    <img src="{{ asset('assets/porto/portofolio.png') }}" width="370" height="250" loading="lazy"
                                        alt="Innovation & Technological Entrepreneurship Team" class="img-cover">
                                </figure>

                                <time class="badge" datetime="2022-12-04">STATIS</time>

                                <div class="card-content">

                                    <address class="card-address">
                                        <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">Website</span>
                                    </address>

                                    <h3 class="h3">
                                        <a href="https://alanpratama.github.io/AlanPratamaRusfi/" class="card-title">Portofolio Website, Sebarkan Skill Kamu</a>
                                    </h3>

                                    <a href="https://alanpratama.github.io/AlanPratamaRusfi/" class="btn-link">
                                        <span class="span">Lihat Sekarang</span>

                                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                    </a>

                                </div>

                            </div>
                        </li>



                        <li>
                            <div class="event-card">

                                <figure class="card-banner">
                                    <img src="{{ asset('assets/porto/alriva.png') }}" width="370" height="250" loading="lazy"
                                        alt="Innovation & Technological Entrepreneurship Team" class="img-cover">
                                </figure>

                                <time class="badge" datetime="2022-12-04">BLOG</time>

                                <div class="card-content">

                                    <address class="card-address">
                                        <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">Website</span>
                                    </address>

                                    <h3 class="h3">
                                        <a href="https://www.alrivaweb.tech/" class="card-title">Alriva WebCraft Blog, Informasi dan Artikel</a>
                                    </h3>

                                    <a href="https://www.alrivaweb.tech/" class="btn-link">
                                        <span class="span">Lihat Sekarang</span>

                                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                    </a>

                                </div>

                            </div>
                        </li>




                    </ul>

                </div>
            </section>





            <!--
                - #NEWSLETTER
              -->

            {{-- <section class="section newsletter" aria-label="newsletter"
                style="background-image: url('./assets/images/newsletter-bg.jpg')">
                <div class="container">

                    <p class="section-subtitle">Subscribe Newsletter</p>

                    <h2 class="h2 section-title">Get Every Latest News</h2>

                    <form action="" class="newsletter-form">

                        <div class="input-wrapper">
                            <input type="email" name="email_address" aria-label="email"
                                placeholder="Enter your mail address" required class="email-field">

                            <ion-icon name="mail-open-outline" aria-hidden="true"></ion-icon>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <span class="span">Subscribe</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </button>

                    </form>

                </div>
            </section> --}}

        </article>
    </main>
@endsection
