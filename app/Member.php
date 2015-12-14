<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['name', 'logo', 'description', 'sector_id', 'website', 'twitter', 'google_plus', 'facebook'];

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function scopeApproved($query)
    {
        return $query->where('approved', '=', 1);
    }
}
