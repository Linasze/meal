<?php


class Dashboards extends Controller {

    public function __construct(){
        $this->userModel = $this->model('User');
    }

    public function index(){
        $id =  $_SESSION['user_id'];
       
        $data = $this->userModel->getUserInfo($id);
        $this->view('dashboards/index', $data);
    }
     
}