<?php 
/**
* Friend class
*/
class Friend extends Datamapper
{
	var $has_many=array('user');
		function __construct($id=null)
	{
		parent::__construct($id);		
	}
	
	
}
 ?>