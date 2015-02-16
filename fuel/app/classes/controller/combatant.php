<?php
class Controller_Combatant extends Controller_Template
{

	public function action_index($encid = null)
	{
		is_null($encid) and Response::redirect('encounter/index');

        $data['encid'] = $encid;
        $data['combatant'] = Model_Combatant::find('all', array(
            'where' => array('encid' => $encid),
            'order_by' => array('job' => 'desc'),
        ));
        $this->template->title = Model_Encounter::find('title', array(
            'where' => array('encid' => $encid)
        ));
		$this->template->content = View::forge('combatant/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('combatant');

		if ( ! $data['combatant'] = Model_Combatant::find($id))
		{
			Session::set_flash('error', 'Could not find combatant #'.$id);
			Response::redirect('combatant');
		}

		$this->template->title = "Combatant";
		$this->template->content = View::forge('combatant/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Combatant::validate('create');

			if ($val->run())
			{
				$combatant = Model_Combatant::forge(array(
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

				if ($combatant and $combatant->save())
				{
					Session::set_flash('success', 'Added combatant #'.$combatant->id.'.');

					Response::redirect('combatant');
				}

				else
				{
					Session::set_flash('error', 'Could not save combatant.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Combatant";
		$this->template->content = View::forge('combatant/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('combatant');

		if ( ! $combatant = Model_Combatant::find($id))
		{
			Session::set_flash('error', 'Could not find combatant #'.$id);
			Response::redirect('combatant');
		}

		$val = Model_Combatant::validate('edit');

		if ($val->run())
		{
			$combatant->encid = Input::post('encid');
			$combatant->ally = Input::post('ally');
			$combatant->name = Input::post('name');
			$combatant->starttime = Input::post('starttime');
			$combatant->endtime = Input::post('endtime');
			$combatant->duration = Input::post('duration');
			$combatant->damage = Input::post('damage');
			$combatant->damageperc = Input::post('damageperc');
			$combatant->kills = Input::post('kills');
			$combatant->healed = Input::post('healed');
			$combatant->healedperc = Input::post('healedperc');
			$combatant->critheals = Input::post('critheals');
			$combatant->heals = Input::post('heals');
			$combatant->curedispels = Input::post('curedispels');
			$combatant->powerdrain = Input::post('powerdrain');
			$combatant->powerreplenish = Input::post('powerreplenish');
			$combatant->dps = Input::post('dps');
			$combatant->encdps = Input::post('encdps');
			$combatant->enchps = Input::post('enchps');
			$combatant->hits = Input::post('hits');
			$combatant->crithits = Input::post('crithits');
			$combatant->blocked = Input::post('blocked');
			$combatant->misses = Input::post('misses');
			$combatant->swings = Input::post('swings');
			$combatant->healstaken = Input::post('healstaken');
			$combatant->damagetaken = Input::post('damagetaken');
			$combatant->deaths = Input::post('deaths');
			$combatant->tohit = Input::post('tohit');
			$combatant->critdamperc = Input::post('critdamperc');
			$combatant->crithealperc = Input::post('crithealperc');
			$combatant->threatstr = Input::post('threatstr');
			$combatant->threatdelta = Input::post('threatdelta');
			$combatant->job = Input::post('job');
			$combatant->parrypct = Input::post('parrypct');
			$combatant->blockpct = Input::post('blockpct');
			$combatant->inctohit = Input::post('inctohit');
			$combatant->overhealpct = Input::post('overhealpct');

			if ($combatant->save())
			{
				Session::set_flash('success', 'Updated combatant #' . $id);

				Response::redirect('combatant');
			}

			else
			{
				Session::set_flash('error', 'Could not update combatant #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$combatant->encid = $val->validated('encid');
				$combatant->ally = $val->validated('ally');
				$combatant->name = $val->validated('name');
				$combatant->starttime = $val->validated('starttime');
				$combatant->endtime = $val->validated('endtime');
				$combatant->duration = $val->validated('duration');
				$combatant->damage = $val->validated('damage');
				$combatant->damageperc = $val->validated('damageperc');
				$combatant->kills = $val->validated('kills');
				$combatant->healed = $val->validated('healed');
				$combatant->healedperc = $val->validated('healedperc');
				$combatant->critheals = $val->validated('critheals');
				$combatant->heals = $val->validated('heals');
				$combatant->curedispels = $val->validated('curedispels');
				$combatant->powerdrain = $val->validated('powerdrain');
				$combatant->powerreplenish = $val->validated('powerreplenish');
				$combatant->dps = $val->validated('dps');
				$combatant->encdps = $val->validated('encdps');
				$combatant->enchps = $val->validated('enchps');
				$combatant->hits = $val->validated('hits');
				$combatant->crithits = $val->validated('crithits');
				$combatant->blocked = $val->validated('blocked');
				$combatant->misses = $val->validated('misses');
				$combatant->swings = $val->validated('swings');
				$combatant->healstaken = $val->validated('healstaken');
				$combatant->damagetaken = $val->validated('damagetaken');
				$combatant->deaths = $val->validated('deaths');
				$combatant->tohit = $val->validated('tohit');
				$combatant->critdamperc = $val->validated('critdamperc');
				$combatant->crithealperc = $val->validated('crithealperc');
				$combatant->threatstr = $val->validated('threatstr');
				$combatant->threatdelta = $val->validated('threatdelta');
				$combatant->job = $val->validated('job');
				$combatant->parrypct = $val->validated('parrypct');
				$combatant->blockpct = $val->validated('blockpct');
				$combatant->inctohit = $val->validated('inctohit');
				$combatant->overhealpct = $val->validated('overhealpct');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('combatant', $combatant, false);
		}

		$this->template->title = "Combatant";
		$this->template->content = View::forge('combatant/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('combatant');

		if ($combatant = Model_Combatant::find($id))
		{
			$combatant->delete();

			Session::set_flash('success', 'Deleted combatant #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete combatant #'.$id);
		}

		Response::redirect('combatant');

	}

}
