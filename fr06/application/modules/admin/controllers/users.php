<?php 

class Users  extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index($start = 0, $order = 'ASC') 
	{
		echo $start;	
		echo $order;	
	}
}