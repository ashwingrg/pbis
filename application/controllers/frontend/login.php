<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->model('user_model');
		if($_POST){
			$usernameoremail = $this->input->post("usernameoremail");
			$password = $this->input->post("password");
			$check = $this->user_model->checkUser($usernameoremail,$password);
			if($check){
				$user_id = $check->user_id;
				$details = $this->user_model->userInfoById($user_id);
				$userdata = array(
					'userinfo' => $check,
					'userdetails' => $details
				);				
				$this->session->set_userdata( $userdata );
				redirect('home');
			}
			else{
				$this->session->set_flashdata('invlogin', 'Invalid username/email or password !');
				redirect('login');
			}
		}
		$this->load->view('frontend/login_view');
	}

	public function logout(){
		$this->session->unset_userdata('userinfo');
		$this->session->set_flashdata('logoutmsg', 'You have successfully terminated your session....');
		redirect('login');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/frontend/login.php */