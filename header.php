<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Blushing Peacock
 * @since Blushing Peacock 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<header>
  <title>The Blusing Peacock</title>
  <meata charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <!--[if lt IE 9]>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
  <![endif]-->
  <link href="<?php echo get_template_directory_uri(); ?>/img/favico.png" rel="icon" type="image/png"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,100,400italic,700italic,700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.materialdesignicons.com/1.9.32/css/materialdesignicons.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>
  <?php wp_head(); ?>
</header>
<body <?php body_class(); ?>>


</body>
</html>
