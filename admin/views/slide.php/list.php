<h3>Danh sách slide</h3>

<div class="col-lg-8">
    <table class="table ">

        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Slide</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($slide as $key) : ?>
                <?php extract($key) ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><img src="<?php IMG ?>/<?php echo $slide ?>" alt=""></td>
                    <td>
                        <a href="slide/edit?ma_loai=<?php echo $id?>" class="btn btn-outline-danger"><i class="far fa-edit"></i></a>
                        <a href="slide/delete?ma_loai=<?php echo $slide?>" onclick="return confirm('Bạn có chắc muốn xóa không ?')" class="btn btn-outline-danger"><i class="fal fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>

    </table>
    <a href="slide/add" class="btn btn-warning text-white"><i class="fal fa-plus"></i> <span class="mx-1">Thêm slide</span> </a>
</div>
