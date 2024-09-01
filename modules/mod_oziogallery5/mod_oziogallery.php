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
global $mainframe, $headtag;
jimport( 'joomla.application.component.view');


$ozio_width = $params->get('ozio_width', '');
$ozio_height = $params->get('ozio_height', '');
$ozio_bkgndoutercolor = $params->get('ozio_bkgndoutercolor', '');
$ozio_user_id = $params->get('ozio_user_id', '');
$ozio_tags = $params->get('ozio_tags', '');
$ozio_text = $params->get('ozio_text', '');
$ozio_group_id = $params->get('ozio_group_id', '');
$ozio_set_id = $params->get('ozio_set_id', '');
$ozio_columns = $params->get('ozio_columns', '');
$ozio_rows = $params->get('ozio_rows', '');
$ozio_framecolor = $params->get('ozio_framecolor', '');
$ozio_bkgndinnercolor = $params->get('ozio_bkgndinnercolor', '');
$flickr = $params->get('flickr', '');
$tag_mode = $params->get('tag_mode', '');
$sort = $params->get('sort', '');
$xml_mode = $params->get('xml_mode', '');
$maxJPGSize = $params->get('maxJPGSize', '');
$skin = $params->get('skin', '');
$xmlURL = $params->get('xmlURL', '');
$phpURL = $params->get('phpURL', '');
$ozio_widthr = $params->get('ozio_widthr', '');
$ozio_heightr = $params->get('ozio_heightr', '');
$xmlURLr = $params->get('xmlURLr', '');
$phpURLr = $params->get('phpURLr', '');
$xml_moder = $params->get('xml_moder', '');
$transition = $params->get('transition', '');
$shownavigation = $params->get('shownavigation', '');
$logo = $params->get('logo', '');
$rotatetime = $params->get('rotatetime', '');
$audio = $params->get('audio', '');
$volume = $params->get('volume', '');
$screencolor = $params->get('screencolor', '');
$ozio_widthl = $params->get('ozio_widthl', '');
$ozio_heightl = $params->get('ozio_heightl', '');
$transitionlust = $params->get('transitionlust', '');
$screencolorlust = $params->get('screencolorlust', '');
$xml_model = $params->get('xml_model', '');
$xmlURLl = $params->get('xmlURLl', '');
$phpURLl = $params->get('phpURLl', '');
$ozio_bkgndretro = $params->get('ozio_bkgndretro', '');
$ozio_download = $params->get('ozio_download', '');
$ozio_widthslideoo = $params->get('ozio_widthslideoo', '');
$dimensionislideoo = $params->get('dimensionislideoo', '');
$slideoonum = $params->get('slideoonum', '');
$slideoorandom = $params->get('slideoorandom', '');
$xml_modelacco = $params->get('xml_modelacco', '');
$phpURLacco = $params->get('phpURLacco', '');
$xmlURLacco = $params->get('xmlURLacco', '');
$accordion_iniz = $params->get('accordion_iniz', '');
$accordion_num = $params->get('accordion_num', '');
$accordion_widths = $params->get('accordion_widths', '');
$accordion_heights = $params->get('accordion_heights', '');
$accordion_width = $params->get('accordion_width', '');
$accordion_height = $params->get('accordion_height', '');
$screencoloraccordion = $params->get('screencoloraccordion', '');
$movimento = $params->get('movimento', '');
$downloadtxt = $params->get('downloadtxt', '');
$widthgal = $params->get('widthgal', '');
$heightgal = $params->get('heightgal', '');
$pathgall = $params->get('pathgall', '');
$accordiontitle = $params->get('accordiontitle', '');
$xmlcolor = $params->get('xmlcolor', '');
$tiltalign = $params->get('tiltalign', '');
$rotatoralign = $params->get('rotatoralign', '');
$lustalign = $params->get('lustalign', '');
$accoalign = $params->get('accoalign', '');
$galalign = $params->get('galalign', '');
$widthcaro = $params->get('widthcaro', '');
$heightcaro = $params->get('heightcaro', '');
$caroalign = $params->get('caroalign', '');
$carouseltitle = $params->get('carouseltitle', '');
$xmlURLcaro = $params->get('xmlURLcaro', '');
$phpURLcaro = $params->get('phpURLcaro', '');
$flashtitle = $params->get('flashtitle', '');
$colorcaro = $params->get('colorcaro', '');
$widthimagin = $params->get('widthimagin', '');
$heightimagin = $params->get('heightimagin', '');
$colorimagin = $params->get('colorimagin', '');
$imaginURL = $params->get('imaginURL', '');


if ($skin=="carousel"){
$oggetto = "version/swfobject.js";
} else if ($skin=="imagin"){
$oggetto = "version/swfobject.js";
} else {
$oggetto =  "swfobject.js";
}

$headtag = "<script type=\"text/javascript\" src=\"" . JURI::root(true) . "/components/com_oziogallery/".$oggetto."\"></script>";
$mainframe->addCustomHeadTag($headtag);
?>

<?php if ($skin=="tiltviewer") {
	echo '<style type="text/css">
			.oziofloat {
				width: '.$ozio_width.'px;
				height: '.$ozio_height.'px;
				margin: 0px auto;
				'?><?php if( $tiltalign == "0" ) {
				echo "float: left;";
				}
				else if ( $tiltalign == "1" ) {
				echo "float: right;";
				}
				else { 
				echo "float: inherit;";
				}?><?php echo '
			}
		</style>
<table width="100%"><tr><td>
	<div id="ozioflashcontent" class="oziofloat">TiltViewer requires JavaScript and the latest Flash player. <a href="http://www.macromedia.com/go/getflashplayer/">Get Flash here.</a></div></td></tr></table>
	<script type="text/javascript">
		var fo = new SWFObject("'.JURI::root().'components/com_oziogallery/TiltViewer.swf", "viewer", "'.$ozio_width.'", "'.$ozio_height.'", "9.0.28", "#'.$ozio_bkgndoutercolor.'");
		//FLICKR GALLERY OPTIONS
		// To use images from Flickr, uncomment this block
		fo.addVariable("user_id", "'?><?php echo $ozio_user_id;?><?php echo '");
		fo.addVariable("tags", "'?><?php echo $ozio_tags;?><?php echo '");
		fo.addVariable("text", "'?><?php echo $ozio_text;?><?php echo '");
		fo.addVariable("tag_mode", "'?><?php if ($tag_mode == "1") {
        echo "any";
    }
  else {
	echo "all";
  }?><?php echo '");
		fo.addVariable("showTakenByText", "true");
        fo.addVariable("sort", "'?><?php if ($sort == "1") {
        echo "relevance";
    }?><?php echo '");
        fo.addVariable("group_id", "'?><?php echo $ozio_group_id;?><?php echo '");
		fo.addVariable("set_id", "'?><?php echo $ozio_set_id;?><?php echo '");
		// XML GALLERY OPTIONS
		// To use local images defined in an XML document, use this block
		fo.addVariable("useFlickr", "'?><?php if ($flickr == "1") {
        echo "true";
    }
  else {
	echo "false";
  }?><?php echo '");
		fo.addVariable("xmlURL", '?><?php if ($xml_mode == "1") {
        echo '"'.JURI::root().$xmlURL.'"';
    }
  else {
	echo '"'.JURI::root().$phpURL.'"';
  }?><?php echo ');
		fo.addVariable("maxJPGSize","'?><?php echo $maxJPGSize;?><?php echo '");
		//GENERAL OPTIONS
		fo.addVariable("useReloadButton", "false");
		fo.addVariable("columns", "'?><?php echo $ozio_columns;?><?php echo '");
		fo.addVariable("rows", "'?><?php echo $ozio_rows;?><?php echo '");
		fo.addVariable("showFlipButton", "true");
		fo.addVariable("showLinkButton", '?><?php if ( $ozio_download == 1 ) echo '"true"'; else if ( $ozio_download == 0 ) echo '"false"'; ?><?php echo ');
		fo.addVariable("linkLabel", "'?><?php echo $downloadtxt;?><?php echo '");
		fo.addVariable("frameColor", "0x'?><?php echo $ozio_framecolor;?><?php echo '");
		fo.addVariable("backColor", "0x'?><?php echo $ozio_bkgndretro;?><?php echo '");
		fo.addVariable("bkgndInnerColor", "0x'?><?php echo $ozio_bkgndinnercolor;?><?php echo '");
		fo.addVariable("bkgndOuterColor", "0x'?><?php echo $ozio_bkgndoutercolor;?><?php echo '");				
		//fo.addVariable("langGoFull", "Go Fullscreen");
		//fo.addVariable("langExitFull", "Exit Fullscreen");
		//fo.addVariable("langAbout", "About");
		
		// END TILTVIEWER CONFIGURATION OPTIONS
		fo.addParam("wmode", "transparent");
		fo.addParam("allowFullScreen","true");
		fo.write("ozioflashcontent");
	</script>';
}	
?>
<?php if ($skin=="slideshow") {
echo '<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>
		<td align="center"><iframe align="center" src="http://www.flickr.com/slideShow/index.gne?user_id='?><?php echo $ozio_user_id;?><?php echo '&group_id='?><?php echo $ozio_group_id;?><?php echo '&text='?><?php echo $ozio_text;?><?php echo '&tags='?><?php echo $ozio_tags;?><?php echo '&set_id='?><?php echo $ozio_set_id;?><?php echo '&'?><?php if( $sort == 1 ) echo "sort=relevance";?><?php echo '" frameBorder="0" width="500" scrolling="no" height="500"></iframe>
		</td>
		</tr>
		</table>';
}	
?>

<?php if ($skin=="flickrPhotos") {
echo '<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>
		<td align="center">
<iframe align="center" src="http://www.flickr.com/photos/'?><?php echo $ozio_user_id;?><?php if ($ozio_tags == '') : ?><?php echo ""; ?><?php else : ?><?php echo "/tags/" .$ozio_tags; ?><?php endif; ?><?php if ($ozio_set_id == '') : ?><?php echo ""; ?><?php else : ?><?php echo "/sets/" .$ozio_set_id; ?><?php endif; ?><?php if( $sort == 1 ) echo "/interesting";?><?php echo '/show" frameBorder="0" width="740" scrolling="no" height="450"></iframe>	
		</td>
		</tr>
		</table>';
}	
?>

<?php if ($skin=="imagerotator") {
echo '<style type="text/css">
			.oziofloat {
				width: '.$ozio_widthr.'px;
				height: '.$ozio_heightr.'px;
				margin: 0px auto;
				'?><?php if( $rotatoralign == "0" ) {
				echo "float: left;";
				}
				else if ( $rotatoralign == "1" ) {
				echo "float: right;";
				}
				else { 
				echo "float: inherit;";
				}?><?php echo '
			}
		</style>
<table width="100%"><tr><td>
<div id="oziocontainer" class="oziofloat"><a href="http://www.macromedia.com/go/getflashplayer">Get the Flash Player</a> to see this rotator.</div></td></tr></table>'?>

	<?php echo '<script type="text/javascript">
		var s1 = new SWFObject("'.JURI::root().'components/com_oziogallery/imagerotator.swf","rotator","'.$ozio_widthr.'","'.$ozio_heightr.'","7");
		s1.addVariable("file",'?><?php if ($flickr == "1") echo '"http://api.flickr.com/services/feeds/photos_public.gne?id='.$ozio_user_id.'&format=rss_200"'; else if( $xml_moder == 0 ) echo '"'.JURI::root().$phpURLr.'"'; else if ( $xml_moder == 1 ) echo '"'.JURI::root().$xmlURLr.'"';?><?php echo ');
		s1.addVariable("width","'.$ozio_widthr.'");
		s1.addVariable("height","'.$ozio_heightr.'");
		s1.addVariable("transition","'?><?php if ($transition =="random") echo "random"; else if($transition =="fade") echo "fade"; else if($transition =="blocks") echo "blocks"; else if($transition =="circles") echo "circles"; else if($transition =="lines") echo "lines"; else if($transition =="slowfade") echo "slowfade"; else if($transition =="bubbles") echo "bubbles"; ?><?php echo '");
		s1.addVariable("shownavigation","'?><?php if ($shownavigation == "1") {
        echo "true";
    }?><?php echo '");
	    s1.addVariable("kenburns","'?><?php if( $movimento == "1" ) {
        echo "true";
    }?><?php echo '");
		s1.addVariable("logo","'.JURI::root().''?><?php echo $logo;?><?php echo '");
		s1.addVariable("rotatetime","'?><?php echo $rotatetime;?><?php echo '");
        '?><?php if( $audio != null ) echo 's1.addVariable("audio","'.JURI::root().''.$audio.'");';?><?php echo '
		s1.addVariable("volume","'?><?php echo $volume;?><?php echo '");
		s1.addVariable("screencolor","0x'?><?php echo $screencolor;?><?php echo '");
		s1.addParam("wmode", "transparent");
		s1.write("oziocontainer");
	</script>';
}	
?>

<?php if ($skin=="lustMosaico") {
echo '<script type="text/javascript" src="'.JURI::root().'components/com_oziogallery/lustswf.js"></script>'?>

	<?php echo '<style type="text/css">
			.oziofloat {
				width: '.$ozio_widthl.'px;
				height: '.$ozio_heightl.'px;
				margin: 0px auto;
				'?><?php if( $lustalign == "0" ) {
				echo "float: left;";
				}
				else if ( $lustalign == "1" ) {
				echo "float: right;";
				}
				else { 
				echo "float: inherit;";
				}?><?php echo '
			}
		</style>
<table width="100%"><tr><td>
	<div id="ozioflash" class="oziofloat">

	<script type="text/javascript">
	
	lustswf.start("'.JURI::root().'components/com_oziogallery/mosaico.swf", "flash_obj", "'.$ozio_widthl.'", "'.$ozio_heightl.'", "9", "#'?><?php echo $screencolorlust;?><?php echo '");
	lustswf.addVariable("contWidth","'?><?php echo $ozio_widthl;?><?php echo '");
	lustswf.addVariable("contHeight","'?><?php echo $ozio_heightl;?><?php echo '");
	lustswf.addVariable("initColor","0x'?><?php echo $screencolorlust;?><?php echo '");
	lustswf.addVariable("imagessrc",'?><?php if ( $xml_model == 0 ) echo '"'.JURI::root().$phpURLl.'"'; else if ( $xml_model == 1 ) echo '"'.JURI::root().$xmlURLl.'"';?><?php echo ');
	lustswf.addVariable("viewersrc","'?><?php if ($transitionlust =="alpha") echo "alpha"; else if($transitionlust =="random") echo "random"; else if($transitionlust =="mosaico") echo "mosaico"; else if($transitionlust =="treddi") echo "treddi"; else if($transitionlust =="treddicube") echo "treddicube"; else if($transitionlust =="treddimosaico") echo "treddimosaico"; else if($transitionlust =="treddicubeint") echo "treddicubeint"; else if($transitionlust =="treddicover") echo "treddicover"; ?><?php echo '");
	lustswf.addParam("wmode","transparent");
	lustswf.write("ozioflash");
		
	</script>

</div></td></tr></table>'; 
}	

?>

<?php if ($skin=="slideoo") {
echo '<object width="'?><?php echo $ozio_widthslideoo;?><?php echo '" height="'?><?php if( $dimensionislideoo == "thumbnail" ) echo '80'; else if ( $dimensionislideoo == "medium" ) echo '170'; else if ( $dimensionislideoo == "big" ) echo '320';?><?php echo '">
      <param name="movie" value="'.JURI::root().'components/com_oziogallery/slider.swf">
      </param>
      <param name="wmode" value="transparent">
      </param>
      <param name="flashvars" value="setId='?><?php echo $ozio_set_id;?><?php echo '&size'?><?php if( $dimensionislideoo == "thumbnail" ) echo '_t'; else if ( $dimensionislideoo == "medium" ) echo '_m'; else if ( $dimensionislideoo == "big" ) echo '';?><?php echo '&max='?><?php echo $slideoonum;?><?php echo '&userid='?><?php echo $ozio_user_id;?><?php echo '&tag='?><?php echo $ozio_tags;?><?php echo '&randomize='?><?php if( $slideoorandom == 0 ) echo "1"; ?><?php echo '">
      </param>
      <embed src="'.JURI::root().'components/com_oziogallery/slider.swf" type="application/x-shockwave-flash" wmode="transparent" flashvars="setId='?><?php echo $ozio_set_id;?><?php echo '&size='?><?php if( $dimensionislideoo == "thumbnail" ) echo '_t'; else if ( $dimensionislideoo == "medium" ) echo '_m'; else if ( $dimensionislideoo == "big" ) echo '';?><?php echo '&max='?><?php echo $slideoonum;?><?php echo '&userid='?><?php echo $ozio_user_id;?><?php echo '&tag='?><?php echo $ozio_tags;?><?php echo '&randomize='?><?php if( $slideoorandom == 0 ) echo "1"; ?><?php echo '" width="'?><?php echo $ozio_widthslideoo;;?><?php echo '" height="'?><?php if( $dimensionislideoo == "thumbnail" ) echo '80'; else if ( $dimensionislideoo == "medium" ) echo '170'; else if ( $dimensionislideoo == "medium" ) echo '320';?><?php echo '"></embed>
    </object>';
}	
?>

<?php if ($skin=="accordion") {
echo '<style type="text/css">
			.oziofloat {
				width: '.$accordion_width.'px;
				height: '.$accordion_height.'px;
				margin: 0px auto;
				'?><?php if( $accoalign == "0" ) {
				echo "float: left;";
				}
				else if ( $accoalign == "1" ) {
				echo "float: right;";
				}
				else { 
				echo "float: inherit;";
				}?><?php echo '
			}
		</style>
<table width="100%"><tr><td>
<div id="ozioflashcontent" class="oziofloat">
			<strong>You need to upgrade your Flash Player.</strong>
		</div></td></tr></table>
		<script type="text/javascript">
			var so = new SWFObject("'?><?php if ($accordiontitle == "1") {
        echo ''.JURI::root().'components/com_oziogallery/preview2.swf?xmlPath=';
    }
  else {
	echo ''.JURI::root().'components/com_oziogallery/preview.swf?xmlPath=';
  }?><?php if ($xml_modelacco == "1") {
        echo ''.JURI::root().$xmlURLacco.'';
    }
  else {
	echo ''.JURI::root().$phpURLacco.'';
  }?><?php echo '&keepSelected='?><?php if( $accordion_iniz == "1" ) echo "f"; else echo "t";?><?php echo '&selectedWindow='?><?php echo $accordion_num;?><?php echo '&imageWidth='?><?php echo $accordion_widths;?><?php echo '&imageHeight='?><?php echo $accordion_heights;?><?php echo '&sWidth='?><?php echo $accordion_width;?><?php echo '&sHeight='?><?php echo $accordion_height;?><?php echo '", "sotester", "'?><?php echo $accordion_width;?><?php echo '", "'?><?php echo $accordion_height;?><?php echo '", "8", "#'?><?php echo $screencoloraccordion;?><?php echo '");
			so.addParam("allowFullScreen", "true");
			so.addParam("wmode", "transparent");
			so.write("ozioflashcontent");
			
		</script>';
}	
?>

<?php if ($skin=="flashgallery") {
echo '<style type="text/css">
			.oziofloat {
				width: '.$widthgal.'px;
				height: '.$heightgal.'px;
				margin: 0px auto;
				'?><?php if( $galalign == "0" ) {
				echo "float: left;";
				}
				else if ( $galalign == "1" ) {
				echo "float: right;";
				}
				else { 
				echo "float: inherit;";
				}?><?php echo '
			}
		</style>
<table width="100%"><tr><td>
<div id="oziogallery" class="oziofloat">
<h1>No flash player!</h1>
<p>You need to upgrade your Flash Player. <a href="http://www.macromedia.com/go/getflashplayer" >Click here</a> to go to Macromedia download page.</p>
</div></td></tr></table>

<!-- Script that embeds gallery. -->
<script language="javascript" type="text/javascript">
var so = new SWFObject("'.JURI::root().'components/com_oziogallery/flashgallery.swf", "gallery", "'.$widthgal.'", "'.$heightgal.'", "8"); // You can change gallery width and height here or by styling div that contains gallery (use pixels or percents).
so.addParam("quality", "high");
so.addParam("allowFullScreen", "true");
so.addParam("wmode", "transparent");
so.addVariable("content_path","'?><?php if ($flickr == "1") echo 'http://www.flickr.com/photos/'.$ozio_user_id.''; else if( $flickr == 0 ) echo '../../modules/mod_oziogallery/'.$pathgall.'';?><?php echo '"); // Location of a folder with JPG and PNG files (relative to php script) or a link to Flickr photostream (for example "http://www.flickr.com/photos/username/" or "http://www.flickr.com/photos/username/sets/setid/").
so.addVariable("color_path","'.JURI::root().'components/com_oziogallery/'.$xmlcolor.'.xml"); // Location of xml file with settings.
so.addVariable("script_path","'?><?php if ($flashtitle == "1") echo ''.JURI::root().'modules/mod_oziogallery/flashgallerytitle.php'; else if( $flashtitle == 0 ) echo ''.JURI::root().'modules/mod_oziogallery/flashgallery.php';?><?php echo '"); // Location of php script (not requred if you work with Flickr).
so.write("oziogallery");
</script>';
}	
?>
<?php if ($skin=="carousel") {
echo '<style type="text/css">
			.oziofloat {
				width: '.$widthcaro.'px;
				height: '.$heightcaro.'px;
				margin: 0px auto;
				'?><?php if( $caroalign == "0" ) {
				echo "float: left;";
				}
				else if ( $caroalign == "1" ) {
				echo "float: right;";
				}
				else { 
				echo "float: inherit;";
				}?><?php echo '
			}
		</style>
<table width="100%"><tr><td>
<div id="carousel_container" class="oziofloat">
	<div id="carousel1">
		<p>This slideshow requires <a href="http://www.adobe.com/go/getflashplayer">Adobe Flash Player 9.0</a> (or higher). JavaScript must be enabled.</p>
	</div>
</div></td></tr></table>
<script type="text/javascript">
	swfobject.embedSWF("'.JURI::root().'components/com_oziogallery/Carousel.swf", "carousel1", "'.$widthcaro.'", "'.$heightcaro.'", "9.0.0", false, {xmlfile:"'?><?php if ($carouseltitle == "1") {
        echo ''.JURI::root().$xmlURLcaro.'';
    }
  else {
	echo ''.JURI::root().$phpURLcaro.'';
  }?><?php echo '", loaderColor:"#'.$colorcaro.'"}, {wmode: "transparent"});
</script>';
}	
?>
<?php if ($skin=="imagin") {
echo '<script src="'.JURI::root().'components/com_oziogallery/imagin/scripts_ralcr/js/flash_resize.js"></script>
	<script src="'.JURI::root().'components/com_oziogallery/imagin/scripts_ralcr/js/swfmacmousewheel2.js"></script>
	<script src="'.JURI::root().'components/com_oziogallery/imagin/scripts_ralcr/js/swfaddress.js"></script>
	<script src="'.JURI::root().'components/com_oziogallery/imagin/scripts_ralcr/js/swfaddress-optimizer.js?flash=9"></script>
	
	<script language="JavaScript">
		var imagin_scripts_path = "components/com_oziogallery/imagin/scripts_ralcr/"; // a path relative to the html which embeds the swf
		var imagin_photos_path = "../../../'.$imaginURL.'/"; // a path relative to "scripts_ralcr" parent
		
		var imagin_instance = "imagin_instance";
		var imagin_swf_color = "'.$colorimagin.'";
		var imagin_swf_width = "'.$widthimagin.'";
		var imagin_swf_height= "'.$heightimagin.'";
		
		
		// SWFObject embed by Geoff Stearns geoff@deconcept.com http://blog.deconcept.com/
		var flashvars = { id:imagin_instance, scripts_path:imagin_scripts_path, photos_path:imagin_photos_path };
		var params = { allowFullScreen:"true", allowNetworking:"all", allowScriptAccess:"always", bgcolor:imagin_swf_color };
		var attributes = { id:imagin_instance, name:imagin_instance };
		
		swfobject.embedSWF ("'.JURI::root().'components/com_oziogallery/imagin/imagin.swf?"+Math.random()*1, imagin_instance, imagin_swf_width, imagin_swf_height, "9",
							imagin_scripts_path + "/embed/expressInstall.swf", flashvars, params, attributes);
		swfmacmousewheel.registerObject( imagin_instance );
	</script>
	
	
	<div id="imagin_instance">
		<p>You need JavaScript activated and at least flash player 9 installed.</p>
	</div>';
}	
?>
		<style type="text/css">
			table.ozio {
				width: 100%;
				font-size: 9px;
			}
		</style>
		<table class="ozio" border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td align="right">Powered By <a href="http://www.joomla.it" title="Italian Joomla Support">Joomla.it</a>
		</td>
		</tr>
		</table>