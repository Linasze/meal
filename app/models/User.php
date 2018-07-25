<?php

class User {
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    // Register user
    public function register($data){
        $this->db->query('INSERT INTO users (name,email,password,age,sex,height,weight,activity,purpose) VALUES(:name, :email, :password, :age, :sex, :height, :weight, :activity, :purpose)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':age', $data['age']);
        $this->db->bind(':sex', $data['sex']);
        $this->db->bind(':height', $data['height']);
        $this->db->bind(':weight', $data['weight']);
        $this->db->bind(':activity', $data['activity']);
        $this->db->bind(':purpose', $data['purpose']);

        // Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
           
    }

    public function generatePlan($user_id){
        $this->db->query("INSERT INTO user_settings (user_id) VALUES (:user_id)");
        $this->db->bind(':user_id', $user_id);
        // Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }



    public function findUserByEmail($email){
        $this->db->query("SELECT * FROM users WHERE email = :email");
        // Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        // Check row
        if($this->db->rowCount() > 0){
            return true;
        }else{
            return false;
        }

    }

    public function login($email, $password){
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);
        
        $row = $this->db->single();

        $hashed_password = $row->password;

        if(password_verify($password, $hashed_password)){
            return $row;
        }else{
            return false;
        }
    }

    public function getUserInfo($user_id){
        $this->db->query("SELECT * FROM users WHERE id = :id");
        $this->db->bind(':id', $user_id);
        return $this->db->single();
    }

    public function updatePersonalInfo($data){
        $this->db->query('UPDATE users SET name = :name, first_name = :first_name, last_name = :last_name, password = :password WHERE id = : id');
        $this->db->bind('name', $data['name']);
        $this->db->bind('first_name', $data['first_name']);
        $this->db->bind('last_name', $data['last_name']);
        $this->db->bind('password', $data['password']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function updateUserPlanSets($data){
       $this->db->query("UPDATE users SET  activity = :activity, purpose = :purpose WHERE id = :user_id");
       $this->db->bind(':user_id', $data['user_id']); 
       //$this->db->bind(':kcal', $data['kcal']);
       $this->db->bind(':activity', $data['activity']);
       $this->db->bind(':purpose', $data['purpose']);
      
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}