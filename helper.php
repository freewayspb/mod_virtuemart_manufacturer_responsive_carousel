<?php
defined('_JEXEC') or  die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/*
* Module Helper
*
* @package VirtueMart
* @copyright (C) 2010 - Patrick Kohl
* @ Email: cyber__fr|at|hotmail.com
*
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* VirtueMart is Free Software.
* VirtueMart comes with absolute no warranty.
*
* www.virtuemart.net
*/
if (!class_exists( 'VmConfig' )) require(JPATH_ADMINISTRATOR . DS . 'components' . DS . 'com_virtuemart'.DS.'helpers'.DS.'config.php');
VmConfig::loadConfig();
if (!class_exists( 'VmImage' )) require(JPATH_ADMINISTRATOR . DS . 'components' . DS . 'com_virtuemart'.DS.'helpers'.DS.'image.php');
if(!class_exists('TableMedias')) require(JPATH_VM_ADMINISTRATOR.DS.'tables'.DS.'medias.php');
if(!class_exists('TableManufacturer_medias')) require(JPATH_VM_ADMINISTRATOR.DS.'tables'.DS.'manufacturer_medias.php');
if(!class_exists('TableManufacturers')) require(JPATH_VM_ADMINISTRATOR.DS.'tables'.DS.'manufacturers.php');
if (!class_exists( 'VirtueMartModelManufacturer' )){
   JLoader::import( 'manufacturer', JPATH_ADMINISTRATOR . DS . 'components' . DS . 'com_virtuemart' . DS . 'models' );
}
$document	= JFactory::getDocument();
$document->addStyleSheet(JURI::root().'modules/mod_virtuemart_manufacturer/tmpl/css/jcarousel.responsive.css');
$document->addScript(JURI::root().'modules/mod_virtuemart_manufacturer/tmpl/js/jquery.js');
$document->addScript(JURI::root().'modules/mod_virtuemart_manufacturer/tmpl/js/jquery.jcarousel.min.js');
$document->addScript(JURI::root().'modules/mod_virtuemart_manufacturer/tmpl/js/jcarousel.responsive.js');

?>