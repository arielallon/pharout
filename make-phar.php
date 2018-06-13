<?php

$includePath = __DIR__ . '/src/';
$phar = new Phar('test.phar');
$phar->buildFromDirectory($includePath);
$phar->setDefaultStub('phar-index.php');