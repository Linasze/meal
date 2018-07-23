<?php require_once APPROOT . '/views/theme/header.php'; ?>   
<?php flash('message'); ?>


<div class="card card-body">
<?php if(empty($data['user_settings'])): ?>
<form action="<?php echo URLROOT;?>/dashboards/generate" method="post">
<input type="submit" class="btn btn-secondary" value="Generate nutrition plan">
</form>
<?php else: ?>
<form action="<?php echo URLROOT;?>/dashboards/changeBreak" method="post" class="form-group form-inline">
<select class="form-control" name="breakfast">
<?php foreach($data['getbreakfast'] as $getbreakfast) : ?>
<option class="form-control" value="<?php echo $getbreakfast->id; ?>"
     <?php if($getbreakfast->id == $data['user_settings']->breakfast ){?> selected <?php };?>><?php echo $getbreakfast->title; ?></option> 
<?php endforeach;?>
</select> 
<input type="submit" class="btn btn-secondary" value="Change">
</form>
<div class="col-md card card-body">
<h4><?php echo $data['breakfast']->title; ?></h4>
<p><?php echo $data['breakfast']->recipe; ?></p>

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
<?php  endif;?>
</div>

<div class="card card-body">
<div class="col-md-16">
Carbs:   <?php echo round($data['carbsperservingAll']); ?><br>
Protein: <?php echo round($data['proteinsperservingAll']); ?><br>
Fat:     <?php echo round($data['fatsperservingAll']); ?><br>

</div>
</div>
</div>




<div class="card card-body">
<?php if(empty($data['user_settings'])): ?>

<?php else: ?>
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
<?php  endif;?>
</div>

<div class="card card-body">
<div class="col-md-16">
Carbs:   <?php echo round($data['carbsperservingAll']); ?><br>
Protein: <?php echo round($data['proteinsperservingAll']); ?><br>
Fat:     <?php echo round($data['fatsperservingAll']); ?><br>

</div>
</div>
</div>




<div class="card card-body">
<?php if(empty($data['user_settings'])): ?>

<?php else: ?>
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
<?php  endif;?>
</div>

<div class="card card-body">
<div class="col-md-16">
Carbs:   <?php echo round($data['carbsperservingAll']); ?><br>
Protein: <?php echo round($data['proteinsperservingAll']); ?><br>
Fat:     <?php echo round($data['fatsperservingAll']); ?><br>

</div>
</div>
</div>


<?php require_once APPROOT . '/views/theme/footer.php'; ?>