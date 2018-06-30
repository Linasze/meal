<?php require_once APPROOT . '/views/admins/layouts/leftPanel.php'; ?>
<?php flash('product_message'); ?>
<div class="col-sm-8 col-lg-8">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                    <?php if(!empty($data['meals'])) : ?>
                     <?php foreach($data['meals'] as $meal) : ?>   
                       
    <div class="dropdown float-right">   
        <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
            <i class="fa fa-cog"></i>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <div class="dropdown-menu-content">
                <a class="dropdown-item" href="editMeal/<?php echo $meal->id;?>">Edit</a>
                <a class="dropdown-item" href="deleteMeal/<?php echo $meal->id;?>">Delete</a>
            </div>
        </div>
    </div>

<div class="text-white"><?php echo $meal->title; ?></div>
 <hr>
    
                     <?php endforeach; ?>
                     <?php else: ?>
                     <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="addMeals">Add</a>
                                 
                                </div>
                                </div>
                        </div>
                     <p class="text-light mt-1">No records</p>
                    </div>
                <?php endif; ?>
                </div>
            </div>
<?php require_once APPROOT . '/views/admins/layouts/rightPanel.php'; ?>