<?php
/**
 * Title: hero
 * Slug: carbon-agency/hero
 * Categories: banner
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-img.jpg' ) ); ?>","dimRatio":40,"overlayColor":"black","isUserOverlayColor":true,"minHeight":600,"minHeightUnit":"px","contentPosition":"center center","sizeSlug":"large","align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-base-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;min-height:600px"><img class="wp-block-cover__image-background size-large" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-img.jpg' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"80%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"lineHeight":"1.3","fontSize":"5rem"}},"textColor":"base"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color" style="font-size:5rem;line-height:1.3"><?php esc_html_e( 'Digital Experience', 'carbon-agency' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-body"}}}},"textColor":"custom-body"} -->
<p class="has-text-align-center has-custom-body-color has-text-color has-link-color"><?php esc_html_e( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.', 'carbon-agency' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"textColor":"base","className":"is-style-carbon-agency-flat-button is-style-fill","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"color":"#5733fb","width":"1px"},"color":{"background":"#5733fb"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
<div class="wp-block-button is-style-carbon-agency-flat-button is-style-fill"><a class="wp-block-button__link has-base-color has-text-color has-background has-link-color has-border-color wp-element-button" href="#" style="border-color:#5733fb;border-width:1px;background-color:#5733fb;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e( 'GET STARTED', 'carbon-agency' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"transparent","textColor":"base","className":"is-style-carbon-agency-flat-button","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"fontSize":"extra-small","borderColor":"base"} -->
<div class="wp-block-button is-style-carbon-agency-flat-button"><a class="wp-block-button__link has-base-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-base-border-color has-extra-small-font-size has-custom-font-size wp-element-button" href="#" style="border-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e( 'LEARN MORE', 'carbon-agency' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->