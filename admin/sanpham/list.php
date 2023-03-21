<div class="row">
    <div class="row frmtitle mb">
        <h1>QUẢN LÍ SẢN PHẨM</h1>
    </div>

    <form action="index.php?act=listsp" method="post">
                <input type="text" name="kyw">
                <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php foreach ($listdm as $item) {
                        extract($item);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    } ?>
                </select>
                <input type="submit" name="listgo" value="GO">
            </form>
    <div class="row formcontent ">
        <div class="row mb10 frmloai  ">
            
            <table>
                <tr>
                    <th></th>
                    <th>DANH MỤC </th>
                    <th>TÊN SẢN PHẨM </th>
                    <th>HÌNH ẢNH</th>
                    <th>GIÁ</th>
                    <th>LƯỢT XEM</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listsp as $item) :
                ?>
                    <tr>
                        <td>
                            <input type="checkbox" name="" id="">
                        </td>
                        <td><?php echo $item['iddm'] ?></td>
                        <td><?php echo $item['name'] ?></td>
                        <td><img src="<?php echo "../img/" . $item['img'] ?>" alt="" width="100px"></td>
                        <td><?php echo $item['price'] ?></td>
                        <td><?php echo $item['luotxem'] ?></td>

                        <td>
                            <a href="index.php?act=suasp&id=<?= $item['id'] ?>"><input type="button" name="" value="UPDATE"></a>
                            <a href="index.php?act=xoasp&id=<?= $item['id'] ?>"><input type="button" name="" value="DELETE"></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>

        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm" id=""></a>
        </div>

    </div>
</div>