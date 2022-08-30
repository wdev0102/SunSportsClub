<?php
get_header();
?>


<body>
    <div class="sp" style="margin-top:15%;"></div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/index/kv01.png" />
                <div class="banner-text">
                    <p>伝統に培われたノウハウと指導技術</p>
                    <p>個々に合わせた親切な指導で <br> 心と身体作りをサポートします!
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/index/kv02.png" />
                <div class="banner-text">
                    <p>伝統に培われたノウハウと指導技術</p>
                    <p>個々に合わせた親切な指導で <br> 心と身体作りをサポートします!
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/index/kv03.png" />
                <div class="banner-text">
                    <p>伝統に培われたノウハウと指導技術</p>
                    <p>個々に合わせた親切な指導で <br> 心と身体作りをサポートします!
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/index/kv04.png" />
                <div class="banner-text">
                    <p>伝統に培われたノウハウと指導技術</p>
                    <p>個々に合わせた親切な指導で <br> 心と身体作りをサポートします!
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/index/kv05.png" />
                <div class="banner-text">
                    <p>伝統に培われたノウハウと指導技術</p>
                    <p>個々に合わせた親切な指導で <br> 心と身体作りをサポートします!
                    </p>
                </div>
            </div>
        </div>
        <!--div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div-->
        <div class="swiper-pagination"></div>
    </div>
    <section class="main_visual">
        <div class="top-func">
            <div class="top-func-item">
                <a href="<?php echo get_home_url()?>/about?t=1"><img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/about.png" alt=""></a>
            </div>
            <div class="top-func-item">
                <a href="<?php echo get_home_url()?>/feather?t=1"><img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/feather.png" alt=""></a>
            </div>
            <div class="top-func-item">
                <a href="<?php echo get_home_url()?>/yahagi?t=1"><img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/yahagi.png" alt=""></a>
            </div>
            <div class="top-func-item">
                <a href="<?php echo get_home_url()?>/miai?t=1"><img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/miai.png" alt=""></a>
            </div>
        </div>
        <div class="title">サンスポーツクラブからのお知らせ</div>


        <?php 
        $args = array(
            'post_type'=> 'post',
            'orderby'    => 'ID',
            'post_status' => 'publish',
            'order'    => 'DESC',
            'posts_per_page' => -1 // this will retrive all the post that is published 
            );
            
        $result = new WP_Query( $args );
        if ( $result-> have_posts() ) : ?>

        <?php
        while ( $result->have_posts() ) : $result->the_post(); 
        
        $child = get_the_category()[0]->slug;
        $category = get_the_category();
        if($category == 'Uncategorized') continue;

        //$parent = get_cat_name($category[0]->category_parent);//get parent category name
        $parent = $category[0]->category_parent;//get parent slug
        $category_parent = get_term($parent, 'category');
        $parent_slug = $category_parent->slug;
        
        if($parent_slug == 'information')
        continue;

        if( $parent_slug != 'news')
        continue;

        ?>

        <div class="top-news">
            <a href="<?php echo get_permalink();?>" target="_blank">
                <p>
                    <span class="top-news-date"><?php echo get_the_date('Y年m月d日')?></span>
                    <span class="top-news-school"><?php echo get_field('school');// echo get_the_tags()[0]->name;?></span>
                </p>
                <p class="top-news-title"><?php echo get_the_title();?></p>
                <div class="top-news-content"><?php echo get_the_content(); ?></div>
            </a>
        </div>

        <?php endwhile; ?>
                    <?php endif; wp_reset_postdata(); ?>


    </section>
</body>


<?php
get_footer();
?>
