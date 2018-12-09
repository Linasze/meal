<?php 

switch (count($fat)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fat)){
    $getPro0 = $this->productModel->getProductById($fat[0]);
    $fatsperservingUseEmpty = $caloriesperserving /100 * 20 /9; 
    $fatsperserving = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0 = $this->productModel->getProductById($fat[0]);
    $getPro1 = $this->productModel->getProductById($fat[1]);
if(!empty($getPro0->use_id)){     
    $fatsperserving = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0->use_id;
    $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1->use_id)){   
    // One with out use_id and one with use_is  
    $fatsperserving = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1->use_id;
    $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9/2;
}
break;

case 3:
$getPro0 = $this->productModel->getProductById($fat[0]);
$getPro1 = $this->productModel->getProductById($fat[1]);
$getPro2 = $this->productModel->getProductById($fat[2]);
if(!empty($getPro0->use_id)){
    if(!empty($getPro0->use_id) && !empty($getPro1->use_id)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $minus =  $fatsperserving0 +$fatsperserving1;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0->use_id) && !empty($getPro2->use_id)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving0 +$fatsperserving2;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $minus =  $fatsperserving0;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0->use_id)){
    if(!empty($getPro1->use_id) && !empty($getPro2->use_id)){    
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus = $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1->use_id)){  
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $minus =  $fatsperserving1;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2->use_id)){  
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1->use_id)){  
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0 = $this->productModel->getProductById($fat[0]);
$getPro1 = $this->productModel->getProductById($fat[1]);
$getPro2 = $this->productModel->getProductById($fat[2]);
$getPro3 = $this->productModel->getProductById($fat[3]);
if(empty($getPro0->use_id)){
    if(empty($getPro1->use_id) && !empty($getPro2->use_id)){
       
        $fatsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id) && empty($getPro3->use_id)){ 
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id)){                       
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2->use_id) && !empty($getPro3->use_id)){                     
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2->use_id) && empty($getPro3->use_id)){                        
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3->use_id)){                     
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1->use_id)){
      if(empty($getPro2->use_id) && !empty($getPro3->use_id)){
                    
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2->use_id) && empty($getPro3->use_id)){ 
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2->use_id)){ 
                   
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2->use_id)){
     if(empty($getPro3->use_id)){                         
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 ;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                     
        $minus =  $fatsperserving0 + $fatsperserving1;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3->use_id)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0 = $this->productModel->getProductById($fat[0]);
$getPro1 = $this->productModel->getProductById($fat[1]);
$getPro2 = $this->productModel->getProductById($fat[2]);
$getPro3 = $this->productModel->getProductById($fat[3]);
$getPro4 = $this->productModel->getProductById($fat[4]);
if(empty($getPro0->use_id)){
    if(empty($getPro1->use_id) && !empty($getPro2->use_id) && !empty($getPro3->use_id) && !empty($getPro4->use_id)){
        
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3 +$fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id) && empty($getPro3->use_id)&& empty($getPro4->use_id)){         
      
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id) && empty($getPro3->use_id)){                      
       
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus = $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id)){  
        if(!empty($getPro3->use_id)){
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                       
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;                
        $minus =  $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                       
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;                
        $minus =  $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2->use_id) && !empty($getPro3->use_id)){     
        
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2->use_id) && empty($getPro3->use_id)){   
        if(!empty($getPro1->use_id)){ 
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3->use_id)){   
        if(!empty($getPro2->use_id)){
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4->use_id)){   
         
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                       
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1->use_id)){
      if(empty($getPro2->use_id) && !empty($getPro3->use_id) && !empty($getPro4->use_id)){
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving0 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3->use_id) ){   
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $minus =  $fatsperserving0;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperserving = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4->use_id) ){
        if(!empty($getPro3->use_id)){
           
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2->use_id)){
     if(empty($getPro3->use_id)){   
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 ;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                     
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                     
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                     
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3->use_id)){
    if(empty($getPro4->use_id)){
       
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id; 
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id; 
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  


}
break;

}

switch (count($fat2day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fat2day)){
    $getPro0 = $this->productModel->getProductById($fat2day[0]);
    $fatsperservingUseEmpty = $caloriesperserving /100 * 20 /9; 
    $fatsperserving = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0 = $this->productModel->getProductById($fat2day[0]);
    $getPro1 = $this->productModel->getProductById($fat2day[1]);
if(!empty($getPro0->use_id)){     
    $fatsperserving = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0->use_id;
    $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1->use_id)){   
    // One with out use_id and one with use_is  
    $fatsperserving = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1->use_id;
    $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9/2;
}
break;

case 3:
$getPro0 = $this->productModel->getProductById($fat2day[0]);
$getPro1 = $this->productModel->getProductById($fat2day[1]);
$getPro2 = $this->productModel->getProductById($fat2day[2]);
if(!empty($getPro0->use_id)){
    if(!empty($getPro0->use_id) && !empty($getPro1->use_id)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $minus =  $fatsperserving0 +$fatsperserving1;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0->use_id) && !empty($getPro2->use_id)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving0 +$fatsperserving2;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $minus =  $fatsperserving0;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0->use_id)){
    if(!empty($getPro1->use_id) && !empty($getPro2->use_id)){    
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus = $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1->use_id)){  
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $minus =  $fatsperserving1;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2->use_id)){  
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1->use_id)){  
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0 = $this->productModel->getProductById($fat2day[0]);
$getPro1 = $this->productModel->getProductById($fat2day[1]);
$getPro2 = $this->productModel->getProductById($fat2day[2]);
$getPro3 = $this->productModel->getProductById($fat2day[3]);
if(empty($getPro0->use_id)){
    if(empty($getPro1->use_id) && !empty($getPro2->use_id)){
       
        $fatsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id) && empty($getPro3->use_id)){ 
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id)){                       
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2->use_id) && !empty($getPro3->use_id)){                     
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2->use_id) && empty($getPro3->use_id)){                        
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3->use_id)){                     
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1->use_id)){
      if(empty($getPro2->use_id) && !empty($getPro3->use_id)){
                    
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2->use_id) && empty($getPro3->use_id)){ 
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2->use_id)){ 
                   
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2->use_id)){
     if(empty($getPro3->use_id)){                         
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 ;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                     
        $minus =  $fatsperserving0 + $fatsperserving1;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3->use_id)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0 = $this->productModel->getProductById($fat2day[0]);
$getPro1 = $this->productModel->getProductById($fat2day[1]);
$getPro2 = $this->productModel->getProductById($fat2day[2]);
$getPro3 = $this->productModel->getProductById($fat2day[3]);
$getPro4 = $this->productModel->getProductById($fat2day[4]);
if(empty($getPro0->use_id)){
    if(empty($getPro1->use_id) && !empty($getPro2->use_id) && !empty($getPro3->use_id) && !empty($getPro4->use_id)){
        
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3 +$fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id) && empty($getPro3->use_id)&& empty($getPro4->use_id)){         
      
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id) && empty($getPro3->use_id)){                      
       
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus = $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id)){  
        if(!empty($getPro3->use_id)){
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                       
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;                
        $minus =  $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                       
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;                
        $minus =  $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2->use_id) && !empty($getPro3->use_id)){     
        
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2->use_id) && empty($getPro3->use_id)){   
        if(!empty($getPro1->use_id)){ 
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3->use_id)){   
        if(!empty($getPro2->use_id)){
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4->use_id)){   
         
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                       
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1->use_id)){
      if(empty($getPro2->use_id) && !empty($getPro3->use_id) && !empty($getPro4->use_id)){
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving0 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3->use_id) ){   
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $minus =  $fatsperserving0;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperserving = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4->use_id) ){
        if(!empty($getPro3->use_id)){
           
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2->use_id)){
     if(empty($getPro3->use_id)){   
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 ;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                     
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                     
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                     
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3->use_id)){
    if(empty($getPro4->use_id)){
       
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id; 
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id; 
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  


}
break;

}


switch (count($fat3day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fat3day)){
    $getPro0 = $this->productModel->getProductById($fat3day[0]);
    $fatsperservingUseEmpty = $caloriesperserving /100 * 20 /9; 
    $fatsperserving = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0 = $this->productModel->getProductById($fat3day[0]);
    $getPro1 = $this->productModel->getProductById($fat3day[1]);
if(!empty($getPro0->use_id)){     
    $fatsperserving = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0->use_id;
    $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1->use_id)){   
    // One with out use_id and one with use_is  
    $fatsperserving = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1->use_id;
    $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9/2;
}
break;

case 3:
$getPro0 = $this->productModel->getProductById($fat3day[0]);
$getPro1 = $this->productModel->getProductById($fat3day[1]);
$getPro2 = $this->productModel->getProductById($fat3day[2]);
if(!empty($getPro0->use_id)){
    if(!empty($getPro0->use_id) && !empty($getPro1->use_id)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $minus =  $fatsperserving0 +$fatsperserving1;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0->use_id) && !empty($getPro2->use_id)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving0 +$fatsperserving2;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $minus =  $fatsperserving0;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0->use_id)){
    if(!empty($getPro1->use_id) && !empty($getPro2->use_id)){    
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus = $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1->use_id)){  
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $minus =  $fatsperserving1;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2->use_id)){  
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1->use_id)){  
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0 = $this->productModel->getProductById($fat3day[0]);
$getPro1 = $this->productModel->getProductById($fat3day[1]);
$getPro2 = $this->productModel->getProductById($fat3day[2]);
$getPro3 = $this->productModel->getProductById($fat3day[3]);
if(empty($getPro0->use_id)){
    if(empty($getPro1->use_id) && !empty($getPro2->use_id)){
       
        $fatsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id) && empty($getPro3->use_id)){ 
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id)){                       
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2->use_id) && !empty($getPro3->use_id)){                     
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2->use_id) && empty($getPro3->use_id)){                        
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3->use_id)){                     
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1->use_id)){
      if(empty($getPro2->use_id) && !empty($getPro3->use_id)){
                    
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2->use_id) && empty($getPro3->use_id)){ 
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2->use_id)){ 
                   
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2->use_id)){
     if(empty($getPro3->use_id)){                         
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 ;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                     
        $minus =  $fatsperserving0 + $fatsperserving1;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3->use_id)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0 = $this->productModel->getProductById($fat3day[0]);
$getPro1 = $this->productModel->getProductById($fat3day[1]);
$getPro2 = $this->productModel->getProductById($fat3day[2]);
$getPro3 = $this->productModel->getProductById($fat3day[3]);
$getPro4 = $this->productModel->getProductById($fat3day[4]);
if(empty($getPro0->use_id)){
    if(empty($getPro1->use_id) && !empty($getPro2->use_id) && !empty($getPro3->use_id) && !empty($getPro4->use_id)){
        
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3 +$fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id) && empty($getPro3->use_id)&& empty($getPro4->use_id)){         
      
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id) && empty($getPro3->use_id)){                      
       
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus = $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id)){  
        if(!empty($getPro3->use_id)){
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                       
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;                
        $minus =  $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                       
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;                
        $minus =  $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2->use_id) && !empty($getPro3->use_id)){     
        
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2->use_id) && empty($getPro3->use_id)){   
        if(!empty($getPro1->use_id)){ 
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3->use_id)){   
        if(!empty($getPro2->use_id)){
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4->use_id)){   
         
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                       
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1->use_id)){
      if(empty($getPro2->use_id) && !empty($getPro3->use_id) && !empty($getPro4->use_id)){
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving0 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3->use_id) ){   
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $minus =  $fatsperserving0;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperserving = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4->use_id) ){
        if(!empty($getPro3->use_id)){
           
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2->use_id)){
     if(empty($getPro3->use_id)){   
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 ;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                     
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                     
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                     
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3->use_id)){
    if(empty($getPro4->use_id)){
       
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id; 
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id; 
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  


}
break;

}


switch (count($fat4day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fat4day)){
    $getPro0 = $this->productModel->getProductById($fat4day[0]);
    $fatsperservingUseEmpty = $caloriesperserving /100 * 20 /9; 
    $fatsperserving = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0 = $this->productModel->getProductById($fat4day[0]);
    $getPro1 = $this->productModel->getProductById($fat4day[1]);
if(!empty($getPro0->use_id)){     
    $fatsperserving = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0->use_id;
    $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1->use_id)){   
    // One with out use_id and one with use_is  
    $fatsperserving = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1->use_id;
    $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9/2;
}
break;

case 3:
$getPro0 = $this->productModel->getProductById($fat4day[0]);
$getPro1 = $this->productModel->getProductById($fat4day[1]);
$getPro2 = $this->productModel->getProductById($fat4day[2]);
if(!empty($getPro0->use_id)){
    if(!empty($getPro0->use_id) && !empty($getPro1->use_id)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $minus =  $fatsperserving0 +$fatsperserving1;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0->use_id) && !empty($getPro2->use_id)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving0 +$fatsperserving2;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $minus =  $fatsperserving0;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0->use_id)){
    if(!empty($getPro1->use_id) && !empty($getPro2->use_id)){    
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus = $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1->use_id)){  
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $minus =  $fatsperserving1;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2->use_id)){  
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1->use_id)){  
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0 = $this->productModel->getProductById($fat4day[0]);
$getPro1 = $this->productModel->getProductById($fat4day[1]);
$getPro2 = $this->productModel->getProductById($fat4day[2]);
$getPro3 = $this->productModel->getProductById($fat4day[3]);
if(empty($getPro0->use_id)){
    if(empty($getPro1->use_id) && !empty($getPro2->use_id)){
       
        $fatsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id) && empty($getPro3->use_id)){ 
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id)){                       
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2->use_id) && !empty($getPro3->use_id)){                     
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2->use_id) && empty($getPro3->use_id)){                        
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3->use_id)){                     
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1->use_id)){
      if(empty($getPro2->use_id) && !empty($getPro3->use_id)){
                    
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2->use_id) && empty($getPro3->use_id)){ 
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2->use_id)){ 
                   
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2->use_id)){
     if(empty($getPro3->use_id)){                         
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 ;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                     
        $minus =  $fatsperserving0 + $fatsperserving1;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3->use_id)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0 = $this->productModel->getProductById($fat4day[0]);
$getPro1 = $this->productModel->getProductById($fat4day[1]);
$getPro2 = $this->productModel->getProductById($fat4day[2]);
$getPro3 = $this->productModel->getProductById($fat4day[3]);
$getPro4 = $this->productModel->getProductById($fat4day[4]);
if(empty($getPro0->use_id)){
    if(empty($getPro1->use_id) && !empty($getPro2->use_id) && !empty($getPro3->use_id) && !empty($getPro4->use_id)){
        
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3 +$fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id) && empty($getPro3->use_id)&& empty($getPro4->use_id)){         
      
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id) && empty($getPro3->use_id)){                      
       
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus = $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id)){  
        if(!empty($getPro3->use_id)){
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                       
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;                
        $minus =  $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                       
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;                
        $minus =  $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2->use_id) && !empty($getPro3->use_id)){     
        
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2->use_id) && empty($getPro3->use_id)){   
        if(!empty($getPro1->use_id)){ 
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3->use_id)){   
        if(!empty($getPro2->use_id)){
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4->use_id)){   
         
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                       
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1->use_id)){
      if(empty($getPro2->use_id) && !empty($getPro3->use_id) && !empty($getPro4->use_id)){
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving0 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3->use_id) ){   
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $minus =  $fatsperserving0;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperserving = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4->use_id) ){
        if(!empty($getPro3->use_id)){
           
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2->use_id)){
     if(empty($getPro3->use_id)){   
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 ;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                     
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                     
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                     
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3->use_id)){
    if(empty($getPro4->use_id)){
       
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id; 
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id; 
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  


}
break;

}
switch (count($fat5day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fat5day)){
    $getPro0 = $this->productModel->getProductById($fat5day[0]);
    $fatsperservingUseEmpty = $caloriesperserving /100 * 20 /9; 
    $fatsperserving = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0 = $this->productModel->getProductById($fat5day[0]);
    $getPro1 = $this->productModel->getProductById($fat5day[1]);
if(!empty($getPro0->use_id)){     
    $fatsperserving = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0->use_id;
    $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1->use_id)){   
    // One with out use_id and one with use_is  
    $fatsperserving = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1->use_id;
    $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9/2;
}
break;

case 3:
$getPro0 = $this->productModel->getProductById($fat5day[0]);
$getPro1 = $this->productModel->getProductById($fat5day[1]);
$getPro2 = $this->productModel->getProductById($fat5day[2]);
if(!empty($getPro0->use_id)){
    if(!empty($getPro0->use_id) && !empty($getPro1->use_id)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $minus =  $fatsperserving0 +$fatsperserving1;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0->use_id) && !empty($getPro2->use_id)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving0 +$fatsperserving2;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $minus =  $fatsperserving0;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0->use_id)){
    if(!empty($getPro1->use_id) && !empty($getPro2->use_id)){    
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus = $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1->use_id)){  
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $minus =  $fatsperserving1;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2->use_id)){  
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1->use_id)){  
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0 = $this->productModel->getProductById($fat5day[0]);
$getPro1 = $this->productModel->getProductById($fat5day[1]);
$getPro2 = $this->productModel->getProductById($fat5day[2]);
$getPro3 = $this->productModel->getProductById($fat5day[3]);
if(empty($getPro0->use_id)){
    if(empty($getPro1->use_id) && !empty($getPro2->use_id)){
       
        $fatsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id) && empty($getPro3->use_id)){ 
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id)){                       
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2->use_id) && !empty($getPro3->use_id)){                     
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2->use_id) && empty($getPro3->use_id)){                        
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3->use_id)){                     
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1->use_id)){
      if(empty($getPro2->use_id) && !empty($getPro3->use_id)){
                    
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2->use_id) && empty($getPro3->use_id)){ 
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2->use_id)){ 
                   
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2->use_id)){
     if(empty($getPro3->use_id)){                         
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 ;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                     
        $minus =  $fatsperserving0 + $fatsperserving1;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3->use_id)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0 = $this->productModel->getProductById($fat5day[0]);
$getPro1 = $this->productModel->getProductById($fat5day[1]);
$getPro2 = $this->productModel->getProductById($fat5day[2]);
$getPro3 = $this->productModel->getProductById($fat5day[3]);
$getPro4 = $this->productModel->getProductById($fat5day[4]);
if(empty($getPro0->use_id)){
    if(empty($getPro1->use_id) && !empty($getPro2->use_id) && !empty($getPro3->use_id) && !empty($getPro4->use_id)){
        
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3 +$fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id) && empty($getPro3->use_id)&& empty($getPro4->use_id)){         
      
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id) && empty($getPro3->use_id)){                      
       
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus = $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id)){  
        if(!empty($getPro3->use_id)){
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                       
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;                
        $minus =  $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                       
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;                
        $minus =  $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2->use_id) && !empty($getPro3->use_id)){     
        
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2->use_id) && empty($getPro3->use_id)){   
        if(!empty($getPro1->use_id)){ 
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3->use_id)){   
        if(!empty($getPro2->use_id)){
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4->use_id)){   
         
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                       
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1->use_id)){
      if(empty($getPro2->use_id) && !empty($getPro3->use_id) && !empty($getPro4->use_id)){
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving0 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3->use_id) ){   
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $minus =  $fatsperserving0;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperserving = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4->use_id) ){
        if(!empty($getPro3->use_id)){
           
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2->use_id)){
     if(empty($getPro3->use_id)){   
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 ;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                     
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                     
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                     
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3->use_id)){
    if(empty($getPro4->use_id)){
       
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id; 
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id; 
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  


}
break;

}

switch (count($fat6day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fat5day)){
    $getPro0 = $this->productModel->getProductById($fat6day[0]);
    $fatsperservingUseEmpty = $caloriesperserving /100 * 20 /9; 
    $fatsperserving = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0 = $this->productModel->getProductById($fat6day[0]);
    $getPro1 = $this->productModel->getProductById($fat6day[1]);
if(!empty($getPro0->use_id)){     
    $fatsperserving = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0->use_id;
    $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1->use_id)){   
    // One with out use_id and one with use_is  
    $fatsperserving = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1->use_id;
    $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9/2;
}
break;

case 3:
$getPro0 = $this->productModel->getProductById($fat6day[0]);
$getPro1 = $this->productModel->getProductById($fat6day[1]);
$getPro2 = $this->productModel->getProductById($fat6day[2]);
if(!empty($getPro0->use_id)){
    if(!empty($getPro0->use_id) && !empty($getPro1->use_id)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $minus =  $fatsperserving0 +$fatsperserving1;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0->use_id) && !empty($getPro2->use_id)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving0 +$fatsperserving2;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $minus =  $fatsperserving0;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0->use_id)){
    if(!empty($getPro1->use_id) && !empty($getPro2->use_id)){    
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus = $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1->use_id)){  
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $minus =  $fatsperserving1;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2->use_id)){  
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1->use_id)){  
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0 = $this->productModel->getProductById($fat6day[0]);
$getPro1 = $this->productModel->getProductById($fat6day[1]);
$getPro2 = $this->productModel->getProductById($fat6day[2]);
$getPro3 = $this->productModel->getProductById($fat6day[3]);
if(empty($getPro0->use_id)){
    if(empty($getPro1->use_id) && !empty($getPro2->use_id)){
       
        $fatsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id) && empty($getPro3->use_id)){ 
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id)){                       
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2->use_id) && !empty($getPro3->use_id)){                     
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2->use_id) && empty($getPro3->use_id)){                        
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3->use_id)){                     
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1->use_id)){
      if(empty($getPro2->use_id) && !empty($getPro3->use_id)){
                    
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2->use_id) && empty($getPro3->use_id)){ 
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2->use_id)){ 
                   
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2->use_id)){
     if(empty($getPro3->use_id)){                         
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 ;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                     
        $minus =  $fatsperserving0 + $fatsperserving1;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3->use_id)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0 = $this->productModel->getProductById($fat6day[0]);
$getPro1 = $this->productModel->getProductById($fat6day[1]);
$getPro2 = $this->productModel->getProductById($fat6day[2]);
$getPro3 = $this->productModel->getProductById($fat6day[3]);
$getPro4 = $this->productModel->getProductById($fat6day[4]);
if(empty($getPro0->use_id)){
    if(empty($getPro1->use_id) && !empty($getPro2->use_id) && !empty($getPro3->use_id) && !empty($getPro4->use_id)){
        
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3 +$fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id) && empty($getPro3->use_id)&& empty($getPro4->use_id)){         
      
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id) && empty($getPro3->use_id)){                      
       
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus = $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id)){  
        if(!empty($getPro3->use_id)){
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                       
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;                
        $minus =  $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                       
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;                
        $minus =  $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2->use_id) && !empty($getPro3->use_id)){     
        
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2->use_id) && empty($getPro3->use_id)){   
        if(!empty($getPro1->use_id)){ 
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3->use_id)){   
        if(!empty($getPro2->use_id)){
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4->use_id)){   
         
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                       
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1->use_id)){
      if(empty($getPro2->use_id) && !empty($getPro3->use_id) && !empty($getPro4->use_id)){
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving0 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3->use_id) ){   
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $minus =  $fatsperserving0;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperserving = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4->use_id) ){
        if(!empty($getPro3->use_id)){
           
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2->use_id)){
     if(empty($getPro3->use_id)){   
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 ;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                     
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                     
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                     
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3->use_id)){
    if(empty($getPro4->use_id)){
       
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id; 
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id; 
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  


}
break;

}

switch (count($fat7day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fat5day)){
    $getPro0 = $this->productModel->getProductById($fat7day[0]);
    $fatsperservingUseEmpty = $caloriesperserving /100 * 20 /9; 
    $fatsperserving = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0 = $this->productModel->getProductById($fat7day[0]);
    $getPro1 = $this->productModel->getProductById($fat7day[1]);
if(!empty($getPro0->use_id)){     
    $fatsperserving = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0->use_id;
    $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1->use_id)){   
    // One with out use_id and one with use_is  
    $fatsperserving = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1->use_id;
    $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9/2;
}
break;

case 3:
$getPro0 = $this->productModel->getProductById($fat7day[0]);
$getPro1 = $this->productModel->getProductById($fat7day[1]);
$getPro2 = $this->productModel->getProductById($fat7day[2]);
if(!empty($getPro0->use_id)){
    if(!empty($getPro0->use_id) && !empty($getPro1->use_id)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $minus =  $fatsperserving0 +$fatsperserving1;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0->use_id) && !empty($getPro2->use_id)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving0 +$fatsperserving2;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $minus =  $fatsperserving0;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0->use_id)){
    if(!empty($getPro1->use_id) && !empty($getPro2->use_id)){    
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus = $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1->use_id)){  
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $minus =  $fatsperserving1;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2->use_id)){  
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1->use_id)){  
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0 = $this->productModel->getProductById($fat7day[0]);
$getPro1 = $this->productModel->getProductById($fat7day[1]);
$getPro2 = $this->productModel->getProductById($fat7day[2]);
$getPro3 = $this->productModel->getProductById($fat7day[3]);
if(empty($getPro0->use_id)){
    if(empty($getPro1->use_id) && !empty($getPro2->use_id)){
       
        $fatsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id) && empty($getPro3->use_id)){ 
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id)){                       
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2->use_id) && !empty($getPro3->use_id)){                     
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2->use_id) && empty($getPro3->use_id)){                        
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3->use_id)){                     
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1->use_id)){
      if(empty($getPro2->use_id) && !empty($getPro3->use_id)){
                    
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2->use_id) && empty($getPro3->use_id)){ 
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2->use_id)){ 
                   
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2->use_id)){
     if(empty($getPro3->use_id)){                         
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 ;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                     
        $minus =  $fatsperserving0 + $fatsperserving1;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3->use_id)){
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0 = $this->productModel->getProductById($fat7day[0]);
$getPro1 = $this->productModel->getProductById($fat7day[1]);
$getPro2 = $this->productModel->getProductById($fat7day[2]);
$getPro3 = $this->productModel->getProductById($fat7day[3]);
$getPro4 = $this->productModel->getProductById($fat7day[4]);
if(empty($getPro0->use_id)){
    if(empty($getPro1->use_id) && !empty($getPro2->use_id) && !empty($getPro3->use_id) && !empty($getPro4->use_id)){
        
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3 +$fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id) && empty($getPro3->use_id)&& empty($getPro4->use_id)){         
      
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id) && empty($getPro3->use_id)){                      
       
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus = $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1->use_id) && empty($getPro2->use_id)){  
        if(!empty($getPro3->use_id)){
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                       
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;                
        $minus =  $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                       
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;                
        $minus =  $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2->use_id) && !empty($getPro3->use_id)){     
        
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2->use_id) && empty($getPro3->use_id)){   
        if(!empty($getPro1->use_id)){ 
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                      
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving1 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3->use_id)){   
        if(!empty($getPro2->use_id)){
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4->use_id)){   
         
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                       
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving1 + $fatsperserving2 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1->use_id)){
      if(empty($getPro2->use_id) && !empty($getPro3->use_id) && !empty($getPro4->use_id)){
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving0 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3->use_id) ){   
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $minus =  $fatsperserving0;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperserving = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4->use_id) ){
        if(!empty($getPro3->use_id)){
           
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4->use_id;
        $minus =  $fatsperserving0 + $fatsperserving2 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2->use_id)){
     if(empty($getPro3->use_id)){   
        
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 ;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;                     
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                     
        $fatsperserving4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id;                     
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving3 + $fatsperserving4;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3->use_id)){
    if(empty($getPro4->use_id)){
       
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id;               
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2;
        $fatsperservingUseEmpty =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperserving = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperserving0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0->use_id;
        $fatsperserving1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1->use_id;               
        $fatsperserving2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2->use_id; 
        $fatsperserving3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3->use_id; 
        $minus =  $fatsperserving0 + $fatsperserving1 + $fatsperserving2 + $fatsperserving3;
        $fatsperservingUseEmpty =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperserving = $caloriesperserving /100 * 20 /9;  


}
break;

}