<h2>Editing <span class='muted'>Combatant_table</span></h2>
<br>

<?php echo render('combatant/table/_form'); ?>
<p>
	<?php echo Html::anchor('combatant/table/view/'.$combatant_table->id, 'View'); ?> |
	<?php echo Html::anchor('combatant/table', 'Back'); ?></p>
