<?php 

switch (count($carbAfternoon)) {
    case 1:
    // One Product with out use_id or with use_id
    $getProduct0afternoon = $this->productModel->getProductById($carbAfternoon[0]);
    $carbsperservingUseEmptyafternoon = $caloriesperserving /100 * 60 /4; 
    $carbsperservingafternoon = $caloriesperserving /100  * 60 /4;
break;

case 2:
    $getProduct0afternoon = $this->productModel->getProductById($carbAfternoon[0]);
    $getProduct1afternoon = $this->productModel->getProductById($carbAfternoon[1]);
if(!empty($getProduct0afternoon->use_id)){     
    $carbsperservingafternoon = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct0afternoon->use_id;
    $carbsperservingUseEmptyafternoon =  $caloriesperserving /100 * 60 /4 - $minus; 
}elseif(!empty($getProduct1afternoon->use_id)){   
    // One with out use_id and one with use_is  
    $carbsperservingafternoon = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct1afternoon->use_id;
    $carbsperservingUseEmptyafternoon =  $caloriesperserving /100 * 60 /4 - $minus; 
   
}elseif(empty($getProduct1afternoon->use_id)){
    // Two products with out use_id
    $carbsperservingUseEmptyafternoon =  $caloriesperserving /100 * 60 /4/2;
}
break;

case 3:
$getProduct0afternoon = $this->productModel->getProductById($carbAfternoon[0]);
$getProduct1afternoon = $this->productModel->getProductById($carbAfternoon[1]);
$getProduct2afternoon = $this->productModel->getProductById($carbAfternoon[2]);
if(!empty($getProduct0afternoon->use_id)){
    if(!empty($getProduct0afternoon->use_id) && !empty($getProduct1afternoon->use_id)){
        $carbsperservingafternoon0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0afternoon->use_id;
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;
        $minus =  $carbsperservingafternoon0 +$carbsperservingafternoon1;
        $carbsperservingUseEmptyafternoon =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;
    }elseif(!empty($getProduct0afternoon->use_id) && !empty($getProduct2afternoon->use_id)){
        $carbsperservingafternoon0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0afternoon->use_id;
        $carbsperservingafternoon2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2afternoon->use_id;
        $minus =  $carbsperservingafternoon0 +$carbsperservingafternoon2;
        $carbsperservingUseEmptyafternoon =  $caloriesperserving /100 * 60 /4 - $minus;     
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;

    }elseif(!empty($getProduct0afternoon)){
        $carbsperservingafternoon0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0afternoon->use_id;
        $minus =  $carbsperservingafternoon0;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus) /2;         
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;

}elseif(empty($getProduct0afternoon->use_id)){
    if(!empty($getProduct1afternoon->use_id) && !empty($getProduct2afternoon->use_id)){    
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;
        $carbsperservingafternoon2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2afternoon->use_id;
        $minus = $carbsperservingafternoon1 + $carbsperservingafternoon2;
        $carbsperservingUseEmptyafternoon =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;   
    }elseif(!empty($getProduct1afternoon->use_id)){  
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;
        $minus =  $carbsperservingafternoon1;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;            
    }elseif(!empty($getProduct2afternoon->use_id)){  
        $carbsperservingafternoon2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2afternoon->use_id;
        $minus =  $carbsperservingafternoon2;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;   
    
    }elseif(empty($getProduct1afternoon->use_id)){  
        $carbsperservingUseEmptyafternoon =  $caloriesperserving /100 * 60 /4 /3;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4; 
    }
 }

}else{
        $carbsperservingUseEmptyafternoon =  $caloriesperserving /100 * 60 /4 /3;
}
break;

case 4:
$getProduct0afternoon = $this->productModel->getProductById($carbAfternoon[0]);
$getProduct1afternoon = $this->productModel->getProductById($carbAfternoon[1]);
$getProduct2afternoon = $this->productModel->getProductById($carbAfternoon[2]);
$getProduct3afternoon = $this->productModel->getProductById($carbAfternoon[3]);
if(empty($getProduct0afternoon->use_id)){
    if(empty($getProduct1afternoon->use_id) && !empty($getProduct2afternoon->use_id)){
       
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;
        $carbsperservingafternoon2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2afternoon->use_id;
        $carbsperservingafternoon3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3afternoon->use_id;
        $minus =  $carbsperservingafternoon1 + $carbsperservingafternoon2 + $carbsperservingafternoon3;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;  
           
    }elseif(empty($getProduct1afternoon->use_id) && empty($getProduct2afternoon->use_id) && empty($getProduct3afternoon->use_id)){ 
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;
        $carbsperservingafternoon2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2afternoon->use_id;
        $carbsperservingafternoon3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3afternoon->use_id;
        $minus =  $carbsperservingafternoon1 + $carbsperservingafternoon2 + $carbsperservingafternoon3;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4; 
   
    }elseif(empty($getProduct1afternoon->use_id) && empty($getProduct2afternoon->use_id)){                       
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;
        $carbsperservingafternoon2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2afternoon->use_id;
        $carbsperservingafternoon3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3afternoon->use_id;
        $minus =  $carbsperservingafternoon1 + $carbsperservingafternoon2 + $carbsperservingafternoon3;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2afternoon->use_id) && !empty($getProduct3afternoon->use_id)){                     
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;                      
        $carbsperservingafternoon3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3afternoon->use_id;
        $minus =  $carbsperservingafternoon1 + $carbsperservingafternoon3;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2afternoon->use_id) && empty($getProduct3afternoon->use_id)){                        
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;                      
        $carbsperservingafternoon3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3afternoon->use_id;
        $minus =  $carbsperservingafternoon1 + $carbsperservingafternoon3;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;

    }elseif(empty($getProduct3afternoon->use_id)){                     
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;
        $carbsperservingafternoon2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2afternoon->use_id;
        $minus =  $carbsperservingafternoon1 + $carbsperservingafternoon2;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;
        $carbsperservingafternoon2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2afternoon->use_id;
        $carbsperservingafternoon3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3afternoon->use_id;
        $minus =  $carbsperservingafternoon1 + $carbsperservingafternoon2 + $carbsperservingafternoon3;
        $carbsperservingUseEmptyafternoon =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1afternoon->use_id)){
      if(empty($getProduct2afternoon->use_id) && !empty($getProduct3afternoon->use_id)){
                    
        $carbsperservingafternoon0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0afternoon->use_id;
        $carbsperservingafternoon2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2afternoon->use_id;
        $carbsperservingafternoon3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3afternoon->use_id;
        $minus =  $carbsperservingafternoon0 + $carbsperservingafternoon2 + $carbsperservingafternoon3;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct2afternoon->use_id) && empty($getProduct3afternoon->use_id)){ 
        $carbsperservingafternoon0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0afternoon->use_id;
        $carbsperservingafternoon2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2afternoon->use_id;
        $carbsperservingafternoon3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3afternoon->use_id;
        $minus =  $carbsperservingafternoon0 + $carbsperservingafternoon2 + $carbsperservingafternoon3;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;  

    }elseif(!empty($getProduct2afternoon->use_id)){ 
                   
        $carbsperservingafternoon0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0afternoon->use_id;
        $carbsperservingafternoon2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2afternoon->use_id;
        $carbsperservingafternoon3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3afternoon->use_id;
        $minus =  $carbsperservingafternoon0 + $carbsperservingafternoon2 + $carbsperservingafternoon3;
        $carbsperservingUseEmptyafternoon =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;   
    }else{
        
        $carbsperservingafternoon0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0afternoon->use_id;
        $carbsperservingafternoon2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2afternoon->use_id;
        $carbsperservingafternoon3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3afternoon->use_id;
        $minus =  $carbsperservingafternoon0 + $carbsperservingafternoon2;
        $carbsperservingUseEmptyafternoon =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;                             
    }
 
}elseif(empty($getProduct2afternoon->use_id)){
     if(empty($getProduct3afternoon->use_id)){                         
        $carbsperservingafternoon0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0afternoon->use_id;
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;               
        $minus =  $carbsperservingafternoon0 + $carbsperservingafternoon1 ;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingafternoon0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0afternoon->use_id;
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;                     
        $minus =  $carbsperservingafternoon0 + $carbsperservingafternoon1;
        $carbsperservingUseEmptyafternoon =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3afternoon->use_id)){
        $carbsperservingafternoon0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0afternoon->use_id;
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;               
        $carbsperservingafternoon2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2afternoon->use_id;               
        $minus =  $carbsperservingafternoon0 + $carbsperservingafternoon1 + $carbsperservingafternoon2;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus);
        $carbsperservingafternoon = $caloriesperserving /100 * 20 /4;   
}else{
        $carbsperservingafternoon = $caloriesperserving /100 * 20 /4;   
}

break;

case 5:
$getProduct0afternoon = $this->productModel->getProductById($carbAfternoon[0]);
$getProduct1afternoon = $this->productModel->getProductById($carbAfternoon[1]);
$getProduct2afternoon = $this->productModel->getProductById($carbAfternoon[2]);
$getProduct3afternoon = $this->productModel->getProductById($carbAfternoon[3]);
$getProduct4afternoon = $this->productModel->getProductById($carbAfternoon[4]);
if(empty($getProduct0afternoon->use_id)){
    if(empty($getProduct1afternoon->use_id) && !empty($getProduct2afternoon->use_id) && !empty($getProduct3afternoon->use_id) && !empty($getProduct4afternoon->use_id)){
        
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;
        $carbsperservingafternoon2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2afternoon->use_id;
        $carbsperservingafternoon3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3afternoon->use_id;
        $carbsperservingafternoon4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4afternoon->use_id;
        $minus =  $carbsperservingafternoon1 + $carbsperservingafternoon2 + $carbsperservingafternoon3 +$carbsperservingafternoon4;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct1afternoon->use_id) && empty($getProduct2afternoon->use_id) && empty($getProduct3afternoon->use_id)&& empty($getProduct4afternoon->use_id)){         
      
        $carbsperservingUseEmptyafternoon =  $caloriesperserving /100 * 60 /4 /5;
        
    }elseif(empty($getProduct1afternoon->use_id) && empty($getProduct2afternoon->use_id) && empty($getProduct3afternoon->use_id)){                      
       
        $carbsperservingafternoon4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4afternoon->use_id;
        $minus = $carbsperservingafternoon4;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4; 
    
    }elseif(empty($getProduct1afternoon->use_id) && empty($getProduct2afternoon->use_id)){  
        if(!empty($getProduct3afternoon->use_id)){
        $carbsperservingafternoon3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3afternoon->use_id;                       
        $carbsperservingafternoon4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4afternoon->use_id;                
        $minus =  $carbsperservingafternoon3 + $carbsperservingafternoon4;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4; 
        }else{
        $carbsperservingafternoon3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3afternoon->use_id;                       
        $carbsperservingafternoon4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4afternoon->use_id;                
        $minus =  $carbsperservingafternoon3 + $carbsperservingafternoon4;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4; 
        }   

    }elseif(empty($getProduct2afternoon->use_id) && !empty($getProduct3afternoon->use_id)){     
        
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;                      
        $carbsperservingafternoon3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3afternoon->use_id;
        $minus =  $carbsperservingafternoon1 + $carbsperservingafternoon3;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2afternoon->use_id) && empty($getProduct3afternoon->use_id)){   
        if(!empty($getProduct1afternoon->use_id)){ 
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;                      
        $carbsperservingafternoon3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3afternoon->use_id;
        $minus =  $carbsperservingafternoon1 + $carbsperservingafternoon3;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;
        }else{
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;                      
        $carbsperservingafternoon3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3afternoon->use_id;
        $minus =  $carbsperservingafternoon1 + $carbsperservingafternoon3;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;
        }    

    }elseif(empty($getProduct3afternoon->use_id)){   
        if(!empty($getProduct2afternoon->use_id)){
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;
        $carbsperservingafternoon2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2afternoon->use_id;
        $minus =  $carbsperservingafternoon1 + $carbsperservingafternoon2;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;   
        }else{
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;
        $carbsperservingafternoon2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2afternoon->use_id;
        $minus =  $carbsperservingafternoon1 + $carbsperservingafternoon2;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;   
        }
    }elseif(empty($getProduct4afternoon->use_id)){   
         
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;
        $carbsperservingafternoon2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2afternoon->use_id;
        $carbsperservingafternoon3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3afternoon->use_id;                       
        $minus =  $carbsperservingafternoon1 + $carbsperservingafternoon2 + $carbsperservingafternoon3;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;  
       
    }else{
      
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;
        $carbsperservingafternoon2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2afternoon->use_id;
        $carbsperservingafternoon3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3afternoon->use_id;
        $carbsperservingafternoon4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4afternoon->use_id;
        $minus =  $carbsperservingafternoon1 + $carbsperservingafternoon2 + $carbsperservingafternoon3 + $carbsperservingafternoon4;
        $carbsperservingUseEmptyafternoon =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1afternoon->use_id)){
      if(empty($getProduct2afternoon->use_id) && !empty($getProduct3afternoon->use_id) && !empty($getProduct4afternoon->use_id)){
        
        $carbsperservingafternoon0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0afternoon->use_id;
        $carbsperservingafternoon3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3afternoon->use_id;
        $carbsperservingafternoon4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4afternoon->use_id;
        $minus =  $carbsperservingafternoon0 + $carbsperservingafternoon3 + $carbsperservingafternoon4;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct3afternoon->use_id) ){   
        
        $carbsperservingafternoon0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0afternoon->use_id;
        $minus =  $carbsperservingafternoon0;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus)/4;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;    
         

    }elseif(empty($getProduct4afternoon->use_id) ){
        if(!empty($getProduct3afternoon->use_id)){
           
        $carbsperservingafternoon0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0afternoon->use_id;
        $carbsperservingafternoon2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2afternoon->use_id;
        $carbsperservingafternoon3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3afternoon->use_id;
        $minus =  $carbsperservingafternoon0 + $carbsperservingafternoon2 + $carbsperservingafternoon3;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;    
        }                 
       
    }else{
        
        $carbsperservingafternoon0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0afternoon->use_id;
        $carbsperservingafternoon2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2afternoon->use_id;
        $carbsperservingafternoon3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3afternoon->use_id;
        $carbsperservingafternoon4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4afternoon->use_id;
        $minus =  $carbsperservingafternoon0 + $carbsperservingafternoon2 + $carbsperservingafternoon3 + $carbsperservingafternoon4;
        $carbsperservingUseEmptyafternoon =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;  
    }
 
}elseif(empty($getProduct2afternoon->use_id)){
     if(empty($getProduct3afternoon->use_id)){   
        
        $carbsperservingafternoon0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0afternoon->use_id;
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;               
        $minus =  $carbsperservingafternoon0 + $carbsperservingafternoon1 ;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus)/3;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;   
    }else{
       
        $carbsperservingafternoon0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0afternoon->use_id;
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;                     
        $carbsperservingafternoon3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3afternoon->use_id;                     
        $carbsperservingafternoon4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3afternoon->use_id;                     
        $minus =  $carbsperservingafternoon0 + $carbsperservingafternoon1 + $carbsperservingafternoon3 + $carbsperservingafternoon4;
        $carbsperservingUseEmptyafternoon =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3afternoon->use_id)){
    if(empty($getProduct4afternoon->use_id)){
       
        $carbsperservingafternoon0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0afternoon->use_id;
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;               
        $carbsperservingafternoon2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2afternoon->use_id;               
        $minus =  $carbsperservingafternoon0 + $carbsperservingafternoon1 + $carbsperservingafternoon2;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;   
    }else{
      
        $carbsperservingafternoon0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0afternoon->use_id;
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;               
        $carbsperservingafternoon2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2afternoon->use_id;               
        $minus =  $carbsperservingafternoon0 + $carbsperservingafternoon1 + $carbsperservingafternoon2;
        $carbsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;   
    }

}else{ 
        $carbsperservingafternoon0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0afternoon->use_id;
        $carbsperservingafternoon1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1afternoon->use_id;               
        $carbsperservingafternoon2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2afternoon->use_id; 
        $carbsperservingafternoon3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3afternoon->use_id; 
        $minus =  $carbsperservingafternoon0 + $carbsperservingafternoon1 + $carbsperservingafternoon2 + $carbsperservingafternoon3;
        $carbsperservingUseEmptyafternoon =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingafternoon = $caloriesperserving /100 * 60 /4;  


}
break;

}
