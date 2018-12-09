<?php
 switch (count($proteinLunch)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($proteinLunch)){
        $get_product0lunch = $this->productModel->getProductById($proteinLunch[0]);
        $proteinsperservingUseEmptylunch = $caloriesperserving /100 * 20 /4; 
        $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $get_product0lunch = $this->productModel->getProductById($proteinLunch[0]);
        $get_product1lunch = $this->productModel->getProductById($proteinLunch[1]);
    if(!empty($get_product1lunch->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperservinglunch = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1lunch->use_id;
        $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1lunch->use_id)){
        // Two products with out use_id
        $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0lunch = $this->productModel->getProductById($proteinLunch[0]);
    $get_product1lunch = $this->productModel->getProductById($proteinLunch[1]);
    $get_product2lunch = $this->productModel->getProductById($proteinLunch[2]);
    if(!empty($get_product1lunch->use_id)){
        if(empty($get_product2lunch->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2lunch->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseEmptylunch = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0lunch = $this->productModel->getProductById($proteinLunch[0]);
    $get_product1lunch = $this->productModel->getProductById($proteinLunch[1]);
    $get_product2lunch = $this->productModel->getProductById($proteinLunch[2]);
    $get_product3lunch = $this->productModel->getProductById($proteinLunch[3]);
    if(empty($get_product0lunch->use_id)){
        if(empty($get_product1lunch->use_id) && !empty($get_product2lunch->use_id)){
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){ 
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id)){                       
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id)){                     
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){                        
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3lunch->use_id)){                     
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1lunch->use_id)){
          if(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id)){
                        
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){ 
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2lunch->use_id)){ 
                       
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2lunch->use_id)){
         if(empty($get_product3lunch->use_id)){                         
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 ;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                     
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3lunch->use_id)){
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0lunch = $this->productModel->getProductById($proteinLunch[0]);
    $get_product1lunch = $this->productModel->getProductById($proteinLunch[1]);
    $get_product2lunch = $this->productModel->getProductById($proteinLunch[2]);
    $get_product3lunch = $this->productModel->getProductById($proteinLunch[3]);
    $get_product4lunch = $this->productModel->getProductById($proteinLunch[4]);
if(empty($get_product0lunch->use_id)){
        if(empty($get_product1lunch->use_id) && !empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id) && !empty($get_product4lunch->use_id)){
            
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3 +$proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)&& empty($get_product4lunch->use_id)){         
          
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){                      
           
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus = $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id)){  
            if(!empty($get_product3lunch->use_id)){
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                       
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;                
            $minus =  $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                       
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;                
            $minus =  $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id)){     
            
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){   
            if(!empty($get_product1lunch->use_id)){ 
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3lunch->use_id)){   
            if(!empty($get_product2lunch->use_id)){
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4lunch->use_id)){   
             
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                       
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1lunch->use_id)){
          if(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id) && !empty($get_product4lunch->use_id)){
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3lunch->use_id) ){   
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $minus =  $proteinsperservinglunch0;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4lunch->use_id) ){
            if(!empty($get_product3lunch->use_id)){
               
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2lunch->use_id)){
         if(empty($get_product3lunch->use_id)){   
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 ;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                     
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                     
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                     
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3lunch->use_id)){
        if(empty($get_product4lunch->use_id)){
           
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id; 
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id; 
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}



switch (count($proteinLunch2day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($proteinLunch2day)){
        $get_product0lunch = $this->productModel->getProductById($proteinLunch2day[0]);
        $proteinsperservingUseEmptylunch = $caloriesperserving /100 * 20 /4; 
        $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $get_product0lunch = $this->productModel->getProductById($proteinLunch2day[0]);
        $get_product1lunch = $this->productModel->getProductById($proteinLunch2day[1]);
    if(!empty($get_product1lunch->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperservinglunch = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1lunch->use_id;
        $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1lunch->use_id)){
        // Two products with out use_id
        $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0lunch = $this->productModel->getProductById($proteinLunch2day[0]);
    $get_product1lunch = $this->productModel->getProductById($proteinLunch2day[1]);
    $get_product2lunch = $this->productModel->getProductById($proteinLunch2day[2]);
    if(!empty($get_product1lunch->use_id)){
        if(empty($get_product2lunch->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2lunch->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseEmptylunch = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0lunch = $this->productModel->getProductById($proteinLunch2day[0]);
    $get_product1lunch = $this->productModel->getProductById($proteinLunch2day[1]);
    $get_product2lunch = $this->productModel->getProductById($proteinLunch2day[2]);
    $get_product3lunch = $this->productModel->getProductById($proteinLunch2day[3]);
    if(empty($get_product0lunch->use_id)){
        if(empty($get_product1lunch->use_id) && !empty($get_product2lunch->use_id)){
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){ 
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id)){                       
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id)){                     
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){                        
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3lunch->use_id)){                     
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1lunch->use_id)){
          if(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id)){
                        
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){ 
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2lunch->use_id)){ 
                       
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2lunch->use_id)){
         if(empty($get_product3lunch->use_id)){                         
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 ;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                     
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3lunch->use_id)){
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0lunch = $this->productModel->getProductById($proteinLunch2day[0]);
    $get_product1lunch = $this->productModel->getProductById($proteinLunch2day[1]);
    $get_product2lunch = $this->productModel->getProductById($proteinLunch2day[2]);
    $get_product3lunch = $this->productModel->getProductById($proteinLunch2day[3]);
    $get_product4lunch = $this->productModel->getProductById($proteinLunch2day[4]);
if(empty($get_product0lunch->use_id)){
        if(empty($get_product1lunch->use_id) && !empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id) && !empty($get_product4lunch->use_id)){
            
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3 +$proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)&& empty($get_product4lunch->use_id)){         
          
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){                      
           
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus = $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id)){  
            if(!empty($get_product3lunch->use_id)){
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                       
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;                
            $minus =  $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                       
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;                
            $minus =  $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id)){     
            
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){   
            if(!empty($get_product1lunch->use_id)){ 
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3lunch->use_id)){   
            if(!empty($get_product2lunch->use_id)){
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4lunch->use_id)){   
             
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                       
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1lunch->use_id)){
          if(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id) && !empty($get_product4lunch->use_id)){
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3lunch->use_id) ){   
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $minus =  $proteinsperservinglunch0;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4lunch->use_id) ){
            if(!empty($get_product3lunch->use_id)){
               
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2lunch->use_id)){
         if(empty($get_product3lunch->use_id)){   
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 ;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                     
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                     
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                     
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3lunch->use_id)){
        if(empty($get_product4lunch->use_id)){
           
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id; 
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id; 
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}


switch (count($proteinLunch3day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($proteinLunch3day)){
        $get_product0lunch = $this->productModel->getProductById($proteinLunch3day[0]);
        $proteinsperservingUseEmptylunch = $caloriesperserving /100 * 20 /4; 
        $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $get_product0lunch = $this->productModel->getProductById($proteinLunch3day[0]);
        $get_product1lunch = $this->productModel->getProductById($proteinLunch3day[1]);
    if(!empty($get_product1lunch->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperservinglunch = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1lunch->use_id;
        $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1lunch->use_id)){
        // Two products with out use_id
        $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0lunch = $this->productModel->getProductById($proteinLunch3day[0]);
    $get_product1lunch = $this->productModel->getProductById($proteinLunch3day[1]);
    $get_product2lunch = $this->productModel->getProductById($proteinLunch3day[2]);
    if(!empty($get_product1lunch->use_id)){
        if(empty($get_product2lunch->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2lunch->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseEmptylunch = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0lunch = $this->productModel->getProductById($proteinLunch3day[0]);
    $get_product1lunch = $this->productModel->getProductById($proteinLunch3day[1]);
    $get_product2lunch = $this->productModel->getProductById($proteinLunch3day[2]);
    $get_product3lunch = $this->productModel->getProductById($proteinLunch3day[3]);
    if(empty($get_product0lunch->use_id)){
        if(empty($get_product1lunch->use_id) && !empty($get_product2lunch->use_id)){
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){ 
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id)){                       
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id)){                     
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){                        
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3lunch->use_id)){                     
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1lunch->use_id)){
          if(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id)){
                        
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){ 
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2lunch->use_id)){ 
                       
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2lunch->use_id)){
         if(empty($get_product3lunch->use_id)){                         
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 ;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                     
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3lunch->use_id)){
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0lunch = $this->productModel->getProductById($proteinLunch3day[0]);
    $get_product1lunch = $this->productModel->getProductById($proteinLunch3day[1]);
    $get_product2lunch = $this->productModel->getProductById($proteinLunch3day[2]);
    $get_product3lunch = $this->productModel->getProductById($proteinLunch3day[3]);
    $get_product4lunch = $this->productModel->getProductById($proteinLunch3day[4]);
if(empty($get_product0lunch->use_id)){
        if(empty($get_product1lunch->use_id) && !empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id) && !empty($get_product4lunch->use_id)){
            
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3 +$proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)&& empty($get_product4lunch->use_id)){         
          
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){                      
           
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus = $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id)){  
            if(!empty($get_product3lunch->use_id)){
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                       
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;                
            $minus =  $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                       
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;                
            $minus =  $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id)){     
            
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){   
            if(!empty($get_product1lunch->use_id)){ 
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3lunch->use_id)){   
            if(!empty($get_product2lunch->use_id)){
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4lunch->use_id)){   
             
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                       
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1lunch->use_id)){
          if(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id) && !empty($get_product4lunch->use_id)){
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3lunch->use_id) ){   
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $minus =  $proteinsperservinglunch0;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4lunch->use_id) ){
            if(!empty($get_product3lunch->use_id)){
               
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2lunch->use_id)){
         if(empty($get_product3lunch->use_id)){   
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 ;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                     
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                     
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                     
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3lunch->use_id)){
        if(empty($get_product4lunch->use_id)){
           
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id; 
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id; 
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}



switch (count($proteinLunch4day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($proteinLunch4day)){
        $get_product0lunch = $this->productModel->getProductById($proteinLunch4day[0]);
        $proteinsperservingUseEmptylunch = $caloriesperserving /100 * 20 /4; 
        $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $get_product0lunch = $this->productModel->getProductById($proteinLunch4day[0]);
        $get_product1lunch = $this->productModel->getProductById($proteinLunch4day[1]);
    if(!empty($get_product1lunch->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperservinglunch = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1lunch->use_id;
        $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1lunch->use_id)){
        // Two products with out use_id
        $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0lunch = $this->productModel->getProductById($proteinLunch4day[0]);
    $get_product1lunch = $this->productModel->getProductById($proteinLunch4day[1]);
    $get_product2lunch = $this->productModel->getProductById($proteinLunch4day[2]);
    if(!empty($get_product1lunch->use_id)){
        if(empty($get_product2lunch->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2lunch->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseEmptylunch = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0lunch = $this->productModel->getProductById($proteinLunch4day[0]);
    $get_product1lunch = $this->productModel->getProductById($proteinLunch4day[1]);
    $get_product2lunch = $this->productModel->getProductById($proteinLunch4day[2]);
    $get_product3lunch = $this->productModel->getProductById($proteinLunch4day[3]);
    if(empty($get_product0lunch->use_id)){
        if(empty($get_product1lunch->use_id) && !empty($get_product2lunch->use_id)){
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){ 
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id)){                       
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id)){                     
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){                        
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3lunch->use_id)){                     
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1lunch->use_id)){
          if(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id)){
                        
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){ 
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2lunch->use_id)){ 
                       
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2lunch->use_id)){
         if(empty($get_product3lunch->use_id)){                         
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 ;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                     
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3lunch->use_id)){
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0lunch = $this->productModel->getProductById($proteinLunch4day[0]);
    $get_product1lunch = $this->productModel->getProductById($proteinLunch4day[1]);
    $get_product2lunch = $this->productModel->getProductById($proteinLunch4day[2]);
    $get_product3lunch = $this->productModel->getProductById($proteinLunch4day[3]);
    $get_product4lunch = $this->productModel->getProductById($proteinLunch4day[4]);
if(empty($get_product0lunch->use_id)){
        if(empty($get_product1lunch->use_id) && !empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id) && !empty($get_product4lunch->use_id)){
            
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3 +$proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)&& empty($get_product4lunch->use_id)){         
          
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){                      
           
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus = $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id)){  
            if(!empty($get_product3lunch->use_id)){
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                       
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;                
            $minus =  $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                       
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;                
            $minus =  $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id)){     
            
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){   
            if(!empty($get_product1lunch->use_id)){ 
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3lunch->use_id)){   
            if(!empty($get_product2lunch->use_id)){
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4lunch->use_id)){   
             
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                       
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1lunch->use_id)){
          if(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id) && !empty($get_product4lunch->use_id)){
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3lunch->use_id) ){   
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $minus =  $proteinsperservinglunch0;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4lunch->use_id) ){
            if(!empty($get_product3lunch->use_id)){
               
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2lunch->use_id)){
         if(empty($get_product3lunch->use_id)){   
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 ;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                     
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                     
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                     
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3lunch->use_id)){
        if(empty($get_product4lunch->use_id)){
           
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id; 
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id; 
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}


switch (count($proteinLunch5day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($proteinLunch5day)){
        $get_product0lunch = $this->productModel->getProductById($proteinLunch5day[0]);
        $proteinsperservingUseEmptylunch = $caloriesperserving /100 * 20 /4; 
        $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $get_product0lunch = $this->productModel->getProductById($proteinLunch5day[0]);
        $get_product1lunch = $this->productModel->getProductById($proteinLunch5day[1]);
    if(!empty($get_product1lunch->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperservinglunch = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1lunch->use_id;
        $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1lunch->use_id)){
        // Two products with out use_id
        $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0lunch = $this->productModel->getProductById($proteinLunch5day[0]);
    $get_product1lunch = $this->productModel->getProductById($proteinLunch5day[1]);
    $get_product2lunch = $this->productModel->getProductById($proteinLunch5day[2]);
    if(!empty($get_product1lunch->use_id)){
        if(empty($get_product2lunch->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2lunch->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseEmptylunch = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0lunch = $this->productModel->getProductById($proteinLunch5day[0]);
    $get_product1lunch = $this->productModel->getProductById($proteinLunch5day[1]);
    $get_product2lunch = $this->productModel->getProductById($proteinLunch5day[2]);
    $get_product3lunch = $this->productModel->getProductById($proteinLunch5day[3]);
    if(empty($get_product0lunch->use_id)){
        if(empty($get_product1lunch->use_id) && !empty($get_product2lunch->use_id)){
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){ 
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id)){                       
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id)){                     
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){                        
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3lunch->use_id)){                     
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1lunch->use_id)){
          if(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id)){
                        
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){ 
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2lunch->use_id)){ 
                       
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2lunch->use_id)){
         if(empty($get_product3lunch->use_id)){                         
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 ;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                     
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3lunch->use_id)){
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0lunch = $this->productModel->getProductById($proteinLunch5day[0]);
    $get_product1lunch = $this->productModel->getProductById($proteinLunch5day[1]);
    $get_product2lunch = $this->productModel->getProductById($proteinLunch5day[2]);
    $get_product3lunch = $this->productModel->getProductById($proteinLunch5day[3]);
    $get_product4lunch = $this->productModel->getProductById($proteinLunch5day[4]);
if(empty($get_product0lunch->use_id)){
        if(empty($get_product1lunch->use_id) && !empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id) && !empty($get_product4lunch->use_id)){
            
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3 +$proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)&& empty($get_product4lunch->use_id)){         
          
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){                      
           
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus = $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id)){  
            if(!empty($get_product3lunch->use_id)){
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                       
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;                
            $minus =  $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                       
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;                
            $minus =  $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id)){     
            
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){   
            if(!empty($get_product1lunch->use_id)){ 
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3lunch->use_id)){   
            if(!empty($get_product2lunch->use_id)){
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4lunch->use_id)){   
             
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                       
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1lunch->use_id)){
          if(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id) && !empty($get_product4lunch->use_id)){
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3lunch->use_id) ){   
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $minus =  $proteinsperservinglunch0;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4lunch->use_id) ){
            if(!empty($get_product3lunch->use_id)){
               
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2lunch->use_id)){
         if(empty($get_product3lunch->use_id)){   
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 ;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                     
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                     
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                     
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3lunch->use_id)){
        if(empty($get_product4lunch->use_id)){
           
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id; 
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id; 
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}


switch (count($proteinLunch6day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($proteinLunch6day)){
        $get_product0lunch = $this->productModel->getProductById($proteinLunch6day[0]);
        $proteinsperservingUseEmptylunch = $caloriesperserving /100 * 20 /4; 
        $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $get_product0lunch = $this->productModel->getProductById($proteinLunch6day[0]);
        $get_product1lunch = $this->productModel->getProductById($proteinLunch6day[1]);
    if(!empty($get_product1lunch->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperservinglunch = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1lunch->use_id;
        $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1lunch->use_id)){
        // Two products with out use_id
        $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0lunch = $this->productModel->getProductById($proteinLunch6day[0]);
    $get_product1lunch = $this->productModel->getProductById($proteinLunch6day[1]);
    $get_product2lunch = $this->productModel->getProductById($proteinLunch6day[2]);
    if(!empty($get_product1lunch->use_id)){
        if(empty($get_product2lunch->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2lunch->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseEmptylunch = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0lunch = $this->productModel->getProductById($proteinLunch6day[0]);
    $get_product1lunch = $this->productModel->getProductById($proteinLunch6day[1]);
    $get_product2lunch = $this->productModel->getProductById($proteinLunch6day[2]);
    $get_product3lunch = $this->productModel->getProductById($proteinLunch6day[3]);
    if(empty($get_product0lunch->use_id)){
        if(empty($get_product1lunch->use_id) && !empty($get_product2lunch->use_id)){
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){ 
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id)){                       
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id)){                     
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){                        
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3lunch->use_id)){                     
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1lunch->use_id)){
          if(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id)){
                        
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){ 
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2lunch->use_id)){ 
                       
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2lunch->use_id)){
         if(empty($get_product3lunch->use_id)){                         
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 ;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                     
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3lunch->use_id)){
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0lunch = $this->productModel->getProductById($proteinLunch6day[0]);
    $get_product1lunch = $this->productModel->getProductById($proteinLunch6day[1]);
    $get_product2lunch = $this->productModel->getProductById($proteinLunch6day[2]);
    $get_product3lunch = $this->productModel->getProductById($proteinLunch6day[3]);
    $get_product4lunch = $this->productModel->getProductById($proteinLunch6day[4]);
if(empty($get_product0lunch->use_id)){
        if(empty($get_product1lunch->use_id) && !empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id) && !empty($get_product4lunch->use_id)){
            
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3 +$proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)&& empty($get_product4lunch->use_id)){         
          
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){                      
           
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus = $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id)){  
            if(!empty($get_product3lunch->use_id)){
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                       
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;                
            $minus =  $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                       
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;                
            $minus =  $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id)){     
            
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){   
            if(!empty($get_product1lunch->use_id)){ 
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3lunch->use_id)){   
            if(!empty($get_product2lunch->use_id)){
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4lunch->use_id)){   
             
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                       
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1lunch->use_id)){
          if(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id) && !empty($get_product4lunch->use_id)){
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3lunch->use_id) ){   
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $minus =  $proteinsperservinglunch0;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4lunch->use_id) ){
            if(!empty($get_product3lunch->use_id)){
               
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2lunch->use_id)){
         if(empty($get_product3lunch->use_id)){   
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 ;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                     
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                     
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                     
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3lunch->use_id)){
        if(empty($get_product4lunch->use_id)){
           
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id; 
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id; 
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}


switch (count($proteinLunch7day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($proteinLunch7day)){
        $get_product0lunch = $this->productModel->getProductById($proteinLunch7day[0]);
        $proteinsperservingUseEmptylunch = $caloriesperserving /100 * 20 /4; 
        $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $get_product0lunch = $this->productModel->getProductById($proteinLunch7day[0]);
        $get_product1lunch = $this->productModel->getProductById($proteinLunch7day[1]);
    if(!empty($get_product1lunch->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperservinglunch = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1lunch->use_id;
        $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1lunch->use_id)){
        // Two products with out use_id
        $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0lunch = $this->productModel->getProductById($proteinLunch7day[0]);
    $get_product1lunch = $this->productModel->getProductById($proteinLunch7day[1]);
    $get_product2lunch = $this->productModel->getProductById($proteinLunch7day[2]);
    if(!empty($get_product1lunch->use_id)){
        if(empty($get_product2lunch->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2lunch->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseEmptylunch = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0lunch = $this->productModel->getProductById($proteinLunch7day[0]);
    $get_product1lunch = $this->productModel->getProductById($proteinLunch7day[1]);
    $get_product2lunch = $this->productModel->getProductById($proteinLunch7day[2]);
    $get_product3lunch = $this->productModel->getProductById($proteinLunch7day[3]);
    if(empty($get_product0lunch->use_id)){
        if(empty($get_product1lunch->use_id) && !empty($get_product2lunch->use_id)){
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){ 
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id)){                       
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id)){                     
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){                        
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3lunch->use_id)){                     
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1lunch->use_id)){
          if(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id)){
                        
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){ 
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2lunch->use_id)){ 
                       
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2lunch->use_id)){
         if(empty($get_product3lunch->use_id)){                         
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 ;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                     
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3lunch->use_id)){
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0lunch = $this->productModel->getProductById($proteinLunch7day[0]);
    $get_product1lunch = $this->productModel->getProductById($proteinLunch7day[1]);
    $get_product2lunch = $this->productModel->getProductById($proteinLunch7day[2]);
    $get_product3lunch = $this->productModel->getProductById($proteinLunch7day[3]);
    $get_product4lunch = $this->productModel->getProductById($proteinLunch7day[4]);
if(empty($get_product0lunch->use_id)){
        if(empty($get_product1lunch->use_id) && !empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id) && !empty($get_product4lunch->use_id)){
            
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3 +$proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)&& empty($get_product4lunch->use_id)){         
          
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){                      
           
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus = $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1lunch->use_id) && empty($get_product2lunch->use_id)){  
            if(!empty($get_product3lunch->use_id)){
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                       
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;                
            $minus =  $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                       
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;                
            $minus =  $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id)){     
            
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2lunch->use_id) && empty($get_product3lunch->use_id)){   
            if(!empty($get_product1lunch->use_id)){ 
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                      
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3lunch->use_id)){   
            if(!empty($get_product2lunch->use_id)){
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4lunch->use_id)){   
             
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                       
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1lunch->use_id)){
          if(empty($get_product2lunch->use_id) && !empty($get_product3lunch->use_id) && !empty($get_product4lunch->use_id)){
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3lunch->use_id) ){   
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $minus =  $proteinsperservinglunch0;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4lunch->use_id) ){
            if(!empty($get_product3lunch->use_id)){
               
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4lunch->use_id;
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch2 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2lunch->use_id)){
         if(empty($get_product3lunch->use_id)){   
            
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 ;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;                     
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                     
            $proteinsperservinglunch4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id;                     
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch3 + $proteinsperservinglunch4;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3lunch->use_id)){
        if(empty($get_product4lunch->use_id)){
           
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id;               
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2;
            $proteinsperservingUseEmptylunch =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservinglunch0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0lunch->use_id;
            $proteinsperservinglunch1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1lunch->use_id;               
            $proteinsperservinglunch2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2lunch->use_id; 
            $proteinsperservinglunch3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3lunch->use_id; 
            $minus =  $proteinsperservinglunch0 + $proteinsperservinglunch1 + $proteinsperservinglunch2 + $proteinsperservinglunch3;
            $proteinsperservingUseEmptylunch =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservinglunch = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}