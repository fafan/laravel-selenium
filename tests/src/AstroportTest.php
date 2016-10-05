<?php

class AstroportTest extends TestCase
{
    /**
     * testElement : test if element existed and has the expected value
     *
     * @return void
     */
    public function testElement()
    {
        echo "\n* AstroportTest::testElement()";
        $dom = new DomDocument();
        $dom->loadHTML( $this->visit('/astroport')->crawler->html() );
        $this->assertEquals($dom->getElementById('astroport-name')->textContent, 'Astroport Name');
        $gate1 = (null !== $dom->getElementById('gate-1'));
        $gate2 = (null !== $dom->getElementById('gate-2'));
        $gate3 = (null !== $dom->getElementById('gate-3'));
        $this->assertEquals($gate1, true);
        $this->assertEquals($gate2, true);
        $this->assertEquals($gate3, true);
        $ship1 = (null !== $dom->getElementById('ship-1'));
        $ship2 = (null !== $dom->getElementById('ship-2'));
        $ship3 = (null !== $dom->getElementById('ship-3'));
        $this->assertEquals($ship1, true);
        $this->assertEquals($ship2, true);
        $this->assertEquals($ship3, true);
    }
}
