<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Thêm loại hàng</h5>
                </div>
                <div class="card-body">
                    <form action="index.php?act=adddm" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tên loại hàng</label>
                                    <input type="text" class="form-control" placeholder="Tên sản phẩm" name="name">
                                    <?php if (!empty($error['name'])) : ?>
                                        <span style="color: red;"><?= $error['name'] ?></span>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-fill btn-primary" name="add">Thêm </button>
                                <a href="index.php?act=listdm" class="btn btn-fill btn-primary">Danh sách loại hàng</a>
                            </div>
                        </div>

                    </form>
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                    ?>
                </div>

            </div>
        </div>

    </div>

</div>