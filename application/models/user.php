<?php 
/**
* Friend class
*/
class User extends Datamapper
{
	$has_many=array('Friend');
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
			"rules"=>array("required","trim","valid_email"),
			),
		"password"=>array(
			"label"=>"Password",
			"rules"=>array("required","trim","min_size"=>8,"encrypt"),
			));
	function _encrypt($field)
	{
		if (!empty($this->{$field})) 
		{
			if (empty($this->salt)) 
			{
				$this->salt=md5(uniqid(rand(),true));
			}
			$this->{$field}=sha1($this->salt,$this->{$field});
		}
	}
}

 ?>