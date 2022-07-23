<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'body'];  //untuk membatasi column apa saja yang dapat di isi
    protected $guarded = ['id']; //untuk membatsi column yang tidak boleh di isi
}
