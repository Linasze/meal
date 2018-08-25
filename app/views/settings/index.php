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
		           
        <form method="post" action="updatePersonalInfo" > 
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
                <label for="password" class="col-4 col-form-label">Change Password</label> 
                <div class="col-8">
                  <input id="password" name="password" placeholder="Password" class="form-control here" type="password">
                </div>
              </div>
<div class="form-group row">
                <label for="confirm_password" class="col-4 col-form-label">Confirm Password</label> 
                <div class="col-8">
                  <input id="confirm_password" name="confirm_password" placeholder="Confirm Password" class="form-control here" type="password">
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

