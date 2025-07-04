<?php
/**
 * Appointed Officers Page
 *
 * @package page
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: header_php.php  2025-06-26 24:41:50Z dbltoe $
 */


  require(DIR_WS_MODULES . zen_get_module_directory('require_languages.php'));

// include template specific file name defines
  $define_page = zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] . '/html_includes/', FILENAME_DEFINE_APPOINTED, 'false');

  $breadcrumb->add(NAVBAR_TITLE);

?>
