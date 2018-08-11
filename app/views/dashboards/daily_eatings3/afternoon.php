<div id="headingFour">
   <div class="card-header">
        <div class="row">
   <div class="col-md-2 text-center"> 15:00<br> Afternoon meal</div>
     <div class="col-md-3">

     <button class="btn btn-link text-secondary" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
       <font size="2"><?php echo $data['afternoon4Day']->title; ?></font>
     </button>
   </div>
   <div class="col-md-2 text-center mt-2"> <?php echo round($data['proteinsperservingUseEmptyafternoon']);?></div>
   <div class="col-md-2 text-center mt-2"> <?php echo round($data['carbsperservingUseEmptyafternoon']);?></div>
   <div class="col-md-1 text-center mt-2"> <?php echo round($data['fatsperservingUseEmptyafternoon']);?></div>
   <div class="col-md-1 text-center mt-2"> <?php echo round($data['caloriesperservingAfternoon']);?></div>
   <div class="col-md-1 text-center mt-2"> <a href="#"><img src="<?php echo URLROOT;?>/public/img/repeat.svg" height="15" width="15"></a></div>
      </div>
      </div>

    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">

   <div class="card-body">
    <div class="row">
<div class="col-md-4 text-left">

    <h5>Products</h5>
<?php for($i = 0; $i <=4; $i++): ?>
<?php foreach($data['products'] as $product) : ?>

<?php if($product->id == $data['proteinAfternoon4day'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['proteinAfternoon4day'][$i]){
            echo round($data['proteinsperservingUseEmptyafternoon']/2 * 100/ $product->protein).  " g". "<br>";
        } 
    }else{
 
        if(count($data['proteinAfternoon4day']) == 2 && empty($data['get_product1afternoon']->use_id)){
            if($product->id == $data['proteinAfternoon4day'][$i]){
                echo round($data['proteinsperservingUseEmptyafternoon']/2 * 100/ $product->protein).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['proteinAfternoon4day']) == 2 && !empty($data['get_product1afternoon']->use_id)){
            if($product->id == $data['proteinAfternoon4day'][$i]){
                echo round($data['proteinsperservingUseEmptyafternoon'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinAfternoon4day']) == 3 && !empty($data['get_product1afternoon']->use_id) && !empty($data['get_product2afternoon']->use_id)){
            if($product->id == $data['proteinAfternoon4day'][$i]){
                echo round($data['proteinsperservingUseEmptyafternoon'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinAfternoon4day']) == 3 && !empty($data['get_product2afternoon']->use_id)){
            if($product->id == $data['proteinAfternoon4day'][$i]){
                echo round($data['proteinsperservingUseEmptyafternoon']/2 * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinAfternoon4day']) == 4 && !empty($data['get_product3afternoon']->use_id)){
            if($product->id == $data['proteinAfternoon4day'][$i]){
                echo round($data['proteinsperservingUseEmptyafternoon'] * 100/ $product->protein).  " g". "<br>";
            }
        }else{
            if($product->id == $data['proteinAfternoon4day'][$i]){
                echo round($data['proteinsperservingUseEmptyafternoon'] * 100/ $product->protein).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['proteinAfternoon4day'][$i]){
      echo round($data['proteinsperservingafternoon'] /100 * $product->use_id). " g". "<br>";      
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['carbAfternoon4day'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['carbAfternoon4day'][$i]){
            echo round($data['carbsperservingUseEmptyafternoon']/2 * 100/ $product->carb).  " g". "<br>";
        } 
    }else{
 
        if(count($data['carbAfternoon4day']) == 2 && empty($data['getProduct1afternoon']->use_id)){
            if($product->id == $data['carbAfternoon4day'][$i]){
                echo round($data['carbsperservingUseEmptyafternoon']  * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['carbAfternoon4day']) == 2 && !empty($data['getProduct1afternoon']->use_id)){
            if($product->id == $data['carbAfternoon4day'][$i]){
                echo round($data['carbsperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbAfternoon4day']) == 3 && !empty($data['getProduct1afternoon']->use_id) && !empty($data['getProduct2afternoon']->use_id)){
            if($product->id == $data['carbAfternoon4day'][$i]){
                echo round($data['carbsperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbAfternoon4day']) == 3 && !empty($data['getProduct2afternoon']->use_id)){
            if($product->id == $data['carbAfternoon4day'][$i]){
                echo round($data['carbsperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbAfternoon4day']) == 4 && !empty($data['getProduct3afternoon']->use_id)){
            if($product->id == $data['carbAfternoon4day'][$i]){
                echo round($data['carbsperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['carbAfternoon4day'][$i]){
                echo round($data['carbsperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['carbAfternoon4day'][$i]){
      echo round($data['carbsperservingafternoon']/100 * $product->use_id  * 100/ $product->carb). " g". "<br>";      
    }
}

?>

<?php  endif;?>


<?php if($product->id == $data['fatAfternoon4day'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['fatAfternoon4day'][$i]){
            echo round($data['fatsperservingUseEmptyafternoon']/2 * 100/ $product->fat).  " g". "<br>";
        } 
    }else{
 
        if(count($data['fatAfternoon4day']) == 2 && empty($data['getPro1afternoon']->use_id)){
            if($product->id == $data['faLuncht'][$i]){
                echo round($data['fatsperservingUseEmptyafternoon']  * 100/ $product->fat).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['fatAfternoon4day']) == 2 && !empty($data['getPro1afternoon']->use_id)){
            if($product->id == $data['fatAfternoon4day'][$i]){
                echo round($data['fatsperservingUseEmptyafternoon'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatAfternoon4day']) == 3 && !empty($data['getPro1']->use_id) && !empty($data['getPro2afternoon']->use_id)){
            if($product->id == $data['fatAfternoon4day'][$i]){
                echo round($data['fatsperservingUseEmptyafternoon'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatAfternoon4day']) == 3 && !empty($data['getPro2afternoon']->use_id)){
            if($product->id == $data['fatAfternoon4day'][$i]){
                echo round($data['fatsperservingUseEmptyafternoon'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatAfternoon4day']) == 4 && !empty($data['getPro3afternoon']->use_id)){
            if($product->id == $data['fatAfternoon4day'][$i]){
                echo round($data['fatsperservingUseEmptyafternoon'] * 100/ $product->fat).  " g". "<br>";
            }
        }else{
            if($product->id == $data['fatAfternoon4day'][$i]){
                echo round($data['fatsperservingUseEmptyafternoon'] * 100/ $product->fat).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['fatAfternoon4day'][$i]){
      echo round($data['fatsperservingafternoon']/100 * $product->use_id  * 100/ $product->fat). " g". "<br>";      
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['otherAfternoon4day'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['otherAfternoon4day'][$i]){
            echo round($data['othersperservingUseEmptyafternoon']/2 * 100/ $product->carb).  " g". "<br>";
        } 
    }else{
 
        if(count($data['otherAfternoon4day']) == 2 && empty($data['getPr1afternoon']->use_id)){
            if($product->id == $data['otherAfternoon4day'][$i]){
                echo round($data['othersperservingUseEmptyafternoon']/2 * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['otherAfternoon4day']) == 2 && !empty($data['getPr1afternoon']->use_id)){
            if($product->id == $data['otherAfternoon4day'][$i]){
                echo round($data['othersperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherAfternoon4day']) == 3 && !empty($data['getPr1afternoon']->use_id) && !empty($data['getPr2afternoon']->use_id)){
            if($product->id == $data['otherAfternoon4day'][$i]){
                echo round($data['othersperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherAfternoon4day']) == 3 && !empty($data['getPr2afternoon']->use_id)){
            if($product->id == $data['otherAfternoonlunch'][$i]){
                echo round($data['othersperservingUseEmptyafternoon']/2 * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherAfternoon4day']) == 4 && !empty($data['getPr3afternoon']->use_id)){
            if($product->id == $data['otherAfternoon4day'][$i]){
                echo round($data['othersperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['otherAfternoon4day'][$i]){
                echo round($data['othersperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['otherAfternoon4day'][$i]){
      echo round($data['othersperservingafternoon'] /100 * $product->use_id * 100/ $product->carb). " g". "<br>";      
    }
}
?>

<?php  endif;?>

<?php endforeach;?>
<?php endfor;?>
</div>

<div class="col-md-8 text-left">
    <h5>Recipe</h5>
    <font size="2">
        <?php echo $data['afternoon4Day']->recipe; ?>
    </font>
</div>
</div>
</div>

</div>
</div>
