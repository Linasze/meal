<?php


class Dashboards extends Controller {

       
    public function __construct(){
        $this->settingModel = $this->model('Setting');
        $this->mealModel = $this->model('Meal');
        $this->productModel = $this->model('Product');
        $this->getproModel = $this->model('MealProducts');
        $this->userModel = $this->model('User');
    }

    public function index(){
        if(!empty($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $user_settings = $this->settingModel->getUserSettings($user_id);
        $breakfast = $this->mealModel->getMealById($user_settings->breakfast);
        $getbreakfast = $this->mealModel->getMealByType(1);
        $products = $this->productModel->getProducts();
        if(!empty($breakfast->other)){
        $productByIdOther = $this->productModel->getProductById($breakfast->other);
        }

        // $brunch = $this->mealModel->getMealById($user_settings->brunch);
        // $lunch = $this->mealModel->getMealById($user_settings->lunch);
        // $afternoon_meal = $this->mealModel->getMealById($user_settings->afternoon_meal);
        // $dinner = $this->mealModel->getMealById($user_settings->dinner);
        // $evening_meal = $this->mealModel->getMealById($user_settings->evening_meal);
      
        $break = explode(",", $breakfast->products);
        $protein = explode(",", $breakfast->protein);
        $carb = explode(",", $breakfast->carb);
        $fat = explode(",", $breakfast->fat);
        $other = explode(",", $breakfast->other);
        $users = $this->userModel->getUserInfo($user_id);
       
        $caloriesperserving = $users->kcal / $user_settings->eating_count; 
        // Calculate macro
        if(!empty($productByIdOther->use_id)){
            $proteinsperserving = $caloriesperserving /100 * 20 /4;            
            $carbsperserving = ($caloriesperserving /100 * 60 - $productByIdOther->use_id) /4;
            $fatsperserving = $caloriesperserving /100 * 20 /9;
            $othersperserving = $caloriesperserving /100 * $productByIdOther->use_id /4;
        }else{
            $proteinsperserving = $caloriesperserving /100 * 20 /4;
            $carbsperserving = $caloriesperserving /100 * 60 /4;
            $fatsperserving = $caloriesperserving /100 * 20 /9;
        }
        $data = [
            'breakfast' => $breakfast,
            'getbreakfast' => $getbreakfast,
            'protein' => $protein,
            'carb' => $carb,
            'fat' => $fat,
            'other' => $other,
            'products' => $products,
            'user_settings' => $user_settings,
            'proteinsperserving' => $proteinsperserving,
            'carbsperserving' => $carbsperserving,
            'fatsperserving' => $fatsperserving,
            'othersperserving' => $othersperserving
        ];
        

        $this->view('dashboards/index', $data);
    }else{
    
        $this->view('users/login');
    
    }
}

    public function changeBreak(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $data = [
                'user_id' => $_SESSION['user_id'],
                'breakfast' => $_POST['breakfast']
            ];

            if($this->settingModel->updateBreakfast($data)){
                flash('message', 'Updated');
                    redirect('dashboards/index');
                    }else{
                        die('Something went wrong');
                    
            }
        }else{
            $this->view('dashboards/index');
        }
    }
    
     
}