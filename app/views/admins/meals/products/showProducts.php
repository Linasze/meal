<?php require_once APPROOT . '/views/admins/layouts/leftPanel.php'; ?>
<?php flash('product_message'); ?>
<style>
.page-link {
  color: white; 
}

.page-link:hover{
    color: black;
}
</style>
<div class="col-md-12 card card-body">
<div class="mb-3 col-md-12 d-flex bd-highlight">
<h3 class="mr-auto p-2 bd-highlight">Show Products</h3>
<a href="<?php echo URLROOT; ?>/products/addProducts" class="p-2 bd-highlight btn btn-light"><i class="fa fa-plus-circle"></i> Add</a>
<a href="<?php echo URLROOT; ?>/admins/manageMeals" class="p-2 bd-highlight btn btn-light"><i class="fa fa-backward"></i> Back</a>
   </div>
<div class="col-sm-12 col-md-8">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                    <?php if(!empty($data['products'])) : ?>
                    
   <input class="form-control col-md bg-dark shadow text-white mr-auto mb-3" id="search" type="text" placeholder="Search" aria-label="Search">
<div id="display"></div>
                    <hr>
<?php foreach($data['products'] as $product) : ?>
<div id="hide-list">
    <div class="dropdown float-right">
        <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
            <i class="fa fa-cog"></i>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <div class="dropdown-menu-content">
                <a class="dropdown-item" href="editProduct/<?php echo $product->id;?>">Edit</a>
                <a class="dropdown-item" href="deleteProduct/<?php echo $product->id;?>">Delete</a>
            </div>
        </div>
    </div>

<div class="text-white"><?php echo $product->title; ?></div>
 <hr>

                     <?php endforeach; ?>
<nav aria-label="Page navigation">
  <ul class="pagination ">
<?php for ($page=1; $page <= $data['total_pages']; $page++):?>
   <li class="page-item "><a class="page-link bg-flat-color-1" href="<?php echo "?page=$page"; ?>"><?php echo $page;?></a></li>
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
                                    <a class="dropdown-item" href="addProducts">Add</a>

                                </div>
                                </div>
                        </div>
                     <p class="text-light mt-1">No products</p>
                    </div>
                <?php endif; ?>
                </div>
                    </div>
            </div>
<?php require_once APPROOT . '/views/admins/layouts/rightPanel.php'; ?>
