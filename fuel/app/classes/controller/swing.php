<?php
class Controller_Swing_Table extends Controller_Template
{

	public function action_index()
	{
		$data['swing_tables'] = Model_Swing_Table::find('all');
		$this->template->title = "Swing_tables";
		$this->template->content = View::forge('swing/table/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('swing/table');

		if ( ! $data['swing_table'] = Model_Swing_Table::find($id))
		{
			Session::set_flash('error', 'Could not find swing_table #'.$id);
			Response::redirect('swing/table');
		}

		$this->template->title = "Swing_table";
		$this->template->content = View::forge('swing/table/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Swing_Table::validate('create');

			if ($val->run())
			{
				$swing_table = Model_Swing_Table::forge(array(
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

				if ($swing_table and $swing_table->save())
				{
					Session::set_flash('success', 'Added swing_table #'.$swing_table->id.'.');

					Response::redirect('swing/table');
				}

				else
				{
					Session::set_flash('error', 'Could not save swing_table.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Swing_Tables";
		$this->template->content = View::forge('swing/table/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('swing/table');

		if ( ! $swing_table = Model_Swing_Table::find($id))
		{
			Session::set_flash('error', 'Could not find swing_table #'.$id);
			Response::redirect('swing/table');
		}

		$val = Model_Swing_Table::validate('edit');

		if ($val->run())
		{
			$swing_table->encid = Input::post('encid');
			$swing_table->stime = Input::post('stime');
			$swing_table->attacker = Input::post('attacker');
			$swing_table->swingtype = Input::post('swingtype');
			$swing_table->attacktype = Input::post('attacktype');
			$swing_table->damagetype = Input::post('damagetype');
			$swing_table->victim = Input::post('victim');
			$swing_table->damage = Input::post('damage');
			$swing_table->damagestring = Input::post('damagestring');
			$swing_table->critical = Input::post('critical');
			$swing_table->special = Input::post('special');
			$swing_table->dmgadjust = Input::post('dmgadjust');
			$swing_table->dmgreduced = Input::post('dmgreduced');
			$swing_table->overheal = Input::post('overheal');

			if ($swing_table->save())
			{
				Session::set_flash('success', 'Updated swing_table #' . $id);

				Response::redirect('swing/table');
			}

			else
			{
				Session::set_flash('error', 'Could not update swing_table #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$swing_table->encid = $val->validated('encid');
				$swing_table->stime = $val->validated('stime');
				$swing_table->attacker = $val->validated('attacker');
				$swing_table->swingtype = $val->validated('swingtype');
				$swing_table->attacktype = $val->validated('attacktype');
				$swing_table->damagetype = $val->validated('damagetype');
				$swing_table->victim = $val->validated('victim');
				$swing_table->damage = $val->validated('damage');
				$swing_table->damagestring = $val->validated('damagestring');
				$swing_table->critical = $val->validated('critical');
				$swing_table->special = $val->validated('special');
				$swing_table->dmgadjust = $val->validated('dmgadjust');
				$swing_table->dmgreduced = $val->validated('dmgreduced');
				$swing_table->overheal = $val->validated('overheal');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('swing_table', $swing_table, false);
		}

		$this->template->title = "Swing_tables";
		$this->template->content = View::forge('swing/table/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('swing/table');

		if ($swing_table = Model_Swing_Table::find($id))
		{
			$swing_table->delete();

			Session::set_flash('success', 'Deleted swing_table #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete swing_table #'.$id);
		}

		Response::redirect('swing/table');

	}

}
