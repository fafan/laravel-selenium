<?php

class SeleniumHomeTest extends WebTestCase
{
    private $baseurl = 'http://127.0.0.1:12345/';

    protected function setUp() {
        //$this->setHost('192.168.123.10'); // set this if selenium on remote location
        //$this->setPort(4444);
        $this->setBrowser('phantomjs'); // set to firefox if you prefer firefox
        $this->setBrowserUrl($this->baseurl);
    }

    public function prepareSession() {
        $res = parent::prepareSession();
        $res->cookie()->remove('PHPUNIT_SELENIUM_TEST_ID');
        $this->url('/');
        return $res;
    }

    private function getScreenshot($file)
    {
        $filedata = $this->currentScreenshot();
        file_put_contents($file, $filedata);
    }

    public function testHomepage() {
        echo "\n* SeleniumHomeTest::testHome()";
        $this->url('http://www.example.com/');
        $this->getScreenshot('example.png');
        /*$this->registerSessions();
        $session = $this->getSession();
        $session->visit($this->baseUrl);
        $this->url($this->baseurl);
        try {
            $this->assertEquals('Index Page', $this->title());
        }
        catch (Exception $e) {
            echo "\n (-) ". $e->getMessage();
            $file = __DIR__.'/SeleniumHomeTest-'.$this->getName().'.png';
            echo "\n     Saved screenshot to file '$file'";
            $this->getScreenshot( $file );
        }*/
    }
}
