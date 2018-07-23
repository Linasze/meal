<?php 

switch (count($carb)) {
    case 1:
    // One Product with out use_id or with use_id
    $getProduct0 = $this->productModel->getProductById($carb[0]);
    $carbsperservingUseEmpty = $caloriesperserving /100 * 60 /4; 
    $carbsperserving = $caloriesperserving /100  * 60 /4;
break;

case 2:
    $getProduct0 = $this->productModel->getProductById($carb[0]);
    $getProduct1 = $this->productModel->getProductById($carb[1]);
if(!empty($getProduct0->use_id)){     
    $carbsperserving = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct0->use_id;
    $carbsperservingUseEmpty =  $caloriesperserving /100 * 60 /4 - $minus; 
}elseif(!empty($getProduct1->use_id)){   
    // One with out use_id and one with use_is  
    $carbsperserving = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct1->use_id;
    $carbsperservingUseEmpty =  $caloriesperserving /100 * 60 /4 - $minus; 
   
}elseif(empty($getProduct1->use_id)){
    // Two products with out use_id
    $carbsperservingUseEmpty =  $caloriesperserving /100 * 60 /4/2;
}
break;

case 3:
$getProduct0 = $this->productModel->getProductById($carb[0]);
$getProduct1 = $this->productModel->getProductById($carb[1]);
$getProduct2 = $this->productModel->getProductById($carb[2]);
if(!empty($getProduct0->use_id)){
    if(!empty($getProduct0->use_id) && !empty($getProduct1->use_id)){
        $carbsperserving0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0->use_id;
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;
        $minus =  $carbsperserving0 +$carbsperserving1;
        $carbsperservingUseEmpty =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperserving = $caloriesperserving /100 * 60 /4;
    }elseif(!empty($getProduct0->use_id) && !empty($getProduct2->use_id)){
        $carbsperserving0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0->use_id;
        $carbsperserving2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2->use_id;
        $minus =  $carbsperserving0 +$carbsperserving2;
        $carbsperservingUseEmpty =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperserving = $caloriesperserving /100 * 60 /4;

    }elseif(!empty($getProduct0)){
        $carbsperserving0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0->use_id;
        $minus =  $carbsperserving0;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus) /2;         
        $carbsperserving = $caloriesperserving /100 * 60 /4;

}elseif(empty($getProduct0->use_id)){
    if(!empty($getProduct1->use_id) && !empty($getProduct2->use_id)){    
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;
        $carbsperserving2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2->use_id;
        $minus = $carbsperserving1 + $carbsperserving2;
        $carbsperservingUseEmpty =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperserving = $caloriesperserving /100 * 60 /4;   
    }elseif(!empty($getProduct1->use_id)){  
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;
        $minus =  $carbsperserving1;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperserving = $caloriesperserving /100 * 60 /4;            
    }elseif(!empty($getProduct2->use_id)){  
        $carbsperserving2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2->use_id;
        $minus =  $carbsperserving2;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperserving = $caloriesperserving /100 * 60 /4;   
    
    }elseif(empty($getProduct1->use_id)){  
        $carbsperservingUseEmpty =  $caloriesperserving /100 * 60 /4 /3;
        $carbsperserving = $caloriesperserving /100 * 60 /4; 
    }
 }

}else{
        $carbsperservingUseEmpty =  $caloriesperserving /100 * 60 /4 /3;
}
break;

case 4:
$getProduct0 = $this->productModel->getProductById($carb[0]);
$getProduct1 = $this->productModel->getProductById($carb[1]);
$getProduct2 = $this->productModel->getProductById($carb[2]);
$getProduct3 = $this->productModel->getProductById($carb[3]);
if(empty($getProduct0->use_id)){
    if(empty($getProduct1->use_id) && !empty($getProduct2->use_id)){
       
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;
        $carbsperserving2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2->use_id;
        $carbsperserving3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3->use_id;
        $minus =  $carbsperserving1 + $carbsperserving2 + $carbsperserving3;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperserving = $caloriesperserving /100 * 60 /4;  
           
    }elseif(empty($getProduct1->use_id) && empty($getProduct2->use_id) && empty($getProduct3->use_id)){ 
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;
        $carbsperserving2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2->use_id;
        $carbsperserving3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3->use_id;
        $minus =  $carbsperserving1 + $carbsperserving2 + $carbsperserving3;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperserving = $caloriesperserving /100 * 60 /4; 
   
    }elseif(empty($getProduct1->use_id) && empty($getProduct2->use_id)){                       
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;
        $carbsperserving2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2->use_id;
        $carbsperserving3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3->use_id;
        $minus =  $carbsperserving1 + $carbsperserving2 + $carbsperserving3;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperserving = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2->use_id) && !empty($getProduct3->use_id)){                     
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;                      
        $carbsperserving3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3->use_id;
        $minus =  $carbsperserving1 + $carbsperserving3;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperserving = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2->use_id) && empty($getProduct3->use_id)){                        
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;                      
        $carbsperserving3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3->use_id;
        $minus =  $carbsperserving1 + $carbsperserving3;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperserving = $caloriesperserving /100 * 60 /4;

    }elseif(empty($getProduct3->use_id)){                     
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;
        $carbsperserving2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2->use_id;
        $minus =  $carbsperserving1 + $carbsperserving2;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperserving = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;
        $carbsperserving2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2->use_id;
        $carbsperserving3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3->use_id;
        $minus =  $carbsperserving1 + $carbsperserving2 + $carbsperserving3;
        $carbsperservingUseEmpty =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperserving = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1->use_id)){
      if(empty($getProduct2->use_id) && !empty($getProduct3->use_id)){
                    
        $carbsperserving0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0->use_id;
        $carbsperserving2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2->use_id;
        $carbsperserving3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3->use_id;
        $minus =  $carbsperserving0 + $carbsperserving2 + $carbsperserving3;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperserving = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct2->use_id) && empty($getProduct3->use_id)){ 
        $carbsperserving0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0->use_id;
        $carbsperserving2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2->use_id;
        $carbsperserving3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3->use_id;
        $minus =  $carbsperserving0 + $carbsperserving2 + $carbsperserving3;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperserving = $caloriesperserving /100 * 60 /4;  

    }elseif(!empty($getProduct2->use_id)){ 
                   
        $carbsperserving0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0->use_id;
        $carbsperserving2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2->use_id;
        $carbsperserving3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3->use_id;
        $minus =  $carbsperserving0 + $carbsperserving2 + $carbsperserving3;
        $carbsperservingUseEmpty =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperserving = $caloriesperserving /100 * 60 /4;   
    }else{
        
        $carbsperserving0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0->use_id;
        $carbsperserving2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2->use_id;
        $carbsperserving3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3->use_id;
        $minus =  $carbsperserving0 + $carbsperserving2;
        $carbsperservingUseEmpty =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperserving = $caloriesperserving /100 * 60 /4;                             
    }
 
}elseif(empty($getProduct2->use_id)){
     if(empty($getProduct3->use_id)){                         
        $carbsperserving0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0->use_id;
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;               
        $minus =  $carbsperserving0 + $carbsperserving1 ;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperserving = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperserving0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0->use_id;
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;                     
        $minus =  $carbsperserving0 + $carbsperserving1;
        $carbsperservingUseEmpty =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperserving = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3->use_id)){
        $carbsperserving0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0->use_id;
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;               
        $carbsperserving2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2->use_id;               
        $minus =  $carbsperserving0 + $carbsperserving1 + $carbsperserving2;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus);
        $carbsperserving = $caloriesperserving /100 * 20 /4;   
}else{
        $carbsperserving = $caloriesperserving /100 * 20 /4;   
}

break;

case 5:
$getProduct0 = $this->productModel->getProductById($carb[0]);
$getProduct1 = $this->productModel->getProductById($carb[1]);
$getProduct2 = $this->productModel->getProductById($carb[2]);
$getProduct3 = $this->productModel->getProductById($carb[3]);
$getProduct4 = $this->productModel->getProductById($carb[4]);
if(empty($getProduct0->use_id)){
    if(empty($getProduct1->use_id) && !empty($getProduct2->use_id) && !empty($getProduct3->use_id) && !empty($getProduct4->use_id)){
        
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;
        $carbsperserving2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2->use_id;
        $carbsperserving3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3->use_id;
        $carbsperserving4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4->use_id;
        $minus =  $carbsperserving1 + $carbsperserving2 + $carbsperserving3 +$carbsperserving4;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperserving = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct1->use_id) && empty($getProduct2->use_id) && empty($getProduct3->use_id)&& empty($getProduct4->use_id)){         
      
        $carbsperservingUseEmpty =  $caloriesperserving /100 * 60 /4 /5;
        
    }elseif(empty($getProduct1->use_id) && empty($getProduct2->use_id) && empty($getProduct3->use_id)){                      
       
        $carbsperserving4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4->use_id;
        $minus = $carbsperserving4;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperserving = $caloriesperserving /100 * 60 /4; 
    
    }elseif(empty($getProduct1->use_id) && empty($getProduct2->use_id)){  
        if(!empty($getProduct3->use_id)){
        $carbsperserving3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3->use_id;                       
        $carbsperserving4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4->use_id;                
        $minus =  $carbsperserving3 + $carbsperserving4;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperserving = $caloriesperserving /100 * 60 /4; 
        }else{
        $carbsperserving3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3->use_id;                       
        $carbsperserving4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4->use_id;                
        $minus =  $carbsperserving3 + $carbsperserving4;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperserving = $caloriesperserving /100 * 60 /4; 
        }   

    }elseif(empty($getProduct2->use_id) && !empty($getProduct3->use_id)){     
        
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;                      
        $carbsperserving3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3->use_id;
        $minus =  $carbsperserving1 + $carbsperserving3;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperserving = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2->use_id) && empty($getProduct3->use_id)){   
        if(!empty($getProduct1->use_id)){ 
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;                      
        $carbsperserving3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3->use_id;
        $minus =  $carbsperserving1 + $carbsperserving3;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperserving = $caloriesperserving /100 * 60 /4;
        }else{
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;                      
        $carbsperserving3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3->use_id;
        $minus =  $carbsperserving1 + $carbsperserving3;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperserving = $caloriesperserving /100 * 60 /4;
        }    

    }elseif(empty($getProduct3->use_id)){   
        if(!empty($getProduct2->use_id)){
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;
        $carbsperserving2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2->use_id;
        $minus =  $carbsperserving1 + $carbsperserving2;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperserving = $caloriesperserving /100 * 60 /4;   
        }else{
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;
        $carbsperserving2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2->use_id;
        $minus =  $carbsperserving1 + $carbsperserving2;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperserving = $caloriesperserving /100 * 60 /4;   
        }
    }elseif(empty($getProduct4->use_id)){   
         
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;
        $carbsperserving2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2->use_id;
        $carbsperserving3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3->use_id;                       
        $minus =  $carbsperserving1 + $carbsperserving2 + $carbsperserving3;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperserving = $caloriesperserving /100 * 60 /4;  
       
    }else{
      
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;
        $carbsperserving2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2->use_id;
        $carbsperserving3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3->use_id;
        $carbsperserving4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4->use_id;
        $minus =  $carbsperserving1 + $carbsperserving2 + $carbsperserving3 + $carbsperserving4;
        $carbsperservingUseEmpty =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperserving = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1->use_id)){
      if(empty($getProduct2->use_id) && !empty($getProduct3->use_id) && !empty($getProduct4->use_id)){
        
        $carbsperserving0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0->use_id;
        $carbsperserving3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3->use_id;
        $carbsperserving4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4->use_id;
        $minus =  $carbsperserving0 + $carbsperserving3 + $carbsperserving4;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperserving = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct3->use_id) ){   
        
        $carbsperserving0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0->use_id;
        $minus =  $carbsperserving0;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus)/4;
        $carbsperserving = $caloriesperserving /100 * 60 /4;    
         

    }elseif(empty($getProduct4->use_id) ){
        if(!empty($getProduct3->use_id)){
           
        $carbsperserving0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0->use_id;
        $carbsperserving2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2->use_id;
        $carbsperserving3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3->use_id;
        $minus =  $carbsperserving0 + $carbsperserving2 + $carbsperserving3;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperserving = $caloriesperserving /100 * 60 /4;    
        }                 
       
    }else{
        
        $carbsperserving0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0->use_id;
        $carbsperserving2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2->use_id;
        $carbsperserving3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3->use_id;
        $carbsperserving4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4->use_id;
        $minus =  $carbsperserving0 + $carbsperserving2 + $carbsperserving3 + $carbsperserving4;
        $carbsperservingUseEmpty =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperserving = $caloriesperserving /100 * 60 /4;  
    }
 
}elseif(empty($getProduct2->use_id)){
     if(empty($getProduct3->use_id)){   
        
        $carbsperserving0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0->use_id;
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;               
        $minus =  $carbsperserving0 + $carbsperserving1 ;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus)/3;
        $carbsperserving = $caloriesperserving /100 * 60 /4;   
    }else{
       
        $carbsperserving0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0->use_id;
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;                     
        $carbsperserving3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3->use_id;                     
        $carbsperserving4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3->use_id;                     
        $minus =  $carbsperserving0 + $carbsperserving1 + $carbsperserving3 + $carbsperserving4;
        $carbsperservingUseEmpty =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperserving = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3->use_id)){
    if(empty($getProduct4->use_id)){
       
        $carbsperserving0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0->use_id;
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;               
        $carbsperserving2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2->use_id;               
        $minus =  $carbsperserving0 + $carbsperserving1 + $carbsperserving2;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperserving = $caloriesperserving /100 * 60 /4;   
    }else{
      
        $carbsperserving0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0->use_id;
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;               
        $carbsperserving2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2->use_id;               
        $minus =  $carbsperserving0 + $carbsperserving1 + $carbsperserving2;
        $carbsperservingUseEmpty =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperserving = $caloriesperserving /100 * 60 /4;   
    }

}else{ 
        $carbsperserving0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0->use_id;
        $carbsperserving1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1->use_id;               
        $carbsperserving2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2->use_id; 
        $carbsperserving3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3->use_id; 
        $minus =  $carbsperserving0 + $carbsperserving1 + $carbsperserving2 + $carbsperserving3;
        $carbsperservingUseEmpty =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperserving = $caloriesperserving /100 * 60 /4;  


}
break;

}
