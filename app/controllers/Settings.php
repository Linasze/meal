<?php

class Settings extends Controller {

    public function __construct(){
        $this->settingModel = $this->model('Setting');
        $this->userModel = $this->model('User');
    }

    public function index(){
        $id = $_SESSION['user_id'];
        $settings = $this->settingModel->getUserSettings($id);
        $user = $this->userModel->getUserInfo($id);
        $data = [
            'settings' => $settings,
            'user' => $user
        ]; 
        $this->view('settings/index', $data);
    }

    public function planSets(){
        $id = $_SESSION['user_id'];
        $settings = $this->settingModel->getUserSettings($id);
        $user = $this->userModel->getUserInfo($id);
        $kcal = $user->kcal * $user->activity + $user->purpose; 
        $data = [
            'settings' => $settings,
            'user' => $user,
            'kcal' => $kcal
        ]; 
        $this->view('settings/planSets', $data);
    }

    public function updatePersonalInfo(){
        // if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        //     $data = [
        //         'id' => $_SESSION['user_id'],
        //         'name' => trim($_POST['name']),
        //         'first_name' => trim($_POST['first_name']),
        //         'last_name' => trim($_POST['last_name'])
               
        //     ];

        // if(empty($data['password_err']) && empty($data['confirm_password_err'])){
        //     if($this->userModel->updatePersonalInfo($data)){
        //     flash('update', 'Personal info updated');
        //     redirect('settings/index');
        //     }else{
        //         die('Something went wrong');
        //     }
        // }else{
        //     $this->view('settings/index', $data);
        // }

        // }else{
        //     $this->view('settings/index');
        // }
    }

    public function updatePlan(){
        if($_SERVER['REQUEST_METHOD'] = 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data =[
                'user_id' => $_SESSION['user_id'],
                'wake_up' => $_POST['wake_up'],
                'go_sleep' => $_POST['go_sleep'],
                'eating_count' => $_POST['eating_count'],
                //'kcal' => $_POST['kcal'],
                'activity' => $_POST['activity'],
                'purpose' => $_POST['purpose']
            ];

            if($this->settingModel->updatePlan($data) && $this->userModel->updateUserPlanSets($data)){
                flash('update', 'Settings updated');
                redirect('settings/planSets');
               
            }else{
                die('Something went wrong');
            }

        }else{
            $id = $_SESSION['user_id'];
            $data = $this->settingModel->getUserSettings($id);;
            $this->view('settings/index', $data);
        }
    }
}