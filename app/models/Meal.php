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

    public function getMeals(){
        $this->db->query("SELECT * FROM meals");
        return $this->db->resultSet();
        
    }

      public function getMealByType($type_id){
        $this->db->query("SELECT * FROM meals WHERE type_id = $type_id");
        return $this->db->resultSet();
    }


    public function addMeal($data){
        $this->db->query("INSERT INTO meals (title, type_id, recipe,products) VALUES (:title, :type_id,:recipe,:products)");
        $this->db->bind(':title',  $data['title']);
        $this->db->bind(':type_id',  $data['type_id']);
        $this->db->bind(':recipe',  $data['recipe']);
       
        $products = array($data['product1'], $data['product2'],$data['product3'],$data['product4'],$data['product5'],
        $data['product6'],$data['product7'],$data['product8'],$data['product9'],$data['product10'],$data['product11'],
        $data['product12'],$data['product13'],$data['product14'],$data['product15'],$data['product16'],$data['product17'],
        $data['product18'],$data['product19'],$data['product20'],$data['product21'],$data['product22'],$data['product23'],
        $data['product24'],$data['product25'],$data['product26'],$data['product27'],$data['product28'],$data['product29'],
        $data['product30'],$data['product31'],$data['product32'],$data['product33'],$data['product34'],$data['product35'],
        $data['product36'],$data['product37'],$data['product38'],$data['product39'],$data['product40']);
        
        function is_not_null($val){
            return ($val !== NULL && $val !== FALSE && $val !== '0');
        }
        $products = array_filter($products, 'is_not_null');
        $products = implode(",", $products );
        $this->db->bind(':products',  $products);

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