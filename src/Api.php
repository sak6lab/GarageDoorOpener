<?php
class Api {
    const DOOR_ONE_GPIO = 4;
    const DOOR_TWO_GPIO = 27;
    public function handleRequest() {
        if (isset($_GET['door'])) {
            $door = $_GET['door'];
            if ($door === '1') {
                $this->openDoor(self::DOOR_ONE_GPIO);
            }
            elseif ($door === '2') {
                $this->openDoor(self::DOOR_TWO_GPIO);
            }
        }
    }

    private function openDoor($gpio) {
        exec("gpio write $gpio 0");
        usleep(1000000);
        exec("gpio write $gpio 1");
    }
}


