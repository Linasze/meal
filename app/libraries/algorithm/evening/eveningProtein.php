<?php
 switch (count($proteinEvening)) {
    case 1:
        // One Product with out use_id or with use_id
        $get_product0evening = $this->productModel->getProductById($proteinEvening[0]);
        $proteinsperservingUseEmptyevening = $caloriesperserving /100 * 20 /4; 
        $proteinsperservingevening = $caloriesperserving /100 * 20 /4;
    break;

    case 2:
        $get_product0evening = $this->productModel->getProductById($proteinEvening[0]);
        $get_product1evening = $this->productModel->getProductById($proteinEvening[1]);
    if(!empty($get_product1evening->use_id)){   
        // One with out use_id and one with use_is  
        $proteinsperservingevening = $caloriesperserving /100  * 20 /4;
        $minus = $caloriesperserving /100  * 20 /4 / 100  * $get_product1evening->use_id;
        $proteinsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus; 
       
    }elseif(empty($get_product1evening->use_id)){
        // Two products with out use_id
        $proteinsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4;
    }
    break;

    case 3:
    $get_product0evening = $this->productModel->getProductById($proteinEvening[0]);
    $get_product1evening = $this->productModel->getProductById($proteinEvening[1]);
    $get_product2evening = $this->productModel->getProductById($proteinEvening[2]);
    if(!empty($get_product1evening->use_id)){
        if(empty($get_product2evening->use_id)){     
            // One with out use_id one with use_id and without use_id                       
            $minus = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;
            $proteinsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 /2 - $minus;
        }else{  
            // One without use_id two with use_id                        
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4  /100 * $get_product1evening->use_id;
            $proteinsperservingevening2 = $caloriesperserving /100 * 20 /4  /100 * $get_product2evening->use_id;
            $minus =  $proteinsperservingevening1 + $proteinsperservingevening2;
            $proteinsperservingUseEmptyevening =  $caloriesperserving /100  * 20 /4 - $minus;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;                        
        }
    }elseif(empty($get_product2evening->use_id)){    
            // Two product with out use_id and one with use_id  
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;
            $proteinsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2evening->use_id;
            $minus =  $proteinsperservingevening1 + $proteinsperservingevening2;
            $proteinsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;                     
                        
    }else{
             //Three products with out use_id
            $proteinsperservingUseEmptyevening = $caloriesperserving /100 * 20/4 /3; 
    }
    
    break;

    case 4:
    $get_product0evening = $this->productModel->getProductById($proteinEvening[0]);
    $get_product1evening = $this->productModel->getProductById($proteinEvening[1]);
    $get_product2evening = $this->productModel->getProductById($proteinEvening[2]);
    $get_product3evening = $this->productModel->getProductById($proteinEvening[3]);
    if(empty($get_product0evening->use_id)){
        if(empty($get_product1evening->use_id) && !empty($get_product2evening->use_id)){
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;
            $proteinsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2evening->use_id;
            $proteinsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3evening->use_id;
            $minus =  $proteinsperservingevening1 + $proteinsperservingevening2 + $proteinsperservingevening3;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;  
               
        }elseif(empty($get_product1evening->use_id) && empty($get_product2evening->use_id) && empty($get_product3evening->use_id)){ 
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;
            $proteinsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2evening->use_id;
            $proteinsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3evening->use_id;
            $minus =  $proteinsperservingevening1 + $proteinsperservingevening2 + $proteinsperservingevening3;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4; 
       
        }elseif(empty($get_product1evening->use_id) && empty($get_product2evening->use_id)){                       
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;
            $proteinsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2evening->use_id;
            $proteinsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3evening->use_id;
            $minus =  $proteinsperservingevening1 + $proteinsperservingevening2 + $proteinsperservingevening3;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2evening->use_id) && !empty($get_product3evening->use_id)){                     
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;                      
            $proteinsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3evening->use_id;
            $minus =  $proteinsperservingevening1 + $proteinsperservingevening3;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2evening->use_id) && empty($get_product3evening->use_id)){                        
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;                      
            $proteinsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3evening->use_id;
            $minus =  $proteinsperservingevening1 + $proteinsperservingevening3;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;

        }elseif(empty($get_product3evening->use_id)){                     
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;
            $proteinsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2evening->use_id;
            $minus =  $proteinsperservingevening1 + $proteinsperservingevening2;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;
            $proteinsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2evening->use_id;
            $proteinsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3evening->use_id;
            $minus =  $proteinsperservingevening1 + $proteinsperservingevening2 + $proteinsperservingevening3;
            $proteinsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;  
        }
             
    }elseif(empty($get_product1evening->use_id)){
          if(empty($get_product2evening->use_id) && !empty($get_product3evening->use_id)){
                        
            $proteinsperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0evening->use_id;
            $proteinsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2evening->use_id;
            $proteinsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3evening->use_id;
            $minus =  $proteinsperservingevening0 + $proteinsperservingevening2 + $proteinsperservingevening3;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product2evening->use_id) && empty($get_product3evening->use_id)){ 
            $proteinsperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0evening->use_id;
            $proteinsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2evening->use_id;
            $proteinsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3evening->use_id;
            $minus =  $proteinsperservingevening0 + $proteinsperservingevening2 + $proteinsperservingevening3;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;  

        }elseif(!empty($get_product2evening->use_id)){ 
                       
            $proteinsperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0evening->use_id;
            $proteinsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2evening->use_id;
            $proteinsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3evening->use_id;
            $minus =  $proteinsperservingevening0 + $proteinsperservingevening2 + $proteinsperservingevening3;
            $proteinsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
            
            $proteinsperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0evening->use_id;
            $proteinsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2evening->use_id;
            $proteinsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3evening->use_id;
            $minus =  $proteinsperservingevening0 + $proteinsperservingevening2;
            $proteinsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;                             
        }
     
    }elseif(empty($get_product2evening->use_id)){
         if(empty($get_product3evening->use_id)){                         
            $proteinsperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0evening->use_id;
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;               
            $minus =  $proteinsperservingevening0 + $proteinsperservingevening1 ;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
            $proteinsperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0evening->use_id;
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;                     
            $minus =  $proteinsperservingevening0 + $proteinsperservingevening1;
            $proteinsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;                             
        }
    
    }elseif(empty($get_product3evening->use_id)){
            $proteinsperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0evening->use_id;
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;               
            $proteinsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2evening->use_id;               
            $minus =  $proteinsperservingevening0 + $proteinsperservingevening1 + $proteinsperservingevening2;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus);
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;   
    }
   
    break;

    case 5:
    $get_product0evening = $this->productModel->getProductById($proteinEvening[0]);
    $get_product1evening = $this->productModel->getProductById($proteinEvening[1]);
    $get_product2evening = $this->productModel->getProductById($proteinEvening[2]);
    $get_product3evening = $this->productModel->getProductById($proteinEvening[3]);
    $get_product4evening = $this->productModel->getProductById($proteinEvening[4]);
if(empty($get_product0evening->use_id)){
        if(empty($get_product1evening->use_id) && !empty($get_product2evening->use_id) && !empty($get_product3evening->use_id) && !empty($get_product4evening->use_id)){
            
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;
            $proteinsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2evening->use_id;
            $proteinsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3evening->use_id;
            $proteinsperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4evening->use_id;
            $minus =  $proteinsperservingevening1 + $proteinsperservingevening2 + $proteinsperservingevening3 +$proteinsperservingevening4;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product1evening->use_id) && empty($get_product2evening->use_id) && empty($get_product3evening->use_id)&& empty($get_product4evening->use_id)){         
          
            $proteinsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 /5;
            
        }elseif(empty($get_product1evening->use_id) && empty($get_product2evening->use_id) && empty($get_product3evening->use_id)){                      
           
            $proteinsperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4evening->use_id;
            $minus = $proteinsperservingevening4;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4; 
        
        }elseif(empty($get_product1evening->use_id) && empty($get_product2evening->use_id)){  
            if(!empty($get_product3evening->use_id)){
            $proteinsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3evening->use_id;                       
            $proteinsperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4evening->use_id;                
            $minus =  $proteinsperservingevening3 + $proteinsperservingevening4;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4; 
            }else{
            $proteinsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3evening->use_id;                       
            $proteinsperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4evening->use_id;                
            $minus =  $proteinsperservingevening3 + $proteinsperservingevening4;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4; 
            }   

        }elseif(empty($get_product2evening->use_id) && !empty($get_product3evening->use_id)){     
            
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;                      
            $proteinsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3evening->use_id;
            $minus =  $proteinsperservingevening1 + $proteinsperservingevening3;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4; 

        }elseif(empty($get_product2evening->use_id) && empty($get_product3evening->use_id)){   
            if(!empty($get_product1evening->use_id)){ 
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;                      
            $proteinsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3evening->use_id;
            $minus =  $proteinsperservingevening1 + $proteinsperservingevening3;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;
            }else{
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;                      
            $proteinsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3evening->use_id;
            $minus =  $proteinsperservingevening1 + $proteinsperservingevening3;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /3;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;
            }    

        }elseif(empty($get_product3evening->use_id)){   
            if(!empty($get_product2evening->use_id)){
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;
            $proteinsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2evening->use_id;
            $minus =  $proteinsperservingevening1 + $proteinsperservingevening2;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /4;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;   
            }else{
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;
            $proteinsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2evening->use_id;
            $minus =  $proteinsperservingevening1 + $proteinsperservingevening2;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus) /2;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;   
            }
        }elseif(empty($get_product4evening->use_id)){   
             
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;
            $proteinsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2evening->use_id;
            $proteinsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3evening->use_id;                       
            $minus =  $proteinsperservingevening1 + $proteinsperservingevening2 + $proteinsperservingevening3;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;  
           
        }else{
          
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;
            $proteinsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2evening->use_id;
            $proteinsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3evening->use_id;
            $proteinsperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4evening->use_id;
            $minus =  $proteinsperservingevening1 + $proteinsperservingevening2 + $proteinsperservingevening3 + $proteinsperservingevening4;
            $proteinsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;  
        }
             
}elseif(empty($get_product1evening->use_id)){
          if(empty($get_product2evening->use_id) && !empty($get_product3evening->use_id) && !empty($get_product4evening->use_id)){
            
            $proteinsperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0evening->use_id;
            $proteinsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3evening->use_id;
            $proteinsperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4evening->use_id;
            $minus =  $proteinsperservingevening0 + $proteinsperservingevening3 + $proteinsperservingevening4;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;  

        }elseif(empty($get_product3evening->use_id) ){   
            
            $proteinsperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0evening->use_id;
            $minus =  $proteinsperservingevening0;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/4;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;    
             

        }elseif(empty($get_product4evening->use_id) ){
            if(!empty($get_product3evening->use_id)){
               
            $proteinsperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0evening->use_id;
            $proteinsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2evening->use_id;
            $proteinsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3evening->use_id;
            $minus =  $proteinsperservingevening0 + $proteinsperservingevening2 + $proteinsperservingevening3;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;    
            }                 
           
        }else{
            
            $proteinsperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0evening->use_id;
            $proteinsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2evening->use_id;
            $proteinsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3evening->use_id;
            $proteinsperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $get_product4evening->use_id;
            $minus =  $proteinsperservingevening0 + $proteinsperservingevening2 + $proteinsperservingevening3 + $proteinsperservingevening4;
            $proteinsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;  
        }
     
}elseif(empty($get_product2evening->use_id)){
         if(empty($get_product3evening->use_id)){   
            
            $proteinsperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0evening->use_id;
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;               
            $minus =  $proteinsperservingevening0 + $proteinsperservingevening1 ;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/3;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
           
            $proteinsperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0evening->use_id;
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;                     
            $proteinsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3evening->use_id;                     
            $proteinsperservingevening4 = $caloriesperserving /100 * 20 /4 /100 * $get_product3evening->use_id;                     
            $minus =  $proteinsperservingevening0 + $proteinsperservingevening1 + $proteinsperservingevening3 + $proteinsperservingevening4;
            $proteinsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;                             
        }
    
}elseif(empty($get_product3evening->use_id)){
        if(empty($get_product4evening->use_id)){
           
            $proteinsperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0evening->use_id;
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;               
            $proteinsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2evening->use_id;               
            $minus =  $proteinsperservingevening0 + $proteinsperservingevening1 + $proteinsperservingevening2;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;   
        }else{
          
            $proteinsperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0evening->use_id;
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;               
            $proteinsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2evening->use_id;               
            $minus =  $proteinsperservingevening0 + $proteinsperservingevening1 + $proteinsperservingevening2;
            $proteinsperservingUseEmptyevening =  ($caloriesperserving /100 * 20 /4 - $minus)/2;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;   
        }
    
}else{ 
            $proteinsperservingevening0 = $caloriesperserving /100 * 20 /4 /100 * $get_product0evening->use_id;
            $proteinsperservingevening1 = $caloriesperserving /100 * 20 /4 /100 * $get_product1evening->use_id;               
            $proteinsperservingevening2 = $caloriesperserving /100 * 20 /4 /100 * $get_product2evening->use_id; 
            $proteinsperservingevening3 = $caloriesperserving /100 * 20 /4 /100 * $get_product3evening->use_id; 
            $minus =  $proteinsperservingevening0 + $proteinsperservingevening1 + $proteinsperservingevening2 + $proteinsperservingevening3;
            $proteinsperservingUseEmptyevening =  $caloriesperserving /100 * 20 /4 - $minus;
            $proteinsperservingevening = $caloriesperserving /100 * 20 /4;              

}
            break;
    
}