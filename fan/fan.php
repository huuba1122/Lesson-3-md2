<?php
class Fan{
    const SLOW = 1;
    const MEDIUM =2;
    const FAST =3;
    private $speed;
    private $on;
    private $radius;
    private $color;
    function __construct(){
        $this->speed = self::SLOW;
        $this->on = false;
        $this->radius = 5;
        $this->color = "blue";
    }

    /**
     * @param int $speed
     */
    public function setSpeed($speed)
    {
        switch ($speed){
            case (1):
                $this->speed = self::SLOW;
                break;
            case (2):
                $this->speed = self::MEDIUM;
                break;
            case (3):
                $this->speed = self::FAST;
                break;
        }
    }

    /**
     * @param false $on
     */
    public function setIsOn($on)
    {
        $this->on = $on;
    }

    /**
     * @param int $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @return false
     */
    public function getIsOn()
    {
        return $this->on;
    }

    /**
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
    function toString(){
        if ($this->on == true){
            echo "speed: ".$this->getSpeed()." color: ".$this->getColor()." radius: ".$this->getRadius()." Fan is on <br>";
        }elseif($this->on == false){
            echo  "color: ".$this->getColor()." radius: ".$this->getRadius()." Fan is off <br>";
        }
    }
}