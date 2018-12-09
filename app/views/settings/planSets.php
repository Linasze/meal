<?php require_once APPROOT . '/views/theme/header.php'; ?>
<?php flash('update'); ?>
<div class="container">
    <div class="row">

<div class="col-md col- mx-auto">
  <div class="card">
<div class="card-body">
    <div class="row">
        <div class="col-md-5 col- "><h4>Nutrition plan settings</h4></div>
            <div class="col-md-7 col- ">
<form action="<?php echo URLROOT;?>/dashboards/regenerate" method="POST" class="btn-floating">
<input type="submit" class="btn btn-secondary" value="Regenerate Plan">
</form></div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md col-">
  <form action="updatePlan" method="post">
        <div class="form-group row">
          <label class="col- col-md-4 form-label">Wake up time</label>
          <div class="col- col-md-8">
            <input id="wake_up" name="wake_up"  class="form-control here" required="required" type="text" value="<?php echo $data['settings']->wake_up;?>">
          </div>
        </div>
        <div class="form-group row">
          <label  class="col- col-md-4 form-label">Go to sleep time</label>
          <div class="col- col-md-8">
            <input id="go_sleep" name="go_sleep" required="required" class="form-control here" type="text" value="<?php echo $data['settings']->go_sleep;?>">
          </div>
        </div>
        <div class="form-group row">
          <label  class="col- col-md-4 form-label">Eatings count per day</label>
          <div class="col- col-md-8">
          <select class="form-control" name="eating_count">
                <?php for($i = 3; $i <= 6; $i++): ?>
          <option class="form-control" value="<?php echo $i; ?>"<?php if($data['settings']->eating_count == $i){?> selected <?php };?>> <?php echo $i; ?></option>
                <?php endfor;?>
          </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col- col-md-4 form-label">Kilocalories</label>
          <div class="col- col-md-8">
  <?php
     $age = (date("md", date("U", mktime(0, 0, 0, $data['user']->month, $data['user']->day, $data['user']->years))) > date("md")? ((date("Y") - $data['user']->years) - 1) : (date("Y") - $data['user']->years));
   ?>
    <input id="kcal" name="kcal" class="form-control here" required="required" type="text" value="<?php
  if($data['user']->sex == 1){
echo round((66.5 + (13.75 * $data['user']->weight) + (5.003 * $data['user']->height) - (6.755 * $age)) * $data['user']->activity + $data['user']->purpose);
}else{
echo round((655.1 + (9.563 * $data['user']->weight) + (1.850 * $data['user']->height) - (4.676 * $age)) * $data['user']->activity + $data['user']->purpose);
 } ?>" disabled>
          </div>
        </div>

        <div class="form-group row">
          <label  class="col- col-md-4 form-label">Physical activity</label>
          <div class="col- col-md-8">
          <select name="activity" id="activity" class="form-control">
            <option class="form-control" value="1.2"<?php if($data['user']->activity == 1.2){?> selected <?php };?>>Sedentary work and low physical activity.</option>
            <option class="form-control" value="1.375"<?php if($data['user']->activity == 1.375){?> selected <?php };?>>3-5 days a week for 30-50 minutes, or housekeeping.</option>
            <option class="form-control" value="1.55"<?php if($data['user']->activity == 1.55){?> selected <?php };?>>3-5 days a week for 30-60 minutes training.</option>
            <option class="form-control" value="1.725"<?php if($data['user']->activity == 1.725){?> selected <?php };?>>On average, a very active 45-60 minute workout 6-7 times a week.</option>
            <option class="form-control" value="1.9"<?php if($data['user']->activity == 1.9){?> selected <?php };?>>Very intense 90-minute and longer-term workouts 6-7 times a week.</option>
            </select>
          </div>
        </div>
            <div class="form-group row">
          <label  class="col- col-md-4 form-label">Purpose</label>
          <div class="col- col-md-8">
            <select name="purpose" id="purpose" class="form-control">
            <option class="form-control" value="0"<?php if($data['user']->purpose == 0){?> selected <?php };?>>To live healthier, and get more fit.</option>
            <option class="form-control" value="-500"<?php if($data['user']->purpose == -500){?> selected <?php };?>>Reduce weight, get rid of unnecessary kilograms.</option>
            <option class="form-control" value="+500"<?php if($data['user']->purpose == +500){?> selected <?php };?>>Grow muscle mass and volume</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <div class="offset-4 col- col-md-8">
            <button name="submit" type="submit" class="btn btn-primary">Save</button>
          </div>
        </div>
      </form>
        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once APPROOT . '/views/theme/footer.php'; ?>

