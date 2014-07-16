<?php

$menu = array();

$menu[] = array(
  'text' => 'foo',
  'href' => '/cpanel/foo',
);


$menu[] = array(
  'text' => 'bar',
  'href' => '/cpanel/bar',
  'sub' => array(
    array(
      'text' => 'bar_sub_1',
      'href' => '/cpanel/bar/bar_sub_1'
    ),
    array(
      'text' => 'bar_sub_2',
      'href' => '/cpanel/bar/bar_sub_2'
    ),
  )
);


return $menu;
