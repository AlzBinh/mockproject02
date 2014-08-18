<?php

class User_model extends CI_Model{
    protected $_table = 'users';
    protected $_primaryID = 'user_id';
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function list_users($limit, $start, $order_by = 'ASC', $title = 'user_name'  )
    {
        $this->db->limit($limit, $start);
        $this->db->order_by($title, $order_by);
        $query = $this->db->get($this->_table);
        return $query->result_array(); 
    }
}
