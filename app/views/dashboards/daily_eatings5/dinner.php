<div id="headingFifth">

    <div class="card-header">
        <div class="row">
        <div class="col-lg-2 d-none d-lg-block text-center" ><?php echo date('h:i',strtotime($data['user_settings']->wake_up)) + 12 . ":00";?><br>Dinner</div>
     <div class="col-lg-3 d-none d-lg-block text-center"> 
     <button class="btn btn-link text-secondary float-left" data-toggle="collapse" data-target="#collapseFifth" aria-expanded="true" aria-controls="collapseFifth">
     <img src="<?php echo URLROOT;?>/public/img/arrow-down.svg" height="15" weight="15">
      <font size="2"><?php echo $data['dinner6Day']->title; ?></font>
     </button>
     </div>
   <div class="col-lg-2 d-none d-lg-block text-center mt-2"> <?php echo round($data['proteinsperservingUseEmptydinner']);?></div>
   <div class="col-lg-2 d-none d-lg-block text-center mt-2 "> <?php echo round($data['carbsperservingUseEmptydinner']);?></div>
   <div class="col-lg-1 d-none d-lg-block text-center mt-2"> <?php echo round($data['fatsperservingUseEmptydinner']);?></div>
   <div class="col-lg-1 d-none d-lg-block text-center mt-2"> <?php echo round($data['caloriesperservingDinner']);?></div>
   <div class="col-lg-1 d-none d-lg-block text-center mt-2"> <a href="#"><img src="<?php echo URLROOT;?>/public/img/repeat.svg" height="15" width="15"></a></div>
   </div>
   <div class="col-12 d-block d-sm-block d-md-none pt-2">
<div class="col-12">Dinner<br>Time: <?php echo date('h:i',strtotime($data['user_settings']->wake_up)) + 12 . ":00";?></div>
    <div class="col-12"><?php echo $data['dinner6Day']->title; ?></div>
<div class="col-12">Protein: <?php echo round($data['proteinsperservingUseEmptydinner']);?></div>
<div class="col-12">Carb: <?php echo round($data['carbsperservingUseEmptydinner']);?></div>
<div class="col-12">Fat: <?php echo round($data['fatsperservingUseEmptydinner']);?></div>
<div class="col-12">Kcal: <?php echo round($data['caloriesperservingDinner']);?></div>
<div class="col-12">Recipe: <input type="image" src="<?php echo URLROOT;?>/public/img/eye-solid.svg" data-toggle="collapse" data-target="#collapseFifth" aria-expanded="true" aria-controls="collapseFifth" height="25" width="25"></div>
</div>
     <div class="col-md-12 d-none d-md-block d-lg-none">
        <div class="row">
        <div class="col-md-12">Dinner</div>
        <div class="col-md-12"><?php echo $data['dinner6Day']->title; ?></div>
        <hr>
         <div class="col-md-3">Time</div>
         <div class="col-md-2">Protein</div>
         <div class="col-md-2">Carb</div>
         <div class="col-md-2">Fat</div>
         <div class="col-md-3">Kcal</div>
         <div class="col-md-3"><?php echo date('h:i',strtotime($data['user_settings']->wake_up)) + 12 . ":00";?></div>
         <div class="col-md-2"><?php echo round($data['proteinsperservingUseEmptydinner']);?></div>
         <div class="col-md-2"><?php echo round($data['carbsperservingUseEmptydinner']);?></div>
         <div class="col-md-2"><?php echo round($data['fatsperservingUseEmptydinner']);?></div>
         <div class="col-md-3"><?php echo round($data['caloriesperservingDinner']);?></div>
         <hr>
         <div class="col-md-6">Recipe</div>
         <div class="col-md-6">Change</div>
         <div class="col-md-6"> <input type="image" src="<?php echo URLROOT;?>/public/img/eye-solid.svg" data-toggle="collapse" data-target="#collapseFifth" aria-expanded="true" aria-controls="collapseFifth" height="25" width="25"></div>
          <div class="col-md-6"> <a href="#"><img src="<?php echo URLROOT;?>/public/img/repeat.svg" height="15" width="15"></a></div>
<hr>
         </div>
     </div>
      </div>

    <div id="collapseFifth" class="collapse" aria-labelledby="headingFifth" data-parent="#accordion">
      <div class="card-body">
   <div class="row">
<div class="col-md-4 col- text-left">
<h5>Products</h5>
<?php for($i = 0; $i <=4; $i++): ?>
<?php foreach($data['products'] as $product) : ?>

<?php if($product->id == $data['proteinDinner6day'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['proteinDinner6day'][$i]){
            echo round($data['proteinsperservingUseEmptydinner']/2 * 100/ $product->protein).  " g". "<br>";
        } 
    }else{
 
        if(count($data['proteinDinner6day']) == 2 && empty($data['get_product1dinner']->use_id)){
            if($product->id == $data['proteinDinner6day'][$i]){
                echo round($data['proteinsperservingUseEmptydinner']/2 * 100/ $product->protein).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['proteinDinner6day']) == 2 && !empty($data['get_product1dinner']->use_id)){
            if($product->id == $data['proteinDinner6day'][$i]){
                echo round($data['proteinsperservingUseEmptydinner'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinDinner6day']) == 3 && !empty($data['get_product1dinner']->use_id) && !empty($data['get_product2dinner']->use_id)){
            if($product->id == $data['proteinDinner6day'][$i]){
                echo round($data['proteinsperservingUseEmptydinner'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinDinner6day']) == 3 && !empty($data['get_product2dinner']->use_id)){
            if($product->id == $data['proteinDinner6day'][$i]){
                echo round($data['proteinsperservingUseEmptydinner']/2 * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinDinner6day']) == 4 && !empty($data['get_product3dinner']->use_id)){
            if($product->id == $data['proteinDinner6day'][$i]){
                echo round($data['proteinsperservingUseEmptydinner'] * 100/ $product->protein).  " g". "<br>";
            }
        }else{
            if($product->id == $data['proteinDinner6day'][$i]){
                echo round($data['proteinsperservingUseEmptydinner'] * 100/ $product->protein).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['proteinDinner6day'][$i]){
      echo round($data['proteinsperservingdinner'] /100 * $product->use_id). " g". "<br>";      
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['carbDinner6day'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['carbDinner6day'][$i]){
            echo round($data['carbsperservingUseEmptydinner']/2 * 100/ $product->carb).  " g". "<br>";
        } 
    }else{
 
        if(count($data['carbDinner6day']) == 2 && empty($data['getProduct1dinner']->use_id)){
            if($product->id == $data['carbDinner6day'][$i]){
                echo round($data['carbsperservingUseEmptydinner']  * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['carbDinner6day']) == 2 && !empty($data['getProduct1dinner']->use_id)){
            if($product->id == $data['carbDinner6day'][$i]){
                echo round($data['carbsperservingUseEmptydinner'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbDinner6day']) == 3 && !empty($data['getProduct1dinner']->use_id) && !empty($data['getProduct2dinner']->use_id)){
            if($product->id == $data['carbDinner6day'][$i]){
                echo round($data['carbsperservingUseEmptydinner'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbDinner6day']) == 3 && !empty($data['getProduct2dinner']->use_id)){
            if($product->id == $data['carbDinner6day'][$i]){
                echo round($data['carbsperservingUseEmptydinner'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbDinner6day']) == 4 && !empty($data['getProduct3dinner']->use_id)){
            if($product->id == $data['carbDinner6day'][$i]){
                echo round($data['carbsperservingUseEmptydinner'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['carbDinner6day'][$i]){
                echo round($data['carbsperservingUseEmptydinner'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['carbDinner6day'][$i]){
      echo round($data['carbsperservingdinner']/100 * $product->use_id  * 100/ $product->carb). " g". "<br>";      
    }
}

?>

<?php  endif;?>


<?php if($product->id == $data['fatDinner6day'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['fatDinner6day'][$i]){
            echo round($data['fatsperservingUseEmptydinner']/2 * 100/ $product->fat).  " g". "<br>";
        } 
    }else{
 
        if(count($data['fatDinner6day']) == 2 && empty($data['getPro1dinner']->use_id)){
            if($product->id == $data['faLuncht'][$i]){
                echo round($data['fatsperservingUseEmptydinner']  * 100/ $product->fat).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['fatDinner6day']) == 2 && !empty($data['getPro1dinner']->use_id)){
            if($product->id == $data['fatDinner6day'][$i]){
                echo round($data['fatsperservingUseEmptydinner'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatDinner6day']) == 3 && !empty($data['getPro1']->use_id) && !empty($data['getPro2dinner']->use_id)){
            if($product->id == $data['fatDinner6day'][$i]){
                echo round($data['fatsperservingUseEmptydinner'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatDinner6day']) == 3 && !empty($data['getPro2dinner']->use_id)){
            if($product->id == $data['fatDinner6day'][$i]){
                echo round($data['fatsperservingUseEmptydinner'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatDinner6day']) == 4 && !empty($data['getPro3dinner']->use_id)){
            if($product->id == $data['fatDinner6day'][$i]){
                echo round($data['fatsperservingUseEmptydinner'] * 100/ $product->fat).  " g". "<br>";
            }
        }else{
            if($product->id == $data['fatDinner6day'][$i]){
                echo round($data['fatsperservingUseEmptydinner'] * 100/ $product->fat).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['fatDinner6day'][$i]){
      echo round($data['fatsperservingdinner']/100 * $product->use_id  * 100/ $product->fat). " g". "<br>";      
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['otherDinner6day'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['otherDinner6day'][$i]){
            echo round($data['othersperservingUseEmptydinner']/2 * 100/ $product->carb).  " g". "<br>";
        } 
    }else{
 
        if(count($data['otherDinner6day']) == 2 && empty($data['getPr1dinner']->use_id)){
            if($product->id == $data['otherDinner6day'][$i]){
                echo round($data['othersperservingUseEmptydinner']/2 * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['otherDinner6day']) == 2 && !empty($data['getPr1dinner']->use_id)){
            if($product->id == $data['otherDinner6day'][$i]){
                echo round($data['othersperservingUseEmptydinner'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherDinner6day']) == 3 && !empty($data['getPr1dinner']->use_id) && !empty($data['getPr2dinner']->use_id)){
            if($product->id == $data['otherDinner6day'][$i]){
                echo round($data['othersperservingUseEmptydinner'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherDinner6day']) == 3 && !empty($data['getPr2dinner']->use_id)){
            if($product->id == $data['otherDinnerlunch'][$i]){
                echo round($data['othersperservingUseEmptydinner']/2 * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherDinner6day']) == 4 && !empty($data['getPr3dinner']->use_id)){
            if($product->id == $data['otherDinner6day'][$i]){
                echo round($data['othersperservingUseEmptydinner'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['otherDinner6day'][$i]){
                echo round($data['othersperservingUseEmptydinner'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['otherDinner6day'][$i]){
      echo round($data['othersperservingdinner'] /100 * $product->use_id * 100/ $product->carb). " g". "<br>";      
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
        <?php echo $data['dinner6Day']->recipe; ?>
    </font>
</div>
</div>
</div>

</div>
</div>
