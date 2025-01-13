<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TeacherController extends AbstractController
{
    public function getTeachersList(): Response
    {
        return $this->render('teachers.html.twig');
    }
}
