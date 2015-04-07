<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>ACT Analyzer</title>
  <?php echo Asset::css('bootstrap.css'); ?>
  <style>
    a{
      color: #883ced;
    }
    a:hover{
      color: #af4cf0;
    }
        body,h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6{
            font-family: Georgia, Meiryo;
        }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php echo Html::anchor('welcome/index', 'Home', array('class' => 'navbar-brand')); ?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  <div class="container">
    <div class="jumbotron">
      <h1>ACT Analyzerのバハ</h1>
            <p>We will defeat Bahamut!</br>
              <small>Even though it will have happened at dead of one night.</small>
            </p>
    </div>
    <div class="row">
      <div class="col-md-4">
        <h2>About this</h2>
                <p>This will analyze ACT data of a raid group of Ramuh server into infomation that we process battles more efffectively.</p>
      </div>
      <div class="col-md-4">
        <h2>ACT Data</h2>
          <p><?php echo Html::anchor('encounter', '戦闘リスト'); ?></p>
          <p><?php echo Html::anchor('combatant', 'スキル回し比較'); ?></p>
          <p><?php echo Html::anchor('damage', 'ダメージ計算 & 換算値計算'); ?></p>
          <p><?php echo Html::anchor('skill', 'スキル/アビリティ一覧'); ?></p>
      </div>
      <div class="col-md-4">
        <h2>Links</h2>
        <ul>
          <li><?php echo Html::anchor('http://jp.finalfantasyxiv.com/lodestone/', 'FFXIV'); ?></li>
          <li><?php echo Html::anchor('http://ff14act.phpapps.jp/index.php?FF14%CD%D1ACT%A4%CE%A4%DE%A4%C8%A4%E1Wiki', 'ACTまとめWiki'); ?></li>
        </ul>
      </div>
    </div>
    <hr/>
    <footer>
      <p class="pull-right"><a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="クリエイティブ・コモンズ・ライセンス" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/Text" property="dct:title" rel="dct:type">深夜のバハ</span> は <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">クリエイティブ・コモンズ 表示 - 継承 4.0 国際 ライセンスの下で提供されています。</a></p>
      <p>
        <a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
        <small>Version: <?php echo Fuel::VERSION; ?></small>
      </p>
    </footer>
  </div>
</body>
</html>
