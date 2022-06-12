<?php
if (isset($sanpham)) {
    extract($sanpham);
}
?>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Cập nhật sản phẩm</h5>
                </div>
                <div class="card-body">
                    <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" class="form-control" placeholder="Tên sản phẩm" name="name" value="<?=$sanpham['name']?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Tên loại</label>
                                    <select name="id_cate" class="form-control">
                                        <?php foreach ($listdanhmuc as $danhmuc) : ?>
                                            <?php if ($danhmuc['id'] === $sanpham['id_cate']) : ?>
                                                <option selected value="<?= $danhmuc['id'] ?>"><?= $danhmuc['name'] ?></option>
                                            <?php else : ?>
                                                <option value="<?= $danhmuc['id'] ?>"><?= $danhmuc['name'] ?></option>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-md-1">
                                <div class="form-group">
                                    <label>Đơn giá </label>
                                    <input type="text" class="form-control" placeholder="Đơn giá" name="price" value="<?=$sanpham['price']?>">
                                </div>
                            </div>
                            <div style="padding-top: 25px;" class="col-md-6 pl-md-1">
                                <div class="form-group">
                                    <label class="custom-file-label form-control">Ảnh: <?=$sanpham['image']?></label>
                                    <input type="hidden" name="image" value="<?=$sanpham['image']?>" >
                                    <input type="file" name="image" class="form-control">
                                    <img src="./../img/<?$sanpham['image']?>" alt="" width="80px">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ngày nhập</label>
                                    <input type="date" class="form-control" name="created_at" value="<?=$sanpham['created_at']?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea rows="4" cols="80" class="form-control" placeholder="Mô tả" name="content" ><?=$sanpham['content']?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="hidden" name="id" value="<?=$sanpham['id']?>">
                                <button type="submit" class="btn btn-fill btn-primary" name="update">Sửa </button>
                                <a href="index.php?act=listsp" class="btn btn-fill btn-primary">Danh sách sản phẩm</a>
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