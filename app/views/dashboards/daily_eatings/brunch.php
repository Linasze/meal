<div class="card card-body">
Brunch
<form action="<?php echo URLROOT;?>/dashboards/changeBrunch" method="post" class="form-group form-inline">
<select class="form-control" name="brunch">
<?php foreach($data['getbrunch'] as $getbrunch) : ?>
<option class="form-control" value="<?php echo $getbrunch->id; ?>"
     <?php if($getbrunch->id == $data['user_settings']->brunch ){?> selected <?php };?>><?php echo $getbrunch->title; ?></option> 
<?php endforeach;?>
</select> 
<input type="submit" class="btn btn-secondary" value="Change">
</form>
<div class="col-md card card-body">
<h4><?php echo $data['brunch']->title; ?></h4>
<p><?php echo $data['brunch']->recipe; ?></p>

<?php for($i = 0; $i <=4; $i++): ?>
<?php foreach($data['products'] as $product) : ?>

<?php if($product->id == $data['proteinBrunch'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['proteinBrunch'][$i]){
            echo round($data['proteinsperservingUseEmptybrunch']/2 * 100/ $product->protein).  " g". "<br>";
        } 
    }else{
 
        if(count($data['proteinBrunch']) == 2 && empty($data['get_product1brunch']->use_id)){
            if($product->id == $data['proteinBrunch'][$i]){
                echo round($data['proteinsperservingUseEmptybrunch']/2 * 100/ $product->protein).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['proteinBrunch']) == 2 && !empty($data['get_product1brunch']->use_id)){
            if($product->id == $data['proteinBrunch'][$i]){
                echo round($data['proteinsperservingUseEmptybrunch'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinBrunch']) == 3 && !empty($data['get_product1brunch']->use_id) && !empty($data['get_product2brunch']->use_id)){
            if($product->id == $data['proteinBrunch'][$i]){
                echo round($data['proteinsperservingUseEmptybrunch'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinBrunch']) == 3 && !empty($data['get_product2brunch']->use_id)){
            if($product->id == $data['proteinBrunch'][$i]){
                echo round($data['proteinsperservingUseEmptybrunch']/2 * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinBrunch']) == 4 && !empty($data['get_product3brunch']->use_id)){
            if($product->id == $data['proteinBrunch'][$i]){
                echo round($data['proteinsperservingUseEmptybrunch'] * 100/ $product->protein).  " g". "<br>";
            }
        }else{
            if($product->id == $data['proteinBrunch'][$i]){
                echo round($data['proteinsperservingUseEmptybrunch'] * 100/ $product->protein).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['proteinBrunch'][$i]){
      echo round($data['proteinsperservingbrunch'] /100 * $product->use_id). " g". "<br>";      
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['carbBrunch'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['carbBrunch'][$i]){
            echo round($data['carbsperservingUseEmptybrunch']/2 * 100/ $product->carb).  " g". "<br>";
        } 
    }else{
 
        if(count($data['carbBrunch']) == 2 && empty($data['getProduct1brunch']->use_id)){
            if($product->id == $data['carbBrunch'][$i]){
                echo round($data['carbsperservingUseEmptybrunch']  * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['carbBrunch']) == 2 && !empty($data['getProduct1brunch']->use_id)){
            if($product->id == $data['carbBrunch'][$i]){
                echo round($data['carbsperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbBrunch']) == 3 && !empty($data['getProduct1brunch']->use_id) && !empty($data['getProduct2brunch']->use_id)){
            if($product->id == $data['carbBrunch'][$i]){
                echo round($data['carbsperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbBrunch']) == 3 && !empty($data['getProduct2brunch']->use_id)){
            if($product->id == $data['carbBrunch'][$i]){
                echo round($data['carbsperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbBrunch']) == 4 && !empty($data['getProduct3brunch']->use_id)){
            if($product->id == $data['carbBrunch'][$i]){
                echo round($data['carbsperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['carbBrunch'][$i]){
                echo round($data['carbsperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['carbBrunch'][$i]){
      echo round($data['carbsperservingbrunch']/100 * $product->use_id  * 100/ $product->carb). " g". "<br>";      
    }
}

?>

<?php  endif;?>


<?php if($product->id == $data['fatBrunch'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['fatBrunch'][$i]){
            echo round($data['fatsperservingUseEmptybrunch']/2 * 100/ $product->fat).  " g". "<br>";
        } 
    }else{
 
        if(count($data['fatBrunch']) == 2 && empty($data['getPro1brunch']->use_id)){
            if($product->id == $data['faLuncht'][$i]){
                echo round($data['fatsperservingUseEmptybrunch']  * 100/ $product->fat).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['fatBrunch']) == 2 && !empty($data['getPro1brunch']->use_id)){
            if($product->id == $data['fatBrunch'][$i]){
                echo round($data['fatsperservingUseEmptybrunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatBrunch']) == 3 && !empty($data['getPro1']->use_id) && !empty($data['getPro2brunch']->use_id)){
            if($product->id == $data['fatBrunch'][$i]){
                echo round($data['fatsperservingUseEmptybrunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatBrunch']) == 3 && !empty($data['getPro2brunch']->use_id)){
            if($product->id == $data['fatBrunch'][$i]){
                echo round($data['fatsperservingUseEmptybrunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatBrunch']) == 4 && !empty($data['getPro3brunch']->use_id)){
            if($product->id == $data['fatBrunch'][$i]){
                echo round($data['fatsperservingUseEmptybrunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }else{
            if($product->id == $data['fatBrunch'][$i]){
                echo round($data['fatsperservingUseEmptybrunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['fatBrunch'][$i]){
      echo round($data['fatsperservingbrunch']/100 * $product->use_id  * 100/ $product->fat). " g". "<br>";      
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['otherBrunch'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['otherBrunch'][$i]){
            echo round($data['othersperservingUseEmptybrunch']/2 * 100/ $product->carb).  " g". "<br>";
        } 
    }else{
 
        if(count($data['otherBrunch']) == 2 && empty($data['getPr1brunch']->use_id)){
            if($product->id == $data['otherBrunch'][$i]){
                echo round($data['othersperservingUseEmptybrunch']/2 * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['otherBrunch']) == 2 && !empty($data['getPr1brunch']->use_id)){
            if($product->id == $data['otherBrunch'][$i]){
                echo round($data['othersperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherBrunch']) == 3 && !empty($data['getPr1brunch']->use_id) && !empty($data['getPr2brunch']->use_id)){
            if($product->id == $data['otherBrunch'][$i]){
                echo round($data['othersperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherBrunch']) == 3 && !empty($data['getPr2brunch']->use_id)){
            if($product->id == $data['otherBrunchlunch'][$i]){
                echo round($data['othersperservingUseEmptybrunch']/2 * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherBrunch']) == 4 && !empty($data['getPr3brunch']->use_id)){
            if($product->id == $data['otherBrunch'][$i]){
                echo round($data['othersperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['otherBrunch'][$i]){
                echo round($data['othersperservingUseEmptybrunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['otherBrunch'][$i]){
      echo round($data['othersperservingbrunch'] /100 * $product->use_id * 100/ $product->carb). " g". "<br>";      
    }
}
?>

<?php  endif;?>

<?php endforeach;?>
<?php endfor;?>
</div>
</div>
