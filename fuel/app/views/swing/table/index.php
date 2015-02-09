<h2>Listing <span class='muted'>Swing_tables</span></h2>
<br>
<?php if ($swing_tables): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Encid</th>
			<th>Stime</th>
			<th>Attacker</th>
			<th>Swingtype</th>
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
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($swing_tables as $item): ?>		<tr>

			<td><?php echo $item->encid; ?></td>
			<td><?php echo $item->stime; ?></td>
			<td><?php echo $item->attacker; ?></td>
			<td><?php echo $item->swingtype; ?></td>
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
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('swing/table/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('swing/table/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('swing/table/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Swing_tables.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('swing/table/create', 'Add new Swing table', array('class' => 'btn btn-success')); ?>

</p>
