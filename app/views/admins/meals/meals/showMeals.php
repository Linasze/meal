<?php require_once APPROOT . '/views/admins/layouts/leftPanel.php'; ?>
<?php flash('product_message'); ?>

<div class="col-md-12 card card-body">
<div class="mb-3 col-md-12 d-flex bd-highlight">
<h3 class="mr-auto p-2 bd-highlight">Show Meal</h3> 
<a href="<?php echo URLROOT; ?>/meals/addMeals" class="p-2 bd-highlight btn btn-light"><i class="fa fa-plus-circle"></i> Add</a>
<a href="<?php echo URLROOT; ?>/admins/manageMeals" class="p-2 bd-highlight btn btn-light"><i class="fa fa-backward"></i> Back</a>

   </div>

<div class="col-sm-12 col-md-8">
                <div class="card text-white bg-flat-color-4">
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
<nav aria-label="Page navigation">
  <ul class="pagination ">
<?php for ($page=1; $page <= $data['total_pages']; $page++):?>
   <li class="page-item "><a class="page-link bg-flat-color-4" href="<?php echo "?page=$page"; ?>"><?php echo $page;?></a></li>
<?php endfor; ?>
  </ul>
</nav>          
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
                     <p class="text-light mt-1">No meals</p>
                    </div>
                <?php endif; ?>
                </div>
                </div>  </div>
<?php require_once APPROOT . '/views/admins/layouts/rightPanel.php'; ?>