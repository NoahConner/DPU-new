<?
class Model_quote extends MY_Model {
  
    /**
     * quote MODEL
     *
     * @package     quote Model
     * 
     * @version     1.0
     * @since       2017 / Amazingly corrupt models Corporation Inc.
     */

    protected $_table    = 'quote';
    protected $_field_prefix    = 'quote_';
    protected $_pk    = 'quote_id';
    protected $_status_field    = 'quote_status';
    public $pagination_params = array();
    public $relations = array();
    public $dt_params = array();
    public $_per_page    = 20;
    
    function __construct()
    {
        // Call the Model constructor
        $this->pagination_params['fields'] = "
        quote_id,
        quote_name,
        quote_email,
        quote_phone,
        quote_status";
        parent::__construct();
    }
    
    // Get unread inquiries
    public function get_unread_quote()
    {
        // Set params
        $params['where_string'] = " quote_status=0";
        $result = $this->find_count($params);
        return $result;
    }

    /*
    * table       Table Name
    * Name        FIeld Name
    * label       Field Label / Textual Representation in form and DT headings
    * type        Field type : hidden, text, textarea, editor, etc etc. 
    *                           Implementation in form_generator.php
    * type_dt     Type used by prepare_datatables method in controller to prepare DT value
    *                           If left blank, prepare_datatable Will opt to use 'type'
    * attributes  HTML Field Attributes
    * js_rules    Rules to be aplied in JS (form validation)
    * rules       Server side Validation. Supports CI Native rules
    */
    public function get_fields( $specific_field = "" )
    {

        $fields = array(
        
              'quote_id' => array(
                     'table'   => $this->_table,
                     'name'   => 'quote_id',
                     'label'   => 'id #',
                     'type'   => 'hidden',
                     'type_dt'   => 'text',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"5%"),
                     'js_rules'   => '',
                     'rules'   => 'trim'
                ),


              'quote_name' => array(
                     'table'   => $this->_table,
                     'name'   => 'quote_name',
                     'label'   => 'Name',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => 'required',
                     'rules'   => 'required|trim'
                  ),


              'quote_email' => array(
                     'table'   => $this->_table,
                     'name'   => 'quote_email',
                     'label'   => 'Email',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => 'required',
                     'rules'   => 'required|trim'
                  ),


              'quote_phone' => array(
                     'table'   => $this->_table,
                     'name'   => 'quote_phone',
                     'label'   => 'Phone No',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => 'required',
                     'rules'   => 'required|trim'
                  ),

            'quote_country' => array(
                     'table'   => $this->_table,
                     'name'   => 'quote_country',
                     'label'   => 'Country',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => '',
                     'rules'   => 'trim'
                  ),


               'quote_budget' => array(
                     'table'   => $this->_table,
                     'name'   => 'quote_budget',
                     'label'   => 'Forcasted Budget',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => '',
                     'rules'   => 'trim'
                  ),

               'quote_interested' => array(
                     'table'   => $this->_table,
                     'name'   => 'quote_interested',
                     'label'   => 'Interested In',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => '',
                     'rules'   => 'trim'
                  ),

               'quote_message' => array(
                     'table'   => $this->_table,
                     'name'   => 'quote_message',
                     'label'   => 'Details',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => 'required',
                     'rules'   => 'required|trim'
                  ),

                
            

             

              'quote_status' => array(
                     'table'   => $this->_table,
                     'name'   => 'quote_status',
                     'label'   => 'Status?',
                     'type'   => 'switch',
                     'type_dt'   => 'dropdown',
                     'type_filter_dt'   => 'dropdown',
                     'list_data' => array( 
                                        0 => "<span class=\"label label-default\">Read</span>" ,  
                                        1 =>  "<span class=\"label label-primary\">Unread</span>"  
                                    ) ,
                     'default'   => '1',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"7%"),
                     'rules'   => 'trim'
                  ),            
              
            );

        if($specific_field)
            return $fields[ $specific_field ];
        else
            return $fields;

    }

}
?>