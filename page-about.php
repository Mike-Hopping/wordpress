<?php
/**
 * Created by PhpStorm.
 * User: 845856208
 * Date: 10/04/2018
 * Time: 1:35 PM
 */
?>
<?php get_header();
$about_text = get_theme_mod('pistoncranky_about_text');
$about_image = get_theme_mod('pistoncranky_about_image');
?>
<div class="text-container">
    <div class="about-custom">
    <div class="about-text">
        <h1>About Us</h1>
    <?php if($about_text || is_customize_preview()):
        echo wpautop($about_text);
        endif; ?>
    </div>
<!--    <div class="about-img">-->
        <img class="about-img" src="<?php echo $about_image ?>">
<!--    </div>-->
    </div>
</div>
<?php get_footer(); ?>
