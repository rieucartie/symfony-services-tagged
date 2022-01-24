<?php

namespace App\Service\Debugger;

class RussianDebugger implements debuggerInterface
{
    public function debug(): string
    {
        return  'Я русский';
    }
}