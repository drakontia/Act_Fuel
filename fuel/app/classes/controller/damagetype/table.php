<?php
class Controller_Damagetype_Table extends Controller_Template
{

	public function action_index()
	{
		$data['damagetype_tables'] = Model_Damagetype_Table::find('all');
		$this->template->title = "Damagetype_tables";
		$this->template->content = View::forge('damagetype/table/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('damagetype/table');

		if ( ! $data['damagetype_table'] = Model_Damagetype_Table::find($id))
		{
			Session::set_flash('error', 'Could not find damagetype_table #'.$id);
			Response::redirect('damagetype/table');
		}

		$this->template->title = "Damagetype_table";
		$this->template->content = View::forge('damagetype/table/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Damagetype_Table::validate('create');

			if ($val->run())
			{
				$damagetype_table = Model_Damagetype_Table::forge(array(
					'encid' => Input::post('encid'),
					'combatant' => Input::post('combatant'),
					'grouping' => Input::post('grouping'),
					'type' => Input::post('type'),
					'starttime' => Input::post('starttime'),
					'endtime' => Input::post('endtime'),
					'duration' => Input::post('duration'),
					'damage' => Input::post('damage'),
					'encdps' => Input::post('encdps'),
					'chardps' => Input::post('chardps'),
					'dps' => Input::post('dps'),
					'average' => Input::post('average'),
					'median' => Input::post('median'),
					'minhit' => Input::post('minhit'),
					'maxhit' => Input::post('maxhit'),
					'hits' => Input::post('hits'),
					'crithits' => Input::post('crithits'),
					'blocked' => Input::post('blocked'),
					'misses' => Input::post('misses'),
					'swings' => Input::post('swings'),
					'tohit' => Input::post('tohit'),
					'averagedelay' => Input::post('averagedelay'),
					'critperc' => Input::post('critperc'),
					'parrypct' => Input::post('parrypct'),
					'blockpct' => Input::post('blockpct'),
					'overheal' => Input::post('overheal'),
				));

				if ($damagetype_table and $damagetype_table->save())
				{
					Session::set_flash('success', 'Added damagetype_table #'.$damagetype_table->id.'.');

					Response::redirect('damagetype/table');
				}

				else
				{
					Session::set_flash('error', 'Could not save damagetype_table.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Damagetype_Tables";
		$this->template->content = View::forge('damagetype/table/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('damagetype/table');

		if ( ! $damagetype_table = Model_Damagetype_Table::find($id))
		{
			Session::set_flash('error', 'Could not find damagetype_table #'.$id);
			Response::redirect('damagetype/table');
		}

		$val = Model_Damagetype_Table::validate('edit');

		if ($val->run())
		{
			$damagetype_table->encid = Input::post('encid');
			$damagetype_table->combatant = Input::post('combatant');
			$damagetype_table->grouping = Input::post('grouping');
			$damagetype_table->type = Input::post('type');
			$damagetype_table->starttime = Input::post('starttime');
			$damagetype_table->endtime = Input::post('endtime');
			$damagetype_table->duration = Input::post('duration');
			$damagetype_table->damage = Input::post('damage');
			$damagetype_table->encdps = Input::post('encdps');
			$damagetype_table->chardps = Input::post('chardps');
			$damagetype_table->dps = Input::post('dps');
			$damagetype_table->average = Input::post('average');
			$damagetype_table->median = Input::post('median');
			$damagetype_table->minhit = Input::post('minhit');
			$damagetype_table->maxhit = Input::post('maxhit');
			$damagetype_table->hits = Input::post('hits');
			$damagetype_table->crithits = Input::post('crithits');
			$damagetype_table->blocked = Input::post('blocked');
			$damagetype_table->misses = Input::post('misses');
			$damagetype_table->swings = Input::post('swings');
			$damagetype_table->tohit = Input::post('tohit');
			$damagetype_table->averagedelay = Input::post('averagedelay');
			$damagetype_table->critperc = Input::post('critperc');
			$damagetype_table->parrypct = Input::post('parrypct');
			$damagetype_table->blockpct = Input::post('blockpct');
			$damagetype_table->overheal = Input::post('overheal');

			if ($damagetype_table->save())
			{
				Session::set_flash('success', 'Updated damagetype_table #' . $id);

				Response::redirect('damagetype/table');
			}

			else
			{
				Session::set_flash('error', 'Could not update damagetype_table #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$damagetype_table->encid = $val->validated('encid');
				$damagetype_table->combatant = $val->validated('combatant');
				$damagetype_table->grouping = $val->validated('grouping');
				$damagetype_table->type = $val->validated('type');
				$damagetype_table->starttime = $val->validated('starttime');
				$damagetype_table->endtime = $val->validated('endtime');
				$damagetype_table->duration = $val->validated('duration');
				$damagetype_table->damage = $val->validated('damage');
				$damagetype_table->encdps = $val->validated('encdps');
				$damagetype_table->chardps = $val->validated('chardps');
				$damagetype_table->dps = $val->validated('dps');
				$damagetype_table->average = $val->validated('average');
				$damagetype_table->median = $val->validated('median');
				$damagetype_table->minhit = $val->validated('minhit');
				$damagetype_table->maxhit = $val->validated('maxhit');
				$damagetype_table->hits = $val->validated('hits');
				$damagetype_table->crithits = $val->validated('crithits');
				$damagetype_table->blocked = $val->validated('blocked');
				$damagetype_table->misses = $val->validated('misses');
				$damagetype_table->swings = $val->validated('swings');
				$damagetype_table->tohit = $val->validated('tohit');
				$damagetype_table->averagedelay = $val->validated('averagedelay');
				$damagetype_table->critperc = $val->validated('critperc');
				$damagetype_table->parrypct = $val->validated('parrypct');
				$damagetype_table->blockpct = $val->validated('blockpct');
				$damagetype_table->overheal = $val->validated('overheal');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('damagetype_table', $damagetype_table, false);
		}

		$this->template->title = "Damagetype_tables";
		$this->template->content = View::forge('damagetype/table/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('damagetype/table');

		if ($damagetype_table = Model_Damagetype_Table::find($id))
		{
			$damagetype_table->delete();

			Session::set_flash('success', 'Deleted damagetype_table #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete damagetype_table #'.$id);
		}

		Response::redirect('damagetype/table');

	}

}
