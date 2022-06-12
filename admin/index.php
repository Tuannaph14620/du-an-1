<?php
include "../model/pdo.php";
include "../model/category.php";
include "../model/product.php";
include "../model/user.php";
include "../model/comment.php";
include "../model/news.php";
include "../model/cart.php";
include "../model/thongke.php";
include "../model/contact.php";
include 'header.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            $error = array();
            if (isset($_POST['add'])) {
                $name = $_POST['name'];
                if (empty($name)) {
                    $error['name'] = "Họ tên không được để trống";
                }
                if (!array_filter($error)) {
                    insert_danhmuc($name);
                    $thongbao = "Thêm thành công";
                }
            }


            include 'category/add.php';
            break;
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "category/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "category/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "category/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['update'])) {
                $name = $_POST['name'];
                $id = $_POST['id'];
                if (empty($name)) {
                    $error['name'] = "Họ tên không được để trống";
                }
                if (!array_filter($error)) {
                    update_danhmuc($id, $name);
                    $thongbao = "Cập nhật thành công";
                }
            }
            $listdanhmuc = loadall_danhmuc();
            include "category/list.php";
            break;
            // end_controller_category

        case 'addsp':
            $error = array();
            $ext_img = ['jpg', 'png', 'jpeg'];
            if (isset($_POST['add'])) {
                $id_cate = $_POST['id_cate'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $content = $_POST['content'];
                $created_at = $_POST['created_at'];
                $file = $_FILES['image'];
                $image = "";
                if ($file['size'] > 0 || $file['size'] < 2097152) {
                    $image = $file['name'];
                    $ext = pathinfo($image, PATHINFO_EXTENSION);
                    if (!in_array($ext, $ext_img)) {
                        $error['image'] = "File bạn nhập không phải là file ảnh hoặc quá dung lượng cho phép (<2mb)";
                    }
                }
                if (empty($name)) {
                    $error['name'] = "Bắt buộc phải nhập tên hàng hóa";
                } elseif (empty($price) || !is_numeric($price)) {
                    $error['price'] = "Bắt buộc phải nhập giá hàng hóa và phải là số";
                }
                if (!array_filter($error)) {
                    insert_sanpham($name, $price, $image, $content, $id_cate, $created_at);
                    if ($file['size'] > 0 || $file['size'] < 2097152) {
                        move_uploaded_file($file['tmp_name'], "../img/" . $image);
                    }
                    $thongbao = "Thêm thành công";
                }
            }
            $listdanhmuc = loadall_danhmuc();
            //var_dump($listdanhmuc);
            include "product/add.php";
            break;

        case 'listsp':
            $countsanpham = loadall_sanpham_count();
            $listsanpham = loadall_sanpham();
            include "product/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $countsanpham = loadall_sanpham_count();
            $listsanpham = loadall_sanpham();
            include "product/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "product/update.php";
            break;
        case 'updatesp':
            $error = array();
            $ext_img = ['jpg', 'png', 'jpeg'];
            if (isset($_POST['update'])) {
                $id = $_POST['id'];
                $id_cate = $_POST['id_cate'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $content = $_POST['content'];
                $created_at = $_POST['created_at'];
                $file = $_FILES['image'];
                if ($file['size'] > 0) {
                    if ($file['size'] < 2097152) {
                        $image = $file['name'];
                        $ext = pathinfo($image, PATHINFO_EXTENSION);
                        if (!in_array($ext, $ext_img)) {
                            $error['image'] = "File bạn nhập không phải là file ảnh hoặc quá dung lượng cho phép (<2mb)";
                        }
                        move_uploaded_file($file['tmp_name'], "../img/" . $image);
                    }
                }
                if (empty($name)) {
                    $error['name'] = "Bắt buộc phải nhập tên hàng hóa";
                } elseif (empty($price) || !is_numeric($price)) {
                    $error['price'] = "Bắt buộc phải nhập giá hàng hóa và phải là số";
                }

                if (!array_filter($error)) {
                    update_sanpham($id, $id_cate, $name, $price, $content, $image, $created_at);
                    $thongbao = "Sửa thành công";
                }
            }
            $countsanpham = loadall_sanpham_count();
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include "product/list.php";
            break;
            // end_controller_product

        case 'dskh':
            $listtaikhoan = loadall_taikhoan();
            include "user/list.php";
            break;

        case 'xoakh':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan();
            include "user/list.php";
            break;
        case 'suatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $taikhoan = loadone_taikhoan($_GET['id']);
            }
            include "user/update.php";
            break;

        case 'updatetk':

            if (isset($_POST['update'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $permission = $_POST['permission'];
                capnhattaikhoan($id, $email, $name, $password, $address, $phone, $permission);
                $thongbao = "Cập nhật thành công";
            }
            $listtaikhoan = loadall_taikhoan();
            include "user/list.php";
            break;
            // end_controller_user
        case 'dsbl':
            $danhsachbinhluan = loadall_binhluan();
            include "comment/list.php";
            break;

        case 'dsblct':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $binhluan = loadone_binhluan($_GET['id']);
            }
            $binhluanchitiet = loadone_binhluan($id);
            include "comment/listct.php";
            break;

        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            $danhsachbinhluan = loadall_binhluan();
            include "comment/list.php";
            break;
            // end_controller_comment

        case 'addtt':
            $error = array();
            $ext_img = ['jpg', 'png', 'jpeg', 'webp'];
            if (isset($_POST['add'])) {
                $tittle = $_POST['tittle'];
                $content = $_POST['content'];
                $loi_dan = $_POST['loi_dan'];
                $created_at = $_POST['created_at'];
                $file = $_FILES['image'];
                $image = "";
                if ($file['size'] > 0 || $file['size'] < 2097152) {
                    $image = $file['name'];
                    $ext = pathinfo($image, PATHINFO_EXTENSION);
                    if (!in_array($ext, $ext_img)) {
                        $error['image'] = "File bạn nhập không phải là file ảnh hoặc quá dung lượng cho phép (<2mb)";
                    }
                }

                if (!array_filter($error)) {
                    insert_tintuc($tittle, $content, $created_at, $image, $loi_dan);
                    if ($file['size'] > 0 || $file['size'] < 2097152) {
                        move_uploaded_file($file['tmp_name'], "../img/" . $image);
                    }
                    $thongbao = "Thêm thành công";
                }
            }
            include 'news/add.php';
            break;

        case 'listtt':
            $listtintuc = loadall_tintuc();
            include "news/list.php";
            break;
        case 'xoatt':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_tintuc($_GET['id']);
            }
            $listtintuc = loadall_tintuc();
            include "news/list.php";
            break;
        case 'suatt':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $tintuc = loadone_tintuc($_GET['id']);
            }
            include "news/update.php";
            break;
        case 'updatett':

            $error = array();
            $ext_img = ['jpg', 'png', 'jpeg', 'webp'];
            if (isset($_POST['update'])) {
                $id = $_POST['id'];
                $tittle = $_POST['tittle'];
                $content = $_POST['content'];
                $loi_dan = $_POST['loi_dan'];
                $created_at = $_POST['created_at'];
                $file = $_FILES['image'];

                if ($file['size'] > 0) {
                    if ($file['size'] < 2097152) {
                        $image = $file['name'];
                        $ext = pathinfo($image, PATHINFO_EXTENSION);
                        if (!in_array($ext, $ext_img)) {
                            $error['image'] = "File bạn nhập không phải là file ảnh hoặc quá dung lượng cho phép (<2mb)";
                        }
                    }
                }
                if (!array_filter($error)) {
                    update_tintuc($id, $tittle, $content, $created_at, $image, $loi_dan);
                    if ($file['size'] > 0 || $file['size'] < 2097152) {
                        move_uploaded_file($file['tmp_name'], "../img/" . $image);
                    }
                    $thongbao = "Cập nhật thành công thành công";
                }
            }
            $listtintuc = loadall_tintuc();
            include "news/list.php";
            break;

            // end_controller_comment

        case 'dsdh':
            $countdonhang = loadall_donhang_count();
            $listdonhang = loadall_donhang();
            include "cart/list.php";
            break;

        case 'dsdhct':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $listdonhang = loadone_donhang_detail($_GET['id']);
            }
            include "cart/ctlist.php";
            break;

        case 'xoadh':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_donhang_detail($_GET['id']);
            }
            if (isset($_GET['id_order']) && ($_GET['id_order'] > 0)) {
                $listdonhang = loadone_donhang_detail($_GET['id_order']);
            }
            include "cart/ctlist.php";
            break;
            // end_controller_comment

        case 'thongke':
            $thongke2 = loadall_thong_ke();
            $thongke = thong_ke_doanh_thu();
            $thongke1 = thong_ke_loai_hang();
            include "thongke/list.php";
            break;
            // end_controller_thống kê

        case 'contact':
            $listlienhe = loadall_contact();
            include "contact/list.php";
            break;

        case 'xoalh':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_contact($_GET['id']);
            }
            $listlienhe = loadall_contact();
            include "contact/list.php";
            break;
            // end_controller_thống kê
        default:
            include 'home.php';
            break;
    }
} else {
    include 'home.php';
}

include 'footer.php';
