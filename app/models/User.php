<?php

class User {
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    // Register user
    public function register($data){
        $this->db->query('INSERT INTO users (name,email,password,years,month,day,sex,height,weight,activity,purpose) VALUES(:name, :email, :password, :years, :month, :day, :sex, :height, :weight, :activity, :purpose)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':years', $data['years']);
        $this->db->bind(':month', $data['month']);
        $this->db->bind(':day', $data['day']);
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

    public function generatePlan($data){
        $this->db->query("INSERT INTO user_settings (user_id, breakfast, brunch,lunch,afternoon_meal,dinner,evening_meal) VALUES (:user_id, :breakfast,:brunch,:lunch,:afternoon_meal,:dinner,:evening_meal)");
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':breakfast', $data['breakfast']);
        $this->db->bind(':brunch', $data['brunch']);
        $this->db->bind(':lunch', $data['lunch']);
        $this->db->bind(':afternoon_meal', $data['afternoon']);
        $this->db->bind(':dinner', $data['dinner']);
        $this->db->bind(':evening_meal', $data['evening']);
        // Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function NewUsers(){
        $this->db->query("SELECT * FROM users ORDER BY created_at DESC LIMIT 10");
        return $this->db->resultSet();
    }


    public function regeneratePlan($data){
        $this->db->query("UPDATE user_settings SET user_id = :user_id, breakfast = :breakfast, brunch = :brunch,lunch = :lunch,afternoon_meal = afternoon_meal,dinner = :dinner,evening_meal = :evening_meal WHERE user_id = :user_id");
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':breakfast', $data['breakfast']);
        $this->db->bind(':brunch', $data['brunch']);
        $this->db->bind(':lunch', $data['lunch']);
        $this->db->bind(':afternoon_meal', $data['afternoon']);
        $this->db->bind(':dinner', $data['dinner']);
        $this->db->bind(':evening_meal', $data['evening']);
        // Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }


    // public function NewUsers(){
    //     $this->db->query("SELECT * FROM users ORDER BY created_at DESC LIMIT 10");
    //     return $this->db->resultSet();
    // }



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
        $this->db->query("UPDATE users SET name = :name, height = :height, weight = :weight WHERE id = :id");
        $this->db->bind('id', $data['id']);
        $this->db->bind('name', $data['name']);
        $this->db->bind('height', $data['height']);
        $this->db->bind('weight', $data['weight']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function updatePersonalInfoWithPassword($data){
        $this->db->query("UPDATE users SET name = :name, password = :password WHERE id = :id");
        $this->db->bind('id', $data['id']);
        $this->db->bind('name', $data['name']);
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