<?php

namespace Data;

// class parent
class Shape
{

    // function 
    public function getCorner()
    {
        return -1;
    }
}

// class child
class Rectangle extends Shape
{
    // override
    public function getCorner()
    {
        return 4;
    }

    public function getParentCorner()
    {
        // jadi parent nya 'shape' dan akan akses getCorner function shape
        return parent::getCorner();

        // kalau ini akan akses function dalam class child 'Rectangle'
        // return $this->getCorner();
    }
}
