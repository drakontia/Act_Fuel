<?php
class Controller_Current extends Controller_Template
{

	public function action_index()
	{
		$data['current'] = Model_Current::find('all');
		$this->template->title = "Current";
		$this->template->content = View::forge('current/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('current');

		if ( ! $data['current'] = Model_Current::find($id))
		{
			Session::set_flash('error', 'Could not find current #'.$id);
			Response::redirect('current');
		}

		$this->template->title = "Current";
		$this->template->content = View::forge('current/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Current::validate('create');

			if ($val->run())
			{
				$current = Model_Current::forge(array(
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

				if ($current and $current->save())
				{
					Session::set_flash('success', 'Added current #'.$current->id.'.');

					Response::redirect('current');
				}

				else
				{
					Session::set_flash('error', 'Could not save current.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Current";
		$this->template->content = View::forge('current/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('current');

		if ( ! $current = Model_Current::find($id))
		{
			Session::set_flash('error', 'Could not find current #'.$id);
			Response::redirect('current');
		}

		$val = Model_Current::validate('edit');

		if ($val->run())
		{
			$current->encid = Input::post('encid');
			$current->ally = Input::post('ally');
			$current->name = Input::post('name');
			$current->starttime = Input::post('starttime');
			$current->endtime = Input::post('endtime');
			$current->duration = Input::post('duration');
			$current->damage = Input::post('damage');
			$current->damageperc = Input::post('damageperc');
			$current->kills = Input::post('kills');
			$current->healed = Input::post('healed');
			$current->healedperc = Input::post('healedperc');
			$current->critheals = Input::post('critheals');
			$current->heals = Input::post('heals');
			$current->curedispels = Input::post('curedispels');
			$current->powerdrain = Input::post('powerdrain');
			$current->powerreplenish = Input::post('powerreplenish');
			$current->dps = Input::post('dps');
			$current->encdps = Input::post('encdps');
			$current->enchps = Input::post('enchps');
			$current->hits = Input::post('hits');
			$current->crithits = Input::post('crithits');
			$current->blocked = Input::post('blocked');
			$current->misses = Input::post('misses');
			$current->swings = Input::post('swings');
			$current->healstaken = Input::post('healstaken');
			$current->damagetaken = Input::post('damagetaken');
			$current->deaths = Input::post('deaths');
			$current->tohit = Input::post('tohit');
			$current->critdamperc = Input::post('critdamperc');
			$current->crithealperc = Input::post('crithealperc');
			$current->threatstr = Input::post('threatstr');
			$current->threatdelta = Input::post('threatdelta');
			$current->job = Input::post('job');
			$current->parrypct = Input::post('parrypct');
			$current->blockpct = Input::post('blockpct');
			$current->inctohit = Input::post('inctohit');
			$current->overhealpct = Input::post('overhealpct');

			if ($current->save())
			{
				Session::set_flash('success', 'Updated current #' . $id);

				Response::redirect('current');
			}

			else
			{
				Session::set_flash('error', 'Could not update current #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$current->encid = $val->validated('encid');
				$current->ally = $val->validated('ally');
				$current->name = $val->validated('name');
				$current->starttime = $val->validated('starttime');
				$current->endtime = $val->validated('endtime');
				$current->duration = $val->validated('duration');
				$current->damage = $val->validated('damage');
				$current->damageperc = $val->validated('damageperc');
				$current->kills = $val->validated('kills');
				$current->healed = $val->validated('healed');
				$current->healedperc = $val->validated('healedperc');
				$current->critheals = $val->validated('critheals');
				$current->heals = $val->validated('heals');
				$current->curedispels = $val->validated('curedispels');
				$current->powerdrain = $val->validated('powerdrain');
				$current->powerreplenish = $val->validated('powerreplenish');
				$current->dps = $val->validated('dps');
				$current->encdps = $val->validated('encdps');
				$current->enchps = $val->validated('enchps');
				$current->hits = $val->validated('hits');
				$current->crithits = $val->validated('crithits');
				$current->blocked = $val->validated('blocked');
				$current->misses = $val->validated('misses');
				$current->swings = $val->validated('swings');
				$current->healstaken = $val->validated('healstaken');
				$current->damagetaken = $val->validated('damagetaken');
				$current->deaths = $val->validated('deaths');
				$current->tohit = $val->validated('tohit');
				$current->critdamperc = $val->validated('critdamperc');
				$current->crithealperc = $val->validated('crithealperc');
				$current->threatstr = $val->validated('threatstr');
				$current->threatdelta = $val->validated('threatdelta');
				$current->job = $val->validated('job');
				$current->parrypct = $val->validated('parrypct');
				$current->blockpct = $val->validated('blockpct');
				$current->inctohit = $val->validated('inctohit');
				$current->overhealpct = $val->validated('overhealpct');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('current', $current, false);
		}

		$this->template->title = "Current";
		$this->template->content = View::forge('current/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('current');

		if ($current = Model_Current::find($id))
		{
			$current->delete();

			Session::set_flash('success', 'Deleted current #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete current #'.$id);
		}

		Response::redirect('current');

	}

}
