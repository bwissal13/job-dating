<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
        'cover_letter',
        'status',
        'match_percentage',
        'user_id',  
        'announcement_id',  
    ];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }

 
    public function announcement()
    {
        return $this->belongsTo(Announcements::class);
    }
}
