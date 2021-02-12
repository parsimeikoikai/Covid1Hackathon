<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function index()
	{
		$counties_list = $this->db->get('counties')->result();
		$months_list = $this->db->get('months')->result();

		$data = array
		(
			'title' => "COVID 19 Hackathon",
			'page' => $this->uri->segment(1),
			'counties_list' =>$counties_list,
			'months_list' =>$months_list,
			'national_government_data' => $this->AdminModel->get_national_government_funds()
		);

		$this->load->view('admin/temps/head', $data);
		$this->load->view('auth/pages/index', $data);
		$this->load->view('admin/temps/scripts', $data);

	}
	public function consume_api()
	{

		$host = "https://actionfortransparency.org/wp-content/plugins/a4t-covid-19/assets/expenditure.json";
		$headers = array(
			'Content-Type:application/json',
			'Authorization: Basic '. base64_encode("user:password") // place your auth details here
		);
		$payload = array(
			'id' => 1,
		);

		$process = curl_init($host); //your API url
		curl_setopt($process, CURLOPT_HTTPHEADER, $headers);
		//curl_setopt($process, CURLOPT_HEADER, 1);
		//curl_setopt($process, CURLOPT_USERPWD, $username . ":" . $password);
		curl_setopt($process, CURLOPT_TIMEOUT, 30);
		curl_setopt($process, CURLOPT_POST, 1);
		curl_setopt($process, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
		$return = curl_exec($process);
		curl_close($process);
		echo '<pre>';
		//finally print your API response
		$array = json_decode($return);
		$this->db->insert_batch('expenditure', $array);
		//print_r(json_decode($return));



	}
	public function forgot_password()
	{
		$data = array
		(
			'title' => "Forgot Password",
			'page' => $this->uri->segment(2)
		);

		$this->load->view('auth/temps/head',$data);
		$this->load->view('auth/pages/forgot_password',$data);
		$this->load->view('auth/temps/scripts',$data);
	}
    public function signup()
    {
        $data = array
        (
            'title' => "ATJ:: Sign Up",
            'page' => $this->uri->segment(2)
        );

        $this->load->view('auth/temps/head',$data);
        $this->load->view('auth/pages/reg',$data);
        $this->load->view('auth/temps/scripts',$data);
    }

    public function reset_password()
    {
        $data = array
        (
            'title' => "Reset Password",
            'page' => $this->uri->segment(2),
            'user_id' => $this->uri->segment(3)
        );

        $this->load->view('auth/temps/head',$data);
        $this->load->view('auth/pages/reset_password',$data);
        $this->load->view('auth/temps/scripts',$data);
    }




    public function reg_action()
    {
        $fname = $this->input->post('fname');
        $other_names = $this->input->post('other_names');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $tin = $this->input->post('tin');
        $passport = $this->input->post('passport');
        $p_address = $this->input->post('p_address');
        $p_code = $this->input->post('p_code');
        $password = $this->input->post('password');

        $reg_data = array
        (
            'fname' => $fname,
            'other_names' => $other_names,
            'email' => $email,
            'phone' => $phone,
            'tin_pin' => $tin,
            'passport' => $passport,
            'p_code' => $p_code,
            'p_address' => $p_address,
            'password' => sha1($password),
            'level' => 1
        );

        $user_exists = $this->UserModel->check_user_exists($email, $phone);

        if($user_exists > 0)
        {
            echo '1';

            exit(0);
        }

        else
        {
            $res = $this->db->insert('users', $reg_data);

            if($res)
            {
                echo '0';

                exit(0);
            }

            else
            {
                echo '2';

                exit(0);
            }
        }
    }

    public function login_action()
    {
        $email = $this->input->post('email');
        $password = sha1($this->input->post('password'));

        $login = $this->UserModel->login_user($email, $password);

        if($login === 'wrong')
        {
            echo "1";

            exit(0);
        }
        else
        {
            $sess_data = array
            (
                'user_id' => $login["id"]
            );

			$this->session->set_userdata('admin_session', $sess_data);

			$next_link = base_url('user/dashboard');

			echo $next_link;

			exit(0);
        }
    }

    public function recover_password()
    {
        $email = $this->input->post('email');

        $check_email = $this->UserModel->check_user_email($email);

        if($check_email)
        {
            $sec_id_1 = $this->random_value(4);
            $sec_id_2 = $this->random_value(4);

            $u_id = $sec_id_1.$check_email->id.$sec_id_2;

            $link = base_url('auth/reset_password/'.$u_id.'/'.md5(uniqid()));

            $full_name = ucwords(strtolower($check_email->fname." ".$check_email->other_names), " ");

            $msg = "Hello $full_name, \n\nYour request for password reset has been received successfully.Please ".
                "click the ling below to reset password. \n\n $link";
            $subject = "CANCO M&E :: Reset Password";

            $email_data = array
            (
                'email' => $email,
                'subject' => $subject,
                'message' => $msg
            );

            $this->db->insert('tbl_user_emails', $email_data);
			$next_link = base_url('auth/reset_password');
			echo $next_link;
            exit(0);
        }

        else
        {
            echo "1";

            exit(0);
        }

    }

    public function reset_pass_action()
    {
        $id = $this->input->post('user_id');
        $password = sha1($this->input->post('password'));

        $res_front = substr($id, 4);

        $new_id = substr($res_front, 0,-4);

        $res = $this->UserModel->reset_user_password($new_id, $password);
        $next_link = base_url('auth');

        if($res)
        {
            echo $next_link;

            exit(0);
        }

        else
        {
            echo "1";

            exit(0);
        }
    }

    public function send_user_emails()
    {
        $unsent_emails = $this->UserModel->get_unsent_emails();

        foreach ($unsent_emails as $email)
        {
            $this->GeneralModel->email($email->message, $email->subject, $email->email);

            $this->db->where('id', $email->id);
            $this->db->set('sent', 1);
            $this->db->update('user_emails');
        }
    }


    public function test()
    {
        $str = "zbFT9999999999YSjk";

        $res_front = substr($str, 4);

        $new_res = substr($res_front, 0,-4);

        echo $new_res;
    }

    public function random_value($length){
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet.= "0123456789";
        $max = strlen($codeAlphabet); // edited

        for ($i=0; $i < $length; $i++) {
            $token .= $codeAlphabet[random_int(0, $max-1)];
        }

        return $token;
    }
}
