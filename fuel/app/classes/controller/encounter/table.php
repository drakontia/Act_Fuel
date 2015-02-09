<?php
class Controller_Encounter_Table extends Controller_Template
{

	public function action_index()
	{
		$data['encounter_tables'] = Model_Encounter_Table::find('all');
		$this->template->title = "Encounter_tables";
		$this->template->content = View::forge('encounter/table/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('encounter/table');

		if ( ! $data['encounter_table'] = Model_Encounter_Table::find($id))
		{
			Session::set_flash('error', 'Could not find encounter_table #'.$id);
			Response::redirect('encounter/table');
		}

		$this->template->title = "Encounter_table";
		$this->template->content = View::forge('encounter/table/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Encounter_Table::validate('create');

			if ($val->run())
			{
				$encounter_table = Model_Encounter_Table::forge(array(
					'encid' => Input::post('encid'),
					'title' => Input::post('title'),
					'starttime' => Input::post('starttime'),
					'endtime' => Input::post('endtime'),
					'duration' => Input::post('duration'),
					'damage' => Input::post('damage'),
					'encdps' => Input::post('encdps'),
					'zone' => Input::post('zone'),
					'kills' => Input::post('kills'),
					'deaths' => Input::post('deaths'),
				));

				if ($encounter_table and $encounter_table->save())
				{
					Session::set_flash('success', 'Added encounter_table #'.$encounter_table->id.'.');

					Response::redirect('encounter/table');
				}

				else
				{
					Session::set_flash('error', 'Could not save encounter_table.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Encounter_Tables";
		$this->template->content = View::forge('encounter/table/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('encounter/table');

		if ( ! $encounter_table = Model_Encounter_Table::find($id))
		{
			Session::set_flash('error', 'Could not find encounter_table #'.$id);
			Response::redirect('encounter/table');
		}

		$val = Model_Encounter_Table::validate('edit');

		if ($val->run())
		{
			$encounter_table->encid = Input::post('encid');
			$encounter_table->title = Input::post('title');
			$encounter_table->starttime = Input::post('starttime');
			$encounter_table->endtime = Input::post('endtime');
			$encounter_table->duration = Input::post('duration');
			$encounter_table->damage = Input::post('damage');
			$encounter_table->encdps = Input::post('encdps');
			$encounter_table->zone = Input::post('zone');
			$encounter_table->kills = Input::post('kills');
			$encounter_table->deaths = Input::post('deaths');

			if ($encounter_table->save())
			{
				Session::set_flash('success', 'Updated encounter_table #' . $id);

				Response::redirect('encounter/table');
			}

			else
			{
				Session::set_flash('error', 'Could not update encounter_table #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$encounter_table->encid = $val->validated('encid');
				$encounter_table->title = $val->validated('title');
				$encounter_table->starttime = $val->validated('starttime');
				$encounter_table->endtime = $val->validated('endtime');
				$encounter_table->duration = $val->validated('duration');
				$encounter_table->damage = $val->validated('damage');
				$encounter_table->encdps = $val->validated('encdps');
				$encounter_table->zone = $val->validated('zone');
				$encounter_table->kills = $val->validated('kills');
				$encounter_table->deaths = $val->validated('deaths');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('encounter_table', $encounter_table, false);
		}

		$this->template->title = "Encounter_tables";
		$this->template->content = View::forge('encounter/table/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('encounter/table');

		if ($encounter_table = Model_Encounter_Table::find($id))
		{
			$encounter_table->delete();

			Session::set_flash('success', 'Deleted encounter_table #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete encounter_table #'.$id);
		}

		Response::redirect('encounter/table');

	}

}
