<?php 

switch (count($fatEvening)) {
    case 1:
    // One Product with out use_id or with use_id
    $getPro0evening = $this->productModel->getProductById($fatEvening[0]);
    $fatsperservingUseEmptyevening = $caloriesperserving /100 * 20 /9; 
    $fatsperservingevening = $caloriesperserving /100  * 20 /9;
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
