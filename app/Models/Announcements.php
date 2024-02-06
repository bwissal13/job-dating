<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Announcements extends Model
{
    protected $table='announcements';
    protected $fillable=[
        "title","description","date","user_id","company_id"
    ];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'skills_announcements');
    }

    use HasFactory,SoftDeletes;
}
