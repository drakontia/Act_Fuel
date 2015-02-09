<h2>Viewing <span class='muted'>#<?php echo $combatant_table->id; ?></span></h2>

<p>
	<strong>Encid:</strong>
	<?php echo $combatant_table->encid; ?></p>
<p>
	<strong>Ally:</strong>
	<?php echo $combatant_table->ally; ?></p>
<p>
	<strong>Name:</strong>
	<?php echo $combatant_table->name; ?></p>
<p>
	<strong>Starttime:</strong>
	<?php echo $combatant_table->starttime; ?></p>
<p>
	<strong>Endtime:</strong>
	<?php echo $combatant_table->endtime; ?></p>
<p>
	<strong>Duration:</strong>
	<?php echo $combatant_table->duration; ?></p>
<p>
	<strong>Damage:</strong>
	<?php echo $combatant_table->damage; ?></p>
<p>
	<strong>Damageperc:</strong>
	<?php echo $combatant_table->damageperc; ?></p>
<p>
	<strong>Kills:</strong>
	<?php echo $combatant_table->kills; ?></p>
<p>
	<strong>Healed:</strong>
	<?php echo $combatant_table->healed; ?></p>
<p>
	<strong>Healedperc:</strong>
	<?php echo $combatant_table->healedperc; ?></p>
<p>
	<strong>Critheals:</strong>
	<?php echo $combatant_table->critheals; ?></p>
<p>
	<strong>Heals:</strong>
	<?php echo $combatant_table->heals; ?></p>
<p>
	<strong>Curedispels:</strong>
	<?php echo $combatant_table->curedispels; ?></p>
<p>
	<strong>Powerdrain:</strong>
	<?php echo $combatant_table->powerdrain; ?></p>
<p>
	<strong>Powerreplenish:</strong>
	<?php echo $combatant_table->powerreplenish; ?></p>
<p>
	<strong>Dps:</strong>
	<?php echo $combatant_table->dps; ?></p>
<p>
	<strong>Encdps:</strong>
	<?php echo $combatant_table->encdps; ?></p>
<p>
	<strong>Enchps:</strong>
	<?php echo $combatant_table->enchps; ?></p>
<p>
	<strong>Hits:</strong>
	<?php echo $combatant_table->hits; ?></p>
<p>
	<strong>Crithits:</strong>
	<?php echo $combatant_table->crithits; ?></p>
<p>
	<strong>Blocked:</strong>
	<?php echo $combatant_table->blocked; ?></p>
<p>
	<strong>Misses:</strong>
	<?php echo $combatant_table->misses; ?></p>
<p>
	<strong>Swings:</strong>
	<?php echo $combatant_table->swings; ?></p>
<p>
	<strong>Healstaken:</strong>
	<?php echo $combatant_table->healstaken; ?></p>
<p>
	<strong>Damagetaken:</strong>
	<?php echo $combatant_table->damagetaken; ?></p>
<p>
	<strong>Deaths:</strong>
	<?php echo $combatant_table->deaths; ?></p>
<p>
	<strong>Tohit:</strong>
	<?php echo $combatant_table->tohit; ?></p>
<p>
	<strong>Critdamperc:</strong>
	<?php echo $combatant_table->critdamperc; ?></p>
<p>
	<strong>Crithealperc:</strong>
	<?php echo $combatant_table->crithealperc; ?></p>
<p>
	<strong>Threatstr:</strong>
	<?php echo $combatant_table->threatstr; ?></p>
<p>
	<strong>Threatdelta:</strong>
	<?php echo $combatant_table->threatdelta; ?></p>
<p>
	<strong>Job:</strong>
	<?php echo $combatant_table->job; ?></p>
<p>
	<strong>Parrypct:</strong>
	<?php echo $combatant_table->parrypct; ?></p>
<p>
	<strong>Blockpct:</strong>
	<?php echo $combatant_table->blockpct; ?></p>
<p>
	<strong>Inctohit:</strong>
	<?php echo $combatant_table->inctohit; ?></p>
<p>
	<strong>Overhealpct:</strong>
	<?php echo $combatant_table->overhealpct; ?></p>

<?php echo Html::anchor('combatant/table/edit/'.$combatant_table->id, 'Edit'); ?> |
<?php echo Html::anchor('combatant/table', 'Back'); ?>