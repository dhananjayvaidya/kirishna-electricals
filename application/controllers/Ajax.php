<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	function __construct(){
	    parent::__construct();
	    $this->theme_name = $this->settings_model->get_active_theme();
	}
	private function response($data,$status=200){
	    header("Content-Type: text/json");
	    echo json_encode(array("status"=>$status,'response'=>$data));
	}
	public function contact_form(){
	    if ($this->input->post()){
	       $name = $this->input->post('name');
	       $email = $this->input->post('email');
	       $phone = $this->input->post('phone');
	       $subject = $this->input->post('subject');
	       $message = $this->input->post('message');
	       
	       //send mail 
		   if (strlen($phone)>= 12){
			   $error['phone'] = "Please enter valid phone number";
		   }
		      
	       
	       //save the data in the db
	       $this->db->insert('contact_us',array(
	           "full_name" => $name,
	           "phone_number" => $phone, 
	           "email_id" => $email, 
	           "subject" => $subject, 
	           "message" => $message,
	           "timestamp" => time(),
	           "mod_timestamp" => time(),
	           "status" => 1
	           ));
			   
	        $entry = $this->db->get_where('contact_us',array('id'=>27))->row();
			$mail_message = "<table>
					<tr>
						<td>
							Full Name
						</td>
						<td>
							".$name."
						</td>
					</tR>
					<tr>
						<td>
							Email Address
						</td>
						<td>
							".$email."
						</td>
					</tR>
					<tr>
						<td>
							Phone Number
						</td>
						<td>
							".$phone."
						</td>
					</tR>
					<tr>
						<td>
							Subject
						</td>
						<td>
							".$subject."
						</td>
					</tR>
					<tr>
						<td>
							Message
						</td>
						<td>
							".$message."
						</td>
					</tR>
				</table>
			";
			 $config['protocol'] = 'sendmail';
			$config['mailpath'] = '/usr/sbin/sendmail';
			$config['charset'] = 'iso-8859-1';
			$config['wordwrap'] = TRUE;
			$config['mailtype'] = 'html';

			$this->email->initialize($config);
            $this->email->from($this->settings_model->get_email_address(), $this->settings_model->get_company_name());
            $this->email->to('akashgupta114433@gmail.com', 'Akash Gupta');
            $this->email->cc($this->settings_model->get_email_address(), $this->settings_model->get_company_name());
            $this->email->bcc('dhananjay@zitasoftinfotech.com');
            
            $this->email->subject('Enquiry From Omkar Cool Services Website');
            $this->email->message($mail_message);
            
            $this->email->send();
	       //echo "Successfully Submited";
	       $this->response(array('message'=>"Successfully Submitted"));
	    }else{
	        $this->response(array("message"=>"Please provide the data"));
	    }
	}
}
