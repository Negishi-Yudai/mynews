<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //追記
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );
}
