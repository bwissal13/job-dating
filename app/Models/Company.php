<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table='companies';
    protected $fillable=[
        "name","domain","contact",
    ];
    public function announcements(){
        return $this->hasMany(Announcements::class, 'company_id','id');
    }
    use HasFactory;
}
