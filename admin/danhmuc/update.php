<?php
    if(is_array($dmuc)){
        extract($dmuc);
    }

?>

<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatedm" method="post">
            <div class="row mb10">
                Mã loại
                <input type="text" name="maloai" disabled>
            </div>
            <div class="row mb10">
                    Tên loại
                    <input type="text" name="tenloai" value="<?php if(isset($name) && ($name != "")) echo $name;?>">
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?php if(isset($id) && ($id > 0)) echo $id;?>">
                <input type="submit" name="capnhap" value="CẬP NHẬP">
                <input type="reset" value="THÊM MỚI">
                <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>