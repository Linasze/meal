<?php

if(!empty($_SESSION['user_id'])){
if($_SESSION['user_rights'] == 1) {

class Products extends Controller {


    public function __construct(){
        $this->productModel = $this->model('Product');
        $this->typeModel = $this->model('Type');

    }

    // public function index(){
    //     $this->view('admins/meals/products/showProducts');
    // }



    

    public function addProducts(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
           $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

           $data = [
               'title' => $_POST['title'],
               'carb' => $_POST['carb'],
               'protein' => $_POST['protein'],
               'fat' => $_POST['fat'],
               'kcal' => $_POST['kcal'],
               'cat' => $_POST['cat'],
               'use_id' => $_POST['use_id'],
               'title_err' => '',
               'carb_err' => '',
               'protein_err' => '',
               'fat_err' => '',
               'kcal_err' => ''
           ];

           if(empty($data['title'])){
               $data['title_err'] = 'Enter product title';
           }
           if(empty($data['carb'])){
            $data['carb_err'] = 'Enter carb title';
            }
           if(empty($data['protein'])){
            $data['protein_err'] = 'Enter protein title';
            }
           if(empty($data['fat'])){
            $data['fat_err'] = 'Enter fat title';
           }
           if(empty($data['kcal'])){
            $data['kcal_err'] = 'Enter kcal title';
            }

            if( empty($data['title_err']) && empty($data['carb_err']) && empty($data['protein_err']) && empty($data['fat_err']) && empty($data['kcal_err'])){
                if($this->productModel->addProduct($data)){
                    flash('product_message', 'Product added');
                    redirect('admins/manageMeals');
                    }else{
                        die('Something went wrong');
                    }
             }else{

                $this->view('admins/meals/products/addProducts',$data);
            }

       }else{
           $type = $this->typeModel->getTypes();
           $data = ['type' => $type];
        $this->view('admins/meals/products/addProducts' , $data);
       }
    }

    public function showProducts(){
        $total_results = $this->productModel->rowCount();
        $limit = 10;
        $total_pages = ceil($total_results/$limit);
        if (!isset($_GET['page'])) {
            $page = 1;
        } else{
            $page = $_GET['page'];
        }
        
        $starting_limit = ($page-1)*$limit;
        $products = $this->productModel->getProductsAdmin($starting_limit,$limit);
        $data = [
            'products' => $products,
            'total_pages' => $total_pages    
        ];
        $this->view('admins/meals/products/showProducts', $data);
    }

    public function editProduct($id){
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
 
            $data = [
                'id' => $id,
                'title' => $_POST['title'],
                'carb' => $_POST['carb'],
                'protein' => $_POST['protein'],
                'fat' => $_POST['fat'],
                'kcal' => $_POST['kcal'],
                'cat' => $_POST['cat'],
                'use_id' => $_POST['use_id'],
                'title_err' => '',
                'carb_err' => '',
                'protein_err' => '',
                'fat_err' => '',
                'kcal_err' => ''
            ];
 
            if(empty($data['title'])){
                $data['title_err'] = 'Enter product title';
            }
            if(empty($data['carb'])){
             $data['carb_err'] = 'Enter carb title';
             }
            if(empty($data['protein'])){
             $data['protein_err'] = 'Enter protein title';
             }
            if(empty($data['fat'])){
             $data['fat_err'] = 'Enter fat title';
            }
            if(empty($data['kcal'])){
             $data['kcal_err'] = 'Enter kcal title';
             }
 
             if( empty($data['title_err']) && empty($data['carb_err']) && empty($data['protein_err']) && empty($data['fat_err']) && empty($data['kcal_err'])){
                 if($this->productModel->updateProduct($data)){
                     flash('product_message', 'Product updated');
                     redirect('products/showProducts');
                     }else{
                         die('Something went wrong');
                     }
              }else{
 
                 $this->view('admins/meals/products/editProduct',$data);
             }
 
        }else{
    
        $product = $this->productModel->getProductById($id);
        $type = $this->typeModel->getTypes();
         $data = [
            'id' => $id,
            'title' => $product->title,
            'carb' => $product->carb,
            'protein' => $product->protein,
            'fat' => $product->fat,
            'kcal' => $product->kcal,
            'cat' => $product->cat,
            'use_id' => $product->use_id,
            'type' => $type
          ];

         $this->view('admins/meals/products/editProduct', $data);
        }
    }
     
    public function searchProduct(){
        if($_SERVER['REQUEST_METHOD'] = 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = ['search' => $_POST['search'] ];
            $productSearch = $this->productModel->searchProduct($data);          
            foreach($productSearch as $product): ?>            
                 <div class="dropdown float-right">
                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                      <i class="fa fa-cog"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="dropdown-menu-content">                    
                        <a class="dropdown-item" href="editProduct/<?php echo $product->id;?>">Edit</a>
                        <a class="dropdown-item" href="deleteProduct/<?php echo $product->id;?>">Delete</a>
                    </div>
                </div>
           </div>
            <div class="text-white"><?php echo $product->title; ?></div>
          
           
         
           <?php endforeach;
                         
        }
    }
  

    public function deleteProduct($id){
         if($this->productModel->deleteProduct($id)){
              flash('product_message', 'Product removed');
              redirect('products/showProducts');
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