<!DOCTYPE html>
<html lang="en">
    <head>
        <!--Metadata-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1. minimum-scale=0.25">
        <meta name="description" content="Actor Site Template">
        <body>
        
        
        <nav id="navbar" class="co2 ffh navbar navbar-expand-sm"> 
            <a class="ffl co2 logotxt" href=<?php echo $_SERVER['DOCUMENT_ROOT'];?>>
                <?php echo strtoupper(get_bloginfo("name"));?>
            </a>
            <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul id="" class="navbar-nav ml-auto">%3$s</ul>'
                    )
                );
            ?>
        </nav>

        <?php
            wp_head();
        ?>
    </head>