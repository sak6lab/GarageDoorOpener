<?php
include '../src/Garage.php';
if (isset($_GET['door'])) {
    $garage = new Garage();
    $door = intval($_GET['door']);
    try {
        $garage->toggleDoor($door);
        response(200,"Request sent");
    } catch (LogicException $e) {
        response(400,$e->getMessage());
    }
}

function response($status,$status_message) {
    $response['status'] = $status;
    $response['status_message'] = $status_message;
    $json_response = json_encode($response);
    echo $json_response;
}


