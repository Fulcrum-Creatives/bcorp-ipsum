<?php
if ( have_posts() ) : 
  while ( have_posts() ) : 
    the_post();
    $fc_bottom_line = dfw_get_field( 'fc_bottom_line' );
    $fc_sub_text = dfw_get_field( 'fc_sub_text' );
  endwhile; 
endif;
?>
</main>
<footer id="footer" class="footer" role="contentinfo">
  <div class="footer__left">
    <?php echo $fc_sub_text; ?>
  </div>
  <div class="info">
    <div class="info__text">
      <?php echo $fc_bottom_line; ?>
    </div>
    <div class="links">
      <ul>
        <li class="fulcrum">
          <a href="http://fulcrumcreatives.com/">
            <img src="<?php echo FCWP_URI; ?>/images/fulcrum-creatives-logo-@2.png" alt="Fulcrum Creatives" />
          </a>
        </li>
        <li class="heart">
          <img src="<?php echo FCWP_URI; ?>/images/heart-icon-@2.png" alt="Loves" />
        </li>
        <li class="bcorp">
          <a href="http://www.bcorporation.net/community/fulcrum-creatives">
            <img src="<?php echo FCWP_URI; ?>/images/bcorp-logo-@2.png" alt="B-Corps" />
          </a>
        </li>
      </ul>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>