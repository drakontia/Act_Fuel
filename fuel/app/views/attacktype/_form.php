<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Encid', 'encid', array('class'=>'control-label')); ?>

				<?php echo Form::input('encid', Input::post('encid', isset($attacktype_table) ? $attacktype_table->encid : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Encid')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Attacker', 'attacker', array('class'=>'control-label')); ?>

				<?php echo Form::input('attacker', Input::post('attacker', isset($attacktype_table) ? $attacktype_table->attacker : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Attacker')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Victim', 'victim', array('class'=>'control-label')); ?>

				<?php echo Form::input('victim', Input::post('victim', isset($attacktype_table) ? $attacktype_table->victim : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Victim')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Swingtype', 'swingtype', array('class'=>'control-label')); ?>

				<?php echo Form::input('swingtype', Input::post('swingtype', isset($attacktype_table) ? $attacktype_table->swingtype : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Swingtype')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Type', 'type', array('class'=>'control-label')); ?>

				<?php echo Form::input('type', Input::post('type', isset($attacktype_table) ? $attacktype_table->type : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Type')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Starttime', 'starttime', array('class'=>'control-label')); ?>

				<?php echo Form::input('starttime', Input::post('starttime', isset($attacktype_table) ? $attacktype_table->starttime : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Starttime')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Endtime', 'endtime', array('class'=>'control-label')); ?>

				<?php echo Form::input('endtime', Input::post('endtime', isset($attacktype_table) ? $attacktype_table->endtime : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Endtime')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Duration', 'duration', array('class'=>'control-label')); ?>

				<?php echo Form::input('duration', Input::post('duration', isset($attacktype_table) ? $attacktype_table->duration : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Duration')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Damage', 'damage', array('class'=>'control-label')); ?>

				<?php echo Form::input('damage', Input::post('damage', isset($attacktype_table) ? $attacktype_table->damage : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Damage')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Encdps', 'encdps', array('class'=>'control-label')); ?>

				<?php echo Form::input('encdps', Input::post('encdps', isset($attacktype_table) ? $attacktype_table->encdps : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Encdps')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Chardps', 'chardps', array('class'=>'control-label')); ?>

				<?php echo Form::input('chardps', Input::post('chardps', isset($attacktype_table) ? $attacktype_table->chardps : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Chardps')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Dps', 'dps', array('class'=>'control-label')); ?>

				<?php echo Form::input('dps', Input::post('dps', isset($attacktype_table) ? $attacktype_table->dps : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Dps')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Average', 'average', array('class'=>'control-label')); ?>

				<?php echo Form::input('average', Input::post('average', isset($attacktype_table) ? $attacktype_table->average : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Average')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Median', 'median', array('class'=>'control-label')); ?>

				<?php echo Form::input('median', Input::post('median', isset($attacktype_table) ? $attacktype_table->median : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Median')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Minhit', 'minhit', array('class'=>'control-label')); ?>

				<?php echo Form::input('minhit', Input::post('minhit', isset($attacktype_table) ? $attacktype_table->minhit : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Minhit')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Maxhit', 'maxhit', array('class'=>'control-label')); ?>

				<?php echo Form::input('maxhit', Input::post('maxhit', isset($attacktype_table) ? $attacktype_table->maxhit : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Maxhit')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Resist', 'resist', array('class'=>'control-label')); ?>

				<?php echo Form::input('resist', Input::post('resist', isset($attacktype_table) ? $attacktype_table->resist : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Resist')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Hits', 'hits', array('class'=>'control-label')); ?>

				<?php echo Form::input('hits', Input::post('hits', isset($attacktype_table) ? $attacktype_table->hits : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Hits')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Crithits', 'crithits', array('class'=>'control-label')); ?>

				<?php echo Form::input('crithits', Input::post('crithits', isset($attacktype_table) ? $attacktype_table->crithits : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Crithits')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Blocked', 'blocked', array('class'=>'control-label')); ?>

				<?php echo Form::input('blocked', Input::post('blocked', isset($attacktype_table) ? $attacktype_table->blocked : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Blocked')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Misses', 'misses', array('class'=>'control-label')); ?>

				<?php echo Form::input('misses', Input::post('misses', isset($attacktype_table) ? $attacktype_table->misses : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Misses')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Swings', 'swings', array('class'=>'control-label')); ?>

				<?php echo Form::input('swings', Input::post('swings', isset($attacktype_table) ? $attacktype_table->swings : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Swings')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Tohit', 'tohit', array('class'=>'control-label')); ?>

				<?php echo Form::input('tohit', Input::post('tohit', isset($attacktype_table) ? $attacktype_table->tohit : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Tohit')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Averagedelay', 'averagedelay', array('class'=>'control-label')); ?>

				<?php echo Form::input('averagedelay', Input::post('averagedelay', isset($attacktype_table) ? $attacktype_table->averagedelay : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Averagedelay')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Critperc', 'critperc', array('class'=>'control-label')); ?>

				<?php echo Form::input('critperc', Input::post('critperc', isset($attacktype_table) ? $attacktype_table->critperc : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Critperc')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Parry', 'parry', array('class'=>'control-label')); ?>

				<?php echo Form::input('parry', Input::post('parry', isset($attacktype_table) ? $attacktype_table->parry : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Parry')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Parrypct', 'parrypct', array('class'=>'control-label')); ?>

				<?php echo Form::input('parrypct', Input::post('parrypct', isset($attacktype_table) ? $attacktype_table->parrypct : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Parrypct')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Block', 'block', array('class'=>'control-label')); ?>

				<?php echo Form::input('block', Input::post('block', isset($attacktype_table) ? $attacktype_table->block : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Block')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Blockpct', 'blockpct', array('class'=>'control-label')); ?>

				<?php echo Form::input('blockpct', Input::post('blockpct', isset($attacktype_table) ? $attacktype_table->blockpct : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Blockpct')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Dmgreduced', 'dmgreduced', array('class'=>'control-label')); ?>

				<?php echo Form::input('dmgreduced', Input::post('dmgreduced', isset($attacktype_table) ? $attacktype_table->dmgreduced : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Dmgreduced')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Overheal', 'overheal', array('class'=>'control-label')); ?>

				<?php echo Form::input('overheal', Input::post('overheal', isset($attacktype_table) ? $attacktype_table->overheal : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Overheal')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>
