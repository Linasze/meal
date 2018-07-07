<?php

class User {
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    // Register user
    public function register($data){
        $this->db->query('INSERT INTO users (name,email,password, kcal,age,sex,height,weight,activity,purpose) VALUES(:name, :email, :password, :kcal, :age, :sex, :height, :weight, :activity, :purpose)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':kcal', $data['kcal']);
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
}