<?php 
/**
* Friend class
*/
class User extends Datamapper
{
	var $salt;
	var $has_many=array('Friend');
		function __construct($id=null)
	{
		parent::__construct($id);		
	}
	var $validation=array(
		"first_name"=>array(
			"label"=>"First Name",
			"rules"=>array("required","trim","alpha"),
			),
		"last_name"=>array(
			"label"=>"Last Name",
			"rules"=>array("required","trim","alpha"),
			),
		"email"=>array(
			"label"=>"Email Address",
			"rules"=>array("required","trim","valid_email","unique"),
			),
		"password"=>array(
			"label"=>"Password",
			"rules"=>array("required","trim","min_size"=>8,"encrypt"),
			"type"=>"password"
			));
	 function login()
    {
        // Create a temporary user object
        $u = new User();

        // Get this users stored record via their username
        $u->where('email', $this->email)->get();

        // Give this user their stored salt
        // $this->salt = $u->salt;
        // var_dump($u->salt);

        // Validate and get this user by their property values,
        // this will see the 'encrypt' validation run, encrypting the password with the salt
        $this->validate()->get();

        // If the username and encrypted password matched a record in the database,
        // this user object would be fully populated, complete with their ID.

        // If there was no matching record, this user would be completely cleared so their id would be empty.
        if (empty($this->id))
        {
            // Login failed, so set a custom error message
            $this->error_message('login', 'Email or password invalid');

            return FALSE;
        }
        else
        {
            // Login succeeded
            return TRUE;
        }
    }

	function _encrypt($field)
	{

		if (!empty($this->{$field})) 
		{
			var_dump($this->{$field});
			// if (empty($this->salt)) 
			// {
			// 	$this->salt=md5(uniqid(rand(),true));
			// 	var_dump($this->salt);
			// }
			var_dump(sha1($this->{$field}));
			$this->{$field}=sha1($this->{$field}.$this->config->item('encryption_key'));
			var_dump($this->{$field});
		}
	}
}

 ?>