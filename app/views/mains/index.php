<?php require_once APPROOT . '/views/theme/publicheader.php'; ?>
<?php if(empty($_SESSION['user_id'])): ?>
<div class="container">
<div class="row">
<div class="col-md-6 mx-auto mt-5">
<div class="card card-body">

<form id="myform" method="POST">

<div class="form-group">
<!-- <label>Purpose:</label> -->
<select name='purpose' class='form-control' required>
 <option selected hidden>Choose what you want to reach.</option>
 <option value='0'>To live healthier, and get more fit</option>
 <option value='-500'>Reduce weight, get rid of unnecessary kilograms</option>
 <option value='+500'>Grow muscle mass and volume</option>
 </select>
</div>
<div class="form-group">
<div class="slidecontainer">
  <input type="range" min="120" max="220" value="120" name="height" class="slider" id="heightRange">
  <p>Height: <span id="heightValue"></span></p>
</div>

<div class="slidecontainer">
  <input type="range" min="40" max="150" value="40" name="weight" class="slider" id="weightRange">
  <p>Weight: <span id="weightValue"></span></p>
</div>
    </div>

<div class="form-inline">
<!-- <label>Enter age:</label> -->
<!-- <label>Sex:</label> -->
<select name='sex' class='form-control  mx-2 col-md-2' required>
  <option value='1'>Men</option>
  <option value='2'>Women</option>
 </select>
<select name="years" class="form-control mx-2" >
       <option selected hidden>Years</option>
   <?php for($y = 1950; $y <= date('Y')-10 ; $y++): ?>
    <option value="<?php echo $y;?>"><?php echo $y;?></option>
    <?php endfor; ?>
</select>
<select name="month" class="form-control mx-2">
    <option select hidden>Month</option>
    <?php for($m = 1; $m <= 12; $m++): ?>
    <option value="<?php echo $m; ?>"><?php echo date('F', mktime(0,0,0,$m)) ;?></option>
    <?php endfor;?>
</select>

<select name="day" class="form-control">
    <option select hidden>Day</option>
    <?php for($d = 1; $d <= 31; $d++): ?>
    <option value="<?php echo $d; ?>"><?php echo $d;?></option>
    <?php endfor;?>
</select>

</div>

<div class="form-group mt-2">
<!-- <label>Activity:</label> -->
<select name='activity' class='form-control' required>
  <option selected hidden>Select physical activity</option>
  <option value='1.2'>Sedentary work and low physical activity</option>
  <option value='1.375'>3-5 days a week for 30-50 minutes, or housekeeping</option>
  <option value='1.55'>3-5 days a week for 30-60 minutes training</option>
  <option value='1.725'>On average, a very active 45-60 minute workout 6-7 times a week</option>
  <option value='1.9'>Very intense 90-minute and longer-term workouts 6-7 times a week</option>
</select>
</div>



<input type="submit" id="trigger" value="Submit" class="btn btn-primary" >
</form>

</div>
</div>
</div>
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="ModalLiveLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-header ">
        <h5 class="modal-title" id="ModalLiveLabel">Calories</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
       <h4>During the day you need to eat calories:</h4>
      <div id="kcal"></div>

                  <h2>Need nutrition plan?</h2>
                   <p>Register and take it!</p>

         <form action="users/register" method="post">
          <div class="form-group">
          <input type="text" class="form-control col-7 mx-auto mb-2" name="name" placeholder="Enter name" required>
          <input type="email" class="form-control col-7 mx-auto mb-2" name="email" placeholder="Enter email" required>
          <input type="password" class="form-control col-7 mx-auto mb-2" name="password" placeholder="Enter password" required>
          <input type="password" class="form-control col-7 mx-auto mb-2" name="confirm_password" placeholder="Confirm password" required>

      <input type="hidden" name="years" id="years" value="years">
      <input type="hidden" name="month" id="month" value="month">
      <input type="hidden" name="day" id="day" value="day">
      <input type="hidden" name="sex" id="sex" value="sex">
      <input type="hidden" name="height" id="height" value="height">
      <input type="hidden" name="weight" id="weight" value="weight">
      <input type="hidden" name="activity" id="activity" value="activity">
      <input type="hidden" name="purpose" id="purpose" value="purpose">

      <input type="submit" value="Submit" class="btn btn-primary">
          </div>
          </form>



      </div>
    </div>
  </div>
</div>

<?php require_once APPROOT . '/views/theme/publicfooter.php'; ?>

    <script src="<?php echo URLROOT;?>/js/main.js"></script>
    <script src="<?php echo URLROOT;?>/js/data/years.js"></script>
    <script src="<?php echo URLROOT;?>/js/data/month.js"></script>
    <script src="<?php echo URLROOT;?>/js/data/day.js"></script>
    <script src="<?php echo URLROOT;?>/js/data/sex.js"></script>
    <script src="<?php echo URLROOT;?>/js/data/height.js"></script>
    <script src="<?php echo URLROOT;?>/js/data/weight.js"></script>
    <script src="<?php echo URLROOT;?>/js/data/activity.js"></script>
    <script src="<?php echo URLROOT;?>/js/data/purpose.js"></script>

<?php else: ?>

<?php redirect('dashboards/index'); ?>
<?php endif; ?>

