<?php 

switch (count($fatAfternoon)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fatAfternoon)){
    $getPro0afternoon = $this->productModel->getProductById($fatAfternoon[0]);
    $fatsperservingUseEmptyafternoon = $caloriesperserving /100 * 20 /9; 
    $fatsperservingafternoon = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0afternoon = $this->productModel->getProductById($fatAfternoon[0]);
    $getPro1afternoon = $this->productModel->getProductById($fatAfternoon[1]);
if(!empty($getPro0afternoon->use_id)){    
    $fatsperservingafternoon = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0afternoon->use_id;
    $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1afternoon->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservingafternoon = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1afternoon->use_id;
    $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1afternoon->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0afternoon = $this->productModel->getProductById($fatAfternoon[0]);
$getPro1afternoon = $this->productModel->getProductById($fatAfternoon[1]);
$getPro2afternoon = $this->productModel->getProductById($fatAfternoon[2]);
if(!empty($getPro0afternoon->use_id)){
    if(!empty($getPro0afternoon->use_id) && !empty($getPro1afternoon->use_id)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $minus =  $fatsperservingafternoon0 +$fatsperservingafternoon1;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0afternoon->use_id) && !empty($getPro2afternoon->use_id)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon0 +$fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0afternoon)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $minus =  $fatsperservingafternoon0;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0afternoon->use_id)){
    if(!empty($getPro1afternoon->use_id) && !empty($getPro2afternoon->use_id)){    
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus = $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1afternoon->use_id)){  
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $minus =  $fatsperservingafternoon1;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2afternoon->use_id)){  
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1afternoon->use_id)){  
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0afternoon = $this->productModel->getProductById($fatAfternoon[0]);
$getPro1afternoon = $this->productModel->getProductById($fatAfternoon[1]);
$getPro2afternoon = $this->productModel->getProductById($fatAfternoon[2]);
$getPro3afternoon = $this->productModel->getProductById($fatAfternoon[3]);
if(empty($getPro0afternoon->use_id)){
    if(empty($getPro1afternoon->use_id) && !empty($getPro2afternoon->use_id)){
       
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){ 
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id)){                       
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id)){                     
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){                        
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3afternoon->use_id)){                     
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1afternoon->use_id)){
      if(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id)){
                    
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){ 
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2afternoon->use_id)){ 
                   
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2afternoon->use_id)){
     if(empty($getPro3afternoon->use_id)){                         
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 ;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                     
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3afternoon->use_id)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0afternoon = $this->productModel->getProductById($fatAfternoon[0]);
$getPro1afternoon = $this->productModel->getProductById($fatAfternoon[1]);
$getPro2afternoon = $this->productModel->getProductById($fatAfternoon[2]);
$getPro3afternoon = $this->productModel->getProductById($fatAfternoon[3]);
$getPro4afternoon = $this->productModel->getProductById($fatAfternoon[4]);
if(empty($getPro0afternoon->use_id)){
    if(empty($getPro1afternoon->use_id) && !empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id) && !empty($getPro4afternoon->use_id)){
        
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3 +$fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)&& empty($getPro4afternoon->use_id)){         
      
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){                      
       
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus = $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id)){  
        if(!empty($getPro3afternoon->use_id)){
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                       
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;                
        $minus =  $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                       
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;                
        $minus =  $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id)){     
        
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){   
        if(!empty($getPro1afternoon->use_id)){ 
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3afternoon->use_id)){   
        if(!empty($getPro2afternoon->use_id)){
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4afternoon->use_id)){   
         
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                       
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1afternoon->use_id)){
      if(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id) && !empty($getPro4afternoon->use_id)){
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3afternoon->use_id) ){   
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $minus =  $fatsperservingafternoon0;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4afternoon->use_id) ){
        if(!empty($getPro3afternoon->use_id)){
           
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2afternoon->use_id)){
     if(empty($getPro3afternoon->use_id)){   
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 ;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                     
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                     
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                     
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3afternoon->use_id)){
    if(empty($getPro4afternoon->use_id)){
       
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id; 
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id; 
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  


}
break;

}



switch (count($fatAfternoon2day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fatAfternoon2day)) {
    $getPro0afternoon = $this->productModel->getProductById($fatAfternoon2day[0]);
    $fatsperservingUseEmptyafternoon = $caloriesperserving /100 * 20 /9; 
    $fatsperservingafternoon = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0afternoon = $this->productModel->getProductById($fatAfternoon2day[0]);
    $getPro1afternoon = $this->productModel->getProductById($fatAfternoon2day[1]);
if(!empty($getPro0afternoon->use_id)){    
    $fatsperservingafternoon = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0afternoon->use_id;
    $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1afternoon->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservingafternoon = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1afternoon->use_id;
    $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1afternoon->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0afternoon = $this->productModel->getProductById($fatAfternoon2day[0]);
$getPro1afternoon = $this->productModel->getProductById($fatAfternoon2day[1]);
$getPro2afternoon = $this->productModel->getProductById($fatAfternoon2day[2]);
if(!empty($getPro0afternoon->use_id)){
    if(!empty($getPro0afternoon->use_id) && !empty($getPro1afternoon->use_id)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $minus =  $fatsperservingafternoon0 +$fatsperservingafternoon1;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0afternoon->use_id) && !empty($getPro2afternoon->use_id)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon0 +$fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0afternoon)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $minus =  $fatsperservingafternoon0;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0afternoon->use_id)){
    if(!empty($getPro1afternoon->use_id) && !empty($getPro2afternoon->use_id)){    
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus = $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1afternoon->use_id)){  
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $minus =  $fatsperservingafternoon1;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2afternoon->use_id)){  
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1afternoon->use_id)){  
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0afternoon = $this->productModel->getProductById($fatAfternoon2day[0]);
$getPro1afternoon = $this->productModel->getProductById($fatAfternoon2day[1]);
$getPro2afternoon = $this->productModel->getProductById($fatAfternoon2day[2]);
$getPro3afternoon = $this->productModel->getProductById($fatAfternoon2day[3]);
if(empty($getPro0afternoon->use_id)){
    if(empty($getPro1afternoon->use_id) && !empty($getPro2afternoon->use_id)){
       
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){ 
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id)){                       
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id)){                     
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){                        
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3afternoon->use_id)){                     
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1afternoon->use_id)){
      if(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id)){
                    
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){ 
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2afternoon->use_id)){ 
                   
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2afternoon->use_id)){
     if(empty($getPro3afternoon->use_id)){                         
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 ;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                     
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3afternoon->use_id)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0afternoon = $this->productModel->getProductById($fatAfternoon2day[0]);
$getPro1afternoon = $this->productModel->getProductById($fatAfternoon2day[1]);
$getPro2afternoon = $this->productModel->getProductById($fatAfternoon2day[2]);
$getPro3afternoon = $this->productModel->getProductById($fatAfternoon2day[3]);
$getPro4afternoon = $this->productModel->getProductById($fatAfternoon2day[4]);
if(empty($getPro0afternoon->use_id)){
    if(empty($getPro1afternoon->use_id) && !empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id) && !empty($getPro4afternoon->use_id)){
        
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3 +$fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)&& empty($getPro4afternoon->use_id)){         
      
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){                      
       
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus = $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id)){  
        if(!empty($getPro3afternoon->use_id)){
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                       
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;                
        $minus =  $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                       
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;                
        $minus =  $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id)){     
        
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){   
        if(!empty($getPro1afternoon->use_id)){ 
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3afternoon->use_id)){   
        if(!empty($getPro2afternoon->use_id)){
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4afternoon->use_id)){   
         
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                       
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1afternoon->use_id)){
      if(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id) && !empty($getPro4afternoon->use_id)){
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3afternoon->use_id) ){   
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $minus =  $fatsperservingafternoon0;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4afternoon->use_id) ){
        if(!empty($getPro3afternoon->use_id)){
           
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2afternoon->use_id)){
     if(empty($getPro3afternoon->use_id)){   
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 ;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                     
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                     
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                     
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3afternoon->use_id)){
    if(empty($getPro4afternoon->use_id)){
       
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id; 
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id; 
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  


}
break;

}



switch (count($fatAfternoon3day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fatAfternoon3day)) {
    $getPro0afternoon = $this->productModel->getProductById($fatAfternoon3day[0]);
    $fatsperservingUseEmptyafternoon = $caloriesperserving /100 * 20 /9; 
    $fatsperservingafternoon = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0afternoon = $this->productModel->getProductById($fatAfternoon3day[0]);
    $getPro1afternoon = $this->productModel->getProductById($fatAfternoon3day[1]);
if(!empty($getPro0afternoon->use_id)){    
    $fatsperservingafternoon = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0afternoon->use_id;
    $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1afternoon->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservingafternoon = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1afternoon->use_id;
    $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1afternoon->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0afternoon = $this->productModel->getProductById($fatAfternoon3day[0]);
$getPro1afternoon = $this->productModel->getProductById($fatAfternoon3day[1]);
$getPro2afternoon = $this->productModel->getProductById($fatAfternoon3day[2]);
if(!empty($getPro0afternoon->use_id)){
    if(!empty($getPro0afternoon->use_id) && !empty($getPro1afternoon->use_id)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $minus =  $fatsperservingafternoon0 +$fatsperservingafternoon1;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0afternoon->use_id) && !empty($getPro2afternoon->use_id)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon0 +$fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0afternoon)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $minus =  $fatsperservingafternoon0;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0afternoon->use_id)){
    if(!empty($getPro1afternoon->use_id) && !empty($getPro2afternoon->use_id)){    
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus = $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1afternoon->use_id)){  
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $minus =  $fatsperservingafternoon1;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2afternoon->use_id)){  
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1afternoon->use_id)){  
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0afternoon = $this->productModel->getProductById($fatAfternoon3day[0]);
$getPro1afternoon = $this->productModel->getProductById($fatAfternoon3day[1]);
$getPro2afternoon = $this->productModel->getProductById($fatAfternoon3day[2]);
$getPro3afternoon = $this->productModel->getProductById($fatAfternoon3day[3]);
if(empty($getPro0afternoon->use_id)){
    if(empty($getPro1afternoon->use_id) && !empty($getPro2afternoon->use_id)){
       
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){ 
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id)){                       
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id)){                     
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){                        
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3afternoon->use_id)){                     
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1afternoon->use_id)){
      if(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id)){
                    
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){ 
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2afternoon->use_id)){ 
                   
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2afternoon->use_id)){
     if(empty($getPro3afternoon->use_id)){                         
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 ;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                     
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3afternoon->use_id)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0afternoon = $this->productModel->getProductById($fatAfternoon3day[0]);
$getPro1afternoon = $this->productModel->getProductById($fatAfternoon3day[1]);
$getPro2afternoon = $this->productModel->getProductById($fatAfternoon3day[2]);
$getPro3afternoon = $this->productModel->getProductById($fatAfternoon3day[3]);
$getPro4afternoon = $this->productModel->getProductById($fatAfternoon3day[4]);
if(empty($getPro0afternoon->use_id)){
    if(empty($getPro1afternoon->use_id) && !empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id) && !empty($getPro4afternoon->use_id)){
        
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3 +$fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)&& empty($getPro4afternoon->use_id)){         
      
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){                      
       
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus = $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id)){  
        if(!empty($getPro3afternoon->use_id)){
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                       
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;                
        $minus =  $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                       
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;                
        $minus =  $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id)){     
        
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){   
        if(!empty($getPro1afternoon->use_id)){ 
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3afternoon->use_id)){   
        if(!empty($getPro2afternoon->use_id)){
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4afternoon->use_id)){   
         
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                       
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1afternoon->use_id)){
      if(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id) && !empty($getPro4afternoon->use_id)){
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3afternoon->use_id) ){   
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $minus =  $fatsperservingafternoon0;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4afternoon->use_id) ){
        if(!empty($getPro3afternoon->use_id)){
           
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2afternoon->use_id)){
     if(empty($getPro3afternoon->use_id)){   
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 ;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                     
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                     
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                     
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3afternoon->use_id)){
    if(empty($getPro4afternoon->use_id)){
       
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id; 
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id; 
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  


}
break;

}



switch (count($fatAfternoon4day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fatAfternoon4day)) {
    $getPro0afternoon = $this->productModel->getProductById($fatAfternoon4day[0]);
    $fatsperservingUseEmptyafternoon = $caloriesperserving /100 * 20 /9; 
    $fatsperservingafternoon = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0afternoon = $this->productModel->getProductById($fatAfternoon4day[0]);
    $getPro1afternoon = $this->productModel->getProductById($fatAfternoon4day[1]);
if(!empty($getPro0afternoon->use_id)){    
    $fatsperservingafternoon = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0afternoon->use_id;
    $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1afternoon->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservingafternoon = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1afternoon->use_id;
    $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1afternoon->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0afternoon = $this->productModel->getProductById($fatAfternoon4day[0]);
$getPro1afternoon = $this->productModel->getProductById($fatAfternoon4day[1]);
$getPro2afternoon = $this->productModel->getProductById($fatAfternoon4day[2]);
if(!empty($getPro0afternoon->use_id)){
    if(!empty($getPro0afternoon->use_id) && !empty($getPro1afternoon->use_id)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $minus =  $fatsperservingafternoon0 +$fatsperservingafternoon1;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0afternoon->use_id) && !empty($getPro2afternoon->use_id)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon0 +$fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0afternoon)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $minus =  $fatsperservingafternoon0;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0afternoon->use_id)){
    if(!empty($getPro1afternoon->use_id) && !empty($getPro2afternoon->use_id)){    
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus = $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1afternoon->use_id)){  
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $minus =  $fatsperservingafternoon1;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2afternoon->use_id)){  
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1afternoon->use_id)){  
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0afternoon = $this->productModel->getProductById($fatAfternoon4day[0]);
$getPro1afternoon = $this->productModel->getProductById($fatAfternoon4day[1]);
$getPro2afternoon = $this->productModel->getProductById($fatAfternoon4day[2]);
$getPro3afternoon = $this->productModel->getProductById($fatAfternoon4day[3]);
if(empty($getPro0afternoon->use_id)){
    if(empty($getPro1afternoon->use_id) && !empty($getPro2afternoon->use_id)){
       
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){ 
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id)){                       
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id)){                     
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){                        
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3afternoon->use_id)){                     
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1afternoon->use_id)){
      if(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id)){
                    
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){ 
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2afternoon->use_id)){ 
                   
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2afternoon->use_id)){
     if(empty($getPro3afternoon->use_id)){                         
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 ;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                     
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3afternoon->use_id)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0afternoon = $this->productModel->getProductById($fatAfternoon4day[0]);
$getPro1afternoon = $this->productModel->getProductById($fatAfternoon4day[1]);
$getPro2afternoon = $this->productModel->getProductById($fatAfternoon4day[2]);
$getPro3afternoon = $this->productModel->getProductById($fatAfternoon4day[3]);
$getPro4afternoon = $this->productModel->getProductById($fatAfternoon4day[4]);
if(empty($getPro0afternoon->use_id)){
    if(empty($getPro1afternoon->use_id) && !empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id) && !empty($getPro4afternoon->use_id)){
        
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3 +$fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)&& empty($getPro4afternoon->use_id)){         
      
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){                      
       
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus = $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id)){  
        if(!empty($getPro3afternoon->use_id)){
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                       
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;                
        $minus =  $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                       
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;                
        $minus =  $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id)){     
        
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){   
        if(!empty($getPro1afternoon->use_id)){ 
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3afternoon->use_id)){   
        if(!empty($getPro2afternoon->use_id)){
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4afternoon->use_id)){   
         
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                       
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1afternoon->use_id)){
      if(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id) && !empty($getPro4afternoon->use_id)){
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3afternoon->use_id) ){   
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $minus =  $fatsperservingafternoon0;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4afternoon->use_id) ){
        if(!empty($getPro3afternoon->use_id)){
           
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2afternoon->use_id)){
     if(empty($getPro3afternoon->use_id)){   
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 ;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                     
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                     
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                     
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3afternoon->use_id)){
    if(empty($getPro4afternoon->use_id)){
       
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id; 
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id; 
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  


}
break;

}



switch (count($fatAfternoon5day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fatAfternoon5day)) {
    $getPro0afternoon = $this->productModel->getProductById($fatAfternoon5day[0]);
    $fatsperservingUseEmptyafternoon = $caloriesperserving /100 * 20 /9; 
    $fatsperservingafternoon = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0afternoon = $this->productModel->getProductById($fatAfternoon5day[0]);
    $getPro1afternoon = $this->productModel->getProductById($fatAfternoon5day[1]);
if(!empty($getPro0afternoon->use_id)){    
    $fatsperservingafternoon = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0afternoon->use_id;
    $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1afternoon->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservingafternoon = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1afternoon->use_id;
    $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1afternoon->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0afternoon = $this->productModel->getProductById($fatAfternoon5day[0]);
$getPro1afternoon = $this->productModel->getProductById($fatAfternoon5day[1]);
$getPro2afternoon = $this->productModel->getProductById($fatAfternoon5day[2]);
if(!empty($getPro0afternoon->use_id)){
    if(!empty($getPro0afternoon->use_id) && !empty($getPro1afternoon->use_id)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $minus =  $fatsperservingafternoon0 +$fatsperservingafternoon1;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0afternoon->use_id) && !empty($getPro2afternoon->use_id)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon0 +$fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0afternoon)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $minus =  $fatsperservingafternoon0;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0afternoon->use_id)){
    if(!empty($getPro1afternoon->use_id) && !empty($getPro2afternoon->use_id)){    
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus = $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1afternoon->use_id)){  
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $minus =  $fatsperservingafternoon1;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2afternoon->use_id)){  
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1afternoon->use_id)){  
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0afternoon = $this->productModel->getProductById($fatAfternoon5day[0]);
$getPro1afternoon = $this->productModel->getProductById($fatAfternoon5day[1]);
$getPro2afternoon = $this->productModel->getProductById($fatAfternoon5day[2]);
$getPro3afternoon = $this->productModel->getProductById($fatAfternoon5day[3]);
if(empty($getPro0afternoon->use_id)){
    if(empty($getPro1afternoon->use_id) && !empty($getPro2afternoon->use_id)){
       
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){ 
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id)){                       
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id)){                     
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){                        
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3afternoon->use_id)){                     
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1afternoon->use_id)){
      if(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id)){
                    
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){ 
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2afternoon->use_id)){ 
                   
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2afternoon->use_id)){
     if(empty($getPro3afternoon->use_id)){                         
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 ;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                     
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3afternoon->use_id)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0afternoon = $this->productModel->getProductById($fatAfternoon5day[0]);
$getPro1afternoon = $this->productModel->getProductById($fatAfternoon5day[1]);
$getPro2afternoon = $this->productModel->getProductById($fatAfternoon5day[2]);
$getPro3afternoon = $this->productModel->getProductById($fatAfternoon5day[3]);
$getPro4afternoon = $this->productModel->getProductById($fatAfternoon5day[4]);
if(empty($getPro0afternoon->use_id)){
    if(empty($getPro1afternoon->use_id) && !empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id) && !empty($getPro4afternoon->use_id)){
        
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3 +$fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)&& empty($getPro4afternoon->use_id)){         
      
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){                      
       
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus = $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id)){  
        if(!empty($getPro3afternoon->use_id)){
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                       
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;                
        $minus =  $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                       
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;                
        $minus =  $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id)){     
        
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){   
        if(!empty($getPro1afternoon->use_id)){ 
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3afternoon->use_id)){   
        if(!empty($getPro2afternoon->use_id)){
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4afternoon->use_id)){   
         
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                       
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1afternoon->use_id)){
      if(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id) && !empty($getPro4afternoon->use_id)){
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3afternoon->use_id) ){   
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $minus =  $fatsperservingafternoon0;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4afternoon->use_id) ){
        if(!empty($getPro3afternoon->use_id)){
           
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2afternoon->use_id)){
     if(empty($getPro3afternoon->use_id)){   
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 ;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                     
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                     
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                     
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3afternoon->use_id)){
    if(empty($getPro4afternoon->use_id)){
       
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id; 
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id; 
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  


}
break;

}



switch (count($fatAfternoon6day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fatAfternoon6day)) {
    $getPro0afternoon = $this->productModel->getProductById($fatAfternoon6day[0]);
    $fatsperservingUseEmptyafternoon = $caloriesperserving /100 * 20 /9; 
    $fatsperservingafternoon = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0afternoon = $this->productModel->getProductById($fatAfternoon6day[0]);
    $getPro1afternoon = $this->productModel->getProductById($fatAfternoon6day[1]);
if(!empty($getPro0afternoon->use_id)){    
    $fatsperservingafternoon = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0afternoon->use_id;
    $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1afternoon->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservingafternoon = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1afternoon->use_id;
    $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1afternoon->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0afternoon = $this->productModel->getProductById($fatAfternoon6day[0]);
$getPro1afternoon = $this->productModel->getProductById($fatAfternoon6day[1]);
$getPro2afternoon = $this->productModel->getProductById($fatAfternoon6day[2]);
if(!empty($getPro0afternoon->use_id)){
    if(!empty($getPro0afternoon->use_id) && !empty($getPro1afternoon->use_id)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $minus =  $fatsperservingafternoon0 +$fatsperservingafternoon1;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0afternoon->use_id) && !empty($getPro2afternoon->use_id)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon0 +$fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0afternoon)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $minus =  $fatsperservingafternoon0;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0afternoon->use_id)){
    if(!empty($getPro1afternoon->use_id) && !empty($getPro2afternoon->use_id)){    
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus = $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1afternoon->use_id)){  
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $minus =  $fatsperservingafternoon1;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2afternoon->use_id)){  
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1afternoon->use_id)){  
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0afternoon = $this->productModel->getProductById($fatAfternoon6day[0]);
$getPro1afternoon = $this->productModel->getProductById($fatAfternoon6day[1]);
$getPro2afternoon = $this->productModel->getProductById($fatAfternoon6day[2]);
$getPro3afternoon = $this->productModel->getProductById($fatAfternoon6day[3]);
if(empty($getPro0afternoon->use_id)){
    if(empty($getPro1afternoon->use_id) && !empty($getPro2afternoon->use_id)){
       
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){ 
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id)){                       
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id)){                     
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){                        
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3afternoon->use_id)){                     
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1afternoon->use_id)){
      if(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id)){
                    
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){ 
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2afternoon->use_id)){ 
                   
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2afternoon->use_id)){
     if(empty($getPro3afternoon->use_id)){                         
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 ;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                     
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3afternoon->use_id)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0afternoon = $this->productModel->getProductById($fatAfternoon6day[0]);
$getPro1afternoon = $this->productModel->getProductById($fatAfternoon6day[1]);
$getPro2afternoon = $this->productModel->getProductById($fatAfternoon6day[2]);
$getPro3afternoon = $this->productModel->getProductById($fatAfternoon6day[3]);
$getPro4afternoon = $this->productModel->getProductById($fatAfternoon6day[4]);
if(empty($getPro0afternoon->use_id)){
    if(empty($getPro1afternoon->use_id) && !empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id) && !empty($getPro4afternoon->use_id)){
        
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3 +$fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)&& empty($getPro4afternoon->use_id)){         
      
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){                      
       
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus = $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id)){  
        if(!empty($getPro3afternoon->use_id)){
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                       
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;                
        $minus =  $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                       
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;                
        $minus =  $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id)){     
        
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){   
        if(!empty($getPro1afternoon->use_id)){ 
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3afternoon->use_id)){   
        if(!empty($getPro2afternoon->use_id)){
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4afternoon->use_id)){   
         
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                       
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1afternoon->use_id)){
      if(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id) && !empty($getPro4afternoon->use_id)){
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3afternoon->use_id) ){   
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $minus =  $fatsperservingafternoon0;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4afternoon->use_id) ){
        if(!empty($getPro3afternoon->use_id)){
           
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2afternoon->use_id)){
     if(empty($getPro3afternoon->use_id)){   
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 ;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                     
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                     
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                     
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3afternoon->use_id)){
    if(empty($getPro4afternoon->use_id)){
       
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id; 
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id; 
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  


}
break;

}

switch (count($fatAfternoon7day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fatAfternoon7day)) {
    $getPro0afternoon = $this->productModel->getProductById($fatAfternoon7day[0]);
    $fatsperservingUseEmptyafternoon = $caloriesperserving /100 * 20 /9; 
    $fatsperservingafternoon = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0afternoon = $this->productModel->getProductById($fatAfternoon7day[0]);
    $getPro1afternoon = $this->productModel->getProductById($fatAfternoon7day[1]);
if(!empty($getPro0afternoon->use_id)){    
    $fatsperservingafternoon = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0afternoon->use_id;
    $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1afternoon->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservingafternoon = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1afternoon->use_id;
    $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1afternoon->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0afternoon = $this->productModel->getProductById($fatAfternoon7day[0]);
$getPro1afternoon = $this->productModel->getProductById($fatAfternoon7day[1]);
$getPro2afternoon = $this->productModel->getProductById($fatAfternoon7day[2]);
if(!empty($getPro0afternoon->use_id)){
    if(!empty($getPro0afternoon->use_id) && !empty($getPro1afternoon->use_id)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $minus =  $fatsperservingafternoon0 +$fatsperservingafternoon1;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0afternoon->use_id) && !empty($getPro2afternoon->use_id)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon0 +$fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0afternoon)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $minus =  $fatsperservingafternoon0;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0afternoon->use_id)){
    if(!empty($getPro1afternoon->use_id) && !empty($getPro2afternoon->use_id)){    
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus = $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1afternoon->use_id)){  
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $minus =  $fatsperservingafternoon1;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2afternoon->use_id)){  
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1afternoon->use_id)){  
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0afternoon = $this->productModel->getProductById($fatAfternoon7day[0]);
$getPro1afternoon = $this->productModel->getProductById($fatAfternoon7day[1]);
$getPro2afternoon = $this->productModel->getProductById($fatAfternoon7day[2]);
$getPro3afternoon = $this->productModel->getProductById($fatAfternoon7day[3]);
if(empty($getPro0afternoon->use_id)){
    if(empty($getPro1afternoon->use_id) && !empty($getPro2afternoon->use_id)){
       
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){ 
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id)){                       
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id)){                     
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){                        
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3afternoon->use_id)){                     
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1afternoon->use_id)){
      if(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id)){
                    
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){ 
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2afternoon->use_id)){ 
                   
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2afternoon->use_id)){
     if(empty($getPro3afternoon->use_id)){                         
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 ;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                     
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3afternoon->use_id)){
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0afternoon = $this->productModel->getProductById($fatAfternoon7day[0]);
$getPro1afternoon = $this->productModel->getProductById($fatAfternoon7day[1]);
$getPro2afternoon = $this->productModel->getProductById($fatAfternoon7day[2]);
$getPro3afternoon = $this->productModel->getProductById($fatAfternoon7day[3]);
$getPro4afternoon = $this->productModel->getProductById($fatAfternoon7day[4]);
if(empty($getPro0afternoon->use_id)){
    if(empty($getPro1afternoon->use_id) && !empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id) && !empty($getPro4afternoon->use_id)){
        
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3 +$fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)&& empty($getPro4afternoon->use_id)){         
      
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){                      
       
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus = $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1afternoon->use_id) && empty($getPro2afternoon->use_id)){  
        if(!empty($getPro3afternoon->use_id)){
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                       
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;                
        $minus =  $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                       
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;                
        $minus =  $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id)){     
        
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2afternoon->use_id) && empty($getPro3afternoon->use_id)){   
        if(!empty($getPro1afternoon->use_id)){ 
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                      
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3afternoon->use_id)){   
        if(!empty($getPro2afternoon->use_id)){
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4afternoon->use_id)){   
         
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                       
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1afternoon->use_id)){
      if(empty($getPro2afternoon->use_id) && !empty($getPro3afternoon->use_id) && !empty($getPro4afternoon->use_id)){
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3afternoon->use_id) ){   
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $minus =  $fatsperservingafternoon0;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4afternoon->use_id) ){
        if(!empty($getPro3afternoon->use_id)){
           
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4afternoon->use_id;
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon2 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2afternoon->use_id)){
     if(empty($getPro3afternoon->use_id)){   
        
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 ;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;                     
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                     
        $fatsperservingafternoon4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id;                     
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon3 + $fatsperservingafternoon4;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3afternoon->use_id)){
    if(empty($getPro4afternoon->use_id)){
       
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id;               
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2;
        $fatsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservingafternoon0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0afternoon->use_id;
        $fatsperservingafternoon1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1afternoon->use_id;               
        $fatsperservingafternoon2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2afternoon->use_id; 
        $fatsperservingafternoon3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3afternoon->use_id; 
        $minus =  $fatsperservingafternoon0 + $fatsperservingafternoon1 + $fatsperservingafternoon2 + $fatsperservingafternoon3;
        $fatsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservingafternoon = $caloriesperserving /100 * 20 /9;  


}
break;

}
