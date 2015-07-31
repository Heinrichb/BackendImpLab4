<?php
if(!isset($head)) {
    $head = array();
}
$head['title'] = array_key_exists('title', $head)
    ? $head['title'].' &mdash; '
    : '';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">

    <title><?php echo $head['title']; ?> SITE NAME</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../assets/styles/main.css" type="text/css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo DIR_STYLES.'/assets/styles/main.css'; ?>" />
    <?php if(isset($styles)) foreach($styles as $style) echo '<link rel="stylesheet" href="'.DIR_STYLES.$style.'" />'; ?>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="<?php echo DIR_SCRIPTS.'/main.js'?>"></script>

    <?php if(isset($scripts)) foreach($scripts as $script) echo '<script src="'.DIR_SCRIPTS.$script.'"></script>'; ?>
</head>
<body>