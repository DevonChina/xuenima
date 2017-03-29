<?php
require 'vendor/autoload.php';

$go = new Mustache_Engine();

echo $go->render('Hello {{ name }}', ['name'=> 'fanxiao2']);
