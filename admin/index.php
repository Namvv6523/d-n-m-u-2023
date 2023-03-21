<?php
include "../config/pdo-connect.php";
include_once "../model/danh-muc.php";
include_once "../model/san-pham.php";
include_once "../model/binh-luan.php";
include_once "../model/tai-khoan.php";
include_once "../model/cart.php";


include_once "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            // thêm danh mục
        case 'adddm':
            // kiểm tra xem người dùng có bấm vào nut add hay ko
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            include_once "./danhmuc/adddm.php";
            break;

            //  list danh mục
        case 'listdm':
            $listdm = loadall_danhmuc();
            include_once "./danhmuc/list.php";
            break;

            // xóa danh mục
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdm = loadall_danhmuc();
            include_once "./danhmuc/list.php";
            break;

            // sửa danh mục
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $sql = "SELECT * FROM danhmuc WHERE id " . $id;
                $dmuc = pdo_query_one($sql);
                return $dmuc;
            }
            include_once "./danhmuc/update.php";
            break;

            // update danh mục
        case 'updatedm':
            if (isset($_POST['capnhap']) && $_POST['capnhap']) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "Cập nhập thành công";
            }
            $listdm = loadall_danhmuc();
            include_once "./danhmuc/list.php";
            break;

            /*--------------------------------------------------- */
            // Contrller Sản phẩm
        case 'addsp':
            // kiểm tra xem người dùng có bấm vào nut add hay ko
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['motasp'];
                $img = $_FILES['anhsp']['name'];
                move_uploaded_file($_FILES['anhsp']['tmp_name'], '../img/' . $_FILES['anhsp']['name']);
                insert_sanpham($tensp, $giasp, $img, $mota, $iddm);
                $thongbao = "Thêm thành công";
            }
            $listdm = loadall_danhmuc();
            include_once "./sanpham/adddm.php";
            break;

            //  list danh mục
        case 'listsp':
            if (isset($_POST['listgo']) && ($_POST['listgo'] > 0)) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdm = loadall_danhmuc();
            $listsp = loadall_sanpham($kyw, $iddm);
            include_once "./sanpham/list.php";
            break;

            // xóa danh mục
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                // $sql = "DELETE FROM `sanpham` WHERE id =" . $_GET['id'];
                // pdo_execute($sql);
                delete_sanpham($_GET['id']);
            }
            // $sql = "SELECT * FROM sanpham order by id desc";
            // $listdm = pdo_query($sql);
            $listsp = loadall_sanpham("", 0);
            include_once "./sanpham/list.php";
            break;

            // sửa danh mục
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sql = "SELECT * FROM sanpham order by id desc";
                $sanpham = pdo_query_one($sql);
            }
            $listdm = loadall_danhmuc();
            include_once "./sanpham/update.php";
            break;

            // update danh mục
        case 'updatesp':
            if (isset($_POST['capnhap']) && $_POST['capnhap']) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['motasp'];
                $img = $_FILES['anhsp']['name'];
                $target_dir = "../img/";
                $target_file = $target_dir . basename($_FILES['anhsp']['name']);
                if (move_uploaded_file($_FILES['anhsp']['tmp_name'], $target_file)) {
                } else {
                }
                update_sanpham($id, $iddm, $tensp, $giasp, $mota, $img);
                $thongbao = "Cập nhập thành công";
            }
            $listdm = loadall_danhmuc();
            $listsp = loadall_sanpham("", 0);
            include_once "./sanpham/list.php";
            break;
            // bình luận
        case 'dsbl':
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;
            // tài khoản
        case 'dskh':
            $listtaikhoan = loadall_taikhoan();
            include "./taikhoan/list.php";
            break;

        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan();
            include_once "./taikhoan/list.php";
            break;

        default:
            include_once "home.php";
            break;
    }
} else {
    include_once "home.php";
}



include_once "home.php";
include_once "footer.php";
