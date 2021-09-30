<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_us extends MY_Controller {

	/**
	 * Contact US Controller
	 */
	
	public function __construct()
    {
        $this->seo_id = 2;
    	// Call the Model constructor latest_product
        parent::__construct();
    }

    // Default Page
    public function index()
    {
        global $config;
       
        // $this->layout_data['og_data']['og:image'] = 'https://designprosusa.com/assets/front_assets/images/marketing-collaterals-banner-bg.jpg';
        // Get banner
        //$data['banner'] = $this->model_inner_banner->get_banner(5);
        $data['about_us'] = $this->model_cms_page->get_page(6);
        // Load View
        $this->load_view("index", $data);
    }



}
