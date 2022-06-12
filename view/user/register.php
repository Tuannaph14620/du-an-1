<main>
  <section class="buton">
    <h2>Đăng Kí Thành Viên</h2> <br> <br>
    <?php
    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
    ?>
    <form action="index.php?act=register" method="POST">
      <label for="name">Họ Và Tên:</label> <br>
      <input type="text" name="name" placeholder="Họ và tên">
      <?php if (!empty($error['name'])) : ?>
        <span style="color: red;"><?= $error['name'] ?></span>
      <?php endif ?>
      <br>
      <label for="email">Email:</label> <br>
      <input type="email" class="bb" name="email" placeholder="Email">
      <?php if (!empty($error['email'])) : ?>
                    <span style="color: red;"><?= $error['email'] ?></span>
                <?php endif ?>
                <br>
      <label for="password">Password:</label> <br>
      <input type="password" class="bb" name="password" placeholder="Mật khẩu">
      <?php if (!empty($error['password'])) : ?>
                    <span style="color: red;"><?= $error['password'] ?></span>
                <?php endif ?>
                <br>
      <label for="sdt">Số Điện Thoại:</label> <br>
      <input type="text" name="phone" placeholder="Số điện thoại">
      <?php if (!empty($error['phone'])) : ?>
                    <span style="color: red;"><?= $error['phone'] ?></span>
                <?php endif ?>
                <br>
      <label for="address">Địa Chỉ:</label> <br>
      <input type="text" name="address" placeholder="Địa chỉ"><br>
      <input type="submit" name="add" value="Đăng Kí">
    </form>
    <br>
    <div class="ba">
    <h5><a href="index.php?act=login">Tôi Đã Có Tài Khoản Thành Viên?</a></h5>
  </div>
  </section>
</main>