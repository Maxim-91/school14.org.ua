<?php
/*
+-------------------------------------------------+
| Joomla Ozio Gallery Component for Joomla 1.5
| oziogallery.php
+-------------------------------------------------+
| Author:                    
|	AlexRed
|	http://www.joomla.it
|
| Based on:
|    Joomla WebcamXP Component for Joomla 1.5 by Jooglar (jwebcamxp@jooglar.com) http://jooglar.com
|    &
|    WebcamXP Component for Joomla 1.0.x & Mambo 4.5.x by Andy Stewart (andy@troozers.com) http://www.troozers.com
|
| License:
|     Released under GNU/GPL License
|     http://www.gnu.org/copyleft/gpl.html
|
+-------------------------------------------------+
*/
defined( '_JEXEC' ) or die( 'Restricted access' );
class TOOLBAR_oziogallery {
	function _DEFAULT()
	{
		JToolBarHelper::title( JText::_( 'Ozio Gallery' ),'logo' );  
		JToolBarHelper::customX( 'showSettings',  'settings', 'alt', 'Settings', false);
		JToolBarHelper::customX( 'faq',  'faq', 'alt', 'FAQ', false );
	}
	
	function _SETTINGS() 
	{
		JToolBarHelper::title( JText::_( 'Ozio Gallery - Settings' ),'logo' );  
		JToolBarHelper::save('saveSettings');
		JToolBarHelper::apply('applySettings');
		JToolBarHelper::cancel();
	}
	
	function _FAQ()
	{
		JToolBarHelper::title( JText::_( 'Ozio Gallery - Frequently Asked Questions' ),'logo' );  
		JToolBarHelper::cancel();
	}
}
?>
