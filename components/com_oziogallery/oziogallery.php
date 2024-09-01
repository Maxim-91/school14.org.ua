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

defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.helper');
require_once( JApplicationHelper::getPath( 'html' ) );

switch($task)
{
	default:
		tiltviewer( $option );
		break;
}

function tiltviewer( $option )
{
	global $mainframe, $params_oziogallery;
	require_once("components/".$option."/settings.php" );
	$params = &$mainframe->getParams();
	if ($params->get('show_page_title', 1)) : ?>
<div class="componentheading<?php echo $params->get('pageclass_sfx'); ?>"><?php echo $params->get('page_title'); ?></div>
<?php endif; ?>

<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="contentpane<?php echo $params->get( 'pageclass_sfx' ); ?>">
<?php	
//change vamba	
switch ($params_oziogallery['skin']) {
	case '0':
	    JHTML::script('swfobject.js','components/com_oziogallery/',false);
		HTML_oziogallery::tiltviewer( $option, $params_oziogallery );
	break;
	case '1':
		HTML_oziogallery::slideshow( $option, $params_oziogallery );
	break;	
	case '2':
		HTML_oziogallery::postcardviewer( $option, $params_oziogallery );
	break;	
	case '3':
	    JHTML::script('swfobject.js','components/com_oziogallery/',false);
		HTML_oziogallery::imagerotator( $option, $params_oziogallery );
	break;	
	case '4':
	    JHTML::script('swfobject.js','components/com_oziogallery/',false);
		HTML_oziogallery::lustmosaico( $option, $params_oziogallery );
	break;	
	case '5':
		HTML_oziogallery::slideoo( $option, $params_oziogallery );
	break;	
	case '6':
	    JHTML::script('swfobject.js','components/com_oziogallery/',false);
		HTML_oziogallery::accordion( $option, $params_oziogallery );
	break;	
	case '7':
	    JHTML::script('swfobject.js','components/com_oziogallery/',false);
		HTML_oziogallery::flashcategory( $option, $params_oziogallery );
	break;	
	case '8':
	    JHTML::script('swfobject.js','components/com_oziogallery/',false);
		HTML_oziogallery::flashgallery( $option, $params_oziogallery );
	break;	
	case '9':
		JHTML::script('swfobject.js','components/com_oziogallery/version/',false);
		HTML_oziogallery::carousel( $option, $params_oziogallery );
	break;
	case '10':
		JHTML::script('swfobject.js','components/com_oziogallery/version/',false);
		HTML_oziogallery::imagin( $option, $params_oziogallery );
	break;
}//end switch
//end vamba change	
	HTML_oziogallery::css( $option, $params_oziogallery );
	echo '</table>'; 	
}


?>
