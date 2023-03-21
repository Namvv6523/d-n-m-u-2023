<?php
function insert_danhmuc($tenloai)
{
    $sql = "INSERT INTO danhmuc(name) VALUES('$tenloai')";
    pdo_execute($sql); // thực thi câu lệnh
}

function delete_danhmuc($id)
{
    $sql = "DELETE FROM danhmuc WHERE id =" . $id;
    pdo_execute($sql);
}

function loadall_danhmuc()
{
    $sql = "SELECT * FROM danhmuc order by id desc";
    $listdm = pdo_query($sql);
    return $listdm;
}

function loadone_danhmuc($id)
{
    $sql = "SELECT * FROM danhmuc WHERE id= " . $id;
    $dmuc = pdo_query_one($sql);
    return $dmuc;
}

function update_danhmuc($id, $tenloai)
{
    $sql = "UPDATE `danhmuc` SET name = '" . $tenloai . "' WHERE id = " . $id;
    pdo_execute($sql); // thực thi câu lệnh
}
