<?php
if (isset($countsanpham)) {
    extract($countsanpham);
}
?>

<main>
    <div class="box">
        <div class="boxleft">
            <section>
                <div class="text1" style="margin-top: 30px;">
                    <h2>Danh mục sản phẩm</h2>
                </div>
            </section>
            <section>
                <div class="product2">
                    <?php foreach ($listdanhmuc as $dm) : ?>
                        <div class="col2">
                            <a style="padding-bottom: 10px;" href="index.php?act=spdm&id=<?= $dm['id'] ?>"><?= $dm['name'] ?></a>
                        </div>
                    <?php endforeach ?>
                </div>
            </section>
        </div>
        <div class="boxright">
            <section>
                <div class="text1" style="margin-top: 30px;">
                    <h2>Tất cả sản phẩm</h2>
                </div>
            </section>
            <section>
                <div class="product1">
                    <?php foreach ($listsanpham as $sp) : ?>
                        <div class="col1">
                            <a href="index.php?act=ctsp&id=<?= $sp['id'] ?>"><img style="width: 100%;" src="img/<?= $sp['image'] ?>" alt=""></a>
                            <p style="font-weight: 600;"><?= $sp['name'] ?></p>
                            <p style="font-size: 15px;"><?= number_format($sp['price']) ?>đ</p>
                        </div>
                    <?php endforeach ?>
                </div>
            </section>
            <section>
                <?php
                    $sanpham_count = count($countsanpham);
                    $sanpham_button = ceil($sanpham_count/12);
                    
                    $i = 1;
                    for ($i=1; $i<=$sanpham_button ; $i++) { 
                         echo '<a style="margin: 0 5px; border: 1px solid black; padding: 2px; color: black; font-size: 15px"  href="index.php?act=tcsp&page='.$i.' "> '.$i.'</a>' ;
                    }
                ?>
            </section>
        </div>
    </div>
    
</main>