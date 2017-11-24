<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

</head>

<body id="mainbody">
    <h1 id="blogname"><a href=<?php bloginfo('url');?> /> <?php bloginfo('name'); ?></a></h1>
    <?php //wp_nav_menu(['menu' => 'news-menu'], ['menu' => 'sport-menu']); ?>