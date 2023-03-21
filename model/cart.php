<?php

function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;

    if ($del == 1) {
        $xoasp_th = '<th>Thao tác</th>';
        $xoasp_td2 = '<td></td>';
    } else {
        $xoasp_th = "";
        $xoasp_td2 = "";
    }

    echo '
    <tr>
        <th>Hình</th>
        <th>Sản phẩm</th>
        <th>Đơn giá</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
        ' . $xoasp_th . '
    </tr>';
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $thanhtien = $cart[3] * $cart[4];
        $tong += $thanhtien;

        if ($del == 1) {
            $xoasp_td = '<td><a href="index.php?act=delcart&idcart=' . $i . '"> <input type="button" value="Xóa"> </a></td>';
        } else {
            $xoasp_td = "";
        }
        echo
        '
        <tr>
            <td><img src = "' . $hinh . '" height="80px"></td>
            <td>' . $cart[1] . '</td>
            <td>' . $cart[3] . '</td>
            <td>' . $cart[4] . '</td>
            <td>' . $thanhtien . '</td>
            ' . $xoasp_td . '
        </tr>';
        $i += 1;
    }   
    echo '
    <tr>
        <td colspan="4">Tổng đơn hàng</td>
        <td>' . $tong . '</td>
        ' . $xoasp_td2 . '
    </tr>
    ';
}

function tongdonhang(){
    $tong = 0;

    foreach ($_SESSION['mycart'] as $cart) {
        $thanhtien = $cart[3] * $cart[4];
        $tong += $thanhtien;
    }
    return $tong;

}

function insert_bill($bill_name,$bill_email,$bill_address,$bill_tel,$bill_pttt, $total){
    $sql="insert into bill(noidung,id_kh,id_sp,ngaybl) values('$bill_name', '$bill_email','$bill_address', '$bill_tel', '$bill_pttt', '$    total')";
    pdo_execute($sql);
}
