<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class('flex flex-col h-screen justify-between'); ?>>
    <div class="flex flex-row justify-between py-5 px-10 bg-gray-100">
        <div class="font-medium">LOGO</div>
        <nav class="flex flex-row space-x-6 text-gray-800">
            <a class="hover:text-gray-500" href="#">About Me</a>
            <a class="hover:text-gray-500" href="#">My Writing Schedule</a>
            <a class="hover:text-gray-500" href="#">Contact Me</a>
            <a class="hover:text-gray-500" href="#">Suscribe</a>
        </nav>
    </div>