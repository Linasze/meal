<?php
 switch (count($otherLunch)) {
    case 1:
        // One Product with out use_id or with use_id
        $getPr0lunch = $this->productModel->getProductById($otherLunch[0]);
        $othersperservingUseEmptylunch = $caloriesperserving /100 * 20 /4; 
        $othersperservinglunch = $caloriesperserving /100 * 20 /4;
    break;

    case 2:
        $getPr0lunch = $this->productModel->getProductById($otherLunch[0]);
        $getPr1lunch = $this->productModel->getProductById($otherLunch[1]);
    if(!empty($getPr1lunch->use_id)){   
        // One with out use_id and one with use_is  
        $othersperservinglunch = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1lunch->use_id;
        $othersperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1lunch->use_id)){
        // Two products with out use_id
        $othersperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0lunch = $this->productModel->getProductById($otherLunch[0]);
    $getPr1lunch = $this->productModel->getProductById($otherLunch[1]);
    $getPr2lunch = $this->productModel->getProductById($otherLunch[2]);
    if(!empty($getPr1lunch->use_id)){
        if(empty($getPr2lunch->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1lunch->use_id;
            $othersperservinglunch2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2lunch->use_id;
            $minus =  $othersperservinglunch1 + $othersperservinglunch2;
            $othersperservingUseEmptylunch =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2lunch->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;
            $othersperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2lunch->use_id;
            $minus =  $othersperservinglunch1 + $othersperservinglunch2;
            $othersperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmptylunch = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0lunch = $this->productModel->getProductById($otherLunch[0]);
    $getPr1lunch = $this->productModel->getProductById($otherLunch[1]);
    $getPr2lunch = $this->productModel->getProductById($otherLunch[2]);
    $getPr3lunch = $this->productModel->getProductById($otherLunch[3]);
    if(!empty($getPr0lunch->use_id)){
        $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;
        $othersperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2lunch->use_id;
        $othersperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id;
        $minus =  $othersperservinglunch1 + $othersperservinglunch2 + $othersperservinglunch3;
        $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
        $othersperservinglunch = $caloriesperserving /100 * 20 /4;  
    }elseif(empty($getPr0lunch->use_id)){
        if(empty($getPr1lunch->use_id) && !empty($getPr2lunch->use_id)){
            
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;
            $othersperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2lunch->use_id;
            $othersperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id;
            $minus =  $othersperservinglunch1 + $othersperservinglunch2 + $othersperservinglunch3;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1lunch->use_id) && empty($getPr2lunch->use_id) && empty($getPr3lunch->use_id)){ 
           
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;
            $othersperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2lunch->use_id;
            $othersperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id;
            $minus =  $othersperservinglunch1 + $othersperservinglunch2 + $othersperservinglunch3;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1lunch->use_id) && empty($getPr2lunch->use_id)){      
                        
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;
            $othersperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2lunch->use_id;
            $othersperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id;
            $minus =  $othersperservinglunch1 + $othersperservinglunch2 + $othersperservinglunch3;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2lunch->use_id) && !empty($getPr3lunch->use_id)){       
                       
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;                      
            $othersperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id;
            $minus =  $othersperservinglunch1 + $othersperservinglunch3;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2lunch->use_id) && empty($getPr3lunch->use_id)){          
                      
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;                      
            $othersperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id;
            $minus =  $othersperservinglunch1 + $othersperservinglunch3;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3lunch->use_id)){   
                          
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;
            $othersperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2lunch->use_id;
            $minus =  $othersperservinglunch1 + $othersperservinglunch2;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;
            $othersperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2lunch->use_id;
            $othersperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id;
            $minus =  $othersperservinglunch1 + $othersperservinglunch2 + $othersperservinglunch3;
            $othersperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;  
        }
        
    }elseif(empty($getPr1lunch->use_id)){
          if(empty($getPr2lunch->use_id) && !empty($getPr3lunch->use_id)){
               
            $othersperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0lunch->use_id;
            $othersperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2lunch->use_id;
            $othersperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id;
            $minus =  $othersperservinglunch0 + $othersperservinglunch2 + $othersperservinglunch3;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2lunch->use_id) && empty($getPr3lunch->use_id)){ 
           
            $othersperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0lunch->use_id;
            $othersperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2lunch->use_id;
            $othersperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id;
            $minus =  $othersperservinglunch0 + $othersperservinglunch2 + $othersperservinglunch3;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2lunch->use_id)){ 
               
            $othersperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0lunch->use_id;
            $othersperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2lunch->use_id;
            $othersperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id;
            $minus =  $othersperservinglunch0 + $othersperservinglunch2 + $othersperservinglunch3;
            $othersperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0lunch->use_id;
            $othersperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2lunch->use_id;
            $othersperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id;
            $minus =  $othersperservinglunch0 + $othersperservinglunch2;
            $othersperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2lunch->use_id)){
         if(empty($getPr3lunch->use_id)){     
                             
            $othersperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0lunch->use_id;
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;               
            $minus =  $othersperservinglunch0 + $othersperservinglunch1 ;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0lunch->use_id;
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;                     
            $minus =  $othersperservinglunch0 + $othersperservinglunch1;
            $othersperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3lunch->use_id)){
        
            $othersperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0lunch->use_id;
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;               
            $othersperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2lunch->use_id;               
            $minus =  $othersperservinglunch0 + $othersperservinglunch1 + $othersperservinglunch2;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0lunch = $this->productModel->getProductById($otherLunch[0]);
    $getPr1lunch = $this->productModel->getProductById($otherLunch[1]);
    $getPr2lunch = $this->productModel->getProductById($otherLunch[2]);
    $getPr3lunch = $this->productModel->getProductById($otherLunch[3]);
    $getPr4lunch = $this->productModel->getProductById($otherLunch[4]);
if(empty($getPr0lunch->use_id)){
        if(empty($getPr1lunch->use_id) && !empty($getPr2lunch->use_id) && !empty($getPr3lunch->use_id) && !empty($getPr4lunch->use_id)){
            
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;
            $othersperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2lunch->use_id;
            $othersperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id;
            $othersperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4lunch->use_id;
            $minus =  $othersperservinglunch1 + $othersperservinglunch2 + $othersperservinglunch3 +$othersperservinglunch4;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1lunch->use_id) && empty($getPr2lunch->use_id) && empty($getPr3lunch->use_id)&& empty($getPr4lunch->use_id)){         
          
            $othersperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1lunch->use_id) && empty($getPr2lunch->use_id) && empty($getPr3lunch->use_id)){                      
           
            $othersperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4lunch->use_id;
            $minus = $othersperservinglunch4;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1lunch->use_id) && empty($getPr2lunch->use_id)){  
            if(!empty($getPr3lunch->use_id)){
            $othersperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id;                       
            $othersperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4lunch->use_id;                
            $minus =  $othersperservinglunch3 + $othersperservinglunch4;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id;                       
            $othersperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4lunch->use_id;                
            $minus =  $othersperservinglunch3 + $othersperservinglunch4;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2lunch->use_id) && !empty($getPr3lunch->use_id)){     
            
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;                      
            $othersperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id;
            $minus =  $othersperservinglunch1 + $othersperservinglunch3;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2lunch->use_id) && empty($getPr3lunch->use_id)){   
            if(!empty($getPr1lunch->use_id)){ 
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;                      
            $othersperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id;
            $minus =  $othersperservinglunch1 + $othersperservinglunch3;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;                      
            $othersperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id;
            $minus =  $othersperservinglunch1 + $othersperservinglunch3;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3lunch->use_id)){   
            if(!empty($getPr2lunch->use_id)){
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;
            $othersperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2lunch->use_id;
            $minus =  $othersperservinglunch1 + $othersperservinglunch2;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;
            $othersperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2lunch->use_id;
            $minus =  $othersperservinglunch1 + $othersperservinglunch2;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4lunch->use_id)){   
             
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;
            $othersperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2lunch->use_id;
            $othersperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id;                       
            $minus =  $othersperservinglunch1 + $othersperservinglunch2 + $othersperservinglunch3;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;
            $othersperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2lunch->use_id;
            $othersperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id;
            $othersperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4lunch->use_id;
            $minus =  $othersperservinglunch1 + $othersperservinglunch2 + $othersperservinglunch3 + $othersperservinglunch4;
            $othersperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1lunch->use_id)){
          if(empty($getPr2lunch->use_id) && !empty($getPr3lunch->use_id) && !empty($getPr4lunch->use_id)){
            
            $othersperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0lunch->use_id;
            $othersperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id;
            $othersperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4lunch->use_id;
            $minus =  $othersperservinglunch0 + $othersperservinglunch3 + $othersperservinglunch4;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3lunch->use_id) ){   
            
            $othersperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0lunch->use_id;
            $minus =  $othersperservinglunch0;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4lunch->use_id) ){
            if(!empty($getPr3lunch->use_id)){
               
            $othersperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0lunch->use_id;
            $othersperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2lunch->use_id;
            $othersperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id;
            $minus =  $othersperservinglunch0 + $othersperservinglunch2 + $othersperservinglunch3;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0lunch->use_id;
            $othersperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2lunch->use_id;
            $othersperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id;
            $othersperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4lunch->use_id;
            $minus =  $othersperservinglunch0 + $othersperservinglunch2 + $othersperservinglunch3 + $othersperservinglunch4;
            $othersperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2lunch->use_id)){
         if(empty($getPr3lunch->use_id)){   
            
            $othersperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0lunch->use_id;
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;               
            $minus =  $othersperservinglunch0 + $othersperservinglunch1 ;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0lunch->use_id;
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;                     
            $othersperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id;                     
            $othersperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id;                     
            $minus =  $othersperservinglunch0 + $othersperservinglunch1 + $othersperservinglunch3 + $othersperservinglunch4;
            $othersperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3lunch->use_id)){
        if(empty($getPr4lunch->use_id)){
           
            $othersperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0lunch->use_id;
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;               
            $othersperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2lunch->use_id;               
            $minus =  $othersperservinglunch0 + $othersperservinglunch1 + $othersperservinglunch2;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0lunch->use_id;
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;               
            $othersperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2lunch->use_id;               
            $minus =  $othersperservinglunch0 + $othersperservinglunch1 + $othersperservinglunch2;
            $othersperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0lunch->use_id;
            $othersperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1lunch->use_id;               
            $othersperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2lunch->use_id; 
            $othersperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3lunch->use_id; 
            $minus =  $othersperservinglunch0 + $othersperservinglunch1 + $othersperservinglunch2 + $othersperservinglunch3;
            $othersperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperservinglunch = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}