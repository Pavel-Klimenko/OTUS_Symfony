<?php

declare(strict_types=1);

namespace App\Domain\Repository;

use App\Domain\Entity\Worker;

interface WorkerRepositoryInterface
{
    public function add(Worker $worker):void;
    public function remove(Worker $worker):void;
    public function getById(int $id):Worker;

//    public function getPrevById():\Worker;
//    public function getNextById():\Worker;
}
