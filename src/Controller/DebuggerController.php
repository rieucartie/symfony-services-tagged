<?php

namespace App\Controller;
use App\Service\Debugger\DebuggerProcessor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class DebuggerController extends AbstractController
{
    #[Route('/debug', name: 'app_debuger')]
    public function debug( DebuggerProcessor  $DebuggerProcessor): Response
    {
        return $this->render('debugger/index.html.twig', [

            'debugMessages' => $DebuggerProcessor->nationality()

        ]);
    }
}
