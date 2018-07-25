<?php require_once APPROOT . '/views/theme/header.php'; ?>
<?php flash('update'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-3 ">
		     <div class="list-group ">
              <a href="<?php echo URLROOT;?>/settings/index" class="list-group-item list-group-item-action active">Personal settings</a>
              <a href="<?php echo URLROOT;?>/settings/planSets" class="list-group-item list-group-item-action">Plan settings</a>
              <a href="<?php echo URLROOT;?>/settings/#" class="list-group-item list-group-item-action">Used</a>
              <a href="<?php echo URLROOT;?>/settings/#" class="list-group-item list-group-item-action">Enquiry</a>
              <a href="<?php echo URLROOT;?>/settings/#" class="list-group-item list-group-item-action">Dealer</a>
              <a href="<?php echo URLROOT;?>/settings/#" class="list-group-item list-group-item-action">Media</a>
              <a href="<?php echo URLROOT;?>/settings/#" class="list-group-item list-group-item-action">Post</a>
                           
              
            </div> 
		</div>
		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>My info</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
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
                <label for="name" class="col-4 col-form-label">First Name</label> 
                <div class="col-8">
                  <input id="name" name="name" placeholder="First Name" class="form-control here" type="text">
                </div>
              </div>
              <div class="form-group row">
                <label for="lastname" class="col-4 col-form-label">Last Name</label> 
                <div class="col-8">
                  <input id="lastname" name="lastname" placeholder="Last Name" class="form-control here" type="text">
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
                <label class="col-4">Send User Notification</label> 
                <div class="col-8">
                  <label class="custom-control custom-checkbox">
                    <input name="checkbox" class="custom-control-input" value="user-notification" type="checkbox"> 
                    <span class="custom-control-indicator"></span> 
                    <span class="custom-control-description">Send the new user an email about their account.</span>
                  </label>
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
	</div>
</div>
<?php require_once APPROOT . '/views/theme/footer.php'; ?>

