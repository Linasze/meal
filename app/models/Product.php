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

    public function getProductsAdmin($starting_limit,$limit){
        $this->db->query('SELECT * FROM products ORDER BY id DESC LIMIT :starting_limit, :limit');
        $this->db->bind(':starting_limit', $starting_limit);
        $this->db->bind(':limit', $limit);
        return $this->db->resultSet();
    }


    // Neveikia
    public function searchProduct($data2){
        $this->db->query("SELECT * FROM products WHERE title LIKE :title");
        $this->db->bind(':title', '%' . $data2['search'] . '%');
        $data = $this->db->resultSet();
        return $data;
    }


    public function getProductById($id){
        $this->db->query("SELECT * FROM products WHERE id = $id");
        return $this->db->single();
    }

    public function updateProduct($data){
        $this->db->query('UPDATE products SET title = :title, carb = :carb, protein = :protein, fat = :fat, kcal = :kcal,use_id = :use_id,cat = :cat  WHERE id = :id');
        $this->db->bind(':id', $data['id']);       
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':carb', $data['carb']);
        $this->db->bind(':protein', $data['protein']);
        $this->db->bind(':fat', $data['fat']);
        $this->db->bind(':kcal', $data['kcal']);
        $this->db->bind(':use_id', $data['use_id']);
        $this->db->bind(':cat', $data['cat']);
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