<?php require_once APPROOT . '/views/admins/layouts/leftPanel.php'; ?>

    <div class="card card-body bg-light ">
    <div class="mb-3 col-md-12 form-inline">
<h3 class="mt-auto">Edit Product</h3> 
<a href="<?php echo URLROOT; ?>/products/showProducts" class="ml-auto btn btn-light"><i class="fa fa-backward"></i> Back</a>
   </div
        <p>Macronutrients written per 100g. product.</p>
        <form action="<?php echo URLROOT; ?>/products/editProduct/<?php echo $data['id']; ?>" method="post">
            <div class="col-md-4">
              <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>"
                    value="<?php echo $data['title']; ?>" placeholder="Product">
                <span class="invalid-feedback">
                    <?php echo $data['title_err']; ?>
                </span>
            </div>

             <div class="col-md-2">
              <input type="text" name="carb" class="form-control form-control-lg <?php echo (!empty($data['carb_err'])) ? 'is-invalid' : ''; ?>"
                    value="<?php echo $data['carb']; ?>" placeholder="Carbs">
                <span class="invalid-feedback">
                    <?php echo $data['carb_err']; ?>
                </span>
            </div>

             <div class="col-md-2">
              <input type="text" name="protein" class="form-control form-control-lg <?php echo (!empty($data['protein_err'])) ? 'is-invalid' : ''; ?>"
                    value="<?php echo $data['protein']; ?>" placeholder="Proteins">
                <span class="invalid-feedback">
                    <?php echo $data['protein_err']; ?>
                </span>
            </div>

             <div class="col-md-2">
              <input type="text" name="fat" class="form-control form-control-lg <?php echo (!empty($data['fat_err'])) ? 'is-invalid' : ''; ?>"
                    value="<?php echo $data['fat']; ?>" placeholder="Fats">
                <span class="invalid-feedback">
                    <?php echo $data['fat_err']; ?>
                </span>
            </div>

             <div class="col-md-2">
              <input type="text" name="kcal" class="form-control form-control-lg <?php echo (!empty($data['kcal_err'])) ? 'is-invalid' : ''; ?>"
                    value="<?php echo $data['kcal']; ?>" placeholder="Kcals">
                <span class="invalid-feedback">
                    <?php echo $data['kcal_err']; ?>
                </span>
                </div>
                <div class="form-group col-md mt-2">
    <select class="form-control" name="cat">
    <?php foreach($data['type'] as $type):?>
     <option class="form-control" value="<?php echo $type->id; ?>"
     <?php if($type->id == $data['cat']){?> selected <?php };?>><?php echo $type->title; ?></option>
<?php endforeach;?>
    </select>
</div>
                <div class="col-md-2">
              <input type="text" name="use_id" class="form-control form-control-lg"
                    value="<?php echo $data['use_id']; ?>" placeholder="Use %?">
            </div> 

          <div class="col-12 mt-3"> 
            <input type="submit" class="btn btn-success" value="Submit">
        </form>
        </div> 
    </div>

<?php require_once APPROOT . '/views/admins/layouts/rightPanel.php'; ?>