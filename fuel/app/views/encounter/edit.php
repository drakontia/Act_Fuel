<h2>Editing <span class='muted'>Encounter</span></h2>
<br>

<?php echo render('encounter/_form'); ?>
<p>
	<?php echo Html::anchor('encounter/view/'.$encounter->id, 'View'); ?> |
	<?php echo Html::anchor('encounter', 'Back'); ?></p>
