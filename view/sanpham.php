<div class="row mb content">
    <div class="box-left mr">
        <div class="row mb">
        
            <div class="box-title title">
                SẢN PHẨM <strong> <?= $tendm ?></strong>
            </div>
            <div class="row box-content">
                <?php
                $i = 0;
                foreach ($dssp as $item) {
                    extract($item);
                    $linksp = "index.php?act=ctsanpham&idsp=" . $id;
                    $hinh = $img_path . $img;
                    if (($i == 2) || ($i == 5) || ($i == 8)) {
                        $mr = '';
                    } else {
                        $mr = 'mr';
                    }
                    echo '
                        <div class="box-shop ' . $mr . '">
                        <a href="' . $linksp . '"><img class="row img" src="' . $hinh . '" alt=""> </a>
                        <p class="p">$' . $price . '</p>
                        <a class="a" href="' . $linksp . '">' . $ten . '</a>
                    </div>';
                    $i += 1;
                }

                ?>
            </div>
        </div>


    </div>
    <div class="box-right">
        <?php include_once "box-right.php";  ?>

    </div>
</div>