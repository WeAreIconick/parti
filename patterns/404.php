<?php
/**
 * Title: 404
 * Slug: parti/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"10rem"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="font-size:10rem"><?php esc_html_e('404', 'parti');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('There\'s nothing here, but maybe if you search for what you\'re after, you\'ll find it!', 'parti');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"width":50,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center"} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->