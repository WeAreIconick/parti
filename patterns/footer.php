<?php
/**
 * Title: footer
 * Slug: buildio/footer
 * Inserter: no
 */
?>
<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"30px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:80px;padding-bottom:30px"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:site-title /-->

<!-- wp:site-tagline /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Get in touch', 'buildio');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:spacer {"width":"0px","style":{"layout":{"flexSize":"100px","selfStretch":"fixed"}}} -->
<div style="height:100px;width:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Links', 'buildio');?></h2>
<!-- /wp:heading -->

<!-- wp:navigation {"layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Socials', 'buildio');?></h2>
<!-- /wp:heading -->

<!-- wp:navigation {"layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-70"}}}},"textColor":"white-70"} -->
<p class="has-white-70-color has-text-color has-link-color"><?php esc_html_e('Copyright © 2025 - All Rights Reserved', 'buildio');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-70"}}}},"textColor":"white-70"} -->
<p class="has-white-70-color has-text-color has-link-color"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Designed by Khuram, Powered by %1$sWordPress%2$s', 'buildio' ), '<a href="' . esc_url( 'https://wordpress.org/' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->