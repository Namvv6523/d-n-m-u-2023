<div class="row mb">
    <div class="boxtrai mr">
        <form action="index.php?act=billconfrm" method="post">
            <div class="row mb">
                <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                <div class="row boxcontent billform">
                    <table>

                        <?php
                        if (isset($_SESSION['user'])) {
                            $name = $_SESSION['user']['user'];
                            $address = $_SESSION['user']['address'];
                            $email = $_SESSION['user']['email'];
                            $tel = $_SESSION['user']['tel'];
                        } else {
                            $name = "";
                            $address = "";
                            $email = "";
                            $tel = "";
                        }
                        ?>
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><input type="text" name="name" value="<?= $name ?>"></td>
                        </tr>

                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="address" value="<?= $address ?>"></td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?= $email ?>"></td>
                        </tr>

                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="tel" value="<?= $tel ?>"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
                <div class="row boxcontent">
                    <table>
                        <tr>
                            <td><input type="radio" name="pttt" checked>Trả tiền khi nhận hàng</td>
                            <td><input type="radio" name="pttt" checked>Chuyển khoản ngân hàng</td>
                            <td><input type="radio" name="pttt" checked>Thanh toán online</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row formcontent ">
                <div class="row mb10 frmloai  ">
                    <div class="row mb">

                        <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
                        <div class="row boxcontent billform">
                            <table>
                                <?php
                                viewcart(0);
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row mb bill"> 
                    <input type="submit" name="dongydathang" value="Đồng ý đặt hàng">
                </div>
                <div class="row mb bill">
                    <a href="index.php?act=bill"><input type="button" value="Tiếp tục đặt hàng"></a>
                    <a href="index.php?act=delcart"><input type="submit" value="Xóa giỏ hàng"></a>
                </div>
            </div>
    </div>


    </form>

</div>
</div>