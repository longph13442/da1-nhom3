<div class="text-center my-4">
    <a href="<?= ROOT_URL ?>"><img class="mb-4" src="<?= ROOT_URL . IMG ?>logo.png" alt="" width="72" height="72"></a>
    <h1 class="h3 mb-3 font-weight-normal">XÁC NHẬN TÀI KHOẢN</h1>
</div>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <p> <?php if (isset($forgot['msg'])) {
            echo $forgot['msg'];
        } ?></p>
</div>