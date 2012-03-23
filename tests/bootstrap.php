<?php
// support for PHP <5.3
if (version_compare(PHP_VERSION, '5.3.0') < 0) {
    define('__DIR__', dirname(__FILE__));
}
