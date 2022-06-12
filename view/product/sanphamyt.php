<main>
    <section>
        <div class="text1" style="margin-top: 30px;">
            <h2>Tất cả sản phẩm yêu thích</h2>
        </div>
    </section>
    <section>
        <div class="product1">
            <?php foreach ($listsanpham as $sp) : ?>
                <div class="col1">
                    <a href="index.php?act=ctsp&id=<?=$sp['id']?>"><img style="width: 100%;" src="img/<?= $sp['image'] ?>" alt=""></a>
                    <p style="font-weight: 600;"><?= $sp['name'] ?></p>
                    <p><?= number_format($sp['price']) ?>đ</p>
                </div>
            <?php endforeach ?>
        </div>
    </section>
</main>