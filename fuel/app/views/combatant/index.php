<h2>Comparing <span class='muted'>Combatants</span></h2>
<br>
<?php if ($encounter):
    $elist = array('none' => 'none');
    foreach ($encounter as $item):
        $elist[] = array($item->encid => $item->title.' - '.$item->starttime);
    endforeach;
?>

<?php echo Form::open(array('action' => 'swing/compare', 'class' => 'form-horizontal')); ?>
<div class="form-group">
    <?php echo Form::label('実施場所A', 'encountera', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-10">
        <?php echo Form::select('encountera', 'none', $elist); ?>
    </div>
</div>
<div class="form-group">
    <?php echo Form::label('実施者A', 'titlea', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-10">
        <?php echo Form::select('titlea', 'none', array('none' => 'none')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo Form::label('実施場所B', 'encounterb', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-10">
        <?php echo Form::select('encounterb', 'none', $elist); ?>
    </div>
</div>
<div class="form-group">
    <?php echo Form::label('実施者B', 'titleb', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-10">
        <?php echo Form::select('titleb', 'none', array('none' => 'none')); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo Form::button('compare', '比較', array('class' => 'button btn-primary')); ?>
    </div>
</div>
<?php echo Form::close(); ?>
<?php else: ?>
<p>No Combatants.</p>

<?php endif; ?>
