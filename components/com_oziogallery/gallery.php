<?php
define('_JEXEC',1);
require 'settings.php';
if( isset($params_oziogallery["skin"]) && $params_oziogallery["skin"] == '0' )  {
	if( isset($params_oziogallery["pathgallcaro"]) && $params_oziogallery["pathgallcaro"] != '' )  {
		$dir_images = rtrim($params_oziogallery["pathgallcaro"]) . '/';
		$path  = '../../' . $dir_images;
	} else {
		$path  = '../../' .  'images/oziogallery/';
		$dir_images = 'images/oziogallery/';
	} 
} elseif( isset($params_oziogallery["skin"]) && $params_oziogallery["skin"] == '3' ) {
	if( isset($params_oziogallery["pathrot"]) && $params_oziogallery["pathrot"] != '' )  {
		$dir_images = rtrim($params_oziogallery["pathrot"]) . '/';
		$path  = '../../' . $dir_images;
	} else {
		$path  = '../../' .  'images/oziogallery/';
		$dir_images = 'images/oziogallery/';
	} 
} elseif( isset($params_oziogallery["skin"]) && $params_oziogallery["skin"] == '4' ) {
	if( isset($params_oziogallery["pathlust"]) && $params_oziogallery["pathlust"] != '' )  {
		$dir_images = rtrim($params_oziogallery["pathlust"]) . '/';
		$path  = '../../' . $dir_images;
	} else {
		$path  = '../../' .  'images/oziogallery/';
		$dir_images = 'images/oziogallery/';
	} 
} else {
    $path  = '../../' .  'images/oziogallery/';
	$dir_images = 'images/oziogallery/';
} 

$files = array();
if ($hd = opendir($path)) {
	while (false !== ($file = readdir($hd))) { 
		if($file != '.' && $file != '..') {
			if(is_file($path . $file) && preg_match('/\.(jpg|png|gif)$/i',$file)) {
				$files[] = array(filemtime($path.$file), $file);
			}
		}
	}
	closedir($hd);
}
if(count($files)) {
	arsort($files);
	//$url = $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
	$url = dirname($_SERVER['PHP_SELF']);
	$txt = rtrim($params_oziogallery["retrotxt"]);
	if($p=strpos($url,'components/')) {
		$url = substr($url,0,$p).$dir_images;
	
		header("content-type:text/xml;charset=utf-8");
		echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>\n";
		echo "<tiltviewergallery>\n";
		echo "  <photos>\n";
		foreach($files as $f) {
			$title = preg_replace('/\.(jpg|png|gif)$/i','',$f[1]);
			echo "    <photo imageurl=\"". $url . $f[1] . "\" linkurl=\"". $url ."file/". $title . ".zip\">\n";
			echo "    <title>" . $title . "</title>\n";
			echo "    <description><![CDATA[$txt]]></description>\n";
			echo "    <location>". $url . $f[1] . "</location>\n";
			echo "    </photo>\n";
			//echo "    <item link=\"\" jpg=\"". $url . $f[1] . "\" title=\"$title\" color=\"0x000000\" alphaColor=\"0\"><![CDATA[$title]]>";
			//echo "    </item>\n";
		}
		echo "  </photos>\n";
		echo "</tiltviewergallery>\n";
	}
}
?>