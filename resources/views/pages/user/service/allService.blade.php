@extends('layouts.main')

@section('content')
<main>
    <article>





      <!--
        - #CATEGORY
      -->

      <section class="section category" aria-label="category">
        <div class="container">

          <p class="section-subtitle">Website Kategori</p>

          <h2 class="h2 section-title">Popular Kategori</h2>

          <ul class="grid-list">

            @foreach ($category as $item)
            <li>
                <a href="{{ url('/category/'.$item->slug) }}">
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
        - #COURSE
      -->

      <section class="section course" id="courses" aria-label="course"
        style="background-image: url('./assets/images/course-bg.jpg')">
        <div class="container">

          <p class="section-subtitle">KUMPULAN WEBSITE TERBAIK</p>

          <h2 class="h2 section-title">JASA KAMI</h2>

          <ul class="grid-list">

            @foreach ($services as $service)
                            <li>
                                <div class="course-card" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px !important;">

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
                                        <button class="whishlist-btn {{ $activeClass }}" data-service-slug="{{ $service->slug }}" aria-label="Add to whishlist" data-whish-btn>
                                            <ion-icon name="heart"></ion-icon>
                                        </button>

                                        @else
                                        <a href="{{ url('/auth/login') }}">
                                            <button class="whishlist-btn">
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
                                            <a href="{{ url('/service/detail/'.$service->slug) }}" class="card-title">{{ $service->name }}</a>
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

          {{-- <a href="{{ url('/service') }}" class="btn btn-primary">
            <span class="span">Lihat Semua Website</span>

            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
          </a> --}}

        </div>
      </section>


    </article>
  </main>





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
@endsection
