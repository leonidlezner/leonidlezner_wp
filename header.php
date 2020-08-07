<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
    <style>
        @font-face {
            font-family: "PT Serif";
            src: url('<?php echo get_fonts_url('PTSerif-Bold.ttf'); ?>');
        }
        @font-face {
            font-family: "Open Sans";
            src: url('<?php echo get_fonts_url('OpenSans-Regular.ttf'); ?>');
        }
        @font-face {
            font-family: "Open Sans";
            font-weight: bold;
            src: url('<?php echo get_fonts_url('OpenSans-Bols.ttf'); ?>');
        }
    </style>

	<?php wp_head(); ?>
</head>

<body <?php body_class();?>>

    <div class="container-fluid">
            <div class="row container-inner">
                <div class="col-12 col-lg-3 col-xl-2 side-menu">
                    <section class="nav-sidebar">
                        <div class="branding">
                            <div class="logo">
                                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_image_url('brand/logo.svg'); ?>" /></a>
                                <p><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name');?></a></p>
                            </div>
                        </div>

                        <div class="main-menu">
                            <?php wp_nav_menu(array( 'menu' => 'main-menu' )); ?>
                            <a href="#" class="menu-toggle">Menu</a>
                        </div>
                    </section>
                </div>
                <div class="col-12 col-lg main-column">