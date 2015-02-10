<?php
class Controller_Attacktype extends Controller_Template
{

	public function action_index()
	{
		$data['attacktype'] = Model_Attacktype::find('all');
		$this->template->title = "Attacktype";
		$this->template->content = View::forge('attacktype/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('attacktype');

		if ( ! $data['attacktype'] = Model_Attacktype::find($id))
		{
			Session::set_flash('error', 'Could not find attacktype #'.$id);
			Response::redirect('attacktype');
		}

		$this->template->title = "Attacktype";
		$this->template->content = View::forge('attacktype/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Attacktype::validate('create');

			if ($val->run())
			{
				$attacktype = Model_Attacktype::forge(array(
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

				if ($attacktype and $attacktype->save())
				{
					Session::set_flash('success', 'Added attacktype #'.$attacktype->id.'.');

					Response::redirect('attacktype');
				}

				else
				{
					Session::set_flash('error', 'Could not save attacktype.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Attacktype";
		$this->template->content = View::forge('attacktype/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('attacktype');

		if ( ! $attacktype = Model_Attacktype::find($id))
		{
			Session::set_flash('error', 'Could not find attacktype #'.$id);
			Response::redirect('attacktype');
		}

		$val = Model_Attacktype::validate('edit');

		if ($val->run())
		{
			$attacktype->encid = Input::post('encid');
			$attacktype->attacker = Input::post('attacker');
			$attacktype->victim = Input::post('victim');
			$attacktype->swingtype = Input::post('swingtype');
			$attacktype->type = Input::post('type');
			$attacktype->starttime = Input::post('starttime');
			$attacktype->endtime = Input::post('endtime');
			$attacktype->duration = Input::post('duration');
			$attacktype->damage = Input::post('damage');
			$attacktype->encdps = Input::post('encdps');
			$attacktype->chardps = Input::post('chardps');
			$attacktype->dps = Input::post('dps');
			$attacktype->average = Input::post('average');
			$attacktype->median = Input::post('median');
			$attacktype->minhit = Input::post('minhit');
			$attacktype->maxhit = Input::post('maxhit');
			$attacktype->resist = Input::post('resist');
			$attacktype->hits = Input::post('hits');
			$attacktype->crithits = Input::post('crithits');
			$attacktype->blocked = Input::post('blocked');
			$attacktype->misses = Input::post('misses');
			$attacktype->swings = Input::post('swings');
			$attacktype->tohit = Input::post('tohit');
			$attacktype->averagedelay = Input::post('averagedelay');
			$attacktype->critperc = Input::post('critperc');
			$attacktype->parry = Input::post('parry');
			$attacktype->parrypct = Input::post('parrypct');
			$attacktype->block = Input::post('block');
			$attacktype->blockpct = Input::post('blockpct');
			$attacktype->dmgreduced = Input::post('dmgreduced');
			$attacktype->overheal = Input::post('overheal');

			if ($attacktype->save())
			{
				Session::set_flash('success', 'Updated attacktype #' . $id);

				Response::redirect('attacktype');
			}

			else
			{
				Session::set_flash('error', 'Could not update attacktype #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$attacktype->encid = $val->validated('encid');
				$attacktype->attacker = $val->validated('attacker');
				$attacktype->victim = $val->validated('victim');
				$attacktype->swingtype = $val->validated('swingtype');
				$attacktype->type = $val->validated('type');
				$attacktype->starttime = $val->validated('starttime');
				$attacktype->endtime = $val->validated('endtime');
				$attacktype->duration = $val->validated('duration');
				$attacktype->damage = $val->validated('damage');
				$attacktype->encdps = $val->validated('encdps');
				$attacktype->chardps = $val->validated('chardps');
				$attacktype->dps = $val->validated('dps');
				$attacktype->average = $val->validated('average');
				$attacktype->median = $val->validated('median');
				$attacktype->minhit = $val->validated('minhit');
				$attacktype->maxhit = $val->validated('maxhit');
				$attacktype->resist = $val->validated('resist');
				$attacktype->hits = $val->validated('hits');
				$attacktype->crithits = $val->validated('crithits');
				$attacktype->blocked = $val->validated('blocked');
				$attacktype->misses = $val->validated('misses');
				$attacktype->swings = $val->validated('swings');
				$attacktype->tohit = $val->validated('tohit');
				$attacktype->averagedelay = $val->validated('averagedelay');
				$attacktype->critperc = $val->validated('critperc');
				$attacktype->parry = $val->validated('parry');
				$attacktype->parrypct = $val->validated('parrypct');
				$attacktype->block = $val->validated('block');
				$attacktype->blockpct = $val->validated('blockpct');
				$attacktype->dmgreduced = $val->validated('dmgreduced');
				$attacktype->overheal = $val->validated('overheal');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('attacktype', $attacktype, false);
		}

		$this->template->title = "Attacktype";
		$this->template->content = View::forge('attacktype/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('attacktype');

		if ($attacktype = Model_Attacktype::find($id))
		{
			$attacktype->delete();

			Session::set_flash('success', 'Deleted attacktype #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete attacktype #'.$id);
		}

		Response::redirect('attacktype');

	}

}
