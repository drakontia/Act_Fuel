<?php
/**
 * @group App
 * @group Controller
 * @group Encounter
 */

class Test_Controller_Encounter extends TestCaseWithDatabase
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

        $nume = DB::count_records('encounter_table');
        $this->assertEquals(0, $nume);

        $numc = DB::count_records('combatant_table');
        $this->assertEquals(0, $numc);
    }

}
