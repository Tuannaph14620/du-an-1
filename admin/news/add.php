<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Thêm tin tức</h5>
                </div>
                <div class="card-body">
                    <form action="index.php?act=addtt" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-8 ">
                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <input type="text" class="form-control" placeholder="tiêu đề" name="tittle">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Ngày viết</label>
                                    <input type="date" class="form-control" name="created_at">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div style="padding-top: 25px;" class="col-md-12 ">
                                <div class="form-group">
                                    <label class="custom-file-label form-control">Ảnh</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div style="padding-top: 50px;" class="row">
                            <div class="col-md-12 pr-md-1">
                                <div class="form-group">
                                    <label>Nội dùng </label>
                                    <textarea  rows="4" cols="80" class="form-control" placeholder="Nội dung" name="content"> </textarea>
                                </div>
                            </div>
                            <div class="col-md-12 pr-md-1">
                                <div class="form-group">
                                    <label>Lời dẫn </label>
                                    <textarea  rows="4" cols="80" class="form-control" placeholder="Lời dẫn" name="loi_dan"> </textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-fill btn-primary" name="add">Thêm </button>
                                <a href="index.php?act=listtt" class="btn btn-fill btn-primary">Danh sách tin tức</a>
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