<?php
/*
Plugin Name: Facebook Featured Image and Open Graph Meta Tags
Version: 1.0.1
Plugin URI: http://ryanscowles.com/2013/01/set-wordpress-featured-image-thumbnail/
Description: This plugin will add the necessary Open Graph Meta tags to automatically set the posts' Featured Image as the thumbnail for sharing on Facebook and LinkedIn. It will also set Open Graph Meta tags for title, description, URL, type, and site name.
Author: Ryan S. Cowles
Author URI: http://www.ryanscowles.com
License: GPL2

	Copyright 2013  Ryan Cowles  (email : mr@ryanscowles.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

define ('pluginDirName', 'fb-featured-image');

// Allow for Facebooks's markup language
add_filter('language_attributes', 'add_og_xml_ns');
function add_og_xml_ns($content) {
  return ' xmlns:og="http://ogp.me/ns#" ' . $content;
}

add_filter('language_attributes', 'add_fb_xml_ns');
function add_fb_xml_ns($content) {
  return ' xmlns:fb="https://www.facebook.com/2008/fbml" ' . $content;
}

// Set your Open Graph Meta Tags
function fbogmeta_header() {
  if (is_single()) {
    ?>
      <!-- Open Graph Meta Tags for Facebook and LinkedIn Sharing !-->
		<meta property="og:title" content="<?php the_title(); ?>"/>
		<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
		<meta property="og:url" content="<?php the_permalink(); ?>"/>
		<?php $fb_image = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ), 'full'); ?>
		<?php if ($fb_image) : ?>
			<meta property="og:image" content="<?php echo $fb_image[0]; ?>" />
			<?php endif; ?>
		<meta property="og:type" content="<?php
			if (is_single() || is_page()) { echo "article"; } else { echo "website";} ?>"
		/>
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
		<!-- End Open Graph Meta Tags !-->

    <?php
  }
}
add_action('wp_head', 'fbogmeta_header');
