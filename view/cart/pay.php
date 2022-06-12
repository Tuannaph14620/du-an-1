<?php
if (isset($taikhoan)) {
    extract($taikhoan);
}
if (isset($gio_hang)) {
    extract($gio_hang);
}
?>

<main class="ml">
    <div class="box">
        <div class="boxleft2">
            <div class="tittle">
                <h2>Thông tin nhận hàng</h2>
            </div>
            <div class="form">
                <form action="index.php?act=total" method="POST" enctype="multipart/form-data" id="form1">
                    <input type="text" id="fname" name="name" placeholder="Họ tên" value="<?= $taikhoan['name'] ?>"><br>
                    <input type="text" id="fphone" name="phone" placeholder="Số Điện Thoại" value="<?= $taikhoan['phone'] ?>"><br>
                    <input type="text" id="fphone" name="address" placeholder="Địa chỉ" value="<?= $taikhoan['address'] ?>"><br>
                    <br>
                    <p style="padding-bottom: 10px;">Vui lòng chọn phương thức thanh toán:</p>
                      <input type="radio"  name="pttt" value="0">
                      <label >Thanh toán khi nhận hàng</label><br>
                      <input type="radio" name="pttt" value="1">
                      <label >Thanh toán bằng Online Banking</label>
                    <br>
                    <br>
                    <br>
                    <p style="padding-bottom: 10px;">Vui lòng chọn phương thức giao hàng:</p>
                      <input type="radio"  name="ptgh" value="0">
                      <label >Standard Express <br><span style="font-size: 13px; color: gray;">Nhận hàng trong vòng 5 ngày, đổi trả miễn phí</span></label>
                    <br>
                    <br>
                      <input type="radio" name="ptgh" value="1">
                      <label >J&T Express <br><span style="font-size: 13px; color: gray;">Nhận hàng trong vòng 3 ngày,đổi trả miễn phí</span></label>
                    <br>
                    <br>
                    <input  type="submit" name="total" value="Thanh toán">
                </form>
            </div>
        </div>
        <div class="boxright2">
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
                        <a href="index.php?act=ctsp&id=<?= $cart['id'] ?>"><img width="200px" height="200px" src="img/<?= $cart['image'] ?>" alt=""></a>
                    </div>
                    <div class="detail">
                        <h3><?= $cart['name'] ?></h3>
                        <p>Size: <?= $cart['size'] ?></p>
                        Số lượng: <?= $cart['quantity'] ?>
                        <br>
                        <br>
                        <span style="padding-right: 170px;"><?= number_format($ttien) ?>vnd</span>

                    </div>
                </div>
                <hr>
            <?php $i += 1;
            endforeach ?>
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
                    } else {
                        $thongbao = "Code bạn nhập không hợp lệ!";
                    }
                }
                ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="text" name="code" placeholder="Nhập code">
                    <input type="submit" name="check" value="Check">
                </form>
                <br>
                <h4>Tổng thanh toán: <?= number_format($tong + 30000) ?>vnđ</h4><br>


            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </div>

    </div>
</main>