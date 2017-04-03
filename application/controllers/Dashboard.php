<?php
class Dashboard extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model("Dashboard_model");
    }
    
    function index(){
        $data['header'] = 'Dashboard_header';
        $this->load->view('Dashboard/index', $data, NULL, TRUE);
    }
}
