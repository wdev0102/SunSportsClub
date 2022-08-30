
<footer class="fadeUp fadeUpTrigger">
    <div class="footer-logo pc">
        <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/logo-footer.png" alt="">
    </div>
    <div class="footer-right">
        <div class="footer-menu pc">
            <ul class="footer-menu-list">
            <li><a href="<?php echo get_home_url()?>">トップページ</a></li>
            <li><a href="<?php echo get_home_url()?>/about?t=1">サンスポーツクラブとは</a></li>
            <li><a href="<?php echo get_home_url()?>/feather?t=1">サンスポーツクラブ羽根</a></li>
            <li><a href="<?php echo get_home_url()?>/yahagi?t=1">サンスポーツクラブ矢作</a></li>
            <li><a href="<?php echo get_home_url()?>/miai?t=1">サンスポーツクラブ美合</a></li>
            </ul>
        </div>
        <div class="right">Copyright © 2009-2021 SUN SPORTS CLUB. <br class="sp">All Rights Reserved.</div>
    </div>
</footer>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/js/jquery-3.6.0.min.js "></script>
<script src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/js/main.js "></script>
<!--piechart-->

<!-- Initialize Swiper -->
<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        speed: 2000,
        effect: "fade",
        autoplay: {
            delay: 6000,
        },
        /*
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },*/
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>

</html>