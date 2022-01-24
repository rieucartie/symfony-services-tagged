<?php

namespace App\Service\Debugger;

class DebuggerProcessor
{
    /** @var debuggerInterface[]  */
    private  array $debuggers = [];
    public function __construct(iterable $debuggers ) {

        $this->debuggers  =iterator_to_array($debuggers);

    }
    public function nationality(): array
    {
        foreach ( $this->debuggers as $debugger){

             $message[] = $debugger->debug();

        }
        return $message;
    }
}