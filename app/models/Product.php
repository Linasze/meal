<?php


class Product {
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function rowCount(){
        $this->db->query('SELECT * FROM products');
        $this->db->execute();
        $row = $this->db->rowCount();
        return $row;
    }

    public function addProduct($data){
        $this->db->query('INSERT INTO products (title,carb,protein,fat,kcal,cat) VALUES (:title, :carb, :protein,:fat,:kcal, :cat)');
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':carb', $data['carb']);
        $this->db->bind(':protein', $data['protein']);
        $this->db->bind(':fat', $data['fat']);
        $this->db->bind(':kcal', $data['kcal']);
        $this->db->bind(':cat', $data['cat']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function getProducts(){
        $this->db->query('SELECT * FROM products');
        return $this->db->resultSet();
    }

    public function getProductById($id){
        $this->db->query('SELECT * FROM products WHERE id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function updateProduct($data){
        $this->db->query('UPDATE products SET title = :title, carb = :carb, protein = :protein, fat = :fat, kcal = :kcal WHERE id = :id');
        $this->db->bind(':id', $data['id']);       
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':carb', $data['carb']);
        $this->db->bind(':protein', $data['protein']);
        $this->db->bind(':fat', $data['fat']);
        $this->db->bind(':kcal', $data['kcal']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function deleteProduct($id){
        $this->db->query('DELETE FROM products WHERE id = :id');
        $this->db->bind(':id', $id);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }


}