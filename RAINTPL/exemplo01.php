<?php
require_once("../RAINTPL/vendor/autoload.php");

// namespace
use Rain\Tpl;

// config
$config = array(
    "tpl_dir"       => "../RAINTPL/tpl/",
    "cache_dir"     => "../RAINTPL/cache/",
    "debug"         => true, // set to false to improve the speed
);

Tpl::configure( $config );



// create the Tpl object
$tpl = new Tpl;

// assign a variable
$tpl->assign( "name", "Diogo" );

// assign an array
$tpl->assign( "version", PHP_VERSION);

// draw the template
$tpl->draw( "template" );


?>
