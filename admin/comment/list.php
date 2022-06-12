<div class="content">
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Danh sách bình luận</h4>
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
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng bình luận</th>
                                    <th>Ngày mới nhất</th>
                                    <th>Ngày cũ nhất</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php foreach ($danhsachbinhluan as $index => $cmt) : ?>
                                    <tr>
                                        <td class="text-center"><?= $index +1 ?></td>
                                        <td><?= $cmt['namesp'] ?></td>
                                        <td><?= $cmt['soluong'] ?></td>
                                        <td><?= $cmt['moi'] ?></td>
                                        <td><?= $cmt['cu']?></td>
                                        <td class="text-center">
                                            <a class="btn btn-success btn-link " href="index.php?act=dsblct&id=<?=$cmt['id']?>">Xem chi tiết</a>
                                            
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>