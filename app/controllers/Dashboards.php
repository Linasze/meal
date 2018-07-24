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
        $brunch = $this->mealModel->getMealById($user_settings->brunch);
        $lunch = $this->mealModel->getMealById($user_settings->lunch);
        $afternoon = $this->mealModel->getMealById($user_settings->afternoon_meal);
        $dinner = $this->mealModel->getMealById($user_settings->dinner);
        $evening = $this->mealModel->getMealById($user_settings->evening_meal);
        $getbreakfast = $this->mealModel->getMealByType(1);
        $getbrunch = $this->mealModel->getMealByType(2);
        $getlunch = $this->mealModel->getMealByType(3);
        $getafternoon = $this->mealModel->getMealByType(4);
        $getdinner = $this->mealModel->getMealByType(5);
        $getevening = $this->mealModel->getMealByType(6);

        $products = $this->productModel->getProducts();
       
      
        // Get breakfast nutrients
        $protein = explode(",", $breakfast->protein);
        $carb = explode(",", $breakfast->carb);
        $fat = explode(",", $breakfast->fat);
        $other = explode(",", $breakfast->other);

        // Get brunch nutrients
        $proteinBrunch = explode(",", $brunch->protein);
        $carbBrunch = explode(",", $brunch->carb);
        $fatBrunch = explode(",", $brunch->fat);
        $otherBrunch = explode(",", $brunch->other);

        // Get lunch nutrients
        $proteinLunch = explode(",", $lunch->protein);
        $carbLunch = explode(",", $lunch->carb);
        $fatLunch = explode(",", $lunch->fat);
        $otherLunch = explode(",", $lunch->other);

        // Get afternoon nutrients
        $proteinAfternoon = explode(",", $afternoon->protein);
        $carbAfternoon = explode(",", $afternoon->carb);
        $fatAfternoon = explode(",", $afternoon->fat);
        $otherAfternoon = explode(",", $afternoon->other);

         // Get dinner nutrients
         $proteinDinner = explode(",", $dinner->protein);
         $carbDinner = explode(",", $dinner->carb);
         $fatDinner = explode(",", $dinner->fat);
         $otherDinner = explode(",", $dinner->other);

         // Get evening nutrients
         $proteinEvening = explode(",", $evening->protein);
         $carbEveningr = explode(",", $evening->carb);
         $fatEvening = explode(",", $evening->fat);
         $otherEvening = explode(",", $evening->other);

         // Get user info
        $users = $this->userModel->getUserInfo($user_id);
        
        // Person calories in terms of physical activity
        if($users->sex == 1){
            $kcal = round((66.5 + (13.75 * $users->weight) + (5.003 * $users->height) - (6.755 * $users->age)) * $users->activity + $users->purpose);
            }else{ 
            $kcal = round((655.1 + (9.563 * $users->weight) + (1.850 * $users->height) - (4.676 * $users->age)) * $users->activity + $users->purpose);
        }

       
        // Calories per one serving
        if(!empty($user_settings)){
        $caloriesperserving = $kcal / $user_settings->eating_count; 
        }
        // Macro nutrients per one serving
        $proteinsperservingAll = $caloriesperserving /100 * 20 /4; 
        $carbsperservingAll = $caloriesperserving /100 * 60 /4;  
        $fatsperservingAll = $caloriesperserving /100 * 20 /9; 
        
             // BREAKFAST
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

           // Calculate macros for breakfast fat            
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

               // BRUNCH
         // Calculate macro nutrients for brunch protein
         if(count($proteinBrunch) > 1){
            require_once APPROOT . '/libraries/algorithm/brunch/brunchProtein.php';
        }else{
            $proteinsperservingUseEmptybrunch = $caloriesperserving /100 * 20 /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;

        }

           // Calculate macros for brunch carbs             
        if(count($carbBrunch) > 1){
            require_once APPROOT . '/libraries/algorithm/brunch/brunchCarb.php';
        }else{            
           $carbsperservingUseEmptybrunch = $caloriesperserving /100 * 60 /4;
           $carbsperservingbrunch = $caloriesperserving /100 * 60 /4;

        }

           // Calculate macros for brunch fat             
        if(count($fatBrunch) > 1){
            require_once APPROOT . '/libraries/algorithm/brunch/brunchFat.php';
        }else{            
           $fatsperservingUseEmptybrunch = $caloriesperserving /100 * 20 /9;
           $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;

        }

         // Calculate macros for brunch others            
         if(count($otherBrunch) > 1){
            require_once APPROOT . '/libraries/algorithm/brunch/brunchOther.php';
        }else{            
           $othersperservingUseEmptybrunch = $caloriesperserving /100 * 20 /4;
           $othersperservingbrunch = $caloriesperserving /100 * 20 /4;

        }          
           
            //LUNCH
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

           // Calculate macros for lunch fat            
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
        
                     //AFTERNOON MEAL
         // Calculate macro nutrients for afternoon meal protein
         if(count($proteinAfternoon) > 1){
            require_once APPROOT . '/libraries/algorithm/afternoon/afternoonProtein.php';
        }else{
            $proteinsperservingUseEmptyafternoon = $caloriesperserving /100 * 20 /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;

        }

           // Calculate macros for afternoon carbs             
        if(count($carbAfternoon) > 1){
            require_once APPROOT . '/libraries/algorithm/afternoon/afternoonCarb.php';
        }else{            
           $carbsperservingUseEmptyafternoon = $caloriesperserving /100 * 60 /4;
           $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;

        }

           // Calculate macros for afternoon fat             
        if(count($fatAfternoon) > 1){
            require_once APPROOT . '/libraries/algorithm/afternoon/afternoonFat.php';
        }else{            
           $fatsperservingUseEmptyafternoon = $caloriesperserving /100 * 20 /9;
           $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;

        }

         // Calculate macros for afternoon others            
         if(count($otherAfternoon) > 1){
            require_once APPROOT . '/libraries/algorithm/afternoon/afternoonOther.php';
        }else{            
           $othersperservingUseEmptyafternoon = $caloriesperserving /100 * 20 /4;
           $othersperservingafternoon = $caloriesperserving /100 * 20 /4;

        }       
              

               //DINNER
         // Calculate macro nutrients for dinner  protein
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

           // Calculate macros for dinner fat             
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



              // Evening meal
         // Calculate macro nutrients for evening  protein
         if(count($proteinEvening) > 1){
            require_once APPROOT . '/libraries/algorithm/evening/eveningProtein.php';
        }else{
            $proteinsperservingUseEmptyevening = $caloriesperserving /100 * 20 /4;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;

        }

           // Calculate macros for evening carbs             
        if(count($carbEvening) > 1){
            require_once APPROOT . '/libraries/algorithm/evening/eveningCarb.php';
        }else{            
           $carbsperservingUseEmptyevening = $caloriesperserving /100 * 60 /4;
           $carbsperservingevening = $caloriesperserving /100 * 60 /4;

        }

           // Calculate macros for evening fat             
        if(count($fatEvening) > 1){
            require_once APPROOT . '/libraries/algorithm/evening/eveningFat.php';
        }else{            
           $fatsperservingUseEmptyevening = $caloriesperserving /100 * 20 /9;
           $fatsperservingevening = $caloriesperserving /100 * 20 /9;

        }

         // Calculate macros for evening others            
         if(count($otherEvening) > 1){
            require_once APPROOT . '/libraries/algorithm/evening/eveningOther.php';
        }else{            
           $othersperservingUseEmptyevening = $caloriesperserving /100 * 20 /4;
           $othersperservingevening = $caloriesperserving /100 * 20 /4;

        }
           
      
            $data = [
                'user_settings' => $user_settings,
                'breakfast' => $breakfast,
                'brunch' => $brunch,
                'lunch' => $lunch,
                'afternoon' => $afternoon,
                'dinner' => $dinner,
                'evening' => $evening,

                'getbreakfast' => $getbreakfast,
                'getbrunch' => $getbrunch,
                'getlunch' => $getlunch,
                'getafternoon' => $getafternoon,
                'getdinner' => $getdinner,
                'getevening' => $getevening,

                
                'protein' => $protein,
                'carb' => $carb,
                'fat' => $fat,
                'other' => $other,

                'proteinBrunch' => $proteinBrunch,
                'carbBrunch' => $carbBrunch,
                'fatBrunch' => $fatBrunch,
                'otherBrunch' => $otherBrunch,
                
                'proteinLunch' => $proteinLunch,
                'carbLunch' => $carbLunch,
                'fatLunch' => $fatLunch,
                'otherLunch' => $otherLunch,

                'proteinAfternoon' => $proteinAfternoon,
                'carbAfternoon' => $carbAfternoon,
                'fatAfternoon' => $fatAfternoon,
                'otherAfternoon' => $otherAfternoon,

                'proteinDinner' => $proteinDinner,
                'carbDinner' => $carbDinner,
                'fatDinner' => $fatDinner,
                'otherDinner' => $otherDinner,

                'proteinEvening' => $proteinEvening,
                'carbEvening' => $carbEvening,
                'fatEvening' => $fatEvening,
                'otherEvening' => $otherEvening,

                'products' => $products,
                'user_settings' => $user_settings,

                'proteinsperserving' => $proteinsperserving,
                'carbsperserving' => $carbsperserving,
                'fatsperserving' => $fatsperserving,
                'othersperserving' => $othersperserving,

                'proteinsperservingbrunch' => $proteinsperservingbrunch,
                'carbsperservingbrunch' => $carbsperservingbrunch,
                'fatsperservingbrunch' => $fatsperservingbrunch,
                'othersperservingbrunch' => $othersperservingbrunch, 

                'proteinsperservinglunch' => $proteinsperservinglunch,
                'carbsperservinglunch' => $carbsperservinglunch,
                'fatsperservinglunch' => $fatsperservinglunch,
                'othersperservinglunch' => $othersperservinglunch,  
               
                'proteinsperservingafternoon' => $proteinsperservingafternoon,
                'carbsperservingafternoon' => $carbsperservingafternoon,
                'fatsperservingafternoon' => $fatsperservingafternoon,
                'othersperservingafternoon' => $othersperservingafternoon,  

                'proteinsperservingdinner' => $proteinsperservingdinner,
                'carbsperservingdinner' => $carbsperservingdinner,
                'fatsperservingdinner' => $fatsperservingdinner,
                'othersperservingdinner' => $othersperservingdinner,  

                'proteinsperservingevening' => $proteinsperservingevening,
                'carbsperservingevening' => $carbsperservingevening,
                'fatsperservingevening' => $fatsperservingevening,
                'othersperservingevening' => $othersperservingevening, 
                
                'proteinsperservingAll' => $proteinsperservingAll,
                'carbsperservingAll' => $carbsperservingAll,
                'fatsperservingAll' => $fatsperservingAll,
                
                'proteinsperservingUseEmpty' => $proteinsperservingUseEmpty,
                'carbsperservingUseEmpty' => $carbsperservingUseEmpty,
                'fatsperservingUseEmpty' => $fatsperservingUseEmpty,
                'othersperservingUseEmpty' => $othersperservingUseEmpty,

                'proteinsperservingUseEmptybrunch' => $proteinsperservingUseEmptybrunch,
                'carbsperservingUseEmptybrunch' => $carbsperservingUseEmptybrunch,
                'fatsperservingUseEmptybrunch' => $fatsperservingUseEmptybrunch,
                'othersperservingUseEmptybrunch' => $othersperservingUseEmptybrunch,
                
                'proteinsperservingUseEmptylunch' => $proteinsperservingUseEmptylunch,
                'carbsperservingUseEmptylunch' => $carbsperservingUseEmptylunch,
                'fatsperservingUseEmptylunch' => $fatsperservingUseEmptylunch,
                'othersperservingUseEmptylunch' => $othersperservingUseEmptylunch,

                'proteinsperservingUseEmptyafternoon' => $proteinsperservingUseEmptyafternoon,
                'carbsperservingUseEmptyafternoon' => $carbsperservingUseEmptyafternoon,
                'fatsperservingUseEmptyafternoon' => $fatsperservingUseEmptyafternoon,
                'othersperservingUseEmptyafternoon' => $othersperservingUseEmptyafternoon,

                'proteinsperservingUseEmptydinner' => $proteinsperservingUseEmptydinner,
                'carbsperservingUseEmptydinner' => $carbsperservingUseEmptydinner,
                'fatsperservingUseEmptydinner' => $fatsperservingUseEmptydinner,
                'othersperservingUseEmptydinner' => $othersperservingUseEmptydinner,

                'proteinsperservingUseEmptyevening' => $proteinsperservingUseEmptyevening,
                'carbsperservingUseEmptyevening' => $carbsperservingUseEmptyevening,
                'fatsperservingUseEmptyevening' => $fatsperservingUseEmptyevening,
                'othersperservingUseEmptyevening' => $othersperservingUseEmptyevening,
                
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

                'get_product1brunch' => $get_product1brunch,
                'get_product2brunch' => $get_product2brunch,
                'get_product3brunch' => $get_product3brunch,
                'getProduct1brunch' => $getProduct1brunch,
                'getProduct2brunch' => $getProduct2brunch,
                'getProduct3brunch' => $getProduct3brunch,
                'getPro1brunch' => $getPro1brunch,
                'getPro2brunch' => $getPro2brunch,
                'getPro3brunch' => $getPro3brunch,
                'getPr1brunch' => $getPr1brunch,
                'getPr2brunch' => $getPr2brunch,
                'getPr3brunch' => $getPr3brunch,

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

                'get_product1afternoon' => $get_product1afternoon,
                'get_product2afternoon' => $get_product2afternoon,
                'get_product3afternoon' => $get_product3afternoon,
                'getProduct1afternoon' => $getProduct1afternoon,
                'getProduct2afternoon' => $getProduct2afternoon,
                'getProduct3afternoon' => $getProduct3afternoon,
                'getPro1afternoon' => $getPro1afternoon,
                'getPro2afternoon' => $getPro2afternoon,
                'getPro3afternoon' => $getPro3afternoon,
                'getPr1afternoon' => $getPr1afternoon,
                'getPr2afternoon' => $getPr2afternoon,
                'getPr3afternoon' => $getPr3afternoon,

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
                'getPr3dinner' => $getPr3dinner,

                'get_product1evening' => $get_product1evening,
                'get_product2evening' => $get_product2evening,
                'get_product3evening' => $get_product3evening,
                'getProduct1evening' => $getProduct1evening,
                'getProduct2evening' => $getProduct2evening,
                'getProduct3evening' => $getProduct3evening,
                'getPro1evening' => $getPro1evening,
                'getPro2evening' => $getPro2evening,
                'getPro3evening' => $getPro3evening,
                'getPr1evening' => $getPr1evening,
                'getPr2evening' => $getPr2evening,
                'getPr3evening' => $getPr3evening

               
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

    public function changeBrunch(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $data = [
                'user_id' => $_SESSION['user_id'],
                'brunch' => $_POST['brunch']
            ];

            if($this->settingModel->updateBrunch($data)){
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

    public function changeAfternoon(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $data = [
                'user_id' => $_SESSION['user_id'],
                'afternoon' => $_POST['afternoon']
            ];

            if($this->settingModel->updateAfternoon($data)){
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


    public function changeEvening(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $data = [
                'user_id' => $_SESSION['user_id'],
                'evening' => $_POST['evening']
            ];

            if($this->settingModel->updateEvening($data)){
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