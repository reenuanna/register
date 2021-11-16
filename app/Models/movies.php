<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class movies extends Model
{
    use HasFactory;
    public static function getmovies($table,$id)
    {
    	return DB::table($table)->where('tid',$id)->get();
    }
}
