<div class="row mb content">
    <div class="box-left ">
        <div class="row mb">
            <div class="box-title">CẬP NHẬT TÀI KHOẢN</div>
            <div class="row box-content formtaikhoan">
                <?php
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                    
                }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <div class="row mb10">
                        Email:
                        <input type="email" name="email" id="" value="<?=$email?>">
                    </div>
                    <div class="row mb10">
                        Tên đăng nhập:
                        <input type="text" name="user" id="" value="<?=$user?>">
                    </div>
                    <div class="row mb10">
                        Mật khẩu:
                        <input type="password" name="pass" id="" value="<?=$pass?>">
                    </div>
                    <div class="row mb10">
                        Địa chỉ:
                        <input type="text" name="address" id="" value="<?=$address?>">
                    </div>
                    <div class="row mb10">
                        Điện thoại:
                        <input type="text" name="tel" id="" value="<?=$tel?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id?>" id="">
                        <input type="submit" name="capnhat" value="Cập nhật" id="">
                        <input type="reset" value="Nhập lại" name="" id="">
                    </div>
                </form>
                <h2 class="thongbao">
                <?php
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                ?>
                </h2>
            </div>
        </div>
    </div>
    <div class="box-right">
        <?php include "view/boxright.php"; ?>
    </div>
</div>