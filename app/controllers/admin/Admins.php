<?php



if($_SESSION['user_rights'] == 1) {

class Admins extends Controller {
   

    public function __construct(){
        $this->productModel = $this->model('Product');
        $this->mealModel = $this->model('Meal');
    }


    public function index(){
        $this->view('admins/index');
    }

    public function manageMeals(){
       
        $row = $this->productModel->rowCount();
        $row2 = $this->mealModel->rowCount();
        $data = [
            'row' => $row,
            'row2' => $row2
        ];
        $this->view('admins/meals/manageMeals', $data);
    }

}

}else{
    header('HTTP/1.0 403 Forbidden');
    exit;
}