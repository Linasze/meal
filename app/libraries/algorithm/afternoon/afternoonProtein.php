<?php
 switch (count($proteinAfternoon)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($proteinAfternoon)){
        $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon[0]);
        $proteinsperservingUseEmptyafternoon = $caloriesperserving /100 * 20 /4; 
        $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon[0]);
        $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon[1]);
    if(!empty($get_product1afternoon->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperservingafternoon = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1afternoon->use_id;
        $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1afternoon->use_id)){
        // Two products with out use_id
        $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon[0]);
    $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon[1]);
    $get_product2afternoon = $this->productModel->getProductById($proteinAfternoon[2]);
    if(!empty($get_product1afternoon->use_id)){
        if(empty($get_product2afternoon->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2afternoon->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseEmptyafternoon = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon[0]);
    $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon[1]);
    $get_product2afternoon = $this->productModel->getProductById($proteinAfternoon[2]);
    $get_product3afternoon = $this->productModel->getProductById($proteinAfternoon[3]);
    if(empty($get_product0afternoon->use_id)){
        if(empty($get_product1afternoon->use_id) && !empty($get_product2afternoon->use_id)){
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){ 
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id)){                       
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id)){                     
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){                        
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3afternoon->use_id)){                     
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1afternoon->use_id)){
          if(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id)){
                        
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){ 
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2afternoon->use_id)){ 
                       
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2afternoon->use_id)){
         if(empty($get_product3afternoon->use_id)){                         
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 ;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                     
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3afternoon->use_id)){
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon[0]);
    $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon[1]);
    $get_product2afternoon = $this->productModel->getProductById($proteinAfternoon[2]);
    $get_product3afternoon = $this->productModel->getProductById($proteinAfternoon[3]);
    $get_product4afternoon = $this->productModel->getProductById($proteinAfternoon[4]);
if(empty($get_product0afternoon->use_id)){
        if(empty($get_product1afternoon->use_id) && !empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id) && !empty($get_product4afternoon->use_id)){
            
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3 +$proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)&& empty($get_product4afternoon->use_id)){         
          
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){                      
           
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus = $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id)){  
            if(!empty($get_product3afternoon->use_id)){
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                       
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;                
            $minus =  $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                       
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;                
            $minus =  $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id)){     
            
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){   
            if(!empty($get_product1afternoon->use_id)){ 
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3afternoon->use_id)){   
            if(!empty($get_product2afternoon->use_id)){
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4afternoon->use_id)){   
             
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                       
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1afternoon->use_id)){
          if(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id) && !empty($get_product4afternoon->use_id)){
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3afternoon->use_id) ){   
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $minus =  $proteinsperservingafternoon0;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4afternoon->use_id) ){
            if(!empty($get_product3afternoon->use_id)){
               
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2afternoon->use_id)){
         if(empty($get_product3afternoon->use_id)){   
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 ;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                     
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                     
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                     
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3afternoon->use_id)){
        if(empty($get_product4afternoon->use_id)){
           
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id; 
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id; 
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}



switch (count($proteinAfternoon2day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($proteinAfternoon2day)){
        $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon2day[0]);
        $proteinsperservingUseEmptyafternoon = $caloriesperserving /100 * 20 /4; 
        $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon2day[0]);
        $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon2day[1]);
    if(!empty($get_product1afternoon->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperservingafternoon = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1afternoon->use_id;
        $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1afternoon->use_id)){
        // Two products with out use_id
        $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon2day[0]);
    $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon2day[1]);
    $get_product2afternoon = $this->productModel->getProductById($proteinAfternoon2day[2]);
    if(!empty($get_product1afternoon->use_id)){
        if(empty($get_product2afternoon->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2afternoon->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseEmptyafternoon = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon2day[0]);
    $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon2day[1]);
    $get_product2afternoon = $this->productModel->getProductById($proteinAfternoon2day[2]);
    $get_product3afternoon = $this->productModel->getProductById($proteinAfternoon2day[3]);
    if(empty($get_product0afternoon->use_id)){
        if(empty($get_product1afternoon->use_id) && !empty($get_product2afternoon->use_id)){
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){ 
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id)){                       
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id)){                     
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){                        
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3afternoon->use_id)){                     
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1afternoon->use_id)){
          if(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id)){
                        
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){ 
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2afternoon->use_id)){ 
                       
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2afternoon->use_id)){
         if(empty($get_product3afternoon->use_id)){                         
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 ;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                     
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3afternoon->use_id)){
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon2day[0]);
    $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon2day[1]);
    $get_product2afternoon = $this->productModel->getProductById($proteinAfternoon2day[2]);
    $get_product3afternoon = $this->productModel->getProductById($proteinAfternoon2day[3]);
    $get_product4afternoon = $this->productModel->getProductById($proteinAfternoon2day[4]);
if(empty($get_product0afternoon->use_id)){
        if(empty($get_product1afternoon->use_id) && !empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id) && !empty($get_product4afternoon->use_id)){
            
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3 +$proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)&& empty($get_product4afternoon->use_id)){         
          
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){                      
           
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus = $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id)){  
            if(!empty($get_product3afternoon->use_id)){
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                       
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;                
            $minus =  $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                       
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;                
            $minus =  $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id)){     
            
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){   
            if(!empty($get_product1afternoon->use_id)){ 
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3afternoon->use_id)){   
            if(!empty($get_product2afternoon->use_id)){
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4afternoon->use_id)){   
             
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                       
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1afternoon->use_id)){
          if(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id) && !empty($get_product4afternoon->use_id)){
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3afternoon->use_id) ){   
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $minus =  $proteinsperservingafternoon0;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4afternoon->use_id) ){
            if(!empty($get_product3afternoon->use_id)){
               
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2afternoon->use_id)){
         if(empty($get_product3afternoon->use_id)){   
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 ;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                     
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                     
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                     
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3afternoon->use_id)){
        if(empty($get_product4afternoon->use_id)){
           
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id; 
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id; 
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}



switch (count($proteinAfternoon3day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($proteinAfternoon3day)){
        $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon3day[0]);
        $proteinsperservingUseEmptyafternoon = $caloriesperserving /100 * 20 /4; 
        $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon3day[0]);
        $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon3day[1]);
    if(!empty($get_product1afternoon->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperservingafternoon = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1afternoon->use_id;
        $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1afternoon->use_id)){
        // Two products with out use_id
        $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon3day[0]);
    $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon3day[1]);
    $get_product2afternoon = $this->productModel->getProductById($proteinAfternoon3day[2]);
    if(!empty($get_product1afternoon->use_id)){
        if(empty($get_product2afternoon->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2afternoon->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseEmptyafternoon = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon3day[0]);
    $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon3day[1]);
    $get_product2afternoon = $this->productModel->getProductById($proteinAfternoon3day[2]);
    $get_product3afternoon = $this->productModel->getProductById($proteinAfternoon3day[3]);
    if(empty($get_product0afternoon->use_id)){
        if(empty($get_product1afternoon->use_id) && !empty($get_product2afternoon->use_id)){
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){ 
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id)){                       
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id)){                     
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){                        
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3afternoon->use_id)){                     
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1afternoon->use_id)){
          if(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id)){
                        
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){ 
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2afternoon->use_id)){ 
                       
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2afternoon->use_id)){
         if(empty($get_product3afternoon->use_id)){                         
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 ;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                     
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3afternoon->use_id)){
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon3day[0]);
    $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon3day[1]);
    $get_product2afternoon = $this->productModel->getProductById($proteinAfternoon3day[2]);
    $get_product3afternoon = $this->productModel->getProductById($proteinAfternoon3day[3]);
    $get_product4afternoon = $this->productModel->getProductById($proteinAfternoon3day[4]);
if(empty($get_product0afternoon->use_id)){
        if(empty($get_product1afternoon->use_id) && !empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id) && !empty($get_product4afternoon->use_id)){
            
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3 +$proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)&& empty($get_product4afternoon->use_id)){         
          
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){                      
           
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus = $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id)){  
            if(!empty($get_product3afternoon->use_id)){
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                       
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;                
            $minus =  $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                       
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;                
            $minus =  $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id)){     
            
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){   
            if(!empty($get_product1afternoon->use_id)){ 
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3afternoon->use_id)){   
            if(!empty($get_product2afternoon->use_id)){
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4afternoon->use_id)){   
             
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                       
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1afternoon->use_id)){
          if(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id) && !empty($get_product4afternoon->use_id)){
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3afternoon->use_id) ){   
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $minus =  $proteinsperservingafternoon0;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4afternoon->use_id) ){
            if(!empty($get_product3afternoon->use_id)){
               
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2afternoon->use_id)){
         if(empty($get_product3afternoon->use_id)){   
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 ;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                     
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                     
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                     
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3afternoon->use_id)){
        if(empty($get_product4afternoon->use_id)){
           
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id; 
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id; 
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}



switch (count($proteinAfternoon4day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($proteinAfternoon4day)){
        $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon4day[0]);
        $proteinsperservingUseEmptyafternoon = $caloriesperserving /100 * 20 /4; 
        $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon4day[0]);
        $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon4day[1]);
    if(!empty($get_product1afternoon->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperservingafternoon = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1afternoon->use_id;
        $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1afternoon->use_id)){
        // Two products with out use_id
        $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon4day[0]);
    $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon4day[1]);
    $get_product2afternoon = $this->productModel->getProductById($proteinAfternoon4day[2]);
    if(!empty($get_product1afternoon->use_id)){
        if(empty($get_product2afternoon->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2afternoon->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseEmptyafternoon = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon4day[0]);
    $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon4day[1]);
    $get_product2afternoon = $this->productModel->getProductById($proteinAfternoon4day[2]);
    $get_product3afternoon = $this->productModel->getProductById($proteinAfternoon4day[3]);
    if(empty($get_product0afternoon->use_id)){
        if(empty($get_product1afternoon->use_id) && !empty($get_product2afternoon->use_id)){
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){ 
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id)){                       
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id)){                     
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){                        
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3afternoon->use_id)){                     
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1afternoon->use_id)){
          if(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id)){
                        
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){ 
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2afternoon->use_id)){ 
                       
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2afternoon->use_id)){
         if(empty($get_product3afternoon->use_id)){                         
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 ;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                     
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3afternoon->use_id)){
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon4day[0]);
    $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon4day[1]);
    $get_product2afternoon = $this->productModel->getProductById($proteinAfternoon4day[2]);
    $get_product3afternoon = $this->productModel->getProductById($proteinAfternoon4day[3]);
    $get_product4afternoon = $this->productModel->getProductById($proteinAfternoon4day[4]);
if(empty($get_product0afternoon->use_id)){
        if(empty($get_product1afternoon->use_id) && !empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id) && !empty($get_product4afternoon->use_id)){
            
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3 +$proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)&& empty($get_product4afternoon->use_id)){         
          
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){                      
           
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus = $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id)){  
            if(!empty($get_product3afternoon->use_id)){
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                       
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;                
            $minus =  $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                       
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;                
            $minus =  $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id)){     
            
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){   
            if(!empty($get_product1afternoon->use_id)){ 
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3afternoon->use_id)){   
            if(!empty($get_product2afternoon->use_id)){
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4afternoon->use_id)){   
             
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                       
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1afternoon->use_id)){
          if(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id) && !empty($get_product4afternoon->use_id)){
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3afternoon->use_id) ){   
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $minus =  $proteinsperservingafternoon0;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4afternoon->use_id) ){
            if(!empty($get_product3afternoon->use_id)){
               
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2afternoon->use_id)){
         if(empty($get_product3afternoon->use_id)){   
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 ;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                     
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                     
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                     
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3afternoon->use_id)){
        if(empty($get_product4afternoon->use_id)){
           
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id; 
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id; 
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}



switch (count($proteinAfternoon5day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($proteinAfternoon5day)){
        $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon5day[0]);
        $proteinsperservingUseEmptyafternoon = $caloriesperserving /100 * 20 /4; 
        $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon5day[0]);
        $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon5day[1]);
    if(!empty($get_product1afternoon->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperservingafternoon = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1afternoon->use_id;
        $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1afternoon->use_id)){
        // Two products with out use_id
        $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon5day[0]);
    $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon5day[1]);
    $get_product2afternoon = $this->productModel->getProductById($proteinAfternoon5day[2]);
    if(!empty($get_product1afternoon->use_id)){
        if(empty($get_product2afternoon->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2afternoon->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseEmptyafternoon = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon5day[0]);
    $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon5day[1]);
    $get_product2afternoon = $this->productModel->getProductById($proteinAfternoon5day[2]);
    $get_product3afternoon = $this->productModel->getProductById($proteinAfternoon5day[3]);
    if(empty($get_product0afternoon->use_id)){
        if(empty($get_product1afternoon->use_id) && !empty($get_product2afternoon->use_id)){
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){ 
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id)){                       
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id)){                     
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){                        
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3afternoon->use_id)){                     
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1afternoon->use_id)){
          if(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id)){
                        
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){ 
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2afternoon->use_id)){ 
                       
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2afternoon->use_id)){
         if(empty($get_product3afternoon->use_id)){                         
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 ;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                     
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3afternoon->use_id)){
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon5day[0]);
    $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon5day[1]);
    $get_product2afternoon = $this->productModel->getProductById($proteinAfternoon5day[2]);
    $get_product3afternoon = $this->productModel->getProductById($proteinAfternoon5day[3]);
    $get_product4afternoon = $this->productModel->getProductById($proteinAfternoon5day[4]);
if(empty($get_product0afternoon->use_id)){
        if(empty($get_product1afternoon->use_id) && !empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id) && !empty($get_product4afternoon->use_id)){
            
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3 +$proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)&& empty($get_product4afternoon->use_id)){         
          
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){                      
           
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus = $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id)){  
            if(!empty($get_product3afternoon->use_id)){
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                       
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;                
            $minus =  $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                       
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;                
            $minus =  $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id)){     
            
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){   
            if(!empty($get_product1afternoon->use_id)){ 
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3afternoon->use_id)){   
            if(!empty($get_product2afternoon->use_id)){
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4afternoon->use_id)){   
             
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                       
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1afternoon->use_id)){
          if(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id) && !empty($get_product4afternoon->use_id)){
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3afternoon->use_id) ){   
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $minus =  $proteinsperservingafternoon0;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4afternoon->use_id) ){
            if(!empty($get_product3afternoon->use_id)){
               
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2afternoon->use_id)){
         if(empty($get_product3afternoon->use_id)){   
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 ;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                     
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                     
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                     
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3afternoon->use_id)){
        if(empty($get_product4afternoon->use_id)){
           
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id; 
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id; 
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}



switch (count($proteinAfternoon6day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($proteinAfternoon6day)){
        $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon6day[0]);
        $proteinsperservingUseEmptyafternoon = $caloriesperserving /100 * 20 /4; 
        $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon6day[0]);
        $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon6day[1]);
    if(!empty($get_product1afternoon->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperservingafternoon = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1afternoon->use_id;
        $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1afternoon->use_id)){
        // Two products with out use_id
        $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon6day[0]);
    $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon6day[1]);
    $get_product2afternoon = $this->productModel->getProductById($proteinAfternoon6day[2]);
    if(!empty($get_product1afternoon->use_id)){
        if(empty($get_product2afternoon->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2afternoon->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseEmptyafternoon = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon6day[0]);
    $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon6day[1]);
    $get_product2afternoon = $this->productModel->getProductById($proteinAfternoon6day[2]);
    $get_product3afternoon = $this->productModel->getProductById($proteinAfternoon6day[3]);
    if(empty($get_product0afternoon->use_id)){
        if(empty($get_product1afternoon->use_id) && !empty($get_product2afternoon->use_id)){
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){ 
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id)){                       
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id)){                     
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){                        
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3afternoon->use_id)){                     
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1afternoon->use_id)){
          if(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id)){
                        
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){ 
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2afternoon->use_id)){ 
                       
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2afternoon->use_id)){
         if(empty($get_product3afternoon->use_id)){                         
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 ;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                     
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3afternoon->use_id)){
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon6day[0]);
    $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon6day[1]);
    $get_product2afternoon = $this->productModel->getProductById($proteinAfternoon6day[2]);
    $get_product3afternoon = $this->productModel->getProductById($proteinAfternoon6day[3]);
    $get_product4afternoon = $this->productModel->getProductById($proteinAfternoon6day[4]);
if(empty($get_product0afternoon->use_id)){
        if(empty($get_product1afternoon->use_id) && !empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id) && !empty($get_product4afternoon->use_id)){
            
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3 +$proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)&& empty($get_product4afternoon->use_id)){         
          
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){                      
           
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus = $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id)){  
            if(!empty($get_product3afternoon->use_id)){
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                       
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;                
            $minus =  $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                       
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;                
            $minus =  $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id)){     
            
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){   
            if(!empty($get_product1afternoon->use_id)){ 
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3afternoon->use_id)){   
            if(!empty($get_product2afternoon->use_id)){
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4afternoon->use_id)){   
             
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                       
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1afternoon->use_id)){
          if(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id) && !empty($get_product4afternoon->use_id)){
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3afternoon->use_id) ){   
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $minus =  $proteinsperservingafternoon0;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4afternoon->use_id) ){
            if(!empty($get_product3afternoon->use_id)){
               
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2afternoon->use_id)){
         if(empty($get_product3afternoon->use_id)){   
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 ;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                     
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                     
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                     
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3afternoon->use_id)){
        if(empty($get_product4afternoon->use_id)){
           
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id; 
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id; 
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}


switch (count($proteinAfternoon7day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($proteinAfternoon7day)){
        $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon7day[0]);
        $proteinsperservingUseEmptyafternoon = $caloriesperserving /100 * 20 /4; 
        $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon7day[0]);
        $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon7day[1]);
    if(!empty($get_product1afternoon->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperservingafternoon = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1afternoon->use_id;
        $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1afternoon->use_id)){
        // Two products with out use_id
        $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon7day[0]);
    $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon7day[1]);
    $get_product2afternoon = $this->productModel->getProductById($proteinAfternoon7day[2]);
    if(!empty($get_product1afternoon->use_id)){
        if(empty($get_product2afternoon->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2afternoon->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseEmptyafternoon = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon7day[0]);
    $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon7day[1]);
    $get_product2afternoon = $this->productModel->getProductById($proteinAfternoon7day[2]);
    $get_product3afternoon = $this->productModel->getProductById($proteinAfternoon7day[3]);
    if(empty($get_product0afternoon->use_id)){
        if(empty($get_product1afternoon->use_id) && !empty($get_product2afternoon->use_id)){
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){ 
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id)){                       
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id)){                     
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){                        
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3afternoon->use_id)){                     
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1afternoon->use_id)){
          if(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id)){
                        
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){ 
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2afternoon->use_id)){ 
                       
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2afternoon->use_id)){
         if(empty($get_product3afternoon->use_id)){                         
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 ;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                     
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3afternoon->use_id)){
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0afternoon = $this->productModel->getProductById($proteinAfternoon7day[0]);
    $get_product1afternoon = $this->productModel->getProductById($proteinAfternoon7day[1]);
    $get_product2afternoon = $this->productModel->getProductById($proteinAfternoon7day[2]);
    $get_product3afternoon = $this->productModel->getProductById($proteinAfternoon7day[3]);
    $get_product4afternoon = $this->productModel->getProductById($proteinAfternoon7day[4]);
if(empty($get_product0afternoon->use_id)){
        if(empty($get_product1afternoon->use_id) && !empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id) && !empty($get_product4afternoon->use_id)){
            
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3 +$proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)&& empty($get_product4afternoon->use_id)){         
          
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){                      
           
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus = $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1afternoon->use_id) && empty($get_product2afternoon->use_id)){  
            if(!empty($get_product3afternoon->use_id)){
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                       
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;                
            $minus =  $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                       
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;                
            $minus =  $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id)){     
            
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2afternoon->use_id) && empty($get_product3afternoon->use_id)){   
            if(!empty($get_product1afternoon->use_id)){ 
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                      
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3afternoon->use_id)){   
            if(!empty($get_product2afternoon->use_id)){
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4afternoon->use_id)){   
             
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                       
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1afternoon->use_id)){
          if(empty($get_product2afternoon->use_id) && !empty($get_product3afternoon->use_id) && !empty($get_product4afternoon->use_id)){
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3afternoon->use_id) ){   
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $minus =  $proteinsperservingafternoon0;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4afternoon->use_id) ){
            if(!empty($get_product3afternoon->use_id)){
               
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4afternoon->use_id;
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2afternoon->use_id)){
         if(empty($get_product3afternoon->use_id)){   
            
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 ;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;                     
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                     
            $proteinsperservingafternoon4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id;                     
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon3 + $proteinsperservingafternoon4;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3afternoon->use_id)){
        if(empty($get_product4afternoon->use_id)){
           
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id;               
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2;
            $proteinsperservingUseEmptyafternoon =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservingafternoon0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0afternoon->use_id;
            $proteinsperservingafternoon1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1afternoon->use_id;               
            $proteinsperservingafternoon2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2afternoon->use_id; 
            $proteinsperservingafternoon3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3afternoon->use_id; 
            $minus =  $proteinsperservingafternoon0 + $proteinsperservingafternoon1 + $proteinsperservingafternoon2 + $proteinsperservingafternoon3;
            $proteinsperservingUseEmptyafternoon =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingafternoon = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}