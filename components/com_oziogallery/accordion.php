<?php
define('_JEXEC',1);
require 'settings.php';
if( isset($params_oziogallery["pathacco"]) && $params_oziogallery["pathacco"] != '' )  {
	$dir_images = rtrim($params_oziogallery["pathacco"]) . '/';
	$path  = '../../' . $dir_images;
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
	if($p=strpos($url,'components/')) {
		$url = substr($url,0,$p).$dir_images;
	
		header("content-type:text/xml;charset=utf-8");
		echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>\n";
		echo "<options>\n";
		foreach($files as $f) {
			$title = preg_replace('/\.(jpg|png|gif)$/i','',$f[1]);
			//echo '<pic src="http://'. $url .$f[1].'" title="/'.$title."\" />\n";
			echo "    <item link=\"\" jpg=\"". $url . $f[1] . "\" title=\"$title\" color=\"0x000000\" alphaColor=\"0\"><![CDATA[$title]]>";
			echo "    </item>\n";
		}
		echo "</options>\n";
	}
}
?>