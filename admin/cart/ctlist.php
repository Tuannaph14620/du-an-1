<?php
if (isset($listdonhang)) {
    extract($listdonhang);
}
?>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Chi tiết đơn hàng</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Mã đơn hàng</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá sản phẩm</th>
                                    <th>Hình sản phẩm</th>
                                    <th>Số lượng mua</th>
                                    <th>Size</th>
                                    <th>Thành tiền</th>
                                    <th class="text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listdonhang as $index => $cart) : ?>
                                    <tr>
                                        <td class="text-center"><?= $cart['id'] ?></td>
                                        <td><?= $cart['order_id'] ?></td>
                                        <td><?= $cart['name'] ?></td>
                                        <td><?= number_format($cart['pri_pro'])?>vnd</td>
                                        <td><img width="80px" height="90px" src="./../img/<?=$cart['image']?>" alt=""></td>
                                        <td><?= $cart['quantity'] ?></td>
                                        <td><?= $cart['size'] ?></td>
                                        <td><?=number_format($cart['price']) ?>vnd</td>
                                        <td class="text-left">
                                            <a class="btn btn-danger btn-link btn-icon btn-sm" href="index.php?act=xoadh&id=<?= $cart['id'] ?>&id_order=<?=$cart['order_id']?>"><i class="tim-icons icon-simple-remove"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <a href="index.php?act=dsdh" class="btn btn-fill btn-primary">Danh sách đơn hàng</a>
                </div>
            </div>
        </div>

    </div>
</div>