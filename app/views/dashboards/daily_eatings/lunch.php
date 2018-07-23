<div class="card card-body">
Lunch
<form action="<?php echo URLROOT;?>/dashboards/changeLunch" method="post" class="form-group form-inline">
<select class="form-control" name="lunch">
<?php foreach($data['getlunch'] as $getlunch) : ?>
<option class="form-control" value="<?php echo $getlunch->id; ?>"
     <?php if($getlunch->id == $data['user_settings']->lunch ){?> selected <?php };?>><?php echo $getlunch->title; ?></option> 
<?php endforeach;?>
</select> 
<input type="submit" class="btn btn-secondary" value="Change">
</form>
<div class="col-md card card-body">
<h4><?php echo $data['lunch']->title; ?></h4>
<p><?php echo $data['lunch']->recipe; ?></p>

<?php for($i = 0; $i <=4; $i++): ?>
<?php foreach($data['products'] as $product) : ?>

<?php if($product->id == $data['proteinLunch'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['proteinLunch'][$i]){
            echo round($data['proteinsperservingUseEmptylunch']/2 * 100/ $product->protein).  " g". "<br>";
        } 
    }else{
 
        if(count($data['proteinLunch']) == 2 && empty($data['get_product1lunch']->use_id)){
            if($product->id == $data['proteinLunch'][$i]){
                echo round($data['proteinsperservingUseEmptylunch']/2 * 100/ $product->protein).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['proteinLunch']) == 2 && !empty($data['get_product1lunch']->use_id)){
            if($product->id == $data['proteinLunch'][$i]){
                echo round($data['proteinsperservingUseEmptylunch'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinLunch']) == 3 && !empty($data['get_product1lunch']->use_id) && !empty($data['get_product2lunch']->use_id)){
            if($product->id == $data['proteinLunch'][$i]){
                echo round($data['proteinsperservingUseEmptylunch'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinLunch']) == 3 && !empty($data['get_product2lunch']->use_id)){
            if($product->id == $data['proteinLunch'][$i]){
                echo round($data['proteinsperservingUseEmptylunch']/2 * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinLunch']) == 4 && !empty($data['get_product3lunch']->use_id)){
            if($product->id == $data['proteinLunch'][$i]){
                echo round($data['proteinsperservingUseEmptylunch'] * 100/ $product->protein).  " g". "<br>";
            }
        }else{
            if($product->id == $data['proteinLunch'][$i]){
                echo round($data['proteinsperservingUseEmptylunch'] * 100/ $product->protein).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['proteinLunch'][$i]){
      echo round($data['proteinsperservinglunch'] /100 * $product->use_id). " g". "<br>";      
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['carbLunch'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['carbLunch'][$i]){
            echo round($data['carbsperservingUseEmptylunch']/2 * 100/ $product->carb).  " g". "<br>";
        } 
    }else{
 
        if(count($data['carbLunch']) == 2 && empty($data['getProduct1lunch']->use_id)){
            if($product->id == $data['carbLunch'][$i]){
                echo round($data['carbsperservingUseEmptylunch']  * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['carbLunch']) == 2 && !empty($data['getProduct1lunch']->use_id)){
            if($product->id == $data['carbLunch'][$i]){
                echo round($data['carbsperservingUseEmptylunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbLunch']) == 3 && !empty($data['getProduct1lunch']->use_id) && !empty($data['getProduct2lunch']->use_id)){
            if($product->id == $data['carbLunch'][$i]){
                echo round($data['carbsperservingUseEmptylunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbLunch']) == 3 && !empty($data['getProduct2lunch']->use_id)){
            if($product->id == $data['carbLunch'][$i]){
                echo round($data['carbsperservingUseEmptylunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbLunch']) == 4 && !empty($data['getProduct3lunch']->use_id)){
            if($product->id == $data['carbLunch'][$i]){
                echo round($data['carbsperservingUseEmptylunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['carbLunch'][$i]){
                echo round($data['carbsperservingUseEmptylunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['carbLunch'][$i]){
      echo round($data['carbsperservinglunch']/100 * $product->use_id  * 100/ $product->carb). " g". "<br>";      
    }
}

?>

<?php  endif;?>


<?php if($product->id == $data['fatLunch'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['fatLunch'][$i]){
            echo round($data['fatsperservingUseEmptylunch']/2 * 100/ $product->fat).  " g". "<br>";
        } 
    }else{
 
        if(count($data['fatLunch']) == 2 && empty($data['getPro1lunch']->use_id)){
            if($product->id == $data['faLuncht'][$i]){
                echo round($data['fatsperservingUseEmptylunch']  * 100/ $product->fat).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['fatLunch']) == 2 && !empty($data['getPro1lunch']->use_id)){
            if($product->id == $data['fatLunch'][$i]){
                echo round($data['fatsperservingUseEmptylunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatLunch']) == 3 && !empty($data['getPro1']->use_id) && !empty($data['getPro2lunch']->use_id)){
            if($product->id == $data['fatLunch'][$i]){
                echo round($data['fatsperservingUseEmptylunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatLunch']) == 3 && !empty($data['getPro2lunch']->use_id)){
            if($product->id == $data['fatLunch'][$i]){
                echo round($data['fatsperservingUseEmptylunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatLunch']) == 4 && !empty($data['getPro3lunch']->use_id)){
            if($product->id == $data['fatLunch'][$i]){
                echo round($data['fatsperservingUseEmptylunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }else{
            if($product->id == $data['fatLunch'][$i]){
                echo round($data['fatsperservingUseEmptylunch'] * 100/ $product->fat).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['fatLunch'][$i]){
      echo round($data['fatsperservinglunch']/100 * $product->use_id  * 100/ $product->fat). " g". "<br>";      
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['otherLunch'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['otherLunch'][$i]){
            echo round($data['othersperservingUseEmptylunch']/2 * 100/ $product->carb).  " g". "<br>";
        } 
    }else{
 
        if(count($data['otherLunch']) == 2 && empty($data['getPr1lunch']->use_id)){
            if($product->id == $data['otherLunch'][$i]){
                echo round($data['othersperservingUseEmptylunch']/2 * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['otherLunch']) == 2 && !empty($data['getPr1lunch']->use_id)){
            if($product->id == $data['otherLunch'][$i]){
                echo round($data['othersperservingUseEmptylunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherLunch']) == 3 && !empty($data['getPr1lunch']->use_id) && !empty($data['getPr2lunch']->use_id)){
            if($product->id == $data['otherLunch'][$i]){
                echo round($data['othersperservingUseEmptylunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherLunch']) == 3 && !empty($data['getPr2lunch']->use_id)){
            if($product->id == $data['otherLunchlunch'][$i]){
                echo round($data['othersperservingUseEmptylunch']/2 * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherLunch']) == 4 && !empty($data['getPr3lunch']->use_id)){
            if($product->id == $data['otherLunch'][$i]){
                echo round($data['othersperservingUseEmptylunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['otherLunch'][$i]){
                echo round($data['othersperservingUseEmptylunch'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['otherLunch'][$i]){
      echo round($data['othersperservinglunch'] /100 * $product->use_id * 100/ $product->carb). " g". "<br>";      
    }
}
?>

<?php  endif;?>

<?php endforeach;?>
<?php endfor;?>

</div>
</div>