<div id="headingTwo">

    <div class="card-header">
        <div class="row">
   <div class="col-lg-2 d-none d-lg-block text-center"><?php if(substr(date('h',strtotime($data['user_settings']->wake_up))+3, 0, 1 ) != 1){echo "0";}?><?php echo date('h',strtotime($data['user_settings']->wake_up)) + 3 .":00";?><br>Brunch</div>
     <div class="col-lg-3 d-none d-lg-block text-center"> 
     <button class="btn btn-link text-secondary float-left" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
     <img src="<?php echo URLROOT;?>/public/img/arrow-down.svg" height="15" weight="15">
       <font size="2"><?php echo $data['brunch7Day']->title; ?></font>
     </button>
     </div>
   <div class="col-lg-2 d-none d-lg-block text-center mt-2"> <?php echo round($data['proteinsperservingUseEmptybrunch']);?></div>
   <div class="col-lg-2 d-none d-lg-block text-center mt-2 "> <?php echo round($data['carbsperservingUseEmptybrunch']);?></div>
   <div class="col-lg-1 d-none d-lg-block text-center mt-2"> <?php echo round($data['fatsperservingUseEmptybrunch']);?></div>
   <div class="col-lg-1 d-none d-lg-block text-center mt-2"> <?php echo round($data['caloriesperservingBrunch']);?></div>
   <div class="col-lg-1 d-none d-lg-block text-center mt-2"> <a href="#"><img src="<?php echo URLROOT;?>/public/img/repeat.svg" height="15" width="15"></a></div>
   </div>

<div class="col-12 d-block d-sm-block d-md-none pt-2">
<div class="col-12">Brunch<br>Time: <?php if(substr(date('h',strtotime($data['user_settings']->wake_up))+3, 0, 1 ) != 1){echo "0";}?><?php echo date('h',strtotime($data['user_settings']->wake_up)) + 3 .":00";?></div>
    <div class="col-12"><?php echo $data['brunch7Day']->title; ?></div>
<div class="col-12">Protein: <?php echo round($data['proteinsperservingUseEmptybrunch']);?></div>
<div class="col-12">Carb: <?php echo round($data['carbsperservingUseEmptybrunch']);?></div>
<div class="col-12">Fat: <?php echo round($data['fatsperservingUseEmptybrunch']);?></div>
<div class="col-12">Kcal: <?php echo round($data['caloriesperservingBrunch']);?></div>
<div class="col-12">Recipe: <input type="image" src="<?php echo URLROOT;?>/public/img/eye-solid.svg" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" height="25" width="25"></div>
</div>
     <div class="col-md-12 d-none d-md-block d-lg-none">
        <div class="row">
        <div class="col-md-12">Brunch</div>
        <div class="col-md-12"><?php echo $data['brunch7Day']->title; ?></div>
        <hr>
         <div class="col-md-3">Time</div>
         <div class="col-md-2">Protein</div>
         <div class="col-md-2">Carb</div>
         <div class="col-md-2">Fat</div>
         <div class="col-md-3">Kcal</div>
         <div class="col-md-3"><?php if(substr(date('h',strtotime($data['user_settings']->wake_up))+3, 0, 1 ) != 1){echo "0";}?><?php echo date('h',strtotime($data['user_settings']->wake_up)) + 3 .":00";?></div>
         <div class="col-md-2"><?php echo round($data['proteinsperservingUseEmptybrunch']);?></div>
         <div class="col-md-2"><?php echo round($data['carbsperservingUseEmptybrunch']);?></div>
         <div class="col-md-2"><?php echo round($data['fatsperservingUseEmptybrunch']);?></div>
         <div class="col-md-3"><?php echo round($data['caloriesperservingBrunch']);?></div>
         <hr>
         <div class="col-md-6">Recipe</div>
         <div class="col-md-6">Change</div>
         <div class="col-md-6"> <input type="image" src="<?php echo URLROOT;?>/public/img/eye-solid.svg" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" height="25" width="25"></div>
          <div class="col-md-6"> <a href="#"><img src="<?php echo URLROOT;?>/public/img/repeat.svg" height="15" width="15"></a></div>
<hr>
         </div>
     </div>
      </div>


    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
   <div class="row">
<div class="col-md-4 col- text-left">
<h5>Products</h5>
<?php for($i = 0; $i <=4; $i++): ?>
<?php foreach($data['products'] as $product) : ?>

<?php if($product->id == $data['proteinBrunch7day'][$i]): ?>
<?php echo $product->title . " ";?>

<?php

if(empty($product->use_id)){
    if(!empty($product->use_id)){
        if($product->id == $data['proteinBrunch7day'][$i]){
            echo round($data['proteinsperservingUseEmptybrunch']/2 * 100/ $product->protein).  " g". "<br>";
        }
    }else{

        if(count($data['proteinBrunch7day']) == 2 && empty($data['get_product1brunch']->use_id)){
            if($product->id == $data['proteinBrunch7day'][$i]){
                echo round($data['proteinsperservingUseEmptybrunch']/2 * 100/ $product->protein).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is
        }elseif(count($data['proteinBrunch7day']) == 2 && !empty($data['get_product1brunch']->use_id)){
            if($product->id == $data['proteinBrunch7day'][$i]){
                echo round($data['proteinsperservingUseEmptybrunch'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinBrunch7day']) == 3 && !empty($data['get_product1brunch']->use_id) && !empty($data['get_product2brunch']->use_id)){
            if($product->id == $data['proteinBrunch7day'][$i]){
                echo round($data['proteinsperservingUseEmptybrunch'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinBrunch7day']) == 3 && !empty($data['get_product2brunch']->use_id)){
            if($product->id == $data['proteinBrunch7day'][$i]){
                echo round($data['proteinsperservingUseEmptybrunch']/2 * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinBrunch7day']) == 4 && !empty($data['get_product3brunch']->use_id)){
            if($product->id == $data['proteinBrunch7day'][$i]){
                echo round($data['proteinsperservingUseEmptybrunch'] * 100/ $product->protein).  " g". "<br>";
            }
        }else{
            if($product->id == $data['proteinBrunch7day'][$i]){
                echo round($data['proteinsperservingUseEmptybrunch'] * 100/ $product->protein).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){
    if($product->id == $data['proteinBrunch7day'][$i]){
      echo round($data['proteinsperservingbrunch'] /100 * $product->use_id). " g". "<br>";
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['carbBrunch7day'][$i]): ?>
<?php echo $product->title . " ";?>

<?php

if(empty($product->use_id)){
    if(!empty($product->use_id)){
        if($product->id == $data['carbBrunch7day'][$i]){
            echo round($data['carbsperservingUseEmptybrunch']/2 * 100/ $product->carb).  " g". "<br>";
        }
    }else{

        if(count($data['carbBrunch7day']) == 2 && empty($data['getProduct1brunch']->use_id)){
            if($product->id == $data['carbBrunch7day'][$i]){
                echo round($data['carbsperservingUseEmptybrunch']  * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is
        }elseif(count($data['carbBrunch7day']) == 2 && !empty($data['getProduct1brunch']->use_id)){
            if($product->id == $data['carbBrunch7day'][$i]){
                echo round($data['carbsperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbBrunch7day']) == 3 && !empty($data['getProduct1brunch']->use_id) && !empty($data['getProduct2brunch']->use_id)){
            if($product->id == $data['carbBrunch7day'][$i]){
                echo round($data['carbsperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbBrunch7day']) == 3 && !empty($data['getProduct2brunch']->use_id)){
            if($product->id == $data['carbBrunch7day'][$i]){
                echo round($data['carbsperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbBrunch7day']) == 4 && !empty($data['getProduct3brunch']->use_id)){
            if($product->id == $data['carbBrunch7day'][$i]){
                echo round($data['carbsperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['carbBrunch7day'][$i]){
                echo round($data['carbsperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){
    if($product->id == $data['carbBrunch7day'][$i]){
      echo round($data['carbsperservingbrunch']/100 * $product->use_id  * 100/ $product->carb). " g". "<br>";
    }
}

?>

<?php  endif;?>


<?php if($product->id == $data['fatBrunch7day'][$i]): ?>
<?php echo $product->title . " ";?>

<?php

if(empty($product->use_id)){
    if(!empty($product->use_id)){
        if($product->id == $data['fatBrunch7day'][$i]){
            echo round($data['fatsperservingUseEmptybrunch']/2 * 100/ $product->fat).  " g". "<br>";
        }
    }else{

        if(count($data['fatBrunch7day']) == 2 && empty($data['getPro1brunch']->use_id)){
            if($product->id == $data['faLuncht'][$i]){
                echo round($data['fatsperservingUseEmptybrunch']  * 100/ $product->fat).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is
        }elseif(count($data['fatBrunch7day']) == 2 && !empty($data['getPro1brunch']->use_id)){
            if($product->id == $data['fatBrunch7day'][$i]){
                echo round($data['fatsperservingUseEmptybrunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatBrunch7day']) == 3 && !empty($data['getPro1']->use_id) && !empty($data['getPro2brunch']->use_id)){
            if($product->id == $data['fatBrunch7day'][$i]){
                echo round($data['fatsperservingUseEmptybrunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatBrunch7day']) == 3 && !empty($data['getPro2brunch']->use_id)){
            if($product->id == $data['fatBrunch7day'][$i]){
                echo round($data['fatsperservingUseEmptybrunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatBrunch7day']) == 4 && !empty($data['getPro3brunch']->use_id)){
            if($product->id == $data['fatBrunch7day'][$i]){
                echo round($data['fatsperservingUseEmptybrunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }else{
            if($product->id == $data['fatBrunch7day'][$i]){
                echo round($data['fatsperservingUseEmptybrunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){
    if($product->id == $data['fatBrunch7day'][$i]){
      echo round($data['fatsperservingbrunch']/100 * $product->use_id  * 100/ $product->fat). " g". "<br>";
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['otherBrunch7day'][$i]): ?>
<?php echo $product->title . " ";?>

<?php

if(empty($product->use_id)){
    if(!empty($product->use_id)){
        if($product->id == $data['otherBrunch7day'][$i]){
            echo round($data['othersperservingUseEmptybrunch']/2 * 100/ $product->carb).  " g". "<br>";
        }
    }else{

        if(count($data['otherBrunch7day']) == 2 && empty($data['getPr1brunch']->use_id)){
            if($product->id == $data['otherBrunch7day'][$i]){
                echo round($data['othersperservingUseEmptybrunch']/2 * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is
        }elseif(count($data['otherBrunch7day']) == 2 && !empty($data['getPr1brunch']->use_id)){
            if($product->id == $data['otherBrunch7day'][$i]){
                echo round($data['othersperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherBrunch7day']) == 3 && !empty($data['getPr1brunch']->use_id) && !empty($data['getPr2brunch']->use_id)){
            if($product->id == $data['otherBrunch7day'][$i]){
                echo round($data['othersperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherBrunch7day']) == 3 && !empty($data['getPr2brunch']->use_id)){
            if($product->id == $data['otherBrunchlunch'][$i]){
                echo round($data['othersperservingUseEmptybrunch']/2 * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherBrunch7day']) == 4 && !empty($data['getPr3brunch']->use_id)){
            if($product->id == $data['otherBrunch7day'][$i]){
                echo round($data['othersperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['otherBrunch7day'][$i]){
                echo round($data['othersperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){
    if($product->id == $data['otherBrunch7day'][$i]){
      echo round($data['othersperservingbrunch'] /100 * $product->use_id * 100/ $product->carb). " g". "<br>";
    }
}
?>

<?php  endif;?>

<?php endforeach;?>
<?php endfor;?>
</div>
<div class="col-md-8 col- text-left">
<h5>Recipe</h5>
<font size="2"><?php echo $data['brunch7Day']->recipe; ?></font>
</div>
</div>
</div>
    </div></div>


