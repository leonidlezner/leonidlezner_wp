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

