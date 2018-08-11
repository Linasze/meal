<?php
 switch (count($other)) {
    case 1:
        // One Product with out use_id or with use_id
        $getPr0 = $this->productModel->getProductById($other[0]);
        $othersperservingUseEmpty = $caloriesperserving /100 * 20 /4; 
        $othersperserving = $caloriesperserving /100 * 20 /4;
    break;

    case 2:
        $getPr0 = $this->productModel->getProductById($other[0]);
        $getPr1 = $this->productModel->getProductById($other[1]);
    if(!empty($getPr1->use_id)){   
        // One with out use_id and one with use_is  
        $othersperserving = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1->use_id;
        $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1->use_id)){
        // Two products with out use_id
        $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0 = $this->productModel->getProductById($other[0]);
    $getPr1 = $this->productModel->getProductById($other[1]);
    $getPr2 = $this->productModel->getProductById($other[2]);
    if(!empty($getPr1->use_id)){
        if(empty($getPr2->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperserving1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmpty = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0 = $this->productModel->getProductById($other[0]);
    $getPr1 = $this->productModel->getProductById($other[1]);
    $getPr2 = $this->productModel->getProductById($other[2]);
    $getPr3 = $this->productModel->getProductById($other[3]);
    if(empty($getPr0->use_id)){
        if(empty($getPr1->use_id) && !empty($getPr2->use_id)){
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id) && empty($getPr3->use_id)){ 
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id)){                       
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2->use_id) && !empty($getPr3->use_id)){                     
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2->use_id) && empty($getPr3->use_id)){                        
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3->use_id)){                     
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(!empty($getPr0->use_id)){
           if(empty($getPr2->use_id) && !empty($getPr3->use_id)){
                        
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2->use_id) && empty($getPr3->use_id)){ 
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2->use_id)){ 
                       
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2->use_id)){
         if(empty($getPr3->use_id)){                         
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 ;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                     
            $minus =  $othersperserving0 + $othersperserving1;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3->use_id)){
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperserving = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0 = $this->productModel->getProductById($other[0]);
    $getPr1 = $this->productModel->getProductById($other[1]);
    $getPr2 = $this->productModel->getProductById($other[2]);
    $getPr3 = $this->productModel->getProductById($other[3]);
    $getPr4 = $this->productModel->getProductById($other[4]);
if(empty($getPr0->use_id)){
        if(empty($getPr1->use_id) && !empty($getPr2->use_id) && !empty($getPr3->use_id) && !empty($getPr4->use_id)){
            
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3 +$othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id) && empty($getPr3->use_id)&& empty($getPr4->use_id)){         
          
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id) && empty($getPr3->use_id)){                      
           
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus = $othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id)){  
            if(!empty($getPr3->use_id)){
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                       
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;                
            $minus =  $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                       
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;                
            $minus =  $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2->use_id) && !empty($getPr3->use_id)){     
            
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2->use_id) && empty($getPr3->use_id)){   
            if(!empty($getPr1->use_id)){ 
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3->use_id)){   
            if(!empty($getPr2->use_id)){
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4->use_id)){   
             
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                       
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1->use_id)){
          if(empty($getPr2->use_id) && !empty($getPr3->use_id) && !empty($getPr4->use_id)){
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus =  $othersperserving0 + $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3->use_id) ){   
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $minus =  $othersperserving0;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperserving = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4->use_id) ){
            if(!empty($getPr3->use_id)){
               
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2->use_id)){
         if(empty($getPr3->use_id)){   
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 ;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                     
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                     
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                     
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3->use_id)){
        if(empty($getPr4->use_id)){
           
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id; 
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id; 
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}


switch (count($other2day)) {
    case 1:
        // One Product with out use_id or with use_id
        $getPr0 = $this->productModel->getProductById($other2day[0]);
        $othersperservingUseEmpty = $caloriesperserving /100 * 20 /4; 
        $othersperserving = $caloriesperserving /100 * 20 /4;
    break;

    case 2:
        $getPr0 = $this->productModel->getProductById($other2day[0]);
        $getPr1 = $this->productModel->getProductById($other2day[1]);
    if(!empty($getPr1->use_id)){   
        // One with out use_id and one with use_is  
        $othersperserving = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1->use_id;
        $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1->use_id)){
        // Two products with out use_id
        $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0 = $this->productModel->getProductById($other2day[0]);
    $getPr1 = $this->productModel->getProductById($other2day[1]);
    $getPr2 = $this->productModel->getProductById($other2day[2]);
    if(!empty($getPr1->use_id)){
        if(empty($getPr2->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperserving1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmpty = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0 = $this->productModel->getProductById($other2day[0]);
    $getPr1 = $this->productModel->getProductById($other2day[1]);
    $getPr2 = $this->productModel->getProductById($other2day[2]);
    $getPr3 = $this->productModel->getProductById($other2day[3]);
    if(empty($getPr0->use_id)){
        if(empty($getPr1->use_id) && !empty($getPr2->use_id)){
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id) && empty($getPr3->use_id)){ 
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id)){                       
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2->use_id) && !empty($getPr3->use_id)){                     
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2->use_id) && empty($getPr3->use_id)){                        
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3->use_id)){                     
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(!empty($getPr0->use_id)){
           if(empty($getPr2->use_id) && !empty($getPr3->use_id)){
                        
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2->use_id) && empty($getPr3->use_id)){ 
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2->use_id)){ 
                       
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2->use_id)){
         if(empty($getPr3->use_id)){                         
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 ;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                     
            $minus =  $othersperserving0 + $othersperserving1;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3->use_id)){
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperserving = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0 = $this->productModel->getProductById($other2day[0]);
    $getPr1 = $this->productModel->getProductById($other2day[1]);
    $getPr2 = $this->productModel->getProductById($other2day[2]);
    $getPr3 = $this->productModel->getProductById($other2day[3]);
    $getPr4 = $this->productModel->getProductById($other2day[4]);
if(empty($getPr0->use_id)){
        if(empty($getPr1->use_id) && !empty($getPr2->use_id) && !empty($getPr3->use_id) && !empty($getPr4->use_id)){
            
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3 +$othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id) && empty($getPr3->use_id)&& empty($getPr4->use_id)){         
          
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id) && empty($getPr3->use_id)){                      
           
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus = $othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id)){  
            if(!empty($getPr3->use_id)){
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                       
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;                
            $minus =  $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                       
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;                
            $minus =  $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2->use_id) && !empty($getPr3->use_id)){     
            
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2->use_id) && empty($getPr3->use_id)){   
            if(!empty($getPr1->use_id)){ 
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3->use_id)){   
            if(!empty($getPr2->use_id)){
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4->use_id)){   
             
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                       
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1->use_id)){
          if(empty($getPr2->use_id) && !empty($getPr3->use_id) && !empty($getPr4->use_id)){
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus =  $othersperserving0 + $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3->use_id) ){   
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $minus =  $othersperserving0;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperserving = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4->use_id) ){
            if(!empty($getPr3->use_id)){
               
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2->use_id)){
         if(empty($getPr3->use_id)){   
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 ;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                     
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                     
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                     
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3->use_id)){
        if(empty($getPr4->use_id)){
           
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id; 
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id; 
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}


switch (count($other3day)) {
    case 1:
        // One Product with out use_id or with use_id
        $getPr0 = $this->productModel->getProductById($other3day[0]);
        $othersperservingUseEmpty = $caloriesperserving /100 * 20 /4; 
        $othersperserving = $caloriesperserving /100 * 20 /4;
    break;

    case 2:
        $getPr0 = $this->productModel->getProductById($other3day[0]);
        $getPr1 = $this->productModel->getProductById($other3day[1]);
    if(!empty($getPr1->use_id)){   
        // One with out use_id and one with use_is  
        $othersperserving = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1->use_id;
        $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1->use_id)){
        // Two products with out use_id
        $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0 = $this->productModel->getProductById($other3day[0]);
    $getPr1 = $this->productModel->getProductById($other3day[1]);
    $getPr2 = $this->productModel->getProductById($other3day[2]);
    if(!empty($getPr1->use_id)){
        if(empty($getPr2->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperserving1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmpty = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0 = $this->productModel->getProductById($other3day[0]);
    $getPr1 = $this->productModel->getProductById($other3day[1]);
    $getPr2 = $this->productModel->getProductById($other3day[2]);
    $getPr3 = $this->productModel->getProductById($other3day[3]);
    if(empty($getPr0->use_id)){
        if(empty($getPr1->use_id) && !empty($getPr2->use_id)){
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id) && empty($getPr3->use_id)){ 
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id)){                       
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2->use_id) && !empty($getPr3->use_id)){                     
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2->use_id) && empty($getPr3->use_id)){                        
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3->use_id)){                     
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(!empty($getPr0->use_id)){
           if(empty($getPr2->use_id) && !empty($getPr3->use_id)){
                        
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2->use_id) && empty($getPr3->use_id)){ 
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2->use_id)){ 
                       
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2->use_id)){
         if(empty($getPr3->use_id)){                         
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 ;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                     
            $minus =  $othersperserving0 + $othersperserving1;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3->use_id)){
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperserving = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0 = $this->productModel->getProductById($other3day[0]);
    $getPr1 = $this->productModel->getProductById($other3day[1]);
    $getPr2 = $this->productModel->getProductById($other3day[2]);
    $getPr3 = $this->productModel->getProductById($other3day[3]);
    $getPr4 = $this->productModel->getProductById($other3day[4]);
if(empty($getPr0->use_id)){
        if(empty($getPr1->use_id) && !empty($getPr2->use_id) && !empty($getPr3->use_id) && !empty($getPr4->use_id)){
            
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3 +$othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id) && empty($getPr3->use_id)&& empty($getPr4->use_id)){         
          
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id) && empty($getPr3->use_id)){                      
           
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus = $othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id)){  
            if(!empty($getPr3->use_id)){
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                       
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;                
            $minus =  $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                       
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;                
            $minus =  $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2->use_id) && !empty($getPr3->use_id)){     
            
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2->use_id) && empty($getPr3->use_id)){   
            if(!empty($getPr1->use_id)){ 
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3->use_id)){   
            if(!empty($getPr2->use_id)){
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4->use_id)){   
             
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                       
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1->use_id)){
          if(empty($getPr2->use_id) && !empty($getPr3->use_id) && !empty($getPr4->use_id)){
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus =  $othersperserving0 + $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3->use_id) ){   
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $minus =  $othersperserving0;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperserving = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4->use_id) ){
            if(!empty($getPr3->use_id)){
               
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2->use_id)){
         if(empty($getPr3->use_id)){   
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 ;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                     
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                     
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                     
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3->use_id)){
        if(empty($getPr4->use_id)){
           
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id; 
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id; 
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}


switch (count($other4day)) {
    case 1:
        // One Product with out use_id or with use_id
        $getPr0 = $this->productModel->getProductById($other4day[0]);
        $othersperservingUseEmpty = $caloriesperserving /100 * 20 /4; 
        $othersperserving = $caloriesperserving /100 * 20 /4;
    break;

    case 2:
        $getPr0 = $this->productModel->getProductById($other4day[0]);
        $getPr1 = $this->productModel->getProductById($other4day[1]);
    if(!empty($getPr1->use_id)){   
        // One with out use_id and one with use_is  
        $othersperserving = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1->use_id;
        $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1->use_id)){
        // Two products with out use_id
        $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0 = $this->productModel->getProductById($other4day[0]);
    $getPr1 = $this->productModel->getProductById($other4day[1]);
    $getPr2 = $this->productModel->getProductById($other4day[2]);
    if(!empty($getPr1->use_id)){
        if(empty($getPr2->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperserving1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmpty = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0 = $this->productModel->getProductById($other4day[0]);
    $getPr1 = $this->productModel->getProductById($other4day[1]);
    $getPr2 = $this->productModel->getProductById($other4day[2]);
    $getPr3 = $this->productModel->getProductById($other4day[3]);
    if(empty($getPr0->use_id)){
        if(empty($getPr1->use_id) && !empty($getPr2->use_id)){
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id) && empty($getPr3->use_id)){ 
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id)){                       
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2->use_id) && !empty($getPr3->use_id)){                     
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2->use_id) && empty($getPr3->use_id)){                        
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3->use_id)){                     
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(!empty($getPr0->use_id)){
           if(empty($getPr2->use_id) && !empty($getPr3->use_id)){
                        
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2->use_id) && empty($getPr3->use_id)){ 
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2->use_id)){ 
                       
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2->use_id)){
         if(empty($getPr3->use_id)){                         
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 ;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                     
            $minus =  $othersperserving0 + $othersperserving1;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3->use_id)){
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperserving = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0 = $this->productModel->getProductById($other4day[0]);
    $getPr1 = $this->productModel->getProductById($other4day[1]);
    $getPr2 = $this->productModel->getProductById($other4day[2]);
    $getPr3 = $this->productModel->getProductById($other4day[3]);
    $getPr4 = $this->productModel->getProductById($other4day[4]);
if(empty($getPr0->use_id)){
        if(empty($getPr1->use_id) && !empty($getPr2->use_id) && !empty($getPr3->use_id) && !empty($getPr4->use_id)){
            
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3 +$othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id) && empty($getPr3->use_id)&& empty($getPr4->use_id)){         
          
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id) && empty($getPr3->use_id)){                      
           
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus = $othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id)){  
            if(!empty($getPr3->use_id)){
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                       
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;                
            $minus =  $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                       
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;                
            $minus =  $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2->use_id) && !empty($getPr3->use_id)){     
            
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2->use_id) && empty($getPr3->use_id)){   
            if(!empty($getPr1->use_id)){ 
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3->use_id)){   
            if(!empty($getPr2->use_id)){
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4->use_id)){   
             
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                       
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1->use_id)){
          if(empty($getPr2->use_id) && !empty($getPr3->use_id) && !empty($getPr4->use_id)){
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus =  $othersperserving0 + $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3->use_id) ){   
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $minus =  $othersperserving0;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperserving = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4->use_id) ){
            if(!empty($getPr3->use_id)){
               
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2->use_id)){
         if(empty($getPr3->use_id)){   
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 ;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                     
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                     
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                     
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3->use_id)){
        if(empty($getPr4->use_id)){
           
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id; 
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id; 
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}


switch (count($other5day)) {
    case 1:
        // One Product with out use_id or with use_id
        $getPr0 = $this->productModel->getProductById($other5day[0]);
        $othersperservingUseEmpty = $caloriesperserving /100 * 20 /4; 
        $othersperserving = $caloriesperserving /100 * 20 /4;
    break;

    case 2:
        $getPr0 = $this->productModel->getProductById($other5day[0]);
        $getPr1 = $this->productModel->getProductById($other5day[1]);
    if(!empty($getPr1->use_id)){   
        // One with out use_id and one with use_is  
        $othersperserving = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1->use_id;
        $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1->use_id)){
        // Two products with out use_id
        $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0 = $this->productModel->getProductById($other5day[0]);
    $getPr1 = $this->productModel->getProductById($other5day[1]);
    $getPr2 = $this->productModel->getProductById($other5day[2]);
    if(!empty($getPr1->use_id)){
        if(empty($getPr2->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperserving1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmpty = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0 = $this->productModel->getProductById($other5day[0]);
    $getPr1 = $this->productModel->getProductById($other5day[1]);
    $getPr2 = $this->productModel->getProductById($other5day[2]);
    $getPr3 = $this->productModel->getProductById($other5day[3]);
    if(empty($getPr0->use_id)){
        if(empty($getPr1->use_id) && !empty($getPr2->use_id)){
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id) && empty($getPr3->use_id)){ 
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id)){                       
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2->use_id) && !empty($getPr3->use_id)){                     
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2->use_id) && empty($getPr3->use_id)){                        
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3->use_id)){                     
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(!empty($getPr0->use_id)){
           if(empty($getPr2->use_id) && !empty($getPr3->use_id)){
                        
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2->use_id) && empty($getPr3->use_id)){ 
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2->use_id)){ 
                       
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2->use_id)){
         if(empty($getPr3->use_id)){                         
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 ;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                     
            $minus =  $othersperserving0 + $othersperserving1;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3->use_id)){
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperserving = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0 = $this->productModel->getProductById($other5day[0]);
    $getPr1 = $this->productModel->getProductById($other5day[1]);
    $getPr2 = $this->productModel->getProductById($other5day[2]);
    $getPr3 = $this->productModel->getProductById($other5day[3]);
    $getPr4 = $this->productModel->getProductById($other5day[4]);
if(empty($getPr0->use_id)){
        if(empty($getPr1->use_id) && !empty($getPr2->use_id) && !empty($getPr3->use_id) && !empty($getPr4->use_id)){
            
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3 +$othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id) && empty($getPr3->use_id)&& empty($getPr4->use_id)){         
          
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id) && empty($getPr3->use_id)){                      
           
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus = $othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id)){  
            if(!empty($getPr3->use_id)){
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                       
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;                
            $minus =  $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                       
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;                
            $minus =  $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2->use_id) && !empty($getPr3->use_id)){     
            
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2->use_id) && empty($getPr3->use_id)){   
            if(!empty($getPr1->use_id)){ 
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3->use_id)){   
            if(!empty($getPr2->use_id)){
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4->use_id)){   
             
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                       
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1->use_id)){
          if(empty($getPr2->use_id) && !empty($getPr3->use_id) && !empty($getPr4->use_id)){
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus =  $othersperserving0 + $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3->use_id) ){   
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $minus =  $othersperserving0;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperserving = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4->use_id) ){
            if(!empty($getPr3->use_id)){
               
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2->use_id)){
         if(empty($getPr3->use_id)){   
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 ;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                     
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                     
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                     
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3->use_id)){
        if(empty($getPr4->use_id)){
           
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id; 
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id; 
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}


switch (count($other6day)) {
    case 1:
        // One Product with out use_id or with use_id
        $getPr0 = $this->productModel->getProductById($other6day[0]);
        $othersperservingUseEmpty = $caloriesperserving /100 * 20 /4; 
        $othersperserving = $caloriesperserving /100 * 20 /4;
    break;

    case 2:
        $getPr0 = $this->productModel->getProductById($other6day[0]);
        $getPr1 = $this->productModel->getProductById($other6day[1]);
    if(!empty($getPr1->use_id)){   
        // One with out use_id and one with use_is  
        $othersperserving = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $getPr1->use_id;
        $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($getPr1->use_id)){
        // Two products with out use_id
        $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $getPr0 = $this->productModel->getProductById($other6day[0]);
    $getPr1 = $this->productModel->getProductById($other6day[1]);
    $getPr2 = $this->productModel->getProductById($other6day[2]);
    if(!empty($getPr1->use_id)){
        if(empty($getPr2->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving = $caloriesperserving /100 * 20 /4;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $othersperserving1 = $caloriesperserving /100 * 20 /4  /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4  /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  $caloriesperserving /100  * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($getPr2->use_id)){    
            // Two product with out use_id and one with use_id  
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $othersperservingUseEmpty = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $getPr0 = $this->productModel->getProductById($other6day[0]);
    $getPr1 = $this->productModel->getProductById($other6day[1]);
    $getPr2 = $this->productModel->getProductById($other6day[2]);
    $getPr3 = $this->productModel->getProductById($other6day[3]);
    if(empty($getPr0->use_id)){
        if(empty($getPr1->use_id) && !empty($getPr2->use_id)){
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id) && empty($getPr3->use_id)){ 
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id)){                       
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2->use_id) && !empty($getPr3->use_id)){                     
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2->use_id) && empty($getPr3->use_id)){                        
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4;

        }elseif(empty($getPr3->use_id)){                     
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(!empty($getPr0->use_id)){
           if(empty($getPr2->use_id) && !empty($getPr3->use_id)){
                        
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr2->use_id) && empty($getPr3->use_id)){ 
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($getPr2->use_id)){ 
                       
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($getPr2->use_id)){
         if(empty($getPr3->use_id)){                         
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 ;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                     
            $minus =  $othersperserving0 + $othersperserving1;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($getPr3->use_id)){
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus);
            $othersperserving = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $getPr0 = $this->productModel->getProductById($other6day[0]);
    $getPr1 = $this->productModel->getProductById($other6day[1]);
    $getPr2 = $this->productModel->getProductById($other6day[2]);
    $getPr3 = $this->productModel->getProductById($other6day[3]);
    $getPr4 = $this->productModel->getProductById($other6day[4]);
if(empty($getPr0->use_id)){
        if(empty($getPr1->use_id) && !empty($getPr2->use_id) && !empty($getPr3->use_id) && !empty($getPr4->use_id)){
            
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3 +$othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id) && empty($getPr3->use_id)&& empty($getPr4->use_id)){         
          
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id) && empty($getPr3->use_id)){                      
           
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus = $othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($getPr1->use_id) && empty($getPr2->use_id)){  
            if(!empty($getPr3->use_id)){
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                       
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;                
            $minus =  $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4; 
            }else{
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                       
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;                
            $minus =  $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($getPr2->use_id) && !empty($getPr3->use_id)){     
            
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($getPr2->use_id) && empty($getPr3->use_id)){   
            if(!empty($getPr1->use_id)){ 
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4;
            }else{
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                      
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving1 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $othersperserving = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($getPr3->use_id)){   
            if(!empty($getPr2->use_id)){
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
            }else{
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $minus =  $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($getPr4->use_id)){   
             
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                       
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus =  $othersperserving1 + $othersperserving2 + $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($getPr1->use_id)){
          if(empty($getPr2->use_id) && !empty($getPr3->use_id) && !empty($getPr4->use_id)){
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus =  $othersperserving0 + $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($getPr3->use_id) ){   
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $minus =  $othersperserving0;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $othersperserving = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($getPr4->use_id) ){
            if(!empty($getPr3->use_id)){
               
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr4->use_id;
            $minus =  $othersperserving0 + $othersperserving2 + $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($getPr2->use_id)){
         if(empty($getPr3->use_id)){   
            
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 ;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;                     
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                     
            $othersperserving4 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id;                     
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving3 + $othersperserving4;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($getPr3->use_id)){
        if(empty($getPr4->use_id)){
           
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id;               
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving2;
            $othersperservingUseEmpty =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $othersperserving = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $othersperserving0 = $caloriesperserving /100 * 20 /4 /100 * $getPr0->use_id;
            $othersperserving1 = $caloriesperserving /100 * 20 /4 /100 * $getPr1->use_id;               
            $othersperserving2 = $caloriesperserving /100 * 20 /4 /100 * $getPr2->use_id; 
            $othersperserving3 = $caloriesperserving /100 * 20 /4 /100 * $getPr3->use_id; 
            $minus =  $othersperserving0 + $othersperserving1 + $othersperserving2 + $othersperserving3;
            $othersperservingUseEmpty =  $caloriesperserving /100 * 20 /4 - $minus;
            $othersperserving = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}