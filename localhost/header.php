<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <link href="http://<?php echo $_SERVER['SERVER_ADDR'] . '/localhost/bootstrap/css/bootstrap.min.css'; ?>" type="text/css" rel="stylesheet" />
        <link href="http://<?php echo $_SERVER['SERVER_ADDR'] . '/localhost/jquery-ui-1.8.23.custom/css/ui-lightness/jquery-ui-1.8.23.custom.css'; ?>" type="text/css" rel="stylesheet" />
        <script src="http://<?php echo $_SERVER['SERVER_ADDR'] . '/localhost/jquery-ui-1.8.23.custom/js/jquery-1.8.0.min.js'; ?>" type="text/javascript"></script>
        <script src="http://<?php echo $_SERVER['SERVER_ADDR'] . '/localhost/jquery-ui-1.8.23.custom/js/jquery-ui-1.8.23.custom.min.js'; ?>" type="text/javascript"></script>
        <script src="http://<?php echo $_SERVER['SERVER_ADDR'] . '/localhost/bootstrap/js/bootstrap.min.js'; ?>" type="text/javascript"></script>
    </head>
    <body>
        
        <div class="navbar">
            <div class="navbar-inner">
                <a class="brand" href="http://<?php echo $_SERVER['SERVER_ADDR']; ?>"><?php echo $_SERVER['SERVER_ADDR']; ?></a>
                <ul class="nav">
                    <li class="<?php if(strstr($_SERVER['PHP_SELF'], 'phpinfo.php')) echo 'active'; ?>"><a href="http://<?php echo $_SERVER['SERVER_ADDR'] . '/localhost/phpinfo.php'; ?>">PHP info</a></li>
                </ul>
            </div>
        </div>
        