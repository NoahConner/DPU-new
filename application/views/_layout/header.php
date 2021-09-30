<?php
$class = $this->router->fetch_class();
$method = $this->router->fetch_method();
$data['userdata'] = $this->model_signup->find_by_pk($this->userid);
$userdata = $data['userdata'];
$service_email = g('db.admin.service');
$total_cart_items = $this->cart->total_items();

// Get Categories
$categories = $this->model_category->find_all_active(array("where"=>array("category_navigation"=>STATUS_ACTIVE)));

// Set classes for header
/*if( ($class=='home') && ($method=='index')){
    $classes = "navbar-fixed-top wow fadeInDown";
}
else{
    $classes = "wow fadeInDown";
}*/

?>
<!-- 
<header>

    <div class="top-row">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="tp-cntc">
                        <ul>
                            <li><a href="tel:<?php echo g('db.admin.phone');?>"><i class="fa fa-phone" aria-hidden="true"></i><?php echo g('db.admin.phone');?></a></li>
                            <li><a href="mailto:<?php echo g('db.admin.support_email');?>"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo g('db.admin.support_email');?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tp-loc">
                        <ul>
                            <li><a href="<?php echo g('base_url');?>contact-us"><i class="fa fa-map-marker" aria-hidden="true"></i>Store Locations</a></li>
             
                            <li><select><option>$ Dollar (US)</option></select></li>
                            <li><select><option>EN</option></select></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="middle-header">
        <div class="container">
            <div class="row">

                <div class="col-md-3 padingo">
                    <div class="logo">
                        <h1><a href="<?php echo g('base_url');?>"><img src="<?php echo get_image($layout_data['logo']['logo_image_path'],$layout_data['logo']['logo_image']);?>" alt=""></a><a href="<?php echo g('base_url');?>"><span><?php echo g('site_name');?></span></a></h1>
                    </div>
                </div>

                <div class="col-md-<?php echo ($this->userid>0)?'4':'6'?>">
                    <div class="header-search">
                        <form  method="GET" id="searchform" action="<?=g('base_url');?>category/search" >
                            <input type="text" name="search" placeholder="Search here..." required="">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>

                <div class="col-md-<?php echo ($this->userid>0)?'5':'3'?>">
                    <div class="header-cart">
                        <a class="cart" href="<?php echo g('base_url');?>checkout"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span class="badge-cart"><?php echo $total_cart_items;?></span></a>
                        <?php
                        if($this->userid>0){?>
                            <a class="account" href="<?php echo g('base_url');?>account"><i class="fa fa-user-circle" aria-hidden="true"></i><?php echo ($this->user_info['signup_type']=='1')?'BUYER':'SELLER'?> ACCOUNT</a>
                            <a class="account" href="<?php echo g('base_url');?>user/logout"><i class="fa fa-sign-out"></i>LOGOUT</a>
                
                        <?php }
                        else{?>
                            <a class="account" href="<?php echo g('base_url');?>user"><i class="fa fa-user-circle" aria-hidden="true"></i>LOGIN</a>
                        <?php }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="bottom-row">
        <div class="container">
            <div class="row">

                <div class="col-md-10">
                    <nav class="navbar navbar-default">
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="<?php echo g('base_url');?>">Home</a></li>
                                <li><a href="<?php echo g('base_url');?>category">All Categories</a></li>
                                <?php
                                if(array_filled($categories)){
                                    foreach ($categories as $key=>$value):?>
                                        <li><a href="<?php echo g('base_url');?>category/listing/<?php echo $value['category_slug']?>"><?php echo $value['category_name'];?></a></li>
                                    <?php endforeach;
                                }
                                ?>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="col-md-2">
                    <div class="sale">
                        <a href="javascript:void(0)"><i class="fa fa-fire" aria-hidden="true"></i>Sell Your Goods</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</header>
 -->


<header class="header">
  <div class="containerCS">
    <nav class="navbar navbar-expand-lg">
      <figure class="navbar-brand">
        <a href="<?=g('base_url')?>" title="Design Pros USA">
          <!--<img src="<?=Links::img($logo['logo_image_path'],$logo['logo_image'])?>" width="" height="" alt="Design Pros USA">-->
          <!--<img src="<?=Links::img($logo['logo_image_path'],$logo['logo_image'])?>" width="" height="" alt="Design Pros USA">-->
          <img src="<?= g('images_root') ?>1x/logo_usa_50.gif" width="" height="" alt="Design Pros USA" />
          <img src="<?= g('images_root') ?>1x/logo_usa_50.gif" width="" height="" alt="Design Pros USA" />
        </a>  
      </figure>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="<?=g('base_url')?>about-us">About Us </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="javascript:;">Services +</a>
            <ul class="sub-menu">
              <li class=""><a href="<?=g('base_url')?>logo-design">Logo Design</a></li>
              <li class=""><a href="<?=g('base_url')?>custom-graphic-design">Custom Graphic Design</a></li>
              <li class=""><a href="<?=g('base_url')?>graphic-design">Graphic Design</a></li>
              <li class=""><a href="<?=g('base_url')?>web-design-development">Website Design &amp; Development</a></li>
              <li class=""><a href="<?=g('base_url')?>ecommerce-solutions">eCommerce Solutions</a></li>
              <li class=""><a href="<?=g('base_url')?>digital-marketing">Digital Marketing</a></li>
              <li class=""><a href="<?=g('base_url')?>content-development">Content Development</a></li>
              <li class=""><a href="<?=g('base_url')?>video-editing-services">Video Editing</a></li>
              <li class=""><a href="<?=g('base_url')?>animation-video-services">Animated Videos</a></li>
              
              
              <li class=""><a href="<?=g('base_url')?>prototype-development-services">Prototype Development</a></li>
              <li class=""><a href="<?=g('base_url')?>mvp-development">MVP Development</a></li>
              <li class=""><a href="<?=g('base_url')?>social-media-management">Social Media Management</a></li>
              <li class=""><a href="<?=g('base_url')?>crm-development">CRM Development</a></li>
              <li class=""><a href="<?=g('base_url')?>social-media-marketing">Social Media Marketing</a></li>
              <li class=""><a href="<?=g('base_url')?>seo-agency">SEO Agency</a></li>
              <li class="forSub2">
                <a href="javascript:;">App Development <i>+</i></a>
                <ul class="sub-menu2">
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
            </ul>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=g('base_url')?>portfolio">Portfolio</a>
          </li>
      
          <!--<li class="nav-item ">
            <a class="nav-link" href="<?=g('base_url')?>testimonial">Testimonial</a>
          </li>-->
          <li class="nav-item ">
            <a class="nav-link" href="<?=g('base_url')?>blog">Blog</a>
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
    </nav>
  </div>  

</header>