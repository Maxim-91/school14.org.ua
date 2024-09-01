<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.filesystem.folder' );
?>
<?php
function com_install() 

{
	// -->
	$folder[0][0]	=	'images' . DS . 'oziogallery' . DS ;
	$folder[0][1]	= 	JPATH_ROOT . DS .  $folder[0][0];
	$folder[0][0]	=	'images' . DS . 'oziogallery' . DS . 'file' . DS ;
	$folder[0][2]	= 	JPATH_ROOT . DS .  $folder[0][0];
	$folder[0][0]	=	'images' . DS . 'oziogallery' . DS . 'imagin' . DS ;
	$folder[0][3]	= 	JPATH_ROOT . DS .  $folder[0][0];
	// Vamba start
	$file 	= "_preferences.xml";
	$file1 	= "info.png";	
	$source = 	JPATH_ROOT . DS . 'components' . DS . 'com_oziogallery' . DS . 'imagin' . DS . 'imagin';	
	$dest 	=   JPATH_ROOT . DS . 'images' . DS . 'oziogallery' . DS . 'imagin';
	// Vamba end	
	$message = '';
	$error	 = array();
	foreach ($folder as $key => $value)
	{
		if (!JFolder::exists( $value[1]))
		{
			if (JFolder::create( $value[1], 0755 ) && JFolder::create( $value[2], 0755 ) && JFolder::create( $value[3], 0755 ) && @copy($source. DS .$file,$dest. DS .$file) && @copy($source. DS .$file1,$dest. DS .$file1))
			{

				$message .= '<p><b><span style="color:#009933">Folder</span> ' . $value[0] 
						   .' <span style="color:#009933">created!</span></b></p>';
				$error[] = 0;
			}	 
			else
			{
				$message .= '<p><b><span style="color:#CC0033">Folder</span> ' . $value[0]
						   .' <span style="color:#CC0033">creation failed!</span></b> Please create it manually.</p>';
				$error[] = 1;
			}
		}
		else//Folder exist
		{
			$message .= '<p><b><span style="color:#009933">Folder</span> ' . $value[0] 
						   .' <span style="color:#009933">exists!</span></b></p>';
			$error[] = 0;
		}
	}
}
{
?>
<div class="header">Congratulations! Joomla Ozio Gallery Component has been installed successfully</div>
<?php
}
?>
