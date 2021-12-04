<h3>Danh sách slide</h3>

<div class="col-lg-8 mb-5">
    <table class="table ">

        <thead>
            <tr>
                <th></th>
                <th>Slide</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sl as $key) : ?>
                <?php extract($key) ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td class="mx-5" style="width: 50px;"><img width="300px" src="<?= IMG . $img ?>" alt=""></td>
                    <td>
                        <a href="slide/update?id=<?php echo $id ?>" class="btn btn-outline-danger"><i class="far fa-edit"></i></a>
                        <a href="slide/delete?id=<?php echo $id ?>" onclick="return confirm('Bạn có chắc muốn xóa không ?')" class="btn btn-outline-danger"><i class="fal fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>

    </table>
    <a href="slide/add" class="btn btn-warning text-white"><i class="fal fa-plus"></i> <span class="mx-1">Thêm slide</span> </a>
</div>