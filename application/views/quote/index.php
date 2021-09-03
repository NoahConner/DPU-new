<div class="main-cont"> 

  <section class="inner-banner-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12 banner-ele">
          <h4 class="animate flipInX">CONTACT US</h4>
          <h1 class="animate flipInX" data-wow-delay="1s">Get a Free Quote</h1>
          <p class="animate flipInX" data-wow-delay="1.8s">If you are interested in speaking with us about an upcoming project, there are a number of ways we can make that happen. Filling out the form would help us get the right person in touch with you, or you could give us a call.</p>
        </div>
      </div>
    </div>
  </section>


  <section class="content free-consult">
    <div class="container">
      <div class="cont">
        <div class="row">
          <div class="col-md-12 col-lg-9 ctrdv">
            <h3 class="text-center">Tell Us About Your Project</h3>

            <div class="form">
              <form id="home-quote" action="<?=g('base_url')?>contact-us/quote" method="post">

                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-sm-6">                      
                      <input type="text" name="quote[quote_name]" id="get_free_quote_name" placeholder="Full Name*">
                    </div>
                    <div class="col-sm-6">                      
                      <input type="email" name="quote[quote_email]" id="get_free_quote_email phone-country" placeholder="Email*">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <input type="text" name="quote[quote_phone]" id="get_free_quote_phone" placeholder="Phone*" onkeypress="return isNumber(event)">
                    </div>
                    <div class="col-sm-6">
                      <select name="quote[quote_budget]">
                        <!-- <option>Forecasted-Budget</option> -->
                        <option value="$1 - $999">$1 - $999</option>
                        <option value="$1000 - $1999">$1000 - $1999</option>
                        <option value="$2000 - $2999">$2000 - $2999</option>
                        <option value="$3000 - $3999">$3000 - $3999</option>
                        <option value="$4000 - $4999">$4000 - $4999</option>
                        <option value="$5000 - $5999">$5000 - $5999</option>
                        <option value="$6000 - $6999">$6000 - $6999</option>
                        <option value="$7000 - $7999">$7000 - $7999</option>
                      </select>
                    </div>
                  </div>
                  <div class="row interested-in">
                    <div class="col-sm-12">
                      <h6>I am interested in</h6>
                   <!--  <input type="hidden" id="free_cons_home_chkbox" value="0">
                    <input type="hidden" class="form_name" name="form_name" value="">
                    <input type="hidden" class="" name="from_page" value="#"> -->
                      <label>
                    <input type="checkbox" class="services" name="quote[quote_interested][]" value="Logo Design">
                    Logo Design
                  </label>
                  <label>
                    <input type="checkbox" class="services" name="quote[quote_interested][]" value="Website-Design-Development">
                    Website Design &amp; Development
                  </label>
                  <label>
                    <input type="checkbox" class="services" name="quote[quote_interested][]" value="ecommerce-development">
                    eCommerce Web Solutions
                  </label>
                  <label>
                    <input type="checkbox" class="services" name="quote[quote_interested][]" value="Motion-Graphics">
                    Motion Graphics
                  </label>
                  <label>
                    <input type="checkbox" class="services" name="quote[quote_interested][]" value="Digital-marketing">
                    Digital Marketing
                  </label>                  
                  <label>
                    <input type="checkbox" class="services" name="quote[quote_interested][]" value="Content-Development">
                    Content Development
                  </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                        <textarea rows="5" cols="5" name="quote[quote_message]" placeholder="Project Description"></textarea>
                    </div>
                  </div>
                  <!-- <div class="row">
                    <div class="col-sm-12">
                      <label class="full">
                        <input type="checkbox" value="1">
                        Please hit the check box to confirm your request
                      </label>
                    </div>
                  </div> -->
                  <div id='recaptcha2' class="g-recaptcha" data-sitekey="6Lcwa40UAAAAAOiYy84cIQ1Pwhb9OhznPcwHPUJo" data-callback="custom_quote_form" data-size="invisible" data-badge="inline"></div>
                  <div class="row">
                    <div class="col-sm-12">
                    <div class="errorTxt get_free_quote_errors" style="display:none"></div>
                     <!--  <input type="button" id="btn-quote" onclick="get_a_free_quote_form_validate()" value="Contact Us" class="primary-btn green-btn"> -->
                     <button class="primary-btn orange-btn btn-send-quote">Contact Us</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
