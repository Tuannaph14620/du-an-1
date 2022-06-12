<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Danh sách khách hàng</h4>
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
                                    <th>Tên khách hàng</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Đại chỉ</th>
                                    <th>Vai trò</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php foreach ($listtaikhoan as $index => $user) : ?>
                                    <tr>
                                        <td class="text-center"><?= $index +1 ?></td>
                                        <td><?= $user['name'] ?></td>
                                        <td><?= $user['email'] ?></td>
                                        <td><?=$user['phone']?></td>
                                        <td><?= $user['address'] ?></td>
                                        <td><?= ($user['permission'] == 0 ) ? 'Admin' : 'Khách'?></td>
                                        <td class="text-right">
                                            <a class="btn btn-success btn-link btn-icon btn-sm" href="index.php?act=suatk&id=<?=$user['id']?>"><i class="tim-icons icon-settings"></i></a>
                                            <a class="btn btn-danger btn-link btn-icon btn-sm" href="index.php?act=xoakh&id=<?=$user['id']?>"><i class="tim-icons icon-simple-remove"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <a href="../../view/user/register.php" class="btn btn-fill btn-primary">Thêm khách hàng</a>
        </div>
    </div>
</div>