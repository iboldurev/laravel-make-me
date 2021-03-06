<?php

namespace HydrefLab\Laravel\Make\Console\CommandInputCollectors;

use Illuminate\Console\Command;

class RequestMakeCommandInputCollector
{
    /**
     * @param Command $command
     * @return array
     */
    public function __invoke(Command $command): array
    {
        return [
            'name' => $command->ask('Request name')
        ];
    }
}