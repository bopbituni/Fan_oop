<?php


class Fan
{
    protected $speed;
    protected $color;
    protected $radius;
    protected $boolen;

    public function __construct($speed, $color, $radius, $boolen)
    {
        $this->speed = $speed;
        $this->color = $color;
        $this->radius = $radius;
        $this->boolen = $boolen;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getRadius()
    {
        return $this->radius;
    }
    public function turnOn ()
    {
        return "Bat";
    }
    public function turnOff ()
    {
        return "Tat";
    }
}