<?php

class Meal {
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function rowCount(){
        $this->db->query('SELECT * FROM meals');
        $this->db->execute();
        $row = $this->db->rowCount();
        return $row;
    }

    public function getAllMeals(){
        $this->db->query("SELECT * FROM meals");
        return $this->db->resultSet();
        
    }

    public function getMeals($starting_limit, $limit){
        $this->db->query("SELECT * FROM meals ORDER BY id DESC LIMIT :starting_limit, :limit");
        $this->db->bind(':starting_limit', $starting_limit);
        $this->db->bind(':limit', $limit);
        return $this->db->resultSet();
        
    }

      public function getMealByType($type_id){
        $this->db->query("SELECT * FROM meals WHERE type_id = $type_id");
        return $this->db->resultSet();
    }


    public function addMeal($data){
        $this->db->query("INSERT INTO meals (title, type_id, recipe,protein, carb,fat,other) VALUES (:title, :type_id,:recipe,:protein,:carb,:fat,:other)");
        $this->db->bind(':title',  $data['title']);
        $this->db->bind(':type_id',  $data['type_id']);
        $this->db->bind(':recipe',  $data['recipe']);
       
        $protein = array($data['protein1'], $data['protein2'],$data['protein3'],$data['protein4'],$data['protein5'],
        $data['protein6'],$data['protein7'],$data['protein8'],$data['protein9'],$data['protein10']);
        
        $carb = array($data['carb1'],  $data['carb2'],$data['carb3'],$data['carb4'],$data['carb5'],$data['carb6'],$data['carb7'],
        $data['carb8'],$data['carb9'],$data['carb10']);
        
        $fat = array($data['fat1'],$data['fat2'],$data['fat3'], $data['fat4'],$data['fat5'],$data['fat6'],$data['fat7'],$data['fat8']
        ,$data['fat9'], $data['fat10']);
        
        $other = array($data['other1'],$data['other2'],$data['other3'],$data['other4'],$data['other5'],
        $data['other6'],$data['other7'],$data['other8'],$data['other9'],$data['other10']);
        
        function is_not_null($val){
            return ($val !== NULL && $val !== FALSE && $val !== '0');
        }
        $protein = array_filter($protein, 'is_not_null');
        $carb = array_filter($carb, 'is_not_null');
        $fat = array_filter($fat, 'is_not_null');
        $other = array_filter($other, 'is_not_null');

        $protein = implode(",", $protein );
        $carb = implode(",", $carb );
        $fat = implode(",", $fat );
        $other = implode(",", $other );

        $this->db->bind(':protein',  $protein);
        $this->db->bind(':carb',  $carb);
        $this->db->bind(':fat',  $fat);
        $this->db->bind(':other',  $other);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function getMealById($meal_id){
        $this->db->query('SELECT * FROM meals WHERE id = :id');
        $this->db->bind(':id', $meal_id);
        return $this->db->single();
    }


    public function updateMeal($data){
       echo $data['type_id'];
        $this->db->query('UPDATE meals SET title = :title, type_id = :type_id, recipe = :recipe ,protein = :protein, carb = :carb ,fat = :fat, other = :other WHERE id = :id');
        $this->db->bind(':id', $data['id']);       
        $this->db->bind(':title',  $data['title']);
        $this->db->bind(':type_id',  $data['type_id']);
        $this->db->bind(':recipe',  $data['recipe']);        
        $protein = array($data['protein1'], $data['protein2'],$data['protein3'],$data['protein4'],$data['protein5'],
        $data['protein6'],$data['protein7'],$data['protein8'],$data['protein9'],$data['protein10']);
        
        $carb = array($data['carb1'],  $data['carb2'],$data['carb3'],$data['carb4'],$data['carb5'],$data['carb6'],$data['carb7'],
        $data['carb8'],$data['carb9'],$data['carb10']);
        
        $fat = array($data['fat1'],$data['fat2'],$data['fat3'], $data['fat4'],$data['fat5'],$data['fat6'],$data['fat7'],$data['fat8']
        ,$data['fat9'], $data['fat10']);
        
        $other = array($data['other1'],$data['other2'],$data['other3'],$data['other4'],$data['other5'],
        $data['other6'],$data['other7'],$data['other8'],$data['other9'],$data['other10']);
        
        function is_not_null($val){
            return ($val !== NULL && $val !== FALSE && $val !== '0');
        }
        $protein = array_filter($protein, 'is_not_null');
        $carb = array_filter($carb, 'is_not_null');
        $fat = array_filter($fat, 'is_not_null');
        $other = array_filter($other, 'is_not_null');

        $protein = implode(",", $protein );
        $carb = implode(",", $carb );
        $fat = implode(",", $fat );
        $other = implode(",", $other );

        $this->db->bind(':protein',  $protein);
        $this->db->bind(':carb',  $carb);
        $this->db->bind(':fat',  $fat);
        $this->db->bind(':other',  $other);
       
        if($this->db->execute()){
            return true;
        }else{
            return false;
        } 
    }

    public function searchMeal($data){
        $this->db->query("SELECT * FROM meals WHERE title LIKE :title LIMIT 5");
        $this->db->bind(':title', '%' . $data['search'] . '%');
        return $this->db->resultSet();
       
    }

        public function deleteMeal($id){
            $this->db->query('DELETE FROM meals WHERE id = :id');
            $this->db->bind(':id', $id);
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }



}