<?php
define('_JEXEC',1);
require 'settings.php';
$titolo = rtrim($params_oziogallery["categorytitle"]) . '/';
$path  = '../../images/oziogallery/';
$categories[] = array(filectime($path), 'oziogallery');
if ($hd = opendir($path)) {
	while (false !== ($file = readdir($hd))) { 
		  if($file != '.' && $file != '..') {
			if(is_dir($path . $file) && $file != 'file' && $file != 'imagin') {
				$categories[] = array(filectime($path.$file), $file);
			}
		  }
	}
	closedir($hd);
}
arsort($categories);
if(count($categories)) {
	header("content-type:text/xml;charset=utf-8");
	echo "<gallery title=\"$titolo\" thumbDir=\"./images/oziogallery/\" imageDir=\"./images/oziogallery/\" random=\"false\">\n";
	foreach($categories as $c) {
		$files = array();
		if($c[1] != 'oziogallery') {
			$path  = '../../images/oziogallery/' . $c[1] . '/';
		} else {
			$path  = '../../images/oziogallery/';
		}
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
			echo "<category name=\"{$c[1]}\">\n";
			foreach($files as $f) {
				if($c[1] == 'oziogallery') {
					$img = $f[1];
				} else {
					$img = $c[1] . '/'. $f[1];
				}
				$title = preg_replace('/\.(jpg|png|gif)$/i','',$f[1]);
				$idate = strftime('%d.%m.%Y', $f[0]);
				echo "<image>\n";
				echo "<date>$idate</date>\n";
				echo "<title>$title</title>\n";
				echo "<desc>$title</desc>\n";
				echo "<thumb>$img</thumb>\n";
				echo "<img>$img</img>\n";
				echo "</image>\n";
			}
			echo "</category>\n";
		}
	}
	echo "</gallery>";
}
?>