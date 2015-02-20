<h2>Viewing <span class='muted'><?php echo $name; ?></span></h2>

<br>
<?php $escapedbuff = 'swing/flow/'.$encid.'?attacker='.$name; ?>
<p><?php echo Html::anchor($escapedbuff, 'Swing flow of '.$name); ?></p>
<br>
<?php $escapednobuff = 'swing/flow/'.$encid.'?attacker='.$name.'&nobuff=1'; ?>
<p><?php echo Html::anchor($escapednobuff, 'Swing flow without buff of '.$name); ?></p>
<?php if ($damagetype): ?>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Type</th>
			<th>Damage</th>
			<th>Encdps</th>
			<th>Average</th>
			<th>Hits</th>
			<th>Crithits</th>
			<th>Misses</th>
			<th>Swings</th>
			<th>Tohit</th>
			<th>Critperc</th>
			<th>Parrypct</th>
			<th>Blockpct</th>
			<th>Overheal</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($damagetype as $item): ?>
        <tr>
<?php $escapedurl = 'attacktype/view/'.$item->encid.'?'.$item->grouping; ?>
			<td><?php echo Html::anchor($escapedurl, $item->type); ?></td>
			<td><?php echo $item->damage; ?></td>
			<td><?php echo round($item->encdps, 1); ?></td>
			<td><?php echo round($item->average, 1); ?></td>
			<td><?php echo $item->hits; ?></td>
			<td><?php echo $item->crithits; ?></td>
			<td><?php echo $item->misses; ?></td>
			<td><?php echo $item->swings; ?></td>
			<td><?php echo $item->tohit; ?></td>
			<td><?php echo $item->critperc; ?></td>
			<td><?php echo $item->parrypct; ?></td>
			<td><?php echo $item->blockpct; ?></td>
			<td><?php echo $item->overheal; ?></td>
		</tr>
<?php endforeach; ?>
    </tbody>
</table>

<?php else: ?>
<p>No Damagetype.</p>

<?php endif; ?>
<?php echo Html::anchor('combatant/view', 'Back'); ?>
