<?php
/**
 * @group App
 * @group Swing
 */
class Test_View_Swing extends TestCaseWithWeb
{
    public function testTitle()
    {
        $this->url('http://drakontia.com/actdb/index.php');
        $this->assertEquals('深夜のバハ', $this->title());
    }
}
