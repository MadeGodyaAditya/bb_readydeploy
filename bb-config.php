<?php 
return array (
  'debug' => false,
  'salt' => '398f0311c6f0b20665006195f8377ad0',
  'url' => 'http://localhost:8004/boxbilling/',
  'admin_area_prefix' => '/bb-admin',
  'sef_urls' => true,
  'timezone' => 'UTC',
  'locale' => 'en_US',
  'locale_date_format' => '%A, %d %B %G',
  'locale_time_format' => ' %T',
  'path_data' => 'var\\www\\html\\boxbilling/bb-data',
  'path_logs' => 'var\\www\\html\\boxbilling/bb-data/log/application.log',
  'log_to_db' => true,
  'db' => 
  array (
    'type' => 'mysql',
    'host' => 'db',
    'name' => 'boxbill',
    'user' => 'boxbill_admin',
    'password' => 'admin',
  ),
  'twig' => 
  array (
    'debug' => true,
    'auto_reload' => true,
    'cache' => 'var\\www\\html\\boxbilling/bb-data/cache',
  ),
  'api' => 
  array (
    'require_referrer_header' => false,
    'allowed_ips' => 
    array (
    ),
    'rate_span' => 3600,
    'rate_limit' => 1000,
  ),
);