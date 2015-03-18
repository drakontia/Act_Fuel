<?php
abstract class TestCaseWithWeb extends PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://drakontia.com/actdb/');
    }

}
