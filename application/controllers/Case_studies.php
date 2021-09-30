<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Case_studies extends MY_Controller {

	/**
     * Case_studies Controller. - The default controller
     *
     * @package		Case_studies - Controller
     * @author		Mike Jason
     * @version		1.0
     * @since
     */

    public function __construct()
    {
        $this->seo_id = 5;
        // Call the Model constructor latest_product
        parent::__construct();
    }

    // Default Pages
    public function ctc_case()
    {
        $data = null;
        global $config;
        $this->layout_data['title'] = "";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = ' .';
        $this->layout_data['og_data']['og:image'] = 'https://designprosusa.com/assets/front_assets/images/ionic_fb.jpg';
        $this->load_view("ctc-case", $data);
    }

    public function frog_case()
    {
        $data = null;
        global $config;
        $this->layout_data['title'] = "";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = ' .';
        $this->layout_data['og_data']['og:image'] = 'https://designprosusa.com/assets/front_assets/images/ionic_fb.jpg';
        $this->load_view("frog-case", $data);
    }

    public function national_db_case()
    {
        $data = null;
        global $config;
        $this->layout_data['title'] = "";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = ' .';
        $this->layout_data['og_data']['og:image'] = 'https://designprosusa.com/assets/front_assets/images/ionic_fb.jpg';
        $this->load_view("national_db-case", $data);
    }

    public function phase_dev_case()
    {
        $data = null;
        global $config;
        $this->layout_data['title'] = "";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = ' .';
        $this->layout_data['og_data']['og:image'] = 'https://designprosusa.com/assets/front_assets/images/ionic_fb.jpg';
        $this->load_view("phase_dev-case", $data);
    }



}