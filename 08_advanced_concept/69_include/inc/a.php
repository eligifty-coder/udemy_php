<?php
var_dump('I\'m the inc/a.php file');
include __DIR__ . '/b.php';
include __DIR__ . '/../b.php';
?>