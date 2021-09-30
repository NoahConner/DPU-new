<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MY_Controller
{
    /**
     * service Controller
     */
    public function __construct()
    {
        
        // Call the Model constructor latest_product
        parent::__construct();
    }

    // Default Page
    public function index()
    {
        global $config;

        $data['banner'] = $this->model_inner_banner->get_banner(16);
        // Get and set cms data
        $data['content'] = $this->model_cms_page->get_page(12);

        // Get all services
        $data['services'] = $this->model_service->find_all_active();

        $this->load_view("index", $data);
    }

    public function detail($slug = '')
    {
        global $config;
        if (!empty($slug)) {
            // $data['bg_service_details'] = $this->model_inner_banner->find_one(
            //                array('where'=>array('inner_banner_id'=>3,'inner_banner_status'=>1)));
            $parm['where']['service_slug'] = $slug;
            $data['service_details'] = $this->model_service->find_one($parm);
            $this->load_view("detail", $data);
        } else {
            redirect(l('404'), true);
        }
    }



     public function logo_design()
    {
        global $config;

        $this->layout_data['title'] = "Get Your Logo Designed by the Most Creative Logo Design Company in the USA";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'The #1 choice for getting a custom logo design by professional designers at Design Pros USA. No templates, all-original and high-quality designs guaranteed.';
        
        
        

        $this->load_view("logo_design", $data);
    }

    public function graphic_design()
    {
        global $config;

        $this->layout_data['title'] = " Design Pros USA: Top-ranked Custom Graphic Design Company";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'Entice and attract your audience with striking custom graphic designs for your business. Our team will create memorable and iconic prints to wow your customers.';

        $this->load_view("graphic_design", $data);
    }


    public function web_design()
    {
        global $config;

        $this->layout_data['title'] = "Get your website designed by the most competent web design development agency in the USA";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'Attract more potential customers with a professional-looking website for your business. We are the most affordable web design development company in America.';

        $this->load_view("web_design", $data);
    }


    public function ecommerce()
    {
        global $config;

        $this->layout_data['title'] = "USA’s leading eCommerce development agency";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = ' Are you looking for an eCommerce partner in the United States? We are a reputable eCommerce design and development company that is accredited in a number of shopping cart platforms. ';

        $this->load_view("ecommerce", $data);
    }

    public function digital_marketing()
    {
        global $config;

        $this->layout_data['title'] = "Grow your business by hiring a Top-notch Digital Marketing company in the USA.";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'Digital marketing is the only way to grow a business in today’s era, but you might want to hire an expert digital marketing agency that knows how to craft a successful strategy.';

        $this->load_view("digital_marketing", $data);
    }



    public function content_development()
    {
        global $config;

        $this->layout_data['title'] = "A Content Development Services Agency in the USA that actually taps into your audience through its content.";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'Get authentic content created that drives high conversions. We are a leading Content Development Services agency that will treat your audience as our own customers.';

        $this->load_view("content_development", $data);
    
    }

    public function motion_graphics()
    {
        global $config;

        $this->layout_data['title'] = "Motion Graphics - ";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = '';

        $this->load_view("motion_graphics", $data);
    }

    public function professional_video()
    {
        global $config;
        $this->layout_data['title'] = "The Professional Video Editing Company";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'Boost your business’s online presence with our professional video production services. Our enticing and compelling videos will make your prospects convert.';

        $this->load_view("professional_video", $data);
    }

    public function animated_videos()
    {
        global $config;
        $this->layout_data['title'] = "Design Pros USA: The finest Animation Video Company";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'Animated Video can allow you to create anything you can imagine. Explainer videos, 3D videos, and whiteboard animation videos can skyrocket your customer engagement and create brand loyalty.';

        $this->load_view("animated_videos", $data);
    }

    public function cross_app()
    {
        global $config;
        $this->layout_data['title'] = "Design Pros USA, the Cutting-Edge Cross-Platform Mobile App Development Company";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'Developing a cross-platform app is about more than just jumping into development; you need a competent team of developers as we have at Design Pros USA.';

        $this->load_view("cross_app", $data);
    }

    public function native_apps()
    {
        global $config;
        $this->layout_data['title'] = "Design Pros USA-Native Mobile App Development Services Provider";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'Looking to boost your business by mobile app development services? Look nowhere because we are here to get you groundbreaking native mobile apps.';

        $this->load_view("native-apps", $data);
    }

    public function web_applications()
    {
        global $config;
        $this->layout_data['title'] = "The Finest Custom Web Application Development Company";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = ' Looking for a custom web application development company? Get scalable, secure & interactive web solutions by utilizing our web application development services.';

        $this->load_view("web-applications", $data);
    }

    public function desktop_applications()
    {
        global $config;
        $this->layout_data['title'] = "Design Pros USA-Top Custom Desktop Application Development Company";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'Design Pros USA offers web and desktop application development solutions and services all around the globe. Let us get your business the dream app.';

        $this->load_view("desktop-applications", $data);
    }


    public function ios_app()
    {
        global $config;
        $this->layout_data['title'] = "Design Pros USA the Top-ranked iOS App Development Company in the USA";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'Our team of iPhone app developers create iOS apps that will get your business access to a high-tier audience and in turn increase sales exponentially.';

        $this->load_view("ios-app", $data);
    }


    public function android_app()
    {
        global $config;
        $this->layout_data['title'] = "Design Pos USA, the Top Android Application Development Services in the USA";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'Want to get Android app development for your business? Get your app created by the Top-notch android app development company in the USA.';

        $this->load_view("android-app", $data);
    }

    public function flutter_app()
    {
        global $config;
        $this->layout_data['title'] = "Design Pros USA, The Top Flutter App Development Firm";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'Design Pros USA is the trusted Flutter app development company in the USA. We offer the best flutter app development services with advanced tools, technologies, and frameworks.';

        $this->load_view("flutter-app", $data);
    }

    public function digital_proto()
    {
        global $config;
        $this->layout_data['title'] = "Professional Digital Product Prototyping Services Agency";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = "You don't need to know how to code, we'll do that for you. We offer Product prototyping Services in many different formats so you get exactly what your project needs!";

        $this->load_view("digital-proto", $data);
    }

    public function MVP()
    {
        global $config;
        $this->layout_data['title'] = "Design Pros USA, the MVP Development Experts";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'Design Pros USA has an MVP development team that carries you through the startup development process with high-quality talent and experience.';

        $this->load_view("MVP", $data);
    }
    
    public function social_media_man()
    {
        global $config;
        $this->layout_data['title'] = "Design Pros USA, The leading Social Media Management Agency";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'We are a social media management agency that knows how to keep your brand story in front of your audience to achieve brand loyalty at a whole new level.';

        $this->load_view("social-media-managment", $data);
    }
    public function social_media_mark()
    {
        global $config;
        $this->layout_data['title'] = "The Perfect Social Media Marketing Agency";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'Looking to enhance your social presence? Choose our social media marketing services to boost your social presence and gain traction.';

        $this->load_view("social-media-marketing", $data);
    }

    public function crm_dev()
    {
        global $config;
        $this->layout_data['title'] = "Top CRM development Company-Design Pros USA";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'Want to get CRM software development services from a credible company? Design Pros USA is your one-stop solution to all your digital problems.';

        $this->load_view("crm-dev", $data);
    }

    public function react_app_dev()
    {
        global $config;
        $this->layout_data['title'] = "Next level React App Development Services";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'Smoke your competition by using Design Pros USA’s React App development services to deliver fast, intuitive, and highly user-friendly web & mobile apps';

        $this->load_view("react-app-dev", $data);
    }

    public function seo_agency()
    {
        global $config;
        $this->layout_data['title'] = "Design Pros USA, the SEO agency with the top SEO services";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'Design Pros USA is the best search engine optimization company that offers comprehensive and budget-friendly SEO services for entrepreneurs, businesses, and startups.';

        $this->load_view("seo-agency", $data);
    }

    public function graphics_des()
    {
        global $config;
        $this->layout_data['title'] = "The most Affordable Graphic Design Company in the USA";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'Are you looking for the top graphic design agency. Look no further! We have a team of the best graphic designers that provide top-notch quality graphic design services to our clients.';

        $this->load_view("graphic-design-orignal", $data);
    }
    
    
    


//     public function search ()
//         {
// // debug($_GET['search'],1);
//         if(isset($_GET['search']) && !empty($_GET['search']))
//         {
//         $slug = trim($_GET['search']);
//         $param['where_string'] = "service_title LIKE '%".$slug."%'  ";
//         $data['services'] = $this->model_services->find_all_active($param);
//         // echo $this->db->last_query();
//        // debug($data['servicess'],1);
//             $this->load_view("search", $data);
//         }
//         else{
//             redirect(g('base_url'));
//         }
//     }

}