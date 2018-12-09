<?php require_once APPROOT . '/views/theme/header.php'; ?>
<?php flash('update'); ?>
<div class="container">
    <div class="row">

        <div class="col-md-9 col-xs mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md col-xs">
                            <h4>My info</h4>
                            <hr>
                        </div>
                    </div>

        <form method="post" action="<?php echo URLROOT;?>/settings/updatePersonalInfo" >
              <div class="form-group row">
                <label for="username" class="col-4 col-form-label">User Name</label>
                <div class="col-8">
                  <input id="name" name="name"  class="form-control here" required="required" type="text" value="<?php echo $data['user']->name;?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                  <input id="email" name="email" required="required" class="form-control here" type="text" value="<?php echo $data['user']->email;?>" disabled>
                </div>
              </div>
                     <div class="form-group row">
                <label for="height" class="col-4 col-form-label">Height</label>
                <div class="col-8">
                  <select name="height" class="form-control">
                  <?php for($h = 120; $h <=220; $h++):?>
                <option class="form-control" value="<?php echo $h; ?>"
                <?php if($h == $data['user']->height){?> selected <?php };?>><?php echo $h; ?></option>
               <?php endfor;?>
                  </select>
                </div>
              </div>
                    <div class="form-group row">
                <label for="weight" class="col-4 col-form-label">Weight</label>
                <div class="col-8">
                <select name="weight" class="form-control">
                  <?php for($w = 40; $w <=150; $w++):?>
                <option class="form-control" value="<?php echo $w; ?>"
                <?php if($w == $data['user']->weight){?> selected <?php };?>><?php echo $w; ?></option>
               <?php endfor;?>
                  </select>
                </div>
              </div>


              <div class="form-group row">
                <label for="password" class="col-4 col-form-label">Change Password</label>
                <div class="col-8">
                  <input id="password" name="password" placeholder="Password" class="form-control here <?php echo (!empty($data['passwords_match_err'])) ? 'is-invalid' : ''; ?>" type="password">
                  <span class="invalid-feedback">
                        <?php echo $data['passwords_match_err'];?>
                    </span>
                </div>
              </div>
<div class="form-group row">
                <label for="confirm_password" class="col-4 col-form-label">Confirm Password</label>
                <div class="col-8">
                  <input id="confirm_password" name="confirm_password" placeholder="Confirm Password" class="form-control here <?php echo (!empty($data['passwords_match_err'])) ? 'is-invalid' : ''; ?>" type="password">
                  <span class="invalid-feedback">
                        <?php echo $data['passwords_match_err'];?>
                    </span>
                </div>
              </div>


              <div class="form-group row">
                <div class="offset-4 col-8">
                  <button name="submit" type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

<?php require_once APPROOT . '/views/theme/footer.php'; ?>

