<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // protected $fillable = ['nombre', 'titulo', 'autor'];
    protected $table = "articles";
}
