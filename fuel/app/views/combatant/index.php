<h2>Comparing <span class='muted'>Combatants</span></h2>
<br>
<?php if ($encounter):
    $elist = array('none' => 'none');
    foreach ($encounter as $item):
        $elist[] = array($item->encid => $item->title.' - '.$item->starttime);
    endforeach;
?>

<?php echo Form::open('swing/compare', 'form-horizontal'); ?>
<div class="form-group">
    <?php echo Form::label('実施場所A', 'encountera', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-10">
        <?php echo Form::select('EncounterA', 'none', $elist); ?>
    </div>
</div>
<div class="form-group">
    <?php echo Form::label('実施場所A', 'encountera', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-10">
        <?php echo Form::select('EncounterA', 'none', $elist); ?>
    </div>
</div>
<div class="form-group">
    <?php echo Form::label('実施場所A', 'encountera', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-10">
        <?php echo Form::select('EncounterA', 'none', $elist); ?>
    </div>
</div>
<div class="form-group">
    <?php echo Form::label('実施場所A', 'encountera', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-10">
        <?php echo Form::select('EncounterA', 'none', $elist); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo Form::button('name', 'value', array('style' => 'border: 2px;')); ?>
    </div>
</div>f
<?php echo Form::close(); ?>
<?php else: ?>
<p>No Combatants.</p>

<?php endif; ?>
