<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FriendFinder extends CI_Controller {

	public function index()
	{
		$this->load->view('login_and_registration');
	}
	public function register()
	{
		$user=new user();
		$user->first_name=$this->input->post('first_name');
		$user->last_name=$this->input->post('last_name');
		$user->email=$this->input->post('email');
		$user->password=$this->input->post('password');

	}
	public function log_in()
	{

	}
	public function log_off()
	{

	}
	public function display()
	{

	}
	public function add_friend()
	{

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */