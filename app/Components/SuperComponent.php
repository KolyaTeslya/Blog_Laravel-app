<?php

namespace App\Components;

class SuperComponent
{
    protected $name = 'super ';
    protected $property = 'super property';

    public function __construct($atribute)
    {
        $this->name .= $atribute;
    }

    /**
     * @return string
     */
    public function getProperty(): string
    {
        return $this->property;
    }

    /**
     * @param string $property
     */
    public function setProperty(string $property): void
    {
        $this->property = $property;
    }



    public function getName()
    {
        return $this->name;
    }
}
