<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RwiModel extends CI_Model
{
    public function get_user_details($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('users')->row();

        return $query;
    }

    public function get_inspections_total($year)
    {
        $this->db->where('YEAR(date)', $year);
        $query = $this->db->count_all_results('inspections');

        return $query;
    }

    public function get_inspections($year)
    {
        $this->db->where('YEAR(date)', $year);
        $this->db->order_by('id', "DESC");
        $query = $this->db->get('inspections')->result();

        return $query;
    }

    public function get_inspections_pending()
    {
        $this->db->where('status', 'paid');
        $this->db->order_by('id', "DESC");
        $query = $this->db->count_all_results('inspections');

        return $query;
    }

    public function get_inspections_pending_result()
    {
        $this->db->where('status', 'paid');
        $this->db->order_by('id', "DESC");
        $query = $this->db->get('inspections')->result();

        return $query;
    }

    public function get_inspections_done_result()
    {
        $this->db->where('status', 'completed');
        $this->db->order_by('id', "DESC");
        $query = $this->db->get('inspections')->result();

        return $query;
    }

    public function get_inspections_failed_result()
    {
        $this->db->where('status', 'failed');
        $this->db->order_by('id', "DESC");
        $query = $this->db->get('inspections')->result();

        return $query;
    }

    public function get_pending_invoice_amount()
    {
        $this->db->where('pay_status', 0);
        $this->db->select_sum('amount');
        $query = $this->db->get('invoice')->row('amount');

        return $query;
    }

    public function get_paid_invoice_amount()
    {
        $this->db->where('pay_status', 1);
        $this->db->select_sum('amount');
        $query = $this->db->get('invoice')->row('amount');

        return $query;
    }

    public function get_pending_invoice()
    {
        $this->db->where('pay_status', 0);
        $query = $this->db->get('invoice')->result();

        return $query;
    }

    public function get_paid_invoice()
    {
        $this->db->where('pay_status', 1);
        $query = $this->db->get('invoice')->result();

        return $query;
    }

    public function get_car_make_name($id)
    {
        $this->db->select('title');
        $this->db->where('id', $id);
        $query = $this->db->get('car_make')->row('title');

        return $query;
    }

    public function get_car_model_name($id)
    {
        $this->db->select('title');
        $this->db->where('id', $id);
        $query = $this->db->get('car_model')->row('title');

        return $query;
    }
}
