<?php

function insert_sanpham($name,$price,$image,$content,$id_cate,$created_at){
    $sql="insert into products(name,price,image,content,id_cate,created_at) values('$name','$price','$image','$content','$id_cate','$created_at')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="delete from products where id=".$id;
    pdo_execute($sql);
}
function loadall_sanpham_top10(){
    $sql="select * from products where 1 order by view desc limit 0,4"; 
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_yeuthich(){
    $sql="select * from products where view > 0 limit 0,10 "; 
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home(){
    $sql="select * from products where 1 order by id desc limit 0,4"; 
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham(){
    $sp_tung_trang = 12;
    if (!isset($_GET['page'])) {
        $page = 1;
    }else {
        $page = $_GET['page'];
    }
    $tung_trang = ($page-1)* $sp_tung_trang;
    $sql = "SELECT products.id, products.name, categories.name as 'namecate', price,image, created_at, view FROM `products` INNER JOIN categories ON categories.id = products.id_cate order by id desc limit $tung_trang, $sp_tung_trang ";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_count(){
    $sql = "SELECT * FROM products ";
    $countsanpham=pdo_query($sql);
    return $countsanpham;
}
function load_ten_danhmuc($id_cate){
    if($id_cate>0){
    $sql="select * from categories where id=".$id_cate;
    $dm=pdo_query_one($sql);
    extract($dm);
    return $name;
    }else{
        return "";
    }
}
function loadone_sanpham($id){
    $sql="select * from products where id=".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($id_cate){
    $sql="select * from products where id_cate=".$id_cate."";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($id,$id_cate,$name,$price,$content,$image,$created_at){
    if($image!="")
        $sql="update products set id_cate='".$id_cate."', name='".$name."', price='".$price."',content='".$content."',image='".$image."',created_at='".$created_at."'  where id=".$id;
    else 
        $sql="update products set id_cate='".$id_cate."', name='".$name."', price='".$price."',content='".$content."',created_at='".$created_at."' where id=".$id;   
    pdo_execute($sql);
}

function search_sanpham($name){
    $sql = "SELECT * FROM products WHERE name LIKE '%$name%'";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

?>