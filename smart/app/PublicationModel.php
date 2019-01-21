<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PublicationModel extends Model
{
  protected $table = 'publications';

  public static function select_all()
  {
    return DB::table('publications')
      ->orderBy('year', 'desc')
      ->get();
  }

  public static function select_search($query)
  {
    return DB::table('publications')
      ->where($query)
      ->orderBy('year', 'desc')
      ->get();
  }

  public static function select_by_id($id)
  {
    return PublicationModel::findOrFail($id);
  }

  public static function insert($input)
  {
    return DB::table('publications')
      ->insertGetId($input);
  }


}
