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
        $product_idProtein = explode(",", $breakfast->protein);

       

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
       
        // Set product protein
        $get_product0 = $this->productModel->getProductById($product_idProtein[0]);
        $get_product1 = $this->productModel->getProductById($product_idProtein[1]);
        $get_product2 = $this->productModel->getProductById($product_idProtein[2]);


        // Calculate macro nutrients for breakfast
        if(count($product_id) <=2 || count($product_idProtein) <= 2){
            switch (count($protein)) {
                case 1:
                $proteinsperservingUseEmpty = $caloriesperserving /100; 
                break;
                case 2:
                if(!empty($get_product1->use_id)){                   
                    $proteinsperserving = $caloriesperserving /100  * 20 /4 * 100 / $get_product1->protein /100 * $get_product1->use_id;
                    $proteinsperservingUseEmpty =  $caloriesperserving /100 * 20 /4  * 100 / $get_product0->protein - $proteinsperserving; 
                }elseif(empty($get_product1->use_id)){
                    $proteinsperservingUseEmpty =  $caloriesperserving /100 * 20 /4 * 100;

                }else{
                    
                    $proteinsperservingUseEmpty = $caloriesperserving /100 * 20/4 *100/ $get_product1->protein; 
                    $proteinsperserving = $caloriesperserving /100 * 20/4 * 100/ $get_product0->protein; 
                   
                }
                
                break;
                case 3:
                if(!empty($get_product1->use_id)){
                    $proteinsperserving1 = $caloriesperserving /100 * 20 /4 * 100 / $get_product1->protein /100 * $get_product1->use_id;
                    $proteinsperserving2 = $caloriesperserving /100 * 20 /4 * 100 / $get_product2->protein /100 * $get_product2->use_id;
                    $proteinsperserving =  $proteinsperserving1 + $proteinsperserving2;
                    $proteinsperservingUseEmpty =  $caloriesperserving /100  * 20 /4  * 100 / $get_product0->protein - $proteinsperserving; 
                    $subtract1 = $proteinsperserving * 20 /4 * 100 / $get_product1->protein;
                    $subtract2 = $proteinsperserving * 20 /4 * 100 / $get_product1->protein;
                    $subtract = $subtract1 + $subtract2;
                }elseif(!empty($get_product2->use_id)){
                    $proteinsperserving = $caloriesperserving /100 /100 * $get_product2->use_id;
                    $proteinsperservingUseEmpty =  $caloriesperserving /100 /2; 
                    $subtract = $proteinsperserving * 20 /4 * 100 / $get_product2->protein/2;
                    
                }else{
                    $proteinsperservingUseEmpty = $caloriesperserving /100 /3; 
                }
                
                break;
                case 4:
                $proteinsperserving = $caloriesperserving /100 * 20 /4 /4; 
                break;
                case 5:
                $proteinsperserving = $caloriesperserving /100 * 20 /4 /5; 
                break;
                case 6:
                $proteinsperserving = $caloriesperserving /100 * 20 /4 /6; 
                break;
                case 7:
                $proteinsperserving = $caloriesperserving /100 * 20 /4 /7; 
                break;     
                case 8:
                $proteinsperserving = $caloriesperserving /100 * 20 /4 /8; 
                break;
                case 9:
                $proteinsperserving = $caloriesperserving /100 * 20 /4 /9; 
                break;
                case 10:
                $proteinsperserving = $caloriesperserving /100 * 20 /4 /10; 
                break;
            }
            switch (count($carb)) {
                case 1:
                $carbsperserving = $caloriesperserving /100 * 60 /4; 
                break;
                case 2:
                $carbsperserving = $caloriesperserving /100 * 60 /4 /100 * 50; 
                break;
                case 3:
                $carbsperserving = $caloriesperserving /100 * 60 /4 /100 * 35; 
                break;
                case 4:
                $carbsperserving = $caloriesperserving /100 * 60 /4 /100 * 25; 
                break;
                case 5:
                $carbsperserving = $caloriesperserving /100 * 60 /4 /100 * 20; 
                break;
                case 6:
                $carbsperserving = $caloriesperserving /100 * 60 /4 /100 * 16; 
                break;
                case 7:
                $carbsperserving = $caloriesperserving /100 * 60 /4 /100 * 14; 
                break;     
                case 8:
                $carbsperserving = $caloriesperserving /100 * 60 /4 /100 * 12.5; 
                break;
                case 9:
                $carbsperserving = $caloriesperserving /100 * 60 /4 /100 * 11.1; 
                break;
                case 10:
                $carbsperserving = $caloriesperserving /100 * 60 /4 /100 * 10; 
                break;
            }
            switch (count($fat)) {
                case 1:
                $fatsperserving = $caloriesperserving /100 * 20 /9; 
                break;
                case 2:
                $fatsperserving = $caloriesperserving /100 * 20 /9 /100 * 50; 
                break;
                case 3:
                $fatsperserving = $caloriesperserving /100 * 20 /9 /100 * 35; 
                break;
                case 4:
                $fatsperserving = $caloriesperserving /100 * 20 /9 /100 * 25; 
                break;
                case 5:
                $fatsperserving = $caloriesperserving /100 * 20 /9 /100 * 20; 
                break;
                case 6:
                $fatsperserving = $caloriesperserving /100 * 20 /9 /100 * 16; 
                break;
                case 7:
                $fatsperserving = $caloriesperserving /100 * 20 /9 /100 * 14; 
                break;     
                case 8:
                $fatsperserving = $caloriesperserving /100 * 20 /9 /100 * 12.5; 
                break;
                case 9:
                $fatsperserving = $caloriesperserving /100 * 20 /9 /100 * 11.1; 
                break;
                case 10:
                $fatsperserving = $caloriesperserving /100 * 20 /9 /100 * 10; 
                break;
            }
            
                $othersperserving = $caloriesperserving /100; 
           
        }else{
            $proteinsperserving = $caloriesperserving /100 * 20 /4;
            $carbsperserving = $caloriesperserving /100 * 60 /4;
            $fatsperserving = $caloriesperserving /100 * 20 /9;
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
                'get_product1' =>  $get_product1
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