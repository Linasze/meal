<?php 

class Setting {
    
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getUserSettings($user_id){
        $this->db->query("SELECT * FROM users INNER JOIN user_settings ON users.id = user_settings.user_id WHERE users.id = $user_id");
        return $this->db->single();
    }

    public function update($data) {
        $this->db->query("UPDATE user_settings SET wake_up = :wake_up ,go_sleep = :go_sleep ,eating_count = :eating_count WHERE user_id = :user_id");
        $this->db->bind(':user_id', $data['user_id']);       
        $this->db->bind(':wake_up', $data['wake_up']);
        $this->db->bind(':go_sleep', $data['go_sleep']);
        $this->db->bind(':eating_count', $data['eating_count']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function updateBreakfast($data){
        $this->db->query("UPDATE user_settings SET breakfast = :breakfast WHERE user_id = :user_id");
        $this->db->bind(':user_id', $data['user_id']);       
        $this->db->bind(':breakfast', $data['breakfast']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

}