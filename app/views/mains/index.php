<?php require_once APPROOT . '/views/theme/publicheader.php'; ?>
<?php if(empty($_SESSION['user_id'])): ?>
<style>
.carousel-caption {
    position: absolute;
    top: 0px;
}


.carousel-item {
    height: 100%;
    background: no-repeat center center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }

.carousel-caption {
      position:absolute;
      right:0px;
      bottom:0px;
      left:0px;
      z-index:10;
      padding-top:0px;
      padding-bottom:20px;
      color:#fff;
      text-align: left;
}
</style>
<div id="main-slider" class="carousel" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#main-slider" data-slide-to="0" class="active"></li>
    <li data-target="#main-slider" data-slide-to="1"></li>
    <li data-target="#main-slider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="public/img/First3.jpg" alt="First slide">
      <div class="carousel-caption d-none d-sm-block">
    <div id="text">
        <h2>Eating habits change</h2>
        <p>You do not have to eat less, just eat the right food</p>
    </div>
  </div>
    </div>
  <div class="carousel-item">
      <img class="d-block w-100" src="public/img/Second2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-sm-block">
    <div id="text">
        <h2>Sport</h2>
        <p>You will be able to reach the desired result in sports faster.</p>
    </div>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="public/img/third2.jpg"  alt="Third slide">
      <div class="carousel-caption d-none d-sm-block">
    <div id="text">
        <h2>Progress</h2>
        <p>When you see your changes in your body, you will understand that you have chosen the right one</p>
    </div>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#main-slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container bg">
<div class="row">
<div class="col-md-10 col-xs mx-auto">

<h2 style="font-family: 'Open Sans', sans-serif;">Learn how many kilocalories you need to take during the day</h2>
<form id="myform" method="POST">
<div class="form-group">
<select name="purpose" class="form-control">
 <option selected hidden>Choose your purpose</option>
 <option value='0'>To live healthier, and get more fit</option>
 <option value='-500'>Reduce weight, get rid of unnecessary kilograms</option>
 <option value='+500'>Grow muscle mass and volume</option>
 </select>
</div>
<div class="form-group">
<div class="slidecontainer">
  <input type="range" min="120" max="220" value="170" name="height" class="slider" id="heightRange">
  <p style="font-family: 'Open Sans', sans-serif;">Height: <span id="heightValue"></span> cm.</p>
</div>

<div class="slidecontainer">
  <input type="range" min="40" max="150" value="65" name="weight" class="slider" id="weightRange">
  <p style="font-family: 'Open Sans', sans-serif;">Weight: <span id="weightValue"></span> kg.</p>
</div>
    </div>

<div class="form-group">
<div class="row">
<div class="col-md-12 col-xs-12 mb-2 text-center" style="font-family: 'Open Sans', sans-serif; font-size: 30px;">Your gender and how old you are?</div>
<div class="col-md-2"></div>
<div class="col-md-2 col-xs">
<select name='sex' class='form-control'>
  <option selected hidden>Gender</option>
  <option value='1'>Men</option>
  <option value='2'>Women</option>
 </select>
    </div>

    <div class="col-md-2 col-xs">
<select name="years" class="form-control" >
       <option selected hidden>Years</option>
   <?php for($y = 1950; $y <= date('Y')-10 ; $y++): ?>
    <option value="<?php echo $y;?>"><?php echo $y;?></option>
    <?php endfor; ?>
</select>
    </div>

    <div class="col-md-2 col-xs">
<select name="month" class="form-control">
    <option select hidden>Month</option>
    <?php for($m = 1; $m <= 12; $m++): ?>
    <option value="<?php echo $m; ?>"><?php echo date('F', mktime(0,0,0,$m)) ;?></option>
    <?php endfor;?>
</select>
    </div>

     <div class="col-md-2 col-xs">
<select name="day" class="form-control">
    <option select hidden>Day</option>
    <?php for($d = 1; $d <= 31; $d++): ?>
    <option value="<?php echo $d; ?>"><?php echo $d;?></option>
    <?php endfor;?>
</select>
    </div>

</div>
    </div>

<div class="form-group mt-2">
<!-- <label>Activity:</label> -->
<select name='activity' class='form-control'>
  <option selected hidden>Select physical activity</option>
  <option value='1.2'>Sedentary work and low physical activity</option>
  <option value='1.375'>3-5 days a week for 30-50 minutes, or housekeeping</option>
  <option value='1.55'>3-5 days a week for 30-60 minutes training</option>
  <option value='1.725'>On average, a very active 45-60 minute workout 6-7 times a week</option>
  <option value='1.9'>Very intense 90-minute and longer-term workouts 6-7 times a week</option>
</select>
</div>
<div class="col-md text-center">
<input type="submit" id="trigger" value="Calculate" class="calculate-button">
</div>
</form>


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
       <h4 style="font-family: 'Open Sans', sans-serif;">During the day you need to eat calories:</h4>
          <h3><div id="kcal"></div></h3>

                  <h2 style="font-family: 'Open Sans', sans-serif;">Need nutrition plan?</h2>
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

      <input type="submit" value="Take plan" class="btn btn-primary">
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

<div class="container bg pb-5">
   <div class="col-md-10 col-xs mx-auto">
    <div class="card" style="font-family: 'Open Sans', sans-serif;">
        <div class="card-header">About Us</div>
        <div class="card-body">Who are we? We are a nutrition planning system that easily, comfortably
and easily solves nutrition, planning, and analyzing issues. You will
have a diet plan that you can adjust in different ways. Can we help if
I do not eat, just want to eat healthy and lose weight? The system will
consist of a nutrition plan for weight loss, you will have specific recipes,
will specify exactly what you need. The nutrition plan is easily adapted to
individual needs.</div>
       </div>
    </div>
</div>
<footer class="bg2 pb-5">
<div class="container">
<div class="row">
<div class="col-md-2 col-xs"></div>
   <div class="col-md-5 col-xs mt-3" style="font-family: 'Open Sans', sans-serif; font-size: 25px;">Contact Me
   <p style="color: #666666; font-weight: bold; font-size: 16px;">PHP Developer
    <br><br>Tel: <span style="font-weight:normal;"><?php echo WEB_MASTER_TEL;?></span><br>Email: <span style="font-weight:normal;"><?php echo WEB_MASTER_EMAIL;?></span>
    </div>

<div class="col-md-2 col-xs mt-3" style="font-family: 'Open Sans', sans-serif; font-size: 25px;">Fallow Me<br>
    <span><a target="_blank" href="https://www.facebook.com/zemgulys" class="fab fa-facebook"></a> <a target="_blank" href="https://www.instagram.com/linas._zem/" class="fab fa-instagram"></a></span>
</div>
   <div class="col-md-3 col-xs"> </div>






</div>
    </div>
</footer>
<?php else: ?>

<?php redirect('dashboards/index'); ?>
<?php endif; ?>

