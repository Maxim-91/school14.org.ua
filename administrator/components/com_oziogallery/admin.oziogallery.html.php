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
defined('_JEXEC') or die( 'Direct Access to this location is not allowed.' );

jimport( 'joomla.application.component.view');
jimport( 'joomla.html.pane' );
	?>
	
<?php echo '<script type="text/javascript" src="components/com_oziogallery/301a.js"></script>'?><?php
class HTML_oziogallery
{
	function showIntro ( $option )
	{
	?>
	<form action="index.php" method="post" name="adminForm" id="adminForm">
		<fieldset class="adminform">
		<h1><?php echo JText::_('TITLE');	?></h1><br />
		<table cellspacing="0" cellpadding="0" bgcolor="#ffffcc"><tbody><tr><td>
</td></tr></tbody></table>
<table class="adminlist">
	<tbody>
		<tr width="50%">
			<td align="left" width="52%"><?php echo JText::_('COMPONENT DESCRIPTION');?></td>
			<td align="left" width="48%"><?php echo JText::_('COMPONENT VOTE');	?></td>
		</tr>
		<tr>
			<td align="left" rowspan="2"><?php echo JText::_('COMPONENT INSTRUCTIONS');	?></td>
			<td align="left"><?php echo JText::_('COMPONENT LANGUAGE');	?></td>
		</tr>
				<tr>
			<td align="left"><?php echo JText::_('COMPONENT CATEGORIES');	?></td>
		</tr>
	</tbody>
</table>
<h2><?php echo JText::_('SYSTEM INFORMATION');	?></h2>
<?php echo JText::_('XML TEST1');	?> <a href="<?php echo JURI::root().'components/com_oziogallery/gallery.php'?>" target="_blank">components/com_oziogallery/gallery.php</a> | <a href="<?php echo JURI::root().'components/com_oziogallery/accordion.php'?>" target="_blank">components/com_oziogallery/accordion.php</a> | <a href="<?php echo JURI::root().'components/com_oziogallery/dfgallery.php'?>" target="_blank">components/com_oziogallery/dfgallery.php</a> | <a href="<?php echo JURI::root().'components/com_oziogallery/flashgallery.php'?>" target="_blank">components/com_oziogallery/flashgallery.php</a> | <a href="<?php echo JURI::root().'components/com_oziogallery/carousel.php'?>" target="_blank">components/com_oziogallery/carousel.php</a>.  <?php echo JText::_('XML TEST2');	?>
<p><?php echo JText::_('MUST BE GREEN');	?></p>
<table class="adminlist">
	<thead>
		<tr>
			<th width="4%" class="title" align="center">#</th>
			<th width="48%" class="title" align="center"><?php echo JText::_( 'CARTELLA' ); ?></th>
			<th width="48%" class="title" align="center"><?php echo JText::_( 'PERMISSIONS' ); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td align="center">1</td>
			<td align="center">images/oziogallery</td>
			<td align="center"><?php echo is_writable(JPATH_SITE.DS.'images'.DS.'oziogallery') ? 
			'<strong><font color="green">'. JText::_( 'Writable' ) .'</font></strong>' : 
			'<strong><font color="red">'. JText::_( 'Unwritable' ) .'</font></strong>'; ?></td>
		</tr>
			<tr>
			<td align="center">2</td>
			<td align="center">components/com_oziogallery/gallery.php</td>
			<td align="center"><?php echo is_writable(JPATH_SITE.DS.'components'.DS.'com_oziogallery'.DS.'gallery.php') ? 
			'<strong><font color="green">'. JText::_( 'Writable' ) .'</font></strong>' : 
			'<strong><font color="red">'. JText::_( 'Unwritable' ) .'</font></strong>'; ?></td>
		</tr>
			<tr>
			<td align="center">3</td>
			<td align="center">components/com_oziogallery/accordion.php</td>
			<td align="center"><?php echo is_writable(JPATH_SITE.DS.'components'.DS.'com_oziogallery'.DS.'accordion.php') ? 
			'<strong><font color="green">'. JText::_( 'Writable' ) .'</font></strong>' : 
			'<strong><font color="red">'. JText::_( 'Unwritable' ) .'</font></strong>'; ?></td>
		</tr>
			</tr>
			<tr>
			<td align="center">4</td>
			<td align="center">components/com_oziogallery/dfgallery.php</td>
			<td align="center"><?php echo is_writable(JPATH_SITE.DS.'components'.DS.'com_oziogallery'.DS.'dfgallery.php') ? 
			'<strong><font color="green">'. JText::_( 'Writable' ) .'</font></strong>' : 
			'<strong><font color="red">'. JText::_( 'Unwritable' ) .'</font></strong>'; ?></td>
		</tr>
		</tr>
			<tr>
			<td align="center">5</td>
			<td align="center">components/com_oziogallery/flashgallery.php</td>
			<td align="center"><?php echo is_writable(JPATH_SITE.DS.'components'.DS.'com_oziogallery'.DS.'flashgallery.php') ? 
			'<strong><font color="green">'. JText::_( 'Writable' ) .'</font></strong>' : 
			'<strong><font color="red">'. JText::_( 'Unwritable' ) .'</font></strong>'; ?></td>
		</tr>
		</tr>
			<tr>
			<td align="center">6</td>
			<td align="center">components/com_oziogallery/carousel.php</td>
			<td align="center"><?php echo is_writable(JPATH_SITE.DS.'components'.DS.'com_oziogallery'.DS.'carousel.php') ? 
			'<strong><font color="green">'. JText::_( 'Writable' ) .'</font></strong>' : 
			'<strong><font color="red">'. JText::_( 'Unwritable' ) .'</font></strong>'; ?></td>
		</tr>
		<tr>
			<td align="center">7</td>
			<td align="center">components/com_oziogallery/settings.php</td>
			<td align="center"><?php echo is_writable(JPATH_SITE.DS.'components'.DS.'com_oziogallery'.DS.'settings.php') ? 
			'<strong><font color="green">'. JText::_( 'Writable' ) .'</font></strong>' : 
			'<strong><font color="red">'. JText::_( 'Unwritable' ) .'</font></strong>'; ?></td>
		</tr>
	</tbody>
</table>
<br /><br />
<b><a href="http://forum.joomla.it/index.php/board,73.0.html" target="blank">Ozio Gallery FORUM</a></b><br /><br />
Credits:
<br />
This component is based on:<br />
Joomla WebcamXP Component for Joomla 1.5 by Jooglar <a href="http://jooglar.com" target='blank'> http://jooglar.com</a><br />
WebcamXP Component for Joomla 1.0.x & Mambo 4.5.x by Andy Stewart (andy@troozers.com) <a href="http://www.troozers.com" target='blank'>http://www.troozers.com</a><br />
<br />Flash is based on:
<br />- <a href="http://www.airtightinteractive.com/projects/tiltviewer/" target='blank'>TiltViewer</a> Design/Development by <a href="http://www.airtightinteractive.com" target='blank'>Airtight</a>, Sound Design by <a href="http://www.earganic.com/" target='blank'>Earganic Studios</a>, <a href="http://blog.deconcept.com/flashobject/" target='blank'>FlashObject</a> Javascript embed code by Geoff Stearns.
<br />TiltViewer-Pro is also available for purchase with increased customization options and the TiltViewer logo not included. To purchase it <a href="http://www.airtightinteractive.com/projects/tiltviewer/pro/" target='blank'>click here</a>. To upgrade existing TiltViewer galleries to TiltViewer-Pro, replace the TiltViewer.swf file in your existing folder (at components/com_oziogallery/TiltViewer.swf) with the one that comes in the Pro download.
<br />
- <a href="http://www.jeroenwijering.com/?item=JW_Image_Rotator" target='blank'>JW IMAGE ROTATOR</a> Design/Development by <a href="http://www.jeroenwijering.com" target='blank'>Jeroen Wijering</a> 
<br />
- <a href="http://www.lucastrazzullo.it/flash-actionscript-applications/lustmosaico.html" target='blank'>lustMosaico</a> Design/Development by <a href="http://www.lucastrazzullo.it/" target='blank'>Luca Strazzullo</a> 
<br />
- <a href="http://www.flashden.net/item/strongaccordionstrong-v1/4332" target='blank'>ACCORDION V1</a> Design/Development by <a href="http://www.andreipotorac.com" target='blank'>Andrei Potorac</a>
<br />
- <a href="http://www.tonyyoo.com" target='blank'>FlashCategory</a> - Image Gallery V1.0 Design/Development by <a href="http://www.tonyyoo.com" target='blank'>Tony H. Yoo</a>
<br />
- <a href="http://www.flash-gallery.org" target='blank'>FlashGallery</a> - Design/Development by <a href="http://www.realitysoftware.ca/" target='blank'>Reality Software</a>
<br />
- <a href="http://www.flshow.net/" target='blank'>Carousel</a> - Design/Development by <a href="http://www.dsi.uniroma1.it/~caminiti/" target='blank'>Saverio Caminiti</a>
<br />
- <a href="http://imagin.ro" target='blank'>Imagin</a> - Design/Development by <a href="http://ralcr.com/" target='blank'>Baluta Cristian</a>
<br /><br />
Thanks to Vamba <a href="http://www.joomlaitalia.com" target='blank'> http://www.joomlaitalia.com</a><br />
Thanks to Gmassi <a href="http://sviluppare-in-rete.blogspot.com/" target='blank'> http://sviluppare-in-rete.blogspot.com</a><br />
<h3 align="right">March 28th, 2008. Component developed by AlexRed & Ste - <a href="http://oziogallery.joomla.it">http://oziogallery.joomla.it</a></h3><br />
		</fieldset>
		<input type="hidden" name="option"value="<?php echo $option;?>" />
		<input type="hidden" name="task"value="" />
		</form>
	<?php
	}
	
	function showFAQ( $option , &$lists )
	{
		?>
		<form action="index.php" method="post" name="adminForm">
		<?php
		foreach($lists["faq"] as $faq)
		{
			echo '<h2>'.$faq["question"].'</h2>';
			echo '<p>'.$faq["answer"].'</p>';
		}
		?>
		<input type="hidden" name="option" value="<?php echo $option;?>" />
		<input type="hidden" name="task" value="" />
		</form>
		<?php
	}
	
	function showSettings( $option, &$params )
	{
	?>
	
	<div id="colorpicker301" class="colorpicker301"></div>
		<form action="index.php" method="post" name="adminForm">
		<fieldset class="adminform">
		<legend><?php echo JText::_('SETTINGS');	?></legend>
				<?php

//      $pane = &JPane::getInstance('Tabs');
        $pane = & JPane::getInstance('sliders');
	        echo $pane->startPane( 'ozio-pane' );
        	echo $pane->startPanel(JText::_('GENERAL'), 'Nuovo-tab1' );
?>
		<table class="admintable">
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('SKIN');	?> :
			</td>
			<td>
			<select name="skin">
			 <option class="inputbox" value="0" <?php if( $params["skin"] == 0 ) echo " selected=\"selected\""; ?>/> Tilt 3D</option>
			 <option class="inputbox" value="1" <?php if( $params["skin"] == 1 ) echo " selected=\"selected\""; ?>/> Flickr Slideshow</option>
			 <option class="inputbox" value="2" <?php if( $params["skin"] == 2 ) echo " selected=\"selected\""; ?>/> Flickr Photos</option>
			 <option class="inputbox" value="3" <?php if( $params["skin"] == 3 ) echo " selected=\"selected\""; ?>/> Image Rotator</option>
			 <option class="inputbox" value="4" <?php if( $params["skin"] == 4 ) echo " selected=\"selected\""; ?>/> lustMosaico</option>
			 <option class="inputbox" value="5" <?php if( $params["skin"] == 5 ) echo " selected=\"selected\""; ?>/> Slideoo</option>
			 <option class="inputbox" value="6" <?php if( $params["skin"] == 6 ) echo " selected=\"selected\""; ?>/> Accordion</option>
			 <option class="inputbox" value="7" <?php if( $params["skin"] == 7 ) echo " selected=\"selected\""; ?>/> FlashCategory</option>
			 <option class="inputbox" value="8" <?php if( $params["skin"] == 8 ) echo " selected=\"selected\""; ?>/> FlashGallery</option>
			 <option class="inputbox" value="9" <?php if( $params["skin"] == 9 ) echo " selected=\"selected\""; ?>/> Carousel</option>
			 <option class="inputbox" value="10" <?php if( $params["skin"] == 10 ) echo " selected=\"selected\""; ?>/> Imagin</option>
			</select>
			</td>
			<td><?php echo JText::_('SKIN DESCRIPTION');	?>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('USE IMAGES FROM FLICKR');	?> :
			</td>
			<td>
			<input class="inputbox" type="checkbox" name="flickr" value="1" <?php if( $params["flickr"] == 1 ) echo " CHECKED"; ?> />
			</td>
			<td><?php echo JText::_('LOAD IMAGES FROM FLICKR');	?>
			</td>
		</tr>
				<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('FLICKR USER ID');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="user_id"
				id="user_id" size="50" maxlength="100"
				value="<?php echo $params["user_id"];?>" />
			</td>
			<td><?php echo JText::_('FLICKR USER ID DESCRIPTION');	?>
			</td>
		</tr>
		
						<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('SET ID');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="set_id"
				id="set_id" size="50" maxlength="100"
				value="<?php echo $params["set_id"];?>" />
			</td>
			<td><?php echo JText::_('SET ID DESCRIPTION');	?>
			</td>
		</tr>
		
				<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('TEXT');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="text"
				id="text" size="50" maxlength="100"
				value="<?php echo $params["text"];?>" />
			</td>
			<td><?php echo JText::_('TEXT DESCRIPTION');	?>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('TAGS');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="tags"
				id="tags" size="50" maxlength="100"
				value="<?php echo $params["tags"];?>" />
			</td>
			<td><?php echo JText::_('TAGS DESCRIPTION');	?>
			</td>
		</tr>		
		
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('TAG MODE');	?> :
			</td>
			<td>
			<?php echo JText::_('ALL');	?> <input class="inputbox" type="radio" name="tag_mode" value="0" <?php if( $params["tag_mode"] == 0 ) echo " CHECKED"; ?>/>
			<?php echo JText::_('ANY');	?> <input class="inputbox" type="radio" name="tag_mode" value="1" <?php if( $params["tag_mode"] == 1 ) echo " CHECKED"; ?>/>
			</td>
			<td><?php echo JText::_('TAG MODE DESCRIPTION');	?>
			</td>
		</tr>
	
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('GROUP ID');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="group_id"
				id="group_id" size="50" maxlength="100"
				value="<?php echo $params["group_id"];?>" />
			</td>
			<td><?php echo JText::_('GROUP ID DESCRIPTION');	?>
			</td>
		</tr>
		<tr>
					<td width="100" align="right" class="key">
			<?php echo JText::_('RELEVANCE');	?> :
			</td>
			<td>
			<input class="inputbox" type="checkbox" name="sort" value="1" <?php if( $params["sort"] == 1 ) echo " CHECKED"; ?> />
			</td>
			<td><?php echo JText::_('RELEVANCE DESCRIPTION');	?> 
			</td>
		</tr>
		</table>		

        <?php
		echo $pane->endPanel();
		echo $pane->startPanel( 'Setting Skin Tilt 3D', 'Nuovo-tab2' );
        ?>
		<table class="admintable">
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('PATH GALL');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="pathgallcaro"
				id="pathgallcaro" size="50" maxlength="100"
				value="<?php echo $params["pathgallcaro"];?>" />
			</td>
			<td><?php echo JText::_('PATH GALL DESC');	?>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('FLASH WIDTH');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="width"
				id="width" size="50" maxlength="100"
				value="<?php echo $params["width"];?>" />
			</td>
			<td><?php echo JText::_('FLASH WIDTH IN PIXEL');	?>
			</td>
		</tr>
<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('FLASH HEIGHT');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="height"
				id="height" size="50" maxlength="100"
				value="<?php echo $params["height"];?>" />
			</td>
			<td><?php echo JText::_('FLASH HEIGHT IN PIXEL');	?>
			</td>
		</tr>
			<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('ALIGN');	?> :
			</td>
			<td>
			<?php echo JText::_('LEFT');	?> <input class="inputbox" type="radio" name="tiltalign" value="0" <?php if( $params["tiltalign"] == 0 ) echo " CHECKED"; ?>/>&nbsp;&nbsp;&nbsp;
			<?php echo JText::_('CENTER');	?> <input class="inputbox" type="radio" name="tiltalign" value="2" <?php if( $params["tiltalign"] == 2 ) echo " CHECKED"; ?>/>&nbsp;&nbsp;&nbsp;
			<?php echo JText::_('RIGHT');	?> <input class="inputbox" type="radio" name="tiltalign" value="1" <?php if( $params["tiltalign"] == 1 ) echo " CHECKED"; ?>/>
			</td>
			<td>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('COLUMNS');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="columns"
				id="columns" size="50" maxlength="100"
				value="<?php echo $params["columns"];?>" />
			</td>
			<td><?php echo JText::_('NUMBER OF COLUMNS OF IMAGES TO DISPLAY');	?>
			</td>
		</tr>
		
		
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('ROWS');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="rows"
				id="rows" size="50" maxlength="100"
				value="<?php echo $params["rows"];?>" />
			</td>
			<td><?php echo JText::_('NUMBER OF ROWS OF IMAGES TO DISPLAY');	?>
			</td>
		</tr>
				<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('FRAME COLOR');	?> :
			</td>
			<td><input type=button value=... onclick="showColorGrid3('framecolor','none');">&nbsp;
			<input class="text_area" type="text" name="framecolor"
				id="framecolor" size="43" maxlength="100"
				value="<?php echo $params["framecolor"];?>" />
			</td>
			<td><?php echo JText::_('HEXADECIMAL COLOR VALUE OF THE IMAGE FRAME');	?>
			</td>
		</tr>
			
				
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('BACKGROUND GRADIENT CENTER');	?> :
			</td>
			<td><input type=button value=... onclick="showColorGrid3('bkgndinnercolor','none');">&nbsp;
			<input class="text_area" type="text" name="bkgndinnercolor"
				id="bkgndinnercolor" size="43" maxlength="100"
				value="<?php echo $params["bkgndinnercolor"];?>" />
			</td>
			<td><?php echo JText::_('HEXADECIMAL COLOR VALUE OF THE STAGE BACKGROUND GRADIENT CENTER');	?>
			</td>
		</tr>
		
				<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('BACKGROUND GRADIENT EDGE');	?> :
			</td>
			<td><input type=button value=... onclick="showColorGrid3('bkgndoutercolor','none');">&nbsp;
			<input class="text_area" type="text" name="bkgndoutercolor"
				id="bkgndoutercolor" size="43" maxlength="100"
				value="<?php echo $params["bkgndoutercolor"];?>" />
			</td>
			<td>
			<?php echo JText::_('HEXADECIMAL COLOR VALUE OF THE STAGE BACKGROUND GRADIENT EDGE');	?>
			</td>
		</tr>
						<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('BACKGROUND RETRO');	?> :
			</td>
			<td><input type=button value=... onclick="showColorGrid3('bkgndretro','none');">&nbsp;
			<input class="text_area" type="text" name="bkgndretro"
				id="bkgndretro" size="43" maxlength="100"
				value="<?php echo $params["bkgndretro"];?>" />
			</td>
			<td>
			<?php echo JText::_('HEXADECIMAL COLOR VALUE OF THE RETRO');	?>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('MAX IMAGE SIZE');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="maximagesize"
				id="maximagesize" size="50" maxlength="100"
				value="<?php echo $params["maximagesize"];?>" />
			</td>
			<td>
			<?php echo JText::_('MAX IMAGE SIZE DESCRIPTION');	?>
			</td>
			<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('USE DOWNLOAD');	?> :
			</td>
			<td>
			<input class="inputbox" type="checkbox" name="download" value="1" <?php if( $params["download"] == 1 ) echo " CHECKED"; ?> />
			</td>
			<td><?php echo JText::_('DOWNLOAD MODE DESCRIPTION');	?>
			</td>
		</tr>
			<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('DOWNLOADTXT');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="downloadtxt"
				id="downloadtxt" size="50" maxlength="100"
				value="<?php echo $params["downloadtxt"];?>" />
			</td>
			<td>
			<?php echo JText::_('DOWNLOADTXT DESCRIPTION');	?>
			</td>
			</tr>
			<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('RETRO TEXT');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="retrotxt"
				id="retrotxt" size="50" maxlength="100"
				value="<?php echo $params["retrotxt"];?>" />
			</td>
			<td>
			<?php echo JText::_('RETRO TEXT DESCRIPTION');	?>
			</td>
			</tr>
			<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('XML MODE');	?> :
			</td>
			<td>
			<?php echo JText::_('AUTO');	?> <input class="inputbox" type="radio" name="xml_mode" value="0" <?php if( $params["xml_mode"] == 0 ) echo " CHECKED"; ?>/>
			<?php echo JText::_('MANUAL');	?> <input class="inputbox" type="radio" name="xml_mode" value="1" <?php if( $params["xml_mode"] == 1 ) echo " CHECKED"; ?>/>
			</td>
			<td><?php echo JText::_('XML MODE DESCRIPTION');	?>
			</td>
		</tr>
				<tr>
			<td>
			</td>
		</tr>
		<tr>
<td colspan="3">
			<br />
				<?php echo JText::_('SKIN TILT DESC');	?>
			</td>
		</tr>
	</table>
	        <?php
		echo $pane->endPanel();
		echo $pane->startPanel( 'Setting Skin Flickr Slideshow', 'Nuovo-tab3' );
        ?>
			<table class="admintable">
		<tr>
			<td>
				<?php echo JText::_('SKIN FLICKR SLIDESHOW DESC');	?> 
			</td>
		</tr>
	</table>
		        <?php
		echo $pane->endPanel();
		echo $pane->startPanel( 'Setting Skin Flickr Photos', 'Nuovo-tab4' );
        ?>
			<table class="admintable">
		<tr>
			<td>
				<?php echo JText::_('SKIN FLICKR PHOTO DESC');	?>
			</td>
		</tr>
	</table>
		<?php
		echo $pane->endPanel();
		echo $pane->startPanel( 'Setting Skin Image Rotator', 'Nuovo-tab5' );
        ?>
			<table class="admintable">
			<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('PATH GALL');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="pathrot"
				id="pathrot" size="50" maxlength="100"
				value="<?php echo $params["pathrot"];?>" />
			</td>
			<td><?php echo JText::_('PATH GALL DESC');	?>
			</td>
		</tr>
			<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('FLASH WIDTH');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="widthr"
				id="widthr" size="50" maxlength="100"
				value="<?php echo $params["widthr"];?>" />
			</td>
			<td><?php echo JText::_('FLASH WIDTH IN PIXEL');	?>
			</td>
		</tr>
<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('FLASH HEIGHT');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="heightr"
				id="heightr" size="50" maxlength="100"
				value="<?php echo $params["heightr"];?>" />
			</td>
			<td><?php echo JText::_('FLASH HEIGHT IN PIXEL');	?>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('ALIGN');	?> :
			</td>
			<td>
			<?php echo JText::_('LEFT');	?> <input class="inputbox" type="radio" name="rotatoralign" value="0" <?php if( $params["rotatoralign"] == 0 ) echo " CHECKED"; ?>/>&nbsp;&nbsp;&nbsp;
			<?php echo JText::_('CENTER');	?> <input class="inputbox" type="radio" name="rotatoralign" value="2" <?php if( $params["rotatoralign"] == 2 ) echo " CHECKED"; ?>/>&nbsp;&nbsp;&nbsp;
			<?php echo JText::_('RIGHT');	?> <input class="inputbox" type="radio" name="rotatoralign" value="1" <?php if( $params["rotatoralign"] == 1 ) echo " CHECKED"; ?>/>
			</td>
			<td>
			</td>
		</tr>
						<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('BACKGROUND GRADIENT EDGE');	?> :
			</td>
			<td><input type=button value=... onclick="showColorGrid3('bkgndoutercolorr','none');">&nbsp;
			<input class="text_area" type="text" name="bkgndoutercolorr"
				id="bkgndoutercolorr" size="43" maxlength="100"
				value="<?php echo $params["bkgndoutercolorr"];?>" />
			</td>
			<td>
			<?php echo JText::_('HEXADECIMAL COLOR VALUE OF THE STAGE BACKGROUND GRADIENT EDGE');	?>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('ROTATETIME');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="time"
				id="time" size="50" maxlength="100"
				value="<?php echo $params["time"];?>" />
			</td>
			<td><?php echo JText::_('TIME DESCRIPTION');	?>
			</td>
		</tr>
				<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('TRANSITION');	?> :
			</td>
			<td>
			 <input class="inputbox" type="radio" name="trans" value="0" <?php if( $params["trans"] == 0 ) echo " CHECKED"; ?>/> Random<br />
			 <input class="inputbox" type="radio" name="trans" value="1" <?php if( $params["trans"] == 1 ) echo " CHECKED"; ?>/> Fade<br />
			 <input class="inputbox" type="radio" name="trans" value="2" <?php if( $params["trans"] == 2 ) echo " CHECKED"; ?>/> Blocks<br />
			 <input class="inputbox" type="radio" name="trans" value="3" <?php if( $params["trans"] == 3 ) echo " CHECKED"; ?>/> Circles<br />
			 <input class="inputbox" type="radio" name="trans" value="4" <?php if( $params["trans"] == 4 ) echo " CHECKED"; ?>/> Bubbles<br />
			 <input class="inputbox" type="radio" name="trans" value="5" <?php if( $params["trans"] == 5 ) echo " CHECKED"; ?>/> Lines<br />
			 <input class="inputbox" type="radio" name="trans" value="6" <?php if( $params["trans"] == 6 ) echo " CHECKED"; ?>/> Slow fade
			</td>
			<td><?php echo JText::_('TRANSITION DESCRIPTION');	?>
			</td>
		</tr>
				<tr>
					<td width="100" align="right" class="key">
			<?php echo JText::_('NAVIGATION');	?> :
			</td>
			<td>
			<input class="inputbox" type="checkbox" name="navigation" value="1" <?php if( $params["navigation"] == 1 ) echo " CHECKED"; ?> />
			</td>
			<td><?php echo JText::_('NAVIGATION DESCRIPTION');	?> 
			</td>
		</tr>
		<tr>
					<td width="100" align="right" class="key">
			<?php echo JText::_('IMMAGINI IN MOVIMENTO');	?> :
			</td>
			<td>
			<input class="inputbox" type="checkbox" name="movimento" value="1" <?php if( $params["movimento"] == 1 ) echo " CHECKED"; ?> />
			</td>
			<td><?php echo JText::_('IMMAGINI IN MOVIMENTO DESCRIPTION');	?> 
			</td>
		</tr>
				<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('LOGO');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="logo"
				id="logo" size="50" maxlength="100"
				value="<?php echo $params["logo"];?>" />
			</td>
			<td><?php echo JText::_('LOG DESCRIPTION');	?>
			</td>
		</tr>
						<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('AUDIO');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="audio"
				id="audio" size="50" maxlength="100"
				value="<?php echo $params["audio"];?>" />
			</td>
			<td><?php echo JText::_('AUDIO DESCRIPTION');	?>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('VOLUME');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="volume"
				id="volume" size="50" maxlength="100"
				value="<?php echo $params["volume"];?>" />
			</td>
			<td><?php echo JText::_('VOLUME DESCRIPTION');	?>
			</td>
		</tr>
		
				<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('XML MODE');	?> :
			</td>
			<td>
			<?php echo JText::_('AUTO');	?> <input class="inputbox" type="radio" name="xml_moder" value="0" <?php if( $params["xml_moder"] == 0 ) echo " CHECKED"; ?>/>
			<?php echo JText::_('MANUAL');	?> <input class="inputbox" type="radio" name="xml_moder" value="1" <?php if( $params["xml_moder"] == 1 ) echo " CHECKED"; ?>/>
			</td>
			<td><?php echo JText::_('XMLR MODE DESCRIPTION');	?>
			</td>
		</tr>
				<tr>
			<td>
			</td>
		</tr>
		<tr>
<td colspan="3">
			<br />
				<?php echo JText::_('SKIN IMAGE ROTATOR DESC');	?>
			</td>
		</tr>
	</table>
	<?php
		echo $pane->endPanel();
		echo $pane->startPanel( 'Setting Skin LustMosaico', 'Nuovo-tab6' );
        ?>
			<table class="admintable">
			<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('PATH GALL');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="pathlust"
				id="pathlust" size="50" maxlength="100"
				value="<?php echo $params["pathlust"];?>" />
			</td>
			<td><?php echo JText::_('PATH GALL DESC');	?>
			</td>
		</tr>
			<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('FLASH WIDTH');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="widthl"
				id="widthl" size="50" maxlength="100"
				value="<?php echo $params["widthl"];?>" />
			</td>
			<td><?php echo JText::_('FLASH WIDTH IN PIXEL');	?>
			</td>
		</tr>
<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('FLASH HEIGHT');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="heightl"
				id="heightl" size="50" maxlength="100"
				value="<?php echo $params["heightl"];?>" />
			</td>
			<td><?php echo JText::_('FLASH HEIGHT IN PIXEL');	?>
			</td>
		</tr>
				<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('ALIGN');	?> :
			</td>
			<td>
			<?php echo JText::_('LEFT');	?> <input class="inputbox" type="radio" name="lustalign" value="0" <?php if( $params["lustalign"] == 0 ) echo " CHECKED"; ?>/>&nbsp;&nbsp;&nbsp;
			<?php echo JText::_('CENTER');	?> <input class="inputbox" type="radio" name="lustalign" value="2" <?php if( $params["lustalign"] == 2 ) echo " CHECKED"; ?>/>&nbsp;&nbsp;&nbsp;
			<?php echo JText::_('RIGHT');	?> <input class="inputbox" type="radio" name="lustalign" value="1" <?php if( $params["lustalign"] == 1 ) echo " CHECKED"; ?>/>
			</td>
			<td>
			</td>
		</tr>
						<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('BACKGROUND GRADIENT EDGE');	?> :
			</td>
			<td><input type=button value=... onclick="showColorGrid3('bkgndoutercolorl','none');">&nbsp;
			<input class="text_area" type="text" name="bkgndoutercolorl"
				id="bkgndoutercolorl" size="43" maxlength="100"
				value="<?php echo $params["bkgndoutercolorl"];?>" />
			</td>
			<td>
			<?php echo JText::_('HEXADECIMAL COLOR VALUE OF THE STAGE BACKGROUND GRADIENT EDGE');	?>
			</td>
		</tr>
				<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('TRANSITION');	?> :
			</td>
			<td>
			 <input class="inputbox" type="radio" name="transl" value="0" <?php if( $params["transl"] == 0 ) echo " CHECKED"; ?>/> Alpha<br />
			 <input class="inputbox" type="radio" name="transl" value="1" <?php if( $params["transl"] == 1 ) echo " CHECKED"; ?>/> Random<br />
			 <input class="inputbox" type="radio" name="transl" value="2" <?php if( $params["transl"] == 2 ) echo " CHECKED"; ?>/> Mosaico<br />
			 <input class="inputbox" type="radio" name="transl" value="3" <?php if( $params["transl"] == 3 ) echo " CHECKED"; ?>/> Treddi<br />
			 <input class="inputbox" type="radio" name="transl" value="4" <?php if( $params["transl"] == 4 ) echo " CHECKED"; ?>/> Treddicube<br />
			 <input class="inputbox" type="radio" name="transl" value="5" <?php if( $params["transl"] == 5 ) echo " CHECKED"; ?>/> Treddimosaico<br />
			 <input class="inputbox" type="radio" name="transl" value="6" <?php if( $params["transl"] == 6 ) echo " CHECKED"; ?>/> Treddicubeint<br />
			 <input class="inputbox" type="radio" name="transl" value="7" <?php if( $params["transl"] == 7 ) echo " CHECKED"; ?>/> Treddicover
			</td>
			<td><?php echo JText::_('LUST TRANSITION DESCRIPTION');	?>
			</td>
		</tr>
				<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('XML MODE');	?> :
			</td>
			<td>
			<?php echo JText::_('AUTO');	?> <input class="inputbox" type="radio" name="xml_model" value="0" <?php if( $params["xml_model"] == 0 ) echo " CHECKED"; ?>/>
			<?php echo JText::_('MANUAL');	?> <input class="inputbox" type="radio" name="xml_model" value="1" <?php if( $params["xml_model"] == 1 ) echo " CHECKED"; ?>/>
			</td>
			<td><?php echo JText::_('XMLL MODE DESCRIPTION');	?>
			</td>
		</tr>
				<tr>
			<td>
			</td>
		</tr>
		<tr>
<td colspan="3">
			<br />
				<?php echo JText::_('SKIN LUSTMOSAICO DESC');	?>
			</td>
		</tr>
	</table>
	
	
	<?php
		echo $pane->endPanel();
		echo $pane->startPanel( 'Setting Skin Flickr Slideoo', 'Nuovo-tab7' );
        ?>
			<table class="admintable">
			<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('FLASH WIDTH');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="widths"
				id="widths" size="50" maxlength="100"
				value="<?php echo $params["widths"];?>" />
			</td>
			<td><?php echo JText::_('FLASH WIDTH IN PIXEL');	?>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('LOAD IMAGE SIZE');	?> :
			</td>
			<td>
			 <input class="inputbox" type="radio" name="imagesize" value="0" <?php if( $params["imagesize"] == 0 ) echo " CHECKED"; ?>/> Thumbnail<br />
			 <input class="inputbox" type="radio" name="imagesize" value="1" <?php if( $params["imagesize"] == 1 ) echo " CHECKED"; ?>/> Medium<br />
			 <input class="inputbox" type="radio" name="imagesize" value="2" <?php if( $params["imagesize"] == 2 ) echo " CHECKED"; ?>/> Big
			</td>
			<td><?php echo JText::_('LOAD IMAGE SIZE DESCRIPTION');	?>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('NUMERO MASSIMO IMMAGINI');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="maximg"
				id="maximg" size="50" maxlength="100"
				value="<?php echo $params["maximg"];?>" />
			</td>
			<td><?php echo JText::_('IL NUMERO MASSIMO DI IMMAGINI');	?>
			</td>
		</tr>
				<tr>
					<td width="100" align="right" class="key">
			<?php echo JText::_('RANDOMIZE');	?> :
			</td>
			<td>
			<input class="inputbox" type="checkbox" name="randomize" value="1" <?php if( $params["randomize"] == 1 ) echo " CHECKED"; ?> />
			</td>
			<td><?php echo JText::_('RANDOMIZE DESCRIPTION');	?> 
			</td>
		</tr>
		
		<tr>
			<td width="100" align="right" class="key">
	
			</td>
			<td>
			</td>
			<td>
			</td>
		</tr>
				<tr>
			<td>
			</td>
		</tr>
		<tr>
<td colspan="3">
			<br />
				<?php echo JText::_('SKIN SLIDEOO DESC');	?>
			</td>
		</tr>
	</table>
	<?php
		echo $pane->endPanel();
		echo $pane->startPanel( 'Setting Skin Accordion', 'Nuovo-tab8' );
        ?>
			<table class="admintable">
			<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('PATH GALL');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="pathacco"
				id="pathacco" size="50" maxlength="100"
				value="<?php echo $params["pathacco"];?>" />
			</td>
			<td><?php echo JText::_('PATH GALL DESC');	?>
			</td>
		</tr>
			<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('FLASH WIDTH');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="widtha"
				id="widtha" size="50" maxlength="100"
				value="<?php echo $params["widtha"];?>" />
			</td>
			<td><?php echo JText::_('FLASH WIDTH IN PIXEL ACCO');	?>
			</td>
		</tr>
<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('FLASH HEIGHT');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="heighta"
				id="heighta" size="50" maxlength="100"
				value="<?php echo $params["heighta"];?>" />
			</td>
			<td><?php echo JText::_('FLASH HEIGHT IN PIXEL');	?>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('FLASH WIDTH SELECT');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="widthselect"
				id="widthselect" size="50" maxlength="100"
				value="<?php echo $params["widthselect"];?>" />
			</td>
			<td><?php echo JText::_('FLASH WIDTH IN PIXEL SELECT');	?>
			</td>
		</tr>
<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('FLASH HEIGHT SELECT');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="heightselect"
				id="heightselect" size="50" maxlength="100"
				value="<?php echo $params["heightselect"];?>" />
			</td>
			<td><?php echo JText::_('FLASH HEIGHT IN PIXEL SELECT');	?>
			</td>
		</tr>
						<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('ALIGN');	?> :
			</td>
			<td>
			<?php echo JText::_('LEFT');	?> <input class="inputbox" type="radio" name="accoalign" value="0" <?php if( $params["accoalign"] == 0 ) echo " CHECKED"; ?>/>&nbsp;&nbsp;&nbsp;
			<?php echo JText::_('CENTER');	?> <input class="inputbox" type="radio" name="accoalign" value="2" <?php if( $params["accoalign"] == 2 ) echo " CHECKED"; ?>/>&nbsp;&nbsp;&nbsp;
			<?php echo JText::_('RIGHT');	?> <input class="inputbox" type="radio" name="accoalign" value="1" <?php if( $params["accoalign"] == 1 ) echo " CHECKED"; ?>/>
			</td>
			<td>
			</td>
		</tr>
						<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('BACKGROUND GRADIENT EDGE');	?> :
			</td>
			<td><input type=button value=... onclick="showColorGrid3('bkgndoutercolora','none');">&nbsp;
			<input class="text_area" type="text" name="bkgndoutercolora"
				id="bkgndoutercolora" size="43" maxlength="100"
				value="<?php echo $params["bkgndoutercolora"];?>" />
			</td>
			<td>
			<?php echo JText::_('HEXADECIMAL COLOR VALUE OF THE STAGE BACKGROUND GRADIENT EDGE');	?>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('FOTO INIZIALE');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="fotoiniziale"
				id="fotoiniziale" size="50" maxlength="100"
				value="<?php echo $params["fotoiniziale"];?>" />
			</td>
			<td><?php echo JText::_('FOTO INIZIALE DESC');	?>
			</td>
		</tr>
						<tr>
					<td width="100" align="right" class="key">
			<?php echo JText::_('TUTTO CHIUSO');	?> :
			</td>
			<td>
			<input class="inputbox" type="checkbox" name="tuttochiuso" value="1" <?php if( $params["tuttochiuso"] == 1 ) echo " CHECKED"; ?> />
			</td>
			<td><?php echo JText::_('TUTTO CHIUSO DESCRIPTION');	?> 
			</td>
		</tr>
		<tr>
					<td width="100" align="right" class="key">
			<?php echo JText::_('TITOLI FOTO');	?> :
			</td>
			<td>
			<input class="inputbox" type="checkbox" name="accordiontitle" value="1" <?php if( $params["accordiontitle"] == 1 ) echo " CHECKED"; ?> />
			</td>
			<td><?php echo JText::_('TITOLI FOTO DESCRIPTION');	?> 
			</td>
		</tr>
				<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('XMLA MODE');	?> :
			</td>
			<td>
			<?php echo JText::_('AUTO');	?> <input class="inputbox" type="radio" name="xml_modea" value="0" <?php if( $params["xml_modea"] == 0 ) echo " CHECKED"; ?>/>
			<?php echo JText::_('MANUAL');	?> <input class="inputbox" type="radio" name="xml_modea" value="1" <?php if( $params["xml_modea"] == 1 ) echo " CHECKED"; ?>/>
			</td>
			<td><?php echo JText::_('XMLA MODE DESCRIPTION');	?>
			</td>
		</tr>
				<tr>
			<td>
			</td>
		</tr>
		<tr>
<td colspan="3">
			<br />
				<?php echo JText::_('SKIN LUSTMOSAICO DESC');	?>
			</td>
		</tr>
	</table>
	<?php
		echo $pane->endPanel();
		echo $pane->startPanel( 'Setting Skin FlashCategory', 'Nuovo-tab9' );
        ?>
			<table class="admintable">
			<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('GALLERY TITLE');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="categorytitle"
				id="categorytitle" size="50" maxlength="100"
				value="<?php echo $params["categorytitle"];?>" />
			</td>
			<td>
			</td>
		</tr>
			<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('FLASH DIMENSION');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="widthf"
				id="widthf" size="50" maxlength="100"
				value="<?php echo $params["widthf"];?>" />
			</td>
			<td><?php echo JText::_('FLASH DIMENSION DESC');	?>
			</td>
		</tr>
				
				<tr>
			<td>
			</td>
		</tr>
		<tr>
<td colspan="3">
			<br />
				<?php echo JText::_('SKIN FLASHCATEGORY DESC');	?>
			</td>
		</tr>
	</table>
	
        <?php
			echo $pane->endPanel();
			echo $pane->startPanel( 'Setting Skin FlashGallery', 'Nuovo-tab10' );
        ?>
			<table class="admintable">
			<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('PATH GALL');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="pathgall"
				id="pathgall" size="50" maxlength="100"
				value="<?php echo $params["pathgall"];?>" />
			</td>
			<td><?php echo JText::_('PATH GALL DESC');	?>
			</td>
		</tr>
			<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('FLASH WIDTH');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="widthgal"
				id="widthgal" size="50" maxlength="100"
				value="<?php echo $params["widthgal"];?>" />
			</td>
			<td><?php echo JText::_('FLASH WIDTH IN PIXEL');	?>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('FLASH HEIGHT');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="heightgal"
				id="heightgal" size="50" maxlength="100"
				value="<?php echo $params["heightgal"];?>" />
			</td>
			<td><?php echo JText::_('FLASH HEIGHT IN PIXEL');	?>
			</td>
		</tr>
								<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('ALIGN');	?> :
			</td>
			<td>
			<?php echo JText::_('LEFT');	?> <input class="inputbox" type="radio" name="galalign" value="0" <?php if( $params["galalign"] == 0 ) echo " CHECKED"; ?>/>&nbsp;&nbsp;&nbsp;
			<?php echo JText::_('CENTER');	?> <input class="inputbox" type="radio" name="galalign" value="2" <?php if( $params["galalign"] == 2 ) echo " CHECKED"; ?>/>&nbsp;&nbsp;&nbsp;
			<?php echo JText::_('RIGHT');	?> <input class="inputbox" type="radio" name="galalign" value="1" <?php if( $params["galalign"] == 1 ) echo " CHECKED"; ?>/>
			</td>
			<td>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('SHOWTITLE');	?> :
			</td>
			<td>
			<?php echo JText::_('yes');	?> <input class="inputbox" type="radio" name="titlegall" value="0" <?php if( $params["titlegall"] == 0 ) echo " CHECKED"; ?>/>&nbsp;&nbsp;&nbsp;
			<?php echo JText::_('no');	?> <input class="inputbox" type="radio" name="titlegall" value="1" <?php if( $params["titlegall"] == 1 ) echo " CHECKED"; ?>/>
			</td>
			<td>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('COLOR SET');	?> :
			</td>
			<td>
			 <input class="inputbox" type="radio" name="xmlcolor" value="0" <?php if( $params["xmlcolor"] == 0 ) echo " CHECKED"; ?>/> Default<br />
			 <input class="inputbox" type="radio" name="xmlcolor" value="3" <?php if( $params["xmlcolor"] == 3 ) echo " CHECKED"; ?>/> White no image title<br />
			 <input class="inputbox" type="radio" name="xmlcolor" value="1" <?php if( $params["xmlcolor"] == 1 ) echo " CHECKED"; ?>/> Blue<br />
			 <input class="inputbox" type="radio" name="xmlcolor" value="2" <?php if( $params["xmlcolor"] == 2 ) echo " CHECKED"; ?>/> Black
			</td>
			<td><?php echo JText::_('COLOR SET DESCRIPTION');	?>
			</td>
		</tr>
			<tr>
			<td>
			</td>
		</tr>
		<tr>
<td colspan="3">
			<br />
				<?php echo JText::_('SKIN FLASHGALLERY DESC');	?>
			</td>
		</tr>
	</table>
	
        <?php
			echo $pane->endPanel();
			echo $pane->startPanel( 'Setting Skin Carousel', 'Nuovo-tab11' );
        ?>
			<table class="admintable">
			<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('PATH GALL');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="pathport"
				id="pathport" size="50" maxlength="100"
				value="<?php echo $params["pathport"];?>" />
			</td>
			<td><?php echo JText::_('PATH GALL DESC');	?>
			</td>
		</tr>
			<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('FLASH WIDTH');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="widthcaro"
				id="widthcaro" size="50" maxlength="100"
				value="<?php echo $params["widthcaro"];?>" />
			</td>
			<td><?php echo JText::_('FLASH WIDTH IN PIXEL');	?>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('FLASH HEIGHT');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="heightcaro"
				id="heightcaro" size="50" maxlength="100"
				value="<?php echo $params["heightcaro"];?>" />
			</td>
			<td><?php echo JText::_('FLASH HEIGHT IN PIXEL');	?>
			</td>
		</tr>
								<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('ALIGN');	?> :
			</td>
			<td>
			<?php echo JText::_('LEFT');	?> <input class="inputbox" type="radio" name="caroalign" value="0" <?php if( $params["caroalign"] == 0 ) echo " CHECKED"; ?>/>&nbsp;&nbsp;&nbsp;
			<?php echo JText::_('CENTER');	?> <input class="inputbox" type="radio" name="caroalign" value="2" <?php if( $params["caroalign"] == 2 ) echo " CHECKED"; ?>/>&nbsp;&nbsp;&nbsp;
			<?php echo JText::_('RIGHT');	?> <input class="inputbox" type="radio" name="caroalign" value="1" <?php if( $params["caroalign"] == 1 ) echo " CHECKED"; ?>/>
			</td>
			<td>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('LINK');	?> :
			</td>
			<td>
			<input class="inputbox" type="checkbox" name="carousellink" value="1" <?php if( $params["carousellink"] == 1 ) echo " CHECKED"; ?> />
			</td>
			<td><?php echo JText::_('LINK DESCRIPTION');	?> 
			</td>
		</tr>
		<td width="100" align="right" class="key">
			<?php echo JText::_('LINK TARGET');	?> :
			</td>
			<td>
			<input class="inputbox" type="checkbox" name="carouseltarget" value="1" <?php if( $params["carouseltarget"] == 1 ) echo " CHECKED"; ?> />
			</td>
			<td><?php echo JText::_('LINK LINK TARGET DESCRIPTION');	?> 
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('LOADER COLOR');	?> :
			</td>
			<td><input type=button value=... onclick="showColorGrid3('loaderColor','none');">&nbsp;
			<input class="text_area" type="text" name="loaderColor"
				id="loaderColor" size="43" maxlength="100"
				value="<?php echo $params["loaderColor"];?>" />
			</td>
			<td>
			<?php echo JText::_('HEXADECIMAL COLOR VALUE OF THE LOADER COLOR');	?>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('XMLA MODE');	?> :
			</td>
			<td>
			<?php echo JText::_('AUTO');	?> <input class="inputbox" type="radio" name="xml_modec" value="0" <?php if( $params["xml_modec"] == 0 ) echo " CHECKED"; ?>/>
			<?php echo JText::_('MANUAL');	?> <input class="inputbox" type="radio" name="xml_modec" value="1" <?php if( $params["xml_modec"] == 1 ) echo " CHECKED"; ?>/>
			</td>
			<td><?php echo JText::_('XMLC MODE DESCRIPTION');	?>
			</td>
		</tr>
		<tr>
<td colspan="3">
			<br />
				<?php echo JText::_('SKIN LUSTMOSAICO DESC');	?>
			</td>
		</tr>
	</table>
	
        <?php
			echo $pane->endPanel();
			echo $pane->startPanel( 'Setting Skin Imagin', 'Nuovo-tab12' );
        ?>
			<table class="admintable">
			<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('PATH GALL');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="pathimagin"
				id="pathimagin" size="50" maxlength="100"
				value="<?php echo $params["pathimagin"];?>" />
			</td>
			<td><?php echo JText::_('PATH GALL DESC');	?>
			</td>
		</tr>
			<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('FLASH WIDTH');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="widthimagin"
				id="widthimagin" size="50" maxlength="100"
				value="<?php echo $params["widthimagin"];?>" />
			</td>
			<td><?php echo JText::_('FLASH WIDTH IN PIXEL');	?>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('FLASH HEIGHT');	?> :
			</td>
			<td>
			<input class="text_area" type="text" name="heightimagin"
				id="heightimagin" size="50" maxlength="100"
				value="<?php echo $params["heightimagin"];?>" />
			</td>
			<td><?php echo JText::_('FLASH HEIGHT IN PIXEL');	?>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
			<?php echo JText::_('IMAGIN SWF COLOR');	?> :
			</td>
			<td><input type=button value=... onclick="showColorGrid3('imagin_swf_color','none');">&nbsp;
			<input class="text_area" type="text" name="imagin_swf_color"
				id="imagin_swf_color" size="43" maxlength="100"
				value="<?php echo $params["imagin_swf_color"];?>" />
			</td>
			<td>
			<?php echo JText::_('HEXADECIMAL COLOR VALUE OF THE IMAGIN SWF');	?>
			</td>
		</tr>
		<tr>
<td colspan="3">
			<br />
				<?php echo JText::_('SKIN IMAGIN DESC');	?>
			</td>
		</tr>
	</table>
	
        <?php
			echo $pane->endPanel();
			       ?> 
			       
		
		</fieldset>
		<input type="hidden" name="option" value="<?php echo $option;?>" />
		<input type="hidden" name="task" value="" />
		</form>
		<?php
	}
	
}

?>
