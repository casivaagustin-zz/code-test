<?php

include 'processor.php';

$process = new Process($_GET['data']);
$process->parseInput();
echo $process->getParsedInputObject();