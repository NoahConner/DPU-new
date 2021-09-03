<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MY_Controller {

    /**
     * Blog Controller. - The default controller
     *
     * @package		Blog - Controller
     * @author		Mike Jason
     * @version		1.0
     * @since
     */

    private $json_param = array();

    public function __construct()
    {
        $this->seo_id = 5;
        // Call the Model constructor latest_product
        parent::__construct();
    }

    // Default index page
    // public function index($id='')
    public function index()
    {
        // Set banner heading
        $data['banner_heading'] = "Blog";
        // Get banner
        $data['banner'] = $this->model_inner_banner->get_banner(17);
        // Get categories
        //$data['categories'] = $this->get_categories();
        // Get recent post
        //$data['recent'] = $this->model_blog->get_recent_post();
        // Set data
        // $data['blog_info'] = $this->_pagination();
        if(isset($_GET['search']) && !empty($_GET['search'])  ){

            $searchby = htmlentities($_GET['search']);
            $param1['where_like'][] = array('column'=>'blog_title','value'=>$searchby,'type'=>'both');
            
        }
        $param1['order'] = 'blog_id DESC';
        $data['blogs'] = $this->model_blog->find_all_active($param1);

        $data['blog'] = $this->model_blog->find_all_active();
        // debug($data['blogs'],1);
        // Load view
        $this->load_view("index" , $data);
    }

    // Search Blog
    public function search()
    {
        $keyword = $this->input->get('search');
        if(!empty($keyword)){
            $this->session->set_userdata('search_keyword',$keyword);
        }
        else{
            if($this->session->userdata('search_keyword')==null){
                redirect(g('base_url'));
            }
            else{
                $keyword = $this->session->userdata('search_keyword');
            }
        }

        // Set banner heading
        $data['banner_heading'] = "Blog - Search";
        // Set data
        $data['blog_info'] = $this->_search_pagination($keyword);
        // Load view
        $this->load_view("search" , $data);
    }

    // Blog post pagination
    private function _pagination()
    {
        $this->load->library('mypagination');

        $pagination["base_url"] = g('base_url') . $this->router->fetch_class()."/page/";
        $pagination["total_rows"] = $this->model_blog->get_total_count();
        $pagination["per_page"] = 10;
        $pagination['use_page_numbers']  = TRUE;
        $pagination["uri_segment"] = 3;
        $pagination['last_tag_open'] = '';

        $this->mypagination->initialize($pagination);

        $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
        $vars["data"] = $this->model_blog
            ->get_pagination_data($pagination["per_page"], (($page > 0)?($page-1):($page)) * $pagination["per_page"]);

        $vars["links"] = $this->mypagination->create_links();

        return $vars;
    }

    // Blog search pagination
    private function _search_pagination($keyword)
    {
        $this->load->library('mypagination');

        $pagination["base_url"] = g('base_url') .$this->router->fetch_class() . "/search/page/";
        $pagination["total_rows"] = $this->model_blog->get_total_count(array(), $keyword);
        $pagination["per_page"] = 10;
        $pagination['use_page_numbers']  = TRUE;
        $pagination["uri_segment"] = 4;
        $pagination['last_tag_open'] = '';

        $this->mypagination->initialize($pagination);

        $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0;
        $vars["data"] = $this->model_blog
            ->get_pagination_data($pagination["per_page"], (($page > 0)?($page-1):($page)) * $pagination["per_page"], array(), $keyword);

        $vars["links"] = $this->mypagination->create_links();

        return $vars;
    }

  public function detail($slug = '')
    {
        global $config;

        $this->layout_data['title'] = "Blog Details| ".g('site_name');
//          $data['banner'] = $this->model_inner_banner->get_banner(18);
          
//         $parm['where']['blog_slug'] = $slug;
//         $data['blog_details']  = $this->model_blog->find_one_active($parm);
//         // debug($data['blog_and_events_details'],1);
//         $parm_1['where']['comment_post_id'] = $data['blog_details']['blog_id'];
//         $data['leave_a_comment'] =  $this->model_comment->find_all_active($parm_1);
//         // debug($data['leave_a_comment'],1);

//         $parm1['where']['blog_status'] = 1;
//         $data['blog'] = $this->model_blog->find_all_active($parm1);
// // recent blog
//         $param_2['limit'] = 5;
//         $param_2['where']['blog_id !='] = $data['blog_details']['blog_id'];
//         $param_2['order'] = 'blog_id DESC';
//         $data['recent_blog'] = $this->model_blog->find_all_active($param_2);

// // Popular blog
//         $param_3['limit'] = 5;
//         $param_3['where']['blog_latest_featured'] = 1;
//         $param_3['order'] = 'blog_id DESC';
//         $data['popular_blog'] = $this->model_blog->find_all_active($param_3);
        // debug($data['recent_blog'],1);
           $para['where']['blog_slug']  = $slug;
           $data['blog'] = $this->model_blog->find_one($para);

       
        $this->load_view("detail", $data);
    }

    // Get categories (Get recent categories 5)
    public function get_categories()
    {
        // Get data
        $data = $this->model_blog_category->get_recent_categories();
        // Return
        return $data;
    }


    // public function comment_save()
    // {
    //     $comment = $this->input->post('comment');

    //     if(isset($_POST) && array_filled($comment))
    //     {
    //         $custom_rule = array(
    //             'g-recaptcha-response'=>array(
    //                 'field'=>'g-recaptcha-response',
    //                 'label'=>'Captcha',
    //                 'rules'=>'required'
    //             )
    //         );

    //         if($this->validate("model_comment", $custom_rule))
    //         {
    //             $this->model_comment->set_attributes($comment);
    //             $inserted_id = $this->model_comment->save();


    //             $this->json_param['status'] = 1;
    //             $this->json_param['txt'] = 'Your comment has been submitted successfully.Waiting for Admin approval.';

    //         }
    //         else
    //         {
    //             $this->json_param['status'] = 0;
    //             $this->json_param['txt'] = validation_errors();
    //         }

    //         echo json_encode($this->json_param);
    //     }
    // }
public function save_comment()
    {
        // debug($_POST,1);
        if(count($_POST) > 0) 
        {
            if($this->validate("model_comment"))
            {
                $form_name = 'comment';
                $comment_data = $_POST['comment'];
                $comment_data['comment_status'] = 0;
                $this->model_comment->set_attributes($comment_data);
                $inserted_id = $this->model_comment->save();

                if($inserted_id > 0)
                {
                    $param['status'] = 1;
                    $param['reload'] = 1;
                    $param['txt'] = 'Your comment has been submitted successfully.Waiting for Admin approval.';
                    echo json_encode($param);
                }
                else
                {
                    $param['status'] = 0;
                    $param['reload'] = 0;
                    $param['txt'] = 'Due to some error, Comment not send';
        
                    echo json_encode($param);
                }               
            }
            else
            {

                $param['status'] = 0;
                $param['reload'] = 0;
                $param['txt'] = validation_errors();
                echo json_encode($param);
            }
        }

    }
    // Category page
    public function category($cat_slug='')
    {
        if(empty($cat_slug)){
            redirect('/');
        }
        else{
            // Check category slug
            $category = $this->model_blog_category->find_by_slug($cat_slug);
            if(array_filled($category)){
                // Get banner
                $data['banner'] = $this->model_banner->get_banners(8);
                // Get categories
                $data['categories'] = $this->get_categories();
                // Get recent post
                $data['recent'] = $this->model_blog->get_recent_post();
                // Set data
                $data['blog_info'] = $this->_category_pagination($cat_slug,$category['blog_category_id']);
                // Load view
                $this->load_view("category" , $data);
            }
            else{
                redirect('/');
            }
        }
    }

    // Blog post pagination
    private function _category_pagination($cat_slug, $cat_id)
    {
        $this->load->library('mypagination');

        $pagination["base_url"] = g('base_url') . $this->router->fetch_class()."/category/".$cat_slug."/page/";
        $pagination["total_rows"] = $this->model_blog_category->get_total_count($cat_id);
        $pagination["per_page"] = 10;
        $pagination['use_page_numbers']  = TRUE;
        $pagination["uri_segment"] = 5;
        $pagination['last_tag_open'] = '';

        $this->mypagination->initialize($pagination);

        $page = ($this->uri->segment(5))? $this->uri->segment(5) : 0;
        $vars["data"] = $this->model_blog_category
            ->get_pagination_data($pagination["per_page"], (($page > 0)?($page-1):($page)) * $pagination["per_page"], $cat_id);

        $vars["links"] = $this->mypagination->create_links();

        return $vars;
    }


    public function angular_vs_react()
    {
        global $config;
        $this->layout_data['title'] = "Angular vs React: The complete analysis";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = ' A detailed side-by-side comparison of general and technical aspects of Angular vs React. This blog will get you all the insights about Angular and React.';

        $this->load_view("angular-vs-react", $data);
    }

    public function minimal_viable_product()
    {
        global $config;
        //debug(1,1);
        $this->layout_data['title'] = "What is a Minimum Viable Product (MVP)";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'From questions to what is an MVP to getting the essential insights and knowledge to build a minimum viable product for your startup. We have all the information right here.';

        $this->load_view("mvp-pro", $data);
    }

    public function examples_minimal_viable_products()
    {
        global $config;
        $this->layout_data['title'] = "Some Renowned examples of Minimum Valuable Products";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'Some of the best Minimum viable Product Examples from the industry that you probably have heard of.';

        $this->load_view("examples-minimal-viable-products", $data);
    }
    public function web_apps_vs_native_apps_vs_hybrid()
    {
        global $config;
        $this->layout_data['title'] = "Progressive Web Apps vs Native Apps vs Hybrid apps";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'People often get confused between mobile apps. Let’s get some insightful information about Progressive web apps vs native apps vs hybrid apps.';

        $this->load_view("web-apps-vs-native-apps-vs-hybrid", $data);
    }

    public function api_integration()
    {
        global $config;
        $this->layout_data['title'] = "WHat is API integration and get all the insights about API integration";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'API integration integrates several corporate apps to provide seamless communication. Read this blog to learn about API integration and how to implement it.';

        $this->load_view("api-integration", $data);
    }
    public function ionic_vs_react_native(){
        global $config;
        $this->layout_data['title'] = "React Native vs Ionic: What is The Best for Startups?";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'Both React Native and Ionic come with their own pros and cons, learn the comparison between Ionic vs React native by the industry experts.';

        $this->load_view("ionic-vs-react-native", $data);
    }
    public function why_website_design_is_an_integral_part_of_our_online_presence(){
        
        global $config;
        $this->layout_data['title'] = "Website Development | Web Design Agency in USA";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'Website Development | Web Design Agency in USA';

        $this->load_view("why-website-design-is-an-integral-part-of-our-online-presence", $data);
    }

    public function create_a_social_media_app(){
        
        global $config;
        $this->layout_data['title'] = "How to create a Social Media App and Avoid Possible Pitfalls";
        $this->layout_data['meta_data']['keywords'] = '';
        $this->layout_data['meta_data']['description'] = 'Tips on how to create a social media app. Get the essential knowledge about social media app creation and get your own social media app built.
        ';

        $this->load_view("create-a-social-media-app", $data);
    }
}



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */