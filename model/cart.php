<?php

function loadall_donhang()
{
    $sp_tung_trang = 10;
    if (!isset($_GET['page'])) {
        $page = 1;
    }else {
        $page = $_GET['page'];
    }
    $tung_trang = ($page-1)* $sp_tung_trang;
    $sql = "SELECT bill.id, bill.pttt, bill.ptgh, bill.name, bill.address, bill.phone, bill.total, bill.created_at, users.name AS namekh 
    FROM bill INNER JOIN users ON users.id = bill.id_user order by id desc limit $tung_trang, $sp_tung_trang" ;
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}

function loadall_donhang_count(){
    $sql = "SELECT * FROM bill ";
    $countdonhang = pdo_query($sql);
    return $countdonhang;
}

function loadone_donhang($id){
    $sql = "SELECT bill.id, bill.name, bill.address, bill.phone, bill.pttt, bill.total, bill.ptgh FROM bill WHERE bill.id =".$id;
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}
function loadall_donhang_detail($id){
    $sql = "SELECT products.name, products.price, order_detail.size, order_detail.quantity FROM order_detail inner JOIN products ON products.id = order_detail.id_pro WHERE order_detail.order_id =".$id;
    $listdonhang1 = pdo_query($sql);
    return $listdonhang1;
}
function loadone_donhang_detail($id)
{
    $sql = "SELECT order_detail.id, order_id, quantity, order_detail.price, size, products.name, products.price as pri_pro, products.image FROM order_detail
    INNER JOIN products on products.id = order_detail.id_pro 
    AND order_detail.order_id =".$id;
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}

function confirm($id)
{
    $sql = "SELECT bill.id, bill.name, bill.address, bill.phone, bill.total, bill.pttt, bill.ptgh, order_detail.quantity, order_detail.size, products.name 
    FROM order_detail 
    JOIN bill ON order_detail.order_id = bill.id
    JOIN products on order_detail.id_pro = products.id
    WHERE order_detail.order_id = ".$id;
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}

function delete_donhang_detail($id)
{
    $sql = "DELETE FROM order_detail WHERE id=" . $id;
    pdo_execute($sql);
}

function total()
{
    $tong = 0;
    if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) {
        $i = 0;
        foreach ($_SESSION['cart'] as $cart) {
            $ttien = $cart['quantity'] * $cart['price'];
            $tong += $ttien;
            $i += 1;
        }
    }
    return $tong;
}

function insert_bill($name,$id_user, $address, $phone, $total,$created_at,$pttt,$ptgh){
    $sql = "INSERT INTO bill(name,id_user, address, phone, total, created_at,pttt,ptgh) VALUES ('$name','$id_user', '$address', '$phone', '$total', '$created_at','$pttt','$ptgh')";
    pdo_execute($sql);
}

function insert_order_detail($id_order,$id_pro, $quantity, $size, $price){
    $sql = "INSERT INTO order_detail(order_id,id_pro,quantity, size, price) VALUES ('$id_order','$id_pro', '$quantity', '$size', '$price')";
    pdo_execute($sql);
}




