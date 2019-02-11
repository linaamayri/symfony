<?php
/**
 * Created by PhpStorm.
 * User: linaa
 * Date: 11/02/2019
 * Time: 10:58
 */

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class HomeController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('OMG! My first Symfony page');
    }

    /**
     * @return (article/non article)
     */
    public function read()
    {
        return new Response('salut on commence ');
    }
}

