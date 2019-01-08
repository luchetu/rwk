 @extends('front.layouts.app')
     @section('content')
  <div class="div-block-16 home">
    <div data-poster-url="https://uploads-ssl.webflow.com/5bf289e21faec7758c07049c/5c010f22f033cc1e4862e24a_banner video-poster-00001.jpg" data-video-urls="https://uploads-ssl.webflow.com/5bf289e21faec7758c07049c/5c010f22f033cc1e4862e24a_banner video-transcode.webm,https://uploads-ssl.webflow.com/5bf289e21faec7758c07049c/5c010f22f033cc1e4862e24a_banner video-transcode.mp4" data-autoplay="true" data-loop="true" data-wf-ignore="true" class="background-video w-background-video w-background-video-atom"><video autoplay="" loop="" style="background-image:url(&quot;https://uploads-ssl.webflow.com/5bf289e21faec7758c07049c/5c010f22f033cc1e4862e24a_banner video-poster-00001.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true"><source src="https://uploads-ssl.webflow.com/5bf289e21faec7758c07049c/5c010f22f033cc1e4862e24a_banner video-transcode.webm" data-wf-ignore="true"><source src="https://uploads-ssl.webflow.com/5bf289e21faec7758c07049c/5c010f22f033cc1e4862e24a_banner video-transcode.mp4" data-wf-ignore="true"></video>
      <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav"><a href="/" class="w-clearfix w-nav-brand w--current"><img src="{{ asset('front/images/rwk-logo.png')}}" alt="" class="image-13"></a>
       <nav role="navigation" class="w-nav-menu"><a href="/" class="nav-link w-nav-link w--current">HOME</a><a href="/about" class="nav-link-2 w-nav-link ">ABOUT</a><a href="/services" class="nav-link-3 w-nav-link">SERVICES</a><a href="/events" class="nav-link-4 w-nav-link">EVENTS</a><a href="/blog" class="nav-link-4 w-nav-link">BLOG</a></nav>
        <div class="w-nav-button">
          <div class="w-icon-nav-menu"></div>
        </div>
      </div>
      <div class="text-block-2">HELPING MAKE YOUR FINANCIAL DREAMS COME TRUE</div><a href="/services" class="button w-button">How can we help</a></div>
  </div>
  <div class="div-block-2">
    <div class="div-block-3">
      <h1 class="heading">Accountants you can trust</h1>
    </div>
    <p class="paragraph">We are a registered medium sized firm of Certified Public Accountants that is fully committed to provision of cost effective and unparalleled professional services to all sectors of our economy that not only conforms to but also meets and exceeds our client’s expectations. RWK &amp; Associates Certified Public Accountants, was founded with a unique understanding of the local markets that enables us to provide holistic, innovative and relevant business solutions, taking into account the distinct market forces and constraints that come into play within the region.</p><a href="/about" class="link">Learn more</a>
    <div class="low-banner">
      <div class="text-block-24">Your First Class Business Consultant</div>
    </div>
    <div class="div-block-4">
      <h1 class="heading-2">Complete Accounting &amp; Tax Service</h1>
      <div class="text-block-3">The changes that the Government has implemented on tax policies have far reaching implications.</div>
      <div class="div-block-5">
        <div class="div-block-6 home">
          <h1 class="heading-3">Audit and assurance</h1>
          <div class="text-block-5">Our audit and supplementary audit services will help you meet regulatory requirements, as well as the particular needs of your organization.</div>
        </div>
        <div class="div-block-6 two">
          <h1 class="heading-4">Taxation</h1>
          <div class="text-block-4">The changes that the Government has implemented on tax policies have far reaching implications on business every year and as a result there is need for a dynamic team to keep abreast of them.</div>
        </div>
        <div class="div-block-6 two">
          <h1 class="heading-5">Advisory services</h1>
          <div class="text-block-6">We offer a broad range of professional services for the public, private and civil society sectors aimed at enhancing the overall operating efficiency and capacity of our clients</div>
        </div>
      </div><a href="/services" class="link">See our services</a>
      <div class="div-block-7">
        <h1 class="heading-2 blog">From Our Blog</h1>
        <div data-animation="slide" data-duration="500" data-infinite="1" class="slider-2 w-slider">
          <div class="mask w-slider-mask">
            @foreach ($posts->chunk(3) as $chunk)
            <div class="w-slide">
              <div class="div-block-8">
                <div class="div-block-10">
                  @foreach ($chunk as $post)
             <div class="div-block-9"><a href="/blog/{{$post->slug}}"/><img src="{{ asset('uploads/'.$post->image)}}" alt="" class="image-3"> </a>
              <a class="alinks" href="/blog/{{$post->slug}}"/><div class="text-block-7">{{ $post->title }}</div></a>
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
    </div>
    <div class="div-block-12">
      <div class="text-block-12">Let&#x27;s grow your business together</div>
    </div>
       @endsection