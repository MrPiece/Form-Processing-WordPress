<?php

require_once 'My_Widget.php';

add_action('widgets_init', 'register_my_widgets');
function register_my_widgets()
{
  register_widget('My_Widget');
}