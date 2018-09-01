<?php


class Dashboards extends Controller {

       
    public function __construct(){
        $this->settingModel = $this->model('Setting');
        $this->mealModel = $this->model('Meal');
        $this->productModel = $this->model('Product');
        $this->userModel = $this->model('User');
        $this->dt = new DateTime;
    }

    public function index(){
        if(!empty($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $user_settings = $this->settingModel->getUserSettings($user_id);
        $dt = $this->dt;
        $products = $this->productModel->getProducts();
        $meals = $this->mealModel->getAllMeals();

    
    
        // Get user meals
        $breakfastWeek = explode(",", $user_settings->breakfast);
        $brunchWeek = explode(",", $user_settings->brunch);
        $lunchWeek = explode(",", $user_settings->lunch);
        $afternoonWeek = explode(",", $user_settings->afternoon_meal);
        $dinnerWeek = explode(",", $user_settings->dinner);
        $eveningWeek = explode(",", $user_settings->evening_meal);

    
        // Get breakfast by week day
        $breakfast = $this->mealModel->getMealById($breakfastWeek[$dt->format('w')]);
        $breakfast2Day = $this->mealModel->getMealById($breakfastWeek[$dt->format('w')+1]);
        $breakfast3Day = $this->mealModel->getMealById($breakfastWeek[$dt->format('w')+2]);
        $breakfast4Day = $this->mealModel->getMealById($breakfastWeek[$dt->format('w')+3]);
        $breakfast5Day = $this->mealModel->getMealById($breakfastWeek[$dt->format('w')+4]);
        $breakfast6Day = $this->mealModel->getMealById($breakfastWeek[$dt->format('w')+5]);
        $breakfast7Day = $this->mealModel->getMealById($breakfastWeek[$dt->format('w')+6]);

        // Get brunch by week day 
        $brunch = $this->mealModel->getMealById($brunchWeek[$dt->format('w')]);
        $brunch2Day = $this->mealModel->getMealById($brunchWeek[$dt->format('w')+1]);
        $brunch3Day = $this->mealModel->getMealById($brunchWeek[$dt->format('w')+2]);
        $brunch4Day = $this->mealModel->getMealById($brunchWeek[$dt->format('w')+3]);
        $brunch5Day = $this->mealModel->getMealById($brunchWeek[$dt->format('w')+4]);
        $brunch6Day = $this->mealModel->getMealById($brunchWeek[$dt->format('w')+5]);
        $brunch7Day = $this->mealModel->getMealById($brunchWeek[$dt->format('w')+6]);

        // Get lunch by week day 
        $lunch = $this->mealModel->getMealById($lunchWeek[$dt->format('w')]);
        $lunch2Day = $this->mealModel->getMealById($lunchWeek[$dt->format('w')+1]);
        $lunch3Day = $this->mealModel->getMealById($lunchWeek[$dt->format('w')+2]);
        $lunch4Day = $this->mealModel->getMealById($lunchWeek[$dt->format('w')+3]);
        $lunch5Day = $this->mealModel->getMealById($lunchWeek[$dt->format('w')+4]);
        $lunch6Day = $this->mealModel->getMealById($lunchWeek[$dt->format('w')+5]);
        $lunch7Day = $this->mealModel->getMealById($lunchWeek[$dt->format('w')+6]);

        // Get afternoon by week day 
        $afternoon = $this->mealModel->getMealById($afternoonWeek[$dt->format('w')]);
        $afternoon2Day = $this->mealModel->getMealById($afternoonWeek[$dt->format('w')+1]);
        $afternoon3Day = $this->mealModel->getMealById($afternoonWeek[$dt->format('w')+2]);
        $afternoon4Day = $this->mealModel->getMealById($afternoonWeek[$dt->format('w')+3]);
        $afternoon5Day = $this->mealModel->getMealById($afternoonWeek[$dt->format('w')+4]);
        $afternoon6Day = $this->mealModel->getMealById($afternoonWeek[$dt->format('w')+5]);
        $afternoon7Day = $this->mealModel->getMealById($afternoonWeek[$dt->format('w')+6]);

        // Get dinner by week day 
        $dinner = $this->mealModel->getMealById($dinnerWeek[$dt->format('w')]);
        $dinner2Day = $this->mealModel->getMealById($dinnerWeek[$dt->format('w')+1]);
        $dinner3Day = $this->mealModel->getMealById($dinnerWeek[$dt->format('w')+2]);
        $dinner4Day = $this->mealModel->getMealById($dinnerWeek[$dt->format('w')+3]);
        $dinner5Day = $this->mealModel->getMealById($dinnerWeek[$dt->format('w')+4]);
        $dinner6Day = $this->mealModel->getMealById($dinnerWeek[$dt->format('w')+5]);
        $dinner7Day = $this->mealModel->getMealById($dinnerWeek[$dt->format('w')+6]);        

        // Get evening by week day 
        $evening = $this->mealModel->getMealById($eveningWeek[$dt->format('w')]);
        $evening2Day = $this->mealModel->getMealById($eveningWeek[$dt->format('w')+1]);
        $evening3Day = $this->mealModel->getMealById($eveningWeek[$dt->format('w')+2]);
        $evening4Day = $this->mealModel->getMealById($eveningWeek[$dt->format('w')+3]);
        $evening5Day = $this->mealModel->getMealById($eveningWeek[$dt->format('w')+4]);
        $evening6Day = $this->mealModel->getMealById($eveningWeek[$dt->format('w')+5]);
        $evening7Day = $this->mealModel->getMealById($eveningWeek[$dt->format('w')+6]);        

        // Get breakfast nutrients
        // Sunday
        
        $protein = explode(",", $breakfast->protein);
        $carb = explode(",", $breakfast->carb);
        $fat = explode(",", $breakfast->fat);
        $other = explode(",", $breakfast->other);
       
      
        // Get breakfast nutrients
        // Monday
        $protein2day = explode(",", $breakfast2Day->protein);
        $carb2day = explode(",", $breakfast2Day->carb);
        $fat2day = explode(",", $breakfast2Day->fat);
        $other2day = explode(",", $breakfast2Day->other);

        // Get breakfast nutrients
        // Tuesday
        $protein3day = explode(",", $breakfast3Day->protein);
        $carb3day = explode(",", $breakfast3Day->carb);
        $fat3day = explode(",", $breakfast3Day->fat);
        $other3day = explode(",", $breakfast3Day->other);

        // Get breakfast nutrients
        // Wednesday
        $protein4day = explode(",", $breakfast4Day->protein);
        $carb4day = explode(",", $breakfast4Day->carb);
        $fat4day = explode(",", $breakfast4Day->fat);
        $other4day = explode(",", $breakfast4Day->other);

        // Get breakfast nutrients
        // Thusday
        $protein5day = explode(",", $breakfast5Day->protein);
        $carb5day = explode(",", $breakfast5Day->carb);
        $fat5day = explode(",", $breakfast5Day->fat);
        $other5day = explode(",", $breakfast5Day->other);

        // Get breakfast nutrients
        // Friday
        $protein6day = explode(",", $breakfast6Day->protein);
        $carb6day = explode(",", $breakfast6Day->carb);
        $fat6day = explode(",", $breakfast6Day->fat);
        $other6day = explode(",", $breakfast6Day->other);

        // Get breakfast nutrients
        // Saturday
        $protein7day = explode(",", $breakfast7Day->protein);
        $carb7day = explode(",", $breakfast7Day->carb);
        $fat7day = explode(",", $breakfast7Day->fat);
        $other7day = explode(",", $breakfast7Day->other);


        // Get brunch nutrients
        // Sunday
        $proteinBrunch = explode(",", $brunch->protein);
        $carbBrunch = explode(",", $brunch->carb);
        $fatBrunch = explode(",", $brunch->fat);
        $otherBrunch = explode(",", $brunch->other);

        // Get brunch nutrients
        // Monday
        $proteinBrunch2day = explode(",", $brunch2Day->protein);
        $carbBrunch2day = explode(",", $brunch2Day->carb);
        $fatBrunch2day = explode(",", $brunch2Day->fat);
        $otherBrunch2day = explode(",", $brunch2Day->other);

        // Get brunch nutrients
        // Tuesday
        $proteinBrunch3day = explode(",", $brunch3Day->protein);
        $carbBrunch3day = explode(",", $brunch3Day->carb);
        $fatBrunch3day = explode(",", $brunch3Day->fat);
        $otherBrunch3day = explode(",", $brunch3Day->other);

        // Get brunch nutrients
        // Wednesday
        $proteinBrunch4day = explode(",", $brunch4Day->protein);
        $carbBrunch4day = explode(",", $brunch4Day->carb);
        $fatBrunch4day = explode(",", $brunch4Day->fat);
        $otherBrunch4day = explode(",", $brunch4Day->other);

        // Get brunch nutrients
        // Thusday
        $proteinBrunch5day = explode(",", $brunch5Day->protein);
        $carbBrunch5day = explode(",", $brunch5Day->carb);
        $fatBrunch5day = explode(",", $brunch5Day->fat);
        $otherBrunch5day = explode(",", $brunch5Day->other);

        // Get brunch nutrients
        // Friday
        $proteinBrunch6day = explode(",", $brunch6Day->protein);
        $carbBrunch6day = explode(",", $brunch6Day->carb);
        $fatBrunch6day = explode(",", $brunch6Day->fat);
        $otherBrunch6day = explode(",", $brunch6Day->other);

        // Get brunch nutrients
        // Saturday
        $proteinBrunch7day = explode(",", $brunch7Day->protein);
        $carbBrunch7day = explode(",", $brunch7Day->carb);
        $fatBrunch7day = explode(",", $brunch7Day->fat);
        $otherBrunch7day = explode(",", $brunch7Day->other);

        // Get lunch nutrients
        // Sunday
        $proteinLunch = explode(",", $lunch->protein);
        $carbLunch = explode(",", $lunch->carb);
        $fatLunch = explode(",", $lunch->fat);
        $otherLunch = explode(",", $lunch->other);

        // Get lunch nutrients
        // Monday
        $proteinLunch2day = explode(",", $lunch2Day->protein);
        $carbLunch2day = explode(",", $lunch2Day->carb);
        $fatLunch2day = explode(",", $lunch2Day->fat);
        $otherLunch2day = explode(",", $lunch2Day->other);

        // Get lunch nutrients
        // Tuesday
        $proteinLunch3day = explode(",", $lunch3Day->protein);
        $carbLunch3day = explode(",", $lunch3Day->carb);
        $fatLunch3day = explode(",", $lunch3Day->fat);
        $otherLunch3day = explode(",", $lunch3Day->other);

        // Get lunch nutrients
        // Wednesday
        $proteinLunch4day = explode(",", $lunch4Day->protein);
        $carbLunch4day = explode(",", $lunch4Day->carb);
        $fatLunch4day = explode(",", $lunch4Day->fat);
        $otherLunch4day = explode(",", $lunch4Day->other);

        // Get lunch nutrients
        // Thuesday
        $proteinLunch5day = explode(",", $lunch5Day->protein);
        $carbLunch5day = explode(",", $lunch5Day->carb);
        $fatLunch5day = explode(",", $lunch5Day->fat);
        $otherLunch5day = explode(",", $lunch5Day->other);

        // Get lunch nutrients
        // Friday
        $proteinLunch6day = explode(",", $lunch6Day->protein);
        $carbLunch6day = explode(",", $lunch6Day->carb);
        $fatLunch6day = explode(",", $lunch6Day->fat);
        $otherLunch6day = explode(",", $lunch6Day->other);

        // Get lunch nutrients
        // Saturday
        $proteinLunch7day = explode(",", $lunch7Day->protein);
        $carbLunch7day = explode(",", $lunch7Day->carb);
        $fatLunch7day = explode(",", $lunch7Day->fat);
        $otherLunch7day = explode(",", $lunch7Day->other);

        // Get afternoon nutrients
        // Sunday
        $proteinAfternoon = explode(",", $afternoon->protein);
        $carbAfternoon = explode(",", $afternoon->carb);
        $fatAfternoon = explode(",", $afternoon->fat);
        $otherAfternoon = explode(",", $afternoon->other);

        // Get afternoon nutrients
        // Monday
        $proteinAfternoon2day = explode(",", $afternoon2Day->protein);
        $carbAfternoon2day = explode(",", $afternoon2Day->carb);
        $fatAfternoon2day = explode(",", $afternoon2Day->fat);
        $otherAfternoon2day = explode(",", $afternoon2Day->other);
        
        
        // Get afternoon nutrients
        // Tuesday
        $proteinAfternoon3day = explode(",", $afternoon3Day->protein);
        $carbAfternoon3day = explode(",", $afternoon3Day->carb);
        $fatAfternoon3day = explode(",", $afternoon3Day->fat);
        $otherAfternoon3day = explode(",", $afternoon3Day->other);  

        // Get afternoon nutrients
        // Wednesday
        $proteinAfternoon4day = explode(",", $afternoon4Day->protein);
        $carbAfternoon4day = explode(",", $afternoon4Day->carb);
        $fatAfternoon4day = explode(",", $afternoon4Day->fat);
        $otherAfternoon4day = explode(",", $afternoon4Day->other);  

        // Get afternoon nutrients
        // Thuesday
        $proteinAfternoon5day = explode(",", $afternoon5Day->protein);
        $carbAfternoon5day = explode(",", $afternoon5Day->carb);
        $fatAfternoon5day = explode(",", $afternoon5Day->fat);
        $otherAfternoon5day = explode(",", $afternoon5Day->other);  

        // Get afternoon nutrients
        // Friday
        $proteinAfternoon6day = explode(",", $afternoon6Day->protein);
        $carbAfternoon6day = explode(",", $afternoon6Day->carb);
        $fatAfternoon6day = explode(",", $afternoon6Day->fat);
        $otherAfternoon6day = explode(",", $afternoon6Day->other);  

        // Get afternoon nutrients
        // Saturday
        $proteinAfternoon7day = explode(",", $afternoon7Day->protein);
        $carbAfternoon7day = explode(",", $afternoon7Day->carb);
        $fatAfternoon7day = explode(",", $afternoon7Day->fat);
        $otherAfternoon7day = explode(",", $afternoon7Day->other);  

         // Get dinner nutrients
         // Sunday
         $proteinDinner = explode(",", $dinner->protein);
         $carbDinner = explode(",", $dinner->carb);
         $fatDinner = explode(",", $dinner->fat);
         $otherDinner = explode(",", $dinner->other);

        // Get dinner nutrients
        // Monday
        $proteinDinner2day = explode(",", $dinner2Day->protein);
        $carbDinner2day = explode(",", $dinner2Day->carb);
        $fatDinner2day = explode(",", $dinner2Day->fat);
        $otherDinner2day = explode(",", $dinner2Day->other);

        // Get dinner nutrients
        // Tuesday
        $proteinDinner3day = explode(",", $dinner3Day->protein);
        $carbDinner3day = explode(",", $dinner3Day->carb);
        $fatDinner3day = explode(",", $dinner3Day->fat);
        $otherDinner3day = explode(",", $dinner3Day->other);

        // Get dinner nutrients
        // Wednesday
        $proteinDinner4day = explode(",", $dinner4Day->protein);
        $carbDinner4day = explode(",", $dinner4Day->carb);
        $fatDinner4day = explode(",", $dinner4Day->fat);
        $otherDinner4day = explode(",", $dinner4Day->other);

        // Get dinner nutrients
        // Thuesday
        $proteinDinner5day = explode(",", $dinner5Day->protein);
        $carbDinner5day = explode(",", $dinner5Day->carb);
        $fatDinner5day = explode(",", $dinner5Day->fat);
        $otherDinner5day = explode(",", $dinner5Day->other);

        // Get dinner nutrients
        // Friday
        $proteinDinner6day = explode(",", $dinner6Day->protein);
        $carbDinner6day = explode(",", $dinner6Day->carb);
        $fatDinner6day = explode(",", $dinner6Day->fat);
        $otherDinner6day = explode(",", $dinner6Day->other);

        // Get dinner nutrients
        // Saturday
        $proteinDinner7day = explode(",", $dinner7Day->protein);
        $carbDinner7day = explode(",", $dinner7Day->carb);
        $fatDinner7day = explode(",", $dinner7Day->fat);
        $otherDinner7day = explode(",", $dinner7Day->other);

         // Get evening nutrients
         // Sunday
         $proteinEvening = explode(",", $evening->protein);
         $carbEveningr = explode(",", $evening->carb);
         $fatEvening = explode(",", $evening->fat);
         $otherEvening = explode(",", $evening->other);

        // Get evening nutrients
         // Monday
         $proteinEvening2day = explode(",", $evening2Day->protein);
         $carbEveningr2day = explode(",", $evening2Day->carb);
         $fatEvening2day = explode(",", $evening2Day->fat);
         $otherEvening2day = explode(",", $evening2Day->other);

        // Get evening nutrients
         // Tuesday
         $proteinEvening3day = explode(",", $evening3Day->protein);
         $carbEveningr3day = explode(",", $evening3Day->carb);
         $fatEvening3day = explode(",", $evening3Day->fat);
         $otherEvening3day = explode(",", $evening3Day->other);

         // Get evening nutrients
         // Wednesday
         $proteinEvening4day = explode(",", $evening4Day->protein);
         $carbEveningr4day = explode(",", $evening4Day->carb);
         $fatEvening4day = explode(",", $evening4Day->fat);
         $otherEvening4day = explode(",", $evening4Day->other);

        // Get evening nutrients
         // Thuesday
         $proteinEvening5day = explode(",", $evening5Day->protein);
         $carbEveningr5day = explode(",", $evening5Day->carb);
         $fatEvening5day = explode(",", $evening5Day->fat);
         $otherEvening5day = explode(",", $evening5Day->other);

         // Get evening nutrients
         // Friday
         $proteinEvening6day = explode(",", $evening6Day->protein);
         $carbEveningr6day = explode(",", $evening6Day->carb);
         $fatEvening6day = explode(",", $evening6Day->fat);
         $otherEvening6day = explode(",", $evening6Day->other);

         // Get evening nutrients
         // Saturday
         $proteinEvening7day = explode(",", $evening7Day->protein);
         $carbEveningr7day = explode(",", $evening7Day->carb);
         $fatEvening7day = explode(",", $evening7Day->fat);
         $otherEvening7day = explode(",", $evening7Day->other);

         // Get user info
        $users = $this->userModel->getUserInfo($user_id);
        
        $age = (date("md", date("U", mktime(0, 0, 0, $users->month, $users->day, $users->years))) > date("md")? ((date("Y") - $users->years) - 1) : (date("Y") - $users->years));

        // Person calories in terms of physical activity
        if($users->sex == 1){
            $kcal = round((66.5 + (13.75 * $users->weight) + (5.003 * $users->height) - (6.755 * $age)) * $users->activity + $users->purpose);
            }else{ 
            $kcal = round((655.1 + (9.563 * $users->weight) + (1.850 * $users->height) - (4.676 * $age)) * $users->activity + $users->purpose);
        }

       
        // Calories per one serving
        if(!empty($user_settings)){
           $caloriesperserving = $kcal / $user_settings->eating_count; 
        }

      
        // Macro nutrients per one serving
        $proteinsperservingAll = $caloriesperserving /100 * 20 /4; 
        $carbsperservingAll = $caloriesperserving /100 * 60 /4;  
        $fatsperservingAll = $caloriesperserving /100 * 20 /9; 
        
        // Macros per day
        $proteinsperday = round($kcal /100 * 20 /4);
        $carbsperday = round($kcal /100 * 60 /4);
        $fatsperday = round($kcal /100 * 20 /9);

             // BREAKFAST
          
        // Calculate macro nutrients for breakfast protein
        if(count($protein) > 1){
            require_once APPROOT . '/libraries/algorithm/breakfast/breakfastProtein.php';
        }else{
            if(!empty($breakfast->protein)){
                if($user_settings->eating_count == 3){
                    $proteinsperservingUseEmpty = $caloriesperserving /100 * 20 /4;
                    $proteinsperserving = $caloriesperserving /100 * 20 /4;
                }elseif($user_settings->eating_count == 4 || $user_settings->eating_count == 5){
                    $proteinsperservingUseEmpty = $caloriesperserving /100 * 15 /4;
                    $proteinsperserving = $caloriesperserving /100 * 15 /4;
                }elseif($user_settings->eating_count == 6){
                    $proteinsperservingUseEmpty = $caloriesperserving /100 * 15 /4;
                    $proteinsperserving = $caloriesperserving /100 * 15 /4;
                }
            }

        }
   
           // Calculate macros for breakfast carbs             
        if(count($carb) > 1){
            require_once APPROOT . '/libraries/algorithm/breakfast/breakfastCarb.php';
        }else{     
            if(!empty($breakfast->carb)){    
                if($user_settings->eating_count == 3){
                    $carbsperservingUseEmpty = $caloriesperserving /100 * 60 /4;
                    $carbsperserving = $caloriesperserving /100 * 60 /4;
                }elseif($user_settings->eating_count == 4 || $user_settings->eating_count == 5){
                    $carbsperservingUseEmpty = $caloriesperserving /100 * 55 /4;
                    $carbsperserving = $caloriesperserving /100 * 55 /4;
                }elseif($user_settings->eating_count == 6){
                    $carbsperservingUseEmpty = $caloriesperserving /100 * 55 /4;
                    $carbsperserving = $caloriesperserving /100 * 55 /4;
                }
            }
        }

           // Calculate macros for breakfast fat            
        if(count($fat) > 1){
            require_once APPROOT . '/libraries/algorithm/breakfast/breakfastFat.php';
        }else{    
            if(!empty($breakfast->fat)){    
                if($user_settings->eating_count == 3){
                    $fatsperservingUseEmpty = $caloriesperserving /100 * 20 /9;
                    $fatsperserving = $caloriesperserving /100 * 20 /9;
                }elseif($user_settings->eating_count == 4 || $user_settings->eating_count == 5){
                    $fatsperservingUseEmpty = $caloriesperserving /100 * 15 /9;
                    $fatsperserving = $caloriesperserving /100 * 15 /9;
                }elseif($user_settings->eating_count == 6){
                    $fatsperservingUseEmpty = $caloriesperserving /100 * 15 /9;
                    $fatsperserving = $caloriesperserving /100 * 15 /9;
                }
            }
        }

         // Calculate macros for breakfast others            
         if(count($other) > 1){
            require_once APPROOT . '/libraries/algorithm/breakfast/breakfastOther.php';
        }else{      
            if(!empty($breakfast->other)){
                if($user_settings->eating_count == 3){
                    $othersperservingUseEmpty = $caloriesperserving /100 * 20 /4;
                    $othersperserving = $caloriesperserving /100 * 20 /4;
                }elseif($user_settings->eating_count == 4 || $user_settings->eating_count == 5){
                    $othersperservingUseEmpty = $caloriesperserving /100 * 15 /4;
                    $othersperserving = $caloriesperserving /100 * 15 /4;
                }elseif($user_settings->eating_count == 6){
                    $othersperservingUseEmpty = $caloriesperserving /100 * 15 /4;
                    $othersperserving = $caloriesperserving /100 * 15 /4;
                }
            }
        }

               // BRUNCH
         // Calculate macro nutrients for brunch protein
         if(count($proteinBrunch) > 1){
            require_once APPROOT . '/libraries/algorithm/brunch/brunchProtein.php';
        }else{
             if(!empty($brunch->protein)){
                if($user_settings->eating_count == 4 || $user_settings->eating_count == 5){
                    $proteinsperservingUseEmptybrunch = $caloriesperserving /100 * 15 /4;
                    $proteinsperservingbrunch = $caloriesperserving /100 * 15 /4;
                }elseif($user_settings->eating_count == 6){ 
                    $proteinsperservingUseEmptybrunch = $caloriesperserving /100 * 15 /4;
                    $proteinsperservingbrunch = $caloriesperserving /100 * 15 /4; 
                } 
             }
        }

           // Calculate macros for brunch carbs             
        if(count($carbBrunch) > 1){
            require_once APPROOT . '/libraries/algorithm/brunch/brunchCarb.php';
        }else{   
            if(!empty($brunch->carb)){  
                if($user_settings->eating_count == 4 || $user_settings->eating_count == 5){       
                    $carbsperservingUseEmptybrunch = $caloriesperserving /100 * 55 /4;
                    $carbsperservingbrunch = $caloriesperserving /100 * 55 /4;
                }elseif($user_settings->eating_count == 6){ 
                    $carbsperservingUseEmptybrunch = $caloriesperserving /100 * 55 /4;
                    $carbsperservingbrunch = $caloriesperserving /100 * 55 /4;
                }
            }
        }

           // Calculate macros for brunch fat             
        if(count($fatBrunch) > 1){
            require_once APPROOT . '/libraries/algorithm/brunch/brunchFat.php';
        }else{   
            if(!empty($brunch->fat)){  
                if($user_settings->eating_count == 4 || $user_settings->eating_count == 5){         
                    $fatsperservingUseEmptybrunch = $caloriesperserving /100 * 15 /9;
                    $fatsperservingbrunch = $caloriesperserving /100 * 15 /9;
                }elseif($user_settings->eating_count == 6){ 
                    $fatsperservingUseEmptybrunch = $caloriesperserving /100 * 15 /9;
                    $fatsperservingbrunch = $caloriesperserving /100 * 15 /9;
                }
            }

        }

         // Calculate macros for brunch others            
         if(count($otherBrunch) > 1){
            require_once APPROOT . '/libraries/algorithm/brunch/brunchOther.php';
        }else{    
            if(!empty($brunch->other)){    
                if($user_settings->eating_count == 4 || $user_settings->eating_count == 5){      
                    $othersperservingUseEmptybrunch = $caloriesperserving /100 * 15 /4;
                    $othersperservingbrunch = $caloriesperserving /100 * 15 /4;
                }elseif($user_settings->eating_count == 6){ 
                    $othersperservingUseEmptybrunch = $caloriesperserving /100 * 15 /4;
                    $othersperservingbrunch = $caloriesperserving /100 * 15 /4;
                }
            }

        }          
           
            //LUNCH
        // Calculate macro nutrients for lunch protein
        if(count($proteinLunch) > 1){
            require_once APPROOT . '/libraries/algorithm/lunch/lunchProtein.php';
        }else{
            if(!empty($lunch->protein)){  
                if($user_settings->eating_count == 3){
                    $proteinsperservingUseEmptylunch = $caloriesperserving /100 * 20 /4;
                    $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
                }elseif($user_settings->eating_count == 4 || $user_settings->eating_count == 5){
                    $proteinsperservingUseEmptylunch = $caloriesperserving /100 * 30 /4;
                    $proteinsperservinglunch = $caloriesperserving /100 * 30 /4;
                }elseif($user_settings->eating_count == 6){ 
                    $proteinsperservingUseEmptylunch = $caloriesperserving /100 * 30 /4;
                    $proteinsperservinglunch = $caloriesperserving /100 * 30 /4;
                }
            }
        }

           // Calculate macros for lunch carbs             
        if(count($carbLunch) > 1){
            require_once APPROOT . '/libraries/algorithm/lunch/lunchCarb.php';
        }else{  
            if(!empty($lunch->carb)){       
                if($user_settings->eating_count == 3){
                    $carbsperservingUseEmptylunch = $caloriesperserving /100 * 60 /4;
                    $carbsperservinglunch = $caloriesperserving /100 * 60 /4;
                }elseif($user_settings->eating_count == 4 || $user_settings->eating_count == 5){      
                    $carbsperservingUseEmptylunch = $caloriesperserving /100 * 70 /4;
                    $carbsperservinglunch = $caloriesperserving /100 * 70 /4;
                }elseif($user_settings->eating_count == 6){ 
                    $carbsperservingUseEmptylunch = $caloriesperserving /100 * 70 /4;
                    $carbsperservinglunch = $caloriesperserving /100 * 70 /4;
                }
            }
        }

           // Calculate macros for lunch fat            
        if(count($fatLunch) > 1){
            require_once APPROOT . '/libraries/algorithm/lunch/lunchFat.php';
        }else{   
            if(!empty($lunch->fat)){  
                if($user_settings->eating_count == 3){
                    $fatsperservingUseEmptylunch = $caloriesperserving /100 * 20 /9;
                    $fatsperservinglunch = $caloriesperserving /100 * 20 /9;
                }elseif($user_settings->eating_count == 4 || $user_settings->eating_count == 5){       
                    $fatsperservingUseEmptylunch = $caloriesperserving /100 * 30 /9;
                    $fatsperservinglunch = $caloriesperserving /100 * 30 /9;
                }elseif($user_settings->eating_count == 6){ 
                    $fatsperservingUseEmptylunch = $caloriesperserving /100 * 30 /9;
                    $fatsperservinglunch = $caloriesperserving /100 * 30 /9;
                }
            }
        }

         // Calculate macros for lunch others            
         if(count($otherLunch) > 1){
            require_once APPROOT . '/libraries/algorithm/lunch/lunchOther.php';
        }else{     
            if(!empty($lunch->other)){    
                if($user_settings->eating_count == 3){
                    $othersperservingUseEmptylunch = $caloriesperserving /100 * 20 /4;
                    $othersperservinglunch = $caloriesperserving /100 * 20 /4;
                 }elseif($user_settings->eating_count == 4 || $user_settings->eating_count == 5){  
                    $othersperservingUseEmptylunch = $caloriesperserving /100 * 30 /4;
                    $othersperservinglunch = $caloriesperserving /100 * 30 /4;
                }elseif($user_settings->eating_count == 6){ 
                    $othersperservingUseEmptylunch = $caloriesperserving /100 * 30 /4;
                    $othersperservinglunch = $caloriesperserving /100 * 30 /4;
                }
            }
        }  
        
                     //AFTERNOON MEAL

         // Calculate macro nutrients for afternoon meal protein
         if(count($proteinAfternoon) > 1){
            require_once APPROOT . '/libraries/algorithm/afternoon/afternoonProtein.php';
        }else{
            if(!empty($afternoon->protein)){  
                    $proteinsperservingUseEmptyafternoon = $caloriesperserving /100 * 15 /4;
                    $proteinsperservingafternoon = $caloriesperserving /100 * 15 /4;
            }

        }

           // Calculate macros for afternoon carbs             
        if(count($carbAfternoon) > 1){
            require_once APPROOT . '/libraries/algorithm/afternoon/afternoonCarb.php';
        }else{         
            if(!empty($afternoon->carb)){     
                    $carbsperservingUseEmptyafternoon = $caloriesperserving /100 * 55 /4;
                    $carbsperservingafternoon = $caloriesperserving /100 * 55 /4;
            }

        }

           // Calculate macros for afternoon fat             
        if(count($fatAfternoon) > 1){
            require_once APPROOT . '/libraries/algorithm/afternoon/afternoonFat.php';
        }else{         
            if(!empty($afternoon->fat)){     
                    $fatsperservingUseEmptyafternoon = $caloriesperserving /100 * 15 /9;
                    $fatsperservingafternoon = $caloriesperserving /100 * 15 /9;
                }

        }

         // Calculate macros for afternoon others            
         if(count($otherAfternoon) > 1){
            require_once APPROOT . '/libraries/algorithm/afternoon/afternoonOther.php';
        }else{        
            if(!empty($afternoon->other)){      
                    $othersperservingUseEmptyafternoon = $caloriesperserving /100 * 15 /4;
                    $othersperservingafternoon = $caloriesperserving /100 * 15 /4;
            }

        }       
              

               //DINNER
         // Calculate macro nutrients for dinner  protein
         if(count($proteinDinner) > 1){
            require_once APPROOT . '/libraries/algorithm/dinner/dinnerProtein.php';
        }else{
            if(!empty($dinner->protein)){  
                if($user_settings->eating_count == 3 || $user_settings->eating_count == 4){
                    $proteinsperservingUseEmptydinner = $caloriesperserving /100 * 20 /4;
                    $proteinsperservingdinner = $caloriesperserving /100 * 20 /4;
                }elseif($user_settings->eating_count == 5){
                    $proteinsperservingUseEmptydinner = $caloriesperserving /100 * 25 /4;
                    $proteinsperservingdinner = $caloriesperserving /100 * 25 /4;
                }elseif($user_settings->eating_count == 6){
                    $proteinsperservingUseEmptydinner = $caloriesperserving /100 * 30 /4;
                    $proteinsperservingdinner = $caloriesperserving /100 * 30 /4;
                }
            }
        }

           // Calculate macros for dinner carbs             
        if(count($carbDinner) > 1){
            require_once APPROOT . '/libraries/algorithm/dinner/dinnerCarb.php';
        }else{    
            if(!empty($dinner->carb)){   
                if($user_settings->eating_count == 3 || $user_settings->eating_count == 4){       
                    $carbsperservingUseEmptydinner = $caloriesperserving /100 * 60 /4;
                    $carbsperservingdinner = $caloriesperserving /100 * 60 /4;
                }elseif($user_settings->eating_count == 5){
                    $carbsperservingUseEmptydinner = $caloriesperserving /100 * 65 /4;
                    $carbsperservingdinner = $caloriesperserving /100 * 65 /4;
                }elseif($user_settings->eating_count == 6){
                    $carbsperservingUseEmptydinner = $caloriesperserving /100 * 70 /4;
                    $carbsperservingdinner = $caloriesperserving /100 * 70 /4;
                }
            }

        }

           // Calculate macros for dinner fat             
        if(count($fatDinner) > 1){
            require_once APPROOT . '/libraries/algorithm/dinner/dinnerFat.php';
        }else{            
            if(!empty($dinner->fat)){  
                if($user_settings->eating_count == 3 || $user_settings->eating_count == 4){
                    $fatsperservingUseEmptydinner = $caloriesperserving /100 * 20 /9;
                    $fatsperservingdinner = $caloriesperserving /100 * 20 /9;
                }elseif($user_settings->eating_count == 5){
                    $fatsperservingUseEmptydinner = $caloriesperserving /100 * 25 /9;
                    $fatsperservingdinner = $caloriesperserving /100 * 25 /9;
                }elseif($user_settings->eating_count == 6){
                    $fatsperservingUseEmptydinner = $caloriesperserving /100 * 30 /9;
                    $fatsperservingdinner = $caloriesperserving /100 * 30 /9;
                }
            }

        }

         // Calculate macros for dinner others            
         if(count($otherDinner) > 1){
            require_once APPROOT . '/libraries/algorithm/dinner/dinnerOther.php';
        }else{      
            if(!empty($dinner->other)){      
                if($user_settings->eating_count == 3 || $user_settings->eating_count == 4){  
                    $othersperservingUseEmptydinner = $caloriesperserving /100 * 20 /4;
                    $othersperservingdinner = $caloriesperserving /100 * 20 /4;
                }elseif($user_settings->eating_count == 5){
                    $othersperservingUseEmptydinner = $caloriesperserving /100 * 25 /4;
                    $othersperservingdinner = $caloriesperserving /100 * 25 /4;
                }elseif($user_settings->eating_count == 6){
                    $othersperservingUseEmptydinner = $caloriesperserving /100 * 30 /4;
                    $othersperservingdinner = $caloriesperserving /100 * 30 /4;
                }
            }

        }



              // Evening meal
         // Calculate macro nutrients for evening  protein
         if(count($proteinEvening) > 1){
            require_once APPROOT . '/libraries/algorithm/evening/eveningProtein.php';
        }else{
            if(!empty($evening->protein)){  
                    $proteinsperservingUseEmptyevening = $caloriesperserving /100 * 15 /4;
                    $proteinsperservingevening = $caloriesperserving /100 * 15 /4;
            }

        }

           // Calculate macros for evening carbs             
        if(count($carbEvening) > 1){
            require_once APPROOT . '/libraries/algorithm/evening/eveningCarb.php';
        }else{            
            if(!empty($evening->carb)){ 
                    $carbsperservingUseEmptyevening = $caloriesperserving /100 * 55 /4;
                    $carbsperservingevening = $caloriesperserving /100 * 55 /4;
            }

        }

           // Calculate macros for evening fat             
        if(count($fatEvening) > 1){
            require_once APPROOT . '/libraries/algorithm/evening/eveningFat.php';
        }else{        
            if(!empty($evening->fat)){     
                    $fatsperservingUseEmptyevening = $caloriesperserving /100 * 15 /9;
                    $fatsperservingevening = $caloriesperserving /100 * 15 /9;
            }

        }

         // Calculate macros for evening others            
         if(count($otherEvening) > 1){
            require_once APPROOT . '/libraries/algorithm/evening/eveningOther.php';
        }else{            
            if(!empty($evening->other)){ 
                    $othersperservingUseEmptyevening = $caloriesperserving /100 * 15 /4;
                    $othersperservingevening = $caloriesperserving /100 * 15 /4;
            }

        }
           
        if($user_settings->eating_count == 3){
            $caloriesperservingBreak =  $caloriesperserving;
            $caloriesperservingLunch =  $caloriesperserving;
            $caloriesperservingDinner =  $caloriesperserving;
            $allDayCal =  $caloriesperservingBreak + $caloriesperservingLunch + $caloriesperservingDinner;
            $allDayPro = round($proteinsperservingUseEmpty + $proteinsperservingUseEmptylunch + $proteinsperservingUseEmptydinner);
            $allDayCarb = round($carbsperservingUseEmpty + $carbsperservingUseEmptylunch + $carbsperservingUseEmptydinner);
            $allDayFat = round($fatsperservingUseEmpty + $fatsperservingUseEmptylunch + $fatsperservingUseEmptydinner);
 
         }elseif($user_settings->eating_count == 4){
            $caloriesperservingBreak =  $caloriesperserving - ($caloriesperserving /100 * 5);
            $caloriesperservingBrunch =  $caloriesperserving - ($caloriesperserving /100 * 5);
            $caloriesperservingLunch =  $caloriesperserving + ($caloriesperserving /100 * 10);
            $caloriesperservingDinner =  $caloriesperserving ;
            $allDayCal =  $caloriesperservingBreak + $caloriesperservingBrunch + $caloriesperservingLunch + $caloriesperservingDinner;
            $allDayPro = round($proteinsperservingUseEmpty + $proteinsperservingUseEmptybrunch +
            $proteinsperservingUseEmptylunch + $proteinsperservingUseEmptydinner);
            $allDayCarb = round($carbsperservingUseEmpty + $carbsperservingUseEmptybrunch +
            $carbsperservingUseEmptylunch + $carbsperservingUseEmptydinner);
            $allDayFat = round($fatsperservingUseEmpty + $fatsperservingUseEmptybrunch +
            $fatsperservingUseEmptylunch + $fatsperservingUseEmptydinner);
 
         }elseif($user_settings->eating_count == 5){
            $caloriesperservingBreak =  $caloriesperserving - ($caloriesperserving /100 * 5);
            $caloriesperservingBrunch =  $caloriesperserving - ($caloriesperserving /100 * 5);
            $caloriesperservingLunch =  $caloriesperserving + ($caloriesperserving /100 * 10);
            $caloriesperservingAfternoon =  $caloriesperserving - ($caloriesperserving /100 * 5);
            $caloriesperservingDinner =  $caloriesperserving + ($caloriesperserving /100 * 5);
            $allDayCal =  $caloriesperservingBreak + $caloriesperservingBrunch + $caloriesperservingLunch + $caloriesperservingAfternoon + $caloriesperservingDinner;
            $allDayPro = round($proteinsperservingUseEmpty + $proteinsperservingUseEmptybrunch +
            $proteinsperservingUseEmptylunch + $proteinsperservingUseEmptyafternoon + $proteinsperservingUseEmptydinner);
            $allDayCarb = round($carbsperservingUseEmpty + $carbsperservingUseEmptybrunch +
            $carbsperservingUseEmptylunch + $carbsperservingUseEmptyafternoon + $carbsperservingUseEmptydinner);
            $allDayFat = round($fatsperservingUseEmpty + $fatsperservingUseEmptybrunch +
            $fatsperservingUseEmptylunch + $fatsperservingUseEmptyafternoon + $fatsperservingUseEmptydinner);
 
         }elseif($user_settings->eating_count == 6){
            $caloriesperservingBreak =  $caloriesperserving;
            $caloriesperservingBrunch =  $caloriesperserving  - ($caloriesperserving /100 * 5);
            $caloriesperservingLunch =  $caloriesperserving + ($caloriesperserving /100 * 10);
            $caloriesperservingAfternoon =  $caloriesperserving - ($caloriesperserving /100 * 5);
            $caloriesperservingDinner =  $caloriesperserving + ($caloriesperserving /100 * 5);
            $caloriesperservingEvening =  $caloriesperserving - ($caloriesperserving /100 * 5);
            $allDayCal = $caloriesperservingBreak + $caloriesperservingBrunch + $caloriesperservingLunch + 
            $caloriesperservingAfternoon + $caloriesperservingDinner + $caloriesperservingEvening;
            $allDayPro = round($proteinsperservingUseEmpty + $proteinsperservingUseEmptybrunch +
            $proteinsperservingUseEmptylunch + $proteinsperservingUseEmptyafternoon + $proteinsperservingUseEmptydinner + 
            $proteinsperservingUseEmptyevening);
            $allDayCarb = round($carbsperservingUseEmpty + $carbsperservingUseEmptybrunch +
            $carbsperservingUseEmptylunch + $carbsperservingUseEmptyafternoon + $carbsperservingUseEmptydinner + 
            $carbsperservingUseEmptyevening);
            $allDayFat = round($fatsperservingUseEmpty + $fatsperservingUseEmptybrunch +
            $fatsperservingUseEmptylunch + $fatsperservingUseEmptyafternoon + $fatsperservingUseEmptydinner + 
            $fatsperservingUseEmptyevening);
         }

         if($kcal < $allDayCal){
            $kiloProcent = round((($allDayCal - $kcal) + $kcal) / $kcal * 100);
            $changinKcal = round(($allDayCal - $kcal) + $kcal);
            $above =  round($allDayCal - $kcal);
         }elseif($allDayCal == $kcal){
            $kiloProcent = 100;
            $changinKcal = $kcal;
         }else{
            $kiloProcent = round(($kcal - ($kcal - $allDayCal)) / $kcal * 100); 
            $changinKcal = round($kcal - ($kcal - $allDayCal));
            $missing = round($kcal - $allDayCal);     
         }

         if($proteinsperday < $allDayPro){
            $proProcent = round((($allDayPro - $proteinsperday) + $proteinsperday) / $proteinsperday * 100);
            $changinPro = round(($allDayPro  - $proteinsperday) + $proteinsperday);
            $abovePro =  round($allDayPro  - $proteinsperday);
         }elseif($allDayPro  == $proteinsperday){
            $proProcent = 100;
            $changinPro = $proteinsperday;
         }else{
            $proProcent = round(($proteinsperday - ($proteinsperday - $allDayPro )) / $proteinsperday * 100); 
            $changinPro = round($proteinsperday - ($proteinsperday - $allDayPro ));
            $missingPro = round($proteinsperday - $allDayPro );     
         }

         if($carbsperday < $allDayCarb){
            $carbProcent = round((($allDayCarb - $carbsperday) + $carbsperday) / $carbsperday * 100);
            $changinCarb = round(($allDayCarb  - $carbsperday) + $carbsperday);
            $aboveCarb =  round($allDayCarb  - $carbsperday);
         }elseif($allDayPro  == $carbsperday){
            $carbProcent = 100;
            $changinCarb = $carbsperday;
         }else{
            $carbProcent = round(($carbsperday - ($carbsperday - $allDayCarb )) / $carbsperday * 100); 
            $changinCarb = round($carbsperday - ($carbsperday - $allDayCarb ));
            $missingCarb = round($carbsperday - $allDayCarb );     
         }

         if($fatsperday < $allDayFat){
            $fatProcent = round((($allDayFat - $fatsperday) + $fatsperday) / $fatsperday * 100);
            $changinFat = round(($allDayFat  - $fatsperday) + $fatsperday);
            $aboveFat =  round($allDayFat  - $fatsperday);
         }elseif($allDayPro  == $fatsperday){
            $fatProcent = 100;
            $changinFat = $fatsperday;
         }else{
            $fatProcent = round(($fatsperday - ($fatsperday - $allDayFat )) / $fatsperday * 100); 
            $changinFat = round($fatsperday - ($fatsperday - $allDayFat ));
            $missingFat = round($fatsperday - $allDayFat );     
         }
         
            $data = [
                'dt' => $dt,
                'meals' => $meals,
                'changinKcal' => $changinKcal,
                'kiloProcent' => $kiloProcent,
                'above' => $above,
                'missing' => $missing,
                'changinPro' => $changinPro,
                'proProcent' => $proProcent,
                'abovePro' => $abovePro,
                'missingPro' => $missingPro,
                'changinCarb' => $changinCarb,
                'carbProcent' => $carbProcent,
                'aboveCarb' => $aboveCarb,
                'missingCarb' => $missingCarb,
                'changinFat' => $changinFat,
                'fatProcent' => $fatProcent,
                'aboveFat' => $aboveFat,
                'missingFat' => $missingFat,
                'user_settings' => $user_settings,
                'caloriesperserving' => $caloriesperserving,
                'caloriesperservingBreak' => $caloriesperservingBreak,
                'caloriesperservingBrunch' => $caloriesperservingBrunch,
                'caloriesperservingLunch' => $caloriesperservingLunch,
                'caloriesperservingAfternoon' => $caloriesperservingAfternoon,
                'caloriesperservingDinner' => $caloriesperservingDinner,
                'caloriesperservingEvening' => $caloriesperservingEvening,

                'breakfast' => $breakfast,
                'breakfast2Day' => $breakfast2Day,
                'breakfast3Day' => $breakfast3Day,
                'breakfast4Day' => $breakfast4Day,
                'breakfast5Day' => $breakfast5Day,
                'breakfast6Day' => $breakfast6Day,
                'breakfast7Day' => $breakfast7Day,

                'brunch' => $brunch,
                'brunch2Day' => $brunch2Day,
                'brunch3Day' => $brunch3Day,
                'brunch4Day' => $brunch4Day,
                'brunch5Day' => $brunch5Day,
                'brunch6Day' => $brunch6Day,
                'brunch7Day' => $brunch7Day,

                'lunch' => $lunch,
                'lunch2Day' => $lunch2Day,
                'lunch3Day' => $lunch3Day,
                'lunch4Day' => $lunch4Day,
                'lunch5Day' => $lunch5Day,
                'lunch6Day' => $lunch6Day,
                'lunch7Day' => $lunch7Day,
                 

                'afternoon' => $afternoon,
                'afternoon2Day' => $afternoon2Day,
                'afternoon3Day' => $afternoon3Day,
                'afternoon4Day' => $afternoon4Day,
                'afternoon5Day' => $afternoon5Day,
                'afternoon6Day' => $afternoon6Day,
                'afternoon7Day' => $afternoon7Day,
                

                'dinner' => $dinner,
                'dinner2Day' => $dinner2Day,
                'dinner3Day' => $dinner3Day,
                'dinner4Day' => $dinner4Day,
                'dinner5Day' => $dinner5Day,
                'dinner6Day' => $dinner6Day,
                'dinner7Day' => $dinner7Day,

                'evening' => $evening,
                'evening2Day' => $evening2Day,
                'evening3Day' => $evening3Day,
                'evening4Day' => $evening4Day,
                'evening5Day' => $evening5Day,
                'evening6Day' => $evening6Day,
                'evening7Day' => $evening7Day,

                'getbreakfast' => $getbreakfast,
                'getbrunch' => $getbrunch,
                'getlunch' => $getlunch,
                'getafternoon' => $getafternoon,
                'getdinner' => $getdinner,
                'getevening' => $getevening,

                
                'protein' => $protein,
                'protein2day' => $protein2day,
                'protein3day' => $protein3day,
                'protein4day' => $protein4day,
                'protein5day' => $protein5day,
                'protein6day' => $protein6day,
                'protein7day' => $protein7day,
                'carb' => $carb,
                'carb2day' => $carb2day,
                'carb3day' => $carb3day,
                'carb4day' => $carb4day,
                'carb5day' => $carb5day,
                'carb6day' => $carb6day,
                'carb7day' => $carb7day,
                'fat' => $fat,
                'fat2day' => $fat2day,
                'fat3day' => $fat3day,
                'fat4day' => $fat4day,
                'fat5day' => $fat5day,
                'fat6day' => $fat6day,
                'fat7day' => $fat7day,
                'other' => $other,
                'other2day' => $other2day,
                'other3day' => $other3day,
                'other4day' => $other4day,
                'other5day' => $other5day,
                'other6day' => $other6day,
                'other7day' => $other7day,

                'proteinBrunch' => $proteinBrunch,
                'proteinBrunch2day' => $proteinBrunch2day,
                'proteinBrunch3day' => $proteinBrunch3day,
                'proteinBrunch4day' => $proteinBrunch4day,
                'proteinBrunch5day' => $proteinBrunch5day,
                'proteinBrunch6day' => $proteinBrunch6day,
                'proteinBrunch7day' => $proteinBrunch7day,
                'carbBrunch' => $carbBrunch,
                'carbBrunch2day' => $carbBrunch2day,
                'carbBrunch3day' => $carbBrunch3day,
                'carbBrunch4day' => $carbBrunch4day,
                'carbBrunch5day' => $carbBrunch5day,
                'carbBrunch6day' => $carbBrunch6day,
                'carbBrunch7day' => $carbBrunch7day,
                'fatBrunch' => $fatBrunch,
                'fatBrunch2day' => $fatBrunch2day,
                'fatBrunch3day' => $fatBrunch3day,
                'fatBrunch4day' => $fatBrunch4day,
                'fatBrunch5day' => $fatBrunch5day,
                'fatBrunch6day' => $fatBrunch6day,
                'fatBrunch7day' => $fatBrunch7day,
                'otherBrunch' => $otherBrunch,
                'otherBrunch2day' => $otherBrunch2day,
                'otherBrunch3day' => $otherBrunch3day,
                'otherBrunch4day' => $otherBrunch4day,
                'otherBrunch5day' => $otherBrunch5day,
                'otherBrunch6day' => $otherBrunch6day,
                'otherBrunch7day' => $otherBrunch7day,
                
                'proteinLunch' => $proteinLunch,
                'proteinLunch2day' => $proteinLunch2day,
                'proteinLunch3day' => $proteinLunch3day,
                'proteinLunch4day' => $proteinLunch4day,
                'proteinLunch5day' => $proteinLunch5day,
                'proteinLunch6day' => $proteinLunch6day,
                'proteinLunch7day' => $proteinLunch7day,
                'carbLunch' => $carbLunch,
                'carbLunch2day' => $carbLunch2day,
                'carbLunch3day' => $carbLunch3day,
                'carbLunch4day' => $carbLunch4day,
                'carbLunch5day' => $carbLunch5day,
                'carbLunch6day' => $carbLunch6day,
                'carbLunch7day' => $carbLunch7day,
                'fatLunch' => $fatLunch,
                'fatLunch2day' => $fatLunch2day,
                'fatLunch3day' => $fatLunch3day,
                'fatLunch4day' => $fatLunch4day,
                'fatLunch5day' => $fatLunch5day,
                'fatLunch6day' => $fatLunch6day,
                'fatLunch7day' => $fatLunch7day,
                'otherLunch' => $otherLunch,
                'otherLunch2day' => $otherLunch2day,
                'otherLunch3day' => $otherLunch3day,
                'otherLunch4day' => $otherLunch4day,
                'otherLunch5day' => $otherLunch5day,
                'otherLunch6day' => $otherLunch6day,
                'otherLunch7day' => $otherLunch7day,

                'proteinAfternoon' => $proteinAfternoon,
                'proteinAfternoon2day' => $proteinAfternoon2day,
                'proteinAfternoon3day' => $proteinAfternoon3day,
                'proteinAfternoon4day' => $proteinAfternoon4day,
                'proteinAfternoon5day' => $proteinAfternoon5day,
                'proteinAfternoon6day' => $proteinAfternoon6day,
                'proteinAfternoon7day' => $proteinAfternoon7day,
                'carbAfternoon' => $carbAfternoon,
                'carbAfternoon2day' => $carbAfternoon2day,
                'carbAfternoon3day' => $carbAfternoon3day,
                'carbAfternoon4day' => $carbAfternoon4day,
                'carbAfternoon5day' => $carbAfternoon5day,
                'carbAfternoon6day' => $carbAfternoon6day,
                'carbAfternoon7day' => $carbAfternoon7day,
                'fatAfternoon' => $fatAfternoon,
                'fatAfternoon2day' => $fatAfternoon2day,
                'fatAfternoon3day' => $fatAfternoon3day,
                'fatAfternoon4day' => $fatAfternoon4day,
                'fatAfternoon5day' => $fatAfternoon5day,
                'fatAfternoon6day' => $fatAfternoon6day,
                'fatAfternoon7day' => $fatAfternoon7day,
                'otherAfternoon' => $otherAfternoon,
                'otherAfternoon2day' => $otherAfternoon2day,
                'otherAfternoon3day' => $otherAfternoon3day,
                'otherAfternoon4day' => $otherAfternoon4day,
                'otherAfternoon5day' => $otherAfternoon5day,
                'otherAfternoon6day' => $otherAfternoon6day,
                'otherAfternoon7day' => $otherAfternoon7day,

                'proteinDinner' => $proteinDinner,
                'proteinDinner2day' => $proteinDinner2day,
                'proteinDinner3day' => $proteinDinner3day,
                'proteinDinner4day' => $proteinDinner4day,
                'proteinDinner5day' => $proteinDinner5day,
                'proteinDinner6day' => $proteinDinner6day,
                'proteinDinner7day' => $proteinDinner7day,
                'carbDinner' => $carbDinner,
                'carbDinner2day' => $carbDinner2day,
                'carbDinner3day' => $carbDinner3day,
                'carbDinner4day' => $carbDinner4day,
                'carbDinner5day' => $carbDinner5day,
                'carbDinner6day' => $carbDinner6day,
                'carbDinner7day' => $carbDinner7day,
                'fatDinner' => $fatDinner,
                'fatDinner2day' => $fatDinner2day,
                'fatDinner3day' => $fatDinner3day,
                'fatDinner4day' => $fatDinner4day,
                'fatDinner5day' => $fatDinner5day,
                'fatDinner6day' => $fatDinner6day,
                'fatDinner7day' => $fatDinner7day,
                'otherDinner' => $otherDinner,
                'otherDinner2day' => $otherDinner2day,
                'otherDinner3day' => $otherDinner3day,
                'otherDinner4day' => $otherDinner4day,
                'otherDinner5day' => $otherDinner5day,
                'otherDinner6day' => $otherDinner6day,
                'otherDinner7day' => $otherDinner7day,

                'proteinEvening' => $proteinEvening,
                'proteinEvening2day' => $proteinEvening2day,
                'proteinEvening3day' => $proteinEvening3day,
                'proteinEvening4day' => $proteinEvening4day,
                'proteinEvening5day' => $proteinEvening5day,
                'proteinEvening6day' => $proteinEvening6day,
                'proteinEvening7day' => $proteinEvening7day,
                'carbEvening' => $carbEvening,
                'carbEvening2day' => $carbEvening2day,
                'carbEvening3day' => $carbEvening3day,
                'carbEvening4day' => $carbEvening4day,
                'carbEvening5day' => $carbEvening5day,
                'carbEvening6day' => $carbEvening6day,
                'carbEvening7day' => $carbEvening7day,
                'fatEvening' => $fatEvening,
                'fatEvening2day' => $fatEvening2day,
                'fatEvening3day' => $fatEvening3day,
                'fatEvening4day' => $fatEvening4day,
                'fatEvening5day' => $fatEvening5day,
                'fatEvening6day' => $fatEvening6day,
                'fatEvening7day' => $fatEvening7day,
                'otherEvening' => $otherEvening,
                'otherEvening2day' => $otherEvening2day,
                'otherEvening3day' => $otherEvening3day,
                'otherEvening4day' => $otherEvening4day,
                'otherEvening5day' => $otherEvening5day,
                'otherEvening6day' => $otherEvening6day,
                'otherEvening7day' => $otherEvening7day,


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

   
  
                   
    public function generate(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            $getbreakfast = $this->mealModel->getMealByType(1);
            $getbrunch = $this->mealModel->getMealByType(2);
            $getlunch = $this->mealModel->getMealByType(3);
            $getafternoon = $this->mealModel->getMealByType(4);
            $getdinner = $this->mealModel->getMealByType(5);
            $getevening = $this->mealModel->getMealByType(6);


         foreach($getbreakfast as $break){
             $arrayBreak[$i] = $break->id;
             $i++;
         }

      
         foreach($getbrunch as $brunch){
             $arrayBrunch[$a] = $brunch->id;
             $a++;
         }

       
         foreach($getlunch as $lunch){
             $arrayLunch[$l] = $lunch->id;
             $l++;
         }

        
         foreach($getafternoon as $afternoon){
             $arrayAfternoon[$k] = $afternoon->id;
             $k++;
         }

         
         foreach($getdinner as $dinner){
             $arrayDinner[$h] = $dinner->id;
             $h++;
         }
        
         foreach($getdinner as $dinner){
             $arrayEvening[$x] = $dinner->id;
             $x++;
         }
         
        shuffle($arrayBreak);
        $drawn1 = array_slice($arrayBreak, - 7);
        sort($drawn1);
        $randomBreakfast = implode(",", $drawn1);
            
        shuffle($arrayBrunch);
        $drawn2 = array_slice($arrayBrunch, - 7);
        sort($drawn2);
        $randomBrunch = implode(",", $drawn2);

        shuffle($arrayLunch);
        $drawn3 = array_slice($arrayLunch, - 7);
        sort($drawn3);
        $randomLunch = implode(",", $drawn3);

        shuffle($arrayAfternoon);
        $drawn4 = array_slice($arrayAfternoon, - 7);
        sort($drawn4);
        $randomAfternoon = implode(",", $drawn4);

        shuffle($arrayDinner);
        $drawn5 = array_slice($arrayDinner, - 7);
        sort($drawn5);
        $randomDinner = implode(",", $drawn5);

        shuffle($arrayEvening);
        $drawn6 = array_slice($arrayEvening, - 7);
        sort($drawn6);
        $randomEvening = implode(",", $drawn6);

            $data = [
                'user_id' => $_SESSION['user_id'],
                'breakfast' => $randomBreakfast,
                'brunch' => $randomBrunch,
                'lunch' => $randomLunch,
                'afternoon' => $randomAfternoon,
                'dinner' => $randomDinner,
                'evening' => $randomEvening 
                  ];
            
               if($this->userModel->generatePlan($data)){    
                 flash('message', 'Nutrition plan generated!');
                    redirect('dashboards');
               }else{
                   die('Something went wrong');
               }
            
            }else{
                redirect('dashboards/index');
                }
    }


    public function changeBreak(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            $getbreakfast = $this->mealModel->getMealByType(1);
            foreach($getbreakfast as $changeBreak){
                $arrayChangeBreak[$i] = $changeBreak->id;
                $i++;
            }
            $arrayChangeBreak = array_merge($arrayChangeBreak,$arrayChangeBreak,$arrayChangeBreak);
            shuffle($arrayChangeBreak);
            $drawn1 = array_slice($arrayChangeBreak, - 14);
            sort($drawn1);
            $randomChangeBreakfast = implode(",", $drawn1);
            $data = [
                'user_id' => $_SESSION['user_id'],
                'randomChangeBreakfast' => $randomChangeBreakfast
            ];
           if($this->settingModel->updateBreakfast($data)){
                flash('message', 'Breakfast Updated');
                redirect('dashboards');
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

}