<div id="headingFour">
   <div class="card-header">
        <div class="row">
        <div class="col-lg-2 d-none d-lg-block text-center"><?php echo date('h:i',strtotime($data['user_settings']->wake_up)) + 9 . ":00";?><br> Afternoon meal</div>
      <div class="col-lg-3 d-none d-lg-block">
     <button class="btn btn-link text-secondary float-left" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
     <img src="<?php echo URLROOT;?>/public/img/arrow-down.svg" height="15" weight="15">
       <font size="2"><?php echo $data['afternoon7Day']->title; ?></font>
     </button>
   </div>
   <div class="col-lg-2 d-none d-lg-block text-center mt-2"> <?php echo round($data['proteinsperservingUseEmptyafternoon']);?></div>
   <div class="col-lg-2 d-none d-lg-block text-center mt-2"> <?php echo round($data['carbsperservingUseEmptyafternoon']);?></div>
   <div class="col-lg-1 d-none d-lg-block text-center mt-2"> <?php echo round($data['fatsperservingUseEmptyafternoon']);?></div>
   <div class="col-lg-1 d-none d-lg-block text-center mt-2"> <?php echo round($data['caloriesperservingAfternoon']);?></div>
   <div class="col-lg-1 d-none d-lg-block text-center mt-2"> <a href="#"><img src="<?php echo URLROOT;?>/public/img/repeat.svg" height="15" width="15"></a></div>
      </div>
      <div class="col-12 d-block d-sm-block d-md-none pt-2">
<div class="col-12">Afternoon meal<br>Time: <?php echo date('h:i',strtotime($data['user_settings']->wake_up)) + 9 . ":00";?></div>
    <div class="col-12"><?php echo $data['afternoon7Day']->title; ?></div>
<div class="col-12">Protein: <?php echo round($data['proteinsperservingUseEmptyafternoon']);?></div>
<div class="col-12">Carb: <?php echo round($data['carbsperservingUseEmptyafternoon']);?></div>
<div class="col-12">Fat: <?php echo round($data['fatsperservingUseEmptyafternoon']);?></div>
<div class="col-12">Kcal: <?php echo round($data['caloriesperservingAfternoon']);?></div>
<div class="col-12">Recipe: <input type="image" src="<?php echo URLROOT;?>/public/img/eye-solid.svg" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour" height="25" width="25"></div>
</div>
     <div class="col-md-12 d-none d-md-block d-lg-none">
        <div class="row">
        <div class="col-md-12">Afternoon meal</div>
        <div class="col-md-12"><?php echo $data['afternoon7Day']->title; ?></div>
        <hr>
         <div class="col-md-3">Time</div>
         <div class="col-md-2">Protein</div>
         <div class="col-md-2">Carb</div>
         <div class="col-md-2">Fat</div>
         <div class="col-md-3">Kcal</div>
         <div class="col-md-3"><?php echo date('h:i',strtotime($data['user_settings']->wake_up)) + 9 . ":00";?></div>
         <div class="col-md-2"><?php echo round($data['proteinsperservingUseEmptyafternoon']);?></div>
         <div class="col-md-2"><?php echo round($data['carbsperservingUseEmptyafternoon']);?></div>
         <div class="col-md-2"><?php echo round($data['fatsperservingUseEmptyafternoon']);?></div>
         <div class="col-md-3"><?php echo round($data['caloriesperservingAfternoon']);?></div>
         <hr>

         <div class="col-md-6">Recipe</div>
         <div class="col-md-6">Change</div>
         <div class="col-md-6"><input type="image" src="<?php echo URLROOT;?>/public/img/eye-solid.svg" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour" height="25" width="25"></div>
          <div class="col-md-6"><a href="#"><img src="<?php echo URLROOT;?>/public/img/repeat.svg" height="15" width="15"></a></div>
<hr>
         </div>
     </div>
      </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">

   <div class="card-body">
    <div class="row">
<div class="col-md-4 col- text-left">

    <h5>Products</h5>
<?php for($i = 0; $i <=4; $i++): ?>
<?php foreach($data['products'] as $product) : ?>

<?php if($product->id == $data['proteinAfternoon7day'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['proteinAfternoon7day'][$i]){
            echo round($data['proteinsperservingUseEmptyafternoon']/2 * 100/ $product->protein).  " g". "<br>";
        } 
    }else{
 
        if(count($data['proteinAfternoon7day']) == 2 && empty($data['get_product1afternoon']->use_id)){
            if($product->id == $data['proteinAfternoon7day'][$i]){
                echo round($data['proteinsperservingUseEmptyafternoon']/2 * 100/ $product->protein).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['proteinAfternoon7day']) == 2 && !empty($data['get_product1afternoon']->use_id)){
            if($product->id == $data['proteinAfternoon7day'][$i]){
                echo round($data['proteinsperservingUseEmptyafternoon'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinAfternoon7day']) == 3 && !empty($data['get_product1afternoon']->use_id) && !empty($data['get_product2afternoon']->use_id)){
            if($product->id == $data['proteinAfternoon7day'][$i]){
                echo round($data['proteinsperservingUseEmptyafternoon'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinAfternoon7day']) == 3 && !empty($data['get_product2afternoon']->use_id)){
            if($product->id == $data['proteinAfternoon7day'][$i]){
                echo round($data['proteinsperservingUseEmptyafternoon']/2 * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinAfternoon7day']) == 4 && !empty($data['get_product3afternoon']->use_id)){
            if($product->id == $data['proteinAfternoon7day'][$i]){
                echo round($data['proteinsperservingUseEmptyafternoon'] * 100/ $product->protein).  " g". "<br>";
            }
        }else{
            if($product->id == $data['proteinAfternoon7day'][$i]){
                echo round($data['proteinsperservingUseEmptyafternoon'] * 100/ $product->protein).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['proteinAfternoon7day'][$i]){
      echo round($data['proteinsperservingafternoon'] /100 * $product->use_id). " g". "<br>";      
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['carbAfternoon7day'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['carbAfternoon7day'][$i]){
            echo round($data['carbsperservingUseEmptyafternoon']/2 * 100/ $product->carb).  " g". "<br>";
        } 
    }else{
 
        if(count($data['carbAfternoon7day']) == 2 && empty($data['getProduct1afternoon']->use_id)){
            if($product->id == $data['carbAfternoon7day'][$i]){
                echo round($data['carbsperservingUseEmptyafternoon']  * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['carbAfternoon7day']) == 2 && !empty($data['getProduct1afternoon']->use_id)){
            if($product->id == $data['carbAfternoon7day'][$i]){
                echo round($data['carbsperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbAfternoon7day']) == 3 && !empty($data['getProduct1afternoon']->use_id) && !empty($data['getProduct2afternoon']->use_id)){
            if($product->id == $data['carbAfternoon7day'][$i]){
                echo round($data['carbsperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbAfternoon7day']) == 3 && !empty($data['getProduct2afternoon']->use_id)){
            if($product->id == $data['carbAfternoon7day'][$i]){
                echo round($data['carbsperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbAfternoon7day']) == 4 && !empty($data['getProduct3afternoon']->use_id)){
            if($product->id == $data['carbAfternoon7day'][$i]){
                echo round($data['carbsperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['carbAfternoon7day'][$i]){
                echo round($data['carbsperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['carbAfternoon7day'][$i]){
      echo round($data['carbsperservingafternoon']/100 * $product->use_id  * 100/ $product->carb). " g". "<br>";      
    }
}

?>

<?php  endif;?>


<?php if($product->id == $data['fatAfternoon7day'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['fatAfternoon7day'][$i]){
            echo round($data['fatsperservingUseEmptyafternoon']/2 * 100/ $product->fat).  " g". "<br>";
        } 
    }else{
 
        if(count($data['fatAfternoon7day']) == 2 && empty($data['getPro1afternoon']->use_id)){
            if($product->id == $data['faLuncht'][$i]){
                echo round($data['fatsperservingUseEmptyafternoon']  * 100/ $product->fat).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['fatAfternoon7day']) == 2 && !empty($data['getPro1afternoon']->use_id)){
            if($product->id == $data['fatAfternoon7day'][$i]){
                echo round($data['fatsperservingUseEmptyafternoon'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatAfternoon7day']) == 3 && !empty($data['getPro1']->use_id) && !empty($data['getPro2afternoon']->use_id)){
            if($product->id == $data['fatAfternoon7day'][$i]){
                echo round($data['fatsperservingUseEmptyafternoon'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatAfternoon7day']) == 3 && !empty($data['getPro2afternoon']->use_id)){
            if($product->id == $data['fatAfternoon7day'][$i]){
                echo round($data['fatsperservingUseEmptyafternoon'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatAfternoon7day']) == 4 && !empty($data['getPro3afternoon']->use_id)){
            if($product->id == $data['fatAfternoon7day'][$i]){
                echo round($data['fatsperservingUseEmptyafternoon'] * 100/ $product->fat).  " g". "<br>";
            }
        }else{
            if($product->id == $data['fatAfternoon7day'][$i]){
                echo round($data['fatsperservingUseEmptyafternoon'] * 100/ $product->fat).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['fatAfternoon7day'][$i]){
      echo round($data['fatsperservingafternoon']/100 * $product->use_id  * 100/ $product->fat). " g". "<br>";      
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['otherAfternoon7day'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['otherAfternoon7day'][$i]){
            echo round($data['othersperservingUseEmptyafternoon']/2 * 100/ $product->carb).  " g". "<br>";
        } 
    }else{
 
        if(count($data['otherAfternoon7day']) == 2 && empty($data['getPr1afternoon']->use_id)){
            if($product->id == $data['otherAfternoon7day'][$i]){
                echo round($data['othersperservingUseEmptyafternoon']/2 * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['otherAfternoon7day']) == 2 && !empty($data['getPr1afternoon']->use_id)){
            if($product->id == $data['otherAfternoon7day'][$i]){
                echo round($data['othersperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherAfternoon7day']) == 3 && !empty($data['getPr1afternoon']->use_id) && !empty($data['getPr2afternoon']->use_id)){
            if($product->id == $data['otherAfternoon7day'][$i]){
                echo round($data['othersperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherAfternoon7day']) == 3 && !empty($data['getPr2afternoon']->use_id)){
            if($product->id == $data['otherAfternoonlunch'][$i]){
                echo round($data['othersperservingUseEmptyafternoon']/2 * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherAfternoon7day']) == 4 && !empty($data['getPr3afternoon']->use_id)){
            if($product->id == $data['otherAfternoon7day'][$i]){
                echo round($data['othersperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['otherAfternoon7day'][$i]){
                echo round($data['othersperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['otherAfternoon7day'][$i]){
      echo round($data['othersperservingafternoon'] /100 * $product->use_id * 100/ $product->carb). " g". "<br>";      
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
        <?php echo $data['afternoon7Day']->recipe; ?>
    </font>
</div>
</div>
</div>

</div>
</div>
