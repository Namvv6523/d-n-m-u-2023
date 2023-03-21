<?php
if (is_array($sanpham)) {
    extract($sanpham);
}

?>

<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT SẢN PHẨM</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Danh mục <br>
                <select name="iddm">
                    <?php foreach ($listdm as $item) {
                        extract($item);
                        if ($iddm == $id) $s = "selected";
                        else $s = "";
                        echo '<option value="' . $id . '" ' . $s . '>' . $name . '</option>';
                    } ?>
                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm
                <input type="text" name="tensp" value="<?= $name ?>">
            </div>
            <div class="row mb10">
                Gái sản phẩm
                <input type="text" name="giasp" value="<?= $price ?>">
            </div>
            <div class="row mb10">
                Ảnh sản phẩm
                <input type="file" name="anhsp">
                <?= $img ?>
            </div>
            <div class="row mb10">
                Mô tả sản phẩm
                <textarea name="motasp" cols="30" rows="10"><?= $mota ?></textarea>
            </div>

            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="capnhap" value="CẬP NHẬP">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>