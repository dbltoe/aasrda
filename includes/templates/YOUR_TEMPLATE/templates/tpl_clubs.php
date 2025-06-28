<?php
/**
 * Page Template
 *
 * Loaded automatically by index.php?main_page=clubs.<br />
 * Displays Area Clubs page.
 *
 * @package templateSystem
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_clubs.php  v2.1.0 $
 */
?>
<div class="centerColumn" id="clubs">
<h1 id="clubsHeading"><?php echo HEADING_TITLE; ?></h1>

<div id="clubsMainContent" class="content">
<?php
/**
 * require the html_define for the clubs page
 */
  require($define_page);
?>
</div>


<div class="buttonRow back"><?php echo zen_back_link() . zen_image_button(BUTTON_IMAGE_BACK, BUTTON_BACK_ALT) . '</a>'; ?></div>
</div>