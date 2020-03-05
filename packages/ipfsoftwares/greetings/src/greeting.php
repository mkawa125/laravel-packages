<?php
namespace IPFSoftwares\Greetings;

class Greetr
{
    public function greet(String $sName)
    {
        return 'Hi ' . $sName . '! How are you doing today?';
    }
}