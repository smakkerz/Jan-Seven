<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class PasienController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->auth_library->cek_auth();
	}

	public function index() 
	{		
		if($this->session->userdata('level') == 'Admin'){
			$data['Menu'] = $this->settingvalue_library->GetvalueInArray('Menu_Admin');
		} else {
			$data['Menu'] = $this->settingvalue_library->GetvalueInArray('Menu_User');
		}
		$data['Title'] = 'Data Pasien-'.$this->session->userdata('Unique_user');
		$data['Company'] = $this->settingvalue_library->Getvalue('Name_Company')->Value;
		$data['Data'] = $this->operation_model->get_all('Patient');
       	$this->template_library->load('Template','Admin/Pasien/Index', $data);
	}
}