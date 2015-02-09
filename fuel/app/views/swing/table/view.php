<h2>Viewing <span class='muted'>#<?php echo $swing_table->id; ?></span></h2>

<p>
	<strong>Encid:</strong>
	<?php echo $swing_table->encid; ?></p>
<p>
	<strong>Stime:</strong>
	<?php echo $swing_table->stime; ?></p>
<p>
	<strong>Attacker:</strong>
	<?php echo $swing_table->attacker; ?></p>
<p>
	<strong>Swingtype:</strong>
	<?php echo $swing_table->swingtype; ?></p>
<p>
	<strong>Attacktype:</strong>
	<?php echo $swing_table->attacktype; ?></p>
<p>
	<strong>Damagetype:</strong>
	<?php echo $swing_table->damagetype; ?></p>
<p>
	<strong>Victim:</strong>
	<?php echo $swing_table->victim; ?></p>
<p>
	<strong>Damage:</strong>
	<?php echo $swing_table->damage; ?></p>
<p>
	<strong>Damagestring:</strong>
	<?php echo $swing_table->damagestring; ?></p>
<p>
	<strong>Critical:</strong>
	<?php echo $swing_table->critical; ?></p>
<p>
	<strong>Special:</strong>
	<?php echo $swing_table->special; ?></p>
<p>
	<strong>Dmgadjust:</strong>
	<?php echo $swing_table->dmgadjust; ?></p>
<p>
	<strong>Dmgreduced:</strong>
	<?php echo $swing_table->dmgreduced; ?></p>
<p>
	<strong>Overheal:</strong>
	<?php echo $swing_table->overheal; ?></p>

<?php echo Html::anchor('swing/table/edit/'.$swing_table->id, 'Edit'); ?> |
<?php echo Html::anchor('swing/table', 'Back'); ?>