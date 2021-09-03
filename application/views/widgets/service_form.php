<section class="content free-consult animate fadeInUp bgWhite">
  <div class="container">
    <div class="row">
      <div class="col-md-9 ctrdv">
        <div class="heading-sep">
          <span class="seperator"></span>
        </div>
        <h2 class="text-center">Let’s Give Your Brand a Makeover</h2>
        <p class="text-center sub-head">Branding professionals at Design Pros USA believes in delivering nothing but the very best. Fill in the details below so our experts can devise an unparalleled Brand strategy for you.</p>

        <div class="form">
          <form id="home-form" action="<?=g('base_url')?>contact-us/home_form" method="post">
            <input type="hidden" name="quote[quote_interested][]" id="" value="N/A" placeholder="Interested*">
            <!-- <input type="hidden" class="form_name" name="form_name" value="">
            <input type="hidden" class="" name="from_page" value="httpa://designprosusa.com/services/logo-design/"> -->
            <div class="col-sm-12">
              <div class="row">
                <div class="col-sm-6">                      
                  <input type="text" name="quote[quote_name]" id="free_cons_name" placeholder="Full Name*">
                </div>
                <div class="col-sm-6">                      
                  <input type="email" name="quote[quote_email]" id="free_cons_email" placeholder="Email*">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <input type="text" name="quote[quote_phone]" id="free_cons_phone" placeholder="Phone*" onkeypress="return isNumber(event)">
                </div>
                <div class="col-sm-6">
                  <input type="text" name="quote[quote_country]" placeholder="Country">
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
             <!--  <div id='recaptcha2' class="g-recaptcha" data-sitekey="6Lcwa40UAAAAAOiYy84cIQ1Pwhb9OhznPcwHPUJo" data-callback="custom_quote_form" data-size="invisible" data-badge="inline"></div> -->
              <div class="row">
                <div class="col-sm-12">
                <!-- <div class="errorTxt free_cons_errors" style="display:none"></div> -->
                  <!-- <input type="button" id="btn-home-form" value="Contact Us" class="primary-btn green-btn"> -->
                  <button class="primary-btn green-btn btn-send-home">Contact Us</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


<script>
    jQuery(document).ready(function () {
    jQuery("#btn-home-form").click(function(){
    var data = $("#home-form").serialize();
    var url = "<?=g('base_url')?>contact_us/home_form";
    response = AjaxRequest.formrequest(url, data);
    if(response.status == 1)
    {
    AdminToastr.success(response.txt,'Success');
    $("#home-form").find("input[type=text], input[type=email], textarea").val("");
    $("#home-form").find("input[type=radio]").prop('checked', false);
    window.setTimeout('location.reload()', 3000);
    }else{
    AdminToastr.error(response.txt,'Error');
    }
    return false;
    });
    });
    </script>