<?php
    function insert_tintuc($tittle, $content, $created_at, $image, $loi_dan){
        $sql = "insert into news (tittle, content, created_at, image, loi_dan) values ('$tittle', '$content',' $created_at', '$image','$loi_dan')";
        pdo_execute($sql);
    }

    function loadall_tintuc(){
        $sql = "SELECT * FROM news order by id desc";
        $listtintuc = pdo_query($sql);
        return $listtintuc;
    }
    function loadall_tintuc_home(){
        $sql="select * from news where 1 order by id desc limit 0,3"; 
        $listtintuc=pdo_query($sql);
        return $listtintuc;
    }
    function delete_tintuc($id){
        $sql = "DELETE FROM news WHERE id=".$id;
        pdo_execute($sql);
    }

    function loadone_tintuc($id){
        $sql = "SELECT * FROM news WHERE id=".$id;
        $tintuc = pdo_query_one($sql);
        return $tintuc;
    }

    function update_tintuc($id,$tittle, $content, $created_at, $image,$loi_dan){
        $sql = "update news set tittle ='".$tittle."', content ='".$content."', created_at ='".$created_at."', loi_dan='".$loi_dan."' image = '".$image."' where id=".$id;
        pdo_execute($sql);
    }
?>