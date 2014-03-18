<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FriendFinder extends CI_Controller {

	public function index()
	{
		$this->load->view('login_and_registration');
	}
	public function register()
	{
		$user=new user();
		var_dump($this->input->post());
		$user->first_name=$this->input->post('first_name');
		$user->last_name=$this->input->post('last_name');
		$user->email=$this->input->post('email');
		$user->password=$this->input->post('password');
		if ($user->save()) 
		{
			echo "Successfully done!";
		}else
		{
			echo "<p>".$user->error->string."</p>";
		}

	}
	public function log_in()
	{
		var_dump($this->input->post());
		$user=new user();
		$user->email=$this->input->post('email');
		$user->password=$this->input->post('password');
		if ($user->login()) 
		{
			Echo "Successfully done! Welcome!";
		}else
		{
			echo "<p>".$user->error->string."</p>";
		}
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