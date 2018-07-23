<?php
 switch (count($protein)) {
    case 1:
        // One Product with out use_id or with use_id
        $get_product0 = $this->productModel->getProductById($protein[0]);
        $proteinsperservingUseEmpty = $caloriesperserving /100 * 20 /4; 
        $proteinsperserving = $caloriesperserving /100 * 20 /4;
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