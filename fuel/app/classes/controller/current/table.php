<?php
class Controller_Current_Table extends Controller_Template
{

	public function action_index()
	{
		$data['current_tables'] = Model_Current_Table::find('all');
		$this->template->title = "Current_tables";
		$this->template->content = View::forge('current/table/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('current/table');

		if ( ! $data['current_table'] = Model_Current_Table::find($id))
		{
			Session::set_flash('error', 'Could not find current_table #'.$id);
			Response::redirect('current/table');
		}

		$this->template->title = "Current_table";
		$this->template->content = View::forge('current/table/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Current_Table::validate('create');

			if ($val->run())
			{
				$current_table = Model_Current_Table::forge(array(
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

				if ($current_table and $current_table->save())
				{
					Session::set_flash('success', 'Added current_table #'.$current_table->id.'.');

					Response::redirect('current/table');
				}

				else
				{
					Session::set_flash('error', 'Could not save current_table.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Current_Tables";
		$this->template->content = View::forge('current/table/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('current/table');

		if ( ! $current_table = Model_Current_Table::find($id))
		{
			Session::set_flash('error', 'Could not find current_table #'.$id);
			Response::redirect('current/table');
		}

		$val = Model_Current_Table::validate('edit');

		if ($val->run())
		{
			$current_table->encid = Input::post('encid');
			$current_table->ally = Input::post('ally');
			$current_table->name = Input::post('name');
			$current_table->starttime = Input::post('starttime');
			$current_table->endtime = Input::post('endtime');
			$current_table->duration = Input::post('duration');
			$current_table->damage = Input::post('damage');
			$current_table->damageperc = Input::post('damageperc');
			$current_table->kills = Input::post('kills');
			$current_table->healed = Input::post('healed');
			$current_table->healedperc = Input::post('healedperc');
			$current_table->critheals = Input::post('critheals');
			$current_table->heals = Input::post('heals');
			$current_table->curedispels = Input::post('curedispels');
			$current_table->powerdrain = Input::post('powerdrain');
			$current_table->powerreplenish = Input::post('powerreplenish');
			$current_table->dps = Input::post('dps');
			$current_table->encdps = Input::post('encdps');
			$current_table->enchps = Input::post('enchps');
			$current_table->hits = Input::post('hits');
			$current_table->crithits = Input::post('crithits');
			$current_table->blocked = Input::post('blocked');
			$current_table->misses = Input::post('misses');
			$current_table->swings = Input::post('swings');
			$current_table->healstaken = Input::post('healstaken');
			$current_table->damagetaken = Input::post('damagetaken');
			$current_table->deaths = Input::post('deaths');
			$current_table->tohit = Input::post('tohit');
			$current_table->critdamperc = Input::post('critdamperc');
			$current_table->crithealperc = Input::post('crithealperc');
			$current_table->threatstr = Input::post('threatstr');
			$current_table->threatdelta = Input::post('threatdelta');
			$current_table->job = Input::post('job');
			$current_table->parrypct = Input::post('parrypct');
			$current_table->blockpct = Input::post('blockpct');
			$current_table->inctohit = Input::post('inctohit');
			$current_table->overhealpct = Input::post('overhealpct');

			if ($current_table->save())
			{
				Session::set_flash('success', 'Updated current_table #' . $id);

				Response::redirect('current/table');
			}

			else
			{
				Session::set_flash('error', 'Could not update current_table #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$current_table->encid = $val->validated('encid');
				$current_table->ally = $val->validated('ally');
				$current_table->name = $val->validated('name');
				$current_table->starttime = $val->validated('starttime');
				$current_table->endtime = $val->validated('endtime');
				$current_table->duration = $val->validated('duration');
				$current_table->damage = $val->validated('damage');
				$current_table->damageperc = $val->validated('damageperc');
				$current_table->kills = $val->validated('kills');
				$current_table->healed = $val->validated('healed');
				$current_table->healedperc = $val->validated('healedperc');
				$current_table->critheals = $val->validated('critheals');
				$current_table->heals = $val->validated('heals');
				$current_table->curedispels = $val->validated('curedispels');
				$current_table->powerdrain = $val->validated('powerdrain');
				$current_table->powerreplenish = $val->validated('powerreplenish');
				$current_table->dps = $val->validated('dps');
				$current_table->encdps = $val->validated('encdps');
				$current_table->enchps = $val->validated('enchps');
				$current_table->hits = $val->validated('hits');
				$current_table->crithits = $val->validated('crithits');
				$current_table->blocked = $val->validated('blocked');
				$current_table->misses = $val->validated('misses');
				$current_table->swings = $val->validated('swings');
				$current_table->healstaken = $val->validated('healstaken');
				$current_table->damagetaken = $val->validated('damagetaken');
				$current_table->deaths = $val->validated('deaths');
				$current_table->tohit = $val->validated('tohit');
				$current_table->critdamperc = $val->validated('critdamperc');
				$current_table->crithealperc = $val->validated('crithealperc');
				$current_table->threatstr = $val->validated('threatstr');
				$current_table->threatdelta = $val->validated('threatdelta');
				$current_table->job = $val->validated('job');
				$current_table->parrypct = $val->validated('parrypct');
				$current_table->blockpct = $val->validated('blockpct');
				$current_table->inctohit = $val->validated('inctohit');
				$current_table->overhealpct = $val->validated('overhealpct');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('current_table', $current_table, false);
		}

		$this->template->title = "Current_tables";
		$this->template->content = View::forge('current/table/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('current/table');

		if ($current_table = Model_Current_Table::find($id))
		{
			$current_table->delete();

			Session::set_flash('success', 'Deleted current_table #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete current_table #'.$id);
		}

		Response::redirect('current/table');

	}

}
