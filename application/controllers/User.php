<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller
{
	public function index()
	{
		$data = array
		(
			'title' => "Login",
			'page' => $this->uri->segment(1)
		);

		$this->load->view('auth/temps/head',$data);
		$this->load->view('project/temps/head', $data);
		$this->load->view('auth/pages/login', $data);
		$this->load->view('project/temps/scripts', $data);
		$this->load->view('auth/temps/scripts',$data);

	}
	public function dashboard()
	{
		$session = $this->check_session();

		$data = array
		(
			'title' => "Dashboard",
			's_id' => $session,
			'page' => $this->uri->segment(2),
			'details' => $this->ClientModel->get_user_details($session),
			'role'=>$this->ClientModel->get_role($session),
		);

		$this->load->view('project/temps/head', $data);
		$this->load->view('project/temps/header', $data);
		$this->load->view('project/temps/sidebar', $data);
		$this->load->view('project/pages/dashboard', $data);
		$this->load->view('project/temps/footer', $data);
		$this->load->view('project/temps/scripts', $data);

	}
	public function consume_api()
{

	$headers = array(
		'Content-Type:application/json',
		'Authorization: Basic ' . base64_encode("user:password") // place your auth details here
	);
	$payload = array(
		'id' => 1,
	);
     $host = "https://actionfortransparency.org/wp-content/plugins/a4t-covid-19/assets/funding.json";
	$process = curl_init($host); //your API url
	curl_setopt($process, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($process, CURLOPT_HEADER, 1);
	curl_setopt($process, CURLOPT_TIMEOUT, 30);
	curl_setopt($process, CURLOPT_POST, 1);
	curl_setopt($process, CURLOPT_POSTFIELDS, $payload);
	curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
	$return = curl_exec($process);
	curl_close($process);

	//finally print your API response
	print_r($return);


}
    public function get_national_government_funds()
    {
    	$query = $this->AdminModel->get_national_government_funds();
    	$array = array();
		foreach($query as $item)
		{
			$month = date("m",strtotime($item->period));

			$yrdata= strtotime($item->period);
			$month_ = date('M', $yrdata);

			array_push($array,$month_);
		}
		print_r($array);

    }


	public function check_session()
	{
		$session = $this->session->userdata('admin_session');

		if($session)
		{
			return $session['user_id'];
		}

		else
		{
			redirect('admin');
		}
	}
	public function logout()
	{
		$session = $this->check_session();

		if($session)
		{
			$this->session->unset_userdata('admin_session');

			redirect('project');
		}

		else
		{
			redirect('project');
		}
	}
}
