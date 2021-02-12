<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model
{
    public function check_user_exists($email, $phone)
    {
        $this->db->where('email', $email);
        $this->db->or_where('phone', $phone);
        $query = $this->db->count_all_results('users');

        return $query;
    }

    public function login_user($email, $password)
    {
        $query = $this->db->where('email', $email)
            ->get('users');

        if($query->row('password') === $password)
        {
            $data["id"] = $query->row('id');
            $data["level"] = $query->row('level');
            return $data;
        }

        else
        {
            return "wrong";
        }
    }

    public function reset_user_password($id, $password)
    {
        $this->db->where('id', $id);
        $this->db->set('password',$password);
        $query = $this->db->update('users');

        if($query)
        {
            return true;
        }

        else
        {
            return false;
        }
    }

    public function check_user_email($email)
    {
        $this->db->select('id, fname, other_names');
        $this->db->where('email', $email);
        $query = $this->db->get('users')->row();

        if($query)
        {
            return $query;
        }

        else
        {
            return 0;
        }
    }

    public function get_unsent_emails()
    {
        $this->db->where('sent', 0);
        $query = $this->db->get('user_emails')->result();

        return $query;
    }
    public function get_profile_details($session)
	{
		$this->db->where('id', $session);
		$query = $this->db->get('users')->row();
		return $query;

	}

}
