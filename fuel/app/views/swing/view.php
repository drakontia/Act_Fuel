<?php Lang::load('swing'); ?>
<h2>Listing <span class='muted'>Swings of <?php echo $name ?></span></h2>
<br>
<?php if ($swing): ?>
<table class="table table-bordered">
	<thead>
		<tr>
            <th><?php echo __('swing.stime'); ?></th>
            <th><?php echo __('swing.attacker'); ?></th>
            <th><?php echo __('swing.attacktype'); ?></th>
            <th><?php echo __('swing.damagetype'); ?></th>
            <th><?php echo __('swing.victim'); ?></th>
            <th><?php echo __('swing.damage'); ?></th>
            <th><?php echo __('swing.critical'); ?></th>
            <th><?php echo __('swing.special'); ?></th>
            <th><?php echo __('swing.dmgadjust'); ?></th>
            <th><?php echo __('swing.overheal'); ?></th>
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
