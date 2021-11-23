<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 600px;">
            <div class="modal-header">
                <button type="button" class="btn-close" name="" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php include_once $view_login; ?>
            </div>
        </div>
    </div>
</div>
<?php if (isset($_GET['msg'])) : ?>
    <div class="alert alert-warning alert-dismissible fade show mx-3" role="alert">
        <?php echo $_GET['msg']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
<?php if (isset($error['ten_dang_nhap'])) : ?>
    <?php echo $error['ten_dang_nhap']; ?>
<?php endif; ?>
<?php if (isset($error['mat_khau'])) : ?>
    <?php echo $error['mat_khau']; ?>
<?php endif; ?>
<!-- end form -->