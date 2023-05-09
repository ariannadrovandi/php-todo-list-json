<?php 

$testo = file_get_contents('./data.json');
// echo $testo;

$arrayphp = json_decode($testo, true);
// var_dump($arrayphp);

if(isset($_POST['newTodo'])){
    $newTodo = [
        "task" => $_POST['newTodo'],
        "done" => false
    ];
    
    array_push($arrayphp, $newTodo);
    file_put_contents('./data.json', json_encode($arrayphp));

} elseif(isset($_POST['updateData'])){
    $index = $_POST['updateData'];
    $arrayphp[$index]['done'] = !$arrayphp[$index]['done'];
    file_put_contents('./data.json', json_encode($arrayphp));
    
}



header('Content-Type: application/json');

echo json_encode($arrayphp);

?>