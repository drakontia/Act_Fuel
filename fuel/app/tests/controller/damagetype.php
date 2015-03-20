<?php
/**
 * @group App
 * @group Controller
 * @group Damagetype
 */

require_once __DIR__ . '/../withdatabase.php';

class Test_Controller_Damagetype extends Test_With_Database
{
    public function test_to_have_title_and_table_when_access_view()
    {
        // HMVCリクエストを生成
        $request = Request::forge('damagetype/view');
        // リクエストを実行しレスポンスを取得
        $response = $request->execute(['encid' => '0032cfc0', 'name2' => 'Drakontia'])->response();
        #$response = $request->execute()->response();

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
        $pattern = '/' . preg_quote('Drakontia', '/') . '/u';
        $this->assertRegExp($pattern, $body);
    }

}

