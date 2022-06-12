<?php
function insert_taikhoan($email, $name, $password, $address, $phone, $permission )
{
    $sql = "insert into users (email,name,password, phone, address, permission) values('$email', '$name', '$password', '$phone','$address','$permission')";
    pdo_execute($sql);
}
function checktaikhoan($email, $password)
{
    $sql = "select * from users where email='" . $email . "' AND password='" . $password . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function capnhattaikhoan($id, $email, $name, $password, $address, $phone, $permission)
{
    $sql = "UPDATE users set name='" . $name . "', email='" . $email . "', password='" . $password . "',address='" . $address . "',phone='" . $phone . "', permission ='".$permission."' where id=" . $id;
    pdo_execute($sql);
}
function checkemail($email)
{
    $sql = "select * from user where email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function loadall_taikhoan()
{
    $sql = "select * from users order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function loadone_taikhoan($id)
{
    $sql = "SELECT * FROM users WHERE id=" . $id;
    $taikhoang = pdo_query_one($sql);
    return $taikhoang;
}
function delete_taikhoan($id)
{
    $sql = "delete from users where id=" . $id;
    pdo_execute($sql);
}
