@extends('Layout.main')
@section('title','| معرض الصور')
@section('content')

<!-- main fullscreen img and overlay -->
<div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">رئيسيه</a></span> <span>استوديو</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">معرض صور</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- main fullscreen img and overlay -->
  <!-- main gallery section -->
  <section class="ftco-section ftco-gallery">
    <div class="container">
      <div class="d-md-flex">
        <a href="images/cause-2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-2.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <a href="images/cause-3.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-3.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <a href="images/cause-4.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-2.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <a href="images/cause-5.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-5.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
      </div>
      <div class="d-md-flex">
        <a href="images/cause-6.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-5.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <a href="images/image_3.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/image_3.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <a href="images/image_1.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/image_1.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <a href="images/image_2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/image_2.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
      </div>
      <div class="d-md-flex">
        <a href="images/event-1.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/event-1.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <a href="images/event-2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/event-5.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <a href="images/image_1.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-5.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <a href="images/image_2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-2.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
      </div>
    </div>
  </section>
  <!-- main gallery section -->

@endsection