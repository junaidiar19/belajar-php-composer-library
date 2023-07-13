<?php
namespace Junaidiar\BelajarPhpComposerLibrary;

class Customer
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name): string
    {
        return "Hello $name, My name is $this->name";
    }
}
