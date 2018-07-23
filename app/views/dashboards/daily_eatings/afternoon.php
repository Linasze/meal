<div class="card card-body">
Afternoon meal
<form action="<?php echo URLROOT;?>/dashboards/changeAfternoon" method="post" class="form-group form-inline">
<select class="form-control" name="afternoon">
<?php foreach($data['getafternoon'] as $getafternoon) : ?>
<option class="form-control" value="<?php echo $getafternoon->id; ?>"
     <?php if($getafternoon->id == $data['user_settings']->afternoon ){?> selected <?php };?>><?php echo $getafternoon->title; ?></option> 
<?php endforeach;?>
</select> 
<input type="submit" class="btn btn-secondary" value="Change">
</form>
<div class="col-md card card-body">
<h4><?php echo $data['afternoon']->title; ?></h4>
<p><?php echo $data['afternoon']->recipe; ?></p>

<?php for($i = 0; $i <=4; $i++): ?>
<?php foreach($data['products'] as $product) : ?>

<?php if($product->id == $data['proteinAfternoon'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['proteinAfternoon'][$i]){
            echo round($data['proteinsperservingUseEmptyafternoon']/2 * 100/ $product->protein).  " g". "<br>";
        } 
    }else{
 
        if(count($data['proteinAfternoon']) == 2 && empty($data['get_product1afternoon']->use_id)){
            if($product->id == $data['proteinAfternoon'][$i]){
                echo round($data['proteinsperservingUseEmptyafternoon']/2 * 100/ $product->protein).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['proteinAfternoon']) == 2 && !empty($data['get_product1afternoon']->use_id)){
            if($product->id == $data['proteinAfternoon'][$i]){
                echo round($data['proteinsperservingUseEmptyafternoon'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinAfternoon']) == 3 && !empty($data['get_product1afternoon']->use_id) && !empty($data['get_product2afternoon']->use_id)){
            if($product->id == $data['proteinAfternoon'][$i]){
                echo round($data['proteinsperservingUseEmptyafternoon'] * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinAfternoon']) == 3 && !empty($data['get_product2afternoon']->use_id)){
            if($product->id == $data['proteinAfternoon'][$i]){
                echo round($data['proteinsperservingUseEmptyafternoon']/2 * 100/ $product->protein).  " g". "<br>";
            }
        }elseif(count($data['proteinAfternoon']) == 4 && !empty($data['get_product3afternoon']->use_id)){
            if($product->id == $data['proteinAfternoon'][$i]){
                echo round($data['proteinsperservingUseEmptyafternoon'] * 100/ $product->protein).  " g". "<br>";
            }
        }else{
            if($product->id == $data['proteinAfternoon'][$i]){
                echo round($data['proteinsperservingUseEmptyafternoon'] * 100/ $product->protein).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['proteinAfternoon'][$i]){
      echo round($data['proteinsperservingafternoon'] /100 * $product->use_id). " g". "<br>";      
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['carbAfternoon'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['carbAfternoon'][$i]){
            echo round($data['carbsperservingUseEmptyafternoon']/2 * 100/ $product->carb).  " g". "<br>";
        } 
    }else{
 
        if(count($data['carbAfternoon']) == 2 && empty($data['getProduct1afternoon']->use_id)){
            if($product->id == $data['carbAfternoon'][$i]){
                echo round($data['carbsperservingUseEmptyafternoon']  * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['carbAfternoon']) == 2 && !empty($data['getProduct1afternoon']->use_id)){
            if($product->id == $data['carbAfternoon'][$i]){
                echo round($data['carbsperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbAfternoon']) == 3 && !empty($data['getProduct1afternoon']->use_id) && !empty($data['getProduct2afternoon']->use_id)){
            if($product->id == $data['carbAfternoon'][$i]){
                echo round($data['carbsperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbAfternoon']) == 3 && !empty($data['getProduct2afternoon']->use_id)){
            if($product->id == $data['carbAfternoon'][$i]){
                echo round($data['carbsperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['carbAfternoon']) == 4 && !empty($data['getProduct3afternoon']->use_id)){
            if($product->id == $data['carbAfternoon'][$i]){
                echo round($data['carbsperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['carbAfternoon'][$i]){
                echo round($data['carbsperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['carbAfternoon'][$i]){
      echo round($data['carbsperservingafternoon']/100 * $product->use_id  * 100/ $product->carb). " g". "<br>";      
    }
}

?>

<?php  endif;?>


<?php if($product->id == $data['fatAfternoon'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['fatAfternoon'][$i]){
            echo round($data['fatsperservingUseEmptyafternoon']/2 * 100/ $product->fat).  " g". "<br>";
        } 
    }else{
 
        if(count($data['fatAfternoon']) == 2 && empty($data['getPro1afternoon']->use_id)){
            if($product->id == $data['faLuncht'][$i]){
                echo round($data['fatsperservingUseEmptyafternoon']  * 100/ $product->fat).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['fatAfternoon']) == 2 && !empty($data['getPro1afternoon']->use_id)){
            if($product->id == $data['fatAfternoon'][$i]){
                echo round($data['fatsperservingUseEmptyafternoon'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatAfternoon']) == 3 && !empty($data['getPro1']->use_id) && !empty($data['getPro2afternoon']->use_id)){
            if($product->id == $data['fatAfternoon'][$i]){
                echo round($data['fatsperservingUseEmptyafternoon'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatAfternoon']) == 3 && !empty($data['getPro2afternoon']->use_id)){
            if($product->id == $data['fatAfternoon'][$i]){
                echo round($data['fatsperservingUseEmptyafternoon'] * 100/ $product->fat).  " g". "<br>";
            }
        }elseif(count($data['fatAfternoon']) == 4 && !empty($data['getPro3afternoon']->use_id)){
            if($product->id == $data['fatAfternoon'][$i]){
                echo round($data['fatsperservingUseEmptyafternoon'] * 100/ $product->fat).  " g". "<br>";
            }
        }else{
            if($product->id == $data['fatAfternoon'][$i]){
                echo round($data['fatsperservingUseEmptyafternoon'] * 100/ $product->fat).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['fatAfternoon'][$i]){
      echo round($data['fatsperservingafternoon']/100 * $product->use_id  * 100/ $product->fat). " g". "<br>";      
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['otherAfternoon'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['otherAfternoon'][$i]){
            echo round($data['othersperservingUseEmptyafternoon']/2 * 100/ $product->carb).  " g". "<br>";
        } 
    }else{
 
        if(count($data['otherAfternoon']) == 2 && empty($data['getPr1afternoon']->use_id)){
            if($product->id == $data['otherAfternoon'][$i]){
                echo round($data['othersperservingUseEmptyafternoon']/2 * 100/ $product->carb).  " g". "<br>";
            }
            // Two products one with out use_id and one with use_is  
        }elseif(count($data['otherAfternoon']) == 2 && !empty($data['getPr1afternoon']->use_id)){
            if($product->id == $data['otherAfternoon'][$i]){
                echo round($data['othersperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherAfternoon']) == 3 && !empty($data['getPr1afternoon']->use_id) && !empty($data['getPr2afternoon']->use_id)){
            if($product->id == $data['otherAfternoon'][$i]){
                echo round($data['othersperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherAfternoon']) == 3 && !empty($data['getPr2afternoon']->use_id)){
            if($product->id == $data['otherAfternoonlunch'][$i]){
                echo round($data['othersperservingUseEmptyafternoon']/2 * 100/ $product->carb).  " g". "<br>";
            }
        }elseif(count($data['otherAfternoon']) == 4 && !empty($data['getPr3afternoon']->use_id)){
            if($product->id == $data['otherAfternoon'][$i]){
                echo round($data['othersperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }else{
            if($product->id == $data['otherAfternoon'][$i]){
                echo round($data['othersperservingUseEmptyafternoon'] * 100/ $product->carb).  " g". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['otherAfternoon'][$i]){
      echo round($data['othersperservingafternoon'] /100 * $product->use_id * 100/ $product->carb). " g". "<br>";      
    }
}
?>

<?php  endif;?>

<?php endforeach;?>
<?php endfor;?>

</div>
</div>
