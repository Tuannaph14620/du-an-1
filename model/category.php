<?php

function insert_danhmuc($name){
    $sql = "insert into categories(name) values('$name')";
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql="delete from categories where id=".$id;
    pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql="select * from categories order by id desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id){
    $sql="select * from categories where id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id,$name){
    $sql="update categories set name='".$name."' where id=".$id;
    pdo_execute($sql);
}

?>