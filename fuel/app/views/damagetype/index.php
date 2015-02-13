<h2>Listing <span class='muted'>Damagetypes</span></h2>
<br>
<?php if ($damagetype): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Combatant</th>
			<th>Grouping</th>
			<th>Type</th>
			<th>Starttime</th>
			<th>Endtime</th>
			<th>Duration</th>
			<th>Damage</th>
			<th>Encdps</th>
			<th>Chardps</th>
			<th>Dps</th>
			<th>Average</th>
			<th>Median</th>
			<th>Minhit</th>
			<th>Maxhit</th>
			<th>Hits</th>
			<th>Crithits</th>
			<th>Blocked</th>
			<th>Misses</th>
			<th>Swings</th>
			<th>Tohit</th>
			<th>Averagedelay</th>
			<th>Critperc</th>
			<th>Parrypct</th>
			<th>Blockpct</th>
			<th>Overheal</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($damagetype as $item): ?>		<tr>

			<td><?php echo $item->combatant; ?></td>
			<td><?php echo $item->grouping; ?></td>
			<td><?php echo $item->type; ?></td>
			<td><?php echo $item->starttime; ?></td>
			<td><?php echo $item->endtime; ?></td>
			<td><?php echo $item->duration; ?></td>
			<td><?php echo $item->damage; ?></td>
			<td><?php echo $item->encdps; ?></td>
			<td><?php echo $item->chardps; ?></td>
			<td><?php echo $item->dps; ?></td>
			<td><?php echo $item->average; ?></td>
			<td><?php echo $item->median; ?></td>
			<td><?php echo $item->minhit; ?></td>
			<td><?php echo $item->maxhit; ?></td>
			<td><?php echo $item->hits; ?></td>
			<td><?php echo $item->crithits; ?></td>
			<td><?php echo $item->blocked; ?></td>
			<td><?php echo $item->misses; ?></td>
			<td><?php echo $item->swings; ?></td>
			<td><?php echo $item->tohit; ?></td>
			<td><?php echo $item->averagedelay; ?></td>
			<td><?php echo $item->critperc; ?></td>
			<td><?php echo $item->parrypct; ?></td>
			<td><?php echo $item->blockpct; ?></td>
			<td><?php echo $item->overheal; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('damagetype/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('damagetype/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('damagetype/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Damagetype.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('damagetype/create', 'Add new Damagetype', array('class' => 'btn btn-success')); ?>

</p>
