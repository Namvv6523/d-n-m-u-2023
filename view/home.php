<div class="row mb content">
    <div class="box-left">
        <div class="row">
            <div class="banner">
                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <img src="view/image/1004.jpg" style="width:100%">
                        <div class="text">100$</div>
                    </div>

                    <div class="mySlides fade">
                        <img src="view/image/1006.jpg" style="width:100%">
                        <div class="text">200$</div>
                    </div>

                    <div class="mySlides fade">
                        <img src="view/image/1008.jpg" style="width:100%">
                        <div class="text">300$</div>
                    </div>
                </div>
                <br>

                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(0)"></span>
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                </div>
            </div>
        </div>

        <div class="row ">

            <?php
            $i = 0;
            foreach ($spnew as $item) {
                extract($item);
                $linksp = "index.php?act=ctsanpham&idsp=" . $id;
                $hinh = $img_path . $img;
                if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
                    $mr = '';
                } else {
                    $mr = 'mr';
                }

                echo '
                <div class="box-shop ' . $mr . '">
                    <a href="' . $linksp . '"><img class="row img" src="' . $hinh . '" alt=""> </a>
                    <p class="p">$' . $price . '</p>
                    <a class="a" href="' . $linksp . '">' . $name . '</a>
                    <div class = "row btnaddtocart">
                        <form action="index.php?act=addtocart" method="post">
                            <input type="hidden" name="id" value="' . $id . '">
                            <input type="hidden" name="name" value="' . $name . '">
                            <input type="hidden" name="img" value="' . $img . '">
                            <input type="hidden" name="price" value="' . $price . '">
                            <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                        </form>
                    </div>
                </div>';
                $i += 1;
            } ?>
        </div>
    </div>
    <div class="box-right">
        <?php include_once "box-right.php";  ?>

    </div>
</div>