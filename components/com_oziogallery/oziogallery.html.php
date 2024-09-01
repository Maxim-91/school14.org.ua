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
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
global $mainframe, $headtag;
jimport( 'joomla.application.component.view');

class HTML_oziogallery
{
	function tiltviewer( $option, &$params )
	{
	?>
<?php echo '<style type="text/css">
			.oziofloat {
				width: '.$params["width"].'px;
				height: '.$params["height"].'px;
				margin: 0px auto;
				'?><?php if( $params["tiltalign"] == 0 ) echo 'float: left;'; else if ( $params["tiltalign"] == 1 ) echo 'float: right;'; else echo 'float: inherit;';?><?php echo '
			}
		</style>
<table width="100%"><tr><td>
<div id="ozioflashcontent" class="oziofloat">TiltViewer requires JavaScript and the latest Flash player. <a href="http://www.macromedia.com/go/getflashplayer/">Get Flash here.</a></div></div></td></tr></table>
	<script type="text/javascript">
		var fo = new SWFObject("'.JURI::root().'components/com_oziogallery/TiltViewer.swf", "viewer", "'.$params["width"].'", "'.$params["height"].'", "9.0.28", "#'.$params["bkgndoutercolor"].'");
		//FLICKR GALLERY OPTIONS
		// To use images from Flickr, uncomment this block
		fo.addVariable("user_id", "'.$params["user_id"].'");
		fo.addVariable("tags", "'.$params["tags"].'");
		fo.addVariable("text", "'.$params["text"].'");
		fo.addVariable("tag_mode", "'?><?php if( $params["tag_mode"] == 0 ) echo "all"; else if ( $params["tag_mode"] == 1 ) echo "any";?><?php echo '");
		fo.addVariable("showTakenByText", "true");
        fo.addVariable("sort", "'?><?php if( $params["sort"] == 1 ) echo "relevance"; ?><?php echo '");
        fo.addVariable("group_id", "'.$params["group_id"].'");
		fo.addVariable("set_id", "'.$params["set_id"].'");
		// XML GALLERY OPTIONS
		// To use local images defined in an XML document, use this block
		fo.addVariable("useFlickr", "'?><?php if( $params["flickr"] == 1 ) echo "true"; ?><?php echo '");
		fo.addVariable("xmlURL", '?><?php if( $params["xml_mode"] == 0 ) echo '"'.JURI::root().'components/com_oziogallery/gallery.php"'; else if ( $params["xml_mode"] == 1 ) echo '"'.JURI::root().'components/com_oziogallery/gallery.xml"';?><?php echo ');
		fo.addVariable("maxJPGSize","'.$params["maximagesize"].'");
		//GENERAL OPTIONS
		fo.addVariable("useReloadButton", "false");
		fo.addVariable("columns", "'.$params["columns"].'");
		fo.addVariable("rows", "'.$params["rows"].'");
		fo.addVariable("showFlipButton", "true");
		fo.addVariable("showLinkButton", "'?><?php if( $params["download"] == 1 ) echo "true"; ?><?php echo '");
		fo.addVariable("linkLabel", "'.$params["downloadtxt"].'");
		fo.addVariable("frameColor", "0x'.$params["framecolor"].'");
		fo.addVariable("backColor", "0x'.$params["bkgndretro"].'");
		fo.addVariable("bkgndInnerColor", "0x'.$params["bkgndinnercolor"].'");
		fo.addVariable("bkgndOuterColor", "0x'.$params["bkgndoutercolor"].'");				
		//fo.addVariable("langGoFull", "Go Fullscreen");
		//fo.addVariable("langExitFull", "Exit Fullscreen");
		//fo.addVariable("langAbout", "About");
		
				//PRO OPTIONS
		//fo.addVariable("bkgndTransparent", "true");
		//fo.addVariable("showFullscreenOption", "false");
		//fo.addVariable("frameWidth", "40");
		//fo.addVariable("zoomedInDistance", "1400");
		//fo.addVariable("zoomedOutDistance", "7500");
		//fo.addVariable("fontName", "Times");
		//fo.addVariable("titleFontSize", "90");
		//fo.addVariable("descriptionFontSize", "32");
		//fo.addVariable("linkFontSize", "41");
		//fo.addVariable("linkTarget", "_self");
		//fo.addVariable("navButtonColor", "0xFF00FF");
		//fo.addVariable("flipButtonColor", "0x0000FF");
		//fo.addVariable("textColor", "0xFFFFFF");
		//fo.addVariable("linkTextColor", "0x000000");
		//fo.addVariable("linkBkgndColor", "0xFFFFFF");
		
		// END TILTVIEWER CONFIGURATION OPTIONS
		fo.addParam("wmode", "transparent");
		fo.addParam("allowFullScreen","true");
		fo.write("ozioflashcontent");
	</script>';?>
	<?php
	}
	
	function slideshow( $option, &$params )
	{
	?>
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>
		<td align="center"><iframe align="center" src="http://www.flickr.com/slideShow/index.gne?user_id=<?php echo $params["user_id"];?>&group_id=<?php echo $params["group_id"];?>&text=<?php echo $params["text"];?>&tags=<?php echo $params["tags"];?>&set_id=<?php echo $params["set_id"];?>&<?php if( $params["sort"] == 1 ) echo "sort=relevance";?>" frameBorder="0" width="500" scrolling="no" height="500"></iframe>
		</td>
		</tr>
		</table>
	<?php
	}
		function postcardviewer( $option, &$params )
	{
	?>
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>
		<td align="center">
<iframe align="center" src="http://www.flickr.com/photos/<?php echo $params["user_id"]; ?><?php if ($params["tags"] == '') : ?><?php echo ""; ?><?php else : ?><?php echo "/tags/" .$params["tags"]; ?><?php endif; ?><?php if ($params["set_id"] == '') : ?><?php echo ""; ?><?php else : ?><?php echo "/sets/" .$params["set_id"]; ?><?php endif; ?><?php if( $params["sort"] == 1 ) echo "/interesting";?>/show" frameBorder="0" width="740" scrolling="no" height="450"></iframe>	
		</td>
		</tr>
		</table>
	<?php
	}
	
			function imagerotator( $option, &$params )
	{
     echo '<style type="text/css">
			.oziofloat {
				width: '.$params["widthr"].';
				height: '.$params["heightr"].';
				margin: 0px auto;
				'?><?php if( $params["rotatoralign"] == 0 ) echo 'float: left;'; else if ( $params["rotatoralign"] == 1 ) echo 'float: right;'; else echo 'float: inherit;';?><?php echo '
			}
		</style>
<table width="100%"><tr><td>
<div id="oziocontainer" class="oziofloat"><a href="http://www.macromedia.com/go/getflashplayer">Get the Flash Player</a> to see this rotator.</div></td></tr></table>';

	echo '<script type="text/javascript">
		var s1 = new SWFObject("'.JURI::root().'components/com_oziogallery/imagerotator.swf","rotator","'.$params["widthr"].'","'.$params["heightr"].'","7");
		s1.addVariable("file",'?><?php if( $params["flickr"] == 1 ) echo '"http://api.flickr.com/services/feeds/photos_public.gne?id='.$params["user_id"].'&format=rss_200"'; else if( $params["xml_moder"] == 0 ) echo '"'.JURI::root().'components/com_oziogallery/gallery.php"'; else if ( $params["xml_moder"] == 1 ) echo '"'.JURI::root().'components/com_oziogallery/imagerotator.xml"';?><?php echo ');
		s1.addVariable("width","'.$params["widthr"].'");
		s1.addVariable("height","'.$params["heightr"].'");
		s1.addVariable("transition",'?><?php if( $params["trans"] == 0 ) echo '"random"'; else if ( $params["trans"] == 1 ) echo '"fade"'; else if ( $params["trans"] == 2 ) echo '"blocks"'; else if ( $params["trans"] == 3 ) echo '"circles"'; else if ( $params["trans"] == 4 ) echo '"bubbles"'; else if ( $params["trans"] == 5 ) echo '"lines"'; else if ( $params["trans"] == 6 ) echo '"slowfade"';?><?php echo ');
		s1.addVariable("shownavigation","'?><?php if( $params["navigation"] == 1 ) echo "true"; ?><?php echo '");
		s1.addVariable("kenburns","'?><?php if( $params["movimento"] == 1 ) echo "true"; ?><?php echo '");
		s1.addVariable("logo","'.JURI::root().''.$params["logo"].'");
		s1.addVariable("rotatetime","'.$params["time"].'");
		'?><?php if( $params["audio"] != null ) echo 's1.addVariable("audio","'.JURI::root().''.$params["audio"].'");';?><?php echo '
		s1.addVariable("volume","'.$params["volume"].'");
		s1.addVariable("screencolor","0x'.$params["bkgndoutercolorr"].'");
		s1.addParam("wmode", "transparent");
		s1.write("oziocontainer");
	</script>';
	
	}
	
				function lustmosaico( $option, &$params )
	{
	?>
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>
		<td align="center">
<?php echo '<script type="text/javascript" src="'.JURI::root().'components/com_oziogallery/lustswf.js"></script>';

	echo '<style type="text/css">
			.oziofloat {
				width: '.$params["widthl"].';
				height: '.$params["heightl"].';
				margin: 0px auto;
				'?><?php if( $params["lustalign"] == 0 ) echo 'float: left;'; else if ( $params["lustalign"] == 1 ) echo 'float: right;'; else echo 'float: inherit;';?><?php echo '
			}
		</style>
		<table width="100%"><tr><td>
		<div id="ozioflash" class="oziofloat">
	<script type="text/javascript">
	lustswf.start("'.JURI::root().'components/com_oziogallery/mosaico.swf", "flash_obj", "'.$params["widthl"].'", "'.$params["heightl"].'", "9", "#'.$params["bkgndoutercolorl"].'");
	lustswf.addVariable("contWidth","'.$params["widthl"].'");
	lustswf.addVariable("contHeight","'.$params["heightl"].'");
	lustswf.addVariable("initColor","0x'.$params["bkgndoutercolorl"].'");
	lustswf.addVariable("imagessrc",'?><?php if( $params["xml_model"] == 0 ) echo '"'.JURI::root().'components/com_oziogallery/gallery.php"'; else if ( $params["xml_model"] == 1 ) echo '"'.JURI::root().'components/com_oziogallery/lustmosaico.xml"';?><?php echo ');
	lustswf.addVariable("viewersrc",'?><?php if( $params["transl"] == 0 ) echo '"alpha"'; else if ( $params["transl"] == 1 ) echo '"random"'; else if ( $params["transl"] == 2 ) echo '"mosaico"'; else if ( $params["transl"] == 3 ) echo '"treddi"'; else if ( $params["transl"] == 4 ) echo '"treddicube"'; else if ( $params["transl"] == 5 ) echo '"treddimosaico"'; else if ( $params["transl"] == 6 ) echo '"treddicubeint"'; else if ( $params["transl"] == 7 ) echo '"treddicover"';?><?php echo ');
	lustswf.addParam("wmode","transparent");
	lustswf.write("ozioflash");
		
	</script>

</div></td></tr></table>';?>
		</td>
		</tr>
		</table>
		
		
			<?php
	}
	
			function slideoo( $option, &$params )
	{
	?>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td align="center"><?php echo '<object width="'?><?php echo $params["widths"];?><?php echo '" height="'?><?php if( $params["imagesize"] == 0 ) echo '80'; else if ( $params["imagesize"] == 1 ) echo '170'; else if ( $params["imagesize"] == 2 ) echo '320';?><?php echo '">
      <param name="movie" value="'.JURI::root().'components/com_oziogallery/slider.swf">
      </param>
      <param name="wmode" value="transparent">
      </param>
      <param name="flashvars" value="setId='?><?php echo $params["set_id"];?><?php echo '&size'?><?php if( $params["imagesize"] == 0 ) echo '_t'; else if ( $params["imagesize"] == 1 ) echo '_m'; else if ( $params["imagesize"] == 2 ) echo '';?><?php echo '&max='?><?php echo $params["maximg"];?><?php echo '&userid='?><?php echo $params["user_id"];?><?php echo '&tag='?><?php echo $params["tags"];?><?php echo '&randomize='?><?php if( $params["randomize"] == 1 ) echo "1"; ?><?php echo '">
      </param>
      <embed src="'.JURI::root().'components/com_oziogallery/slider.swf" type="application/x-shockwave-flash" wmode="transparent" flashvars="setId='?><?php echo $params["set_id"];?><?php echo '&size='?><?php if( $params["imagesize"] == 0 ) echo '_t'; else if ( $params["imagesize"] == 1 ) echo '_m'; else if ( $params["imagesize"] == 2 ) echo '';?><?php echo '&max='?><?php echo $params["maximg"];?><?php echo '&userid='?><?php echo $params["user_id"];?><?php echo '&tag='?><?php echo $params["tags"];?><?php echo '&randomize='?><?php if( $params["randomize"] == 1 ) echo "1"; ?><?php echo '" width="'?><?php echo $params["widths"];?><?php echo '" height="'?><?php if( $params["imagesize"] == 0 ) echo '80'; else if ( $params["imagesize"] == 1 ) echo '170'; else if ( $params["imagesize"] == 2 ) echo '320';?><?php echo '"></embed>'?>
    </object>
</td>
</tr>
</table>
		
		
			<?php
	}
	
			function accordion( $option, &$params )
	{
    echo '<style type="text/css">
			.oziofloat {
				width: '.$params["widtha"].'px;
				height: '.$params["heighta"].'px;
				margin: 0px auto;
				'?><?php if( $params["accoalign"] == 0 ) echo 'float: left;'; else if ( $params["accoalign"] == 1 ) echo 'float: right;'; else echo 'float: inherit;';?><?php echo '
			}
		</style>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tr>
    <td align="center">
	
		<div id="ozioflashcontent" class="oziofloat">

			<strong>You need to upgrade your Flash Player.</strong>
		</div>
		
		<script type="text/javascript">
			
			var so = new SWFObject("'?><?php if( $params["accordiontitle"] == 0 ) echo ''.JURI::root().'components/com_oziogallery/preview2.swf?xmlPath='; else if ( $params["accordiontitle"] == 1 ) echo ''.JURI::root().'components/com_oziogallery/preview.swf?xmlPath=';?><?php if( $params["xml_modea"] == 0 ) echo ''.JURI::root().'components/com_oziogallery/accordion.php'; else if ( $params["xml_modea"] == 1 ) echo ''.JURI::root().'components/com_oziogallery/accordion.xml';?><?php echo '&keepSelected='?><?php if( $params["tuttochiuso"] == 1 ) echo "f"; else echo "t";?><?php echo '&selectedWindow='?><?php echo $params["fotoiniziale"];?><?php echo '&imageWidth='?><?php echo $params["widthselect"];?><?php echo '&imageHeight='?><?php echo $params["heightselect"];?><?php echo '&sWidth='?><?php echo $params["widtha"];?><?php echo '&sHeight='?><?php echo $params["heighta"];?><?php echo '", "sotester", "'?><?php echo $params["widtha"];?><?php echo '", "'?><?php echo $params["heighta"];?><?php echo '", "8", "#'?><?php echo $params["bkgndoutercolora"];?><?php echo '");
			so.addParam("allowFullScreen", "true");
			so.addParam("wmode", "transparent");
			so.write("ozioflashcontent");
			
		</script>';?>
		
	</td>
  </tr>
</table>

	<?php
	}
	
			function flashcategory( $option, &$params )
	{
echo '

<div id="ozioflashcontent">
Ozio Gallery requires JavaScript and the latest Flash player.
</div>

<script type="text/javascript">
   var so = new SWFObject("'.JURI::root().'components/com_oziogallery/dfgallery.swf", "gallery", "'?><?php echo $params["widthf"];?><?php echo '", "'?><?php echo $params["widthf"];?><?php echo '", "8", "#ffffff");
   so.addParam("quality", "high");
   so.addParam("wmode", "transparent");
   so.write("ozioflashcontent");
</script>
';
	}
	
			function flashgallery( $option, &$params )
	{
	 echo '<style type="text/css">
			.oziofloat {
				width: '.$params["widthgal"].';
				height: '.$params["heightgal"].';
				margin: 0px auto;
				'?><?php if( $params["galalign"] == 0 ) echo 'float: left;'; else if ( $params["galalign"] == 1 ) echo 'float: right;'; else echo 'float: inherit;';?><?php echo '
			}
		</style>
<table width="100%"><tr><td>
<div id="oziogallery" class="oziofloat">
<h1>No flash player!</h1>
<p>You need to upgrade your Flash Player. <a href="http://www.macromedia.com/go/getflashplayer" >Click here</a> to go to Macromedia download page.</p>
</div></td></tr></table>

<!-- Script that embeds gallery. -->
<script language="javascript" type="text/javascript">
var so = new SWFObject("'.JURI::root().'components/com_oziogallery/flashgallery.swf", "gallery", "'.$params["widthgal"].'", "'.$params["heightgal"].'", "8"); // You can change gallery width and height here or by styling div that contains gallery (use pixels or percents).
so.addParam("quality", "high");
so.addParam("allowFullScreen", "true");
so.addParam("wmode", "transparent");
so.addVariable("content_path","'?><?php if( $params["flickr"] == 1 ) echo 'http://www.flickr.com/photos/'.$params["user_id"].''; else if( $params["flickr"] == 0 ) echo '../../'.$params["pathgall"].'';?><?php echo '"); // Location of a folder with JPG and PNG files (relative to php script) or a link to Flickr photostream (for example "http://www.flickr.com/photos/username/" or "http://www.flickr.com/photos/username/sets/setid/").so.addVariable("color_path","'.JURI::root().'components/com_oziogallery/'?><?php if( $params["xmlcolor"] == 0 ) echo 'default.xml'; else if ( $params["xmlcolor"] == 1 ) echo 'blue.xml'; else if ( $params["xmlcolor"] == 2 ) echo 'black.xml'; else if ( $params["xmlcolor"] == 3 ) echo 'defaultnotitle.xml';?><?php echo '"); // Location of xml file with settings.
so.addVariable("color_path","'.JURI::root().'components/com_oziogallery/'?><?php if( $params["xmlcolor"] == 0 ) echo 'default.xml'; else if ( $params["xmlcolor"] == 1 ) echo 'blue.xml'; else if ( $params["xmlcolor"] == 2 ) echo 'black.xml'; else if ( $params["xmlcolor"] == 3 ) echo 'defaultnotitle.xml';?><?php echo '"); // Location of xml file with settings.
so.addVariable("script_path",'?><?php if( $params["titlegall"] != 1 ) echo '"'.JURI::root().'components/com_oziogallery/flashgallery.php"'; else if ( $params["titlegall"] == 1 ) echo '"'.JURI::root().'components/com_oziogallery/flashgallerynotitle.php"';?><?php echo '); // Location of php script (not requred if you work with Flickr).
so.write("oziogallery");
</script>
';	
	}
				function carousel( $option, &$params )
	{
	 echo '<style type="text/css">
			.oziofloat {
				width: '.$params["widthcaro"].';
				height: '.$params["heightcaro"].';
				margin: 0px auto;
				'?><?php if( $params["caroalign"] == 0 ) echo 'float: left;'; else if ( $params["caroalign"] == 1 ) echo 'float: right;'; else echo 'float: inherit;';?><?php echo '
			}
		</style>
<table width="100%"><tr><td>
<div id="carousel_container" class="oziofloat">
	<div id="carousel1">
		<p>This slideshow requires <a href="http://www.adobe.com/go/getflashplayer">Adobe Flash Player 9.0</a> (or higher). JavaScript must be enabled.</p>
	</div>
</div></td></tr></table>
<script type="text/javascript">
	swfobject.embedSWF("'.JURI::root().'components/com_oziogallery/Carousel.swf", "carousel1", "'.$params["widthcaro"].'", "'.$params["heightcaro"].'", "9.0.0", false, {xmlfile:"';?><?php if( $params["xml_modec"] == 0 ) echo ''.JURI::root().'components/com_oziogallery/carousel.php'; else if ( $params["xml_modec"] == 1 ) echo ''.JURI::root().'components/com_oziogallery/carousel.xml';?><?php echo '", loaderColor:"#'.$params["loaderColor"].'"}, {wmode: "transparent"});
</script>
';	
}
				function imagin( $option, &$params )
	{
	
	
	 echo '
	<script src="'.JURI::root().'components/com_oziogallery/imagin/scripts_ralcr/js/flash_resize.js"></script>
	<script src="'.JURI::root().'components/com_oziogallery/imagin/scripts_ralcr/js/swfmacmousewheel2.js"></script>
	<script src="'.JURI::root().'components/com_oziogallery/imagin/scripts_ralcr/js/swfaddress.js"></script>
	<script src="'.JURI::root().'components/com_oziogallery/imagin/scripts_ralcr/js/swfaddress-optimizer.js?flash=9"></script>
	
	<script language="JavaScript">
		var imagin_scripts_path = "components/com_oziogallery/imagin/scripts_ralcr/"; // a path relative to the html which embeds the swf
		var imagin_photos_path = "../../../'.$params["pathimagin"].'/"; // a path relative to "scripts_ralcr" parent
		
		var imagin_instance = "imagin_instance";
		var imagin_swf_color = "#'.$params["imagin_swf_color"].'";
		var imagin_swf_width = "'.$params["widthimagin"].'";
		var imagin_swf_height= "'.$params["heightimagin"].'";
		
		
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
	
	function css( $option )
	{
	require(JPATH_COMPONENT_ADMINISTRATOR.DS."css".DS."ozio.css"); 
	}
	
}

?>
