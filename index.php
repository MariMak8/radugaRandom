<?php
declare(strict_types = 1);
class Color
{
    private int $red;
    private int $green;
    private int $blue;

    public function __construct(int $red, int $green,int $blue)
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }
    private function setRed(int $red):void
    {
        $this -> validate($red);
        $this -> red = $red; }
    public function getRed():int
    {
        return $this->red;
    }

    public function getGreen():int
    {
        return $this->green;
    }
    private function setGreen(int $green):void
    {
        $this -> validate($green);
        $this -> green = $green;

    }

    public function getBlue():int
    {
        return $this -> blue;
    }
    private function setBlue(int $blue):void
    {
        $this -> validate($blue);
        $this -> blue = $blue;

    }
    private function validate($value)
    {
        if($value < 0 || $value > 255)
        {
            exit('owt of range');
        }
    }
    public function equals(Color $color):bool
    {
        return $this->getRed() == $color->getRed() &&
             $this-> getBlue() == $color->getBlue() &&
             $this->getGreen() == $color ->getGreen();
    }
    public static function random():self
    {

        return new self (rand(0, 255), rand(0, 255), rand(0, 255));
        echo random();

    }


    public function mix(Color $color):Color
    {
        return new Color( ($this->getRed() + $color -> getRed())/2,
            ($this->getGreen() + $color -> getGreen())/2,
            ($this->getBlue() + $color ->getBlue())/2 );
    }


}

$color3= Color :: random();
$color1 = new Color(0,0,255);
$color2 = new Color(255, 0, 0);
$result = $color1->equals($color2);
echo "<pre>";
var_dump($color3);
echo "<pre>";
