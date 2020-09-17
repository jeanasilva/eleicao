<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'id_pessoa');
    }
}
