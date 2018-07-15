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
<?php $break = explode(",", $product->other);?>
<?php if($product->id == $data['protein'][$i]): ?>
<?php  echo $product->title . " " . round($data['proteinsperserving'] * 100 / $product->protein). " g". "<br>"; ?>
<?php  endif;?>

<?php if($product->id == $data['carb'][$i]): ?> 
<?php  echo $product->title . " " . round($data['carbsperserving'] * 100 / $product->carb). " g". "<br>"; ?>
<?php  endif;?>

<?php if($product->id == $data['fat'][$i]): ?>
<?php  echo $product->title. " " . round($data['fatsperserving'] * 100 / $product->fat). " g". "<br>"; ?>
<?php  endif;?>

<?php if($product->id == $data['other'][$i]): ?>
<?php  echo $product->title ." ";?>
<?php if(!empty($product->use_id)){ 
 if($product->id == $data['use_id'][$i]){
echo round($data['othersperserving'] * $product->use_id /4 * 100 / $product->carb). " g" ."<br>";}}?>
<?php  endif;?>
<?php endforeach;?>
<?php endfor;?>
<?php  endif;?>
</div>
</div>
<?php require_once APPROOT . '/views/theme/footer.php'; ?>