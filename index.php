<?php

trait One
{
    public function add($a, $b)
    {
        return $a+$b;
    }
};

class Two
{
    use One;
    public function anotherAdd()
    {
    }
}

$two = new Two;
var_dump($two->add(3, 4));
