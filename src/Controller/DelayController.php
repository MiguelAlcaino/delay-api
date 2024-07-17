<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class DelayController extends AbstractController
{
    #[Route('/delay/{delayInSeconds}', name: 'delay', methods: ['GET'])]
    public function delayedResponse(int $delayInSeconds = 1): JsonResponse
    {
        sleep($delayInSeconds);

        return new JsonResponse(['delay' => $delayInSeconds]);
    }
}
