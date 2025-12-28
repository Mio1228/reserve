<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mio Portfolio</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"></rink>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Hachi+Maru+Pop&family=Italianno&family=Kiwi+Maru&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Zain:ital,wght@0,200;0,300;0,400;0,700;0,800;0,900;1,300;1,400&family=Zen+Antique&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header id="head">
        <div id="nav-pc">
            <ul class="nav">
                <li><a href="<?php echo home_url('/#about'); ?>">＊ABOUT</a></li>
                <li><a href="<?php echo home_url('/#works'); ?>">＊WORKS</a></li>
                <li><a href="<?php echo home_url('/#service'); ?>">＊SERVICE</a></li>
                <li><a href="<?php echo home_url('/#contact'); ?>">＊CONTACT</a></li>
            </ul>
        </div>
        <!-- スマホ -->
        <button id="menu-sp" onclick="document.getElementById('nav-sp').style.display='block'">
            <img class="frame1" src="<?php echo get_template_directory_uri(); ?>/img/icon.png" alt="ナビゲーションを開く">
        </button>

        <div id="nav-sp">
             <button id="close" onclick="document.getElementById('nav-sp').style.display='none'">
                ×
            </button>
            <ul class="nav">
                <li><a href="<?php echo home_url('/#about'); ?>" onclick="document.getElementById('nav-sp').style.display='none'">＊ABOUT</a></li>
                <li><a href="<?php echo home_url('/#works'); ?>" onclick="document.getElementById('nav-sp').style.display='none'">＊WORKS</a></li>
                <li><a href="<?php echo home_url('/#service'); ?>" onclick="document.getElementById('nav-sp').style.display='none'">＊SERVICE</a></li>
                <li><a href="<?php echo home_url('/#contact'); ?>" onclick="document.getElementById('nav-sp').style.display='none'">＊CONTACT</a></li>
            </ul>
        </div>
    </header>