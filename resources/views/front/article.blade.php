@extends('front.layouts.app')
     @section('content')
<div class="div-block-16" 
style="background-image: url({{asset('uploads/'.$banner)}})">
     <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav"><a href="/" class="w-clearfix w-nav-brand w--current"><img src="{{ asset('front/images/rwk-logo.png')}}" alt="" class="image-13"></a>
       <nav role="navigation" class="w-nav-menu"><a href="/" class="nav-link w-nav-link ">HOME</a><a href="/about" class="nav-link-2 w-nav-link ">ABOUT</a><a href="/services" class="nav-link-3 w-nav-link">SERVICES</a><a href="/events" class="nav-link-4 w-nav-link">EVENTS</a><a href="/blog" class="nav-link-4 w-nav-link">BLOG</a></nav>
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
    <div class="text-block-14">{{$article->title}}</div>
  </div>
  <p class="paragraph-3 blog"><?php
    $removed = str_replace(array('<p>','</p>'), '',$article->body); 
    echo $removed;
    ?></p>
  <div class="div-block-7">
        <h1 class="heading-2 blog">From Our Blog</h1>
        <div data-animation="slide" data-duration="500" data-infinite="1" class="slider-2 w-slider">
          <div class="mask w-slider-mask">
            @foreach ($posts->chunk(3) as $chunk)
            <div class="w-slide">
              <div class="div-block-8">
                <div class="div-block-10">
                  @foreach ($chunk as $post)
             <div class="div-block-9"><a href="/blog/{{$post->id}}"/><img src="{{ asset('uploads/'.$post->image)}}" alt="" class="image-3"> </a>
              <a class="alinks" href="/blog/{{$post->id}}"/><div class="text-block-7">{{ $post->title }}</div></a>
              <p class="paragraph-2">{!!html_entity_decode(substr(strip_tags($post->body), 0, 150))!!}</p>
              <div class="text-block-8">{{ $post->created_at }}</div>
            </div>
           
            @endforeach
                  
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="left-arrow w-slider-arrow-left">
            <div class="icon w-icon-slider-left"></div>
          </div>
          <div class="w-slider-arrow-right">
            <div class="icon-2 w-icon-slider-right"></div>
          </div>
          <div class="w-slider-nav w-round"></div>
        </div>
    <div class="text-block-9">Subscribe for our Newsletter</div>
    <div class="text-block-10">Re-imagining the way</div>
    <div class="div-block-11">
      <div class="form-block w-form">
        <form id="email-form" name="email-form" data-name="Email Form" class="form"><input type="email" class="text-field w-input" maxlength="256" name="name" data-name="Name" placeholder="Enter Email address" id="name" required=""><input type="submit" value="Get Started" data-wait="Please wait..." class="submit-button w-button"></form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
    <div class="text-block-11">I’d like to receive newsletters and agree to the Privacy Policy.</div>
  </div>
   @endsection