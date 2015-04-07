<h2>Viewing <span class='muted'>#<?php echo $skill->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $skill->name; ?></p>
<p>
	<strong>Swingtype:</strong>
	<?php echo $skill->swingtype; ?></p>
<p>
	<strong>Duration:</strong>
	<?php echo $skill->duration; ?></p>
<p>
	<strong>Recast:</strong>
	<?php echo $skill->recast; ?></p>

<?php echo Html::anchor('skill/edit/'.$skill->id, 'Edit'); ?> |
<?php echo Html::anchor('skill', 'Back'); ?>
