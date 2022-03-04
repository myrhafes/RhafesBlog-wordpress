<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <?php wp_head();?>

    <title>Rhafes Blog</title>
</head>
<body>
    <div class="blog-content" id="content">
        <!-- START TOP SECTION -->
        <div class="top-content">
            <i class="fa-solid fa-bars" onclick="showMenu()"></i>
            <h1>RHAFES'S BLOG</h1>
        </div>
        <!-- END TOP SECTION -->

        <!-- START LEFT SECTION -->
        <div class="left-content" id="nav">
            <i class="fa-solid fa-xmark fa" onclick="closeMenu()"></i>
            <h1>Mohamed Yassine</h1>
            <hr>
            <img src="<?php bloginfo('template_directory');?>/Assets/images/me.jfif" alt="">
            <p>Hi, my name is Mohamed Yassine RHAFES. 
                Briefly introduce yourself here. 
                You can also provide a link to the about page.
            </p>
            <a href="<?php bloginfo('template_directory');?>/Assets/files/CV.pdf" target="_blank">Download CV</a>
            <div class="social">
                <i class="fa-brands fa-linkedin"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-github"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-twitch"></i>
            </div>
        </div>
        <!-- END LEFT SECTION -->