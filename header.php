<?php
// Airwave Consulting WordPress theme
// Designed by Lucas Lower @ AirwaveConsult.com
// the HEADER.PHP file

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!-- START OF THE DOCUMENT -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<!-- HEAD SECTION -->
<head>
    
    <!-- meta and links -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="<?php echo get_template_directory_uri() ?>/style.css" type="text/css" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/img/faviconnew.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js">
    </script>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- wordpress header stuff -->
    <?php wp_head(); ?>
</head>
    
<!-- START OF BODY -->
<body>
<section id="page">
    <header id="pageheader">
        <div class="logo"><span>AIRWAVE // CONSULTING</span><img src="<?php echo get_template_directory_uri() ?>/img/LogoText.png"></div>
    
        <nav class="primary"><?php wp_nav_menu(array('theme_location' => 'primary')); ?></nav>
        
        <nav class="mobile"><i id="mobileclick" class="fa fa-bars"></i><?php wp_nav_menu(array('theme_location' => 'primary')); ?></nav>
        
        <div class="divider"></div>
    </header>
        
<section id="content">     
    
        