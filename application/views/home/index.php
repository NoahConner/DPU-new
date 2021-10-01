<?php
// Home page slider
//$this->load->view('widgets/banner');
// Feature product
//$this->load->view('widgets/feature_products');
// Steps
//$this->load->view('widgets/steps');
// Categories
//$this->load->view('widgets/about_us');
// Our Services
//$this->load->view('widgets/our_services');
// News
//$this->load->view('widgets/news');
// Feeds
//$this->load->view('widgets/feeds');
// Login with Social media
//$this->load->view('widgets/login_social_media');
// Information
//$this->load->view('widgets/information');

?>

<!-- Best Deal Sec Start -->
<?php //$this->load->view('widgets/best_deals');
?>
<!-- Best Deal Sec End -->


<!-- Top 10 Selected Production Sec Start -->
<?php //$this->load->view('widgets/top_ten');
?>
<!-- Top 10 Selected Production Sec End -->


<!-- popular Search Sec Start -->
<?php //$this->load->view('widgets/popular_search');
?>
<!-- popular Search Sec End -->


<!-- service Sec Start -->
<?php //$this->load->view('widgets/service');
?>
<!-- service Sec End -->


<!-- Flash Sale Sec Start -->
<?php //$this->load->view('widgets/flash_sale');
?>
<!-- Flash Sale Sec End -->


<!-- popular Search Sec Start -->
<?php //$this->load->view('widgets/hot_sale');
?>
<!-- popular Search Sec End -->


<!-- Recently viewed Sec Start -->
<?php //$this->load->view('widgets/recently');
?>
<!-- Recently viewed Sec End -->

<style>
  .desktopGrid .col-sm-4 .bx {
    height: 100%;
    margin-top: 0 !important;
  }

  .desktopGrid .col-sm-4 {
    margin-top: 34px;
  }

  /* slider case studies css */
  :root {
    --dark-green: #9cc675;
    --dark-yellow: #e89a3d;
    --extra-light-brown: #fdf0d7;
    --light-brown: #ecd5ab;
    --dark-brown: #915b40;
    --light-yellow: #f8e3a8;
    --light-red: #f3ac99;
    --light-teal: #a6c8cc;
    --light-gray: #ddd5d6;
    --sky-blue: #6d8de7;
    --default-color: #ff5052;
    --secondry-color: #ff5052;
    --dark-red: #fb2426;
  }

  .halfbox .content p {
    color: #fff;
  }

  .team-info-item.active .heading,
  .team-info-item.active .content {
    color: #fff;
  }

  .swiper-container {
    width: 100%;
    height: 100%;

  }

  .swiper-slide {
    font-size: 18px;
    color: #fff;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    padding: 40px 60px;
  }

  .parallax-bg {
    position: absolute;
    left: 0;
    top: 0;
    width: 130%;
    height: 100%;
    -webkit-background-size: cover;
    background-size: cover;
    background-position: center;
  }

  .swiper-slide .subtitle {
    padding-left: 60px;

  }


  .colored-container {
    width: 100%;
    height: 100%;
    position: relative;
    background: #fff;

  }

  .halfbox {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    background: linear-gradient(199deg, #ff5052, #356aff);
    width: 50%;
    height: 100%;
    padding: 50px 50px;
    box-sizing: border-box;
  }

  .slidebox {
    position: relative;
    width: 450px;
  }

  .bordered-img {
    width: 350px;
    height: 350px;
    position: relative;
  }

  .bordered-img img {
    width: 100%;
    height: 100%;
    padding: 2px;
    object-fit: contain;
    object-position: right;
  }

  .bordered-img:before,
  .bordered-img:after {
    content: '';
    border: 8px solid transparent;
    width: 100%;
    height: 100%;
    position: absolute;
    display: block;
  }

  .bordered-img:after {
    border-color: var(--secondry-color);
    top: 0;
    /* left: 2px; */
    width: 29%;
    right: 0px;
    border-left-width: 0;
  }

  .title {
    font-size: 50px;

    text-transform: uppercase;
    position: relative;

    /* letter-spacing: 1px; */
    font-weight: bold;
    margin-left: 18px;
    color: var(--secondry-color);

    width: 160px;
    margin-left: auto;
    line-height: 45px;
  }

  article.content {
    padding: 30px 60px 30px 0 !important;
  }

  .title>span {
    color: #280f6b;
    /* margin-right: 15px; */
    font-size: 30px;
  }

  .tag-box {
    --size: 110px;
    background: var(--sky-blue);
    /*color: var(--dark-brown);*/
    border: 5px solid #fff;
    width: var(--size);
    height: var(--size);
    position: absolute;
    left: -95px;
    top: 70px;
    font-size: 30px;
    text-transform: uppercase;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    box-shadow: 0 0 22px #00000029;
  }

  .swiper-slide .subtitle {
    font-size: 18px;
    color: #888;
    font-weight: 300;
    padding: top;
    margin: 15px 0;
    margin-bottom: 50px;
  }

  .content-box {
    position: absolute;
    left: 62%;
    width: 300px;
    top: 8%;
    text-align: right;
  }

  .btn.btn-main {
    background: var(--secondry-color);
    color: #fff;
    font-size: 16px;
    font-weight: 400;
    outline: none;
    border: none;
    position: relative;
    padding: 15px 40px;

  }

  .btn.btn-main:before {
    content: '';
    width: 5px;
    background: var(--dark-red);
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
  }

  .slider-nav-wrapper {
    width: 10%;
    position: absolute;
    top: 85%;
    margin: auto;
    left: 0;
    right: 0;
  }

  .swiper-slide {
    background-position: center;
    background-size: cover;
    width: 100%;
  }

  .swiper-button-next,
  .swiper-button-prev {
    position: absolute;
    top: 50%;
    z-index: 10;
    cursor: pointer;
    background-position: center;
    background-repeat: no-repeat;
    background: var(--dark-red);
    padding: 0px;
    background-repeat: no-repeat;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    background-position: center;
    padding: 3px;
    box-shadow: bord;
    box-sizing: border-box;
    background-size: 17px !important;
  }

  .verticle-animation .swiper-slide {
    display: flex;
    justify-content: flex-end;
  }

  .slidebox {
    margin-right: 100px;
    margin-top: 50px;
  }

  .swiper-pagination {
    position: absolute;
    left: 0;
    right: inherit !important;
  }

  .swiper-pagination-bullet {
    width: 20p x;
    height: 4px;
    display: inline-block;
    border-radius: 100%;
    background: #000;

    border-radius: 0;
    opacity: 1;
    margin: 14px 0 !important;
    transition: all .3s;
  }

  .swiper-pagination-bullet-active {
    opacity: 1;
    background: #000000;
    width: 30px;
  }

  .semiColop {
    overflow: hidden;
    height: 640px
  }

  .team-info .team-info-item {
    font-size: 22px;
    padding: 15px 30px;
    display: none;
    position: absolute;
    display: none;
  }

  .team-info .team-info-item.active {
    display: block;
  }

  .semiColop {}

  @media screen and (min-width: 1440px) {
    .tag-box {
      left: unset;
      right: 110%;
    }
  }

  @media only screen and (max-width:1024px) {
    .tag-box {
      --size: 90px;
      right: 185px;
      top: -110px;
      left: unset;
    }

    .slidebox {
      margin-top: 70px;
    }

    .team-info .team-info-item {
      width: 400px;
      height: 100%;
    }

    .swiper-button-next {
      right: 0;
    }

    .swiper-button-prev {
      left: 0;
    }
  }

  @media only screen and (max-width: 768px) {
    .tag-box {
      --size: 80px;
      right: 88%;
      top: -18%;
    }

    .content-box {
      position: absolute;
      left: 55%;
      width: 400px;
      text-align: center;
      top: 65%;
      height: fit-content;
    }

    .title {
      margin-left: 0;
      width: 100%;
    }

    .team-info .team-info-item {
      width: 380px;
      height: 100%;
    }

    .slidebox .flex-left {
      width: 350px;
      position: absolute;
      top: -10%;
      left: 55%;
    }

    .team-info .team-info-item {
      width: 360px;
    }

    .swiper-button-prev {
      left: -20%;
    }

    .swiper-button-next {
      right: -20%;
    }
  }
  @media screen and (max-width: 540px) {
    .content-box {
      left: 50% !important;
      width: 200px;
      top: 60%;
      max-width: 200px;
      height: fit-content;
    }

    .title>span {
      font-size: 20px;
    }

    .slidebox {
      margin-right: 0;
    }

    .tag-box {
      right: 90%;
      top: 50%;
    }

    .team-info-item .heading {
      font-size: 1.5rem;
    }

    article.content {
    padding: 30px 0 30px 0 !important;
}

    .team-info .team-info-item {
      width: 250px;
    }

    .halfbox {
      padding: 50px 0;
    }

    .swiper-slide {
      padding: 40px 0;
    }

    .slidebox .flex-left {
      top: 0;
    }

    .bordered-img {
      width: 185px;
      height: 300px;
    }
  }
  @media screen and (max-width: 414px) {
    .content-box {
      left: 50% !important;
      width: 200px;
      top: 60%;
      max-width: 200px;
      height: fit-content;
    }

    .title>span {
      font-size: 20px;
    }

    .slidebox {
      margin-right: 0;
    }

    .tag-box {
      right: 90%;
      top: 50%;
    }

    .team-info-item .heading {
      font-size: 1.5rem;
    }

    article.content {
      padding: 30px 60px 30px 0 !important;
    }

    .team-info .team-info-item {
      width: 250px;
    }

    .halfbox {
      padding: 50px 0;
    }

    .swiper-slide {
      padding: 40px 0;
    }

    .slidebox .flex-left {
      top: 0;
    }

    .bordered-img {
      width: 185px;
      height: 300px;
    }
  }

  @media screen and (max-width: 375px) {
    .tag-box {
      right: 95%;
      --size: 60px;
      font-size: 20px;
    }

    .bordered-img {
      width: 165px;
    }

    .team-info-item .content p {
      font-size: 12px;
    }

    .team-info .team-info-item {
      width: 240px;
    }
  }
</style>

<div class="main-cont">


  <section class="main-banner">
    <!-- <div class="container">
      <div class="row"> -->
    <!-- <div class="col-md-12 col-lg-5 banner-ele"> -->
    <!-- <h4 class="animate flipInX" data-wow-delay="1s">DESIGN, DEVELOPMENT, MARKETING</h4> -->

    <!-- <h1 class="animate flipInX" data-wow-delay="1s">WE TREAT YOUR</h1>
          <h1 class="animate flipInX" data-wow-delay="1s">BUSINESS</h1>
          <h1 class="animate flipInX" data-wow-delay="1s">LIKE OUR OWN</h1> -->
    <!-- <p class="animate flipInX" data-wow-delay="1.8s"> </p> -->
    <!-- <a href="<?= g('base_url') ?>get-a-quote" class="primary-btn green-btn animate flipInX" data-wow-delay="2.6s">Get Started</a>
        </div> -->
    <!-- <div class="col-md-7 banner-ele banner-img">
          <figure> -->
    <!-- <div class="animate bounceInDown" data-wow-delay="0.5s" style="position: relative; top: -164px; left: -4px;">
             
             <img class="lazy" src="<?= g('images_root') ?>home-banner-img.png" data-src="<?= g('images_root') ?>home-banner-img.png" width="1430" height="965" alt="Image">
             
            </div> -->

    <!-- <div class="animate bounceInDown" data-wow-delay="1.5s" style="left: 270px; top: 99px;">
              <img src="<?= g('images_root') ?>home-video.png" alt="Image" data-parallaxit data-parallax-value="-20">
            </div>
            <div class="animate bounceInDown" data-wow-delay="1s" style="right: 302px; top: 132px;">
              <img src="<?= g('images_root') ?>home-text.png" alt="Image" data-parallaxit data-parallax-value="-20">
            </div>
            <div class="animate bounceInDown" data-wow-delay="2.0s" style="right: 115px; top: 147px;">
              <img src="<?= g('images_root') ?>home-a.png" alt="Image" data-parallaxit data-parallax-value="-20"> 
            </div>
            <div class="animate fadeInUp" data-wow-delay="2.5s" style="right: 237px; bottom: -82px;">
              <img src="<?= g('images_root') ?>home-pencil-big.png" alt="Image" data-parallaxit data-parallax-value="-20">
            </div>
            <div class="animate rollIn" data-wow-delay="3.0s" style="left: 16px; bottom: 47px;">
              <img src="<?= g('images_root') ?>home-penceil-small.png" alt="Image" data-parallaxit data-parallax-value="-20">
            </div>
            <div class="animate zoomInLeft" data-wow-delay="3.5s" style="left: 262px; top: 0;">
              <img src="<?= g('images_root') ?>home-artwork-left.png" alt="Image" data-parallaxit data-parallax-value="-20"> -->
    <!-- </figure>
          </div> -->

    <!-- </div>
      </div> -->

    <div class="containerCS">
      <div class="row pRel">
        <div class="flexBOxC">
          <div class="txt">
            <h1 class="animate flipInX" data-wow-delay="1s">WE TREAT YOUR</h1>
            <h1 class="animate flipInX" data-wow-delay="1.5s">BUSINESS</h1>
            <h1 class="animate flipInX" data-wow-delay="2s">LIKE OUR OWN</h1>
            <a href="<?= g('base_url') ?>get-a-quote" class="primary-btn green-btn animate flipInX mt2" data-wow-delay="2.5s">Get Started</a>
          </div>

          <div>
            <figure class="animate bounceInDown" data-wow-delay="0.5s">
              <img class="lazy" src="<?= g('images_root') ?>SVG/box.svg" data-src="<?= g('images_root') ?>SVG/box.svg" width="100%" height="100%" alt="Image">
            </figure>
            <figure class="animate zoomIn BannerFloat" data-wow-delay="1s">
              <img class="lazy" src="<?= g('images_root') ?>SVG/rocket.svg" data-src="<?= g('images_root') ?>SVG/rocket.svg" class="rocket" width="100%" height="100%" alt="Image">
            </figure>
          </div>

        </div>
      </div>
    </div>

    <div class="move-down">
      <i class="icon-header-arrow"></i>
    </div>
  </section>
</div>


<!-- <section class="content info-sec">
    <div class="container">
      <div class="row cntr-content">
        <div class="col-md-6 animate slideInLeft">
          <figure class="ele-img-lft">
            <img class="lazy" src="<?= g('images_root') ?>first-fold-image.png" data-src="<?= g('images_root') ?>first-fold-image.png" alt="Info">
          </figure>
        </div>
        <div class="col-md-6 animate slideInRight">
          <div class="heading-sep">
            <span class="seperator-left"></span>              
          </div>
        <h2>The Three Important Cs!</h2>
        <h3 style="font-weight: bold;">Creativity</h3>      
        <p>Making your website stand out in the millions of others is our principal goal.</p>
        <h3 style="font-weight: bold;">Clarity</h3>
        <p> Our customers are updated about each step of the process with clarity.</p>
        <h3 style="font-weight: bold;">Customer satisfaction</h3>
        <p>Customer satisfaction is of utmost importance to us and we believe in prioritizing our customers’ requirements the most.</p>

        <a href="javascript:$zopim.livechat.window.show();" class="primary-btn green-btn">Talk To US</a>
        <a href="<?= g('base_url') ?>get-a-quote" class="btn-text">Get a Free Quote</a>
        </div>
      </div>
    </div>
  </section> -->
<section class="content info-sec animate fadeInUp upSec">
  <div class="containerCS">
    <div class="row ">
      <div class="col-md-12">
        <div class="heading-sep">
          <span class="seperator"></span>
        </div>
        <h2 class="text-center">The Revolutionary Design,<br />
          Development, and Marketing Agency</h2>
      </div>
      <div class="dflexi">
        <div class="left animate slideInLeft">
          <h2 class="text-left">We Transform Brands Into<br />
            Success Stories</h2>
          <p>
            We are a team of professionals that have been in the industry for years. We do everything from design to app development and marketing, with a proven track record of success.
          </p>
        </div>
        <div class="right animate slideInRight">
          <img src="<?= g('images_root') ?>1x/goup.png" data-src="<?= g('images_root') ?>1x/goup.png" height="100%" width="100%" alt="">
        </div>
      </div>
    </div>
  </div>
</section>


<section class="content info-sec animate fadeInUp LeadingDig">
  <div class="containerCS">
    <div class="row ">
      <div class="col-md-12">
        <div class="heading-sep">
          <span class="seperator"></span>
        </div>
        <h2 class="text-center animate bounceIn" data-wow-delay="0.5s">We are a leading Digital Agency that helps <br />
          entrepreneurs, startups, and enterprises develop <br />
          results-driven digital products</h2>
      </div>
      <div class="text-center w-100">
        <h2 class="get mt4 animate fadeIn" data-wow-delay="0.5s">
          Get a website created that converts visitors into customers
        </h2>
      </div>
      <div class="d-flexible mt6 ">
        <div class="left animate flipInX" data-wow-delay="0.5s">
          <h2 class="">
            Why Does Your Business Need an <br />
            Online Presence?
          </h2>
          <p>
            <strong class="pwhite">We know that the internet is where business happens.</strong> That’s why we work with businesses to create a custom web presence that will help them grow their sales. <strong class="pwhite">Our team of experts can design your site from scratch or build an app for your business.</strong> You don’t need to worry about any technical details – our experts are pros at making things look great while also being easy to use. At the same time, we can get you the best content written too.
          </p><br />
          <p>
            <strong class="pwhite">When you have a beautiful, functional website or an app, customers find you more easily online and trust your brand more quickly than ever before!</strong> And when they buy something from your site, they won't be disappointed by slow load times or buggy interfaces because everything was built just for them by us! Plus, if there's anything wrong with the site after launch day - which hopefully never happens - our customer service team is always available to help out 24/7.
          </p>

        </div>
        <div class="right">
          <img src="<?= g('images_root') ?>1x/questions.png" data-src="<?= g('images_root') ?>1x/questions.png" class="animate fadeInUp" data-wow-delay="0.5s" height="100%" width="100%" alt="">
        </div>
      </div>
      <div class=" w-100">
        <h2 class=" ipadMar">
          Have Something in Mind?
        </h2>
        <a href="#" class="primary-btn green-btn animate flipInX mt2" onclick="gotoscroll('.free-consult');" data-wow-delay="1s">Let’s Discuss</a>
      </div>
    </div>
  </div>
</section>

<section class="content info-sec animate fadeInUp sftSol">
  <div class="containerCS">
    <div class="row ">
      <div class="sftDIv">
        <div class="heading-sep">
          <span class="seperator"></span>
        </div>
        <h2 class="text-center animate bounceIn" data-wow-delay="0.5s">We provide software solutions for<br />
          businesses that want to grow<br />
          exponentially</h2>
        <a href="#" class="primary-btn green-btn animate flipInX mt2" onclick="gotoscroll('.free-consult');" data-wow-delay="1s">Let’s Discuss</a>
      </div>
    </div>
  </div>
  <div class="connor">
    <img src="<?= g('images_root') ?>SVG/table.svg" data-src="<?= g('images_root') ?>SVG/table.svg" class="animate fadeInUp" data-wow-delay="0.5s" height="100%" width="100%" alt="">
  </div>
</section>


<section class="content alter-bg srv-sec animate fadeInUp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading-sep">
          <span class="seperator"></span>
        </div>
        <h2 class="text-center">WHY US</h2>
        <p class="text-center sub-head">Design Pros USA provides a full range of creative services to craft unique customer experiences and inspires them at every touchpoint. Every detail, every decision is intricately crafted with only the best in mind for our client’s brands.</p>
      </div>
    </div>
    <div class="row desktopGrid">
      <div class="col-sm-4 animate bounceIn" data-wow-delay="0.5s">
        <div class="bx">
          <div class="icon-wrapper">
            <div class="circle">
              <svg style="filter: drop-shadow(4px 5px 4px rgba(255,167,5,0.3)); fill: #ffa705;" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 177.4 197.4">
                <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
              </svg>
            </div>
            <div class="circle">
              <svg style="filter: drop-shadow(4px 5px 4px rgba(255,86,0,0.3)); fill: #ff5600;" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 177.4 197.4">
                <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
              </svg>
            </div>
            <figure>
              <img class="lazy" src="<?= g('images_root') ?>brand-development.svg" data-src="<?= g('images_root') ?>brand-development.svg" alt="brand-development">
            </figure>
          </div>
          <h4>Customizability</h4>
          <p>The developers at Design Pros USA are the kings of website development and digital product development. We offer you complete freedom over the website and its layout. Our designers are capable of creating anything and everything you wish, making it possible for us to deliver a 100% customizable website or a digital product of your choice.</p>
          <a href="<?= g('base_url') ?>web-design-development">Learn More</a>
        </div>
      </div>
      <div class="col-sm-4 animate bounceIn" data-wow-delay="0.5s">
        <div class="bx">
          <div class="icon-wrapper">
            <div class="circle">
              <svg style="filter: drop-shadow(4px 5px 4px rgba(65,193,123,0.3)); fill: #41c17b;" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 177.4 197.4">
                <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
              </svg>
            </div>
            <div class="circle">
              <svg style="filter: drop-shadow(4px 5px 4px rgba(0,153,69,0.3)); fill: #009945;" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 177.4 197.4">
                <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
              </svg>
            </div>
            <figure>
              <img class="lazy" src="<?= g('images_root') ?>website-design-&development.svg" data-src="<?= g('images_root') ?>website-design-&development.svg" alt="website-design-&development">
            </figure>
          </div>
          <h4>Best tools</h4>
          <p>Creating a captivating and responsive website and apps that generate revenue is only possible by using the best tools for it. We do not claim to be the best, we let our work speaks for itself. The developers at Design Pros USA use the relevant tools needed to achieve the website design and functionality you are looking for.</p>
          <a href="<?= g('base_url') ?>web-application-development">Learn More</a>
        </div>
      </div>
      <div class="col-sm-4 animate bounceIn" data-wow-delay="0.5s">
        <div class="bx">
          <div class="icon-wrapper">
            <div class="circle">
              <svg style="filter: drop-shadow(4px 5px 4px rgba(86,189,253,0.3)); fill: #56bdfd;" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 177.4 197.4">
                <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
              </svg>
            </div>
            <div class="circle">
              <svg style="filter: drop-shadow(4px 5px 4px rgba(58,68,237,0.3)); fill: #3a44ed;" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 177.4 197.4">
                <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
              </svg>
            </div>
            <figure>
              <img class="lazy" src="<?= g('images_root') ?>ecommerce.svg" data-src="<?= g('images_root') ?>ecommerce.svg" alt="marketing-colleterall">
            </figure>
          </div>
          <h4>Aesthetic design</h4>
          <p>Nobody likes a website that’s not responsive and doesn’t look good either. <strong class="pblack">Nearly 60% of internet users say they won’t recommend a business with an unattractive mobile design.</strong> With our creative and talented designers, we know what’s best for your website, so we craft
            something beautiful for you that will give your audience an immersive experience.</p>
          <a href="<?= g('base_url') ?>graphic-design">Learn More</a>
        </div>
      </div>
      <div class="col-sm-4 animate bounceIn" data-wow-delay="0.5s">
        <div class="bx">
          <div class="icon-wrapper">
            <div class="circle">
              <svg style="filter: drop-shadow(4px 5px 4px rgba(255,167,5,0.3)); fill: #ffa705;" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 177.4 197.4">
                <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
              </svg>
            </div>
            <div class="circle">
              <svg style="filter: drop-shadow(4px 5px 4px rgba(255,86,0,0.3)); fill: #ff5600;" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 177.4 197.4">
                <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
              </svg>
            </div>
            <figure>
              <img class="lazy" src="<?= g('images_root') ?>appDev.svg" data-src="<?= g('images_root') ?>appDev.svg" alt="motion-graphics">
            </figure>
          </div>
          <h4>App development and digital solutions</h4>
          <p>At Design Pros USA we believe that each interaction with a brand can be an opportunity to create meaningful connections and build a mutual benefit between the customer and the company as well. We offer customized app development services for brands on multiple platforms which will help them nurture their audience through smart functionalities delivered by attractive aesthetics.</p>
          <a href="<?= g('base_url') ?>cross-platform-hybrid-mobile-app-development">Learn More</a>
        </div>
      </div>
      <div class="col-sm-4 animate bounceIn" data-wow-delay="0.5s">
        <div class="bx">
          <div class="icon-wrapper sm">
            <div class="circle">
              <svg style="filter: drop-shadow(4px 5px 4px rgba(65,193,123,0.3)); fill: #41c17b;" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 177.4 197.4">
                <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
              </svg>
            </div>
            <div class="circle">
              <svg style="filter: drop-shadow(4px 5px 4px rgba(0,153,69,0.3)); fill: #009945;" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 177.4 197.4">
                <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
              </svg>
            </div>
            <figure>
              <img class="lazy" src="<?= g('images_root') ?>digital-marketing.svg" data-src="<?= g('images_root') ?>digital-marketing.svg" alt="brand-development">
            </figure>
          </div>
          <h4>Digital Marketing</h4>
          <p>We create effective and scalable digital marketing campaigns that deliver stellar ROI. We make sure your money generates a high ROI, and the marketing campaigns elevate your brand to a whole new level.</p>
          <a href="<?= g('base_url') ?>digital-marketing">Learn More</a>
        </div>
      </div>
      <div class="col-sm-4 animate bounceIn" data-wow-delay="0.5s">
        <div class="bx">
          <div class="icon-wrapper">
            <div class="circle">
              <svg style="filter: drop-shadow(4px 5px 4px rgba(86,189,253,0.3)); fill: #56bdfd;" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 177.4 197.4">
                <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
              </svg>
            </div>
            <div class="circle">
              <svg style="filter: drop-shadow(4px 5px 4px rgba(58,68,237,0.3)); fill: #3a44ed;" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 177.4 197.4">
                <path d="M0,58.4v79.9c0,6.5,3.5,12.6,9.2,15.8l70.5,40.2c5.6,3.2,12.4,3.2,18,0l70.5-40.2c5.7-3.2,9.2-9.3,9.2-15.8V58.4 c0-6.5-3.5-12.6-9.2-15.8L97.7,2.4c-5.6-3.2-12.4-3.2-18,0L9.2,42.5C3.5,45.8,0,51.8,0,58.4z"></path>
              </svg>
            </div>
            <figure>
              <img class="lazy" src="<?= g('images_root') ?>content-development.svg" data-src="<?= g('images_root') ?>content-development.svg" alt="content-development">
            </figure>
          </div>
          <h4>Content Development</h4>
          <p>We generate unique and creative content that improves your website traffic, generates higher conversion rates and builds trust among your audience.</p>
          <a href="<?= g('base_url') ?>content-development">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="content alter-bg srv-sec animate fadeInUp" style="overflow:hidden;">
  <div class="containerCSp">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="heading-sep"></div>
          <span class="seperator"></span>
        </div>
        <h2 class="text-center">Case Studies</h2>
      </div>
    </div>
    <div class="semiColop mt3">
      <div class="colored-container">

        <div class="swiper-container verticle-animation">
          <div class="halfbox team-info">
            <li class="team-info-item active">
              <h1 class="heading">Client brief</h1>
              <article class="content">
                <p>
                  The client wanted a portal to be created that would let Realtor's and Cleaner's dreams come true. This platform allows for ease of access on both sides, meaning whoever visits will find the house clean!
                  The portal on the website should let cleaners and Realtors register so they can find their preferred jobs.

                </p>


              </article>
            </li>
            <li class="team-info-item">
              <h1 class="heading">Client brief</h1>
              <article class="content">
                <p>
                  The client wanted to create a portal where all the football players registered themselves nationwide. It will help coaches find the hottest prospects according to skill level and allow these athletes to be contacted while following regulations.

                </p>

              </article>
            </li>
            <li class="team-info-item">
              <h1 class="heading">Client brief</h1>
              <article class="content">
                <p>
                  Andre Ferguson (our client) wanted to honor his father(Eddie Ferguson) by getting a short high-quality animation video created about the life story of an ex-marine frogman who overcomes challenges while being an integral part of the US navy seals.

                </p>
                <!-- <p>
                  Fork on Github <a href="https://github.com/md-aqil">Md Aqil</a>
                </p>
                <p>
                  Find My Portfolio: <a href="https://mdaqil.tk">Md Aqil</a>
                </p> -->

              </article>
            </li>
            <li class="team-info-item">
              <h1 class="heading">Client brief</h1>
              <article class="content">
                <p>
                  The client had a football coaching club. They wanted to get their players registered on the website so that the self-evaluation on the portal could rate players according to their expertise. This would let coaches who visit the website see players according to their level of expertise and skill set.
                </p>

              </article>
            </li>

          </div>
          <div class="swiper-wrapper">


            <div class="swiper-slide">
              <div class="slidebox">
                <div class="flex-left">
                  <div class="bordered-img">
                    <div class="tag-box" data-swiper-parallax="-300">
                      DPU
                    </div>
                    <img src="<?= g('images_root') ?>1x/ipad1.png" alt="">
                  </div>
                </div>

                <div class="content-box">
                  <div class="title" data-swiper-parallax="-300">
                    <span>Clean To
                      Close</span>
                  </div>

                  <button class="btn btn-main">
                    See More
                  </button>


                </div>

              </div>
            </div>
            <div class="swiper-slide">
              <div class="slidebox">
                <div class="flex-left">
                  <div class="bordered-img">
                    <div class="tag-box" data-swiper-parallax="-300">
                      DPU
                    </div>
                    <img src="<?= g('images_root') ?>1x/pc.png" alt="">

                  </div>
                </div>

                <div class="content-box">
                  <div class="title" data-swiper-parallax="-300">
                    <span>National Specialist
                      Database</span>
                  </div>

                  <button class="btn btn-main">
                    See More
                  </button>


                </div>

              </div>
            </div>
            <div class="swiper-slide" data-swiper-autoplay="2000">
              <div class="slidebox">
                <div class="flex-left">
                  <div class="bordered-img">
                    <div class="tag-box" data-swiper-parallax="-300">
                      DPU
                    </div>
                    <img src="<?= g('images_root') ?>1x/mobile.png" alt="">

                  </div>
                </div>
                <div class="content-box">
                  <div class="title" data-swiper-parallax="-300">
                    <span>33 black frog</span>
                  </div>

                  <button class="btn btn-main">
                    See More
                  </button>


                </div>

              </div>
            </div>
            <div class="swiper-slide">
              <div class="slidebox">
                <div class="flex-left">
                  <div class="bordered-img">
                    <div class="tag-box" data-swiper-parallax="-300">
                      DPU
                    </div>
                    <img src="<?= g('images_root') ?>1x/mac.png" alt="">

                  </div>
                </div>

                <div class="content-box">
                  <div class="title" data-swiper-parallax="-300">
                    <span>Phase 3 kicking</span>
                  </div>

                  <button class="btn btn-main">
                    See More
                  </button>


                </div>

              </div>
            </div>



          </div>

          <div class="slider-nav-wrapper">
            <div class="swiper-button-prev swiper-button-white"></div>
            <div class="swiper-button-next swiper-button-white"></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<? $this->load->view('widgets/counter'); ?>


<? $this->load->view('widgets/custom_quote'); ?>

<section class="content portfolio-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading-sep">
          <span class="seperator"></span>
        </div>
        <h2 class="text-center">Branding is at the core of everything we do. Experience Holistic Brand Development with us!</h2>
      </div>
    </div>
  </div>

  <div class="portfolio">
    <div id="portfolio-filters" class="portfolio-button-group">
      <button class="button is-checked" data-filter=".all">All</button>
      <button class="button" data-filter=".logos">Logo Design</button>
      <button class="button" data-filter=".branding">Branding</button>
      <button class="button" data-filter=".web-design-dev">Website Design &amp; Development</button>
      <button class="button" data-filter=".motion-graphics">Motion Graphics</button>
    </div>

    <div class="grid">

      <!-- all -->
      <div class="element-item all">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/web-development/cs27.jpg" data-src="<?= g('images_root') ?>portfolio/web-development/15-t.png" alt="hfs">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/web-development/cs27p.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item all">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/branding/csn4.jpg" data-src="<?= g('images_root') ?>portfolio/placeholder.png" data-original="<?= g('images_root') ?>portfolio/branding/csn4.jpg" alt="baystate">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/branding/csn4.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item all">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/motion-graphics/Ball-Box.png" data-src="<?= g('images_root') ?>portfolio/placeholder.png" data-original="<?= g('images_root') ?>portfolio/motion-graphics/Ball-Box.png" alt="Ball-Box">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="252886124.html">
            <i class="fa fa-play"></i>
          </a>
        </div>
      </div>
      <div class="element-item all">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/brandlogo/lg1.jpg" data-src="<?= g('images_root') ?>portfolio/placeholder.png" data-original="<?= g('images_root') ?>portfolio/brandlogo/lg1.jpg" alt="bbb">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/brandlogo/lg1.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item all">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/web-development/cs26.jpg" data-src="<?= g('images_root') ?>portfolio/web-development/2-t.png" alt="hfs">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/web-development/cs26p.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item all">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/brandlogo/lg2.jpg" data-src="<?= g('images_root') ?>portfolio/placeholder.png" data-original="<?= g('images_root') ?>portfolio/brandlogo/lg2.jpg" alt="ceucentral-logo">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/brandlogo/lg2.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item all">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/motion-graphics/BCMG.png" data-src="<?= g('images_root') ?>portfolio/placeholder.png" data-original="<?= g('images_root') ?>portfolio/motion-graphics/BCMG.png" alt="BCMG">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="252886262.html">
            <i class="fa fa-play"></i>
          </a>
        </div>
      </div>
      <div class="element-item all">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/motion-graphics/demons-music-video.png" data-src="<?= g('images_root') ?>portfolio/motion-graphics/demons-music-video.png" data-original="<?= g('images_root') ?>portfolio/motion-graphics/demons-music-video.png" alt="Demon’s-Music-Video">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="252886432.html">
            <i class="fa fa-play"></i>
          </a>
        </div>
      </div>
      <div class="element-item all">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/web-development/cs25.jpg" data-src="<?= g('images_root') ?>portfolio/web-development/22-t.png" alt="hfs">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/web-development/cs25p.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item all">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/web-development/cs24.jpg" data-src="<?= g('images_root') ?>portfolio/web-development/11-t.png" alt="hfs">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/web-development/cs24p.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <!-- all end -->

      <!-- branding -->
      <div class="element-item branding">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/placeholder.png" data-original="<?= g('images_root') ?>portfolio/branding/csn1.jpg" alt="baystate">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/branding/csn1.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item branding">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/placeholder.png" data-original="<?= g('images_root') ?>portfolio/branding/csn2.jpg" alt="baystate">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/branding/csn2.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item branding">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/placeholder.png" data-original="<?= g('images_root') ?>portfolio/branding/csn3.jpg" alt="baystate">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/branding/csn3.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item branding">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/placeholder.png" data-original="<?= g('images_root') ?>portfolio/branding/csn4.jpg" alt="baystate">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/branding/csn4.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item branding">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/placeholder.png" data-original="<?= g('images_root') ?>portfolio/branding/csn5.jpg" alt="baystate">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/branding/csn5.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item branding">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/placeholder.png" data-original="<?= g('images_root') ?>portfolio/branding/csn0.jpg" alt="baystate">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/branding/csn0.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>

      <div class="element-item branding">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/placeholder.png" data-original="<?= g('images_root') ?>portfolio/branding/01.jpg" alt="baystate">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/branding/01.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item branding">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/placeholder.png" data-original="<?= g('images_root') ?>portfolio/branding/03.jpg" alt="ceucentral-logo">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/branding/03.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item branding">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/placeholder.png" data-original="<?= g('images_root') ?>portfolio/branding/07.jpg" alt="geek">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/branding/07.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item branding">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/placeholder.png" data-original="<?= g('images_root') ?>portfolio/branding/08.jpg" alt="golfteeshare">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/branding/08.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <!-- branding end -->

      <!-- logos Start-->

      <div class="element-item logos">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/brandlogo/lg1.jpg" data-src="<?= g('images_root') ?>portfolio/brandlogo/lg1.jpg" alt="baystate">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/brandlogo/lg1.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item logos">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/brandlogo/lg2.jpg" data-src="<?= g('images_root') ?>portfolio/brandlogo/lg2.jpg" alt="bbb">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/brandlogo/lg2.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item logos">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/brandlogo/lg3.jpg" data-src="<?= g('images_root') ?>portfolio/brandlogo/lg3.jpg" alt="ceucentral-logo">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/brandlogo/lg3.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item logos">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/brandlogo/lg4.jpg" data-src="<?= g('images_root') ?>portfolio/brandlogo/lg4.jpg" alt="concealedfirearmstraining-1">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/brandlogo/lg4.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item logos">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/brandlogo/lg5.jpg" data-src="<?= g('images_root') ?>portfolio/brandlogo/lg5.jpg" alt="costclass-1">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/brandlogo/lg5.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item logos">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/brandlogo/lg6.jpg" data-src="<?= g('images_root') ?>portfolio/brandlogo/lg6.jpg" alt="flyinghighonpoints">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/brandlogo/lg6.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item logos">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/brandlogo/lg7.jpg" data-src="<?= g('images_root') ?>portfolio/brandlogo/lg7.jpg" alt="geek">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/brandlogo/lg7.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item logos">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/brandlogo/lg8.jpg" data-src="<?= g('images_root') ?>portfolio/brandlogo/lg8.jpg" alt="golfteeshare">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/brandlogo/lg8.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item logos">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/brandlogo/raevenousone_2.jpg" data-src="<?= g('images_root') ?>portfolio/brandlogo/raevenousone_2.jpg" alt="hfs">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/brandlogo/raevenousone_2.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item logos">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/brandlogo/reptees.jpg" data-src="<?= g('images_root') ?>portfolio/brandlogo/reptees.jpg" alt="intibah-logo">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/brandlogo/reptees.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>

      <!-- logos end-->


      <!-- motion-graphics Start-->

      <div class="element-item motion-graphics">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/motion-graphics/thumbnail/croc_scene.png" data-src="<?= g('images_root') ?>portfolio/placeholder.png" data-original="<?= g('images_root') ?>portfolio/motion-graphics/thumbnail/croc_scene.png" alt="Ball-Box">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/motion-graphics/video/Croc_scene_Draft.mp4">
            <i class="fa fa-play"></i>
          </a>
        </div>
      </div>
      <div class="element-item motion-graphics">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/motion-graphics/thumbnail/yashua.png" data-src="<?= g('images_root') ?>portfolio/placeholder.png" data-original="<?= g('images_root') ?>portfolio/motion-graphics/thumbnail/yashua.png" alt="Ball-Box">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/motion-graphics/video/Yashua_FINAL_lowres.mp4">
            <i class="fa fa-play"></i>
          </a>
        </div>
      </div>
      <div class="element-item motion-graphics">
        <figure>
          <img class="lazy img-resize" src="<?= g('images_root') ?>portfolio/motion-graphics/thumbnail/thumbnail5.png" data-original="<?= g('images_root') ?>portfolio/motion-graphics/thumbnail/thumbnail5.png" alt="Ball-Box">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/motion-graphics/video/city-card.mp4">
            <i class="fa fa-play"></i>
          </a>
        </div>
      </div>
      <div class="element-item motion-graphics">
        <figure>
          <img class="lazy img-resize" src="<?= g('images_root') ?>portfolio/motion-graphics/thumbnail/thumbnail6.png" data-original="<?= g('images_root') ?>portfolio/motion-graphics/thumbnail/thumbnail6.png" alt="Ball-Box">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/motion-graphics/video/cogs-agency.mp4">
            <i class="fa fa-play"></i>
          </a>
        </div>
      </div>
      <div class="element-item motion-graphics">
        <figure>
          <img class="lazy img-resize" src="<?= g('images_root') ?>portfolio/motion-graphics/thumbnail/thumbnail7.png" data-original="<?= g('images_root') ?>portfolio/motion-graphics/thumbnail/thumbnail7.png" alt="Ball-Box">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/motion-graphics/video/ecomedia.mp4">
            <i class="fa fa-play"></i>
          </a>
        </div>
      </div>
      <div class="element-item motion-graphics">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/placeholder.png" data-original="<?= g('images_root') ?>portfolio/motion-graphics/thumbnail/engage.png" alt="Ball-Box">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/motion-graphics/video/engage.mp4">
            <i class="fa fa-play"></i>
          </a>
        </div>
      </div>
      <div class="element-item motion-graphics">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/placeholder.png" data-original="<?= g('images_root') ?>portfolio/motion-graphics/thumbnail/jarir.png" alt="Ball-Box">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/motion-graphics/video/jarir.mp4">
            <i class="fa fa-play"></i>
          </a>
        </div>
      </div>
      <div class="element-item motion-graphics">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/placeholder.png" data-original="<?= g('images_root') ?>portfolio/motion-graphics/thumbnail/med.png" alt="Ball-Box">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/motion-graphics/video/med.mp4">
            <i class="fa fa-play"></i>
          </a>
        </div>
      </div>
      <div class="element-item motion-graphics">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/placeholder.png" data-original="<?= g('images_root') ?>portfolio/motion-graphics/thumbnail/zenfone.png" alt="Ball-Box">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/motion-graphics/video/zenfone.mp4">
            <i class="fa fa-play"></i>
          </a>
        </div>
      </div>
      <div class="element-item motion-graphics">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/placeholder.png" data-original="<?= g('images_root') ?>portfolio/motion-graphics/thumbnail/today-show.png" alt="Ball-Box">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/motion-graphics/video/today-show.mp4">
            <i class="fa fa-play"></i>
          </a>
        </div>
      </div>

      <!-- motion-graphics end-->


      <!-- web-design-dev -->

      <div class="element-item  web-design-dev">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/web-development/cs27.jpg" data-src="<?= g('images_root') ?>portfolio/web-development/cs27p.jpg" alt="hfs">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/web-development/cs27p.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item  web-design-dev">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/web-development/cs26.jpg" data-src="<?= g('images_root') ?>portfolio/web-development/cs26p.jpg" alt="hfs">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/web-development/cs26p.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item  web-design-dev">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/web-development/cs25.jpg" data-src="<?= g('images_root') ?>portfolio/web-development/cs25p.jpg" alt="hfs">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/web-development/cs25p.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item  web-design-dev">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/web-development/cs24.jpg" data-src="<?= g('images_root') ?>portfolio/web-development/cs24p.jpg" alt="hfs">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/web-development/cs24p.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item  web-design-dev">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/web-development/cs23.jpg" data-src="<?= g('images_root') ?>portfolio/web-development/cs23p.jpg" alt="hfs">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/web-development/cs23p.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item  web-design-dev">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/web-development/cs22.jpg" data-src="<?= g('images_root') ?>portfolio/web-development/cs22p.jpg" alt="hfs">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/web-development/cs22p.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item  web-design-dev">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/web-development/cs21.jpg" data-src="<?= g('images_root') ?>portfolio/web-development/cs21p.jpg" alt="hfs">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/web-development/cs21p.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item  web-design-dev">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/web-development/cs20.jpg" data-src="<?= g('images_root') ?>portfolio/web-development/cs20p.jpg" alt="hfs">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/web-development/cs20p.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item  web-design-dev">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/web-development/cs19.jpg" data-src="<?= g('images_root') ?>portfolio/web-development/cs19p.jpg" alt="hfs">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/web-development/cs19p.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>
      <div class="element-item  web-design-dev">
        <figure>
          <img class="lazy" src="<?= g('images_root') ?>portfolio/web-development/cs18.jpg" data-src="<?= g('images_root') ?>portfolio/web-development/cs18p.jpg" alt="hfs">
        </figure>
        <div class="info-overlay">
          <a data-fancybox="" href="<?= g('images_root') ?>portfolio/web-development/cs18p.jpg">
            <i class="fa fa-search-plus"></i>
          </a>
        </div>
      </div>

      <!-- web-design-dev  End-->


      <script>
        let a = document.getElementsByClassName('addB')[0];
        if (a) {
          setTimeout(() => {
            a.removeAttribute("style");
            a.classList.add('floating')
          }, 3000)
        }
      </script>

    </div>

  </div>

</section>

<script>
  // slider case studies js
  var colors = [
    '--dark-green',
    '--light-brown',

    '--light-red',
    '--light-teal',
    '--light-gray',
  ];


  var swiperverticle = new Swiper('.swiper-container.verticle-animation', {
    speed: 600,
    parallax: true,
    direction: 'vertical',
    mousewheel: true,

    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    // autoplay: {
    //   delay: 5000,
    // },

  });

  swiperverticle.on('slideChange', function() {
    var index = this.activeIndex;

    // $('.halfbox').css({background: 'var('+colors[index % colors.length]+')'});

    $('.team-info .team-info-item').removeClass('active').eq(this.activeIndex).addClass('active')
  });
</script>
<? $this->load->view('widgets/testimonial'); ?>

<? $this->load->view('widgets/main_inquiry'); ?>