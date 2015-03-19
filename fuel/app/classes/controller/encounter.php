<?php
class Controller_Encounter extends Controller_Template
{

	public function action_index()
	{
        $data['encounter'] = Model_Encounter::find('all', array(
            'order_by' => array('starttime' => 'desc'),
        ));
		$this->template->title = "Encounter";
		$this->template->content = View::forge('encounter/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('encounter');

		if ( ! $data['encounter'] = Model_Encounter::find($id))
		{
			Session::set_flash('error', 'Could not find encounter #'.$id);
			Response::redirect('encounter');
		}

		$this->template->title = "Encounter";
		$this->template->content = View::forge('encounter/view', $data);

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('encounter');

		if ( ! $encounter = Model_Encounter::find($id))
		{
			Session::set_flash('error', 'Could not find encounter #'.$id);
			Response::redirect('encounter');
		}

		$val = Model_Encounter::validate('edit');

		if ($val->run())
		{
			$encounter->encid = Input::post('encid');
			$encounter->title = Input::post('title');
			$encounter->starttime = Input::post('starttime');
			$encounter->endtime = Input::post('endtime');
			$encounter->duration = Input::post('duration');
			$encounter->damage = Input::post('damage');
			$encounter->encdps = Input::post('encdps');
			$encounter->zone = Input::post('zone');
			$encounter->kills = Input::post('kills');
			$encounter->deaths = Input::post('deaths');

			if ($encounter->save())
			{
				Session::set_flash('success', 'Updated encounter #' . $id);

				Response::redirect('encounter/table');
			}

			else
			{
				Session::set_flash('error', 'Could not update encounter #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$encounter->encid = $val->validated('encid');
				$encounter->title = $val->validated('title');
				$encounter->starttime = $val->validated('starttime');
				$encounter->endtime = $val->validated('endtime');
				$encounter->duration = $val->validated('duration');
				$encounter->damage = $val->validated('damage');
				$encounter->encdps = $val->validated('encdps');
				$encounter->zone = $val->validated('zone');
				$encounter->kills = $val->validated('kills');
				$encounter->deaths = $val->validated('deaths');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('encounter', $encounter, false);
		}

		$this->template->title = "encounters";
		$this->template->content = View::forge('encounter/edit');

	}

	public function action_delete($encid = null)
	{
		is_null($encid) and Response::redirect('encounter');

        if ( ! $encounter = Model_Encounter::find('all', array(
            'where' => array('encid' => $encid),
        )))
		{
			Session::set_flash('error', 'Could not delete encounter '.$encid);
		}

		else
		{
            $query = DB::delete('encounter_table')->where('encid', $encid);
            $query->execute();

			Session::set_flash('success', 'Deleted encounter '.$encid);
		}

        if ($combatant = Model_Combatant::find('all', array(
            'where' => array('encid' => $encid),
        )))
		{
            $query = DB::delete('combatant_table')->where('encid', $encid);
            $query->execute();

			Session::set_flash('success', 'Deleted combatant '.$encid);
		}

		else
		{
			Session::set_flash('error', 'Could not delete combatant '.$encid);
		}

        if ($attacktype= Model_Attacktype::find('all', array(
            'where' => array('encid' => $encid),
        )))
		{
            $query = DB::delete('attacktype_table')->where('encid', $encid);
            $query->execute();

			Session::set_flash('success', 'Deleted attacktype '.$encid);
		}

		else
		{
			Session::set_flash('error', 'Could not delete attacktype '.$encid);
		}

        if ($damagetype= Model_Damagetype::find('all', array(
            'where' => array('encid' => $encid),
        )))
		{
            $query = DB::delete('damagetype_table')->where('encid', $encid);
            $query->execute();

			Session::set_flash('success', 'Deleted damagetype '.$encid);
		}

		else
		{
			Session::set_flash('error', 'Could not delete damagetype '.$encid);
		}

        if ($swing= Model_Swing::find('all', array(
            'where' => array('encid' => $encid),
        )))
		{
            $query = DB::delete('swing_table')->where('encid', $encid);
            $query->execute();

			Session::set_flash('success', 'Deleted swing '.$encid);
		}

		else
		{
			Session::set_flash('error', 'Could not delete swing '.$encid);
		}

		#Response::redirect('encounter');

	}

}
