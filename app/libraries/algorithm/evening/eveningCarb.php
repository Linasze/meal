<?php 

switch (count($carbEvening)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($carbEvening)){
    $getProduct0evening = $this->productModel->getProductById($carbEvening[0]);
    $carbsperservingUseEmptyevening = $caloriesperserving /100 * 60 /4; 
    $carbsperservingevening = $caloriesperserving /100  * 60 /4;
    }
break;

case 2:
    $getProduct0evening = $this->productModel->getProductById($carbEvening[0]);
    $getProduct1evening = $this->productModel->getProductById($carbEvening[1]);
if(!empty($getProduct0evening->use_id)){     
    $carbsperservingevening = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct0evening->use_id;
    $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus; 
}elseif(!empty($getProduct1evening->use_id)){   
    // One with out use_id and one with use_is  
    $carbsperservingevening = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct1evening->use_id;
    $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus; 
   
}elseif(empty($getProduct1evening->use_id)){
    // Two products with out use_id
    $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4/2;
}
break;

case 3:
$getProduct0evening = $this->productModel->getProductById($carbEvening[0]);
$getProduct1evening = $this->productModel->getProductById($carbEvening[1]);
$getProduct2evening = $this->productModel->getProductById($carbEvening[2]);
if(!empty($getProduct0evening->use_id)){
    if(!empty($getProduct0evening->use_id) && !empty($getProduct1evening->use_id)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $minus =  $carbsperservingevening0 +$carbsperservingevening1;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;
    }elseif(!empty($getProduct0evening->use_id) && !empty($getProduct2evening->use_id)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening0 +$carbsperservingevening2;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;     
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;

    }elseif(!empty($getProduct0evening)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $minus =  $carbsperservingevening0;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;         
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;

}elseif(empty($getProduct0evening->use_id)){
    if(!empty($getProduct1evening->use_id) && !empty($getProduct2evening->use_id)){    
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus = $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }elseif(!empty($getProduct1evening->use_id)){  
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $minus =  $carbsperservingevening1;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;            
    }elseif(!empty($getProduct2evening->use_id)){  
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    
    }elseif(empty($getProduct1evening->use_id)){  
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
    }
 }

}else{
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 /3;
}
break;

case 4:
$getProduct0evening = $this->productModel->getProductById($carbEvening[0]);
$getProduct1evening = $this->productModel->getProductById($carbEvening[1]);
$getProduct2evening = $this->productModel->getProductById($carbEvening[2]);
$getProduct3evening = $this->productModel->getProductById($carbEvening[3]);
if(empty($getProduct0evening->use_id)){
    if(empty($getProduct1evening->use_id) && !empty($getProduct2evening->use_id)){
       
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
           
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){ 
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
   
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id)){                       
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id)){                     
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){                        
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;

    }elseif(empty($getProduct3evening->use_id)){                     
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1evening->use_id)){
      if(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id)){
                    
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){ 
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  

    }elseif(!empty($getProduct2evening->use_id)){ 
                   
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;                             
    }
 
}elseif(empty($getProduct2evening->use_id)){
     if(empty($getProduct3evening->use_id)){                         
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 ;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                     
        $minus =  $carbsperservingevening0 + $carbsperservingevening1;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3evening->use_id)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus);
        $carbsperservingevening = $caloriesperserving /100 * 20 /4;   
}else{
        $carbsperservingevening = $caloriesperserving /100 * 20 /4;   
}

break;

case 5:
$getProduct0evening = $this->productModel->getProductById($carbEvening[0]);
$getProduct1evening = $this->productModel->getProductById($carbEvening[1]);
$getProduct2evening = $this->productModel->getProductById($carbEvening[2]);
$getProduct3evening = $this->productModel->getProductById($carbEvening[3]);
$getProduct4evening = $this->productModel->getProductById($carbEvening[4]);
if(empty($getProduct0evening->use_id)){
    if(empty($getProduct1evening->use_id) && !empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id) && !empty($getProduct4evening->use_id)){
        
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3 +$carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)&& empty($getProduct4evening->use_id)){         
      
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 /5;
        
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){                      
       
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus = $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
    
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id)){  
        if(!empty($getProduct3evening->use_id)){
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                       
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;                
        $minus =  $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
        }else{
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                       
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;                
        $minus =  $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
        }   

    }elseif(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id)){     
        
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){   
        if(!empty($getProduct1evening->use_id)){ 
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;
        }else{
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;
        }    

    }elseif(empty($getProduct3evening->use_id)){   
        if(!empty($getProduct2evening->use_id)){
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
        }else{
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
        }
    }elseif(empty($getProduct4evening->use_id)){   
         
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                       
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
       
    }else{
      
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1evening->use_id)){
      if(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id) && !empty($getProduct4evening->use_id)){
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct3evening->use_id) ){   
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $minus =  $carbsperservingevening0;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;    
         

    }elseif(empty($getProduct4evening->use_id) ){
        if(!empty($getProduct3evening->use_id)){
           
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;    
        }                 
       
    }else{
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
    }
 
}elseif(empty($getProduct2evening->use_id)){
     if(empty($getProduct3evening->use_id)){   
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 ;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
       
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                     
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                     
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                     
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3evening->use_id)){
    if(empty($getProduct4evening->use_id)){
       
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
      
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }

}else{ 
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id; 
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id; 
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  


}
break;

}



switch (count($carbEvening2day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($carbEvening2day)){
    $getProduct0evening = $this->productModel->getProductById($carbEvening2day[0]);
    $carbsperservingUseEmptyevening = $caloriesperserving /100 * 60 /4; 
    $carbsperservingevening = $caloriesperserving /100  * 60 /4;
    }
break;

case 2:
    $getProduct0evening = $this->productModel->getProductById($carbEvening2day[0]);
    $getProduct1evening = $this->productModel->getProductById($carbEvening2day[1]);
if(!empty($getProduct0evening->use_id)){     
    $carbsperservingevening = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct0evening->use_id;
    $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus; 
}elseif(!empty($getProduct1evening->use_id)){   
    // One with out use_id and one with use_is  
    $carbsperservingevening = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct1evening->use_id;
    $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus; 
   
}elseif(empty($getProduct1evening->use_id)){
    // Two products with out use_id
    $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4/2;
}
break;

case 3:
$getProduct0evening = $this->productModel->getProductById($carbEvening2day[0]);
$getProduct1evening = $this->productModel->getProductById($carbEvening2day[1]);
$getProduct2evening = $this->productModel->getProductById($carbEvening2day[2]);
if(!empty($getProduct0evening->use_id)){
    if(!empty($getProduct0evening->use_id) && !empty($getProduct1evening->use_id)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $minus =  $carbsperservingevening0 +$carbsperservingevening1;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;
    }elseif(!empty($getProduct0evening->use_id) && !empty($getProduct2evening->use_id)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening0 +$carbsperservingevening2;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;     
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;

    }elseif(!empty($getProduct0evening)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $minus =  $carbsperservingevening0;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;         
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;

}elseif(empty($getProduct0evening->use_id)){
    if(!empty($getProduct1evening->use_id) && !empty($getProduct2evening->use_id)){    
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus = $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }elseif(!empty($getProduct1evening->use_id)){  
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $minus =  $carbsperservingevening1;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;            
    }elseif(!empty($getProduct2evening->use_id)){  
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    
    }elseif(empty($getProduct1evening->use_id)){  
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
    }
 }

}else{
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 /3;
}
break;

case 4:
$getProduct0evening = $this->productModel->getProductById($carbEvening2day[0]);
$getProduct1evening = $this->productModel->getProductById($carbEvening2day[1]);
$getProduct2evening = $this->productModel->getProductById($carbEvening2day[2]);
$getProduct3evening = $this->productModel->getProductById($carbEvening2day[3]);
if(empty($getProduct0evening->use_id)){
    if(empty($getProduct1evening->use_id) && !empty($getProduct2evening->use_id)){
       
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
           
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){ 
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
   
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id)){                       
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id)){                     
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){                        
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;

    }elseif(empty($getProduct3evening->use_id)){                     
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1evening->use_id)){
      if(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id)){
                    
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){ 
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  

    }elseif(!empty($getProduct2evening->use_id)){ 
                   
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;                             
    }
 
}elseif(empty($getProduct2evening->use_id)){
     if(empty($getProduct3evening->use_id)){                         
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 ;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                     
        $minus =  $carbsperservingevening0 + $carbsperservingevening1;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3evening->use_id)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus);
        $carbsperservingevening = $caloriesperserving /100 * 20 /4;   
}else{
        $carbsperservingevening = $caloriesperserving /100 * 20 /4;   
}

break;

case 5:
$getProduct0evening = $this->productModel->getProductById($carbEvening2day[0]);
$getProduct1evening = $this->productModel->getProductById($carbEvening2day[1]);
$getProduct2evening = $this->productModel->getProductById($carbEvening2day[2]);
$getProduct3evening = $this->productModel->getProductById($carbEvening2day[3]);
$getProduct4evening = $this->productModel->getProductById($carbEvening2day[4]);
if(empty($getProduct0evening->use_id)){
    if(empty($getProduct1evening->use_id) && !empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id) && !empty($getProduct4evening->use_id)){
        
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3 +$carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)&& empty($getProduct4evening->use_id)){         
      
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 /5;
        
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){                      
       
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus = $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
    
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id)){  
        if(!empty($getProduct3evening->use_id)){
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                       
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;                
        $minus =  $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
        }else{
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                       
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;                
        $minus =  $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
        }   

    }elseif(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id)){     
        
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){   
        if(!empty($getProduct1evening->use_id)){ 
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;
        }else{
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;
        }    

    }elseif(empty($getProduct3evening->use_id)){   
        if(!empty($getProduct2evening->use_id)){
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
        }else{
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
        }
    }elseif(empty($getProduct4evening->use_id)){   
         
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                       
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
       
    }else{
      
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1evening->use_id)){
      if(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id) && !empty($getProduct4evening->use_id)){
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct3evening->use_id) ){   
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $minus =  $carbsperservingevening0;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;    
         

    }elseif(empty($getProduct4evening->use_id) ){
        if(!empty($getProduct3evening->use_id)){
           
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;    
        }                 
       
    }else{
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
    }
 
}elseif(empty($getProduct2evening->use_id)){
     if(empty($getProduct3evening->use_id)){   
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 ;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
       
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                     
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                     
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                     
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3evening->use_id)){
    if(empty($getProduct4evening->use_id)){
       
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
      
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }

}else{ 
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id; 
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id; 
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  


}
break;

}




switch (count($carbEvening3day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($carbEvening3day)){
    $getProduct0evening = $this->productModel->getProductById($carbEvening3day[0]);
    $carbsperservingUseEmptyevening = $caloriesperserving /100 * 60 /4; 
    $carbsperservingevening = $caloriesperserving /100  * 60 /4;
    }
break;

case 2:
    $getProduct0evening = $this->productModel->getProductById($carbEvening3day[0]);
    $getProduct1evening = $this->productModel->getProductById($carbEvening3day[1]);
if(!empty($getProduct0evening->use_id)){     
    $carbsperservingevening = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct0evening->use_id;
    $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus; 
}elseif(!empty($getProduct1evening->use_id)){   
    // One with out use_id and one with use_is  
    $carbsperservingevening = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct1evening->use_id;
    $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus; 
   
}elseif(empty($getProduct1evening->use_id)){
    // Two products with out use_id
    $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4/2;
}
break;

case 3:
$getProduct0evening = $this->productModel->getProductById($carbEvening3day[0]);
$getProduct1evening = $this->productModel->getProductById($carbEvening3day[1]);
$getProduct2evening = $this->productModel->getProductById($carbEvening3day[2]);
if(!empty($getProduct0evening->use_id)){
    if(!empty($getProduct0evening->use_id) && !empty($getProduct1evening->use_id)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $minus =  $carbsperservingevening0 +$carbsperservingevening1;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;
    }elseif(!empty($getProduct0evening->use_id) && !empty($getProduct2evening->use_id)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening0 +$carbsperservingevening2;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;     
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;

    }elseif(!empty($getProduct0evening)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $minus =  $carbsperservingevening0;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;         
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;

}elseif(empty($getProduct0evening->use_id)){
    if(!empty($getProduct1evening->use_id) && !empty($getProduct2evening->use_id)){    
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus = $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }elseif(!empty($getProduct1evening->use_id)){  
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $minus =  $carbsperservingevening1;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;            
    }elseif(!empty($getProduct2evening->use_id)){  
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    
    }elseif(empty($getProduct1evening->use_id)){  
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
    }
 }

}else{
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 /3;
}
break;

case 4:
$getProduct0evening = $this->productModel->getProductById($carbEvening3day[0]);
$getProduct1evening = $this->productModel->getProductById($carbEvening3day[1]);
$getProduct2evening = $this->productModel->getProductById($carbEvening3day[2]);
$getProduct3evening = $this->productModel->getProductById($carbEvening3day[3]);
if(empty($getProduct0evening->use_id)){
    if(empty($getProduct1evening->use_id) && !empty($getProduct2evening->use_id)){
       
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
           
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){ 
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
   
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id)){                       
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id)){                     
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){                        
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;

    }elseif(empty($getProduct3evening->use_id)){                     
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1evening->use_id)){
      if(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id)){
                    
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){ 
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  

    }elseif(!empty($getProduct2evening->use_id)){ 
                   
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;                             
    }
 
}elseif(empty($getProduct2evening->use_id)){
     if(empty($getProduct3evening->use_id)){                         
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 ;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                     
        $minus =  $carbsperservingevening0 + $carbsperservingevening1;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3evening->use_id)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus);
        $carbsperservingevening = $caloriesperserving /100 * 20 /4;   
}else{
        $carbsperservingevening = $caloriesperserving /100 * 20 /4;   
}

break;

case 5:
$getProduct0evening = $this->productModel->getProductById($carbEvening3day[0]);
$getProduct1evening = $this->productModel->getProductById($carbEvening3day[1]);
$getProduct2evening = $this->productModel->getProductById($carbEvening3day[2]);
$getProduct3evening = $this->productModel->getProductById($carbEvening3day[3]);
$getProduct4evening = $this->productModel->getProductById($carbEvening3day[4]);
if(empty($getProduct0evening->use_id)){
    if(empty($getProduct1evening->use_id) && !empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id) && !empty($getProduct4evening->use_id)){
        
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3 +$carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)&& empty($getProduct4evening->use_id)){         
      
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 /5;
        
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){                      
       
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus = $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
    
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id)){  
        if(!empty($getProduct3evening->use_id)){
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                       
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;                
        $minus =  $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
        }else{
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                       
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;                
        $minus =  $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
        }   

    }elseif(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id)){     
        
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){   
        if(!empty($getProduct1evening->use_id)){ 
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;
        }else{
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;
        }    

    }elseif(empty($getProduct3evening->use_id)){   
        if(!empty($getProduct2evening->use_id)){
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
        }else{
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
        }
    }elseif(empty($getProduct4evening->use_id)){   
         
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                       
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
       
    }else{
      
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1evening->use_id)){
      if(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id) && !empty($getProduct4evening->use_id)){
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct3evening->use_id) ){   
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $minus =  $carbsperservingevening0;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;    
         

    }elseif(empty($getProduct4evening->use_id) ){
        if(!empty($getProduct3evening->use_id)){
           
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;    
        }                 
       
    }else{
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
    }
 
}elseif(empty($getProduct2evening->use_id)){
     if(empty($getProduct3evening->use_id)){   
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 ;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
       
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                     
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                     
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                     
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3evening->use_id)){
    if(empty($getProduct4evening->use_id)){
       
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
      
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }

}else{ 
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id; 
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id; 
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  


}
break;

}



switch (count($carbEvening4day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($carbEvening4day)){
    $getProduct0evening = $this->productModel->getProductById($carbEvening4day[0]);
    $carbsperservingUseEmptyevening = $caloriesperserving /100 * 60 /4; 
    $carbsperservingevening = $caloriesperserving /100  * 60 /4;
    }
break;

case 2:
    $getProduct0evening = $this->productModel->getProductById($carbEvening4day[0]);
    $getProduct1evening = $this->productModel->getProductById($carbEvening4day[1]);
if(!empty($getProduct0evening->use_id)){     
    $carbsperservingevening = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct0evening->use_id;
    $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus; 
}elseif(!empty($getProduct1evening->use_id)){   
    // One with out use_id and one with use_is  
    $carbsperservingevening = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct1evening->use_id;
    $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus; 
   
}elseif(empty($getProduct1evening->use_id)){
    // Two products with out use_id
    $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4/2;
}
break;

case 3:
$getProduct0evening = $this->productModel->getProductById($carbEvening4day[0]);
$getProduct1evening = $this->productModel->getProductById($carbEvening4day[1]);
$getProduct2evening = $this->productModel->getProductById($carbEvening4day[2]);
if(!empty($getProduct0evening->use_id)){
    if(!empty($getProduct0evening->use_id) && !empty($getProduct1evening->use_id)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $minus =  $carbsperservingevening0 +$carbsperservingevening1;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;
    }elseif(!empty($getProduct0evening->use_id) && !empty($getProduct2evening->use_id)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening0 +$carbsperservingevening2;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;     
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;

    }elseif(!empty($getProduct0evening)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $minus =  $carbsperservingevening0;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;         
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;

}elseif(empty($getProduct0evening->use_id)){
    if(!empty($getProduct1evening->use_id) && !empty($getProduct2evening->use_id)){    
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus = $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }elseif(!empty($getProduct1evening->use_id)){  
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $minus =  $carbsperservingevening1;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;            
    }elseif(!empty($getProduct2evening->use_id)){  
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    
    }elseif(empty($getProduct1evening->use_id)){  
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
    }
 }

}else{
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 /3;
}
break;

case 4:
$getProduct0evening = $this->productModel->getProductById($carbEvening4day[0]);
$getProduct1evening = $this->productModel->getProductById($carbEvening4day[1]);
$getProduct2evening = $this->productModel->getProductById($carbEvening4day[2]);
$getProduct3evening = $this->productModel->getProductById($carbEvening4day[3]);
if(empty($getProduct0evening->use_id)){
    if(empty($getProduct1evening->use_id) && !empty($getProduct2evening->use_id)){
       
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
           
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){ 
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
   
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id)){                       
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id)){                     
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){                        
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;

    }elseif(empty($getProduct3evening->use_id)){                     
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1evening->use_id)){
      if(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id)){
                    
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){ 
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  

    }elseif(!empty($getProduct2evening->use_id)){ 
                   
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;                             
    }
 
}elseif(empty($getProduct2evening->use_id)){
     if(empty($getProduct3evening->use_id)){                         
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 ;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                     
        $minus =  $carbsperservingevening0 + $carbsperservingevening1;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3evening->use_id)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus);
        $carbsperservingevening = $caloriesperserving /100 * 20 /4;   
}else{
        $carbsperservingevening = $caloriesperserving /100 * 20 /4;   
}

break;

case 5:
$getProduct0evening = $this->productModel->getProductById($carbEvening4day[0]);
$getProduct1evening = $this->productModel->getProductById($carbEvening4day[1]);
$getProduct2evening = $this->productModel->getProductById($carbEvening4day[2]);
$getProduct3evening = $this->productModel->getProductById($carbEvening4day[3]);
$getProduct4evening = $this->productModel->getProductById($carbEvening4day[4]);
if(empty($getProduct0evening->use_id)){
    if(empty($getProduct1evening->use_id) && !empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id) && !empty($getProduct4evening->use_id)){
        
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3 +$carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)&& empty($getProduct4evening->use_id)){         
      
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 /5;
        
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){                      
       
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus = $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
    
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id)){  
        if(!empty($getProduct3evening->use_id)){
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                       
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;                
        $minus =  $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
        }else{
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                       
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;                
        $minus =  $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
        }   

    }elseif(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id)){     
        
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){   
        if(!empty($getProduct1evening->use_id)){ 
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;
        }else{
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;
        }    

    }elseif(empty($getProduct3evening->use_id)){   
        if(!empty($getProduct2evening->use_id)){
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
        }else{
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
        }
    }elseif(empty($getProduct4evening->use_id)){   
         
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                       
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
       
    }else{
      
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1evening->use_id)){
      if(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id) && !empty($getProduct4evening->use_id)){
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct3evening->use_id) ){   
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $minus =  $carbsperservingevening0;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;    
         

    }elseif(empty($getProduct4evening->use_id) ){
        if(!empty($getProduct3evening->use_id)){
           
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;    
        }                 
       
    }else{
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
    }
 
}elseif(empty($getProduct2evening->use_id)){
     if(empty($getProduct3evening->use_id)){   
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 ;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
       
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                     
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                     
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                     
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3evening->use_id)){
    if(empty($getProduct4evening->use_id)){
       
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
      
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }

}else{ 
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id; 
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id; 
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  


}
break;

}



switch (count($carbEvening5day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($carbEvening5day)){
    $getProduct0evening = $this->productModel->getProductById($carbEvening5day[0]);
    $carbsperservingUseEmptyevening = $caloriesperserving /100 * 60 /4; 
    $carbsperservingevening = $caloriesperserving /100  * 60 /4;
    }
break;

case 2:
    $getProduct0evening = $this->productModel->getProductById($carbEvening5day[0]);
    $getProduct1evening = $this->productModel->getProductById($carbEvening5day[1]);
if(!empty($getProduct0evening->use_id)){     
    $carbsperservingevening = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct0evening->use_id;
    $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus; 
}elseif(!empty($getProduct1evening->use_id)){   
    // One with out use_id and one with use_is  
    $carbsperservingevening = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct1evening->use_id;
    $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus; 
   
}elseif(empty($getProduct1evening->use_id)){
    // Two products with out use_id
    $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4/2;
}
break;

case 3:
$getProduct0evening = $this->productModel->getProductById($carbEvening5day[0]);
$getProduct1evening = $this->productModel->getProductById($carbEvening5day[1]);
$getProduct2evening = $this->productModel->getProductById($carbEvening5day[2]);
if(!empty($getProduct0evening->use_id)){
    if(!empty($getProduct0evening->use_id) && !empty($getProduct1evening->use_id)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $minus =  $carbsperservingevening0 +$carbsperservingevening1;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;
    }elseif(!empty($getProduct0evening->use_id) && !empty($getProduct2evening->use_id)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening0 +$carbsperservingevening2;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;     
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;

    }elseif(!empty($getProduct0evening)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $minus =  $carbsperservingevening0;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;         
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;

}elseif(empty($getProduct0evening->use_id)){
    if(!empty($getProduct1evening->use_id) && !empty($getProduct2evening->use_id)){    
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus = $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }elseif(!empty($getProduct1evening->use_id)){  
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $minus =  $carbsperservingevening1;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;            
    }elseif(!empty($getProduct2evening->use_id)){  
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    
    }elseif(empty($getProduct1evening->use_id)){  
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
    }
 }

}else{
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 /3;
}
break;

case 4:
$getProduct0evening = $this->productModel->getProductById($carbEvening5day[0]);
$getProduct1evening = $this->productModel->getProductById($carbEvening5day[1]);
$getProduct2evening = $this->productModel->getProductById($carbEvening5day[2]);
$getProduct3evening = $this->productModel->getProductById($carbEvening5day[3]);
if(empty($getProduct0evening->use_id)){
    if(empty($getProduct1evening->use_id) && !empty($getProduct2evening->use_id)){
       
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
           
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){ 
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
   
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id)){                       
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id)){                     
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){                        
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;

    }elseif(empty($getProduct3evening->use_id)){                     
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1evening->use_id)){
      if(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id)){
                    
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){ 
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  

    }elseif(!empty($getProduct2evening->use_id)){ 
                   
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;                             
    }
 
}elseif(empty($getProduct2evening->use_id)){
     if(empty($getProduct3evening->use_id)){                         
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 ;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                     
        $minus =  $carbsperservingevening0 + $carbsperservingevening1;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3evening->use_id)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus);
        $carbsperservingevening = $caloriesperserving /100 * 20 /4;   
}else{
        $carbsperservingevening = $caloriesperserving /100 * 20 /4;   
}

break;

case 5:
$getProduct0evening = $this->productModel->getProductById($carbEvening5day[0]);
$getProduct1evening = $this->productModel->getProductById($carbEvening5day[1]);
$getProduct2evening = $this->productModel->getProductById($carbEvening5day[2]);
$getProduct3evening = $this->productModel->getProductById($carbEvening5day[3]);
$getProduct4evening = $this->productModel->getProductById($carbEvening5day[4]);
if(empty($getProduct0evening->use_id)){
    if(empty($getProduct1evening->use_id) && !empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id) && !empty($getProduct4evening->use_id)){
        
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3 +$carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)&& empty($getProduct4evening->use_id)){         
      
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 /5;
        
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){                      
       
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus = $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
    
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id)){  
        if(!empty($getProduct3evening->use_id)){
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                       
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;                
        $minus =  $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
        }else{
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                       
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;                
        $minus =  $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
        }   

    }elseif(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id)){     
        
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){   
        if(!empty($getProduct1evening->use_id)){ 
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;
        }else{
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;
        }    

    }elseif(empty($getProduct3evening->use_id)){   
        if(!empty($getProduct2evening->use_id)){
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
        }else{
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
        }
    }elseif(empty($getProduct4evening->use_id)){   
         
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                       
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
       
    }else{
      
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1evening->use_id)){
      if(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id) && !empty($getProduct4evening->use_id)){
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct3evening->use_id) ){   
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $minus =  $carbsperservingevening0;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;    
         

    }elseif(empty($getProduct4evening->use_id) ){
        if(!empty($getProduct3evening->use_id)){
           
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;    
        }                 
       
    }else{
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
    }
 
}elseif(empty($getProduct2evening->use_id)){
     if(empty($getProduct3evening->use_id)){   
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 ;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
       
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                     
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                     
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                     
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3evening->use_id)){
    if(empty($getProduct4evening->use_id)){
       
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
      
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }

}else{ 
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id; 
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id; 
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  


}
break;

}




switch (count($carbEvening6day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($carbEvening6day)){
    $getProduct0evening = $this->productModel->getProductById($carbEvening6day[0]);
    $carbsperservingUseEmptyevening = $caloriesperserving /100 * 60 /4; 
    $carbsperservingevening = $caloriesperserving /100  * 60 /4;
    }
break;

case 2:
    $getProduct0evening = $this->productModel->getProductById($carbEvening6day[0]);
    $getProduct1evening = $this->productModel->getProductById($carbEvening6day[1]);
if(!empty($getProduct0evening->use_id)){     
    $carbsperservingevening = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct0evening->use_id;
    $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus; 
}elseif(!empty($getProduct1evening->use_id)){   
    // One with out use_id and one with use_is  
    $carbsperservingevening = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct1evening->use_id;
    $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus; 
   
}elseif(empty($getProduct1evening->use_id)){
    // Two products with out use_id
    $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4/2;
}
break;

case 3:
$getProduct0evening = $this->productModel->getProductById($carbEvening6day[0]);
$getProduct1evening = $this->productModel->getProductById($carbEvening6day[1]);
$getProduct2evening = $this->productModel->getProductById($carbEvening6day[2]);
if(!empty($getProduct0evening->use_id)){
    if(!empty($getProduct0evening->use_id) && !empty($getProduct1evening->use_id)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $minus =  $carbsperservingevening0 +$carbsperservingevening1;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;
    }elseif(!empty($getProduct0evening->use_id) && !empty($getProduct2evening->use_id)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening0 +$carbsperservingevening2;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;     
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;

    }elseif(!empty($getProduct0evening)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $minus =  $carbsperservingevening0;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;         
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;

}elseif(empty($getProduct0evening->use_id)){
    if(!empty($getProduct1evening->use_id) && !empty($getProduct2evening->use_id)){    
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus = $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }elseif(!empty($getProduct1evening->use_id)){  
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $minus =  $carbsperservingevening1;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;            
    }elseif(!empty($getProduct2evening->use_id)){  
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    
    }elseif(empty($getProduct1evening->use_id)){  
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
    }
 }

}else{
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 /3;
}
break;

case 4:
$getProduct0evening = $this->productModel->getProductById($carbEvening6day[0]);
$getProduct1evening = $this->productModel->getProductById($carbEvening6day[1]);
$getProduct2evening = $this->productModel->getProductById($carbEvening6day[2]);
$getProduct3evening = $this->productModel->getProductById($carbEvening6day[3]);
if(empty($getProduct0evening->use_id)){
    if(empty($getProduct1evening->use_id) && !empty($getProduct2evening->use_id)){
       
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
           
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){ 
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
   
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id)){                       
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id)){                     
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){                        
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;

    }elseif(empty($getProduct3evening->use_id)){                     
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1evening->use_id)){
      if(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id)){
                    
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){ 
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  

    }elseif(!empty($getProduct2evening->use_id)){ 
                   
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;                             
    }
 
}elseif(empty($getProduct2evening->use_id)){
     if(empty($getProduct3evening->use_id)){                         
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 ;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                     
        $minus =  $carbsperservingevening0 + $carbsperservingevening1;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3evening->use_id)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus);
        $carbsperservingevening = $caloriesperserving /100 * 20 /4;   
}else{
        $carbsperservingevening = $caloriesperserving /100 * 20 /4;   
}

break;

case 5:
$getProduct0evening = $this->productModel->getProductById($carbEvening6day[0]);
$getProduct1evening = $this->productModel->getProductById($carbEvening6day[1]);
$getProduct2evening = $this->productModel->getProductById($carbEvening6day[2]);
$getProduct3evening = $this->productModel->getProductById($carbEvening6day[3]);
$getProduct4evening = $this->productModel->getProductById($carbEvening6day[4]);
if(empty($getProduct0evening->use_id)){
    if(empty($getProduct1evening->use_id) && !empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id) && !empty($getProduct4evening->use_id)){
        
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3 +$carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)&& empty($getProduct4evening->use_id)){         
      
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 /5;
        
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){                      
       
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus = $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
    
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id)){  
        if(!empty($getProduct3evening->use_id)){
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                       
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;                
        $minus =  $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
        }else{
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                       
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;                
        $minus =  $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
        }   

    }elseif(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id)){     
        
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){   
        if(!empty($getProduct1evening->use_id)){ 
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;
        }else{
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;
        }    

    }elseif(empty($getProduct3evening->use_id)){   
        if(!empty($getProduct2evening->use_id)){
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
        }else{
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
        }
    }elseif(empty($getProduct4evening->use_id)){   
         
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                       
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
       
    }else{
      
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1evening->use_id)){
      if(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id) && !empty($getProduct4evening->use_id)){
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct3evening->use_id) ){   
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $minus =  $carbsperservingevening0;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;    
         

    }elseif(empty($getProduct4evening->use_id) ){
        if(!empty($getProduct3evening->use_id)){
           
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;    
        }                 
       
    }else{
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
    }
 
}elseif(empty($getProduct2evening->use_id)){
     if(empty($getProduct3evening->use_id)){   
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 ;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
       
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                     
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                     
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                     
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3evening->use_id)){
    if(empty($getProduct4evening->use_id)){
       
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
      
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }

}else{ 
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id; 
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id; 
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  


}
break;

}



switch (count($carbEvening7day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($carbEvening7day)){
    $getProduct0evening = $this->productModel->getProductById($carbEvening7day[0]);
    $carbsperservingUseEmptyevening = $caloriesperserving /100 * 60 /4; 
    $carbsperservingevening = $caloriesperserving /100  * 60 /4;
    }
break;

case 2:
    $getProduct0evening = $this->productModel->getProductById($carbEvening7day[0]);
    $getProduct1evening = $this->productModel->getProductById($carbEvening7day[1]);
if(!empty($getProduct0evening->use_id)){     
    $carbsperservingevening = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct0evening->use_id;
    $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus; 
}elseif(!empty($getProduct1evening->use_id)){   
    // One with out use_id and one with use_is  
    $carbsperservingevening = $caloriesperserving /100  * 60 /4;
    $minus = $caloriesperserving /100  * 60 /4 / 100  * $getProduct1evening->use_id;
    $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus; 
   
}elseif(empty($getProduct1evening->use_id)){
    // Two products with out use_id
    $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4/2;
}
break;

case 3:
$getProduct0evening = $this->productModel->getProductById($carbEvening7day[0]);
$getProduct1evening = $this->productModel->getProductById($carbEvening7day[1]);
$getProduct2evening = $this->productModel->getProductById($carbEvening7day[2]);
if(!empty($getProduct0evening->use_id)){
    if(!empty($getProduct0evening->use_id) && !empty($getProduct1evening->use_id)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $minus =  $carbsperservingevening0 +$carbsperservingevening1;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;
    }elseif(!empty($getProduct0evening->use_id) && !empty($getProduct2evening->use_id)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening0 +$carbsperservingevening2;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;     
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;

    }elseif(!empty($getProduct0evening)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $minus =  $carbsperservingevening0;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;         
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;

}elseif(empty($getProduct0evening->use_id)){
    if(!empty($getProduct1evening->use_id) && !empty($getProduct2evening->use_id)){    
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus = $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;         
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }elseif(!empty($getProduct1evening->use_id)){  
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $minus =  $carbsperservingevening1;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;            
    }elseif(!empty($getProduct2evening->use_id)){  
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    
    }elseif(empty($getProduct1evening->use_id)){  
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
    }
 }

}else{
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 /3;
}
break;

case 4:
$getProduct0evening = $this->productModel->getProductById($carbEvening7day[0]);
$getProduct1evening = $this->productModel->getProductById($carbEvening7day[1]);
$getProduct2evening = $this->productModel->getProductById($carbEvening7day[2]);
$getProduct3evening = $this->productModel->getProductById($carbEvening7day[3]);
if(empty($getProduct0evening->use_id)){
    if(empty($getProduct1evening->use_id) && !empty($getProduct2evening->use_id)){
       
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
           
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){ 
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
   
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id)){                       
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id)){                     
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){                        
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;

    }elseif(empty($getProduct3evening->use_id)){                     
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1evening->use_id)){
      if(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id)){
                    
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){ 
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  

    }elseif(!empty($getProduct2evening->use_id)){ 
                   
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;                             
    }
 
}elseif(empty($getProduct2evening->use_id)){
     if(empty($getProduct3evening->use_id)){                         
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 ;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                     
        $minus =  $carbsperservingevening0 + $carbsperservingevening1;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3evening->use_id)){
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus);
        $carbsperservingevening = $caloriesperserving /100 * 20 /4;   
}else{
        $carbsperservingevening = $caloriesperserving /100 * 20 /4;   
}

break;

case 5:
$getProduct0evening = $this->productModel->getProductById($carbEvening7day[0]);
$getProduct1evening = $this->productModel->getProductById($carbEvening7day[1]);
$getProduct2evening = $this->productModel->getProductById($carbEvening7day[2]);
$getProduct3evening = $this->productModel->getProductById($carbEvening7day[3]);
$getProduct4evening = $this->productModel->getProductById($carbEvening7day[4]);
if(empty($getProduct0evening->use_id)){
    if(empty($getProduct1evening->use_id) && !empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id) && !empty($getProduct4evening->use_id)){
        
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3 +$carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)&& empty($getProduct4evening->use_id)){         
      
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 /5;
        
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){                      
       
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus = $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
    
    }elseif(empty($getProduct1evening->use_id) && empty($getProduct2evening->use_id)){  
        if(!empty($getProduct3evening->use_id)){
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                       
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;                
        $minus =  $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
        }else{
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                       
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;                
        $minus =  $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 
        }   

    }elseif(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id)){     
        
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4; 

    }elseif(empty($getProduct2evening->use_id) && empty($getProduct3evening->use_id)){   
        if(!empty($getProduct1evening->use_id)){ 
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;
        }else{
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                      
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;
        }    

    }elseif(empty($getProduct3evening->use_id)){   
        if(!empty($getProduct2evening->use_id)){
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
        }else{
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus) /2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
        }
    }elseif(empty($getProduct4evening->use_id)){   
         
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                       
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
       
    }else{
      
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
    }
         
}elseif(empty($getProduct1evening->use_id)){
      if(empty($getProduct2evening->use_id) && !empty($getProduct3evening->use_id) && !empty($getProduct4evening->use_id)){
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  

    }elseif(empty($getProduct3evening->use_id) ){   
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $minus =  $carbsperservingevening0;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/4;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;    
         

    }elseif(empty($getProduct4evening->use_id) ){
        if(!empty($getProduct3evening->use_id)){
           
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;    
        }                 
       
    }else{
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct4evening->use_id;
        $minus =  $carbsperservingevening0 + $carbsperservingevening2 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  
    }
 
}elseif(empty($getProduct2evening->use_id)){
     if(empty($getProduct3evening->use_id)){   
        
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 ;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/3;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
       
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;                     
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                     
        $carbsperservingevening4 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id;                     
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening3 + $carbsperservingevening4;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;                             
    }

}elseif(empty($getProduct3evening->use_id)){
    if(empty($getProduct4evening->use_id)){
       
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }else{
      
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id;               
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2;
        $carbsperservingUseEmptyevening =  ($caloriesperserving /100 * 60 /4 - $minus)/2;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;   
    }

}else{ 
        $carbsperservingevening0 = $caloriesperserving /100 * 60 /4 /100 * $getProduct0evening->use_id;
        $carbsperservingevening1 = $caloriesperserving /100 * 60 /4 /100 * $getProduct1evening->use_id;               
        $carbsperservingevening2 = $caloriesperserving /100 * 60 /4 /100 * $getProduct2evening->use_id; 
        $carbsperservingevening3 = $caloriesperserving /100 * 60 /4 /100 * $getProduct3evening->use_id; 
        $minus =  $carbsperservingevening0 + $carbsperservingevening1 + $carbsperservingevening2 + $carbsperservingevening3;
        $carbsperservingUseEmptyevening =  $caloriesperserving /100 * 60 /4 - $minus;
        $carbsperservingevening = $caloriesperserving /100 * 60 /4;  


}
break;

}



