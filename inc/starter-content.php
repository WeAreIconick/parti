<?php
/**
 * Parti Starter Content
 *
 * @link https://make.wordpress.org/core/2016/11/30/starter-content-for-themes-in-4-7/
 *
 * @package Parti
 */

namespace Parti\StarterContent;

/**
 * Returns the array of starter content for the theme.
 *
 * Passes it through the `parti_starter_content` filter before returning.
 *
 * @return array A filtered array of args for the starter_content.
 */
function get_starter_content() {
	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(

		'posts'     => array(
			'front' => array(
				'post_type'    => 'page',
				'post_title'   => esc_html_x( 'Front Page', 'Theme starter content', 'parti' ),
				'post_content' => '<!-- wp:columns {"metadata":{"name":"Masthead"}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"className":"is-style-blur-box","backgroundColor":"white-10","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group is-style-blur-box has-white-10-background-color has-background"><!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|white-70"}}}},"textColor":"white-70"} -->
<p class="has-text-align-left has-white-70-color has-text-color has-link-color">#1 in Smart, Stylish Spaces</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size" style="font-style:normal;font-weight:500">Crafting spaces that match your style and needs</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-70"}}}},"textColor":"white-70","fontSize":"large"} -->
<p class="has-white-70-color has-text-color has-link-color has-large-font-size">Building new or upgrading? We craft stylish, inspiring spaces that feel uniquely yours.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Get in touch</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">View services</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"https://framerusercontent.com/images/1P3nKNxZrYppBXWcED5K0c0KKk.png","dimRatio":0,"minHeight":745,"minHeightUnit":"px","contentPosition":"bottom left","isDark":false,"className":"is-style-window","style":{"color":[]}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left is-style-window" style="min-height:745px"><img class="wp-block-cover__image-background" alt="" src="https://framerusercontent.com/images/1P3nKNxZrYppBXWcED5K0c0KKk.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"is-style-blur-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-blur-box"><!-- wp:paragraph -->
<p>What a vacation getaway space!</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Who wouldn’t want to visit?</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Who We Are"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-blur-box","backgroundColor":"white-10","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-blur-box has-white-10-background-color has-background"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Who we are</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"padding":{"right":"20%","left":"20%"}}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="padding-right:20%;padding-left:20%">We’re a team of designers, architects, and builders turning spaces into works of art. From interiors to landscapes, we deliver lasting results tailored to your vision.</h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontSize":"2.5rem"}}} -->
<h2 class="wp-block-heading" style="font-size:2.5rem">15+</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-80"}}}},"textColor":"white-80","fontSize":"medium"} -->
<p class="has-white-80-color has-text-color has-link-color has-medium-font-size">Years of experience</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontSize":"2.5rem"}}} -->
<h2 class="wp-block-heading" style="font-size:2.5rem">25+</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-80"}}}},"textColor":"white-80","fontSize":"medium"} -->
<p class="has-white-80-color has-text-color has-link-color has-medium-font-size">Talented team members</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontSize":"2.5rem"}}} -->
<h2 class="wp-block-heading" style="font-size:2.5rem">100+</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-80"}}}},"textColor":"white-80","fontSize":"medium"} -->
<p class="has-white-80-color has-text-color has-link-color has-medium-font-size">Completed projects</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontSize":"2.5rem"}}} -->
<h2 class="wp-block-heading" style="font-size:2.5rem">9+</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-80"}}}},"textColor":"white-80","fontSize":"medium"} -->
<p class="has-white-80-color has-text-color has-link-color has-medium-font-size">Industry awards won</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"stretch","style":{"border":{"radius":"2rem"},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"white-10"} -->
<div class="wp-block-column is-vertically-aligned-stretch has-white-10-background-color has-background" style="border-radius:2rem;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"fontSize":"x-large"} -->
<p class="has-x-large-font-size">We design with intention creating spaces that reflect your style, not just trends.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-70"}}}},"textColor":"white-70","fontSize":"large"} -->
<p class="has-white-70-color has-text-color has-link-color has-large-font-size">1: Balance of style and function</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-70"}}}},"textColor":"white-70","fontSize":"large"} -->
<p class="has-white-70-color has-text-color has-link-color has-large-font-size">2: Timeless results, built to last</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-70"}}}},"textColor":"white-70","fontSize":"large"} -->
<p class="has-white-70-color has-text-color has-link-color has-large-font-size">3: Thoughtful, detail driven process</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","className":"is-style-rounded","style":{"border":{"radius":"2rem"}}} -->
<figure class="wp-block-image size-large has-custom-border is-style-rounded"><img src="https://framerusercontent.com/images/2u4cXHIDnj0mj7MicCa0JS3EEVU.png" alt="" style="border-radius:2rem"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Our Team"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-blur-box","backgroundColor":"white-10","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group is-style-blur-box has-white-10-background-color has-background"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Our team</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"padding":{"right":"20%","left":"20%"}},"typography":{"fontStyle":"normal","fontWeight":"200","lineHeight":"1.1"}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="padding-right:20%;padding-left:20%;font-style:normal;font-weight:200;line-height:1.1">The dedicated team behind the craft</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white-70"}}}},"textColor":"white-70"} -->
<p class="has-text-align-center has-white-70-color has-text-color has-link-color">Our team unites designers, architects, and builders who care about every detail.</p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"className":"is-style-window","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"white-10"} -->
<div class="wp-block-column is-style-window has-white-10-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","className":"is-style-window"} -->
<figure class="wp-block-image size-large is-style-window"><img src="https://framerusercontent.com/images/ACUmnZA0OiCEkX7wewLf2CVP6s.jpeg" alt="" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">Noah Bennett</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white-70"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"white-70"} -->
<p class="has-text-align-center has-white-70-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0">Project Manager</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"white-80","iconColorValue":"rgba(255,255,255,0.8)","align":"center","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links aligncenter has-icon-color is-style-logos-only"><!-- wp:social-link {"service":"x"} /-->

<!-- wp:social-link {"service":"instagram"} /-->

<!-- wp:social-link {"service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-window","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"white-10"} -->
<div class="wp-block-column is-style-window has-white-10-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","className":"is-style-window"} -->
<figure class="wp-block-image size-large is-style-window"><img src="https://framerusercontent.com/images/cozra1L3tecl0rX3VKd8v5u4NKE.png" alt="" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">James Benjamin</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white-70"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"white-70"} -->
<p class="has-text-align-center has-white-70-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0">Creative Director</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"white-80","iconColorValue":"rgba(255,255,255,0.8)","align":"center","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links aligncenter has-icon-color is-style-logos-only"><!-- wp:social-link {"service":"x"} /-->

<!-- wp:social-link {"service":"instagram"} /-->

<!-- wp:social-link {"service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-window","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"white-10"} -->
<div class="wp-block-column is-style-window has-white-10-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","className":"is-style-window"} -->
<figure class="wp-block-image size-large is-style-window"><img src="https://framerusercontent.com/images/fGMII2DZxHfMG5shcSEK1AnhYvw.png" alt="" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">Adam Reeds</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white-70"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"white-70"} -->
<p class="has-text-align-center has-white-70-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0">Creative Director</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"white-80","iconColorValue":"rgba(255,255,255,0.8)","align":"center","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links aligncenter has-icon-color is-style-logos-only"><!-- wp:social-link {"service":"x"} /-->

<!-- wp:social-link {"service":"instagram"} /-->

<!-- wp:social-link {"service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- wp:group {"metadata":{"name":"FAQs"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-blur-box","backgroundColor":"white-10","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group is-style-blur-box has-white-10-background-color has-background"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">FAQs</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"padding":{"right":"10%","left":"10%"}},"typography":{"fontStyle":"normal","fontWeight":"200","lineHeight":"1.1","fontSize":"2.8rem"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="padding-right:10%;padding-left:10%;font-size:2.8rem;font-style:normal;font-weight:200;line-height:1.1">Frequently asked questions</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white-70"}}}},"textColor":"white-70"} -->
<p class="has-text-align-center has-white-70-color has-text-color has-link-color">Find helpful answers about our services, detailed process, and bringing your vision to life.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"750px"}} -->
<div class="wp-block-group"><!-- wp:details {"showContent":true} -->
<details class="wp-block-details" open><summary>Why should I hire a professional interior designer?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p>Professional interior designers bring expertise in space planning, color theory, materials, and lighting that helps transform your space efficiently and beautifully. They can help avoid costly mistakes, maximize your budget, and create a cohesive look that reflects your lifestyle while increasing your property value.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>How long does a typical renovation or landscaping project take?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p>The duration varies based on the size and complexity of the project. A simple landscaping update may take 1–2 weeks, while a full exterior renovation with structural changes, new siding, or outdoor features can take 4–8 weeks or longer. We provide a detailed timeline after the initial consultation.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>Can I be actively involved in the design process?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p>Absolutely. We encourage client collaboration at every stage—from the initial concept to material selection and final approvals. Your preferences, lifestyle, and goals are central to the design process, and we work closely with you to bring your vision to life.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>What materials do you usually use for outdoor spaces?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p>We use high-quality, weather-resistant materials such as treated wood, composite decking, natural stone, and sustainable concrete. Our team considers climate, maintenance, and usage needs to select materials that not only look beautiful but also stand the test of time.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>How do I begin a new home project with your team?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p>Getting started is simple! Just reach out through our contact form or give us a call. We’ll schedule an initial consultation to understand your needs, budget, and timeline. From there, we’ll guide you step-by-step through the design, planning, and execution process.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
			),
			'about',
			'contact',
			'blog',
		),

		'attachments' => array(
			'wapuu' => array(
				'post_title' => esc_html_x( 'Wapuu', 'Theme starter content', 'parti' ),
				'file'       => '_playground/wapuu.png',
			),
		),

		// Default to a static front page and assign the front and posts pages.
		'options'   => array(
			'show_on_front'   => 'page',
			'page_on_front'   => '{{front}}',
			'page_for_posts'  => '{{blog}}',
			'site_icon'       => '{{wapuu}}',
			'blogname'        => esc_html_x( 'Parti', 'Theme starter content', 'parti' ),
			'blogdescription' => esc_html_x( 'Another fine WordPress Block Theme', 'Theme starter content', 'parti' ),
		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus' => array(
			// Assign a menu to the "primary" location.
			'primary' => array(
				'name'  => esc_html_x( 'Primary menu', 'Theme starter content', 'parti' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
					'link_github' => array(
						'title' => esc_html_x( 'Parti', 'Theme starter content', 'parti' ),
						'url'   => 'https://github.com/WeAreIconick/parti/',
					),
				),
			),
		),
	);

	/**
	 * Filters the array of starter content.
	 *
	 * @param array $starter_content Array of starter content.
	 */
	return apply_filters( 'parti_starter_content', $starter_content );
}
