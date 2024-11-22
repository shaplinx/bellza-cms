@props([
    "image" => "",
    "title" => "",
    "subtitle" => "",
    "badge" => "" ,
    "buttonText" => "",
    "buttonLink"
])
<section id="intro" class="position-relative overflow-hidden">
    <div class="banner">
      <img src="{{ asset("images/banner-image.jpg") }}" alt="banner" class="img-fluid">
      <div class="container">
        <div class="banner-content position-absolute padding-large">
          <span
            class="sub-heading bg-light py-2 px-4 mb-4 border-radius-30 text-uppercase d-inline-block text-cadet-blue fw-medium">
            <svg class="heart primary-color me-2" width="20" height="20">
              <use xlink:href="#heart" />
            </svg> {{ $badge }}
          </span>
          <h1 class="display-3 fw-bold text-dark">{{$title}}</h1>
          <p class="mt-3 mb-4">{{$subtitle}}</p>
          @if(isset($buttonLink))
          <a href="{{$buttonLink}}" class="btn btn-medium btn-primary btn-pill text-uppercase">{{$buttonText}}</a>
          @endif
        </div>
      </div>
    </div>
  </section>