<?
// Banner heading
//$this->load->view('widgets/inner_banner');
// Banner section
?>

<!-- Breadcrumbs -->
<?php
/*$data['breadcrumb_title'] = 'Order';
$this->load->view('widgets/breadcrumb',$data);*/
?>

<div class="checkout-sec-main">
    <div class="container">
        <div class="row">
            <form id="submitStep2" method="post">
                <div class="col-md-7">
                    <div class="checkout-form">
                        <h4>Billing Address</h4>
                        <div class="row">
                            <div class="col-md-12"><label>Country*</label>
                                <select name="order[order_country]" class="form-control" >
                                    <?php
                                    foreach ($country as $key=>$value):
                                        $name = $value['country'];
                                        ?>
                                        <option value="<?php echo $name;?>" <?php echo ($name=='USA')?'selected':''?> ><?php echo $name;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="col-md-12"><label>First name*</label><input class="" id="f-name" name="order[order_firstname]" placeholder="First Name" type="text" value="<?php echo $userdata['signup_firstname'];?>"></div>
                            <div class="col-md-12"><label>Last name*</label><input class="" id="l-name" name="order[order_lastname]" placeholder="Last Name" type="text" value="<?php echo $userdata['signup_lastname'];?>"></div>
                            <div class="col-md-12"><label>Company Name</label><input type="text" class="" name="order[order_company]" id="company-name" placeholder="Company" value="<?php echo $userdata['signup_company'];?>"></div>
                            <div class="col-md-12"><label>Address</label><input class="" name="order[order_address1]" id="address" placeholder="Address" value="<?php echo $userdata['signup_address'];?>" type="text"></div>
                            <div class="col-md-12"><label>Town/City</label><input type="text" class="" id="town" name="order[order_city]" placeholder="City" value="<?php echo $userdata['signup_city'];?>"></div>
                            <div class="col-md-12"><label>Email Address</label><input class="" name="order[order_email]" id="email" placeholder="Email" type="text" value="<?php echo $userdata['signup_email'];?>"></div>
                            <div class="col-md-12"><label>Phone</label><input type="text" class="" name="order[order_phone]" id="phone" placeholder="Phone" value="<?php echo $userdata['signup_contact'];?>"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="billing-adress">
                        <h4>Billing Address</h4>
                        <ul>
                            <li><p>Card Subtotal</p><span><?php echo price($cart_total);?></span></li>
                            <li><p>Shipping</p><span>Free Shipping</span></li>
                            <li><p>Order Total</p><span><?php echo price($cart_total);?></span></li>
                        </ul>
                        <div class="PaymentMethod">
                            <h1>PAYMENT METHOD</h1>
                            <div class="radio">
                                <label><input type="radio" checked="" name="order[order_merchant]" value="1">Card Payment</label>
                            </div>
                            <!--<div class="radio">
                                <label><input type="radio" name="optradio" checked="">PayPal </label>
                            </div>-->
                            <!--<a href="javascript:void(0)" class="btnStyle1 btn-block text-center">Place Order</a>-->
                            <div class="terms-and-condition">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="terms" id="terms-and-condition">
                                    <label class="form-check-label">
                                        I have read and agree to the website <a href="<?php echo g('base_url');?>terms-and-conditions" target="_blank">terms and conditions</a> *
                                    </label>
                                </div>
                            </div>
                            <div class="place-order-btn">
                                <a href="javascript:void(0)" id="btn-order" class="btnStyle1 btn-block text-center">Place Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<section class="billingSec">
    <div class="container">
        <!--<form action="" method="post" id="submitStep2">-->
        <!--<form action="" method="post" id="">-->
            <div class="col-md-8 col-sm-8 col-xs-12">
                <!--<div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="billing-heading">
                            <h1>Billing Address</h1>
                        </div>
                    </div>
                </div>-->

                <!-- Billing address start -->
                <!--<div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="billing-form">
                            <label for="">First Name</label>
                            <input class="form-control" name="order[order_firstname]" placeholder="First Name *" type="text" value="<?php /*echo $userdata['signup_firstname'];*/?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="billing-form">
                            <label for="">Last Name</label>
                            <input class="form-control" name="order[order_lastname]" placeholder="Last Name *" type="text" value="<?php /*echo $userdata['signup_lastname'];*/?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="billing-form">
                            <label for="">Email</label>
                            <input class="form-control" name="order[order_email]" placeholder="Email *" type="text" value="<?php /*echo $userdata['signup_email'];*/?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="billing-form">
                            <label for="">Phone</label>
                            <input class="form-control" name="order[order_phone]" placeholder="Phone *" type="text">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="billing-form">
                            <label for="">Address</label>
                            <input class="form-control" name="order[order_address1]" placeholder="" value="<?php /*echo $userdata['signup_address'];*/?>" type="text">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="billing-form">
                            <label for="">City</label>
                            <input class="form-control" name="order[order_city]" placeholder="City *" type="text">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="billing-form">
                            <label for="">State</label>
                            <input class="form-control" name="order[order_state]" placeholder="State *" type="text">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="billing-form">
                            <label for="">Zip</label>
                            <input class="form-control" name="order[order_zip]" placeholder="Postcode / ZIP *" value="<?php /*echo $userdata['signup_zip'];*/?>" type="text">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="billing-form">
                            <label for="">Country</label>
                            <select name="order[order_country]" class="form-control" >
                                <?php
/*                                foreach ($country as $key=>$value):
                                    $name = $value['country'];
                                    */?>
                                    <option value="<?php /*echo $name;*/?>" <?php /*echo ($name=='UK')?'selected':''*/?> ><?php /*echo $name;*/?></option>
                                    <option value="<?php /*echo $name;*/?>" <?php /*echo (!empty($userdata['signup_country']))? ($userdata['signup_country']==$name)? 'selected': '' : ($name=='UK')?'selected':''*/?> ><?php /*echo $name;*/?></option>
                                <?php /*endforeach;*/?>
                            </select>
                        </div>
                    </div>
                </div>-->
                <!-- Billing address end -->

                <!--<div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group ship-checkbox">
                            <label class="checkbox-inline">
                                <input type="checkbox" value="" id="is_ship_items">
                                Ship Items To The Above Billing Address</label>
                        </div>
                    </div>
                </div>-->

                <!-- Shipping address start -->
                <!--<div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="billing-heading">
                            <h1>Shipping Address</h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="billing-form">
                            <label for="">First Name</label>
                            <input class="form-control" name="order[order_shipping_firstname]" placeholder="First Name *" type="text" value="<?php /*echo $userdata['signup_firstname'];*/?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="billing-form">
                            <label for="">Last Name</label>
                            <input class="form-control" name="order[order_shipping_lastname]" placeholder="Last Name *" type="text" value="<?php /*echo $userdata['signup_lastname'];*/?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="billing-form">
                            <label for="">Email</label>
                            <input class="form-control" name="order[order_shipping_email]" placeholder="Email *" type="text" value="<?php /*echo $userdata['signup_email'];*/?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="billing-form">
                            <label for="">Phone</label>
                            <input class="form-control" name="order[order_shipping_phone]" placeholder="Phone *" type="text">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="billing-form">
                            <label for="">Address</label>
                            <input class="form-control" name="order[order_shipping_address1]" placeholder="" value="<?php /*echo $userdata['signup_address'];*/?>" type="text">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="billing-form">
                            <label for="">City</label>
                            <input class="form-control" name="order[order_shipping_city]" placeholder="City *" type="text">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="billing-form">
                            <label for="">State</label>
                            <input class="form-control" name="order[order_shipping_state]" placeholder="State *" type="text">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="billing-form">
                            <label for="">Zip</label>
                            <input class="form-control" name="order[order_shipping_zip]" placeholder="Postcode / ZIP *" value="<?php /*echo $userdata['signup_zip'];*/?>" type="text">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="billing-form">
                            <label for="">Country</label>
                            <select name="order[order_shipping_country]" class="form-control" >
                                <?php
/*                                foreach ($country as $key=>$value):
                                    $name = $value['country'];
                                    */?>
                                    <option value="<?php /*echo $name;*/?>" <?php /*echo (!empty($userdata['signup_country']))? ($userdata['signup_country']==$name)? 'selected': '' : ($name=='UK')?'selected':''*/?> ><?php /*echo $name;*/?></option>
                                <?php /*endforeach;*/?>
                            </select>
                        </div>
                    </div>
                </div>-->

                <!-- Shipping address end -->


            </div>

        <!--</form>-->
    </div>
</section>

<script type="text/javascript">

    $(document).ready(function () {
        $("#btn-order").click(function (e) {

            var user_id = '<?php echo $this->userid?>';
            if(user_id < 1){
                AdminToastr.error('Please login to proceed','Error');
                return false;
            }

            e.preventDefault();
            Loader.show();
            setTimeout(function () {
                // Prevent form submit
                e.preventDefault();
                var obj = $("#submitStep2");
                // Get form data
                var data = obj.serialize();
                // Get post url
                var url = "<?=g('base_url');?>checkout/save-order";
                // Submit action
                var response = AjaxRequest.fire(url, data);
                if(response.status){
                    //location.reload();
                    window.location = response.url;
                    $('#submitStep2').trigger("reset");
                }
                // Add return
                return false;
            },1000);

            return false;
        });

        // Check ship items
        /*var is_check;
        $('#is_ship_items').click(function(){
            is_check = $(this).prop("checked");
            if(is_check == true){
                alert("Checkbox is checked.");
            }
            else if(is_check == false){
                alert("Checkbox is unchecked.");
            }
        });*/

    });

    /*$("#LoginSubmit").click(function(){
        var data = jQuery("#FormLogin").serialize();
        var url = "<?=g('base_url')?>account/do_login";
        var response = AjaxRequest.formrequest(url, data) ;


        if(response.status == 1)
        {
            AdminToastr.success(response.txt,'Success');
            window.location='<?=g('base_url')?>';
        }
        else
        {
            AdminToastr.error(response.txt,'Error');
        }
        return false;
    });*/

</script>