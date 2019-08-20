<?php
const DOOR_ONE_GPIO = 7;
const DOOR_TWO_GPIO = 25;
if (isset($_GET['door'])) {
    $door = $_GET['door'];
    if ($door == '1') {
        openDoor(DOOR_ONE_GPIO);
        response(200,"Request sent");
    }
    elseif ($door == '2') {
        openDoor(DOOR_TWO_GPIO);
        response(200,"Request sent");
    }
}

function openDoor($gpio) {
    exec("gpio write $gpio 0");
    usleep(1000000);
    exec("gpio write $gpio 1");
}

function response($status,$status_message) {
    $response['status'] = $status;
    $response['status_message'] = $status_message;
    $json_response = json_encode($response);
    echo $json_response;
}


