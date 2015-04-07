<?php
class Controller_Skill extends Controller_Template
{

  public function action_index()
  {
    $data['skill'] = Model_Skill::find('all');
    $this->template->title = "Skill/Ability";
    $this->template->content = View::forge('skill/index', $data);

  }

  public function action_view($id = null)
  {
    is_null($id) and Response::redirect('skill');

    if ( ! $data['skill'] = Model_Skill::find($id))
    {
      Session::set_flash('error', 'Could not find skill #'.$id);
      Response::redirect('skill');
    }

    $this->template->title = "skill";
    $this->template->content = View::forge('skill/view', $data);

  }

  public function action_create()
  {
    if (Input::method() == 'POST')
    {
      $val = Model_Skill::validate('create');

      if ($val->run())
      {
        $skill = Model_Skill::forge(array(
          'name' => Input::post('name'),
          'swingtype' => Input::post('swingtype'),
          'damagetype' => Input::post('damagetype'),
          'duration' => Input::post('duration'),
          'recast' => Input::post('recast')
        ));

        if ($skill and $skill->save())
        {
          Session::set_flash('success', 'Added skill #'.$skill->id.'.');

          Response::redirect('skill');
        }

        else
        {
          Session::set_flash('error', 'Could not save skill.');
        }
      }
      else
      {
        Session::set_flash('error', $val->error());
      }
    }

    $this->template->title = "skill";
    $this->template->content = View::forge('skill/create');

  }

  public function action_edit($id = null)
  {
    is_null($id) and Response::redirect('skill');

    if ( ! $skill = Model_Skill::find($id))
    {
      Session::set_flash('error', 'Could not find skill #'.$id);
      Response::redirect('skill');
    }

    $val = Model_skill::validate('edit');

    if ($val->run())
    {
      $skill->name = Input::post('name');
      $skill->swingtype = Input::post('swingtype');
      $skill->damagetype = Input::post('damagetype');
      $skill->duration = Input::post('duration');
      $skill->recast = Input::post('recast');

      if ($skill->save())
      {
        Session::set_flash('success', 'Updated skill #' . $id);

        Response::redirect('skill');
      }

      else
      {
        Session::set_flash('error', 'Could not update skill #' . $id);
      }
    }

    else
    {
      if (Input::method() == 'POST')
      {
        $skill->name = $val->validated('name');
        $skill->swingtype = $val->validated('swingtype');
        $skill->damagetype = $val->validated('damagetype');
        $skill->duration = $val->validated('duration');
        $skill->recast = $val->validated('recast');

        Session::set_flash('error', $val->error());
      }

      $this->template->set_global('skill', $skill, false);
    }

    $this->template->title = "Skill";
    $this->template->content = View::forge('skill/edit');

  }

  public function action_delete($id = null)
  {
    is_null($id) and Response::redirect('skill');

    if ($skill = Model_Skill::find($id))
    {
      $skill->delete();

      Session::set_flash('success', 'Deleted skill #'.$id);
    }

    else
    {
      Session::set_flash('error', 'Could not delete skill #'.$id);
    }

    Response::redirect('skill');

  }

}

