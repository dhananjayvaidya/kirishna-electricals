<?php
class Settings_model extends CI_Model {
	
	private $SettingsTableName = 'settings';
	private $Settings = array();
	function __construct(){
		$this->get();
	}
	public function get(){
		$this->Settings = array();
		$results = $this->db->get($this->SettingsTableName)->result_array();
		foreach($results as $result){
			$this->Settings[$result['set_name']] = $result['set_value'];
		}
		return $this->Settings;
	}
	public function get_logo(){
		return base_url(($this->Settings['COMPANY_LOGO']?$this->Settings['COMPANY_LOGO']:'uploads/logo/default_logo.png'));
	}
	public function get_admin_path(){
		return ($this->Settings['ADMIN_PATH']?$this->Settings['ADMIN_PATH']:'admin').'/';
	}
    public function get_active_theme(){
		return $this->Settings['WEBSITE_THEME'];
    }
    public function get_office_address(){
        return $this->Settings['COMPANY_FULL_ADDRESS'];
    }
    public function get_company_name(){
		return $this->Settings['COMPANY_NAME'];
    }
    public function get_email_address(){
		return $this->Settings['COMPANY_EMAIL_ADDRESS'];
    }
    public function get_phone_number(){
		return $this->Settings['COMPANY_PRIMARY_PHONE_NUMBER'];
    }
	public function update($data){
		foreach($data as $k => $v){
			$this->db->where("set_name",$k);
			$this->db->update($this->SettingsTableName,array("set_value"=>$v));
		}
		return true;
	}

}
