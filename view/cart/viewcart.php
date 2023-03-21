<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb frmloai ">
            <div class="boxtitle">GIỎ HÀNG</div>
            <div class="row boxcontent ">
                <table>
                    <?php
                    viewcart(1);
                    ?>
                </table>
            </div>
        </div>
        <div class="row mb bill">
            <a href="index.php?act=bill"><input type="button" value="Đồng ý đặt hàng"></a>
            <a href="index.php?act=delcart"><input type="submit" value="Xóa giỏ hàng"></a>
        </div>
        <div class="boxphai">
            <?php include_once "view/box-right.php"; ?>
        </div>
    </div>
</div>