<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class HomeController extends CI_Controller {

    function __construct()
    {
        parent::__construct();  
        $this->auth_library->cek_auth();
    }

	public function index()
	{
		$data['agent'] = $this->useragent_library->GetDataClient();
		$data['Company'] = $this->settingvalue_library->Getvalue('Name_Company')->Value;
		$data['Title'] = "Home - ". $this->session->userdata('Unique_user');

		if($this->session->userdata('level') == 'Admin'){
			$data['Menu'] = $this->settingvalue_library->GetvalueInArray('Menu_Admin');
		} else {
			$data['Menu'] = $this->settingvalue_library->GetvalueInArray('Menu_User');
		}
		$data['ID'] = $this->settingvalue_library->AutoIncrement('Settings', 'ID', 'ID');

       	$this->template_library->load('Template','User/Home/Index', $data);
	}
}
