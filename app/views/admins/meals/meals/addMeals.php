<?php require_once APPROOT . '/views/admins/layouts/leftPanel.php'; ?>
<div class="col-md card card-body">  
<div class="mb-3 col-md-12 form-inline">
<h3 class="mt-auto">Add Meal</h3> 
<a href="<?php echo URLROOT; ?>/admins/manageMeals" class="ml-auto btn btn-light"><i class="fa fa-backward"></i> Back</a>
   </div>
<form action="<?php echo URLROOT;?>/meals/addMeals" method="post">
<div class="col-md-6">
<div class="form-group ">
    <h4 class="mb-2">Title</h4>
    <input class="form-control mb-2" type="text" name="title">
</div></div>

<div class="col-md-6">
<div class="form-group">
    <h4 class="mb-2">Type</h4>
   <select class="form-control" name="type_id">
      <?php foreach($data['mealtypes'] as $meal_type): ?>
       <option value="<?php echo $meal_type->id;?>"><?php echo $meal_type->title;?></option>
     <?php endforeach; ?>
   </select>
</div>
</div>


<!-- Select protein products -->
<div class="col-md-3">

    <div class="form-group">
   <h4 class="mb-2 text-center">Protein</h4>
   <?php for($i = 1; $i<=5; $i++): ?>

    <select class="form-control mb-2" name="protein<?php echo $i;?>">
    <option value="0">Pasirinkite produkta</option>
    <?php foreach($data['products'] as $product) : ?>
    <?php if($product->cat == 2): ?>
     <option class="form-control" value="<?php echo $product->id; ?>"><?php echo $product->title; ?></option>    
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
    <?php for($i = 1; $i<=5; $i++): ?>
    <select class="form-control mb-2" name="carb<?php echo $i;?>">
    <option value="0">Pasirinkite produkta</option>
    <?php foreach($data['products'] as $product) : ?>
    <?php if($product->cat == 1): ?>
        <option class="form-control" value="<?php echo $product->id; ?>"><?php echo $product->title; ?></option>
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
    <?php for($i = 1; $i<=5; $i++): ?>
    <select class="form-control mb-2" name="fat<?php echo $i;?>">
    <option value="0">Pasirinkite produkta</option>
    <?php foreach($data['products'] as $product) : ?>
    <?php if($product->cat == 3): ?>
        <option class="form-control" value="<?php echo $product->id; ?>"><?php echo $product->title; ?></option>
<?php endif; ?>
<?php endforeach; ?>
</select>
<?php endfor;?>
</div>
</div>

<!-- Select other products -->
<div class="col-md-3">
    <div class="form-group">
   <h4 class="mb-2 text-center">Other</h4>
   <?php for($i = 1; $i <= 5; $i++):?>
    <select class="form-control mb-2" name="other<?php echo $i;?>">
    <option value="0">Pasirinkite produkta</option>
    <?php foreach($data['products'] as $product) : ?>
    <?php if($product->cat == 4): ?>
        <option class="form-control" value="<?php echo $product->id; ?>"><?php echo $product->title; ?></option>
<?php endif; ?>
<?php endforeach; ?>
</select>
<?php endfor;?>
</div>
</div>
<div class="col-md col-sm">
<textarea class="form-control" name="recipe" cols="30" rows="10" placeholder="Recipe"></textarea>
</div>


<div class="col-md col-xs mt-3">
    <input type="submit" value="Submit">
</div>
</form>
</div>  
<?php require_once APPROOT . '/views/admins/layouts/rightPanel.php'; ?>
