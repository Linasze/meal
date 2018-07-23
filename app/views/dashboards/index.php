<?php require_once APPROOT . '/views/theme/header.php'; ?>   
<?php flash('message'); ?>
<?php if(empty($data['user_settings'])): ?>
<form action="<?php echo URLROOT;?>/dashboards/generate" method="post">
<input type="submit" class="btn btn-secondary" value="Generate nutrition plan">
</form>
<?php endif; ?>

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











<?php require_once APPROOT . '/views/theme/footer.php'; ?>