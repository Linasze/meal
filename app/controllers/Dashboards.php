<?php


class Dashboards extends Controller {

       
    public function __construct(){
        $this->settingModel = $this->model('Setting');
        $this->mealModel = $this->model('Meal');
        $this->productModel = $this->model('Product');
        $this->getproModel = $this->model('MealProducts');
        $this->userModel = $this->model('User');
        $this->mealProductModel = $this->model('MealProducts');
    }

    public function index(){
        if(!empty($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $user_settings = $this->settingModel->getUserSettings($user_id);
        $breakfast = $this->mealModel->getMealById($user_settings->breakfast);
        $products = $this->productModel->getProducts();
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
        $proteinsperserving = $caloriesperserving /100 * 20 /4;
        $carbsperserving = $caloriesperserving /100 * 60 /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9;

       
           
        $data = [
            'breakfast' => $breakfast,
            'protein' => $protein,
            'carb' => $carb,
            'fat' => $fat,
            'other' => $other,
            'products' => $products
        ];
        

        $this->view('dashboards/index', $data);
    }else{
    
        $this->view('users/login');
    
    }
}
     
}