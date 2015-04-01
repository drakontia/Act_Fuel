<h2>Comparing <span class='muted'>Combatants</span></h2>
<br>
<?php if ($encounter):
    $elist = array();
    foreach ($encounter as $item):
        $elist += array($item->encid => $item->title.' - '.$item->starttime);
    endforeach;
?>

<?php echo Form::open(array('action' => 'swing/compare', 'class' => 'form-horizontal', 'method' => 'GET')); ?>
<div class="form-group">
    <?php echo Form::label('実施場所A', 'encountera', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-4">
        <?php echo Form::select('encountera', 'none', $elist, array('class' => 'form-control', 'onChange' => 'setCombatantA()')); ?>
    </div>
    <?php echo Form::label('実施者A', 'combatanta', array('class' => 'col-sm-1 control-label')); ?>
    <div class="col-sm-3">
        <?php echo Form::select('combatanta', 'none', array('none' => 'none'), array('class' => 'form-control')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo Form::label('実施場所B', 'encounterb', array('class' => 'col-sm-2 control-label')); ?>
    <div class="col-sm-4">
        <?php echo Form::select('encounterb', 'none', $elist, array('class' => 'form-control', 'onChange' => 'setCombatantB()')); ?>
    </div>
    <?php echo Form::label('実施者B', 'combatantb', array('class' => 'col-sm-1 control-label')); ?>
    <div class="col-sm-3">
        <?php echo Form::select('combatantb', 'none', array('none' => 'none'), array('class' => 'form-control')); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo Form::button('compare', '比較', array('class' => 'btn btn-primary')); ?>
    </div>
</div>
<?php echo Form::close(); ?>
<?php else: ?>
<p>No Combatants.</p>

<?php endif; ?>
