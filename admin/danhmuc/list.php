<div class="row">
    <div class="row frmtitle">
        <h1>QUẢN LÍ LOẠI HÀNG</h1>
    </div>
    <div class="row formcontent">
        <div class="row mb10 frmloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listdm as $item) :
                ?>
                    <tr>
                        <td>
                            <input type="checkbox" name="" id="">
                        </td>
                        <td><?php echo $item['id'] ?></td>
                        <td><?php echo $item['name'] ?></td>
                        <td>
                            <a href="index.php?act=suadm&id=<?= $item['id'] ?>"><input type="button" name="" value="Sửa"></a>
                            <a href="index.php?act=xoadm&id=<?= $item['id'] ?>"><input type="button" name="" value="Xóa"></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>

        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm" id=""></a>
        </div>

    </div>
</div>