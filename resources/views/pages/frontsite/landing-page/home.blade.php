@extends('layouts.bootstrap')

@section('title', 'Home')

@section('content')

<section>
    <div class="container">
      <div class="glassbox">
        <div class="row">
          <div class="col-md-5">
            <img class="img-fluid" src="komp_info2.png" alt="Gambar Komputer" width="600px" />
          </div>
          <div class="col-md-6 text-center text-pertama">
            <div class="row fw-bolder text-white text-atas mx-auto mt-3">
              <p>DON'T WORRY !</p>
            </div>
            <div class="row fw-semibold text-white text-bawah mt-5">
              <p>
                We can accomodate your event <br />
                for many people to see !
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Glass End -->
  <div class="pemisah"></div>
  <!-- About Start -->
  <section>
    <div class="container mx-auto about">
      <div class="row justify-content-around about">
        <div class="col-md-7 text-about text-white mt-5">
          <p>
            InfoEvent Website is a platform used to help and share event or programs such as webinars, workshops, and also job fairs. We're trying
            to help the organizer also people whose trying to get an easy information about an event in such simple way possible. Our goal is to be
            the number one facilitator for event and programs in Indonesia.
          </p>
        </div>
        <div class="col-md-4">
          <div>
            <img class="img-fluid" src="about-logo4.png" alt="" width="300px" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About End -->
  <div class="pemisah"></div>

  <!-- Carousel Start -->
  <div class="glassbox2">
    <h1 class="text-white text-center">Documentation</h1>
    <div id="carouselExampleCaptions" class="carousel slide lebar-carousel mx-auto" data-bs-ride="false">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img1.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img2.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img3.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- Carousel End -->
  <div class="pemisah"></div>

@endsection