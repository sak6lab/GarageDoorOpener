<?php


class Garage {
    private const DOOR_ONE_GPIO = 7;
    private const DOOR_TWO_GPIO = 25;

    /**
     * turns off circuit for 1 second to activate garage opener
     * @param $door
     */
    public function toggleDoor($door) {
        $gpio = $this->getGpio($door);
        exec("gpio write $gpio 0");
        usleep(1000000);
        exec("gpio write $gpio 1");
    }

    public function readDoor($door) {

    }

    /**
     * given a door number getGpio will return pin associated with that door
     * @param $door
     * @return int
     */
    private function getGpio($door) {
        if ($door == 1) {
            $gpio = self::DOOR_ONE_GPIO;
        }
        else if ($door == 2) {
            $gpio = self::DOOR_TWO_GPIO;
        }
        else {
            throw new LogicException("invalid door number: $door");
        }
        return $gpio;
    }
}