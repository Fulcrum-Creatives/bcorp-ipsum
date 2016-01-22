<?php
$bci_logo        = dfw_get_field( 'bci_logo', true );
$bci_logo_retina = dfw_get_field( 'bci_logo_retina', true );
$bci_logo_svg    = dfw_get_field( 'bci_logo_svg', true );
?>
<h1>
  <a href="<?php echo home_url(); ?>">
    <?php
      $logo_paths = array(
        'image'  => $bci_logo['url'],
        'retina' => $bci_logo_retina['url'],
        'svg'    => $bci_logo_svg['url']
      ); 
      dfw_svg_fallback( $logo_paths, $bci_logo['alt'], 'logo', 'svg logo__svg' );
    ?>
  </a>
</h1>