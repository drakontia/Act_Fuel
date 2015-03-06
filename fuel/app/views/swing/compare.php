<h2>Listing <span class='muted'>Swing Compare</span></h2>
<br>
<div class="col-md-12">

<div class="col-md-6">
<?php if ($swingA): ?>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>時刻</th>
			<th>項目</th>
			<th>状態</th>
			<th>調整率</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($swing as $item): ?>
        <tr>
			<td><?php echo Date::forge(strtotime($item['stime']))->format('%X'); ?></td>
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
<table class="table table-bordered">
	<thead>
		<tr>
			<th>時刻</th>
			<th>項目</th>
			<th>状態</th>
			<th>調整率</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($swing as $item): ?>
        <tr>
			<td><?php echo Date::forge(strtotime($item['stime']))->format('%X'); ?></td>
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

