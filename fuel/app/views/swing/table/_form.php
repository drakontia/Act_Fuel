<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Encid', 'encid', array('class'=>'control-label')); ?>

				<?php echo Form::input('encid', Input::post('encid', isset($swing_table) ? $swing_table->encid : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Encid')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Stime', 'stime', array('class'=>'control-label')); ?>

				<?php echo Form::input('stime', Input::post('stime', isset($swing_table) ? $swing_table->stime : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Stime')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Attacker', 'attacker', array('class'=>'control-label')); ?>

				<?php echo Form::input('attacker', Input::post('attacker', isset($swing_table) ? $swing_table->attacker : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Attacker')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Swingtype', 'swingtype', array('class'=>'control-label')); ?>

				<?php echo Form::input('swingtype', Input::post('swingtype', isset($swing_table) ? $swing_table->swingtype : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Swingtype')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Attacktype', 'attacktype', array('class'=>'control-label')); ?>

				<?php echo Form::input('attacktype', Input::post('attacktype', isset($swing_table) ? $swing_table->attacktype : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Attacktype')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Damagetype', 'damagetype', array('class'=>'control-label')); ?>

				<?php echo Form::input('damagetype', Input::post('damagetype', isset($swing_table) ? $swing_table->damagetype : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Damagetype')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Victim', 'victim', array('class'=>'control-label')); ?>

				<?php echo Form::input('victim', Input::post('victim', isset($swing_table) ? $swing_table->victim : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Victim')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Damage', 'damage', array('class'=>'control-label')); ?>

				<?php echo Form::input('damage', Input::post('damage', isset($swing_table) ? $swing_table->damage : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Damage')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Damagestring', 'damagestring', array('class'=>'control-label')); ?>

				<?php echo Form::input('damagestring', Input::post('damagestring', isset($swing_table) ? $swing_table->damagestring : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Damagestring')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Critical', 'critical', array('class'=>'control-label')); ?>

				<?php echo Form::input('critical', Input::post('critical', isset($swing_table) ? $swing_table->critical : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Critical')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Special', 'special', array('class'=>'control-label')); ?>

				<?php echo Form::input('special', Input::post('special', isset($swing_table) ? $swing_table->special : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Special')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Dmgadjust', 'dmgadjust', array('class'=>'control-label')); ?>

				<?php echo Form::input('dmgadjust', Input::post('dmgadjust', isset($swing_table) ? $swing_table->dmgadjust : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Dmgadjust')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Dmgreduced', 'dmgreduced', array('class'=>'control-label')); ?>

				<?php echo Form::input('dmgreduced', Input::post('dmgreduced', isset($swing_table) ? $swing_table->dmgreduced : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Dmgreduced')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Overheal', 'overheal', array('class'=>'control-label')); ?>

				<?php echo Form::input('overheal', Input::post('overheal', isset($swing_table) ? $swing_table->overheal : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Overheal')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>