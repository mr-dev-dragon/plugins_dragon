<?php

 
/*
 
Plugin Name: word count 

 
Description: this   plugin is used to count words in automattices and to count words in words
 
Version: 4.1.7
 
Author: ahmed dev dragon
 
Author URI: https://github.com/Ahmed-dev-dragon
 
License: GPLv2 or later
 
Text Domain: akismet
 
*/

class AhmedDevDragonconClass
{
 function __construct(){
     add_action('admin_menu',array($this, 'AdminPaje'));
 } 
 function AdminPaje(){
  add_options_page('words count settings','Dragon','manage_options', array($this, 'init'));
}

function  init(){ 
?>
 <P> hi there</P>

<?php
}
}


$ahmed;
$ahmed = new AhmedDevDragonconnClass();




