<?php

declare(strict_types=1);

namespace App\Presentation\Worker\Controller;

use App\Application\Worker\CreateWorkerUseCase;
use App\Domain\Repository\WorkerRepositoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class CreateWorkerController extends AbstractController
{
    public function __construct(
        private CreateWorkerUseCase $createWorkerUseCase
    ){}

    public function createWorker(): Response
    {
        $worker = $this->createWorkerUseCase->execute();
        dd($worker);
    }


//    public function getTeachersList(): Response
//    {
//        return $this->render('teachers.html.twig');
//    }
}
