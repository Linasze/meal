<div id="headingOne">
   <div class="card-header">
        <div class="row">
   <div class="col-md-2 text-center"> <?php echo date('h:i',strtotime($data['user_settings']->wake_up));?><br> Breakfast</div>
     <div class="col-md-3">

     <button class="meal-title btn btn-link text-secondary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       <font size="2"><?php echo $data['breakfast6Day']->title; ?></font>
     </button>
   </div>
 
   <div class="col-md-2 text-center mt-2"> <?php echo round($data['proteinsperservingUseEmpty']);?></div>
   <div class="col-md-2 text-center mt-2"> <?php echo round($data['carbsperservingUseEmpty']);?></div>
   <div class="col-md-1 text-center mt-2"> <?php echo round($data['fatsperservingUseEmpty']);?></div>
   <div class="col-md-1 text-center mt-2"> <?php echo round($data['caloriesperservingBreak']);?></div>
   <div class="col-md-1 text-center mt-2"> <a href="#"><img src="<?php echo URLROOT;?>/public/img/repeat.svg" height="15" width="15"></a></div>
    
     
      </div>
      </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

   <div class="card-body">
    <div class="row">
<div class="col-md-4 text-left">

    <h5>Products</h5>
<?php for($i = 0; $i <=4; $i++): ?>
<?php foreach($data['products'] as $product) : ?>

<?php if($product->id == $data['protein'][$i]): ?>
<?php echo $product->title . " ";?>
<?php

if(empty($product->use_id)){
    if(!empty($product->use_id)){
        if($product->id == $data['protein'][$i]){
            echo round($data['proteinsperservingUseEmpty']/2 * 100/ $product->protein).  " g". "<br>";
        }
    }else{

        if(count($data['protein']) == 2 && empty($data['get_product1']->use_id)){
            if($product->id == $data['protein'][$i]){
                echo round($data['proteinsperservingUseEmpty']/2 * 100/ $product->protein).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is
        }elseif(count($data['protein']) == 2 && !empty($data['get_product1']->use_id)){
            if($product->id == $data['protein'][$i]){
                echo round($data['proteinsperservingUseEmpty'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['protein']) == 3 && !empty($data['get_product1']->use_id) && !empty($data['get_product2']->use_id)){
            if($product->id == $data['protein'][$i]){
                echo round($data['proteinsperservingUseEmpty'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['protein']) == 3 && !empty($data['get_product2']->use_id)){
            if($product->id == $data['protein'][$i]){
                echo round($data['proteinsperservingUseEmpty']/2 * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['protein']) == 4 && !empty($data['get_product3']->use_id)){
            if($product->id == $data['protein'][$i]){
                echo round($data['proteinsperservingUseEmpty'] * 100/ $product->protein).  " g". "<br>";
            }
        }else{
            if($product->id == $data['protein'][$i]){
                echo round($data['proteinsperservingUseEmpty'] * 100/ $product->protein).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){
    if($product->id == $data['protein'][$i]){
      echo round($data['proteinsperserving'] /100 * $product->use_id). " g". "<br>";
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['carb'][$i]): ?>
<?php echo $product->title . " ";?>

<?php

if(empty($product->use_id)){
    if(!empty($product->use_id)){
        if($product->id == $data['carb'][$i]){
            echo round($data['carbsperservingUseEmpty']/2 * 100/ $product->carb).  " g". "<br>";
        }
    }else{

        if(count($data['carb']) == 2 && empty($data['getProduct1']->use_id)){
            if($product->id == $data['carb'][$i]){
                echo round($data['carbsperservingUseEmpty']  * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is
        }elseif(count($data['carb']) == 2 && !empty($data['getProduct1']->use_id)){
            if($product->id == $data['carb'][$i]){
                echo round($data['carbsperservingUseEmpty'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carb']) == 3 && !empty($data['getProduct1']->use_id) && !empty($data['getProduct2']->use_id)){
            if($product->id == $data['carb'][$i]){
                echo round($data['carbsperservingUseEmpty'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carb']) == 3 && !empty($data['getProduct2']->use_id)){
            if($product->id == $data['carb'][$i]){
                echo round($data['carbsperservingUseEmpty'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carb']) == 4 && !empty($data['getProduct3']->use_id)){
            if($product->id == $data['carb'][$i]){
                echo round($data['carbsperservingUseEmpty'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['carb'][$i]){
                echo round($data['carbsperservingUseEmpty'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){
    if($product->id == $data['carb'][$i]){
      echo round($data['carbsperserving']/100 * $product->use_id  * 100/ $product->carb). " g". "<br>";
    }
}

?>

<?php  endif;?>


<?php if($product->id == $data['fat'][$i]): ?>
<?php echo $product->title . " ";?>

<?php

if(empty($product->use_id)){
    if(!empty($product->use_id)){
        if($product->id == $data['fat'][$i]){
            echo round($data['fatsperservingUseEmpty']/2 * 100/ $product->fat).  " g". "<br>";
        }
    }else{

        if(count($data['fat']) == 2 && empty($data['getPro1']->use_id)){
            if($product->id == $data['fat'][$i]){
                echo round($data['fatsperservingUseEmpty']  * 100/ $product->fat).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is
        }elseif(count($data['fat']) == 2 && !empty($data['getPro1']->use_id)){
            if($product->id == $data['fat'][$i]){
                echo round($data['fatsperservingUseEmpty'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fat']) == 3 && !empty($data['getPro1']->use_id) && !empty($data['getPro2']->use_id)){
            if($product->id == $data['fat'][$i]){
                echo round($data['fatsperservingUseEmpty'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fat']) == 3 && !empty($data['getPro2']->use_id)){
            if($product->id == $data['fat'][$i]){
                echo round($data['fatsperservingUseEmpty'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fat']) == 4 && !empty($data['getPro3']->use_id)){
            if($product->id == $data['fat'][$i]){
                echo round($data['fatsperservingUseEmpty'] * 100/ $product->fat).  " g". "<br>";
            }
        }else{
            if($product->id == $data['fat'][$i]){
                echo round($data['fatsperservingUseEmpty'] * 100/ $product->fat).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){
    if($product->id == $data['fat'][$i]){
      echo round($data['fatsperserving']/100 * $product->use_id  * 100/ $product->fat). " g". "<br>";
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['other'][$i]): ?>
<?php echo $product->title . " ";?>

<?php

if(empty($product->use_id)){
    if(!empty($product->use_id)){
        if($product->id == $data['other'][$i]){
            echo round($data['othersperservingUseEmpty']/2 * 100/ $product->carb).  " g". "<br>";
        }
    }else{

        if(count($data['other']) == 2 && empty($data['getPr1']->use_id)){
            if($product->id == $data['other'][$i]){
                echo round($data['othersperservingUseEmpty']/2 * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is
        }elseif(count($data['other']) == 2 && !empty($data['getPr1']->use_id)){
            if($product->id == $data['other'][$i]){
                echo round($data['othersperservingUseEmpty'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['other']) == 3 && !empty($data['getPr1']->use_id) && !empty($data['getPr2']->use_id)){
            if($product->id == $data['other'][$i]){
                echo round($data['othersperservingUseEmpty'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['other']) == 3 && !empty($data['getPr2']->use_id)){
            if($product->id == $data['other'][$i]){
                echo round($data['othersperservingUseEmpty']/2 * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['other']) == 4 && !empty($data['getPr3']->use_id)){
            if($product->id == $data['other'][$i]){
                echo round($data['othersperservingUseEmpty'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['other'][$i]){
                echo round($data['othersperservingUseEmpty'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){
    if($product->id == $data['other'][$i]){
      echo round($data['othersperserving'] /100 * $product->use_id * 100/ $product->carb). " g". "<br>";
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
        <?php echo $data['breakfast6Day']->recipe; ?>
    </font>
</div>
</div>
</div>

</div>
</div>


