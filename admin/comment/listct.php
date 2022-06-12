<?php


if(isset($binhluan)){
    extract($binhluan);
}

?>

<div class="content">
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Danh sách bình luận
                    </h4>
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
                                    <th>Nội dung bình luận</th>
                                    <th>Ngày bình luận</th>
                                    <th>Người bình luận</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php foreach ($binhluanchitiet as $index => $cmt) : ?>
                                    <tr>
                                        <td class="text-center"><?= $index +1 ?></td>
                                        <td><?= $cmt['content'] ?></td>
                                        <td><?= $cmt['created_at'] ?></td>
                                        <td><?= $cmt['tenkh'] ?></td>
                                        
                                        <td class="text-right">
                                        <a class="btn btn-danger btn-link btn-icon btn-sm" href="index.php?act=xoabl&id=<?=$cmt['id']?>"><i class="tim-icons icon-simple-remove"></i></a>
                                            
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <a href="index.php?act=dsbl" class="btn btn-fill btn-primary">Danh sách bình luận</a>
        </div>
    </div>
</div>