<h2>Listing <span class='muted'>Skills & Abilities</span></h2>
<br>
<?php if ($skill): ?>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Name</th>
      <th>Swingtype</th>
      <th>Damagetype</th>
      <th>Duration</th>
      <th>Recast</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($skill as $item): ?>
    <tr>

      <td><?php echo $item->name; ?></td>
      <td><?php echo $item->swingtype; ?></td>
      <td><?php echo $item->damagetype; ?></td>
      <td><?php echo $item->duration; ?></td>
      <td><?php echo $item->recast; ?></td>
      <td>
        <div class="btn-toolbar">
          <div class="btn-group">
            <?php echo Html::anchor('skill/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>            <?php echo Html::anchor('skill/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>            <?php echo Html::anchor('skill/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>          </div>
        </div>

      </td>
    </tr>
<?php endforeach; ?>  </tbody>
</table>

<?php else: ?>
<p>No Skill.</p>

<?php endif; ?><p>
  <?php echo Html::anchor('skill/create', 'Add new Current', array('class' => 'btn btn-success')); ?>

</p>
