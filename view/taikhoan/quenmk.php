<div class="row mb">
    <div class="box-left mr">
        <div class="row mb">
            <div class="box-title">QUÊN MẬT KHẨU</div>
            <div class="row box-content formtaikhoan">
                <form action="index.php?act=quenmk" method="post">
                    <div class="row mb10">
                        Email:
                        <input type="email" name="email" id="">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="guiemail" value="Gửi" id="">
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