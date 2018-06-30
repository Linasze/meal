<?php require_once APPROOT . '/views/admins/layouts/leftPanel.php'; ?>

<!-- <a href="<?php echo URLROOT;?>/posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a> -->
    
    <div class="card card-body bg-light ">
        <h3>Edit Product</h3>
        <p>Macronutrients written per 100g. product.</p>
        <form action="<?php echo URLROOT; ?>/meals/editMeal/<?php echo $data['id']; ?>" method="post">
        <div class="col-md-6">
    <h4 class="mb-2">Title</h4>
    <input class="form-control mb-2" type="text" name="title" value="<?php echo $data['title'];?>">
</div>
<div class="col-md-6">
    <h4 class="mb-2">Type</h4>
   <select class="form-control" name="type_id">
       <option selected hidden value="<?php echo $data['type_id'];?>">
       <?php switch($data['type_id']){
           case "1":
           echo "Breakfast";
           break;
           case "2":
           echo "Brunch";
           break;
           case "3":
           echo "Lunch";
           break;
           case "4":
           echo "Afternoon meal";
           break;
           case "5":
           echo "Dinner";
           break; 
           case "6":
           echo "Evening meal";
           break;
        
       } ?>
       </option>
       <option value="1">Breakfast</option>
       <option value="2">Brunch</option>
       <option value="3">Lunch</option>
       <option value="4">Afternoon meal</option>
       <option value="5">Dinner</option>
       <option value="6">Evening meal</option>
   </select>
</div>
</div>

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
</div></div>

          <div class="col-2 mt-3"> 
            <input type="submit" class="btn btn-success" value="Submit">
        </div> 
        </form>
    </div>

<?php require_once APPROOT . '/views/admins/layouts/rightPanel.php'; ?>