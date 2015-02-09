<h2>Viewing <span class='muted'>#<?php echo $damagetype_table->id; ?></span></h2>

<p>
	<strong>Encid:</strong>
	<?php echo $damagetype_table->encid; ?></p>
<p>
	<strong>Combatant:</strong>
	<?php echo $damagetype_table->combatant; ?></p>
<p>
	<strong>Grouping:</strong>
	<?php echo $damagetype_table->grouping; ?></p>
<p>
	<strong>Type:</strong>
	<?php echo $damagetype_table->type; ?></p>
<p>
	<strong>Starttime:</strong>
	<?php echo $damagetype_table->starttime; ?></p>
<p>
	<strong>Endtime:</strong>
	<?php echo $damagetype_table->endtime; ?></p>
<p>
	<strong>Duration:</strong>
	<?php echo $damagetype_table->duration; ?></p>
<p>
	<strong>Damage:</strong>
	<?php echo $damagetype_table->damage; ?></p>
<p>
	<strong>Encdps:</strong>
	<?php echo $damagetype_table->encdps; ?></p>
<p>
	<strong>Chardps:</strong>
	<?php echo $damagetype_table->chardps; ?></p>
<p>
	<strong>Dps:</strong>
	<?php echo $damagetype_table->dps; ?></p>
<p>
	<strong>Average:</strong>
	<?php echo $damagetype_table->average; ?></p>
<p>
	<strong>Median:</strong>
	<?php echo $damagetype_table->median; ?></p>
<p>
	<strong>Minhit:</strong>
	<?php echo $damagetype_table->minhit; ?></p>
<p>
	<strong>Maxhit:</strong>
	<?php echo $damagetype_table->maxhit; ?></p>
<p>
	<strong>Hits:</strong>
	<?php echo $damagetype_table->hits; ?></p>
<p>
	<strong>Crithits:</strong>
	<?php echo $damagetype_table->crithits; ?></p>
<p>
	<strong>Blocked:</strong>
	<?php echo $damagetype_table->blocked; ?></p>
<p>
	<strong>Misses:</strong>
	<?php echo $damagetype_table->misses; ?></p>
<p>
	<strong>Swings:</strong>
	<?php echo $damagetype_table->swings; ?></p>
<p>
	<strong>Tohit:</strong>
	<?php echo $damagetype_table->tohit; ?></p>
<p>
	<strong>Averagedelay:</strong>
	<?php echo $damagetype_table->averagedelay; ?></p>
<p>
	<strong>Critperc:</strong>
	<?php echo $damagetype_table->critperc; ?></p>
<p>
	<strong>Parrypct:</strong>
	<?php echo $damagetype_table->parrypct; ?></p>
<p>
	<strong>Blockpct:</strong>
	<?php echo $damagetype_table->blockpct; ?></p>
<p>
	<strong>Overheal:</strong>
	<?php echo $damagetype_table->overheal; ?></p>

<?php echo Html::anchor('damagetype/table/edit/'.$damagetype_table->id, 'Edit'); ?> |
<?php echo Html::anchor('damagetype/table', 'Back'); ?>