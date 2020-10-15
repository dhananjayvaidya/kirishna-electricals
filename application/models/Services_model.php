<?php
class Services_model extends CI_Model {
    public function get_service_by_slug($service_slug){
        return $this->db->get_where('services',array('slug'=>$service_slug))->result_array();
    }


}