<?php
class Controller_Damagetype extends Controller_Template
{

	public function action_index()
	{
		$data['damagetype'] = Model_Damagetype::find('all');
		$this->template->title = "Damagetype";
		$this->template->content = View::forge('damagetype/index', $data);

	}

	public function action_view($encid = null, $name = null)
	{
		(is_null($encid) || is_null($name)) and Response::redirect('combatant/view/'.$encid);

        $data['name'] = html_entity_decode($name);
        if ( ! $data['damagetype'] = Model_Damagetype::find('all', array(
            'where' => array(array('encid' => $encid), array('combatant' => html_entity_decode($name))),
            'order_by' => array('grouping' => 'asc'),
        )))
		{
			Session::set_flash('error', 'Could not find damagetype '.html_entity_decode($name));
			Response::redirect('combatant/index/'.$encid);
		};

        $this->template->title = Model_Encounter::find('first', array(
            'select' => array('zone'),
            'where' => array('encid' => $encid),
        ))->zone;
		$this->template->content = View::forge('damagetype/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Damagetype::validate('create');

			if ($val->run())
			{
				$damagetype = Model_Damagetype::forge(array(
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

				if ($damagetype and $damagetype->save())
				{
					Session::set_flash('success', 'Added damagetype #'.$damagetype->id.'.');

					Response::redirect('damagetype');
				}

				else
				{
					Session::set_flash('error', 'Could not save damagetype.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Damagetype";
		$this->template->content = View::forge('damagetype/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('damagetype');

		if ( ! $damagetype = Model_Damagetype::find($id))
		{
			Session::set_flash('error', 'Could not find damagetype #'.$id);
			Response::redirect('damagetype');
		}

		$val = Model_Damagetype::validate('edit');

		if ($val->run())
		{
			$damagetype->encid = Input::post('encid');
			$damagetype->combatant = Input::post('combatant');
			$damagetype->grouping = Input::post('grouping');
			$damagetype->type = Input::post('type');
			$damagetype->starttime = Input::post('starttime');
			$damagetype->endtime = Input::post('endtime');
			$damagetype->duration = Input::post('duration');
			$damagetype->damage = Input::post('damage');
			$damagetype->encdps = Input::post('encdps');
			$damagetype->chardps = Input::post('chardps');
			$damagetype->dps = Input::post('dps');
			$damagetype->average = Input::post('average');
			$damagetype->median = Input::post('median');
			$damagetype->minhit = Input::post('minhit');
			$damagetype->maxhit = Input::post('maxhit');
			$damagetype->hits = Input::post('hits');
			$damagetype->crithits = Input::post('crithits');
			$damagetype->blocked = Input::post('blocked');
			$damagetype->misses = Input::post('misses');
			$damagetype->swings = Input::post('swings');
			$damagetype->tohit = Input::post('tohit');
			$damagetype->averagedelay = Input::post('averagedelay');
			$damagetype->critperc = Input::post('critperc');
			$damagetype->parrypct = Input::post('parrypct');
			$damagetype->blockpct = Input::post('blockpct');
			$damagetype->overheal = Input::post('overheal');

			if ($damagetype->save())
			{
				Session::set_flash('success', 'Updated damagetype #' . $id);

				Response::redirect('damagetype');
			}

			else
			{
				Session::set_flash('error', 'Could not update damagetype #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$damagetype->encid = $val->validated('encid');
				$damagetype->combatant = $val->validated('combatant');
				$damagetype->grouping = $val->validated('grouping');
				$damagetype->type = $val->validated('type');
				$damagetype->starttime = $val->validated('starttime');
				$damagetype->endtime = $val->validated('endtime');
				$damagetype->duration = $val->validated('duration');
				$damagetype->damage = $val->validated('damage');
				$damagetype->encdps = $val->validated('encdps');
				$damagetype->chardps = $val->validated('chardps');
				$damagetype->dps = $val->validated('dps');
				$damagetype->average = $val->validated('average');
				$damagetype->median = $val->validated('median');
				$damagetype->minhit = $val->validated('minhit');
				$damagetype->maxhit = $val->validated('maxhit');
				$damagetype->hits = $val->validated('hits');
				$damagetype->crithits = $val->validated('crithits');
				$damagetype->blocked = $val->validated('blocked');
				$damagetype->misses = $val->validated('misses');
				$damagetype->swings = $val->validated('swings');
				$damagetype->tohit = $val->validated('tohit');
				$damagetype->averagedelay = $val->validated('averagedelay');
				$damagetype->critperc = $val->validated('critperc');
				$damagetype->parrypct = $val->validated('parrypct');
				$damagetype->blockpct = $val->validated('blockpct');
				$damagetype->overheal = $val->validated('overheal');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('damagetype', $damagetype, false);
		}

		$this->template->title = "Damagetype";
		$this->template->content = View::forge('damagetype/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('damagetype');

		if ($damagetype = Model_Damagetype::find($id))
		{
			$damagetype->delete();

			Session::set_flash('success', 'Deleted damagetype #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete damagetype #'.$id);
		}

		Response::redirect('damagetype');

	}

}
