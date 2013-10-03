<?php
/**
 * JS to open links 
 */
if(elgg_get_context() == 'google') {
?>
//<script>
elgg.provide('elgg.target_self');

elgg.target_blank.init = function() {
        var selector = 'a[href^="http://"]:not([target], [href^="<?php echo elgg_get_site_url();?>"]),'
                                   + 'a[href^="https://"]:not([target], [href^="<?php echo elgg_get_site_url();?>"])';

        $external_links = $(selector);
        $external_links.live("click", function(){
                $(this).attr("target", "_self");
        });
}

elgg.register_hook_handler('init', 'system', elgg.target_self.init);
<?php
}


