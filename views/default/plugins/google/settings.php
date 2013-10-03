<?php
	$google_code = $vars['entity']->google_code;

	echo elgg_echo('google:google_code');
        echo elgg_view('input/plaintext', array('name'=>'params[google_code]', 'value'=>$google_code));

