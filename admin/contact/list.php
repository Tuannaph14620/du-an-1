<div class="content">
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Danh sách liên hệ</h4>
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
                                    <th>Tên người gửi</th>
                                    <th>Số điện thoại</th>
                                    <th>Email người gửi</th>
                                    <th>Nội dung</th>
                                    <th>Ngày gửi</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php foreach ($listlienhe as $index => $cmt) : ?>
                                    <tr>
                                        <td class="text-center"><?= $index +1 ?></td>
                                        <td><?= $cmt['name'] ?></td>
                                        <td><?= $cmt['phone'] ?></td>
                                        <td><?= $cmt['email'] ?></td>
                                        <td><?= $cmt['content']?></td>
                                        <td><?= $cmt['created_at']?></td>
                                        <td class="text-center">
                                            <a class="btn btn-success btn-link btn-icon btn-sm " href="index.php?act=xoalh&id=<?=$cmt['id']?>"><i class="tim-icons icon-simple-remove"></i></a>
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