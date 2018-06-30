<?php


class Mealtype {
    private $db;
    
    public function __construct(){
        $this->db = new Database();
    }

    public function getTypes(){
        $this->db->query("SELECT * FROM mealtypes");
        return $this->db->resultSet();
    }

}