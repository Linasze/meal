<?php require_once APPROOT . '/views/theme/header.php'; ?>    
<?php flash('update'); ?>
<div class="col-md-10 mx-auto">
<div class="card card-body text-center">
Nutrition plan settings
</div>
<div class="card card-body">
<form action="<?php echo URLROOT;?>/settings/update" method="post">
<div class="form-goup form-inline">
<input class="form-control" type="text" name="wake_up" value="<?php echo $data->wake_up;?>">
<input class="form-control" type="text" name="go_sleep" value="<?php echo $data->go_sleep;?>">
<input class="form-control" type="text" name="eating_count" value="<?php echo $data->eating_count;?>">
</div>
<input class="btn btn-primary mt-3" type="submit" value="Update">
</form>
</div>

</div>
<?php require_once APPROOT . '/views/theme/footer.php'; ?>