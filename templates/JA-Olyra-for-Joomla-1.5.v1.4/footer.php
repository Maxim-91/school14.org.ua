<?php
/*------------------------------------------------------------------------
# JA Olyra for Joomla 1.5 - Version 1.4 - Licence Owner JA115059
# ------------------------------------------------------------------------
# Copyright (C) 2004-2008 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: J.O.O.M Solutions Co., Ltd
# Websites:  http://www.joomlart.com -  http://www.joomlancers.com
# This file may not be redistributed in whole or significant part.
-------------------------------------------------------------------------*/

defined( '_JEXEC' ) or die( 'Restricted access' );

global $_VERSION;

// NOTE - You may change this file to suit your site needs
?>

Copyright &copy; 
<?php 
	echo JHTML::_('date', 'now', '2005 - %Y');
	echo " ";
	echo $mainframe->getCfg('sitename');
?>. 
Free Joomla!<a href="http://www.nrg-design.ru" title="Visit NRG-DESIGN.RU!" target="blank">Template</a>
<br />
<?php 
	$version = new JVersion();
	echo $version->URL; 
?>
