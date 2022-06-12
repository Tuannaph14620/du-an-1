<?php
if (isset($sp)) {
    extract($sp);
}

if (isset($_POST['add'])) {
    $content = $_POST['content'];
    if (isset($_SESSION['khach_hang'])) {
        $created_at = date('Y-m-d H:i:s');
        $id_pro = $_GET['id'];
        $sql = "SELECT * FROM users WHERE email ='" . $_SESSION['khach_hang']['email'] . "'";
        $add = pdo_query_one($sql);
        $id_user = $_SESSION['khach_hang']['id'];
        if (strlen($content) > 400) {
            echo "<script>alert('Nội dung bình luận không quá 400 từ!')</script>";
        } else {
            insert_binhluan($content, $id_user, $id_pro, $created_at);
        }
    } elseif (isset($_SESSION['admin'])) {
        $created_at = date('Y-m-d H:i:s');
        $id_pro = $_GET['id'];
        $sql = "SELECT * FROM users WHERE email ='" . $_SESSION['admin']['email'] . "'";
        $add = pdo_query_one($sql);
        $id_user = $_SESSION['admin']['id'];
        if (strlen($content) > 400) {
            echo "<script>alert('Nội dung bình luận không quá 400 từ!')</script>";
        } else {
            insert_binhluan($content, $id_user, $id_pro, $created_at);
        }
    } else {
        echo "<script>alert('Vui lòng đăng nhập trước khi bình luận!')</script>";
    }
}
$id_cate = $sp['id_cate'];
$id_pro = $sp['id'];
$add = pdo_query($sql = "SELECT * FROM products WHERE id_cate='$id_cate' limit 0,4");
$cmt = pdo_query($sql = "SELECT * FROM comment WHERE id_pro = '$id_pro' ORDER BY id DESC");
pdo_query("UPDATE products SET view = view + 1 WHERE id = '$id_pro'");
?>
<main>
    <section>
        <div id="pro">
            <div class="pro1">
                <img src="img/<?= $sp['image'] ?>" width="500px" height="500px" alt="" >
            </div>
            <div class="pro2">
                <h3><?= $sp['name'] ?></h3>
                <div class="price1">
                    Giá chỉ từ: <?= number_format($sp['price']) ?>đ
                </div>
                <div class="small">
                    <small>Giao hàng tiêu chuẩn Vương quốc Anh Giao hàng miễn phí cho tất cả các đơn đặt hàng trên 2 triệu đồng.
                        <br> Giao hàng trong vòng 3 - 5 ngày.</small>
                </div>
                <br>
                <br>
                <form action="index.php?act=cart" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="image" value="<?= $sp['image'] ?>">
                    <input type="hidden" name="name" value="<?= $sp['name'] ?>">
                    <input type="hidden" name="price" value="<?= $sp['price'] ?>">
                    <input type="hidden" name="id" value="<?= $sp['id'] ?>">
                    <div class="size">
                        Size: <select style="padding: 5px 10px; border-radius: 5px;" name="size">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                    </div>

                    </select>
                    <div class="quanity">
                        Số lượng: <input style="border-radius: 5px;" type="number" value="1" name="quantity">
                    </div>
                    <div class="bt1">
                        <input type="submit" name="add" value="Thêm Vào Giỏ Hàng">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section>
        <div class="tite">
            <div class="text3">
                <h2>Mô tả sản phẩm</h2>
            </div>
            <div class="textspan">
                <span><small><?= $sp['content'] ?></small></span>
            </div>
        </div>
    </section>
    <section>
        <div class="text3">
            <h2>Bình Luận</h2>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="area">
                <textarea style="width: 100%; border-radius: 10px;" name="content" id="" cols="200" rows="3" placeholder="Nội dung"></textarea>
                <input class="text3" type="submit" name="add" value="Gửi">
            </div>

        </form>
    </section>
    <section>
        <h2 class="text4">Review</h2>
        <hr>
        <?php
        foreach ($cmt as $bl) {
            $id_user = $bl['id_user'];
            foreach (pdo_query("SELECT * FROM users WHERE id ='$id_user'") as $tow) { ?>
                <div>
                    <b><?= $tow['name'] ?> </b> <span style="float:right;font-size:10px"><?= $bl['created_at'] ?></span>
                    <p class="m_text">Nội dung: <?= $bl['content'] ?></p>
                    <a href="index.php?act=xoabl&id=<?= $bl['id'] ?>&id_pro=<?= $bl['id_pro'] ?>">Xóa</a>
                </div>
                <hr>
        <?php
            }
        }
        ?>
    </section>
    <section>
        <h2 class="text3">Sản Phẩm Liên Quan</h2>
        <div class="product1" style="margin-top: 50px;">
            <?php foreach ($add as $sp) : ?>
                <div class="col1">
                    <a href="index.php?act=ctsp&id=<?= $sp['id'] ?>"><img style="width: 100%;" src="img/<?= $sp['image'] ?>" alt=""></a>
                    <p style="font-weight: 600;"><?= $sp['name'] ?></p>
                    <p><?= number_format($sp['price']) ?>đ</p>
                </div>
            <?php endforeach ?>
        </div>
    </section>
</main>