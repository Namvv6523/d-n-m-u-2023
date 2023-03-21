<div class="row">
    <div class="row frmtitle mb10">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class=" frmcontent">
        <div class="row mb10 frmloai">
            <table border="1">
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Nội dung</th>
                    <th>Id_kh</th>
                    <th>Id_sp</th>
                    <th>Ngày bình luận</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listbinhluan as $binhluan) :
                ?>
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td><?= $binhluan['id'] ?></td>
                        <td><?= $binhluan['noidung'] ?></td>
                        <td><?= $binhluan['id_kh'] ?></td>
                        <td><?= $binhluan['id_sp'] ?></td>
                        <td><?= $binhluan['ngaybl'] ?></td>
                        <td>
                            <a href="index.php?act=xoabl&id=<?= $binhluan['id'] ?>"><input type="button" value="Xóa"></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>

        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
        </div>

    </div>
</div>