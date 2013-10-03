<?php
	/**
         * Elgg google plugin
         *
         * @author Gerard Kanters
         * @copyright Centillien 2013
         */


$query = stripslashes(get_input('q', get_input('tag', '')));

if ($query) {
        $display_query = preg_replace("/[^\x01-\x7F]/", "", $query);
        $display_query = htmlspecialchars($display_query, ENT_QUOTES, 'UTF-8', false);

        $title = sprintf(elgg_echo('search:results'), "\"$display_query\"");
        $body  = elgg_view('google/google');

        $params = array(
        'title' => $title,
        'content' => $body,
        'sidebar' => elgg_view('members/sidebar'),
        );

        $layout = elgg_view_layout('one_sidebar', $params);
        echo elgg_view_page($title, $layout);

        return;
}



