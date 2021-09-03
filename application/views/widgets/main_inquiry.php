  <section class="content free-consult animate fadeInUp">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-9 ctrdv">
        <div class="heading-sep">
          <span class="seperator"></span>
        </div>
        <h2 class="text-center">WELL, ENOUGH CHITCHAT. LET’S GET TO WORK!</h2>
        <p class="text-center sub-head">Let us build a repeatable digital system for you that will deliver sales over and over — interested in starting a project together? We’d love to hear from you.</p>

        <div class="form">
          <form id="home-form" action="<?=g('base_url')?>contact-us/home_form" method="post">
            <div class="col-sm-12">
              <div class="row">
                <div class="col-sm-6">                      
                  <input type="text" name="quote[quote_name]" id="free_cons_home_name" placeholder="Full Name*">
                </div>
                <div class="col-sm-6">                      
                  <input type="email" name="quote[quote_email]" id="free_cons_home_email" placeholder="Email*">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <input type="text" name="quote[quote_phone]" id="free_cons_home_phone" placeholder="Phone*" onkeypress="return isNumber(event)">
                </div>
                <div class="col-sm-6">
                  <input type="text" name="quote[quote_country]" placeholder="Country">
                </div>
              </div>
              <div class="row interested-in">
                <div class="col-sm-12">
                  <h6>I am interested in</h6>
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
              
              <div class="row">
                <div class="col-sm-12">                    
                   <!--  <input type="button" id="btn-send-home" value="Contact Us" class="primary-btn green-btn"> -->
                   <button class="primary-btn green-btn btn-send-home">Submit</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <script>
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
    </script> -->