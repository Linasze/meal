<?php


class Type {
    private $db;
    
    public function __construct(){
        $this->db = new Database();
    }

    public function getTypes(){
        $this->db->query("SELECT * FROM types");
        return $this->db->resultSet();
    }

}