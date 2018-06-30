<?php require_once APPROOT . '/views/admins/layouts/leftPanel.php'; ?>
<form action="<?php echo URLROOT;?>/meals/addMeals" method="post">
<div class="col-md-6">
    <h4 class="mb-2">Title</h4>
    <input class="form-control mb-2" type="text" name="title">
</div>
<div class="col-md-6">
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
   <?php for($i = 1; $i<=10; $i++): ?>

    <select class="form-control mb-2" name="product<?php echo $i;?>">
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
    <?php for($i = 11; $i<=20; $i++): ?>
    <select class="form-control mb-2" name="product<?php echo $i;?>">
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
    <?php for($i = 21; $i<=30; $i++): ?>
    <select class="form-control mb-2" name="product<?php echo $i;?>">
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
   <?php for($i = 30; $i <= 35; $i++):?>
    <select class="form-control mb-2" name="product<?php echo $i;?>">
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

<div class="col-md col-xs">
    <input type="submit" value="Submit">
</div>
</form>

<?php require_once APPROOT . '/views/admins/layouts/rightPanel.php'; ?>
