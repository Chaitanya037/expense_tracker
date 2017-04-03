<?php
class Expenses extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model("Expenses_model");
    }
    
    function index(){
        echo "Testing";
    }
}