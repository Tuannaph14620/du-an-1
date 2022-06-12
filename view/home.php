<?php
if (isset($_GET['mess'])) {
    echo "<script>alert('Bạn đã đặt hàng thành công!Chúng tôi sẽ liên hệ lại để xác nhận thông tin!')</script>";
}
?>

<section>
    <div class="baner">
        <a class="button" style="color: black; padding: 13px 20px;" href="index.php?act=tcsp">Shop Now</a>
        <img src="view/image/banner.jpg" width="100%" alt="">
    </div>

</section>
<main>
    <section>
        <div class="product">
            <div class="text1">
                <strong>Sản Phẩm Mới Ra Mắt</strong>
            </div>
            <div class="mb">
                <strong>View All</strong>
            </div>
        </div>
    </section>
    <section>
        <div class="product">
            <?php foreach ($spnew as $sp) : ?>
                <div class="row1" style="width: 100%;">
                    <a href="index.php?act=ctsp&id=<?= $sp['id'] ?>"><img style="width: 100%;" src="img/<?= $sp['image'] ?>" alt=""></a>
                    <p style="font-weight: 600;"><?= $sp['name'] ?></p>
                    <p><?= number_format($sp['price']) ?>đ</p>
                </div>
            <?php endforeach ?>
        </div>
    </section>
    <section>
        <div class="product">
            <div class="text1">
                <strong>Sản Phẩm Được Quan Tâm</strong>
            </div>
            <div class="mb">
                <strong><a style="color: black;" href="index.php?act=spyt">View All</a></strong>
            </div>
        </div>
    </section>
    <section>
        <div class="product">
            <?php foreach ($spyeuthich as $yt) : ?>
                <div class="row1" style="width: 100%;">
                    <a href="index.php?act=ctsp&id=<?= $yt['id'] ?>"><img style="width: 100%;" src="img/<?= $yt['image'] ?>" alt=""></a>
                    <p style="font-weight: 600;"><?= $yt['name'] ?></p>
                    <p><?= number_format($yt['price']) ?>đ</p>
                </div>
            <?php endforeach ?>
        </div>
    </section>
    <section>
        <div class="baner" style="margin-top: 50px;">
            <a class="button1" style="color: black; padding: 13px 20px;" href="index.php?act=tcsp">Shop Now</a>
            <img src="view/image/banner1.jpg" width="100%" alt="">
        </div>
    </section>
    <section>
        <div class="text">
            <div class="text1" style="margin-bottom: 20px;">
                <strong>Khám Phá</strong>
            </div>
        </div>
        <div class="product">
            <?php foreach ($tintuc as $tt) : ?>
                <div class="col">
                    <a href="index.php?act=cttt&id=<?= $tt['id'] ?>"><img style="width: 100%; height: 300px;" src="img/<?= $tt['image'] ?>" alt=""></a>
                    <p style="font-weight: 600;"><?= $tt['tittle'] ?></p>
                    <a style="font-size: 15px;" href="index.php?act=cttt&id=<?= $tt['id'] ?>">Xem thêm...</a>
                </div>
            <?php endforeach ?>
        </div>
    </section>
    <section>
        <div class="text">
            <div class="text1" style="margin-bottom: 20px;">
                <strong>Gửi cho chúng tôi</strong>
            </div>
        </div>
        <div class="form">
            <form action="index.php?act=contact" method="POST" enctype="multipart/form-data" id="form1">
                <input type="text" id="fname" name="name" placeholder="Họ tên"><br>
                <input type="text" id="femail" name="email" placeholder=" Email"><br>
                <input type="text" id="fphone" name="phone" placeholder="Số Điện Thoại"><br>
                <input type="text" id="fcontent" name="content" placeholder="Nội dung yêu cầu"><br>
                <input type="submit" name="add" value="Gửi">
            </form>
        </div>
    </section>
</main>