<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['name', 'logo', 'description', 'sector_id', 'website', 'twitter', 'google_plus', 'facebook'];

    public function sector()
    {
        return $this->belongsTo('App\Sector');
    }

    public function scopeApproved($query)
    {
        return $query->where('approved', '=', 1);
    }
}
