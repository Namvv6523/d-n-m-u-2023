<!-- box-right-1 -->
<div class="row mb">
    <div class="box-title">
        Tài Khoản
    </div>
    <div class="box-content form">

        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        ?>
            <div class="row mb10">
                Xin chào <br>
                <?= $user ?>
            </div>
            <div class="row mb10">
                <li>
                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                </li>
                <li>
                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                </li>
                <?php if ($relo == 1) { ?>
                    <li>
                        <a href="admin/index.php">Đăng nhập admin</a>
                    </li>
                <?php } ?>
                <li>
                    <a href="index.php?act=thoat">Thoát</a>
                </li>
            </div>

        <?php
        } else {

        ?>
            <form action="index.php?act=dangnhap" method="post">
                <div class="row mb10">
                    Tên đăng nhập <br>
                    <input type="text" name="user"> <br>
                </div>
                <div class="row mb10">
                    Mật khẩu <br>
                    <input type="password" name="pass"> <br>
                </div>
                <div class="row mb10">
                    <input type="checkbox" name="" id="">Ghi nhớ tài khoản? <br>
                </div>
                <div class="row mb10">
                    <input type="submit" name="dangnhap" id="" value="Đăng nhập">
                </div>
            </form>
            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
            <li><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
        <?php } ?>
    </div>
</div>
<!-- box-right-2 -->
<div class="row mb">
    <div class="box-title">
        Danh mục
    </div>
    <div class="box-content2 menu-doc">
        <ul>
            <?php
            foreach ($dsdm as $item) {
                extract($item);
                $linksp = "index.php?act=sanpham&iddm=" . $id;
                echo '<li><a href="' . $linksp . '">' . $name . '</a></li>';
            }
            ?>
        </ul>
    </div>
    <div class="box-footer search-box">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw" placeholder="Từ khóa tìm kiếm">
            <input type="submit" name="timkiem" value="Tìm kiếm">
        </form>

    </div>
</div>
<!-- box-right-3 -->
<div class="row mb">
    <div class="box-title">
        Top 10 yêu thích
    </div>
    <div class="row box-content">
        <?php foreach ($dstop10 as $item) {
            extract($item);
            $linksp = "index.php?act=ctsanpham&idsp=" . $id;
            $img = $img_path . $img;
            echo '
                <div class="row mb10 top10">
                    <a  href="' . $linksp . '"> <img src="' . $img . '"></a>
                    <a href="' . $linksp . '">' . $name . '</a>
                </div>
                        ';
        } ?>

    </div>
</div>