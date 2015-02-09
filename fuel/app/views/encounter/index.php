<h2>Listing <span class='muted'>Encounter_tables</span></h2>
<br>
<?php if ($encounter_tables): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Encid</th>
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
<?php foreach ($encounter_tables as $item): ?>
        <tr>
			<td><?php echo $item->encid; ?></td>
			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->starttime; ?></td>
			<td><?php echo $item->endtime; ?></td>
			<td><?php echo $item->duration; ?></td>
			<td><?php echo $item->damage; ?></td>
			<td><?php echo $item->encdps; ?></td>
			<td><?php echo $item->zone; ?></td>
			<td><?php echo $item->kills; ?></td>
			<td><?php echo $item->deaths; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
                        <?php echo Html::anchor('encounter/table/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('encounter/table/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('encounter/table/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>
                    </div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Encounter_tables.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('encounter/table/create', 'Add new Encounter table', array('class' => 'btn btn-success')); ?>

</p>
