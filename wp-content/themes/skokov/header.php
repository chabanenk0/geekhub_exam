<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php the_title() ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body>
<div class="wrapper">
    <div class="header">
        <a href="#" class="logo" ><img src="<?= get_template_directory_uri() ?>/img/logo.gif" alt="Skokov logo" /> </a>
        <?php wp_nav_menu()?>
        <div class="top-image">
            <div class="category">
                <h1>Blog<?php get_the_category() ?></h1>
            </div>
        </div>
    </div>

