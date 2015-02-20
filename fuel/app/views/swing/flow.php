<h2>Listing <span class='muted'>Swing flow of <?php echo $name ?></span></h2>
<br>
<?php if ($swing): ?>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>時刻</th>
			<th>項目</th>
			<th>種類</th>
			<th>属性</th>
			<th>状態</th>
			<th>調整率</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($swing as $item): ?>
        <tr>
			<td><?php echo strftime('%c', strtotime($item['stime'])); ?></td>
			<td><?php echo $item['attacktype']; ?></td>
			<td><?php echo $item['swingtype']; ?></td>
			<td><?php echo $item['damagetype']; ?></td>
			<td><?php echo $item['special']; ?></td>
			<td><?php echo $item['dmgadjust']; ?></td>
		</tr>
<?php endforeach; ?>
    </tbody>
</table>

<?php else: ?>
<p>No Swing.</p>

<?php endif; ?>
