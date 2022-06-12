<?php
$listdanhmuc = loadall_danhmuc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <title>ManCityShop</title>
    <style>
        #menu {
            list-style: none;
        }

        #menu li {
            text-align: left;
            color: #fff;
        }

        #menu li a {
            text-decoration: none;
            font-size: 16px;
            display: block;
            padding: 5px 10px;
            color: #fff;
            background: transparent;
        }

        #menu>li {
            float: left;
            position: relative;
        }

        #menu>li>ul.dropdown_menu {
            position: absolute;
            list-style: none;
            display: none;
        }

        /* #menu>li:hover>a {
            background-color: #5C5C5C;
        } */

        #menu>li:hover>ul.dropdown_menu {
            z-index: 100;
            display: block;
        }

        ul.dropdown_menu>li>ul.submenu {
            position: absolute;
            display: none;
            left: 200px;
            list-style: none;
            width: 200px;
        }

        /* Style The Dropdown Button */
        .dropbtn {
            background-color: #7bc3ee;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #f1f1f1
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        
    </style>
</head>

<body>
    <div class="container">
        <header>
            <div class="row2">
                <div class="logo">
                    <a href="index.php"><img src="view/image/logo.png" alt=""></a>
                    <p>ManCity Shop</p>
                </div>
                <div class="search">
                    <form action="index.php?act=search" method="post" enctype="multipart/form-data">
                        <input type="text" placeholder="Tìm kiếm" name="name">
                        <button type="submit" name="search">Tìm kiếm</i></button>
                    </form>
                </div>
                <div class="account">
                    <div class="login">

                        <?php
                        if (isset($_SESSION['admin'])) { ?>
                            <ul id="menu">
                                <li>
                                    <a href="javascript:void(0)">
                                        view profile <i style="font-size: 25px;" class="far fa-user-circle"></i>

                                    </a>
                                    <ul class="dropdown_menu">
                                        <li>
                                            <a href="index.php?act=profile&id=<?= $_SESSION['admin']['id'] ?>"">Thông tin</a>
                                        </li>
                                        <li>
                                            <a href=" index.php?act=logout" onclick="return alert('Bạn chắc chắn muốn đăng xuất chứ ?')">Đăng xuất</a>
                                        </li>
                                        <li>
                                            <?php
                                            if (isset($_SESSION['admin'])) { ?>
                                                <div class="profile"><a href="admin/index.php"> Quản trị</a></div>
                                            <?php

                                            } ?>
                                        </li>
                                    </ul>
                                </li> <?php if (isset($_SESSION['cart'])) :  ?>
                                    <a style="color: #fff;" href="index.php?act=cart"><i style="color: #fff; font-size: 20px; padding-top: 7px;" class="fa fa-shopping-cart"></i></a>
                                <?php endif; ?>

                            </ul>

                        <?php
                        } elseif (isset($_SESSION['khach_hang'])) { ?>

                            <ul id="menu">
                                <li>
                                    <a href="javascript:void(0)">
                                        view profile <i style="font-size: 25px;" class="far fa-user-circle"></i>
                                    </a>
                                    <ul class="dropdown_menu">
                                        <li>
                                            <a href="index.php?act=profile&id=<?= $_SESSION['khach_hang']['id'] ?>"">Thông tin</a>
                                        </li>
                                        <li>
                                            <a href=" index.php?act=logout" onclick="return alert('Bạn chắc chắn muốn đăng xuất chứ ?')">Đăng xuất</a>
                                        </li>
                                    </ul>
                                </li><?php if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) :  ?>
                                    <a style="color: #fff;" href="index.php?act=cart"><i style="color: #fff; font-size: 20px; padding-top: 7px;" class="fa fa-shopping-cart"></i></a>
                                <?php endif; ?>

                            </ul>
                        <?php
                        } else { ?>
                            <div><a style="color: #fff;" href="index.php?act=login">Đăng nhập</a></div>
                        <?php
                        }
                        ?>

                    </div>
                </div>

            </div>
            <div class="row2">
                <nav>
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        <div class="dropdown">
                            <button class="dropbtn"><a style="color: black; font-size: 25px;" href="index.php?act=tcsp">Sản phẩm</a></button>
                            <div class="dropdown-content">
                                <?php foreach($listdanhmuc as $dm):?>
                                    <a style="text-align: left;" href="index.php?act=spdm&id=<?= $dm['id'] ?>"><?= $dm['name'] ?></a>
                                <?php  endforeach ?>
                            </div>
                        </div>
                        <li><a href="index.php?act=dstt">Tin tức</a></li>
                        <li><a href="index.php?act=contactx">Liên hệ</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row2 bn" >
                <p style="margin: auto;">Giảm 10% khi giá trị giỏ hàng trên
                    1 triệu! code:NAV </p>
            </div>
        </header>