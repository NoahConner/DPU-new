<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Errors extends MY_Controller {

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
        // debug(1,1);
        // Get banner
        //$data['banner'] = $this->model_inner_banner->get_banner(5);
        // $data['about_us'] = $this->model_cms_page->get_page(6);
        // Load View
        $this->load_view("errors", $data);
    }



}
