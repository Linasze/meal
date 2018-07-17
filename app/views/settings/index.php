<?php require_once APPROOT . '/views/theme/header.php'; ?>
<?php flash('update'); ?>
<div class="col-md-10 mx-auto">
<div class="card card-body text-center">
Nutrition plan settings
</div>
<div class="card card-body">
<form action="<?php echo URLROOT;?>/settings/update" method="post">
<div class="form-goup form-inline">
<input class="form-control" type="text" name="wake_up" data-toggle="timepicker" value="<?php echo $data->wake_up;?>">
<input class="form-control" type="text" name="go_sleep" data-toggle="timepicker" value="<?php echo $data->go_sleep;?>">
<select class="form-control" name="eating_count">
<?php for($i = 3; $i <= 6; $i++): ?>
     <option class="form-control" value="<?php echo $i; ?>"<?php if($data->eating_count == $i){?> selected <?php };?>> <?php echo $i; ?></option>
<?php endfor;?>   
    </select>
</div>
<input class="btn btn-primary mt-3" type="submit" value="Update">
</form>
</div>
	</div>
 </div>
 <script>
	        document.addEventListener("DOMContentLoaded", function(event)
			{
			    timepicker.load({
			        interval: 15
			       
			    });
			});
		</script>
<?php require_once APPROOT . '/views/theme/footer.php'; ?>

