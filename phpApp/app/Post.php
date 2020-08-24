<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Post extends Model
{
    public $table = 'posts';

    public $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = ['answer', 'user_id'];



//
//    public static function deleteByUser_id($id)
//    {
//        DB::table('posts')->where('user_id', $id)->delete();
//    }





}
