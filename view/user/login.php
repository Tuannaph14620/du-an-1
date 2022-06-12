<main>
    <section class="buton">
        <h2>Đăng Nhập</h2> <br> <br>
        <form action="" method="POST">
            <label for="email">Email:</label> <br>
            <input type="email" class="bb" name="email"><br>
            <label for="pass">Password:</label> <br>
            <input class="bb" type="password" name="password"><br>
            <input type="submit" name="login" value="Đăng Nhập"> <br> <br>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Ghi nhớ tài khoản
            </label>
            <br>
        </form>
        <br>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
        ?>
        <div class="buton1">
            <h4><a href="index.php?act=qmk">Quên mật khẩu</a></h4>
            <h4>Tôi chưa đăng kí thành viên? <a href="index.php?act=register">Đăng Kí</a></h4>
        </div>
    </section>
</main>