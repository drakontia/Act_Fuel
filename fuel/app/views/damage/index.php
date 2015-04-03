<h2><span class='muted'>単発威力計算用</span></h2>
<br>
<?php echo Asset::js('damagecalc.js'); ?>

<?php echo Form::open(array('action' => '#', 'class' => 'form-horizontal')); ?>

<div class="form-group">
    <?php echo Form::label('ジョブ選択', 'job', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-4">
        <?php echo Form::select('job', 8, $joblist,  array('class' => 'form-control')); ?>
    </div>

    <?php echo Form::label('永続バフ', 'attackmode', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-4">
        <?php echo Form::select('attackmode', 3, $attackmode,  array('class' => 'form-control')); ?>
    </div>

</div>

<div class="form-group">
    <?php echo Form::label('アクションダメージアップ', 'actiondamage', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-4">
        <?php echo Form::select('actiondamage', null, $actiondamage,  array('class' => 'form-control')); ?>
    </div>

    <?php echo Form::label('WS/魔法切替', 'ws_or_magic', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-4">
        <?php echo Form::select('ws_or_magic', null, $ws_or_magic,  array('class' => 'form-control')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo Form::label('物理/魔法基本性能', 'basespec', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-2">
        <?php echo Form::input('basespec', 51, array('class' => 'form-control')); ?>
    </div>

    <?php echo Form::label('AA攻撃間隔', 'interval', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-2">
        <?php echo Form::input('interval', 3.00, array('class' => 'form-control')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo Form::label('攻撃力', 'power', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-2">
        <?php echo Form::input('power', 577, array('class' => 'form-control')); ?>
    </div>

    <?php echo Form::label('攻撃力アップ', 'powerup', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-2">
        <?php echo Form::select('powerup', null, $powerup,  array('class' => 'form-control')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo Form::label('意思力', 'determination', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-2">
        <?php echo Form::input('determination', 202, array('class' => 'form-control')); ?>
    </div>

    <?php echo Form::label('常用バフ', 'booster', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-4">
        <?php echo Form::select('booster', null, $booster,  array('class' => 'form-control')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo Form::label('与ダメージアップ', 'damageup', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-4">
        <?php echo Form::select('damageup', null, $damageup,  array('class' => 'form-control')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo Form::label('クリティカル発動力', 'critical', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-2">
        <?php echo Form::input('critical', 341, array('class' => 'form-control')); ?>
    </div>

    <?php echo Form::label('クリティカル発動力アップ', 'criticalup', array('class' => 'col-sm-3 control-label')); ?>
    <div class="col-sm-4">
        <?php echo Form::select('criticalup', null, $criticalup,  array('class' => 'form-control')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo Form::label('スキル/スペルスピード', 'speed', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-2">
        <?php echo Form::input('speed', 341, array('class' => 'form-control')); ?>
    </div>
    <?php echo Form::label('スピードブースト', 'speedboost', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-4">
        <?php echo Form::select('speedboost', null, $speedboost,  array('class' => 'form-control')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo Form::label('スピードアップ', 'speedup', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-4">
        <?php echo Form::select('speedup', null, $speedup,  array('class' => 'form-control')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo Form::label('スキル威力', 'skill', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-4">
        <?php echo Form::input('skill', 100, array('class' => 'form-control')); ?>
    </div>

</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo Form::button('fire', '出力', array('type' => 'button', 'class' => 'btn btn-primary', 'id' => 'fire')); ?>
    </div>
</div>


<div class="form-group">
    <?php echo Form::label('AA:AVGdmg', 'aadmg', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-4">
        <?php echo Form::input('aadmg', 0, array('class' => 'form-control')); ?>
    </div>
    <?php echo Form::label('WS:AVGdmg', 'wsdmg', array('class' => 'col-sm-1 control-label')); ?>
    <div class="col-sm-3">
        <?php echo Form::input('wsdmg', 0, array('class' => 'form-control')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo Form::label('クリティカル発動率', 'critper', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-4">
        <?php echo Form::input('critper', 0, array('class' => 'form-control')); ?>
    </div>
    <?php echo Form::label('GCD', 'gcd', array('class' => 'col-sm-1 control-label')); ?>
    <div class="col-sm-3">
        <?php echo Form::input('gcd', 0, array('class' => 'form-control')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo Form::label('分間ダメージ', 'dpm', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-4">
        <?php echo Form::input('dpm', 0, array('class' => 'form-control')); ?>
    </div>
    <?php echo Form::label('DPS', 'dps', array('class' => 'col-sm-1 control-label')); ?>
    <div class="col-sm-3">
        <?php echo Form::input('dps', 0, array('class' => 'form-control')); ?>
    </div>
</div>
<?php echo Form::close(); ?>

<h2><span class='muted'>換算値計算用</span></h2>
<br>
<?php echo Form::open(array('action' => '#', 'class' => 'form-horizontal', 'id' => 'equivalant')); ?>

<div class="form-group">
    <?php echo Form::label('項目', 'hh', array('class' => 'col-sm-2 control-label')); ?>
    <?php echo Form::label('スキル威力', 'sh', array('class' => 'col-sm-2 control-label')); ?>
    <?php echo Form::label('一発当たり', 'wh', array('class' => 'col-sm-2 control-label')); ?>
    <?php echo Form::label('ダメージ', 'dh', array('class' => 'col-sm-1 control-label')); ?>
    <?php echo Form::label('増分', 'uh', array('class' => 'col-sm-1 control-label')); ?>
    <?php echo Form::label('@1', 'ah', array('class' => 'col-sm-1 control-label')); ?>
    <?php echo Form::label('換算値', 'eh', array('class' => 'col-sm-1 control-label')); ?>
</div>

<div class="form-group">
    <?php echo Form::label('基準点', 'basepoint', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-2">
        <?php echo Form::input('s0', 100, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-2">
        <?php echo Form::input('w0', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('d0', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('u0', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('a0', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('e0', 0, array('class' => 'form-control')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo Form::label('スキルスピード+50', 'ss50', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-2">
        <?php echo Form::input('s1', 100, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-2">
        <?php echo Form::input('w1', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('d1', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('u1', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('a1', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('e1', 0, array('class' => 'form-control')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo Form::label('スキルスピード+100', 'ss100', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-2">
        <?php echo Form::input('s2', 100, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-2">
        <?php echo Form::input('w2', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('d2', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('u2', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('a2', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('e2', 0, array('class' => 'form-control')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo Form::label('スキルスピード+150', 'ss150', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-2">
        <?php echo Form::input('s3', 100, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-2">
        <?php echo Form::input('w3', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('d3', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('u3', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('a3', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('e3', 0, array('class' => 'form-control')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo Form::label('スキルスピード+200', 'ss200', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-2">
        <?php echo Form::input('s4', 100, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-2">
        <?php echo Form::input('w4', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('d4', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('u4', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('a4', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('e4', 0, array('class' => 'form-control')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo Form::label('スキルスピード+255', 'ss255', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-2">
        <?php echo Form::input('s5', 100, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-2">
        <?php echo Form::input('w5', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('d5', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('u5', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('a5', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('e5', 0, array('class' => 'form-control')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo Form::label('クリティカル+100', 'crt100', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-2">
        <?php echo Form::input('s6', 100, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-2">
        <?php echo Form::input('w6', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('d6', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('u6', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('a6', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('e6', 0, array('class' => 'form-control')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo Form::label('クリティカル+200', 'crt200', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-2">
        <?php echo Form::input('s7', 100, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-2">
        <?php echo Form::input('w7', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('d7', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('u7', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('a7', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('e7', 0, array('class' => 'form-control')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo Form::label('意思力+100', 'det100', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-2">
        <?php echo Form::input('s8', 100, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-2">
        <?php echo Form::input('w8', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('d8', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('u8', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('a8', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('e8', 0, array('class' => 'form-control')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo Form::label('攻撃力+100', 'pow100', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-2">
        <?php echo Form::input('s9', 100, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-2">
        <?php echo Form::input('w9', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('d9', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('u9', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('a9', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('e9', 0, array('class' => 'form-control')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo Form::label('武器性能+5', 'wea5', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-2">
        <?php echo Form::input('s10', 100, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-2">
        <?php echo Form::input('w10', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('d10', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('u10', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('a10', 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-1">
        <?php echo Form::input('e10', 0, array('class' => 'form-control')); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-2">
        <?php echo Form::button('damage', '計算', array('type' => 'button', 'class' => 'btn btn-primary', 'id' => 'damage')); ?>
    </div>
    <div class="col-sm-2">
        <?php echo Form::button('equiv', '換算', array('type' => 'button', 'class' => 'btn btn-primary', 'id' => 'equiv')); ?>
    </div>
</div>

<?php echo Form::close(); ?>
