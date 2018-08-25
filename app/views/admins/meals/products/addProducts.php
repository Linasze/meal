<?php require_once APPROOT . '/views/admins/layouts/leftPanel.php'; ?>


<div class="card card-body">
<div class="mb-3 col-md-12 form-inline">
<h3 class="mt-auto">Add Product</h3> 
<a href="<?php echo URLROOT; ?>/admins/manageMeals" class="ml-auto btn btn-light"><i class="fa fa-backward"></i> Back</a>
   </div

<h2>Add Products</h2>
<p>Macronutrients written per 100g. product.</p>
<form action="addProducts" method="post">
<div class="form-group mt-3">

<div class="col-md-4">
<input type="text" name="title" id="title" class="form-control <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>"  value="<?php echo $data['title']; ?>" placeholder="Product" >
<span class="invalid-feedback">
<?php echo $data['title_err'];?>
</span>
</div>

<div class="col-md-2">
<input type="text" name="carb" id="carb" class="form-control <?php echo (!empty($data['carb_err'])) ? 'is-invalid' : ''; ?>"  value="<?php echo $data['carb']; ?>" placeholder="Carbs">
<span class="invalid-feedback">
<?php echo $data['carb_err'];?>
</span>
</div>

<div class="col-md-2">
<input type="text" name="protein" id="protein" class="form-control <?php echo (!empty($data['protein_err'])) ? 'is-invalid' : ''; ?>"  value="<?php echo $data['protein']; ?>" placeholder="Proteins">
<span class="invalid-feedback">
<?php echo $data['protein_err'];?>
</span>
</div>

<div class="col-md-2">
<input type="text" name="fat" id="fat" class="form-control <?php echo (!empty($data['fat_err'])) ? 'is-invalid' : ''; ?>"  value="<?php echo $data['fat']; ?>" placeholder="Fats">
<span class="invalid-feedback">
<?php echo $data['fat_err'];?>
</span>
</div>

<div class="col-md-2">
<input type="text" name="kcal" id="kcal" class="form-control <?php echo (!empty($data['kcal_err'])) ? 'is-invalid' : ''; ?>"  value="<?php echo $data['kcal']; ?>" placeholder="Kcal">
<span class="invalid-feedback">
<?php echo $data['kcal_err'];?>
</span>
</div>
<div class="col-md mt-2">
    <select class="form-control" name="cat">
      <?php foreach($data['type'] as $type): ?>
      <option value="<?php echo $type->id;?>"><?php echo $type->title;?></option>
     <?php endforeach;?>
    </select>
</div>
<div class="col-md-2 pt-2">
              <input type="text" name="use_id" class="form-control form-control-lg"
                    value="<?php echo $data['use_id']; ?>" placeholder="Use %?">
            </div> 
<div class="col-md mt-3">
<input type="submit" value="Save" class="btn btn-primary mt-3">
</div>

</div>
</form>

</div>


<?php require_once APPROOT . '/views/admins/layouts/rightPanel.php'; ?>
