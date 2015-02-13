<h2>Viewing <span class='muted'>#<?php echo $combatant->id; ?></span></h2>

<p>
	<strong>Encid:</strong>
	<?php echo $combatant->encid; ?></p>
<p>
	<strong>Ally:</strong>
	<?php echo $combatant->ally; ?></p>
<p>
	<strong>Name:</strong>
	<?php echo $combatant->name; ?></p>
<p>
	<strong>Starttime:</strong>
	<?php echo $combatant->starttime; ?></p>
<p>
	<strong>Endtime:</strong>
	<?php echo $combatant->endtime; ?></p>
<p>
	<strong>Duration:</strong>
	<?php echo $combatant->duration; ?></p>
<p>
	<strong>Damage:</strong>
	<?php echo $combatant->damage; ?></p>
<p>
	<strong>Damageperc:</strong>
	<?php echo $combatant->damageperc; ?></p>
<p>
	<strong>Kills:</strong>
	<?php echo $combatant->kills; ?></p>
<p>
	<strong>Healed:</strong>
	<?php echo $combatant->healed; ?></p>
<p>
	<strong>Healedperc:</strong>
	<?php echo $combatant->healedperc; ?></p>
<p>
	<strong>Critheals:</strong>
	<?php echo $combatant->critheals; ?></p>
<p>
	<strong>Heals:</strong>
	<?php echo $combatant->heals; ?></p>
<p>
	<strong>Curedispels:</strong>
	<?php echo $combatant->curedispels; ?></p>
<p>
	<strong>Powerdrain:</strong>
	<?php echo $combatant->powerdrain; ?></p>
<p>
	<strong>Powerreplenish:</strong>
	<?php echo $combatant->powerreplenish; ?></p>
<p>
	<strong>Dps:</strong>
	<?php echo $combatant->dps; ?></p>
<p>
	<strong>Encdps:</strong>
	<?php echo $combatant->encdps; ?></p>
<p>
	<strong>Enchps:</strong>
	<?php echo $combatant->enchps; ?></p>
<p>
	<strong>Hits:</strong>
	<?php echo $combatant->hits; ?></p>
<p>
	<strong>Crithits:</strong>
	<?php echo $combatant->crithits; ?></p>
<p>
	<strong>Blocked:</strong>
	<?php echo $combatant->blocked; ?></p>
<p>
	<strong>Misses:</strong>
	<?php echo $combatant->misses; ?></p>
<p>
	<strong>Swings:</strong>
	<?php echo $combatant->swings; ?></p>
<p>
	<strong>Healstaken:</strong>
	<?php echo $combatant->healstaken; ?></p>
<p>
	<strong>Damagetaken:</strong>
	<?php echo $combatant->damagetaken; ?></p>
<p>
	<strong>Deaths:</strong>
	<?php echo $combatant->deaths; ?></p>
<p>
	<strong>Tohit:</strong>
	<?php echo $combatant->tohit; ?></p>
<p>
	<strong>Critdamperc:</strong>
	<?php echo $combatant->critdamperc; ?></p>
<p>
	<strong>Crithealperc:</strong>
	<?php echo $combatant->crithealperc; ?></p>
<p>
	<strong>Threatstr:</strong>
	<?php echo $combatant->threatstr; ?></p>
<p>
	<strong>Threatdelta:</strong>
	<?php echo $combatant->threatdelta; ?></p>
<p>
	<strong>Job:</strong>
	<?php echo $combatant->job; ?></p>
<p>
	<strong>Parrypct:</strong>
	<?php echo $combatant->parrypct; ?></p>
<p>
	<strong>Blockpct:</strong>
	<?php echo $combatant->blockpct; ?></p>
<p>
	<strong>Inctohit:</strong>
	<?php echo $combatant->inctohit; ?></p>
<p>
	<strong>Overhealpct:</strong>
	<?php echo $combatant->overhealpct; ?></p>

<?php echo Html::anchor('combatant/edit/'.$combatant->id, 'Edit'); ?> |
<?php echo Html::anchor('combatant', 'Back'); ?>
