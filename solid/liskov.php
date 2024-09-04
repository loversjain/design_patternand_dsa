<?php
interface Bird
{
    public function eat();
}
interface FlyingBird {
    public function fly();
}

class Parrot implements Bird, FlyingBird {
    public function eat()
    {
        return " Parrot loves green chilly ";
    }
    public function fly() {
        return " Parrot can fly " ;
    }
}

class Penguin implements Bird {
    public function eat()
    {
        return " Penguin eat food ";
    }
}
function eatable(Bird $bird)
{
    return $bird->eat();
}
function flyable(Parrot $parrot) {
    return $parrot->fly();
}

$Penguin  = new Penguin();
$Parrot  = new Parrot();
echo  eatable($Penguin);
echo  eatable($Parrot);
echo flyable($Parrot);

