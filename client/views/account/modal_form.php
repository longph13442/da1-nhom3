<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 600px;">
            <div class="modal-header">
                <button type="button" class="btn-close" name="" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php include_once "./client/views/account/formlogin.php" ?>
            </div>
        </div>
    </div>
</div>

<?php if (isset($error['ten_dang_nhap'])) : ?>
    <?php echo $error['ten_dang_nhap']; ?>
<?php endif; ?>
<?php if (isset($error['mat_khau'])) : ?>
    <?php echo $error['mat_khau']; ?>
<?php endif; ?>
<!-- end form -->