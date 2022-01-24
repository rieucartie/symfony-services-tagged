<?php

namespace App\Service\Debugger;

class FrenchDebugger implements debuggerInterface
{
    public function debug(): string
    {
        return  'je suis francais';
    }
}