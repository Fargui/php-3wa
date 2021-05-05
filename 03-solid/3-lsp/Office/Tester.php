<?php

namespace Office;

class Tester extends Employee
{
    public function work(): string
    {
        return "Bonjour, je m'appelle $this->firstName et je teste des machins";
    }
}