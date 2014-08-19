<?php
/**
 * class must extends for every admin's controller
 * targer: - secure with force signin
 * - create session
 * - using hash for login
 */
class BaseAdminController extends MY_Controller
{
    
    public function __construct()
    {
        parent::__construct();
    }
}