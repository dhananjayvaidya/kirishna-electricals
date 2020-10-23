<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	function __construct(){
	    parent::__construct();
	    //$this->output->cache(10);
	    $this->theme_name = $this->settings_model->get_active_theme();
	}
	public function index()
	{
	    $page_data['page_title'] = "Home | ".$this->settings_model->get_company_name();
        $page_data['page'] = "index";
        $page_data['footer_call_btn'] = true;
		$this->load->view("front/".$this->theme_name."/index",$page_data);
	}
	public function about_us(){
	    $page_data['page_title'] = 'About Us | '.$this->settings_model->get_company_name();
        $page_data['page'] = 'about_us';
        $page_data['footer_call_btn'] = true;
	    $this->load->view("front/".$this->theme_name."/index",$page_data);
	}
    public function services(){
        $page_data['page_title'] = 'Our Services | '.$this->settings_model->get_company_name();
        $page_data['page'] = 'all_services';
        $page_data['footer_call_btn'] = true;
        $this->load->view("front/".$this->theme_name."/index",$page_data);
    }
    public function get_quote(){
        $page_data['page_title'] = 'Get Quote | '.$this->settings_model->get_company_name();
        $page_data['page'] = 'get_quote';
        $page_data['footer_call_btn'] = true;
        $this->load->view("front/".$this->theme_name."/index",$page_data);
    }
    public function single_service($param1){
        if ($param1){
            $checkIn = explode('-in-',$param1);
            if (count($checkIn) >= 1){
                $page_data['location'] = str_replace('-',' ',$checkIn[1]);
                $file_name = $checkIn[0];
            }else{
                $file_name = $param1;
                $page_data['location'] = '';
            }
            $clean_service_name = str_replace('-',' ',$param1);
            $page_data['page_title'] = $clean_service_name.' | '.$this->settings_model->get_company_name();
    	    $page_data['page'] = 'services/'.str_replace('../','',$file_name);
        }
        if ($file_name == 'ac-repair'){
            $page_data['footer_phone_number'] = '9323342083';
        }else{
            $page_data['footer_phone_number'] = '7710998826';
        }
        
        
        $this->load->view("front/".$this->theme_name."/index",$page_data);
    }
    
    public function amc_packages(){
        $page_data['page_title'] = 'AMC Packages | '.$this->settings_model->get_company_name();
	    $page_data['page'] = 'amc_packages';
        $this->load->view("front/".$this->theme_name."/index",$page_data);
    }
    public function amc(){
        $page_data['page_title'] = 'AMC | '.$this->settings_model->get_company_name();
	    $page_data['page'] = 'amc';
        $this->load->view("front/".$this->theme_name."/index",$page_data);
    }
    public function contact_us(){
        $page_data['page_title'] = 'Contact Us | '.$this->settings_model->get_company_name();
	    $page_data['page'] = 'contact_us';
        $this->load->view("front/".$this->theme_name."/index",$page_data);
    }
    public function terms_and_conditions(){
        $page_data['page_title'] = 'Terms & Conditions | '.$this->settings_model->get_company_name();
	    $page_data['page'] = 'terms_and_conditions';
        $this->load->view("front/".$this->theme_name."/index",$page_data);
    }
    public function privacy_policy(){
        $page_data['page_title'] = 'Privacy Policy | '.$this->settings_model->get_company_name();
	    $page_data['page'] = 'privacy_policy';
        $this->load->view("front/".$this->theme_name."/index",$page_data);
    }
}
