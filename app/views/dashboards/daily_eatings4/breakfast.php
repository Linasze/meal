<div id="headingOne">
   <div class="card-header">
        <div class="row">
   <div class="col-lg-2 d-none d-lg-block text-center"> <?php echo date('h:i',strtotime($data['user_settings']->wake_up));?><br> Breakfast</div>
     <div class="col-lg-3 d-none d-lg-block">

     <button class="meal-title btn btn-link text-secondary float-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
     <img src="<?php echo URLROOT;?>/public/img/arrow-down.svg" height="15" weight="15">
       <font size="2"><?php echo $data['breakfast5Day']->title; ?></font>
     </button>
   </div>
 
   <div class="col-lg-2 d-none d-lg-block text-center mt-2"> <?php echo round($data['proteinsperservingUseEmpty']);?></div>
   <div class="col-lg-2 d-none d-lg-block text-center mt-2"> <?php echo round($data['carbsperservingUseEmpty']);?></div>
   <div class="col-lg-1 d-none d-lg-block text-center mt-2"> <?php echo round($data['fatsperservingUseEmpty']);?></div>
   <div class="col-lg-1 d-none d-lg-block text-center mt-2"> <?php echo round($data['caloriesperservingBreak']);?></div>
   <div class="col-lg-1 d-none d-lg-block text-center mt-2"> <a href="#"><img src="<?php echo URLROOT;?>/public/img/repeat.svg" height="15" width="15"></a></div>
       </div>

<div class="col-12 d-block d-sm-block d-md-none pt-2">
<div class="col-12">Breakfast<br>Time: <?php echo date('h:i',strtotime($data['user_settings']->wake_up));?></div>
    <div class="col-12"><?php echo $data['breakfast5Day']->title; ?></div>
<div class="col-12">Protein: <?php echo round($data['proteinsperservingUseEmpty']);?></div>
<div class="col-12">Carb: <?php echo round($data['carbsperservingUseEmpty']);?></div>
<div class="col-12">Fat: <?php echo round($data['fatsperservingUseEmpty']);?></div>
<div class="col-12">Kcal: <?php echo round($data['caloriesperservingBreak']);?></div>
<div class="col-12">Recipe: <input type="image" src="<?php echo URLROOT;?>/public/img/eye-solid.svg" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" height="25" width="25"></div>
</div>
     <div class="col-md-12 d-none d-md-block d-lg-none">
        <div class="row">
        <div class="col-md-12">Breakfast</div>
        <div class="col-md-12"><?php echo $data['breakfast5Day']->title; ?></div>
        <hr>
         <div class="col-md-3">Time</div>
         <div class="col-md-2">Protein</div>
         <div class="col-md-2">Carb</div>
         <div class="col-md-2">Fat</div>
         <div class="col-md-3">Kcal</div>
         <div class="col-md-3"><?php echo date('h:i',strtotime($data['user_settings']->wake_up));?></div>
         <div class="col-md-2"><?php echo round($data['proteinsperservingUseEmpty']);?></div>
         <div class="col-md-2"><?php echo round($data['carbsperservingUseEmpty']);?></div>
         <div class="col-md-2"><?php echo round($data['fatsperservingUseEmpty']);?></div>
         <div class="col-md-3"><?php echo round($data['caloriesperservingBreak']);?></div>
         <hr>
         <div class="col-md-6">Recipe</div>
         <div class="col-md-6">Change</div>
         <div class="col-md-6"><input type="image" src="<?php echo URLROOT;?>/public/img/eye-solid.svg" height="25" width="25" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></div>
          <div class="col-md-6"> <a href="#"><img src="<?php echo URLROOT;?>/public/img/repeat.svg" height="15" width="15"></a></div>
<hr>
         </div>
     </div>
      </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

   <div class="card-body">
    <div class="row">
<div class="col-md-4 col- text-left">

    <h5>Products</h5>
<?php for($i = 0; $i <=4; $i++): ?>
<?php foreach($data['products'] as $product) : ?>

<?php if($product->id == $data['protein5day'][$i]): ?>
<?php echo $product->title . " ";?>
<?php

if(empty($product->use_id)){
    if(!empty($product->use_id)){
        if($product->id == $data['protein5day'][$i]){
            echo round($data['proteinsperservingUseEmpty']/2 * 100/ $product->protein).  " g". "<br>";
        }
    }else{

        if(count($data['protein5day']) == 2 && empty($data['get_product1']->use_id)){
            if($product->id == $data['protein5day'][$i]){
                echo round($data['proteinsperservingUseEmpty']/2 * 100/ $product->protein).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is
        }elseif(count($data['protein5day']) == 2 && !empty($data['get_product1']->use_id)){
            if($product->id == $data['protein5day'][$i]){
                echo round($data['proteinsperservingUseEmpty'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['protein5day']) == 3 && !empty($data['get_product1']->use_id) && !empty($data['get_product2']->use_id)){
            if($product->id == $data['protein5day'][$i]){
                echo round($data['proteinsperservingUseEmpty'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['protein5day']) == 3 && !empty($data['get_product2']->use_id)){
            if($product->id == $data['protein5day'][$i]){
                echo round($data['proteinsperservingUseEmpty']/2 * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['protein5day']) == 4 && !empty($data['get_product3']->use_id)){
            if($product->id == $data['protein5day'][$i]){
                echo round($data['proteinsperservingUseEmpty'] * 100/ $product->protein).  " g". "<br>";
            }
        }else{
            if($product->id == $data['protein5day'][$i]){
                echo round($data['proteinsperservingUseEmpty'] * 100/ $product->protein).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){
    if($product->id == $data['protein5day'][$i]){
      echo round($data['proteinsperserving'] /100 * $product->use_id). " g". "<br>";
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['carb5day'][$i]): ?>
<?php echo $product->title . " ";?>

<?php

if(empty($product->use_id)){
    if(!empty($product->use_id)){
        if($product->id == $data['carb5day'][$i]){
            echo round($data['carbsperservingUseEmpty']/2 * 100/ $product->carb).  " g". "<br>";
        }
    }else{

        if(count($data['carb']) == 2 && empty($data['getProduct1']->use_id)){
            if($product->id == $data['carb5day'][$i]){
                echo round($data['carbsperservingUseEmpty']  * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is
        }elseif(count($data['carb']) == 2 && !empty($data['getProduct1']->use_id)){
            if($product->id == $data['carb5day'][$i]){
                echo round($data['carbsperservingUseEmpty'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carb']) == 3 && !empty($data['getProduct1']->use_id) && !empty($data['getProduct2']->use_id)){
            if($product->id == $data['carb5day'][$i]){
                echo round($data['carbsperservingUseEmpty'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carb']) == 3 && !empty($data['getProduct2']->use_id)){
            if($product->id == $data['carb5day'][$i]){
                echo round($data['carbsperservingUseEmpty'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carb']) == 4 && !empty($data['getProduct3']->use_id)){
            if($product->id == $data['carb5day'][$i]){
                echo round($data['carbsperservingUseEmpty'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['carb5day'][$i]){
                echo round($data['carbsperservingUseEmpty'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){
    if($product->id == $data['carb5day'][$i]){
      echo round($data['carbsperserving']/100 * $product->use_id  * 100/ $product->carb). " g". "<br>";
    }
}

?>

<?php  endif;?>


<?php if($product->id == $data['fat5day'][$i]): ?>
<?php echo $product->title . " ";?>

<?php

if(empty($product->use_id)){
    if(!empty($product->use_id)){
        if($product->id == $data['fat5day'][$i]){
            echo round($data['fatsperservingUseEmpty']/2 * 100/ $product->fat).  " g". "<br>";
        }
    }else{

        if(count($data['fat']) == 2 && empty($data['getPro1']->use_id)){
            if($product->id == $data['fat5day'][$i]){
                echo round($data['fatsperservingUseEmpty']  * 100/ $product->fat).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is
        }elseif(count($data['fat']) == 2 && !empty($data['getPro1']->use_id)){
            if($product->id == $data['fat5day'][$i]){
                echo round($data['fatsperservingUseEmpty'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fat']) == 3 && !empty($data['getPro1']->use_id) && !empty($data['getPro2']->use_id)){
            if($product->id == $data['fat5day'][$i]){
                echo round($data['fatsperservingUseEmpty'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fat']) == 3 && !empty($data['getPro2']->use_id)){
            if($product->id == $data['fat5day'][$i]){
                echo round($data['fatsperservingUseEmpty'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fat']) == 4 && !empty($data['getPro3']->use_id)){
            if($product->id == $data['fat5day'][$i]){
                echo round($data['fatsperservingUseEmpty'] * 100/ $product->fat).  " g". "<br>";
            }
        }else{
            if($product->id == $data['fat5day'][$i]){
                echo round($data['fatsperservingUseEmpty'] * 100/ $product->fat).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){
    if($product->id == $data['fat5day'][$i]){
      echo round($data['fatsperserving']/100 * $product->use_id  * 100/ $product->fat). " g". "<br>";
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['other5day'][$i]): ?>
<?php echo $product->title . " ";?>

<?php

if(empty($product->use_id)){
    if(!empty($product->use_id)){
        if($product->id == $data['other5day'][$i]){
            echo round($data['othersperservingUseEmpty']/2 * 100/ $product->carb).  " g". "<br>";
        }
    }else{

        if(count($data['other']) == 2 && empty($data['getPr1']->use_id)){
            if($product->id == $data['other5day'][$i]){
                echo round($data['othersperservingUseEmpty']/2 * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is
        }elseif(count($data['other']) == 2 && !empty($data['getPr1']->use_id)){
            if($product->id == $data['other5day'][$i]){
                echo round($data['othersperservingUseEmpty'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['other']) == 3 && !empty($data['getPr1']->use_id) && !empty($data['getPr2']->use_id)){
            if($product->id == $data['other5day'][$i]){
                echo round($data['othersperservingUseEmpty'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['other']) == 3 && !empty($data['getPr2']->use_id)){
            if($product->id == $data['other5day'][$i]){
                echo round($data['othersperservingUseEmpty']/2 * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['other']) == 4 && !empty($data['getPr3']->use_id)){
            if($product->id == $data['other5day'][$i]){
                echo round($data['othersperservingUseEmpty'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['other5day'][$i]){
                echo round($data['othersperservingUseEmpty'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){
    if($product->id == $data['other5day'][$i]){
      echo round($data['othersperserving'] /100 * $product->use_id * 100/ $product->carb). " g". "<br>";
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
        <?php echo $data['breakfast5Day']->recipe; ?>
    </font>
</div>
</div>
</div>

</div>
</div>


