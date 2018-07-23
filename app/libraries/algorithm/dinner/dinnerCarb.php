<?php 

switch (count($carbDinner)) {
    case 1:
    // One Product with out use_id or with use_id
    $getProduct0dinner = $this->productModel->getProductById($carbDinner[0]);
    $carbsperservingUseEmptydinner = $caloriesperserving /100 * 60 /4; 
    $carbsperservingdinner = $caloriesperserving /100  * 60 /4;
break;

case 2:
    $getProduct0dinner = $this->productModel->getProductById($carbDinner[0]);
    $getProduct1dinner = $this->productModel->getProductById($carbDinner[1]);
if(!empty($getProduct0dinner->use_id)){     
    $carbsperservingdinner = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct0dinner->use_id;
    $carbsperservingUseEmptydinner =  $caloriesperserving /100 * 60 /4 - $minus; 
}elseif(!empty($getProduct1dinner->use_id)){   
    // One with out use_id and one with use_is  
    $carbsperservingdinner = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct1dinner->use_id;
    $carbsperservingUseEmptydinner =  $caloriesperserving /100 * 60 /4 - $minus; 
   
}elseif(empty($getProduct1dinner->use_id)){
    // Two products with out use_id
    $carbsperservingUseEmptydinner =  $caloriesperserving /100 * 60 /4/2;
}
break;

case 3:
$getProduct0dinner = $this->productModel->getProductById($carbDinner[0]);
$getProduct1dinner = $this->productModel->getProductById($carbDinner[1]);
$getProduct2dinner = $this->productModel->getProductById($carbDinner[2]);
if(!empty($getProduct0dinner->use_id)){
    if(!empty($getProduct0dinner->use_id) && !empty($getProduct1dinner->use_id)){
        $carbsperservingdinner0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0dinner->use_id;
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;
        $minus =  $carbsperservingdinner0 +$carbsperservingdinner1;
        $carbsperservingUseEmptydinner =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;
    }elseif(!empty($getProduct0dinner->use_id) && !empty($getProduct2dinner->use_id)){
        $carbsperservingdinner0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0dinner->use_id;
        $carbsperservingdinner2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2dinner->use_id;
        $minus =  $carbsperservingdinner0 +$carbsperservingdinner2;
        $carbsperservingUseEmptydinner =  $caloriesperserving /100 * 60 /4 - $minus;     
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;

    }elseif(!empty($getProduct0dinner)){
        $carbsperservingdinner0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0dinner->use_id;
        $minus =  $carbsperservingdinner0;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus) /2;         
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;

}elseif(empty($getProduct0dinner->use_id)){
    if(!empty($getProduct1dinner->use_id) && !empty($getProduct2dinner->use_id)){    
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;
        $carbsperservingdinner2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2dinner->use_id;
        $minus = $carbsperservingdinner1 + $carbsperservingdinner2;
        $carbsperservingUseEmptydinner =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;   
    }elseif(!empty($getProduct1dinner->use_id)){  
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;
        $minus =  $carbsperservingdinner1;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;            
    }elseif(!empty($getProduct2dinner->use_id)){  
        $carbsperservingdinner2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2dinner->use_id;
        $minus =  $carbsperservingdinner2;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;   
    
    }elseif(empty($getProduct1dinner->use_id)){  
        $carbsperservingUseEmptydinner =  $caloriesperserving /100 * 60 /4 /3;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4; 
    }
 }

}else{
        $carbsperservingUseEmptydinner =  $caloriesperserving /100 * 60 /4 /3;
}
break;

case 4:
$getProduct0dinner = $this->productModel->getProductById($carbDinner[0]);
$getProduct1dinner = $this->productModel->getProductById($carbDinner[1]);
$getProduct2dinner = $this->productModel->getProductById($carbDinner[2]);
$getProduct3dinner = $this->productModel->getProductById($carbDinner[3]);
if(empty($getProduct0dinner->use_id)){
    if(empty($getProduct1dinner->use_id) && !empty($getProduct2dinner->use_id)){
       
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;
        $carbsperservingdinner2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2dinner->use_id;
        $carbsperservingdinner3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3dinner->use_id;
        $minus =  $carbsperservingdinner1 + $carbsperservingdinner2 + $carbsperservingdinner3;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;  
           
    }elseif(empty($getProduct1dinner->use_id) && empty($getProduct2dinner->use_id) && empty($getProduct3dinner->use_id)){ 
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;
        $carbsperservingdinner2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2dinner->use_id;
        $carbsperservingdinner3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3dinner->use_id;
        $minus =  $carbsperservingdinner1 + $carbsperservingdinner2 + $carbsperservingdinner3;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4; 
   
    }elseif(empty($getProduct1dinner->use_id) && empty($getProduct2dinner->use_id)){                       
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;
        $carbsperservingdinner2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2dinner->use_id;
        $carbsperservingdinner3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3dinner->use_id;
        $minus =  $carbsperservingdinner1 + $carbsperservingdinner2 + $carbsperservingdinner3;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2dinner->use_id) && !empty($getProduct3dinner->use_id)){                     
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;                      
        $carbsperservingdinner3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3dinner->use_id;
        $minus =  $carbsperservingdinner1 + $carbsperservingdinner3;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2dinner->use_id) && empty($getProduct3dinner->use_id)){                        
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;                      
        $carbsperservingdinner3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3dinner->use_id;
        $minus =  $carbsperservingdinner1 + $carbsperservingdinner3;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;

    }elseif(empty($getProduct3dinner->use_id)){                     
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;
        $carbsperservingdinner2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2dinner->use_id;
        $minus =  $carbsperservingdinner1 + $carbsperservingdinner2;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;
        $carbsperservingdinner2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2dinner->use_id;
        $carbsperservingdinner3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3dinner->use_id;
        $minus =  $carbsperservingdinner1 + $carbsperservingdinner2 + $carbsperservingdinner3;
        $carbsperservingUseEmptydinner =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1dinner->use_id)){
      if(empty($getProduct2dinner->use_id) && !empty($getProduct3dinner->use_id)){
                    
        $carbsperservingdinner0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0dinner->use_id;
        $carbsperservingdinner2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2dinner->use_id;
        $carbsperservingdinner3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3dinner->use_id;
        $minus =  $carbsperservingdinner0 + $carbsperservingdinner2 + $carbsperservingdinner3;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct2dinner->use_id) && empty($getProduct3dinner->use_id)){ 
        $carbsperservingdinner0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0dinner->use_id;
        $carbsperservingdinner2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2dinner->use_id;
        $carbsperservingdinner3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3dinner->use_id;
        $minus =  $carbsperservingdinner0 + $carbsperservingdinner2 + $carbsperservingdinner3;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;  

    }elseif(!empty($getProduct2dinner->use_id)){ 
                   
        $carbsperservingdinner0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0dinner->use_id;
        $carbsperservingdinner2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2dinner->use_id;
        $carbsperservingdinner3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3dinner->use_id;
        $minus =  $carbsperservingdinner0 + $carbsperservingdinner2 + $carbsperservingdinner3;
        $carbsperservingUseEmptydinner =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;   
    }else{
        
        $carbsperservingdinner0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0dinner->use_id;
        $carbsperservingdinner2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2dinner->use_id;
        $carbsperservingdinner3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3dinner->use_id;
        $minus =  $carbsperservingdinner0 + $carbsperservingdinner2;
        $carbsperservingUseEmptydinner =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;                             
    }
 
}elseif(empty($getProduct2dinner->use_id)){
     if(empty($getProduct3dinner->use_id)){                         
        $carbsperservingdinner0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0dinner->use_id;
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;               
        $minus =  $carbsperservingdinner0 + $carbsperservingdinner1 ;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingdinner0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0dinner->use_id;
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;                     
        $minus =  $carbsperservingdinner0 + $carbsperservingdinner1;
        $carbsperservingUseEmptydinner =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3dinner->use_id)){
        $carbsperservingdinner0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0dinner->use_id;
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;               
        $carbsperservingdinner2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2dinner->use_id;               
        $minus =  $carbsperservingdinner0 + $carbsperservingdinner1 + $carbsperservingdinner2;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus);
        $carbsperservingdinner = $caloriesperserving /100 * 20 /4;   
}else{
        $carbsperservingdinner = $caloriesperserving /100 * 20 /4;   
}

break;

case 5:
$getProduct0dinner = $this->productModel->getProductById($carbDinner[0]);
$getProduct1dinner = $this->productModel->getProductById($carbDinner[1]);
$getProduct2dinner = $this->productModel->getProductById($carbDinner[2]);
$getProduct3dinner = $this->productModel->getProductById($carbDinner[3]);
$getProduct4dinner = $this->productModel->getProductById($carbDinner[4]);
if(empty($getProduct0dinner->use_id)){
    if(empty($getProduct1dinner->use_id) && !empty($getProduct2dinner->use_id) && !empty($getProduct3dinner->use_id) && !empty($getProduct4dinner->use_id)){
        
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;
        $carbsperservingdinner2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2dinner->use_id;
        $carbsperservingdinner3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3dinner->use_id;
        $carbsperservingdinner4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4dinner->use_id;
        $minus =  $carbsperservingdinner1 + $carbsperservingdinner2 + $carbsperservingdinner3 +$carbsperservingdinner4;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct1dinner->use_id) && empty($getProduct2dinner->use_id) && empty($getProduct3dinner->use_id)&& empty($getProduct4dinner->use_id)){         
      
        $carbsperservingUseEmptydinner =  $caloriesperserving /100 * 60 /4 /5;
        
    }elseif(empty($getProduct1dinner->use_id) && empty($getProduct2dinner->use_id) && empty($getProduct3dinner->use_id)){                      
       
        $carbsperservingdinner4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4dinner->use_id;
        $minus = $carbsperservingdinner4;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4; 
    
    }elseif(empty($getProduct1dinner->use_id) && empty($getProduct2dinner->use_id)){  
        if(!empty($getProduct3dinner->use_id)){
        $carbsperservingdinner3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3dinner->use_id;                       
        $carbsperservingdinner4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4dinner->use_id;                
        $minus =  $carbsperservingdinner3 + $carbsperservingdinner4;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4; 
        }else{
        $carbsperservingdinner3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3dinner->use_id;                       
        $carbsperservingdinner4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4dinner->use_id;                
        $minus =  $carbsperservingdinner3 + $carbsperservingdinner4;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4; 
        }   

    }elseif(empty($getProduct2dinner->use_id) && !empty($getProduct3dinner->use_id)){     
        
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;                      
        $carbsperservingdinner3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3dinner->use_id;
        $minus =  $carbsperservingdinner1 + $carbsperservingdinner3;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2dinner->use_id) && empty($getProduct3dinner->use_id)){   
        if(!empty($getProduct1dinner->use_id)){ 
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;                      
        $carbsperservingdinner3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3dinner->use_id;
        $minus =  $carbsperservingdinner1 + $carbsperservingdinner3;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;
        }else{
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;                      
        $carbsperservingdinner3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3dinner->use_id;
        $minus =  $carbsperservingdinner1 + $carbsperservingdinner3;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;
        }    

    }elseif(empty($getProduct3dinner->use_id)){   
        if(!empty($getProduct2dinner->use_id)){
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;
        $carbsperservingdinner2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2dinner->use_id;
        $minus =  $carbsperservingdinner1 + $carbsperservingdinner2;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;   
        }else{
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;
        $carbsperservingdinner2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2dinner->use_id;
        $minus =  $carbsperservingdinner1 + $carbsperservingdinner2;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;   
        }
    }elseif(empty($getProduct4dinner->use_id)){   
         
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;
        $carbsperservingdinner2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2dinner->use_id;
        $carbsperservingdinner3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3dinner->use_id;                       
        $minus =  $carbsperservingdinner1 + $carbsperservingdinner2 + $carbsperservingdinner3;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;  
       
    }else{
      
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;
        $carbsperservingdinner2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2dinner->use_id;
        $carbsperservingdinner3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3dinner->use_id;
        $carbsperservingdinner4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4dinner->use_id;
        $minus =  $carbsperservingdinner1 + $carbsperservingdinner2 + $carbsperservingdinner3 + $carbsperservingdinner4;
        $carbsperservingUseEmptydinner =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1dinner->use_id)){
      if(empty($getProduct2dinner->use_id) && !empty($getProduct3dinner->use_id) && !empty($getProduct4dinner->use_id)){
        
        $carbsperservingdinner0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0dinner->use_id;
        $carbsperservingdinner3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3dinner->use_id;
        $carbsperservingdinner4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4dinner->use_id;
        $minus =  $carbsperservingdinner0 + $carbsperservingdinner3 + $carbsperservingdinner4;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct3dinner->use_id) ){   
        
        $carbsperservingdinner0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0dinner->use_id;
        $minus =  $carbsperservingdinner0;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus)/4;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;    
         

    }elseif(empty($getProduct4dinner->use_id) ){
        if(!empty($getProduct3dinner->use_id)){
           
        $carbsperservingdinner0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0dinner->use_id;
        $carbsperservingdinner2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2dinner->use_id;
        $carbsperservingdinner3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3dinner->use_id;
        $minus =  $carbsperservingdinner0 + $carbsperservingdinner2 + $carbsperservingdinner3;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;    
        }                 
       
    }else{
        
        $carbsperservingdinner0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0dinner->use_id;
        $carbsperservingdinner2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2dinner->use_id;
        $carbsperservingdinner3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3dinner->use_id;
        $carbsperservingdinner4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4dinner->use_id;
        $minus =  $carbsperservingdinner0 + $carbsperservingdinner2 + $carbsperservingdinner3 + $carbsperservingdinner4;
        $carbsperservingUseEmptydinner =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;  
    }
 
}elseif(empty($getProduct2dinner->use_id)){
     if(empty($getProduct3dinner->use_id)){   
        
        $carbsperservingdinner0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0dinner->use_id;
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;               
        $minus =  $carbsperservingdinner0 + $carbsperservingdinner1 ;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus)/3;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;   
    }else{
       
        $carbsperservingdinner0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0dinner->use_id;
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;                     
        $carbsperservingdinner3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3dinner->use_id;                     
        $carbsperservingdinner4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3dinner->use_id;                     
        $minus =  $carbsperservingdinner0 + $carbsperservingdinner1 + $carbsperservingdinner3 + $carbsperservingdinner4;
        $carbsperservingUseEmptydinner =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3dinner->use_id)){
    if(empty($getProduct4dinner->use_id)){
       
        $carbsperservingdinner0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0dinner->use_id;
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;               
        $carbsperservingdinner2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2dinner->use_id;               
        $minus =  $carbsperservingdinner0 + $carbsperservingdinner1 + $carbsperservingdinner2;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;   
    }else{
      
        $carbsperservingdinner0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0dinner->use_id;
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;               
        $carbsperservingdinner2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2dinner->use_id;               
        $minus =  $carbsperservingdinner0 + $carbsperservingdinner1 + $carbsperservingdinner2;
        $carbsperservingUseEmptydinner =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;   
    }

}else{ 
        $carbsperservingdinner0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0dinner->use_id;
        $carbsperservingdinner1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1dinner->use_id;               
        $carbsperservingdinner2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2dinner->use_id; 
        $carbsperservingdinner3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3dinner->use_id; 
        $minus =  $carbsperservingdinner0 + $carbsperservingdinner1 + $carbsperservingdinner2 + $carbsperservingdinner3;
        $carbsperservingUseEmptydinner =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingdinner = $caloriesperserving /100 * 60 /4;  


}
break;

}
