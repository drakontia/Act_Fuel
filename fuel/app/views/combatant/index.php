<h2>Listing <span class='muted'>Combatants</span></h2>
<br>
<?php if ($combatant): ?>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Name</th>
			<th>Job</th>
			<th>Starttime</th>
			<th>Endtime</th>
			<th>Duration</th>
			<th>Damage</th>
			<th>Damageperc</th>
			<th>Encdps</th>
			<th>Healed</th>
			<th>Healedperc</th>
			<th>Enchps</th>
			<th>Overhealpct</th>
			<th>Tohit</th>
			<th>Critdamperc</th>
			<th>Crithealperc</th>
			<th>Kills</th>
			<th>Deaths</th>
			<th>Parrypct</th>
			<th>Blockpct</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($combatant as $item): ?>
        <tr>
			<td><?php echo $item->name; ?></td>
			<td><?php echo Html::anchor('damagetype/view/'.$encid.'/'.$item->name, $item->name); ?></td>
			<td><?php echo $item->job; ?></td>
			<td><?php strftime('%c', $item->starttime); ?></td>
			<td><?php strftime('%c', $item->endtime); ?></td>
			<td><?php sprintf ('%d:%d', $item->duration / 60, $item->duration % 60); ?></td>
			<td><?php echo round($item->damage); ?></td>
			<td><?php echo $item->damageperc; ?></td>
			<td><?php echo round($item->encdps); ?></td>
			<td><?php echo round($item->healed); ?></td>
			<td><?php echo $item->healedperc; ?></td>
			<td><?php echo round($item->enchps); ?></td>
			<td><?php echo $item->overhealpct; ?></td>
			<td><?php echo sprintf('%d%%', round($item->tohit, 2)); ?></td>
			<td><?php echo $item->critdamperc; ?></td>
			<td><?php echo $item->crithealperc; ?></td>
			<td><?php echo $item->kills; ?></td>
			<td><?php echo $item->deaths; ?></td>
			<td><?php echo $item->parrypct; ?></td>
			<td><?php echo $item->blockpct; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
                        <?php echo Html::anchor('combatant/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>
				</div>

			</td>
		</tr>
<?php endforeach; ?>
    </tbody>
</table>

<?php else: ?>
<p>No Combatants.</p>

<?php endif; ?>
