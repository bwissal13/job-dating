<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    use HasFactory;
}
