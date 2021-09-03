
<div class="main-cont"> 




  <section class="inner-banner-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12 banner-ele">
          
          <h4 class="animate flipInX">TESTIMONIALS</h4>
          <h1 class="animate flipInX" data-wow-delay="1s">In Their Own Words</h1>
        </div>
      </div>
    </div>
  </section>


  <section class="content testimonials animate fadeInUp">
    <div class="container">
      <div class="row">

        <?php foreach($testimonial as $key=>$value) {?>
        <div class="col-sm-6">
            <div class="item animate bounceIn" data-wow-delay="0.5s">
                  <div class="text">
                     <?=html_entity_decode($value['testimonial_content'])?>
                     <div class="auth-info">
                      <h3><?=$value['testimonial_name']?></h3>
                     </div>
                  </div>
                  <i class="icon-quote"></i>
                </div>

<!--                 <div class="item animate bounceIn" data-wow-delay="0.5s">
                   <div class="text">
                      <p>Where should I begin? I had a messed up project that needed to be looked into. Design Pros USA took the project on and delivered it to me successfully and fairly quick as well. Definitely will be working with them in the future.</p>
                      <div class="auth-info">
                        <h3>Ashley Keltweiss</h3>
                      </div>
                  </div>
                  <i class="icon-quote"></i>
                </div> -->       
        </div>

      <?php } ?>

       <!--  <div class="col-sm-6">
            <div class="item animate bounceIn" data-wow-delay="0.5s">
                   <div class="text">
                     <p>These guys have been wonderful helping me design a website for my e-commerce store. So informative and professional. I would recommend them to anyone!</p>
                     <div class="auth-info">
                      <h3>Smith Roy</h3>
                     </div>
                  </div>
                  <i class="icon-quote"></i>
                </div>

                <div class="item animate bounceIn" data-wow-delay="0.5s">
                   <div class="text">
                     <p>I am really pleased with my overall experience with the company and my project manager. They’ve exceeded my expectations and continue to work with me on improving my website. It has been a really positive experience and I would absolutely recommend them as a company for website development.</p>
                     <div class="auth-info">
                      <h3>Philips kim</h3>
                     </div>
                  </div>
                  <i class="icon-quote"></i>
                </div>
                
        </div> -->
      </div>
    </div>
    </div>
  </section>
  