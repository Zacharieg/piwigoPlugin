<?php

//Install the plugin's tables
function plugin_install() {
  include_once(PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/GeneratedByDAO.php');
  GenerateByDAO::install();
}

//Uninstall the plugin's table
function plugin_uninstall() {
  include_once(PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/GeneratedByDAO.php');
  GenerateByDAO::uninstall();
}

?>
