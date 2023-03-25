@extends('layouts.app')

@section('content')
  <div class="owl-carousel owl-theme" style="margin: 20px">
    @foreach ($images as $image)
      <div class="item"><img src="{{ $image->path }}"></div>
    @endforeach
  </div>
@endsection

@push('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:80,
      nav:false,
      responsive:{
        0:{
          items:1
        },
        200:{
          items:3
        },
        1000:{
          items:3
        }
      }
    })
  </script>
@endpush
