<?php
 switch (count($otherDinner)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($otherDinner)){
        $getPr0dinner = $this->productModel->getProductById($otherDinner[0]);
        $othersperservingUseEmptydinner = $caloriesperserving /100 * 20 /4; 
        $othersperservingdinner = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $getPr0dinner = $this->productModel->getProductById($otherDinner[0]);
        $getPr1dinner = $this->productModel->getProductById($otherDinner[1]);
    if(!empty($getPr1dinner->use_id)){   
        // One with out use_id and one with use_is  
        $othersperservingdinner = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1dinner->use_id;
        $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1dinner->use_id)){
        // Two products with out use_id
        $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0dinner = $this->productModel->getProductById($otherDinner[0]);
    $getPr1dinner = $this->productModel->getProductById($otherDinner[1]);
    $getPr2dinner = $this->productModel->getProductById($otherDinner[2]);
    if(!empty($getPr1dinner->use_id)){
        if(empty($getPr2dinner->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2dinner->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmptydinner = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0dinner = $this->productModel->getProductById($otherDinner[0]);
    $getPr1dinner = $this->productModel->getProductById($otherDinner[1]);
    $getPr2dinner = $this->productModel->getProductById($otherDinner[2]);
    $getPr3dinner = $this->productModel->getProductById($otherDinner[3]);
    if(!empty($getPr0dinner->use_id)){
        $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
        $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
        $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
        $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
        $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
        $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
    }elseif(empty($getPr0dinner->use_id)){
        if(empty($getPr1dinner->use_id) && !empty($getPr2dinner->use_id)){
            
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){ 
           
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id)){      
                        
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id)){       
                       
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){          
                      
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3dinner->use_id)){   
                          
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
        }
        
    }elseif(empty($getPr1dinner->use_id)){
          if(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id)){
               
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){ 
           
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2dinner->use_id)){ 
               
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2dinner->use_id)){
         if(empty($getPr3dinner->use_id)){     
                             
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 ;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                     
            $minus =  $othersperservingdinner0 + $othersperservingdinner1;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3dinner->use_id)){
        
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0dinner = $this->productModel->getProductById($otherDinner[0]);
    $getPr1dinner = $this->productModel->getProductById($otherDinner[1]);
    $getPr2dinner = $this->productModel->getProductById($otherDinner[2]);
    $getPr3dinner = $this->productModel->getProductById($otherDinner[3]);
    $getPr4dinner = $this->productModel->getProductById($otherDinner[4]);
if(empty($getPr0dinner->use_id)){
        if(empty($getPr1dinner->use_id) && !empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id) && !empty($getPr4dinner->use_id)){
            
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3 +$othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)&& empty($getPr4dinner->use_id)){         
          
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){                      
           
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus = $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id)){  
            if(!empty($getPr3dinner->use_id)){
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                       
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;                
            $minus =  $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                       
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;                
            $minus =  $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id)){     
            
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){   
            if(!empty($getPr1dinner->use_id)){ 
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3dinner->use_id)){   
            if(!empty($getPr2dinner->use_id)){
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4dinner->use_id)){   
             
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                       
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1dinner->use_id)){
          if(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id) && !empty($getPr4dinner->use_id)){
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3dinner->use_id) ){   
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $minus =  $othersperservingdinner0;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4dinner->use_id) ){
            if(!empty($getPr3dinner->use_id)){
               
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2dinner->use_id)){
         if(empty($getPr3dinner->use_id)){   
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 ;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                     
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                     
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                     
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3dinner->use_id)){
        if(empty($getPr4dinner->use_id)){
           
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id; 
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id; 
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}



switch (count($otherDinner2day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($otherDinner2day)){
        $getPr0dinner = $this->productModel->getProductById($otherDinner2day[0]);
        $othersperservingUseEmptydinner = $caloriesperserving /100 * 20 /4; 
        $othersperservingdinner = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $getPr0dinner = $this->productModel->getProductById($otherDinner2day[0]);
        $getPr1dinner = $this->productModel->getProductById($otherDinner2day[1]);
    if(!empty($getPr1dinner->use_id)){   
        // One with out use_id and one with use_is  
        $othersperservingdinner = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1dinner->use_id;
        $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1dinner->use_id)){
        // Two products with out use_id
        $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0dinner = $this->productModel->getProductById($otherDinner2day[0]);
    $getPr1dinner = $this->productModel->getProductById($otherDinner2day[1]);
    $getPr2dinner = $this->productModel->getProductById($otherDinner2day[2]);
    if(!empty($getPr1dinner->use_id)){
        if(empty($getPr2dinner->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2dinner->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmptydinner = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0dinner = $this->productModel->getProductById($otherDinner2day[0]);
    $getPr1dinner = $this->productModel->getProductById($otherDinner2day[1]);
    $getPr2dinner = $this->productModel->getProductById($otherDinner2day[2]);
    $getPr3dinner = $this->productModel->getProductById($otherDinner2day[3]);
    if(!empty($getPr0dinner->use_id)){
        $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
        $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
        $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
        $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
        $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
        $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
    }elseif(empty($getPr0dinner->use_id)){
        if(empty($getPr1dinner->use_id) && !empty($getPr2dinner->use_id)){
            
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){ 
           
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id)){      
                        
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id)){       
                       
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){          
                      
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3dinner->use_id)){   
                          
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
        }
        
    }elseif(empty($getPr1dinner->use_id)){
          if(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id)){
               
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){ 
           
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2dinner->use_id)){ 
               
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2dinner->use_id)){
         if(empty($getPr3dinner->use_id)){     
                             
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 ;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                     
            $minus =  $othersperservingdinner0 + $othersperservingdinner1;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3dinner->use_id)){
        
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0dinner = $this->productModel->getProductById($otherDinner2day[0]);
    $getPr1dinner = $this->productModel->getProductById($otherDinner2day[1]);
    $getPr2dinner = $this->productModel->getProductById($otherDinner2day[2]);
    $getPr3dinner = $this->productModel->getProductById($otherDinner2day[3]);
    $getPr4dinner = $this->productModel->getProductById($otherDinner2day[4]);
if(empty($getPr0dinner->use_id)){
        if(empty($getPr1dinner->use_id) && !empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id) && !empty($getPr4dinner->use_id)){
            
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3 +$othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)&& empty($getPr4dinner->use_id)){         
          
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){                      
           
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus = $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id)){  
            if(!empty($getPr3dinner->use_id)){
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                       
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;                
            $minus =  $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                       
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;                
            $minus =  $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id)){     
            
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){   
            if(!empty($getPr1dinner->use_id)){ 
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3dinner->use_id)){   
            if(!empty($getPr2dinner->use_id)){
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4dinner->use_id)){   
             
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                       
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1dinner->use_id)){
          if(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id) && !empty($getPr4dinner->use_id)){
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3dinner->use_id) ){   
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $minus =  $othersperservingdinner0;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4dinner->use_id) ){
            if(!empty($getPr3dinner->use_id)){
               
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2dinner->use_id)){
         if(empty($getPr3dinner->use_id)){   
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 ;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                     
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                     
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                     
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3dinner->use_id)){
        if(empty($getPr4dinner->use_id)){
           
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id; 
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id; 
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}


switch (count($otherDinner3day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($otherDinner3day)){
        $getPr0dinner = $this->productModel->getProductById($otherDinner3day[0]);
        $othersperservingUseEmptydinner = $caloriesperserving /100 * 20 /4; 
        $othersperservingdinner = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $getPr0dinner = $this->productModel->getProductById($otherDinner3day[0]);
        $getPr1dinner = $this->productModel->getProductById($otherDinner3day[1]);
    if(!empty($getPr1dinner->use_id)){   
        // One with out use_id and one with use_is  
        $othersperservingdinner = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1dinner->use_id;
        $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1dinner->use_id)){
        // Two products with out use_id
        $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0dinner = $this->productModel->getProductById($otherDinner3day[0]);
    $getPr1dinner = $this->productModel->getProductById($otherDinner3day[1]);
    $getPr2dinner = $this->productModel->getProductById($otherDinner3day[2]);
    if(!empty($getPr1dinner->use_id)){
        if(empty($getPr2dinner->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2dinner->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmptydinner = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0dinner = $this->productModel->getProductById($otherDinner3day[0]);
    $getPr1dinner = $this->productModel->getProductById($otherDinner3day[1]);
    $getPr2dinner = $this->productModel->getProductById($otherDinner3day[2]);
    $getPr3dinner = $this->productModel->getProductById($otherDinner3day[3]);
    if(!empty($getPr0dinner->use_id)){
        $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
        $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
        $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
        $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
        $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
        $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
    }elseif(empty($getPr0dinner->use_id)){
        if(empty($getPr1dinner->use_id) && !empty($getPr2dinner->use_id)){
            
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){ 
           
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id)){      
                        
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id)){       
                       
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){          
                      
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3dinner->use_id)){   
                          
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
        }
        
    }elseif(empty($getPr1dinner->use_id)){
          if(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id)){
               
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){ 
           
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2dinner->use_id)){ 
               
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2dinner->use_id)){
         if(empty($getPr3dinner->use_id)){     
                             
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 ;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                     
            $minus =  $othersperservingdinner0 + $othersperservingdinner1;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3dinner->use_id)){
        
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0dinner = $this->productModel->getProductById($otherDinner3day[0]);
    $getPr1dinner = $this->productModel->getProductById($otherDinner3day[1]);
    $getPr2dinner = $this->productModel->getProductById($otherDinner3day[2]);
    $getPr3dinner = $this->productModel->getProductById($otherDinner3day[3]);
    $getPr4dinner = $this->productModel->getProductById($otherDinner3day[4]);
if(empty($getPr0dinner->use_id)){
        if(empty($getPr1dinner->use_id) && !empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id) && !empty($getPr4dinner->use_id)){
            
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3 +$othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)&& empty($getPr4dinner->use_id)){         
          
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){                      
           
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus = $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id)){  
            if(!empty($getPr3dinner->use_id)){
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                       
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;                
            $minus =  $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                       
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;                
            $minus =  $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id)){     
            
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){   
            if(!empty($getPr1dinner->use_id)){ 
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3dinner->use_id)){   
            if(!empty($getPr2dinner->use_id)){
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4dinner->use_id)){   
             
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                       
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1dinner->use_id)){
          if(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id) && !empty($getPr4dinner->use_id)){
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3dinner->use_id) ){   
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $minus =  $othersperservingdinner0;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4dinner->use_id) ){
            if(!empty($getPr3dinner->use_id)){
               
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2dinner->use_id)){
         if(empty($getPr3dinner->use_id)){   
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 ;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                     
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                     
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                     
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3dinner->use_id)){
        if(empty($getPr4dinner->use_id)){
           
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id; 
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id; 
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}


switch (count($otherDinner4day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($otherDinner4day)){
        $getPr0dinner = $this->productModel->getProductById($otherDinner4day[0]);
        $othersperservingUseEmptydinner = $caloriesperserving /100 * 20 /4; 
        $othersperservingdinner = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $getPr0dinner = $this->productModel->getProductById($otherDinner4day[0]);
        $getPr1dinner = $this->productModel->getProductById($otherDinner4day[1]);
    if(!empty($getPr1dinner->use_id)){   
        // One with out use_id and one with use_is  
        $othersperservingdinner = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1dinner->use_id;
        $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1dinner->use_id)){
        // Two products with out use_id
        $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0dinner = $this->productModel->getProductById($otherDinner4day[0]);
    $getPr1dinner = $this->productModel->getProductById($otherDinner4day[1]);
    $getPr2dinner = $this->productModel->getProductById($otherDinner4day[2]);
    if(!empty($getPr1dinner->use_id)){
        if(empty($getPr2dinner->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2dinner->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmptydinner = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0dinner = $this->productModel->getProductById($otherDinner4day[0]);
    $getPr1dinner = $this->productModel->getProductById($otherDinner4day[1]);
    $getPr2dinner = $this->productModel->getProductById($otherDinner4day[2]);
    $getPr3dinner = $this->productModel->getProductById($otherDinner4day[3]);
    if(!empty($getPr0dinner->use_id)){
        $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
        $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
        $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
        $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
        $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
        $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
    }elseif(empty($getPr0dinner->use_id)){
        if(empty($getPr1dinner->use_id) && !empty($getPr2dinner->use_id)){
            
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){ 
           
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id)){      
                        
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id)){       
                       
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){          
                      
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3dinner->use_id)){   
                          
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
        }
        
    }elseif(empty($getPr1dinner->use_id)){
          if(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id)){
               
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){ 
           
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2dinner->use_id)){ 
               
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2dinner->use_id)){
         if(empty($getPr3dinner->use_id)){     
                             
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 ;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                     
            $minus =  $othersperservingdinner0 + $othersperservingdinner1;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3dinner->use_id)){
        
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0dinner = $this->productModel->getProductById($otherDinner4day[0]);
    $getPr1dinner = $this->productModel->getProductById($otherDinner4day[1]);
    $getPr2dinner = $this->productModel->getProductById($otherDinner4day[2]);
    $getPr3dinner = $this->productModel->getProductById($otherDinner4day[3]);
    $getPr4dinner = $this->productModel->getProductById($otherDinner4day[4]);
if(empty($getPr0dinner->use_id)){
        if(empty($getPr1dinner->use_id) && !empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id) && !empty($getPr4dinner->use_id)){
            
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3 +$othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)&& empty($getPr4dinner->use_id)){         
          
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){                      
           
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus = $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id)){  
            if(!empty($getPr3dinner->use_id)){
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                       
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;                
            $minus =  $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                       
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;                
            $minus =  $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id)){     
            
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){   
            if(!empty($getPr1dinner->use_id)){ 
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3dinner->use_id)){   
            if(!empty($getPr2dinner->use_id)){
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4dinner->use_id)){   
             
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                       
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1dinner->use_id)){
          if(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id) && !empty($getPr4dinner->use_id)){
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3dinner->use_id) ){   
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $minus =  $othersperservingdinner0;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4dinner->use_id) ){
            if(!empty($getPr3dinner->use_id)){
               
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2dinner->use_id)){
         if(empty($getPr3dinner->use_id)){   
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 ;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                     
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                     
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                     
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3dinner->use_id)){
        if(empty($getPr4dinner->use_id)){
           
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id; 
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id; 
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}


switch (count($otherDinner5day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($otherDinner5day)){
        $getPr0dinner = $this->productModel->getProductById($otherDinner5day[0]);
        $othersperservingUseEmptydinner = $caloriesperserving /100 * 20 /4; 
        $othersperservingdinner = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $getPr0dinner = $this->productModel->getProductById($otherDinner5day[0]);
        $getPr1dinner = $this->productModel->getProductById($otherDinner5day[1]);
    if(!empty($getPr1dinner->use_id)){   
        // One with out use_id and one with use_is  
        $othersperservingdinner = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1dinner->use_id;
        $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1dinner->use_id)){
        // Two products with out use_id
        $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0dinner = $this->productModel->getProductById($otherDinner5day[0]);
    $getPr1dinner = $this->productModel->getProductById($otherDinner5day[1]);
    $getPr2dinner = $this->productModel->getProductById($otherDinner5day[2]);
    if(!empty($getPr1dinner->use_id)){
        if(empty($getPr2dinner->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2dinner->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmptydinner = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0dinner = $this->productModel->getProductById($otherDinner5day[0]);
    $getPr1dinner = $this->productModel->getProductById($otherDinner5day[1]);
    $getPr2dinner = $this->productModel->getProductById($otherDinner5day[2]);
    $getPr3dinner = $this->productModel->getProductById($otherDinner5day[3]);
    if(!empty($getPr0dinner->use_id)){
        $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
        $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
        $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
        $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
        $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
        $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
    }elseif(empty($getPr0dinner->use_id)){
        if(empty($getPr1dinner->use_id) && !empty($getPr2dinner->use_id)){
            
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){ 
           
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id)){      
                        
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id)){       
                       
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){          
                      
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3dinner->use_id)){   
                          
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
        }
        
    }elseif(empty($getPr1dinner->use_id)){
          if(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id)){
               
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){ 
           
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2dinner->use_id)){ 
               
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2dinner->use_id)){
         if(empty($getPr3dinner->use_id)){     
                             
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 ;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                     
            $minus =  $othersperservingdinner0 + $othersperservingdinner1;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3dinner->use_id)){
        
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0dinner = $this->productModel->getProductById($otherDinner5day[0]);
    $getPr1dinner = $this->productModel->getProductById($otherDinner5day[1]);
    $getPr2dinner = $this->productModel->getProductById($otherDinner5day[2]);
    $getPr3dinner = $this->productModel->getProductById($otherDinner5day[3]);
    $getPr4dinner = $this->productModel->getProductById($otherDinner5day[4]);
if(empty($getPr0dinner->use_id)){
        if(empty($getPr1dinner->use_id) && !empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id) && !empty($getPr4dinner->use_id)){
            
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3 +$othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)&& empty($getPr4dinner->use_id)){         
          
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){                      
           
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus = $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id)){  
            if(!empty($getPr3dinner->use_id)){
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                       
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;                
            $minus =  $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                       
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;                
            $minus =  $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id)){     
            
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){   
            if(!empty($getPr1dinner->use_id)){ 
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3dinner->use_id)){   
            if(!empty($getPr2dinner->use_id)){
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4dinner->use_id)){   
             
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                       
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1dinner->use_id)){
          if(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id) && !empty($getPr4dinner->use_id)){
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3dinner->use_id) ){   
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $minus =  $othersperservingdinner0;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4dinner->use_id) ){
            if(!empty($getPr3dinner->use_id)){
               
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2dinner->use_id)){
         if(empty($getPr3dinner->use_id)){   
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 ;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                     
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                     
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                     
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3dinner->use_id)){
        if(empty($getPr4dinner->use_id)){
           
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id; 
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id; 
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}


switch (count($otherDinner6day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($otherDinner6day)){
        $getPr0dinner = $this->productModel->getProductById($otherDinner6day[0]);
        $othersperservingUseEmptydinner = $caloriesperserving /100 * 20 /4; 
        $othersperservingdinner = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $getPr0dinner = $this->productModel->getProductById($otherDinner6day[0]);
        $getPr1dinner = $this->productModel->getProductById($otherDinner6day[1]);
    if(!empty($getPr1dinner->use_id)){   
        // One with out use_id and one with use_is  
        $othersperservingdinner = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1dinner->use_id;
        $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1dinner->use_id)){
        // Two products with out use_id
        $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0dinner = $this->productModel->getProductById($otherDinner6day[0]);
    $getPr1dinner = $this->productModel->getProductById($otherDinner6day[1]);
    $getPr2dinner = $this->productModel->getProductById($otherDinner6day[2]);
    if(!empty($getPr1dinner->use_id)){
        if(empty($getPr2dinner->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2dinner->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmptydinner = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0dinner = $this->productModel->getProductById($otherDinner6day[0]);
    $getPr1dinner = $this->productModel->getProductById($otherDinner6day[1]);
    $getPr2dinner = $this->productModel->getProductById($otherDinner6day[2]);
    $getPr3dinner = $this->productModel->getProductById($otherDinner6day[3]);
    if(!empty($getPr0dinner->use_id)){
        $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
        $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
        $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
        $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
        $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
        $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
    }elseif(empty($getPr0dinner->use_id)){
        if(empty($getPr1dinner->use_id) && !empty($getPr2dinner->use_id)){
            
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){ 
           
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id)){      
                        
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id)){       
                       
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){          
                      
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3dinner->use_id)){   
                          
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
        }
        
    }elseif(empty($getPr1dinner->use_id)){
          if(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id)){
               
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){ 
           
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2dinner->use_id)){ 
               
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2dinner->use_id)){
         if(empty($getPr3dinner->use_id)){     
                             
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 ;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                     
            $minus =  $othersperservingdinner0 + $othersperservingdinner1;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3dinner->use_id)){
        
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0dinner = $this->productModel->getProductById($otherDinner6day[0]);
    $getPr1dinner = $this->productModel->getProductById($otherDinner6day[1]);
    $getPr2dinner = $this->productModel->getProductById($otherDinner6day[2]);
    $getPr3dinner = $this->productModel->getProductById($otherDinner6day[3]);
    $getPr4dinner = $this->productModel->getProductById($otherDinner6day[4]);
if(empty($getPr0dinner->use_id)){
        if(empty($getPr1dinner->use_id) && !empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id) && !empty($getPr4dinner->use_id)){
            
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3 +$othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)&& empty($getPr4dinner->use_id)){         
          
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){                      
           
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus = $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id)){  
            if(!empty($getPr3dinner->use_id)){
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                       
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;                
            $minus =  $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                       
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;                
            $minus =  $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id)){     
            
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){   
            if(!empty($getPr1dinner->use_id)){ 
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3dinner->use_id)){   
            if(!empty($getPr2dinner->use_id)){
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4dinner->use_id)){   
             
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                       
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1dinner->use_id)){
          if(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id) && !empty($getPr4dinner->use_id)){
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3dinner->use_id) ){   
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $minus =  $othersperservingdinner0;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4dinner->use_id) ){
            if(!empty($getPr3dinner->use_id)){
               
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2dinner->use_id)){
         if(empty($getPr3dinner->use_id)){   
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 ;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                     
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                     
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                     
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3dinner->use_id)){
        if(empty($getPr4dinner->use_id)){
           
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id; 
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id; 
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}


switch (count($otherDinner7day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($otherDinner7day)){
        $getPr0dinner = $this->productModel->getProductById($otherDinner7day[0]);
        $othersperservingUseEmptydinner = $caloriesperserving /100 * 20 /4; 
        $othersperservingdinner = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $getPr0dinner = $this->productModel->getProductById($otherDinner7day[0]);
        $getPr1dinner = $this->productModel->getProductById($otherDinner7day[1]);
    if(!empty($getPr1dinner->use_id)){   
        // One with out use_id and one with use_is  
        $othersperservingdinner = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1dinner->use_id;
        $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1dinner->use_id)){
        // Two products with out use_id
        $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0dinner = $this->productModel->getProductById($otherDinner7day[0]);
    $getPr1dinner = $this->productModel->getProductById($otherDinner7day[1]);
    $getPr2dinner = $this->productModel->getProductById($otherDinner7day[2]);
    if(!empty($getPr1dinner->use_id)){
        if(empty($getPr2dinner->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2dinner->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmptydinner = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0dinner = $this->productModel->getProductById($otherDinner7day[0]);
    $getPr1dinner = $this->productModel->getProductById($otherDinner7day[1]);
    $getPr2dinner = $this->productModel->getProductById($otherDinner7day[2]);
    $getPr3dinner = $this->productModel->getProductById($otherDinner7day[3]);
    if(!empty($getPr0dinner->use_id)){
        $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
        $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
        $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
        $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
        $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
        $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
    }elseif(empty($getPr0dinner->use_id)){
        if(empty($getPr1dinner->use_id) && !empty($getPr2dinner->use_id)){
            
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){ 
           
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id)){      
                        
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id)){       
                       
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){          
                      
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3dinner->use_id)){   
                          
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
        }
        
    }elseif(empty($getPr1dinner->use_id)){
          if(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id)){
               
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){ 
           
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2dinner->use_id)){ 
               
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2dinner->use_id)){
         if(empty($getPr3dinner->use_id)){     
                             
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 ;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                     
            $minus =  $othersperservingdinner0 + $othersperservingdinner1;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3dinner->use_id)){
        
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0dinner = $this->productModel->getProductById($otherDinner7day[0]);
    $getPr1dinner = $this->productModel->getProductById($otherDinner7day[1]);
    $getPr2dinner = $this->productModel->getProductById($otherDinner7day[2]);
    $getPr3dinner = $this->productModel->getProductById($otherDinner7day[3]);
    $getPr4dinner = $this->productModel->getProductById($otherDinner7day[4]);
if(empty($getPr0dinner->use_id)){
        if(empty($getPr1dinner->use_id) && !empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id) && !empty($getPr4dinner->use_id)){
            
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3 +$othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)&& empty($getPr4dinner->use_id)){         
          
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){                      
           
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus = $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1dinner->use_id) && empty($getPr2dinner->use_id)){  
            if(!empty($getPr3dinner->use_id)){
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                       
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;                
            $minus =  $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                       
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;                
            $minus =  $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id)){     
            
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2dinner->use_id) && empty($getPr3dinner->use_id)){   
            if(!empty($getPr1dinner->use_id)){ 
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                      
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3dinner->use_id)){   
            if(!empty($getPr2dinner->use_id)){
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4dinner->use_id)){   
             
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                       
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1dinner->use_id)){
          if(empty($getPr2dinner->use_id) && !empty($getPr3dinner->use_id) && !empty($getPr4dinner->use_id)){
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3dinner->use_id) ){   
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $minus =  $othersperservingdinner0;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4dinner->use_id) ){
            if(!empty($getPr3dinner->use_id)){
               
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4dinner->use_id;
            $minus =  $othersperservingdinner0 + $othersperservingdinner2 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2dinner->use_id)){
         if(empty($getPr3dinner->use_id)){   
            
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 ;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;                     
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                     
            $othersperservingdinner4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id;                     
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner3 + $othersperservingdinner4;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3dinner->use_id)){
        if(empty($getPr4dinner->use_id)){
           
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id;               
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2;
            $othersperservingUseEmptydinner =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperservingdinner0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0dinner->use_id;
            $othersperservingdinner1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1dinner->use_id;               
            $othersperservingdinner2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2dinner->use_id; 
            $othersperservingdinner3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3dinner->use_id; 
            $minus =  $othersperservingdinner0 + $othersperservingdinner1 + $othersperservingdinner2 + $othersperservingdinner3;
            $othersperservingUseEmptydinner =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservingdinner = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}