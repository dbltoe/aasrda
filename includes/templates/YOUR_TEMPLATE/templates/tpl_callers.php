<?php
/**
 * Page Template
 *
 * Loaded automatically by index.php?main_page=officers.<br />
 * Displays Area Callers/Cuers page.
 *
 * @package templateSystem
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_callers.php  v2.1.0 $
 */
?>
<div class="centerColumn" id="clubs">
<h1 id="callersHeading"><?php echo HEADING_TITLE; ?></h1>

<div id="callersMainContent" class="content">
<?php
/**
 * require the html_define for the callers page
 */
  require($define_page);
?>
</div>


<div class="buttonRow back"><?php echo zen_back_link() . zen_image_button(BUTTON_IMAGE_BACK, BUTTON_BACK_ALT) . '</a>'; ?></div>
</div>