<?php 
if (!function_exists('get_admin_path')){
	function get_admin_path(){
		$CI =& get_instance();
		$results = $CI->db->get_where('settings',array('set_name'=>'ADMIN_PATH'))->result_array();  
		return ($results[0]['set_value']?$results[0]['set_value']:'admin');
	}
}
?>