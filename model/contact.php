<?php
function insert_contact($name, $email, $phone, $content, $created_at){
    $sql="insert into contact(name, email, phone, content, created_at) values('$name', '$email', '$phone', '$content', '$created_at')";
    pdo_execute($sql);
}

function loadall_contact(){
    $sql="select * from contact order by id desc "; 
    $listlienhe=pdo_query($sql);
    return $listlienhe;
}

function delete_contact($id){
    $sql="delete from contact where id=".$id;
    pdo_execute($sql);
}
?>