<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
        'name',
        'title',
        'content'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }

}
