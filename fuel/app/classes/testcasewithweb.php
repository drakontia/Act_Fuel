<?php
abstract class TestCaseWithWeb extends PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://drakontia.com/actdb/');
        $this->setHost('127.0.0.1');
        $this->setPort(4444);
    }

}
