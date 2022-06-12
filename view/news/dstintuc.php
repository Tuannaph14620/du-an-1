<main>
    <div class="boxx">
        <div class="boxleftx">
            <h1>Tin tức mới nhất</h1>
            <br>
            <section class="st1">
                <div class="contentx">
                    <div class="content_left">
                        <div class="img">
                            <a href="index.php?act=c1"><img style="height: 400px;" src="img/cha_leg.jpg" alt=""></a>
                        </div>
                        <div class="tittle">
                            <a style="color: black;" href="index.php?act=c1">
                                <h2>Lịch thi đấu Champions League mùa giải 21-22</h2>
                            </a>
                        </div>
                    </div>
                    <div class="content_right">
                        <div class="col">
                            <div class="img">
                                <a href="index.php?act=manci"><img src="img/time_mc.jpg" alt=""></a>
                            </div>
                            <div class="tittle">
                                <a href="index.php?act=manci">
                                    <h3>Lịch thi đấu sắp tới của Manchester City</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="img">
                                <a href="index.php?act=nha"><img src="img/time_macth.jpg" alt=""></a>
                            </div>
                            <div class="tittle">
                                <a href="index.php?act=nha">
                                    <h3>Lịch thi đấu Ngoại Hạng Anh mùa giải 21-22 </h3>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <hr>
            </section>

            <section class="st2">
                <?php foreach ($listtintuc as $tt) : ?>
                    <div class="contentx">
                        <div class="imgx">
                            <a href="index.php?act=cttt&id=<?=$tt['id']?>"><img src="img/<?= $tt['image'] ?>" alt=""></a>
                        </div>
                        <div class="detaila">
                            <a style="color: black;" href="index.php?act=cttt&id=<?=$tt['id']?>">
                                <h3><?= $tt['tittle'] ?></h3>
                            </a>
                            <p><?= $tt['loi_dan'] ?></p>
                            <br>
                            <span> <?= $tt['created_at'] ?></span>
                        </div>
                    </div>
                    <br>
                <?php endforeach ?>
            </section>
        </div>
        <div class="boxrightx">
            <h1>Tin tức liên quan</h1>
            <br>
            <?php foreach ($listtintuc as $tt) : ?>
                <div class="colx">
                    <div class="imga">
                        <a href="index.php?act=cttt&id=<?=$tt['id']?>"><img src="img/<?= $tt['image'] ?>" alt=""></a>
                    </div>
                    <div class="tittlea">
                        <a href="index.php?act=cttt&id=<?=$tt['id']?>" style="color: black;">
                        <p><?= $tt['loi_dan'] ?></p>
                        </a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</main>