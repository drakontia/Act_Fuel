<h2>Viewing <span class='muted'>#<?php echo $encounter->id; ?></span></h2>

<p>
	<strong>Encid:</strong>
	<?php echo $encounter->encid; ?></p>
<p>
	<strong>Title:</strong>
	<?php echo $encounter->title; ?></p>
<p>
	<strong>Starttime:</strong>
	<?php echo $encounter->starttime; ?></p>
<p>
	<strong>Endtime:</strong>
	<?php echo $encounter->endtime; ?></p>
<p>
	<strong>Duration:</strong>
	<?php echo $encounter->duration; ?></p>
<p>
	<strong>Damage:</strong>
	<?php echo $encounter->damage; ?></p>
<p>
	<strong>Encdps:</strong>
	<?php echo $encounter->encdps; ?></p>
<p>
	<strong>Zone:</strong>
	<?php echo $encounter->zone; ?></p>
<p>
	<strong>Kills:</strong>
	<?php echo $encounter->kills; ?></p>
<p>
	<strong>Deaths:</strong>
	<?php echo $encounter->deaths; ?></p>

<?php echo Html::anchor('encounter/edit/'.$encounter->id, 'Edit'); ?> |
<?php echo Html::anchor('encounter/index', 'Back'); ?>
