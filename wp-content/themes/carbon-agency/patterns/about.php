<?php
/**
 * Title: About
 * Slug: carbon-agency/about
 * Categories: theme
 *
 * @package carbon-agency
 * @since 1.0.0
 */

?>

<!-- wp:group {"align":"full","style":{"background":{"backgroundRepeat":"repeat","backgroundSize":"contain"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"#f5f7fa"}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#f5f7fa;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|70"},"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="padding-top:0;padding-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/about-img.jpg' ) ); ?>" alt="" style="border-radius:10px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"45%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":6,"style":{"border":{"radius":"100px","width":"0px","style":"none"},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"bottom":"var:preset|spacing|40"}},"color":{"text":"#5733fb"},"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}},"fontSize":"small"} -->
<h6 class="wp-block-heading has-text-align-left has-text-color has-small-font-size" style="border-style:none;border-width:0px;border-radius:100px;color:#5733fb;margin-bottom:var(--wp--preset--spacing--40);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:400;text-transform:uppercase"><?php esc_html_e( 'About us', 'carbon-agency' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"lineHeight":"1.3"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|custom-heading"}}}},"textColor":"custom-heading","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-left has-custom-heading-color has-text-color has-link-color has-large-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.3"><?php esc_html_e( 'What You Need To Know About Our Company', 'carbon-agency' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"custom-body"} -->
<p class="has-custom-body-color has-text-color" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.', 'carbon-agency' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"custom-body"} -->
<p class="has-custom-body-color has-text-color" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.', 'carbon-agency' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"textColor":"base","className":"is-style-carbon-agency-flat-button is-style-fill","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"color":"#5733fb","width":"1px"},"color":{"background":"#5733fb"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
<div class="wp-block-button is-style-carbon-agency-flat-button is-style-fill"><a class="wp-block-button__link has-base-color has-text-color has-background has-link-color has-border-color wp-element-button" href="#" style="border-color:#5733fb;border-width:1px;background-color:#5733fb;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e( 'READ MORE', 'carbon-agency' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->