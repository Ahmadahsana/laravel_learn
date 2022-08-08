<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class list_web extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function status_active()
    {
        $web = DB::table('list_webs')->where('status', '1')->get();

        return $web;
    }

    public static function edit($id)
    {
        $web = DB::table('list_webs')->where('id', $id)->get();
        return $web;
    }
}
