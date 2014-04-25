<?php
// Plugin definition
$plugin = array(
  'title' => t('Bonham'),
  'icon' => 'bonham.png',
  'category' => t('Pushtape'),
  'theme' => 'bonham',
  'css' => 'css/layouts/bonham/bonham.layout.css',
  'regions' => array(
    'header' => t('Header'),
    'sidebar' => t('Content Sidebar'),
    'contentmain' => t('Content'),
  ),
);
