<h2>Editing <span class='muted'>Skill</span></h2>
<br>

<?php echo render('skill/_form'); ?>
<p>
  <?php echo Html::anchor('skill/view/'.$skill->id, 'View'); ?> |
  <?php echo Html::anchor('skill', 'Back'); ?></p>
