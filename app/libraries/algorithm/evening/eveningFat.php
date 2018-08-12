<?php 

switch (count($fatEvening)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fatEvening)){
    $getPro0evening = $this->productModel->getProductById($fatEvening[0]);
    $fatsperservingUseEmptyevening = $caloriesperserving /100 * 20 /9; 
    $fatsperservingevening = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0evening = $this->productModel->getProductById($fatEvening[0]);
    $getPro1evening = $this->productModel->getProductById($fatEvening[1]);
if(!empty($getPro0evening->use_id)){    
    $fatsperservingevening = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0evening->use_id;
    $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1evening->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservingevening = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1evening->use_id;
    $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1evening->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0evening = $this->productModel->getProductById($fatEvening[0]);
$getPro1evening = $this->productModel->getProductById($fatEvening[1]);
$getPro2evening = $this->productModel->getProductById($fatEvening[2]);
if(!empty($getPro0evening->use_id)){
    if(!empty($getPro0evening->use_id) && !empty($getPro1evening->use_id)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $minus =  $fatsperservingevening0 +$fatsperservingevening1;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0evening->use_id) && !empty($getPro2evening->use_id)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening0 +$fatsperservingevening2;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0evening)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $minus =  $fatsperservingevening0;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0evening->use_id)){
    if(!empty($getPro1evening->use_id) && !empty($getPro2evening->use_id)){    
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus = $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1evening->use_id)){  
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $minus =  $fatsperservingevening1;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2evening->use_id)){  
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1evening->use_id)){  
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0evening = $this->productModel->getProductById($fatEvening[0]);
$getPro1evening = $this->productModel->getProductById($fatEvening[1]);
$getPro2evening = $this->productModel->getProductById($fatEvening[2]);
$getPro3evening = $this->productModel->getProductById($fatEvening[3]);
if(empty($getPro0evening->use_id)){
    if(empty($getPro1evening->use_id) && !empty($getPro2evening->use_id)){
       
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){ 
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id)){                       
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id)){                     
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){                        
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3evening->use_id)){                     
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1evening->use_id)){
      if(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id)){
                    
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){ 
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2evening->use_id)){ 
                   
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2evening->use_id)){
     if(empty($getPro3evening->use_id)){                         
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 ;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                     
        $minus =  $fatsperservingevening0 + $fatsperservingevening1;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3evening->use_id)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0evening = $this->productModel->getProductById($fatEvening[0]);
$getPro1evening = $this->productModel->getProductById($fatEvening[1]);
$getPro2evening = $this->productModel->getProductById($fatEvening[2]);
$getPro3evening = $this->productModel->getProductById($fatEvening[3]);
$getPro4evening = $this->productModel->getProductById($fatEvening[4]);
if(empty($getPro0evening->use_id)){
    if(empty($getPro1evening->use_id) && !empty($getPro2evening->use_id) && !empty($getPro3evening->use_id) && !empty($getPro4evening->use_id)){
        
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3 +$fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id) && empty($getPro3evening->use_id)&& empty($getPro4evening->use_id)){         
      
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){                      
       
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus = $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id)){  
        if(!empty($getPro3evening->use_id)){
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                       
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;                
        $minus =  $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                       
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;                
        $minus =  $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id)){     
        
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){   
        if(!empty($getPro1evening->use_id)){ 
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3evening->use_id)){   
        if(!empty($getPro2evening->use_id)){
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4evening->use_id)){   
         
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                       
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1evening->use_id)){
      if(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id) && !empty($getPro4evening->use_id)){
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3evening->use_id) ){   
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $minus =  $fatsperservingevening0;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4evening->use_id) ){
        if(!empty($getPro3evening->use_id)){
           
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2evening->use_id)){
     if(empty($getPro3evening->use_id)){   
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 ;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                     
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                     
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                     
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3evening->use_id)){
    if(empty($getPro4evening->use_id)){
       
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id; 
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id; 
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  


}
break;

}




switch (count($fatEvening2day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fatEvening2day)){
    $getPro0evening = $this->productModel->getProductById($fatEvening2day[0]);
    $fatsperservingUseEmptyevening = $caloriesperserving /100 * 20 /9; 
    $fatsperservingevening = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0evening = $this->productModel->getProductById($fatEvening2day[0]);
    $getPro1evening = $this->productModel->getProductById($fatEvening2day[1]);
if(!empty($getPro0evening->use_id)){    
    $fatsperservingevening = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0evening->use_id;
    $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1evening->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservingevening = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1evening->use_id;
    $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1evening->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0evening = $this->productModel->getProductById($fatEvening2day[0]);
$getPro1evening = $this->productModel->getProductById($fatEvening2day[1]);
$getPro2evening = $this->productModel->getProductById($fatEvening2day[2]);
if(!empty($getPro0evening->use_id)){
    if(!empty($getPro0evening->use_id) && !empty($getPro1evening->use_id)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $minus =  $fatsperservingevening0 +$fatsperservingevening1;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0evening->use_id) && !empty($getPro2evening->use_id)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening0 +$fatsperservingevening2;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0evening)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $minus =  $fatsperservingevening0;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0evening->use_id)){
    if(!empty($getPro1evening->use_id) && !empty($getPro2evening->use_id)){    
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus = $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1evening->use_id)){  
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $minus =  $fatsperservingevening1;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2evening->use_id)){  
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1evening->use_id)){  
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0evening = $this->productModel->getProductById($fatEvening2day[0]);
$getPro1evening = $this->productModel->getProductById($fatEvening2day[1]);
$getPro2evening = $this->productModel->getProductById($fatEvening2day[2]);
$getPro3evening = $this->productModel->getProductById($fatEvening2day[3]);
if(empty($getPro0evening->use_id)){
    if(empty($getPro1evening->use_id) && !empty($getPro2evening->use_id)){
       
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){ 
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id)){                       
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id)){                     
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){                        
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3evening->use_id)){                     
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1evening->use_id)){
      if(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id)){
                    
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){ 
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2evening->use_id)){ 
                   
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2evening->use_id)){
     if(empty($getPro3evening->use_id)){                         
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 ;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                     
        $minus =  $fatsperservingevening0 + $fatsperservingevening1;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3evening->use_id)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0evening = $this->productModel->getProductById($fatEvening2day[0]);
$getPro1evening = $this->productModel->getProductById($fatEvening2day[1]);
$getPro2evening = $this->productModel->getProductById($fatEvening2day[2]);
$getPro3evening = $this->productModel->getProductById($fatEvening2day[3]);
$getPro4evening = $this->productModel->getProductById($fatEvening2day[4]);
if(empty($getPro0evening->use_id)){
    if(empty($getPro1evening->use_id) && !empty($getPro2evening->use_id) && !empty($getPro3evening->use_id) && !empty($getPro4evening->use_id)){
        
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3 +$fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id) && empty($getPro3evening->use_id)&& empty($getPro4evening->use_id)){         
      
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){                      
       
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus = $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id)){  
        if(!empty($getPro3evening->use_id)){
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                       
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;                
        $minus =  $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                       
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;                
        $minus =  $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id)){     
        
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){   
        if(!empty($getPro1evening->use_id)){ 
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3evening->use_id)){   
        if(!empty($getPro2evening->use_id)){
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4evening->use_id)){   
         
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                       
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1evening->use_id)){
      if(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id) && !empty($getPro4evening->use_id)){
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3evening->use_id) ){   
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $minus =  $fatsperservingevening0;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4evening->use_id) ){
        if(!empty($getPro3evening->use_id)){
           
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2evening->use_id)){
     if(empty($getPro3evening->use_id)){   
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 ;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                     
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                     
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                     
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3evening->use_id)){
    if(empty($getPro4evening->use_id)){
       
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id; 
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id; 
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  


}
break;

}




switch (count($fatEvening3day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fatEvening3day)){
    $getPro0evening = $this->productModel->getProductById($fatEvening3day[0]);
    $fatsperservingUseEmptyevening = $caloriesperserving /100 * 20 /9; 
    $fatsperservingevening = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0evening = $this->productModel->getProductById($fatEvening3day[0]);
    $getPro1evening = $this->productModel->getProductById($fatEvening3day[1]);
if(!empty($getPro0evening->use_id)){    
    $fatsperservingevening = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0evening->use_id;
    $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1evening->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservingevening = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1evening->use_id;
    $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1evening->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0evening = $this->productModel->getProductById($fatEvening3day[0]);
$getPro1evening = $this->productModel->getProductById($fatEvening3day[1]);
$getPro2evening = $this->productModel->getProductById($fatEvening3day[2]);
if(!empty($getPro0evening->use_id)){
    if(!empty($getPro0evening->use_id) && !empty($getPro1evening->use_id)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $minus =  $fatsperservingevening0 +$fatsperservingevening1;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0evening->use_id) && !empty($getPro2evening->use_id)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening0 +$fatsperservingevening2;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0evening)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $minus =  $fatsperservingevening0;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0evening->use_id)){
    if(!empty($getPro1evening->use_id) && !empty($getPro2evening->use_id)){    
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus = $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1evening->use_id)){  
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $minus =  $fatsperservingevening1;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2evening->use_id)){  
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1evening->use_id)){  
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0evening = $this->productModel->getProductById($fatEvening3day[0]);
$getPro1evening = $this->productModel->getProductById($fatEvening3day[1]);
$getPro2evening = $this->productModel->getProductById($fatEvening3day[2]);
$getPro3evening = $this->productModel->getProductById($fatEvening3day[3]);
if(empty($getPro0evening->use_id)){
    if(empty($getPro1evening->use_id) && !empty($getPro2evening->use_id)){
       
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){ 
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id)){                       
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id)){                     
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){                        
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3evening->use_id)){                     
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1evening->use_id)){
      if(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id)){
                    
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){ 
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2evening->use_id)){ 
                   
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2evening->use_id)){
     if(empty($getPro3evening->use_id)){                         
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 ;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                     
        $minus =  $fatsperservingevening0 + $fatsperservingevening1;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3evening->use_id)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0evening = $this->productModel->getProductById($fatEvening3day[0]);
$getPro1evening = $this->productModel->getProductById($fatEvening3day[1]);
$getPro2evening = $this->productModel->getProductById($fatEvening3day[2]);
$getPro3evening = $this->productModel->getProductById($fatEvening3day[3]);
$getPro4evening = $this->productModel->getProductById($fatEvening3day[4]);
if(empty($getPro0evening->use_id)){
    if(empty($getPro1evening->use_id) && !empty($getPro2evening->use_id) && !empty($getPro3evening->use_id) && !empty($getPro4evening->use_id)){
        
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3 +$fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id) && empty($getPro3evening->use_id)&& empty($getPro4evening->use_id)){         
      
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){                      
       
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus = $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id)){  
        if(!empty($getPro3evening->use_id)){
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                       
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;                
        $minus =  $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                       
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;                
        $minus =  $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id)){     
        
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){   
        if(!empty($getPro1evening->use_id)){ 
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3evening->use_id)){   
        if(!empty($getPro2evening->use_id)){
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4evening->use_id)){   
         
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                       
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1evening->use_id)){
      if(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id) && !empty($getPro4evening->use_id)){
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3evening->use_id) ){   
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $minus =  $fatsperservingevening0;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4evening->use_id) ){
        if(!empty($getPro3evening->use_id)){
           
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2evening->use_id)){
     if(empty($getPro3evening->use_id)){   
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 ;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                     
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                     
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                     
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3evening->use_id)){
    if(empty($getPro4evening->use_id)){
       
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id; 
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id; 
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  


}
break;

}


switch (count($fatEvening4day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fatEvening4day)){
    $getPro0evening = $this->productModel->getProductById($fatEvening4day[0]);
    $fatsperservingUseEmptyevening = $caloriesperserving /100 * 20 /9; 
    $fatsperservingevening = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0evening = $this->productModel->getProductById($fatEvening4day[0]);
    $getPro1evening = $this->productModel->getProductById($fatEvening4day[1]);
if(!empty($getPro0evening->use_id)){    
    $fatsperservingevening = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0evening->use_id;
    $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1evening->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservingevening = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1evening->use_id;
    $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1evening->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0evening = $this->productModel->getProductById($fatEvening4day[0]);
$getPro1evening = $this->productModel->getProductById($fatEvening4day[1]);
$getPro2evening = $this->productModel->getProductById($fatEvening4day[2]);
if(!empty($getPro0evening->use_id)){
    if(!empty($getPro0evening->use_id) && !empty($getPro1evening->use_id)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $minus =  $fatsperservingevening0 +$fatsperservingevening1;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0evening->use_id) && !empty($getPro2evening->use_id)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening0 +$fatsperservingevening2;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0evening)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $minus =  $fatsperservingevening0;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0evening->use_id)){
    if(!empty($getPro1evening->use_id) && !empty($getPro2evening->use_id)){    
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus = $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1evening->use_id)){  
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $minus =  $fatsperservingevening1;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2evening->use_id)){  
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1evening->use_id)){  
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0evening = $this->productModel->getProductById($fatEvening4day[0]);
$getPro1evening = $this->productModel->getProductById($fatEvening4day[1]);
$getPro2evening = $this->productModel->getProductById($fatEvening4day[2]);
$getPro3evening = $this->productModel->getProductById($fatEvening4day[3]);
if(empty($getPro0evening->use_id)){
    if(empty($getPro1evening->use_id) && !empty($getPro2evening->use_id)){
       
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){ 
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id)){                       
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id)){                     
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){                        
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3evening->use_id)){                     
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1evening->use_id)){
      if(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id)){
                    
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){ 
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2evening->use_id)){ 
                   
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2evening->use_id)){
     if(empty($getPro3evening->use_id)){                         
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 ;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                     
        $minus =  $fatsperservingevening0 + $fatsperservingevening1;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3evening->use_id)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0evening = $this->productModel->getProductById($fatEvening4day[0]);
$getPro1evening = $this->productModel->getProductById($fatEvening4day[1]);
$getPro2evening = $this->productModel->getProductById($fatEvening4day[2]);
$getPro3evening = $this->productModel->getProductById($fatEvening4day[3]);
$getPro4evening = $this->productModel->getProductById($fatEvening4day[4]);
if(empty($getPro0evening->use_id)){
    if(empty($getPro1evening->use_id) && !empty($getPro2evening->use_id) && !empty($getPro3evening->use_id) && !empty($getPro4evening->use_id)){
        
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3 +$fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id) && empty($getPro3evening->use_id)&& empty($getPro4evening->use_id)){         
      
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){                      
       
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus = $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id)){  
        if(!empty($getPro3evening->use_id)){
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                       
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;                
        $minus =  $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                       
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;                
        $minus =  $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id)){     
        
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){   
        if(!empty($getPro1evening->use_id)){ 
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3evening->use_id)){   
        if(!empty($getPro2evening->use_id)){
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4evening->use_id)){   
         
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                       
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1evening->use_id)){
      if(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id) && !empty($getPro4evening->use_id)){
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3evening->use_id) ){   
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $minus =  $fatsperservingevening0;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4evening->use_id) ){
        if(!empty($getPro3evening->use_id)){
           
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2evening->use_id)){
     if(empty($getPro3evening->use_id)){   
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 ;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                     
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                     
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                     
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3evening->use_id)){
    if(empty($getPro4evening->use_id)){
       
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id; 
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id; 
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  


}
break;

}


switch (count($fatEvening5day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fatEvening5day)){
    $getPro0evening = $this->productModel->getProductById($fatEvening5day[0]);
    $fatsperservingUseEmptyevening = $caloriesperserving /100 * 20 /9; 
    $fatsperservingevening = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0evening = $this->productModel->getProductById($fatEvening5day[0]);
    $getPro1evening = $this->productModel->getProductById($fatEvening5day[1]);
if(!empty($getPro0evening->use_id)){    
    $fatsperservingevening = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0evening->use_id;
    $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1evening->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservingevening = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1evening->use_id;
    $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1evening->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0evening = $this->productModel->getProductById($fatEvening5day[0]);
$getPro1evening = $this->productModel->getProductById($fatEvening5day[1]);
$getPro2evening = $this->productModel->getProductById($fatEvening5day[2]);
if(!empty($getPro0evening->use_id)){
    if(!empty($getPro0evening->use_id) && !empty($getPro1evening->use_id)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $minus =  $fatsperservingevening0 +$fatsperservingevening1;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0evening->use_id) && !empty($getPro2evening->use_id)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening0 +$fatsperservingevening2;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0evening)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $minus =  $fatsperservingevening0;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0evening->use_id)){
    if(!empty($getPro1evening->use_id) && !empty($getPro2evening->use_id)){    
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus = $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1evening->use_id)){  
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $minus =  $fatsperservingevening1;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2evening->use_id)){  
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1evening->use_id)){  
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0evening = $this->productModel->getProductById($fatEvening5day[0]);
$getPro1evening = $this->productModel->getProductById($fatEvening5day[1]);
$getPro2evening = $this->productModel->getProductById($fatEvening5day[2]);
$getPro3evening = $this->productModel->getProductById($fatEvening5day[3]);
if(empty($getPro0evening->use_id)){
    if(empty($getPro1evening->use_id) && !empty($getPro2evening->use_id)){
       
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){ 
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id)){                       
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id)){                     
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){                        
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3evening->use_id)){                     
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1evening->use_id)){
      if(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id)){
                    
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){ 
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2evening->use_id)){ 
                   
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2evening->use_id)){
     if(empty($getPro3evening->use_id)){                         
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 ;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                     
        $minus =  $fatsperservingevening0 + $fatsperservingevening1;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3evening->use_id)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0evening = $this->productModel->getProductById($fatEvening5day[0]);
$getPro1evening = $this->productModel->getProductById($fatEvening5day[1]);
$getPro2evening = $this->productModel->getProductById($fatEvening5day[2]);
$getPro3evening = $this->productModel->getProductById($fatEvening5day[3]);
$getPro4evening = $this->productModel->getProductById($fatEvening5day[4]);
if(empty($getPro0evening->use_id)){
    if(empty($getPro1evening->use_id) && !empty($getPro2evening->use_id) && !empty($getPro3evening->use_id) && !empty($getPro4evening->use_id)){
        
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3 +$fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id) && empty($getPro3evening->use_id)&& empty($getPro4evening->use_id)){         
      
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){                      
       
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus = $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id)){  
        if(!empty($getPro3evening->use_id)){
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                       
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;                
        $minus =  $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                       
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;                
        $minus =  $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id)){     
        
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){   
        if(!empty($getPro1evening->use_id)){ 
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3evening->use_id)){   
        if(!empty($getPro2evening->use_id)){
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4evening->use_id)){   
         
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                       
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1evening->use_id)){
      if(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id) && !empty($getPro4evening->use_id)){
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3evening->use_id) ){   
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $minus =  $fatsperservingevening0;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4evening->use_id) ){
        if(!empty($getPro3evening->use_id)){
           
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2evening->use_id)){
     if(empty($getPro3evening->use_id)){   
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 ;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                     
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                     
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                     
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3evening->use_id)){
    if(empty($getPro4evening->use_id)){
       
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id; 
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id; 
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  


}
break;

}

switch (count($fatEvening6day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fatEvening6day)){
    $getPro0evening = $this->productModel->getProductById($fatEvening6day[0]);
    $fatsperservingUseEmptyevening = $caloriesperserving /100 * 20 /9; 
    $fatsperservingevening = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0evening = $this->productModel->getProductById($fatEvening6day[0]);
    $getPro1evening = $this->productModel->getProductById($fatEvening6day[1]);
if(!empty($getPro0evening->use_id)){    
    $fatsperservingevening = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0evening->use_id;
    $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1evening->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservingevening = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1evening->use_id;
    $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1evening->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0evening = $this->productModel->getProductById($fatEvening6day[0]);
$getPro1evening = $this->productModel->getProductById($fatEvening6day[1]);
$getPro2evening = $this->productModel->getProductById($fatEvening6day[2]);
if(!empty($getPro0evening->use_id)){
    if(!empty($getPro0evening->use_id) && !empty($getPro1evening->use_id)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $minus =  $fatsperservingevening0 +$fatsperservingevening1;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0evening->use_id) && !empty($getPro2evening->use_id)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening0 +$fatsperservingevening2;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0evening)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $minus =  $fatsperservingevening0;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0evening->use_id)){
    if(!empty($getPro1evening->use_id) && !empty($getPro2evening->use_id)){    
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus = $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1evening->use_id)){  
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $minus =  $fatsperservingevening1;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2evening->use_id)){  
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1evening->use_id)){  
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0evening = $this->productModel->getProductById($fatEvening6day[0]);
$getPro1evening = $this->productModel->getProductById($fatEvening6day[1]);
$getPro2evening = $this->productModel->getProductById($fatEvening6day[2]);
$getPro3evening = $this->productModel->getProductById($fatEvening6day[3]);
if(empty($getPro0evening->use_id)){
    if(empty($getPro1evening->use_id) && !empty($getPro2evening->use_id)){
       
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){ 
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id)){                       
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id)){                     
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){                        
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3evening->use_id)){                     
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1evening->use_id)){
      if(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id)){
                    
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){ 
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2evening->use_id)){ 
                   
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2evening->use_id)){
     if(empty($getPro3evening->use_id)){                         
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 ;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                     
        $minus =  $fatsperservingevening0 + $fatsperservingevening1;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3evening->use_id)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0evening = $this->productModel->getProductById($fatEvening6day[0]);
$getPro1evening = $this->productModel->getProductById($fatEvening6day[1]);
$getPro2evening = $this->productModel->getProductById($fatEvening6day[2]);
$getPro3evening = $this->productModel->getProductById($fatEvening6day[3]);
$getPro4evening = $this->productModel->getProductById($fatEvening6day[4]);
if(empty($getPro0evening->use_id)){
    if(empty($getPro1evening->use_id) && !empty($getPro2evening->use_id) && !empty($getPro3evening->use_id) && !empty($getPro4evening->use_id)){
        
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3 +$fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id) && empty($getPro3evening->use_id)&& empty($getPro4evening->use_id)){         
      
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){                      
       
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus = $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id)){  
        if(!empty($getPro3evening->use_id)){
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                       
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;                
        $minus =  $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                       
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;                
        $minus =  $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id)){     
        
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){   
        if(!empty($getPro1evening->use_id)){ 
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3evening->use_id)){   
        if(!empty($getPro2evening->use_id)){
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4evening->use_id)){   
         
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                       
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1evening->use_id)){
      if(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id) && !empty($getPro4evening->use_id)){
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3evening->use_id) ){   
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $minus =  $fatsperservingevening0;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4evening->use_id) ){
        if(!empty($getPro3evening->use_id)){
           
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2evening->use_id)){
     if(empty($getPro3evening->use_id)){   
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 ;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                     
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                     
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                     
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3evening->use_id)){
    if(empty($getPro4evening->use_id)){
       
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id; 
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id; 
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  


}
break;

}


switch (count($fatEvening7day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fatEvening7day)){
    $getPro0evening = $this->productModel->getProductById($fatEvening7day[0]);
    $fatsperservingUseEmptyevening = $caloriesperserving /100 * 20 /9; 
    $fatsperservingevening = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0evening = $this->productModel->getProductById($fatEvening7day[0]);
    $getPro1evening = $this->productModel->getProductById($fatEvening7day[1]);
if(!empty($getPro0evening->use_id)){    
    $fatsperservingevening = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0evening->use_id;
    $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1evening->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservingevening = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1evening->use_id;
    $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1evening->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0evening = $this->productModel->getProductById($fatEvening7day[0]);
$getPro1evening = $this->productModel->getProductById($fatEvening7day[1]);
$getPro2evening = $this->productModel->getProductById($fatEvening7day[2]);
if(!empty($getPro0evening->use_id)){
    if(!empty($getPro0evening->use_id) && !empty($getPro1evening->use_id)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $minus =  $fatsperservingevening0 +$fatsperservingevening1;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0evening->use_id) && !empty($getPro2evening->use_id)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening0 +$fatsperservingevening2;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0evening)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $minus =  $fatsperservingevening0;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0evening->use_id)){
    if(!empty($getPro1evening->use_id) && !empty($getPro2evening->use_id)){    
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus = $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1evening->use_id)){  
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $minus =  $fatsperservingevening1;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2evening->use_id)){  
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1evening->use_id)){  
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0evening = $this->productModel->getProductById($fatEvening7day[0]);
$getPro1evening = $this->productModel->getProductById($fatEvening7day[1]);
$getPro2evening = $this->productModel->getProductById($fatEvening7day[2]);
$getPro3evening = $this->productModel->getProductById($fatEvening7day[3]);
if(empty($getPro0evening->use_id)){
    if(empty($getPro1evening->use_id) && !empty($getPro2evening->use_id)){
       
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){ 
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id)){                       
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id)){                     
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){                        
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3evening->use_id)){                     
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1evening->use_id)){
      if(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id)){
                    
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){ 
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2evening->use_id)){ 
                   
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2evening->use_id)){
     if(empty($getPro3evening->use_id)){                         
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 ;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                     
        $minus =  $fatsperservingevening0 + $fatsperservingevening1;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3evening->use_id)){
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0evening = $this->productModel->getProductById($fatEvening7day[0]);
$getPro1evening = $this->productModel->getProductById($fatEvening7day[1]);
$getPro2evening = $this->productModel->getProductById($fatEvening7day[2]);
$getPro3evening = $this->productModel->getProductById($fatEvening7day[3]);
$getPro4evening = $this->productModel->getProductById($fatEvening7day[4]);
if(empty($getPro0evening->use_id)){
    if(empty($getPro1evening->use_id) && !empty($getPro2evening->use_id) && !empty($getPro3evening->use_id) && !empty($getPro4evening->use_id)){
        
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3 +$fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id) && empty($getPro3evening->use_id)&& empty($getPro4evening->use_id)){         
      
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){                      
       
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus = $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1evening->use_id) && empty($getPro2evening->use_id)){  
        if(!empty($getPro3evening->use_id)){
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                       
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;                
        $minus =  $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                       
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;                
        $minus =  $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id)){     
        
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2evening->use_id) && empty($getPro3evening->use_id)){   
        if(!empty($getPro1evening->use_id)){ 
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                      
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3evening->use_id)){   
        if(!empty($getPro2evening->use_id)){
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4evening->use_id)){   
         
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                       
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1evening->use_id)){
      if(empty($getPro2evening->use_id) && !empty($getPro3evening->use_id) && !empty($getPro4evening->use_id)){
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3evening->use_id) ){   
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $minus =  $fatsperservingevening0;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4evening->use_id) ){
        if(!empty($getPro3evening->use_id)){
           
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4evening->use_id;
        $minus =  $fatsperservingevening0 + $fatsperservingevening2 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2evening->use_id)){
     if(empty($getPro3evening->use_id)){   
        
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 ;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;                     
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                     
        $fatsperservingevening4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id;                     
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening3 + $fatsperservingevening4;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3evening->use_id)){
    if(empty($getPro4evening->use_id)){
       
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id;               
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2;
        $fatsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservingevening0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0evening->use_id;
        $fatsperservingevening1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1evening->use_id;               
        $fatsperservingevening2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2evening->use_id; 
        $fatsperservingevening3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3evening->use_id; 
        $minus =  $fatsperservingevening0 + $fatsperservingevening1 + $fatsperservingevening2 + $fatsperservingevening3;
        $fatsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingevening = $caloriesperserving /100 * 20 /9;  


}
break;

}
