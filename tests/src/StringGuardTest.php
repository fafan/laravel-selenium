<?php

class StringGuardTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHello()
    {
        echo "\n* StringGuardTest::testHello()";
        $this->visit('/primeFactors?number=hello')
             ->seeJson([
                'number' => 'hello',
                'error' => 'not a number',
             ]);
    }
}
