<?php
/**
 * Created by PhpStorm.
 * User: 845856208
 * Date: 10/04/2018
 * Time: 1:35 PM
 */
?>
<?php get_header(); ?>
<section>
    <div class="main-content">
        <div class="content-container">
            <h2>Welcome to Piston Cranky Motors - The PC Automotive Company</h2>
            <p>
                Welcome to Piston Cranky Motors Ltd, where we deliver what we say we will…whether it's a Warrant of Fitness (WOF), puncture repair, an engine overhaul or just a cup of tea and a chat!
                So you need something mechanical done? At Piston Cranky Motors Ltd, WE CAN DO IT!
            </p>
            <div class="main-images">
                <div class="image1"></div>
                <div class="image2"></div>
            </div>
            <div class="promotional">
                <div class="promo-img1"></div>
                <div class="promo-img2"></div>
            </div>
            <div class="promo-services">
                <div class="services-container">
                    <div class="services-wof">
                        <h3>Our Services Include:</h3>
                        <li>Warrant of fitness checks (WOF)</li>
                        <li>Batteries</li>
                        <li>Transmission servicing and flushing</li>
                        <li>Fuel system purge</li>
                        <li>Tyres</li>
                        <li>Wheel alignment</li>
                        <li>WINZ quotes</li>
                        <li>Insurance appraisals</li>
                    </div>
                    <div class="img"></div>
                </div>
                <div class="services-repairs">
                    <h3>All other mechanical repairs:</h3>
                    <li>Clutch repairs</li>
                    <li>Radiator repairs</li>
                    <li>Electrical repairs</li>
                    <li>Engine repairs</li>
                </div>
<!--                <div class="services-img"></div>-->
            </div>
            <div class="products-promo">
            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 3
            );
            $loop = new WP_Query($args);
            if($loop->have_posts()) {
                while ($loop->have_posts()) {
                    $loop->the_post(); ?>
                    <!--$image - wp_get_attachment_image_src(-->
                    <!--    get_post_thumbnail_id($loop->post->ID),-->
                    <!--    'single-post-thumbnail');-->
                    <!--?>-->
                    <div class="product-item">
                        <a href="<?php echo get_permalink(get_page_by_path('product')->ID); ?>">
                            <img alt="<?php the_title(); ?>"
                                 src="<?php the_post_thumbnail_url(); ?>">
                            <h3><?php the_title(); ?></h3>
                        </a>
                    </div>
                <?php }
            }?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
