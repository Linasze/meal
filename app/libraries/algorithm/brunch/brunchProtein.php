<?php
 switch (count($proteinBrunch)) {
    case 1:
        // One Product with out use_id or with use_id
        $get_product0brunch = $this->productModel->getProductById($proteinBrunch[0]);
        $proteinsperservingUseEmptybrunch = $caloriesperserving /100 * 20 /4; 
        $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
    break;

    case 2:
        $get_product0brunch = $this->productModel->getProductById($proteinBrunch[0]);
        $get_product1brunch = $this->productModel->getProductById($proteinBrunch[1]);
    if(!empty($get_product1brunch->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperservingbrunch = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1brunch->use_id;
        $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1brunch->use_id)){
        // Two products with out use_id
        $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0brunch = $this->productModel->getProductById($proteinBrunch[0]);
    $get_product1brunch = $this->productModel->getProductById($proteinBrunch[1]);
    $get_product2brunch = $this->productModel->getProductById($proteinBrunch[2]);
    if(!empty($get_product1brunch->use_id)){
        if(empty($get_product2brunch->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2brunch->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseEmptybrunch = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0brunch = $this->productModel->getProductById($proteinBrunch[0]);
    $get_product1brunch = $this->productModel->getProductById($proteinBrunch[1]);
    $get_product2brunch = $this->productModel->getProductById($proteinBrunch[2]);
    $get_product3brunch = $this->productModel->getProductById($proteinBrunch[3]);
    if(empty($get_product0brunch->use_id)){
        if(empty($get_product1brunch->use_id) && !empty($get_product2brunch->use_id)){
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){ 
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id)){                       
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id)){                     
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){                        
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3brunch->use_id)){                     
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1brunch->use_id)){
          if(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id)){
                        
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){ 
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2brunch->use_id)){ 
                       
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2brunch->use_id)){
         if(empty($get_product3brunch->use_id)){                         
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 ;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                     
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3brunch->use_id)){
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0brunch = $this->productModel->getProductById($proteinBrunch[0]);
    $get_product1brunch = $this->productModel->getProductById($proteinBrunch[1]);
    $get_product2brunch = $this->productModel->getProductById($proteinBrunch[2]);
    $get_product3brunch = $this->productModel->getProductById($proteinBrunch[3]);
    $get_product4brunch = $this->productModel->getProductById($proteinBrunch[4]);
if(empty($get_product0brunch->use_id)){
        if(empty($get_product1brunch->use_id) && !empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id) && !empty($get_product4brunch->use_id)){
            
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3 +$proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)&& empty($get_product4brunch->use_id)){         
          
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){                      
           
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus = $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id)){  
            if(!empty($get_product3brunch->use_id)){
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                       
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;                
            $minus =  $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                       
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;                
            $minus =  $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id)){     
            
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){   
            if(!empty($get_product1brunch->use_id)){ 
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3brunch->use_id)){   
            if(!empty($get_product2brunch->use_id)){
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4brunch->use_id)){   
             
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                       
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1brunch->use_id)){
          if(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id) && !empty($get_product4brunch->use_id)){
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3brunch->use_id) ){   
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $minus =  $proteinsperservingbrunch0;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4brunch->use_id) ){
            if(!empty($get_product3brunch->use_id)){
               
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2brunch->use_id)){
         if(empty($get_product3brunch->use_id)){   
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 ;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                     
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                     
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                     
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3brunch->use_id)){
        if(empty($get_product4brunch->use_id)){
           
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id; 
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id; 
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}



switch (count($proteinBrunch2day)) {
    case 1:
        // One Product with out use_id or with use_id
        $get_product0brunch = $this->productModel->getProductById($proteinBrunch2day[0]);
        $proteinsperservingUseEmptybrunch = $caloriesperserving /100 * 20 /4; 
        $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
    break;

    case 2:
        $get_product0brunch = $this->productModel->getProductById($proteinBrunch2day[0]);
        $get_product1brunch = $this->productModel->getProductById($proteinBrunch2day[1]);
    if(!empty($get_product1brunch->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperservingbrunch = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1brunch->use_id;
        $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1brunch->use_id)){
        // Two products with out use_id
        $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0brunch = $this->productModel->getProductById($proteinBrunch2day[0]);
    $get_product1brunch = $this->productModel->getProductById($proteinBrunch2day[1]);
    $get_product2brunch = $this->productModel->getProductById($proteinBrunch2day[2]);
    if(!empty($get_product1brunch->use_id)){
        if(empty($get_product2brunch->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2brunch->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseEmptybrunch = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0brunch = $this->productModel->getProductById($proteinBrunch2day[0]);
    $get_product1brunch = $this->productModel->getProductById($proteinBrunch2day[1]);
    $get_product2brunch = $this->productModel->getProductById($proteinBrunch2day[2]);
    $get_product3brunch = $this->productModel->getProductById($proteinBrunch2day[3]);
    if(empty($get_product0brunch->use_id)){
        if(empty($get_product1brunch->use_id) && !empty($get_product2brunch->use_id)){
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){ 
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id)){                       
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id)){                     
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){                        
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3brunch->use_id)){                     
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1brunch->use_id)){
          if(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id)){
                        
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){ 
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2brunch->use_id)){ 
                       
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2brunch->use_id)){
         if(empty($get_product3brunch->use_id)){                         
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 ;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                     
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3brunch->use_id)){
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0brunch = $this->productModel->getProductById($proteinBrunch2day[0]);
    $get_product1brunch = $this->productModel->getProductById($proteinBrunch2day[1]);
    $get_product2brunch = $this->productModel->getProductById($proteinBrunch2day[2]);
    $get_product3brunch = $this->productModel->getProductById($proteinBrunch2day[3]);
    $get_product4brunch = $this->productModel->getProductById($proteinBrunch2day[4]);
if(empty($get_product0brunch->use_id)){
        if(empty($get_product1brunch->use_id) && !empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id) && !empty($get_product4brunch->use_id)){
            
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3 +$proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)&& empty($get_product4brunch->use_id)){         
          
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){                      
           
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus = $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id)){  
            if(!empty($get_product3brunch->use_id)){
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                       
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;                
            $minus =  $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                       
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;                
            $minus =  $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id)){     
            
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){   
            if(!empty($get_product1brunch->use_id)){ 
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3brunch->use_id)){   
            if(!empty($get_product2brunch->use_id)){
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4brunch->use_id)){   
             
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                       
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1brunch->use_id)){
          if(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id) && !empty($get_product4brunch->use_id)){
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3brunch->use_id) ){   
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $minus =  $proteinsperservingbrunch0;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4brunch->use_id) ){
            if(!empty($get_product3brunch->use_id)){
               
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2brunch->use_id)){
         if(empty($get_product3brunch->use_id)){   
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 ;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                     
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                     
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                     
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3brunch->use_id)){
        if(empty($get_product4brunch->use_id)){
           
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id; 
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id; 
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}



switch (count($proteinBrunch3day)) {
    case 1:
        // One Product with out use_id or with use_id
        $get_product0brunch = $this->productModel->getProductById($proteinBrunch3day[0]);
        $proteinsperservingUseEmptybrunch = $caloriesperserving /100 * 20 /4; 
        $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
    break;

    case 2:
        $get_product0brunch = $this->productModel->getProductById($proteinBrunch3day[0]);
        $get_product1brunch = $this->productModel->getProductById($proteinBrunch3day[1]);
    if(!empty($get_product1brunch->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperservingbrunch = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1brunch->use_id;
        $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1brunch->use_id)){
        // Two products with out use_id
        $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0brunch = $this->productModel->getProductById($proteinBrunch3day[0]);
    $get_product1brunch = $this->productModel->getProductById($proteinBrunch3day[1]);
    $get_product2brunch = $this->productModel->getProductById($proteinBrunch3day[2]);
    if(!empty($get_product1brunch->use_id)){
        if(empty($get_product2brunch->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2brunch->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseEmptybrunch = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0brunch = $this->productModel->getProductById($proteinBrunch3day[0]);
    $get_product1brunch = $this->productModel->getProductById($proteinBrunch3day[1]);
    $get_product2brunch = $this->productModel->getProductById($proteinBrunch3day[2]);
    $get_product3brunch = $this->productModel->getProductById($proteinBrunch3day[3]);
    if(empty($get_product0brunch->use_id)){
        if(empty($get_product1brunch->use_id) && !empty($get_product2brunch->use_id)){
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){ 
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id)){                       
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id)){                     
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){                        
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3brunch->use_id)){                     
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1brunch->use_id)){
          if(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id)){
                        
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){ 
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2brunch->use_id)){ 
                       
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2brunch->use_id)){
         if(empty($get_product3brunch->use_id)){                         
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 ;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                     
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3brunch->use_id)){
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0brunch = $this->productModel->getProductById($proteinBrunch3day[0]);
    $get_product1brunch = $this->productModel->getProductById($proteinBrunch3day[1]);
    $get_product2brunch = $this->productModel->getProductById($proteinBrunch3day[2]);
    $get_product3brunch = $this->productModel->getProductById($proteinBrunch3day[3]);
    $get_product4brunch = $this->productModel->getProductById($proteinBrunch3day[4]);
if(empty($get_product0brunch->use_id)){
        if(empty($get_product1brunch->use_id) && !empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id) && !empty($get_product4brunch->use_id)){
            
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3 +$proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)&& empty($get_product4brunch->use_id)){         
          
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){                      
           
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus = $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id)){  
            if(!empty($get_product3brunch->use_id)){
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                       
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;                
            $minus =  $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                       
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;                
            $minus =  $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id)){     
            
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){   
            if(!empty($get_product1brunch->use_id)){ 
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3brunch->use_id)){   
            if(!empty($get_product2brunch->use_id)){
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4brunch->use_id)){   
             
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                       
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1brunch->use_id)){
          if(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id) && !empty($get_product4brunch->use_id)){
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3brunch->use_id) ){   
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $minus =  $proteinsperservingbrunch0;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4brunch->use_id) ){
            if(!empty($get_product3brunch->use_id)){
               
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2brunch->use_id)){
         if(empty($get_product3brunch->use_id)){   
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 ;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                     
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                     
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                     
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3brunch->use_id)){
        if(empty($get_product4brunch->use_id)){
           
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id; 
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id; 
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}


switch (count($proteinBrunch4day)) {
    case 1:
        // One Product with out use_id or with use_id
        $get_product0brunch = $this->productModel->getProductById($proteinBrunch4day[0]);
        $proteinsperservingUseEmptybrunch = $caloriesperserving /100 * 20 /4; 
        $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
    break;

    case 2:
        $get_product0brunch = $this->productModel->getProductById($proteinBrunch4day[0]);
        $get_product1brunch = $this->productModel->getProductById($proteinBrunch4day[1]);
    if(!empty($get_product1brunch->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperservingbrunch = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1brunch->use_id;
        $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1brunch->use_id)){
        // Two products with out use_id
        $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0brunch = $this->productModel->getProductById($proteinBrunch4day[0]);
    $get_product1brunch = $this->productModel->getProductById($proteinBrunch4day[1]);
    $get_product2brunch = $this->productModel->getProductById($proteinBrunch4day[2]);
    if(!empty($get_product1brunch->use_id)){
        if(empty($get_product2brunch->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2brunch->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseEmptybrunch = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0brunch = $this->productModel->getProductById($proteinBrunch4day[0]);
    $get_product1brunch = $this->productModel->getProductById($proteinBrunch4day[1]);
    $get_product2brunch = $this->productModel->getProductById($proteinBrunch4day[2]);
    $get_product3brunch = $this->productModel->getProductById($proteinBrunch4day[3]);
    if(empty($get_product0brunch->use_id)){
        if(empty($get_product1brunch->use_id) && !empty($get_product2brunch->use_id)){
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){ 
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id)){                       
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id)){                     
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){                        
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3brunch->use_id)){                     
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1brunch->use_id)){
          if(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id)){
                        
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){ 
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2brunch->use_id)){ 
                       
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2brunch->use_id)){
         if(empty($get_product3brunch->use_id)){                         
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 ;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                     
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3brunch->use_id)){
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0brunch = $this->productModel->getProductById($proteinBrunch4day[0]);
    $get_product1brunch = $this->productModel->getProductById($proteinBrunch4day[1]);
    $get_product2brunch = $this->productModel->getProductById($proteinBrunch4day[2]);
    $get_product3brunch = $this->productModel->getProductById($proteinBrunch4day[3]);
    $get_product4brunch = $this->productModel->getProductById($proteinBrunch4day[4]);
if(empty($get_product0brunch->use_id)){
        if(empty($get_product1brunch->use_id) && !empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id) && !empty($get_product4brunch->use_id)){
            
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3 +$proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)&& empty($get_product4brunch->use_id)){         
          
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){                      
           
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus = $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id)){  
            if(!empty($get_product3brunch->use_id)){
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                       
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;                
            $minus =  $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                       
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;                
            $minus =  $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id)){     
            
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){   
            if(!empty($get_product1brunch->use_id)){ 
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3brunch->use_id)){   
            if(!empty($get_product2brunch->use_id)){
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4brunch->use_id)){   
             
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                       
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1brunch->use_id)){
          if(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id) && !empty($get_product4brunch->use_id)){
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3brunch->use_id) ){   
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $minus =  $proteinsperservingbrunch0;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4brunch->use_id) ){
            if(!empty($get_product3brunch->use_id)){
               
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2brunch->use_id)){
         if(empty($get_product3brunch->use_id)){   
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 ;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                     
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                     
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                     
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3brunch->use_id)){
        if(empty($get_product4brunch->use_id)){
           
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id; 
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id; 
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}



switch (count($proteinBrunch5day)) {
    case 1:
        // One Product with out use_id or with use_id
        $get_product0brunch = $this->productModel->getProductById($proteinBrunch5day[0]);
        $proteinsperservingUseEmptybrunch = $caloriesperserving /100 * 20 /4; 
        $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
    break;

    case 2:
        $get_product0brunch = $this->productModel->getProductById($proteinBrunch5day[0]);
        $get_product1brunch = $this->productModel->getProductById($proteinBrunch5day[1]);
    if(!empty($get_product1brunch->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperservingbrunch = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1brunch->use_id;
        $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1brunch->use_id)){
        // Two products with out use_id
        $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0brunch = $this->productModel->getProductById($proteinBrunch5day[0]);
    $get_product1brunch = $this->productModel->getProductById($proteinBrunch5day[1]);
    $get_product2brunch = $this->productModel->getProductById($proteinBrunch5day[2]);
    if(!empty($get_product1brunch->use_id)){
        if(empty($get_product2brunch->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2brunch->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseEmptybrunch = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0brunch = $this->productModel->getProductById($proteinBrunch5day[0]);
    $get_product1brunch = $this->productModel->getProductById($proteinBrunch5day[1]);
    $get_product2brunch = $this->productModel->getProductById($proteinBrunch5day[2]);
    $get_product3brunch = $this->productModel->getProductById($proteinBrunch5day[3]);
    if(empty($get_product0brunch->use_id)){
        if(empty($get_product1brunch->use_id) && !empty($get_product2brunch->use_id)){
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){ 
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id)){                       
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id)){                     
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){                        
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3brunch->use_id)){                     
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1brunch->use_id)){
          if(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id)){
                        
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){ 
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2brunch->use_id)){ 
                       
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2brunch->use_id)){
         if(empty($get_product3brunch->use_id)){                         
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 ;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                     
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3brunch->use_id)){
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0brunch = $this->productModel->getProductById($proteinBrunch5day[0]);
    $get_product1brunch = $this->productModel->getProductById($proteinBrunch5day[1]);
    $get_product2brunch = $this->productModel->getProductById($proteinBrunch5day[2]);
    $get_product3brunch = $this->productModel->getProductById($proteinBrunch5day[3]);
    $get_product4brunch = $this->productModel->getProductById($proteinBrunch5day[4]);
if(empty($get_product0brunch->use_id)){
        if(empty($get_product1brunch->use_id) && !empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id) && !empty($get_product4brunch->use_id)){
            
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3 +$proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)&& empty($get_product4brunch->use_id)){         
          
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){                      
           
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus = $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id)){  
            if(!empty($get_product3brunch->use_id)){
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                       
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;                
            $minus =  $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                       
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;                
            $minus =  $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id)){     
            
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){   
            if(!empty($get_product1brunch->use_id)){ 
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3brunch->use_id)){   
            if(!empty($get_product2brunch->use_id)){
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4brunch->use_id)){   
             
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                       
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1brunch->use_id)){
          if(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id) && !empty($get_product4brunch->use_id)){
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3brunch->use_id) ){   
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $minus =  $proteinsperservingbrunch0;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4brunch->use_id) ){
            if(!empty($get_product3brunch->use_id)){
               
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2brunch->use_id)){
         if(empty($get_product3brunch->use_id)){   
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 ;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                     
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                     
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                     
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3brunch->use_id)){
        if(empty($get_product4brunch->use_id)){
           
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id; 
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id; 
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}



switch (count($proteinBrunch6day)) {
    case 1:
        // One Product with out use_id or with use_id
        $get_product0brunch = $this->productModel->getProductById($proteinBrunch6day[0]);
        $proteinsperservingUseEmptybrunch = $caloriesperserving /100 * 20 /4; 
        $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
    break;

    case 2:
        $get_product0brunch = $this->productModel->getProductById($proteinBrunch6day[0]);
        $get_product1brunch = $this->productModel->getProductById($proteinBrunch6day[1]);
    if(!empty($get_product1brunch->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperservingbrunch = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1brunch->use_id;
        $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1brunch->use_id)){
        // Two products with out use_id
        $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0brunch = $this->productModel->getProductById($proteinBrunch6day[0]);
    $get_product1brunch = $this->productModel->getProductById($proteinBrunch6day[1]);
    $get_product2brunch = $this->productModel->getProductById($proteinBrunch6day[2]);
    if(!empty($get_product1brunch->use_id)){
        if(empty($get_product2brunch->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2brunch->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseEmptybrunch = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0brunch = $this->productModel->getProductById($proteinBrunch6day[0]);
    $get_product1brunch = $this->productModel->getProductById($proteinBrunch6day[1]);
    $get_product2brunch = $this->productModel->getProductById($proteinBrunch6day[2]);
    $get_product3brunch = $this->productModel->getProductById($proteinBrunch6day[3]);
    if(empty($get_product0brunch->use_id)){
        if(empty($get_product1brunch->use_id) && !empty($get_product2brunch->use_id)){
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){ 
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id)){                       
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id)){                     
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){                        
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3brunch->use_id)){                     
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1brunch->use_id)){
          if(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id)){
                        
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){ 
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2brunch->use_id)){ 
                       
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2brunch->use_id)){
         if(empty($get_product3brunch->use_id)){                         
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 ;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                     
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3brunch->use_id)){
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0brunch = $this->productModel->getProductById($proteinBrunch6day[0]);
    $get_product1brunch = $this->productModel->getProductById($proteinBrunch6day[1]);
    $get_product2brunch = $this->productModel->getProductById($proteinBrunch6day[2]);
    $get_product3brunch = $this->productModel->getProductById($proteinBrunch6day[3]);
    $get_product4brunch = $this->productModel->getProductById($proteinBrunch6day[4]);
if(empty($get_product0brunch->use_id)){
        if(empty($get_product1brunch->use_id) && !empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id) && !empty($get_product4brunch->use_id)){
            
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3 +$proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)&& empty($get_product4brunch->use_id)){         
          
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){                      
           
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus = $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id)){  
            if(!empty($get_product3brunch->use_id)){
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                       
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;                
            $minus =  $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                       
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;                
            $minus =  $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id)){     
            
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){   
            if(!empty($get_product1brunch->use_id)){ 
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3brunch->use_id)){   
            if(!empty($get_product2brunch->use_id)){
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4brunch->use_id)){   
             
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                       
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1brunch->use_id)){
          if(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id) && !empty($get_product4brunch->use_id)){
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3brunch->use_id) ){   
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $minus =  $proteinsperservingbrunch0;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4brunch->use_id) ){
            if(!empty($get_product3brunch->use_id)){
               
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2brunch->use_id)){
         if(empty($get_product3brunch->use_id)){   
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 ;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                     
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                     
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                     
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3brunch->use_id)){
        if(empty($get_product4brunch->use_id)){
           
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id; 
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id; 
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}


switch (count($proteinBrunch7day)) {
    case 1:
        // One Product with out use_id or with use_id
        $get_product0brunch = $this->productModel->getProductById($proteinBrunch7day[0]);
        $proteinsperservingUseEmptybrunch = $caloriesperserving /100 * 20 /4; 
        $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
    break;

    case 2:
        $get_product0brunch = $this->productModel->getProductById($proteinBrunch7day[0]);
        $get_product1brunch = $this->productModel->getProductById($proteinBrunch7day[1]);
    if(!empty($get_product1brunch->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperservingbrunch = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1brunch->use_id;
        $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1brunch->use_id)){
        // Two products with out use_id
        $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0brunch = $this->productModel->getProductById($proteinBrunch7day[0]);
    $get_product1brunch = $this->productModel->getProductById($proteinBrunch7day[1]);
    $get_product2brunch = $this->productModel->getProductById($proteinBrunch7day[2]);
    if(!empty($get_product1brunch->use_id)){
        if(empty($get_product2brunch->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2brunch->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseEmptybrunch = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0brunch = $this->productModel->getProductById($proteinBrunch7day[0]);
    $get_product1brunch = $this->productModel->getProductById($proteinBrunch7day[1]);
    $get_product2brunch = $this->productModel->getProductById($proteinBrunch7day[2]);
    $get_product3brunch = $this->productModel->getProductById($proteinBrunch7day[3]);
    if(empty($get_product0brunch->use_id)){
        if(empty($get_product1brunch->use_id) && !empty($get_product2brunch->use_id)){
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){ 
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id)){                       
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id)){                     
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){                        
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3brunch->use_id)){                     
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1brunch->use_id)){
          if(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id)){
                        
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){ 
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2brunch->use_id)){ 
                       
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2brunch->use_id)){
         if(empty($get_product3brunch->use_id)){                         
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 ;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                     
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3brunch->use_id)){
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0brunch = $this->productModel->getProductById($proteinBrunch7day[0]);
    $get_product1brunch = $this->productModel->getProductById($proteinBrunch7day[1]);
    $get_product2brunch = $this->productModel->getProductById($proteinBrunch7day[2]);
    $get_product3brunch = $this->productModel->getProductById($proteinBrunch7day[3]);
    $get_product4brunch = $this->productModel->getProductById($proteinBrunch7day[4]);
if(empty($get_product0brunch->use_id)){
        if(empty($get_product1brunch->use_id) && !empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id) && !empty($get_product4brunch->use_id)){
            
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3 +$proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)&& empty($get_product4brunch->use_id)){         
          
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){                      
           
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus = $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1brunch->use_id) && empty($get_product2brunch->use_id)){  
            if(!empty($get_product3brunch->use_id)){
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                       
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;                
            $minus =  $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                       
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;                
            $minus =  $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id)){     
            
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2brunch->use_id) && empty($get_product3brunch->use_id)){   
            if(!empty($get_product1brunch->use_id)){ 
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                      
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3brunch->use_id)){   
            if(!empty($get_product2brunch->use_id)){
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4brunch->use_id)){   
             
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                       
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1brunch->use_id)){
          if(empty($get_product2brunch->use_id) && !empty($get_product3brunch->use_id) && !empty($get_product4brunch->use_id)){
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3brunch->use_id) ){   
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $minus =  $proteinsperservingbrunch0;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4brunch->use_id) ){
            if(!empty($get_product3brunch->use_id)){
               
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4brunch->use_id;
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2brunch->use_id)){
         if(empty($get_product3brunch->use_id)){   
            
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 ;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;                     
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                     
            $proteinsperservingbrunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id;                     
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch3 + $proteinsperservingbrunch4;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3brunch->use_id)){
        if(empty($get_product4brunch->use_id)){
           
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id;               
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2;
            $proteinsperservingUseEmptybrunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservingbrunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0brunch->use_id;
            $proteinsperservingbrunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1brunch->use_id;               
            $proteinsperservingbrunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2brunch->use_id; 
            $proteinsperservingbrunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3brunch->use_id; 
            $minus =  $proteinsperservingbrunch0 + $proteinsperservingbrunch1 + $proteinsperservingbrunch2 + $proteinsperservingbrunch3;
            $proteinsperservingUseEmptybrunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingbrunch = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}