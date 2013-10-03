<?php

	/**
	 * Elgg google plugin
	 *
	 * @author Gerard Kanters
	 * @copyright Centillien 2013
	 */

	 elgg_register_event_handler('init','system','google_init');

	 function google_init() {

		elgg_register_page_handler('google', 'google_page_handler');
		//$item = new ElggMenuItem('google', elgg_echo('google:title'), 'google/search');
        	//elgg_register_menu_item('site', $item);
		
		//Replace default search box for topbar
		elgg_unextend_view('page/elements/header', 'search/header');
	        elgg_extend_view('page/elements/header', 'search/header');
		elgg_extend_view('css/elgg','google/css');
		
		// extend js (making target _self) 
	        elgg_extend_view("js/elgg", "google/js");


	}

function google_page_handler() { 
	elgg_set_context('google');

        $base = elgg_get_plugins_path() . 'google/pages/google';

	switch ($page[0]) {
               default:
                   include $base . '/search.php';
               break;
               }
               exit;
	}

?>
