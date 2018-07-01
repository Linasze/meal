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


    public function addMeal($data){
        $this->db->query("INSERT INTO meals (title, type_id,product1,product2,product3,product4,product5,product6,product7,product8,product9,product10,product11,product12,product13,product14,product15,product16,product17,product18,product19,product20,product21,product22,product23,product24,product25,product26,product27,product28,product29,product30,product31,product32,product33,product34,product35)
        VALUES (:title, :type_id,:product1,:product2,:product3,:product4,:product5,:product6,:product7,:product8,:product9,:product10,:product11,:product12,:product13,:product14,:product15,:product16,:product17,:product18,:product19,:product20,:product21,:product22,:product23,:product24,:product25,:product26,:product27,:product28,:product29,:product30,:product31,:product32,:product33,:product34,:product35)");
        $this->db->bind(':title',  $data['title']);
        $this->db->bind(':type_id',  $data['type_id']);
        $this->db->bind(':product1',  $data['product1']);
        $this->db->bind(':product2',  $data['product2']);
        $this->db->bind(':product3',  $data['product3']);
        $this->db->bind(':product4',  $data['product4']);
        $this->db->bind(':product5',  $data['product5']);
        $this->db->bind(':product6',  $data['product6']);
        $this->db->bind(':product7',  $data['product7']);
        $this->db->bind(':product8',  $data['product8']);
        $this->db->bind(':product9',  $data['product9']);
        $this->db->bind(':product10',  $data['product10']);
        $this->db->bind(':product11',  $data['product11']);
        $this->db->bind(':product12',  $data['product12']);
        $this->db->bind(':product13',  $data['product13']);
        $this->db->bind(':product14',  $data['product14']);
        $this->db->bind(':product15',  $data['product15']);
        $this->db->bind(':product16',  $data['product16']);
        $this->db->bind(':product17',  $data['product17']);
        $this->db->bind(':product18',  $data['product18']);
        $this->db->bind(':product19',  $data['product19']);
        $this->db->bind(':product20',  $data['product20']);
        $this->db->bind(':product21',  $data['product21']);
        $this->db->bind(':product22',  $data['product22']);
        $this->db->bind(':product23',  $data['product23']);
        $this->db->bind(':product24',  $data['product24']);
        $this->db->bind(':product25',  $data['product25']);
        $this->db->bind(':product26',  $data['product26']);
        $this->db->bind(':product27',  $data['product27']);
        $this->db->bind(':product28',  $data['product28']);
        $this->db->bind(':product29',  $data['product29']);
        $this->db->bind(':product30',  $data['product30']);
        $this->db->bind(':product31',  $data['product31']);
        $this->db->bind(':product32',  $data['product32']);
        $this->db->bind(':product33',  $data['product33']);
        $this->db->bind(':product34',  $data['product34']);
        $this->db->bind(':product35',  $data['product35']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function getMealById($id){
        $this->db->query('SELECT * FROM meals WHERE id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }


    public function updateMeal($data){
        $this->db->query('UPDATE meals SET title = :title, type_id = :type_id ,product1 = :product1 ,product2 = :product2 ,product3 = :product3 ,product4 = :product4,product5 = :product5 ,product6 = :product6,product7 = :product7,product8 = :product8,product9 = :product9,product10 = :product10,product11 = :product11,product12 = :product12,product13 = :product13,product14 = :product14,product15 = :product15,product16 = :product16,product17 = :product17,product18 = :product18,product19 = :product19,product20 = :product20,product21 = :product21,product22= :product22,product23 = :product23,product24 = :product24,product25 = :product25,product26 = :product26 ,product27 = :product27,product28 = :product28,product29 = :product29,product30 = :product30,product31 = :product31,product32 = :product32,product33 = :product33,product34 = :product34,product35 = :product35 WHERE id = :id');
        $this->db->bind(':id', $data['id']);       
        $this->db->bind(':title',  $data['title']);
        $this->db->bind(':type_id',  $data['type_id']);
        $this->db->bind(':product1',  $data['product1']);
        $this->db->bind(':product2',  $data['product2']);
        $this->db->bind(':product3',  $data['product3']);
        $this->db->bind(':product4',  $data['product4']);
        $this->db->bind(':product5',  $data['product5']);
        $this->db->bind(':product6',  $data['product6']);
        $this->db->bind(':product7',  $data['product7']);
        $this->db->bind(':product8',  $data['product8']);
        $this->db->bind(':product9',  $data['product9']);
        $this->db->bind(':product10',  $data['product10']);
        $this->db->bind(':product11',  $data['product11']);
        $this->db->bind(':product12',  $data['product12']);
        $this->db->bind(':product13',  $data['product13']);
        $this->db->bind(':product14',  $data['product14']);
        $this->db->bind(':product15',  $data['product15']);
        $this->db->bind(':product16',  $data['product16']);
        $this->db->bind(':product17',  $data['product17']);
        $this->db->bind(':product18',  $data['product18']);
        $this->db->bind(':product19',  $data['product19']);
        $this->db->bind(':product20',  $data['product20']);
        $this->db->bind(':product21',  $data['product21']);
        $this->db->bind(':product22',  $data['product22']);
        $this->db->bind(':product23',  $data['product23']);
        $this->db->bind(':product24',  $data['product24']);
        $this->db->bind(':product25',  $data['product25']);
        $this->db->bind(':product26',  $data['product26']);
        $this->db->bind(':product27',  $data['product27']);
        $this->db->bind(':product28',  $data['product28']);
        $this->db->bind(':product29',  $data['product29']);
        $this->db->bind(':product30',  $data['product30']);
        $this->db->bind(':product31',  $data['product31']);
        $this->db->bind(':product32',  $data['product32']);
        $this->db->bind(':product33',  $data['product33']);
        $this->db->bind(':product34',  $data['product34']);
        $this->db->bind(':product35',  $data['product35']);
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