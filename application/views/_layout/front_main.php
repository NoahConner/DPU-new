<? global $config;
// Define plugins for page
$my_tools = array(
    "datetime-picker" => array(
        "css" => array("css/jquery.datetimepicker.css"),
        "js" => array("js/jquery.datetimepicker.js"),
    ),
    "datatables" => array(
        "css" => array("datatables.min.css"),
        "js" => array("datatables.min.js"),
    ),
    "select2" => array(
        "css" => array("select2.css"),
        "js" => array("select2.js","select2_custom.js"),
    ),
    "fb" => array(
        "css" => array("style.css"),
        "js" => array("jquery.fancybox.min.js"),
    ),
    "fancybox" => array(
        "css" => array("jquery.fancybox.min.css"),
        "js" => array("jquery.fancybox.min.js"),
    ),
    "owl-carousel" => array(
        "css" => array("owl.carousel.css","owl.theme.css"),
        "js" => array("owl.carousel.js"),
    ),
    "slick" => array(
        "css" => array("slick.css","slick-theme.css"),
        "js" => array("slick.js"),
    ),
    "jquery-file-upload"=> array(
        "js" => array(
            "js/vendor/jquery.ui.widget.js",
            "js/vendor/tmpl.min.js",
            "js/vendor/load-image.min.js",
            "js/vendor/canvas-to-blob.min.js",
            //"blueimp-gallery/jquery.blueimp-gallery.min.js",
            "js/jquery.iframe-transport.js",
            "js/jquery.fileupload.js",
            "js/jquery.fileupload-process.js",
            "js/jquery.fileupload-image.js",
            "js/jquery.fileupload-audio.js",
            "js/jquery.fileupload-video.js",
            "js/jquery.fileupload-validate.js",
            "js/jquery.fileupload-ui.js",
        ),
        "css" => array(
            "blueimp-gallery/blueimp-gallery.min.css",
            "css/jquery.fileupload.css",
            //"css/jquery.fileupload-ui.css",
        ),
    ),
    "bootstrap-switch" => array(
        "css" => array("css/bootstrap-switch.min.css"),
        "js" => array("js/bootstrap-switch.min.js"),
    ),
    "bootbox"=> array(
        "js" => array("bootbox.min.js"),
    ),
    "ckeditor"=> array(
        "js" => array("ckeditor.js","config.js"),
    ),
    "bootstrap-fileupload" => array(
        "js" => array("bootstrap-fileupload.js"),
        "css" => array("bootstrap-fileupload.css")
    ),
    // "swiper" => array(
    //     "js" => array("js/swiper-bundle.min.js"),
    //     "css" => array("css/swiper-bundle.min.css")
    // )
);

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
     <meta charset="utf-8">
     
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="">
    <meta name="facebook-domain-verification" content="hkd9jons33p0hbczw7qws5ecp2m37r" />


    <?php
/*        $class = $this->router->fetch_class();
    */?><!--
    <?php
/*        if ($class == 'home') {
    */?>
        <title><?/*= $title */?></title>
    <?php
/*        }
        else{
    */?>
        <title><?/*= ucfirst(humanize($class))." | ".$title */?></title>
    --><?php
/*        }
    */?>

    <title><?= $title ?></title>

    <!-- owl -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?=Links::img($layout_data['logo']['logo_image_path'],$layout_data['logo']['logo_favicon'])?>">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <!-- Link Swiper's CSS -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" /> -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7.0.7/swiper-bundle.min.css" />
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper@7.0.7/swiper-bundle.min.js"></script>
    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->

    <?
    foreach ($meta_data AS $meta_name => $meta_val) {
        ?>
        <meta name="<?= $meta_name ?>" content="<?= $meta_val ?>">
    <? } ?>
    
    <? foreach ($og_data AS $og_property => $og_val) { ?>
        <meta property="<?= $og_property ?>" content="<?= $og_val ?>">
    <? } ?>
    <!--<meta property="og:image" content="<?php echo g('images_root')?>app-development.png"/>-->
    <!--<meta property="og:image" content="<?php echo g('images_root')?>1x/goup.png"/>-->

    <!-- Google Fonts -->
    <!--<link href="<?php /*echo l('assets/front_assets/fonts/font.css')*/?>" rel="stylesheet">-->

    <!-- Loading css file -->
    <? foreach ($css_files AS $css) { ?>
        <link href="<?= g('css_root') . $css ?>" rel="stylesheet" type="text/css"/>
    <?
    }
    // Load js file
    if (is_array($js_files_init)) {
        foreach ($js_files_init as $js) { ?>
            <script src="<?= g('js_root') . $js ?>"></script>
        <?
        }
    }
    // Load additional files css
    if (is_array($additional_tools) && count($additional_tools)) {
        foreach ($additional_tools AS $tool) {
            if (is_array($my_tools[$tool]['css']))
                foreach ($my_tools[$tool]['css'] AS $script) {
                    if ($script) {
                        ?>
                        <link rel="stylesheet" href="<?= g('plugins_root') . $tool . "/" . $script; ?>"/><?
                    }

                }
        }
    }
    // Load additional files js
    if (array_filled($additional_tools)) {
        foreach ($additional_tools AS $tool) {
            if (is_array($my_tools[$tool]['js']))
                foreach ($my_tools[$tool]['js'] AS $script) {
                    $tool_activators .= "toolset.tool_" . str_replace("-", "_", $tool) . " = true;";
                    ?>
                    <script src="<?= g('plugins_root') . $tool . "/" . $script; ?>"></script>
                <?
                }
        }
    }
    ?>
    
    <script type="text/javascript"> var base_url = "<?php  echo base_url(); ?>";</script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

    <!-- Fonts Links -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    

    

    <!-- Initialize Swiper -->
    

    <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '824489528143560'); 
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1" 
src="https://www.facebook.com/tr?id=824489528143560&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-198501458-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-198501458-1');
</script>


</head>

<?php 
$segment = $this->router->fetch_class();
$method = $this->router->fetch_method();
//debug($method,1);
//debug($this->uri->segment($segment),1);
if($segment == 'home' || $segment == 'portfolio'){?>
<body class="home-pg">
<?}elseif($segment == 'about_us'){?>
<body class="about-pg">
<?}elseif($segment == 'services'){?>
<body class="services-pg">
<?}elseif($segment == 'testimonial'){?>
<body class="testimonial-pg">
<?}elseif($segment == 'contact_us'){?>
<body class="contact-pg">
<?}elseif($segment == 'quote'){?>
<body class="get-a-quote-pg">
<?}elseif($segment == 'terms'  || $segment == 'policy'){?>
<body class="simple-content-pg">
<?}?> 

<div class="loader" id="webLoader">
    <img src="<?= g('images_root') ?>1x/loader-dpu.gif" alt="">
</div>
<div id="preloader" style="display:none;">  
    <div class="loading">
        <!--<span>Loading...</span>-->
    </div>
</div>

<!-- PRE LOADER start-->
<div id="st-preloader">
    <div id="pre-status">
        <div class="preload-placeholder"></div>
    </div>
</div>
<!-- PRE LOADER end-->

<!-- PRE LOADER start-->
<!-- <div id="st-preloader">
    <div id="pre-status">
        <div class="preload-placeholder"></div>
    </div>
</div> -->
<!-- PRE LOADER end-->

<!-- Wrapper Start -->
<?$this->load->view("_layout/header");
// Page content Start
echo $content_block;
// Page content End
$this->load->view("_layout/footer");
// Search
//$this->load->view("_layout/search");
// Wrapper End

// Load modal

// Load js files
foreach ($js_files as $js) { ?>
    <script src="<?= g('js_root') . $js ?>"></script>
<?
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
<script>
    $(document).ready(function(){
        <?if((isset($_GET['msgtype'])) && ($_GET['msgtype']) && ($_GET['msg'])){?>
        AdminToastr.<?=$_GET['msgtype']?>("<?=$_GET['msg']?>", "<?=$_GET['msgtype']?>" , {positionClass:"toast-top-full-width"} );
        <?}?>

    });


    

</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/605a5908067c2605c0bb8d65/1f1genidv';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();



    $(document).ready(function(){
        setTimeout(()=>{
            var ifo = document.getElementsByTagName('iframe')[0].contentDocument.body;
            var btnh = ifo.getElementsByClassName('tawk-button')[0];
            $('.chat_wrap').on('click',()=>{
                btnh.click()
            })
        },3000)
    })


</script>
<!--End of Tawk.to Script-->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Design Pros USA",
  "image": "https://designprosusa.com/assets/uploads/logo/design-pros-usa-01161583232382161645686627.png",
  "@id": "",
  "url": "https://designprosusa.com/",
  "telephone": "8323186222",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "363",
    "addressLocality": "Houston",
    "addressRegion": "TX",
    "postalCode": "77060",
    "addressCountry": "US"
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday"
    ],
    "opens": "08:00",
    "closes": "17:00"
  } 
}
</script>


<?php  
    $pageURI = base_url(uri_string()); 
    $exploded = explode('/', $pageURI);
    $pageURI = end($exploded);
?>   
<div class="dCapbilo" style="display: none">
    <div class=" <?php 
    if($pageURI =='android-app-development' || $pageURI =='content-development'){echo 'dParo';}
    else if($pageURI =='flutter-app-development'){echo 'dParo4';}
    else if($pageURI =='social-media-marketing'){echo 'dParo3';}
    else if($pageURI =='social-media-management'){echo 'dParo5';}
    else if($pageURI =='seo-agency'){echo 'dParo2';}
    ?>" >
    <div class=" <?php if($pageURI =='android-app-development'){echo 'bParal';}else if($pageURI =='content-development'){echo 'bParalC';}else if($pageURI =='flutter-app-development'){echo 'bParalD';}?>"></div>
    </div>
</div>

<script>
    document.onreadystatechange = function () {
  var state = document.readyState;
  console.log(state)
   if (state == 'complete') {
      setTimeout(function(){
         document.getElementById('webLoader').style.visibility="hidden";
      },3000);
  }
}
</script>
 </body>
 
</html>