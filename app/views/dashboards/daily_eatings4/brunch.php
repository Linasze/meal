<div id="headingTwo">

    <div class="card-header">
        <div class="row">
   <div class="col-md-2 text-center" > <?php echo "09:00";?><br>Brunch</div>
     <div class="col-md-3 text-center"> 
     <button class="btn btn-link text-secondary" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
       <font size="2"><?php echo $data['brunch5Day']->title; ?></font>
     </button>
     </div>
   <div class="col-md-2 text-center mt-2"> <?php echo round($data['proteinsperservingUseEmptybrunch']);?></div>
   <div class="col-md-2 text-center mt-2 "> <?php echo round($data['carbsperservingUseEmptybrunch']);?></div>
   <div class="col-md-1 text-center mt-2"> <?php echo round($data['fatsperservingUseEmptybrunch']);?></div>
   <div class="col-md-1 text-center mt-2"> <?php echo round($data['caloriesperservingBrunch']);?></div>
   <div class="col-md-1 text-center mt-2"> <a href="#"><img src="<?php echo URLROOT;?>/public/img/repeat.svg" height="15" width="15"></a></div>
   </div>
</div>

    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
   <div class="row">
<div class="col-md-4 text-left">
<h5>Products</h5>
<?php for($i = 0; $i <=4; $i++): ?>
<?php foreach($data['products'] as $product) : ?>

<?php if($product->id == $data['proteinBrunch5day'][$i]): ?>
<?php echo $product->title . " ";?>

<?php

if(empty($product->use_id)){
    if(!empty($product->use_id)){
        if($product->id == $data['proteinBrunch5day'][$i]){
            echo round($data['proteinsperservingUseEmptybrunch']/2 * 100/ $product->protein).  " g". "<br>";
        }
    }else{

        if(count($data['proteinBrunch5day']) == 2 && empty($data['get_product1brunch']->use_id)){
            if($product->id == $data['proteinBrunch5day'][$i]){
                echo round($data['proteinsperservingUseEmptybrunch']/2 * 100/ $product->protein).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is
        }elseif(count($data['proteinBrunch5day']) == 2 && !empty($data['get_product1brunch']->use_id)){
            if($product->id == $data['proteinBrunch5day'][$i]){
                echo round($data['proteinsperservingUseEmptybrunch'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinBrunch5day']) == 3 && !empty($data['get_product1brunch']->use_id) && !empty($data['get_product2brunch']->use_id)){
            if($product->id == $data['proteinBrunch5day'][$i]){
                echo round($data['proteinsperservingUseEmptybrunch'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinBrunch5day']) == 3 && !empty($data['get_product2brunch']->use_id)){
            if($product->id == $data['proteinBrunch5day'][$i]){
                echo round($data['proteinsperservingUseEmptybrunch']/2 * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinBrunch5day']) == 4 && !empty($data['get_product3brunch']->use_id)){
            if($product->id == $data['proteinBrunch5day'][$i]){
                echo round($data['proteinsperservingUseEmptybrunch'] * 100/ $product->protein).  " g". "<br>";
            }
        }else{
            if($product->id == $data['proteinBrunch5day'][$i]){
                echo round($data['proteinsperservingUseEmptybrunch'] * 100/ $product->protein).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){
    if($product->id == $data['proteinBrunch5day'][$i]){
      echo round($data['proteinsperservingbrunch'] /100 * $product->use_id). " g". "<br>";
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['carbBrunch5day'][$i]): ?>
<?php echo $product->title . " ";?>

<?php

if(empty($product->use_id)){
    if(!empty($product->use_id)){
        if($product->id == $data['carbBrunch5day'][$i]){
            echo round($data['carbsperservingUseEmptybrunch']/2 * 100/ $product->carb).  " g". "<br>";
        }
    }else{

        if(count($data['carbBrunch5day']) == 2 && empty($data['getProduct1brunch']->use_id)){
            if($product->id == $data['carbBrunch5day'][$i]){
                echo round($data['carbsperservingUseEmptybrunch']  * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is
        }elseif(count($data['carbBrunch5day']) == 2 && !empty($data['getProduct1brunch']->use_id)){
            if($product->id == $data['carbBrunch5day'][$i]){
                echo round($data['carbsperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbBrunch5day']) == 3 && !empty($data['getProduct1brunch']->use_id) && !empty($data['getProduct2brunch']->use_id)){
            if($product->id == $data['carbBrunch5day'][$i]){
                echo round($data['carbsperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbBrunch5day']) == 3 && !empty($data['getProduct2brunch']->use_id)){
            if($product->id == $data['carbBrunch5day'][$i]){
                echo round($data['carbsperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbBrunch5day']) == 4 && !empty($data['getProduct3brunch']->use_id)){
            if($product->id == $data['carbBrunch5day'][$i]){
                echo round($data['carbsperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['carbBrunch5day'][$i]){
                echo round($data['carbsperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){
    if($product->id == $data['carbBrunch5day'][$i]){
      echo round($data['carbsperservingbrunch']/100 * $product->use_id  * 100/ $product->carb). " g". "<br>";
    }
}

?>

<?php  endif;?>


<?php if($product->id == $data['fatBrunch5day'][$i]): ?>
<?php echo $product->title . " ";?>

<?php

if(empty($product->use_id)){
    if(!empty($product->use_id)){
        if($product->id == $data['fatBrunch5day'][$i]){
            echo round($data['fatsperservingUseEmptybrunch']/2 * 100/ $product->fat).  " g". "<br>";
        }
    }else{

        if(count($data['fatBrunch5day']) == 2 && empty($data['getPro1brunch']->use_id)){
            if($product->id == $data['faLuncht'][$i]){
                echo round($data['fatsperservingUseEmptybrunch']  * 100/ $product->fat).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is
        }elseif(count($data['fatBrunch5day']) == 2 && !empty($data['getPro1brunch']->use_id)){
            if($product->id == $data['fatBrunch5day'][$i]){
                echo round($data['fatsperservingUseEmptybrunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatBrunch5day']) == 3 && !empty($data['getPro1']->use_id) && !empty($data['getPro2brunch']->use_id)){
            if($product->id == $data['fatBrunch5day'][$i]){
                echo round($data['fatsperservingUseEmptybrunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatBrunch5day']) == 3 && !empty($data['getPro2brunch']->use_id)){
            if($product->id == $data['fatBrunch5day'][$i]){
                echo round($data['fatsperservingUseEmptybrunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatBrunch5day']) == 4 && !empty($data['getPro3brunch']->use_id)){
            if($product->id == $data['fatBrunch5day'][$i]){
                echo round($data['fatsperservingUseEmptybrunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }else{
            if($product->id == $data['fatBrunch5day'][$i]){
                echo round($data['fatsperservingUseEmptybrunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){
    if($product->id == $data['fatBrunch5day'][$i]){
      echo round($data['fatsperservingbrunch']/100 * $product->use_id  * 100/ $product->fat). " g". "<br>";
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['otherBrunch5day'][$i]): ?>
<?php echo $product->title . " ";?>

<?php

if(empty($product->use_id)){
    if(!empty($product->use_id)){
        if($product->id == $data['otherBrunch5day'][$i]){
            echo round($data['othersperservingUseEmptybrunch']/2 * 100/ $product->carb).  " g". "<br>";
        }
    }else{

        if(count($data['otherBrunch5day']) == 2 && empty($data['getPr1brunch']->use_id)){
            if($product->id == $data['otherBrunch5day'][$i]){
                echo round($data['othersperservingUseEmptybrunch']/2 * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is
        }elseif(count($data['otherBrunch5day']) == 2 && !empty($data['getPr1brunch']->use_id)){
            if($product->id == $data['otherBrunch5day'][$i]){
                echo round($data['othersperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherBrunch5day']) == 3 && !empty($data['getPr1brunch']->use_id) && !empty($data['getPr2brunch']->use_id)){
            if($product->id == $data['otherBrunch5day'][$i]){
                echo round($data['othersperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherBrunch5day']) == 3 && !empty($data['getPr2brunch']->use_id)){
            if($product->id == $data['otherBrunchlunch'][$i]){
                echo round($data['othersperservingUseEmptybrunch']/2 * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherBrunch5day']) == 4 && !empty($data['getPr3brunch']->use_id)){
            if($product->id == $data['otherBrunch5day'][$i]){
                echo round($data['othersperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['otherBrunch5day'][$i]){
                echo round($data['othersperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){
    if($product->id == $data['otherBrunch5day'][$i]){
      echo round($data['othersperservingbrunch'] /100 * $product->use_id * 100/ $product->carb). " g". "<br>";
    }
}
?>

<?php  endif;?>

<?php endforeach;?>
<?php endfor;?>
</div>
<div class="col-md-8 text-left">
<h5>Recipe</h5>
<font size="2"><?php echo $data['brunch5Day']->recipe; ?></font>
</div>
</div>
</div>
    </div></div>


