<h2>Listing <span class='muted'>Combatants</span></h2>
<br>
<?php if ($combatant): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Encid</th>
			<th>Ally</th>
			<th>Name</th>
			<th>Starttime</th>
			<th>Endtime</th>
			<th>Duration</th>
			<th>Damage</th>
			<th>Damageperc</th>
			<th>Kills</th>
			<th>Healed</th>
			<th>Healedperc</th>
			<th>Critheals</th>
			<th>Heals</th>
			<th>Curedispels</th>
			<th>Powerdrain</th>
			<th>Powerreplenish</th>
			<th>Dps</th>
			<th>Encdps</th>
			<th>Enchps</th>
			<th>Hits</th>
			<th>Crithits</th>
			<th>Blocked</th>
			<th>Misses</th>
			<th>Swings</th>
			<th>Healstaken</th>
			<th>Damagetaken</th>
			<th>Deaths</th>
			<th>Tohit</th>
			<th>Critdamperc</th>
			<th>Crithealperc</th>
			<th>Threatstr</th>
			<th>Threatdelta</th>
			<th>Job</th>
			<th>Parrypct</th>
			<th>Blockpct</th>
			<th>Inctohit</th>
			<th>Overhealpct</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($combatant as $item): ?>		<tr>

			<td><?php echo $item->encid; ?></td>
			<td><?php echo $item->ally; ?></td>
			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->starttime; ?></td>
			<td><?php echo $item->endtime; ?></td>
			<td><?php echo $item->duration; ?></td>
			<td><?php echo $item->damage; ?></td>
			<td><?php echo $item->damageperc; ?></td>
			<td><?php echo $item->kills; ?></td>
			<td><?php echo $item->healed; ?></td>
			<td><?php echo $item->healedperc; ?></td>
			<td><?php echo $item->critheals; ?></td>
			<td><?php echo $item->heals; ?></td>
			<td><?php echo $item->curedispels; ?></td>
			<td><?php echo $item->powerdrain; ?></td>
			<td><?php echo $item->powerreplenish; ?></td>
			<td><?php echo $item->dps; ?></td>
			<td><?php echo $item->encdps; ?></td>
			<td><?php echo $item->enchps; ?></td>
			<td><?php echo $item->hits; ?></td>
			<td><?php echo $item->crithits; ?></td>
			<td><?php echo $item->blocked; ?></td>
			<td><?php echo $item->misses; ?></td>
			<td><?php echo $item->swings; ?></td>
			<td><?php echo $item->healstaken; ?></td>
			<td><?php echo $item->damagetaken; ?></td>
			<td><?php echo $item->deaths; ?></td>
			<td><?php echo $item->tohit; ?></td>
			<td><?php echo $item->critdamperc; ?></td>
			<td><?php echo $item->crithealperc; ?></td>
			<td><?php echo $item->threatstr; ?></td>
			<td><?php echo $item->threatdelta; ?></td>
			<td><?php echo $item->job; ?></td>
			<td><?php echo $item->parrypct; ?></td>
			<td><?php echo $item->blockpct; ?></td>
			<td><?php echo $item->inctohit; ?></td>
			<td><?php echo $item->overhealpct; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('combatant/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('combatant/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('combatant/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Combatants.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('combatant/create', 'Add new Combatant', array('class' => 'btn btn-success')); ?>

</p>
