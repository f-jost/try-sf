<?php

declare(strict_types=1);

namespace App\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route("/comments/{id}/vote/{direction}")
     *
     * @throws Exception
     */
    public function commentVote(string $id, string $direction): Response
    {
        // todo - use id to query the database

        // use real logic here to save this to the database
        if ('up' === $direction) {
            $currentVoteCount = random_int(7, 100);
        } else {
            $currentVoteCount = random_int(0, 5);
        }

        return $this->json(['votes' => $currentVoteCount]);
    }
}
