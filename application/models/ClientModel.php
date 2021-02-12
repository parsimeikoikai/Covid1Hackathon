<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientModel extends CI_Model
{
    public function get_user_details($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('users')->row();

        return $query;
    }
    public function get_role($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('users')->row('role');
		$query = $this->fetchRow($query);
		return $query;
	}
	public function fetchRow($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('tbl_roles')->row('role');
		return $query;
	}
	public function listRoles()
	{
		$this->db->where('status', 0);
		$query = $this->db->from("tbl_roles")->order_by("tbl_roles.id desc")->get();
		return $query->result();

	}
	public function listPrograms()

		{
			$this->db->where('status', 0);
			$query = $this->db->from("tbl_programs")->order_by("tbl_programs.id desc")->get();
			return $query->result();


	}
	public function listUsers()

	{
		$this->db->where('active_status', 0);
		$query = $this->db->from("users")->order_by("users.id desc")->get();
		return $query->result();


	}
}
