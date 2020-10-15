<?php
class Pages_model extends CW_Model {
   
    public $TableName = "pages";
    public $Schema = array(
        'id'            => array(
            "dataType"=>"int", 
            "dataSize"=>11, 
            "not_null"=>true,
            "primary_key" => true,
            'auto_increment' => true
        ),
        "username"      => array(
            "dataType"=>"string", 
            "dataSize"=>255, 
            "not_null"=>true
        ),
        "password"      => array(
            "dataType"=>"string", 
            "dataSize"=>255, 
            "not_null"=>true
        ),
        "parent_id"     => array(
            "dataType"=>"int", 
            "dataSize"=>11, 
            "not_null"=>true,
            "default" => 0
        ),
        "role"          => array(
            "dataType"=>"string", 
            "dataSize"=>200, 
            "not_null"=>true
        ),
        "timestamp"     => array(
            "dataType"=>"int", 
            "dataSize"=>11, 
            "not_null"=>true,
            "default" => 0
        ),
        "mod_timestamp" => array(
            "dataType"=>"int", 
            "dataSize"=>11, 
            "not_null"=>true,
            "default" => 0
        ),
        "etms"          => array(
            "dataType"=>"int", 
            "dataSize"=>11, 
            "not_null"=>true,
            "default" => 0
        )
    );
    function __construct() {
    	//@session_start();
        parent::__construct($this);
    }
    // public function get($id=false){
    //     if ($id){
    //         $where = array('id'=>$id);
    //     }else{
    //         $where = array();
    //     }
    //     return $this->db->get_where($this->TableName,$where)->result_array();
    // }
    // public function add($data){
        
    // }


}