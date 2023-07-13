<?php

namespace Junaidiar\BelajarPhpComposerLibrary;

class Customer
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name = "Guest"): string
    {
        return "Hello $name, My name is $this->name";
    }

    public function sayGoodBye(string $name = "Guest"): string
    {
        return "Good Bye $name, See you later $this->name";
    }
}
