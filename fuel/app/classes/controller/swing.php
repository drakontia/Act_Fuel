<?php
class Controller_Swing extends Controller_Template
{

	public function action_index()
	{
		$data['swings'] = Model_Swing::find('all');
		$this->template->title = "Swings";
		$this->template->content = View::forge('swing/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('swing');

		if ( ! $data['swing'] = Model_Swing::find($id))
		{
			Session::set_flash('error', 'Could not find swing #'.$id);
			Response::redirect('swing');
		}

		$this->template->title = "Swing";
		$this->template->content = View::forge('swing/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Swing::validate('create');

			if ($val->run())
			{
				$swing = Model_Swing::forge(array(
					'encid' => Input::post('encid'),
					'stime' => Input::post('stime'),
					'attacker' => Input::post('attacker'),
					'swingtype' => Input::post('swingtype'),
					'attacktype' => Input::post('attacktype'),
					'damagetype' => Input::post('damagetype'),
					'victim' => Input::post('victim'),
					'damage' => Input::post('damage'),
					'damagestring' => Input::post('damagestring'),
					'critical' => Input::post('critical'),
					'special' => Input::post('special'),
					'dmgadjust' => Input::post('dmgadjust'),
					'dmgreduced' => Input::post('dmgreduced'),
					'overheal' => Input::post('overheal'),
				));

				if ($swing and $swing->save())
				{
					Session::set_flash('success', 'Added swing #'.$swing->id.'.');

					Response::redirect('swing');
				}

				else
				{
					Session::set_flash('error', 'Could not save swing.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Swing";
		$this->template->content = View::forge('swing/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('swing');

		if ( ! $swing = Model_Swing::find($id))
		{
			Session::set_flash('error', 'Could not find swing #'.$id);
			Response::redirect('swing');
		}

		$val = Model_Swing::validate('edit');

		if ($val->run())
		{
			$swing->encid = Input::post('encid');
			$swing->stime = Input::post('stime');
			$swing->attacker = Input::post('attacker');
			$swing->swingtype = Input::post('swingtype');
			$swing->attacktype = Input::post('attacktype');
			$swing->damagetype = Input::post('damagetype');
			$swing->victim = Input::post('victim');
			$swing->damage = Input::post('damage');
			$swing->damagestring = Input::post('damagestring');
			$swing->critical = Input::post('critical');
			$swing->special = Input::post('special');
			$swing->dmgadjust = Input::post('dmgadjust');
			$swing->dmgreduced = Input::post('dmgreduced');
			$swing->overheal = Input::post('overheal');

			if ($swing->save())
			{
				Session::set_flash('success', 'Updated swing #' . $id);

				Response::redirect('swing');
			}

			else
			{
				Session::set_flash('error', 'Could not update swing #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$swing->encid = $val->validated('encid');
				$swing->stime = $val->validated('stime');
				$swing->attacker = $val->validated('attacker');
				$swing->swingtype = $val->validated('swingtype');
				$swing->attacktype = $val->validated('attacktype');
				$swing->damagetype = $val->validated('damagetype');
				$swing->victim = $val->validated('victim');
				$swing->damage = $val->validated('damage');
				$swing->damagestring = $val->validated('damagestring');
				$swing->critical = $val->validated('critical');
				$swing->special = $val->validated('special');
				$swing->dmgadjust = $val->validated('dmgadjust');
				$swing->dmgreduced = $val->validated('dmgreduced');
				$swing->overheal = $val->validated('overheal');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('swing', $swing, false);
		}

		$this->template->title = "Swings";
		$this->template->content = View::forge('swing/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('swing');

		if ($swing = Model_Swing::find($id))
		{
			$swing->delete();

			Session::set_flash('success', 'Deleted swing #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete swing #'.$id);
		}

		Response::redirect('swing');

	}

}
