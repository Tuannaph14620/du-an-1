<?php
session_start();
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
include "model/pdo.php";
include "model/category.php";
include "model/product.php";
include "model/user.php";
include "model/comment.php";
include "model/news.php";
include "model/cart.php";
include "model/contact.php";
include "./view/header.php";

date_default_timezone_set('Asia/Ho_Chi_Minh');
$listdanhmuc = loadall_danhmuc();
$tintuc = loadall_tintuc_home();
$spyeuthich = loadall_sanpham_top10();
$spnew = loadall_sanpham_home();
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'tcsp':
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            $countsanpham = loadall_sanpham_count();
            include "view/product/allsanpham.php";
            break;
        
        case 'ctsp':
            if (isset($_GET['id']) && (isset($_GET['id']) > 0)) {
                $sp = loadone_sanpham($_GET['id']);
            }
            include "view/product/ctsanpham.php";
            break;
        
        case 'spdm':
            if (isset($_GET['id']) && (isset($_GET['id']) > 0)) {
                $listsanpham = load_sanpham_cungloai($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "view/product/spdanhmuc.php";
            break;
        case 'register':
            $error= array();
            if (isset($_POST['add'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $permission = 1;
                
                if (empty($name)) {
                    $error['name'] = "Họ tên không được để trống";
                }
                elseif (empty($email)) {
                    $error['email']= "Email không được để trống";   
                } 
                elseif(empty($password)){
                    $error['password'] = "Password không được để trống";
                }
                elseif(empty($phone) || !is_numeric($phone)){
                    $error['phone'] = "Số điện thoại không được để trống và phải là số";
                }
                
                if (!array_filter($error)) {
                    insert_taikhoan($email, $name, $password, $address, $phone, $permission );
                    $thongbao = "Đăng ký thành công!";
                    
                }
            }
            include "view/user/register.php";
            break;

        case 'login':
            
            if (isset($_POST['login'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $sql = "SELECT * FROM users WHERE email = '$email' AND password='$password' ";
                $add = pdo_query_one($sql);
            
                if (!empty($add)) {
                    if($add['permission'] != 0){
                        $_SESSION['khach_hang'] = $add;
                        echo "<script>window.location.replace(\"index.php\")</script>;";
                    }else{
                        $_SESSION['admin'] = $add;
                        echo "<script>window.location.replace(\"admin/index.php\")</script>;";
                    }
                } else {
                    $thongbao = "Email hoặc mật khẩu chưa đúng, vui lòng nhập lại!";
                }
            }
            include "view/user/login.php";
            break;     

        case 'logout':
            if (isset($_SESSION['khach_hang'])) {
                unset($_SESSION['cart']);
                unset($_SESSION['khach_hang']);
                echo "<script>window.location.replace(\"index.php\")</script>;";
            } elseif (isset($_SESSION['admin'])) {
                unset($_SESSION['admin']);
                unset($_SESSION['cart']);
                echo "<script>window.location.replace(\"index.php\")</script>;";
            }
            break;  
            
        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            if (isset($_GET['id_pro']) && ($_GET['id_pro'] > 0)) {
                $sp = loadone_sanpham($_GET['id_pro']);
            }
            include "view/product/ctsanpham.php";
            break;

        case 'qmk':
            if (isset($_POST['check'])) {
                $email = $_POST['email'];
                $add = pdo_query_one("SELECT * FROM users WHERE email = '$email'");
                if (!empty($add['email'])) {
                    if ($add['email'] == $email) {
                        $newpass = random_string(6);
                        pdo_execute("UPDATE users SET password = '$newpass' WHERE email = '$email' ");
                    }
                } else {
                    echo "<script>alert('Email của bạn chưa được đăng ký, vui lòng thử lại!')</script>";
                }
            }
            include "view/user/forgetmk.php";
            break;   
            
        case 'profile':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $taikhoan = loadone_taikhoan($_GET['id']);
            }
            include "view/user/profile.php";
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
            $taikhoan = loadone_taikhoan($id);
            include "view/user/profile.php";
            break;

        case 'search':
            if (isset($_POST['search'])) {
                $name = $_POST['name'];
                $listsanpham = search_sanpham($name);
            }
            include "view/product/search.php";
            break;

        case 'spyt':
            $listsanpham = loadall_sanpham_yeuthich();
            include "view/product/sanphamyt.php";
            break;

// cart
        case 'cart':
            if ((isset($_SESSION['admin']) or (isset($_SESSION['khach_hang'])))) {
                if (isset($_POST['add'])) {
                    $id = $_POST['id'];
                    $sp = loadone_sanpham($id);
                    
                    $size = $_POST['size'];
                    $quantity = $_POST['quantity'];
    
                    if (isset($_SESSION['cart'][$id])) {
                        $_SESSION['cart'][$id]['quantity']+= $quantity;
                    }else {
                        $item = [
                            'id' => $sp['id'],
                            'name' => $sp['name'],
                            'image' => $sp['image'],
                            'price' => $sp['price'],
                            'size' => $size,
                            'quantity' => $quantity
                        ];
    
                        $_SESSION['cart'][$id] = $item;
                    }
                }
            }else {
                echo "<script>alert('Vui lòng đăng nhập trước khi thêm vào giỏ hàng')</script>";
                echo "<script>window.location.replace(\"index.php?act=login\")</script>;";
            }
            include "view/cart/cart.php";
            break; 
        
        case 'checkout':
            if (isset($_SESSION['khach_hang'])) {
                $taikhoan = loadone_taikhoan($_SESSION['khach_hang']['id']);
            }
            if (isset($_SESSION['admin'])) {
                $taikhoan = loadone_taikhoan($_SESSION['admin']['id']);
            }

            $gio_hang = $_SESSION['cart'];
            include "view/cart/pay.php";
            break;

        case 'total':
            if (isset($_POST['total'])) {
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $pttt = $_POST['pttt'];
                $ptgh = $_POST['ptgh'];
                if (isset($_SESSION['khach_hang'])) {
                    $id_user = $_SESSION['khach_hang']['id'];
                }elseif (isset($_SESSION['admin'])) {
                    $id_user = $_SESSION['admin']['id'];
                }else{
                    $thongbao = "quý khách vui lòng đăng nhập trước khi thanh toán";
                }
                $total = total();
                $created_at = date('Y-m-d H:i:s');
                $sql = "INSERT INTO bill(name,id_user, address, phone, total, created_at, pttt, ptgh) VALUES ('$name','$id_user', '$address', '$phone', '$total', '$created_at', '$pttt', '$ptgh')";    
                $conn = pdo_get_connection();
                $stmt = $conn->prepare($sql);
                $stmt -> execute();

                $id_order = $conn->lastInsertId();
                foreach ($_SESSION['cart'] as $item){
                    $ttien = $item['price'] * $item['quantity'];
                    insert_order_detail($id_order,$item['id'], $item['quantity'], $item['size'], $ttien);
                    
                }
                unset($_SESSION['cart']);
                echo "<script>window.location.replace(\"index.php?act=confirm&id=$id_order\")</script>;";
                
            }
            include "view/cart/pay.php";
            break;
            
        case 'confirm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $listdonhang = loadone_donhang($_GET['id']);
                $listdonhang1 = loadall_donhang_detail($_GET['id']);
            }
            include "view/cart/confirm.php";
            break;
        
        case 'xoacart':
            unset($_SESSION['cart'][$_GET['delid']]);
            echo "<script>window.location.replace(\"index.php?act=cart\")</script>;";
            break;

        case 'xoattc':
            if (isset($_SESSION['cart'])) {
                unset($_SESSION['cart']);
                echo "<script>window.location.replace(\"index.php\")</script>;";
            }
            break;

// tintuc
        case 'dstt':
            $listtintuc = loadall_tintuc();
            include "view/news/dstintuc.php";
            break;
        case 'cttt':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $tintuc = loadone_tintuc($_GET['id']);
            }
            $listtintuc = loadall_tintuc();
            include "view/news/cttintuc.php";
            break;
        case 'nha':
            include "view/news/nha.html";
            break;

        case 'manci':
            include "view/news/manci.html";
            break;

        case 'c1':
            include "view/news/c1.html";
            break;

// Liên hệ
        case 'contactx':
            include "view/contact.php";
            break;

        case 'contact':
                $error = array();
                if (isset($_POST['add'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $created_at = date('Y-m-d H:i:s');
                    $content = $_POST['content'];
                    if (empty($name)) {
                        $error['name'] = "Bắt buộc phải nhập Họ và tên";
                    } elseif (empty($email)) {
                        $error['email'] = "Bắt buộc phải nhập Email";
                    }
                    elseif (empty($phone)) {
                        $error['phone'] = "Bắt buộc phải nhập Số điện thoại";
                    }
                    elseif (empty($content)) {
                        $error['content'] = "Bắt buộc phải nhập Nội dung";
                    }
                    if (!array_filter($error)) {
                        insert_contact($name, $email, $phone, $content, $created_at);
                        echo "<script>alert('Bạn đã gửi thành công, chúng tôi sẽ phản hồi lại bạn sớm nhất!')</script>";
                        echo "<script>window.location.replace(\"index.php\")</script>;";
                }
            }
            break;

        
        default:
            include "view/home.php";
            break;
    }
}else{
include "view/home.php";
}
include "./view/footer.php"
?>