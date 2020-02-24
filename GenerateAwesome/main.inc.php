<?php
/*
Version: 1.0
Plugin Name: GenerateAwesome
Plugin URI:
Author: Zacharie Guet
Description: Say to the world for what your images are generated by!
*/

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

//Define path
define('GENERATEAWESOME_PATH', PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');

//Include the database utils
include_once(GENERATEAWESOME_PATH . 'GeneratedByDAO.php');

//Generate the visual of the field
include_once(GENERATEAWESOME_PATH . 'addField.php');

//Generate modifications by single and by global
include_once(GENERATEAWESOME_PATH . 'batch_single.php');
include_once(GENERATEAWESOME_PATH . 'batch_global.php');
?>
