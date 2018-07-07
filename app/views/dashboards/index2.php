<?php require_once APPROOT . '/views/theme/header.php'; ?>    
<div class="card card-body">
<div class="col-md card card-body">

<!-- three eatings -->

<!-- Break fast -->

<?php if($data['user_settings']->eating_count == 6): ?>
  <?php foreach($data['meals'] as $meal): ?>
    <?php foreach($data['products'] as $product): ?>
      <?php if($meal->type_id == 1): ?>          
        
        <?php if($product->id == $meal->product1): ?>
           <h4><?php echo $meal->title;?></h4>
           <p><?php echo $meal->recipe;?> </p>   
         
           <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>
           
           <?php elseif($product->id == $meal->product2): ?>
           <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>
        
           <?php elseif($product->id == $meal->product3): ?>
           <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product4): ?>
           <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product5): ?>
                 <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product6): ?>
                <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product7): ?>
              <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product8): ?>
                <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product9): ?>
               <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product10): ?>
                <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product11): ?>  <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product12): ?>
          <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product13): ?>
         <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product14): ?>
          <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product15): ?>
         <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product16): ?>
         <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product17): ?>
          <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product18): ?>
            <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product19): ?>
          <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product20): ?>
          <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product21): ?>
           <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product22): ?>
          <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product23): ?>
         <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product24): ?>
        <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product25): ?>
       <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product26): ?>
         <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product27): ?>
          <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product28): ?>
          <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product29): ?>
       <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product30): ?>
       <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product31): ?>
        <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product32): ?>
        <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product33): ?>
          <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product34): ?>
          <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>

           <?php elseif($product->id == $meal->product35): ?>
          <?php if($product->cat == 1): ?>
           <?php echo $product->title  . " ". round($data['carbsperserving'] * 100 / $product->carb). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 2):?>
           <?php echo $product->title  . " ". round($data['proteinsperserving'] * 100 / $product->protein). " g"."<br><br>"; ?>
           <?php elseif($product->cat == 3):?>
           <?php echo $product->title  . " ". round($data['fatsperserving'] * 100 / $product->fat). " g"."<br><br>"; ?>
           <?php endif;?>
        <?php endif;?>  
       
      <?php endif;?>
     
    <?php endforeach;?>
  <?php endforeach;?>
<?php endif;?>


   



</div>
</div>
<?php require_once APPROOT . '/views/theme/footer.php'; ?>