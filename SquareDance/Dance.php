<?php

class Dance
{
    protected $name;
    protected $gender;

    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getName()
    {
        return $this->name;
    }
}