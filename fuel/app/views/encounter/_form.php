<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Encid', 'encid', array('class'=>'control-label')); ?>

				<?php echo Form::input('encid', Input::post('encid', isset($encounter_table) ? $encounter_table->encid : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Encid')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Title', 'title', array('class'=>'control-label')); ?>

				<?php echo Form::input('title', Input::post('title', isset($encounter_table) ? $encounter_table->title : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Title')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Starttime', 'starttime', array('class'=>'control-label')); ?>

				<?php echo Form::input('starttime', Input::post('starttime', isset($encounter_table) ? $encounter_table->starttime : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Starttime')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Endtime', 'endtime', array('class'=>'control-label')); ?>

				<?php echo Form::input('endtime', Input::post('endtime', isset($encounter_table) ? $encounter_table->endtime : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Endtime')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Duration', 'duration', array('class'=>'control-label')); ?>

				<?php echo Form::input('duration', Input::post('duration', isset($encounter_table) ? $encounter_table->duration : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Duration')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Damage', 'damage', array('class'=>'control-label')); ?>

				<?php echo Form::input('damage', Input::post('damage', isset($encounter_table) ? $encounter_table->damage : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Damage')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Encdps', 'encdps', array('class'=>'control-label')); ?>

				<?php echo Form::input('encdps', Input::post('encdps', isset($encounter_table) ? $encounter_table->encdps : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Encdps')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Zone', 'zone', array('class'=>'control-label')); ?>

				<?php echo Form::input('zone', Input::post('zone', isset($encounter_table) ? $encounter_table->zone : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Zone')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Kills', 'kills', array('class'=>'control-label')); ?>

				<?php echo Form::input('kills', Input::post('kills', isset($encounter_table) ? $encounter_table->kills : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Kills')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Deaths', 'deaths', array('class'=>'control-label')); ?>

				<?php echo Form::input('deaths', Input::post('deaths', isset($encounter_table) ? $encounter_table->deaths : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Deaths')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>