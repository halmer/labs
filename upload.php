<?php
    require_once('/include/common.inc.php');

    $vars = array();
    if(isset($_POST['send']))
    {
        $vars['message'] = uploadFile($_FILES['photo']);
    }
    if(isset($_POST['get']))
    {
    	$vars['images'] = getUploadImages();
	}
    echo BuildPage("upload.html", $vars);