<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Response;
class Hello
{
    /**
     * @Route ("/")
    */
    public function hello(): Response
    {
        return new Response('hello');
    }
}