<?php

class Controller_Damage extends Controller_Hybrid
{
  public function action_index()
  {
    $data['joblist'] = array(
        '1.000000' => '1.00：ナ/斧/格/双｜甲/採/漁',
        '0.812500' => '0.40：呪',
        '0.828125' => '0.45：黒',
        '0.843750' => '0.50：幻',
        '0.859375' => '0.55：白',
        '0.953125' => '0.85：巴',
        '0.968750' => '0.90：学/召｜他ギャザクラ',
        '0.984375' => '0.95：剣',
        '1.015625' => '1.05：戦/槍/弓｜鍛',
        '1.031250' => '1.10：モ/忍',
        '1.046875' => '1.15：竜/詩');
    $data['actiondamage'] = array(
        '1.00' => '1.00倍：無し',
        '1.10' => '1.10倍：none',
        '1.20' => '1.20倍：弓/詩',
        '1.30' => '1.30倍：幻/呪/巴/白/黒/学/召',
        '1.43' => '1.43倍：クルセードスタンス');
    $data['attackmode'] = array(
        '1.00' => '1.00倍：無し',
        '0.75' => '0.75倍：ディフェンダー',
        '0.80' => '0.80倍：忠義の盾',
        '1.05' => '1.05倍：紅蓮の構え',
        '1.20' => '1.20倍：蜂毒・蛇毒');
    $data['ws_or_magic'] = array(
        '1.00' => 'そのまま',
        '1.25' => '1.05：呪',
        '1.264150943396226' => '1.15：黒',
        '1.203703703703704' => '1.05：幻',
        '1.218181818181818' => '1.15：白',
        '1.065573770491803' => '1.05：巴',
        '1.080645161290323' => '1.15：学/召');
    $data['powerup'] = array(
        '1.00' => 'なし',
        '1.033333' => 'ホークアイ(20/90sec)',
        '1.111111' => 'バーサク(20/90sec)',
        '1.15' => '1.15倍：ホークアイ(単発測定用)',
        '1.50' => '1.50倍：バーサク(単発測定用)');
    $data['booster'] = array(
        '1.00' => 'なし',
        '1.15' => '1.15倍：ヘヴィスラスト(常用)',
        '1.20' => '1.20倍：メイム(常用)',
        '1.27' => '1.27倍：疾風迅雷III(常用)');
    $data['damageup'] = array(
        '1.00' => 'なし',
        '1.025' => '捨身10%(20/80sec)',
        '1.075' => '捨身30%(20/80sec)',
        '1.0333333' => '猛者の撃(20/120sec)',
        '1.059' => '捨身10%(20/80sec)+猛者の撃(20/120sec)',
        '1.10' => 'ファイト・オア・フライト(30/90sec)/1.10倍：捨身10%(単発測定用)',
        '1.20' => '1.20倍：猛者の撃(単発測定用)',
        '1.32' => '1.32倍：捨身10%+猛者の撃(単発測定用)',
        '1.30' => '1.30倍：捨身30%/ﾌｧｲﾄ･ｵｱ･ﾌﾗｲﾄ(単発測定用)');
    $data['criticalup'] = array(
        '0' => 'なし',
        '2.5' => '発勁10%(15/60sec)',
        '7.5' => '発勁30%(15/60sec)',
        '10.0' => '+10.0%：ストレートショット/ラースV',
        '12.5' => '発勁+ストレート/発勁+ラースV');
    $data['speedboost'] = array(
        '1.00' => 'なし',
        '1.1765' => '0.85：疾風迅雷III/風遁の術');
    $data['speedup'] = array(
        '1.00' => 'なし',
        '1.15' => 'フェイライト/フェイグロウ(30/60sec)',
        '1.30' => 'フェイライト/フェイグロウ(SS計算用)');

    $this->template->title = "Damage Calc";
    $this->template->content = View::forge('damage/index', $data);
  }

  protected $format = 'json';

  public function get_calc()
  {
    bcscale(6);

    $wd  = Input::param('basespec');
    $aa  = Input::param('interval');
    $st  = Input::param('power');
    $dtr = Input::param('determination');
    $ctr = Input::param('critical');
    $job = Input::param('job');
    $skl = Input::param('skill');
    $spd = Input::param('speed');
    $acd = Input::param('actiondamage');
    $per = Input::param('attackmode');
    $mag = Input::param('ws_or_magic');
    $stb = Input::param('powerup');
    $ctb = Input::param('criticalup');
    $spb = Input::param('speedboost');
    $ssb = Input::param('speedup');
    $dup = Input::param('booster');
    $dup2 = Input::param('damageup');

    $tmp = $basespec * $factorA  * 1000 + $pwr40 * ($basespec * $factorB * 10 + $factorC * 10) + $factorD * 10000;
    $a1  = ($wd * 2600 + bcmul(bcmul($st, $stb), (($wd * 370) + 7500)) + 47000) * (bcmul(($dtr - 202), 0.0010) + 1.00);
    $a2  = bcmul($a1, $job) * $per * $dup * $dup2 * ($aa / 3.00);
    $aad = floor($a2 / 100000);

    $w1  = ($wd * 2600 + bcmul(bcmul($st, $stb), (($wd * 370) + 7500)) + 47000) * (bcmul(($dtr - 202), 0.0005) + 1.00);
    $w2  = bcmul($w1, $job) * $mag * $acd * $per * $dup * $dup2 * ($skl / 100);
    $wwd = floor($w2 / 100000);

    $ctp = abs(bcadd((bcdiv(($ctr - 341), bcdiv(341, 25.6)) + 5), $ctb));

    $gcd = abs(bcdiv(round(bcdiv(floor(bcmul(250.256, bcsub(1, bcmul(0.000381, (abs(bcmul($spd, $ssb)) - 341))))), $spb)), 100));

    $dpm  = round( bcmul(bcmul($aad, bcdiv(60, $aa)), (1 + (5 * $ctp / 1000)))) + round(bcmul(bcmul($wdd, bcdiv(60, $gcd)), (1 + 5 * $ctp / 1000)));
    $dps = $dpm / 60;

    return $this->response(array('aadmg' => $aad, 'wsdmg' => $wdd, 'critper'=> $ctp, 'gcd' => $gcd, 'dpm' => $dpm, 'dps' => $dps));
  }
}
