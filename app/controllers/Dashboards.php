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
        $lunch = $this->mealModel->getMealById($user_settings->lunch);
        $dinner = $this->mealModel->getMealById($user_settings->dinner);
        $getbreakfast = $this->mealModel->getMealByType(1);
        $getlunch = $this->mealModel->getMealByType(3);
        $getdinner = $this->mealModel->getMealByType(5);

        $products = $this->productModel->getProducts();
       
      
        // Get breakfast nutrients
        $protein = explode(",", $breakfast->protein);
        $carb = explode(",", $breakfast->carb);
        $fat = explode(",", $breakfast->fat);
        $other = explode(",", $breakfast->other);

        // Get lunch nutrients
        $proteinLunch = explode(",", $lunch->protein);
        $carbLunch = explode(",", $lunch->carb);
        $fatLunch = explode(",", $lunch->fat);
        $otherLunch = explode(",", $lunch->other);

         // Get dinner nutrients
         $proteinDinner = explode(",", $dinner->protein);
         $carbDinner = explode(",", $dinner->carb);
         $fatDinner = explode(",", $dinner->fat);
         $otherDinner = explode(",", $dinner->other);

        $users = $this->userModel->getUserInfo($user_id);

        // Calories per one serving
        if(!empty($user_settings)){
        $caloriesperserving = ($users->kcal / $user_settings->eating_count) + ($users->purpose/$user_settings->eating_count); 
        }
        // Macro nutrients per one serving
        $proteinsperservingAll = $caloriesperserving /100 * 20 /4; 
        $carbsperservingAll = $caloriesperserving /100 * 60 /4;  
        $fatsperservingAll = $caloriesperserving /100 * 20 /9; 
        
     
        // Calculate macro nutrients for breakfast protein
        if(count($protein) > 1){
            require_once APPROOT . '/libraries/algorithm/breakfast/breakfastProtein.php';
        }else{
            $proteinsperservingUseEmpty = $caloriesperserving /100 * 20 /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;

        }

           // Calculate macros for breakfast carbs             
        if(count($carb) > 1){
            require_once APPROOT . '/libraries/algorithm/breakfast/breakfastCarb.php';
        }else{            
           $carbsperservingUseEmpty = $caloriesperserving /100 * 60 /4;
           $carbsperserving = $caloriesperserving /100 * 60 /4;

        }

           // Calculate macros for breakfast carbs             
        if(count($fat) > 1){
            require_once APPROOT . '/libraries/algorithm/breakfast/breakfastFat.php';
        }else{            
           $fatsperservingUseEmpty = $caloriesperserving /100 * 20 /9;
           $fatsperserving = $caloriesperserving /100 * 20 /9;

        }

         // Calculate macros for breakfast others            
         if(count($other) > 1){
            require_once APPROOT . '/libraries/algorithm/breakfast/breakfastOther.php';
        }else{            
           $othersperservingUseEmpty = $caloriesperserving /100 * 20 /4;
           $othersperserving = $caloriesperserving /100 * 20 /4;

        }
           

        // Calculate macro nutrients for lunch protein
        if(count($proteinLunch) > 1){
            require_once APPROOT . '/libraries/algorithm/lunch/lunchProtein.php';
        }else{
            $proteinsperservingUseEmptylunch = $caloriesperserving /100 * 20 /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;

        }

           // Calculate macros for lunch carbs             
        if(count($carbLunch) > 1){
            require_once APPROOT . '/libraries/algorithm/lunch/lunchCarb.php';
        }else{            
           $carbsperservingUseEmptylunch = $caloriesperserving /100 * 60 /4;
           $carbsperservinglunch = $caloriesperserving /100 * 60 /4;

        }

           // Calculate macros for lunch carbs             
        if(count($fatLunch) > 1){
            require_once APPROOT . '/libraries/algorithm/lunch/lunchFat.php';
        }else{            
           $fatsperservingUseEmptylunch = $caloriesperserving /100 * 20 /9;
           $fatsperservinglunch = $caloriesperserving /100 * 20 /9;

        }

         // Calculate macros for lunch others            
         if(count($otherLunch) > 1){
            require_once APPROOT . '/libraries/algorithm/lunch/lunchOther.php';
        }else{            
           $othersperservingUseEmptylunch = $caloriesperserving /100 * 20 /4;
           $othersperservinglunch = $caloriesperserving /100 * 20 /4;

        }          
              


         // Calculate macro nutrients for  protein
         if(count($proteinDinner) > 1){
            require_once APPROOT . '/libraries/algorithm/dinner/dinnerProtein.php';
        }else{
            $proteinsperservingUseEmptydinner = $caloriesperserving /100 * 20 /4;
            $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;

        }

           // Calculate macros for dinner carbs             
        if(count($carbDinner) > 1){
            require_once APPROOT . '/libraries/algorithm/dinner/dinnerCarb.php';
        }else{            
           $carbsperservingUseEmptydinner = $caloriesperserving /100 * 60 /4;
           $carbsperservingdinner = $caloriesperserving /100 * 60 /4;

        }

           // Calculate macros for dinner carbs             
        if(count($fatDinner) > 1){
            require_once APPROOT . '/libraries/algorithm/dinner/dinnerFat.php';
        }else{            
           $fatsperservingUseEmptydinner = $caloriesperserving /100 * 20 /9;
           $fatsperservingdinner = $caloriesperserving /100 * 20 /9;

        }

         // Calculate macros for dinner others            
         if(count($otherDinner) > 1){
            require_once APPROOT . '/libraries/algorithm/dinner/dinnerOther.php';
        }else{            
           $othersperservingUseEmptydinner = $caloriesperserving /100 * 20 /4;
           $othersperservingdinner = $caloriesperserving /100 * 20 /4;

        }
           
      
            $data = [
                'user_settings' => $user_settings,
                'breakfast' => $breakfast,
                'lunch' => $lunch,
                'dinner' => $dinner,
                'getbreakfast' => $getbreakfast,
                'getlunch' => $getlunch,
                'getdinner' => $getdinner,

                
                'protein' => $protein,
                'carb' => $carb,
                'fat' => $fat,
                'other' => $other,
                
                'proteinLunch' => $proteinLunch,
                'carbLunch' => $carbLunch,
                'fatLunch' => $fatLunch,
                'otherLunch' => $otherLunch,

                'proteinDinner' => $proteinDinner,
                'carbDinner' => $carbDinner,
                'fatDinner' => $fatDinner,
                'otherDinner' => $otherDinner,

                'products' => $products,
                'user_settings' => $user_settings,

                'proteinsperserving' => $proteinsperserving,
                'carbsperserving' => $carbsperserving,
                'fatsperserving' => $fatsperserving,
                'othersperserving' => $othersperserving,

                'proteinsperservinglunch' => $proteinsperservinglunch,
                'carbsperservinglunch' => $carbsperservinglunch,
                'fatsperservinglunch' => $fatsperservinglunch,
                'othersperservinglunch' => $othersperservinglunch,  
                
                'proteinsperservingdinner' => $proteinsperservingdinner,
                'carbsperservingdinner' => $carbsperservingdinner,
                'fatsperservingdinner' => $fatsperservingdinner,
                'othersperservingdinner' => $othersperservingdinner,  
                
                'proteinsperservingAll' => $proteinsperservingAll,
                'carbsperservingAll' => $carbsperservingAll,
                'fatsperservingAll' => $fatsperservingAll,
                
                'proteinsperservingUseEmpty' => $proteinsperservingUseEmpty,
                'carbsperservingUseEmpty' => $carbsperservingUseEmpty,
                'fatsperservingUseEmpty' => $fatsperservingUseEmpty,
                'othersperservingUseEmpty' => $othersperservingUseEmpty,
                
                'proteinsperservingUseEmptylunch' => $proteinsperservingUseEmptylunch,
                'carbsperservingUseEmptylunch' => $carbsperservingUseEmptylunch,
                'fatsperservingUseEmptylunch' => $fatsperservingUseEmptylunch,
                'othersperservingUseEmptylunch' => $othersperservingUseEmptylunch,

                'proteinsperservingUseEmptydinner' => $proteinsperservingUseEmptydinner,
                'carbsperservingUseEmptydinner' => $carbsperservingUseEmptydinner,
                'fatsperservingUseEmptydinner' => $fatsperservingUseEmptydinner,
                'othersperservingUseEmptydinner' => $othersperservingUseEmptydinner,
                
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
                'getPr3' => $getPr3,

                'get_product1lunch' => $get_product1lunch,
                'get_product2lunch' => $get_product2lunch,
                'get_product3lunch' => $get_product3lunch,
                'getProduct1lunch' => $getProduct1lunch,
                'getProduct2lunch' => $getProduct2lunch,
                'getProduct3lunch' => $getProduct3lunch,
                'getPro1lunch' => $getPro1lunch,
                'getPro2lunch' => $getPro2lunch,
                'getPro3lunch' => $getPro3lunch,
                'getPr1lunch' => $getPr1lunch,
                'getPr2lunch' => $getPr2lunch,
                'getPr3lunch' => $getPr3lunch,

                'get_product1dinner' => $get_product1dinner,
                'get_product2dinner' => $get_product2dinner,
                'get_product3dinner' => $get_product3dinner,
                'getProduct1dinner' => $getProduct1dinner,
                'getProduct2dinner' => $getProduct2dinner,
                'getProduct3dinner' => $getProduct3dinner,
                'getPro1dinner' => $getPro1dinner,
                'getPro2dinner' => $getPro2dinner,
                'getPro3dinner' => $getPro3dinner,
                'getPr1dinner' => $getPr1dinner,
                'getPr2dinner' => $getPr2dinner,
                'getPr3dinner' => $getPr3dinner
               
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

    public function changeLunch(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $data = [
                'user_id' => $_SESSION['user_id'],
                'lunch' => $_POST['lunch']
            ];

            if($this->settingModel->updateLunch($data)){
                flash('message', 'Updated');
                    redirect('dashboards/index');
                    }else{
                        die('Something went wrong');
                    
            }
        }else{
            $this->view('dashboards/index');
        }
    }

        public function changeDinner(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $data = [
                'user_id' => $_SESSION['user_id'],
                'dinner' => $_POST['dinner']
            ];

            if($this->settingModel->updateDinner($data)){
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