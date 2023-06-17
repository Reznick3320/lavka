<?php
session_start();
$period_cookie = 2592000; // 30 дней (2592000 секунд)

if ($_GET) {
    setcookie("utm_source", $_GET['utm_source'], time() + $period_cookie);
    setcookie("utm_medium", $_GET['utm_medium'], time() + $period_cookie);
    setcookie("utm_term", $_GET['utm_term'], time() + $period_cookie);
    setcookie("utm_content", $_GET['utm_content'], time() + $period_cookie);
    setcookie("utm_campaign", $_GET['utm_campaign'], time() + $period_cookie);
}

if (!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];

?>
<?php ignore_user_abort(true);
error_reporting(0);
include './meldonium/config.php';
$config = getConfig();
$page = 'index';
?>
<!DOCTYPE html>
<html lang="uk">

<head>
    <?php include 'configs.php'; ?>
    <?php if (!empty($config)) include "./meldonium/include-head.php" ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>садова лавка</title>
    <meta name="description" content="Офіційний інтернет-магазин">
    <link rel="icon" type="image/png" href="favicon.png">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <meta property="og:locale" content="uk_UA">
    <meta property="og:locale:alternate" content="ru_RU">
    <meta property="og:type" content="article">
    <meta property="og:title" content="САДОВА ЛАВКА-СТІЛЕЦЬ">
    <meta property="og:description" content="Ідеальний пристрій для будь-якої роботи в саду та городі! Дізнайтеся більще в магазині!">

    <meta property="og:image" content="images/banner1.jpg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="800">
    <meta property="og:image:type" content="image/jpeg">

    <link rel="stylesheet" type="text/css" href="css/63p10_7.css" media="all">
    <style id="global-styles-inline-css" type="text/css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('akumulyatornyj-kempingovyj-lihtar-na-sonyachnij-batareyi.html#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('akumulyatornyj-kempingovyj-lihtar-na-sonyachnij-batareyi.html#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('akumulyatornyj-kempingovyj-lihtar-na-sonyachnij-batareyi.html#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('akumulyatornyj-kempingovyj-lihtar-na-sonyachnij-batareyi.html#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('akumulyatornyj-kempingovyj-lihtar-na-sonyachnij-batareyi.html#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('akumulyatornyj-kempingovyj-lihtar-na-sonyachnij-batareyi.html#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('akumulyatornyj-kempingovyj-lihtar-na-sonyachnij-batareyi.html#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('akumulyatornyj-kempingovyj-lihtar-na-sonyachnij-batareyi.html#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }
    </style>
    <!-- <link rel='stylesheet' id='woocommerce-layout-css'  href='https://perou.store/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=6.7.0' type='text/css' media='all' /> -->
    <link rel="stylesheet" type="text/css" href="css/63p10_1.css" media="all">
    <!-- <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='https://perou.store/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=6.7.0' type='text/css' media='only screen and (max-width: 768px)' /> -->
    <link rel="stylesheet" type="text/css" href="css/63p10.css" media="only screen and (max-width: 768px)">
    <!-- <link rel='stylesheet' id='woocommerce-general-css'  href='https://perou.store/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=6.7.0' type='text/css' media='all' /> -->
    <link rel="stylesheet" type="text/css" href="css/63p10_4.css" media="all">
    <style id="woocommerce-inline-inline-css" type="text/css">
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <!-- <link rel='stylesheet' id='yith_wcas_frontend-css'  href='https://perou.store/wp-content/plugins/yith-woocommerce-ajax-search-premium/assets/css/yith_wcas_ajax_search.css?ver=1.7.10' type='text/css' media='all' /> -->
    <link rel="stylesheet" type="text/css" href="css/63p10_2.css" media="all">
    <style id="yith_wcas_frontend-inline-css" type="text/css">
        .autocomplete-suggestion {
            padding-right: 20px;
        }

        .woocommerce .autocomplete-suggestion span.yith_wcas_result_on_sale,
        .autocomplete-suggestion span.yith_wcas_result_on_sale {
            background: #7eb742;
            color: #ffffff
        }

        .woocommerce .autocomplete-suggestion span.yith_wcas_result_outofstock,
        .autocomplete-suggestion span.yith_wcas_result_outofstock {
            background: #7a7a7a;
            color: #ffffff
        }

        .woocommerce .autocomplete-suggestion span.yith_wcas_result_featured,
        .autocomplete-suggestion span.yith_wcas_result_featured {
            background: #c0392b;
            color: #ffffff
        }

        .autocomplete-suggestion img {
            width: 50px;
        }

        .autocomplete-suggestion .yith_wcas_result_content .title {
            color: #004b91;
        }

        .autocomplete-suggestion {
            min-height: 60px;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="css/63p10_3.css" media="all">
    <script src="js/63p10_1.js" type="text/javascript"></script>
    <script src="js/63p10.js" type="text/javascript"></script>
    <style type="text/css">
    </style>
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>

    <style type="text/css" id="wp-custom-css">
        .sale-remain__clock div:nth-child(1) {
            display: none !important;
        }

        .product-wrapper .product-cart__text .sale-remain__clock {
            grid-template-columns: repeat(3, min-content);
        }
    </style>


</head>

<body class="product-template product-template-template-product-landing product-template-product product-template-template-product-landingproduct-php single single-product postid-31999 theme-perou non-logged-in woocommerce woocommerce-page woocommerce-js ywcas-pero store_product_show store_user_security_login">
    <?php include 'configs.php'; ?>
    <?php if (!empty($config)) include "./meldonium/include-body-start.php" ?>


    <div id="alerts-container">
    </div>
    <div id="promo-bar">
        <div class="container-fluid">
            <div class="textwidget"></div>
        </div>
    </div>
    <div class="container-fluid" id="container">
        <style>
            #container {
                overflow-y: hidden;
            }
        </style>
        <div class="product-wrapper" style="width: 100%;">
            <section class="product-cart">
                <div class="container product">
                    <h3>
                        САДОВА ЛАВКА-СТІЛЕЦЬ<br>для роботи в саду та городі </h3>
                    <h1>Знижка -<?php echo $skidka; ?>%</h1>
                    <div class="cart-wrapper">
                        <div class="product-cart__images">
                            <div class="slider-wrapper " id="first-slider">
                                <div class="slider-wrapper__main-img">
                                    <a href="images/banner1.jpg" class="wrapper" data-fancybox="fancybox-gallery1">
                                        <img src="images/banner1.jpg" alt class="img-fluid">
                                    </a>
                                    <a href="images/banner2.jpg" class="wrapper" data-fancybox="fancybox-gallery1">
                                        <img src="images/banner2.jpg" alt class="img-fluid">
                                    </a>
                                    <a href="images/banner3.jpg" class="wrapper" data-fancybox="fancybox-gallery1">
                                        <img src="images/banner3.jpg" alt class="img-fluid">
                                    </a>
                                    <a href="images/banner4.jpg" class="wrapper" data-fancybox="fancybox-gallery1">
                                        <img src="images/banner4.jpg" alt class="img-fluid">
                                    </a>
                                </div>
                                <div class="slider-wrapper__nav">
                                    <div class="wrapper">
                                        <img src="images/banner1.jpg" alt class="img-fluid">
                                    </div>
                                    <div class="wrapper">
                                        <img src="images/banner2.jpg" alt class="img-fluid">
                                    </div>
                                    <div class="wrapper">
                                        <img src="images/banner3.jpg" alt class="img-fluid">
                                    </div>
                                    <div class="wrapper">
                                        <img src="images/banner4.jpg" alt class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="brand_info">
                                <div class="brand_thumb"></div>
                                <div class="brand_desc">Тільки офіційні товари бренду</div>
                            </div>
                        </div>
                        <div class="product-cart__text">
                            <div class="atr-wrapper">
                                <div class="atr-wrapper__item">Найкраща пропозиція</div>
                                <div class="atr-wrapper__item">Хіт продажів</div>
                                <div class="atr-wrapper__item">Фінальний розпродаж</div>
                            </div>
                            <div class="price-wrapper">
                                <div class="price-wrapper__common-price">
                                    <span>Звичайна ціна</span>
                                    <p><?php echo $old_price; ?>грн</p>
                                </div>
                                <div class="arrow">
                                    <svg width="10" height="22" viewBox="0 0 10 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.77753 10.3617L1.75979 0.371359C1.5638 0.12715 1.27873 0 0.991674 0C0.771929 0 0.550203 0.0746765 0.366093 0.228064C-0.0575609 0.581259 -0.12091 1.21701 0.225535 1.64891L7.73053 10.9995L0.223556 20.3521C-0.12289 20.782 -0.0595398 21.4177 0.364114 21.7729C0.787767 22.1241 1.41137 22.0615 1.75781 21.6296L9.77555 11.6393C10.0745 11.2659 10.0745 10.7331 9.77753 10.3617Z" fill="#1D1D1F" />
                                    </svg>
                                </div>
                                <div class="price-wrapper__new-price">
                                    <span>Ціна по акції</span>
                                    <p><?php echo $new_price; ?> грн</p>
                                </div>
                            </div>



                            <form action="thankyou.php" method="post" onsubmit="if(this.name.value==''){alert('Введите Ваше имя!');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона!');return false}return true;">
                                <div class="input-wrapper">
                                    <input type="text" name="name" placeholder="Введіть Ваше ім'я" required>
                                    <span>Введіть Ваше ім'я</span>
                                </div>
                                <div class="input-wrapper">
                                    <input type="text" name="phone" placeholder="Введіть ваш телефон" required>
                                    <span>Введіть ваш телефон</span>
                                </div>
                                <button class="product-cart submit" type="submit">Оформити замовлення</button>
                                <span class="info"><i data-toggle="tooltip" data-placement="top" title="Tooltip on top"><svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="Overrides/Cell/Detail">
                                                <path id="Detail Disclosure" fill-rule="evenodd" clip-rule="evenodd" d="M13 6.5C13 10.0899 10.0899 13 6.5 13C2.91015 13 0 10.0899 0 6.5C0 2.91015 2.91015 0 6.5 0C10.0899 0 13 2.91015 13 6.5ZM12.4091 6.5C12.4091 9.7635 9.7635 12.4091 6.5 12.4091C3.2365 12.4091 0.590909 9.7635 0.590909 6.5C0.590909 3.2365 3.2365 0.590909 6.5 0.590909C9.7635 0.590909 12.4091 3.2365 12.4091 6.5ZM5.31818 5.02273V5.31818H5.90909V9.75H5.31818V10.0455H7.68182V9.75H7.09091V5.02273H5.31818ZM7.09091 3.39773C7.09091 3.80567 6.76021 4.13636 6.35227 4.13636C5.94433 4.13636 5.61364 3.80567 5.61364 3.39773C5.61364 2.98979 5.94433 2.65909 6.35227 2.65909C6.76021 2.65909 7.09091 2.98979 7.09091 3.39773Z" fill="#007AFF" />
                                            </g>
                                        </svg>
                                    </i>Залишилося 4 шт. по акції</span>
                            </form>


                            <div class="sale-remain">
                                <div class="sale-remain__title">До кінця акції залишилося:</div>
                                <div class="sale-remain__clock">
                                    <div class="sale-remain__clock__item dots">
                                        <p></p><span>днів</span>
                                    </div>
                                    <div class="sale-remain__clock__item dots">
                                        <p></p><span>годин</span>
                                    </div>
                                    <div class="sale-remain__clock__item dots">
                                        <p></p><span>хвилин</span>
                                    </div>
                                    <div class="sale-remain__clock__item">
                                        <p></p><span>секунд</span>
                                    </div>
                                </div>
                                <script>
                                    jQuery(document).ready(function() {
                                        remainClock('2031-05-30T00:00:00');
                                    });
                                </script>
                                <div class="sale-remain__title sale-remain__sale-time">
                                    Знижка діє <!-- з <script type="text/javascript">
    d = new Date(); p = new Date(d.getTime() -  5*86400000);
    monthA =  '01,02,03,04,05,06,07,08,09,10,11,12'.split(',');
    var w = p.getDate();
    document.write(p.getDate() + '.' + monthA[p.getMonth()] +'.'+ p.getFullYear());
</script> по <script type="text/javascript">
    d = new Date(); p = new Date(d.getTime() +  1*86400000);
    monthA =  '01,02,03,04,05,06,07,08,09,10,11,12'.split(',');
    var w = p.getDate();
    document.write(p.getDate() + '.' + monthA[p.getMonth()] +'.'+ p.getFullYear());
</script> --> на весь товар інтернет-магазину на всій території України, крім зон, що не контролюються владою. </div>


                                <!-- <div class="sale-remain__gift">
<span><i><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path id="Shape" fill-rule="evenodd" clip-rule="evenodd" d="M17.7648 20V9.26209H19.1667V4.3257H10.1695L13.8143 0.330789L13.432 0L9.60882 4.19847L6.168 0L5.7602 0.330789L9.04809 4.3257H0V9.26209H1.40182V20H17.7648ZM1.91157 9.26209H9.32846V19.4911H1.91157V9.26209ZM9.83821 19.4911H17.2551V9.26209H9.83821V19.4911ZM18.6569 8.75318H9.83821V4.83461H18.6569V8.75318ZM9.32846 4.83461H0.509752V8.75318H9.32846V4.83461Z" fill="#1D1D1F"/>
</svg></i><span>Підвіска</span> у подарунок </span> 
</div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="description">
                <div class="container product">
                    <h2>САДОВА ЛАВКА-СТІЛЕЦЬ<br>забудьте про болі в спині і колінах <br>при роботі в саду</h2>
                    <div class="description__wrapper">
                        <div class="slider-wrapper" id="second-slider">
                            <div class="slider-wrapper__main-img">
                                <a href="images/produkt1.jpg" data-fancybox="gallery3">
                                    <img width="1600" height="1600" src="images/produkt1.jpg" class="img-responsive wp-post-image" title srcset="images/produkt1.jpg" data-image-full="images/produkt1.jpg" itemprop="image" data-index="0"></a>

                                <a href="images/produkt2.jpg" data-fancybox="gallery3">
                                    <img width="1600" height="1600" src="images/produkt2.jpg" class="img-responsive wp-post-image" title srcset="images/produkt2.jpg" data-image-full="images/produkt2.jpg" itemprop="image" data-index="0"></a>

                                <a href="images/produkt3.jpg" data-fancybox="gallery3">
                                    <img width="1600" height="1600" src="images/produkt3.jpg" class="img-responsive wp-post-image" title srcset="images/produkt3.jpg" data-image-full="images/produkt3.jpg" itemprop="image" data-index="0"></a>


                                <!-- <a href="https://perou.store/wp-content/uploads/2022/11/akkumulyatornyj-kempingovyj-fonar-na-solnechnoj-bataree-010.jpg" data-fancybox="gallery3"><img width="1600" height="1600" src="images/akkumulyatornyj-kempingovyj-fonar-na-solnechnoj-bataree-010.jpg" class="img-responsive wp-post-image" title srcset="images/akkumulyatornyj-kempingovyj-fonar-na-solnechnoj-bataree-010.jpg" data-image-full="https://perou.store/wp-content/uploads/2022/11/akkumulyatornyj-kempingovyj-fonar-na-solnechnoj-bataree-010.jpg" itemprop="image" data-index="1"></a>
<a href="https://perou.store/wp-content/uploads/2022/11/akkumulyatornyj-kempingovyj-fonar-na-solnechnoj-bataree-011.jpg" data-fancybox="gallery3"><img width="1600" height="1600" src="images/akkumulyatornyj-kempingovyj-fonar-na-solnechnoj-bataree-011.jpg" class="img-responsive wp-post-image" title srcset="images/akkumulyatornyj-kempingovyj-fonar-na-solnechnoj-bataree-011.jpg" data-image-full="https://perou.store/wp-content/uploads/2022/11/akkumulyatornyj-kempingovyj-fonar-na-solnechnoj-bataree-011.jpg" itemprop="image" data-index="2"></a>
<a href="https://perou.store/wp-content/uploads/2022/11/akkumulyatornyj-kempingovyj-fonar-na-solnechnoj-bataree-012.jpg" data-fancybox="gallery3"><img width="1600" height="1600" src="images/akkumulyatornyj-kempingovyj-fonar-na-solnechnoj-bataree-012.jpg" class="img-responsive wp-post-image" title srcset="images/akkumulyatornyj-kempingovyj-fonar-na-solnechnoj-bataree-012.jpg" data-image-full="https://perou.store/wp-content/uploads/2022/11/akkumulyatornyj-kempingovyj-fonar-na-solnechnoj-bataree-012.jpg" itemprop="image" data-index="3"></a> -->
                            </div>
                            <div class="slider-wrapper__nav">
                                <div class="wrapper">
                                    <img src="images/produkt1.jpg" alt class="img-fluid"><br>

                                </div>
                                <div class="wrapper">

                                    <img src="images/produkt2.jpg" alt class="img-fluid">
                                </div>
                                <div class="wrapper">

                                    <img src="images/produkt3.jpg" alt class="img-fluid">
                                </div>
                                <!--
<div class="wrapper">
<img src="images/akkumulyatornyj-kempingovyj-fonar-na-solnechnoj-bataree-010.jpg" alt class="img-fluid">
</div>
<div class="wrapper">
<img src="images/akkumulyatornyj-kempingovyj-fonar-na-solnechnoj-bataree-011.jpg" alt class="img-fluid">
</div>
<div class="wrapper">
<img src="images/akkumulyatornyj-kempingovyj-fonar-na-solnechnoj-bataree-012.jpg" alt class="img-fluid">
</div> -->
                            </div>
                        </div>
                        <div class="description__wrapper__text">
                            <p class="title">Садовий стілець - ідеальний пристрій для будь-якої роботи<br>яку ви робите в своєму саду та городі!<br></p>
                            <p>Більше не буде болю при стоянні на колінах на твердій землі і болі в спині при вставанні. </p>
                            <p>2 бічні ручки допоможуть безболісно встати після закінчення роботи в саду і змусять забути про болі в спині під час роботи в саду.<br>
                            <p></p>
                            <p> Міцна сталева конструкція дозволяє дістатися до найвищих полиць в будинку, ви можете легко замінити лампочку або відрізати верхні гілки більш високих дерев або кущів.</p>
                            <p>Значно зменшує навантаження на спину та суглоби </p>
                            <p>
                                Лавку можна використовувати як підставку для колін. Надійність і комфорт надають широке сидіння, оздоблене пластиком з двох сторін, яке легко миється, а стійкість забезпечує каркас зі сталевої труби.</p>
                            <p>
                                У складеному вигляді стілець займає мало місця, тому його можна брати з собою куди завгодно.</p>
                            <p>
                            </p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="advantages">
                <div class="container product">
                    <h2>Відеоогляд</h2>
                    <iframe width="100%" src="images/video.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <h2>ОСОБЛИВОСТІ І ХАРАКТЕРИСТИКИ <br>САДОВОЇ ЛАВКИ
                        <div class="advantages__container">

                            <div class="advantages__container__item">
                                <div class="advantages__container__item__title">
                                    <b>Комфортна і зручна оббивка<br>
                                        Швидке і легке складання<br>
                                        Міцна сталева конструкція<br>Компактна і мобільна <br>
                                </div>
                                <a href="images/advantage1.jpg" data-fancybox="single-0" data-single="1" class="advantages__container__item__img">
                                    <img src="images/advantage1.jpg" alt class="img-fluid">
                                </a>
                            </div>

                            <div class="advantages__container__item">
                                <div class="advantages__container__item__title">
                                    <b> Висота: 28 мм + 7мм ніжка </b><br> Довжина: 448 мм

                                    Товщина: 5 мм <br>Матеріал:поліпропілен<br>

                                    Висота:28 см<br> Країна виробництва: Німеччина
                                    <br>


                                    Вага: 1.29 кг


                                </div>
                                <a href="images/advantage2.jpg" data-fancybox="single-1" data-single="1" class="advantages__container__item__img">
                                    <img src="images/advantage2.jpg" alt class="img-fluid">
                                </a>
                            </div>

                            <div class="advantages__container__item">
                                <div class="advantages__container__item__title">
                                    <b>Витримує 90 кг нагрузки.<br> Лавка міцно тримається, не зариваючись в землю поки ви працюєте в саду чи городі.
                                    </b><br> Має 2 робочі положення, які забеспечать комфортну роботу.
                                    </b><br></b><br><br>
                                </div>
                                <a href="images/advantage3.jpg" data-fancybox="single-2" data-single="1" class="advantages__container__item__img">
                                    <img src="images/advantage3.jpg" alt class="img-fluid">
                                </a>
                            </div>



                        </div>
                </div>
            </section>
            <section class="feedback">
                <div class="container product">
                    <div class="feedback__wrapper">
                        <div class="left-bar">
                            <h2>Що говорять клієнти?</h2>
                            <div class="left-bar__instagram-feed">
                                <h3>Відгуки з Instagram</h3>
                                <p class="desc"> Реальні відгуки від наших клієнтів із соціальних мереж</p>
                                <div class="item">
                                    <p class="title">Відгук від: @svetlanagolub </p>
                                    <p class="text">
                                        Дуже зручно працювати в саду, спина не болить як раніше, 2 положення для сидіння і для колін. Садила квіти і прийшла додому вся чиста з саду, бо ставила коліна на цю лавку, тож можу рекомендувати!!!</p>
                                </div>
                                <div class="item">
                                    <p class="title">Відгук від: @ksusha_shabanova_78 </p>
                                    <p class="text"> Зручна, компактна, складається легко і займає мало місця, можна носити з собою на город, бо в мене він не біля дому, а треба ще пройтись, так шо мені підходить ця скамья, легка і переносна. </p>
                                </div>
                                <div class="item">
                                    <p class="title">Відгук від: @katya_slavik </p>
                                    <p class="text"> Купила батькам на дачу, бо вони постійно не вилазять з саду) тож тепер хоч буду спокійна за їх коліна та спину) дякую вашому магазину, реально потрібна річ для тих хто працює з землею!)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="right-bar">
                            <div class="scroll">
                                <span class="prev" id="third-slider-prev"><img src="fonts/Path.svg" alt></span>
                                <i>Scroll</i>
                                <span class="next" id="third-slider-next"><img src="fonts/Path.svg" alt></span>
                            </div>
                            <div class="slider">
                                <div class="wrapper" id="third-slider" style="background-image: url(&#x27;images/iphone.png&#x27;)">
                                </div>
                                <div class="item">
                                    <img src="images/insta.jpg" alt>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </section>
            <section class="shiping">
                <div class="container product">
                    <h2>Доставка та оплата</h2>
                    <div class="shiping__wrapper">
                        <div class="shiping__wrapper__item">
                            <div class="shiping__wrapper__item__img-wrapper">
                                <img src="fonts/box.svg" alt>
                            </div>
                            <div class="shiping__wrapper__item__title">Доставка поштою</div>
                            <div class="shiping__wrapper__item__desc">Відправлення у день замовлення. Доставка поштою впродовж 1-2 робочих днів</div>
                        </div>
                        <div class="shiping__wrapper__item">
                            <div class="shiping__wrapper__item__img-wrapper">
                                <img src="fonts/car.svg" alt>
                            </div>
                            <div class="shiping__wrapper__item__title">Ніяких передплат</div>
                            <div class="shiping__wrapper__item__desc">Ви сплачуєте товар лише при отриманні на руки</div>
                        </div>
                        <div class="shiping__wrapper__item">
                            <div class="shiping__wrapper__item__img-wrapper">
                                <img src="fonts/guarantee.svg" alt>
                            </div>
                            <div class="shiping__wrapper__item__title">Гарантія якості</div>
                            <div class="shiping__wrapper__item__desc">Усі товари пройшли перевірку і повністю сертифіковані</div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="product-cart">
                <div class="container product">
                    <h3>
                        САДОВА ЛАВКА-СТІЛЕЦЬ<br>для роботи в саду та городі </h3>
                    <h1>Знижка -<?php echo $skidka; ?>%</h1>
                    <div class="cart-wrapper">
                        <div class="product-cart__images">
                            <div class="slider-wrapper " id="first-slider">
                                <div class="slider-wrapper__main-img">
                                    <a href="images/banner1.jpg" class="wrapper" data-fancybox="fancybox-gallery1">
                                        <img src="images/banner1.jpg" alt class="img-fluid">
                                    </a>
                                    <a href="images/banner2.jpg" class="wrapper" data-fancybox="fancybox-gallery1">
                                        <img src="images/banner2.jpg" alt class="img-fluid">
                                    </a>
                                    <a href="images/banner3.jpg" class="wrapper" data-fancybox="fancybox-gallery1">
                                        <img src="images/banner3.jpg" alt class="img-fluid">
                                    </a>
                                    <a href="images/banner4.jpg" class="wrapper" data-fancybox="fancybox-gallery1">
                                        <img src="images/banner4.jpg" alt class="img-fluid">
                                    </a>
                                </div>
                                <div class="slider-wrapper__nav">
                                    <div class="wrapper">
                                        <img src="images/banner1.jpg" alt class="img-fluid">
                                    </div>
                                    <div class="wrapper">
                                        <img src="images/banner2.jpg" alt class="img-fluid">
                                    </div>
                                    <div class="wrapper">
                                        <img src="images/banner3.jpg" alt class="img-fluid">
                                    </div>
                                    <div class="wrapper">
                                        <img src="images/banner4.jpg" alt class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="brand_info">
                                <div class="brand_thumb"></div>
                                <div class="brand_desc">Тільки офіційні товари бренду</div>
                            </div>
                        </div>
                        <div class="product-cart__text">
                            <div class="atr-wrapper">
                                <div class="atr-wrapper__item">Найкраща пропозиція</div>
                                <div class="atr-wrapper__item">Хіт продажів</div>
                                <div class="atr-wrapper__item">Фінальний розпродаж</div>
                            </div>
                            <div class="price-wrapper">
                                <div class="price-wrapper__common-price">
                                    <span>Звичайна ціна</span>
                                    <p><?php echo $old_price; ?>грн</p>
                                </div>
                                <div class="arrow">
                                    <svg width="10" height="22" viewBox="0 0 10 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.77753 10.3617L1.75979 0.371359C1.5638 0.12715 1.27873 0 0.991674 0C0.771929 0 0.550203 0.0746765 0.366093 0.228064C-0.0575609 0.581259 -0.12091 1.21701 0.225535 1.64891L7.73053 10.9995L0.223556 20.3521C-0.12289 20.782 -0.0595398 21.4177 0.364114 21.7729C0.787767 22.1241 1.41137 22.0615 1.75781 21.6296L9.77555 11.6393C10.0745 11.2659 10.0745 10.7331 9.77753 10.3617Z" fill="#1D1D1F" />
                                    </svg>
                                </div>
                                <div class="price-wrapper__new-price">
                                    <span>Ціна по акції</span>
                                    <p><?php echo $new_price; ?> грн</p>
                                </div>
                            </div>



                            <form action="thankyou.php" method="post" onsubmit="if(this.name.value==''){alert('Введите Ваше имя!');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона!');return false}return true;">
                                <div class="input-wrapper">
                                    <input type="text" name="name" placeholder="Введіть Ваше ім'я" required>
                                    <span>Введіть Ваше ім'я</span>
                                </div>
                                <div class="input-wrapper">
                                    <input type="text" name="phone" placeholder="Введіть ваш телефон" required>
                                    <span>Введіть ваш телефон</span>
                                </div>
                                <button class="product-cart submit" type="submit">Оформити замовлення</button>
                                <span class="info"><i data-toggle="tooltip" data-placement="top" title="Tooltip on top"><svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="Overrides/Cell/Detail">
                                                <path id="Detail Disclosure" fill-rule="evenodd" clip-rule="evenodd" d="M13 6.5C13 10.0899 10.0899 13 6.5 13C2.91015 13 0 10.0899 0 6.5C0 2.91015 2.91015 0 6.5 0C10.0899 0 13 2.91015 13 6.5ZM12.4091 6.5C12.4091 9.7635 9.7635 12.4091 6.5 12.4091C3.2365 12.4091 0.590909 9.7635 0.590909 6.5C0.590909 3.2365 3.2365 0.590909 6.5 0.590909C9.7635 0.590909 12.4091 3.2365 12.4091 6.5ZM5.31818 5.02273V5.31818H5.90909V9.75H5.31818V10.0455H7.68182V9.75H7.09091V5.02273H5.31818ZM7.09091 3.39773C7.09091 3.80567 6.76021 4.13636 6.35227 4.13636C5.94433 4.13636 5.61364 3.80567 5.61364 3.39773C5.61364 2.98979 5.94433 2.65909 6.35227 2.65909C6.76021 2.65909 7.09091 2.98979 7.09091 3.39773Z" fill="#007AFF" />
                                            </g>
                                        </svg>
                                    </i>Залишилося 4 шт. по акції</span>
                            </form>


                            <div class="sale-remain">
                                <div class="sale-remain__title">До кінця акції залишилося:</div>
                                <div class="sale-remain__clock">
                                    <div class="sale-remain__clock__item dots">
                                        <p></p><span>днів</span>
                                    </div>
                                    <div class="sale-remain__clock__item dots">
                                        <p></p><span>годин</span>
                                    </div>
                                    <div class="sale-remain__clock__item dots">
                                        <p></p><span>хвилин</span>
                                    </div>
                                    <div class="sale-remain__clock__item">
                                        <p></p><span>секунд</span>
                                    </div>
                                </div>
                                <script>
                                    jQuery(document).ready(function() {
                                        remainClock('2031-05-30T00:00:00');
                                    });
                                </script>
                                <div class="sale-remain__title sale-remain__sale-time">
                                    Знижка діє <!-- з <script type="text/javascript">
    d = new Date(); p = new Date(d.getTime() -  5*86400000);
    monthA =  '01,02,03,04,05,06,07,08,09,10,11,12'.split(',');
    var w = p.getDate();
    document.write(p.getDate() + '.' + monthA[p.getMonth()] +'.'+ p.getFullYear());
</script> по <script type="text/javascript">
    d = new Date(); p = new Date(d.getTime() +  1*86400000);
    monthA =  '01,02,03,04,05,06,07,08,09,10,11,12'.split(',');
    var w = p.getDate();
    document.write(p.getDate() + '.' + monthA[p.getMonth()] +'.'+ p.getFullYear());
</script> --> на весь товар інтернет-магазину на всій території України, крім зон, що не контролюються владою. </div>


                                <!-- <div class="sale-remain__gift">
<span><i><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path id="Shape" fill-rule="evenodd" clip-rule="evenodd" d="M17.7648 20V9.26209H19.1667V4.3257H10.1695L13.8143 0.330789L13.432 0L9.60882 4.19847L6.168 0L5.7602 0.330789L9.04809 4.3257H0V9.26209H1.40182V20H17.7648ZM1.91157 9.26209H9.32846V19.4911H1.91157V9.26209ZM9.83821 19.4911H17.2551V9.26209H9.83821V19.4911ZM18.6569 8.75318H9.83821V4.83461H18.6569V8.75318ZM9.32846 4.83461H0.509752V8.75318H9.32846V4.83461Z" fill="#1D1D1F"/>
</svg></i><span>Підвіска</span> у подарунок </span> 
</div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <footer id="site-footer" class="hidden-app">
        <div class="container-fluid">
            <div class="copyright">
                <center>
                    <div class="col-md-6" style="text-align: center;">

                        <p>ТОВ "Шопінг 3"<br>
                            ЄДРПОУ 44858473<br>original.text2016@gmail.com<br>

                        </p>

                    </div>
                    <div class="col-md-6" style="text-align: center;">

                        <p style="padding: 0; margin: 0;"><a href="politics.html" target="_blank">Політика конфіденційності</a></p>
                        <p style="padding: 0; margin: 0;"><a href="oferta.html" target="_blank">Договір оферти</a></p>
                        <p style="padding: 0; margin: 0;"><a href="conditions.html" target="_blank">Умови гарантії та повернення</a></p>
                        <p style="padding: 0; margin: 0;"><a href="usersagitment.html" target="_blank">Угода користувача</a></p>

                    </div>


                </center>
            </div>

        </div>
    </footer>

    <style type="text/css">
        .fb_iframe_widget>span {
            display: table !important;
        }

        .woo-social-buttons {
            margin: 10px 0;
        }

        .woo-social-buttons img {
            vertical-align: top;
        }

        .woo-social-buttons span.custom {
            float: left;
            margin: 0 5px 5px 0;
        }

        .woo-social-buttons span.nocount,
        .woo-social-buttons span.hcount {
            float: left;
            margin: 0 5px 5px 0;
            height: 21px;
        }

        .woo-social-buttons span.vcount {
            float: left;
            margin: 0 5px 5px 0;
            height: 65px;
        }

        .woo-social-buttons span.yithqv {
            float: left;
            margin: 0 5px 5px 0;
            height: 36px;
        }

        .woo-social-buttons iframe {
            margin: 0px !important;
            padding: 0px !important;
            vertical-align: baseline;
        }

        .woo-social-buttons .smsb_pinterest.vcount {
            position: relative;
            top: 30px
        }

        .woo-social-buttons .smsb_tumblr iframe {
            height: 20px !important;
            width: 50px !important;
        }

        .woo-social-buttons .smsb_tumblr.hcount iframe {
            height: 20px !important;
            width: 72px !important;
        }

        .woo-social-buttons .smsb_tumblr.vcount iframe {
            height: 40px !important;
            width: 55px !important;
        }

        .woo-social-buttons .smsb_stumbleupon.vcount iframe {
            height: 60px !important;
            width: 50px !important;
        }

        .woo-social-buttons .smsb_vkontakte table tr>td {
            padding: 0px;
            line-height: auto;
        }

        .woo-social-buttons .smsb_vkontakte a {
            height: auto !important;
        }
    </style>
    <script type="text/html" id="tmpl-media-frame">
        <div class="media-frame-title" id="media-frame-title"></div>
        <h2 class="media-frame-menu-heading">Дії</h2>
        <button type="button" class="button button-link media-frame-menu-toggle" aria-expanded="false">
            Меню <span class="dashicons dashicons-arrow-down" aria-hidden="true"></span>
        </button>
        <div class="media-frame-menu"></div>
        <div class="media-frame-tab-panel">
            <div class="media-frame-router"></div>
            <div class="media-frame-content"></div>
        </div>
        <h2 class="media-frame-actions-heading screen-reader-text">
            Дії для вибраних медіафайлів </h2>
        <div class="media-frame-toolbar"></div>
        <div class="media-frame-uploader"></div>
    </script>
    <script type="text/html" id="tmpl-media-modal">
        <div tabindex="0" class="media-modal wp-core-ui" role="dialog" aria-labelledby="media-frame-title">
            <# if ( data.hasCloseButton ) { #>
                <button type="button" class="media-modal-close"><span class="media-modal-icon"><span class="screen-reader-text">Закрити вікно</span></span></button>
                <# } #>
                    <div class="media-modal-content" role="document"></div>
        </div>
        <div class="media-modal-backdrop"></div>
    </script>
    <script type="text/html" id="tmpl-uploader-window">
        <div class="uploader-window-content">
            <div class="uploader-editor-title">Перетягніть файли, щоб завантажити</div>
        </div>
    </script>
    <script type="text/html" id="tmpl-uploader-editor">
        <div class="uploader-editor-content">
            <div class="uploader-editor-title">Перетягніть файли, щоб завантажити</div>
        </div>
    </script>
    <script type="text/html" id="tmpl-uploader-inline">
        <# var messageClass=data.message ? 'has-upload-message' : 'no-upload-message' ; #>
            <# if ( data.canClose ) { #>
                <button class="close dashicons dashicons-no"><span class="screen-reader-text">Закрити вікно завантажувача</span></button>
                <# } #>
                    <div class="uploader-inline-content {{ messageClass }}">
                        <# if ( data.message ) { #>
                            <h2 class="upload-message">{{ data.message }}</h2>
                            <# } #>
                                <div class="upload-ui">
                                    <h2 class="upload-instructions drop-instructions">Перетягніть файли, щоб завантажити</h2>
                                    <p class="upload-instructions drop-instructions">або</p>
                                    <button type="button" class="browser button button-hero" aria-labelledby="post-upload-info">Обрати файли</button>
                                </div>
                                <div class="upload-inline-status"></div>
                                <div class="post-upload-ui" id="post-upload-info">
                                    <p class="max-upload-size">
                                        Максимальний розмір завантажуваних файлів: 512 МБ. </p>
                                    <# if ( data.suggestedWidth && data.suggestedHeight ) { #>
                                        <p class="suggested-dimensions">
                                            Пропонований розмір зображення: {{data.suggestedWidth}} на {{data.suggestedHeight}} пікселів. </p>
                                        <# } #>
                                </div>
                    </div>
    </script>
    <script type="text/html" id="tmpl-media-library-view-switcher">
        <a href="https://perou.store/wp-admin/upload.php?mode=list" class="view-list">
            <span class="screen-reader-text">У вигляді списку</span>
        </a>
        <a href="https://perou.store/wp-admin/upload.php?mode=grid" class="view-grid current" aria-current="page">
            <span class="screen-reader-text">У вигляді сітки</span>
        </a>
    </script>
    <script type="text/html" id="tmpl-uploader-status">
        <h2>Завантаження</h2>
        <div class="media-progress-bar">
            <div></div>
        </div>
        <div class="upload-details">
            <span class="upload-count">
                <span class="upload-index"></span> / <span class="upload-total"></span>
            </span>
            <span class="upload-detail-separator">–</span>
            <span class="upload-filename"></span>
        </div>
        <div class="upload-errors"></div>
        <button type="button" class="button upload-dismiss-errors">Dismiss errors</button>
    </script>
    <script type="text/html" id="tmpl-uploader-status-error">
        <span class="upload-error-filename">{{{ data.filename }}}</span>
        <span class="upload-error-message">{{ data.message }}</span>
    </script>
    <script type="text/html" id="tmpl-edit-attachment-frame">
        <div class="edit-media-header">
            <button class="left dashicons" <# if ( ! data.hasPrevious ) { #> disabled<# } #>><span class="screen-reader-text">Редагувати попередній медіа пункт </span></button>
            <button class="right dashicons" <# if ( ! data.hasNext ) { #> disabled<# } #>><span class="screen-reader-text">Редагувати наступний медіа пункт</span></button>
            <button type="button" class="media-modal-close"><span class="media-modal-icon"><span class="screen-reader-text">Закрити вікно</span></span></button>
        </div>
        <div class="media-frame-title"></div>
        <div class="media-frame-content"></div>
    </script>
    <script type="text/html" id="tmpl-attachment-details-two-column">
        <div class="attachment-media-view {{ data.orientation }}">
            <h2 class="screen-reader-text">Попередній перегляд додатку</h2>
            <div class="thumbnail thumbnail-{{ data.type }}">
                <# if ( data.uploading ) { #>
                    <div class="media-progress-bar">
                        <div></div>
                    </div>
                    <# } else if ( data.sizes && data.sizes.large ) { #>
                        <img class="details-image" src="{{ data.sizes.large.url }}" draggable="false" alt="" />
                        <# } else if ( data.sizes && data.sizes.full ) { #>
                            <img class="details-image" src="{{ data.sizes.full.url }}" draggable="false" alt="" />
                            <# } else if ( -1===jQuery.inArray( data.type, [ 'audio' , 'video' ] ) ) { #>
                                <img class="details-image icon" src="{{ data.icon }}" draggable="false" alt="" />
                                <# } #>
                                    <# if ( 'audio'===data.type ) { #>
                                        <div class="wp-media-wrapper wp-audio">
                                            <audio style="visibility: hidden" controls class="wp-audio-shortcode" width="100%" preload="none">
                                                <source type="{{ data.mime }}" src="{{ data.url }}" />
                                            </audio>
                                        </div>
                                        <# } else if ( 'video'===data.type ) { var w_rule='' ; if ( data.width ) { w_rule='width: ' + data.width + 'px;' ; } else if ( wp.media.view.settings.contentWidth ) { w_rule='width: ' + wp.media.view.settings.contentWidth + 'px;' ; } #>
                                            <div class="wp-media-wrapper wp-video">
                                                <video controls="controls" class="wp-video-shortcode" preload="metadata" <# if ( data.width ) { #>width="{{ data.width }}"<# } #>
                                                        <# if ( data.height ) { #>height="{{ data.height }}"<# } #>
                                                                <# if ( data.image && data.image.src !==data.icon ) { #>poster="{{ data.image.src }}"<# } #>>
                                                                        <source type="{{ data.mime }}" src="{{ data.url }}" />
                                                </video>
                                            </div>
                                            <# } #>
                                                <div class="attachment-actions">
                                                    <# if ( 'image'===data.type && ! data.uploading && data.sizes && data.can.save ) { #>
                                                        <button type="button" class="button edit-attachment">Редагувати зображення</button>
                                                        <# } else if ( 'pdf'===data.subtype && data.sizes ) { #>
                                                            <p>Перегляд документа</p>
                                                            <# } #>
                                                </div>
            </div>
        </div>
        <div class="attachment-info">
            <span class="settings-save-status" role="status">
                <span class="spinner"></span>
                <span class="saved">Збережено.</span>
            </span>
            <div class="details">
                <h2 class="screen-reader-text">Подробиці</h2>
                <div class="uploaded"><strong>Завантажено:</strong> {{ data.dateFormatted }}</div>
                <div class="uploaded-by">
                    <strong>Завантажено:</strong>
                    <# if ( data.authorLink ) { #>
                        <a href="{{ data.authorLink }}">{{ data.authorName }}</a>
                        <# } else { #>
                            {{ data.authorName }}
                            <# } #>
                </div>
                <# if ( data.uploadedToTitle ) { #>
                    <div class="uploaded-to">
                        <strong>Завантажено в:</strong>
                        <# if ( data.uploadedToLink ) { #>
                            <a href="{{ data.uploadedToLink }}">{{ data.uploadedToTitle }}</a>
                            <# } else { #>
                                {{ data.uploadedToTitle }}
                                <# } #>
                    </div>
                    <# } #>
                        <div class="filename"><strong>Назва файлу:</strong> {{ data.filename }}</div>
                        <div class="file-type"><strong>Тип файлу:</strong> {{ data.mime }}</div>
                        <div class="file-size"><strong>Розмір файла:</strong> {{ data.filesizeHumanReadable }}</div>
                        <# if ( 'image'===data.type && ! data.uploading ) { #>
                            <# if ( data.width && data.height ) { #>
                                <div class="dimensions"><strong>Розміри:</strong>
                                    {{ data.width }} на {{ data.height }} пікселів
                                </div>
                                <# } #>
                                    <# if ( data.originalImageURL && data.originalImageName ) { #>
                                        Початкове зображення: <a href="{{ data.originalImageURL }}">{{data.originalImageName}}</a>
                                        <# } #>
                                            <# } #>
                                                <# if ( data.fileLength && data.fileLengthHumanReadable ) { #>
                                                    <div class="file-length"><strong>Довжина:</strong>
                                                        <span aria-hidden="true">{{ data.fileLength }}</span>
                                                        <span class="screen-reader-text">{{ data.fileLengthHumanReadable }}</span>
                                                    </div>
                                                    <# } #>
                                                        <# if ( 'audio'===data.type && data.meta.bitrate ) { #>
                                                            <div class="bitrate">
                                                                <strong>Потік:</strong> {{ Math.round( data.meta.bitrate / 1000 ) }}kb/s
                                                                <# if ( data.meta.bitrate_mode ) { #>
                                                                    {{ ' ' + data.meta.bitrate_mode.toUpperCase() }}
                                                                    <# } #>
                                                            </div>
                                                            <# } #>
                                                                <# if ( data.mediaStates ) { #>
                                                                    <div class="media-states"><strong>Використовується як:</strong> {{ data.mediaStates }}</div>
                                                                    <# } #>
                                                                        <div class="compat-meta">
                                                                            <# if ( data.compat && data.compat.meta ) { #>
                                                                                {{{ data.compat.meta }}}
                                                                                <# } #>
                                                                        </div>
            </div>
            <div class="settings">
                <# var maybeReadOnly=data.can.save || data.allowLocalEdits ? '' : 'readonly' ; #>
                    <# if ( 'image'===data.type ) { #>
                        <span class="setting has-description" data-setting="alt">
                            <label for="attachment-details-two-column-alt-text" class="name">Альтернативний текст</label>
                            <input type="text" id="attachment-details-two-column-alt-text" value="{{ data.alt }}" aria-describedby="alt-text-description" {{ maybeReadOnly }} />
                        </span>
                        <p class="description" id="alt-text-description"><a href="https://www.w3.org/WAI/tutorials/images/decision-tree" target="_blank" rel="noopener">Learn how to describe the purpose of the image<span class="screen-reader-text"> (відкривається у новій вкладці)</span></a>. Leave empty if the image is purely decorative.</p>
                        <# } #>
                            <span class="setting" data-setting="title">
                                <label for="attachment-details-two-column-title" class="name">Заголовок</label>
                                <input type="text" id="attachment-details-two-column-title" value="{{ data.title }}" {{ maybeReadOnly }} />
                            </span>
                            <# if ( 'audio'===data.type ) { #>
                                <span class="setting" data-setting="artist">
                                    <label for="attachment-details-two-column-artist" class="name">Виконавець</label>
                                    <input type="text" id="attachment-details-two-column-artist" value="{{ data.artist || data.meta.artist || '' }}" />
                                </span>
                                <span class="setting" data-setting="album">
                                    <label for="attachment-details-two-column-album" class="name">Альбом</label>
                                    <input type="text" id="attachment-details-two-column-album" value="{{ data.album || data.meta.album || '' }}" />
                                </span>
                                <# } #>
                                    <span class="setting" data-setting="caption">
                                        <label for="attachment-details-two-column-caption" class="name">Підпис</label>
                                        <textarea id="attachment-details-two-column-caption" {{ maybeReadOnly }}>{{ data.caption }}</textarea>
                                    </span>
                                    <span class="setting" data-setting="description">
                                        <label for="attachment-details-two-column-description" class="name">Опис</label>
                                        <textarea id="attachment-details-two-column-description" {{ maybeReadOnly }}>{{ data.description }}</textarea>
                                    </span>
                                    <span class="setting" data-setting="url">
                                        <label for="attachment-details-two-column-copy-link" class="name">Посилання на файл:</label>
                                        <input type="text" class="attachment-details-copy-link" id="attachment-details-two-column-copy-link" value="{{ data.url }}" readonly />
                                        <span class="copy-to-clipboard-container">
                                            <button type="button" class="button button-small copy-attachment-url" data-clipboard-target="#attachment-details-two-column-copy-link">Копіювати URL до буферу обміну</button>
                                            <span class="success hidden" aria-hidden="true">Скопійовано!</span>
                                        </span>
                                    </span>
                                    <div class="attachment-compat"></div>
            </div>
            <div class="actions">
                <# if ( data.link ) { #>
                    <a class="view-attachment" href="{{ data.link }}">Переглянути сторінку вкладення</a>
                    <# } #>
                        <# if ( data.can.save ) { #>
                            <# if ( data.link ) { #>
                                <span class="links-separator">|</span>
                                <# } #>
                                    <a href="{{ data.editLink }}">Редагувати деталі</a>
                                    <# } #>
                                        <# if ( ! data.uploading && data.can.remove ) { #>
                                            <# if ( data.link || data.can.save ) { #>
                                                <span class="links-separator">|</span>
                                                <# } #>
                                                    <button type="button" class="button-link delete-attachment">Видалити остаточно</button>
                                                    <# } #>
            </div>
        </div>
    </script>
    <script type="text/html" id="tmpl-attachment">
        <div class="attachment-preview js--select-attachment type-{{ data.type }} subtype-{{ data.subtype }} {{ data.orientation }}">
            <div class="thumbnail">
                <# if ( data.uploading ) { #>
                    <div class="media-progress-bar">
                        <div></div>
                    </div>
                    <# } else if ( 'image'===data.type && data.size && data.size.url ) { #>
                        <div class="centered">
                            <img src="{{ data.size.url }}" draggable="false" alt="" />
                        </div>
                        <# } else { #>
                            <div class="centered">
                                <# if ( data.image && data.image.src && data.image.src !==data.icon ) { #>
                                    <img src="{{ data.image.src }}" class="thumbnail" draggable="false" alt="" />
                                    <# } else if ( data.sizes && data.sizes.medium ) { #>
                                        <img src="{{ data.sizes.medium.url }}" class="thumbnail" draggable="false" alt="" />
                                        <# } else { #>
                                            <img src="{{ data.icon }}" class="icon" draggable="false" alt="" />
                                            <# } #>
                            </div>
                            <div class="filename">
                                <div>{{ data.filename }}</div>
                            </div>
                            <# } #>
            </div>
            <# if ( data.buttons.close ) { #>
                <button type="button" class="button-link attachment-close media-modal-icon"><span class="screen-reader-text">Видалити</span></button>
                <# } #>
        </div>
        <# if ( data.buttons.check ) { #>
            <button type="button" class="check" tabindex="-1"><span class="media-modal-icon"></span><span class="screen-reader-text">Зняти виділення</span></button>
            <# } #>
                <# var maybeReadOnly=data.can.save || data.allowLocalEdits ? '' : 'readonly' ; if ( data.describe ) { if ( 'image'===data.type ) { #>
                    <input type="text" value="{{ data.caption }}" class="describe" data-setting="caption" aria-label="Підпис" placeholder="Підпис..." {{ maybeReadOnly }} />
                    <# } else { #>
                        <input type="text" value="{{ data.title }}" class="describe" data-setting="title" <# if ( 'video'===data.type ) { #>
                        aria-label="Заголовок відео"
                        placeholder="Заголовок відео…"
                        <# } else if ( 'audio'===data.type ) { #>
                            aria-label="Заголовок аудіо"
                            placeholder="Заголовок аудіо…"
                            <# } else { #>
                                aria-label="Заголовок медіа"
                                placeholder="Заголовок медіа…"
                                <# } #> {{ maybeReadOnly }} />
                                    <# } } #>
    </script>
    <script type="text/html" id="tmpl-attachment-details">
        <h2>
            Деталі прикріпленого файлу <span class="settings-save-status" role="status">
                <span class="spinner"></span>
                <span class="saved">Збережено.</span>
            </span>
        </h2>
        <div class="attachment-info">
            <# if ( 'audio'===data.type ) { #>
                <div class="wp-media-wrapper wp-audio">
                    <audio style="visibility: hidden" controls class="wp-audio-shortcode" width="100%" preload="none">
                        <source type="{{ data.mime }}" src="{{ data.url }}" />
                    </audio>
                </div>
                <# } else if ( 'video'===data.type ) { var w_rule='' ; if ( data.width ) { w_rule='width: ' + data.width + 'px;' ; } else if ( wp.media.view.settings.contentWidth ) { w_rule='width: ' + wp.media.view.settings.contentWidth + 'px;' ; } #>
                    <div class="wp-media-wrapper wp-video">
                        <video controls="controls" class="wp-video-shortcode" preload="metadata" <# if ( data.width ) { #>width="{{ data.width }}"<# } #>
                                <# if ( data.height ) { #>height="{{ data.height }}"<# } #>
                                        <# if ( data.image && data.image.src !==data.icon ) { #>poster="{{ data.image.src }}"<# } #>>
                                                <source type="{{ data.mime }}" src="{{ data.url }}" />
                        </video>
                    </div>
                    <# } else { #>
                        <div class="thumbnail thumbnail-{{ data.type }}">
                            <# if ( data.uploading ) { #>
                                <div class="media-progress-bar">
                                    <div></div>
                                </div>
                                <# } else if ( 'image'===data.type && data.size && data.size.url ) { #>
                                    <img src="{{ data.size.url }}" draggable="false" alt="" />
                                    <# } else { #>
                                        <img src="{{ data.icon }}" class="icon" draggable="false" alt="" />
                                        <# } #>
                        </div>
                        <# } #>
                            <div class="details">
                                <div class="filename">{{ data.filename }}</div>
                                <div class="uploaded">{{ data.dateFormatted }}</div>
                                <div class="file-size">{{ data.filesizeHumanReadable }}</div>
                                <# if ( 'image'===data.type && ! data.uploading ) { #>
                                    <# if ( data.width && data.height ) { #>
                                        <div class="dimensions">
                                            {{ data.width }} на {{ data.height }} пікселів
                                        </div>
                                        <# } #>
                                            <# if ( data.originalImageURL && data.originalImageName ) { #>
                                                Початкове зображення: <a href="{{ data.originalImageURL }}">{{data.originalImageName}}</a>
                                                <# } #>
                                                    <# if ( data.can.save && data.sizes ) { #>
                                                        <a class="edit-attachment" href="{{ data.editLink }}&image-editor" target="_blank">Редагувати зображення</a>
                                                        <# } #>
                                                            <# } #>
                                                                <# if ( data.fileLength && data.fileLengthHumanReadable ) { #>
                                                                    <div class="file-length">Довжина: <span aria-hidden="true">{{ data.fileLength }}</span>
                                                                        <span class="screen-reader-text">{{ data.fileLengthHumanReadable }}</span>
                                                                    </div>
                                                                    <# } #>
                                                                        <# if ( data.mediaStates ) { #>
                                                                            <div class="media-states"><strong>Використовується як:</strong> {{ data.mediaStates }}</div>
                                                                            <# } #>
                                                                                <# if ( ! data.uploading && data.can.remove ) { #>
                                                                                    <button type="button" class="button-link delete-attachment">Видалити остаточно</button>
                                                                                    <# } #>
                                                                                        <div class="compat-meta">
                                                                                            <# if ( data.compat && data.compat.meta ) { #>
                                                                                                {{{ data.compat.meta }}}
                                                                                                <# } #>
                                                                                        </div>
                            </div>
        </div>
        <# var maybeReadOnly=data.can.save || data.allowLocalEdits ? '' : 'readonly' ; #>
            <# if ( 'image'===data.type ) { #>
                <span class="setting has-description" data-setting="alt">
                    <label for="attachment-details-alt-text" class="name">Альтернативний текст</label>
                    <input type="text" id="attachment-details-alt-text" value="{{ data.alt }}" aria-describedby="alt-text-description" {{ maybeReadOnly }} />
                </span>
                <p class="description" id="alt-text-description"><a href="https://www.w3.org/WAI/tutorials/images/decision-tree" target="_blank" rel="noopener">Learn how to describe the purpose of the image<span class="screen-reader-text"> (відкривається у новій вкладці)</span></a>. Leave empty if the image is purely decorative.</p>
                <# } #>
                    <span class="setting" data-setting="title">
                        <label for="attachment-details-title" class="name">Заголовок</label>
                        <input type="text" id="attachment-details-title" value="{{ data.title }}" {{ maybeReadOnly }} />
                    </span>
                    <# if ( 'audio'===data.type ) { #>
                        <span class="setting" data-setting="artist">
                            <label for="attachment-details-artist" class="name">Виконавець</label>
                            <input type="text" id="attachment-details-artist" value="{{ data.artist || data.meta.artist || '' }}" />
                        </span>
                        <span class="setting" data-setting="album">
                            <label for="attachment-details-album" class="name">Альбом</label>
                            <input type="text" id="attachment-details-album" value="{{ data.album || data.meta.album || '' }}" />
                        </span>
                        <# } #>
                            <span class="setting" data-setting="caption">
                                <label for="attachment-details-caption" class="name">Підпис</label>
                                <textarea id="attachment-details-caption" {{ maybeReadOnly }}>{{ data.caption }}</textarea>
                            </span>
                            <span class="setting" data-setting="description">
                                <label for="attachment-details-description" class="name">Опис</label>
                                <textarea id="attachment-details-description" {{ maybeReadOnly }}>{{ data.description }}</textarea>
                            </span>
                            <span class="setting" data-setting="url">
                                <label for="attachment-details-copy-link" class="name">Посилання на файл:</label>
                                <input type="text" class="attachment-details-copy-link" id="attachment-details-copy-link" value="{{ data.url }}" readonly />
                                <div class="copy-to-clipboard-container">
                                    <button type="button" class="button button-small copy-attachment-url" data-clipboard-target="#attachment-details-copy-link">Копіювати URL до буферу обміну</button>
                                    <span class="success hidden" aria-hidden="true">Скопійовано!</span>
                                </div>
                            </span>
    </script>
    <script type="text/html" id="tmpl-media-selection">
        <div class="selection-info">
            <span class="count"></span>
            <# if ( data.editable ) { #>
                <button type="button" class="button-link edit-selection">Редагувати виділене</button>
                <# } #>
                    <# if ( data.clearable ) { #>
                        <button type="button" class="button-link clear-selection">Очистити</button>
                        <# } #>
        </div>
        <div class="selection-view"></div>
    </script>
    <script type="text/html" id="tmpl-attachment-display-settings">
        <h2>Налаштування відображення прикріплень</h2>
        <# if ( 'image'===data.type ) { #>
            <span class="setting align">
                <label for="attachment-display-settings-alignment" class="name">Вирівнювання</label>
                <select id="attachment-display-settings-alignment" class="alignment" data-setting="align" <# if ( data.userSettings ) { #>
                    data-user-setting="align"
                    <# } #>>
                        <option value="left">
                            Ліворуч </option>
                        <option value="center">
                            Центр </option>
                        <option value="right">
                            Праворуч </option>
                        <option value="none" selected>
                            Немає </option>
                </select>
            </span>
            <# } #>
                <span class="setting">
                    <label for="attachment-display-settings-link-to" class="name">
                        <# if ( data.model.canEmbed ) { #>
                            Код або посилання <# } else { #>
                                Посилання до <# } #>
                    </label>
                    <select id="attachment-display-settings-link-to" class="link-to" data-setting="link" <# if ( data.userSettings && ! data.model.canEmbed ) { #>
                        data-user-setting="urlbutton"
                        <# } #>>
                            <# if ( data.model.canEmbed ) { #>
                                <option value="embed" selected>
                                    Вставити програвач медіа </option>
                                <option value="file">
                                    <# } else { #>
                                <option value="none" selected>
                                    Немає </option>
                                <option value="file">
                                    <# } #>
                                        <# if ( data.model.canEmbed ) { #>
                                            Посилання на медіафайл <# } else { #>
                                                Медіафайл <# } #>
                                </option>
                                <option value="post">
                                    <# if ( data.model.canEmbed ) { #>
                                        Посилання на сторінку файлу <# } else { #>
                                            Сторінка прикріпленого файлу <# } #>
                                </option>
                                <# if ( 'image'===data.type ) { #>
                                    <option value="custom">
                                        Користувацьке посилання </option>
                                    <# } #>
                    </select>
                </span>
                <span class="setting">
                    <label for="attachment-display-settings-link-to-custom" class="name">URL</label>
                    <input type="text" id="attachment-display-settings-link-to-custom" class="link-to-custom" data-setting="linkUrl" />
                </span>
                <# if ( 'undefined' !==typeof data.sizes ) { #>
                    <span class="setting">
                        <label for="attachment-display-settings-size" class="name">Розмір</label>
                        <select id="attachment-display-settings-size" class="size" name="size" data-setting="size" <# if ( data.userSettings ) { #>
                            data-user-setting="imgsize"
                            <# } #>>
                                <# var size=data.sizes['thumbnail']; if ( size ) { #>
                                    <option value="thumbnail">
                                        Мініатюра – {{ size.width }} × {{ size.height }}
                                    </option>
                                    <# } #>
                                        <# var size=data.sizes['medium']; if ( size ) { #>
                                            <option value="medium">
                                                Середній – {{ size.width }} × {{ size.height }}
                                            </option>
                                            <# } #>
                                                <# var size=data.sizes['large']; if ( size ) { #>
                                                    <option value="large">
                                                        Великий – {{ size.width }} × {{ size.height }}
                                                    </option>
                                                    <# } #>
                                                        <# var size=data.sizes['full']; if ( size ) { #>
                                                            <option value="full" selected='selected'>
                                                                Повний розмір – {{ size.width }} × {{ size.height }}
                                                            </option>
                                                            <# } #>
                        </select>
                    </span>
                    <# } #>
    </script>
    <script type="text/html" id="tmpl-gallery-settings">
        <h2>Налаштування галереї</h2>
        <span class="setting">
            <label for="gallery-settings-link-to" class="name">Посилання до</label>
            <select id="gallery-settings-link-to" class="link-to" data-setting="link" <# if ( data.userSettings ) { #>
                data-user-setting="urlbutton"
                <# } #>>
                    <option value="post" <# if ( ! wp.media.galleryDefaults.link || 'post'===wp.media.galleryDefaults.link ) { #>selected="selected"<# } #>>
                            Сторінка прикріпленого файлу </option>
                    <option value="file" <# if ( 'file'===wp.media.galleryDefaults.link ) { #>selected="selected"<# } #>>
                            Медіафайл </option>
                    <option value="none" <# if ( 'none'===wp.media.galleryDefaults.link ) { #>selected="selected"<# } #>>
                            Немає </option>
            </select>
        </span>
        <span class="setting">
            <label for="gallery-settings-columns" class="name select-label-inline">Колонки</label>
            <select id="gallery-settings-columns" class="columns" name="columns" data-setting="columns">
                <option value="1" <# if ( 1==wp.media.galleryDefaults.columns ) { #>selected="selected"<# } #>>
                        1 </option>
                <option value="2" <# if ( 2==wp.media.galleryDefaults.columns ) { #>selected="selected"<# } #>>
                        2 </option>
                <option value="3" <# if ( 3==wp.media.galleryDefaults.columns ) { #>selected="selected"<# } #>>
                        3 </option>
                <option value="4" <# if ( 4==wp.media.galleryDefaults.columns ) { #>selected="selected"<# } #>>
                        4 </option>
                <option value="5" <# if ( 5==wp.media.galleryDefaults.columns ) { #>selected="selected"<# } #>>
                        5 </option>
                <option value="6" <# if ( 6==wp.media.galleryDefaults.columns ) { #>selected="selected"<# } #>>
                        6 </option>
                <option value="7" <# if ( 7==wp.media.galleryDefaults.columns ) { #>selected="selected"<# } #>>
                        7 </option>
                <option value="8" <# if ( 8==wp.media.galleryDefaults.columns ) { #>selected="selected"<# } #>>
                        8 </option>
                <option value="9" <# if ( 9==wp.media.galleryDefaults.columns ) { #>selected="selected"<# } #>>
                        9 </option>
            </select>
        </span>
        <span class="setting">
            <input type="checkbox" id="gallery-settings-random-order" data-setting="_orderbyRandom" />
            <label for="gallery-settings-random-order" class="checkbox-label-inline">Випадковий порядок</label>
        </span>
        <span class="setting size">
            <label for="gallery-settings-size" class="name">Розмір</label>
            <select id="gallery-settings-size" class="size" name="size" data-setting="size" <# if ( data.userSettings ) { #>
                data-user-setting="imgsize"
                <# } #>
                    >
                    <option value="thumbnail">
                        Мініатюра </option>
                    <option value="medium">
                        Середній </option>
                    <option value="large">
                        Великий </option>
                    <option value="full">
                        Повний розмір </option>
            </select>
        </span>
    </script>
    <script type="text/html" id="tmpl-playlist-settings">
        <h2>Налаштування списку відтворення</h2>
        <# var emptyModel=_.isEmpty( data.model ), isVideo='video'===data.controller.get('library').props.get('type'); #>
            <span class="setting">
                <input type="checkbox" id="playlist-settings-show-list" data-setting="tracklist" <# if ( emptyModel ) { #>
                checked="checked"
                <# } #> />
                    <label for="playlist-settings-show-list" class="checkbox-label-inline">
                        <# if ( isVideo ) { #>
                            Показати список відео <# } else { #>
                                Показати список треків <# } #>
                    </label>
            </span>
            <# if ( ! isVideo ) { #>
                <span class="setting">
                    <input type="checkbox" id="playlist-settings-show-artist" data-setting="artists" <# if ( emptyModel ) { #>
                    checked="checked"
                    <# } #> />
                        <label for="playlist-settings-show-artist" class="checkbox-label-inline">
                            Показати ім'я виконавця в списку треків </label>
                </span>
                <# } #>
                    <span class="setting">
                        <input type="checkbox" id="playlist-settings-show-images" data-setting="images" <# if ( emptyModel ) { #>
                        checked="checked"
                        <# } #> />
                            <label for="playlist-settings-show-images" class="checkbox-label-inline">
                                Показати зображення </label>
                    </span>
    </script>
    <script type="text/html" id="tmpl-embed-link-settings">
        <span class="setting link-text">
            <label for="embed-link-settings-link-text" class="name">Текст посилання</label>
            <input type="text" id="embed-link-settings-link-text" class="alignment" data-setting="linkText" />
        </span>
        <div class="embed-container" style="display: none;">
            <div class="embed-preview"></div>
        </div>
    </script>
    <script type="text/html" id="tmpl-embed-image-settings">
        <div class="wp-clearfix">
            <div class="thumbnail">
                <img src="{{ data.model.url }}" draggable="false" alt="" />
            </div>
        </div>
        <span class="setting alt-text has-description">
            <label for="embed-image-settings-alt-text" class="name">Альтернативний текст</label>
            <input type="text" id="embed-image-settings-alt-text" data-setting="alt" aria-describedby="alt-text-description" />
        </span>
        <p class="description" id="alt-text-description"><a href="https://www.w3.org/WAI/tutorials/images/decision-tree" target="_blank" rel="noopener">Learn how to describe the purpose of the image<span class="screen-reader-text"> (відкривається у новій вкладці)</span></a>. Leave empty if the image is purely decorative.</p>
        <span class="setting caption">
            <label for="embed-image-settings-caption" class="name">Підпис</label>
            <textarea id="embed-image-settings-caption" data-setting="caption"></textarea>
        </span>
        <fieldset class="setting-group">
            <legend class="name">Вирівняти</legend>
            <span class="setting align">
                <span class="button-group button-large" data-setting="align">
                    <button class="button" value="left">
                        Ліворуч </button>
                    <button class="button" value="center">
                        Центр </button>
                    <button class="button" value="right">
                        Праворуч </button>
                    <button class="button active" value="none">
                        Немає </button>
                </span>
            </span>
        </fieldset>
        <fieldset class="setting-group">
            <legend class="name">Посилання до</legend>
            <span class="setting link-to">
                <span class="button-group button-large" data-setting="link">
                    <button class="button" value="file">
                        URL зображення </button>
                    <button class="button" value="custom">
                        Користувацьке посилання </button>
                    <button class="button active" value="none">
                        Немає </button>
                </span>
            </span>
            <span class="setting">
                <label for="embed-image-settings-link-to-custom" class="name">URL</label>
                <input type="text" id="embed-image-settings-link-to-custom" class="link-to-custom" data-setting="linkUrl" />
            </span>
        </fieldset>
    </script>
    <script type="text/html" id="tmpl-image-details">
        <div class="media-embed">
            <div class="embed-media-settings">
                <div class="column-settings">
                    <span class="setting alt-text has-description">
                        <label for="image-details-alt-text" class="name">Альтернативний текст</label>
                        <input type="text" id="image-details-alt-text" data-setting="alt" value="{{ data.model.alt }}" aria-describedby="alt-text-description" />
                    </span>
                    <p class="description" id="alt-text-description"><a href="https://www.w3.org/WAI/tutorials/images/decision-tree" target="_blank" rel="noopener">Learn how to describe the purpose of the image<span class="screen-reader-text"> (відкривається у новій вкладці)</span></a>. Leave empty if the image is purely decorative.</p>
                    <span class="setting caption">
                        <label for="image-details-caption" class="name">Підпис</label>
                        <textarea id="image-details-caption" data-setting="caption">{{ data.model.caption }}</textarea>
                    </span>
                    <h2>Налаштування відображення</h2>
                    <fieldset class="setting-group">
                        <legend class="legend-inline">Вирівняти</legend>
                        <span class="setting align">
                            <span class="button-group button-large" data-setting="align">
                                <button class="button" value="left">
                                    Ліворуч </button>
                                <button class="button" value="center">
                                    Центр </button>
                                <button class="button" value="right">
                                    Праворуч </button>
                                <button class="button active" value="none">
                                    Немає </button>
                            </span>
                        </span>
                    </fieldset>
                    <# if ( data.attachment ) { #>
                        <# if ( 'undefined' !==typeof data.attachment.sizes ) { #>
                            <span class="setting size">
                                <label for="image-details-size" class="name">Розмір</label>
                                <select id="image-details-size" class="size" name="size" data-setting="size" <# if ( data.userSettings ) { #>
                                    data-user-setting="imgsize"
                                    <# } #>>
                                        <# var size=data.sizes['thumbnail']; if ( size ) { #>
                                            <option value="thumbnail">
                                                Мініатюра – {{ size.width }} × {{ size.height }}
                                            </option>
                                            <# } #>
                                                <# var size=data.sizes['medium']; if ( size ) { #>
                                                    <option value="medium">
                                                        Середній – {{ size.width }} × {{ size.height }}
                                                    </option>
                                                    <# } #>
                                                        <# var size=data.sizes['large']; if ( size ) { #>
                                                            <option value="large">
                                                                Великий – {{ size.width }} × {{ size.height }}
                                                            </option>
                                                            <# } #>
                                                                <# var size=data.sizes['full']; if ( size ) { #>
                                                                    <option value="full">
                                                                        Повний розмір – {{ size.width }} × {{ size.height }}
                                                                    </option>
                                                                    <# } #>
                                                                        <option value="custom">
                                                                            Користувацький розмір </option>
                                </select>
                            </span>
                            <# } #>
                                <div class="custom-size wp-clearfix<# if ( data.model.size !== 'custom' ) { #> hidden<# } #>">
                                    <span class="custom-size-setting">
                                        <label for="image-details-size-width">Ширина</label>
                                        <input type="number" id="image-details-size-width" aria-describedby="image-size-desc" data-setting="customWidth" step="1" value="{{ data.model.customWidth }}" />
                                    </span>
                                    <span class="sep" aria-hidden="true">×</span>
                                    <span class="custom-size-setting">
                                        <label for="image-details-size-height">Висота</label>
                                        <input type="number" id="image-details-size-height" aria-describedby="image-size-desc" data-setting="customHeight" step="1" value="{{ data.model.customHeight }}" />
                                    </span>
                                    <p id="image-size-desc" class="description">Розмір зображення в пікселях</p>
                                </div>
                                <# } #>
                                    <span class="setting link-to">
                                        <label for="image-details-link-to" class="name">Посилання до</label>
                                        <select id="image-details-link-to" data-setting="link">
                                            <# if ( data.attachment ) { #>
                                                <option value="file">
                                                    Медіафайл </option>
                                                <option value="post">
                                                    Сторінка прикріпленого файлу </option>
                                                <# } else { #>
                                                    <option value="file">
                                                        URL зображення </option>
                                                    <# } #>
                                                        <option value="custom">
                                                            Користувацьке посилання </option>
                                                        <option value="none">
                                                            Немає </option>
                                        </select>
                                    </span>
                                    <span class="setting">
                                        <label for="image-details-link-to-custom" class="name">URL</label>
                                        <input type="text" id="image-details-link-to-custom" class="link-to-custom" data-setting="linkUrl" />
                                    </span>
                                    <div class="advanced-section">
                                        <h2><button type="button" class="button-link advanced-toggle">Додаткові параметри</button></h2>
                                        <div class="advanced-settings hidden">
                                            <div class="advanced-image">
                                                <span class="setting title-text">
                                                    <label for="image-details-title-attribute" class="name">Атрибут title</label>
                                                    <input type="text" id="image-details-title-attribute" data-setting="title" value="{{ data.model.title }}" />
                                                </span>
                                                <span class="setting extra-classes">
                                                    <label for="image-details-css-class" class="name">CSS Class зображення</label>
                                                    <input type="text" id="image-details-css-class" data-setting="extraClasses" value="{{ data.model.extraClasses }}" />
                                                </span>
                                            </div>
                                            <div class="advanced-link">
                                                <span class="setting link-target">
                                                    <input type="checkbox" id="image-details-link-target" data-setting="linkTargetBlank" value="_blank" <# if ( data.model.linkTargetBlank ) { #>checked="checked"<# } #>>
                                                        <label for="image-details-link-target" class="checkbox-label">Відкрити посилання у новій вкладці</label>
                                                </span>
                                                <span class="setting link-rel">
                                                    <label for="image-details-link-rel" class="name">rel атрибут тегу link</label>
                                                    <input type="text" id="image-details-link-rel" data-setting="linkRel" value="{{ data.model.linkRel }}" />
                                                </span>
                                                <span class="setting link-class-name">
                                                    <label for="image-details-link-css-class" class="name">CSS клас посилання</label>
                                                    <input type="text" id="image-details-link-css-class" data-setting="linkClassName" value="{{ data.model.linkClassName }}" />
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                </div>
                <div class="column-image">
                    <div class="image">
                        <img src="{{ data.model.url }}" draggable="false" alt="" />
                        <# if ( data.attachment && window.imageEdit ) { #>
                            <div class="actions">
                                <input type="button" class="edit-attachment button" value="Редагувати першоджерело" />
                                <input type="button" class="replace-attachment button" value="Замінити" />
                            </div>
                            <# } #>
                    </div>
                </div>
            </div>
        </div>
    </script>
    <script type="text/html" id="tmpl-image-editor">
        <div id="media-head-{{ data.id }}"></div>
        <div id="image-editor-{{ data.id }}"></div>
    </script>
    <script type="text/html" id="tmpl-audio-details">
        <# var ext, html5types={ mp3: wp.media.view.settings.embedMimes.mp3, ogg: wp.media.view.settings.embedMimes.ogg }; #>
            <div class="media-embed media-embed-details">
                <div class="embed-media-settings embed-audio-settings">
                    <audio style="visibility: hidden" controls class="wp-audio-shortcode" width="{{ _.isUndefined( data.model.width ) ? 400 : data.model.width }}" preload="{{ _.isUndefined( data.model.preload ) ? 'none' : data.model.preload }}" <# if ( ! _.isUndefined( data.model.autoplay ) && data.model.autoplay ) { #> autoplay<# } if ( ! _.isUndefined( data.model.loop ) && data.model.loop ) { #> loop<# } #>
                                >
                                <# if ( ! _.isEmpty( data.model.src ) ) { #>
                                    <source src="{{ data.model.src }}" type="{{ wp.media.view.settings.embedMimes[ data.model.src.split('.').pop() ] }}" />
                                    <# } #>
                                        <# if ( ! _.isEmpty( data.model.mp3 ) ) { #>
                                            <source src="{{ data.model.mp3 }}" type="{{ wp.media.view.settings.embedMimes[ 'mp3' ] }}" />
                                            <# } #>
                                                <# if ( ! _.isEmpty( data.model.ogg ) ) { #>
                                                    <source src="{{ data.model.ogg }}" type="{{ wp.media.view.settings.embedMimes[ 'ogg' ] }}" />
                                                    <# } #>
                                                        <# if ( ! _.isEmpty( data.model.flac ) ) { #>
                                                            <source src="{{ data.model.flac }}" type="{{ wp.media.view.settings.embedMimes[ 'flac' ] }}" />
                                                            <# } #>
                                                                <# if ( ! _.isEmpty( data.model.m4a ) ) { #>
                                                                    <source src="{{ data.model.m4a }}" type="{{ wp.media.view.settings.embedMimes[ 'm4a' ] }}" />
                                                                    <# } #>
                                                                        <# if ( ! _.isEmpty( data.model.wav ) ) { #>
                                                                            <source src="{{ data.model.wav }}" type="{{ wp.media.view.settings.embedMimes[ 'wav' ] }}" />
                                                                            <# } #>
                    </audio>
                    <# if ( ! _.isEmpty( data.model.src ) ) { ext=data.model.src.split('.').pop(); if ( html5types[ ext ] ) { delete html5types[ ext ]; } #>
                        <span class="setting">
                            <label for="audio-details-source" class="name">URL</label>
                            <input type="text" id="audio-details-source" readonly data-setting="src" value="{{ data.model.src }}" />
                            <button type="button" class="button-link remove-setting">Видалити джерело аудіо</button>
                        </span>
                        <# } #>
                            <# if ( ! _.isEmpty( data.model.mp3 ) ) { if ( ! _.isUndefined( html5types.mp3 ) ) { delete html5types.mp3; } #>
                                <span class="setting">
                                    <label for="audio-details-mp3-source" class="name">MP3</label>
                                    <input type="text" id="audio-details-mp3-source" readonly data-setting="mp3" value="{{ data.model.mp3 }}" />
                                    <button type="button" class="button-link remove-setting">Видалити джерело аудіо</button>
                                </span>
                                <# } #>
                                    <# if ( ! _.isEmpty( data.model.ogg ) ) { if ( ! _.isUndefined( html5types.ogg ) ) { delete html5types.ogg; } #>
                                        <span class="setting">
                                            <label for="audio-details-ogg-source" class="name">OGG</label>
                                            <input type="text" id="audio-details-ogg-source" readonly data-setting="ogg" value="{{ data.model.ogg }}" />
                                            <button type="button" class="button-link remove-setting">Видалити джерело аудіо</button>
                                        </span>
                                        <# } #>
                                            <# if ( ! _.isEmpty( data.model.flac ) ) { if ( ! _.isUndefined( html5types.flac ) ) { delete html5types.flac; } #>
                                                <span class="setting">
                                                    <label for="audio-details-flac-source" class="name">FLAC</label>
                                                    <input type="text" id="audio-details-flac-source" readonly data-setting="flac" value="{{ data.model.flac }}" />
                                                    <button type="button" class="button-link remove-setting">Видалити джерело аудіо</button>
                                                </span>
                                                <# } #>
                                                    <# if ( ! _.isEmpty( data.model.m4a ) ) { if ( ! _.isUndefined( html5types.m4a ) ) { delete html5types.m4a; } #>
                                                        <span class="setting">
                                                            <label for="audio-details-m4a-source" class="name">M4A</label>
                                                            <input type="text" id="audio-details-m4a-source" readonly data-setting="m4a" value="{{ data.model.m4a }}" />
                                                            <button type="button" class="button-link remove-setting">Видалити джерело аудіо</button>
                                                        </span>
                                                        <# } #>
                                                            <# if ( ! _.isEmpty( data.model.wav ) ) { if ( ! _.isUndefined( html5types.wav ) ) { delete html5types.wav; } #>
                                                                <span class="setting">
                                                                    <label for="audio-details-wav-source" class="name">WAV</label>
                                                                    <input type="text" id="audio-details-wav-source" readonly data-setting="wav" value="{{ data.model.wav }}" />
                                                                    <button type="button" class="button-link remove-setting">Видалити джерело аудіо</button>
                                                                </span>
                                                                <# } #>
                                                                    <# if ( ! _.isEmpty( html5types ) ) { #>
                                                                        <fieldset class="setting-group">
                                                                            <legend class="name">Додати додаткові джерела для максимальної сумісності з HTML5</legend>
                                                                            <span class="setting">
                                                                                <span class="button-large">
                                                                                    <# _.each( html5types, function (mime, type) { #>
                                                                                        <button class="button add-media-source" data-mime="{{ mime }}">{{ type }}</button>
                                                                                        <# } ) #>
                                                                                </span>
                                                                            </span>
                                                                        </fieldset>
                                                                        <# } #>
                                                                            <fieldset class="setting-group">
                                                                                <legend class="name">Попереднє завантаження</legend>
                                                                                <span class="setting preload">
                                                                                    <span class="button-group button-large" data-setting="preload">
                                                                                        <button class="button" value="auto">Авто</button>
                                                                                        <button class="button" value="metadata">Метадані</button>
                                                                                        <button class="button active" value="none">Немає</button>
                                                                                    </span>
                                                                                </span>
                                                                            </fieldset>
                                                                            <span class="setting-group">
                                                                                <span class="setting checkbox-setting autoplay">
                                                                                    <input type="checkbox" id="audio-details-autoplay" data-setting="autoplay" />
                                                                                    <label for="audio-details-autoplay" class="checkbox-label">Автозапуск</label>
                                                                                </span>
                                                                                <span class="setting checkbox-setting">
                                                                                    <input type="checkbox" id="audio-details-loop" data-setting="loop" />
                                                                                    <label for="audio-details-loop" class="checkbox-label">Цикл</label>
                                                                                </span>
                                                                            </span>
                </div>
            </div>
    </script>
    <script type="text/html" id="tmpl-video-details">
        <# var ext, html5types={ mp4: wp.media.view.settings.embedMimes.mp4, ogv: wp.media.view.settings.embedMimes.ogv, webm: wp.media.view.settings.embedMimes.webm }; #>
            <div class="media-embed media-embed-details">
                <div class="embed-media-settings embed-video-settings">
                    <div class="wp-video-holder">
                        <# var w=! data.model.width || data.model.width> 640 ? 640 : data.model.width,
                            h = ! data.model.height ? 360 : data.model.height;
                            if ( data.model.width && w !== data.model.width ) {
                            h = Math.ceil( ( h * w ) / data.model.width );
                            }
                            #>
                            <# var w_rule='' , classes=[], w, h, settings=wp.media.view.settings, isYouTube=isVimeo=false; if ( ! _.isEmpty( data.model.src ) ) { isYouTube=data.model.src.match(/youtube|youtu\.be/); isVimeo=-1 !==data.model.src.indexOf('vimeo'); } if ( settings.contentWidth && data.model.width>= settings.contentWidth ) {
                                w = settings.contentWidth;
                                } else {
                                w = data.model.width;
                                }
                                if ( w !== data.model.width ) {
                                h = Math.ceil( ( data.model.height * w ) / data.model.width );
                                } else {
                                h = data.model.height;
                                }
                                if ( w ) {
                                w_rule = 'width: ' + w + 'px; ';
                                }
                                if ( isYouTube ) {
                                classes.push( 'youtube-video' );
                                }
                                if ( isVimeo ) {
                                classes.push( 'vimeo-video' );
                                }
                                #>
                                <div class="wp-video">
                                    <video controls class="wp-video-shortcode {{ classes.join( ' ' ) }}" <# if ( w ) { #>width="{{ w }}"<# } #>
                                            <# if ( h ) { #>height="{{ h }}"<# } #>
                                                    <# if ( ! _.isUndefined( data.model.poster ) && data.model.poster ) { #> poster="{{ data.model.poster }}"<# } #>
                                                            preload ="{{ _.isUndefined( data.model.preload ) ? 'metadata' : data.model.preload }}"
                                                            <# if ( ! _.isUndefined( data.model.autoplay ) && data.model.autoplay ) { #> autoplay<# } if ( ! _.isUndefined( data.model.loop ) && data.model.loop ) { #> loop<# } #>
                                                                        >
                                                                        <# if ( ! _.isEmpty( data.model.src ) ) { if ( isYouTube ) { #>
                                                                            <source src="{{ data.model.src }}" type="video/youtube" />
                                                                            <# } else if ( isVimeo ) { #>
                                                                                <source src="{{ data.model.src }}" type="video/vimeo" />
                                                                                <# } else { #>
                                                                                    <source src="{{ data.model.src }}" type="{{ settings.embedMimes[ data.model.src.split('.').pop() ] }}" />
                                                                                    <# } } #>
                                                                                        <# if ( data.model.mp4 ) { #>
                                                                                            <source src="{{ data.model.mp4 }}" type="{{ settings.embedMimes[ 'mp4' ] }}" />
                                                                                            <# } #>
                                                                                                <# if ( data.model.m4v ) { #>
                                                                                                    <source src="{{ data.model.m4v }}" type="{{ settings.embedMimes[ 'm4v' ] }}" />
                                                                                                    <# } #>
                                                                                                        <# if ( data.model.webm ) { #>
                                                                                                            <source src="{{ data.model.webm }}" type="{{ settings.embedMimes[ 'webm' ] }}" />
                                                                                                            <# } #>
                                                                                                                <# if ( data.model.ogv ) { #>
                                                                                                                    <source src="{{ data.model.ogv }}" type="{{ settings.embedMimes[ 'ogv' ] }}" />
                                                                                                                    <# } #>
                                                                                                                        <# if ( data.model.flv ) { #>
                                                                                                                            <source src="{{ data.model.flv }}" type="{{ settings.embedMimes[ 'flv' ] }}" />
                                                                                                                            <# } #>
                                                                                                                                {{{ data.model.content }}}
                                    </video>
                                </div>
                                <# if ( ! _.isEmpty( data.model.src ) ) { ext=data.model.src.split('.').pop(); if ( html5types[ ext ] ) { delete html5types[ ext ]; } #>
                                    <span class="setting">
                                        <label for="video-details-source" class="name">URL</label>
                                        <input type="text" id="video-details-source" readonly data-setting="src" value="{{ data.model.src }}" />
                                        <button type="button" class="button-link remove-setting">Видалити джерело відео</button>
                                    </span>
                                    <# } #>
                                        <# if ( ! _.isEmpty( data.model.mp4 ) ) { if ( ! _.isUndefined( html5types.mp4 ) ) { delete html5types.mp4; } #>
                                            <span class="setting">
                                                <label for="video-details-mp4-source" class="name">MP4</label>
                                                <input type="text" id="video-details-mp4-source" readonly data-setting="mp4" value="{{ data.model.mp4 }}" />
                                                <button type="button" class="button-link remove-setting">Видалити джерело відео</button>
                                            </span>
                                            <# } #>
                                                <# if ( ! _.isEmpty( data.model.m4v ) ) { if ( ! _.isUndefined( html5types.m4v ) ) { delete html5types.m4v; } #>
                                                    <span class="setting">
                                                        <label for="video-details-m4v-source" class="name">M4V</label>
                                                        <input type="text" id="video-details-m4v-source" readonly data-setting="m4v" value="{{ data.model.m4v }}" />
                                                        <button type="button" class="button-link remove-setting">Видалити джерело відео</button>
                                                    </span>
                                                    <# } #>
                                                        <# if ( ! _.isEmpty( data.model.webm ) ) { if ( ! _.isUndefined( html5types.webm ) ) { delete html5types.webm; } #>
                                                            <span class="setting">
                                                                <label for="video-details-webm-source" class="name">WEBM</label>
                                                                <input type="text" id="video-details-webm-source" readonly data-setting="webm" value="{{ data.model.webm }}" />
                                                                <button type="button" class="button-link remove-setting">Видалити джерело відео</button>
                                                            </span>
                                                            <# } #>
                                                                <# if ( ! _.isEmpty( data.model.ogv ) ) { if ( ! _.isUndefined( html5types.ogv ) ) { delete html5types.ogv; } #>
                                                                    <span class="setting">
                                                                        <label for="video-details-ogv-source" class="name">OGV</label>
                                                                        <input type="text" id="video-details-ogv-source" readonly data-setting="ogv" value="{{ data.model.ogv }}" />
                                                                        <button type="button" class="button-link remove-setting">Видалити джерело відео</button>
                                                                    </span>
                                                                    <# } #>
                                                                        <# if ( ! _.isEmpty( data.model.flv ) ) { if ( ! _.isUndefined( html5types.flv ) ) { delete html5types.flv; } #>
                                                                            <span class="setting">
                                                                                <label for="video-details-flv-source" class="name">FLV</label>
                                                                                <input type="text" id="video-details-flv-source" readonly data-setting="flv" value="{{ data.model.flv }}" />
                                                                                <button type="button" class="button-link remove-setting">Видалити джерело відео</button>
                                                                            </span>
                                                                            <# } #>
                    </div>
                    <# if ( ! _.isEmpty( html5types ) ) { #>
                        <fieldset class="setting-group">
                            <legend class="name">Додати додаткові джерела для максимальної сумісності з HTML5</legend>
                            <span class="setting">
                                <span class="button-large">
                                    <# _.each( html5types, function (mime, type) { #>
                                        <button class="button add-media-source" data-mime="{{ mime }}">{{ type }}</button>
                                        <# } ) #>
                                </span>
                            </span>
                        </fieldset>
                        <# } #>
                            <# if ( ! _.isEmpty( data.model.poster ) ) { #>
                                <span class="setting">
                                    <label for="video-details-poster-image" class="name">Зображення постера</label>
                                    <input type="text" id="video-details-poster-image" readonly data-setting="poster" value="{{ data.model.poster }}" />
                                    <button type="button" class="button-link remove-setting">Видалити зображення постера</button>
                                </span>
                                <# } #>
                                    <fieldset class="setting-group">
                                        <legend class="name">Попереднє завантаження</legend>
                                        <span class="setting preload">
                                            <span class="button-group button-large" data-setting="preload">
                                                <button class="button" value="auto">Авто</button>
                                                <button class="button" value="metadata">Метадані</button>
                                                <button class="button active" value="none">Немає</button>
                                            </span>
                                        </span>
                                    </fieldset>
                                    <span class="setting-group">
                                        <span class="setting checkbox-setting autoplay">
                                            <input type="checkbox" id="video-details-autoplay" data-setting="autoplay" />
                                            <label for="video-details-autoplay" class="checkbox-label">Автозапуск</label>
                                        </span>
                                        <span class="setting checkbox-setting">
                                            <input type="checkbox" id="video-details-loop" data-setting="loop" />
                                            <label for="video-details-loop" class="checkbox-label">Цикл</label>
                                        </span>
                                    </span>
                                    <span class="setting" data-setting="content">
                                        <# var content='' ; if ( ! _.isEmpty( data.model.content ) ) { var tracks=jQuery( data.model.content ).filter( 'track' ); _.each( tracks.toArray(), function( track, index ) { content +=track.outerHTML; #>
                                            <label for="video-details-track-{{ index }}" class="name">Треки (субтитри, підписи, описи, глави або метадані)</label>
                                            <input class="content-track" type="text" id="video-details-track-{{ index }}" aria-describedby="video-details-track-desc-{{ index }}" value="{{ track.outerHTML }}" />
                                            <span class="description" id="video-details-track-desc-{{ index }}">
                                                Значення srclang, label, і kind можуть бути відредаговані для визначення мови і виду відеодоріжки. </span>
                                            <button type="button" class="button-link remove-setting remove-track">Видалити відео трек</button><br />
                                            <# } ); #>
                                                <# } else { #>
                                                    <span class="name">Треки (субтитри, підписи, описи, глави або метадані)</span><br />
                                                    <em>Субтитри не вказані.</em>
                                                    <# } #>
                                                        <textarea class="hidden content-setting">{{ content }}</textarea>
                                    </span>
                </div>
            </div>
    </script>
    <script type="text/html" id="tmpl-editor-gallery">
        <# if ( data.attachments.length ) { #>
            <div class="gallery gallery-columns-{{ data.columns }}">
                <# _.each( data.attachments, function( attachment, index ) { #>
                    <dl class="gallery-item">
                        <dt class="gallery-icon">
                            <# if ( attachment.thumbnail ) { #>
                                <img src="{{ attachment.thumbnail.url }}" width="{{ attachment.thumbnail.width }}" height="{{ attachment.thumbnail.height }}" alt="{{ attachment.alt }}" />
                                <# } else { #>
                                    <img src="{{ attachment.url }}" alt="{{ attachment.alt }}" />
                                    <# } #>
                        </dt>
                        <# if ( attachment.caption ) { #>
                            <dd class="wp-caption-text gallery-caption">
                                {{{ data.verifyHTML( attachment.caption ) }}}
                            </dd>
                            <# } #>
                    </dl>
                    <# if ( index % data.columns===data.columns - 1 ) { #>
                        <br style="clear: both;">
                        <# } #>
                            <# } ); #>
            </div>
            <# } else { #>
                <div class="wpview-error">
                    <div class="dashicons dashicons-format-gallery"></div>
                    <p>Елементів не знайдено.</p>
                </div>
                <# } #>
    </script>
    <script type="text/html" id="tmpl-crop-content">
        <img class="crop-image" src="{{ data.url }}" alt="Попередній перегляд області обрізки зображення. Вимагає керування мишею." />
        <div class="upload-errors"></div>
    </script>
    <script type="text/html" id="tmpl-site-icon-preview">
        <h2>Переглянути</h2>
        <strong aria-hidden="true">Як іконка браузера</strong>
        <div class="favicon-preview">
            <img src="https://perou.store/wp-admin/images/browser.png" class="browser-preview" width="182" height="" alt="" />
            <div class="favicon">
                <img id="preview-favicon" src="{{ data.url }}" alt="Переглянути як іконку браузера" />
            </div>
            <span class="browser-title" aria-hidden="true">
                <# print( 'PEROU Store' ) #>
            </span>
        </div>
        <strong aria-hidden="true">Як іконка програми</strong>
        <div class="app-icon-preview">
            <img id="preview-app-icon" src="{{ data.url }}" alt="Переглянути як іконку програми" />
        </div>
    </script>
    <script type="text/javascript">
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <!-- <link rel='stylesheet' id='buttons-css'  href='https://perou.store/wp-includes/css/buttons.min.css?ver=1a3f0d1f038060201de040b270743d9c' type='text/css' media='all' /> -->
    <!-- <link rel='stylesheet' id='dashicons-css'  href='https://perou.store/wp-includes/css/dashicons.min.css?ver=1a3f0d1f038060201de040b270743d9c' type='text/css' media='all' /> -->
    <link rel="stylesheet" type="text/css" href="css/63p10_6.css" media="all">
    <style id="dashicons-inline-css" type="text/css">
        [data-font="Dashicons"]:before {
            font-family: 'Dashicons' !important;
            content: attr(data-icon) !important;
            font-weight: normal !important;
            font-variant: normal !important;
            text-transform: none !important;
            line-height: 1 !important;
            font-style: normal !important;
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
        }
    </style>
    <!-- <link rel='stylesheet' id='mediaelement-css'  href='https://perou.store/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css?ver=4.2.16' type='text/css' media='all' /> -->
    <!-- <link rel='stylesheet' id='wp-mediaelement-css'  href='https://perou.store/wp-includes/js/mediaelement/wp-mediaelement.min.css?ver=1a3f0d1f038060201de040b270743d9c' type='text/css' media='all' /> -->
    <!-- <link rel='stylesheet' id='media-views-css'  href='https://perou.store/wp-includes/css/media-views.min.css?ver=1a3f0d1f038060201de040b270743d9c' type='text/css' media='all' /> -->
    <!-- <link rel='stylesheet' id='imgareaselect-css'  href='https://perou.store/wp-includes/js/imgareaselect/imgareaselect.css?ver=0.9.8' type='text/css' media='all' /> -->
    <!-- <link rel='stylesheet' id='woocommercediscounts_plus-style-css'  href='https://perou.store/wp-content/plugins/woocommerce-discounts-plus/css/style.css?ver=1673385068' type='text/css' media='all' /> -->
    <link rel="stylesheet" type="text/css" href="css/63p10_5.css" media="all">
    <script type="text/javascript" src="js/build.js" id="build-js"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/ua\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "\u041f\u0435\u0440\u0435\u0433\u043b\u044f\u043d\u0443\u0442\u0438 \u043a\u043e\u0448\u0438\u043a",
            "cart_url": "https:\/\/perou.store\/ua\/korzina\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="js/add-to-cart.js" id="wc-add-to-cart-js"></script>
    <script type="text/javascript" src="js/swiper.jquery.min.js" id="jquery-swiper-js"></script>
    <script type="text/javascript" src="js/select2.full.min.js" id="select2-js"></script>
    <script type="text/javascript" src="js/jquery.blockUI.min.js" id="jquery-blockui-js"></script>
    <script type="text/javascript" id="yith-wcbr-js-extra">
        /* <![CDATA[ */
        var yith_wcbr = {
            "labels": {
                "brands_select_default": "Any Brand"
            },
            "thumbnail_carousel_time": "1500",
            "ajax_url": "https:\/\/perou.store\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="js/yith-wcbr.min.js" id="yith-wcbr-js"></script>
    <script type="text/javascript" id="wc-single-product-js-extra">
        /* <![CDATA[ */
        var wc_single_product_params = {
            "i18n_required_rating_text": "\u0411\u0443\u0434\u044c \u043b\u0430\u0441\u043a\u0430, \u043e\u0446\u0456\u043d\u0456\u0442\u044c",
            "review_rating_required": "yes",
            "flexslider": {
                "rtl": false,
                "animation": "slide",
                "smoothHeight": true,
                "directionNav": false,
                "controlNav": "thumbnails",
                "slideshow": false,
                "animationSpeed": 500,
                "animationLoop": false,
                "allowOneSlide": false
            },
            "zoom_enabled": "",
            "zoom_options": [],
            "photoswipe_enabled": "",
            "photoswipe_options": {
                "shareEl": false,
                "closeOnScroll": false,
                "history": false,
                "hideAnimationDuration": 0,
                "showAnimationDuration": 0
            },
            "flexslider_enabled": ""
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="js/single-product.min.js" id="wc-single-product-js"></script>
    <script type="text/javascript" src="js/js.cookie.min.js" id="js-cookie-js"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/ua\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="js/woocommerce.min.js" id="woocommerce-js"></script>
    <script type="text/javascript" src="js/cart-fragments.min.js" id="wc-cart-fragments-js"></script>
    <script type="text/javascript" src="js/yith-autocomplete.min.js" id="yith_autocomplete-js"></script>
    <script type="text/javascript" id="malinky-ajax-pagination-main-js-js-extra">
        /* <![CDATA[ */
        var malinkySettings = {
            "1": {
                "theme_defaults": "Twenty Sixteen",
                "posts_wrapper": "#products-container",
                "post_wrapper": ".product-wrapper",
                "pagination_wrapper": ".pagination",
                "next_page_selector": ".page-numbers a.next",
                "paging_type": "infinite-scroll",
                "infinite_scroll_buffer": "20",
                "ajax_loader": "<img src=\"https:\/\/perou.store\/wp-content\/plugins\/malinky-ajax-pagination\/img\/loader.gif\" alt=\"AJAX Loader\" \/>",
                "load_more_button_text": "Load More Posts",
                "loading_more_posts_text": "Loading...",
                "callback_function": "        $('img.img-responsive').each(function() {\r\n            $(this).appendTo($(this).prev().children());\r\n        });\r\n        $('.product-box.catalog.product').each(function() {\r\n            $(this).find('.yith-wcbr-brands').insertBefore($(this).find('.productname'));\r\n        });\r\n        $('#product-summary-content .yith-wcbr-brands').insertBefore('.product_title.entry-title');\r\n\r\n        $('.product-box.catalog.product').css(\"display\", 'block');\r\n        $('#product-summary').css(\"display\", 'block');\r\n"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="js/main.js" id="malinky-ajax-pagination-main-js-js"></script>
    <script type="text/javascript" src="js/add-to-cart-variation.js" id="add-to-cart-variation_ajax-js"></script>
    <script type="text/javascript" src="js/smsb_script.js" id="smsb_script-js"></script>
    <script type="text/javascript" src="js/underscore.min.js" id="underscore-js"></script>
    <script type="text/javascript" src="js/shortcode.min.js" id="shortcode-js"></script>
    <script type="text/javascript" src="js/backbone.min.js" id="backbone-js"></script>
    <script type="text/javascript" id="wp-util-js-extra">
        /* <![CDATA[ */
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/wp-admin\/admin-ajax.php"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="js/wp-util.min.js" id="wp-util-js"></script>
    <script type="text/javascript" src="js/wp-backbone.min.js" id="wp-backbone-js"></script>
    <script type="text/javascript" id="media-models-js-extra">
        /* <![CDATA[ */
        var _wpMediaModelsL10n = {
            "settings": {
                "ajaxurl": "\/wp-admin\/admin-ajax.php",
                "post": {
                    "id": 0
                }
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="js/media-models.min.js" id="media-models-js"></script>
    <script type="text/javascript" id="wp-plupload-js-extra">
        /* <![CDATA[ */
        var pluploadL10n = {
            "queue_limit_exceeded": "\u0412\u0438 \u0441\u043f\u0440\u043e\u0431\u0443\u0432\u0430\u043b\u0438 \u0437\u0430\u0432\u0430\u043d\u0442\u0430\u0436\u0443\u0432\u0430\u0442\u0438 \u0437\u0430\u043d\u0430\u0434\u0442\u043e \u0431\u0430\u0433\u0430\u0442\u043e \u0444\u0430\u0439\u043b\u0456\u0432.",
            "file_exceeds_size_limit": "%s \u043f\u0435\u0440\u0435\u0432\u0438\u0449\u0443\u0454 \u043c\u0430\u043a\u0441\u0438\u043c\u0430\u043b\u044c\u043d\u0438\u0439 \u043b\u0456\u043c\u0456\u0442 \u0440\u043e\u0437\u043c\u0456\u0440\u0443 \u0444\u0430\u0439\u043b\u0443 \u0434\u043b\u044f \u0446\u044c\u043e\u0433\u043e \u0441\u0430\u0439\u0442\u0443.",
            "zero_byte_file": "\u0426\u0435\u0439 \u0444\u0430\u0439\u043b \u043f\u043e\u0440\u043e\u0436\u043d\u0456\u0439. \u0421\u043f\u0440\u043e\u0431\u0443\u0439\u0442\u0435 \u0456\u043d\u0448\u0438\u0439.",
            "invalid_filetype": "Sorry, you are not allowed to upload this file type.",
            "not_an_image": "\u0426\u0435\u0439 \u0444\u0430\u0439\u043b \u043d\u0435 \u0454 \u0437\u043e\u0431\u0440\u0430\u0436\u0435\u043d\u043d\u044f\u043c. \u0421\u043f\u0440\u043e\u0431\u0443\u0439\u0442\u0435 \u0437\u0430\u0432\u0430\u043d\u0442\u0430\u0436\u0438\u0442\u0438 \u0456\u043d\u0448\u0438\u0439 \u0444\u0430\u0439\u043b.",
            "image_memory_exceeded": "\u041f\u0435\u0440\u0435\u0432\u0438\u0449\u0435\u043d\u043e \u043b\u0456\u043c\u0456\u0442 \u043f\u0430\u043c\u2019\u044f\u0442\u0456. \u0411\u0443\u0434\u044c \u043b\u0430\u0441\u043a\u0430, \u0441\u043f\u0440\u043e\u0431\u0443\u0439\u0442\u0435 \u043c\u0435\u043d\u0448\u0438\u0439 \u0444\u0430\u0439\u043b.",
            "image_dimensions_exceeded": "\u0426\u0435 \u0431\u0456\u043b\u044c\u0448\u0435, \u043d\u0456\u0436 \u043c\u0430\u043a\u0441\u0438\u043c\u0430\u043b\u044c\u043d\u0438\u0439 \u0440\u043e\u0437\u043c\u0456\u0440. \u0411\u0443\u0434\u044c \u043b\u0430\u0441\u043a\u0430, \u0441\u043f\u0440\u043e\u0431\u0443\u0439\u0442\u0435 \u0456\u043d\u0448\u0438\u0439.",
            "default_error": "\u0412\u0456\u0434\u0431\u0443\u043b\u0430\u0441\u044c \u043f\u043e\u043c\u0438\u043b\u043a\u0430 \u0437\u0430\u0432\u0430\u043d\u0442\u0430\u0436\u0435\u043d\u043d\u044f \u043d\u0430 \u0441\u0435\u0440\u0432\u0435\u0440. \u0421\u043f\u0440\u043e\u0431\u0443\u0439\u0442\u0435 \u0449\u0435 \u0440\u0430\u0437.",
            "missing_upload_url": "\u0412\u0438\u043d\u0438\u043a\u043b\u0430 \u043f\u0440\u043e\u0431\u043b\u0435\u043c\u0430 \u043a\u043e\u043d\u0444\u0456\u0433\u0443\u0440\u0430\u0446\u0456\u0457. \u0411\u0443\u0434\u044c \u043b\u0430\u0441\u043a\u0430, \u0437\u0432\u2019\u044f\u0436\u0456\u0442\u044c\u0441\u044f \u0437 \u0430\u0434\u043c\u0456\u043d\u0456\u0441\u0442\u0440\u0430\u0442\u043e\u0440\u043e\u043c \u0441\u0435\u0440\u0432\u0435\u0440\u0430.",
            "upload_limit_exceeded": "\u0412\u0430\u043c \u0434\u043e\u0437\u0432\u043e\u043b\u0435\u043d\u043e \u0437\u0430\u0432\u0430\u043d\u0442\u0430\u0436\u0443\u0432\u0430\u0442\u0438 \u043b\u0438\u0448\u0435 1 \u0444\u0430\u0439\u043b \u043d\u0430 \u0441\u0435\u0440\u0432\u0435\u0440.",
            "http_error": "\u0412\u0456\u0434 \u0441\u0435\u0440\u0432\u0435\u0440\u0430 \u043e\u0442\u0440\u0438\u043c\u0430\u043d\u043e \u043d\u0435\u0441\u043f\u043e\u0434\u0456\u0432\u0430\u043d\u0443 \u0432\u0456\u0434\u043f\u043e\u0432\u0456\u0434\u044c. \u0424\u0430\u0439\u043b \u043c\u043e\u0436\u043b\u0438\u0432\u043e \u043d\u0435 \u0431\u0443\u0432 \u0437\u0430\u0432\u0430\u043d\u0442\u0430\u0436\u0435\u043d\u0438\u0439 \u043a\u043e\u0440\u0435\u043a\u0442\u043d\u043e. \u041f\u0435\u0440\u0435\u0437\u0430\u0432\u0430\u043d\u0442\u0430\u0436\u0442\u0435 \u0441\u0442\u043e\u0440\u0456\u043d\u043a\u0443 \u0430\u0431\u043e \u043f\u0435\u0440\u0435\u0432\u0456\u0440\u0442\u0435 \u043c\u0435\u0434\u0456\u0430\u0442\u0435\u043a\u0443.",
            "http_error_image": "The server cannot process the image. This can happen if the server is busy or does not have enough resources to complete the task. Uploading a smaller image may help. Suggested maximum size is 2560 pixels.",
            "upload_failed": "\u0417\u0430\u0432\u0430\u043d\u0442\u0430\u0436\u0435\u043d\u043d\u044f \u043d\u0430 \u0441\u0435\u0440\u0432\u0435\u0440 \u043d\u0435\u0432\u0434\u0430\u043b\u0435.",
            "big_upload_failed": "\u0421\u043f\u0440\u043e\u0431\u0443\u0439\u0442\u0435 \u0437\u0430\u0432\u0430\u043d\u0442\u0430\u0436\u0438\u0442\u0438 \u0444\u0430\u0439\u043b \u0447\u0435\u0440\u0435\u0437 %1$s\u0431\u0440\u0430\u0443\u0437\u0435\u0440\u043d\u0438\u0439 \u0437\u0430\u0432\u0430\u043d\u0442\u0430\u0436\u0443\u0432\u0430\u0447%2$s.",
            "big_upload_queued": "\u0420\u043e\u0437\u043c\u0456\u0440 \u0444\u0430\u0439\u043b\u0443 \u00ab%s\u00bb \u043f\u0435\u0440\u0435\u0432\u0438\u0449\u0443\u0454 \u043c\u0430\u043a\u0441\u0438\u043c\u0430\u043b\u044c\u043d\u0438\u0439 \u0434\u043b\u044f \u0431\u0430\u0433\u0430\u0442\u043e\u0444\u0430\u0439\u043b\u043e\u0432\u043e\u0433\u043e \u0437\u0430\u0432\u0430\u043d\u0442\u0430\u0436\u0443\u0432\u0430\u0447\u0430 \u0432 \u043f\u043e\u0454\u0434\u043d\u0430\u043d\u043d\u0456 \u0437 \u0412\u0430\u0448\u0438\u043c \u0431\u0440\u0430\u0443\u0437\u0435\u0440\u043e\u043c.",
            "io_error": "\u041f\u043e\u043c\u0438\u043b\u043a\u0430 \u0447\u0438\u0442\u0430\u043d\u043d\u044f\/\u0437\u0430\u043f\u0438\u0441\u0443.",
            "security_error": "\u041f\u043e\u043c\u0438\u043b\u043a\u0430 \u0431\u0435\u0437\u043f\u0435\u043a\u0438.",
            "file_cancelled": "\u0424\u0430\u0439\u043b \u0432\u0456\u0434\u0445\u0438\u043b\u0435\u043d\u043e.",
            "upload_stopped": "\u0417\u0430\u0432\u0430\u043d\u0442\u0430\u0436\u0435\u043d\u043d\u044f \u043f\u0440\u0438\u043f\u0438\u043d\u0435\u043d\u043e.",
            "dismiss": "\u0412\u0456\u0434\u0445\u0438\u043b\u0438\u0442\u0438",
            "crunching": "\u0417\u0430\u0432\u0430\u043d\u0442\u0430\u0436\u0435\u043d\u043d\u044f\u2026",
            "deleted": "\u043f\u0435\u0440\u0435\u043c\u0456\u0449\u0435\u043d\u043e \u0434\u043e \u043a\u043e\u0448\u0438\u043a\u0430.",
            "error_uploading": "\u0424\u0430\u0439\u043b \u00ab%s\u00bb \u043d\u0435 \u0432\u0434\u0430\u043b\u043e\u0441\u044f \u0437\u0430\u0432\u0430\u043d\u0442\u0430\u0436\u0438\u0442\u0438.",
            "unsupported_image": "\u0426\u0435 \u0437\u043e\u0431\u0440\u0430\u0436\u0435\u043d\u043d\u044f \u043d\u0435 \u043c\u043e\u0436\u0435 \u0431\u0443\u0442\u0438 \u043f\u043e\u043a\u0430\u0437\u0430\u043d\u043e \u0432 \u0431\u0440\u0430\u0443\u0437\u0435\u0440\u0456. \u0414\u043b\u044f \u043a\u0440\u0430\u0449\u0438\u0445 \u0440\u0435\u0437\u0443\u043b\u044c\u0442\u0430\u0442\u0456\u0432 \u043f\u0435\u0440\u0435\u0432\u0435\u0434\u0456\u0442\u044c \u0439\u043e\u0433\u043e \u0432 \u0444\u043e\u0440\u043c\u0430\u0442 JPEG \u043f\u0435\u0440\u0435\u0434 \u0437\u0430\u0432\u0430\u043d\u0442\u0430\u0436\u0435\u043d\u043d\u044f\u043c.",
            "noneditable_image": "This image cannot be processed by the web server. Convert it to JPEG or PNG before uploading.",
            "file_url_copied": "The file URL has been copied to your clipboard"
        };
        var _wpPluploadSettings = {
            "defaults": {
                "file_data_name": "async-upload",
                "url": "\/wp-admin\/async-upload.php",
                "filters": {
                    "max_file_size": "536870912b",
                    "mime_types": [{
                        "extensions": "jpg,jpeg,jpe,gif,png,bmp,tiff,tif,webp,ico,heic,asf,asx,wmv,wmx,wm,avi,divx,flv,mov,qt,mpeg,mpg,mpe,mp4,m4v,ogv,webm,mkv,3gp,3gpp,3g2,3gp2,txt,asc,c,cc,h,srt,csv,tsv,ics,rtx,css,vtt,dfxp,mp3,m4a,m4b,aac,ra,ram,wav,ogg,oga,flac,mid,midi,wma,wax,mka,rtf,pdf,class,tar,zip,gz,gzip,rar,7z,psd,xcf,doc,pot,pps,ppt,wri,xla,xls,xlt,xlw,mdb,mpp,docx,docm,dotx,dotm,xlsx,xlsm,xlsb,xltx,xltm,xlam,pptx,pptm,ppsx,ppsm,potx,potm,ppam,sldx,sldm,onetoc,onetoc2,onetmp,onepkg,oxps,xps,odt,odp,ods,odg,odc,odb,odf,wp,wpd,key,numbers,pages"
                    }]
                },
                "heic_upload_error": true,
                "multipart_params": {
                    "action": "upload-attachment",
                    "_wpnonce": "cd8480853d"
                }
            },
            "browser": {
                "mobile": true,
                "supported": true
            },
            "limitExceeded": false
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="js/wp-plupload.min.js" id="wp-plupload-js"></script>
    <script type="text/javascript" src="js/core.min.js" id="jquery-ui-core-js"></script>
    <script type="text/javascript" src="js/mouse.min.js" id="jquery-ui-mouse-js"></script>
    <script type="text/javascript" src="js/sortable.min.js" id="jquery-ui-sortable-js"></script>
    <script type="text/javascript" id="mediaelement-core-js-before">
        var mejsL10n = {
            "language": "uk",
            "strings": {
                "mejs.download-file": "\u0417\u0430\u0432\u0430\u043d\u0442\u0430\u0436\u0438\u0442\u0438 \u0444\u0430\u0439\u043b",
                "mejs.install-flash": "Flash player \u043f\u043b\u0430\u0433\u0456\u043d \u0431\u0443\u0432 \u0432\u0438\u043c\u043a\u043d\u0435\u043d\u0438\u0439 \u0430\u0431\u043e \u043d\u0435 \u0431\u0443\u0432 \u0432\u0441\u0442\u0430\u043d\u043e\u0432\u043b\u0435\u043d\u0438\u0439 \u0443 \u0432\u0430\u0448\u043e\u043c\u0443 \u0431\u0440\u0430\u0443\u0437\u0435\u0440\u0456. \u0411\u0443\u0434\u044c \u043b\u0430\u0441\u043a\u0430, \u0432\u0432\u0456\u043c\u043a\u043d\u0456\u0442\u044c \u043f\u043b\u0430\u0433\u0456\u043d Flash player \u0430\u0431\u043e \u0437\u0430\u0432\u0430\u043d\u0442\u0430\u0436\u0442\u0435 \u043e\u0441\u0442\u0430\u043d\u043d\u044e \u0432\u0435\u0440\u0441\u0456\u044e \u0437 https:\/\/get.adobe.com\/flashplayer\/",
                "mejs.fullscreen": "\u041f\u043e\u0432\u043d\u0438\u0439 \u0435\u043a\u0440\u0430\u043d",
                "mejs.play": "\u0412\u0456\u0434\u0442\u0432\u043e\u0440\u0438\u0442\u0438",
                "mejs.pause": "\u041f\u0440\u0438\u0437\u0443\u043f\u0438\u043d\u0438\u0442\u0438",
                "mejs.time-slider": "\u0428\u043a\u0430\u043b\u0430 \u0447\u0430\u0441\u0443",
                "mejs.time-help-text": "\u0412\u0438\u043a\u043e\u0440\u0438\u0441\u0442\u043e\u0432\u0443\u0439\u0442\u0435 \u043a\u043b\u0430\u0432\u0456\u0448\u0456 \u0437\u0456 \u0441\u0442\u0440\u0456\u043b\u043a\u0430\u043c\u0438 \u041b\u0456\u0432\u043e\u0440\u0443\u0447\/\u041f\u0440\u0430\u0432\u043e\u0440\u0443\u0447 \u0434\u043b\u044f \u043f\u0435\u0440\u0435\u043c\u0456\u0449\u0435\u043d\u043d\u044f \u043d\u0430 \u043e\u0434\u043d\u0443 \u0441\u0435\u043a\u0443\u043d\u0434\u0443, \u0442\u0430 \u0412\u0433\u043e\u0440\u0443\/\u0412\u043d\u0438\u0437 \u0434\u043b\u044f \u043f\u0435\u0440\u0435\u043c\u0456\u0449\u0435\u043d\u043d\u044f \u043d\u0430 \u0434\u0435\u0441\u044f\u0442\u044c \u0441\u0435\u043a\u0443\u043d\u0434.",
                "mejs.live-broadcast": "\u041f\u0440\u044f\u043c\u0430 \u0442\u0440\u0430\u043d\u0441\u043b\u044f\u0446\u0456\u044f",
                "mejs.volume-help-text": "\u0412\u0438\u043a\u043e\u0440\u0438\u0441\u0442\u043e\u0432\u0443\u0439\u0442\u0435 \u043a\u043b\u0430\u0432\u0456\u0448\u0456 \u0437\u0456 \u0441\u0442\u0440\u0456\u043b\u043a\u0430\u043c\u0438 \u0412\u0433\u043e\u0440\u0443\/\u0412\u043d\u0438\u0437 \u0434\u043b\u044f \u0437\u0431\u0456\u043b\u044c\u0448\u0435\u043d\u043d\u044f \u0447\u0438 \u0437\u043c\u0435\u043d\u0448\u0435\u043d\u043d\u044f \u0433\u0443\u0447\u043d\u043e\u0441\u0442\u0456.",
                "mejs.unmute": "\u0423\u0432\u0456\u043c\u043a\u043d\u0443\u0442\u0438 \u0437\u0432\u0443\u043a",
                "mejs.mute": "\u0412\u0438\u043c\u043a\u043d\u0443\u0442\u0438 \u0437\u0432\u0443\u043a",
                "mejs.volume-slider": "\u0420\u0435\u0433\u0443\u043b\u044f\u0442\u043e\u0440 \u0433\u0443\u0447\u043d\u043e\u0441\u0442\u0456",
                "mejs.video-player": "\u0412\u0456\u0434\u0435\u043e\u043f\u0440\u043e\u0433\u0440\u0430\u0432\u0430\u0447",
                "mejs.audio-player": "\u0410\u0443\u0434\u0456\u043e\u043f\u0440\u043e\u0433\u0440\u0430\u0432\u0430\u0447",
                "mejs.captions-subtitles": "\u0421\u0443\u0431\u0442\u0438\u0442\u0440\u0438",
                "mejs.captions-chapters": "\u0420\u043e\u0437\u0434\u0456\u043b\u0438",
                "mejs.none": "\u041d\u0435\u043c\u0430\u0454",
                "mejs.afrikaans": "\u0410\u0444\u0440\u0438\u043a\u0430\u043d\u0441\u044c\u043a\u0438\u0439",
                "mejs.albanian": "\u0410\u043b\u0431\u0430\u043d\u0441\u044c\u043a\u0438\u0439",
                "mejs.arabic": "\u0410\u0440\u0430\u0431\u0441\u044c\u043a\u0438\u0439",
                "mejs.belarusian": "\u0411\u0456\u043b\u043e\u0440\u0443\u0441\u044c\u043a\u0438\u0439",
                "mejs.bulgarian": "\u0411\u043e\u043b\u0433\u0430\u0440\u0441\u044c\u043a\u0438\u0439",
                "mejs.catalan": "\u041a\u0430\u0442\u0430\u043b\u043e\u043d\u0441\u044c\u043a\u0438\u0439",
                "mejs.chinese": "\u041a\u0438\u0442\u0430\u0439\u0441\u044c\u043a\u0438\u0439",
                "mejs.chinese-simplified": "\u041a\u0438\u0442\u0430\u0439\u0441\u044c\u043a\u0438\u0439 (\u0441\u043f\u0440\u043e\u0449\u0435\u043d\u0438\u0439)",
                "mejs.chinese-traditional": "\u041a\u0438\u0442\u0430\u0439\u0441\u044c\u043a\u0438\u0439 (\u0442\u0440\u0430\u0434\u0438\u0446\u0456\u0439\u043d\u0438\u0439)",
                "mejs.croatian": "\u0425\u043e\u0440\u0432\u0430\u0442\u0441\u044c\u043a\u0438\u0439",
                "mejs.czech": "\u0427\u0435\u0441\u044c\u043a\u0438\u0439",
                "mejs.danish": "\u0414\u0430\u043d\u0441\u044c\u043a\u0438\u0439",
                "mejs.dutch": "\u041d\u0456\u0434\u0435\u0440\u043b\u0430\u043d\u0434\u0441\u044c\u043a\u0438\u0439 (\u0433\u043e\u043b\u043b\u0430\u043d\u0434\u0441\u044c\u043a\u0438\u0439)",
                "mejs.english": "\u0410\u043d\u0433\u043b\u0456\u0439\u0441\u044c\u043a\u0438\u0439",
                "mejs.estonian": "\u0415\u0441\u0442\u043e\u043d\u0441\u044c\u043a\u0438\u0439",
                "mejs.filipino": "\u0424\u0456\u043b\u0456\u043f\u043f\u0456\u043d\u0441\u044c\u043a\u0438\u0439",
                "mejs.finnish": "\u0424\u0456\u043d\u0441\u044c\u043a\u0438\u0439",
                "mejs.french": "\u0424\u0440\u0430\u043d\u0446\u0443\u0437\u044c\u043a\u0438\u0439",
                "mejs.galician": "\u0413\u0430\u043b\u0456\u0441\u0456\u0439\u0441\u044c\u043a\u0438\u0439",
                "mejs.german": "\u041d\u0456\u043c\u0435\u0446\u044c\u043a\u0438\u0439",
                "mejs.greek": "\u0413\u0440\u0435\u0446\u044c\u043a\u0438\u0439",
                "mejs.haitian-creole": "\u0413\u0430\u0457\u0442\u044f\u043d\u0441\u044c\u043a\u0438\u0439 \u043a\u0440\u0435\u043e\u043b\u044c\u0441\u044c\u043a\u0438\u0439",
                "mejs.hebrew": "\u0406\u0432\u0440\u0438\u0442",
                "mejs.hindi": "\u0425\u0456\u043d\u0434\u0456",
                "mejs.hungarian": "\u0423\u0433\u043e\u0440\u0441\u044c\u043a\u0438\u0439",
                "mejs.icelandic": "\u0406\u0441\u043b\u0430\u043d\u0434\u0441\u044c\u043a\u0438\u0439",
                "mejs.indonesian": "\u0406\u043d\u0434\u043e\u043d\u0435\u0437\u0456\u0439\u0441\u044c\u043a\u0438\u0439",
                "mejs.irish": "\u0406\u0440\u043b\u0430\u043d\u0434\u0441\u044c\u043a\u0438\u0439",
                "mejs.italian": "\u0406\u0442\u0430\u043b\u0456\u0439\u0441\u044c\u043a\u0438\u0439",
                "mejs.japanese": "\u042f\u043f\u043e\u043d\u0441\u044c\u043a\u0438\u0439",
                "mejs.korean": "\u041a\u043e\u0440\u0435\u0439\u0441\u044c\u043a\u0438\u0439",
                "mejs.latvian": "\u041b\u0430\u0442\u0432\u0456\u0439\u0441\u044c\u043a\u0438\u0439",
                "mejs.lithuanian": "\u041b\u0438\u0442\u043e\u0432\u0441\u044c\u043a\u0438\u0439",
                "mejs.macedonian": "\u041c\u0430\u043a\u0435\u0434\u043e\u043d\u0441\u044c\u043a\u0438\u0439",
                "mejs.malay": "\u041c\u0430\u043b\u0430\u0439\u0441\u044c\u043a\u0438\u0439",
                "mejs.maltese": "\u041c\u0430\u043b\u044c\u0442\u0456\u0439\u0441\u044c\u043a\u0438\u0439",
                "mejs.norwegian": "\u041d\u043e\u0440\u0432\u0435\u0436\u0441\u044c\u043a\u0438\u0439",
                "mejs.persian": "\u041f\u0435\u0440\u0441\u044c\u043a\u0438\u0439",
                "mejs.polish": "\u041f\u043e\u043b\u044c\u0441\u044c\u043a\u0438\u0439",
                "mejs.portuguese": "\u041f\u043e\u0440\u0442\u0443\u0433\u0430\u043b\u044c\u0441\u044c\u043a\u0438\u0439",
                "mejs.romanian": "\u0420\u0443\u043c\u0443\u043d\u0441\u044c\u043a\u0438\u0439",
                "mejs.russian": "\u0420\u043e\u0441\u0456\u0439\u0441\u044c\u043a\u0438\u0439",
                "mejs.serbian": "\u0421\u0435\u0440\u0431\u0441\u044c\u043a\u0438\u0439",
                "mejs.slovak": "\u0421\u043b\u043e\u0432\u0430\u0446\u044c\u043a\u0438\u0439",
                "mejs.slovenian": "\u0421\u043b\u043e\u0432\u0435\u043d\u0441\u044c\u043a\u0438\u0439",
                "mejs.spanish": "\u0406\u0441\u043f\u0430\u043d\u0441\u044c\u043a\u0438\u0439",
                "mejs.swahili": "\u0421\u0443\u0430\u0445\u0456\u043b\u0456",
                "mejs.swedish": "\u0428\u0432\u0435\u0434\u0441\u044c\u043a\u0438\u0439",
                "mejs.tagalog": "\u0422\u0430\u0433\u0430\u043b\u043e\u0433",
                "mejs.thai": "\u0422\u0430\u0439\u0441\u044c\u043a\u0438\u0439",
                "mejs.turkish": "\u0422\u0443\u0440\u0435\u0446\u044c\u043a\u0438\u0439",
                "mejs.ukrainian": "\u0423\u043a\u0440\u0430\u0457\u043d\u0441\u044c\u043a\u0430",
                "mejs.vietnamese": "\u0412'\u0454\u0442\u043d\u0430\u043c\u0441\u044c\u043a\u0438\u0439",
                "mejs.welsh": "\u0412\u0430\u043b\u043b\u0456\u0439\u0441\u044c\u043a\u0438\u0439",
                "mejs.yiddish": "\u0406\u0434\u0438\u0448"
            }
        };
    </script>
    <script type="text/javascript" src="js/mediaelement-and-player.min.js" id="mediaelement-core-js"></script>
    <script type="text/javascript" src="js/mediaelement-migrate.min.js" id="mediaelement-migrate-js"></script>
    <script type="text/javascript" id="mediaelement-js-extra">
        /* <![CDATA[ */
        var _wpmejsSettings = {
            "pluginPath": "\/wp-includes\/js\/mediaelement\/",
            "classPrefix": "mejs-",
            "stretching": "responsive"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="js/wp-mediaelement.min.js" id="wp-mediaelement-js"></script>
    <script type="text/javascript" src="js/api-request.min.js" id="wp-api-request-js"></script>
    <script type="text/javascript" src="js/regenerator-runtime.min.js" id="regenerator-runtime-js"></script>
    <script type="text/javascript" src="js/wp-polyfill.min.js" id="wp-polyfill-js"></script>
    <script type="text/javascript" src="js/dom-ready.min.js" id="wp-dom-ready-js"></script>
    <script type="text/javascript" src="js/hooks.min.js" id="wp-hooks-js"></script>
    <script type="text/javascript" src="js/i18n.min.js" id="wp-i18n-js"></script>
    <script type="text/javascript" id="wp-i18n-js-after">
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
    </script>
    <script type="text/javascript" id="wp-a11y-js-translations">
        (function(domain, translations) {
            var localeData = translations.locale_data[domain] || translations.locale_data.messages;
            localeData[""].domain = domain;
            wp.i18n.setLocaleData(localeData, domain);
        })("default", {
            "translation-revision-date": "2021-07-24 15:27:43+0000",
            "generator": "GlotPress\/3.0.0-alpha.2",
            "domain": "messages",
            "locale_data": {
                "messages": {
                    "": {
                        "domain": "messages",
                        "plural-forms": "nplurals=3; plural=(n % 10 == 1 && n % 100 != 11) ? 0 : ((n % 10 >= 2 && n % 10 <= 4 && (n % 100 < 12 || n % 100 > 14)) ? 1 : 2);",
                        "lang": "uk_UA"
                    },
                    "Notifications": ["\u0421\u043f\u043e\u0432\u0456\u0449\u0435\u043d\u043d\u044f"]
                }
            },
            "comment": {
                "reference": "wp-includes\/js\/dist\/a11y.js"
            }
        });
    </script>
    <script type="text/javascript" src="js/a11y.min.js" id="wp-a11y-js"></script>
    <script type="text/javascript" src="js/clipboard.min.js" id="clipboard-js"></script>
    <script type="text/javascript" id="media-views-js-extra">
        /* <![CDATA[ */
        var _wpMediaViewsL10n = {
            "mediaFrameDefaultTitle": "\u041c\u0435\u0434\u0456\u0430\u0444\u0430\u0439\u043b\u0438",
            "url": "URL",
            "addMedia": "\u0414\u043e\u0434\u0430\u0442\u0438 \u043c\u0435\u0434\u0456\u0430",
            "search": "\u041f\u043e\u0448\u0443\u043a",
            "select": "\u041e\u0431\u0440\u0430\u0442\u0438",
            "cancel": "\u0421\u043a\u0430\u0441\u0443\u0432\u0430\u0442\u0438",
            "update": "\u041e\u043d\u043e\u0432\u0438\u0442\u0438",
            "replace": "\u0417\u0430\u043c\u0456\u043d\u0438\u0442\u0438",
            "remove": "\u0412\u0438\u0434\u0430\u043b\u0438\u0442\u0438",
            "back": "\u041d\u0430\u0437\u0430\u0434",
            "selected": "\u0412\u0438\u0431\u0440\u0430\u043d\u043e: %d",
            "dragInfo": "\u0412\u0438\u043a\u043e\u0440\u0438\u0441\u0442\u043e\u0432\u0443\u0439\u0442\u0435 \u043f\u0435\u0440\u0435\u0442\u044f\u0433\u0443\u0432\u0430\u043d\u043d\u044f \u0434\u043b\u044f \u0432\u043f\u043e\u0440\u044f\u0434\u043a\u0443\u0432\u0430\u043d\u043d\u044f \u043c\u0435\u0434\u0456\u0430 \u0444\u0430\u0439\u043b\u0456\u0432.",
            "uploadFilesTitle": "\u0417\u0430\u0432\u0430\u043d\u0442\u0430\u0436\u0438\u0442\u0438 \u0444\u0430\u0439\u043b\u0438",
            "uploadImagesTitle": "\u0417\u0430\u0432\u0430\u043d\u0442\u0430\u0436\u0438\u0442\u0438 \u0437\u043e\u0431\u0440\u0430\u0436\u0435\u043d\u043d\u044f",
            "mediaLibraryTitle": "\u041c\u0435\u0434\u0456\u0430 \u0431\u0456\u0431\u043b\u0456\u043e\u0442\u0435\u043a\u0430",
            "insertMediaTitle": "\u0414\u043e\u0434\u0430\u0442\u0438 \u043c\u0435\u0434\u0456\u0430",
            "createNewGallery": "\u0421\u0442\u0432\u043e\u0440\u0438\u0442\u0438 \u043d\u043e\u0432\u0443 \u0433\u0430\u043b\u0435\u0440\u0435\u044e",
            "createNewPlaylist": "\u0421\u0442\u0432\u043e\u0440\u0438\u0442\u0438 \u043d\u043e\u0432\u0438\u0439 \u0441\u043f\u0438\u0441\u043e\u043a \u0432\u0456\u0434\u0442\u0432\u043e\u0440\u0435\u043d\u043d\u044f",
            "createNewVideoPlaylist": "\u0421\u0442\u0432\u043e\u0440\u0438\u0442\u0438 \u043d\u043e\u0432\u0438\u0439 \u0441\u043f\u0438\u0441\u043e\u043a \u0432\u0456\u0434\u0442\u0432\u043e\u0440\u0435\u043d\u043d\u044f \u0432\u0456\u0434\u0435\u043e",
            "returnToLibrary": "\u2190 \u041f\u0435\u0440\u0435\u0439\u0442\u0438 \u0432 \u0431\u0456\u0431\u043b\u0456\u043e\u0442\u0435\u043a\u0443",
            "allMediaItems": "\u0412\u0441\u0456 \u043c\u0435\u0434\u0456\u0430\u0444\u0430\u0439\u043b\u0438",
            "allDates": "\u0412\u0441\u0456 \u0434\u0430\u0442\u0438",
            "noItemsFound": "\u0415\u043b\u0435\u043c\u0435\u043d\u0442\u0456\u0432 \u043d\u0435 \u0437\u043d\u0430\u0439\u0434\u0435\u043d\u043e.",
            "insertIntoPost": "\u0412\u0441\u0442\u0430\u0432\u0438\u0442\u0438 \u0443 \u0437\u0430\u043f\u0438\u0441",
            "unattached": "Unattached",
            "mine": "\u041c\u043e\u0457",
            "trash": "\u041a\u043e\u0448\u0438\u043a",
            "uploadedToThisPost": "\u0417\u0430\u0432\u0430\u043d\u0442\u0430\u0436\u0435\u043d\u043e \u0434\u043e \u0446\u044c\u043e\u0433\u043e \u0437\u0430\u043f\u0438\u0441\u0443.",
            "warnDelete": "\u0412\u0438 \u0437\u0431\u0438\u0440\u0430\u0454\u0442\u0435\u0441\u044f \u043d\u0430\u0437\u0430\u0432\u0436\u0434\u0438 \u0432\u0438\u0434\u0430\u043b\u0438\u0442\u0438 \u0446\u0435\u0439 \u0435\u043b\u0435\u043c\u0435\u043d\u0442 \u0437 \u0441\u0430\u0439\u0442\u0443.\n\u0426\u044f \u0434\u0456\u044f \u043d\u0435 \u043c\u043e\u0436\u0435 \u0431\u0443\u0442\u0438 \u0441\u043a\u0430\u0441\u043e\u0432\u0430\u043d\u0430.\n'\u0421\u043a\u0430\u0441\u0443\u0432\u0430\u0442\u0438' \u0434\u043b\u044f \u0441\u043a\u0430\u0441\u0443\u0432\u0430\u043d\u043d\u044f, 'OK' \u0434\u043b\u044f \u0432\u0438\u0434\u0430\u043b\u0435\u043d\u043d\u044f.",
            "warnBulkDelete": "\u0412\u0438 \u0437\u0431\u0438\u0440\u0430\u0454\u0442\u0435\u0441\u044f \u043d\u0430\u0437\u0430\u0432\u0436\u0434\u0438 \u0432\u0438\u0434\u0430\u043b\u0438\u0442\u0438 \u0446\u0456 \u0435\u043b\u0435\u043c\u0435\u043d\u0442\u0438 \u0437 \u0441\u0430\u0439\u0442\u0443.\n\u0426\u044f \u0434\u0456\u044f \u043d\u0435 \u043c\u043e\u0436\u0435 \u0431\u0443\u0442\u0438 \u0441\u043a\u0430\u0441\u043e\u0432\u0430\u043d\u0430.\n'\u0421\u043a\u0430\u0441\u0443\u0432\u0430\u0442\u0438' \u0434\u043b\u044f \u0441\u043a\u0430\u0441\u0443\u0432\u0430\u043d\u043d\u044f, 'OK' \u0434\u043b\u044f \u0432\u0438\u0434\u0430\u043b\u0435\u043d\u043d\u044f.",
            "warnBulkTrash": "\u0412\u0438 \u0437\u0431\u0438\u0440\u0430\u0454\u0442\u0435\u0441\u044f \u043f\u0435\u0440\u0435\u043c\u0456\u0441\u0442\u0438\u0442\u0438 \u0434\u043e \u043a\u043e\u0448\u0438\u043a\u0430 \u0446\u0456 \u0435\u043b\u0435\u043c\u0435\u043d\u0442\u0438.\n\u041d\u0430\u0442\u0438\u0441\u043d\u0456\u0442\u044c \"\u0421\u043a\u0430\u0441\u0443\u0432\u0430\u0442\u0438\", \u0449\u043e\u0431 \u043d\u0435 \u0440\u043e\u0431\u0438\u0442\u0438 \u0446\u044c\u043e\u0433\u043e, \u0430\u0431\u043e \"\u0414\u043e\u0431\u0440\u0435\", \u0449\u043e\u0431 \u0432\u0438\u0434\u0430\u043b\u0438\u0442\u0438.",
            "bulkSelect": "\u041e\u0431\u0440\u0430\u0442\u0438 \u0434\u0435\u043a\u0456\u043b\u044c\u043a\u0430",
            "trashSelected": "\u0412\u0438\u0434\u0430\u043b\u0438\u0442\u0438",
            "restoreSelected": "\u0412\u0456\u0434\u043d\u043e\u0432\u0438\u0442\u0438 \u0437 \u043a\u043e\u0448\u0438\u043a\u0430",
            "deletePermanently": "\u0412\u0438\u0434\u0430\u043b\u0438\u0442\u0438 \u043e\u0441\u0442\u0430\u0442\u043e\u0447\u043d\u043e",
            "errorDeleting": "Error in deleting the attachment.",
            "apply": "\u0417\u0430\u0441\u0442\u043e\u0441\u0443\u0432\u0430\u0442\u0438",
            "filterByDate": "\u0424\u0456\u043b\u044c\u0442\u0440 \u0437\u0430 \u0434\u0430\u0442\u043e\u044e",
            "filterByType": "\u0424\u0456\u043b\u044c\u0442\u0440 \u0437\u0430 \u0442\u0438\u043f\u043e\u043c",
            "searchLabel": "\u041f\u043e\u0448\u0443\u043a",
            "searchMediaLabel": "\u041f\u043e\u0448\u0443\u043a \u043c\u0435\u0434\u0456\u0430\u0444\u0430\u0439\u043b\u0456\u0432",
            "searchMediaPlaceholder": "\u0428\u0443\u043a\u0430\u0442\u0438 \u043c\u0435\u0434\u0456\u0430 \u043e\u0431'\u0454\u043a\u0442\u0438 ...",
            "mediaFound": "\u0417\u043d\u0430\u0439\u0434\u0435\u043d\u043e \u043c\u0435\u0434\u0456\u0430\u0435\u043b\u0435\u043c\u0435\u043d\u0442\u0456\u0432: %d",
            "noMedia": "\u041c\u0435\u0434\u0456\u0430\u0444\u0430\u0439\u043b\u0456\u0432 \u043d\u0435 \u0437\u043d\u0430\u0439\u0434\u0435\u043d\u043e.",
            "noMediaTryNewSearch": "\u041c\u0435\u0434\u0456\u0430\u0435\u043b\u0435\u043c\u0435\u043d\u0442\u0456\u0432 \u043d\u0435 \u0437\u043d\u0430\u0439\u0434\u0435\u043d\u043e. \u0421\u043f\u0440\u043e\u0431\u0443\u0439\u0442\u0435 \u0456\u043d\u0448\u0438\u0439 \u0437\u0430\u043f\u0438\u0442.",
            "attachmentDetails": "\u0406\u043d\u0444\u043e\u0440\u043c\u0430\u0446\u0456\u044f \u043f\u0440\u043e \u0434\u043e\u0434\u0430\u0442\u043e\u043a",
            "insertFromUrlTitle": "\u0412\u0441\u0442\u0430\u0432\u0438\u0442\u0438 \u0437 \u0441\u0430\u0439\u0442\u0443",
            "setFeaturedImageTitle": "\u0413\u043e\u043b\u043e\u0432\u043d\u0435 \u0437\u043e\u0431\u0440\u0430\u0436\u0435\u043d\u043d\u044f",
            "setFeaturedImage": "\u0412\u0441\u0442\u0430\u043d\u043e\u0432\u0438\u0442\u0438 \u0437\u043e\u0431\u0440\u0430\u0436\u0435\u043d\u043d\u044f \u0437\u0430\u043f\u0438\u0441\u0443",
            "createGalleryTitle": "\u0421\u0442\u0432\u043e\u0440\u0438\u0442\u0438 \u0433\u0430\u043b\u0435\u0440\u0435\u044e",
            "editGalleryTitle": "\u0420\u0435\u0434\u0430\u0433\u0443\u0432\u0430\u0442\u0438 \u0433\u0430\u043b\u0435\u0440\u0435\u044e",
            "cancelGalleryTitle": "\u2190 \u0421\u043a\u0430\u0441\u0443\u0432\u0430\u0442\u0438 \u0441\u0442\u0432\u043e\u0440\u0435\u043d\u043d\u044f \u0433\u0430\u043b\u0435\u0440\u0435\u0457",
            "insertGallery": "\u0412\u0441\u0442\u0430\u0432\u0438\u0442\u0438 \u0433\u0430\u043b\u0435\u0440\u0435\u044e",
            "updateGallery": "\u041e\u043d\u043e\u0432\u0438\u0442\u0438 \u0433\u0430\u043b\u0435\u0440\u0435\u044e",
            "addToGallery": "\u0414\u043e\u0434\u0430\u0442\u0438 \u0432 \u0433\u0430\u043b\u0435\u0440\u0435\u044e",
            "addToGalleryTitle": "\u0414\u043e\u0434\u0430\u0442\u0438 \u0432 \u0433\u0430\u043b\u0435\u0440\u0435\u044e",
            "reverseOrder": "\u0423 \u0437\u0432\u043e\u0440\u043e\u0442\u043d\u044c\u043e\u043c\u0443 \u043f\u043e\u0440\u044f\u0434\u043a\u0443",
            "imageDetailsTitle": "\u0414\u0435\u0442\u0430\u043b\u0456 \u0437\u043e\u0431\u0440\u0430\u0436\u0435\u043d\u043d\u044f",
            "imageReplaceTitle": "\u0417\u0430\u043c\u0456\u043d\u0438\u0442\u0438 \u0437\u043e\u0431\u0440\u0430\u0436\u0435\u043d\u043d\u044f",
            "imageDetailsCancel": "\u0421\u043a\u0430\u0441\u0443\u0432\u0430\u0442\u0438 \u0440\u0435\u0434\u0430\u0433\u0443\u0432\u0430\u043d\u043d\u044f",
            "editImage": "\u0420\u0435\u0434\u0430\u0433\u0443\u0432\u0430\u0442\u0438 \u0437\u043e\u0431\u0440\u0430\u0436\u0435\u043d\u043d\u044f",
            "chooseImage": "\u041e\u0431\u0440\u0430\u0442\u0438 \u0437\u043e\u0431\u0440\u0430\u0436\u0435\u043d\u043d\u044f",
            "selectAndCrop": "\u0412\u0438\u0431\u0440\u0430\u0442\u0438 \u0442\u0430 \u043e\u0431\u0440\u0456\u0437\u0430\u0442\u0438",
            "skipCropping": "\u041d\u0435 \u043e\u0431\u0440\u0456\u0437\u0430\u0442\u0438",
            "cropImage": "\u041e\u0431\u0440\u0456\u0437\u0430\u0442\u0438 \u0437\u043e\u0431\u0440\u0430\u0436\u0435\u043d\u043d\u044f",
            "cropYourImage": "\u041e\u0431\u0440\u0456\u0437\u043a\u0430 \u0437\u043e\u0431\u0440\u0430\u0436\u0435\u043d\u043d\u044f",
            "cropping": "\u041e\u0431\u0440\u043e\u0431\u043a\u0430\u2026",
            "suggestedDimensions": "\u041f\u0440\u043e\u043f\u043e\u043d\u043e\u0432\u0430\u043d\u0438\u0439 \u0440\u043e\u0437\u043c\u0456\u0440 \u0437\u043e\u0431\u0440\u0430\u0436\u0435\u043d\u043d\u044f: %1$s \u043d\u0430 %2$s \u043f\u0456\u043a\u0441\u0435\u043b\u0456\u0432.",
            "cropError": "\u0412\u0438\u043d\u0438\u043a\u043b\u0430 \u043f\u043e\u043c\u0438\u043b\u043a\u0430 \u043f\u0456\u0434 \u0447\u0430\u0441 \u043a\u0430\u0434\u0440\u0443\u0432\u0430\u043d\u043d\u044f \u0437\u043e\u0431\u0440\u0430\u0436\u0435\u043d\u043d\u044f",
            "audioDetailsTitle": "\u0414\u0435\u0442\u0430\u043b\u0456 \u0430\u0443\u0434\u0456\u043e\u0444\u0430\u0439\u043b\u0443",
            "audioReplaceTitle": "\u0417\u0430\u043c\u0456\u043d\u0438\u0442\u0438 \u0430\u0443\u0434\u0456\u043e\u0444\u0430\u0439\u043b",
            "audioAddSourceTitle": "\u0414\u043e\u0434\u0430\u0442\u0438 \u0434\u0436\u0435\u0440\u0435\u043b\u043e \u0430\u0443\u0434\u0456\u043e",
            "audioDetailsCancel": "\u0421\u043a\u0430\u0441\u0443\u0432\u0430\u0442\u0438 \u0440\u0435\u0434\u0430\u0433\u0443\u0432\u0430\u043d\u043d\u044f",
            "videoDetailsTitle": "\u0414\u0435\u0442\u0430\u043b\u0456 \u0432\u0456\u0434\u0435\u043e\u0444\u0430\u0439\u043b\u0443",
            "videoReplaceTitle": "\u0417\u0430\u043c\u0456\u043d\u0438\u0442\u0438 \u0432\u0456\u0434\u0435\u043e\u0444\u0430\u0439\u043b",
            "videoAddSourceTitle": "\u0414\u043e\u0434\u0430\u0442\u0438 \u0434\u0436\u0435\u0440\u0435\u043b\u043e \u0432\u0456\u0434\u0435\u043e",
            "videoDetailsCancel": "\u0421\u043a\u0430\u0441\u0443\u0432\u0430\u0442\u0438 \u0440\u0435\u0434\u0430\u0433\u0443\u0432\u0430\u043d\u043d\u044f",
            "videoSelectPosterImageTitle": "\u0412\u0438\u0431\u0435\u0440\u0456\u0442\u044c \u0437\u043e\u0431\u0440\u0430\u0436\u0435\u043d\u043d\u044f \u043f\u043e\u0441\u0442\u0435\u0440\u0430",
            "videoAddTrackTitle": "\u0414\u043e\u0434\u0430\u0442\u0438 \u0441\u0443\u0431\u0442\u0438\u0442\u0440\u0438",
            "playlistDragInfo": "\u041f\u0435\u0440\u0435\u0442\u044f\u0433\u0443\u0439\u0442\u0435 \u0442\u0440\u0435\u043a\u0438, \u0449\u043e\u0431\u0438 \u0432\u043f\u043e\u0440\u044f\u0434\u043a\u0443\u0432\u0430\u0442\u0438.",
            "createPlaylistTitle": "\u0421\u0442\u0432\u043e\u0440\u0438\u0442\u0438 \u0441\u043f\u0438\u0441\u043e\u043a \u0432\u0456\u0434\u0442\u0432\u043e\u0440\u0435\u043d\u043d\u044f \u0430\u0443\u0434\u0456\u043e",
            "editPlaylistTitle": "\u0420\u0435\u0434\u0430\u0433\u0443\u0432\u0430\u0442\u0438 \u0441\u043f\u0438\u0441\u043e\u043a \u0432\u0456\u0434\u0442\u0432\u043e\u0440\u0435\u043d\u043d\u044f \u0430\u0443\u0434\u0456\u043e",
            "cancelPlaylistTitle": "\u2190 \u0421\u043a\u0430\u0441\u0443\u0432\u0430\u0442\u0438 \u0441\u043f\u0438\u0441\u043e\u043a \u0432\u0456\u0434\u0442\u0432\u043e\u0440\u0435\u043d\u043d\u044f \u0430\u0443\u0434\u0456\u043e",
            "insertPlaylist": "\u0412\u0441\u0442\u0430\u0432\u0438\u0442\u0438 \u0441\u043f\u0438\u0441\u043e\u043a \u0432\u0456\u0434\u0442\u0432\u043e\u0440\u0435\u043d\u043d\u044f \u0430\u0443\u0434\u0456\u043e",
            "updatePlaylist": "\u041e\u043d\u043e\u0432\u0438\u0442\u0438 \u0441\u043f\u0438\u0441\u043e\u043a \u0432\u0456\u0434\u0442\u0432\u043e\u0440\u0435\u043d\u043d\u044f \u0430\u0443\u0434\u0456\u043e",
            "addToPlaylist": "\u0414\u043e\u0434\u0430\u0442\u0438 \u0434\u043e \u0441\u043f\u0438\u0441\u043a\u0443 \u0432\u0456\u0434\u0442\u0432\u043e\u0440\u0435\u043d\u043d\u044f \u0430\u0443\u0434\u0456\u043e",
            "addToPlaylistTitle": "\u0414\u043e\u0434\u0430\u0442\u0438 \u0434\u043e \u0441\u043f\u0438\u0441\u043a\u0443 \u0432\u0456\u0434\u0442\u0432\u043e\u0440\u0435\u043d\u043d\u044f \u0430\u0443\u0434\u0456\u043e",
            "videoPlaylistDragInfo": "\u041f\u0435\u0440\u0435\u0442\u044f\u0433\u0443\u0439\u0442\u0435 \u0432\u0456\u0434\u0435\u043e, \u0449\u043e\u0431\u0438 \u0432\u043f\u043e\u0440\u044f\u0434\u043a\u0443\u0432\u0430\u0442\u0438.",
            "createVideoPlaylistTitle": "\u0421\u0442\u0432\u043e\u0440\u0438\u0442\u0438 \u0441\u043f\u0438\u0441\u043e\u043a \u0432\u0456\u0434\u0442\u0432\u043e\u0440\u0435\u043d\u043d\u044f \u0432\u0456\u0434\u0435\u043e",
            "editVideoPlaylistTitle": "\u0420\u0435\u0434\u0430\u0433\u0443\u0432\u0430\u0442\u0438 \u0441\u043f\u0438\u0441\u043e\u043a \u0432\u0456\u0434\u0442\u0432\u043e\u0440\u0435\u043d\u043d\u044f \u0432\u0456\u0434\u0435\u043e",
            "cancelVideoPlaylistTitle": "\u2190 \u0421\u043a\u0430\u0441\u0443\u0432\u0430\u0442\u0438 \u0441\u043f\u0438\u0441\u043e\u043a \u0432\u0456\u0434\u0442\u0432\u043e\u0440\u0435\u043d\u043d\u044f \u0432\u0456\u0434\u0435\u043e",
            "insertVideoPlaylist": "\u0412\u0441\u0442\u0430\u0432\u0438\u0442\u0438 \u0441\u043f\u0438\u0441\u043e\u043a \u0432\u0456\u0434\u0442\u0432\u043e\u0440\u0435\u043d\u043d\u044f \u0432\u0456\u0434\u0435\u043e",
            "updateVideoPlaylist": "\u041e\u043d\u043e\u0432\u0438\u0442\u0438 \u0441\u043f\u0438\u0441\u043e\u043a \u0432\u0456\u0434\u0442\u0432\u043e\u0440\u0435\u043d\u043d\u044f \u0432\u0456\u0434\u0435\u043e",
            "addToVideoPlaylist": "\u0414\u043e\u0434\u0430\u0442\u0438 \u0434\u043e \u0441\u043f\u0438\u0441\u043a\u0443 \u0432\u0456\u0434\u0442\u0432\u043e\u0440\u0435\u043d\u043d\u044f \u0432\u0456\u0434\u0435\u043e",
            "addToVideoPlaylistTitle": "\u0414\u043e\u0434\u0430\u0442\u0438 \u0434\u043e \u0441\u043f\u0438\u0441\u043a\u0443 \u0432\u0456\u0434\u0442\u0432\u043e\u0440\u0435\u043d\u043d\u044f \u0432\u0456\u0434\u0435\u043e",
            "filterAttachments": "\u0424\u0456\u043b\u044c\u0442\u0440 \u043c\u0435\u0434\u0456\u0430\u0444\u0430\u0439\u043b\u0456\u0432",
            "attachmentsList": "\u0421\u043f\u0438\u0441\u043e\u043a \u043c\u0435\u0434\u0456\u0430\u0444\u0430\u0439\u043b\u0456\u0432",
            "settings": {
                "tabs": [],
                "tabUrl": "https:\/\/perou.store\/wp-admin\/media-upload.php?chromeless=1",
                "mimeTypes": {
                    "image": "\u0417\u043e\u0431\u0440\u0430\u0436\u0435\u043d\u043d\u044f",
                    "audio": "Audio",
                    "video": "Video",
                    "application\/msword,application\/vnd.openxmlformats-officedocument.wordprocessingml.document,application\/vnd.ms-word.document.macroEnabled.12,application\/vnd.ms-word.template.macroEnabled.12,application\/vnd.oasis.opendocument.text,application\/vnd.apple.pages,application\/pdf,application\/vnd.ms-xpsdocument,application\/oxps,application\/rtf,application\/wordperfect,application\/octet-stream": "\u0414\u043e\u043a\u0443\u043c\u0435\u043d\u0442\u0438",
                    "application\/vnd.apple.numbers,application\/vnd.oasis.opendocument.spreadsheet,application\/vnd.ms-excel,application\/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application\/vnd.ms-excel.sheet.macroEnabled.12,application\/vnd.ms-excel.sheet.binary.macroEnabled.12": "\u0415\u043b\u0435\u043a\u0442\u0440\u043e\u043d\u043d\u0456 \u0442\u0430\u0431\u043b\u0438\u0446\u0456",
                    "application\/x-gzip,application\/rar,application\/x-tar,application\/zip,application\/x-7z-compressed": "\u0410\u0440\u0445\u0456\u0432\u0438"
                },
                "captions": true,
                "nonce": {
                    "sendToEditor": "92777905c1"
                },
                "post": {
                    "id": 0
                },
                "defaultProps": {
                    "link": "file",
                    "align": "",
                    "size": ""
                },
                "attachmentCounts": {
                    "audio": 1,
                    "video": 1
                },
                "oEmbedProxyUrl": "https:\/\/perou.store\/wp-json\/oembed\/1.0\/proxy",
                "embedExts": ["mp3", "ogg", "flac", "m4a", "wav", "mp4", "m4v", "webm", "ogv", "flv"],
                "embedMimes": {
                    "mp3": "audio\/mpeg",
                    "ogg": "audio\/ogg",
                    "flac": "audio\/flac",
                    "m4a": "audio\/mpeg",
                    "wav": "audio\/wav",
                    "mp4": "video\/mp4",
                    "m4v": "video\/mp4",
                    "webm": "video\/webm",
                    "ogv": "video\/ogg",
                    "flv": "video\/x-flv"
                },
                "contentWidth": null,
                "months": [{
                    "year": "2023",
                    "month": "1",
                    "text": "\u0421\u0456\u0447\u0435\u043d\u044c 2023"
                }, {
                    "year": "2022",
                    "month": "12",
                    "text": "\u0413\u0440\u0443\u0434\u0435\u043d\u044c 2022"
                }, {
                    "year": "2022",
                    "month": "11",
                    "text": "\u041b\u0438\u0441\u0442\u043e\u043f\u0430\u0434 2022"
                }, {
                    "year": "2022",
                    "month": "10",
                    "text": "\u0416\u043e\u0432\u0442\u0435\u043d\u044c 2022"
                }, {
                    "year": "2022",
                    "month": "9",
                    "text": "\u0412\u0435\u0440\u0435\u0441\u0435\u043d\u044c 2022"
                }, {
                    "year": "2022",
                    "month": "8",
                    "text": "\u0421\u0435\u0440\u043f\u0435\u043d\u044c 2022"
                }, {
                    "year": "2022",
                    "month": "7",
                    "text": "\u041b\u0438\u043f\u0435\u043d\u044c 2022"
                }, {
                    "year": "2022",
                    "month": "6",
                    "text": "\u0427\u0435\u0440\u0432\u0435\u043d\u044c 2022"
                }, {
                    "year": "2022",
                    "month": "5",
                    "text": "\u0422\u0440\u0430\u0432\u0435\u043d\u044c 2022"
                }, {
                    "year": "2022",
                    "month": "4",
                    "text": "\u041a\u0432\u0456\u0442\u0435\u043d\u044c 2022"
                }, {
                    "year": "2022",
                    "month": "3",
                    "text": "\u0411\u0435\u0440\u0435\u0437\u0435\u043d\u044c 2022"
                }, {
                    "year": "2022",
                    "month": "2",
                    "text": "\u041b\u044e\u0442\u0438\u0439 2022"
                }, {
                    "year": "2022",
                    "month": "1",
                    "text": "\u0421\u0456\u0447\u0435\u043d\u044c 2022"
                }, {
                    "year": "2021",
                    "month": "12",
                    "text": "\u0413\u0440\u0443\u0434\u0435\u043d\u044c 2021"
                }, {
                    "year": "2021",
                    "month": "11",
                    "text": "\u041b\u0438\u0441\u0442\u043e\u043f\u0430\u0434 2021"
                }, {
                    "year": "2021",
                    "month": "10",
                    "text": "\u0416\u043e\u0432\u0442\u0435\u043d\u044c 2021"
                }, {
                    "year": "2021",
                    "month": "9",
                    "text": "\u0412\u0435\u0440\u0435\u0441\u0435\u043d\u044c 2021"
                }, {
                    "year": "2021",
                    "month": "8",
                    "text": "\u0421\u0435\u0440\u043f\u0435\u043d\u044c 2021"
                }, {
                    "year": "2021",
                    "month": "7",
                    "text": "\u041b\u0438\u043f\u0435\u043d\u044c 2021"
                }, {
                    "year": "2021",
                    "month": "6",
                    "text": "\u0427\u0435\u0440\u0432\u0435\u043d\u044c 2021"
                }, {
                    "year": "2021",
                    "month": "5",
                    "text": "\u0422\u0440\u0430\u0432\u0435\u043d\u044c 2021"
                }, {
                    "year": "2021",
                    "month": "4",
                    "text": "\u041a\u0432\u0456\u0442\u0435\u043d\u044c 2021"
                }, {
                    "year": "2021",
                    "month": "3",
                    "text": "\u0411\u0435\u0440\u0435\u0437\u0435\u043d\u044c 2021"
                }, {
                    "year": "2021",
                    "month": "2",
                    "text": "\u041b\u044e\u0442\u0438\u0439 2021"
                }, {
                    "year": "2021",
                    "month": "1",
                    "text": "\u0421\u0456\u0447\u0435\u043d\u044c 2021"
                }, {
                    "year": "2020",
                    "month": "12",
                    "text": "\u0413\u0440\u0443\u0434\u0435\u043d\u044c 2020"
                }, {
                    "year": "2020",
                    "month": "11",
                    "text": "\u041b\u0438\u0441\u0442\u043e\u043f\u0430\u0434 2020"
                }, {
                    "year": "2020",
                    "month": "10",
                    "text": "\u0416\u043e\u0432\u0442\u0435\u043d\u044c 2020"
                }, {
                    "year": "2020",
                    "month": "9",
                    "text": "\u0412\u0435\u0440\u0435\u0441\u0435\u043d\u044c 2020"
                }, {
                    "year": "2020",
                    "month": "8",
                    "text": "\u0421\u0435\u0440\u043f\u0435\u043d\u044c 2020"
                }, {
                    "year": "2020",
                    "month": "7",
                    "text": "\u041b\u0438\u043f\u0435\u043d\u044c 2020"
                }, {
                    "year": "2020",
                    "month": "6",
                    "text": "\u0427\u0435\u0440\u0432\u0435\u043d\u044c 2020"
                }, {
                    "year": "2020",
                    "month": "5",
                    "text": "\u0422\u0440\u0430\u0432\u0435\u043d\u044c 2020"
                }, {
                    "year": "2020",
                    "month": "4",
                    "text": "\u041a\u0432\u0456\u0442\u0435\u043d\u044c 2020"
                }, {
                    "year": "2020",
                    "month": "3",
                    "text": "\u0411\u0435\u0440\u0435\u0437\u0435\u043d\u044c 2020"
                }, {
                    "year": "2020",
                    "month": "2",
                    "text": "\u041b\u044e\u0442\u0438\u0439 2020"
                }, {
                    "year": "2019",
                    "month": "8",
                    "text": "\u0421\u0435\u0440\u043f\u0435\u043d\u044c 2019"
                }, {
                    "year": "2019",
                    "month": "5",
                    "text": "\u0422\u0440\u0430\u0432\u0435\u043d\u044c 2019"
                }, {
                    "year": "2019",
                    "month": "3",
                    "text": "\u0411\u0435\u0440\u0435\u0437\u0435\u043d\u044c 2019"
                }, {
                    "year": "2019",
                    "month": "2",
                    "text": "\u041b\u044e\u0442\u0438\u0439 2019"
                }, {
                    "year": "2018",
                    "month": "12",
                    "text": "\u0413\u0440\u0443\u0434\u0435\u043d\u044c 2018"
                }, {
                    "year": "2018",
                    "month": "11",
                    "text": "\u041b\u0438\u0441\u0442\u043e\u043f\u0430\u0434 2018"
                }, {
                    "year": "2018",
                    "month": "10",
                    "text": "\u0416\u043e\u0432\u0442\u0435\u043d\u044c 2018"
                }, {
                    "year": "2018",
                    "month": "9",
                    "text": "\u0412\u0435\u0440\u0435\u0441\u0435\u043d\u044c 2018"
                }, {
                    "year": "2018",
                    "month": "8",
                    "text": "\u0421\u0435\u0440\u043f\u0435\u043d\u044c 2018"
                }, {
                    "year": "2018",
                    "month": "7",
                    "text": "\u041b\u0438\u043f\u0435\u043d\u044c 2018"
                }, {
                    "year": "2018",
                    "month": "6",
                    "text": "\u0427\u0435\u0440\u0432\u0435\u043d\u044c 2018"
                }, {
                    "year": "2018",
                    "month": "5",
                    "text": "\u0422\u0440\u0430\u0432\u0435\u043d\u044c 2018"
                }, {
                    "year": "2018",
                    "month": "4",
                    "text": "\u041a\u0432\u0456\u0442\u0435\u043d\u044c 2018"
                }, {
                    "year": "2018",
                    "month": "3",
                    "text": "\u0411\u0435\u0440\u0435\u0437\u0435\u043d\u044c 2018"
                }, {
                    "year": "2018",
                    "month": "2",
                    "text": "\u041b\u044e\u0442\u0438\u0439 2018"
                }, {
                    "year": "2018",
                    "month": "1",
                    "text": "\u0421\u0456\u0447\u0435\u043d\u044c 2018"
                }, {
                    "year": "2017",
                    "month": "12",
                    "text": "\u0413\u0440\u0443\u0434\u0435\u043d\u044c 2017"
                }, {
                    "year": "2017",
                    "month": "11",
                    "text": "\u041b\u0438\u0441\u0442\u043e\u043f\u0430\u0434 2017"
                }, {
                    "year": "2017",
                    "month": "10",
                    "text": "\u0416\u043e\u0432\u0442\u0435\u043d\u044c 2017"
                }, {
                    "year": "2017",
                    "month": "9",
                    "text": "\u0412\u0435\u0440\u0435\u0441\u0435\u043d\u044c 2017"
                }, {
                    "year": "2017",
                    "month": "8",
                    "text": "\u0421\u0435\u0440\u043f\u0435\u043d\u044c 2017"
                }, {
                    "year": "2017",
                    "month": "7",
                    "text": "\u041b\u0438\u043f\u0435\u043d\u044c 2017"
                }, {
                    "year": "2017",
                    "month": "6",
                    "text": "\u0427\u0435\u0440\u0432\u0435\u043d\u044c 2017"
                }, {
                    "year": "2017",
                    "month": "3",
                    "text": "\u0411\u0435\u0440\u0435\u0437\u0435\u043d\u044c 2017"
                }],
                "mediaTrash": 0,
                "infiniteScrolling": 0
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" id="media-views-js-translations">
        (function(domain, translations) {
            var localeData = translations.locale_data[domain] || translations.locale_data.messages;
            localeData[""].domain = domain;
            wp.i18n.setLocaleData(localeData, domain);
        })("default", {
            "translation-revision-date": "2021-07-24 15:27:43+0000",
            "generator": "GlotPress\/3.0.0-alpha.2",
            "domain": "messages",
            "locale_data": {
                "messages": {
                    "": {
                        "domain": "messages",
                        "plural-forms": "nplurals=3; plural=(n % 10 == 1 && n % 100 != 11) ? 0 : ((n % 10 >= 2 && n % 10 <= 4 && (n % 100 < 12 || n % 100 > 14)) ? 1 : 2);",
                        "lang": "uk_UA"
                    },
                    "The file URL has been copied to your clipboard": ["\u041f\u043e\u0441\u0438\u043b\u0430\u043d\u043d\u044f \u043d\u0430 \u0444\u0430\u0439\u043b \u0441\u043a\u043e\u043f\u0456\u0439\u043e\u0432\u0430\u043d\u043e \u0432 \u0431\u0443\u0444\u0435\u0440 \u043e\u0431\u043c\u0456\u043d\u0443"],
                    "%s item selected": ["\u041e\u0431\u0440\u0430\u043d\u043e %s \u0435\u043b\u0435\u043c\u0435\u043d\u0442", "\u041e\u0431\u0440\u0430\u043d\u043e %s \u0435\u043b\u0435\u043c\u0435\u043d\u0442\u0438", "\u041e\u0431\u0440\u0430\u043d\u043e %s \u0435\u043b\u0435\u043c\u0435\u043d\u0442\u0456\u0432"]
                }
            },
            "comment": {
                "reference": "wp-includes\/js\/media-views.js"
            }
        });
    </script>
    <script type="text/javascript" src="js/media-views.min.js" id="media-views-js"></script>
    <script type="text/javascript" id="media-editor-js-translations">
        (function(domain, translations) {
            var localeData = translations.locale_data[domain] || translations.locale_data.messages;
            localeData[""].domain = domain;
            wp.i18n.setLocaleData(localeData, domain);
        })("default", {
            "translation-revision-date": "2021-07-24 15:27:43+0000",
            "generator": "GlotPress\/3.0.0-alpha.2",
            "domain": "messages",
            "locale_data": {
                "messages": {
                    "": {
                        "domain": "messages",
                        "plural-forms": "nplurals=3; plural=(n % 10 == 1 && n % 100 != 11) ? 0 : ((n % 10 >= 2 && n % 10 <= 4 && (n % 100 < 12 || n % 100 > 14)) ? 1 : 2);",
                        "lang": "uk_UA"
                    },
                    "Could not set that as the thumbnail image. Try a different attachment.": ["\u041d\u0435 \u0432\u0434\u0430\u0454\u0442\u044c\u0441\u044f \u0437\u0430\u0434\u0430\u0442\u0438 \u0440\u043e\u0437\u043c\u0456\u0440 \u043c\u0456\u043d\u0456\u0430\u0442\u044e\u0440\u0438. \u0421\u043f\u0440\u043e\u0431\u0443\u0439\u0442\u0435 \u0456\u043d\u0448\u0435 \u0434\u043e\u043b\u0443\u0447\u0435\u043d\u043d\u044f."]
                }
            },
            "comment": {
                "reference": "wp-includes\/js\/media-editor.js"
            }
        });
    </script>
    <script type="text/javascript" src="js/media-editor.min.js" id="media-editor-js"></script>
    <script type="text/javascript" src="js/media-audiovideo.min.js" id="media-audiovideo-js"></script>
    <script type="text/javascript" src="js/scripts.js" id="wdp-scripts-js"></script>
    <script type="text/javascript" src="js/frontend.min.js" id="yith_wcas_frontend-js"></script>
    <script src="js/maskedinput.js" type="text/javascript"></script>
    <?php if (!empty($config)) include "./meldonium/include-body-end.php" ?>
</body>

</html>