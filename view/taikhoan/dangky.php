<div class="row mb content">
    <div class="box-left mr ">
        <div class="row mb">
            <div class="box-title">Đăng ký thành viên</div>
            <div class="row box-content formtaikhoan">
                <form action="index.php?act=dangky" method="post">
                    <div class="row mb">
                        Email:
                        <input type="email" name="email" id="">
                    </div>
                    <div class="row mb">
                        Tên đăng nhập:
                        <input type="text" name="user" id="">
                    </div>
                    <div class="row mb">
                        Mật khẩu:
                        <input type="password" name="pass" id="">
                    </div>
                    <div class="row mb">
                        <input type="submit" name="dangky" value="Đăng ký" id="">
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
            <?php include_once"./view/box-right.php"?>
        </div>
    </div>