<?php 

switch (count($fatLunch)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fatLunch)){
    $getPro0lunch = $this->productModel->getProductById($fatLunch[0]);
    $fatsperservingUseEmptylunch = $caloriesperserving /100 * 20 /9; 
    $fatsperservinglunch = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0lunch = $this->productModel->getProductById($fatLunch[0]);
    $getPro1lunch = $this->productModel->getProductById($fatLunch[1]);
if(!empty($getPro0lunch->use_id)){    
    $fatsperservinglunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0lunch->use_id;
    $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1lunch->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservinglunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1lunch->use_id;
    $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1lunch->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0lunch = $this->productModel->getProductById($fatLunch[0]);
$getPro1lunch = $this->productModel->getProductById($fatLunch[1]);
$getPro2lunch = $this->productModel->getProductById($fatLunch[2]);
if(!empty($getPro0lunch->use_id)){
    if(!empty($getPro0lunch->use_id) && !empty($getPro1lunch->use_id)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $minus =  $fatsperservinglunch0 +$fatsperservinglunch1;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0lunch->use_id) && !empty($getPro2lunch->use_id)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch0 +$fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0lunch)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $minus =  $fatsperservinglunch0;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0lunch->use_id)){
    if(!empty($getPro1lunch->use_id) && !empty($getPro2lunch->use_id)){    
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus = $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1lunch->use_id)){  
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $minus =  $fatsperservinglunch1;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2lunch->use_id)){  
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1lunch->use_id)){  
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0lunch = $this->productModel->getProductById($fatLunch[0]);
$getPro1lunch = $this->productModel->getProductById($fatLunch[1]);
$getPro2lunch = $this->productModel->getProductById($fatLunch[2]);
$getPro3lunch = $this->productModel->getProductById($fatLunch[3]);
if(empty($getPro0lunch->use_id)){
    if(empty($getPro1lunch->use_id) && !empty($getPro2lunch->use_id)){
       
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){ 
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id)){                       
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id)){                     
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){                        
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3lunch->use_id)){                     
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1lunch->use_id)){
      if(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id)){
                    
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){ 
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2lunch->use_id)){ 
                   
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2lunch->use_id)){
     if(empty($getPro3lunch->use_id)){                         
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 ;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                     
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3lunch->use_id)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0lunch = $this->productModel->getProductById($fatLunch[0]);
$getPro1lunch = $this->productModel->getProductById($fatLunch[1]);
$getPro2lunch = $this->productModel->getProductById($fatLunch[2]);
$getPro3lunch = $this->productModel->getProductById($fatLunch[3]);
$getPro4lunch = $this->productModel->getProductById($fatLunch[4]);
if(empty($getPro0lunch->use_id)){
    if(empty($getPro1lunch->use_id) && !empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id) && !empty($getPro4lunch->use_id)){
        
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3 +$fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)&& empty($getPro4lunch->use_id)){         
      
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){                      
       
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus = $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id)){  
        if(!empty($getPro3lunch->use_id)){
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                       
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;                
        $minus =  $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                       
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;                
        $minus =  $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id)){     
        
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){   
        if(!empty($getPro1lunch->use_id)){ 
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3lunch->use_id)){   
        if(!empty($getPro2lunch->use_id)){
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4lunch->use_id)){   
         
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                       
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1lunch->use_id)){
      if(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id) && !empty($getPro4lunch->use_id)){
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3lunch->use_id) ){   
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $minus =  $fatsperservinglunch0;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4lunch->use_id) ){
        if(!empty($getPro3lunch->use_id)){
           
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2lunch->use_id)){
     if(empty($getPro3lunch->use_id)){   
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 ;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                     
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                     
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                     
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3lunch->use_id)){
    if(empty($getPro4lunch->use_id)){
       
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id; 
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id; 
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  


}
break;

}

switch (count($fatLunch2day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fatLunch2day)){
    $getPro0lunch = $this->productModel->getProductById($fatLunch2day[0]);
    $fatsperservingUseEmptylunch = $caloriesperserving /100 * 20 /9; 
    $fatsperservinglunch = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0lunch = $this->productModel->getProductById($fatLunch2day[0]);
    $getPro1lunch = $this->productModel->getProductById($fatLunch2day[1]);
if(!empty($getPro0lunch->use_id)){    
    $fatsperservinglunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0lunch->use_id;
    $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1lunch->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservinglunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1lunch->use_id;
    $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1lunch->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0lunch = $this->productModel->getProductById($fatLunch2day[0]);
$getPro1lunch = $this->productModel->getProductById($fatLunch2day[1]);
$getPro2lunch = $this->productModel->getProductById($fatLunch2day[2]);
if(!empty($getPro0lunch->use_id)){
    if(!empty($getPro0lunch->use_id) && !empty($getPro1lunch->use_id)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $minus =  $fatsperservinglunch0 +$fatsperservinglunch1;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0lunch->use_id) && !empty($getPro2lunch->use_id)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch0 +$fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0lunch)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $minus =  $fatsperservinglunch0;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0lunch->use_id)){
    if(!empty($getPro1lunch->use_id) && !empty($getPro2lunch->use_id)){    
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus = $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1lunch->use_id)){  
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $minus =  $fatsperservinglunch1;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2lunch->use_id)){  
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1lunch->use_id)){  
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0lunch = $this->productModel->getProductById($fatLunch2day[0]);
$getPro1lunch = $this->productModel->getProductById($fatLunch2day[1]);
$getPro2lunch = $this->productModel->getProductById($fatLunch2day[2]);
$getPro3lunch = $this->productModel->getProductById($fatLunch2day[3]);
if(empty($getPro0lunch->use_id)){
    if(empty($getPro1lunch->use_id) && !empty($getPro2lunch->use_id)){
       
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){ 
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id)){                       
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id)){                     
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){                        
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3lunch->use_id)){                     
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1lunch->use_id)){
      if(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id)){
                    
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){ 
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2lunch->use_id)){ 
                   
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2lunch->use_id)){
     if(empty($getPro3lunch->use_id)){                         
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 ;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                     
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3lunch->use_id)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0lunch = $this->productModel->getProductById($fatLunch2day[0]);
$getPro1lunch = $this->productModel->getProductById($fatLunch2day[1]);
$getPro2lunch = $this->productModel->getProductById($fatLunch2day[2]);
$getPro3lunch = $this->productModel->getProductById($fatLunch2day[3]);
$getPro4lunch = $this->productModel->getProductById($fatLunch2day[4]);
if(empty($getPro0lunch->use_id)){
    if(empty($getPro1lunch->use_id) && !empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id) && !empty($getPro4lunch->use_id)){
        
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3 +$fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)&& empty($getPro4lunch->use_id)){         
      
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){                      
       
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus = $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id)){  
        if(!empty($getPro3lunch->use_id)){
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                       
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;                
        $minus =  $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                       
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;                
        $minus =  $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id)){     
        
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){   
        if(!empty($getPro1lunch->use_id)){ 
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3lunch->use_id)){   
        if(!empty($getPro2lunch->use_id)){
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4lunch->use_id)){   
         
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                       
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1lunch->use_id)){
      if(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id) && !empty($getPro4lunch->use_id)){
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3lunch->use_id) ){   
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $minus =  $fatsperservinglunch0;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4lunch->use_id) ){
        if(!empty($getPro3lunch->use_id)){
           
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2lunch->use_id)){
     if(empty($getPro3lunch->use_id)){   
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 ;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                     
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                     
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                     
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3lunch->use_id)){
    if(empty($getPro4lunch->use_id)){
       
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id; 
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id; 
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  


}
break;

}


switch (count($fatLunch3day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fatLunch3day)){
    $getPro0lunch = $this->productModel->getProductById($fatLunch3day[0]);
    $fatsperservingUseEmptylunch = $caloriesperserving /100 * 20 /9; 
    $fatsperservinglunch = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0lunch = $this->productModel->getProductById($fatLunch3day[0]);
    $getPro1lunch = $this->productModel->getProductById($fatLunch3day[1]);
if(!empty($getPro0lunch->use_id)){    
    $fatsperservinglunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0lunch->use_id;
    $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1lunch->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservinglunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1lunch->use_id;
    $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1lunch->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0lunch = $this->productModel->getProductById($fatLunch3day[0]);
$getPro1lunch = $this->productModel->getProductById($fatLunch3day[1]);
$getPro2lunch = $this->productModel->getProductById($fatLunch3day[2]);
if(!empty($getPro0lunch->use_id)){
    if(!empty($getPro0lunch->use_id) && !empty($getPro1lunch->use_id)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $minus =  $fatsperservinglunch0 +$fatsperservinglunch1;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0lunch->use_id) && !empty($getPro2lunch->use_id)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch0 +$fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0lunch)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $minus =  $fatsperservinglunch0;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0lunch->use_id)){
    if(!empty($getPro1lunch->use_id) && !empty($getPro2lunch->use_id)){    
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus = $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1lunch->use_id)){  
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $minus =  $fatsperservinglunch1;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2lunch->use_id)){  
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1lunch->use_id)){  
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0lunch = $this->productModel->getProductById($fatLunch3day[0]);
$getPro1lunch = $this->productModel->getProductById($fatLunch3day[1]);
$getPro2lunch = $this->productModel->getProductById($fatLunch3day[2]);
$getPro3lunch = $this->productModel->getProductById($fatLunch3day[3]);
if(empty($getPro0lunch->use_id)){
    if(empty($getPro1lunch->use_id) && !empty($getPro2lunch->use_id)){
       
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){ 
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id)){                       
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id)){                     
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){                        
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3lunch->use_id)){                     
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1lunch->use_id)){
      if(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id)){
                    
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){ 
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2lunch->use_id)){ 
                   
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2lunch->use_id)){
     if(empty($getPro3lunch->use_id)){                         
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 ;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                     
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3lunch->use_id)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0lunch = $this->productModel->getProductById($fatLunch3day[0]);
$getPro1lunch = $this->productModel->getProductById($fatLunch3day[1]);
$getPro2lunch = $this->productModel->getProductById($fatLunch3day[2]);
$getPro3lunch = $this->productModel->getProductById($fatLunch3day[3]);
$getPro4lunch = $this->productModel->getProductById($fatLunch3day[4]);
if(empty($getPro0lunch->use_id)){
    if(empty($getPro1lunch->use_id) && !empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id) && !empty($getPro4lunch->use_id)){
        
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3 +$fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)&& empty($getPro4lunch->use_id)){         
      
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){                      
       
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus = $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id)){  
        if(!empty($getPro3lunch->use_id)){
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                       
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;                
        $minus =  $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                       
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;                
        $minus =  $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id)){     
        
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){   
        if(!empty($getPro1lunch->use_id)){ 
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3lunch->use_id)){   
        if(!empty($getPro2lunch->use_id)){
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4lunch->use_id)){   
         
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                       
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1lunch->use_id)){
      if(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id) && !empty($getPro4lunch->use_id)){
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3lunch->use_id) ){   
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $minus =  $fatsperservinglunch0;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4lunch->use_id) ){
        if(!empty($getPro3lunch->use_id)){
           
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2lunch->use_id)){
     if(empty($getPro3lunch->use_id)){   
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 ;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                     
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                     
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                     
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3lunch->use_id)){
    if(empty($getPro4lunch->use_id)){
       
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id; 
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id; 
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  


}
break;

}


switch (count($fatLunch4day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fatLunch4day)){
    $getPro0lunch = $this->productModel->getProductById($fatLunch4day[0]);
    $fatsperservingUseEmptylunch = $caloriesperserving /100 * 20 /9; 
    $fatsperservinglunch = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0lunch = $this->productModel->getProductById($fatLunch4day[0]);
    $getPro1lunch = $this->productModel->getProductById($fatLunch4day[1]);
if(!empty($getPro0lunch->use_id)){    
    $fatsperservinglunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0lunch->use_id;
    $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1lunch->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservinglunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1lunch->use_id;
    $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1lunch->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0lunch = $this->productModel->getProductById($fatLunch4day[0]);
$getPro1lunch = $this->productModel->getProductById($fatLunch4day[1]);
$getPro2lunch = $this->productModel->getProductById($fatLunch4day[2]);
if(!empty($getPro0lunch->use_id)){
    if(!empty($getPro0lunch->use_id) && !empty($getPro1lunch->use_id)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $minus =  $fatsperservinglunch0 +$fatsperservinglunch1;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0lunch->use_id) && !empty($getPro2lunch->use_id)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch0 +$fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0lunch)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $minus =  $fatsperservinglunch0;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0lunch->use_id)){
    if(!empty($getPro1lunch->use_id) && !empty($getPro2lunch->use_id)){    
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus = $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1lunch->use_id)){  
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $minus =  $fatsperservinglunch1;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2lunch->use_id)){  
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1lunch->use_id)){  
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0lunch = $this->productModel->getProductById($fatLunch4day[0]);
$getPro1lunch = $this->productModel->getProductById($fatLunch4day[1]);
$getPro2lunch = $this->productModel->getProductById($fatLunch4day[2]);
$getPro3lunch = $this->productModel->getProductById($fatLunch4day[3]);
if(empty($getPro0lunch->use_id)){
    if(empty($getPro1lunch->use_id) && !empty($getPro2lunch->use_id)){
       
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){ 
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id)){                       
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id)){                     
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){                        
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3lunch->use_id)){                     
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1lunch->use_id)){
      if(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id)){
                    
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){ 
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2lunch->use_id)){ 
                   
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2lunch->use_id)){
     if(empty($getPro3lunch->use_id)){                         
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 ;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                     
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3lunch->use_id)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0lunch = $this->productModel->getProductById($fatLunch4day[0]);
$getPro1lunch = $this->productModel->getProductById($fatLunch4day[1]);
$getPro2lunch = $this->productModel->getProductById($fatLunch4day[2]);
$getPro3lunch = $this->productModel->getProductById($fatLunch4day[3]);
$getPro4lunch = $this->productModel->getProductById($fatLunch4day[4]);
if(empty($getPro0lunch->use_id)){
    if(empty($getPro1lunch->use_id) && !empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id) && !empty($getPro4lunch->use_id)){
        
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3 +$fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)&& empty($getPro4lunch->use_id)){         
      
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){                      
       
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus = $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id)){  
        if(!empty($getPro3lunch->use_id)){
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                       
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;                
        $minus =  $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                       
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;                
        $minus =  $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id)){     
        
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){   
        if(!empty($getPro1lunch->use_id)){ 
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3lunch->use_id)){   
        if(!empty($getPro2lunch->use_id)){
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4lunch->use_id)){   
         
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                       
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1lunch->use_id)){
      if(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id) && !empty($getPro4lunch->use_id)){
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3lunch->use_id) ){   
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $minus =  $fatsperservinglunch0;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4lunch->use_id) ){
        if(!empty($getPro3lunch->use_id)){
           
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2lunch->use_id)){
     if(empty($getPro3lunch->use_id)){   
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 ;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                     
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                     
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                     
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3lunch->use_id)){
    if(empty($getPro4lunch->use_id)){
       
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id; 
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id; 
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  


}
break;

}


switch (count($fatLunch5day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fatLunch5day)){
    $getPro0lunch = $this->productModel->getProductById($fatLunch5day[0]);
    $fatsperservingUseEmptylunch = $caloriesperserving /100 * 20 /9; 
    $fatsperservinglunch = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0lunch = $this->productModel->getProductById($fatLunch5day[0]);
    $getPro1lunch = $this->productModel->getProductById($fatLunch5day[1]);
if(!empty($getPro0lunch->use_id)){    
    $fatsperservinglunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0lunch->use_id;
    $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1lunch->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservinglunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1lunch->use_id;
    $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1lunch->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0lunch = $this->productModel->getProductById($fatLunch5day[0]);
$getPro1lunch = $this->productModel->getProductById($fatLunch5day[1]);
$getPro2lunch = $this->productModel->getProductById($fatLunch5day[2]);
if(!empty($getPro0lunch->use_id)){
    if(!empty($getPro0lunch->use_id) && !empty($getPro1lunch->use_id)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $minus =  $fatsperservinglunch0 +$fatsperservinglunch1;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0lunch->use_id) && !empty($getPro2lunch->use_id)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch0 +$fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0lunch)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $minus =  $fatsperservinglunch0;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0lunch->use_id)){
    if(!empty($getPro1lunch->use_id) && !empty($getPro2lunch->use_id)){    
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus = $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1lunch->use_id)){  
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $minus =  $fatsperservinglunch1;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2lunch->use_id)){  
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1lunch->use_id)){  
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0lunch = $this->productModel->getProductById($fatLunch5day[0]);
$getPro1lunch = $this->productModel->getProductById($fatLunch5day[1]);
$getPro2lunch = $this->productModel->getProductById($fatLunch5day[2]);
$getPro3lunch = $this->productModel->getProductById($fatLunch5day[3]);
if(empty($getPro0lunch->use_id)){
    if(empty($getPro1lunch->use_id) && !empty($getPro2lunch->use_id)){
       
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){ 
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id)){                       
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id)){                     
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){                        
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3lunch->use_id)){                     
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1lunch->use_id)){
      if(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id)){
                    
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){ 
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2lunch->use_id)){ 
                   
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2lunch->use_id)){
     if(empty($getPro3lunch->use_id)){                         
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 ;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                     
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3lunch->use_id)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0lunch = $this->productModel->getProductById($fatLunch5day[0]);
$getPro1lunch = $this->productModel->getProductById($fatLunch5day[1]);
$getPro2lunch = $this->productModel->getProductById($fatLunch5day[2]);
$getPro3lunch = $this->productModel->getProductById($fatLunch5day[3]);
$getPro4lunch = $this->productModel->getProductById($fatLunch5day[4]);
if(empty($getPro0lunch->use_id)){
    if(empty($getPro1lunch->use_id) && !empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id) && !empty($getPro4lunch->use_id)){
        
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3 +$fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)&& empty($getPro4lunch->use_id)){         
      
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){                      
       
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus = $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id)){  
        if(!empty($getPro3lunch->use_id)){
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                       
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;                
        $minus =  $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                       
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;                
        $minus =  $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id)){     
        
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){   
        if(!empty($getPro1lunch->use_id)){ 
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3lunch->use_id)){   
        if(!empty($getPro2lunch->use_id)){
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4lunch->use_id)){   
         
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                       
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1lunch->use_id)){
      if(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id) && !empty($getPro4lunch->use_id)){
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3lunch->use_id) ){   
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $minus =  $fatsperservinglunch0;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4lunch->use_id) ){
        if(!empty($getPro3lunch->use_id)){
           
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2lunch->use_id)){
     if(empty($getPro3lunch->use_id)){   
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 ;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                     
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                     
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                     
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3lunch->use_id)){
    if(empty($getPro4lunch->use_id)){
       
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id; 
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id; 
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  


}
break;

}


switch (count($fatLunch6day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fatLunch6day)){
    $getPro0lunch = $this->productModel->getProductById($fatLunch6day[0]);
    $fatsperservingUseEmptylunch = $caloriesperserving /100 * 20 /9; 
    $fatsperservinglunch = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0lunch = $this->productModel->getProductById($fatLunch6day[0]);
    $getPro1lunch = $this->productModel->getProductById($fatLunch6day[1]);
if(!empty($getPro0lunch->use_id)){    
    $fatsperservinglunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0lunch->use_id;
    $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1lunch->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservinglunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1lunch->use_id;
    $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1lunch->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0lunch = $this->productModel->getProductById($fatLunch6day[0]);
$getPro1lunch = $this->productModel->getProductById($fatLunch6day[1]);
$getPro2lunch = $this->productModel->getProductById($fatLunch6day[2]);
if(!empty($getPro0lunch->use_id)){
    if(!empty($getPro0lunch->use_id) && !empty($getPro1lunch->use_id)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $minus =  $fatsperservinglunch0 +$fatsperservinglunch1;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0lunch->use_id) && !empty($getPro2lunch->use_id)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch0 +$fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0lunch)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $minus =  $fatsperservinglunch0;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0lunch->use_id)){
    if(!empty($getPro1lunch->use_id) && !empty($getPro2lunch->use_id)){    
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus = $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1lunch->use_id)){  
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $minus =  $fatsperservinglunch1;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2lunch->use_id)){  
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1lunch->use_id)){  
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0lunch = $this->productModel->getProductById($fatLunch6day[0]);
$getPro1lunch = $this->productModel->getProductById($fatLunch6day[1]);
$getPro2lunch = $this->productModel->getProductById($fatLunch6day[2]);
$getPro3lunch = $this->productModel->getProductById($fatLunch6day[3]);
if(empty($getPro0lunch->use_id)){
    if(empty($getPro1lunch->use_id) && !empty($getPro2lunch->use_id)){
       
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){ 
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id)){                       
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id)){                     
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){                        
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3lunch->use_id)){                     
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1lunch->use_id)){
      if(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id)){
                    
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){ 
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2lunch->use_id)){ 
                   
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2lunch->use_id)){
     if(empty($getPro3lunch->use_id)){                         
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 ;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                     
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3lunch->use_id)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0lunch = $this->productModel->getProductById($fatLunch6day[0]);
$getPro1lunch = $this->productModel->getProductById($fatLunch6day[1]);
$getPro2lunch = $this->productModel->getProductById($fatLunch6day[2]);
$getPro3lunch = $this->productModel->getProductById($fatLunch6day[3]);
$getPro4lunch = $this->productModel->getProductById($fatLunch6day[4]);
if(empty($getPro0lunch->use_id)){
    if(empty($getPro1lunch->use_id) && !empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id) && !empty($getPro4lunch->use_id)){
        
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3 +$fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)&& empty($getPro4lunch->use_id)){         
      
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){                      
       
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus = $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id)){  
        if(!empty($getPro3lunch->use_id)){
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                       
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;                
        $minus =  $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                       
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;                
        $minus =  $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id)){     
        
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){   
        if(!empty($getPro1lunch->use_id)){ 
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3lunch->use_id)){   
        if(!empty($getPro2lunch->use_id)){
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4lunch->use_id)){   
         
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                       
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1lunch->use_id)){
      if(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id) && !empty($getPro4lunch->use_id)){
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3lunch->use_id) ){   
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $minus =  $fatsperservinglunch0;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4lunch->use_id) ){
        if(!empty($getPro3lunch->use_id)){
           
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2lunch->use_id)){
     if(empty($getPro3lunch->use_id)){   
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 ;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                     
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                     
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                     
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3lunch->use_id)){
    if(empty($getPro4lunch->use_id)){
       
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id; 
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id; 
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  


}
break;

}


switch (count($fatLunch7day)) {
    case 1:
    // One Product with out use_id or with use_id
    if(empty($fatLunch7day)){
    $getPro0lunch = $this->productModel->getProductById($fatLunch7day[0]);
    $fatsperservingUseEmptylunch = $caloriesperserving /100 * 20 /9; 
    $fatsperservinglunch = $caloriesperserving /100  * 20 /9;
    }
break;

case 2:
    $getPro0lunch = $this->productModel->getProductById($fatLunch7day[0]);
    $getPro1lunch = $this->productModel->getProductById($fatLunch7day[1]);
if(!empty($getPro0lunch->use_id)){    
    $fatsperservinglunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro0lunch->use_id;
    $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus; 
}elseif(!empty($getPro1lunch->use_id)){   
    // One with out use_id and one with use_is  
   
    $fatsperservinglunch = $caloriesperserving /100  * 20 /9;
    $minus = $caloriesperserving /100  * 20 /9 / 100  * $getPro1lunch->use_id;
    $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus; 
   
}elseif(empty($getPro1lunch->use_id)){
    // Two products with out use_id
    $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9/2;
 
}
break;

case 3:
$getPro0lunch = $this->productModel->getProductById($fatLunch7day[0]);
$getPro1lunch = $this->productModel->getProductById($fatLunch7day[1]);
$getPro2lunch = $this->productModel->getProductById($fatLunch7day[2]);
if(!empty($getPro0lunch->use_id)){
    if(!empty($getPro0lunch->use_id) && !empty($getPro1lunch->use_id)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $minus =  $fatsperservinglunch0 +$fatsperservinglunch1;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;
    }elseif(!empty($getPro0lunch->use_id) && !empty($getPro2lunch->use_id)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch0 +$fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;

    }elseif(!empty($getPro0lunch)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $minus =  $fatsperservinglunch0;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;

}elseif(empty($getPro0lunch->use_id)){
    if(!empty($getPro1lunch->use_id) && !empty($getPro2lunch->use_id)){    
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus = $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;         
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }elseif(!empty($getPro1lunch->use_id)){  
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $minus =  $fatsperservinglunch1;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;            
    }elseif(!empty($getPro2lunch->use_id)){  
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    
    }elseif(empty($getPro1lunch->use_id)){  
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
    }
}
}else{
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 /3;
}
break;


case 4:
$getPro0lunch = $this->productModel->getProductById($fatLunch7day[0]);
$getPro1lunch = $this->productModel->getProductById($fatLunch7day[1]);
$getPro2lunch = $this->productModel->getProductById($fatLunch7day[2]);
$getPro3lunch = $this->productModel->getProductById($fatLunch7day[3]);
if(empty($getPro0lunch->use_id)){
    if(empty($getPro1lunch->use_id) && !empty($getPro2lunch->use_id)){
       
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
           
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){ 
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
   
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id)){                       
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id)){                     
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){                        
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;

    }elseif(empty($getPro3lunch->use_id)){                     
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1lunch->use_id)){
      if(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id)){
                    
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){ 
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  

    }elseif(!empty($getPro2lunch->use_id)){ 
                   
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;                             
    }
 
}elseif(empty($getPro2lunch->use_id)){
     if(empty($getPro3lunch->use_id)){                         
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 ;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                     
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3lunch->use_id)){
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus);
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
}else{
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
}

break;

case 5:
$getPro0lunch = $this->productModel->getProductById($fatLunch7day[0]);
$getPro1lunch = $this->productModel->getProductById($fatLunch7day[1]);
$getPro2lunch = $this->productModel->getProductById($fatLunch7day[2]);
$getPro3lunch = $this->productModel->getProductById($fatLunch7day[3]);
$getPro4lunch = $this->productModel->getProductById($fatLunch7day[4]);
if(empty($getPro0lunch->use_id)){
    if(empty($getPro1lunch->use_id) && !empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id) && !empty($getPro4lunch->use_id)){
        
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3 +$fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)&& empty($getPro4lunch->use_id)){         
      
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 /5;
        
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){                      
       
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus = $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
    
    }elseif(empty($getPro1lunch->use_id) && empty($getPro2lunch->use_id)){  
        if(!empty($getPro3lunch->use_id)){
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                       
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;                
        $minus =  $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
        }else{
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                       
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;                
        $minus =  $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 
        }   

    }elseif(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id)){     
        
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9; 

    }elseif(empty($getPro2lunch->use_id) && empty($getPro3lunch->use_id)){   
        if(!empty($getPro1lunch->use_id)){ 
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;
        }else{
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                      
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;
        }    

    }elseif(empty($getPro3lunch->use_id)){   
        if(!empty($getPro2lunch->use_id)){
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
        }else{
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus) /2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
        }
    }elseif(empty($getPro4lunch->use_id)){   
         
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                       
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
       
    }else{
      
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
    }
         
}elseif(empty($getPro1lunch->use_id)){
      if(empty($getPro2lunch->use_id) && !empty($getPro3lunch->use_id) && !empty($getPro4lunch->use_id)){
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  

    }elseif(empty($getPro3lunch->use_id) ){   
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $minus =  $fatsperservinglunch0;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/4;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;    
         

    }elseif(empty($getPro4lunch->use_id) ){
        if(!empty($getPro3lunch->use_id)){
           
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;    
        }                 
       
    }else{
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro4lunch->use_id;
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch2 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  
    }
 
}elseif(empty($getPro2lunch->use_id)){
     if(empty($getPro3lunch->use_id)){   
        
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 ;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/3;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
       
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;                     
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                     
        $fatsperservinglunch4 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id;                     
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch3 + $fatsperservinglunch4;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;                             
    }

}elseif(empty($getPro3lunch->use_id)){
    if(empty($getPro4lunch->use_id)){
       
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }else{
      
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id;               
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2;
        $fatsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /9 - $minus)/2;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;   
    }

}else{ 
        $fatsperservinglunch0 = $caloriesperserving /100 * 20 /9 /100 * $getPro0lunch->use_id;
        $fatsperservinglunch1 = $caloriesperserving /100 * 20 /9 /100 * $getPro1lunch->use_id;               
        $fatsperservinglunch2 = $caloriesperserving /100 * 20 /9 /100 * $getPro2lunch->use_id; 
        $fatsperservinglunch3 = $caloriesperserving /100 * 20 /9 /100 * $getPro3lunch->use_id; 
        $minus =  $fatsperservinglunch0 + $fatsperservinglunch1 + $fatsperservinglunch2 + $fatsperservinglunch3;
        $fatsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /9 - $minus;
        $fatsperservinglunch = $caloriesperserving /100 * 20 /9;  


}
break;

}


