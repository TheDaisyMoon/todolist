<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ToDoController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/create", name="create", methods={"POST"})
     */
    public function create()
    {
        exit('to do : create new task !');
    }


    /**
     * @Route("/switch/{id}", name="switch")
     */
    public function switch()
    {
        exit('to do : switch the status of the task !');
    }
}
