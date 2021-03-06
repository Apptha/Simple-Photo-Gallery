<?php
/**
 * View file for Simple Photo Gallery
 *
 * @category   Apptha
 * @package    Com_Simplephotogallery
 * @version    1.1
 * @author     Apptha Team <developers@contus.in>
 * @copyright  Copyright (C) 2014 Apptha. All rights reserved.
 * @license    GNU General Public License http://www.gnu.org/copyleft/gpl.html
 */

// No direct access to this file
defined( '_JEXEC' ) or die( 'Restricted access' );

// Import Joomla model library
jimport('joomla.application.component.view');

if (version_compare(JVERSION, '3.0', 'ge'))
{
	/**
	 * SimplaPhotoGalleryView class.
	 *
	 * @package     Joomla.Simple_Photo_Gallery
	 * @subpackage  com_simplephotogallery
	 * @since       1.5
	 */
	class SimplePhotoGalleryView extends JViewLegacy
	{
	}
}
else
{
	/**
	 * SimplaPhotoGalleryView class.
	 *
	 * @package     Joomla.Simple_Photo_Gallery
	 * @subpackage  com_simplephotogallery
	 * @since       1.5
	 */
	class SimplePhotoGalleryView extends JView
	{
	}
}
