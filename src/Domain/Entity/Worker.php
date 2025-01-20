<?php

namespace App\Domain\Entity;

use App\Domain\ValueObject\Worker\Age;
use App\Domain\ValueObject\Worker\Gender;
use App\Domain\ValueObject\Worker\Name;
use App\Domain\ValueObject\Worker\Salary;

final class Worker
{
     public function __construct(
         private Age $age,
         private Gender $gender,
         private Name $name,
         private Salary $salary,
     ){}

    public function getAge():Age
    {
        return $this->age;
    }

    public function getGender():Gender
    {
        return $this->gender;
    }

    public function getName():Name
    {
        return $this->name;
    }

    public function getSalary():Salary
    {
        return $this->salary;
    }

}
