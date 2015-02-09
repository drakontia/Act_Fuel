<h2>Viewing <span class='muted'>#<?php echo $attacktype->id; ?></span></h2>

<p>
	<strong>Encid:</strong>
	<?php echo $attacktype->encid; ?></p>
<p>
	<strong>Attacker:</strong>
	<?php echo $attacktype->attacker; ?></p>
<p>
	<strong>Victim:</strong>
	<?php echo $attacktype->victim; ?></p>
<p>
	<strong>Swingtype:</strong>
	<?php echo $attacktype->swingtype; ?></p>
<p>
	<strong>Type:</strong>
	<?php echo $attacktype->type; ?></p>
<p>
	<strong>Starttime:</strong>
	<?php echo $attacktype->starttime; ?></p>
<p>
	<strong>Endtime:</strong>
	<?php echo $attacktype->endtime; ?></p>
<p>
	<strong>Duration:</strong>
	<?php echo $attacktype->duration; ?></p>
<p>
	<strong>Damage:</strong>
	<?php echo $attacktype->damage; ?></p>
<p>
	<strong>Encdps:</strong>
	<?php echo $attacktype->encdps; ?></p>
<p>
	<strong>Chardps:</strong>
	<?php echo $attacktype->chardps; ?></p>
<p>
	<strong>Dps:</strong>
	<?php echo $attacktype->dps; ?></p>
<p>
	<strong>Average:</strong>
	<?php echo $attacktype->average; ?></p>
<p>
	<strong>Median:</strong>
	<?php echo $attacktype->median; ?></p>
<p>
	<strong>Minhit:</strong>
	<?php echo $attacktype->minhit; ?></p>
<p>
	<strong>Maxhit:</strong>
	<?php echo $attacktype->maxhit; ?></p>
<p>
	<strong>Resist:</strong>
	<?php echo $attacktype->resist; ?></p>
<p>
	<strong>Hits:</strong>
	<?php echo $attacktype->hits; ?></p>
<p>
	<strong>Crithits:</strong>
	<?php echo $attacktype->crithits; ?></p>
<p>
	<strong>Blocked:</strong>
	<?php echo $attacktype->blocked; ?></p>
<p>
	<strong>Misses:</strong>
	<?php echo $attacktype->misses; ?></p>
<p>
	<strong>Swings:</strong>
	<?php echo $attacktype->swings; ?></p>
<p>
	<strong>Tohit:</strong>
	<?php echo $attacktype->tohit; ?></p>
<p>
	<strong>Averagedelay:</strong>
	<?php echo $attacktype->averagedelay; ?></p>
<p>
	<strong>Critperc:</strong>
	<?php echo $attacktype->critperc; ?></p>
<p>
	<strong>Parry:</strong>
	<?php echo $attacktype->parry; ?></p>
<p>
	<strong>Parrypct:</strong>
	<?php echo $attacktype->parrypct; ?></p>
<p>
	<strong>Block:</strong>
	<?php echo $attacktype->block; ?></p>
<p>
	<strong>Blockpct:</strong>
	<?php echo $attacktype->blockpct; ?></p>
<p>
	<strong>Dmgreduced:</strong>
	<?php echo $attacktype->dmgreduced; ?></p>
<p>
	<strong>Overheal:</strong>
	<?php echo $attacktype->overheal; ?></p>

<?php echo Html::anchor('attacktype/edit/'.$attacktype->id, 'Edit'); ?> |
<?php echo Html::anchor('attacktype', 'Back'); ?>
