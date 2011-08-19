<?php

// Shows the name of the script in execution, used by menus and custom scripts
$file = $_SERVER["SCRIPT_NAME"];
$break = Explode('/', $file);
$curr_page = $break[count($break) - 1];

//Website name for page titles
$website_name = "SAHER - Society for Awareness, Harmony &amp; Equal Rights."; ?>

<head>
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="-1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title><?=$website_name ?></title>
    <meta name="keywords" content="" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
