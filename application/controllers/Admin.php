<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CW_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		
		if ($this->input->post()){
			$email = $this->input->post('email_id');
			$password = sha1($this->input->post('password'));

			$result = $this->db->get_where('users',array('email_id'=>$email, 'password'=>$password, 'account_status'=>1, 'role'=>'SUADMIN'))->result_array();
			$uid = $result[0]['id'];
			$first_name = $result[0]['first_name'];
			$last_name = $result[0]['last_name'];
			$email = $result[0]['email_id'];

			$this->session->set_userdata('admin_uid',$uid);
			$this->session->set_userdata('admin_first_name',$first_name);
			$this->session->set_userdata('admin_last_name',$last_name);
			$this->session->set_userdata('admin_email',$email);
		}
		if ($this->session->userdata['admin_uid']){
			//redirect to dashboard
			$page_data['page_title'] = "Dashboard";
			$page_data['page'] = 'dashboard';
			$this->load->view('admin/index',$page_data);
		}else{

			$page_data['page_title'] = "Login Admin";
			
			$this->load->view('admin/login',$page_data);
		}
		
	}
	public function general_settings(){
		if ($this->session->userdata['admin_uid']){
			if ($this->input->post()){
				
				$data = array(
					"WEBSITE_THEME"					=> $this->input->post('website_theme'),
					"COMPANY_FULL_ADDRESS"			=> $this->input->post('company_full_address'),
					"COMPANY_NAME"					=> $this->input->post('company_name'),
					"COMPANY_EMAIL_ADDRESS"			=> $this->input->post('company_email_address'),
					"COMPANY_PRIMARY_PHONE_NUMBER"	=> $this->input->post('company_primary_phone_number'),
					"COMPANY_WHATSAPP_NUMBER"		=> $this->input->post('company_whatsapp_number'),
					"COMPANY_SHORT_ADDRESS"			=> $this->input->post('company_short_address'),
					"COMPANY_FACEBOOK_LINK"			=> $this->input->post('company_facebook_link'),
					"COMPANY_INSTAGRAM_LINK"		=> $this->input->post('company_instagram_link'),
					"COMPANY_YOUTUBE_LINK"			=> $this->input->post('company_youtube_link'),
					"COMPANY_TWITTER_LINK"			=> $this->input->post('company_twitter_link'),
					"COMPANY_LINKEDIN_LINK"			=> $this->input->post('company_linkedin_link'),
					"COMPANY_GST_NUMBER"			=> $this->input->post("company_gst_number")
				);
				if ($_FILES['company_logo']['name']){
					$newLocation = "uploads/logo/".time()."-".$_FILES['company_logo']['name'];
					move_uploaded_file($_FILES['company_logo']['tmp_name'],$newLocation);
					$data['COMPANY_LOGO'] = $newLocation;
				}
				if ($this->settings_model->update($data)){
					$page_data['message'] = "Successfully updated.";
				}else{
					$page_data['message'] = 'Problem occur while updating settings.';
				}
			}
			
			
			//redirect to dashboard
			$themes = scandir('application/views/front');
			unset($themes[0],$themes[1]);
			$page_data['settings'] 	= $this->settings_model->get();
			$page_data['themes'] 	= $themes; 
			$page_data['page_title'] = "Settings";
			$page_data['page'] = 'general_settings';
			$this->load->view('admin/index',$page_data);
		}else{

			redirect(base_url().$this->settings_model->get_admin_path());
		}
	}
	public function cms_pages($params){
		if ($params){
			$this->load->model('pages_model');
			$page_id = $this->input->get('id');
			switch($params){
				case "view":
					$page_data['pages'] = $this->pages_model->get();
					$page_data['page_title'] = "Pages";
					$page_data['page'] = 'pages_view';
				break;
				case "add":
					$page_data['page_title'] = "Create Page";
					$page_data['page'] = 'pages_form';
				break;
				case "update":
					$page_data['page_data'] = $this->pages_model->get($page_id);
					$page_data['page_title'] = "Update Page";
					$page_data['page'] = 'pages_form';
				break;
				case "delete":

				break;
			}
			
			$this->load->view('admin/index',$page_data);
		}else{
			redirect(base_url().$this->settings_model->get_admin_path());
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('admin');
	}
}
