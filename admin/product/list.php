<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Danh sách loại hàng</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div style="color: red;"><?php
                                                    if (isset($thongbao) && ($thongbao != ""));
                                                    ?></div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Tên loại</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá sản phẩm</th>
                                    <th>Hình</th>
                                    <th>Ngày nhập</th>
                                    <th>Số lượt xem</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($listsanpham as $index => $pro) : ?>
                                    <tr>
                                        <td class="text-center"><?= $index + 1 ?></td>
                                        <td><?= $pro['namecate'] ?></td>
                                        <td><?= $pro['name'] ?></td>
                                        <td><?= number_format($pro['price']) ?>đ</td>
                                        <td><img width="80px" height="90px" src="./../img/<?= $pro['image'] ?>"></td>
                                        <td><?= $pro['created_at'] ?></td>
                                        <td><?= $pro['view'] ?></td>
                                        <td class="text-right">
                                            <a class="btn btn-success btn-link btn-icon btn-sm" href="index.php?act=suasp&id=<?= $pro['id'] ?>"><i class="tim-icons icon-settings"></i></a>
                                            <a class="btn btn-danger btn-link btn-icon btn-sm" href="index.php?act=xoasp&id=<?= $pro['id'] ?>"><i class="tim-icons icon-simple-remove"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <section>
                            <?php
                            $sanpham_count = count($countsanpham);
                            $sanpham_button = ceil($sanpham_count / 12);

                            $i = 1;
                            for ($i = 1; $i <= $sanpham_button; $i++) {
                                echo '<a style="margin: 0 5px; border: 1px solid #fff; padding: 2px; color: #fff; font-size: 15px"  href="index.php?act=listsp&page=' . $i . ' "> ' . $i . '</a>';
                            }
                            ?>
                        </section>
                    </div>
                </div>
            </div>
            <a href="index.php?act=addsp" class="btn btn-fill btn-primary">Thêm sản phẩm</a>
        </div>
    </div>
</div>