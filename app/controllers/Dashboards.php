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
        $product_id = explode(",", $breakfast->other);

        // $brunch = $this->mealModel->getMealById($user_settings->brunch);
        // $lunch = $this->mealModel->getMealById($user_settings->lunch);
        // $afternoon_meal = $this->mealModel->getMealById($user_settings->afternoon_meal);
        // $dinner = $this->mealModel->getMealById($user_settings->dinner);
        // $evening_meal = $this->mealModel->getMealById($user_settings->evening_meal);
      
        $protein = explode(",", $breakfast->protein);
        $carb = explode(",", $breakfast->carb);
        $fat = explode(",", $breakfast->fat);
        $other = explode(",", $breakfast->other);
        $users = $this->userModel->getUserInfo($user_id);
        // Calories per one serving
        $caloriesperserving = $users->kcal / $user_settings->eating_count; 
        
        // Macro nutrients per one serving
        $proteinsperservingAll = $caloriesperserving /100 * 20 /4; 
        $carbsperservingAll = $caloriesperserving /100 * 60 /4;  
        $fatsperservingAll = $caloriesperserving /100 * 20 /9; 
        
     
        // Calculate macro nutrients for breakfast protein
        if(count($protein) > 1){
            require_once APPROOT . '/libraries/algorithm/breakfastProtein.php';
        }else{
            $proteinsperservingUseEmpty = $caloriesperserving /100 * 20 /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;

        }

           // Calculate macros for breakfast carbs             
        if(count($carb) > 1){
            require_once APPROOT . '/libraries/algorithm/breakfastCarb.php';
        }else{            
           $carbsperservingUseEmpty = $caloriesperserving /100 * 60 /4;
           $carbsperserving = $caloriesperserving /100 * 60 /4;

        }

           // Calculate macros for breakfast carbs             
        if(count($fat) > 1){
            require_once APPROOT . '/libraries/algorithm/breakfastFat.php';
        }else{            
           $fatsperservingUseEmpty = $caloriesperserving /100 * 20 /9;
           $fatsperserving = $caloriesperserving /100 * 20 /9;

        }

         // Calculate macros for breakfast carbs             
         if(count($other) > 1){
            require_once APPROOT . '/libraries/algorithm/breakfastOther.php';
        }else{            
           $othersperservingUseEmpty = $caloriesperserving /100 * 20 /4;
           $othersperserving = $caloriesperserving /100 * 20 /4;

        }
           
                
      
            $data = [
                'user_settings' => $user_settings,
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
                'othersperserving' => $othersperserving,
                'product_id' => $product_id,
                'proteinsperservingAll' => $proteinsperservingAll,
                'carbsperservingAll' => $carbsperservingAll,
                'fatsperservingAll' => $fatsperservingAll,
                'proteinsperservingUseEmpty' => $proteinsperservingUseEmpty,
                'carbsperservingUseEmpty' => $carbsperservingUseEmpty,
                'fatsperservingUseEmpty' => $fatsperservingUseEmpty,
                'othersperservingUseEmpty' => $othersperservingUseEmpty,
                'get_product1' => $get_product1,
                'get_product2' => $get_product2,
                'get_product3' => $get_product3,
                'getProduct1' => $getProduct1,
                'getProduct2' => $getProduct2,
                'getProduct3' => $getProduct3,
                'getPro1' => $getPro1,
                'getPro2' => $getPro2,
                'getPro3' => $getPro3,
                'getPr1' => $getPr1,
                'getPr2' => $getPr2,
                'getPr3' => $getPr3
               
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
    
                   
    public function generate(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            $user_id = $_SESSION['user_id'];
               if($this->userModel->generatePlan($user_id)){    
                 flash('message', 'Nutrition plan generated!');
                    redirect('dashboards/index');
               }else{
                   die('Something went wrong');
               }
            
            }else{
            $this->view('dashboards/index');
                }
    }
}