<?php require_once APPROOT . '/views/theme/header.php'; ?>

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
                    <div class="col-md">
                   <div class="card">
                       <div class="card-body">
                       <div class="row">
                       <div class="col-md-2 col-xs-2 text-center">Time</div>
                       <div class="col-md-3 col-xs-3 text-center">Dish</div>
                       <div class="col-md-2 col-xs-2 text-center">Protein</div>
                       <div class="col-md-2 col-xs-2 text-center">Carb</div>
                       <div class="col-md-1 col-xs-1 text-center">Fat</div>
                       <div class="col-md-1 col-xs-1 text-center">Kcal</div>
                       <div class="col-md-1 col-xs-1 text-center">Change</div>

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

    <?php require_once APPROOT . '/views/theme/footer.php'; ?>
