<div class="row mb">
        <div class="boxtrai mr">
            <form action="index.php?act=billconfrm" method="post">
                <div class="row mb">
                    <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                    <div class="row boxcontent billform">
                        <table>
                            <tr>
                                <td>Người đặt hàng</td>
                                <td><input type="text" name="name" id=""></td>
                            </tr>

                            <tr>
                                <td>Địa chỉ</td>
                                <td><input type="text" name="address" id=""></td>
                            </tr> 

                            <tr>
                                <td>Email</td>
                                <td><input type="text" name="email" id=""></td>
                            </tr>

                            <tr>
                                <td>Điện thoại</td>
                                <td><input type="text" name="tel" id=""></td>
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
            </form>
        </div>
    </div>