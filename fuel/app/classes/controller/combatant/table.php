<?php
class Controller_Combatant_Table extends Controller_Template
{

	public function action_index()
	{
		$data['combatant_tables'] = Model_Combatant_Table::find('all');
		$this->template->title = "Combatant_tables";
		$this->template->content = View::forge('combatant/table/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('combatant/table');

		if ( ! $data['combatant_table'] = Model_Combatant_Table::find($id))
		{
			Session::set_flash('error', 'Could not find combatant_table #'.$id);
			Response::redirect('combatant/table');
		}

		$this->template->title = "Combatant_table";
		$this->template->content = View::forge('combatant/table/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Combatant_Table::validate('create');

			if ($val->run())
			{
				$combatant_table = Model_Combatant_Table::forge(array(
					'encid' => Input::post('encid'),
					'ally' => Input::post('ally'),
					'name' => Input::post('name'),
					'starttime' => Input::post('starttime'),
					'endtime' => Input::post('endtime'),
					'duration' => Input::post('duration'),
					'damage' => Input::post('damage'),
					'damageperc' => Input::post('damageperc'),
					'kills' => Input::post('kills'),
					'healed' => Input::post('healed'),
					'healedperc' => Input::post('healedperc'),
					'critheals' => Input::post('critheals'),
					'heals' => Input::post('heals'),
					'curedispels' => Input::post('curedispels'),
					'powerdrain' => Input::post('powerdrain'),
					'powerreplenish' => Input::post('powerreplenish'),
					'dps' => Input::post('dps'),
					'encdps' => Input::post('encdps'),
					'enchps' => Input::post('enchps'),
					'hits' => Input::post('hits'),
					'crithits' => Input::post('crithits'),
					'blocked' => Input::post('blocked'),
					'misses' => Input::post('misses'),
					'swings' => Input::post('swings'),
					'healstaken' => Input::post('healstaken'),
					'damagetaken' => Input::post('damagetaken'),
					'deaths' => Input::post('deaths'),
					'tohit' => Input::post('tohit'),
					'critdamperc' => Input::post('critdamperc'),
					'crithealperc' => Input::post('crithealperc'),
					'threatstr' => Input::post('threatstr'),
					'threatdelta' => Input::post('threatdelta'),
					'job' => Input::post('job'),
					'parrypct' => Input::post('parrypct'),
					'blockpct' => Input::post('blockpct'),
					'inctohit' => Input::post('inctohit'),
					'overhealpct' => Input::post('overhealpct'),
				));

				if ($combatant_table and $combatant_table->save())
				{
					Session::set_flash('success', 'Added combatant_table #'.$combatant_table->id.'.');

					Response::redirect('combatant/table');
				}

				else
				{
					Session::set_flash('error', 'Could not save combatant_table.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Combatant_Tables";
		$this->template->content = View::forge('combatant/table/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('combatant/table');

		if ( ! $combatant_table = Model_Combatant_Table::find($id))
		{
			Session::set_flash('error', 'Could not find combatant_table #'.$id);
			Response::redirect('combatant/table');
		}

		$val = Model_Combatant_Table::validate('edit');

		if ($val->run())
		{
			$combatant_table->encid = Input::post('encid');
			$combatant_table->ally = Input::post('ally');
			$combatant_table->name = Input::post('name');
			$combatant_table->starttime = Input::post('starttime');
			$combatant_table->endtime = Input::post('endtime');
			$combatant_table->duration = Input::post('duration');
			$combatant_table->damage = Input::post('damage');
			$combatant_table->damageperc = Input::post('damageperc');
			$combatant_table->kills = Input::post('kills');
			$combatant_table->healed = Input::post('healed');
			$combatant_table->healedperc = Input::post('healedperc');
			$combatant_table->critheals = Input::post('critheals');
			$combatant_table->heals = Input::post('heals');
			$combatant_table->curedispels = Input::post('curedispels');
			$combatant_table->powerdrain = Input::post('powerdrain');
			$combatant_table->powerreplenish = Input::post('powerreplenish');
			$combatant_table->dps = Input::post('dps');
			$combatant_table->encdps = Input::post('encdps');
			$combatant_table->enchps = Input::post('enchps');
			$combatant_table->hits = Input::post('hits');
			$combatant_table->crithits = Input::post('crithits');
			$combatant_table->blocked = Input::post('blocked');
			$combatant_table->misses = Input::post('misses');
			$combatant_table->swings = Input::post('swings');
			$combatant_table->healstaken = Input::post('healstaken');
			$combatant_table->damagetaken = Input::post('damagetaken');
			$combatant_table->deaths = Input::post('deaths');
			$combatant_table->tohit = Input::post('tohit');
			$combatant_table->critdamperc = Input::post('critdamperc');
			$combatant_table->crithealperc = Input::post('crithealperc');
			$combatant_table->threatstr = Input::post('threatstr');
			$combatant_table->threatdelta = Input::post('threatdelta');
			$combatant_table->job = Input::post('job');
			$combatant_table->parrypct = Input::post('parrypct');
			$combatant_table->blockpct = Input::post('blockpct');
			$combatant_table->inctohit = Input::post('inctohit');
			$combatant_table->overhealpct = Input::post('overhealpct');

			if ($combatant_table->save())
			{
				Session::set_flash('success', 'Updated combatant_table #' . $id);

				Response::redirect('combatant/table');
			}

			else
			{
				Session::set_flash('error', 'Could not update combatant_table #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$combatant_table->encid = $val->validated('encid');
				$combatant_table->ally = $val->validated('ally');
				$combatant_table->name = $val->validated('name');
				$combatant_table->starttime = $val->validated('starttime');
				$combatant_table->endtime = $val->validated('endtime');
				$combatant_table->duration = $val->validated('duration');
				$combatant_table->damage = $val->validated('damage');
				$combatant_table->damageperc = $val->validated('damageperc');
				$combatant_table->kills = $val->validated('kills');
				$combatant_table->healed = $val->validated('healed');
				$combatant_table->healedperc = $val->validated('healedperc');
				$combatant_table->critheals = $val->validated('critheals');
				$combatant_table->heals = $val->validated('heals');
				$combatant_table->curedispels = $val->validated('curedispels');
				$combatant_table->powerdrain = $val->validated('powerdrain');
				$combatant_table->powerreplenish = $val->validated('powerreplenish');
				$combatant_table->dps = $val->validated('dps');
				$combatant_table->encdps = $val->validated('encdps');
				$combatant_table->enchps = $val->validated('enchps');
				$combatant_table->hits = $val->validated('hits');
				$combatant_table->crithits = $val->validated('crithits');
				$combatant_table->blocked = $val->validated('blocked');
				$combatant_table->misses = $val->validated('misses');
				$combatant_table->swings = $val->validated('swings');
				$combatant_table->healstaken = $val->validated('healstaken');
				$combatant_table->damagetaken = $val->validated('damagetaken');
				$combatant_table->deaths = $val->validated('deaths');
				$combatant_table->tohit = $val->validated('tohit');
				$combatant_table->critdamperc = $val->validated('critdamperc');
				$combatant_table->crithealperc = $val->validated('crithealperc');
				$combatant_table->threatstr = $val->validated('threatstr');
				$combatant_table->threatdelta = $val->validated('threatdelta');
				$combatant_table->job = $val->validated('job');
				$combatant_table->parrypct = $val->validated('parrypct');
				$combatant_table->blockpct = $val->validated('blockpct');
				$combatant_table->inctohit = $val->validated('inctohit');
				$combatant_table->overhealpct = $val->validated('overhealpct');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('combatant_table', $combatant_table, false);
		}

		$this->template->title = "Combatant_tables";
		$this->template->content = View::forge('combatant/table/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('combatant/table');

		if ($combatant_table = Model_Combatant_Table::find($id))
		{
			$combatant_table->delete();

			Session::set_flash('success', 'Deleted combatant_table #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete combatant_table #'.$id);
		}

		Response::redirect('combatant/table');

	}

}
