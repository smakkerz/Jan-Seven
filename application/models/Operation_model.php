<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operation_model extends CI_Model {

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

    function insert($table, $data)
    {
        $this->db->insert($table, $data);
    }    

    function update($table, $field, $id, $data)
    {
        $this->db->where($field, $id);
        $this->db->update($table, $data);
    }

    // delete data
    function delete($table, $field, $id)
    {
        $this->db->where($field, $id);
        $this->db->delete($table);
    }

     // soft delete data
    function softdelete($table, $field, $id)
    {
        $this->db->where($field, $id);
        $this->db->delete($table, array('IsDeleted' => '1'));
    }

}
