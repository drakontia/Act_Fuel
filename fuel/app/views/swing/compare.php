<div class="row">

<div class="col-md-6">
<?php if ($swingA): ?>
<h3><?php echo $combatanta; ?></h3>
<br>
<h4><?php echo $encountera; ?></h4>
<br>
<h4><?php echo $starttimea; ?></h4>
<br>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>経過時間</th>
			<th>項目</th>
			<th>状態</th>
			<th>調整率</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($swingA as $item): ?>
        <tr>
			<td><?php echo sprintf ("%'.02d:%'.02d", (strtotime($item['stime']) - strtotime($starttimea)) / 60, (strtotime($item['stime']) - strtotime($starttimea)) % 60); ?></td>
			<td><?php echo $item['attacktype']; ?></td>
			<td><?php echo $item['special']; ?></td>
			<td><?php echo $item['dmgadjust']; ?></td>
		</tr>
<?php endforeach; ?>
    </tbody>
</table>

<?php else: ?>
<p>No Swing.</p>

<?php endif; ?>
</div>

<div class="col-md-6">
<?php if ($swingB): ?>
<h3><?php echo $combatantb; ?></h3>
<br>
<h4><?php echo $encounterb; ?></h4>
<br>
<h4><?php echo $starttimeb; ?></h4>
<br>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>経過時間</th>
			<th>項目</th>
			<th>状態</th>
			<th>調整率</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($swingB as $item): ?>
        <tr>
			<td><?php echo sprintf ("%'.02d:%'.02d", (strtotime($item['stime']) - strtotime($starttimeb)) / 60, (strtotime($item['stime']) - strtotime($starttimeb)) % 60); ?></td>
			<td><?php echo $item['attacktype']; ?></td>
			<td><?php echo $item['special']; ?></td>
			<td><?php echo $item['dmgadjust']; ?></td>
		</tr>
<?php endforeach; ?>
    </tbody>
</table>

<?php else: ?>
<p>No Swing.</p>

<?php endif; ?>
</div>

</div>

