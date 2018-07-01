<?php


class Dashboards extends Controller {

    public function __construct(){
        $this->userModel = $this->model('User');
    }

    public function index(){
        
        $this->view('dashboards/index');
    }
     
}