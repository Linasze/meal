<div id="headingSix">

    <div class="card-header">
        <div class="row">
   <div class="col-md-2 text-center" ><?php echo date('H:i',strtotime($data['user_settings']->go_sleep));?><br>Evening meal</div>
     <div class="col-md-3 text-center"> 
     <button class="btn btn-link text-secondary" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
       <font size="2"><?php echo $data['evening2Day']->title; ?></font>
     </button>
     </div>
   <div class="col-md-2 text-center mt-2"> <?php echo round($data['proteinsperservingUseEmptyevening']);?></div>
   <div class="col-md-2 text-center mt-2 "> <?php echo round($data['carbsperservingUseEmptyevening']);?></div>
   <div class="col-md-1 text-center mt-2"> <?php echo round($data['fatsperservingUseEmptyevening']);?></div>
   <div class="col-md-1 text-center mt-2"> <?php echo round($data['caloriesperservingEvening']);?></div>
   <div class="col-md-1 text-center mt-2"> <a href="#"><img src="<?php echo URLROOT;?>/public/img/repeat.svg" height="15" width="15"></a></div>
   </div>
</div>

    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
      <div class="card-body">
   <div class="row">
<div class="col-md-4 text-left">
<h5>Products</h5>
<?php for($i = 0; $i <=4; $i++): ?>
<?php foreach($data['products'] as $product) : ?>

<?php if($product->id == $data['proteinEvening2day'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['proteinEvening2day'][$i]){
            echo round($data['proteinsperservingUseEmptyevening']/2 * 100/ $product->protein).  " g". "<br>";
        } 
    }else{
 
        if(count($data['proteinEvening2day']) == 2 && empty($data['get_product1evening']->use_id)){
            if($product->id == $data['proteinEvening2day'][$i]){
                echo round($data['proteinsperservingUseEmptyevening']/2 * 100/ $product->protein).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['proteinEvening2day']) == 2 && !empty($data['get_product1evening']->use_id)){
            if($product->id == $data['proteinEvening2day'][$i]){
                echo round($data['proteinsperservingUseEmptyevening'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinEvening2day']) == 3 && !empty($data['get_product1evening']->use_id) && !empty($data['get_product2evening']->use_id)){
            if($product->id == $data['proteinEvening2day'][$i]){
                echo round($data['proteinsperservingUseEmptyevening'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinEvening2day']) == 3 && !empty($data['get_product2evening']->use_id)){
            if($product->id == $data['proteinEvening2day'][$i]){
                echo round($data['proteinsperservingUseEmptyevening']/2 * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinEvening2day']) == 4 && !empty($data['get_product3evening']->use_id)){
            if($product->id == $data['proteinEvening2day'][$i]){
                echo round($data['proteinsperservingUseEmptyevening'] * 100/ $product->protein).  " g". "<br>";
            }
        }else{
            if($product->id == $data['proteinEvening2day'][$i]){
                echo round($data['proteinsperservingUseEmptyevening'] * 100/ $product->protein).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['proteinEvening2day'][$i]){
      echo round($data['proteinsperservingevening'] /100 * $product->use_id). " g". "<br>";      
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['carbEvening2day'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['carbEvening2day'][$i]){
            echo round($data['carbsperservingUseEmptyevening']/2 * 100/ $product->carb).  " g". "<br>";
        } 
    }else{
 
        if(count($data['carbEvening2day']) == 2 && empty($data['getProduct1evening']->use_id)){
            if($product->id == $data['carbEvening2day'][$i]){
                echo round($data['carbsperservingUseEmptyevening']  * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['carbEvening2day']) == 2 && !empty($data['getProduct1evening']->use_id)){
            if($product->id == $data['carbEvening2day'][$i]){
                echo round($data['carbsperservingUseEmptyevening'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbEvening2day']) == 3 && !empty($data['getProduct1evening']->use_id) && !empty($data['getProduct2evening']->use_id)){
            if($product->id == $data['carbEvening2day'][$i]){
                echo round($data['carbsperservingUseEmptyevening'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbEvening2day']) == 3 && !empty($data['getProduct2evening']->use_id)){
            if($product->id == $data['carbEvening2day'][$i]){
                echo round($data['carbsperservingUseEmptyevening'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbEvening2day']) == 4 && !empty($data['getProduct3evening']->use_id)){
            if($product->id == $data['carbEvening2day'][$i]){
                echo round($data['carbsperservingUseEmptyevening'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['carbEvening2day'][$i]){
                echo round($data['carbsperservingUseEmptyevening'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['carbEvening2day'][$i]){
      echo round($data['carbsperservingevening']/100 * $product->use_id  * 100/ $product->carb). " g". "<br>";      
    }
}

?>

<?php  endif;?>


<?php if($product->id == $data['fatEvening2day'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['fatEvening2day'][$i]){
            echo round($data['fatsperservingUseEmptyevening']/2 * 100/ $product->fat).  " g". "<br>";
        } 
    }else{
 
        if(count($data['fatEvening2day']) == 2 && empty($data['getPro1evening']->use_id)){
            if($product->id == $data['faLuncht'][$i]){
                echo round($data['fatsperservingUseEmptyevening']  * 100/ $product->fat).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['fatEvening2day']) == 2 && !empty($data['getPro1evening']->use_id)){
            if($product->id == $data['fatEvening2day'][$i]){
                echo round($data['fatsperservingUseEmptyevening'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatEvening2day']) == 3 && !empty($data['getPro1']->use_id) && !empty($data['getPro2evening']->use_id)){
            if($product->id == $data['fatEvening2day'][$i]){
                echo round($data['fatsperservingUseEmptyevening'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatEvening2day']) == 3 && !empty($data['getPro2evening']->use_id)){
            if($product->id == $data['fatEvening2day'][$i]){
                echo round($data['fatsperservingUseEmptyevening'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatEvening2day']) == 4 && !empty($data['getPro3evening']->use_id)){
            if($product->id == $data['fatEvening2day'][$i]){
                echo round($data['fatsperservingUseEmptyevening'] * 100/ $product->fat).  " g". "<br>";
            }
        }else{
            if($product->id == $data['fatEvening2day'][$i]){
                echo round($data['fatsperservingUseEmptyevening'] * 100/ $product->fat).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['fatEvening2day'][$i]){
      echo round($data['fatsperservingevening']/100 * $product->use_id  * 100/ $product->fat). " g". "<br>";      
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['otherEvening2day'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['otherEvening2day'][$i]){
            echo round($data['othersperservingUseEmptyevening']/2 * 100/ $product->carb).  " g". "<br>";
        } 
    }else{
 
        if(count($data['otherEvening2day']) == 2 && empty($data['getPr1evening']->use_id)){
            if($product->id == $data['otherEvening2day'][$i]){
                echo round($data['othersperservingUseEmptyevening']/2 * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['otherEvening2day']) == 2 && !empty($data['getPr1evening']->use_id)){
            if($product->id == $data['otherEvening2day'][$i]){
                echo round($data['othersperservingUseEmptyevening'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherEvening2day']) == 3 && !empty($data['getPr1evening']->use_id) && !empty($data['getPr2evening']->use_id)){
            if($product->id == $data['otherEvening2day'][$i]){
                echo round($data['othersperservingUseEmptyevening'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherEvening2day']) == 3 && !empty($data['getPr2evening']->use_id)){
            if($product->id == $data['otherEveninglunch'][$i]){
                echo round($data['othersperservingUseEmptyevening']/2 * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherEvening2day']) == 4 && !empty($data['getPr3evening']->use_id)){
            if($product->id == $data['otherEvening2day'][$i]){
                echo round($data['othersperservingUseEmptyevening'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['otherEvening2day'][$i]){
                echo round($data['othersperservingUseEmptyevening'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['otherEvening2day'][$i]){
      echo round($data['othersperservingevening'] /100 * $product->use_id * 100/ $product->carb). " g". "<br>";      
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
        <?php echo $data['evening2Day']->recipe; ?>
    </font>
</div>
</div>
</div>

</div>
</div>
