<?php
 switch (count($otherBrunch)) {
    case 1:
        // One Product with out use_id or with use_id
        $getPr0brunch = $this->productModel->getProductById($otherBrunch[0]);
        $othersperservingUseEmptybrunch = $caloriesperserving /100 * 20 /4; 
        $othersperservingbrunch = $caloriesperserving /100 * 20 /4;
    break;

    case 2:
        $getPr0brunch = $this->productModel->getProductById($otherBrunch[0]);
        $getPr1brunch = $this->productModel->getProductById($otherBrunch[1]);
    if(!empty($getPr1brunch->use_id)){   
        // One with out use_id and one with use_is  
        $othersperservingbrunch = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1brunch->use_id;
        $othersperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1brunch->use_id)){
        // Two products with out use_id
        $othersperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0brunch = $this->productModel->getProductById($otherBrunch[0]);
    $getPr1brunch = $this->productModel->getProductById($otherBrunch[1]);
    $getPr2brunch = $this->productModel->getProductById($otherBrunch[2]);
    if(!empty($getPr1brunch->use_id)){
        if(empty($getPr2brunch->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1brunch->use_id;
            $othersperservingbrunch2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2brunch->use_id;
            $minus =  $othersperservingbrunch1 + $othersperservingbrunch2;
            $othersperservingUseEmptybrunch =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2brunch->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;
            $othersperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2brunch->use_id;
            $minus =  $othersperservingbrunch1 + $othersperservingbrunch2;
            $othersperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmptybrunch = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0brunch = $this->productModel->getProductById($otherBrunch[0]);
    $getPr1brunch = $this->productModel->getProductById($otherBrunch[1]);
    $getPr2brunch = $this->productModel->getProductById($otherBrunch[2]);
    $getPr3brunch = $this->productModel->getProductById($otherBrunch[3]);
    if(!empty($getPr0brunch->use_id)){
        $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;
        $othersperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2brunch->use_id;
        $othersperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id;
        $minus =  $othersperservingbrunch1 + $othersperservingbrunch2 + $othersperservingbrunch3;
        $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
        $othersperservingbrunch = $caloriesperserving /100 * 20 /4;  
    }elseif(empty($getPr0brunch->use_id)){
        if(empty($getPr1brunch->use_id) && !empty($getPr2brunch->use_id)){
            
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;
            $othersperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2brunch->use_id;
            $othersperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id;
            $minus =  $othersperservingbrunch1 + $othersperservingbrunch2 + $othersperservingbrunch3;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1brunch->use_id) && empty($getPr2brunch->use_id) && empty($getPr3brunch->use_id)){ 
           
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;
            $othersperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2brunch->use_id;
            $othersperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id;
            $minus =  $othersperservingbrunch1 + $othersperservingbrunch2 + $othersperservingbrunch3;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1brunch->use_id) && empty($getPr2brunch->use_id)){      
                        
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;
            $othersperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2brunch->use_id;
            $othersperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id;
            $minus =  $othersperservingbrunch1 + $othersperservingbrunch2 + $othersperservingbrunch3;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2brunch->use_id) && !empty($getPr3brunch->use_id)){       
                       
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;                      
            $othersperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id;
            $minus =  $othersperservingbrunch1 + $othersperservingbrunch3;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2brunch->use_id) && empty($getPr3brunch->use_id)){          
                      
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;                      
            $othersperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id;
            $minus =  $othersperservingbrunch1 + $othersperservingbrunch3;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3brunch->use_id)){   
                          
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;
            $othersperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2brunch->use_id;
            $minus =  $othersperservingbrunch1 + $othersperservingbrunch2;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;
            $othersperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2brunch->use_id;
            $othersperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id;
            $minus =  $othersperservingbrunch1 + $othersperservingbrunch2 + $othersperservingbrunch3;
            $othersperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;  
        }
        
    }elseif(empty($getPr1brunch->use_id)){
          if(empty($getPr2brunch->use_id) && !empty($getPr3brunch->use_id)){
               
            $othersperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0brunch->use_id;
            $othersperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2brunch->use_id;
            $othersperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id;
            $minus =  $othersperservingbrunch0 + $othersperservingbrunch2 + $othersperservingbrunch3;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2brunch->use_id) && empty($getPr3brunch->use_id)){ 
           
            $othersperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0brunch->use_id;
            $othersperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2brunch->use_id;
            $othersperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id;
            $minus =  $othersperservingbrunch0 + $othersperservingbrunch2 + $othersperservingbrunch3;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2brunch->use_id)){ 
               
            $othersperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0brunch->use_id;
            $othersperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2brunch->use_id;
            $othersperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id;
            $minus =  $othersperservingbrunch0 + $othersperservingbrunch2 + $othersperservingbrunch3;
            $othersperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0brunch->use_id;
            $othersperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2brunch->use_id;
            $othersperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id;
            $minus =  $othersperservingbrunch0 + $othersperservingbrunch2;
            $othersperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2brunch->use_id)){
         if(empty($getPr3brunch->use_id)){     
                             
            $othersperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0brunch->use_id;
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;               
            $minus =  $othersperservingbrunch0 + $othersperservingbrunch1 ;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0brunch->use_id;
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;                     
            $minus =  $othersperservingbrunch0 + $othersperservingbrunch1;
            $othersperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3brunch->use_id)){
        
            $othersperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0brunch->use_id;
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;               
            $othersperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2brunch->use_id;               
            $minus =  $othersperservingbrunch0 + $othersperservingbrunch1 + $othersperservingbrunch2;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0brunch = $this->productModel->getProductById($otherBrunch[0]);
    $getPr1brunch = $this->productModel->getProductById($otherBrunch[1]);
    $getPr2brunch = $this->productModel->getProductById($otherBrunch[2]);
    $getPr3brunch = $this->productModel->getProductById($otherBrunch[3]);
    $getPr4brunch = $this->productModel->getProductById($otherBrunch[4]);
if(empty($getPr0brunch->use_id)){
        if(empty($getPr1brunch->use_id) && !empty($getPr2brunch->use_id) && !empty($getPr3brunch->use_id) && !empty($getPr4brunch->use_id)){
            
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;
            $othersperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2brunch->use_id;
            $othersperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id;
            $othersperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4brunch->use_id;
            $minus =  $othersperservingbrunch1 + $othersperservingbrunch2 + $othersperservingbrunch3 +$othersperservingbrunch4;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1brunch->use_id) && empty($getPr2brunch->use_id) && empty($getPr3brunch->use_id)&& empty($getPr4brunch->use_id)){         
          
            $othersperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1brunch->use_id) && empty($getPr2brunch->use_id) && empty($getPr3brunch->use_id)){                      
           
            $othersperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4brunch->use_id;
            $minus = $othersperservingbrunch4;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1brunch->use_id) && empty($getPr2brunch->use_id)){  
            if(!empty($getPr3brunch->use_id)){
            $othersperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id;                       
            $othersperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4brunch->use_id;                
            $minus =  $othersperservingbrunch3 + $othersperservingbrunch4;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id;                       
            $othersperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4brunch->use_id;                
            $minus =  $othersperservingbrunch3 + $othersperservingbrunch4;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2brunch->use_id) && !empty($getPr3brunch->use_id)){     
            
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;                      
            $othersperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id;
            $minus =  $othersperservingbrunch1 + $othersperservingbrunch3;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2brunch->use_id) && empty($getPr3brunch->use_id)){   
            if(!empty($getPr1brunch->use_id)){ 
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;                      
            $othersperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id;
            $minus =  $othersperservingbrunch1 + $othersperservingbrunch3;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;                      
            $othersperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id;
            $minus =  $othersperservingbrunch1 + $othersperservingbrunch3;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3brunch->use_id)){   
            if(!empty($getPr2brunch->use_id)){
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;
            $othersperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2brunch->use_id;
            $minus =  $othersperservingbrunch1 + $othersperservingbrunch2;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;
            $othersperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2brunch->use_id;
            $minus =  $othersperservingbrunch1 + $othersperservingbrunch2;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4brunch->use_id)){   
             
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;
            $othersperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2brunch->use_id;
            $othersperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id;                       
            $minus =  $othersperservingbrunch1 + $othersperservingbrunch2 + $othersperservingbrunch3;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;
            $othersperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2brunch->use_id;
            $othersperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id;
            $othersperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4brunch->use_id;
            $minus =  $othersperservingbrunch1 + $othersperservingbrunch2 + $othersperservingbrunch3 + $othersperservingbrunch4;
            $othersperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1brunch->use_id)){
          if(empty($getPr2brunch->use_id) && !empty($getPr3brunch->use_id) && !empty($getPr4brunch->use_id)){
            
            $othersperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0brunch->use_id;
            $othersperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id;
            $othersperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4brunch->use_id;
            $minus =  $othersperservingbrunch0 + $othersperservingbrunch3 + $othersperservingbrunch4;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3brunch->use_id) ){   
            
            $othersperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0brunch->use_id;
            $minus =  $othersperservingbrunch0;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4brunch->use_id) ){
            if(!empty($getPr3brunch->use_id)){
               
            $othersperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0brunch->use_id;
            $othersperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2brunch->use_id;
            $othersperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id;
            $minus =  $othersperservingbrunch0 + $othersperservingbrunch2 + $othersperservingbrunch3;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0brunch->use_id;
            $othersperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2brunch->use_id;
            $othersperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id;
            $othersperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4brunch->use_id;
            $minus =  $othersperservingbrunch0 + $othersperservingbrunch2 + $othersperservingbrunch3 + $othersperservingbrunch4;
            $othersperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2brunch->use_id)){
         if(empty($getPr3brunch->use_id)){   
            
            $othersperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0brunch->use_id;
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;               
            $minus =  $othersperservingbrunch0 + $othersperservingbrunch1 ;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0brunch->use_id;
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;                     
            $othersperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id;                     
            $othersperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id;                     
            $minus =  $othersperservingbrunch0 + $othersperservingbrunch1 + $othersperservingbrunch3 + $othersperservingbrunch4;
            $othersperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3brunch->use_id)){
        if(empty($getPr4brunch->use_id)){
           
            $othersperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0brunch->use_id;
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;               
            $othersperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2brunch->use_id;               
            $minus =  $othersperservingbrunch0 + $othersperservingbrunch1 + $othersperservingbrunch2;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0brunch->use_id;
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;               
            $othersperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2brunch->use_id;               
            $minus =  $othersperservingbrunch0 + $othersperservingbrunch1 + $othersperservingbrunch2;
            $othersperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0brunch->use_id;
            $othersperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1brunch->use_id;               
            $othersperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2brunch->use_id; 
            $othersperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3brunch->use_id; 
            $minus =  $othersperservingbrunch0 + $othersperservingbrunch1 + $othersperservingbrunch2 + $othersperservingbrunch3;
            $othersperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingbrunch = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}