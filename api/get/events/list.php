<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/system/classes/autoload.php');

$data = Event::getAllLines();

echo json_encode($data, JSON_UNESCAPED_UNICODE);