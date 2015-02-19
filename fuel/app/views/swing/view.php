<h2>Listing <span class='muted'>Swings of <?php echo $name ?></span></h2>
<br>
<?php if ($swing): ?>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>時刻</th>
			<th>実施者</th>
			<th>項目</th>
			<th>タイプ</th>
			<th>対象</th>
			<th>ダメージ</th>
			<th>クリティカル</th>
			<th>状態</th>
			<th>調整率</th>
			<th>超過回復</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($swing as $item): ?>
        <tr>
			<td><?php echo strftime('%c', strtotime($item->stime)); ?></td>
			<td><?php echo $item->attacker; ?></td>
			<td><?php echo $item->attacktype; ?></td>
			<td><?php echo $item->damagetype; ?></td>
			<td><?php echo $item->victim; ?></td>
			<td><?php echo $item->damage; ?></td>
			<td><?php echo $item->critical; ?></td>
			<td><?php echo $item->special; ?></td>
			<td><?php echo $item->dmgadjust; ?></td>
			<td><?php echo $item->overheal; ?></td>
		</tr>
<?php endforeach; ?>
    </tbody>
</table>

<?php else: ?>
<p>No Swing.</p>

<?php endif; ?>
