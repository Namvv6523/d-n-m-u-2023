<?php
    function insert_taikhoan($email,$user,$pass){
        $sql="INSERT INTO taikhoan(email,user,pass) VALUES ('$email','$user','$pass')";
        pdo_execute($sql);
    }
    function checkuser($user,$pass){
        $sql = "SELECT * FROM taikhoan WHERE user='".$user."' AND pass='".$pass."'";
            $sp=pdo_query_one($sql);
            return $sp;
    }
    function checkemail($email){
        $sql = "SELECT * FROM taikhoan WHERE email='".$email."'";
            $sp=pdo_query_one($sql);
            return $sp;
    }
    function update_taikhoan($id,$user,$pass,$email,$address,$tel){
            $sql="update taikhoan set user='".$user."',pass='".$pass."',email='".$email."',address='".$address."',tel='".$tel."' WHERE id=".$id;
            pdo_execute($sql);
    }
    function loadall_taikhoan(){
        $sql = "SELECT * FROM taikhoan ORDER BY id DESC";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }

    function delete_taikhoan($id){
        $sql = "DELETE FROM `taikhoan` WHERE ".$id;
        pdo_execute($sql);

    }

//     function update_danhmuc($id, $tenloai)
// {
//     $sql = "UPDATE `danhmuc` SET name = '" . $tenloai . "' WHERE id = " . $id;
//     pdo_execute($sql); // thực thi câu lệnh
// }

?>