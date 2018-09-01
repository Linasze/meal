<?php require_once APPROOT . '/views/theme/header.php'; ?>
<?php flash('message'); ?>
<?php if(!empty($data['meals'])):?>
<?php if(empty($data['user_settings'])): ?>
<div class="container">
<form action="<?php echo URLROOT;?>/dashboards/generate" method="POST">
<input type="submit" class="btn btn-secondary" value="Generate Plan">
</form>
</div>

<?php else: ?>
<div class="row">
<div class="col-lg col- mb-2">
<div id="carauselSlide" class="carousel slide carousel-fade" data-ride="carousel" data-Interval="false">
 <div class="controls-top">
    <a class="btn-floating" href="#carauselSlide" data-slide="prev"><img src="<?php echo URLROOT;?>/public/img/prev.svg" height="50" width="50"></a>
    <a class="btn-floating" href="#carauselSlide" data-slide="next"><img src="<?php echo URLROOT;?>/public/img/forward.svg" height="50" width="50"></a>
 </div>
        <div class="carousel-inner" role="listbox">
           <?php for($day_eating = 0; $day_eating <= 6; $day_eating++): ?>
               <div class="carousel-item <?php if(date("l") == $data['dt']->format("l")) { echo 'active';} ?>">
                <div class="carousel-caption text-secondary">
                    <h2> <?php echo $data['dt']->format('l d F'); $data['dt']->modify('+1 day');?></h2>
                    <div class="col-lg">
                   <div class="card">
                       <div class="card-body d-none d-sm-none d-md-none d-lg-block">
                       <div class="row">
                       <div class="col-lg-2 text-center">Time</div>
                       <div class="col-lg-3 text-center">Dish</div>
                       <div class="col-lg-2 text-center">Protein</div>
                       <div class="col-lg-2 text-center">Carb</div>
                       <div class="col-lg-1 text-center">Fat</div>
                       <div class="col-lg-1 text-center">Kcal</div>
                       <div class="col-lg-1 text-center">Change</div>

                       </div>
                       </div>

                    <div id="accordion">
                    <div class="card">
            <?php if($data['user_settings']->eating_count == 3): ?>
            <?php require_once APPROOT . '/views/dashboards/daily_eatings'. $day_eating .'/breakfast.php'; ?>
            <?php require_once APPROOT . '/views/dashboards/daily_eatings'. $day_eating .'/lunch.php'; ?>
            <?php require_once APPROOT . '/views/dashboards/daily_eatings'. $day_eating .'/dinner.php'; ?>
            <?php elseif($data['user_settings']->eating_count == 4): ?>
            <?php require_once APPROOT . '/views/dashboards/daily_eatings'. $day_eating .'/breakfast.php'; ?>
            <?php require_once APPROOT . '/views/dashboards/daily_eatings'. $day_eating .'/brunch.php'; ?>
            <?php require_once APPROOT . '/views/dashboards/daily_eatings'. $day_eating .'/lunch.php'; ?>
            <?php require_once APPROOT . '/views/dashboards/daily_eatings'. $day_eating .'/dinner.php'; ?>
            <?php elseif($data['user_settings']->eating_count == 5): ?>
            <?php require_once APPROOT . '/views/dashboards/daily_eatings'. $day_eating .'/breakfast.php'; ?>
            <?php require_once APPROOT . '/views/dashboards/daily_eatings'. $day_eating .'/brunch.php'; ?>
            <?php require_once APPROOT . '/views/dashboards/daily_eatings'. $day_eating .'/lunch.php'; ?>
            <?php require_once APPROOT . '/views/dashboards/daily_eatings'. $day_eating .'/afternoon.php'; ?>
            <?php require_once APPROOT . '/views/dashboards/daily_eatings'. $day_eating .'/dinner.php'; ?>
            <?php elseif($data['user_settings']->eating_count == 6): ?>
            <?php require_once APPROOT . '/views/dashboards/daily_eatings'. $day_eating .'/breakfast.php'; ?>
            <?php require_once APPROOT . '/views/dashboards/daily_eatings'. $day_eating .'/brunch.php'; ?>
            <?php require_once APPROOT . '/views/dashboards/daily_eatings'. $day_eating .'/lunch.php'; ?>
            <?php require_once APPROOT . '/views/dashboards/daily_eatings'. $day_eating .'/afternoon.php'; ?>
            <?php require_once APPROOT . '/views/dashboards/daily_eatings'. $day_eating .'/dinner.php'; ?>
            <?php require_once APPROOT . '/views/dashboards/daily_eatings'. $day_eating .'/evening.php'; ?>
            <?php endif; ?>
        </div>
            </div>
              </div>
                    </div>
             </div>
                </div>
                <?php endfor; ?>
    </div>
    </div>
</div>
</div>
<div class="row mb-5">
<div class="col-lg-3 col-md-6 col-sm-12 col- mb-2">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-6 col-md-4 col-6 col-sm-6">
<div class="progress-circle <?php echo ($data['kiloProcent'] > 50) ? 'over50' : ''; ?> p<?php echo $data['kiloProcent']; ?>">
   <span  style="font-family: 'Open Sans', sans-serif;"><?php echo $data['kiloProcent']; ?>%</span>
   <div class="left-half-clipper">
      <div class="first50-bar"></div>
      <div class="value-bar"></div>
   </div>
</div>
</div>
<div class="col-lg-6 col-md-8 col-6 col-sm-6  mt-3"><p style="font-family: 'Open Sans', sans-serif;">Kilokalories <br><?php echo $data['changinKcal'];?> kcal
<?php if($data['kiloProcent'] < 100){
echo "<br>Is missing: ". $data['missing']." kcal";
}elseif($data['kiloProcent'] > 100){
echo "<br>Above: ". $data['above']." kcal";
}
;?>
</p>
</div>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 col-sm-12 col- mb-2">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-6 col-md-4 col-6 col-sm-6">
<div class="progress-circle <?php echo ($data['proProcent'] > 50) ? 'over50' : ''; ?> p<?php echo $data['proProcent']; ?>">
   <span  style="font-family: 'Open Sans', sans-serif;"><?php echo $data['proProcent']; ?>%</span>
   <div class="left-half-clipper">
      <div class="first50-bar"></div>
      <div class="value-bar"></div>
   </div>
</div>
</div>
<div class="col-lg-6 col-md-8 col-6 col-sm-6 mt-3"><p style="font-family: 'Open Sans', sans-serif;">Protein <br><?php echo $data['changinPro'];?> g
<?php if($data['proProcent'] < 100){
echo "<br>Is missing: ". $data['missingPro']." g";
}elseif($data['proProcent'] > 100){
echo "<br>Above: ". $data['abovePro']." g";
}
;?>
</p>
</div>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 col-sm-12 col- mb-2">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-6 col-md-4 col-sm-6 col-6">
<div class="progress-circle <?php echo ($data['carbProcent'] > 50) ? 'over50' : ''; ?> p<?php echo $data['carbProcent']; ?>">
   <span  style="font-family: 'Open Sans', sans-serif;"><?php echo $data['carbProcent']; ?>%</span>
   <div class="left-half-clipper">
      <div class="first50-bar"></div>
      <div class="value-bar"></div>
   </div>
</div>
</div>
<div class="col-lg-6 col-md-8 col-sm-6 col-6 mt-3"><p style="font-family: 'Open Sans', sans-serif;">Carb <br><?php echo $data['changinCarb'];?> g
<?php if($data['carbProcent'] < 100){
echo "<br>Is missing: ". $data['missingCarb']." g";
}elseif($data['proProcent'] > 100){
echo "<br>Above: ". $data['aboveCarb']." g";
}
;?>
</p>
</div>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 col-sm-12 col- mb-2">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-6 col-md-4 col-sm-6 col-6">
<div class="progress-circle <?php echo ($data['fatProcent'] > 50) ? 'over50' : ''; ?> p<?php echo $data['fatProcent']; ?>">
   <span  style="font-family: 'Open Sans', sans-serif;"><?php echo $data['fatProcent']; ?>%</span>
   <div class="left-half-clipper">
      <div class="first50-bar"></div>
      <div class="value-bar"></div>
   </div>
</div>
</div>
<div class="col-lg col-md-8 col-sm-6 col-6 mt-3"><p style="font-family: 'Open Sans', sans-serif;">Fat <br><?php echo $data['changinFat'];?> g
<?php if($data['fatProcent'] < 100){
echo "<br>Is missing: ". $data['missingFat']." g";
}elseif($data['proProcent'] > 100){
echo "<br>Above: ". $data['aboveFat']." g";
}
;?>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
<?php endif; ?>
<?php else: ?>
<div class="container">
<div class="col lg-9 col-12">
<div class="card card-body mx-auto">
No meals
</div>
</div>
</div>
<?php endif; ?>
<?php require_once APPROOT . '/views/theme/footer.php'; ?>
