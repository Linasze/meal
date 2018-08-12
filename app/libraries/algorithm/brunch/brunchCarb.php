<?php 

switch (count($carbBrunch)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($carbBrunch)){
    $getProduct0Brunch = $this->productModel->getProductById($carbBrunch[0]);
    $carbsperservingUseEmptyBrunch = $caloriesperserving /100 * 60 /4; 
    $carbsperservingBrunch = $caloriesperserving /100  * 60 /4;
    }
break;

case 2:
    $getProduct0Brunch = $this->productModel->getProductById($carbBrunch[0]);
    $getProduct1Brunch = $this->productModel->getProductById($carbBrunch[1]);
if(!empty($getProduct0Brunch->use_id)){     
    $carbsperservingBrunch = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct0Brunch->use_id;
    $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus; 
}elseif(!empty($getProduct1Brunch->use_id)){   
    // One with out use_id and one with use_is  
    $carbsperservingBrunch = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct1Brunch->use_id;
    $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus; 
   
}elseif(empty($getProduct1Brunch->use_id)){
    // Two products with out use_id
    $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4/2;
}
break;

case 3:
$getProduct0Brunch = $this->productModel->getProductById($carbBrunch[0]);
$getProduct1Brunch = $this->productModel->getProductById($carbBrunch[1]);
$getProduct2Brunch = $this->productModel->getProductById($carbBrunch[2]);
if(!empty($getProduct0Brunch->use_id)){
    if(!empty($getProduct0Brunch->use_id) && !empty($getProduct1Brunch->use_id)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $minus =  $carbsperservingBrunch0 +$carbsperservingBrunch1;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;
    }elseif(!empty($getProduct0Brunch->use_id) && !empty($getProduct2Brunch->use_id)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch0 +$carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;     
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;

    }elseif(!empty($getProduct0Brunch)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $minus =  $carbsperservingBrunch0;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;         
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;

}elseif(empty($getProduct0Brunch->use_id)){
    if(!empty($getProduct1Brunch->use_id) && !empty($getProduct2Brunch->use_id)){    
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus = $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }elseif(!empty($getProduct1Brunch->use_id)){  
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $minus =  $carbsperservingBrunch1;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;            
    }elseif(!empty($getProduct2Brunch->use_id)){  
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    
    }elseif(empty($getProduct1Brunch->use_id)){  
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
    }
 }

}else{
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 /3;
}
break;

case 4:
$getProduct0Brunch = $this->productModel->getProductById($carbBrunch[0]);
$getProduct1Brunch = $this->productModel->getProductById($carbBrunch[1]);
$getProduct2Brunch = $this->productModel->getProductById($carbBrunch[2]);
$getProduct3Brunch = $this->productModel->getProductById($carbBrunch[3]);
if(empty($getProduct0Brunch->use_id)){
    if(empty($getProduct1Brunch->use_id) && !empty($getProduct2Brunch->use_id)){
       
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
           
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){ 
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
   
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id)){                       
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id)){                     
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){                        
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;

    }elseif(empty($getProduct3Brunch->use_id)){                     
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1Brunch->use_id)){
      if(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id)){
                    
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){ 
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  

    }elseif(!empty($getProduct2Brunch->use_id)){ 
                   
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;                             
    }
 
}elseif(empty($getProduct2Brunch->use_id)){
     if(empty($getProduct3Brunch->use_id)){                         
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 ;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                     
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3Brunch->use_id)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 20 /4 - $minus);
        $carbsperservingBrunch = $caloriesperserving /100 * 20 /4;   
}else{
        $carbsperservingBrunch = $caloriesperserving /100 * 20 /4;   
}

break;

case 5:
$getProduct0Brunch = $this->productModel->getProductById($carbBrunch[0]);
$getProduct1Brunch = $this->productModel->getProductById($carbBrunch[1]);
$getProduct2Brunch = $this->productModel->getProductById($carbBrunch[2]);
$getProduct3Brunch = $this->productModel->getProductById($carbBrunch[3]);
$getProduct4Brunch = $this->productModel->getProductById($carbBrunch[4]);
if(empty($getProduct0Brunch->use_id)){
    if(empty($getProduct1Brunch->use_id) && !empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id) && !empty($getProduct4Brunch->use_id)){
        
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3 +$carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)&& empty($getProduct4Brunch->use_id)){         
      
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 /5;
        
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){                      
       
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus = $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
    
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id)){  
        if(!empty($getProduct3Brunch->use_id)){
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                       
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;                
        $minus =  $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
        }else{
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                       
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;                
        $minus =  $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
        }   

    }elseif(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id)){     
        
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){   
        if(!empty($getProduct1Brunch->use_id)){ 
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;
        }else{
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;
        }    

    }elseif(empty($getProduct3Brunch->use_id)){   
        if(!empty($getProduct2Brunch->use_id)){
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
        }else{
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
        }
    }elseif(empty($getProduct4Brunch->use_id)){   
         
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                       
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
       
    }else{
      
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1Brunch->use_id)){
      if(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id) && !empty($getProduct4Brunch->use_id)){
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct3Brunch->use_id) ){   
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $minus =  $carbsperservingBrunch0;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;    
         

    }elseif(empty($getProduct4Brunch->use_id) ){
        if(!empty($getProduct3Brunch->use_id)){
           
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;    
        }                 
       
    }else{
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
    }
 
}elseif(empty($getProduct2Brunch->use_id)){
     if(empty($getProduct3Brunch->use_id)){   
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 ;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
       
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                     
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                     
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                     
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3Brunch->use_id)){
    if(empty($getProduct4Brunch->use_id)){
       
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
      
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }

}else{ 
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id; 
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id; 
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  


}
break;

}


switch (count($carbBrunch2day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($carbBrunch2day)){
    $getProduct0Brunch = $this->productModel->getProductById($carbBrunch2day[0]);
    $carbsperservingUseEmptyBrunch = $caloriesperserving /100 * 60 /4; 
    $carbsperservingBrunch = $caloriesperserving /100  * 60 /4;
    }
break;

case 2:
    $getProduct0Brunch = $this->productModel->getProductById($carbBrunch2day[0]);
    $getProduct1Brunch = $this->productModel->getProductById($carbBrunch2day[1]);
if(!empty($getProduct0Brunch->use_id)){     
    $carbsperservingBrunch = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct0Brunch->use_id;
    $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus; 
}elseif(!empty($getProduct1Brunch->use_id)){   
    // One with out use_id and one with use_is  
    $carbsperservingBrunch = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct1Brunch->use_id;
    $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus; 
   
}elseif(empty($getProduct1Brunch->use_id)){
    // Two products with out use_id
    $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4/2;
}
break;

case 3:
$getProduct0Brunch = $this->productModel->getProductById($carbBrunch2day[0]);
$getProduct1Brunch = $this->productModel->getProductById($carbBrunch2day[1]);
$getProduct2Brunch = $this->productModel->getProductById($carbBrunch2day[2]);
if(!empty($getProduct0Brunch->use_id)){
    if(!empty($getProduct0Brunch->use_id) && !empty($getProduct1Brunch->use_id)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $minus =  $carbsperservingBrunch0 +$carbsperservingBrunch1;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;
    }elseif(!empty($getProduct0Brunch->use_id) && !empty($getProduct2Brunch->use_id)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch0 +$carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;     
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;

    }elseif(!empty($getProduct0Brunch)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $minus =  $carbsperservingBrunch0;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;         
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;

}elseif(empty($getProduct0Brunch->use_id)){
    if(!empty($getProduct1Brunch->use_id) && !empty($getProduct2Brunch->use_id)){    
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus = $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }elseif(!empty($getProduct1Brunch->use_id)){  
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $minus =  $carbsperservingBrunch1;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;            
    }elseif(!empty($getProduct2Brunch->use_id)){  
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    
    }elseif(empty($getProduct1Brunch->use_id)){  
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
    }
 }

}else{
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 /3;
}
break;

case 4:
$getProduct0Brunch = $this->productModel->getProductById($carbBrunch2day[0]);
$getProduct1Brunch = $this->productModel->getProductById($carbBrunch2day[1]);
$getProduct2Brunch = $this->productModel->getProductById($carbBrunch2day[2]);
$getProduct3Brunch = $this->productModel->getProductById($carbBrunch2day[3]);
if(empty($getProduct0Brunch->use_id)){
    if(empty($getProduct1Brunch->use_id) && !empty($getProduct2Brunch->use_id)){
       
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
           
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){ 
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
   
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id)){                       
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id)){                     
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){                        
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;

    }elseif(empty($getProduct3Brunch->use_id)){                     
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1Brunch->use_id)){
      if(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id)){
                    
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){ 
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  

    }elseif(!empty($getProduct2Brunch->use_id)){ 
                   
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;                             
    }
 
}elseif(empty($getProduct2Brunch->use_id)){
     if(empty($getProduct3Brunch->use_id)){                         
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 ;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                     
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3Brunch->use_id)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 20 /4 - $minus);
        $carbsperservingBrunch = $caloriesperserving /100 * 20 /4;   
}else{
        $carbsperservingBrunch = $caloriesperserving /100 * 20 /4;   
}

break;

case 5:
$getProduct0Brunch = $this->productModel->getProductById($carbBrunch2day[0]);
$getProduct1Brunch = $this->productModel->getProductById($carbBrunch2day[1]);
$getProduct2Brunch = $this->productModel->getProductById($carbBrunch2day[2]);
$getProduct3Brunch = $this->productModel->getProductById($carbBrunch2day[3]);
$getProduct4Brunch = $this->productModel->getProductById($carbBrunch2day[4]);
if(empty($getProduct0Brunch->use_id)){
    if(empty($getProduct1Brunch->use_id) && !empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id) && !empty($getProduct4Brunch->use_id)){
        
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3 +$carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)&& empty($getProduct4Brunch->use_id)){         
      
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 /5;
        
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){                      
       
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus = $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
    
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id)){  
        if(!empty($getProduct3Brunch->use_id)){
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                       
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;                
        $minus =  $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
        }else{
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                       
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;                
        $minus =  $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
        }   

    }elseif(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id)){     
        
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){   
        if(!empty($getProduct1Brunch->use_id)){ 
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;
        }else{
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;
        }    

    }elseif(empty($getProduct3Brunch->use_id)){   
        if(!empty($getProduct2Brunch->use_id)){
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
        }else{
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
        }
    }elseif(empty($getProduct4Brunch->use_id)){   
         
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                       
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
       
    }else{
      
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1Brunch->use_id)){
      if(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id) && !empty($getProduct4Brunch->use_id)){
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct3Brunch->use_id) ){   
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $minus =  $carbsperservingBrunch0;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;    
         

    }elseif(empty($getProduct4Brunch->use_id) ){
        if(!empty($getProduct3Brunch->use_id)){
           
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;    
        }                 
       
    }else{
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
    }
 
}elseif(empty($getProduct2Brunch->use_id)){
     if(empty($getProduct3Brunch->use_id)){   
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 ;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
       
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                     
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                     
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                     
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3Brunch->use_id)){
    if(empty($getProduct4Brunch->use_id)){
       
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
      
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }

}else{ 
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id; 
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id; 
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  


}
break;

}


switch (count($carbBrunch3day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($carbBrunch3day)){
    $getProduct0Brunch = $this->productModel->getProductById($carbBrunch3day[0]);
    $carbsperservingUseEmptyBrunch = $caloriesperserving /100 * 60 /4; 
    $carbsperservingBrunch = $caloriesperserving /100  * 60 /4;
    }
break;

case 2:
    $getProduct0Brunch = $this->productModel->getProductById($carbBrunch3day[0]);
    $getProduct1Brunch = $this->productModel->getProductById($carbBrunch3day[1]);
if(!empty($getProduct0Brunch->use_id)){     
    $carbsperservingBrunch = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct0Brunch->use_id;
    $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus; 
}elseif(!empty($getProduct1Brunch->use_id)){   
    // One with out use_id and one with use_is  
    $carbsperservingBrunch = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct1Brunch->use_id;
    $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus; 
   
}elseif(empty($getProduct1Brunch->use_id)){
    // Two products with out use_id
    $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4/2;
}
break;

case 3:
$getProduct0Brunch = $this->productModel->getProductById($carbBrunch3day[0]);
$getProduct1Brunch = $this->productModel->getProductById($carbBrunch3day[1]);
$getProduct2Brunch = $this->productModel->getProductById($carbBrunch3day[2]);
if(!empty($getProduct0Brunch->use_id)){
    if(!empty($getProduct0Brunch->use_id) && !empty($getProduct1Brunch->use_id)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $minus =  $carbsperservingBrunch0 +$carbsperservingBrunch1;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;
    }elseif(!empty($getProduct0Brunch->use_id) && !empty($getProduct2Brunch->use_id)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch0 +$carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;     
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;

    }elseif(!empty($getProduct0Brunch)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $minus =  $carbsperservingBrunch0;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;         
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;

}elseif(empty($getProduct0Brunch->use_id)){
    if(!empty($getProduct1Brunch->use_id) && !empty($getProduct2Brunch->use_id)){    
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus = $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }elseif(!empty($getProduct1Brunch->use_id)){  
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $minus =  $carbsperservingBrunch1;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;            
    }elseif(!empty($getProduct2Brunch->use_id)){  
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    
    }elseif(empty($getProduct1Brunch->use_id)){  
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
    }
 }

}else{
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 /3;
}
break;

case 4:
$getProduct0Brunch = $this->productModel->getProductById($carbBrunch3day[0]);
$getProduct1Brunch = $this->productModel->getProductById($carbBrunch3day[1]);
$getProduct2Brunch = $this->productModel->getProductById($carbBrunch3day[2]);
$getProduct3Brunch = $this->productModel->getProductById($carbBrunch3day[3]);
if(empty($getProduct0Brunch->use_id)){
    if(empty($getProduct1Brunch->use_id) && !empty($getProduct2Brunch->use_id)){
       
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
           
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){ 
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
   
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id)){                       
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id)){                     
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){                        
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;

    }elseif(empty($getProduct3Brunch->use_id)){                     
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1Brunch->use_id)){
      if(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id)){
                    
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){ 
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  

    }elseif(!empty($getProduct2Brunch->use_id)){ 
                   
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;                             
    }
 
}elseif(empty($getProduct2Brunch->use_id)){
     if(empty($getProduct3Brunch->use_id)){                         
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 ;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                     
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3Brunch->use_id)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 20 /4 - $minus);
        $carbsperservingBrunch = $caloriesperserving /100 * 20 /4;   
}else{
        $carbsperservingBrunch = $caloriesperserving /100 * 20 /4;   
}

break;

case 5:
$getProduct0Brunch = $this->productModel->getProductById($carbBrunch3day[0]);
$getProduct1Brunch = $this->productModel->getProductById($carbBrunch3day[1]);
$getProduct2Brunch = $this->productModel->getProductById($carbBrunch3day[2]);
$getProduct3Brunch = $this->productModel->getProductById($carbBrunch3day[3]);
$getProduct4Brunch = $this->productModel->getProductById($carbBrunch3day[4]);
if(empty($getProduct0Brunch->use_id)){
    if(empty($getProduct1Brunch->use_id) && !empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id) && !empty($getProduct4Brunch->use_id)){
        
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3 +$carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)&& empty($getProduct4Brunch->use_id)){         
      
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 /5;
        
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){                      
       
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus = $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
    
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id)){  
        if(!empty($getProduct3Brunch->use_id)){
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                       
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;                
        $minus =  $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
        }else{
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                       
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;                
        $minus =  $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
        }   

    }elseif(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id)){     
        
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){   
        if(!empty($getProduct1Brunch->use_id)){ 
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;
        }else{
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;
        }    

    }elseif(empty($getProduct3Brunch->use_id)){   
        if(!empty($getProduct2Brunch->use_id)){
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
        }else{
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
        }
    }elseif(empty($getProduct4Brunch->use_id)){   
         
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                       
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
       
    }else{
      
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1Brunch->use_id)){
      if(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id) && !empty($getProduct4Brunch->use_id)){
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct3Brunch->use_id) ){   
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $minus =  $carbsperservingBrunch0;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;    
         

    }elseif(empty($getProduct4Brunch->use_id) ){
        if(!empty($getProduct3Brunch->use_id)){
           
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;    
        }                 
       
    }else{
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
    }
 
}elseif(empty($getProduct2Brunch->use_id)){
     if(empty($getProduct3Brunch->use_id)){   
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 ;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
       
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                     
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                     
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                     
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3Brunch->use_id)){
    if(empty($getProduct4Brunch->use_id)){
       
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
      
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }

}else{ 
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id; 
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id; 
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  


}
break;

}



switch (count($carbBrunch4day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($carbBrunch4day)){
    $getProduct0Brunch = $this->productModel->getProductById($carbBrunch4day[0]);
    $carbsperservingUseEmptyBrunch = $caloriesperserving /100 * 60 /4; 
    $carbsperservingBrunch = $caloriesperserving /100  * 60 /4;
    }
break;

case 2:
    $getProduct0Brunch = $this->productModel->getProductById($carbBrunch4day[0]);
    $getProduct1Brunch = $this->productModel->getProductById($carbBrunch4day[1]);
if(!empty($getProduct0Brunch->use_id)){     
    $carbsperservingBrunch = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct0Brunch->use_id;
    $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus; 
}elseif(!empty($getProduct1Brunch->use_id)){   
    // One with out use_id and one with use_is  
    $carbsperservingBrunch = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct1Brunch->use_id;
    $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus; 
   
}elseif(empty($getProduct1Brunch->use_id)){
    // Two products with out use_id
    $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4/2;
}
break;

case 3:
$getProduct0Brunch = $this->productModel->getProductById($carbBrunch4day[0]);
$getProduct1Brunch = $this->productModel->getProductById($carbBrunch4day[1]);
$getProduct2Brunch = $this->productModel->getProductById($carbBrunch4day[2]);
if(!empty($getProduct0Brunch->use_id)){
    if(!empty($getProduct0Brunch->use_id) && !empty($getProduct1Brunch->use_id)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $minus =  $carbsperservingBrunch0 +$carbsperservingBrunch1;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;
    }elseif(!empty($getProduct0Brunch->use_id) && !empty($getProduct2Brunch->use_id)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch0 +$carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;     
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;

    }elseif(!empty($getProduct0Brunch)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $minus =  $carbsperservingBrunch0;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;         
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;

}elseif(empty($getProduct0Brunch->use_id)){
    if(!empty($getProduct1Brunch->use_id) && !empty($getProduct2Brunch->use_id)){    
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus = $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }elseif(!empty($getProduct1Brunch->use_id)){  
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $minus =  $carbsperservingBrunch1;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;            
    }elseif(!empty($getProduct2Brunch->use_id)){  
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    
    }elseif(empty($getProduct1Brunch->use_id)){  
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
    }
 }

}else{
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 /3;
}
break;

case 4:
$getProduct0Brunch = $this->productModel->getProductById($carbBrunch4day[0]);
$getProduct1Brunch = $this->productModel->getProductById($carbBrunch4day[1]);
$getProduct2Brunch = $this->productModel->getProductById($carbBrunch4day[2]);
$getProduct3Brunch = $this->productModel->getProductById($carbBrunch4day[3]);
if(empty($getProduct0Brunch->use_id)){
    if(empty($getProduct1Brunch->use_id) && !empty($getProduct2Brunch->use_id)){
       
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
           
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){ 
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
   
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id)){                       
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id)){                     
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){                        
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;

    }elseif(empty($getProduct3Brunch->use_id)){                     
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1Brunch->use_id)){
      if(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id)){
                    
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){ 
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  

    }elseif(!empty($getProduct2Brunch->use_id)){ 
                   
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;                             
    }
 
}elseif(empty($getProduct2Brunch->use_id)){
     if(empty($getProduct3Brunch->use_id)){                         
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 ;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                     
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3Brunch->use_id)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 20 /4 - $minus);
        $carbsperservingBrunch = $caloriesperserving /100 * 20 /4;   
}else{
        $carbsperservingBrunch = $caloriesperserving /100 * 20 /4;   
}

break;

case 5:
$getProduct0Brunch = $this->productModel->getProductById($carbBrunch4day[0]);
$getProduct1Brunch = $this->productModel->getProductById($carbBrunch4day[1]);
$getProduct2Brunch = $this->productModel->getProductById($carbBrunch4day[2]);
$getProduct3Brunch = $this->productModel->getProductById($carbBrunch4day[3]);
$getProduct4Brunch = $this->productModel->getProductById($carbBrunch4day[4]);
if(empty($getProduct0Brunch->use_id)){
    if(empty($getProduct1Brunch->use_id) && !empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id) && !empty($getProduct4Brunch->use_id)){
        
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3 +$carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)&& empty($getProduct4Brunch->use_id)){         
      
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 /5;
        
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){                      
       
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus = $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
    
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id)){  
        if(!empty($getProduct3Brunch->use_id)){
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                       
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;                
        $minus =  $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
        }else{
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                       
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;                
        $minus =  $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
        }   

    }elseif(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id)){     
        
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){   
        if(!empty($getProduct1Brunch->use_id)){ 
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;
        }else{
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;
        }    

    }elseif(empty($getProduct3Brunch->use_id)){   
        if(!empty($getProduct2Brunch->use_id)){
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
        }else{
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
        }
    }elseif(empty($getProduct4Brunch->use_id)){   
         
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                       
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
       
    }else{
      
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1Brunch->use_id)){
      if(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id) && !empty($getProduct4Brunch->use_id)){
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct3Brunch->use_id) ){   
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $minus =  $carbsperservingBrunch0;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;    
         

    }elseif(empty($getProduct4Brunch->use_id) ){
        if(!empty($getProduct3Brunch->use_id)){
           
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;    
        }                 
       
    }else{
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
    }
 
}elseif(empty($getProduct2Brunch->use_id)){
     if(empty($getProduct3Brunch->use_id)){   
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 ;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
       
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                     
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                     
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                     
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3Brunch->use_id)){
    if(empty($getProduct4Brunch->use_id)){
       
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
      
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }

}else{ 
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id; 
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id; 
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  


}
break;

}



switch (count($carbBrunch5day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($carbBrunch5day)){
    $getProduct0Brunch = $this->productModel->getProductById($carbBrunch5day[0]);
    $carbsperservingUseEmptyBrunch = $caloriesperserving /100 * 60 /4; 
    $carbsperservingBrunch = $caloriesperserving /100  * 60 /4;
    }
break;

case 2:
    $getProduct0Brunch = $this->productModel->getProductById($carbBrunch5day[0]);
    $getProduct1Brunch = $this->productModel->getProductById($carbBrunch5day[1]);
if(!empty($getProduct0Brunch->use_id)){     
    $carbsperservingBrunch = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct0Brunch->use_id;
    $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus; 
}elseif(!empty($getProduct1Brunch->use_id)){   
    // One with out use_id and one with use_is  
    $carbsperservingBrunch = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct1Brunch->use_id;
    $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus; 
   
}elseif(empty($getProduct1Brunch->use_id)){
    // Two products with out use_id
    $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4/2;
}
break;

case 3:
$getProduct0Brunch = $this->productModel->getProductById($carbBrunch5day[0]);
$getProduct1Brunch = $this->productModel->getProductById($carbBrunch5day[1]);
$getProduct2Brunch = $this->productModel->getProductById($carbBrunch5day[2]);
if(!empty($getProduct0Brunch->use_id)){
    if(!empty($getProduct0Brunch->use_id) && !empty($getProduct1Brunch->use_id)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $minus =  $carbsperservingBrunch0 +$carbsperservingBrunch1;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;
    }elseif(!empty($getProduct0Brunch->use_id) && !empty($getProduct2Brunch->use_id)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch0 +$carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;     
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;

    }elseif(!empty($getProduct0Brunch)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $minus =  $carbsperservingBrunch0;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;         
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;

}elseif(empty($getProduct0Brunch->use_id)){
    if(!empty($getProduct1Brunch->use_id) && !empty($getProduct2Brunch->use_id)){    
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus = $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }elseif(!empty($getProduct1Brunch->use_id)){  
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $minus =  $carbsperservingBrunch1;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;            
    }elseif(!empty($getProduct2Brunch->use_id)){  
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    
    }elseif(empty($getProduct1Brunch->use_id)){  
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
    }
 }

}else{
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 /3;
}
break;

case 4:
$getProduct0Brunch = $this->productModel->getProductById($carbBrunch5day[0]);
$getProduct1Brunch = $this->productModel->getProductById($carbBrunch5day[1]);
$getProduct2Brunch = $this->productModel->getProductById($carbBrunch5day[2]);
$getProduct3Brunch = $this->productModel->getProductById($carbBrunch5day[3]);
if(empty($getProduct0Brunch->use_id)){
    if(empty($getProduct1Brunch->use_id) && !empty($getProduct2Brunch->use_id)){
       
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
           
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){ 
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
   
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id)){                       
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id)){                     
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){                        
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;

    }elseif(empty($getProduct3Brunch->use_id)){                     
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1Brunch->use_id)){
      if(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id)){
                    
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){ 
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  

    }elseif(!empty($getProduct2Brunch->use_id)){ 
                   
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;                             
    }
 
}elseif(empty($getProduct2Brunch->use_id)){
     if(empty($getProduct3Brunch->use_id)){                         
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 ;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                     
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3Brunch->use_id)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 20 /4 - $minus);
        $carbsperservingBrunch = $caloriesperserving /100 * 20 /4;   
}else{
        $carbsperservingBrunch = $caloriesperserving /100 * 20 /4;   
}

break;

case 5:
$getProduct0Brunch = $this->productModel->getProductById($carbBrunch5day[0]);
$getProduct1Brunch = $this->productModel->getProductById($carbBrunch5day[1]);
$getProduct2Brunch = $this->productModel->getProductById($carbBrunch5day[2]);
$getProduct3Brunch = $this->productModel->getProductById($carbBrunch5day[3]);
$getProduct4Brunch = $this->productModel->getProductById($carbBrunch5day[4]);
if(empty($getProduct0Brunch->use_id)){
    if(empty($getProduct1Brunch->use_id) && !empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id) && !empty($getProduct4Brunch->use_id)){
        
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3 +$carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)&& empty($getProduct4Brunch->use_id)){         
      
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 /5;
        
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){                      
       
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus = $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
    
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id)){  
        if(!empty($getProduct3Brunch->use_id)){
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                       
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;                
        $minus =  $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
        }else{
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                       
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;                
        $minus =  $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
        }   

    }elseif(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id)){     
        
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){   
        if(!empty($getProduct1Brunch->use_id)){ 
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;
        }else{
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;
        }    

    }elseif(empty($getProduct3Brunch->use_id)){   
        if(!empty($getProduct2Brunch->use_id)){
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
        }else{
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
        }
    }elseif(empty($getProduct4Brunch->use_id)){   
         
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                       
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
       
    }else{
      
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1Brunch->use_id)){
      if(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id) && !empty($getProduct4Brunch->use_id)){
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct3Brunch->use_id) ){   
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $minus =  $carbsperservingBrunch0;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;    
         

    }elseif(empty($getProduct4Brunch->use_id) ){
        if(!empty($getProduct3Brunch->use_id)){
           
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;    
        }                 
       
    }else{
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
    }
 
}elseif(empty($getProduct2Brunch->use_id)){
     if(empty($getProduct3Brunch->use_id)){   
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 ;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
       
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                     
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                     
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                     
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3Brunch->use_id)){
    if(empty($getProduct4Brunch->use_id)){
       
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
      
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }

}else{ 
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id; 
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id; 
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  


}
break;

}



switch (count($carbBrunch6day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($carbBrunch6day)){
    $getProduct0Brunch = $this->productModel->getProductById($carbBrunch6day[0]);
    $carbsperservingUseEmptyBrunch = $caloriesperserving /100 * 60 /4; 
    $carbsperservingBrunch = $caloriesperserving /100  * 60 /4;
    }
break;

case 2:
    $getProduct0Brunch = $this->productModel->getProductById($carbBrunch6day[0]);
    $getProduct1Brunch = $this->productModel->getProductById($carbBrunch6day[1]);
if(!empty($getProduct0Brunch->use_id)){     
    $carbsperservingBrunch = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct0Brunch->use_id;
    $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus; 
}elseif(!empty($getProduct1Brunch->use_id)){   
    // One with out use_id and one with use_is  
    $carbsperservingBrunch = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct1Brunch->use_id;
    $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus; 
   
}elseif(empty($getProduct1Brunch->use_id)){
    // Two products with out use_id
    $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4/2;
}
break;

case 3:
$getProduct0Brunch = $this->productModel->getProductById($carbBrunch6day[0]);
$getProduct1Brunch = $this->productModel->getProductById($carbBrunch6day[1]);
$getProduct2Brunch = $this->productModel->getProductById($carbBrunch6day[2]);
if(!empty($getProduct0Brunch->use_id)){
    if(!empty($getProduct0Brunch->use_id) && !empty($getProduct1Brunch->use_id)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $minus =  $carbsperservingBrunch0 +$carbsperservingBrunch1;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;
    }elseif(!empty($getProduct0Brunch->use_id) && !empty($getProduct2Brunch->use_id)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch0 +$carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;     
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;

    }elseif(!empty($getProduct0Brunch)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $minus =  $carbsperservingBrunch0;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;         
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;

}elseif(empty($getProduct0Brunch->use_id)){
    if(!empty($getProduct1Brunch->use_id) && !empty($getProduct2Brunch->use_id)){    
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus = $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }elseif(!empty($getProduct1Brunch->use_id)){  
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $minus =  $carbsperservingBrunch1;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;            
    }elseif(!empty($getProduct2Brunch->use_id)){  
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    
    }elseif(empty($getProduct1Brunch->use_id)){  
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
    }
 }

}else{
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 /3;
}
break;

case 4:
$getProduct0Brunch = $this->productModel->getProductById($carbBrunch6day[0]);
$getProduct1Brunch = $this->productModel->getProductById($carbBrunch6day[1]);
$getProduct2Brunch = $this->productModel->getProductById($carbBrunch6day[2]);
$getProduct3Brunch = $this->productModel->getProductById($carbBrunch6day[3]);
if(empty($getProduct0Brunch->use_id)){
    if(empty($getProduct1Brunch->use_id) && !empty($getProduct2Brunch->use_id)){
       
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
           
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){ 
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
   
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id)){                       
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id)){                     
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){                        
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;

    }elseif(empty($getProduct3Brunch->use_id)){                     
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1Brunch->use_id)){
      if(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id)){
                    
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){ 
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  

    }elseif(!empty($getProduct2Brunch->use_id)){ 
                   
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;                             
    }
 
}elseif(empty($getProduct2Brunch->use_id)){
     if(empty($getProduct3Brunch->use_id)){                         
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 ;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                     
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3Brunch->use_id)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 20 /4 - $minus);
        $carbsperservingBrunch = $caloriesperserving /100 * 20 /4;   
}else{
        $carbsperservingBrunch = $caloriesperserving /100 * 20 /4;   
}

break;

case 5:
$getProduct0Brunch = $this->productModel->getProductById($carbBrunch6day[0]);
$getProduct1Brunch = $this->productModel->getProductById($carbBrunch6day[1]);
$getProduct2Brunch = $this->productModel->getProductById($carbBrunch6day[2]);
$getProduct3Brunch = $this->productModel->getProductById($carbBrunch6day[3]);
$getProduct4Brunch = $this->productModel->getProductById($carbBrunch6day[4]);
if(empty($getProduct0Brunch->use_id)){
    if(empty($getProduct1Brunch->use_id) && !empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id) && !empty($getProduct4Brunch->use_id)){
        
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3 +$carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)&& empty($getProduct4Brunch->use_id)){         
      
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 /5;
        
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){                      
       
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus = $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
    
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id)){  
        if(!empty($getProduct3Brunch->use_id)){
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                       
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;                
        $minus =  $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
        }else{
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                       
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;                
        $minus =  $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
        }   

    }elseif(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id)){     
        
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){   
        if(!empty($getProduct1Brunch->use_id)){ 
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;
        }else{
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;
        }    

    }elseif(empty($getProduct3Brunch->use_id)){   
        if(!empty($getProduct2Brunch->use_id)){
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
        }else{
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
        }
    }elseif(empty($getProduct4Brunch->use_id)){   
         
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                       
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
       
    }else{
      
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1Brunch->use_id)){
      if(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id) && !empty($getProduct4Brunch->use_id)){
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct3Brunch->use_id) ){   
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $minus =  $carbsperservingBrunch0;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;    
         

    }elseif(empty($getProduct4Brunch->use_id) ){
        if(!empty($getProduct3Brunch->use_id)){
           
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;    
        }                 
       
    }else{
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
    }
 
}elseif(empty($getProduct2Brunch->use_id)){
     if(empty($getProduct3Brunch->use_id)){   
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 ;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
       
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                     
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                     
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                     
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3Brunch->use_id)){
    if(empty($getProduct4Brunch->use_id)){
       
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
      
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }

}else{ 
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id; 
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id; 
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  


}
break;

}



switch (count($carbBrunch7day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($carbBrunch7day)){
    $getProduct0Brunch = $this->productModel->getProductById($carbBrunch7day[0]);
    $carbsperservingUseEmptyBrunch = $caloriesperserving /100 * 60 /4; 
    $carbsperservingBrunch = $caloriesperserving /100  * 60 /4;
    }
break;

case 2:
    $getProduct0Brunch = $this->productModel->getProductById($carbBrunch7day[0]);
    $getProduct1Brunch = $this->productModel->getProductById($carbBrunch7day[1]);
if(!empty($getProduct0Brunch->use_id)){     
    $carbsperservingBrunch = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct0Brunch->use_id;
    $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus; 
}elseif(!empty($getProduct1Brunch->use_id)){   
    // One with out use_id and one with use_is  
    $carbsperservingBrunch = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct1Brunch->use_id;
    $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus; 
   
}elseif(empty($getProduct1Brunch->use_id)){
    // Two products with out use_id
    $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4/2;
}
break;

case 3:
$getProduct0Brunch = $this->productModel->getProductById($carbBrunch7day[0]);
$getProduct1Brunch = $this->productModel->getProductById($carbBrunch7day[1]);
$getProduct2Brunch = $this->productModel->getProductById($carbBrunch7day[2]);
if(!empty($getProduct0Brunch->use_id)){
    if(!empty($getProduct0Brunch->use_id) && !empty($getProduct1Brunch->use_id)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $minus =  $carbsperservingBrunch0 +$carbsperservingBrunch1;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;
    }elseif(!empty($getProduct0Brunch->use_id) && !empty($getProduct2Brunch->use_id)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch0 +$carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;     
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;

    }elseif(!empty($getProduct0Brunch)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $minus =  $carbsperservingBrunch0;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;         
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;

}elseif(empty($getProduct0Brunch->use_id)){
    if(!empty($getProduct1Brunch->use_id) && !empty($getProduct2Brunch->use_id)){    
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus = $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }elseif(!empty($getProduct1Brunch->use_id)){  
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $minus =  $carbsperservingBrunch1;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;            
    }elseif(!empty($getProduct2Brunch->use_id)){  
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    
    }elseif(empty($getProduct1Brunch->use_id)){  
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
    }
 }

}else{
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 /3;
}
break;

case 4:
$getProduct0Brunch = $this->productModel->getProductById($carbBrunch7day[0]);
$getProduct1Brunch = $this->productModel->getProductById($carbBrunch7day[1]);
$getProduct2Brunch = $this->productModel->getProductById($carbBrunch7day[2]);
$getProduct3Brunch = $this->productModel->getProductById($carbBrunch7day[3]);
if(empty($getProduct0Brunch->use_id)){
    if(empty($getProduct1Brunch->use_id) && !empty($getProduct2Brunch->use_id)){
       
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
           
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){ 
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
   
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id)){                       
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id)){                     
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){                        
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;

    }elseif(empty($getProduct3Brunch->use_id)){                     
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1Brunch->use_id)){
      if(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id)){
                    
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){ 
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  

    }elseif(!empty($getProduct2Brunch->use_id)){ 
                   
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;                             
    }
 
}elseif(empty($getProduct2Brunch->use_id)){
     if(empty($getProduct3Brunch->use_id)){                         
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 ;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                     
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3Brunch->use_id)){
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 20 /4 - $minus);
        $carbsperservingBrunch = $caloriesperserving /100 * 20 /4;   
}else{
        $carbsperservingBrunch = $caloriesperserving /100 * 20 /4;   
}

break;

case 5:
$getProduct0Brunch = $this->productModel->getProductById($carbBrunch7day[0]);
$getProduct1Brunch = $this->productModel->getProductById($carbBrunch7day[1]);
$getProduct2Brunch = $this->productModel->getProductById($carbBrunch7day[2]);
$getProduct3Brunch = $this->productModel->getProductById($carbBrunch7day[3]);
$getProduct4Brunch = $this->productModel->getProductById($carbBrunch7day[4]);
if(empty($getProduct0Brunch->use_id)){
    if(empty($getProduct1Brunch->use_id) && !empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id) && !empty($getProduct4Brunch->use_id)){
        
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3 +$carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)&& empty($getProduct4Brunch->use_id)){         
      
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 /5;
        
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){                      
       
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus = $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
    
    }elseif(empty($getProduct1Brunch->use_id) && empty($getProduct2Brunch->use_id)){  
        if(!empty($getProduct3Brunch->use_id)){
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                       
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;                
        $minus =  $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
        }else{
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                       
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;                
        $minus =  $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 
        }   

    }elseif(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id)){     
        
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2Brunch->use_id) && empty($getProduct3Brunch->use_id)){   
        if(!empty($getProduct1Brunch->use_id)){ 
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;
        }else{
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                      
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;
        }    

    }elseif(empty($getProduct3Brunch->use_id)){   
        if(!empty($getProduct2Brunch->use_id)){
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
        }else{
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
        }
    }elseif(empty($getProduct4Brunch->use_id)){   
         
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                       
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
       
    }else{
      
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1Brunch->use_id)){
      if(empty($getProduct2Brunch->use_id) && !empty($getProduct3Brunch->use_id) && !empty($getProduct4Brunch->use_id)){
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct3Brunch->use_id) ){   
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $minus =  $carbsperservingBrunch0;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/4;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;    
         

    }elseif(empty($getProduct4Brunch->use_id) ){
        if(!empty($getProduct3Brunch->use_id)){
           
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;    
        }                 
       
    }else{
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4Brunch->use_id;
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch2 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  
    }
 
}elseif(empty($getProduct2Brunch->use_id)){
     if(empty($getProduct3Brunch->use_id)){   
        
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 ;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/3;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
       
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;                     
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                     
        $carbsperservingBrunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id;                     
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch3 + $carbsperservingBrunch4;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3Brunch->use_id)){
    if(empty($getProduct4Brunch->use_id)){
       
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }else{
      
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id;               
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2;
        $carbsperservingUseEmptyBrunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;   
    }

}else{ 
        $carbsperservingBrunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0Brunch->use_id;
        $carbsperservingBrunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1Brunch->use_id;               
        $carbsperservingBrunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2Brunch->use_id; 
        $carbsperservingBrunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3Brunch->use_id; 
        $minus =  $carbsperservingBrunch0 + $carbsperservingBrunch1 + $carbsperservingBrunch2 + $carbsperservingBrunch3;
        $carbsperservingUseEmptyBrunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingBrunch = $caloriesperserving /100 * 60 /4;  


}
break;

}
