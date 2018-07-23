<?php 

switch (count($carbLunch)) {
    case 1:
    // One Product with out use_id or with use_id
    $getProduct0lunch = $this->productModel->getProductById($carbLunch[0]);
    $carbsperservingUseEmptylunch = $caloriesperserving /100 * 60 /4; 
    $carbsperservinglunch = $caloriesperserving /100  * 60 /4;
break;

case 2:
    $getProduct0lunch = $this->productModel->getProductById($carbLunch[0]);
    $getProduct1lunch = $this->productModel->getProductById($carbLunch[1]);
if(!empty($getProduct0lunch->use_id)){     
    $carbsperservinglunch = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct0lunch->use_id;
    $carbsperservingUseEmptylunch =  $caloriesperserving /100 * 60 /4 - $minus; 
}elseif(!empty($getProduct1lunch->use_id)){   
    // One with out use_id and one with use_is  
    $carbsperservinglunch = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct1lunch->use_id;
    $carbsperservingUseEmptylunch =  $caloriesperserving /100 * 60 /4 - $minus; 
   
}elseif(empty($getProduct1lunch->use_id)){
    // Two products with out use_id
    $carbsperservingUseEmptylunch =  $caloriesperserving /100 * 60 /4/2;
}
break;

case 3:
$getProduct0lunch = $this->productModel->getProductById($carbLunch[0]);
$getProduct1lunch = $this->productModel->getProductById($carbLunch[1]);
$getProduct2lunch = $this->productModel->getProductById($carbLunch[2]);
if(!empty($getProduct0lunch->use_id)){
    if(!empty($getProduct0lunch->use_id) && !empty($getProduct1lunch->use_id)){
        $carbsperservinglunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0lunch->use_id;
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;
        $minus =  $carbsperservinglunch0 +$carbsperservinglunch1;
        $carbsperservingUseEmptylunch =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;
    }elseif(!empty($getProduct0lunch->use_id) && !empty($getProduct2lunch->use_id)){
        $carbsperservinglunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0lunch->use_id;
        $carbsperservinglunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2lunch->use_id;
        $minus =  $carbsperservinglunch0 +$carbsperservinglunch2;
        $carbsperservingUseEmptylunch =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;

    }elseif(!empty($getProduct0lunch)){
        $carbsperservinglunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0lunch->use_id;
        $minus =  $carbsperservinglunch0;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;         
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;

}elseif(empty($getProduct0lunch->use_id)){
    if(!empty($getProduct1lunch->use_id) && !empty($getProduct2lunch->use_id)){    
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;
        $carbsperservinglunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2lunch->use_id;
        $minus = $carbsperservinglunch1 + $carbsperservinglunch2;
        $carbsperservingUseEmptylunch =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;   
    }elseif(!empty($getProduct1lunch->use_id)){  
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;
        $minus =  $carbsperservinglunch1;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;            
    }elseif(!empty($getProduct2lunch->use_id)){  
        $carbsperservinglunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2lunch->use_id;
        $minus =  $carbsperservinglunch2;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;   
    
    }elseif(empty($getProduct1lunch->use_id)){  
        $carbsperservingUseEmptylunch =  $caloriesperserving /100 * 60 /4 /3;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4; 
    }
 }

}else{
        $carbsperservingUseEmptylunch =  $caloriesperserving /100 * 60 /4 /3;
}
break;

case 4:
$getProduct0lunch = $this->productModel->getProductById($carbLunch[0]);
$getProduct1lunch = $this->productModel->getProductById($carbLunch[1]);
$getProduct2lunch = $this->productModel->getProductById($carbLunch[2]);
$getProduct3lunch = $this->productModel->getProductById($carbLunch[3]);
if(empty($getProduct0lunch->use_id)){
    if(empty($getProduct1lunch->use_id) && !empty($getProduct2lunch->use_id)){
       
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;
        $carbsperservinglunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2lunch->use_id;
        $carbsperservinglunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3lunch->use_id;
        $minus =  $carbsperservinglunch1 + $carbsperservinglunch2 + $carbsperservinglunch3;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;  
           
    }elseif(empty($getProduct1lunch->use_id) && empty($getProduct2lunch->use_id) && empty($getProduct3lunch->use_id)){ 
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;
        $carbsperservinglunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2lunch->use_id;
        $carbsperservinglunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3lunch->use_id;
        $minus =  $carbsperservinglunch1 + $carbsperservinglunch2 + $carbsperservinglunch3;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4; 
   
    }elseif(empty($getProduct1lunch->use_id) && empty($getProduct2lunch->use_id)){                       
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;
        $carbsperservinglunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2lunch->use_id;
        $carbsperservinglunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3lunch->use_id;
        $minus =  $carbsperservinglunch1 + $carbsperservinglunch2 + $carbsperservinglunch3;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2lunch->use_id) && !empty($getProduct3lunch->use_id)){                     
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;                      
        $carbsperservinglunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3lunch->use_id;
        $minus =  $carbsperservinglunch1 + $carbsperservinglunch3;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2lunch->use_id) && empty($getProduct3lunch->use_id)){                        
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;                      
        $carbsperservinglunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3lunch->use_id;
        $minus =  $carbsperservinglunch1 + $carbsperservinglunch3;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;

    }elseif(empty($getProduct3lunch->use_id)){                     
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;
        $carbsperservinglunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2lunch->use_id;
        $minus =  $carbsperservinglunch1 + $carbsperservinglunch2;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;
        $carbsperservinglunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2lunch->use_id;
        $carbsperservinglunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3lunch->use_id;
        $minus =  $carbsperservinglunch1 + $carbsperservinglunch2 + $carbsperservinglunch3;
        $carbsperservingUseEmptylunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1lunch->use_id)){
      if(empty($getProduct2lunch->use_id) && !empty($getProduct3lunch->use_id)){
                    
        $carbsperservinglunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0lunch->use_id;
        $carbsperservinglunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2lunch->use_id;
        $carbsperservinglunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3lunch->use_id;
        $minus =  $carbsperservinglunch0 + $carbsperservinglunch2 + $carbsperservinglunch3;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct2lunch->use_id) && empty($getProduct3lunch->use_id)){ 
        $carbsperservinglunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0lunch->use_id;
        $carbsperservinglunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2lunch->use_id;
        $carbsperservinglunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3lunch->use_id;
        $minus =  $carbsperservinglunch0 + $carbsperservinglunch2 + $carbsperservinglunch3;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;  

    }elseif(!empty($getProduct2lunch->use_id)){ 
                   
        $carbsperservinglunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0lunch->use_id;
        $carbsperservinglunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2lunch->use_id;
        $carbsperservinglunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3lunch->use_id;
        $minus =  $carbsperservinglunch0 + $carbsperservinglunch2 + $carbsperservinglunch3;
        $carbsperservingUseEmptylunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;   
    }else{
        
        $carbsperservinglunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0lunch->use_id;
        $carbsperservinglunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2lunch->use_id;
        $carbsperservinglunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3lunch->use_id;
        $minus =  $carbsperservinglunch0 + $carbsperservinglunch2;
        $carbsperservingUseEmptylunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;                             
    }
 
}elseif(empty($getProduct2lunch->use_id)){
     if(empty($getProduct3lunch->use_id)){                         
        $carbsperservinglunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0lunch->use_id;
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;               
        $minus =  $carbsperservinglunch0 + $carbsperservinglunch1 ;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservinglunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0lunch->use_id;
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;                     
        $minus =  $carbsperservinglunch0 + $carbsperservinglunch1;
        $carbsperservingUseEmptylunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3lunch->use_id)){
        $carbsperservinglunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0lunch->use_id;
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;               
        $carbsperservinglunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2lunch->use_id;               
        $minus =  $carbsperservinglunch0 + $carbsperservinglunch1 + $carbsperservinglunch2;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus);
        $carbsperservinglunch = $caloriesperserving /100 * 20 /4;   
}else{
        $carbsperservinglunch = $caloriesperserving /100 * 20 /4;   
}

break;

case 5:
$getProduct0lunch = $this->productModel->getProductById($carbLunch[0]);
$getProduct1lunch = $this->productModel->getProductById($carbLunch[1]);
$getProduct2lunch = $this->productModel->getProductById($carbLunch[2]);
$getProduct3lunch = $this->productModel->getProductById($carbLunch[3]);
$getProduct4lunch = $this->productModel->getProductById($carbLunch[4]);
if(empty($getProduct0lunch->use_id)){
    if(empty($getProduct1lunch->use_id) && !empty($getProduct2lunch->use_id) && !empty($getProduct3lunch->use_id) && !empty($getProduct4lunch->use_id)){
        
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;
        $carbsperservinglunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2lunch->use_id;
        $carbsperservinglunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3lunch->use_id;
        $carbsperservinglunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4lunch->use_id;
        $minus =  $carbsperservinglunch1 + $carbsperservinglunch2 + $carbsperservinglunch3 +$carbsperservinglunch4;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct1lunch->use_id) && empty($getProduct2lunch->use_id) && empty($getProduct3lunch->use_id)&& empty($getProduct4lunch->use_id)){         
      
        $carbsperservingUseEmptylunch =  $caloriesperserving /100 * 60 /4 /5;
        
    }elseif(empty($getProduct1lunch->use_id) && empty($getProduct2lunch->use_id) && empty($getProduct3lunch->use_id)){                      
       
        $carbsperservinglunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4lunch->use_id;
        $minus = $carbsperservinglunch4;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4; 
    
    }elseif(empty($getProduct1lunch->use_id) && empty($getProduct2lunch->use_id)){  
        if(!empty($getProduct3lunch->use_id)){
        $carbsperservinglunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3lunch->use_id;                       
        $carbsperservinglunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4lunch->use_id;                
        $minus =  $carbsperservinglunch3 + $carbsperservinglunch4;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4; 
        }else{
        $carbsperservinglunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3lunch->use_id;                       
        $carbsperservinglunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4lunch->use_id;                
        $minus =  $carbsperservinglunch3 + $carbsperservinglunch4;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4; 
        }   

    }elseif(empty($getProduct2lunch->use_id) && !empty($getProduct3lunch->use_id)){     
        
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;                      
        $carbsperservinglunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3lunch->use_id;
        $minus =  $carbsperservinglunch1 + $carbsperservinglunch3;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2lunch->use_id) && empty($getProduct3lunch->use_id)){   
        if(!empty($getProduct1lunch->use_id)){ 
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;                      
        $carbsperservinglunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3lunch->use_id;
        $minus =  $carbsperservinglunch1 + $carbsperservinglunch3;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;
        }else{
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;                      
        $carbsperservinglunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3lunch->use_id;
        $minus =  $carbsperservinglunch1 + $carbsperservinglunch3;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;
        }    

    }elseif(empty($getProduct3lunch->use_id)){   
        if(!empty($getProduct2lunch->use_id)){
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;
        $carbsperservinglunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2lunch->use_id;
        $minus =  $carbsperservinglunch1 + $carbsperservinglunch2;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;   
        }else{
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;
        $carbsperservinglunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2lunch->use_id;
        $minus =  $carbsperservinglunch1 + $carbsperservinglunch2;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;   
        }
    }elseif(empty($getProduct4lunch->use_id)){   
         
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;
        $carbsperservinglunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2lunch->use_id;
        $carbsperservinglunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3lunch->use_id;                       
        $minus =  $carbsperservinglunch1 + $carbsperservinglunch2 + $carbsperservinglunch3;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;  
       
    }else{
      
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;
        $carbsperservinglunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2lunch->use_id;
        $carbsperservinglunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3lunch->use_id;
        $carbsperservinglunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4lunch->use_id;
        $minus =  $carbsperservinglunch1 + $carbsperservinglunch2 + $carbsperservinglunch3 + $carbsperservinglunch4;
        $carbsperservingUseEmptylunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1lunch->use_id)){
      if(empty($getProduct2lunch->use_id) && !empty($getProduct3lunch->use_id) && !empty($getProduct4lunch->use_id)){
        
        $carbsperservinglunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0lunch->use_id;
        $carbsperservinglunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3lunch->use_id;
        $carbsperservinglunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4lunch->use_id;
        $minus =  $carbsperservinglunch0 + $carbsperservinglunch3 + $carbsperservinglunch4;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct3lunch->use_id) ){   
        
        $carbsperservinglunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0lunch->use_id;
        $minus =  $carbsperservinglunch0;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus)/4;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;    
         

    }elseif(empty($getProduct4lunch->use_id) ){
        if(!empty($getProduct3lunch->use_id)){
           
        $carbsperservinglunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0lunch->use_id;
        $carbsperservinglunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2lunch->use_id;
        $carbsperservinglunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3lunch->use_id;
        $minus =  $carbsperservinglunch0 + $carbsperservinglunch2 + $carbsperservinglunch3;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;    
        }                 
       
    }else{
        
        $carbsperservinglunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0lunch->use_id;
        $carbsperservinglunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2lunch->use_id;
        $carbsperservinglunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3lunch->use_id;
        $carbsperservinglunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4lunch->use_id;
        $minus =  $carbsperservinglunch0 + $carbsperservinglunch2 + $carbsperservinglunch3 + $carbsperservinglunch4;
        $carbsperservingUseEmptylunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;  
    }
 
}elseif(empty($getProduct2lunch->use_id)){
     if(empty($getProduct3lunch->use_id)){   
        
        $carbsperservinglunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0lunch->use_id;
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;               
        $minus =  $carbsperservinglunch0 + $carbsperservinglunch1 ;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus)/3;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;   
    }else{
       
        $carbsperservinglunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0lunch->use_id;
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;                     
        $carbsperservinglunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3lunch->use_id;                     
        $carbsperservinglunch4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3lunch->use_id;                     
        $minus =  $carbsperservinglunch0 + $carbsperservinglunch1 + $carbsperservinglunch3 + $carbsperservinglunch4;
        $carbsperservingUseEmptylunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3lunch->use_id)){
    if(empty($getProduct4lunch->use_id)){
       
        $carbsperservinglunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0lunch->use_id;
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;               
        $carbsperservinglunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2lunch->use_id;               
        $minus =  $carbsperservinglunch0 + $carbsperservinglunch1 + $carbsperservinglunch2;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;   
    }else{
      
        $carbsperservinglunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0lunch->use_id;
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;               
        $carbsperservinglunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2lunch->use_id;               
        $minus =  $carbsperservinglunch0 + $carbsperservinglunch1 + $carbsperservinglunch2;
        $carbsperservingUseEmptylunch =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;   
    }

}else{ 
        $carbsperservinglunch0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0lunch->use_id;
        $carbsperservinglunch1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1lunch->use_id;               
        $carbsperservinglunch2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2lunch->use_id; 
        $carbsperservinglunch3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3lunch->use_id; 
        $minus =  $carbsperservinglunch0 + $carbsperservinglunch1 + $carbsperservinglunch2 + $carbsperservinglunch3;
        $carbsperservingUseEmptylunch =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservinglunch = $caloriesperserving /100 * 60 /4;  


}
break;

}
