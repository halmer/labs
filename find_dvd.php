<?php
    require_once('/include/common.inc.php');
    require_once('/include/dvd.inc.php');

    
    $title = getParam('title');
    if(!empty($title))
    {
    	$dvds = findDvd($title);
    	var_export($dvds);
    }