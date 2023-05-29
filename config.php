<?php
session_start();

// base file link
define("BL", __DIR__.'/');
define("BLA", __DIR__.'/admin/');

// base url
define("BU", "http://127.0.0.1/php/transportation/");
define("BUA", "http://127.0.0.1/php/transportation/admin/");
define("ASSETS", "http://127.0.0.1/php/transportation/assets/");

// connect to database
require BL.'functions/db.php';




?>

