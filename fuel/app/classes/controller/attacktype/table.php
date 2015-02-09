<?php
class Controller_Attacktype_Table extends Controller_Template
{

	public function action_index()
	{
		$data['attacktype_tables'] = Model_Attacktype_Table::find('all');
		$this->template->title = "Attacktype_tables";
		$this->template->content = View::forge('attacktype/table/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('attacktype/table');

		if ( ! $data['attacktype_table'] = Model_Attacktype_Table::find($id))
		{
			Session::set_flash('error', 'Could not find attacktype_table #'.$id);
			Response::redirect('attacktype/table');
		}

		$this->template->title = "Attacktype_table";
		$this->template->content = View::forge('attacktype/table/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Attacktype_Table::validate('create');

			if ($val->run())
			{
				$attacktype_table = Model_Attacktype_Table::forge(array(
					'encid' => Input::post('encid'),
					'attacker' => Input::post('attacker'),
					'victim' => Input::post('victim'),
					'swingtype' => Input::post('swingtype'),
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
					'resist' => Input::post('resist'),
					'hits' => Input::post('hits'),
					'crithits' => Input::post('crithits'),
					'blocked' => Input::post('blocked'),
					'misses' => Input::post('misses'),
					'swings' => Input::post('swings'),
					'tohit' => Input::post('tohit'),
					'averagedelay' => Input::post('averagedelay'),
					'critperc' => Input::post('critperc'),
					'parry' => Input::post('parry'),
					'parrypct' => Input::post('parrypct'),
					'block' => Input::post('block'),
					'blockpct' => Input::post('blockpct'),
					'dmgreduced' => Input::post('dmgreduced'),
					'overheal' => Input::post('overheal'),
				));

				if ($attacktype_table and $attacktype_table->save())
				{
					Session::set_flash('success', 'Added attacktype_table #'.$attacktype_table->id.'.');

					Response::redirect('attacktype/table');
				}

				else
				{
					Session::set_flash('error', 'Could not save attacktype_table.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Attacktype_Tables";
		$this->template->content = View::forge('attacktype/table/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('attacktype/table');

		if ( ! $attacktype_table = Model_Attacktype_Table::find($id))
		{
			Session::set_flash('error', 'Could not find attacktype_table #'.$id);
			Response::redirect('attacktype/table');
		}

		$val = Model_Attacktype_Table::validate('edit');

		if ($val->run())
		{
			$attacktype_table->encid = Input::post('encid');
			$attacktype_table->attacker = Input::post('attacker');
			$attacktype_table->victim = Input::post('victim');
			$attacktype_table->swingtype = Input::post('swingtype');
			$attacktype_table->type = Input::post('type');
			$attacktype_table->starttime = Input::post('starttime');
			$attacktype_table->endtime = Input::post('endtime');
			$attacktype_table->duration = Input::post('duration');
			$attacktype_table->damage = Input::post('damage');
			$attacktype_table->encdps = Input::post('encdps');
			$attacktype_table->chardps = Input::post('chardps');
			$attacktype_table->dps = Input::post('dps');
			$attacktype_table->average = Input::post('average');
			$attacktype_table->median = Input::post('median');
			$attacktype_table->minhit = Input::post('minhit');
			$attacktype_table->maxhit = Input::post('maxhit');
			$attacktype_table->resist = Input::post('resist');
			$attacktype_table->hits = Input::post('hits');
			$attacktype_table->crithits = Input::post('crithits');
			$attacktype_table->blocked = Input::post('blocked');
			$attacktype_table->misses = Input::post('misses');
			$attacktype_table->swings = Input::post('swings');
			$attacktype_table->tohit = Input::post('tohit');
			$attacktype_table->averagedelay = Input::post('averagedelay');
			$attacktype_table->critperc = Input::post('critperc');
			$attacktype_table->parry = Input::post('parry');
			$attacktype_table->parrypct = Input::post('parrypct');
			$attacktype_table->block = Input::post('block');
			$attacktype_table->blockpct = Input::post('blockpct');
			$attacktype_table->dmgreduced = Input::post('dmgreduced');
			$attacktype_table->overheal = Input::post('overheal');

			if ($attacktype_table->save())
			{
				Session::set_flash('success', 'Updated attacktype_table #' . $id);

				Response::redirect('attacktype/table');
			}

			else
			{
				Session::set_flash('error', 'Could not update attacktype_table #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$attacktype_table->encid = $val->validated('encid');
				$attacktype_table->attacker = $val->validated('attacker');
				$attacktype_table->victim = $val->validated('victim');
				$attacktype_table->swingtype = $val->validated('swingtype');
				$attacktype_table->type = $val->validated('type');
				$attacktype_table->starttime = $val->validated('starttime');
				$attacktype_table->endtime = $val->validated('endtime');
				$attacktype_table->duration = $val->validated('duration');
				$attacktype_table->damage = $val->validated('damage');
				$attacktype_table->encdps = $val->validated('encdps');
				$attacktype_table->chardps = $val->validated('chardps');
				$attacktype_table->dps = $val->validated('dps');
				$attacktype_table->average = $val->validated('average');
				$attacktype_table->median = $val->validated('median');
				$attacktype_table->minhit = $val->validated('minhit');
				$attacktype_table->maxhit = $val->validated('maxhit');
				$attacktype_table->resist = $val->validated('resist');
				$attacktype_table->hits = $val->validated('hits');
				$attacktype_table->crithits = $val->validated('crithits');
				$attacktype_table->blocked = $val->validated('blocked');
				$attacktype_table->misses = $val->validated('misses');
				$attacktype_table->swings = $val->validated('swings');
				$attacktype_table->tohit = $val->validated('tohit');
				$attacktype_table->averagedelay = $val->validated('averagedelay');
				$attacktype_table->critperc = $val->validated('critperc');
				$attacktype_table->parry = $val->validated('parry');
				$attacktype_table->parrypct = $val->validated('parrypct');
				$attacktype_table->block = $val->validated('block');
				$attacktype_table->blockpct = $val->validated('blockpct');
				$attacktype_table->dmgreduced = $val->validated('dmgreduced');
				$attacktype_table->overheal = $val->validated('overheal');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('attacktype_table', $attacktype_table, false);
		}

		$this->template->title = "Attacktype_tables";
		$this->template->content = View::forge('attacktype/table/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('attacktype/table');

		if ($attacktype_table = Model_Attacktype_Table::find($id))
		{
			$attacktype_table->delete();

			Session::set_flash('success', 'Deleted attacktype_table #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete attacktype_table #'.$id);
		}

		Response::redirect('attacktype/table');

	}

}
