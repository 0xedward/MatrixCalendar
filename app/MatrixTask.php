<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatrixTask extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}