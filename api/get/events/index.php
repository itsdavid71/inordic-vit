<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/system/classes/autoload.php');

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $event = new Event($id);
    $data = [];
    $data['id'] = $event->getField('id');
    $data['title'] = $event->getField('title');
} else {
    $data = ['error' => 'no id provided'];
}


echo json_encode($data, JSON_UNESCAPED_UNICODE);