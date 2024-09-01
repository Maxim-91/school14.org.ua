<?php
/**
* Joomla MusicBox  2.1.0
* @ Released under GNU/GPL License: http://www.gnu.org/copyleft/gpl.html
* @paked: musicbox.html.php
* @ Copyright (C) 2007 Vamba
* @ All rights reserved
**/

// cerca nei file  mp3 oppure nei file flv
$filter1 = ".jpg";
$filter2 = ".png";
// Percorso della directory dove risiedono i file
// "./" = questa impostazione cerca nella directory dove si trova questo file
$directory = "./";
// URL dei file  senza / iniziale
$url = $_SERVER['PHP_SELF'];
$url = str_replace('gallery.php', '', $url);
/////////////////////////////////////////////////
// Inizio la lettura della directory e applico i filtri
@$d = dir($directory);
if ($d)
{
  while($entry = $d->read()) {
 	$ps1 = strpos(strtolower($entry), $filter1);
	if (!(($ps1 === false) || ($ps1 === false))) {
	$items[$entry]['mtime'] = filemtime($entry);
	}  
    $ps2 = strpos(strtolower($entry), $filter2);
    if (!(($ps2 === false) || ($ps2 === false))) {
      $items[$entry]['mtime'] = filemtime($entry);
    }
  }
  $d->close();
// start Vamba fix 11.08.2008  
  if ($items == '') 
  {
  @arsort($items);
	} else {
  arsort($items);  
  }
// end Vamba fix  
}// chiusura if $d

// start Vamba fix 11.08.2008  
  if ($items == '') 
	{
  echo 'No images found in the module image Folder. Upload some images and retry<br />';
  echo 'Nessuna immagine trovata nella cartella delle immagini del modulo. Carica alcune immagini e ritenta';
    } else {
// La playlist creata in formato  xspf
header("content-type:text/xml;charset=utf-8");
echo "<tiltviewergallery>\n";
echo "  <photos>\n";

  
// ...creo un loop negli array...
foreach($items as $key => $value)
{
  $title = substr($key, 0, strlen($key) - 4);
  echo "    <photo imageurl=\"". $url . $key . "\" linkurl=\"". $url ."file/". $title . ".zip\">\n";
  echo "    <title>" . $title . "</title>\n";
  echo "    <location>". $url . $key . "</location>\n";
  echo "    </photo>\n";
}

// aggiungo i tag di chiusura
echo "  </photos>\n";
echo "</tiltviewergallery>\n";
}// chiusura else vamba fix
?>