<?php require_once APPROOT . '/views/admins/layouts/leftPanel.php'; ?>


     <div class="col-md-12 card card-body">
     
<div class="mb-3 col-md-12 form-inline">
<h3 class="mt-auto">Edit Meal</h3> 
<a href="<?php echo URLROOT; ?>/meals/showMeals" class="ml-auto btn btn-light"><i class="fa fa-backward"></i> Back</a>
   </div>
        
<form action="<?php echo URLROOT; ?>/meals/editMeal/<?php echo $data['id']; ?>" method="post">
    <div class="col-md-6 ">
        <div class="form-group">
    <h4 class="mb-2">Title</h4>
    <input class="form-control mb-2" type="text" name="title" value="<?php echo $data['title'];?>">
    </div>
     </div>

<div class="col-md-6">
<div class="form-group">
    <h4 class="mb-2">Type</h4>
   <select class="form-control" name="type_id">
      
       <?php foreach($data['mealtypes'] as $mealtype) : ?>
    <option class="form-control" value="<?php echo $mealtype->id; ?>"
     <?php if($mealtype->id == $data['type_id']){?> selected <?php };?>><?php echo $mealtype->title; ?></option> 
     <?php endforeach; ?>
   </select>
</div></div>

<!-- Select protein products -->

<div class="col-md-3">

    <div class="form-group">
   <h4 class="mb-2 text-center">Protein</h4>
  
   <?php for($i = 0; $i<=4; $i++): ?>
   <select class="form-control mb-2" name="protein<?php echo $i+1; ?>">
    <option  value="0">Pasirinkite produkta</option>
    <?php foreach($data['products'] as $product) : ?>
    <?php if($product->cat == 2): ?>
    <option class="form-control" value="<?php echo $product->id; ?>"
    <?php if($product->id == $data['protein'][$i]){?> selected <?php };?>><?php echo $product->title; ?></option> 
      
<?php endif; ?>
<?php endforeach; ?>
</select>
<?php endfor; ?>

    </div>
</div>

<!-- Select carb products -->
<div class="col-md-3">
    <div class="form-group">
   <h4 class="mb-2 text-center">Carb</h4>
   <?php for($i = 0; $i<= 4; $i++): ?>
    <select class="form-control mb-2" name="carb<?php echo $i+1;?>">
    <option value="0">Pasirinkite produkta</option>
    <?php foreach($data['products'] as $product) : ?>
    <?php if($product->cat == 1): ?>
    <option class="form-control" value="<?php echo $product->id; ?>"
     <?php if($product->id == $data['carb'][$i]){?> selected <?php };?>><?php echo $product->title; ?></option> 

<?php endif; ?>
<?php endforeach; ?>
</select>
<?php endfor; ?>
  

    </div>
</div>

<!-- Select fat products -->
<div class="col-md-3">
    <div class="form-group">
   <h4 class="mb-2 text-center">Fat</h4>
   <?php for($i = 0; $i<= 4; $i++): ?>
    <select class="form-control mb-2" name="fat<?php echo $i+1; ?>">
    <option  value="0">Pasirinkite produkta</option>
    <?php foreach($data['products'] as $product) : ?>
    <?php if($product->cat == 3): ?>
    <option class="form-control" value="<?php echo $product->id; ?>"
     <?php if($product->id == $data['fat'][$i]){?> selected <?php };?>><?php echo $product->title; ?></option> 
<?php endif; ?>
<?php endforeach; ?>
</select>
<?php endfor; ?>
</div>
</div>

<!-- Select other products -->
<div class="col-md-3">
    <div class="form-group">
   <h4 class="mb-2 text-center">Other</h4>
   <?php for($i = 0; $i<= 4; $i++): ?>
    <select class="form-control mb-2" name="other<?php echo $i+1;?>">
    <option value="0">Pasirinkite produkta</option>
    <?php foreach($data['products'] as $product) : ?>
    <?php if($product->cat == 4): ?>
    <option class="form-control" value="<?php echo $product->id; ?>"
     <?php if($product->id == $data['other'][$i]){?> selected <?php };?>><?php echo $product->title; ?></option> 
<?php endif; ?>
<?php endforeach; ?>
</select>
<?php endfor;?>

</div>
</div>
<div class="col-md col-sm">
<textarea class="form-control" name="recipe" cols="30" rows="10"><?php echo $data['recipe'];?></textarea>
</div>

          <div class="col-md mt-3"> 
            <input type="submit" class="btn btn-success" value="Submit">
        </div> 
        </form>
    </div>

<?php require_once APPROOT . '/views/admins/layouts/rightPanel.php'; ?>