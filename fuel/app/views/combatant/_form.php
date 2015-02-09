<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Encid', 'encid', array('class'=>'control-label')); ?>

				<?php echo Form::input('encid', Input::post('encid', isset($combatant_table) ? $combatant_table->encid : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Encid')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Ally', 'ally', array('class'=>'control-label')); ?>

				<?php echo Form::input('ally', Input::post('ally', isset($combatant_table) ? $combatant_table->ally : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Ally')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($combatant_table) ? $combatant_table->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Starttime', 'starttime', array('class'=>'control-label')); ?>

				<?php echo Form::input('starttime', Input::post('starttime', isset($combatant_table) ? $combatant_table->starttime : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Starttime')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Endtime', 'endtime', array('class'=>'control-label')); ?>

				<?php echo Form::input('endtime', Input::post('endtime', isset($combatant_table) ? $combatant_table->endtime : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Endtime')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Duration', 'duration', array('class'=>'control-label')); ?>

				<?php echo Form::input('duration', Input::post('duration', isset($combatant_table) ? $combatant_table->duration : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Duration')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Damage', 'damage', array('class'=>'control-label')); ?>

				<?php echo Form::input('damage', Input::post('damage', isset($combatant_table) ? $combatant_table->damage : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Damage')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Damageperc', 'damageperc', array('class'=>'control-label')); ?>

				<?php echo Form::input('damageperc', Input::post('damageperc', isset($combatant_table) ? $combatant_table->damageperc : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Damageperc')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Kills', 'kills', array('class'=>'control-label')); ?>

				<?php echo Form::input('kills', Input::post('kills', isset($combatant_table) ? $combatant_table->kills : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Kills')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Healed', 'healed', array('class'=>'control-label')); ?>

				<?php echo Form::input('healed', Input::post('healed', isset($combatant_table) ? $combatant_table->healed : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Healed')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Healedperc', 'healedperc', array('class'=>'control-label')); ?>

				<?php echo Form::input('healedperc', Input::post('healedperc', isset($combatant_table) ? $combatant_table->healedperc : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Healedperc')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Critheals', 'critheals', array('class'=>'control-label')); ?>

				<?php echo Form::input('critheals', Input::post('critheals', isset($combatant_table) ? $combatant_table->critheals : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Critheals')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Heals', 'heals', array('class'=>'control-label')); ?>

				<?php echo Form::input('heals', Input::post('heals', isset($combatant_table) ? $combatant_table->heals : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Heals')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Curedispels', 'curedispels', array('class'=>'control-label')); ?>

				<?php echo Form::input('curedispels', Input::post('curedispels', isset($combatant_table) ? $combatant_table->curedispels : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Curedispels')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Powerdrain', 'powerdrain', array('class'=>'control-label')); ?>

				<?php echo Form::input('powerdrain', Input::post('powerdrain', isset($combatant_table) ? $combatant_table->powerdrain : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Powerdrain')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Powerreplenish', 'powerreplenish', array('class'=>'control-label')); ?>

				<?php echo Form::input('powerreplenish', Input::post('powerreplenish', isset($combatant_table) ? $combatant_table->powerreplenish : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Powerreplenish')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Dps', 'dps', array('class'=>'control-label')); ?>

				<?php echo Form::input('dps', Input::post('dps', isset($combatant_table) ? $combatant_table->dps : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Dps')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Encdps', 'encdps', array('class'=>'control-label')); ?>

				<?php echo Form::input('encdps', Input::post('encdps', isset($combatant_table) ? $combatant_table->encdps : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Encdps')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Enchps', 'enchps', array('class'=>'control-label')); ?>

				<?php echo Form::input('enchps', Input::post('enchps', isset($combatant_table) ? $combatant_table->enchps : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Enchps')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Hits', 'hits', array('class'=>'control-label')); ?>

				<?php echo Form::input('hits', Input::post('hits', isset($combatant_table) ? $combatant_table->hits : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Hits')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Crithits', 'crithits', array('class'=>'control-label')); ?>

				<?php echo Form::input('crithits', Input::post('crithits', isset($combatant_table) ? $combatant_table->crithits : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Crithits')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Blocked', 'blocked', array('class'=>'control-label')); ?>

				<?php echo Form::input('blocked', Input::post('blocked', isset($combatant_table) ? $combatant_table->blocked : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Blocked')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Misses', 'misses', array('class'=>'control-label')); ?>

				<?php echo Form::input('misses', Input::post('misses', isset($combatant_table) ? $combatant_table->misses : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Misses')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Swings', 'swings', array('class'=>'control-label')); ?>

				<?php echo Form::input('swings', Input::post('swings', isset($combatant_table) ? $combatant_table->swings : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Swings')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Healstaken', 'healstaken', array('class'=>'control-label')); ?>

				<?php echo Form::input('healstaken', Input::post('healstaken', isset($combatant_table) ? $combatant_table->healstaken : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Healstaken')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Damagetaken', 'damagetaken', array('class'=>'control-label')); ?>

				<?php echo Form::input('damagetaken', Input::post('damagetaken', isset($combatant_table) ? $combatant_table->damagetaken : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Damagetaken')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Deaths', 'deaths', array('class'=>'control-label')); ?>

				<?php echo Form::input('deaths', Input::post('deaths', isset($combatant_table) ? $combatant_table->deaths : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Deaths')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Tohit', 'tohit', array('class'=>'control-label')); ?>

				<?php echo Form::input('tohit', Input::post('tohit', isset($combatant_table) ? $combatant_table->tohit : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Tohit')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Critdamperc', 'critdamperc', array('class'=>'control-label')); ?>

				<?php echo Form::input('critdamperc', Input::post('critdamperc', isset($combatant_table) ? $combatant_table->critdamperc : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Critdamperc')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Crithealperc', 'crithealperc', array('class'=>'control-label')); ?>

				<?php echo Form::input('crithealperc', Input::post('crithealperc', isset($combatant_table) ? $combatant_table->crithealperc : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Crithealperc')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Threatstr', 'threatstr', array('class'=>'control-label')); ?>

				<?php echo Form::input('threatstr', Input::post('threatstr', isset($combatant_table) ? $combatant_table->threatstr : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Threatstr')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Threatdelta', 'threatdelta', array('class'=>'control-label')); ?>

				<?php echo Form::input('threatdelta', Input::post('threatdelta', isset($combatant_table) ? $combatant_table->threatdelta : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Threatdelta')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Job', 'job', array('class'=>'control-label')); ?>

				<?php echo Form::input('job', Input::post('job', isset($combatant_table) ? $combatant_table->job : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Job')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Parrypct', 'parrypct', array('class'=>'control-label')); ?>

				<?php echo Form::input('parrypct', Input::post('parrypct', isset($combatant_table) ? $combatant_table->parrypct : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Parrypct')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Blockpct', 'blockpct', array('class'=>'control-label')); ?>

				<?php echo Form::input('blockpct', Input::post('blockpct', isset($combatant_table) ? $combatant_table->blockpct : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Blockpct')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Inctohit', 'inctohit', array('class'=>'control-label')); ?>

				<?php echo Form::input('inctohit', Input::post('inctohit', isset($combatant_table) ? $combatant_table->inctohit : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Inctohit')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Overhealpct', 'overhealpct', array('class'=>'control-label')); ?>

				<?php echo Form::input('overhealpct', Input::post('overhealpct', isset($combatant_table) ? $combatant_table->overhealpct : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Overhealpct')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>