<?php
/**
 * @group App
 * @group Controller
 * @group Swing
 */

require_once __DIR__ . '/../withdatabase.php';

class Test_Controller_Swing extends Test_With_Database
{
    public function test_expect_to_have_title_and_table()
    {
        // HMVCリクエストを生成
        $request = Request::forge('swing/view');
        // リクエストを実行しレスポンスを取得
        $response = $request->execute(array('encid' => '0032cfc0', 'attacker' => 'Drakontia', 'victim' => null, 'swingtype' => 2, 'attacktype' => '双竜脚'))->response();

        // HTTPステータスコードのテスト
        $status = $response->status;
        $expected = 200;
        $this->assertEquals($expected, $status);

        // titleのテスト
        $title = $response->body->title;
        $expected = 'Swing';
        $this->assertEquals($expected, $title);

        // HTMLのテスト
        $body = $response->body()->render();
        $pattern = '/' . preg_quote('Listing Swings of Drakontia', '/') . '/u';
        $this->assertRegExp($pattern, $body);
    }

    public function test_swing_get_skills()
    {
        // HMVCリクエストを生成
        $request = Request::forge('swing/skills');
        // リクエストを実行しレスポンスを取得
        $response = $request->execute(array('encid' => '0032cfc0', 'attacker' => 'Drakontia'))->response;

        // HTTPステータスコードのテスト
        $status = $response->status;
        $expected = 200;
        $this->assertEquals($expected, $status);

        // HTMLのテスト
        $body = json_decode($response->body, true);
        $expectedcount = 100;
        $this->assertRegExp($expectedcount, $body);
    }

    public function test_swing_get_timeline()
    {
        // HMVCリクエストを生成
        $request = Request::forge('swing/timeline');
        // リクエストを実行しレスポンスを取得
        $response = $request->execute(array('encid' => '0032cfc0', 'attacker' => 'Drakontia', 'skill' => '双竜脚'))->response;

        // HTTPステータスコードのテスト
        $status = $response->status;
        $expected = 200;
        $this->assertEquals($expected, $status);

        // HTMLのテスト
        $body = json_decode($response->body, true);
        $expectedcount = 100;
        $this->assertRegExp($expectedcount, $body);
    }
}
