<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	/**
	 * Default Controller
	 */
	
	public function __construct()
    {
        // $this->seo_id = 1;
    	// Call the Model constructor latest_product
        parent::__construct();
    }

    // Default Home Page
	public function index()
	{
        global $config;
        // Get banner
        // $ip = $_SERVER;
        // debug($ip,1);
        $this->layout_data['title'] = 'Design Pros USA Custom Web Design and Development Agency';
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'Design Pros USA, the USA-based Web Design Agency that specializes in design and development services for all businesses. Our professionals develop custom digital products.';
        $this->layout_data['og_data']['og:image'] = 'https://designprosusa.com/assets/front_assets/images/home-video.png';
        
        $data['banner'] = $this->model_banner->find_all_active();
        // Get Home page products
        //$data['feature_products'] = $this->model_product->get_feature_products();
        //debug($meta,1);

        // Best deals
        $data['best_deals'] = $this->model_product->best_deals();
        // Top 10 Selected Products On the Week
        $data['product_week'] = $this->model_product->product_week();
        // Top 10 Selected Products On the Week
        $data['hot_sale'] = $this->model_product->hot_sale();
        // Top 10 Selected Products On the Week
        $data['recent_views'] = $this->model_product->recent_views($this->userid);
        // Top 10 Selected Products On the Week
        $data['popular_search'] = $this->model_product->popular_search();
        // Flash Sale
        $data['flash_sale'] = $this->model_product_flash_sale->flash_sale();
        //debug($data['flash_sale']);
        // Hot sale
        //$data['hot_sale'] = $this->model_product->hot_sale();
        // Recent views
        //$data['recent_views'] = $this->model_product->recent_views($this->userid);

        // Load View
		$this->load_view("index", $data);
	}
    public function detail($slug = '')
    {
        global $config;
        $this->layout_data['title'] = "News and Event Details | ".g('site_name');
        $data['banner'] = $this->model_inner_banner->get_banner(19);
        // has slug
        if(!empty($slug))
        {
            // Get slug response
            $parm['where']['news_slug'] = $slug;
            $data['news_details'] = $news_details= $this->model_news->find_one_active($parm);
            // debug($data['news_details'],1);
            // Found slug in table
            if(array_filled($data['news_details']))
            {
                // Load view
                $this->load_view("detail", $data);
            }
            // Not found
            else
            {
                redirect(l('404') , true);
            }
        }
        // No slug
        else
        {
            redirect(l('404') , true);
        }
    }

}
