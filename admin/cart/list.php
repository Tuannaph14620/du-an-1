<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Danh sách đơn hàng</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Tên người đặt</th>
                                    <th>Tên Người Nhận</th>
                                    <th>Số điện thoại người nhận</th>
                                    <th>Địa chỉ nhận hàng</th>
                                    <th>Tổng thanh toán</th>
                                    <th>Ngày mua</th>
                                    <th>Phương thức thanh toán</th>
                                    <th>Phương thức giao hàng</th>
                                    <th class="text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listdonhang as $index => $cart) : ?>
                                    <tr>
                                        <td class="text-center"><?= $index + 1 ?></td>
                                        <td><?= $cart['namekh'] ?></td>
                                        <td><?= $cart['name'] ?></td>
                                        <td><?= $cart['phone'] ?></td>
                                        <td><?= $cart['address'] ?></td>
                                        <td><?= number_format($cart['total']) ?>vnđ</td>
                                        <td><?= $cart['created_at'] ?></td>
                                        <td><?= ($cart['pttt'] == 0 ) ? 'Thanh toán khi nhận hàng' : 'Online Banking'?></td>
                                        <td><?= ($cart['ptgh'] == 0 ) ? 'Standard Express' : 'J&T Express'?></td>
                                    
                                        <td class="text-left">
                                            <a class="btn btn-success btn-link" href="index.php?act=dsdhct&id=<?= $cart['id'] ?>">Xem Chi Tiết</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <section>
                            <?php
                            $donhang_count = count($countdonhang);
                            $donhang_button = ceil($donhang_count / 10);

                            $i = 1;
                            for ($i = 1; $i <= $donhang_button; $i++) {
                                echo '<a style="margin: 0 5px; border: 1px solid #fff; padding: 2px; color: #fff; font-size: 15px"  href="index.php?act=dsdh&page=' . $i . ' "> ' . $i . '</a>';
                            }
                            ?>
                        </section>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>