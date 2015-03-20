<?php
/**
 * @group App
 * @group View
 * @group Swing
 */
class Test_View_Swing extends PHPUnit_Extensions_Selenium2TestCase

{
    protected function setUp()
    {
        $this->setBrowser('*firefox');
        $this->setBrowserUrl('http://selenium.com/');
    }

    public function test_Title()
    {
        $this->url('encounter/index.php');
        $this->assertEquals('Encounter', $this->title());
    }
}
