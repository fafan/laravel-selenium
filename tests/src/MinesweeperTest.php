<?php

class MinesweeperTest extends TestCase
{
    /**
     * testElement : test if element existed and has the expected value
     *
     * @return void
     */
    public function testCells()
    {
        echo "\n* MinesweeperTest::testCells()";
        $dom = new DomDocument();
        $dom->loadHTML( $this->visit('/minesweeper')->crawler->html() );
        $this->assertEquals($dom->getElementById('title')->textContent, 'Minesweeper');
        for ($x=1; $x<=8; $x++)
            for ($y=1; $y<=8; $y++)
                $this->assertEquals($dom->getElementById('cell-'.$x.'x'.$y)->textContent, 'empty');

    }
}
