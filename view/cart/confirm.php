<main >
    <div class="bbt">
        <img src="../../img/224.jpg" alt="">
        <h1 style="text-align: center;margin-bottom: 60px;">Đặt Hàng Thành Công</h1>
    </div>
    <div class="div">
        <section class="buton7">
            <?php foreach ($listdonhang as $dh) : ?>
                <p> <strong>Mã đơn hàng : </strong> <?= $dh['id'] ?></p> <br>
                <p> <strong>Tên : </strong> <?= $dh['name'] ?></p> <br>
                <p><strong>Địa Chỉ : </strong> <?= $dh['address'] ?></p> <br>
                <p><strong>SĐT : </strong><?= $dh['phone'] ?></p> <br>
                <p><strong>Phương thức thanh toán : </strong><?= ($dh['pttt'] == 0) ? 'Thanh toán khi nhận hàng' : 'Online Banking' ?></p> <br>
                <p><strong>Phương thức giao hàng : </strong><?= ($dh['ptgh'] == 0) ? 'Standard Express' : 'J&T Express' ?></p> <br>
                <p><strong>Tổng đơn hàng : </strong><?= number_format($dh['total'])  ?>vnđ</p>
            <?php endforeach; ?>
            <br>
        </section>
        <section class="div1">
            <table style="width:90%;" >
                <tr class="color">
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Size</th>
                    <th>Số Lượng</th>
                </tr>
                <?php foreach ($listdonhang1 as $dh) : ?>
                    <tr class="th">
                        <td><?=$dh['name']?></td>
                        <td><?= number_format($dh['price']) ?>vnđ</td>
                        <td><?=$dh['size']?></td>
                        <td><?=$dh['quantity']?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </section>
    </div>
    <section class="bbv">
        <h3>Chúng tôi sẽ liên hệ với sớm nhất, sau khi nhận được đơn đặt hàng này</h3>
        <h5> Mọi thắc mắc xin vui lòng liên hệ:</h5>
        <span>Lầu M, Toà nhà Petroland, 12 Tân Trào, P. Tân Phú, Q.7, Tp. Hồ Chí Minh <br>
                        Tel: +84 28 54147667 <br>
                        Fax:+84 28 54147557</span>
    </section>
    <section class="button3">
        <a href="index.php">Trở về trang chủ</a>
        <a href="index.php?act=tc">Tiếp tục mua sắm</a>
    </section>

</main>