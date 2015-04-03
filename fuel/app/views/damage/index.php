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
    <?php echo Form::label('スキル威力@1', 'sh', array('class' => 'col-sm-2 control-label')); ?>
    <?php echo Form::label('DPM', 'dh', array('class' => 'col-sm-2 control-label')); ?>
    <?php echo Form::label('増分率', 'uh', array('class' => 'col-sm-2 control-label')); ?>
    <?php echo Form::label('@1', 'ah', array('class' => 'col-sm-2 control-label')); ?>
    <?php echo Form::label('換算値', 'eh', array('class' => 'col-sm-2 control-label')); ?>
</div>

<?php
$changer = array(
        array('基準値',         'basicp'),
        array('スキルスピード+56',  'spd056'),
        array('スキルスピード+100', 'spd100'),
        array('スキルスピード+150', 'spd150'),
        array('スキルスピード+207', 'spd207'),
        array('スキルスピード+255', 'spd255'),
        array('クリティカル+100',  'crt100'),
        array('クリティカル+200',  'crt200'),
        array('意思力+100',     'det100'),
        array('攻撃力+100',     'pwr100'),
        array('武器性能+5',      'spc005'),
    );
$l = count($changer);
?>

<?php for($i = 0; $i < $l; $i++): ?>
<div class="form-group">
    <?php echo Form::label($changer[$i][0], $changer[$i][1], array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-2">
        <?php echo Form::input('s' . $i, 100, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-2">
        <?php echo Form::input('d' . $i, 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-2">
        <?php echo Form::input('u' . $i, 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-2">
        <?php echo Form::input('a' . $i, 0, array('class' => 'form-control')); ?>
    </div>
    <div class="col-sm-2">
        <?php echo Form::input('e' . $i, 0, array('class' => 'form-control')); ?>
    </div>
</div>
<?php endfor; ?>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-2">
        <?php echo Form::button('equiv', '換算', array('type' => 'button', 'class' => 'btn btn-primary', 'id' => 'equiv')); ?>
    </div>
</div>

<?php echo Form::close(); ?>
