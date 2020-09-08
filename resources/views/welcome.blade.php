@extends('layouts.main')
@section('content')


<section id="hero" class="d-flex align-items-center">

<div class="container">
<div class="simple-slider page-slider">
    <div class="slider-wrapper">
      <!-- First slide -->
      <div class="slider-slide">
        <span class="slider-number"><img src="img/3.jpg" alt=""></span>
      </div>

      <!-- Second slide -->
      <div class="slider-slide is-bright">
        <span class="slider-number"><img src="img/3.jpg" alt=""></span>
      </div>

      <!-- Third slide -->
      <div class="slider-slide">
        <span class="slider-number"><img src="img/3.jpg" alt=""></span>
      </div>

      <!-- Fourth slide -->
      <div class="slider-slide is-bright">
        <span class="slider-number"><img src="img/3.jpg" alt=""></span>
      </div>
    </div>

    <!--Pagination (Not required)-->
    <div class="slider-pagination"></div>

    <!-- Buttons (Not required) -->
    <div class="slider-btn slider-btn-prev"></div>
    <div class="slider-btn slider-btn-next"></div> 
  </div>
  <script>
  new SimpleSlider('.page-slider', {
    autoplay: true,
    delay: 2000
  });
</script>
</div>	


</section><!-- End Hero -->

<main id="main">

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients clients">
  <div class="container">

    <div class="row">

      <div class="col-lg-2 col-md-4 col-6">
        <img src="img/clients/logo.png" class="img-fluid" alt="" data-aos="zoom-in" style="width: 200px;">
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <img src="img/clients/unnamed.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <img src="img/clients/client-3.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <img src="img/clients/client-4.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="300">
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <img src="img/clients/client-5.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="400">
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <img src="img/clients/client-6.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="500">
      </div>

    </div>

  </div>
</section><!-- End Clients Section -->

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>About Us</h2>
    </div>

    <div class="row content">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>
        <ul>
          <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
          <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
          <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
        </ul>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
        <p>
          Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
          velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <a href="#" class="btn-learn-more">Learn More</a>
      </div>
    </div>

  </div>
</section><!-- End About Us Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
  <div class="container">

    <div class="row">
      <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
        <img src="img/counts-img.svg" alt="" class="img-fluid">
      </div>

      <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
        <div class="content d-flex flex-column justify-content-center">
          <div class="row">
            <div class="col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="icofont-simple-smile"></i>
                <span data-toggle="counter-up">1000000</span>
                <p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
              </div>
            </div>

            <div class="col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="icofont-document-folder"></i>
                <span data-toggle="counter-up">85</span>
                <p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
              </div>
            </div>

            <div class="col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="icofont-clock-time"></i>
                <span data-toggle="counter-up">12</span>
                <p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
              </div>
            </div>

            <div class="col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="icofont-award"></i>
                <span data-toggle="counter-up">15</span>
                <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
              </div>
            </div>
          </div>
        </div><!-- End .content-->
      </div>
    </div>

  </div>
</section><!-- End Counts Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Services</h2>
      <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fug</p>
    </div>

    <div class="row">
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
          <div class="icon"><i class="bx bxl-dribbble"></i></div>
          <h4 class="title"><a href="">Lorem Ipsum</a></h4>
          <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
          <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
          <div class="icon"><i class="bx bx-tachometer"></i></div>
          <h4 class="title"><a href="">Magni Dolores</a></h4>
          <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
          <div class="icon"><i class="bx bx-world"></i></div>
          <h4 class="title"><a href="">Nemo Enim</a></h4>
          <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Services Section -->

<!-- ======= More Services Section ======= -->
<section id="news" class="more-services">
  <div class="container">
  <div class="section-title" data-aos="fade-up">
      <h2>News</h2>
      <p>News is eius consequatur ex aliquid fuga eum quidem</p>
    </div>
    <div class="row">
    @foreach ($newsletter as $news)
      <div class="col-md-6 d-flex align-items-stretch">
        <div class="card" data-aos="fade-up" data-aos-delay="100" style="background-image: url({{isset($news)   ? url(('images/news/').$news->image) : ''}});" >
          <div class="card-body">
          
            <h5 class="card-title"><a href="">{{ $news->title}}</a></h5>
            <p class="card-text">{{ $news->news}}</p>
            <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <div class="paginate">{{ $newsletter ->links() }}</div>
</section><!-- End More Services Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Features</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="300">
      <div class="col-lg-3 col-md-4">
        <div class="icon-box">
          <i class="ri-store-line" style="color: #ffbb2c;"></i>
          <h3><a href="">Lorem Ipsum</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
          <h3><a href="">Dolor Sitema</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
          <h3><a href="">Sed perspiciatis</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
        <div class="icon-box">
          <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
          <h3><a href="">Magni Dolores</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-database-2-line" style="color: #47aeff;"></i>
          <h3><a href="">Nemo Enim</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
          <h3><a href="">Eiusmod Tempor</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
          <h3><a href="">Midela Teren</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
          <h3><a href="">Pira Neve</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-anchor-line" style="color: #b2904f;"></i>
          <h3><a href="">Dirada Pack</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-disc-line" style="color: #b20969;"></i>
          <h3><a href="">Moton Ideal</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-base-station-line" style="color: #ff5828;"></i>
          <h3><a href="">Verdo Park</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
          <h3><a href="">Flavor Nivelanda</a></h3>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Features Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Testimonials</h2>
      <p>Magnam dolores commodi suscipit eum quidem consectetur velit</p>
    </div>

    <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="200">
    @foreach ($feedbacks as $feedback)
      <div class="testimonial-wrap">
        <div class="testimonial-item">
          <img src="{{asset('images/feedbacks/'.$feedback->image)}}" class="testimonial-img" alt="">
          <h3>{{ $feedback->name }}</h3>
          <h4>{{ $feedback->profession }}</h4>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            {{ $feedback->feedback }}
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
        </div>
      </div>
    @endforeach

    </div>

  </div>
</section><!-- End Testimonials Section -->


<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Team</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
    </div>

    <div class="row">
    @foreach($teams as $team)
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="100">
          <div class="member-img">
            <img src="{{asset('images/teams/'.$team->image)}}" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>{{ $team->name}}</h4>
            <span>{{ $team->profession}}</span>
          </div>
        </div>
      </div>
      @endforeach

    </div>

  </div>
</section><!-- End Team Section -->

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
  <div class="container">
  <style>
.box:hover {
  animation: shake 0.5s;
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
</style>

    <div class="section-title">
      <h2>Pricing</h2>
      <p>Sit sint consectetur velit nemo qui impedit suscipit alias ea</p>
    </div>

    <div class="row">
    @foreach($prices as $price)
      <div class="col-lg-4 col-md-6">
        <div class="box recommended" data-aos="zoom-in-right" data-aos-delay="200">
          <h1>{{ $price->name}}</h1>
          <h4>{{ $price->price}}<span> / somon</span></h4>
          <ul>
            <li>Aida dere</li>
            <li>Nec feugiat nisl</li>
            <li>Nulla at volutpat dola</li>
            <li class="na">Pharetra massa</li>
            <li class="na">Massa ultricies mi</li>
          </ul>
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Buy Now</a>
          </div>
        </div>
      </div>
      @endforeach  

    </div>

  </div>
</section><!-- End Pricing Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Map</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
    </div>
 
<div class="card" style="border: 2px solid #f50000">
    <div class="card-body" id="mapid"></div>
</div>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>

<style>
    #mapid { min-height: 500px; }
</style>

<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>

<script>
    var map = L.map('mapid').setView([{{ config('leaflet.map_center_latitude') }}, {{ config('leaflet.map_center_longitude') }}], {{ config('leaflet.zoom_level') }});
    var baseUrl = "{{ url('/') }}";

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var marker = L.marker([38.53575, 68.77905]).addTo(map);
    var marker = L.marker([38.574017, 68.801361]).addTo(map);



</script>



  </div>
</section><!-- End Portfolio Section -->

@foreach ($faqs as $faq)
<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq">
  <div class="container">
  
    <div class="section-title" data-aos="fade-up">
      <h2>Frequently Asked Questions</h2>
    </div>
    
    

    <div class="accordion">
    <div class="accordion-item">
        <a href="#" class="heading">
            <div class="icon"></div>
            <div class="title">{{ $faq->question}}</div>
        </a>

        <div class="content">
            <p>
            {{ $faq->answer}}
            </p>
        </div>
    </div>
</div><!-- End F.A.Q Item-->
    @endforeach
  </div>
</section><!-- End F.A.Q Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Contact Us</h2>
    </div>

    <div class="row">

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="contact-about">
          <h3>Orio</h3>
          <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          <div class="social-links">
            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
        <div class="info">
          <div>
            <i class="ri-map-pin-line"></i>
            <p> {{\App\CustomClasses\Helper::getAddres()}}</p>
          </div>

          <div>
            <i class="ri-mail-send-line"></i>
            <p><a href="mailto:{{\App\CustomClasses\Helper::getEmail()}}">{{\App\CustomClasses\Helper::getEmail()}}</a></p>
          </div>

          <div>
            <i class="ri-phone-line"></i>
            <p><a href="tel:+992 {{\App\CustomClasses\Helper::getPhone()}}">{{\App\CustomClasses\Helper::getPhone()}}</a></p>
          </div>
            <div class="call-back">
            <ul>
              <li class="get-started"><a href="#">Обратный звонок</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">

        @if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" date-dismiss="alert">x</button>
            <ul>
                @foreach($errors->all() as $error) 
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ url('welcome/send')}}" method="post" role="form" class="php-email-form">
        {{csrf_field()}}
          <div class="form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validate"></div>
          </div> 
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->


</main><!-- End #main -->


@endsection                     