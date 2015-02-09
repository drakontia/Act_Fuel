<h2>Editing <span class='muted'>Encounter_table</span></h2>
<br>

<?php echo render('encounter/table/_form'); ?>
<p>
	<?php echo Html::anchor('encounter/table/view/'.$encounter_table->id, 'View'); ?> |
	<?php echo Html::anchor('encounter/table', 'Back'); ?></p>
