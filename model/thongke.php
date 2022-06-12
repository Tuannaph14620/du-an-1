<?php
function thong_ke_doanh_thu(){
    $sp_tung_trang = 10;
    if (!isset($_GET['page'])) {
        $page = 1;
    }else {
        $page = $_GET['page'];
    }
    $tung_trang = ($page-1)* $sp_tung_trang;
    $sql="SELECT products.id, products.name, products.price, products.historical_cost,
     SUM(order_detail.quantity) as 'soluong', order_detail.id_pro, (products.price * SUM(order_detail.quantity)) as 'doanh_thu', 
     (products.historical_cost * SUM(order_detail.quantity)) as 'gia_nhap' FROM order_detail 
     JOIN products ON products.id = order_detail.id_pro GROUP BY products.id, products.name, products.price HAVING soluong>0 limit $tung_trang, $sp_tung_trang";
    $thongke=pdo_query($sql);
    return $thongke;
}

function loadall_thong_ke(){
    $sql = "SELECT products.id, products.name, products.price, products.historical_cost,
    SUM(order_detail.quantity) as 'soluong', order_detail.id_pro, (products.price * SUM(order_detail.quantity)) as 'doanh_thu', 
    (products.historical_cost * SUM(order_detail.quantity)) as 'gia_nhap' FROM order_detail 
    JOIN products ON products.id = order_detail.id_pro GROUP BY products.id, products.name, products.price HAVING soluong>0";
    $thongke2=pdo_query($sql);
    return $thongke2;
}

function thong_ke_loai_hang(){
    $sql = "SELECT categories.id, categories.name, COUNT(*) as 'soluong', MAX(products.price) as 'cao', MIN(products.price) as 'thap', AVG(products.price) as 'tb' FROM categories JOIN products ON products.id_cate = categories.id GROUP BY categories.id, categories.name";
    $thongke1=pdo_query($sql);
    return $thongke1;
}
