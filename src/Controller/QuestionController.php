<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */
    public function homepage(): Response
    {
        return new Response('Hello world!');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show(string $slug): Response
    {
        return new Response(ucwords(str_replace('-', ' ', $slug)));
    }
}
