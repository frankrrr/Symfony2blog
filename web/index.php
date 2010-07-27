<?php

require_once __DIR__.'/../pluz/PluzKernel.php';

$kernel = new PluzKernel('prod', false);
$kernel->handle()->send();
