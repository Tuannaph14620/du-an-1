<main>
    <section class="buton">
    <div>
        <?php if (isset($newpass)) : ?>
            <div style="color: red;">
               Mật khẩu mới của bạn là: <?= $newpass ?>
            </div>
        <?php endif; ?>
    </div>
        <h2>Quên Mật Khẩu</h2> <br> <br>
        <form action="index.php?act=qmk" method="POST">
            <label for="name">Email:</label> <br>
            <input type="text" name="email"><br>
            <input type="submit" name="check" value="Lấy Mật Khẩu">
        </form>

    </section>
</main>