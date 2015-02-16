<h2>Listing <span class='muted'>Encounter</span></h2>
<br>
<?php if ($encounter): ?>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Title</th>
			<th>Starttime</th>
			<th>Endtime</th>
			<th>Duration</th>
			<th>Damage</th>
			<th>Encdps</th>
			<th>Zone</th>
			<th>Kills</th>
			<th>Deaths</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($encounter as $item): ?>
        <tr>
			<td><?php echo Html::anchor('combatant/index/'.$item->encid, $item->title); ?></td>
			<td><?php strftime('%c', $item->starttime); ?></td>
			<td><?php strftime('%c', $item->endtime); ?></td>
			<td><?php sprintf ('%d:%d', $item->duration / 60, $item->duration % 60); ?></td>
			<td><?php echo $item->damage; ?></td>
			<td><?php echo round($item->encdps); ?></td>
			<td><?php echo $item->zone; ?></td>
			<td><?php echo $item->kills; ?></td>
			<td><?php echo $item->deaths; ?></td>
			<td><div class="btn-toolbar"><div class="btn-group">
                <?php echo Html::anchor('encounter/view'.$item->id, 'View'); ?>
            </div></div></td>
		</tr>
<?php endforeach; ?>
    </tbody>
</table>

<?php else: ?>
<p>No Encounter.</p>

<?php endif; ?>
