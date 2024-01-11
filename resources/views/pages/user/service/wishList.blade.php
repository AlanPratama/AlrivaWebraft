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

            <li>
              <div class="category-card">

                <div class="card-icon">
                  <ion-icon name="briefcase-outline"></ion-icon>
                </div>

                <div>
                  <h3 class="h3 card-title">
                    <a href="#">Personal Development</a>
                  </h3>

                  <span class="card-meta">39 Course</span>
                </div>

              </div>
            </li>

            <li>
              <div class="category-card">

                <div class="card-icon">
                  <ion-icon name="file-tray-full-outline"></ion-icon>
                </div>

                <div>
                  <h3 class="h3 card-title">
                    <a href="#">Human Research</a>
                  </h3>

                  <span class="card-meta">24 Course</span>
                </div>

              </div>
            </li>

            <li>
              <div class="category-card">

                <div class="card-icon">
                  <ion-icon name="color-palette-outline"></ion-icon>
                </div>

                <div>
                  <h3 class="h3 card-title">
                    <a href="#">Art & Design</a>
                  </h3>

                  <span class="card-meta">39 Course</span>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>








      <!--
        - #COURSE
      -->

      <section class="section course" id="courses" aria-label="course"
        style="background-image: url('./assets/images/course-bg.jpg')">
        <div class="container">

          <p class="section-subtitle">WISHLIST WEBSITE KAMU</p>

          <h2 class="h2 section-title">WISHLIST WEBSITE</h2>

          <ul class="grid-list">

            <li>
              <div class="course-card">

                <figure class="card-banner">
                  <img src="./assets/images/jasa-product/company-website.jpg" width="370" height="270" loading="lazy"
                    alt="Competitive Strategy law for all students" class="img-cover">
                </figure>

                <div class="card-actions">

                  <span class="badge shadow">Company Profile</span>

                  <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                    <ion-icon name="heart"></ion-icon>
                  </button>

                </div>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                      <span class="card-meta-text">5 Halaman</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                      <time datetime="PT18H15M44S" class="card-meta-text">1 Bulan</time>
                    </li>

                  </ul>

                  <h3 class="h3">
                    <a href="#" class="card-title">Company Profile Website</a>
                  </h3>

                  <p class="" style="text-transform: capitalize;">
                    Website yang dapat membuat perusahaan anda terlihat lebih profesional.
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
                      <span class="span">Rp 1,500K</span>

                      <del class="del">Rp 2,500K</del>
                    </div>

                    <div class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="card-meta-text">47 Students</span>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner">
                  <img src="./assets/images/jasa-product/company-website.jpg" width="370" height="270" loading="lazy"
                    alt="Competitive Strategy law for all students" class="img-cover">
                </figure>

                <div class="card-actions">

                  <span class="badge shadow">Company Profile</span>

                  <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                    <ion-icon name="heart"></ion-icon>
                  </button>

                </div>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                      <span class="card-meta-text">5 Halaman</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                      <time datetime="PT18H15M44S" class="card-meta-text">1 Bulan</time>
                    </li>

                  </ul>

                  <h3 class="h3">
                    <a href="#" class="card-title">Company Profile Website</a>
                  </h3>

                  <p class="" style="text-transform: capitalize;">
                    Website yang dapat membuat perusahaan anda terlihat lebih profesional.
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
                      <span class="span">Rp 1,500K</span>

                      <del class="del">Rp 2,500K</del>
                    </div>

                    <div class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="card-meta-text">47 Students</span>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner">
                  <img src="./assets/images/jasa-product/company-website.jpg" width="370" height="270" loading="lazy"
                    alt="Competitive Strategy law for all students" class="img-cover">
                </figure>

                <div class="card-actions">

                  <span class="badge shadow">Company Profile</span>

                  <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                    <ion-icon name="heart"></ion-icon>
                  </button>

                </div>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                      <span class="card-meta-text">5 Halaman</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                      <time datetime="PT18H15M44S" class="card-meta-text">1 Bulan</time>
                    </li>

                  </ul>

                  <h3 class="h3">
                    <a href="#" class="card-title">Company Profile Website</a>
                  </h3>

                  <p class="" style="text-transform: capitalize;">
                    Website yang dapat membuat perusahaan anda terlihat lebih profesional.
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
                      <span class="span">Rp 1,500K</span>

                      <del class="del">Rp 2,500K</del>
                    </div>

                    <div class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="card-meta-text">47 Students</span>
                    </div>

                  </div>

                </div>

              </div>
            </li>


          </ul>

          <a href="#" class="btn btn-primary">
            <span class="span">Lihat Semua Website</span>

            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
          </a>

        </div>
      </section>


    </article>
  </main>
@endsection
