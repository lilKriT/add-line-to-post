<?php
/*
    Plugin Name: A simple test plugin.
    Description: Add a line of text to every plugin.
    Version: 1.0
    Author: lilKriT
    Author URI: https://lilKriT.dev
*/

function addLineOfText($content)
{
    if (is_single() && is_main_query()) {
        return $content . "<p>Made by lilKriT.</p>";
    }

    return $content;
}
add_filter("the_content", "addLineOfText");
