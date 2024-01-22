<?php
header('Content-Type: application/json');

$albums = json_decode(file_get_contents('albums.json'), true);

echo json_encode($albums);