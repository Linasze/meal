<?php
 switch (count($protein)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($protein)){
        $get_product0 = $this->productModel->getProductById($protein[0]);
        $proteinsperservingUseEmpty = $caloriesperserving /100 * 20 /4; 
        $proteinsperserving = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $get_product0 = $this->productModel->getProductById($protein[0]);
        $get_product1 = $this->productModel->getProductById($protein[1]);
    if(!empty($get_product1->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperserving = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1->use_id;
        $proteinsperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1->use_id)){
        // Two products with out use_id
        $proteinsperservingUseEmpty =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0 = $this->productModel->getProductById($protein[0]);
    $get_product1 = $this->productModel->getProductById($protein[1]);
    $get_product2 = $this->productModel->getProductById($protein[2]);
    if(!empty($get_product1->use_id)){
        if(empty($get_product2->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseEmpty =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1->use_id;
            $proteinsperserving2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2->use_id;
            $minus =  $proteinsperserving1 + $proteinsperserving2;
            $proteinsperservingUseEmpty =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperserving1 + $proteinsperserving2;
            $proteinsperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseEmpty = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0 = $this->productModel->getProductById($protein[0]);
    $get_product1 = $this->productModel->getProductById($protein[1]);
    $get_product2 = $this->productModel->getProductById($protein[2]);
    $get_product3 = $this->productModel->getProductById($protein[3]);
    if(empty($get_product0->use_id)){
        if(empty($get_product1->use_id) && !empty($get_product2->use_id)){
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperserving1 + $proteinsperserving2 + $proteinsperserving3;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id) && empty($get_product3->use_id)){ 
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperserving1 + $proteinsperserving2 + $proteinsperserving3;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id)){                       
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperserving1 + $proteinsperserving2 + $proteinsperserving3;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2->use_id) && !empty($get_product3->use_id)){                     
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperserving1 + $proteinsperserving3;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2->use_id) && empty($get_product3->use_id)){                        
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperserving1 + $proteinsperserving3;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3->use_id)){                     
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperserving1 + $proteinsperserving2;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperserving1 + $proteinsperserving2 + $proteinsperserving3;
            $proteinsperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1->use_id)){
          if(empty($get_product2->use_id) && !empty($get_product3->use_id)){
                        
            $proteinsperserving0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperserving0 + $proteinsperserving2 + $proteinsperserving3;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2->use_id) && empty($get_product3->use_id)){ 
            $proteinsperserving0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperserving0 + $proteinsperserving2 + $proteinsperserving3;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2->use_id)){ 
                       
            $proteinsperserving0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperserving0 + $proteinsperserving2 + $proteinsperserving3;
            $proteinsperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperserving0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperserving0 + $proteinsperserving2;
            $proteinsperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2->use_id)){
         if(empty($get_product3->use_id)){                         
            $proteinsperserving0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $minus =  $proteinsperserving0 + $proteinsperserving1 ;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperserving0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                     
            $minus =  $proteinsperserving0 + $proteinsperserving1;
            $proteinsperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3->use_id)){
            $proteinsperserving0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;               
            $minus =  $proteinsperserving0 + $proteinsperserving1 + $proteinsperserving2;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0 = $this->productModel->getProductById($protein[0]);
    $get_product1 = $this->productModel->getProductById($protein[1]);
    $get_product2 = $this->productModel->getProductById($protein[2]);
    $get_product3 = $this->productModel->getProductById($protein[3]);
    $get_product4 = $this->productModel->getProductById($protein[4]);
if(empty($get_product0->use_id)){
        if(empty($get_product1->use_id) && !empty($get_product2->use_id) && !empty($get_product3->use_id) && !empty($get_product4->use_id)){
            
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperserving4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperserving1 + $proteinsperserving2 + $proteinsperserving3 +$proteinsperserving4;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id) && empty($get_product3->use_id)&& empty($get_product4->use_id)){         
          
            $proteinsperservingUseEmpty =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id) && empty($get_product3->use_id)){                      
           
            $proteinsperserving4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus = $proteinsperserving4;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id)){  
            if(!empty($get_product3->use_id)){
            $proteinsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                       
            $proteinsperserving4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;                
            $minus =  $proteinsperserving3 + $proteinsperserving4;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                       
            $proteinsperserving4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;                
            $minus =  $proteinsperserving3 + $proteinsperserving4;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2->use_id) && !empty($get_product3->use_id)){     
            
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperserving1 + $proteinsperserving3;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2->use_id) && empty($get_product3->use_id)){   
            if(!empty($get_product1->use_id)){ 
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperserving1 + $proteinsperserving3;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperserving1 + $proteinsperserving3;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3->use_id)){   
            if(!empty($get_product2->use_id)){
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperserving1 + $proteinsperserving2;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperserving1 + $proteinsperserving2;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4->use_id)){   
             
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                       
            $minus =  $proteinsperserving1 + $proteinsperserving2 + $proteinsperserving3;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperserving4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperserving1 + $proteinsperserving2 + $proteinsperserving3 + $proteinsperserving4;
            $proteinsperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1->use_id)){
          if(empty($get_product2->use_id) && !empty($get_product3->use_id) && !empty($get_product4->use_id)){
            
            $proteinsperserving0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperserving4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperserving0 + $proteinsperserving3 + $proteinsperserving4;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3->use_id) ){   
            
            $proteinsperserving0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $minus =  $proteinsperserving0;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4->use_id) ){
            if(!empty($get_product3->use_id)){
               
            $proteinsperserving0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperserving0 + $proteinsperserving2 + $proteinsperserving3;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperserving0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperserving4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperserving0 + $proteinsperserving2 + $proteinsperserving3 + $proteinsperserving4;
            $proteinsperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2->use_id)){
         if(empty($get_product3->use_id)){   
            
            $proteinsperserving0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $minus =  $proteinsperserving0 + $proteinsperserving1 ;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperserving0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                     
            $proteinsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                     
            $proteinsperserving4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                     
            $minus =  $proteinsperserving0 + $proteinsperserving1 + $proteinsperserving3 + $proteinsperserving4;
            $proteinsperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3->use_id)){
        if(empty($get_product4->use_id)){
           
            $proteinsperserving0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;               
            $minus =  $proteinsperserving0 + $proteinsperserving1 + $proteinsperserving2;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperserving0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;               
            $minus =  $proteinsperserving0 + $proteinsperserving1 + $proteinsperserving2;
            $proteinsperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperserving0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperserving1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperserving2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id; 
            $proteinsperserving3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id; 
            $minus =  $proteinsperserving0 + $proteinsperserving1 + $proteinsperserving2 + $proteinsperserving3;
            $proteinsperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}

switch (count($protein2day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($protein2day)){
        $get_product0 = $this->productModel->getProductById($protein2day[0]);
        $proteinsperservingUseUseEmpty = $caloriesperserving /100 * 20 /4; 
        $proteinsperserving = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $get_product0 = $this->productModel->getProductById($protein2day[0]);
        $get_product1 = $this->productModel->getProductById($protein2day[1]);
    if(!empty($get_product1->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperserving = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1->use_id;
        $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1->use_id)){
        // Two products with out use_id
        $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0 = $this->productModel->getProductById($protein2day[0]);
    $get_product1 = $this->productModel->getProductById($protein2day[1]);
    $get_product2 = $this->productModel->getProductById($protein2day[2]);
    if(!empty($get_product1->use_id)){
        if(empty($get_product2->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseUseEmpty = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0 = $this->productModel->getProductById($protein2day[0]);
    $get_product1 = $this->productModel->getProductById($protein2day[1]);
    $get_product2 = $this->productModel->getProductById($protein2day[2]);
    $get_product3 = $this->productModel->getProductById($protein2day[3]);
    if(empty($get_product0->use_id)){
        if(empty($get_product1->use_id) && !empty($get_product2->use_id)){
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id) && empty($get_product3->use_id)){ 
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id)){                       
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2->use_id) && !empty($get_product3->use_id)){                     
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2->use_id) && empty($get_product3->use_id)){                        
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3->use_id)){                     
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1->use_id)){
          if(empty($get_product2->use_id) && !empty($get_product3->use_id)){
                        
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2->use_id) && empty($get_product3->use_id)){ 
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2->use_id)){ 
                       
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2->use_id)){
         if(empty($get_product3->use_id)){                         
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 ;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                     
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3->use_id)){
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0 = $this->productModel->getProductById($protein2day[0]);
    $get_product1 = $this->productModel->getProductById($protein2day[1]);
    $get_product2 = $this->productModel->getProductById($protein2day[2]);
    $get_product3 = $this->productModel->getProductById($protein2day[3]);
    $get_product4 = $this->productModel->getProductById($protein2day[4]);
if(empty($get_product0->use_id)){
        if(empty($get_product1->use_id) && !empty($get_product2->use_id) && !empty($get_product3->use_id) && !empty($get_product4->use_id)){
            
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3 +$proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id) && empty($get_product3->use_id)&& empty($get_product4->use_id)){         
          
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id) && empty($get_product3->use_id)){                      
           
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus = $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id)){  
            if(!empty($get_product3->use_id)){
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                       
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;                
            $minus =  $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                       
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;                
            $minus =  $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2->use_id) && !empty($get_product3->use_id)){     
            
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2->use_id) && empty($get_product3->use_id)){   
            if(!empty($get_product1->use_id)){ 
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3->use_id)){   
            if(!empty($get_product2->use_id)){
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4->use_id)){   
             
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                       
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1->use_id)){
          if(empty($get_product2->use_id) && !empty($get_product3->use_id) && !empty($get_product4->use_id)){
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3->use_id) ){   
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $minus =  $proteinsperservingUse0;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4->use_id) ){
            if(!empty($get_product3->use_id)){
               
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2->use_id)){
         if(empty($get_product3->use_id)){   
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 ;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                     
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                     
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                     
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3->use_id)){
        if(empty($get_product4->use_id)){
           
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id; 
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id; 
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}

switch (count($protein3day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($protein3day)){
        $get_product0 = $this->productModel->getProductById($protein3day[0]);
        $proteinsperservingUseUseEmpty = $caloriesperserving /100 * 20 /4; 
        $proteinsperserving = $caloriesperserving /100 * 20 /4;
      }
    break;

    case 2:
        $get_product0 = $this->productModel->getProductById($protein3day[0]);
        $get_product1 = $this->productModel->getProductById($protein3day[1]);
    if(!empty($get_product1->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperserving = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1->use_id;
        $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1->use_id)){
        // Two products with out use_id
        $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0 = $this->productModel->getProductById($protein3day[0]);
    $get_product1 = $this->productModel->getProductById($protein3day[1]);
    $get_product2 = $this->productModel->getProductById($protein3day[2]);
    if(!empty($get_product1->use_id)){
        if(empty($get_product2->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseUseEmpty = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0 = $this->productModel->getProductById($protein3day[0]);
    $get_product1 = $this->productModel->getProductById($protein3day[1]);
    $get_product2 = $this->productModel->getProductById($protein3day[2]);
    $get_product3 = $this->productModel->getProductById($protein3day[3]);
    if(empty($get_product0->use_id)){
        if(empty($get_product1->use_id) && !empty($get_product2->use_id)){
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id) && empty($get_product3->use_id)){ 
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id)){                       
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2->use_id) && !empty($get_product3->use_id)){                     
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2->use_id) && empty($get_product3->use_id)){                        
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3->use_id)){                     
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1->use_id)){
          if(empty($get_product2->use_id) && !empty($get_product3->use_id)){
                        
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2->use_id) && empty($get_product3->use_id)){ 
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2->use_id)){ 
                       
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2->use_id)){
         if(empty($get_product3->use_id)){                         
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 ;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                     
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3->use_id)){
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0 = $this->productModel->getProductById($protein3day[0]);
    $get_product1 = $this->productModel->getProductById($protein3day[1]);
    $get_product2 = $this->productModel->getProductById($protein3day[2]);
    $get_product3 = $this->productModel->getProductById($protein3day[3]);
    $get_product4 = $this->productModel->getProductById($protein3day[4]);
if(empty($get_product0->use_id)){
        if(empty($get_product1->use_id) && !empty($get_product2->use_id) && !empty($get_product3->use_id) && !empty($get_product4->use_id)){
            
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3 +$proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id) && empty($get_product3->use_id)&& empty($get_product4->use_id)){         
          
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id) && empty($get_product3->use_id)){                      
           
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus = $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id)){  
            if(!empty($get_product3->use_id)){
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                       
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;                
            $minus =  $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                       
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;                
            $minus =  $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2->use_id) && !empty($get_product3->use_id)){     
            
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2->use_id) && empty($get_product3->use_id)){   
            if(!empty($get_product1->use_id)){ 
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3->use_id)){   
            if(!empty($get_product2->use_id)){
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4->use_id)){   
             
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                       
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1->use_id)){
          if(empty($get_product2->use_id) && !empty($get_product3->use_id) && !empty($get_product4->use_id)){
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3->use_id) ){   
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $minus =  $proteinsperservingUse0;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4->use_id) ){
            if(!empty($get_product3->use_id)){
               
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2->use_id)){
         if(empty($get_product3->use_id)){   
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 ;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                     
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                     
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                     
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3->use_id)){
        if(empty($get_product4->use_id)){
           
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id; 
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id; 
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}

switch (count($protein4day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($protein4day)){
        $get_product0 = $this->productModel->getProductById($protein4day[0]);
        $proteinsperservingUseUseEmpty = $caloriesperserving /100 * 20 /4; 
        $proteinsperserving = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $get_product0 = $this->productModel->getProductById($protein4day[0]);
        $get_product1 = $this->productModel->getProductById($protein4day[1]);
    if(!empty($get_product1->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperserving = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1->use_id;
        $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1->use_id)){
        // Two products with out use_id
        $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0 = $this->productModel->getProductById($protein4day[0]);
    $get_product1 = $this->productModel->getProductById($protein4day[1]);
    $get_product2 = $this->productModel->getProductById($protein4day[2]);
    if(!empty($get_product1->use_id)){
        if(empty($get_product2->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseUseEmpty = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0 = $this->productModel->getProductById($protein4day[0]);
    $get_product1 = $this->productModel->getProductById($protein4day[1]);
    $get_product2 = $this->productModel->getProductById($protein4day[2]);
    $get_product3 = $this->productModel->getProductById($protein4day[3]);
    if(empty($get_product0->use_id)){
        if(empty($get_product1->use_id) && !empty($get_product2->use_id)){
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id) && empty($get_product3->use_id)){ 
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id)){                       
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2->use_id) && !empty($get_product3->use_id)){                     
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2->use_id) && empty($get_product3->use_id)){                        
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3->use_id)){                     
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1->use_id)){
          if(empty($get_product2->use_id) && !empty($get_product3->use_id)){
                        
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2->use_id) && empty($get_product3->use_id)){ 
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2->use_id)){ 
                       
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2->use_id)){
         if(empty($get_product3->use_id)){                         
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 ;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                     
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3->use_id)){
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0 = $this->productModel->getProductById($protein4day[0]);
    $get_product1 = $this->productModel->getProductById($protein4day[1]);
    $get_product2 = $this->productModel->getProductById($protein4day[2]);
    $get_product3 = $this->productModel->getProductById($protein4day[3]);
    $get_product4 = $this->productModel->getProductById($protein4day[4]);
if(empty($get_product0->use_id)){
        if(empty($get_product1->use_id) && !empty($get_product2->use_id) && !empty($get_product3->use_id) && !empty($get_product4->use_id)){
            
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3 +$proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id) && empty($get_product3->use_id)&& empty($get_product4->use_id)){         
          
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id) && empty($get_product3->use_id)){                      
           
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus = $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id)){  
            if(!empty($get_product3->use_id)){
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                       
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;                
            $minus =  $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                       
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;                
            $minus =  $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2->use_id) && !empty($get_product3->use_id)){     
            
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2->use_id) && empty($get_product3->use_id)){   
            if(!empty($get_product1->use_id)){ 
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3->use_id)){   
            if(!empty($get_product2->use_id)){
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4->use_id)){   
             
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                       
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1->use_id)){
          if(empty($get_product2->use_id) && !empty($get_product3->use_id) && !empty($get_product4->use_id)){
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3->use_id) ){   
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $minus =  $proteinsperservingUse0;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4->use_id) ){
            if(!empty($get_product3->use_id)){
               
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2->use_id)){
         if(empty($get_product3->use_id)){   
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 ;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                     
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                     
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                     
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3->use_id)){
        if(empty($get_product4->use_id)){
           
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id; 
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id; 
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}

switch (count($protein5day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($protein5day)){
        $get_product0 = $this->productModel->getProductById($protein5day[0]);
        $proteinsperservingUseUseEmpty = $caloriesperserving /100 * 20 /4; 
        $proteinsperserving = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $get_product0 = $this->productModel->getProductById($protein5day[0]);
        $get_product1 = $this->productModel->getProductById($protein5day[1]);
    if(!empty($get_product1->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperserving = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1->use_id;
        $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1->use_id)){
        // Two products with out use_id
        $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0 = $this->productModel->getProductById($protein5day[0]);
    $get_product1 = $this->productModel->getProductById($protein5day[1]);
    $get_product2 = $this->productModel->getProductById($protein5day[2]);
    if(!empty($get_product1->use_id)){
        if(empty($get_product2->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseUseEmpty = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0 = $this->productModel->getProductById($protein5day[0]);
    $get_product1 = $this->productModel->getProductById($protein5day[1]);
    $get_product2 = $this->productModel->getProductById($protein5day[2]);
    $get_product3 = $this->productModel->getProductById($protein5day[3]);
    if(empty($get_product0->use_id)){
        if(empty($get_product1->use_id) && !empty($get_product2->use_id)){
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id) && empty($get_product3->use_id)){ 
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id)){                       
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2->use_id) && !empty($get_product3->use_id)){                     
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2->use_id) && empty($get_product3->use_id)){                        
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3->use_id)){                     
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1->use_id)){
          if(empty($get_product2->use_id) && !empty($get_product3->use_id)){
                        
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2->use_id) && empty($get_product3->use_id)){ 
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2->use_id)){ 
                       
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2->use_id)){
         if(empty($get_product3->use_id)){                         
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 ;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                     
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3->use_id)){
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0 = $this->productModel->getProductById($protein5day[0]);
    $get_product1 = $this->productModel->getProductById($protein5day[1]);
    $get_product2 = $this->productModel->getProductById($protein5day[2]);
    $get_product3 = $this->productModel->getProductById($protein5day[3]);
    $get_product4 = $this->productModel->getProductById($protein5day[4]);
if(empty($get_product0->use_id)){
        if(empty($get_product1->use_id) && !empty($get_product2->use_id) && !empty($get_product3->use_id) && !empty($get_product4->use_id)){
            
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3 +$proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id) && empty($get_product3->use_id)&& empty($get_product4->use_id)){         
          
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id) && empty($get_product3->use_id)){                      
           
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus = $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id)){  
            if(!empty($get_product3->use_id)){
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                       
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;                
            $minus =  $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                       
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;                
            $minus =  $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2->use_id) && !empty($get_product3->use_id)){     
            
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2->use_id) && empty($get_product3->use_id)){   
            if(!empty($get_product1->use_id)){ 
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3->use_id)){   
            if(!empty($get_product2->use_id)){
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4->use_id)){   
             
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                       
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1->use_id)){
          if(empty($get_product2->use_id) && !empty($get_product3->use_id) && !empty($get_product4->use_id)){
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3->use_id) ){   
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $minus =  $proteinsperservingUse0;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4->use_id) ){
            if(!empty($get_product3->use_id)){
               
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2->use_id)){
         if(empty($get_product3->use_id)){   
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 ;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                     
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                     
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                     
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3->use_id)){
        if(empty($get_product4->use_id)){
           
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id; 
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id; 
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}

switch (count($protein6day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($protein6day)){
        $get_product0 = $this->productModel->getProductById($protein6day[0]);
        $proteinsperservingUseUseEmpty = $caloriesperserving /100 * 20 /4; 
        $proteinsperserving = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $get_product0 = $this->productModel->getProductById($protein6day[0]);
        $get_product1 = $this->productModel->getProductById($protein6day[1]);
    if(!empty($get_product1->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperserving = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1->use_id;
        $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1->use_id)){
        // Two products with out use_id
        $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0 = $this->productModel->getProductById($protein6day[0]);
    $get_product1 = $this->productModel->getProductById($protein6day[1]);
    $get_product2 = $this->productModel->getProductById($protein6day[2]);
    if(!empty($get_product1->use_id)){
        if(empty($get_product2->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseUseEmpty = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0 = $this->productModel->getProductById($protein6day[0]);
    $get_product1 = $this->productModel->getProductById($protein6day[1]);
    $get_product2 = $this->productModel->getProductById($protein6day[2]);
    $get_product3 = $this->productModel->getProductById($protein6day[3]);
    if(empty($get_product0->use_id)){
        if(empty($get_product1->use_id) && !empty($get_product2->use_id)){
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id) && empty($get_product3->use_id)){ 
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id)){                       
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2->use_id) && !empty($get_product3->use_id)){                     
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2->use_id) && empty($get_product3->use_id)){                        
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3->use_id)){                     
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1->use_id)){
          if(empty($get_product2->use_id) && !empty($get_product3->use_id)){
                        
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2->use_id) && empty($get_product3->use_id)){ 
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2->use_id)){ 
                       
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2->use_id)){
         if(empty($get_product3->use_id)){                         
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 ;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                     
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3->use_id)){
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0 = $this->productModel->getProductById($protein6day[0]);
    $get_product1 = $this->productModel->getProductById($protein6day[1]);
    $get_product2 = $this->productModel->getProductById($protein6day[2]);
    $get_product3 = $this->productModel->getProductById($protein6day[3]);
    $get_product4 = $this->productModel->getProductById($protein6day[4]);
if(empty($get_product0->use_id)){
        if(empty($get_product1->use_id) && !empty($get_product2->use_id) && !empty($get_product3->use_id) && !empty($get_product4->use_id)){
            
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3 +$proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id) && empty($get_product3->use_id)&& empty($get_product4->use_id)){         
          
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id) && empty($get_product3->use_id)){                      
           
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus = $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id)){  
            if(!empty($get_product3->use_id)){
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                       
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;                
            $minus =  $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                       
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;                
            $minus =  $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2->use_id) && !empty($get_product3->use_id)){     
            
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2->use_id) && empty($get_product3->use_id)){   
            if(!empty($get_product1->use_id)){ 
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3->use_id)){   
            if(!empty($get_product2->use_id)){
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4->use_id)){   
             
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                       
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1->use_id)){
          if(empty($get_product2->use_id) && !empty($get_product3->use_id) && !empty($get_product4->use_id)){
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3->use_id) ){   
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $minus =  $proteinsperservingUse0;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4->use_id) ){
            if(!empty($get_product3->use_id)){
               
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2->use_id)){
         if(empty($get_product3->use_id)){   
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 ;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                     
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                     
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                     
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3->use_id)){
        if(empty($get_product4->use_id)){
           
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id; 
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id; 
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}

switch (count($protein7day)) {
    case 1:
        // One Product with out use_id or with use_id
        if(empty($protein7day)){
        $get_product0 = $this->productModel->getProductById($protein7day[0]);
        $proteinsperservingUseUseEmpty = $caloriesperserving /100 * 20 /4; 
        $proteinsperserving = $caloriesperserving /100 * 20 /4;
        }
    break;

    case 2:
        $get_product0 = $this->productModel->getProductById($protein7day[0]);
        $get_product1 = $this->productModel->getProductById($protein7day[1]);
    if(!empty($get_product1->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperserving = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1->use_id;
        $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1->use_id)){
        // Two products with out use_id
        $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0 = $this->productModel->getProductById($protein7day[0]);
    $get_product1 = $this->productModel->getProductById($protein7day[1]);
    $get_product2 = $this->productModel->getProductById($protein7day[2]);
    if(!empty($get_product1->use_id)){
        if(empty($get_product2->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseUseEmpty = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0 = $this->productModel->getProductById($protein7day[0]);
    $get_product1 = $this->productModel->getProductById($protein7day[1]);
    $get_product2 = $this->productModel->getProductById($protein7day[2]);
    $get_product3 = $this->productModel->getProductById($protein7day[3]);
    if(empty($get_product0->use_id)){
        if(empty($get_product1->use_id) && !empty($get_product2->use_id)){
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id) && empty($get_product3->use_id)){ 
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id)){                       
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2->use_id) && !empty($get_product3->use_id)){                     
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2->use_id) && empty($get_product3->use_id)){                        
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3->use_id)){                     
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1->use_id)){
          if(empty($get_product2->use_id) && !empty($get_product3->use_id)){
                        
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2->use_id) && empty($get_product3->use_id)){ 
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2->use_id)){ 
                       
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2->use_id)){
         if(empty($get_product3->use_id)){                         
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 ;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                     
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3->use_id)){
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0 = $this->productModel->getProductById($protein7day[0]);
    $get_product1 = $this->productModel->getProductById($protein7day[1]);
    $get_product2 = $this->productModel->getProductById($protein7day[2]);
    $get_product3 = $this->productModel->getProductById($protein7day[3]);
    $get_product4 = $this->productModel->getProductById($protein7day[4]);
if(empty($get_product0->use_id)){
        if(empty($get_product1->use_id) && !empty($get_product2->use_id) && !empty($get_product3->use_id) && !empty($get_product4->use_id)){
            
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3 +$proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id) && empty($get_product3->use_id)&& empty($get_product4->use_id)){         
          
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id) && empty($get_product3->use_id)){                      
           
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus = $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1->use_id) && empty($get_product2->use_id)){  
            if(!empty($get_product3->use_id)){
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                       
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;                
            $minus =  $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                       
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;                
            $minus =  $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2->use_id) && !empty($get_product3->use_id)){     
            
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2->use_id) && empty($get_product3->use_id)){   
            if(!empty($get_product1->use_id)){ 
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                      
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3->use_id)){   
            if(!empty($get_product2->use_id)){
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4->use_id)){   
             
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                       
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1->use_id)){
          if(empty($get_product2->use_id) && !empty($get_product3->use_id) && !empty($get_product4->use_id)){
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3->use_id) ){   
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $minus =  $proteinsperservingUse0;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4->use_id) ){
            if(!empty($get_product3->use_id)){
               
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4->use_id;
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse2 + $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2->use_id)){
         if(empty($get_product3->use_id)){   
            
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 ;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;                     
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                     
            $proteinsperservingUse4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id;                     
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse3 + $proteinsperservingUse4;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3->use_id)){
        if(empty($get_product4->use_id)){
           
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id;               
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse2;
            $proteinsperservingUseUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservingUse0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0->use_id;
            $proteinsperservingUse1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1->use_id;               
            $proteinsperservingUse2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2->use_id; 
            $proteinsperservingUse3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3->use_id; 
            $minus =  $proteinsperservingUse0 + $proteinsperservingUse1 + $proteinsperservingUse2 + $proteinsperservingUse3;
            $proteinsperservingUseUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperserving = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}