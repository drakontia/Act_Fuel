<?php
use Orm\Model;

class Model_Skill extends Model
{

  protected static $_properties = array(
    'id',
    'name',
    'swingtype',
    'duration',
    'recast'
  );


  public static function validate($factory)
  {
    $val = Validation::forge($factory);
    $val->add_field('name', 'Name', 'required|max_length[64]');
    $val->add_field('swingtype', 'Swingtype', 'required');
    $val->add_field('duration', 'Duration', 'required');
    $val->add_field('recast', 'Recast', 'required');

    return $val;
  }

}

