<!-- Banner Row  Ends-->
<?
$phone2 =g('db.admin.phone');
$phonenum2 = str_replace(array(')','(','-',' '),array('','','',''),$phone2);
$address=g('db.admin.company_address_1');
$info_email=g('db.admin.email');
$support_email=g('db.admin.support_email');
?>
<!-- Inpage-->

<?php //$this->load->view('widgets/inner_banner');?>

<!-- <div class="contact-sec">
    <div class="container">

        <div class="row">

            <div class="col-md-6">
                <div class="cntc-info">
                    <h4>Contact Us</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="inn-info">
                                <h5>Address</h5>
                                <ul>
                                    <li><?php echo $address;?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inn-info">
                                <h5>Email Address</h5>
                                <ul>
                                    <li><a href="mailto:<?php echo $info_email;?>"><?php echo $info_email;?></a></li>
                                    <li><a href="mailto:<?php echo $support_email;?>"><?php echo $support_email;?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="inn-info">
                                <h5>Phone Number</h5>
                                <ul>
                                    <li><a href="tel:<?php echo $phone2;?>"><?php echo $phone2;?></a></li>
                                    <li><a href="tel:<?php echo $phonenum2;?>"><?php echo $phonenum2;?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inn-info">
                                <h5>Website Address</h5>
                                <ul>
                                    <li><a href="<?php echo g('base_url');?>"><?php echo g('db.admin.domain');?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="cntc-form">
                    <form class="contact-form" id="contact-form" action="<?=g('base_url')?>contact-us/store" method="post">
                            <div class="col-md-12"><label>Name*</label><input type="text" name="inquiry[inquiry_fullname]" placeholder=""></div>
                            <div class="col-md-12"><label>Email ID*</label><input type="email" name="inquiry[inquiry_email]" placeholder=""></div>
                            <div class="col-md-12"><label>Subject*</label><input type="text" name="inquiry[inquiry_subject]" placeholder=""></div>
                            <div class="col-md-12"><label>Message</label><textarea placeholder="" name="inquiry[inquiry_comments]"></textarea></div>
                            <div class="col-md-12"><label>Captcha</label><?php $this->load->view('widgets/google_captcha');?><br></div>
                            <div class="col-md-12"><button class="btn-send">Submit</button></div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> -->
            

<div class="main-cont"> 

  <section class="inner-banner-content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 banner-ele">
          
        
          <h1 class="animate flipInX" data-wow-delay="1s">Call Us Today To Discuss Your Project With Our Team Of Industry-Proven Professionals</h1>
        </div>
      </div>
    </div>
  </section>


  <section class="content contact-form">
    <div class="container">
      <div class="cont">
        <div class="row">
          <div class="col-md-8">
            <h3>Send Us a Message</h3>

            <div class="row">
              <div class="form">
                <form id="contact-form" action="<?=g('base_url')?>contact-us/store" method="post">
                  <div class="col-sm-12">
                    <div class="row">
                      <div class="col-sm-6">                      
                        <input type="text" name="inquiry[inquiry_name]" id="contact_name" placeholder="Full Name*">
                      </div>
                      <div class="col-sm-6">                      
                        <input type="email" name="inquiry[inquiry_email]" id="contact_email" placeholder="Email*">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <input type="text" name="inquiry[inquiry_phone]" id="contact_phone" placeholder="Phone*">
                      </div>
                      <div class="col-sm-6">
                        <input type="text" name="inquiry[inquiry_subject]" placeholder="Subject">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <textarea rows="5" cols="5" class="msg" name="inquiry[inquiry_comments]" placeholder="Your Message"></textarea>
                      </div>
                    </div>
              
                    <div class="row">
                      <div class="col-sm-12">
                        <?php $this->load->view('widgets/google_captcha');?>
                      
                        <!-- <input type="button"id="btn-contact" value="GET IN TOUCH" class="primary-btn green-btn"> -->
                        <button class="primary-btn green-btn btn-send">GET IN TOUCH</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4 contact-info-right">
            <h3>Contact Information</h3>

            <ul class="contact-info">
                <li>
                  <i class="fas fa-mobile-alt"></i>
                  <a href="<?=g('db.admin.phone')?>"><?=g('db.admin.phone')?></a>
                </li>
                <li>
                  <i class="fas fa-envelope"></i>
                  <a href="mailto:<?=g('db.admin.email')?>"><?=g('db.admin.email')?></a>
                </li>
                <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <?=g('db.admin.address')?>
                        </li>
                        <li><a href="<?=g('db.admin.map')?>" target="_blank">Go To Live Location</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
              </ul>
              <ul class="payments mtpx-20">
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
    </div>
    </div>
</section>