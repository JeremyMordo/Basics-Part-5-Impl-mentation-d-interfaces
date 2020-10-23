<?php

// Vehicle.php

abstract class Vehicle
{
    protected $color;

    protected $nbSeats;

    protected $nbWheels;
    
    protected $currentSpeed;

    public function __construct($color, $nbSeats, $nbWheels)
    {
        $this->color=$color;
        $this->nbSeats=$nbSeats;
        $this->nbWheels=$nbWheels;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
    
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }
}


// Bike.php

final class Bike extends Vehicle implements LightableInterface
{
    protected $color;

    protected $nbSeats;
    
    protected $nbWheels;

    public function __construct($color, $nbSeats, $nbWheels)
    {
        parent:: __construct($color, $nbSeats, $nbWheels);
    }

    public function switchOn()
    {
        if ($this->currentSpeed > 10)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function switchOff()
    {
        return false;
    }

}

// Skateboard.php

final class Skateboard extends Vehicle
{
    protected $color;
    
    protected $nbSeats;
    
    protected $nbWheels;

    public function __construct($color, $nbSeats, $nbWheels)
    {
        parent:: __construct($color, $nbSeats, $nbWheels);
    }
}

// Cars.php

final class Car extends Vehicle implements LightableInterface
{
    protected $color;
    
    protected $nbWheels;

    protected $nbSeats;
    
    private $hasParkBrake;

    public function __construct($color, $nbSeats, $nbWheels)
    {
        parent:: __construct($color, $nbSeats, $nbWheels);
    }

    public function getHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    public function setHasParkBrake(bool $getHasParkBrake): void
    {
        $this->color = $getHasParkBrake;
    }

    public function start($hasParkBrake)
    {
        $sentence = "";
        if ($hasParkBrake == 0) {
            throw new Exception("Can't Start !");
        }
    }

    public function setParkBrake($hasParkBrake)
    {
        $this->hasParkBrake=$hasParkBrake;
    }

    public function switchOn()
    {
        return true;
    }

    public function switchOff()
    {
        return false;
    }
}
