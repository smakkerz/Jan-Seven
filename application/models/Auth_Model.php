<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth_Model extends CI_Model
{
	public $table = 'Users';
    public $id = 'ID';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all($limit='')
    {
    $this->db->order_by($this->id, $this->order);
    return $this->db->get()->result();
    }

}