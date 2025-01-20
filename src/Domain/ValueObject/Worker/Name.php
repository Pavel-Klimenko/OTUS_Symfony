<?php

namespace App\Domain\ValueObject\Worker;

use http\Exception\InvalidArgumentException;

final class Name
{
    public function __construct(
        private string $name,
        private string $surname,
        private string $middlename,
    )
    {
        $this->assertNameIsValid($name);
        $this->assertSurnameIsValid($surname);
        $this->assertMiddleNameIsValid($middlename);
    }

    public function getFullName():int
    {
        return "$this->name $this->surname $this->middlename";
    }

    private function assertNameIsValid(string $value):void
    {
        if (!preg_match('/^[a-zA-Zа-яА-Я]/', $value)) {
            throw new InvalidArgumentException('Name is invalid');
        }
    }

    private function assertSurnameIsValid(string $value):void
    {
        if (!preg_match('/^[a-zA-Zа-яА-Я]/', $value)) {
            throw new InvalidArgumentException('Surname is invalid');
        }
    }

    private function assertMiddleNameIsValid(string $value):void
    {
        if (!preg_match('/^[a-zA-Zа-яА-Я]/', $value)) {
            throw new InvalidArgumentException('Middlename is invalid');
        }
    }
}
