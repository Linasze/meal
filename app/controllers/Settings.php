<?php



class Settings extends Controller {

    public function __construct(){
        $this->settingModel = $this->model('Setting');
    }

    public function index(){
        $id = $_SESSION['user_id'];
        $data = $this->settingModel->getUserSettings($id);;
        $this->view('settings/index', $data);
    }

    public function update(){
        if($_SERVER['REQUEST_METHOD'] = 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data =[
                'user_id' => $_SESSION['user_id'],
                'wake_up' => $_POST['wake_up'],
                'go_sleep' => $_POST['go_sleep'],
                'eating_count' => $_POST['eating_count']
            ];

            if($this->settingModel->update($data)){
                flash('update', 'Settings updated');
                redirect('settings');
               
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