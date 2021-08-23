<?php

use ru\timmson\MyClass;

require_once(__DIR__ . "/vendor/autoload.php");

$myClass = new MyClass();

echo "Hello " . $myClass->sum(10, 20);
