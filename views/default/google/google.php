<?php
	/**
         * Elgg google plugin
         *
         * @author Gerard Kanters
         * @copyright Centillien 2013
         */


$google_code = elgg_get_plugin_setting("google_code","google");
?>
<script>
<?php

if($google_code) { 
echo $google_code;
}
?>
</script>
<gcse:searchresults-only></gcse:searchresults-only>
