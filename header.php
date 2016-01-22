<?php get_template_part( 'template-parts/head' ); ?>
<?php
if ( have_posts() ) : 
  while ( have_posts() ) : 
    the_post();
    $fc_sub_text = dfw_get_field( 'fc_sub_text' );
    $fc_welcome = dfw_get_field( 'fc_welcome' );
  endwhile; 
endif;
?>
<header id="header" class="header content__wrapper" role="banner">
  <div id="header__logo" class="header__right col__2-3 header__logo">
    <?php get_template_part( 'template-parts/partials/logo' ); ?>
    <div class="header__text">
      <?php echo $fc_welcome; ?>
    </div>
  </div>
  <div class="header__left col__1-3">
    <?php echo $fc_sub_text; ?>
  </div>
</header>
<main id="main" class="main" role="main">