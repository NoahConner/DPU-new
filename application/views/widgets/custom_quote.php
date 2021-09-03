<section class="content suitable-package animate fadeInUp">
  <div class="container">
    <div class="row cntr-content">
      <div class="col-md-5 ">
        <div class="heading-sep">
        <span class="seperator-left green"></span>
      </div>
      <h2>Can’t Find Any Suitable Package? Customize Your Own.</h2>
      <p>Fill out the form and one of our design consultants will get in touch with you to discuss your requirements.</p>
      </div>
      <div class="col-md-7 quote-vector">
        <div class="quote-form">
          <h4>Custom Quote Form</h4>
          <div class="form">
            <!-- <form id="quote-form-pg" method="post"> -->
              <form class="home-quote" id="home-quote" action="<?=g('base_url')?>contact-us/quote" method="post">
                <input type="hidden" name="quote[quote_interested][]" id="" value="N/A" placeholder="Interested*">
              <!-- <input type="hidden" class="form_name" name="form_name" value="">
              <input type="hidden" class="" name="from_page" value="#"> -->
              <div class="field">
                <input type="text" name="quote[quote_name]" id="custom_quote_name" placeholder="Name*">
              </div>
              <div class="field">
                <input type="email" name="quote[quote_email]" id="custom_quote_email" placeholder="Email*">
              </div>
              <div class="field">
                <input type="text" name="quote[quote_phone]" id="custom_quote_phone" placeholder="Phone*" onkeypress="return isNumber(event)">
              </div>
              <div class="field">
                <textarea name="quote[quote_message]" cols="5" rows="3" placeholder="Project Description"></textarea>
              </div>
              <div class="field custom_quote_errors" style="display:none">
              
              </div>
              
              <div>
                <!-- <div id='recaptcha' class="g-recaptcha" data-sitekey="6Lcwa40UAAAAAOiYy84cIQ1Pwhb9OhznPcwHPUJo" data-callback="custom_quote_form" data-size="invisible" data-badge="inline"></div> -->
      <!-- <input type="button" class="primary-btn orange-btn" id="btn-quote" onclick="custom_quote_form_validate()" value="submit"> -->
      <button class="primary-btn orange-btn btn-send-quote">Submit</button>
                <!--<input type="submit" value="Get A Free Quote" data-sitekey="6Lcwa40UAAAAAOiYy84cIQ1Pwhb9OhznPcwHPUJo" data-callback="$('#custom-quote-form').submit();" class="g-recaptcha primary-btn orange-btn">
              -->
              </div>
            </form>
          </div>
        </div>              
      </div>
    </div>
  </div>
</section>