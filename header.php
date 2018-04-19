<?php
/**
 * Created by PhpStorm.
 * User: 845856208
 * Date: 10/04/2018
 * Time: 12:41 PM
 */
?>
<!DOCTYPE html>
<head>
    <meta charset="<?php bloginfo(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZHMT4UAIYHOtBxAh-BnJoZ8vvEDPWYYM&callback=myMap"></script>
    <?php wp_head(); ?>
</head>

<body class="woocommerce"<?php body_class(); ?>>
    <header>
        <div class="nav-wrapper">
            <div class="nav-menu">
            <nav><?php wp_nav_menu() ?></nav>
            </div>
            <div class="shopping-cart">
            <span class="cart-icon cart-customlocation">
                <a href="<?php echo wc_get_cart_url(); ?>">
                <i class="fas fa-shopping-cart"></i>
                    </a>
            </span>
            <?php
            $cart_count = WC() ->cart->get_cart_contents_count();
            echo $cart_count;
//          echo $cart_count > 0 ? '(' ._$cart_cart . ')' : '';
//            ?>
            </div>
        </div>
            <div class="banner">

            </div>
<!--        <img src="assets/piston-cranky-banner.png" alt="piston-cranky" width="1200px" height="500px">-->
    </header>
    <div class="content">