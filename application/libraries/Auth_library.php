<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Auth_library {

	function __construct() {
        $this->CI = &get_instance();
    }
    public function cek_auth()
	{
		$this->sesi  = $this->CI->session->userdata('isLogin');
		if($this->sesi != TRUE){
			redirect('Auth','refresh');
			exit();
		}
	}

	public function cek_akses($kecuali)
	{
		$this->sesi  = $this->CI->session->userdata('isLogin');
		$this->hak = $this->CI->session->userdata('level');
		if($this->hak != $kecuali){
			redirect(base_url());
			exit();
		}
	}

	function Login($user, $pass){
	$Status = "";
	$Login=$this->CI->db->query("SELECT *
	 FROM Users WHERE User='$user' OR Phone = '$user' AND IsDeleted = 0 ORDER BY CreatedDate ASC ")->row();
	$this->depwd = $this->CI->encryption->decrypt($Login->Password);
	if($Login == NULL) {
		return $Status = "not found";
	}
	if($this->depwd == $pass) {

		$this->CI->session->set_userdata(array(
                'isLogin' => TRUE,
                'nama' => $Login->FirstName ." ". $Login->LastName,
                'level' => $Login->Role,
                'Unique_user' => $Login->Unique_ID,
                'phone' => $Login->Phone,
                'user'=> $Login->User,
                'approved'=> $Login->IsApproved
                ));
		$Status = "Sukses";
		return $Status;
	}
	return $Status;
    }
    
    function ValidasiAdd($table, $field, $data){
	$Status = "Found";
	$Login=$this->CI->db->query("SELECT *
	 FROM $table WHERE $field = '$data' AND IsDeleted = 0 ORDER BY CreatedDate ASC ")->row();
	if($Login == NULL) {
		$Status = "Not Found";
		return $Status;
	}
	return $Status;
    }

    function ExplodeName($name){
    	$Name['first'] = implode(' ', array_slice(explode(' ',$name), 0, -1));
    	$Name['last'] = array_slice(explode(' ', $name), -1)[0];
    	return $Name;
    	// $LastName = (strpos($name, ' ') == false ? '' : preg_replace('#.*\s([w-]*)$#', '$1', $name));
    	// $FirstName = trim(preg_replace('#'.$LastName.'#', '', $name));
    	// return array($FirstName, $LastName);
    }
}