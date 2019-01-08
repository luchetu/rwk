@extends('front.layouts.app')
     @section('content')

 <div class="div-block-16">
    <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav"><a href="/" class="w-clearfix w-nav-brand w--current"><img src="{{ asset('front/images/rwk-logo.png')}}" alt="" class="image-13"></a>
       <nav role="navigation" class="w-nav-menu"><a href="/" class="nav-link w-nav-link ">HOME</a><a href="/about" class="nav-link-2 w-nav-link ">ABOUT</a><a href="/services" class="nav-link-3 w-nav-link">SERVICES</a><a href="/events" class="nav-link-4 w-nav-link w--current">EVENTS</a><a href="/blog" class="nav-link-4 w-nav-link">BLOG</a></nav>
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
    <div class="text-block-14">EVENTS</div>
  </div>
  <h1 class="heading-10">Our Latest Events in Your Local Area</h1>
  @foreach ($events->chunk(2) as $chunk)
  <div class="div-block-25">
     @foreach ($chunk as $event)
    <div class="div-block-9 events"><img src="{{ asset('uploads/'.$event->image)}}" alt="" class="image-3">
      <div class="text-block-7">{{ $event->title }}</div>
      <p class="paragraph-2">{{ $event->body}}</p>
      <p class="paragraph-2">{{ $event->venue }}</p>
      <p class="paragraph-2">{{ $event->body}}</p>
    </div>
   @endforeach
  </div>
  @endforeach
   @endsection