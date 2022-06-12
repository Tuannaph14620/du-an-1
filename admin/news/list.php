<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Danh sách tin tức</h4>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Tiêu đề</th>
                                    <th>Lời dẫn</th>
                                    <th>Ảnh</th>
                                    <th>Ngày viết</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listtintuc as $index => $new) : ?>
                                    <tr>
                                        <td class="text-center"><?= $index + 1 ?></td>
                                        <td><?= $new['tittle'] ?></td>
                                        <td><?= $new['loi_dan'] ?></td>
                                        <td><img width="100px" height="90px" src="./../img/<?=$new['image']?>"></td>
                                        <td><?= $new['created_at'] ?></td>
                                        <td class="td-actions text-right">
                                            <a class="btn btn-success btn-link btn-icon btn-sm" href="index.php?act=suatt&id=<?= $new['id'] ?>"><i class="tim-icons icon-settings"></i></a>
                                            <a class="btn btn-danger btn-link btn-icon btn-sm" href="index.php?act=xoatt&id=<?= $new['id'] ?>"><i class="tim-icons icon-simple-remove"></i></a>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <a href="index.php?act=addtt" class="btn btn-fill btn-primary">Thêm tin
                tức</a>
        </div>

    </div>
</div>