<?php


class Users extends Controller {

    public function __construct(){
        $this->userModel = $this->model('User');
    }

    public function register(){
      
       if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
         $data = [
             'name' => trim($_POST['name']),
             'email' => trim($_POST['email']),
             'password' => trim($_POST['password']),
             'password2' => trim($_POST['password2']),
             'kcal' => trim($_POST['kcal']),
             'age' => trim($_POST['age']),
             'sex' => trim($_POST['sex']),
             'height' => trim($_POST['height']),
             'weight' => trim($_POST['weight']),
             'activity' => trim($_POST['activity']),
             'purpose' => trim($_POST['purpose'])
             
         ];

         if($this->userModel->findUserByEmail($data['email'])){
            die('Email has taken');
            
        }
 // Hash password
 $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

 // Register user
 if($this->userModel->register($data)){
    flash('register_success', 'You are register and can login');
  redirect('users/login');
 }else{
     die('Something went wrong');
 }
       }else{
        $this->view('users/register', $data);
        }
        
    }


    public function login(){
       // Check for POST
       if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


        // Init data
        $data = [
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'email_err' => '',
            'password_err' => '',
        ];

        //Validate email
        if(empty($data['email'])){
            $data['email_err'] = 'Please enter email';
        }

        // Validate password
     if(empty($data['password'])){
            $data['password_err'] = 'Please enter password';
        }

        // Check for user/email
        if($this->userModel->findUserByEmail($data['email'])){
            // User found
        }else{
            $data['email_err'] = 'No user found';
        }


         // Make sure errors empty
         if( empty($data['email_err']) && empty($data['password_err'])){
            // Validated
             // Check ant set logged in user
             $loggedInUser = $this->userModel->login($data['email'], $data['password']);
             if($loggedInUser){
                 //Create Session
                 $this->createUserSession($loggedInUser);
             }else{
                 $data['password_err'] = 'Password incorrect';

                 $this->view('users/login', $data);
             }
         }else{
             // Load view with errors
             $this->view('users/login', $data);
         }
    }else{
      // Init data
      $data = [
          'email' => '',
          'password' => '',
          'email_err' => '',
          'password_err' => ''
         ];

      $this->view('users/login', $data);
    }
    }


    public function createUserSession($user){
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_name'] = $user->name;
        $_SESSION['user_email'] = $user->email;
        redirect('dashboards/index');
     }

     public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_email']);
        session_destroy();
        flash('logout_success', 'successfully');
        redirect('mains/index');
   
    }
}