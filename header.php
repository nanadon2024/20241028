<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NZ Portfolio</title>
    <meta name="description" content="蔵面奈々ポートフォリオ">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(  ); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(  ); ?>/https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <?php wp_head(  ); ?>
</head>
<body>
    <!-- HEADER-->
    <header>
        <!-- MENU -->
        <div class="header">
            <!-- Header,navigation / Smart Phone -->
            <div class="header-sp">
                <a href="<?php echo get_template_directory_uri(  ); ?>/index.html"><p class="logo">藏</p></a>
            </div>
            <i id="menu-sp" class="bi bi-list" alt="ナビゲーションを開く" onclick="document.getElementById('nav-sp').style.display = 'block'"></i>
        </div>
        <nav id="nav-sp">
            <i id="close-sp" class="bi bi-x-circle" alt="ナビゲーションを閉じる" onclick="document.getElementById('nav-sp').style.display = 'none'"></i>
              <ul>
                <li class="logo"><a href="<?php echo get_template_directory_uri(  ); ?>">藏</a></li>
                <li class="menu"><a href="<?php echo esc_url(home_url('#works')); ?>" onclick="document.getElementById('nav-sp').style.display = 'none'">WORKS</a></li>
                <li class="menu"><a href="<?php echo get_template_directory_uri(  ); ?>/index.html#skills" onclick="document.getElementById('nav-sp').style.display = 'none'">SKILLS</a></li>
                <li class="menu"><a href="<?php echo get_template_directory_uri(  ); ?>/index.html#about" onclick="document.getElementById('nav-sp').style.display = 'none'">ABOUT</a></li>
                <li class="menu"><a href="<?php echo get_template_directory_uri(  ); ?>/index.html#contact" onclick="document.getElementById('nav-sp').style.display = 'none'">CONTACT</a></li>
              </ul>
        </nav>
        <!-- Header,navigation / PC -->
        <nav id="nav-pc">
            <ul class="nav-pc-list">
                <li class="menu-pc"><a href="<?php echo esc_url(home_url('#works')); ?>">WORKS</a></li>
                <li class="menu-pc"><a href="<?php echo esc_url(home_url('#skills')); ?>">SKILLS</a></li>
                <li class="logo"><a href="<?php echo esc_url(home_url()); ?>">藏</a></li>
                <li class="menu-pc"><a href="<?php echo esc_url(home_url('#about')); ?>">ABOUT</a></li>
                <li class="menu-pc"><a href="<?php echo esc_url(home_url('#contact')); ?>">CONTACT</a></li>
            </ul>
        </nav>
    </header>