<?php
return [
   'debug' => true,
    // View settings
   'view' => [
      'template_path' => __DIR__ . '/templates/backend/views',
      'twig' => [
         'cache' => __DIR__ . '/../cache/twig',
         'debug' => true,
         'auto_reload' => true,
      ],
   ],
    // monolog settings
   'logger' => [
      'name' => 'app',
      'path' => __DIR__ . '/../log/app.log',
   ],
];
