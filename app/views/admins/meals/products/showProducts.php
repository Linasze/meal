<?php require_once APPROOT . '/views/admins/layouts/leftPanel.php'; ?>


<div class="col-sm-6 col-lg-6">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                    <?php if(!empty($data['products'])) : ?>
                     <?php foreach($data['products'] as $product) : ?>   
                       
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
                        <p class="text-light mt-1"><?php echo $product->title; ?></p>
                     <?php endforeach; ?>
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
                     <p class="text-light mt-1">No records</p>
                    </div>
                <?php endif; ?>
                </div>
            </div>
<?php require_once APPROOT . '/views/admins/layouts/rightPanel.php'; ?>