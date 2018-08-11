<div id="headingThree">
   <div class="card-header">
        <div class="row">
   <div class="col-md-2 text-center"> 12:00<br> Lunch</div>
     <div class="col-md-3">

     <button class="btn btn-link text-secondary" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
       <font size="2"><?php echo $data['lunch3Day']->title; ?></font>
     </button>
   </div>
   <div class="col-md-2 text-center mt-2"> <?php echo round($data['proteinsperservingUseEmptylunch']);?></div>
   <div class="col-md-2 text-center mt-2"> <?php echo round($data['carbsperservingUseEmptylunch']);?></div>
   <div class="col-md-1 text-center mt-2"> <?php echo round($data['fatsperservingUseEmptylunch']);?></div>
   <div class="col-md-1 text-center mt-2"> <?php echo round($data['caloriesperservingLunch']);?></div>
   <div class="col-md-1 text-center mt-2"> <a href="#"><img src="<?php echo URLROOT;?>/public/img/repeat.svg" height="15" width="15"></a></div>
      </div>
      </div>

    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">

   <div class="card-body">
    <div class="row">
<div class="col-md-4 text-left">

    <h5>Products</h5>
<?php for($i = 0; $i <=4; $i++): ?>
<?php foreach($data['products'] as $product) : ?>

<?php if($product->id == $data['proteinLunch3day'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['proteinLunch3day'][$i]){
            echo round($data['proteinsperservingUseEmptylunch']/2 * 100/ $product->protein).  " g". "<br>";
        } 
    }else{
 
        if(count($data['proteinLunch3day']) == 2 && empty($data['get_product1lunch']->use_id)){
            if($product->id == $data['proteinLunch3day'][$i]){
                echo round($data['proteinsperservingUseEmptylunch']/2 * 100/ $product->protein).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['proteinLunch3day']) == 2 && !empty($data['get_product1lunch']->use_id)){
            if($product->id == $data['proteinLunch3day'][$i]){
                echo round($data['proteinsperservingUseEmptylunch'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinLunch3day']) == 3 && !empty($data['get_product1lunch']->use_id) && !empty($data['get_product2lunch']->use_id)){
            if($product->id == $data['proteinLunch3day'][$i]){
                echo round($data['proteinsperservingUseEmptylunch'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinLunch3day']) == 3 && !empty($data['get_product2lunch']->use_id)){
            if($product->id == $data['proteinLunch3day'][$i]){
                echo round($data['proteinsperservingUseEmptylunch']/2 * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinLunch3day']) == 4 && !empty($data['get_product3lunch']->use_id)){
            if($product->id == $data['proteinLunch3day'][$i]){
                echo round($data['proteinsperservingUseEmptylunch'] * 100/ $product->protein).  " g". "<br>";
            }
        }else{
            if($product->id == $data['proteinLunch3day'][$i]){
                echo round($data['proteinsperservingUseEmptylunch'] * 100/ $product->protein).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['proteinLunch3day'][$i]){
      echo round($data['proteinsperservinglunch'] /100 * $product->use_id). " g". "<br>";      
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['carbLunch3day'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['carbLunch3day'][$i]){
            echo round($data['carbsperservingUseEmptylunch']/2 * 100/ $product->carb).  " g". "<br>";
        } 
    }else{
 
        if(count($data['carbLunch3day']) == 2 && empty($data['getProduct1lunch']->use_id)){
            if($product->id == $data['carbLunch3day'][$i]){
                echo round($data['carbsperservingUseEmptylunch']  * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['carbLunch3day']) == 2 && !empty($data['getProduct1lunch']->use_id)){
            if($product->id == $data['carbLunch3day'][$i]){
                echo round($data['carbsperservingUseEmptylunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbLunch3day']) == 3 && !empty($data['getProduct1lunch']->use_id) && !empty($data['getProduct2lunch']->use_id)){
            if($product->id == $data['carbLunch3day'][$i]){
                echo round($data['carbsperservingUseEmptylunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbLunch3day']) == 3 && !empty($data['getProduct2lunch']->use_id)){
            if($product->id == $data['carbLunch3day'][$i]){
                echo round($data['carbsperservingUseEmptylunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbLunch3day']) == 4 && !empty($data['getProduct3lunch']->use_id)){
            if($product->id == $data['carbLunch3day'][$i]){
                echo round($data['carbsperservingUseEmptylunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['carbLunch3day'][$i]){
                echo round($data['carbsperservingUseEmptylunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['carbLunch3day'][$i]){
      echo round($data['carbsperservinglunch']/100 * $product->use_id  * 100/ $product->carb). " g". "<br>";      
    }
}

?>

<?php  endif;?>


<?php if($product->id == $data['fatLunch3day'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['fatLunch3day'][$i]){
            echo round($data['fatsperservingUseEmptylunch']/2 * 100/ $product->fat).  " g". "<br>";
        } 
    }else{
 
        if(count($data['fatLunch3day']) == 2 && empty($data['getPro1lunch']->use_id)){
            if($product->id == $data['faLuncht'][$i]){
                echo round($data['fatsperservingUseEmptylunch']  * 100/ $product->fat).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['fatLunch3day']) == 2 && !empty($data['getPro1lunch']->use_id)){
            if($product->id == $data['fatLunch3day'][$i]){
                echo round($data['fatsperservingUseEmptylunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatLunch3day']) == 3 && !empty($data['getPro1']->use_id) && !empty($data['getPro2lunch']->use_id)){
            if($product->id == $data['fatLunch3day'][$i]){
                echo round($data['fatsperservingUseEmptylunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatLunch3day']) == 3 && !empty($data['getPro2lunch']->use_id)){
            if($product->id == $data['fatLunch3day'][$i]){
                echo round($data['fatsperservingUseEmptylunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatLunch3day']) == 4 && !empty($data['getPro3lunch']->use_id)){
            if($product->id == $data['fatLunch3day'][$i]){
                echo round($data['fatsperservingUseEmptylunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }else{
            if($product->id == $data['fatLunch3day'][$i]){
                echo round($data['fatsperservingUseEmptylunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['fatLunch3day'][$i]){
      echo round($data['fatsperservinglunch']/100 * $product->use_id  * 100/ $product->fat). " g". "<br>";      
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['otherLunch3day'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['otherLunch3day'][$i]){
            echo round($data['othersperservingUseEmptylunch']/2 * 100/ $product->carb).  " g". "<br>";
        } 
    }else{
 
        if(count($data['otherLunch3day']) == 2 && empty($data['getPr1lunch']->use_id)){
            if($product->id == $data['otherLunch3day'][$i]){
                echo round($data['othersperservingUseEmptylunch']/2 * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['otherLunch3day']) == 2 && !empty($data['getPr1lunch']->use_id)){
            if($product->id == $data['otherLunch3day'][$i]){
                echo round($data['othersperservingUseEmptylunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherLunch3day']) == 3 && !empty($data['getPr1lunch']->use_id) && !empty($data['getPr2lunch']->use_id)){
            if($product->id == $data['otherLunch3day'][$i]){
                echo round($data['othersperservingUseEmptylunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherLunch3day']) == 3 && !empty($data['getPr2lunch']->use_id)){
            if($product->id == $data['otherLunchlunch'][$i]){
                echo round($data['othersperservingUseEmptylunch']/2 * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherLunch3day']) == 4 && !empty($data['getPr3lunch']->use_id)){
            if($product->id == $data['otherLunch3day'][$i]){
                echo round($data['othersperservingUseEmptylunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['otherLunch3day'][$i]){
                echo round($data['othersperservingUseEmptylunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['otherLunch3day'][$i]){
      echo round($data['othersperservinglunch'] /100 * $product->use_id * 100/ $product->carb). " g". "<br>";      
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
        <?php echo $data['lunch3Day']->recipe; ?>
    </font>
</div>
</div>
</div>

</div>
</div>