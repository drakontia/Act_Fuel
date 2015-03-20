<?php
/**
 * @group App
 * @group Controller
 * @group Combatant
 */

require_once __DIR__ . '/../withdatabase.php';

class Test_Controller_Combatant extends Test_With_Database
{
    public function test_to_have_title_and_table_when_access_index()
    {
        // HMVCリクエストを生成
        $request = Request::forge('combatant/index');
        // リクエストを実行しレスポンスを取得
        $response = $request->execute()->response();

        // HTTPステータスコードのテスト
        $status = $response->status;
        $expected = 200;
        $this->assertEquals($expected, $status);

        // titleのテスト
        $title = $response->body->title;
        $expected = 'Compare combatants';
        $this->assertEquals($expected, $title);

    }

    public function test_to_have_title_and_table_when_access_view()
    {
        // HMVCリクエストを生成
        $request = Request::forge('combatant/view');
        // リクエストを実行しレスポンスを取得
        $response = $request->execute(array('encid' => '0032cfc0'))->response();

        // HTTPステータスコードのテスト
        $status = $response->status;
        $expected = 200;
        $this->assertEquals($expected, $status);

        // titleのテスト
        $title = $response->body->title;
        $expected = '木人';
        $this->assertEquals($expected, $title);

        // HTMLのテスト
        $body = $response->body()->render();
        $pattern = '/' . preg_quote('木人', '/') . '/u';
        $this->assertRegExp($pattern, $body);
    }

    public function test_get_combatant_list()
    {
        // HMVCリクエストを生成
        $request = Request::forge('combatant/lists');
        // リクエストを実行しレスポンスを取得
        $response = $request->execute(array(
            'encid' => '0032cfc0'))->response();

        // HTTPステータスコードのテスト
        $status = $response->status;
        $expected = 200;
        $this->assertEquals($expected, $status);

        // HTMLのテスト
        $body = json_decode($response->body, true);
        $expectedcount = 2;
        $this->assertCount($expectedcount, $body);
    }
}
