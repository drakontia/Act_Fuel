<?php
/**
 * @group App
 * @group Controller
 * @group Attacktype
 */
require_once __DIR__ . '/../withdatabase.php';

class Test_Controller_Attacktype extends Test_With_Database
{
    public function test_to_have_title_and_table_when_access_index()
    {
        // HMVCリクエストを生成
        $request = Request::forge('attacktype/index');
        // リクエストを実行しレスポンスを取得
        $response = $request->execute()->response();

        // HTTPステータスコードのテスト
        $status = $response->status;
        $expected = 200;
        $this->assertEquals($expected, $status);

        // titleのテスト
        $title = $response->body->title;
        $expected = 'Attacktype';
        $this->assertEquals($expected, $title);

        // HTMLのテスト
        $body = $response->body()->render();
        $pattern = '/' . preg_quote('木人', '/') . '/u';
        $this->assertRegExp($pattern, $body);
    }

}

