<?php
class Transactions extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model("Transactions_model");
    }
    
    function index(){
        $data['header'] = 'Common_header';
        $this->load->view('Transactions/index', $data, NULL, TRUE);
    }
}