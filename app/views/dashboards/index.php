<?php require_once APPROOT . '/views/theme/header.php'; ?>    
<div class="card card-body">
<div class="col-md card card-body">

<h4><?php echo $data['breakfast']->title; ?></h4>
<p><?php echo $data['breakfast']->recipe; ?></p>

<?php for($i = 0; $i <=9; $i++): ?>
<?php foreach($data['products'] as $product) : ?>
<?php if($product->id == $data['protein'][$i]): ?>
<p><?php  echo $product->title ." ". $product->carb." ". $product->protein; ?></p>
<?php  endif;?>

<?php if($product->id == $data['carb'][$i]): ?>
<p><?php  echo $product->title; ?></p>
<?php  endif;?>

<?php if($product->id == $data['fat'][$i]): ?>
<p><?php  echo $product->title; ?></p>
<?php  endif;?>

<?php if($product->id == $data['other'][$i]): ?>
<p><?php  echo $product->title; ?></p>
<?php  endif;?>

<?php endforeach;?>
<?php endfor;?>

</div>
</div>
<?php require_once APPROOT . '/views/theme/footer.php'; ?>