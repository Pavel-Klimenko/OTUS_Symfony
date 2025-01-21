<?php

declare(strict_types=1);

namespace App\Presentation\Repository;

use App\Domain\Entity\Worker;
use App\Domain\Repository\WorkerRepositoryInterface;

class WorkerRepository implements WorkerRepositoryInterface
{
    public function add(Worker $worker):void
    {

        dd($worker);

        //todo made the method
    }

    public function remove(Worker $worker):void
    {
        //todo made the method
    }

    public function getById(int $id):Worker
    {
        //todo made the method
    }

//    public function getPrevById():\Worker;
//    public function getNextById():\Worker;
}
