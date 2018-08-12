<?php 

switch (count($fatBrunch)) {
    case 1:
    // One Product with out use_id or with use_id
    $getPro0brunch = $this->productModel->getProductById($fatBrunch[0]);
    $fatsperservingUseEmptybrunch = $caloriesperserving /100 * 20 /9; 
    $fatsperservingbrunch = $caloriesperserving /100  * 20 /9;
break;

case 2:
    $getPro0brunch = $this->productModel->getProductById($fatBrunch[0]);
    $getPro1brunch = $this->productModel->getProductById($fatBrunch[1]);
if(!empty($getPro0brunch->use_id)){    
    $fatsperservingbrunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0brunch->use_id;
    $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1brunch->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservingbrunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1brunch->use_id;
    $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1brunch->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0brunch = $this->productModel->getProductById($fatBrunch[0]);
$getPro1brunch = $this->productModel->getProductById($fatBrunch[1]);
$getPro2brunch = $this->productModel->getProductById($fatBrunch[2]);
if(!empty($getPro0brunch->use_id)){
    if(!empty($getPro0brunch->use_id) && !empty($getPro1brunch->use_id)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $minus =  $fatsperservingbrunch0 +$fatsperservingbrunch1;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0brunch->use_id) && !empty($getPro2brunch->use_id)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch0 +$fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0brunch)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $minus =  $fatsperservingbrunch0;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0brunch->use_id)){
    if(!empty($getPro1brunch->use_id) && !empty($getPro2brunch->use_id)){    
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus = $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1brunch->use_id)){  
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $minus =  $fatsperservingbrunch1;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2brunch->use_id)){  
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1brunch->use_id)){  
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0brunch = $this->productModel->getProductById($fatBrunch[0]);
$getPro1brunch = $this->productModel->getProductById($fatBrunch[1]);
$getPro2brunch = $this->productModel->getProductById($fatBrunch[2]);
$getPro3brunch = $this->productModel->getProductById($fatBrunch[3]);
if(empty($getPro0brunch->use_id)){
    if(empty($getPro1brunch->use_id) && !empty($getPro2brunch->use_id)){
       
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){ 
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id)){                       
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id)){                     
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){                        
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3brunch->use_id)){                     
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1brunch->use_id)){
      if(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id)){
                    
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){ 
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2brunch->use_id)){ 
                   
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2brunch->use_id)){
     if(empty($getPro3brunch->use_id)){                         
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 ;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                     
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3brunch->use_id)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0brunch = $this->productModel->getProductById($fatBrunch[0]);
$getPro1brunch = $this->productModel->getProductById($fatBrunch[1]);
$getPro2brunch = $this->productModel->getProductById($fatBrunch[2]);
$getPro3brunch = $this->productModel->getProductById($fatBrunch[3]);
$getPro4brunch = $this->productModel->getProductById($fatBrunch[4]);
if(empty($getPro0brunch->use_id)){
    if(empty($getPro1brunch->use_id) && !empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id) && !empty($getPro4brunch->use_id)){
        
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3 +$fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)&& empty($getPro4brunch->use_id)){         
      
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){                      
       
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus = $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id)){  
        if(!empty($getPro3brunch->use_id)){
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                       
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;                
        $minus =  $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                       
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;                
        $minus =  $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id)){     
        
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){   
        if(!empty($getPro1brunch->use_id)){ 
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3brunch->use_id)){   
        if(!empty($getPro2brunch->use_id)){
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4brunch->use_id)){   
         
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                       
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1brunch->use_id)){
      if(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id) && !empty($getPro4brunch->use_id)){
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3brunch->use_id) ){   
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $minus =  $fatsperservingbrunch0;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4brunch->use_id) ){
        if(!empty($getPro3brunch->use_id)){
           
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2brunch->use_id)){
     if(empty($getPro3brunch->use_id)){   
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 ;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                     
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                     
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                     
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3brunch->use_id)){
    if(empty($getPro4brunch->use_id)){
       
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id; 
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id; 
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  


}
break;

}



switch (count($fatBrunch2day)) {
    case 1:
    // One Product with out use_id or with use_id
    $getPro0brunch = $this->productModel->getProductById($fatBrunch2day[0]);
    $fatsperservingUseEmptybrunch = $caloriesperserving /100 * 20 /9; 
    $fatsperservingbrunch = $caloriesperserving /100  * 20 /9;
break;

case 2:
    $getPro0brunch = $this->productModel->getProductById($fatBrunch2day[0]);
    $getPro1brunch = $this->productModel->getProductById($fatBrunch2day[1]);
if(!empty($getPro0brunch->use_id)){    
    $fatsperservingbrunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0brunch->use_id;
    $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1brunch->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservingbrunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1brunch->use_id;
    $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1brunch->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0brunch = $this->productModel->getProductById($fatBrunch2day[0]);
$getPro1brunch = $this->productModel->getProductById($fatBrunch2day[1]);
$getPro2brunch = $this->productModel->getProductById($fatBrunch2day[2]);
if(!empty($getPro0brunch->use_id)){
    if(!empty($getPro0brunch->use_id) && !empty($getPro1brunch->use_id)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $minus =  $fatsperservingbrunch0 +$fatsperservingbrunch1;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0brunch->use_id) && !empty($getPro2brunch->use_id)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch0 +$fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0brunch)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $minus =  $fatsperservingbrunch0;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0brunch->use_id)){
    if(!empty($getPro1brunch->use_id) && !empty($getPro2brunch->use_id)){    
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus = $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1brunch->use_id)){  
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $minus =  $fatsperservingbrunch1;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2brunch->use_id)){  
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1brunch->use_id)){  
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0brunch = $this->productModel->getProductById($fatBrunch2day[0]);
$getPro1brunch = $this->productModel->getProductById($fatBrunch2day[1]);
$getPro2brunch = $this->productModel->getProductById($fatBrunch2day[2]);
$getPro3brunch = $this->productModel->getProductById($fatBrunch2day[3]);
if(empty($getPro0brunch->use_id)){
    if(empty($getPro1brunch->use_id) && !empty($getPro2brunch->use_id)){
       
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){ 
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id)){                       
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id)){                     
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){                        
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3brunch->use_id)){                     
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1brunch->use_id)){
      if(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id)){
                    
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){ 
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2brunch->use_id)){ 
                   
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2brunch->use_id)){
     if(empty($getPro3brunch->use_id)){                         
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 ;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                     
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3brunch->use_id)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0brunch = $this->productModel->getProductById($fatBrunch2day[0]);
$getPro1brunch = $this->productModel->getProductById($fatBrunch2day[1]);
$getPro2brunch = $this->productModel->getProductById($fatBrunch2day[2]);
$getPro3brunch = $this->productModel->getProductById($fatBrunch2day[3]);
$getPro4brunch = $this->productModel->getProductById($fatBrunch2day[4]);
if(empty($getPro0brunch->use_id)){
    if(empty($getPro1brunch->use_id) && !empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id) && !empty($getPro4brunch->use_id)){
        
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3 +$fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)&& empty($getPro4brunch->use_id)){         
      
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){                      
       
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus = $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id)){  
        if(!empty($getPro3brunch->use_id)){
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                       
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;                
        $minus =  $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                       
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;                
        $minus =  $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id)){     
        
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){   
        if(!empty($getPro1brunch->use_id)){ 
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3brunch->use_id)){   
        if(!empty($getPro2brunch->use_id)){
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4brunch->use_id)){   
         
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                       
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1brunch->use_id)){
      if(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id) && !empty($getPro4brunch->use_id)){
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3brunch->use_id) ){   
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $minus =  $fatsperservingbrunch0;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4brunch->use_id) ){
        if(!empty($getPro3brunch->use_id)){
           
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2brunch->use_id)){
     if(empty($getPro3brunch->use_id)){   
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 ;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                     
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                     
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                     
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3brunch->use_id)){
    if(empty($getPro4brunch->use_id)){
       
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id; 
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id; 
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  


}
break;

}



switch (count($fatBrunch3day)) {
    case 1:
    // One Product with out use_id or with use_id
    $getPro0brunch = $this->productModel->getProductById($fatBrunch3day[0]);
    $fatsperservingUseEmptybrunch = $caloriesperserving /100 * 20 /9; 
    $fatsperservingbrunch = $caloriesperserving /100  * 20 /9;
break;

case 2:
    $getPro0brunch = $this->productModel->getProductById($fatBrunch3day[0]);
    $getPro1brunch = $this->productModel->getProductById($fatBrunch3day[1]);
if(!empty($getPro0brunch->use_id)){    
    $fatsperservingbrunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0brunch->use_id;
    $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1brunch->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservingbrunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1brunch->use_id;
    $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1brunch->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0brunch = $this->productModel->getProductById($fatBrunch3day[0]);
$getPro1brunch = $this->productModel->getProductById($fatBrunch3day[1]);
$getPro2brunch = $this->productModel->getProductById($fatBrunch3day[2]);
if(!empty($getPro0brunch->use_id)){
    if(!empty($getPro0brunch->use_id) && !empty($getPro1brunch->use_id)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $minus =  $fatsperservingbrunch0 +$fatsperservingbrunch1;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0brunch->use_id) && !empty($getPro2brunch->use_id)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch0 +$fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0brunch)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $minus =  $fatsperservingbrunch0;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0brunch->use_id)){
    if(!empty($getPro1brunch->use_id) && !empty($getPro2brunch->use_id)){    
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus = $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1brunch->use_id)){  
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $minus =  $fatsperservingbrunch1;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2brunch->use_id)){  
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1brunch->use_id)){  
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0brunch = $this->productModel->getProductById($fatBrunch3day[0]);
$getPro1brunch = $this->productModel->getProductById($fatBrunch3day[1]);
$getPro2brunch = $this->productModel->getProductById($fatBrunch3day[2]);
$getPro3brunch = $this->productModel->getProductById($fatBrunch3day[3]);
if(empty($getPro0brunch->use_id)){
    if(empty($getPro1brunch->use_id) && !empty($getPro2brunch->use_id)){
       
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){ 
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id)){                       
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id)){                     
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){                        
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3brunch->use_id)){                     
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1brunch->use_id)){
      if(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id)){
                    
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){ 
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2brunch->use_id)){ 
                   
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2brunch->use_id)){
     if(empty($getPro3brunch->use_id)){                         
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 ;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                     
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3brunch->use_id)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0brunch = $this->productModel->getProductById($fatBrunch3day[0]);
$getPro1brunch = $this->productModel->getProductById($fatBrunch3day[1]);
$getPro2brunch = $this->productModel->getProductById($fatBrunch3day[2]);
$getPro3brunch = $this->productModel->getProductById($fatBrunch3day[3]);
$getPro4brunch = $this->productModel->getProductById($fatBrunch3day[4]);
if(empty($getPro0brunch->use_id)){
    if(empty($getPro1brunch->use_id) && !empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id) && !empty($getPro4brunch->use_id)){
        
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3 +$fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)&& empty($getPro4brunch->use_id)){         
      
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){                      
       
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus = $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id)){  
        if(!empty($getPro3brunch->use_id)){
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                       
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;                
        $minus =  $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                       
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;                
        $minus =  $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id)){     
        
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){   
        if(!empty($getPro1brunch->use_id)){ 
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3brunch->use_id)){   
        if(!empty($getPro2brunch->use_id)){
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4brunch->use_id)){   
         
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                       
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1brunch->use_id)){
      if(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id) && !empty($getPro4brunch->use_id)){
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3brunch->use_id) ){   
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $minus =  $fatsperservingbrunch0;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4brunch->use_id) ){
        if(!empty($getPro3brunch->use_id)){
           
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2brunch->use_id)){
     if(empty($getPro3brunch->use_id)){   
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 ;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                     
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                     
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                     
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3brunch->use_id)){
    if(empty($getPro4brunch->use_id)){
       
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id; 
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id; 
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  


}
break;

}


switch (count($fatBrunch4day)) {
    case 1:
    // One Product with out use_id or with use_id
    $getPro0brunch = $this->productModel->getProductById($fatBrunch4day[0]);
    $fatsperservingUseEmptybrunch = $caloriesperserving /100 * 20 /9; 
    $fatsperservingbrunch = $caloriesperserving /100  * 20 /9;
break;

case 2:
    $getPro0brunch = $this->productModel->getProductById($fatBrunch4day[0]);
    $getPro1brunch = $this->productModel->getProductById($fatBrunch4day[1]);
if(!empty($getPro0brunch->use_id)){    
    $fatsperservingbrunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0brunch->use_id;
    $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1brunch->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservingbrunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1brunch->use_id;
    $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1brunch->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0brunch = $this->productModel->getProductById($fatBrunch4day[0]);
$getPro1brunch = $this->productModel->getProductById($fatBrunch4day[1]);
$getPro2brunch = $this->productModel->getProductById($fatBrunch4day[2]);
if(!empty($getPro0brunch->use_id)){
    if(!empty($getPro0brunch->use_id) && !empty($getPro1brunch->use_id)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $minus =  $fatsperservingbrunch0 +$fatsperservingbrunch1;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0brunch->use_id) && !empty($getPro2brunch->use_id)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch0 +$fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0brunch)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $minus =  $fatsperservingbrunch0;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0brunch->use_id)){
    if(!empty($getPro1brunch->use_id) && !empty($getPro2brunch->use_id)){    
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus = $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1brunch->use_id)){  
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $minus =  $fatsperservingbrunch1;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2brunch->use_id)){  
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1brunch->use_id)){  
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0brunch = $this->productModel->getProductById($fatBrunch4day[0]);
$getPro1brunch = $this->productModel->getProductById($fatBrunch4day[1]);
$getPro2brunch = $this->productModel->getProductById($fatBrunch4day[2]);
$getPro3brunch = $this->productModel->getProductById($fatBrunch4day[3]);
if(empty($getPro0brunch->use_id)){
    if(empty($getPro1brunch->use_id) && !empty($getPro2brunch->use_id)){
       
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){ 
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id)){                       
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id)){                     
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){                        
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3brunch->use_id)){                     
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1brunch->use_id)){
      if(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id)){
                    
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){ 
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2brunch->use_id)){ 
                   
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2brunch->use_id)){
     if(empty($getPro3brunch->use_id)){                         
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 ;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                     
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3brunch->use_id)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0brunch = $this->productModel->getProductById($fatBrunch4day[0]);
$getPro1brunch = $this->productModel->getProductById($fatBrunch4day[1]);
$getPro2brunch = $this->productModel->getProductById($fatBrunch4day[2]);
$getPro3brunch = $this->productModel->getProductById($fatBrunch4day[3]);
$getPro4brunch = $this->productModel->getProductById($fatBrunch4day[4]);
if(empty($getPro0brunch->use_id)){
    if(empty($getPro1brunch->use_id) && !empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id) && !empty($getPro4brunch->use_id)){
        
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3 +$fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)&& empty($getPro4brunch->use_id)){         
      
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){                      
       
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus = $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id)){  
        if(!empty($getPro3brunch->use_id)){
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                       
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;                
        $minus =  $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                       
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;                
        $minus =  $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id)){     
        
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){   
        if(!empty($getPro1brunch->use_id)){ 
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3brunch->use_id)){   
        if(!empty($getPro2brunch->use_id)){
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4brunch->use_id)){   
         
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                       
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1brunch->use_id)){
      if(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id) && !empty($getPro4brunch->use_id)){
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3brunch->use_id) ){   
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $minus =  $fatsperservingbrunch0;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4brunch->use_id) ){
        if(!empty($getPro3brunch->use_id)){
           
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2brunch->use_id)){
     if(empty($getPro3brunch->use_id)){   
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 ;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                     
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                     
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                     
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3brunch->use_id)){
    if(empty($getPro4brunch->use_id)){
       
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id; 
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id; 
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  


}
break;

}



switch (count($fatBrunch5day)) {
    case 1:
    // One Product with out use_id or with use_id
    $getPro0brunch = $this->productModel->getProductById($fatBrunch5day[0]);
    $fatsperservingUseEmptybrunch = $caloriesperserving /100 * 20 /9; 
    $fatsperservingbrunch = $caloriesperserving /100  * 20 /9;
break;

case 2:
    $getPro0brunch = $this->productModel->getProductById($fatBrunch5day[0]);
    $getPro1brunch = $this->productModel->getProductById($fatBrunch5day[1]);
if(!empty($getPro0brunch->use_id)){    
    $fatsperservingbrunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0brunch->use_id;
    $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1brunch->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservingbrunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1brunch->use_id;
    $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1brunch->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0brunch = $this->productModel->getProductById($fatBrunch5day[0]);
$getPro1brunch = $this->productModel->getProductById($fatBrunch5day[1]);
$getPro2brunch = $this->productModel->getProductById($fatBrunch5day[2]);
if(!empty($getPro0brunch->use_id)){
    if(!empty($getPro0brunch->use_id) && !empty($getPro1brunch->use_id)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $minus =  $fatsperservingbrunch0 +$fatsperservingbrunch1;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0brunch->use_id) && !empty($getPro2brunch->use_id)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch0 +$fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0brunch)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $minus =  $fatsperservingbrunch0;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0brunch->use_id)){
    if(!empty($getPro1brunch->use_id) && !empty($getPro2brunch->use_id)){    
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus = $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1brunch->use_id)){  
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $minus =  $fatsperservingbrunch1;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2brunch->use_id)){  
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1brunch->use_id)){  
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0brunch = $this->productModel->getProductById($fatBrunch5day[0]);
$getPro1brunch = $this->productModel->getProductById($fatBrunch5day[1]);
$getPro2brunch = $this->productModel->getProductById($fatBrunch5day[2]);
$getPro3brunch = $this->productModel->getProductById($fatBrunch5day[3]);
if(empty($getPro0brunch->use_id)){
    if(empty($getPro1brunch->use_id) && !empty($getPro2brunch->use_id)){
       
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){ 
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id)){                       
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id)){                     
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){                        
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3brunch->use_id)){                     
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1brunch->use_id)){
      if(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id)){
                    
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){ 
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2brunch->use_id)){ 
                   
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2brunch->use_id)){
     if(empty($getPro3brunch->use_id)){                         
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 ;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                     
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3brunch->use_id)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0brunch = $this->productModel->getProductById($fatBrunch5day[0]);
$getPro1brunch = $this->productModel->getProductById($fatBrunch5day[1]);
$getPro2brunch = $this->productModel->getProductById($fatBrunch5day[2]);
$getPro3brunch = $this->productModel->getProductById($fatBrunch5day[3]);
$getPro4brunch = $this->productModel->getProductById($fatBrunch5day[4]);
if(empty($getPro0brunch->use_id)){
    if(empty($getPro1brunch->use_id) && !empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id) && !empty($getPro4brunch->use_id)){
        
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3 +$fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)&& empty($getPro4brunch->use_id)){         
      
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){                      
       
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus = $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id)){  
        if(!empty($getPro3brunch->use_id)){
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                       
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;                
        $minus =  $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                       
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;                
        $minus =  $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id)){     
        
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){   
        if(!empty($getPro1brunch->use_id)){ 
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3brunch->use_id)){   
        if(!empty($getPro2brunch->use_id)){
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4brunch->use_id)){   
         
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                       
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1brunch->use_id)){
      if(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id) && !empty($getPro4brunch->use_id)){
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3brunch->use_id) ){   
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $minus =  $fatsperservingbrunch0;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4brunch->use_id) ){
        if(!empty($getPro3brunch->use_id)){
           
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2brunch->use_id)){
     if(empty($getPro3brunch->use_id)){   
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 ;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                     
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                     
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                     
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3brunch->use_id)){
    if(empty($getPro4brunch->use_id)){
       
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id; 
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id; 
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  


}
break;

}


switch (count($fatBrunch6day)) {
    case 1:
    // One Product with out use_id or with use_id
    $getPro0brunch = $this->productModel->getProductById($fatBrunch6day[0]);
    $fatsperservingUseEmptybrunch = $caloriesperserving /100 * 20 /9; 
    $fatsperservingbrunch = $caloriesperserving /100  * 20 /9;
break;

case 2:
    $getPro0brunch = $this->productModel->getProductById($fatBrunch6day[0]);
    $getPro1brunch = $this->productModel->getProductById($fatBrunch6day[1]);
if(!empty($getPro0brunch->use_id)){    
    $fatsperservingbrunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0brunch->use_id;
    $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1brunch->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservingbrunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1brunch->use_id;
    $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1brunch->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0brunch = $this->productModel->getProductById($fatBrunch6day[0]);
$getPro1brunch = $this->productModel->getProductById($fatBrunch6day[1]);
$getPro2brunch = $this->productModel->getProductById($fatBrunch6day[2]);
if(!empty($getPro0brunch->use_id)){
    if(!empty($getPro0brunch->use_id) && !empty($getPro1brunch->use_id)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $minus =  $fatsperservingbrunch0 +$fatsperservingbrunch1;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0brunch->use_id) && !empty($getPro2brunch->use_id)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch0 +$fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0brunch)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $minus =  $fatsperservingbrunch0;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0brunch->use_id)){
    if(!empty($getPro1brunch->use_id) && !empty($getPro2brunch->use_id)){    
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus = $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1brunch->use_id)){  
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $minus =  $fatsperservingbrunch1;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2brunch->use_id)){  
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1brunch->use_id)){  
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0brunch = $this->productModel->getProductById($fatBrunch6day[0]);
$getPro1brunch = $this->productModel->getProductById($fatBrunch6day[1]);
$getPro2brunch = $this->productModel->getProductById($fatBrunch6day[2]);
$getPro3brunch = $this->productModel->getProductById($fatBrunch6day[3]);
if(empty($getPro0brunch->use_id)){
    if(empty($getPro1brunch->use_id) && !empty($getPro2brunch->use_id)){
       
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){ 
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id)){                       
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id)){                     
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){                        
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3brunch->use_id)){                     
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1brunch->use_id)){
      if(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id)){
                    
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){ 
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2brunch->use_id)){ 
                   
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2brunch->use_id)){
     if(empty($getPro3brunch->use_id)){                         
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 ;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                     
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3brunch->use_id)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0brunch = $this->productModel->getProductById($fatBrunch6day[0]);
$getPro1brunch = $this->productModel->getProductById($fatBrunch6day[1]);
$getPro2brunch = $this->productModel->getProductById($fatBrunch6day[2]);
$getPro3brunch = $this->productModel->getProductById($fatBrunch6day[3]);
$getPro4brunch = $this->productModel->getProductById($fatBrunch6day[4]);
if(empty($getPro0brunch->use_id)){
    if(empty($getPro1brunch->use_id) && !empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id) && !empty($getPro4brunch->use_id)){
        
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3 +$fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)&& empty($getPro4brunch->use_id)){         
      
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){                      
       
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus = $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id)){  
        if(!empty($getPro3brunch->use_id)){
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                       
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;                
        $minus =  $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                       
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;                
        $minus =  $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id)){     
        
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){   
        if(!empty($getPro1brunch->use_id)){ 
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3brunch->use_id)){   
        if(!empty($getPro2brunch->use_id)){
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4brunch->use_id)){   
         
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                       
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1brunch->use_id)){
      if(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id) && !empty($getPro4brunch->use_id)){
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3brunch->use_id) ){   
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $minus =  $fatsperservingbrunch0;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4brunch->use_id) ){
        if(!empty($getPro3brunch->use_id)){
           
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2brunch->use_id)){
     if(empty($getPro3brunch->use_id)){   
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 ;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                     
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                     
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                     
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3brunch->use_id)){
    if(empty($getPro4brunch->use_id)){
       
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id; 
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id; 
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  


}
break;

}



switch (count($fatBrunch7day)) {
    case 1:
    // One Product with out use_id or with use_id
    $getPro0brunch = $this->productModel->getProductById($fatBrunch7day[0]);
    $fatsperservingUseEmptybrunch = $caloriesperserving /100 * 20 /9; 
    $fatsperservingbrunch = $caloriesperserving /100  * 20 /9;
break;

case 2:
    $getPro0brunch = $this->productModel->getProductById($fatBrunch7day[0]);
    $getPro1brunch = $this->productModel->getProductById($fatBrunch7day[1]);
if(!empty($getPro0brunch->use_id)){    
    $fatsperservingbrunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0brunch->use_id;
    $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1brunch->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservingbrunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1brunch->use_id;
    $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1brunch->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0brunch = $this->productModel->getProductById($fatBrunch7day[0]);
$getPro1brunch = $this->productModel->getProductById($fatBrunch7day[1]);
$getPro2brunch = $this->productModel->getProductById($fatBrunch7day[2]);
if(!empty($getPro0brunch->use_id)){
    if(!empty($getPro0brunch->use_id) && !empty($getPro1brunch->use_id)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $minus =  $fatsperservingbrunch0 +$fatsperservingbrunch1;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0brunch->use_id) && !empty($getPro2brunch->use_id)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch0 +$fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0brunch)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $minus =  $fatsperservingbrunch0;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0brunch->use_id)){
    if(!empty($getPro1brunch->use_id) && !empty($getPro2brunch->use_id)){    
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus = $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1brunch->use_id)){  
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $minus =  $fatsperservingbrunch1;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2brunch->use_id)){  
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1brunch->use_id)){  
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0brunch = $this->productModel->getProductById($fatBrunch7day[0]);
$getPro1brunch = $this->productModel->getProductById($fatBrunch7day[1]);
$getPro2brunch = $this->productModel->getProductById($fatBrunch7day[2]);
$getPro3brunch = $this->productModel->getProductById($fatBrunch7day[3]);
if(empty($getPro0brunch->use_id)){
    if(empty($getPro1brunch->use_id) && !empty($getPro2brunch->use_id)){
       
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){ 
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id)){                       
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id)){                     
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){                        
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3brunch->use_id)){                     
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1brunch->use_id)){
      if(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id)){
                    
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){ 
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2brunch->use_id)){ 
                   
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2brunch->use_id)){
     if(empty($getPro3brunch->use_id)){                         
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 ;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                     
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3brunch->use_id)){
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0brunch = $this->productModel->getProductById($fatBrunch7day[0]);
$getPro1brunch = $this->productModel->getProductById($fatBrunch7day[1]);
$getPro2brunch = $this->productModel->getProductById($fatBrunch7day[2]);
$getPro3brunch = $this->productModel->getProductById($fatBrunch7day[3]);
$getPro4brunch = $this->productModel->getProductById($fatBrunch7day[4]);
if(empty($getPro0brunch->use_id)){
    if(empty($getPro1brunch->use_id) && !empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id) && !empty($getPro4brunch->use_id)){
        
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3 +$fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)&& empty($getPro4brunch->use_id)){         
      
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){                      
       
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus = $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1brunch->use_id) && empty($getPro2brunch->use_id)){  
        if(!empty($getPro3brunch->use_id)){
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                       
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;                
        $minus =  $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                       
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;                
        $minus =  $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id)){     
        
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2brunch->use_id) && empty($getPro3brunch->use_id)){   
        if(!empty($getPro1brunch->use_id)){ 
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                      
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3brunch->use_id)){   
        if(!empty($getPro2brunch->use_id)){
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4brunch->use_id)){   
         
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                       
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1brunch->use_id)){
      if(empty($getPro2brunch->use_id) && !empty($getPro3brunch->use_id) && !empty($getPro4brunch->use_id)){
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3brunch->use_id) ){   
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $minus =  $fatsperservingbrunch0;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4brunch->use_id) ){
        if(!empty($getPro3brunch->use_id)){
           
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4brunch->use_id;
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch2 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2brunch->use_id)){
     if(empty($getPro3brunch->use_id)){   
        
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 ;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;                     
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                     
        $fatsperservingbrunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id;                     
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch3 + $fatsperservingbrunch4;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3brunch->use_id)){
    if(empty($getPro4brunch->use_id)){
       
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id;               
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2;
        $fatsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservingbrunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0brunch->use_id;
        $fatsperservingbrunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1brunch->use_id;               
        $fatsperservingbrunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2brunch->use_id; 
        $fatsperservingbrunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3brunch->use_id; 
        $minus =  $fatsperservingbrunch0 + $fatsperservingbrunch1 + $fatsperservingbrunch2 + $fatsperservingbrunch3;
        $fatsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingbrunch = $caloriesperserving /100 * 20 /9;  


}
break;

}
