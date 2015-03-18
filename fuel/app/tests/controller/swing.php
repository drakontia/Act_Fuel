<?php
/**
 * @group App
 * @group Controller
 * @group Swing
 */

class Test_Controller_Swing extends TestCaseWithDatabase
{
    public function test_swing_view()
    {
        // HMVCリクエストを生成
        $request = Request::forge('swing/view/0032cfc0');
        // リクエストを実行しレスポンスを取得
        #$response = $request->execute(array('attacker' => 'Drakontia', 'victim' => null, 'swingtype' => 2, 'attacktype' => '双竜脚'))->response();

        // HTTPステータスコードのテスト
        $status = $response->status;
        $expected = 200;
        $this->assertEquals($expected, $status);

        // titleのテスト
        $title = $response->body->title;
        $expected = 'Swings';
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
        $response = $request->execute(array('encid' => '0032cfc0', 'attacker' => 'Drakontia'))->response();

        // HTTPステータスコードのテスト
        $status = $response->status;
        $expected = 200;
        $this->assertEquals($expected, $status);

        // HTMLのテスト
        $body = $response->body()->render();
        $pattern = '/' . preg_quote('お問い合わせ', '/') . '/u';
        $this->assertRegExp($pattern, $body);
    }

    public function test_swing_get_timeline()
    {
        // HMVCリクエストを生成
        $request = Request::forge('swing/timeline');
        // リクエストを実行しレスポンスを取得
        $response = $request->execute(array('encid' => '0032cfc0', 'attacker' => 'Drakontia', 'skill' => urlencode('双竜脚')))->response();

        // HTTPステータスコードのテスト
        $status = $response->status;
        $expected = 200;
        $this->assertEquals($expected, $status);

        // titleのテスト
        $title = $response->body->title;
        $expected = 'Compare Swing';
        $this->assertEquals($expected, $title);

        // HTMLのテスト
        $body = $response->body()->render();
        $pattern = '/' . preg_quote('お問い合わせ', '/') . '/u';
        $this->assertRegExp($pattern, $body);
    }
}
