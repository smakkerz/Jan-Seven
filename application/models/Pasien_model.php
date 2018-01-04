<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_model extends CI_Model {

	var $order = 'desc';

	public function __construct()
	{
		parent::__construct();
		    $this->search = '';

	}

    function get_all($table)
    {
    $this->db->order_by('CreatedDate', $this->order);
    $this->db->where('IsDeleted', '0');
    return $this->db->get($table)->result();
    }

}
