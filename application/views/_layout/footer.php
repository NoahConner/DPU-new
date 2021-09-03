<?php
//$content_sub = $this->model_cms_page->get_page(13);
?>


    <footer class="footer">
      <div class="container footer-pre">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-lg-3">
            <figure>
              <a href="" title="Design Pros USA">
                <img src="<?=Links::img($logo['logo_image_path'],$logo['footer_logo_image'])?>" width="160" height="45" alt="Design Pros USA">
              </a>
            </figure>
            <ul class="contact-info">
              <li>
                <i class="fas fa-mobile-alt"></i>
              <a href="mailto:<?=g('db.admin.phone')?>"><?=g('db.admin.phone')?></a>
              </li>
              <li>
                <i class="fas fa-envelope"></i>
                <a href="mailto:<?=g('db.admin.email')?>"><?=g('db.admin.email')?></a>
              </li>
              <li>
                        <i class="fas fa-map-marker-alt"></i>
                         <?=g('db.admin.address')?>
                        </li>
                        <li><a href="<?=g('db.admin.map')?>">Go To Live Location</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                       <ul class="contact-info new-icon">
                        <li>
                <a href="<?=g('db.admin.facebook')?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li>
                <a href="<?=g('db.admin.instagram')?>" target="_blank"><i class="fab fa-instagram"></i></a>

              </li>
              <li>
                <a href="<?=g('db.admin.twitter')?>" target="_blank"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="<?=g('db.admin.linkedin')?>" target="_blank"><i class="fab fa-linkedin-in"></i>
</a>
              </li>
              <li>
                <a href="<?=g('db.admin.medium')?>" target="_blank"><i class="fab fa-medium-m"></i></a>
              </li>
              </ul>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3">
            <h3>Services</h3>
            <ul>
              <li><a href="<?=g('base_url')?>logo-design">Logo Design</a></li>
              <li><a href="<?=g('base_url')?>custom-graphic-design">Custom Graphic Design</a></li>
                        <li><a href="<?=g('base_url')?>web-design-development">Website Design &amp; Development</a></li>
                        <li><a href="<?=g('base_url')?>ecommerce-solutions">eCommerce Solutions</a></li>
                        <li><a href="<?=g('base_url')?>motion-graphics">Motion Graphics</a></li>
                        <li><a href="<?=g('base_url')?>digital-marketing">Digital Marketing</a></li>
                        <li><a href="<?=g('base_url')?>content-development">Content Development</a></li>
            </ul>
          </div>
          <div class="col-md-2 col-sm-6 col-lg-3">
            <h3>Company</h3>
            <ul>
            <li><a href="<?=g('base_url')?>">Home</a></li>
            <li><a href="<?=g('base_url')?>about-us">About Us </a></li>
            <li><a href="<?=g('base_url')?>portfolio">Portfolio</a></li>
            <li><a href="<?=g('base_url')?>contact-us">Contact Us</a></li>
            <li><a href="<?=g('base_url')?>get-a-quote">Get a Quote </a></li>
            <!--<li><a href="<?=g('base_url')?>testimonial">Testimonials</a></li>-->
            </ul>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3">
            <h3>We Do Accept</h3>
            
            <!-- <ul class="social">
              <li>
                <a href="javascript:;">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="javascript:;">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="javascript:;">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul> -->
            <ul class="payments">
              <li>
                <a href="javascript:;">
                  <i class="fab fa-cc-mastercard"></i>
                </a>
                <a href="javascript:;">
                  <i class="fab fa-cc-visa"></i>
                </a>
                <a href="javascript:;">
                  <i class="fab fa-cc-discover"></i>
                </a>
                <a href="javascript:;">
                  <i class="fab fa-cc-stripe"></i>
                </a>
                <a href="javascript:;">
                  <i class="fab fa-cc-paypal"></i>
                </a>
              </li>
            </ul>
          
          </div>
        </div>
      </div>
      <div class="container footer-bot">
        <hr>
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; <?=date('Y')?> <?=g('db.admin.company_name')?>  <a href="<?=g('base_url')?>terms-and-condition">Terms &amp; Conditions</a>  |  <a href="<?=g('base_url')?>privacy-policy">Privacy Policy</a></p>
          </div>
        
        </div>
      </div>
      <!--<a href="https://wa.me/<?=g('db.admin.whatsapp')?>" target="_blank" class="whatsapp"><i class="fab fa-lg fa-whatsapp"></i></a>-->
        <a href="tel:<?=g('db.admin.phone')?>" class="callusnow"><i class="fa fa-phone"></i></a>
    </footer>


<div class="mobile-nav" id="main-nav">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
            <a class="nav-link" href="<?=g('base_url')?>about-us">About Us </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="<?=g('base_url')?>blog">Blog</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link drp" href="javascript:;">Services +</a>
            <ul class="sub-menu">
               
                <li class=""><a href="<?=g('base_url')?>web-design-development">Website Design &amp; Development</a></li>
                
                <li class="">
                  <a class="drp" href="javascript:;">App Development <i>+</i></a>  
                  <ul class="sub-menu">
                    <li class=""><a href="<?=g('base_url')?>ios-app-development">IOS App Development</a></li>
                    <li class=""><a href="<?=g('base_url')?>android-app-development">Android App Development</a></li>
                    <li class=""><a href="<?=g('base_url')?>flutter-app-development">Flutter App Development</a></li>
                    <li class=""><a href="<?=g('base_url')?>react-app-development">React App Development</a></li>
                    <li class=""><a href="<?=g('base_url')?>cross-platform-hybrid-mobile-app-development">Cross Platform Apps</a></li>
                    <li class=""><a href="<?=g('base_url')?>native-apps">Native Applications</a></li>
                    <li class=""><a href="<?=g('base_url')?>web-application-development">Web Applications</a></li>
                    <li class=""><a href="<?=g('base_url')?>desktop-application-development">Desktop Applications</a></li>
                  </ul>
                </li>
                <li class="">
                  <a class="drp" href="javascript:;">Animation & Designing <i>+</i></a>  
                  <ul class="sub-menu">
                    <li class=""><a href="<?=g('base_url')?>logo-design">Logo Design</a></li>
                    <li class=""><a href="<?=g('base_url')?>graphic-design">Graphic Design</a></li>
                    <li class=""><a href="<?=g('base_url')?>custom-graphic-design">Custom Graphic Design</a></li>
                    <li class=""><a href="<?=g('base_url')?>video-editing-services">Video Editing</a></li>
                    <li class=""><a href="<?=g('base_url')?>animation-video-services">Animated Videos</a></li>graphic-design
                  </ul>
                </li>
                <li class="">
                  <a class="drp" href="javascript:;">Solutions <i>+</i></a>  
                  <ul class="sub-menu">
                  <li class=""><a href="<?=g('base_url')?>ecommerce-solutions">eCommerce Solutions</a></li>
                  <li class=""><a href="<?=g('base_url')?>digital-marketing">Digital Marketing</a></li>
                  <li class=""><a href="<?=g('base_url')?>content-development">Content Development</a></li>
                  <li class=""><a href="<?=g('base_url')?>prototype-development-services">Prototype Development</a></li>
                  <li class=""><a href="<?=g('base_url')?>mvp-development">MVP Development</a></li>
                  <li class=""><a href="<?=g('base_url')?>social-media-management">Social Media Management</a></li>
                  <li class=""><a href="<?=g('base_url')?>crm-development">CRM Development</a></li>
                  <li class=""><a href="<?=g('base_url')?>social-media-marketing">Social Media Marketing</a></li>
                  <li class=""><a href="<?=g('base_url')?>seo-agency">SEO Agency</a></li>
                  </ul>
                </li>
                
            </ul>


            <!-- <ul class="sub-menu2">
              <li class=""><a href="<?=g('base_url')?>ios-apps">IOS App Development</a></li>
              <li class=""><a href="<?=g('base_url')?>android-apps">Android App Development</a></li>
              <li class=""><a href="<?=g('base_url')?>flutter-apps">Flutter App Development</a></li>
              <li class=""><a href="<?=g('base_url')?>react-app-dev">React App Development</a></li>
              <li class=""><a href="<?=g('base_url')?>cross-app">Cross Platform Apps</a></li>
              <li class=""><a href="<?=g('base_url')?>native-apps">Native Applications</a></li>
              <li class=""><a href="<?=g('base_url')?>web-apps">Web Applications</a></li>
              <li class=""><a href="<?=g('base_url')?>desktop-apps">Desktop Applications</a></li>
            </ul> -->
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="<?=g('base_url')?>portfolio">Portfolio</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="<?=g('base_url')?>testimonial">Testimonial</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="<?=g('base_url')?>contact-us">Contact</a>
        </li>
    </ul>
    <div class="btn-inline my-2 my-md-0">
        <ul class="navbar-nav">
            <li>
                <a class="btn green-btn" href="tel:<?=g('db.admin.phone')?>"><?=g('db.admin.phone')?></a>
            </li>
            <li>
                <a class="btn orange-btn" href="<?=g('base_url')?>get-a-quote">Get a Free Quote</a>
            </li>
            
        </ul>
    </div>
</div>

<div class="overlay"></div>
<div class="order-form">
    <section class="content free-consult">
        <div class="close-icon">
            <i class="fas fa-times"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-sep">
                        <span class="seperator"></span>
                    </div>
                    <h2 class="text-center pkg-name">Let’s Give Your Brand a Makeover</h2>

                    <div class="form">
                        <form id="ordernow-form" method="post" action="#">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">                                          
                                    <input type="text" name="name" id="free_cons_name1" placeholder="Full Name*">
                                    </div>
                                    <div class="col-sm-6">                                          
                                    <input type="email" name="email" id="free_cons_email1" placeholder="Email*">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                    <input type="text" name="phone" id="free_cons_phone1" placeholder="Phone*" onkeypress="return isNumber(event)">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="country" placeholder="Country">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                    <textarea rows="5" cols="5" name="project-desc" placeholder="Project Description"></textarea>
                                    </div>
                                </div>
                                <div class="row pkg-dt">
                                    <div class="col-sm-8">
                                        <h4 class="pkg-name">Name Package</h4>
                                        <input type="hidden" name="package_name" class="pkg-name2">
                                    </div>
                                    <div class="col-sm-4">
                                        <h4 class="text-right pkg-price"><strong>Price</strong></h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                    <input type="button" onclick="free_cons_form_validate1()" value="Order Now" class="primary-btn green-btn">

                                    <div class="errorTxt free_cons_errors mtpx-10" style="display:none"></div>
                                    </div>
                                </div>
                                <div id='recaptcha5' class="g-recaptcha" data-sitekey="6Lcwa40UAAAAAOiYy84cIQ1Pwhb9OhznPcwHPUJo" data-callback="custom_quote_form" data-size="invisible" data-badge="inline"></div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class=""><input type="hidden" name="redlink" class="pkg-plink" placeholder="redlink">
                                        <input type="hidden" name="form_name1" class="form_name1">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="floatbutton">
  <div class="btns_wrap">
    <a href="javascript:;" class="chat_wrap" onclick="setButtonURL();">
      <span class="icoo"><i class="fa fa-comment"></i></span>
      <span>Chat With Us</span>
    </a>
    <a href="tel:+18323186222" class="call_wrap">
      <span class="icoo"><i class="fa fa-phone"></i></span>
      <span> +1-832-318-6222 </span>
    </a>
  </div>
  <div class="clickbutton"><div class="crossplus"> LET’S GET STARTED</div></div>
  <div class="banner-form">
    <h3>Sign Up Now &  <br><strong>Let’s Get Started</strong></h3>
    <div class="banform">
      <div class="container">
        <div class="row">
          <div class="ban-form">
            
              <form class="home-quote" id="home-sidequote1" action="<?=g('base_url')?>contact-us/side_form" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <div class="fldset">
                    <input type="hidden" name="quote[quote_interested][]" id="" value="N/A" placeholder="Interested*">
                    <input id="username" name="quote[quote_name]" minlength="2" type="text" placeholder="Enter your name *" required="">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="fldset">
                    <input id="cemail" type="email" name="quote[quote_email]" placeholder="Enter email here *" required="">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="fldset">
                    <input id="phone-coun" name="quote[quote_phone]" type="text" placeholder="Phone Number *" maxlength="10" onkeypress="return isNumberKey(event);" required="">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="fldset">
                    <textarea name="quote[quote_message]" id="" rows="7" placeholder="Talk About Your Project"></textarea>
                  </div>
                </div>
                
                <div class="col-lg-12">
                  <div class="fldset">
                    <!-- <input name="submit" type="submit" placeholder="Connect With Us" required=""> -->
                    <button class="primary-btn orange-btn btn-send-sidequote1">Submit</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!--<div class="eggoffer">-->
  
<!--  <div class="top">-->
<!--    <figure>-->
<!--      <img class="lazy loaded" src="assets/images/popup.png" data-src="assets/images/popup.png" data-was-processed="true">-->
<!--    </figure>-->
<!--  </div>-->
  
<!--</div>-->






<div class="mypopup-wrap active" style="display: none;">
  <div class="mypopup">
    <div class="left">
      <figure>
        <img class="lazy loaded" src="assets/images/book-publishing/popup-inner.png" data-src="assets/images/popup-inner.png" data-was-processed="true">
      </figure>
    </div>
    <div class="right">
      <div class="closebutton">x</div>
      <div class="mypopup-innerwrap">
        <h3 class="text-center">CHRISTMAS SALE! <br>SIGN UP NOW TO GET <span> 75% DISCOUNT</span></h3>
        <div class="form_wrap">
          <div class="analyzeform ">
            <form class="" id="banform" method="POST" action="webpages/bannerFormController.php">
              <div class="row">
                <div class="wrap">
                  <div class="dtf">
                    <input id="fname" name="Name" minlength="5" class="round" type="text" placeholder="Enter Name" required="">
                  </div>
                  <div class="dtf">
                    <input id="cemail" type="email" name="Email" placeholder="Enter email here" required="">
                  </div>
                  <div class="dtf">
                    <input id="cemail" type="email" name="Email" placeholder="Enter email here" required="">
                  </div>
                  <div class="dtf text-left">
                  
                    <input type="hidden" name="hiddencapcha" value="">
                    <input class="submit" type="submit" value="RESERVE THIS OFFER">
                    <input class="" type="hidden" name="ctry" value="">
                    <input type="hidden" name="pc" value="">
                     <input type="hidden" id="location" name="locationURL" value="">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
if ($this->userid < 1) {
//$this->load->view('user/login_sigup_modal');
}
?>
<script>
  $( document ).ready(function() {
     $(".clickbutton").click(function(){
   $('.floatbutton').toggleClass("active");
   //$('.crossplus').toggleClass("rotate");
});
});
</script>

<!--<div id="search">
    <button type="button" class="close">×</button>
    <form method="GET" id="searchform" action="<?/*= g('base_url'); */?>shop">
        <input type="Search" required="" name="search" placeholder="SEARCH KEYWORD(s)">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>-->


<script type="text/javascript" defer="">




function setButtonURL(){
//CUGICHelper.bubbleChat.toggle();
$zopim.livechat.window.toggle();
//LC_API.open_chat_window();
//Tawk_API.toggle();
//tidioChatApi.open();
}


</script>

<script type="text/javascript" defer="">        
//=========== POPUP FUNCTION START

$(function() {
    $(window).on("load", function() {
        // executes when complete page is fully loaded, including all frames, objects and images
        
        if ($.cookie('ysExit') == 1)
     {
        
     }
else{
 ysExit(options);
 setTimeout(function(){
$(".ys-container, .ys-layer, .ys-popup-content").addClass('visible');
$(".ys-container").addClass("finished");

},15000);
}

    });
});

//=========== POPUP FUNCTION END
    </script>


    
    <script defer="">
    //=========== FLOATING FORM STARTS
 
//=========== FLOATING FORM ENDS
</script>
<!--     <script src="npm/vanilla-lazyload@12.0.0/dist/lazyload.min.js"></script> -->
    <script>
  $(function() {
        var myLazyLoad = new LazyLoad({
   elements_selector: ".lazy"
   // load_delay: 300 //adjust according to use case
});
    });
</script>


<!-- <script src="recaptcha/api.js?onload=CaptchaCallback&render=explicit" async="" defer=""></script> -->
<script type="text/javascript">


    function addtowishlist(productid) {
        var data = "product_id=" + productid;
        var site_url = "<?=g('base_url')?>account/addwishlist";
        $.ajax({
            type: "POST",
            url: site_url,
            data: data,
            dataType: "json",
            success: function (msg) {
                Loader.hide();

                if (msg.status == true) {
                    AdminToastr.success(msg.message, 'Success');
                } else {
                    AdminToastr.error(msg.message, 'Error');
                }
            },
            beforeSend: function () {
                Loader.show();
            }
        });
    }


    $(document).ready(function () {
        $.ajax({
            type: "POST",
            url: "<?=g('base_url')?>checkout/get_basket",
            data: "",
            dataType: "json",

            success: function (msg) {
                $(".badge").html(msg.total_items);
                //$("#item_count").html(msg.total);
            },
            beforeSend: function () {
                //$("#loading-sp").show();
            }
        });
        return false;
    });


</script>

<script type="text/javascript">
    $('.search-input').keypress(function (e) {
        if (e.which == 13) {
            $('form#search').submit();
            return false;    //<---- Add this line
        }
    });
</script>
