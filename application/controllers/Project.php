<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Project extends CI_Controller
{
	public function index()
	{
		$data = array
		(
			'title' => "Login",
			'page' => $this->uri->segment(1)
		);
		$this->load->view('auth/temps/head',$data);
		$this->load->view('auth/pages/login',$data);
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
			'details' => $this->ClientModel->get_user_details($session)
		);

		$this->load->view('project/temps/head', $data);
		$this->load->view('project/temps/header', $data);
		$this->load->view('project/temps/sidebar', $data);
		$this->load->view('project/pages/dashboard', $data);
		$this->load->view('project/temps/footer', $data);
		$this->load->view('project/temps/scripts', $data);

	}
	public function programs()
	{
		$session = $this->check_session();

		$data = array
		(
			'title' => "Dashboard",
			's_id' => $session,
			'page' => $this->uri->segment(2),
			'details' => $this->ClientModel->get_user_details($session)
		);

		$this->load->view('project/temps/head', $data);
		$this->load->view('project/temps/header', $data);
		$this->load->view('project/temps/sidebar', $data);
		$this->load->view('project/pages/programs', $data);
		$this->load->view('project/temps/footer', $data);
		$this->load->view('project/temps/scripts', $data);
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
