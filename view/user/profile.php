<?php
if (isset($taikhoan)) {
    extract($taikhoan);
}

?>


<main>
    <section class="buton">
        <h2>Thông Tin Thành Viên</h2> <br> <br>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
        ?>
        <form action="index.php?act=updatetk" method="POST">
            <input type="hidden" name="id" value="<?=$taikhoan['id']?>">
            <input type="hidden" name="permission" value="<?=$taikhoan['permission']?>" >
            <label for="name">Họ Và Tên:</label>
            <br>
            <input type="text" name="name" placeholder="Họ và tên" value="<?=$taikhoan['name']?>">
            <br>
            <label for="email">Email:</label>
            <br>
            <input type="email" class="bb" name="email" placeholder="Email" value="<?=$taikhoan['email']?>">
            <br>
            <label for="password">Password:</label> 
            <br>
            <input type="text" class="bb" name="password" placeholder="Mật khẩu" value="<?=$taikhoan['password']?>">
            <br>
            <label for="sdt">Số Điện Thoại:</label> 
            <br>
            <input type="text" name="phone" placeholder="Số điện thoại" value="<?=$taikhoan['phone']?>">
            <br>
            <label for="address">Địa Chỉ:</label> 
            <br>
            <input type="text" name="address" placeholder="Địa chỉ" value="<?=$taikhoan['address']?>">
            <br>
            <input type="submit" name="update" value="Cập nhật">
        </form>
    </section>
</main>