<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

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

<?php
/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content/content-single' );

	// if ( is_attachment() ) {
	// 	// Parent post navigation.
	// 	the_post_navigation(
	// 		array(
	// 			/* translators: %s: Parent post link. */
	// 			'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentytwentyone' ), '%title' ),
	// 		)
	// 	);
	// }

	// // If comments are open or there is at least one comment, load up the comment template.
	// if ( comments_open() || get_comments_number() ) {
	// 	comments_template();
	// }

	// // Previous/next post navigation.
	// $twentytwentyone_next = is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' );
	// $twentytwentyone_prev = is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' );

	// $twentytwentyone_next_label     = esc_html__( 'Next post', 'twentytwentyone' );
	// $twentytwentyone_previous_label = esc_html__( 'Previous post', 'twentytwentyone' );

	// the_post_navigation(
	// 	array(
	// 		'next_text' => '<p class="meta-nav">' . $twentytwentyone_next_label . $twentytwentyone_next . '</p><p class="post-title">%title</p>',
	// 		'prev_text' => '<p class="meta-nav">' . $twentytwentyone_prev . $twentytwentyone_previous_label . '</p><p class="post-title">%title</p>',
	// 	)
	// );
endwhile; // End of the loop.
?>

    </section>
<?php
get_footer();
?>
