<?php
/**
 * File Name: header.php
 * Description: Displays the <head> section and everything up until <div id="content">.
 * Author: Your Name
 * Theme: Enterprise Theme
 * Version: 1.0.0
 *
 * @package WordPress
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Swiper CSS (for slider) -->
<link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<?php wp_head(); ?>
</head>
<body>

<header>
  <?php
wp_nav_menu( array(
    'theme_location' => 'primary',
    'menu_id'        => 'primary-menu',
    'container'      => 'nav',
    'container_class'=> 'main-navigation',
    'menu_class'     => 'menu',
) );
?>
   <!--  <nav>
      <div class="logo">Enterprises</div>

      <ul class="menu">
        <li>
          <a href="#">Services ▾</a>
          <div class="dropdown">
            <a href="#">Web Design</a>
            <a href="#">Development</a>
            <a href="#">SEO</a>
          </div>
        </li>
        <li>
          <a href="#">About ▾</a>
          <div class="dropdown">
            <a href="#">Our Team</a>
            <a href="#">Careers</a>
          </div>
        </li>
        <li>
          <a href="#">Contact</a>
        </li>
      </ul>
    </nav> -->
  </header>