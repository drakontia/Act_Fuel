<?php
/**
 * @group App
 * @group Controller
 * @group Encounter
 */

require_once __DIR__ . '/../withdatabase.php';

class Test_Controller_Encounter extends Test_With_Database
{
    public function test_to_have_title_and_table_when_access_index()
    {
        // HMVCリクエストを生成
        $request = Request::forge('encounter/index');
        // リクエストを実行しレスポンスを取得
        $response = $request->execute()->response();

        // HTTPステータスコードのテスト
        $status = $response->status;
        $expected = 200;
        $this->assertEquals($expected, $status);

        // titleのテスト
        $title = $response->body->title;
        $expected = 'Encounter';
        $this->assertEquals($expected, $title);

        // HTMLのテスト
        $body = $response->body()->render();
        $pattern = '/' . preg_quote('木人', '/') . '/u';
        $this->assertRegExp($pattern, $body);
    }

    public function test_delete_encounter_and_other()
    {
        // HMVCリクエストを生成
        $request = Request::forge('encounter/delete');
        // リクエストを実行しレスポンスを取得
        $response = $request->execute(array('encid' => '0032cfc0'))->response();

        // HTTPステータスコードのテスト
        $status = $response->status;
        $expected = 200;
        $this->assertEquals($expected, $status);

        $this->assertEquals(0, $this->getConnection()->getRowCount('encounter_table'), "Delete from encounter");
        $this->assertEquals(0, $this->getConnection()->getRowCount('combatant_table'), "Delete from combatant");

    }

}
