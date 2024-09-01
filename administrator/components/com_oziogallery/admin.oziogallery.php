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
// ensure this file is being included by a parent file
defined( '_JEXEC' ) or die( 'Restricted access' );


require_once( JApplicationHelper::getPath( 'admin_html' ) );
//require_once( JPATH_COMPONENT.DS.'includes/helper.php' );
//require_once( JPATH_COMPONENT.DS.'includes/inc.php' );

$document =& JFactory::getDocument();
$url = $mainframe->getSiteURL();
$url_css = 'administrator/components/'.$option.'/css/default.css';
$document->addStyleSheet($url.$url_css);

switch($task)
{
	case 'showSettings':
		showSettings( $option );
		break;
	case 'applySettings':
	case 'saveSettings':
		saveSettings( $option, $task );
		break;
	case 'faq':
		showFAQ( $option );
		break;
	default:
		showIntro( $option );
		break;

}


function showIntro( $option )
{
	HTML_oziogallery::showIntro( $option );
}
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
// SETTINGS
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
function showSettings( $option )
{
	include_once( JPATH_COMPONENT.DS."..".DS."..".DS."..".DS."components".DS.$option.DS."settings.php" );
	HTML_oziogallery::showSettings( $option, $params_oziogallery );
}

function saveSettings( $option, $task )
{
	global $mainframe;
	
	$configfile = JPATH_COMPONENT.DS."..".DS."..".DS."..".DS."components".DS.$option.DS."settings.php";
	@chmod( $configfile, 0766 );

	$permission = is_writable( $configfile );
	if( !$permission ) {
		$msg = "Settings file is not writeable!";
		$mainframe->redirect( 'index.php?option=' . $option .'&task=showSettings', $msg);
		break;
	}

	$fli = ( JRequest::getVar( 'flickr' ) == 1 )?1:0;
	$chat = ( JRequest::getVar( 'cam_chat' ) == 1 )?1:0;
	$tm = ( JRequest::getVar( 'tag_mode' ) == 1 )?1:0;
	$so = ( JRequest::getVar( 'sort' ) == 1 )?1:0;
	$xml = ( JRequest::getVar( 'xml_mode' ) == 1 )?1:0;
	$xmr = ( JRequest::getVar( 'xml_moder' ) == 1 )?1:0;
	$xmm = ( JRequest::getVar( 'xml_model' ) == 1 )?1:0;
	$nav = ( JRequest::getVar( 'navigation' ) == 1 )?1:0;
	$dow = ( JRequest::getVar( 'download' ) == 1 )?1:0;
	$ra = ( JRequest::getVar( 'randomize' ) == 1 )?1:0;
	$xma = ( JRequest::getVar( 'xml_modea' ) == 1 )?1:0;
	$ba = ( JRequest::getVar( 'tuttochiuso' ) == 1 )?1:0;
	$mov = ( JRequest::getVar( 'movimento' ) == 1 )?1:0;
	$atl = ( JRequest::getVar( 'accordiontitle' ) == 1 )?1:0;
	$cat = ( JRequest::getVar( 'carousellink' ) == 1 )?1:0;
	$cal = ( JRequest::getVar( 'carouseltarget' ) == 1 )?1:0;
	$xmc = ( JRequest::getVar( 'xml_modec' ) == 1 )?1:0;

	$txt  = "";
	$txt .= "/*********************************************\n";
	$txt .= "* Ozio Gallery  - Joomla! Component       \n";
	$txt .= "* Copyright (C) 2008 by www.joomla.it     \n";
	$txt .= "* --------- All Rights Reserved ------------ \n";  
	$txt .= "* Homepage   : www.joomla.it          \n";
	$txt .= "* License    : GNU/GPL License               \n";
	$txt .= "*********************************************/\n";
	$txt .= "\n";
	$txt .= "defined('_JEXEC') or die( 'Direct Access to this location is not allowed.' );\n";
	$txt .= "\$params_oziogallery	= array();\n";
	$txt .= "\$params_oziogallery[\"height\"] = \"".JRequest::getVar( 'height' )."\";\n";
	$txt .= "\$params_oziogallery[\"width\"] = \"".JRequest::getVar( 'width' )."\";\n";
	$txt .= "\$params_oziogallery[\"columns\"] = \"".JRequest::getVar( 'columns' )."\";\n";
	$txt .= "\$params_oziogallery[\"rows\"]	= \"".JRequest::getVar( 'rows' )."\";\n";
	$txt .= "\$params_oziogallery[\"user_id\"] = \"".JRequest::getVar( 'user_id' )."\";\n";
	$txt .= "\$params_oziogallery[\"set_id\"] = \"".JRequest::getVar( 'set_id' )."\";\n";
	$txt .= "\$params_oziogallery[\"text\"]	= \"".JRequest::getVar( 'text' )."\";\n";
	$txt .= "\$params_oziogallery[\"tags\"]	= \"".JRequest::getVar( 'tags' )."\";\n";
	$txt .= "\$params_oziogallery[\"framecolor\"] = \"".JRequest::getVar( 'framecolor' )."\";\n";
	$txt .= "\$params_oziogallery[\"bkgndinnercolor\"] = \"".JRequest::getVar( 'bkgndinnercolor' )."\";\n";
	$txt .= "\$params_oziogallery[\"flickr\"] = ".$fli.";\n";
	$txt .= "\$params_oziogallery[\"sort\"]	= ".$so.";\n";
	$txt .= "\$params_oziogallery[\"tag_mode\"]	= ".$tm.";\n";
	$txt .= "\$params_oziogallery[\"skin\"]	= ".JRequest::getVar( 'skin' ).";\n";
	$txt .= "\$params_oziogallery[\"group_id\"]	= \"".JRequest::getVar( 'group_id' )."\";\n";
	$txt .= "\$params_oziogallery[\"bkgndoutercolor\"]	= \"".JRequest::getVar( 'bkgndoutercolor' )."\";\n";
	$txt .= "\$params_oziogallery[\"xml_mode\"]	= ".$xml.";\n";
	$txt .= "\$params_oziogallery[\"xml_moder\"] = ".$xmr.";\n";
	$txt .= "\$params_oziogallery[\"xml_model\"] = ".$xmm.";\n";
	$txt .= "\$params_oziogallery[\"heightr\"] = \"".JRequest::getVar( 'heightr' )."\";\n";
	$txt .= "\$params_oziogallery[\"widthr\"] = \"".JRequest::getVar( 'widthr' )."\";\n";
	$txt .= "\$params_oziogallery[\"trans\"] = ".JRequest::getVar( 'trans' ).";\n";
	$txt .= "\$params_oziogallery[\"navigation\"]	= ".$nav.";\n";
	$txt .= "\$params_oziogallery[\"logo\"]	= \"".JRequest::getVar( 'logo' )."\";\n";
	$txt .= "\$params_oziogallery[\"time\"]	= \"".JRequest::getVar( 'time' )."\";\n";
	$txt .= "\$params_oziogallery[\"audio\"] = \"".JRequest::getVar( 'audio' )."\";\n";
	$txt .= "\$params_oziogallery[\"volume\"] = \"".JRequest::getVar( 'volume' )."\";\n";
	$txt .= "\$params_oziogallery[\"bkgndoutercolorr\"]	= \"".JRequest::getVar( 'bkgndoutercolorr' )."\";\n";
	$txt .= "\$params_oziogallery[\"widthl\"] = \"".JRequest::getVar( 'widthl' )."\";\n";
	$txt .= "\$params_oziogallery[\"heightl\"] = \"".JRequest::getVar( 'heightl' )."\";\n";
	$txt .= "\$params_oziogallery[\"bkgndoutercolorl\"]	= \"".JRequest::getVar( 'bkgndoutercolorl' )."\";\n";
	$txt .= "\$params_oziogallery[\"transl\"] = ".JRequest::getVar( 'transl' ).";\n";
	$txt .= "\$params_oziogallery[\"maximagesize\"]	= \"".JRequest::getVar( 'maximagesize' )."\";\n";
	$txt .= "\$params_oziogallery[\"download\"]	= ".$dow.";\n";
	$txt .= "\$params_oziogallery[\"bkgndretro\"] = \"".JRequest::getVar( 'bkgndretro' )."\";\n";
	$txt .= "\$params_oziogallery[\"widths\"] = \"".JRequest::getVar( 'widths' )."\";\n";
	$txt .= "\$params_oziogallery[\"maximg\"] = \"".JRequest::getVar( 'maximg' )."\";\n";
	$txt .= "\$params_oziogallery[\"imagesize\"] = ".JRequest::getVar( 'imagesize' ).";\n";
	$txt .= "\$params_oziogallery[\"randomize\"] = ".$ra.";\n";
	$txt .= "\$params_oziogallery[\"heighta\"] = \"".JRequest::getVar( 'heighta' )."\";\n";
	$txt .= "\$params_oziogallery[\"widtha\"] = \"".JRequest::getVar( 'widtha' )."\";\n";
	$txt .= "\$params_oziogallery[\"bkgndoutercolora\"]	= \"".JRequest::getVar( 'bkgndoutercolora' )."\";\n";	
	$txt .= "\$params_oziogallery[\"xml_modea\"] = ".$xma.";\n";
	$txt .= "\$params_oziogallery[\"heightselect\"]	= \"".JRequest::getVar( 'heightselect' )."\";\n";
	$txt .= "\$params_oziogallery[\"widthselect\"] = \"".JRequest::getVar( 'widthselect' )."\";\n";
	$txt .= "\$params_oziogallery[\"fotoiniziale\"]	= \"".JRequest::getVar( 'fotoiniziale' )."\";\n";
	$txt .= "\$params_oziogallery[\"tuttochiuso\"] = ".$ba.";\n";
	$txt .= "\$params_oziogallery[\"movimento\"] = ".$mov.";\n";
	$txt .= "\$params_oziogallery[\"widthf\"] = \"".JRequest::getVar( 'widthf' )."\";\n";
	$txt .= "\$params_oziogallery[\"downloadtxt\"] = \"".JRequest::getVar( 'downloadtxt' )."\";\n";
	$txt .= "\$params_oziogallery[\"widthgal\"]	= \"".JRequest::getVar( 'widthgal' )."\";\n";
	$txt .= "\$params_oziogallery[\"heightgal\"] = \"".JRequest::getVar( 'heightgal' )."\";\n";
	$txt .= "\$params_oziogallery[\"pathgall\"]	= \"".JRequest::getVar( 'pathgall' )."\";\n";
	$txt .= "\$params_oziogallery[\"accordiontitle\"] = ".$atl.";\n";
	$txt .= "\$params_oziogallery[\"categorytitle\"] = \"".JRequest::getVar( 'categorytitle' )."\";\n";
	$txt .= "\$params_oziogallery[\"xmlcolor\"]	= ".JRequest::getVar( 'xmlcolor' ).";\n";
	$txt .= "\$params_oziogallery[\"tiltalign\"]	= ".JRequest::getVar( 'tiltalign' ).";\n";
	$txt .= "\$params_oziogallery[\"rotatoralign\"]	= ".JRequest::getVar( 'rotatoralign' ).";\n";
	$txt .= "\$params_oziogallery[\"lustalign\"]	= ".JRequest::getVar( 'lustalign' ).";\n";
	$txt .= "\$params_oziogallery[\"accoalign\"]	= ".JRequest::getVar( 'accoalign' ).";\n";
	$txt .= "\$params_oziogallery[\"galalign\"]	= ".JRequest::getVar( 'galalign' ).";\n";
	$txt .= "\$params_oziogallery[\"widthcaro\"]	= \"".JRequest::getVar( 'widthcaro' )."\";\n";
	$txt .= "\$params_oziogallery[\"heightcaro\"] = \"".JRequest::getVar( 'heightcaro' )."\";\n";
	$txt .= "\$params_oziogallery[\"pathgallcaro\"]	= \"".JRequest::getVar( 'pathgallcaro' )."\";\n";
	$txt .= "\$params_oziogallery[\"caroalign\"]	= ".JRequest::getVar( 'caroalign' ).";\n";
	$txt .= "\$params_oziogallery[\"carousellink\"] = ".$cat.";\n";
	$txt .= "\$params_oziogallery[\"carouseltarget\"] = ".$cal.";\n";
	$txt .= "\$params_oziogallery[\"loaderColor\"]	= \"".JRequest::getVar( 'loaderColor' )."\";\n";
	$txt .= "\$params_oziogallery[\"retrotxt\"]	= \"".JRequest::getVar( 'retrotxt' )."\";\n";
	$txt .= "\$params_oziogallery[\"xml_modec\"] = ".$xmc.";\n";
	$txt .= "\$params_oziogallery[\"pathrot\"]	= \"".JRequest::getVar( 'pathrot' )."\";\n";
	$txt .= "\$params_oziogallery[\"pathlust\"]	= \"".JRequest::getVar( 'pathlust' )."\";\n";
	$txt .= "\$params_oziogallery[\"pathacco\"]	= \"".JRequest::getVar( 'pathacco' )."\";\n";
	$txt .= "\$params_oziogallery[\"pathport\"]	= \"".JRequest::getVar( 'pathport' )."\";\n";
	$txt .= "\$params_oziogallery[\"pathimagin\"]	= \"".JRequest::getVar( 'pathimagin' )."\";\n";
	$txt .= "\$params_oziogallery[\"widthimagin\"]	= \"".JRequest::getVar( 'widthimagin' )."\";\n";
	$txt .= "\$params_oziogallery[\"heightimagin\"]	= \"".JRequest::getVar( 'heightimagin' )."\";\n";
	$txt .= "\$params_oziogallery[\"imagin_swf_color\"]	= \"".JRequest::getVar( 'imagin_swf_color' )."\";\n";
	$txt .= "\$params_oziogallery[\"titlegall\"]	= ".JRequest::getVar( 'titlegall' ).";\n";
	
	$settings  = "<?php\n";
	$settings .= $txt;
	$settings .= "?>";

	if( $fp = fopen( "$configfile", "w" ))
	{
		fputs( $fp, $settings, strlen( $settings ) );
		fclose( $fp );
		$config_saved = 1;
	} else {
		$msg = "Can't open the settings file. Can't save your changes :(";
		$link = 'index.php?option=' . $option .	'&task=showSettings';
	}

	if( isset( $config_saved ) )
	{
		switch ($task)
		{
			case 'applySettings':
				$msg = "Settings saved";
				$link = 'index.php?option=' . $option .	'&task=showSettings';
				break;
			case 'saveSettings':
			default:
				$msg = "Settings saved";
				$link = 'index.php?option=' . $option;
				break;
		}
		
		$mainframe->redirect( $link, $msg);
	}
}

////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
// FAQ
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
function showFAQ( $option )
{
	$lists["faq"] = array();
	$faq["question"] = "Very Important Note";
	$faq["answer"] = "Once you install the Ozio Gallery software on your site, you need to <strong>upload the photos</strong> to images/oziogallery directory.";

	$lists["faq"][] = $faq;

	HTML_oziogallery::showFAQ( $option, $lists );
}
	
?>
