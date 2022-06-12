<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Danh sách loại hàng</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Tên loại</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listdanhmuc as $index => $cate):?>
                                    <tr>
                                        <td class="text-center"><?= $index +1 ?></td>
                                        <td><?= $cate['name'] ?></td>
                                        <td class="text-right"><a class="btn btn-success btn-link btn-icon btn-sm" href="index.php?act=suadm&id=<?=$cate['id']?>"><i class="tim-icons icon-settings"></i></a>
                                            <a class="btn btn-danger btn-link btn-icon btn-sm" href="index.php?act=xoadm&id=<?=$cate['id']?>"><i class="tim-icons icon-simple-remove"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <a href="index.php?act=adddm" class="btn btn-fill btn-primary">Thêm sản phẩm</a>
        </div>
    </div>
</div>