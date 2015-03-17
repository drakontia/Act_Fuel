<h2><span class='muted'><?php echo $encounter->title; ?></span></h2>
<dl>
  <dt>開始時刻</dt>
    <dd><?php echo $encounter->starttime; ?></dd>
  <dt>PTDPS</dt>
    <dd><?php echo round($encounter->encdps); ?></dd>
</dl>
<br>
<?php $compareurl = 'combatant/index'; ?>
<p><?php echo Html::anchor($compareurl, 'Compare swing flow of combatants'); ?></p>
<br>
<?php if ($combatant): ?>
<h3>Combatant list</h3>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Name</th>
			<th>Job</th>
			<th>Duration</th>
			<th>Damage</th>
			<th>Damageperc</th>
			<th>Encdps</th>
			<th>Healed</th>
			<th>Healedperc</th>
			<th>Enchps</th>
			<th>Overhealpct</th>
			<th>Tohit</th>
			<th>Deaths</th>
		</tr>
	</thead>
	<tbody>
<?php $attackerlist = 'none'; ?>
<?php foreach ($combatant as $item): ?>
<?php $attackerlist[] = $item->name; ?>
        <tr>
<?php $escapedurl = 'damagetype/view/'.$encounter->encid.'?name='.urlencode($item->name); ?>
			<td><?php echo Html::anchor($escapedurl, $item->name); ?></td>
			<td><?php echo $item->job; ?></td>
			<td><?php echo sprintf ("%'.02d:%'.02d", $item->duration / 60, $item->duration % 60); ?></td>
			<td><?php echo round($item->damage); ?></td>
			<td><?php echo $item->damageperc; ?></td>
			<td><?php echo round($item->encdps); ?></td>
			<td><?php echo round($item->healed); ?></td>
			<td><?php echo $item->healedperc; ?></td>
			<td><?php echo round($item->enchps); ?></td>
			<td><?php echo $item->overhealpct; ?></td>
			<td><?php echo sprintf('%d%%', round($item->tohit, 2)); ?></td>
			<td><?php echo $item->deaths; ?></td>
		</tr>
<?php endforeach; ?>
    </tbody>
</table>

<h3>Buff Timeline</h3>
<?php echo Form::open(array('class' => 'form-horizontal')); ?>
<div class="form-group">
    <?php echo Form::label('実施者', 'attackeres', array('class' => 'col-sm-1 control-label')); ?>
    <div class="col-sm-4">
        <?php echo Form::select('attacker', 'none', $attackerlist, array('class' => 'form-control')); ?>
    </div>
    <?php echo Form::label('スキル', 'skills', array('class' => 'col-sm-1 control-label')); ?>
    <div class="col-sm-4">
        <?php echo Form::select('skill', 'none', array('none' => 'none'), array('class' => 'form-control')); ?>
    </div>
</div>
<div class="form-group">
    <div id="buttons" class="col-sm-offset-2 col-sm-10">
        <?php echo Form::button('addbtn', '追加', array('type' => 'button', 'class' => 'btn btn-primary')); ?>
        <?php echo Form::button('resetbtn', 'リセット', array('type' => 'button', 'class' => 'btn btn-primary')); ?>
    </div>
</div>
<?php echo Form::close(); ?>
<div id="timeline"></div>
<?php else: ?>
<p>No Combatants.</p>

<?php endif; ?>
