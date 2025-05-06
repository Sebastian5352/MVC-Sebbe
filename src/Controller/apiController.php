<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class apiController
{
    #[Route('/api/quote', name: 'api_quote', methods: ['GET'])]
    public function getQuote(): JsonResponse
    {
        // Lista med citat
        $quotes = [
            "I came, I saw, I conquered. - Julius Caesar",
            "The die has been cast. - Julius Caesar",
            "In the end, it is impossible to become what others believe you are. - Julius Caesar"
        ];

        // Välj ett slumpmässigt citat
        $randomQuote = $quotes[array_rand($quotes)];

        // Skapa JSON-svaret
        $response = [
            'quote' => $randomQuote,
            'date' => date('Y-m-d'),
            'timestamp' => date('Y-m-d H:i:s')
        ];

        return new JsonResponse($response);
    }
}