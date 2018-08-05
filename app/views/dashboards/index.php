<?php require_once APPROOT . '/views/theme/header.php'; ?>

<?php
$dt = new DateTime;
$year = $dt->format('o');
$week = $dt->format('W');
?>

<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-Interval="false">

<div class="controls-top">
        <a class="btn-floating" href="#carouselExampleIndicators" data-slide="prev"><img src="<?php echo URLROOT;?>/public/img/prev.svg" height="50" width="50"></a>
        <a class="btn-floating" href="#carouselExampleIndicators" data-slide="next"><img src="<?php echo URLROOT;?>/public/img/forward.svg" height="50" width="50"></a>
    </div>
        <div class="carousel-inner" role="listbox">
            <?php for($day = 1; $day <= 7; $day++): ?>
            <div class="carousel-item <?php if(date("l") == $dt->format("l")) { echo 'active';} ?>">
                
                <div class="carousel-caption d-none d-md-block text-secondary">
                    <h2>
                        <?php echo $dt->format('l d F'); $dt->modify('+1 day'); ?>
                    </h2>
                   <div class="card">
                       <div class="card-body">
                       <div class="row">
                       <div class="col-md-2 text-center">Time</div>
                       <div class="col-md-3 text-center">Dish</div>
                       <div class="col-md-2 text-center">Protein</div>
                       <div class="col-md-2 text-center">Carb</div>
                       <div class="col-md-1 text-center">Fat</div>
                       <div class="col-md-1 text-center">Kcal</div>
                       <div class="col-md-1 text-center">Change</div>

                       </div>
                       </div>
                    <div id="accordion">
                    <div class="card">              
            <?php if($data['user_settings']->eating_count == 3): ?>
            <?php require_once APPROOT . '/views/dashboards/daily_eatings/breakfast.php'; ?>  
            <?php require_once APPROOT . '/views/dashboards/daily_eatings/lunch.php'; ?>  
            <?php require_once APPROOT . '/views/dashboards/daily_eatings/dinner.php'; ?>  
            <?php elseif($data['user_settings']->eating_count == 4): ?>
            <?php require_once APPROOT . '/views/dashboards/daily_eatings/breakfast.php'; ?>  
            <?php require_once APPROOT . '/views/dashboards/daily_eatings/brunch.php'; ?>  
            <?php require_once APPROOT . '/views/dashboards/daily_eatings/lunch.php'; ?>  
            <?php require_once APPROOT . '/views/dashboards/daily_eatings/dinner.php'; ?>
            <?php elseif($data['user_settings']->eating_count == 5): ?>
            <?php require_once APPROOT . '/views/dashboards/daily_eatings/breakfast.php'; ?>  
            <?php require_once APPROOT . '/views/dashboards/daily_eatings/brunch.php'; ?>  
            <?php require_once APPROOT . '/views/dashboards/daily_eatings/lunch.php'; ?>  
            <?php require_once APPROOT . '/views/dashboards/daily_eatings/afternoon.php'; ?>  
            <?php require_once APPROOT . '/views/dashboards/daily_eatings/dinner.php'; ?>  
            <?php elseif($data['user_settings']->eating_count == 6): ?>
            <?php require_once APPROOT . '/views/dashboards/daily_eatings/breakfast.php'; ?>  
            <?php require_once APPROOT . '/views/dashboards/daily_eatings/brunch.php'; ?>  
            <?php require_once APPROOT . '/views/dashboards/daily_eatings/lunch.php'; ?>  
            <?php require_once APPROOT . '/views/dashboards/daily_eatings/afternoon.php'; ?>  
            <?php require_once APPROOT . '/views/dashboards/daily_eatings/dinner.php'; ?>  
            <?php require_once APPROOT . '/views/dashboards/daily_eatings/evening.php'; ?>  
            <?php endif; ?>
        </div>
            </div>
              </div>
             </div>
                </div>
         
            <?php endfor; ?>

    </div>
    </div>

    <?php require_once APPROOT . '/views/theme/footer.php'; ?>
