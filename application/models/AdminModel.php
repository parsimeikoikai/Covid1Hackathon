<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model
{


	public function get_national_government_funds()
	{
		//$this->db->where('expending_body', "National Government");
		$query = $this->db->get('monthly_expenditure')->result();
		return $query;
	}

    public function get_user_details($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('users')->row();
        return $query;
    }
    public function get_client_details()
    {
        $this->db->where('level', 3);
        $query =$this->db->get('users')->result();
        return $query;


    }
	public function get_user_roles()
	{
		$query = $this->db->get('tbl_roles')->result();
		return $query;
	}
	public function get_program_areas()
	{
		$query = $this->db->get('tbl_programs')->result();
		return $query;
	}
	public function get_branches()
	{
		$query = $this->db->get('tbl_branches')->result();
		return $query;
	}
	public function get_names($table, $column1, $column2, $value)
	{
		$this->db->where($column1, $value);
		$query = $this->db->get($table);
		return $query->row($column2);
	}
	public function get_countries()
	{
		$query = $this->db->get('tbl_countries')->result();
		return $query;
	}
	public function get_donor_types()
	{
		$query = $this->db->get('tbl_donor_type')->result();
		return $query;
	}
	public function get_currencies()
	{
		$query = $this->db->get('tbl_currencies')->result();
		return $query;
	}
	public function list_programs()
{
	$query = $this->db->get('tbl_programs')->result();
	return $query;
}
	public function list_users()
	{
		$query = $this->db->get('users')->result();
		return $query;
	}
	public function list_donors()
	{
		$query = $this->db->from("tbl_donors")->order_by("tbl_donors.id desc")->get();
		return $query->result();
	}
	public function list_grants()
	{
		$query = $this->db->from("tbl_grants")->order_by("tbl_grants.id desc")->get();
		return $query->result();
	}
	public function list_proposals_types()
	{
		$query = $this->db->from("tbl_proposals_type")->order_by("tbl_proposals_type.id desc")->get();
		return $query->result();
	}
	public function list_proposals()
	{
		$query = $this->db->from("tbl_proposals")->order_by("tbl_proposals.id desc")->get();
		return $query->result();
	}



}
