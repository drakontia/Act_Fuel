<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Encid', 'encid', array('class'=>'control-label')); ?>

				<?php echo Form::input('encid', Input::post('encid', isset($damagetype_table) ? $damagetype_table->encid : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Encid')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Combatant', 'combatant', array('class'=>'control-label')); ?>

				<?php echo Form::input('combatant', Input::post('combatant', isset($damagetype_table) ? $damagetype_table->combatant : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Combatant')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Grouping', 'grouping', array('class'=>'control-label')); ?>

				<?php echo Form::input('grouping', Input::post('grouping', isset($damagetype_table) ? $damagetype_table->grouping : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Grouping')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Type', 'type', array('class'=>'control-label')); ?>

				<?php echo Form::input('type', Input::post('type', isset($damagetype_table) ? $damagetype_table->type : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Type')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Starttime', 'starttime', array('class'=>'control-label')); ?>

				<?php echo Form::input('starttime', Input::post('starttime', isset($damagetype_table) ? $damagetype_table->starttime : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Starttime')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Endtime', 'endtime', array('class'=>'control-label')); ?>

				<?php echo Form::input('endtime', Input::post('endtime', isset($damagetype_table) ? $damagetype_table->endtime : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Endtime')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Duration', 'duration', array('class'=>'control-label')); ?>

				<?php echo Form::input('duration', Input::post('duration', isset($damagetype_table) ? $damagetype_table->duration : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Duration')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Damage', 'damage', array('class'=>'control-label')); ?>

				<?php echo Form::input('damage', Input::post('damage', isset($damagetype_table) ? $damagetype_table->damage : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Damage')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Encdps', 'encdps', array('class'=>'control-label')); ?>

				<?php echo Form::input('encdps', Input::post('encdps', isset($damagetype_table) ? $damagetype_table->encdps : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Encdps')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Chardps', 'chardps', array('class'=>'control-label')); ?>

				<?php echo Form::input('chardps', Input::post('chardps', isset($damagetype_table) ? $damagetype_table->chardps : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Chardps')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Dps', 'dps', array('class'=>'control-label')); ?>

				<?php echo Form::input('dps', Input::post('dps', isset($damagetype_table) ? $damagetype_table->dps : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Dps')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Average', 'average', array('class'=>'control-label')); ?>

				<?php echo Form::input('average', Input::post('average', isset($damagetype_table) ? $damagetype_table->average : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Average')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Median', 'median', array('class'=>'control-label')); ?>

				<?php echo Form::input('median', Input::post('median', isset($damagetype_table) ? $damagetype_table->median : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Median')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Minhit', 'minhit', array('class'=>'control-label')); ?>

				<?php echo Form::input('minhit', Input::post('minhit', isset($damagetype_table) ? $damagetype_table->minhit : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Minhit')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Maxhit', 'maxhit', array('class'=>'control-label')); ?>

				<?php echo Form::input('maxhit', Input::post('maxhit', isset($damagetype_table) ? $damagetype_table->maxhit : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Maxhit')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Hits', 'hits', array('class'=>'control-label')); ?>

				<?php echo Form::input('hits', Input::post('hits', isset($damagetype_table) ? $damagetype_table->hits : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Hits')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Crithits', 'crithits', array('class'=>'control-label')); ?>

				<?php echo Form::input('crithits', Input::post('crithits', isset($damagetype_table) ? $damagetype_table->crithits : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Crithits')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Blocked', 'blocked', array('class'=>'control-label')); ?>

				<?php echo Form::input('blocked', Input::post('blocked', isset($damagetype_table) ? $damagetype_table->blocked : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Blocked')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Misses', 'misses', array('class'=>'control-label')); ?>

				<?php echo Form::input('misses', Input::post('misses', isset($damagetype_table) ? $damagetype_table->misses : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Misses')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Swings', 'swings', array('class'=>'control-label')); ?>

				<?php echo Form::input('swings', Input::post('swings', isset($damagetype_table) ? $damagetype_table->swings : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Swings')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Tohit', 'tohit', array('class'=>'control-label')); ?>

				<?php echo Form::input('tohit', Input::post('tohit', isset($damagetype_table) ? $damagetype_table->tohit : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Tohit')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Averagedelay', 'averagedelay', array('class'=>'control-label')); ?>

				<?php echo Form::input('averagedelay', Input::post('averagedelay', isset($damagetype_table) ? $damagetype_table->averagedelay : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Averagedelay')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Critperc', 'critperc', array('class'=>'control-label')); ?>

				<?php echo Form::input('critperc', Input::post('critperc', isset($damagetype_table) ? $damagetype_table->critperc : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Critperc')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Parrypct', 'parrypct', array('class'=>'control-label')); ?>

				<?php echo Form::input('parrypct', Input::post('parrypct', isset($damagetype_table) ? $damagetype_table->parrypct : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Parrypct')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Blockpct', 'blockpct', array('class'=>'control-label')); ?>

				<?php echo Form::input('blockpct', Input::post('blockpct', isset($damagetype_table) ? $damagetype_table->blockpct : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Blockpct')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Overheal', 'overheal', array('class'=>'control-label')); ?>

				<?php echo Form::input('overheal', Input::post('overheal', isset($damagetype_table) ? $damagetype_table->overheal : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Overheal')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>