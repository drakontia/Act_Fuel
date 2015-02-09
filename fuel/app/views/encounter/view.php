<h2>Viewing <span class='muted'>#<?php echo $encounter_table->id; ?></span></h2>

<p>
	<strong>Encid:</strong>
	<?php echo $encounter_table->encid; ?></p>
<p>
	<strong>Title:</strong>
	<?php echo $encounter_table->title; ?></p>
<p>
	<strong>Starttime:</strong>
	<?php echo $encounter_table->starttime; ?></p>
<p>
	<strong>Endtime:</strong>
	<?php echo $encounter_table->endtime; ?></p>
<p>
	<strong>Duration:</strong>
	<?php echo $encounter_table->duration; ?></p>
<p>
	<strong>Damage:</strong>
	<?php echo $encounter_table->damage; ?></p>
<p>
	<strong>Encdps:</strong>
	<?php echo $encounter_table->encdps; ?></p>
<p>
	<strong>Zone:</strong>
	<?php echo $encounter_table->zone; ?></p>
<p>
	<strong>Kills:</strong>
	<?php echo $encounter_table->kills; ?></p>
<p>
	<strong>Deaths:</strong>
	<?php echo $encounter_table->deaths; ?></p>

<?php echo Html::anchor('encounter/table/edit/'.$encounter_table->id, 'Edit'); ?> |
<?php echo Html::anchor('encounter/table', 'Back'); ?>