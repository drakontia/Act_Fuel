<h2>Viewing <span class='muted'>#<?php echo $current_table->id; ?></span></h2>

<p>
	<strong>Encid:</strong>
	<?php echo $current_table->encid; ?></p>
<p>
	<strong>Ally:</strong>
	<?php echo $current_table->ally; ?></p>
<p>
	<strong>Name:</strong>
	<?php echo $current_table->name; ?></p>
<p>
	<strong>Starttime:</strong>
	<?php echo $current_table->starttime; ?></p>
<p>
	<strong>Endtime:</strong>
	<?php echo $current_table->endtime; ?></p>
<p>
	<strong>Duration:</strong>
	<?php echo $current_table->duration; ?></p>
<p>
	<strong>Damage:</strong>
	<?php echo $current_table->damage; ?></p>
<p>
	<strong>Damageperc:</strong>
	<?php echo $current_table->damageperc; ?></p>
<p>
	<strong>Kills:</strong>
	<?php echo $current_table->kills; ?></p>
<p>
	<strong>Healed:</strong>
	<?php echo $current_table->healed; ?></p>
<p>
	<strong>Healedperc:</strong>
	<?php echo $current_table->healedperc; ?></p>
<p>
	<strong>Critheals:</strong>
	<?php echo $current_table->critheals; ?></p>
<p>
	<strong>Heals:</strong>
	<?php echo $current_table->heals; ?></p>
<p>
	<strong>Curedispels:</strong>
	<?php echo $current_table->curedispels; ?></p>
<p>
	<strong>Powerdrain:</strong>
	<?php echo $current_table->powerdrain; ?></p>
<p>
	<strong>Powerreplenish:</strong>
	<?php echo $current_table->powerreplenish; ?></p>
<p>
	<strong>Dps:</strong>
	<?php echo $current_table->dps; ?></p>
<p>
	<strong>Encdps:</strong>
	<?php echo $current_table->encdps; ?></p>
<p>
	<strong>Enchps:</strong>
	<?php echo $current_table->enchps; ?></p>
<p>
	<strong>Hits:</strong>
	<?php echo $current_table->hits; ?></p>
<p>
	<strong>Crithits:</strong>
	<?php echo $current_table->crithits; ?></p>
<p>
	<strong>Blocked:</strong>
	<?php echo $current_table->blocked; ?></p>
<p>
	<strong>Misses:</strong>
	<?php echo $current_table->misses; ?></p>
<p>
	<strong>Swings:</strong>
	<?php echo $current_table->swings; ?></p>
<p>
	<strong>Healstaken:</strong>
	<?php echo $current_table->healstaken; ?></p>
<p>
	<strong>Damagetaken:</strong>
	<?php echo $current_table->damagetaken; ?></p>
<p>
	<strong>Deaths:</strong>
	<?php echo $current_table->deaths; ?></p>
<p>
	<strong>Tohit:</strong>
	<?php echo $current_table->tohit; ?></p>
<p>
	<strong>Critdamperc:</strong>
	<?php echo $current_table->critdamperc; ?></p>
<p>
	<strong>Crithealperc:</strong>
	<?php echo $current_table->crithealperc; ?></p>
<p>
	<strong>Threatstr:</strong>
	<?php echo $current_table->threatstr; ?></p>
<p>
	<strong>Threatdelta:</strong>
	<?php echo $current_table->threatdelta; ?></p>
<p>
	<strong>Job:</strong>
	<?php echo $current_table->job; ?></p>
<p>
	<strong>Parrypct:</strong>
	<?php echo $current_table->parrypct; ?></p>
<p>
	<strong>Blockpct:</strong>
	<?php echo $current_table->blockpct; ?></p>
<p>
	<strong>Inctohit:</strong>
	<?php echo $current_table->inctohit; ?></p>
<p>
	<strong>Overhealpct:</strong>
	<?php echo $current_table->overhealpct; ?></p>

<?php echo Html::anchor('current/table/edit/'.$current_table->id, 'Edit'); ?> |
<?php echo Html::anchor('current/table', 'Back'); ?>