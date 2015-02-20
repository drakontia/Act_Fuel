<h2>Listing <span class='muted'><?php echo $name ?></span></h2>
<br>
<?php if ($attacktype): ?>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Type</th>
			<th>Damage</th>
			<th>Encdps</th>
			<th>Average</th>
			<th>Median</th>
			<th>Minhit</th>
			<th>Maxhit</th>
			<th>Resist</th>
			<th>Hits</th>
			<th>Misses</th>
			<th>Swings</th>
			<th>Tohit</th>
			<th>Delay</th>
			<th>Critperc</th>
			<th>Parrypct</th>
			<th>Blockpct</th>
			<th>Overheal</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($attacktype as $item): ?>
        <tr>
<?php
if (isset($swingtype) and $item->swingtype == 100)
{
    $realswing = $swingtype;
}
else
{
    $realswing = $item->swingtype;
}

if (isset($swingtype2))
{
    $escapedurl = 'swing/view/'.$item->encid.'?attacker='.urlencode($item->attacker).'&victim='.urlencode($item->victim).'&swingtype='.$realswing.'&swingtype2='.$swingtype2.'&attacktype='.urlencode($item->type);
}
else
{
    $escapedurl = 'swing/view/'.$item->encid.'?attacker='.urlencode($item->attacker).'&victim='.urlencode($item->victim).'&swingtype='.$realswing.'&attacktype='.urlencode($item->type);
}?>
			<td><?php echo Html::anchor($escapedurl, $item->type); ?></td>
			<td><?php echo $item->damage; ?></td>
			<td><?php echo round($item->encdps); ?></td>
			<td><?php echo round($item->average, 1); ?></td>
			<td><?php echo $item->median; ?></td>
			<td><?php echo $item->minhit; ?></td>
			<td><?php echo $item->maxhit; ?></td>
			<td><?php echo $item->resist; ?></td>
			<td><?php echo $item->hits; ?></td>
			<td><?php echo $item->misses; ?></td>
			<td><?php echo $item->swings; ?></td>
			<td><?php echo $item->tohit; ?></td>
			<td><?php echo round($item->averagedelay, 1); ?></td>
			<td><?php echo $item->critperc; ?></td>
			<td><?php echo $item->parrypct; ?></td>
			<td><?php echo $item->blockpct; ?></td>
			<td><?php echo $item->overheal; ?></td>
		</tr>
<?php endforeach; ?>
    </tbody>
</table>

<?php else: ?>
<p>No Attacktype.</p>

<?php endif; ?>
