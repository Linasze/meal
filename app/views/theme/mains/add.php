<?php require_once APPROOT . '/views/theme/header.php'; ?>
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">        
            <h2>Login</h2>
            <p>Please fill in your credentials</p>
            <form action="<?php echo URLROOT; ?>/posts/add" method="POST">

                <div class="form-group">
                    <label for="title">Title:
                        <sup>*</sup>
                    </label>
                    <input type="text" name="title" class="form-control form-control-md <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $data['title']; ?>">
                    <span class="invalid-feedback">
                        <?php echo $data['title_err'];?>
                    </span>

                </div>
                <div class="form-group">
                    <label for="body">Body:
                        <sup>*</sup>
                    </label>
 <textarea type="text" name="body" class="form-control form-control-md <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['body']; ?></textarea>
                    <span class="invalid-feedback">
                        <?php echo $data['body_err'];?>
                    </span>
                </div>

                <div class="row">
                    <div class="col">
                        <input type="submit" value="Publish" class="btn btn-success btn-block">
                    </div>
                    <div class="col">
                        <a href="<?php echo URLROOT; ?>/pages/index" class="btn btn-light btn-block">Back</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<?php require_once APPROOT . '/views/theme/footer.php'; ?>