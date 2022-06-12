<?php
if (isset($taikhoan)) {
    extract($taikhoan);
}

?>


<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Cập nhật tài khoản</h5>
                </div>
                <div class="card-body">
                    <form action="index.php?act=updatetk" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Email" name="email" value="<?= $taikhoan['email'] ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input type="text" class="form-control" placeholder="Password" name="password" value="<?= $taikhoan['password'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-md-1">
                                <div class="form-group">
                                    <label> Tên khách hàng </label>
                                    <input type="text" class="form-control" placeholder="Tên khách hàng" name="name" value="<?= $taikhoan['name'] ?>">
                                </div>
                            </div>
                            <div class="col-md-3 pl-md-1">
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="tel" name="phone" placeholder="Số điện thoại" class="form-control" value="<?= $taikhoan['phone'] ?>">
                                </div>
                            </div>
                            <div class="col-md-3 pl-md-1">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Vai trò</label>
                                    <select name="permission" class="form-control">
                                        <option value="0">Admin</option>
                                        <option value="1">Khách</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input type="text" name="address" placeholder="Địa chỉ" class="form-control" value="<?= $taikhoan['address'] ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="hidden" name="id" value="<?= $taikhoan['id'] ?>">
                                <button type="submit" class="btn btn-fill btn-primary" name="update">Cập nhật </button>
                                <a href="index.php?act=dskh" class="btn btn-fill btn-primary">Danh sách sản phẩm</a>
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