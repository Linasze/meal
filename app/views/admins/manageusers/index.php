<?php require_once APPROOT . '/views/admins/layouts/leftPanel.php'; ?>
<div class="col-md-12 card card-body">
    <div class="mb-3 col-md-12 d-flex bd-highlight">
        <h3 class="mr-auto p-2 bd-highlight">10 New Users</h3>
        <a href="<?php echo URLROOT; ?>/admins/manageMeals" class="p-2 bd-highlight btn btn-light"><i class="fa fa-backward"></i> Back</a>
    </div>
    <div class="col-xs col-md-10">
        <div class="card text-white bg-flat-color-2">
            <div class="card-body ">
                <div class="col-md-2 col-xs">No.</div>
                <div class="col-md-2 col-xs">Name</div>
                <div class="col-md-4 col-xs">Email</div>
                <div class="col-md-4 col-xs">Register</div>
                <?php foreach($data['newUsers'] as $newsUsers):?>
                <div class="col-md-2 col-xs">
                    <?php echo $newsUsers->id;?>
                </div>
                <div class="col-md-2 col-xs">
                    <?php echo $newsUsers->name;?>
                </div>
                <div class="col-md-4 col-xs">
                    <?php echo $newsUsers->email;?>
                </div>
                <div class="col-md-4 col-xs">
                    <?php echo $newsUsers->created_at;?>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>
<?php require_once APPROOT . '/views/admins/layouts/rightPanel.php'; ?>
