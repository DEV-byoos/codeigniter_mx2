<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Forum config
|--------------------------------------------------------------------------
|
| This determines the basic forum config
|
*/
$config['site_title'] = 'mon module';
$config['site_slogan'] = 'un beau module';
$config['site_email'] = 'gbobard@gmail.com';

/*
|--------------------------------------------------------------------------
| codeigniter blog2  Version
|--------------------------------------------------------------------------
|
*/
$config['version'] = array (
  // Manual numbering
  "major" => '18',
  "minor" => '04',
  "patch" => '0',
  
  "build" => '2a', // build date 2018/08/16  09:00
);

/*
|--------------------------------------------------------------------------
| show or hidden session value into  footer view
|--------------------------------------------------------------------------
|
*/
$config['show_session_footer'] = true;

/*
|--------------------------------------------------------------------------
| Image path and url for language flags
|--------------------------------------------------------------------------
*/
$config['mx2_img_path'] = 'assets/images/';  // relative to BASEPATH
$config['mx_img_url'] = 'assets/images/';  // relative to base_url
