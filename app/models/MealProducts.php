<?php   


class MealProducts {
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

 
    public function getproduct1($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product1 = products.id WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct2($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product2 = products.id WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct3($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product3 = products.id WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct4($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product4 = products.id WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct5($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product5 = products.id WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct6($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product6 = products.id WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct7($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product7 = products.id WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct8($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product8 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct9($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product9 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct10($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product10 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct11($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product11 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct12($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product12 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct13($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product13 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct14($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product14 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct15($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product15 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct16($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product16 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct17($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product17 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct18($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product18 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct19($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product19 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct20($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product20 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct21($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product21 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct22($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product22 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct23($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product23 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct24($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product24 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct25($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product25 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct26($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product26 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct27($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product28 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct28($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product28 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct29($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product29 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct30($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product30 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct31($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product31 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct32($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product32 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct33($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product33 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct34($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product34 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }

    public function getproduct35($id){
        $this->db->query("SELECT * FROM meals JOIN products ON meals.product35 = products.id  WHERE meals.id = $id");
        return $this->db->single();
    }


}