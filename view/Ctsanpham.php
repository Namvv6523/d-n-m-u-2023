<div class="row mb content">
    <div class="box-left mr">
        <div class="row mb">
            <?php extract($onesp)  ?>
            <div class="box-title title">
                <?= $name ?>
            </div>
            <div class="row box-content">
                <?php
                $img = $img_path . $img;
                echo '<div class="row mb spct"  ">
                    <img src="' . $img . '" >
                    </div>';
                echo  $mota;
                ?>
            </div>
        </div>

        <div class="row mb">
            <div class="box-title">
                BÌNH LUẬN
            </div>
            <div class="row box-content">

            </div>
        </div>

        <div class="row mb">
            <div class="box-title">
                SẢN PHẨM CÙNG LOẠI
            </div>
            <div class="row box-content">
                <?php
                foreach ($sanpham_cungloai as $item) {
                    extract($item);
                    $linksp = "index.php?act=ctsanpham&idsp=" . $id;
                    echo '
                    <li><a href="' . $linksp . '">' . $name . '</a></li>
                    ';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="box-right">
        <?php include_once "box-right.php";  ?>

    </div>
</div>