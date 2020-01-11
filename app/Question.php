<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Question extends Model
{

    protected $guarded = [
        'user_id',
        'vote_count',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function answers()
    {
       return $this->hasMany('App\Answer');
    }

    public function votes() 
    {
        return $this->hasMany('App\Vote');
    }

    public function getCreatedAtAttribute($value)
    {

        return Carbon::parse($value)->diffForHumans();
    }


}
