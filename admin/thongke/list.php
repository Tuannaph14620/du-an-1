<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Doanh thu cửa hàng</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá sản phẩm</th>
                                    <th>Giá nhập</th>
                                    <th>Số lượng bán ra</th>
                                    <th>Thành tiền</th>
                                    <th>Tổng giá nhập</th>
                                    <th>Doanh thu </th>
                                    
                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                $tongdt = 0;
                                $tongsl = 0;
                                    
                                foreach ($thongke as $index => $tk) :
                                    $tongtt = $tk['doanh_thu'] - $tk['gia_nhap'];
                                    $tongdt += $tongtt;
                                    $tongsl += $tk['soluong'];
                                    ?>
                                    <tr>
                                        <td class="text-center"><?= $index + 1 ?></td>
                                        <td><?= $tk['id'] ?></td>
                                        <td><?= $tk['name'] ?></td>
                                        <td><?= number_format($tk['price']) ?>đ</td>
                                        <td><?= number_format($tk['historical_cost']) ?>đ</td>
                                        <td><?= $tk['soluong'] ?></td>
                                        <td><?= number_format($tk['doanh_thu']) ?>đ</td>
                                        <td><?= number_format($tk['gia_nhap']) ?>đ</td>
                                        <td><?= number_format($tongtt) ?>đ</td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Tổng: <?=$tongsl?>sản phẩm</td>
                                    <td></td>
                                    <td></td>
                                    <td>Tổng: <?=number_format($tongdt)?> VNĐ</td>
                                </tr>
                            </tfoot>
                        </table>
                        <section>
                            <?php
                            $thongke_count = count($thongke2);
                            $thongke_button = ceil($thongke_count / 10);

                            $i = 1;
                            for ($i = 1; $i <= $thongke_button; $i++) {
                                echo '<a style="margin: 0 5px; border: 1px solid #fff; padding: 2px; color: #fff; font-size: 15px"  href="index.php?act=thongke&page=' . $i . ' "> ' . $i . '</a>';
                            }
                            ?>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Thống kê loại hàng</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Tên loại hàng</th>
                                    <th>Số lượng hàng</th>
                                    <th>Giá cao nhất</th>
                                    <th>Giá thấp nhất</th>
                                    <th>Giá trung bình</th>
                                    
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($thongke1 as $index => $tk) :?>
                                    <tr>
                                        <td class="text-center"><?= $index + 1 ?></td>
                                        <td><?= $tk['name'] ?></td>
                                        <td><?= $tk['soluong'] ?></td>
                                        <td><?= number_format($tk['cao']) ?>đ</td>
                                        <td><?= number_format($tk['thap']) ?>đ</td>
                                        <td><?= number_format($tk['tb']) ?>đ</td> 
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