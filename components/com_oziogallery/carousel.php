<?php
define('_JEXEC',1);
require 'settings.php';
if( isset($params_oziogallery["pathport"]) && $params_oziogallery["pathport"] != '' )  {
	$dir_images = rtrim($params_oziogallery["pathport"]) . '/';
	$path  = '../../' . $dir_images;
} else {
    $path  = '../../' .  'images/oziogallery/';
	$dir_images = 'images/oziogallery/';
} 
$files = array();
if ($hd = opendir($path)) {
	while (false !== ($file = readdir($hd))) { 
		if($file != '.' && $file != '..') {
			if(is_file($path . $file) && preg_match('/\.(jpg|png|gif|jpeg)$/i',$file)) {
				$files[] = array(filemtime($path.$file), $file);
			}
		}
	}
	closedir($hd);
}
if(count($files)) {
	arsort($files);
	$url = $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
	if( isset($params_oziogallery["carouseltarget"]) && $params_oziogallery["carouseltarget"] != 0 )  {
	$target = '_blank';
	} else {
	$target = '_self';
	} 
	if($p=strpos($url,'components/')) {
		$url = substr($url,0,$p).$dir_images;
	
		header("content-type:text/xml;charset=utf-8");
		echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
		echo "<slide_show>\n";
		echo "<options>\n";
		echo "<background>transparent</background>\n";
		echo "</options>\n";
		foreach($files as $f) {
			$title = preg_replace('/\.(jpg|png|gif|jpeg)$/i','',$f[1]);
			if( isset($params_oziogallery["carousellink"]) && $params_oziogallery["carousellink"] != 0 )  {
			$link = 'href="http://' .$title .'"';
			} else {
			$link = '';
			} 
			echo "<photo $link target=\"$target\">http://$url$f[1]</photo>\n";
		}
		echo "</slide_show>\n";
	}
}



?>