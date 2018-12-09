<div id="headingSix">

    <div class="card-header">
        <div class="row">
        <div class="col-lg-2 d-none d-lg-block text-center" ><?php echo date('h:i',strtotime($data['user_settings']->wake_up)) + 15 . ":00";?><br>Evening meal</div>   
     <div class="col-lg-3 d-none d-lg-block text-center"> 
     <button class="btn btn-link text-secondary float-left" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
     <img src="<?php echo URLROOT;?>/public/img/arrow-down.svg" height="15" weight="15">
       <font size="2"><?php echo $data['evening6Day']->title; ?></font>
     </button>
     </div>
   <div class="col-lg-2 d-none d-lg-block text-center mt-2"> <?php echo round($data['proteinsperservingUseEmptyevening']);?></div>
   <div class="col-lg-2 d-none d-lg-block text-center mt-2 "> <?php echo round($data['carbsperservingUseEmptyevening']);?></div>
   <div class="col-lg-1 d-none d-lg-block text-center mt-2"> <?php echo round($data['fatsperservingUseEmptyevening']);?></div>
   <div class="col-lg-1 d-none d-lg-block text-center mt-2"> <?php echo round($data['caloriesperservingEvening']);?></div>
   <div class="col-lg-1 d-none d-lg-block text-center mt-2"> <a href="#"><img src="<?php echo URLROOT;?>/public/img/repeat.svg" height="15" width="15"></a></div>
   </div>
   <div class="col-12 d-block d-sm-block d-md-none pt-2">
<div class="col-12">Evening meal<br>Time: <?php echo date('h:i',strtotime($data['user_settings']->wake_up)) + 15 . ":00";?></div>
    <div class="col-12"><?php echo $data['evening6Day']->title; ?></div>
<div class="col-12">Protein: <?php echo round($data['proteinsperservingUseEmptyevening']);?></div>
<div class="col-12">Carb: <?php echo round($data['carbsperservingUseEmptyevening']);?></div>
<div class="col-12">Fat: <?php echo round($data['fatsperservingUseEmptyevening']);?></div>
<div class="col-12">Kcal: <?php echo round($data['caloriesperservingEvening']);?></div>
<div class="col-12">Recipe: <input type="image" src="<?php echo URLROOT;?>/public/img/eye-solid.svg" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix" height="25" width="25"></div>
</div>
     <div class="col-md-12 d-none d-md-block d-lg-none">
        <div class="row">
        <div class="col-md-12">Evening Meal</div>
        <div class="col-md-12"><?php echo $data['evening6Day']->title; ?></div>
        <hr>
         <div class="col-md-3">Time</div>
         <div class="col-md-2">Protein</div>
         <div class="col-md-2">Carb</div>
         <div class="col-md-2">Fat</div>
         <div class="col-md-3">Kcal</div>
         <div class="col-md-3"><?php echo date('h:i',strtotime($data['user_settings']->wake_up)) + 15 . ":00";?></div>
         <div class="col-md-2"><?php echo round($data['proteinsperservingUseEmptyevening']);?></div>
         <div class="col-md-2"><?php echo round($data['carbsperservingUseEmptyevening']);?></div>
         <div class="col-md-2"><?php echo round($data['fatsperservingUseEmptyevening']);?></div>
         <div class="col-md-3"><?php echo round($data['caloriesperservingEvening']);?></div>
         <hr>
         <div class="col-md-6">Recipe</div>
         <div class="col-md-6">Change</div>
         <div class="col-md-6"> <input type="image" src="<?php echo URLROOT;?>/public/img/eye-solid.svg" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix" height="25" width="25"></div>
          <div class="col-md-6"> <a href="#"><img src="<?php echo URLROOT;?>/public/img/repeat.svg" height="15" width="15"></a></div>
<hr>
         </div>
     </div>
      </div>

    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
      <div class="card-body">
   <div class="row">
<div class="col-md-4 col- text-left">
<h5>Products</h5>
<?php for($i = 0; $i <=4; $i++): ?>
<?php foreach($data['products'] as $product) : ?>

<?php if($product->id == $data['proteinEvening6day'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['proteinEvening6day'][$i]){
            echo round($data['proteinsperservingUseEmptyevening']/2 * 100/ $product->protein).  " g". "<br>";
        } 
    }else{
 
        if(count($data['proteinEvening6day']) == 2 && empty($data['get_product1evening']->use_id)){
            if($product->id == $data['proteinEvening6day'][$i]){
                echo round($data['proteinsperservingUseEmptyevening']/2 * 100/ $product->protein).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['proteinEvening6day']) == 2 && !empty($data['get_product1evening']->use_id)){
            if($product->id == $data['proteinEvening6day'][$i]){
                echo round($data['proteinsperservingUseEmptyevening'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinEvening6day']) == 3 && !empty($data['get_product1evening']->use_id) && !empty($data['get_product2evening']->use_id)){
            if($product->id == $data['proteinEvening6day'][$i]){
                echo round($data['proteinsperservingUseEmptyevening'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinEvening6day']) == 3 && !empty($data['get_product2evening']->use_id)){
            if($product->id == $data['proteinEvening6day'][$i]){
                echo round($data['proteinsperservingUseEmptyevening']/2 * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinEvening6day']) == 4 && !empty($data['get_product3evening']->use_id)){
            if($product->id == $data['proteinEvening6day'][$i]){
                echo round($data['proteinsperservingUseEmptyevening'] * 100/ $product->protein).  " g". "<br>";
            }
        }else{
            if($product->id == $data['proteinEvening6day'][$i]){
                echo round($data['proteinsperservingUseEmptyevening'] * 100/ $product->protein).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['proteinEvening6day'][$i]){
      echo round($data['proteinsperservingevening'] /100 * $product->use_id). " g". "<br>";      
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['carbEvening6day'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['carbEvening6day'][$i]){
            echo round($data['carbsperservingUseEmptyevening']/2 * 100/ $product->carb).  " g". "<br>";
        } 
    }else{
 
        if(count($data['carbEvening6day']) == 2 && empty($data['getProduct1evening']->use_id)){
            if($product->id == $data['carbEvening6day'][$i]){
                echo round($data['carbsperservingUseEmptyevening']  * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['carbEvening6day']) == 2 && !empty($data['getProduct1evening']->use_id)){
            if($product->id == $data['carbEvening6day'][$i]){
                echo round($data['carbsperservingUseEmptyevening'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbEvening6day']) == 3 && !empty($data['getProduct1evening']->use_id) && !empty($data['getProduct2evening']->use_id)){
            if($product->id == $data['carbEvening6day'][$i]){
                echo round($data['carbsperservingUseEmptyevening'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbEvening6day']) == 3 && !empty($data['getProduct2evening']->use_id)){
            if($product->id == $data['carbEvening6day'][$i]){
                echo round($data['carbsperservingUseEmptyevening'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbEvening6day']) == 4 && !empty($data['getProduct3evening']->use_id)){
            if($product->id == $data['carbEvening6day'][$i]){
                echo round($data['carbsperservingUseEmptyevening'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['carbEvening6day'][$i]){
                echo round($data['carbsperservingUseEmptyevening'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['carbEvening6day'][$i]){
      echo round($data['carbsperservingevening']/100 * $product->use_id  * 100/ $product->carb). " g". "<br>";      
    }
}

?>

<?php  endif;?>


<?php if($product->id == $data['fatEvening6day'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['fatEvening6day'][$i]){
            echo round($data['fatsperservingUseEmptyevening']/2 * 100/ $product->fat).  " g". "<br>";
        } 
    }else{
 
        if(count($data['fatEvening6day']) == 2 && empty($data['getPro1evening']->use_id)){
            if($product->id == $data['faLuncht'][$i]){
                echo round($data['fatsperservingUseEmptyevening']  * 100/ $product->fat).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['fatEvening6day']) == 2 && !empty($data['getPro1evening']->use_id)){
            if($product->id == $data['fatEvening6day'][$i]){
                echo round($data['fatsperservingUseEmptyevening'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatEvening6day']) == 3 && !empty($data['getPro1']->use_id) && !empty($data['getPro2evening']->use_id)){
            if($product->id == $data['fatEvening6day'][$i]){
                echo round($data['fatsperservingUseEmptyevening'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatEvening6day']) == 3 && !empty($data['getPro2evening']->use_id)){
            if($product->id == $data['fatEvening6day'][$i]){
                echo round($data['fatsperservingUseEmptyevening'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatEvening6day']) == 4 && !empty($data['getPro3evening']->use_id)){
            if($product->id == $data['fatEvening6day'][$i]){
                echo round($data['fatsperservingUseEmptyevening'] * 100/ $product->fat).  " g". "<br>";
            }
        }else{
            if($product->id == $data['fatEvening6day'][$i]){
                echo round($data['fatsperservingUseEmptyevening'] * 100/ $product->fat).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['fatEvening6day'][$i]){
      echo round($data['fatsperservingevening']/100 * $product->use_id  * 100/ $product->fat). " g". "<br>";      
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['otherEvening6day'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['otherEvening6day'][$i]){
            echo round($data['othersperservingUseEmptyevening']/2 * 100/ $product->carb).  " g". "<br>";
        } 
    }else{
 
        if(count($data['otherEvening6day']) == 2 && empty($data['getPr1evening']->use_id)){
            if($product->id == $data['otherEvening6day'][$i]){
                echo round($data['othersperservingUseEmptyevening']/2 * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['otherEvening6day']) == 2 && !empty($data['getPr1evening']->use_id)){
            if($product->id == $data['otherEvening6day'][$i]){
                echo round($data['othersperservingUseEmptyevening'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherEvening6day']) == 3 && !empty($data['getPr1evening']->use_id) && !empty($data['getPr2evening']->use_id)){
            if($product->id == $data['otherEvening6day'][$i]){
                echo round($data['othersperservingUseEmptyevening'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherEvening6day']) == 3 && !empty($data['getPr2evening']->use_id)){
            if($product->id == $data['otherEveninglunch'][$i]){
                echo round($data['othersperservingUseEmptyevening']/2 * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherEvening6day']) == 4 && !empty($data['getPr3evening']->use_id)){
            if($product->id == $data['otherEvening6day'][$i]){
                echo round($data['othersperservingUseEmptyevening'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['otherEvening6day'][$i]){
                echo round($data['othersperservingUseEmptyevening'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['otherEvening6day'][$i]){
      echo round($data['othersperservingevening'] /100 * $product->use_id * 100/ $product->carb). " g". "<br>";      
    }
}
?>

<?php  endif;?>

<?php endforeach;?>
<?php endfor;?>
</div>

<div class="col-md-8 col- text-left">
    <h5>Recipe</h5>
    <font size="2">
        <?php echo $data['evening6Day']->recipe; ?>
    </font>
</div>
</div>
</div>

</div>
</div>
