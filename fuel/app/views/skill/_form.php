<?php echo Form::open(array("class"=>"form-horizontal")); ?>

  <fieldset>
    <div class="form-group">
      <?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

        <?php echo Form::input('name', Input::post('name', isset($skill) ? $skill->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

    </div>
    <div class="form-group">
      <?php echo Form::label('Swingtype', 'swingtype', array('class'=>'control-label')); ?>

        <?php echo Form::input('swingtype', Input::post('swingtype', isset($skill) ? $skill->swingtype: ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Swingtype')); ?>

    </div>
    <div class="form-group">
      <?php echo Form::label('Duration', 'duration', array('class'=>'control-label')); ?>

        <?php echo Form::input('duration', Input::post('duration', isset($skill) ? $skill->duration : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Duration')); ?>

    </div>
    <div class="form-group">
      <?php echo Form::label('Recast', 'recast', array('class'=>'control-label')); ?>

        <?php echo Form::input('recast', Input::post('recast', isset($skill) ? $skill->recast: ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Recast')); ?>

    </div>
    <div class="form-group">
      <label class='control-label'>&nbsp;</label>
      <?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>    </div>
  </fieldset>
<?php echo Form::close(); ?>
