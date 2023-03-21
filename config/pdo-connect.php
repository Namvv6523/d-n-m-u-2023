<?php
function pdo_get_connect()
{
    $connect = new PDO("mysql:host=localhost;dbname=duanmau2;charset=utf8","root","12345");
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $connect;
}


/*
        - thực thi câu lệnh sql thao tác dữ liệu (INSERT, DELETE, UPDATE)
        - @param string $sql câu lệnh sql
        - @param array $args mảng giá trị cung cấp cho các tgham số của $sql
        - @throws PDOException lỗi thực thi câu lệnh
    */


function pdo_execute($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $connect = pdo_get_connect();
        $stmt = $connect->prepare($sql);
        $stmt->execute($sql_args);
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($connect);
    }
}


function pdo_query($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $connect = pdo_get_connect();
        $stmt = $connect->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($connect);
    }
}

function pdo_query_one($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $connect = pdo_get_connect();
        $stmt = $connect->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($connect);
    }
}


function pdo_query_value($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $connect = pdo_get_connect();
        $stmt = $connect->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetch(PDO::FETCH_ASSOC);
        return array_values($rows)[0];
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($connect);
    }
}
