<?php require_once APPROOT . '/views/admins/layouts/leftPanel.php'; ?>


     <div class="col-md card card-body">
        <h3>Edit Product</h3> 
        <p>Macronutrients written per 100g. product.</p>
        
<form action="<?php echo URLROOT; ?>/meals/editMeal/<?php echo $data['id']; ?>" method="post">
    <div class="col-md-6">
        <div class="form-group">
    <h4 class="mb-2">Title</h4>
    <input class="form-control mb-2" type="text" name="title" value="<?php echo $data['title'];?>">
    </div>
     </div>

<div class="col-md-6">
<div class="form-group">
    <h4 class="mb-2">Type</h4>
   <select class="form-control" name="type_id">
       <option selected hidden value="<?php echo $data['type_id'];?>">
       <?php foreach($data['mealtypes'] as $mealtype) : ?>
    <option class="form-control" value="<?php echo $product->id; ?>"
     <?php if($mealtype->id == $data['type_id']){?> selected <?php };?>><?php echo $mealtype->title; ?></option> 
     <?php endforeach; ?></option>
   </select>
</div></div>


<!-- Select protein products -->

<div class="col-md-3">

    <div class="form-group">
   <h4 class="mb-2 text-center">Protein</h4>
   <?php for($i = 1; $i<=10; $i++): ?>
    <select class="form-control mb-2" name="product<?php echo $i;?>">
    <option selected hidden value="0">Pasirinkite produkta</option>
    <?php foreach($data['products'] as $product) : ?>
    <?php if($product->cat == 2): ?>
    <option class="form-control" value="<?php echo $product->id; ?>"
     <?php if($product->id == $data['product'.$i]){?> selected <?php };?>><?php echo $product->title; ?></option> 
  
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
    <option selected hidden value="0">Pasirinkite produkta</option>
    <?php foreach($data['products'] as $product) : ?>
    <?php if($product->cat == 1): ?>
    <option class="form-control" value="<?php echo $product->id; ?>"
     <?php if($product->id == $data['product'.$i]){?> selected <?php };?>><?php echo $product->title; ?></option> 

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
    <option selected hidden value="0">Pasirinkite produkta</option>
    <?php foreach($data['products'] as $product) : ?>
    <?php if($product->cat == 3): ?>
    <option class="form-control" value="<?php echo $product->id; ?>"
     <?php if($product->id == $data['product'.$i]){?> selected <?php };?>><?php echo $product->title; ?></option> 
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
    <option selected hidden value="0">Pasirinkite produkta</option>
    <?php foreach($data['products'] as $product) : ?>
    <?php if($product->cat == 4): ?>
    <option class="form-control" value="<?php echo $product->id; ?>"
     <?php if($product->id == $data['product'.$i]){?> selected <?php };?>><?php echo $product->title; ?></option> 
<?php endif; ?>
<?php endforeach; ?>
</select>
<?php endfor;?>
</div>
</div>

          <div class="col-md mt-3"> 
            <input type="submit" class="btn btn-success" value="Submit">
        </div> 
        </form>
    </div>

<?php require_once APPROOT . '/views/admins/layouts/rightPanel.php'; ?>