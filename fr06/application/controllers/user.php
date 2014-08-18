<?php

class User extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		echo 'my_action goi den model , lay du lieu tu model , tra lai controler , controller se goi view de hient hi du lieu';
	}
}