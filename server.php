<?php 

$testo = file_get_contents('./data.json');

$arrayphp = json_decode($testo, true);

header('Content-Type: application/json');

echo json_encode($arrayphp);

?>