<?php

require_once 'test.phar';

var_export(get_declared_classes());
var_export(get_declared_interfaces());

$test = new Ariel\Test();
$test->echo();