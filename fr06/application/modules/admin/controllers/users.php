<?php 

class Users  extends  BaseAdminController 
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