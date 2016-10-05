<?php

require_once __DIR__ . '/../../bootstrap/app.php';
require_once __DIR__ . '/vendor/autoload.php';

class PHPTestCase extends PHPUnit_Framework_TestCase {}

class WebTestCase extends PHPUnit_Extensions_Selenium2TestCase {}

class TestCase extends Laravel\Lumen\Testing\TestCase
{
    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\Application
     */
    public function createApplication()
    {
        return require __DIR__.'/../../bootstrap/app.php';
    }
}
