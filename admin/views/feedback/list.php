<div class="row">
    <h4>Góp ý</h4>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Họ tên</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fb as $key) : ?>
                <?php extract($key) ?>
                <tr>
                    <th scope="row"><?php echo $id ?></th>
                    <td><?php echo $noidung ?></td>
                    <td><?php echo $hoten ?></td>
                    <td><?php echo $email ?></td>
                    <td><a href="feedback/delete?id=<?php echo $id?>" onclick="return confirm('Bạn có chắc muốn xóa không ?')" class="btn btn-outline-danger"><i class="fal fa-trash-alt"></i></a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>