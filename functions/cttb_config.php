<?php
/**
 * Tile Builder Config
 *
 * This file handles various configurations
 * of the page builder page
 *
 */
function ct_tile_builder_config() {

	$config = array(); //initialise array
	
	/* Page Config */
	$config['menu_title'] = __('Tile Builder', 'framework');
	$config['page_title'] = __('Tile Builder', 'framework');
	$config['page_slug'] = __('aq-page-builder', 'framework');
	
	/* This holds the contextual help text - the more info, the better.
	 * HTML is of course allowed in all of its glory! */
	$config['contextual_help'] = 
		'<p>' . __('The tile builder allows you to create custom tile templates which you can later use for your pages.', 'framework') . '<p>' .
		'<p>' . __('To use the tile builder, start by adding a new template. You can drag and drop the blocks on the left into the building area on the right of the screen. Each block has its own unique configuration which you can manually configure to suit your needs', 'framework') . '<p>' .
		'<p>' . __('Please refer to the', 'framework') . '<a href="http://crosstec.de" target="_blank" alt="Tile Builder">'. __(' documentation page ', 'framework') . '</a>'. __('for more information on how to use this feature.', 'framework') . '<p>';
	
	/* Debugging */
	$config['debug'] = false;
	
	return $config;
	
}