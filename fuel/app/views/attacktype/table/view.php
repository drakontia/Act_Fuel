<h2>Viewing <span class='muted'>#<?php echo $attacktype_table->id; ?></span></h2>

<p>
	<strong>Encid:</strong>
	<?php echo $attacktype_table->encid; ?></p>
<p>
	<strong>Attacker:</strong>
	<?php echo $attacktype_table->attacker; ?></p>
<p>
	<strong>Victim:</strong>
	<?php echo $attacktype_table->victim; ?></p>
<p>
	<strong>Swingtype:</strong>
	<?php echo $attacktype_table->swingtype; ?></p>
<p>
	<strong>Type:</strong>
	<?php echo $attacktype_table->type; ?></p>
<p>
	<strong>Starttime:</strong>
	<?php echo $attacktype_table->starttime; ?></p>
<p>
	<strong>Endtime:</strong>
	<?php echo $attacktype_table->endtime; ?></p>
<p>
	<strong>Duration:</strong>
	<?php echo $attacktype_table->duration; ?></p>
<p>
	<strong>Damage:</strong>
	<?php echo $attacktype_table->damage; ?></p>
<p>
	<strong>Encdps:</strong>
	<?php echo $attacktype_table->encdps; ?></p>
<p>
	<strong>Chardps:</strong>
	<?php echo $attacktype_table->chardps; ?></p>
<p>
	<strong>Dps:</strong>
	<?php echo $attacktype_table->dps; ?></p>
<p>
	<strong>Average:</strong>
	<?php echo $attacktype_table->average; ?></p>
<p>
	<strong>Median:</strong>
	<?php echo $attacktype_table->median; ?></p>
<p>
	<strong>Minhit:</strong>
	<?php echo $attacktype_table->minhit; ?></p>
<p>
	<strong>Maxhit:</strong>
	<?php echo $attacktype_table->maxhit; ?></p>
<p>
	<strong>Resist:</strong>
	<?php echo $attacktype_table->resist; ?></p>
<p>
	<strong>Hits:</strong>
	<?php echo $attacktype_table->hits; ?></p>
<p>
	<strong>Crithits:</strong>
	<?php echo $attacktype_table->crithits; ?></p>
<p>
	<strong>Blocked:</strong>
	<?php echo $attacktype_table->blocked; ?></p>
<p>
	<strong>Misses:</strong>
	<?php echo $attacktype_table->misses; ?></p>
<p>
	<strong>Swings:</strong>
	<?php echo $attacktype_table->swings; ?></p>
<p>
	<strong>Tohit:</strong>
	<?php echo $attacktype_table->tohit; ?></p>
<p>
	<strong>Averagedelay:</strong>
	<?php echo $attacktype_table->averagedelay; ?></p>
<p>
	<strong>Critperc:</strong>
	<?php echo $attacktype_table->critperc; ?></p>
<p>
	<strong>Parry:</strong>
	<?php echo $attacktype_table->parry; ?></p>
<p>
	<strong>Parrypct:</strong>
	<?php echo $attacktype_table->parrypct; ?></p>
<p>
	<strong>Block:</strong>
	<?php echo $attacktype_table->block; ?></p>
<p>
	<strong>Blockpct:</strong>
	<?php echo $attacktype_table->blockpct; ?></p>
<p>
	<strong>Dmgreduced:</strong>
	<?php echo $attacktype_table->dmgreduced; ?></p>
<p>
	<strong>Overheal:</strong>
	<?php echo $attacktype_table->overheal; ?></p>

<?php echo Html::anchor('attacktype/table/edit/'.$attacktype_table->id, 'Edit'); ?> |
<?php echo Html::anchor('attacktype/table', 'Back'); ?>