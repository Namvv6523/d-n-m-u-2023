<div>
    <div class="row frmtitle mb10">
        <h3>DANH SÁCH TÀI KHOẢN</h3>
    </div>
    <div class=" frmcontent">
        <div class="row mb10 frmloai">
            <table border="1">
                <tr>
                    <th></th>
                    <th>MÃ TK</th>
                    <th>TÊN ĐĂNG NHẬP</th>
                    <th>MẬT KHẨU</th>
                    <th>EMAIL</th>
                    <th>ĐỊA CHỈ</th>
                    <th>SỐ ĐIỆN THOẠI</th>
                    <th>VAI TRÒ</th>
                    <th>ACTION</th>
                </tr>

                <?php
                foreach ($listtaikhoan as $taikhoan) :
                ?>
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td><?= $taikhoan['id'] ?></td>
                        <td><?= $taikhoan['user'] ?></td>
                        <td><?= $taikhoan['pass'] ?></td>
                        <td><?= $taikhoan['email'] ?></td>
                        <td><?= $taikhoan['address'] ?></td>
                        <td><?= $taikhoan['tel'] ?></td>
                        <td><?= $taikhoan['relo'] ?></td>
                        <td>
                            <a href="index.php?act=suatk&id=<?= $taikhoan['id'] ?>"><input type="button" value="Sửa"></a>
                            <a href="index.php?act=xoatk&id=<?= $taikhoan['id'] ?>"><input type="button" value="Xóa"></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=dangnhap"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>
</div>