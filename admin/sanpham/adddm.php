<div class="row">
    <div class="row frmtitle">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Danh mục <br>
                <select name="iddm" id="">
                    <?php foreach($listdm as $item){
                        extract($item);
                        echo '<option value="'.$id.'">'.$name.'</option>';
                    } ?>
                    
                    
                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm
                <input type="text" name="tensp">
            </div>
            <div class="row mb10">
                Gía sản phẩm
                <input type="text" name="giasp">
            </div>
            <div class="row mb10">
                Ảnh sản phẩm
                <input type="file" name="anhsp">
            </div>
            <div class="row mb10">
                Mô tả sản phẩm
                <textarea name="motasp" cols="30" rows="10"></textarea>
            </div>
            
            <div class="row mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if(isset($thongbao)&&($thongbao!=""))
            echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>