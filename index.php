<?php
require_once 'Vehicle.php';

$Bike = new Bike("red", 3, 4);

$Bike->setCurrentSpeed(11);

echo "This bike run at " . $Bike->getCurrentSPeed() . " Km/h <br/>";
if ($Bike->switchOn() == true)
{
    echo "Lights are ON !";
}
else
{
    echo "Lights are OFF !";
}
