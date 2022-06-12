

<main class="ml">
    <div class="box">
        <div class="boxleft1">
            <div class="tittle">
                <h2>Giỏ hàng của bạn</h2>
            </div>

            <?php $tong = 0;
            $i = 0;
            foreach ($_SESSION['cart'] as $cart) :  ?>
            <?php $ttien = $cart['quantity'] * $cart['price'];
                $tong += $ttien;
            ?>

                <div class="content">
                    <div class="img">
                       <a href="index.php?act=ctsp&id=<?= $cart['id'] ?>"><img width="300px" height="300px" src="img/<?= $cart['image'] ?>" alt=""></a> 
                    </div>
                    <div class="detail">
                        <h3><?= $cart['name'] ?></h3>
                        <p>Size: <?= $cart['size'] ?></p>
                        Số lượng: <input type="number" value="<?= $cart['quantity'] ?>">
                        <br>
                        <br>
                        <span style="padding-right: 170px;"><?= number_format($ttien) ?>vnd</span><a href="index.php?act=xoacart&delid=<?= $cart['id'] ?>">Xóa</a>

                    </div>
                </div>
                <hr>
            <?php $i += 1;
            endforeach ?>
        </div>

        <div class="boxright1">
            <div class="tittle">
                <h2>Tổng hóa đơn</h2>
            </div>
           
            <div class="content1">
                <h4>Tổng hóa đơn: <?= number_format($tong) ?>vnđ</h4> <br>
                <h4>Ship: 30.000vnđ</h4><br>
                <hr><br>
                <?php
                if (isset($_POST['check'])) {
                    $code = $_POST['code'];
                    if ($code == 'NAV') {
                        $tong = $tong - ($tong * (10 / 100));
                        $thongbao = "Bạn đã nhập đúng code <br>Và được giảm giá 10% giá trị đơn hàng!";
                    }else {
                        $thongbao = "Code bạn nhập không hợp lệ!";
                    }
                }
                ?>
                <h4>Tổng thanh toán: <?= number_format($tong + 30000) ?>vnđ</h4><br>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="text" name="code" placeholder="Nhập code">
                    <input type="submit" name="check" value="Check">
                </form>
                <br>
                <button><a href="index.php?act=checkout">Checkout</a></button>
                <br>
                <a style="color: black" href="index.php?act=xoattc">Xóa Tất Cả</a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </div>

    </div>
</main>