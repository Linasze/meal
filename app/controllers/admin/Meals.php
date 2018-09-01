<?php

if(!empty($_SESSION['user_id'])){
if($_SESSION['user_rights'] == 1) {

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
                'recipe' => $_POST['recipe'],
                'protein1' => $_POST['protein1'],
                'protein2' => $_POST['protein2'],
                'protein3' => $_POST['protein3'],
                'protein4' => $_POST['protein4'],
                'protein5' => $_POST['protein5'],
                'protein6' => $_POST['protein6'],
                'protein7' => $_POST['protein7'],
                'protein8' => $_POST['protein8'],
                'protein9' => $_POST['protein9'],
                'protein10' => $_POST['protein10'],
                
                'carb1' => $_POST['carb1'],
                'carb2' => $_POST['carb2'],
                'carb3' => $_POST['carb3'],
                'carb4' => $_POST['carb4'],
                'carb5' => $_POST['carb5'],
                'carb6' => $_POST['carb6'],
                'carb7' => $_POST['carb7'],
                'carb8' => $_POST['carb8'],
                'carb9' => $_POST['carb9'],
                'carb10' => $_POST['carb10'],

                'fat1' => $_POST['fat1'],
                'fat2' => $_POST['fat2'],
                'fat3' => $_POST['fat3'],
                'fat4' => $_POST['fat4'],
                'fat5' => $_POST['fat5'],
                'fat6' => $_POST['fat6'],
                'fat7' => $_POST['fat7'],
                'fat8' => $_POST['fat8'],
                'fat9' => $_POST['fat9'],
                'fat10' => $_POST['fat10'],

                'other1' => $_POST['other1'],
                'other2' => $_POST['other2'],
                'other3' => $_POST['other3'],
                'other4' => $_POST['other4'],
                'other5' => $_POST['other5'],
                'other6' => $_POST['other6'],
                'other7' => $_POST['other7'],
                'other8' => $_POST['other8'],
                'other9' => $_POST['other9'],
                'other10' => $_POST['other10']
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
        $total_results = $this->mealModel->rowCount();
        $limit = 10;
        $total_pages = ceil($total_results/$limit);
        if (!isset($_GET['page'])) {
            $page = 1;
        } else{
            $page = $_GET['page'];
        }
        
        $starting_limit = ($page-1)*$limit;
        $meals = $this->mealModel->getMeals($starting_limit,$limit);
        $data = [
            'meals' => $meals,
            'total_pages' => $total_pages    
        ];
        $this->view('admins/meals/meals/showMeals', $data);
    }

    public function editMeal($id){
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
 
            $data = [
                'id' => $id,
                'title' => $_POST['title'],
                'type_id' => $_POST['type_id'],
                'recipe' => $_POST['recipe'],
                'protein1' => $_POST['protein1'],
                'protein2' => $_POST['protein2'],
                'protein3' => $_POST['protein3'],
                'protein4' => $_POST['protein4'],
                'protein5' => $_POST['protein5'],
                'protein6' => $_POST['protein6'],
                'protein7' => $_POST['protein7'],
                'protein8' => $_POST['protein8'],
                'protein9' => $_POST['protein9'],
                'protein10' => $_POST['protein10'],
                
                'carb1' => $_POST['carb1'],
                'carb2' => $_POST['carb2'],
                'carb3' => $_POST['carb3'],
                'carb4' => $_POST['carb4'],
                'carb5' => $_POST['carb5'],
                'carb6' => $_POST['carb6'],
                'carb7' => $_POST['carb7'],
                'carb8' => $_POST['carb8'],
                'carb9' => $_POST['carb9'],
                'carb10' => $_POST['carb10'],

                'fat1' => $_POST['fat1'],
                'fat2' => $_POST['fat2'],
                'fat3' => $_POST['fat3'],
                'fat4' => $_POST['fat4'],
                'fat5' => $_POST['fat5'],
                'fat6' => $_POST['fat6'],
                'fat7' => $_POST['fat7'],
                'fat8' => $_POST['fat8'],
                'fat9' => $_POST['fat9'],
                'fat10' => $_POST['fat10'],

                'other1' => $_POST['other1'],
                'other2' => $_POST['other2'],
                'other3' => $_POST['other3'],
                'other4' => $_POST['other4'],
                'other5' => $_POST['other5'],
                'other6' => $_POST['other6'],
                'other7' => $_POST['other7'],
                'other8' => $_POST['other8'],
                'other9' => $_POST['other9'],
                'other10' => $_POST['other10']
               
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
        
        $protein = explode(",", $meal->protein);
        $carb = explode(",", $meal->carb);
        $fat = explode(",", $meal->fat);
        $other = explode(",", $meal->other);
    
         
        $data = [
            'id' => $id,
            'title' => $meal->title,
            'products' => $products,
            'protein' => $protein,
            'carb' => $carb,
            'fat' => $fat,
            'other' => $other,
            'mealtypes' => $mealtypes,
            'recipe' => $meal->recipe,
            'type_id' => $meal->type_id
            
         
        ];

      
         $this->view('admins/meals/meals/editMeal', $data);
        }
    }


    public function searchMeal(){
        if($_SERVER['REQUEST_METHOD'] = 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = ['search' => $_POST['search'] ];
            $mealSearch = $this->mealModel->searchMeal($data);          
            foreach($mealSearch as $meal): ?>            
           
            <div class="col-lg-10 col-9 text-white"><?php echo $meal->title; ?></div>
                 <div class="col-lg-2 col-2 dropdown">
                 <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                 <i class="fa fa-cog"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="dropdown-menu-content">                    
                        <a class="dropdown-item" href="editMeal/<?php echo $meal->id;?>">Edit</a>
                        <a class="dropdown-item" href="deleteMeal/<?php echo $meal->id;?>">Delete</a>
                    </div>
                </div>
           </div>
    
           <?php endforeach;
                         
        }
    }



    public function deleteMeal($id){
        if($this->mealModel->deleteMeal($id)){
             flash('product_message', 'Meal removed');
             redirect('meals/showMeals');
           }else{
             die('Something went wrong');
           }
  }


}


}else{
    header('HTTP/1.0 403 Forbidden');
    exit;
}

}else{
    redirect('users/login');
}