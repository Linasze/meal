<?php 

switch (count($fatDinner)) {
    case 1:
    // One Product with out use_id or with use_id
    $getPro0dinner = $this->productModel->getProductById($fatDinner[0]);
    $fatsperservingUseEmptydinner = $caloriesperserving /100 * 20 /9; 
    $fatsperservingdinner = $caloriesperserving /100  * 20 /9;
break;

case 2:
    $getPro0dinner = $this->productModel->getProductById($fatDinner[0]);
    $getPro1dinner = $this->productModel->getProductById($fatDinner[1]);
if(!empty($getPro0dinner->use_id)){    
    $fatsperservingdinner = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0dinner->use_id;
    $fatsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1dinner->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservingdinner = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1dinner->use_id;
    $fatsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1dinner->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0dinner = $this->productModel->getProductById($fatDinner[0]);
$getPro1dinner = $this->productModel->getProductById($fatDinner[1]);
$getPro2dinner = $this->productModel->getProductById($fatDinner[2]);
if(!empty($getPro0dinner->use_id)){
    if(!empty($getPro0dinner->use_id) && !empty($getPro1dinner->use_id)){
        $fatsperservingdinner0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0dinner->use_id;
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;
        $minus =  $fatsperservingdinner0 +$fatsperservingdinner1;
        $fatsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0dinner->use_id) && !empty($getPro2dinner->use_id)){
        $fatsperservingdinner0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0dinner->use_id;
        $fatsperservingdinner2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2dinner->use_id;
        $minus =  $fatsperservingdinner0 +$fatsperservingdinner2;
        $fatsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0dinner)){
        $fatsperservingdinner0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0dinner->use_id;
        $minus =  $fatsperservingdinner0;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0dinner->use_id)){
    if(!empty($getPro1dinner->use_id) && !empty($getPro2dinner->use_id)){    
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;
        $fatsperservingdinner2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2dinner->use_id;
        $minus = $fatsperservingdinner1 + $fatsperservingdinner2;
        $fatsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1dinner->use_id)){  
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;
        $minus =  $fatsperservingdinner1;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2dinner->use_id)){  
        $fatsperservingdinner2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2dinner->use_id;
        $minus =  $fatsperservingdinner2;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1dinner->use_id)){  
        $fatsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0dinner = $this->productModel->getProductById($fatDinner[0]);
$getPro1dinner = $this->productModel->getProductById($fatDinner[1]);
$getPro2dinner = $this->productModel->getProductById($fatDinner[2]);
$getPro3dinner = $this->productModel->getProductById($fatDinner[3]);
if(empty($getPro0dinner->use_id)){
    if(empty($getPro1dinner->use_id) && !empty($getPro2dinner->use_id)){
       
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1dinner->use_id;
        $fatsperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2dinner->use_id;
        $fatsperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3dinner->use_id;
        $minus =  $fatsperservingdinner1 + $fatsperservingdinner2 + $fatsperservingdinner3;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1dinner->use_id) && empty($getPro2dinner->use_id) && empty($getPro3dinner->use_id)){ 
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;
        $fatsperservingdinner2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2dinner->use_id;
        $fatsperservingdinner3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3dinner->use_id;
        $minus =  $fatsperservingdinner1 + $fatsperservingdinner2 + $fatsperservingdinner3;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1dinner->use_id) && empty($getPro2dinner->use_id)){                       
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;
        $fatsperservingdinner2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2dinner->use_id;
        $fatsperservingdinner3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3dinner->use_id;
        $minus =  $fatsperservingdinner1 + $fatsperservingdinner2 + $fatsperservingdinner3;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2dinner->use_id) && !empty($getPro3dinner->use_id)){                     
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;                      
        $fatsperservingdinner3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3dinner->use_id;
        $minus =  $fatsperservingdinner1 + $fatsperservingdinner3;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2dinner->use_id) && empty($getPro3dinner->use_id)){                        
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;                      
        $fatsperservingdinner3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3dinner->use_id;
        $minus =  $fatsperservingdinner1 + $fatsperservingdinner3;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3dinner->use_id)){                     
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;
        $fatsperservingdinner2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2dinner->use_id;
        $minus =  $fatsperservingdinner1 + $fatsperservingdinner2;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;
        $fatsperservingdinner2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2dinner->use_id;
        $fatsperservingdinner3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3dinner->use_id;
        $minus =  $fatsperservingdinner1 + $fatsperservingdinner2 + $fatsperservingdinner3;
        $fatsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1dinner->use_id)){
      if(empty($getPro2dinner->use_id) && !empty($getPro3dinner->use_id)){
                    
        $fatsperservingdinner0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0dinner->use_id;
        $fatsperservingdinner2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2dinner->use_id;
        $fatsperservingdinner3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3dinner->use_id;
        $minus =  $fatsperservingdinner0 + $fatsperservingdinner2 + $fatsperservingdinner3;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2dinner->use_id) && empty($getPro3dinner->use_id)){ 
        $fatsperservingdinner0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0dinner->use_id;
        $fatsperservingdinner2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2dinner->use_id;
        $fatsperservingdinner3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3dinner->use_id;
        $minus =  $fatsperservingdinner0 + $fatsperservingdinner2 + $fatsperservingdinner3;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2dinner->use_id)){ 
                   
        $fatsperservingdinner0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0dinner->use_id;
        $fatsperservingdinner2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2dinner->use_id;
        $fatsperservingdinner3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3dinner->use_id;
        $minus =  $fatsperservingdinner0 + $fatsperservingdinner2 + $fatsperservingdinner3;
        $fatsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservingdinner0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0dinner->use_id;
        $fatsperservingdinner2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2dinner->use_id;
        $fatsperservingdinner3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3dinner->use_id;
        $minus =  $fatsperservingdinner0 + $fatsperservingdinner2;
        $fatsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2dinner->use_id)){
     if(empty($getPro3dinner->use_id)){                         
        $fatsperservingdinner0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0dinner->use_id;
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;               
        $minus =  $fatsperservingdinner0 + $fatsperservingdinner1 ;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingdinner0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0dinner->use_id;
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;                     
        $minus =  $fatsperservingdinner0 + $fatsperservingdinner1;
        $fatsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3dinner->use_id)){
        $fatsperservingdinner0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0dinner->use_id;
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;               
        $fatsperservingdinner2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2dinner->use_id;               
        $minus =  $fatsperservingdinner0 + $fatsperservingdinner1 + $fatsperservingdinner2;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0dinner = $this->productModel->getProductById($fatDinner[0]);
$getPro1dinner = $this->productModel->getProductById($fatDinner[1]);
$getPro2dinner = $this->productModel->getProductById($fatDinner[2]);
$getPro3dinner = $this->productModel->getProductById($fatDinner[3]);
$getPro4dinner = $this->productModel->getProductById($fatDinner[4]);
if(empty($getPro0dinner->use_id)){
    if(empty($getPro1dinner->use_id) && !empty($getPro2dinner->use_id) && !empty($getPro3dinner->use_id) && !empty($getPro4dinner->use_id)){
        
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;
        $fatsperservingdinner2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2dinner->use_id;
        $fatsperservingdinner3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3dinner->use_id;
        $fatsperservingdinner4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4dinner->use_id;
        $minus =  $fatsperservingdinner1 + $fatsperservingdinner2 + $fatsperservingdinner3 +$fatsperservingdinner4;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1dinner->use_id) && empty($getPro2dinner->use_id) && empty($getPro3dinner->use_id)&& empty($getPro4dinner->use_id)){         
      
        $fatsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1dinner->use_id) && empty($getPro2dinner->use_id) && empty($getPro3dinner->use_id)){                      
       
        $fatsperservingdinner4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4dinner->use_id;
        $minus = $fatsperservingdinner4;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1dinner->use_id) && empty($getPro2dinner->use_id)){  
        if(!empty($getPro3dinner->use_id)){
        $fatsperservingdinner3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3dinner->use_id;                       
        $fatsperservingdinner4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4dinner->use_id;                
        $minus =  $fatsperservingdinner3 + $fatsperservingdinner4;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservingdinner3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3dinner->use_id;                       
        $fatsperservingdinner4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4dinner->use_id;                
        $minus =  $fatsperservingdinner3 + $fatsperservingdinner4;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2dinner->use_id) && !empty($getPro3dinner->use_id)){     
        
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;                      
        $fatsperservingdinner3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3dinner->use_id;
        $minus =  $fatsperservingdinner1 + $fatsperservingdinner3;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2dinner->use_id) && empty($getPro3dinner->use_id)){   
        if(!empty($getPro1dinner->use_id)){ 
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;                      
        $fatsperservingdinner3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3dinner->use_id;
        $minus =  $fatsperservingdinner1 + $fatsperservingdinner3;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;                      
        $fatsperservingdinner3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3dinner->use_id;
        $minus =  $fatsperservingdinner1 + $fatsperservingdinner3;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3dinner->use_id)){   
        if(!empty($getPro2dinner->use_id)){
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;
        $fatsperservingdinner2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2dinner->use_id;
        $minus =  $fatsperservingdinner1 + $fatsperservingdinner2;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;
        $fatsperservingdinner2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2dinner->use_id;
        $minus =  $fatsperservingdinner1 + $fatsperservingdinner2;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4dinner->use_id)){   
         
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;
        $fatsperservingdinner2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2dinner->use_id;
        $fatsperservingdinner3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3dinner->use_id;                       
        $minus =  $fatsperservingdinner1 + $fatsperservingdinner2 + $fatsperservingdinner3;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;
        $fatsperservingdinner2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2dinner->use_id;
        $fatsperservingdinner3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3dinner->use_id;
        $fatsperservingdinner4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4dinner->use_id;
        $minus =  $fatsperservingdinner1 + $fatsperservingdinner2 + $fatsperservingdinner3 + $fatsperservingdinner4;
        $fatsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1dinner->use_id)){
      if(empty($getPro2dinner->use_id) && !empty($getPro3dinner->use_id) && !empty($getPro4dinner->use_id)){
        
        $fatsperservingdinner0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0dinner->use_id;
        $fatsperservingdinner3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3dinner->use_id;
        $fatsperservingdinner4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4dinner->use_id;
        $minus =  $fatsperservingdinner0 + $fatsperservingdinner3 + $fatsperservingdinner4;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3dinner->use_id) ){   
        
        $fatsperservingdinner0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0dinner->use_id;
        $minus =  $fatsperservingdinner0;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4dinner->use_id) ){
        if(!empty($getPro3dinner->use_id)){
           
        $fatsperservingdinner0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0dinner->use_id;
        $fatsperservingdinner2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2dinner->use_id;
        $fatsperservingdinner3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3dinner->use_id;
        $minus =  $fatsperservingdinner0 + $fatsperservingdinner2 + $fatsperservingdinner3;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservingdinner0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0dinner->use_id;
        $fatsperservingdinner2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2dinner->use_id;
        $fatsperservingdinner3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3dinner->use_id;
        $fatsperservingdinner4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4dinner->use_id;
        $minus =  $fatsperservingdinner0 + $fatsperservingdinner2 + $fatsperservingdinner3 + $fatsperservingdinner4;
        $fatsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2dinner->use_id)){
     if(empty($getPro3dinner->use_id)){   
        
        $fatsperservingdinner0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0dinner->use_id;
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;               
        $minus =  $fatsperservingdinner0 + $fatsperservingdinner1 ;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservingdinner0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0dinner->use_id;
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;                     
        $fatsperservingdinner3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3dinner->use_id;                     
        $fatsperservingdinner4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3dinner->use_id;                     
        $minus =  $fatsperservingdinner0 + $fatsperservingdinner1 + $fatsperservingdinner3 + $fatsperservingdinner4;
        $fatsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3dinner->use_id)){
    if(empty($getPro4dinner->use_id)){
       
        $fatsperservingdinner0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0dinner->use_id;
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;               
        $fatsperservingdinner2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2dinner->use_id;               
        $minus =  $fatsperservingdinner0 + $fatsperservingdinner1 + $fatsperservingdinner2;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservingdinner0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0dinner->use_id;
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;               
        $fatsperservingdinner2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2dinner->use_id;               
        $minus =  $fatsperservingdinner0 + $fatsperservingdinner1 + $fatsperservingdinner2;
        $fatsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservingdinner0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0dinner->use_id;
        $fatsperservingdinner1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1dinner->use_id;               
        $fatsperservingdinner2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2dinner->use_id; 
        $fatsperservingdinner3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3dinner->use_id; 
        $minus =  $fatsperservingdinner0 + $fatsperservingdinner1 + $fatsperservingdinner2 + $fatsperservingdinner3;
        $fatsperservingUseEmptydinner =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingdinner = $caloriesperserving /100 * 20 /9;  


}
break;

}
