<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android
    Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
    <?php wp_head(); ?>

    <script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});

            jQuery('#responsive').change(function(){
                $('#responsive_wrapper').width(jQuery(this).val());
            });

        });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
</head>
<body <?php body_class(); ?>>

<!-- wrapper -->
<div class="wrapper">

    <!-- header -->
    <header >
        <div class="w3layouts-top-strip">
            <div class="container">
                <div class="logo">
                    <h1><a href="index.php">Fashion Blog</a></h1>
                    <p>lets make a Life style</p>
                </div>
                <div class="w3ls-social-icons">
                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
                    <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                    <a class="linkedin" href="#"><i class="fa fa-google-plus"></i></a>
                    <a class="linkedin" href="#"><i class="fa fa-rss"></i></a>
                    <a class="linkedin" href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>

        <!-- logo -->

        <!-- /logo -->

        <!-- nav -->

            <?php html5blank_nav(); ?>

        <!-- /nav -->
        <!-- main-slider-->
        <div class="w3-slider">


        </div>
        <!-- main-slider-->



    </header>
    <!-- /header -->