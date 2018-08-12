<?php
 switch (count($otherAfternoon)) {
    
    case 1:
        // One Product with out use_id or with use_id
        if(empty($otherAfternoon)){
        $getPr0afternoon = $this->productModel->getProductById($otherAfternoon[0]);
        $othersperservingUseEmptyafternoon = $caloriesperserving /100 * 20 /4; 
        $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $getPr0afternoon = $this->productModel->getProductById($otherAfternoon[0]);
        $getPr1afternoon = $this->productModel->getProductById($otherAfternoon[1]);
    if(!empty($getPr1afternoon->use_id)){   
        // One with out use_id and one with use_is  
        $othersperservingafternoon = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1afternoon->use_id;
        $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1afternoon->use_id)){
        // Two products with out use_id
        $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0afternoon = $this->productModel->getProductById($otherAfternoon[0]);
    $getPr1afternoon = $this->productModel->getProductById($otherAfternoon[1]);
    $getPr2afternoon = $this->productModel->getProductById($otherAfternoon[2]);
    if(!empty($getPr1afternoon->use_id)){
        if(empty($getPr2afternoon->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2afternoon->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmptyafternoon = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0afternoon = $this->productModel->getProductById($otherAfternoon[0]);
    $getPr1afternoon = $this->productModel->getProductById($otherAfternoon[1]);
    $getPr2afternoon = $this->productModel->getProductById($otherAfternoon[2]);
    $getPr3afternoon = $this->productModel->getProductById($otherAfternoon[3]);
    if(!empty($getPr0afternoon->use_id)){
        $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
        $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
        $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
        $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
        $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
        $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
    }elseif(empty($getPr0afternoon->use_id)){
        if(empty($getPr1afternoon->use_id) && !empty($getPr2afternoon->use_id)){
            
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){ 
           
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id)){      
                        
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id)){       
                       
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){          
                      
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3afternoon->use_id)){   
                          
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
        
    }elseif(empty($getPr1afternoon->use_id)){
          if(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id)){
               
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){ 
           
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2afternoon->use_id)){ 
               
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2afternoon->use_id)){
         if(empty($getPr3afternoon->use_id)){     
                             
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 ;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                     
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3afternoon->use_id)){
        
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0afternoon = $this->productModel->getProductById($otherAfternoon[0]);
    $getPr1afternoon = $this->productModel->getProductById($otherAfternoon[1]);
    $getPr2afternoon = $this->productModel->getProductById($otherAfternoon[2]);
    $getPr3afternoon = $this->productModel->getProductById($otherAfternoon[3]);
    $getPr4afternoon = $this->productModel->getProductById($otherAfternoon[4]);
if(empty($getPr0afternoon->use_id)){
        if(empty($getPr1afternoon->use_id) && !empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id) && !empty($getPr4afternoon->use_id)){
            
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3 +$othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)&& empty($getPr4afternoon->use_id)){         
          
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){                      
           
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus = $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id)){  
            if(!empty($getPr3afternoon->use_id)){
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                       
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;                
            $minus =  $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                       
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;                
            $minus =  $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id)){     
            
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){   
            if(!empty($getPr1afternoon->use_id)){ 
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3afternoon->use_id)){   
            if(!empty($getPr2afternoon->use_id)){
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4afternoon->use_id)){   
             
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                       
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1afternoon->use_id)){
          if(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id) && !empty($getPr4afternoon->use_id)){
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3afternoon->use_id) ){   
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $minus =  $othersperservingafternoon0;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4afternoon->use_id) ){
            if(!empty($getPr3afternoon->use_id)){
               
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2afternoon->use_id)){
         if(empty($getPr3afternoon->use_id)){   
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 ;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                     
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                     
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                     
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3afternoon->use_id)){
        if(empty($getPr4afternoon->use_id)){
           
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id; 
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id; 
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;              

}
            break;

}



switch (count($otherAfternoon2day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($otherAfternoon2day)){
        $getPr0afternoon = $this->productModel->getProductById($otherAfternoon2day[0]);
        $othersperservingUseEmptyafternoon = $caloriesperserving /100 * 20 /4; 
        $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $getPr0afternoon = $this->productModel->getProductById($otherAfternoon2day[0]);
        $getPr1afternoon = $this->productModel->getProductById($otherAfternoon2day[1]);
    if(!empty($getPr1afternoon->use_id)){   
        // One with out use_id and one with use_is  
        $othersperservingafternoon = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1afternoon->use_id;
        $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1afternoon->use_id)){
        // Two products with out use_id
        $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0afternoon = $this->productModel->getProductById($otherAfternoon2day[0]);
    $getPr1afternoon = $this->productModel->getProductById($otherAfternoon2day[1]);
    $getPr2afternoon = $this->productModel->getProductById($otherAfternoon2day[2]);
    if(!empty($getPr1afternoon->use_id)){
        if(empty($getPr2afternoon->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2afternoon->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmptyafternoon = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0afternoon = $this->productModel->getProductById($otherAfternoon2day[0]);
    $getPr1afternoon = $this->productModel->getProductById($otherAfternoon2day[1]);
    $getPr2afternoon = $this->productModel->getProductById($otherAfternoon2day[2]);
    $getPr3afternoon = $this->productModel->getProductById($otherAfternoon2day[3]);
    if(!empty($getPr0afternoon->use_id)){
        $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
        $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
        $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
        $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
        $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
        $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
    }elseif(empty($getPr0afternoon->use_id)){
        if(empty($getPr1afternoon->use_id) && !empty($getPr2afternoon->use_id)){
            
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){ 
           
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id)){      
                        
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id)){       
                       
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){          
                      
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3afternoon->use_id)){   
                          
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
        
    }elseif(empty($getPr1afternoon->use_id)){
          if(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id)){
               
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){ 
           
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2afternoon->use_id)){ 
               
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2afternoon->use_id)){
         if(empty($getPr3afternoon->use_id)){     
                             
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 ;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                     
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3afternoon->use_id)){
        
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0afternoon = $this->productModel->getProductById($otherAfternoon2day[0]);
    $getPr1afternoon = $this->productModel->getProductById($otherAfternoon2day[1]);
    $getPr2afternoon = $this->productModel->getProductById($otherAfternoon2day[2]);
    $getPr3afternoon = $this->productModel->getProductById($otherAfternoon2day[3]);
    $getPr4afternoon = $this->productModel->getProductById($otherAfternoon2day[4]);
if(empty($getPr0afternoon->use_id)){
        if(empty($getPr1afternoon->use_id) && !empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id) && !empty($getPr4afternoon->use_id)){
            
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3 +$othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)&& empty($getPr4afternoon->use_id)){         
          
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){                      
           
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus = $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id)){  
            if(!empty($getPr3afternoon->use_id)){
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                       
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;                
            $minus =  $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                       
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;                
            $minus =  $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id)){     
            
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){   
            if(!empty($getPr1afternoon->use_id)){ 
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3afternoon->use_id)){   
            if(!empty($getPr2afternoon->use_id)){
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4afternoon->use_id)){   
             
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                       
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1afternoon->use_id)){
          if(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id) && !empty($getPr4afternoon->use_id)){
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3afternoon->use_id) ){   
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $minus =  $othersperservingafternoon0;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4afternoon->use_id) ){
            if(!empty($getPr3afternoon->use_id)){
               
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2afternoon->use_id)){
         if(empty($getPr3afternoon->use_id)){   
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 ;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                     
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                     
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                     
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3afternoon->use_id)){
        if(empty($getPr4afternoon->use_id)){
           
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id; 
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id; 
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}



switch (count($otherAfternoon3day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($otherAfternoon3day)){
        $getPr0afternoon = $this->productModel->getProductById($otherAfternoon3day[0]);
        $othersperservingUseEmptyafternoon = $caloriesperserving /100 * 20 /4; 
        $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $getPr0afternoon = $this->productModel->getProductById($otherAfternoon3day[0]);
        $getPr1afternoon = $this->productModel->getProductById($otherAfternoon3day[1]);
    if(!empty($getPr1afternoon->use_id)){   
        // One with out use_id and one with use_is  
        $othersperservingafternoon = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1afternoon->use_id;
        $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1afternoon->use_id)){
        // Two products with out use_id
        $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0afternoon = $this->productModel->getProductById($otherAfternoon3day[0]);
    $getPr1afternoon = $this->productModel->getProductById($otherAfternoon3day[1]);
    $getPr2afternoon = $this->productModel->getProductById($otherAfternoon3day[2]);
    if(!empty($getPr1afternoon->use_id)){
        if(empty($getPr2afternoon->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2afternoon->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmptyafternoon = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0afternoon = $this->productModel->getProductById($otherAfternoon3day[0]);
    $getPr1afternoon = $this->productModel->getProductById($otherAfternoon3day[1]);
    $getPr2afternoon = $this->productModel->getProductById($otherAfternoon3day[2]);
    $getPr3afternoon = $this->productModel->getProductById($otherAfternoon3day[3]);
    if(!empty($getPr0afternoon->use_id)){
        $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
        $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
        $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
        $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
        $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
        $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
    }elseif(empty($getPr0afternoon->use_id)){
        if(empty($getPr1afternoon->use_id) && !empty($getPr2afternoon->use_id)){
            
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){ 
           
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id)){      
                        
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id)){       
                       
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){          
                      
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3afternoon->use_id)){   
                          
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
        
    }elseif(empty($getPr1afternoon->use_id)){
          if(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id)){
               
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){ 
           
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2afternoon->use_id)){ 
               
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2afternoon->use_id)){
         if(empty($getPr3afternoon->use_id)){     
                             
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 ;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                     
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3afternoon->use_id)){
        
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0afternoon = $this->productModel->getProductById($otherAfternoon3day[0]);
    $getPr1afternoon = $this->productModel->getProductById($otherAfternoon3day[1]);
    $getPr2afternoon = $this->productModel->getProductById($otherAfternoon3day[2]);
    $getPr3afternoon = $this->productModel->getProductById($otherAfternoon3day[3]);
    $getPr4afternoon = $this->productModel->getProductById($otherAfternoon3day[4]);
if(empty($getPr0afternoon->use_id)){
        if(empty($getPr1afternoon->use_id) && !empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id) && !empty($getPr4afternoon->use_id)){
            
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3 +$othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)&& empty($getPr4afternoon->use_id)){         
          
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){                      
           
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus = $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id)){  
            if(!empty($getPr3afternoon->use_id)){
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                       
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;                
            $minus =  $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                       
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;                
            $minus =  $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id)){     
            
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){   
            if(!empty($getPr1afternoon->use_id)){ 
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3afternoon->use_id)){   
            if(!empty($getPr2afternoon->use_id)){
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4afternoon->use_id)){   
             
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                       
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1afternoon->use_id)){
          if(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id) && !empty($getPr4afternoon->use_id)){
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3afternoon->use_id) ){   
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $minus =  $othersperservingafternoon0;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4afternoon->use_id) ){
            if(!empty($getPr3afternoon->use_id)){
               
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2afternoon->use_id)){
         if(empty($getPr3afternoon->use_id)){   
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 ;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                     
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                     
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                     
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3afternoon->use_id)){
        if(empty($getPr4afternoon->use_id)){
           
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id; 
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id; 
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}



switch (count($otherAfternoon4day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($otherAfternoon4day)){
        $getPr0afternoon = $this->productModel->getProductById($otherAfternoon4day[0]);
        $othersperservingUseEmptyafternoon = $caloriesperserving /100 * 20 /4; 
        $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $getPr0afternoon = $this->productModel->getProductById($otherAfternoon4day[0]);
        $getPr1afternoon = $this->productModel->getProductById($otherAfternoon4day[1]);
    if(!empty($getPr1afternoon->use_id)){   
        // One with out use_id and one with use_is  
        $othersperservingafternoon = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1afternoon->use_id;
        $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1afternoon->use_id)){
        // Two products with out use_id
        $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0afternoon = $this->productModel->getProductById($otherAfternoon4day[0]);
    $getPr1afternoon = $this->productModel->getProductById($otherAfternoon4day[1]);
    $getPr2afternoon = $this->productModel->getProductById($otherAfternoon4day[2]);
    if(!empty($getPr1afternoon->use_id)){
        if(empty($getPr2afternoon->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2afternoon->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmptyafternoon = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0afternoon = $this->productModel->getProductById($otherAfternoon4day[0]);
    $getPr1afternoon = $this->productModel->getProductById($otherAfternoon4day[1]);
    $getPr2afternoon = $this->productModel->getProductById($otherAfternoon4day[2]);
    $getPr3afternoon = $this->productModel->getProductById($otherAfternoon4day[3]);
    if(!empty($getPr0afternoon->use_id)){
        $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
        $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
        $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
        $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
        $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
        $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
    }elseif(empty($getPr0afternoon->use_id)){
        if(empty($getPr1afternoon->use_id) && !empty($getPr2afternoon->use_id)){
            
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){ 
           
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id)){      
                        
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id)){       
                       
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){          
                      
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3afternoon->use_id)){   
                          
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
        
    }elseif(empty($getPr1afternoon->use_id)){
          if(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id)){
               
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){ 
           
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2afternoon->use_id)){ 
               
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2afternoon->use_id)){
         if(empty($getPr3afternoon->use_id)){     
                             
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 ;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                     
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3afternoon->use_id)){
        
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0afternoon = $this->productModel->getProductById($otherAfternoon4day[0]);
    $getPr1afternoon = $this->productModel->getProductById($otherAfternoon4day[1]);
    $getPr2afternoon = $this->productModel->getProductById($otherAfternoon4day[2]);
    $getPr3afternoon = $this->productModel->getProductById($otherAfternoon4day[3]);
    $getPr4afternoon = $this->productModel->getProductById($otherAfternoon4day[4]);
if(empty($getPr0afternoon->use_id)){
        if(empty($getPr1afternoon->use_id) && !empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id) && !empty($getPr4afternoon->use_id)){
            
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3 +$othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)&& empty($getPr4afternoon->use_id)){         
          
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){                      
           
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus = $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id)){  
            if(!empty($getPr3afternoon->use_id)){
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                       
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;                
            $minus =  $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                       
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;                
            $minus =  $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id)){     
            
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){   
            if(!empty($getPr1afternoon->use_id)){ 
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3afternoon->use_id)){   
            if(!empty($getPr2afternoon->use_id)){
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4afternoon->use_id)){   
             
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                       
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1afternoon->use_id)){
          if(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id) && !empty($getPr4afternoon->use_id)){
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3afternoon->use_id) ){   
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $minus =  $othersperservingafternoon0;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4afternoon->use_id) ){
            if(!empty($getPr3afternoon->use_id)){
               
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2afternoon->use_id)){
         if(empty($getPr3afternoon->use_id)){   
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 ;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                     
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                     
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                     
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3afternoon->use_id)){
        if(empty($getPr4afternoon->use_id)){
           
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id; 
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id; 
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}

switch (count($otherAfternoon5day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($otherAfternoon5day)){
        $getPr0afternoon = $this->productModel->getProductById($otherAfternoon5day[0]);
        $othersperservingUseEmptyafternoon = $caloriesperserving /100 * 20 /4; 
        $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $getPr0afternoon = $this->productModel->getProductById($otherAfternoon5day[0]);
        $getPr1afternoon = $this->productModel->getProductById($otherAfternoon5day[1]);
    if(!empty($getPr1afternoon->use_id)){   
        // One with out use_id and one with use_is  
        $othersperservingafternoon = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1afternoon->use_id;
        $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1afternoon->use_id)){
        // Two products with out use_id
        $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0afternoon = $this->productModel->getProductById($otherAfternoon5day[0]);
    $getPr1afternoon = $this->productModel->getProductById($otherAfternoon5day[1]);
    $getPr2afternoon = $this->productModel->getProductById($otherAfternoon5day[2]);
    if(!empty($getPr1afternoon->use_id)){
        if(empty($getPr2afternoon->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2afternoon->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmptyafternoon = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0afternoon = $this->productModel->getProductById($otherAfternoon5day[0]);
    $getPr1afternoon = $this->productModel->getProductById($otherAfternoon5day[1]);
    $getPr2afternoon = $this->productModel->getProductById($otherAfternoon5day[2]);
    $getPr3afternoon = $this->productModel->getProductById($otherAfternoon5day[3]);
    if(!empty($getPr0afternoon->use_id)){
        $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
        $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
        $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
        $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
        $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
        $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
    }elseif(empty($getPr0afternoon->use_id)){
        if(empty($getPr1afternoon->use_id) && !empty($getPr2afternoon->use_id)){
            
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){ 
           
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id)){      
                        
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id)){       
                       
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){          
                      
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3afternoon->use_id)){   
                          
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
        
    }elseif(empty($getPr1afternoon->use_id)){
          if(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id)){
               
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){ 
           
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2afternoon->use_id)){ 
               
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2afternoon->use_id)){
         if(empty($getPr3afternoon->use_id)){     
                             
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 ;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                     
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3afternoon->use_id)){
        
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0afternoon = $this->productModel->getProductById($otherAfternoon5day[0]);
    $getPr1afternoon = $this->productModel->getProductById($otherAfternoon5day[1]);
    $getPr2afternoon = $this->productModel->getProductById($otherAfternoon5day[2]);
    $getPr3afternoon = $this->productModel->getProductById($otherAfternoon5day[3]);
    $getPr4afternoon = $this->productModel->getProductById($otherAfternoon5day[4]);
if(empty($getPr0afternoon->use_id)){
        if(empty($getPr1afternoon->use_id) && !empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id) && !empty($getPr4afternoon->use_id)){
            
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3 +$othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)&& empty($getPr4afternoon->use_id)){         
          
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){                      
           
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus = $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id)){  
            if(!empty($getPr3afternoon->use_id)){
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                       
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;                
            $minus =  $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                       
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;                
            $minus =  $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id)){     
            
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){   
            if(!empty($getPr1afternoon->use_id)){ 
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3afternoon->use_id)){   
            if(!empty($getPr2afternoon->use_id)){
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4afternoon->use_id)){   
             
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                       
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1afternoon->use_id)){
          if(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id) && !empty($getPr4afternoon->use_id)){
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3afternoon->use_id) ){   
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $minus =  $othersperservingafternoon0;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4afternoon->use_id) ){
            if(!empty($getPr3afternoon->use_id)){
               
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2afternoon->use_id)){
         if(empty($getPr3afternoon->use_id)){   
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 ;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                     
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                     
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                     
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3afternoon->use_id)){
        if(empty($getPr4afternoon->use_id)){
           
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id; 
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id; 
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}


switch (count($otherAfternoon6day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($otherAfternoon6day)){
        $getPr0afternoon = $this->productModel->getProductById($otherAfternoon6day[0]);
        $othersperservingUseEmptyafternoon = $caloriesperserving /100 * 20 /4; 
        $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $getPr0afternoon = $this->productModel->getProductById($otherAfternoon6day[0]);
        $getPr1afternoon = $this->productModel->getProductById($otherAfternoon6day[1]);
    if(!empty($getPr1afternoon->use_id)){   
        // One with out use_id and one with use_is  
        $othersperservingafternoon = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1afternoon->use_id;
        $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1afternoon->use_id)){
        // Two products with out use_id
        $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0afternoon = $this->productModel->getProductById($otherAfternoon6day[0]);
    $getPr1afternoon = $this->productModel->getProductById($otherAfternoon6day[1]);
    $getPr2afternoon = $this->productModel->getProductById($otherAfternoon6day[2]);
    if(!empty($getPr1afternoon->use_id)){
        if(empty($getPr2afternoon->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2afternoon->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmptyafternoon = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0afternoon = $this->productModel->getProductById($otherAfternoon6day[0]);
    $getPr1afternoon = $this->productModel->getProductById($otherAfternoon6day[1]);
    $getPr2afternoon = $this->productModel->getProductById($otherAfternoon6day[2]);
    $getPr3afternoon = $this->productModel->getProductById($otherAfternoon6day[3]);
    if(!empty($getPr0afternoon->use_id)){
        $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
        $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
        $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
        $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
        $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
        $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
    }elseif(empty($getPr0afternoon->use_id)){
        if(empty($getPr1afternoon->use_id) && !empty($getPr2afternoon->use_id)){
            
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){ 
           
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id)){      
                        
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id)){       
                       
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){          
                      
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3afternoon->use_id)){   
                          
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
        
    }elseif(empty($getPr1afternoon->use_id)){
          if(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id)){
               
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){ 
           
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2afternoon->use_id)){ 
               
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2afternoon->use_id)){
         if(empty($getPr3afternoon->use_id)){     
                             
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 ;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                     
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3afternoon->use_id)){
        
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0afternoon = $this->productModel->getProductById($otherAfternoon6day[0]);
    $getPr1afternoon = $this->productModel->getProductById($otherAfternoon6day[1]);
    $getPr2afternoon = $this->productModel->getProductById($otherAfternoon6day[2]);
    $getPr3afternoon = $this->productModel->getProductById($otherAfternoon6day[3]);
    $getPr4afternoon = $this->productModel->getProductById($otherAfternoon6day[4]);
if(empty($getPr0afternoon->use_id)){
        if(empty($getPr1afternoon->use_id) && !empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id) && !empty($getPr4afternoon->use_id)){
            
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3 +$othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)&& empty($getPr4afternoon->use_id)){         
          
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){                      
           
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus = $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id)){  
            if(!empty($getPr3afternoon->use_id)){
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                       
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;                
            $minus =  $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                       
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;                
            $minus =  $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id)){     
            
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){   
            if(!empty($getPr1afternoon->use_id)){ 
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3afternoon->use_id)){   
            if(!empty($getPr2afternoon->use_id)){
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4afternoon->use_id)){   
             
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                       
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1afternoon->use_id)){
          if(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id) && !empty($getPr4afternoon->use_id)){
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3afternoon->use_id) ){   
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $minus =  $othersperservingafternoon0;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4afternoon->use_id) ){
            if(!empty($getPr3afternoon->use_id)){
               
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2afternoon->use_id)){
         if(empty($getPr3afternoon->use_id)){   
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 ;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                     
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                     
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                     
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3afternoon->use_id)){
        if(empty($getPr4afternoon->use_id)){
           
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id; 
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id; 
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}


switch (count($otherAfternoon7day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($otherAfternoon7day)){
        $getPr0afternoon = $this->productModel->getProductById($otherAfternoon7day[0]);
        $othersperservingUseEmptyafternoon = $caloriesperserving /100 * 20 /4; 
        $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $getPr0afternoon = $this->productModel->getProductById($otherAfternoon7day[0]);
        $getPr1afternoon = $this->productModel->getProductById($otherAfternoon7day[1]);
    if(!empty($getPr1afternoon->use_id)){   
        // One with out use_id and one with use_is  
        $othersperservingafternoon = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1afternoon->use_id;
        $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1afternoon->use_id)){
        // Two products with out use_id
        $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0afternoon = $this->productModel->getProductById($otherAfternoon7day[0]);
    $getPr1afternoon = $this->productModel->getProductById($otherAfternoon7day[1]);
    $getPr2afternoon = $this->productModel->getProductById($otherAfternoon7day[2]);
    if(!empty($getPr1afternoon->use_id)){
        if(empty($getPr2afternoon->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2afternoon->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmptyafternoon = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0afternoon = $this->productModel->getProductById($otherAfternoon7day[0]);
    $getPr1afternoon = $this->productModel->getProductById($otherAfternoon7day[1]);
    $getPr2afternoon = $this->productModel->getProductById($otherAfternoon7day[2]);
    $getPr3afternoon = $this->productModel->getProductById($otherAfternoon7day[3]);
    if(!empty($getPr0afternoon->use_id)){
        $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
        $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
        $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
        $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
        $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
        $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
    }elseif(empty($getPr0afternoon->use_id)){
        if(empty($getPr1afternoon->use_id) && !empty($getPr2afternoon->use_id)){
            
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){ 
           
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id)){      
                        
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id)){       
                       
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){          
                      
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3afternoon->use_id)){   
                          
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
        
    }elseif(empty($getPr1afternoon->use_id)){
          if(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id)){
               
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){ 
           
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2afternoon->use_id)){ 
               
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2afternoon->use_id)){
         if(empty($getPr3afternoon->use_id)){     
                             
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 ;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                     
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3afternoon->use_id)){
        
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0afternoon = $this->productModel->getProductById($otherAfternoon7day[0]);
    $getPr1afternoon = $this->productModel->getProductById($otherAfternoon7day[1]);
    $getPr2afternoon = $this->productModel->getProductById($otherAfternoon7day[2]);
    $getPr3afternoon = $this->productModel->getProductById($otherAfternoon7day[3]);
    $getPr4afternoon = $this->productModel->getProductById($otherAfternoon7day[4]);
if(empty($getPr0afternoon->use_id)){
        if(empty($getPr1afternoon->use_id) && !empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id) && !empty($getPr4afternoon->use_id)){
            
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3 +$othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)&& empty($getPr4afternoon->use_id)){         
          
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){                      
           
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus = $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1afternoon->use_id) && empty($getPr2afternoon->use_id)){  
            if(!empty($getPr3afternoon->use_id)){
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                       
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;                
            $minus =  $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                       
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;                
            $minus =  $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id)){     
            
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2afternoon->use_id) && empty($getPr3afternoon->use_id)){   
            if(!empty($getPr1afternoon->use_id)){ 
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                      
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3afternoon->use_id)){   
            if(!empty($getPr2afternoon->use_id)){
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4afternoon->use_id)){   
             
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                       
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1afternoon->use_id)){
          if(empty($getPr2afternoon->use_id) && !empty($getPr3afternoon->use_id) && !empty($getPr4afternoon->use_id)){
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3afternoon->use_id) ){   
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $minus =  $othersperservingafternoon0;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4afternoon->use_id) ){
            if(!empty($getPr3afternoon->use_id)){
               
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4afternoon->use_id;
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon2 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2afternoon->use_id)){
         if(empty($getPr3afternoon->use_id)){   
            
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 ;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;                     
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                     
            $othersperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id;                     
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon3 + $othersperservingafternoon4;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3afternoon->use_id)){
        if(empty($getPr4afternoon->use_id)){
           
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id;               
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2;
            $othersperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0afternoon->use_id;
            $othersperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1afternoon->use_id;               
            $othersperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2afternoon->use_id; 
            $othersperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3afternoon->use_id; 
            $minus =  $othersperservingafternoon0 + $othersperservingafternoon1 + $othersperservingafternoon2 + $othersperservingafternoon3;
            $othersperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingafternoon = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}
