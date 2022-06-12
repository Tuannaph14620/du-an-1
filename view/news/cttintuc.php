<?php
if (isset($tintuc)) {
    extract($tintuc);
}
?>

<main>
    <section>
        <div class="table">
            <div class="detail">
                <div class="title">
                    <p><?= $tintuc['tittle'] ?></p> <br>
                    <small><i>POSTED ON <?= $tintuc['created_at'] ?></i></small> <br> <br>
                    <div class="teo">
                        <span>
                            <?= $tintuc['content'] ?>
                        </span>
                    </div>
                    <br>
                    <div class="image">
                        <img style="width: 80%;" src="img/<?= $tintuc['image'] ?>"alt=""> <br>
                        <small><i><?= $tintuc['tittle'] ?></i></small>
                    </div>
                </div>
            </div>
            <div class="list">
                <h2 style="padding-bottom: 30px;">Tin tức liên quan</h2>
                <?php foreach ($listtintuc as $tt) : ?>
                    <div class="colx">
                        <div class="imga">
                            <a href="index.php?act=cttt&id=<?= $tt['id'] ?>"><img src="img/<?= $tt['image'] ?>" alt=""></a>
                        </div>
                        <div class="tittlea">
                            <a href="index.php?act=cttt&id=<?= $tt['id'] ?>" style="color: black;">
                                <p><?= $tt['loi_dan'] ?></p>
                            </a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
</main>