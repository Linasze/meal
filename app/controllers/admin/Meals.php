<?php

use App\models\Product;

class Meals extends Controller {

    public function __construct(){
        $this->productModel = $this->model('Product');
        $this->mealModel = $this->model('Meal');
        $this->mealtypeModel = $this->model('Mealtype');
    }

    public function addMeals(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'title' => $_POST['title'],
                'type_id' => $_POST['type_id'],
                'product1' => $_POST['product1'],
                'product2' => $_POST['product2'],
                'product3' => $_POST['product3'],
                'product4' => $_POST['product4'],
                'product5' => $_POST['product5'],
                'product6' => $_POST['product6'],
                'product7' => $_POST['product7'],
                'product8' => $_POST['product8'],
                'product9' => $_POST['product9'],
                'product10' => $_POST['product10'],
                'product11' => $_POST['product11'],
                'product12' => $_POST['product12'],
                'product13' => $_POST['product13'],
                'product14' => $_POST['product14'],
                'product15' => $_POST['product15'],
                'product16' => $_POST['product16'],
                'product17' => $_POST['product17'],
                'product18' => $_POST['product18'],
                'product19' => $_POST['product19'],
                'product20' => $_POST['product20'],
                'product21' => $_POST['product21'],
                'product22' => $_POST['product22'],
                'product23' => $_POST['product23'],
                'product24' => $_POST['product24'],
                'product25' => $_POST['product25'],
                'product26' => $_POST['product26'],
                'product27' => $_POST['product27'],
                'product28' => $_POST['product28'],
                'product29' => $_POST['product29'],
                'product30' => $_POST['product30'],
                'product31' => $_POST['product31'],
                'product32' => $_POST['product32'],
                'product33' => $_POST['product33'],
                'product34' => $_POST['product34'],
                'product35' => $_POST['product35'],
            ];

            if($this->mealModel->addMeal($data)){
                flash('product_message', 'Meal added');
                redirect('admins/manageMeals');
                }else{
                    die('Something went wrong');
                }
        

       }else{

        $products = $this->productModel->getProducts();
        $mealtypes = $this->mealtypeModel->getTypes();
        $data = [
            'products' => $products,
            'mealtypes' => $mealtypes
    ];
        $this->view('admins/meals/meals/addMeals', $data);
       }
    
    }

    public function showMeals(){
        $meals = $this->mealModel->getMeals();
        $data = ['meals' => $meals];
        $this->view('admins/meals/meals/showMeals', $data);
    }

    public function editMeal($id){
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
 
            $data = [
                'id' => $id,
                'title' => $_POST['title'],
                'type_id' => $_POST['type_id'],
                'product1' => $_POST['product1'],
                'product2' => $_POST['product2'],
                'product3' => $_POST['product3'],
                'product4' => $_POST['product4'],
                'product5' => $_POST['product5'],
                'product6' => $_POST['product6'],
                'product7' => $_POST['product7'],
                'product8' => $_POST['product8'],
                'product9' => $_POST['product9'],
                'product10' => $_POST['product10'],
                'product11' => $_POST['product11'],
                'product12' => $_POST['product12'],
                'product13' => $_POST['product13'],
                'product14' => $_POST['product14'],
                'product15' => $_POST['product15'],
                'product16' => $_POST['product16'],
                'product17' => $_POST['product17'],
                'product18' => $_POST['product18'],
                'product19' => $_POST['product19'],
                'product20' => $_POST['product20'],
                'product21' => $_POST['product21'],
                'product22' => $_POST['product22'],
                'product23' => $_POST['product23'],
                'product24' => $_POST['product24'],
                'product25' => $_POST['product25'],
                'product26' => $_POST['product26'],
                'product27' => $_POST['product27'],
                'product28' => $_POST['product28'],
                'product29' => $_POST['product29'],
                'product30' => $_POST['product30'],
                'product31' => $_POST['product31'],
                'product32' => $_POST['product32'],
                'product33' => $_POST['product33'],
                'product34' => $_POST['product34'],
                'product35' => $_POST['product35']
            ];
 
            if($this->mealModel->updateMeal($data)){
                     flash('product_message', 'Meal updated');
                     redirect('meals/showMeals');
                    
                     }else{
                         die('Something went wrong');
                     }
              
 
        }else{
    
        $meal = $this->mealModel->getMealById($id);
        $products = $this->productModel->getProducts();
        $mealtypes = $this->mealtypeModel->getTypes();
        $data = [
            'id' => $id,
            'title' => $meal->title,
            'products' => $products,
            'mealtypes' => $mealtypes,
            'type_id' => $meal->type_id,
            'product1' => $meal->product1,
            'product2' => $meal->product2,
            'product3' => $meal->product3,
            'product4' => $meal->product4,
            'product5' => $meal->product5,
            'product6' => $meal->product6,
            'product7' => $meal->product7,
            'product8' => $meal->product8,
            'product9' => $meal->product9,
            'product10' => $meal->product10,
            'product11' => $meal->product11,
            'product12' => $meal->product12,
            'product13' => $meal->product13,
            'product14' => $meal->product14,
            'product15' => $meal->product15,
            'product16' => $meal->product16,
            'product17' => $meal->product17,
            'product18' => $meal->product18,
            'product19' => $meal->product19,
            'product20' => $meal->product20,
            'product21' => $meal->product21,
            'product22' => $meal->product22,
            'product23' => $meal->product23,
            'product24' => $meal->product24,
            'product25' => $meal->product25,
            'product26' => $meal->product26,
            'product27' => $meal->product27,
            'product28' => $meal->product28,
            'product29' => $meal->product29,
            'product30' => $meal->product30,
            'product31' => $meal->product31,
            'product32' => $meal->product32,
            'product33' => $meal->product33,
            'product34' => $meal->product34,
            'product35' => $meal->product35
        ];

         $this->view('admins/meals/meals/editMeal', $data);
        }
    }


}