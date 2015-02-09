<h2>Editing <span class='muted'>Current_table</span></h2>
<br>

<?php echo render('current/table/_form'); ?>
<p>
	<?php echo Html::anchor('current/table/view/'.$current_table->id, 'View'); ?> |
	<?php echo Html::anchor('current/table', 'Back'); ?></p>
