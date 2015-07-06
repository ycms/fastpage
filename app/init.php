<?php
/**
 * @package Hello_Dolly
 * @version 1.6
 */
/*
Plugin Name: INIT
Plugin URI:
Description: System Init
Author: Mo
Version: 1.1
Author URI: http://mo.sh/
*/

register_theme_directory(__DIR__);

foreach(Module::all() as $name => $module){
    if(Module::find($name)->json()->type == 'theme'){
        register_theme_directory($module->getpath());
        //kd($module->getpath());
    }
}



//add_filter('theme_root',function($theme_root){
//    return __DIR__;
//});

add_filter('theme_root_uri',function(){
    return content_url();
});

show_admin_bar(false);