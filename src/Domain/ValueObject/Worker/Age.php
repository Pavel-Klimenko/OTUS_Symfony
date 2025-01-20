<?php

namespace App\Domain\ValueObject\Worker;

use http\Exception\InvalidArgumentException;

final class Age
{
    public function __construct(private int $age)
    {
        $this->assertAgeIsValid($age);
    }

    public function getAge():int
    {
        return $this->age;
    }

    private function assertAgeIsValid(int $value):void
    {
        if ($value < 18) {
            throw new InvalidArgumentException('Age can`t be less than 18');
        }
    }

}
