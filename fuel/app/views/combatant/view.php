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
			<th>Deaths</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($combatant as $item): ?>
        <tr>
<?php $escapedurl = 'damagetype/view/'.$encid.'?name='.urlencode($item->name); ?>
			<td><?php echo Html::anchor($escapedurl, $item->name); ?></td>
			<td><?php echo $item->job; ?></td>
			<td><?php echo Date::forge(strtotime($item->starttime))->format('%X'); ?></td>
			<td><?php echo Date::forge(strtotime($item->endtime))->format('%X'); ?></td>
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

<?php else: ?>
<p>No Combatants.</p>

<?php endif; ?>
