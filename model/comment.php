<?php

function insert_binhluan($content , $id_user , $id_pro , $created_at){
    $sql="insert into comment(content , id_user , id_pro , created_at) values('$content' , '$id_user' , '$id_pro' , '$created_at')";
    pdo_execute($sql);
}
function loadall_binhluan(){
    $sql="SELECT comment.id_pro, products.id, products.name as namesp, COUNT(*) as 'soluong', MAX(comment.created_at) AS 'moi', MIN(comment.created_at) as 'cu' FROM comment JOIN products ON products.id = comment.id_pro GROUP BY products.id, products.name HAVING soluong>0";
    $danhsachbinhluan=pdo_query($sql);
    return $danhsachbinhluan;
}
function loadone_binhluan($id){
    $sql = "SELECT comment.id,comment.content,comment.created_at,users.name AS 'tenkh', products.name AS 'tensp' FROM comment 
    JOIN users on users.id = comment.id_user
    JOIN products ON products.id = comment.id_pro
    AND comment.id_pro = ".$id;
    $binhluanchitiet = pdo_query($sql);
    return $binhluanchitiet;
}

function delete_binhluan($id){
    $sql="delete from comment where id=".$id;
    pdo_execute($sql);
}



?>