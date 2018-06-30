<?php require_once APPROOT . '/views/admins/layouts/leftPanel.php'; ?>

<!-- <a href="<?php echo URLROOT;?>/posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a> -->
    
    <div class="card card-body bg-light ">
        <h3>Edit Product</h3>
        <p>Macronutrients written per 100g. product.</p>
        <form action="<?php echo URLROOT; ?>/products/editProduct/<?php echo $data['id']; ?>" method="post">
            <div class="col-4">
              <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>"
                    value="<?php echo $data['title']; ?>" placeholder="Product">
                <span class="invalid-feedback">
                    <?php echo $data['title_err']; ?>
                </span>
            </div>

             <div class="col-2">
              <input type="number" name="carb" class="form-control form-control-lg <?php echo (!empty($data['carb_err'])) ? 'is-invalid' : ''; ?>"
                    value="<?php echo $data['carb']; ?>" placeholder="Carbs">
                <span class="invalid-feedback">
                    <?php echo $data['carb_err']; ?>
                </span>
            </div>

             <div class="col-2">
              <input type="number" name="protein" class="form-control form-control-lg <?php echo (!empty($data['protein_err'])) ? 'is-invalid' : ''; ?>"
                    value="<?php echo $data['protein']; ?>" placeholder="Proteins">
                <span class="invalid-feedback">
                    <?php echo $data['protein_err']; ?>
                </span>
            </div>

             <div class="col-2">
              <input type="number" name="fat" class="form-control form-control-lg <?php echo (!empty($data['fat_err'])) ? 'is-invalid' : ''; ?>"
                    value="<?php echo $data['fat']; ?>" placeholder="Fats">
                <span class="invalid-feedback">
                    <?php echo $data['fat_err']; ?>
                </span>
            </div>

             <div class="col-2">
              <input type="number" name="kcal" class="form-control form-control-lg <?php echo (!empty($data['kcal_err'])) ? 'is-invalid' : ''; ?>"
                    value="<?php echo $data['kcal']; ?>" placeholder="Kcals">
                <span class="invalid-feedback">
                    <?php echo $data['kcal_err']; ?>
                </span>
            </div>

          <div class="col-2 mt-3"> 
            <input type="submit" class="btn btn-success" value="Submit">
        </form>
        </div> 
    </div>

<?php require_once APPROOT . '/views/admins/layouts/rightPanel.php'; ?>