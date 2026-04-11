<?php
/**
 * Front Page Template
 *
 * @package Fancy Tailwind-dev
 */

get_header();

get_template_part( 'template-parts/hero' );
get_template_part( 'template-parts/about' );
get_template_part( 'template-parts/featured' );

get_footer();
?>