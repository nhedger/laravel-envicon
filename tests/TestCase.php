<?php

namespace Hedger\Envicon\Tests;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return ['Hedger\Envicon\ServiceProvider'];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Envicon' => 'Hedger\Envicon\Facades\Envicon'
        ];
    }
}
