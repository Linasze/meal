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

<?php for($i = 0; $i <=9; $i++): ?>
<?php foreach($data['products'] as $product) : ?>

<?php if($product->id == $data['protein'][$i]): ?>
<?php echo $product->title . " ";?> 

<?php 

if(empty($product->use_id)){ 
    if(!empty($product->use_id)){
        if($product->id == $data['protein'][$i]){
            echo round($data['proteinsperservingUseEmpty']/ $product->protein/2).  " g". "<br>";
        } 
    }else{
 
        if(count($data['protein']) == 2 && empty($data['get_product1']->use_id)){
            if($product->id == $data['protein'][$i]){
                echo round($data['proteinsperservingUseEmpty']/ $product->protein/2).  " ge". "<br>";
            }
        }elseif(count($data['protein']) == 2 && !empty($data['get_product1']->use_id)){
            if($product->id == $data['protein'][$i]){
                echo round($data['proteinsperservingUseEmpty']).  " ga". "<br>";
            }
        }elseif(count($data['protein']) == 3 && !empty($data['get_product1']->use_id) && !empty($data['get_product2']->use_id)){
            if($product->id == $data['protein'][$i]){
                echo round($data['proteinsperservingUseEmpty']/ $product->protein-$data['minus'] ).  " gugu". "<br>";
            }
        }elseif(count($data['protein']) == 3 && !empty($data['get_product2']->use_id)){
            if($product->id == $data['protein'][$i]){
                echo round($data['proteinsperservingUseEmpty']/ $product->protein/2).  " gege". "<br>";
            }
       

        }else{
            if($product->id == $data['protein'][$i]){
                echo round($data['proteinsperservingUseEmpty']).  " gg". "<br>";
            }
        }
    }
}

if(!empty($product->use_id)){ 
    if($product->id == $data['protein'][$i]){
      echo round($data['proteinsperserving']/ $product->protein /100 * $product->use_id). " g". "<br>";      
    }
}

?>

<?php  endif;?>

<?php if($product->id == $data['carb'][$i]): ?> 
<?php  echo $product->title . " " . round($data['carbsperserving'] * 100 / $product->carb). " g". "<br>"; ?>
<?php  endif;?>

<?php if($product->id == $data['fat'][$i]): ?>
<?php  echo $product->title. " " . round($data['fatsperserving'] * 100 / $product->fat). " g". "<br>"; ?>
<?php  endif;?>

<?php if($product->id == $data['other'][$i]): ?>
<?php  echo $product->title ." ";?>
<?php if(empty($product->use_id)){
echo "<br>";
}?>
<?php if(!empty($product->use_id)){ 
 if($product->id == $data['product_id'][$i]){
echo round($data['othersperserving'] * $product->use_id /4 * 100 / $product->carb). " g" ."<br>";
}}?>
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