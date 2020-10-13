<?php

namespace Exo\Kernel;

class ConfigProvider
{
    public function __invoke()
    {
        return [
            'dependencies' => require_once __DIR__ . '/../config/dependencies.config.php',
        ];
    }
}