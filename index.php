<?php
session_start();
include_once "./config/pdo-connect.php";
include_once "./model/danh-muc.php";
include_once "./model/san-pham.php";
include_once "./model/tai-khoan.php";
include_once "./model/binh-luan.php";
include_once "./model/cart.php";
include_once "./view/header.php";
include_once "./global.php";

if(!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();

if (isset($_GET['act']) && ($_GET['act']) != "") {
    $act = ($_GET['act']);
    switch ($act) {


        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }

            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_danhmuc($iddm);
            include_once "./view/sanpham.php";
            break;

        case 'ctsanpham':

            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sanpham_cungloai = load_sanpham_cungloai($id, $iddm);

                include_once "./view/Ctsanpham.php";
            } else {
                include_once "./view/home.php";
            }
            break;


        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập để sử dụng.";
            }
            include "view/taikhoan/dangky.php";
            break;

            // đăng nhập
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    //$thongbao = "Đã đăng nhập thành công.";
                    header('location:index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại.";
                }
            }
            include "view/taikhoan/dangky.php";
            break;

            // edit tài khoản
        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                update_taikhoan($id, $user, $pass, $email, $address, $tel);
                $_SESSION['user'] = $checkuser($user, $pass);

                header("Location:index.php?act=edit_taikhoan");
            }
            include "view/taikhoan/edit_taikhoan.php";
            break;

            // quên mật khẩu
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là: " . $checkemail['pass'];
                } else {
                    $thongbao = "Email không tồn tại.";
                }
            }
            include "view/taikhoan/quenmk.php";
            break;

        case 'thoat':
            session_unset();
            header("location:index.php");
            break;

        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = 1;
                $thanhtien = $soluong * $price;
                $spadd = [$id,$name,$img,$price,$soluong,$thanhtien];
                array_push($_SESSION['mycart'],$spadd);
                
            }

            include_once "./view/cart/viewcart.php";
            break;

        case 'delcart':
            if (isset($_GET['idcart'])){
                array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                
            }else{
                $_SESSION['mycart'] = [];
            }
            header('Location: index.php?act=viewcart');
            break;

        case 'viewcart':
            
            include_once "./view/cart/viewcart.php";
            break;

        case 'bill':
            
            include_once "./view/cart/bill.php";
            break;

        case 'billcomfrm':
            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['addre$address'];
                $tel = $_POST['tel'];
                $ngaydathang = date('h:i:sa d/m/Y');
                $tongdonhang = tongdonhang();
            }
            include_once "./view/cart/billcomfrm.php";
            break;
        case 'mybill':
            
            include_once "./view/cart/viewcart.php";
            break;

        case 'gioithieu':
            include_once "./view/gioithieu.php";
            break;
        case 'lienhe':
            include_once "./view/lienhe.php";
            break;

        default:
            include_once "./view/home.php";
            break;
    }
} else {
    include_once "./view/home.php";
}

include_once "./view/footer.php";
