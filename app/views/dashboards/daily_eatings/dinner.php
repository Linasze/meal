<div class="card card-body">
Dinner
<form action="<?php echo URLROOT;?>/dashboards/changeDinner" method="post" class="form-group form-inline">
<select class="form-control" name="dinner">
<?php foreach($data['getdinner'] as $getdinner) : ?>
<option class="form-control" value="<?php echo $getdinner->id; ?>"
     <?php if($getdinner->id == $data['user_settings']->dinner ){?> selected <?php };?>><?php echo $getdinner->title; ?></option> 
<?php endforeach;?>
</select> 
<input type="submit" class="btn btn-secondary" value="Change">
</form>
<div class="col-md card card-body">
<h4><?php echo $data['dinner']->title; ?></h4>
<p><?php echo $data['dinner']->recipe; ?></p>

<?php for($i = 0; $i <=4; $i++): ?>
<?php foreach($data['products'] as $product) : ?>

<?php if($product->id == $data['proteinDinner'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['proteinDinner'][$i]){
            echo round($data['proteinsperservingUseEmptydinner']/2 * 100/ $product->protein).  " g". "<br>";
        } 
    }else{
 
        if(count($data['proteinDinner']) == 2 && empty($data['get_product1dinner']->use_id)){
            if($product->id == $data['proteinDinner'][$i]){
                echo round($data['proteinsperservingUseEmptydinner']/2 * 100/ $product->protein).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['proteinDinner']) == 2 && !empty($data['get_product1dinner']->use_id)){
            if($product->id == $data['proteinDinner'][$i]){
                echo round($data['proteinsperservingUseEmptydinner'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinDinner']) == 3 && !empty($data['get_product1dinner']->use_id) && !empty($data['get_product2dinner']->use_id)){
            if($product->id == $data['proteinDinner'][$i]){
                echo round($data['proteinsperservingUseEmptydinner'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinDinner']) == 3 && !empty($data['get_product2dinner']->use_id)){
            if($product->id == $data['proteinDinner'][$i]){
                echo round($data['proteinsperservingUseEmptydinner']/2 * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinDinner']) == 4 && !empty($data['get_product3dinner']->use_id)){
            if($product->id == $data['proteinDinner'][$i]){
                echo round($data['proteinsperservingUseEmptydinner'] * 100/ $product->protein).  " g". "<br>";
            }
        }else{
            if($product->id == $data['proteinDinner'][$i]){
                echo round($data['proteinsperservingUseEmptydinner'] * 100/ $product->protein).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['proteinDinner'][$i]){
      echo round($data['proteinsperservingdinner'] /100 * $product->use_id). " g". "<br>";      
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['carbDinner'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['carbDinner'][$i]){
            echo round($data['carbsperservingUseEmptydinner']/2 * 100/ $product->carb).  " g". "<br>";
        } 
    }else{
 
        if(count($data['carbDinner']) == 2 && empty($data['getProduct1dinner']->use_id)){
            if($product->id == $data['carbDinner'][$i]){
                echo round($data['carbsperservingUseEmptydinner']  * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['carbDinner']) == 2 && !empty($data['getProduct1dinner']->use_id)){
            if($product->id == $data['carbDinner'][$i]){
                echo round($data['carbsperservingUseEmptydinner'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbDinner']) == 3 && !empty($data['getProduct1dinner']->use_id) && !empty($data['getProduct2dinner']->use_id)){
            if($product->id == $data['carbDinner'][$i]){
                echo round($data['carbsperservingUseEmptydinner'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbDinner']) == 3 && !empty($data['getProduct2dinner']->use_id)){
            if($product->id == $data['carbDinner'][$i]){
                echo round($data['carbsperservingUseEmptydinner'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbDinner']) == 4 && !empty($data['getProduct3dinner']->use_id)){
            if($product->id == $data['carbDinner'][$i]){
                echo round($data['carbsperservingUseEmptydinner'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['carbDinner'][$i]){
                echo round($data['carbsperservingUseEmptydinner'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['carbDinner'][$i]){
      echo round($data['carbsperservingdinner']/100 * $product->use_id  * 100/ $product->carb). " g". "<br>";      
    }
}

?>

<?php  endif;?>


<?php if($product->id == $data['fatDinner'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['fatDinner'][$i]){
            echo round($data['fatsperservingUseEmptydinner']/2 * 100/ $product->fat).  " g". "<br>";
        } 
    }else{
 
        if(count($data['fatDinner']) == 2 && empty($data['getPro1dinner']->use_id)){
            if($product->id == $data['faLuncht'][$i]){
                echo round($data['fatsperservingUseEmptydinner']  * 100/ $product->fat).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['fatDinner']) == 2 && !empty($data['getPro1dinner']->use_id)){
            if($product->id == $data['fatDinner'][$i]){
                echo round($data['fatsperservingUseEmptydinner'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatDinner']) == 3 && !empty($data['getPro1']->use_id) && !empty($data['getPro2dinner']->use_id)){
            if($product->id == $data['fatDinner'][$i]){
                echo round($data['fatsperservingUseEmptydinner'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatDinner']) == 3 && !empty($data['getPro2dinner']->use_id)){
            if($product->id == $data['fatDinner'][$i]){
                echo round($data['fatsperservingUseEmptydinner'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatDinner']) == 4 && !empty($data['getPro3dinner']->use_id)){
            if($product->id == $data['fatDinner'][$i]){
                echo round($data['fatsperservingUseEmptydinner'] * 100/ $product->fat).  " g". "<br>";
            }
        }else{
            if($product->id == $data['fatDinner'][$i]){
                echo round($data['fatsperservingUseEmptydinner'] * 100/ $product->fat).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['fatDinner'][$i]){
      echo round($data['fatsperservingdinner']/100 * $product->use_id  * 100/ $product->fat). " g". "<br>";      
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['otherDinner'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['otherDinner'][$i]){
            echo round($data['othersperservingUseEmptydinner']/2 * 100/ $product->carb).  " g". "<br>";
        } 
    }else{
 
        if(count($data['otherDinner']) == 2 && empty($data['getPr1dinner']->use_id)){
            if($product->id == $data['otherDinner'][$i]){
                echo round($data['othersperservingUseEmptydinner']/2 * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['otherDinner']) == 2 && !empty($data['getPr1dinner']->use_id)){
            if($product->id == $data['otherDinner'][$i]){
                echo round($data['othersperservingUseEmptydinner'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherDinner']) == 3 && !empty($data['getPr1dinner']->use_id) && !empty($data['getPr2dinner']->use_id)){
            if($product->id == $data['otherDinner'][$i]){
                echo round($data['othersperservingUseEmptydinner'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherDinner']) == 3 && !empty($data['getPr2dinner']->use_id)){
            if($product->id == $data['otherDinnerlunch'][$i]){
                echo round($data['othersperservingUseEmptydinner']/2 * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherDinner']) == 4 && !empty($data['getPr3dinner']->use_id)){
            if($product->id == $data['otherDinner'][$i]){
                echo round($data['othersperservingUseEmptydinner'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['otherDinner'][$i]){
                echo round($data['othersperservingUseEmptydinner'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['otherDinner'][$i]){
      echo round($data['othersperservingdinner'] /100 * $product->use_id * 100/ $product->carb). " g". "<br>";      
    }
}
?>

<?php  endif;?>

<?php endforeach;?>
<?php endfor;?>

</div>
</div>
