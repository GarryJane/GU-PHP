<?php

class A
{
    const M = 1, N = 2;

    public function __set($name, $value)
    {
        echo "нет такого метода $name, $value не записано\n";
    }

    public function __get($name)
    {
        echo "не читаицО ! нет такого метода $name\n";
    }

    public function __call($name, $arguments)
    {
        echo "вызван несуществующий метод $name с аргументами:\n";
        var_dump($arguments);
    }

    public function __toString()
    {
        return "не получится использовать это как переменную, это - объект )\n";
    }

}

$a = new A();

echo $a->b;
$a->c = 2;
echo $a::M . "\n" . $a::N . "\n";
$a->test(1,2,3);
echo $a;