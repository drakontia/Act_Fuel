<h2>Listing <span class='muted'>Swings</span></h2>
<br>
<?php if ($swing): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Stime</th>
			<th>Attacker</th>
			<th>Attacktype</th>
			<th>Damagetype</th>
			<th>Victim</th>
			<th>Damage</th>
			<th>Damagestring</th>
			<th>Critical</th>
			<th>Special</th>
			<th>Dmgadjust</th>
			<th>Dmgreduced</th>
			<th>Overheal</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($swing as $item): ?>
        <tr>
			<td><?php echo $item->stime; ?></td>
			<td><?php echo $item->attacker; ?></td>
			<td><?php echo $item->attacktype; ?></td>
			<td><?php echo $item->damagetype; ?></td>
			<td><?php echo $item->victim; ?></td>
			<td><?php echo $item->damage; ?></td>
			<td><?php echo $item->damagestring; ?></td>
			<td><?php echo $item->critical; ?></td>
			<td><?php echo $item->special; ?></td>
			<td><?php echo $item->dmgadjust; ?></td>
			<td><?php echo $item->dmgreduced; ?></td>
			<td><?php echo $item->overheal; ?></td>
		</tr>
<?php endforeach; ?>
    </tbody>
</table>

<?php else: ?>
<p>No Swing.</p>

<?php endif; ?>
