<?php

if(!empty($_SESSION['user_id'])){
if($_SESSION['user_rights'] == 1) {
class ManageUsers extends Controller{

    public function __construct(){
        $this->userModel = $this->model('User');
    }

    public function index(){
        $newUsers = $this->userModel->NewUsers();
        $data = ['newUsers' => $newUsers];
        $this->view('admins/manageusers/index', $data);
    }

}

}else{
    header('HTTP/1.0 403 Forbidden');
    exit;
}

}else{
    redirect('users/login');
}