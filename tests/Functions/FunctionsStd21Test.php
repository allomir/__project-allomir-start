<?php

# Модуль Тесты функции для FunctionsStd.php
## часть 1. NS, подключенные пакеты, модули
namespace AllomirStart\Tests\Functions;

use PHPUnit\Framework\TestCase;

use function AllomirStart\Functions\FunctionsStd\capitalize;

## Часть 2. Тесты (классы)
## Часть 2.1. Програмы для тесты логические модульные. phpunit/phpunit
Class FunctionsStd21Test extends TestCase
{
    public function testCapitalize()
    {
        ### Утверждение истиности Представление с помощью phpunit/phpunit Класс TestCase Метод-функция
        $this->assertEquals('', capitalize(''));
        $this->assertEquals('Hello', capitalize('hello'));

        ### Завершение теста (при вызове из скрипта scriptTests.php)
        echo "testCapitalize(21): ok";
    }
}
