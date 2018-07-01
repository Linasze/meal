<?php require_once APPROOT . '/views/theme/header.php'; ?>    
<div class="card card-body">
<div class="col-md card card-body"><h5>Hello <?php echo $data->name;?></h5>
<p>All calories per day: <?php echo $data->kcal;?></p>
<p>Height: <?php echo $data->height;?> cm.</p>
<p>Weight: <?php echo $data->weight;?> kg.</p>
<p>Age: <?php echo $data->age;?></p>
</div>




</div>
<?php require_once APPROOT . '/views/theme/footer.php'; ?>