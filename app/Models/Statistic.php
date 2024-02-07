<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Statistic extends Model
{
    use HasFactory;

    protected $fillable = ['user_count', 'skill_count', 'announcement_count', 'skill_user_count','application_count','skill_announcement_count'];

    /**
     * Update statistics based on the current counts.
     */
    public static function updateStatistics()
    {
        $userCount = User::count();
        $skillCount = Skill::count();
        $applyCount = Application::count();
        $announcementCount = Announcements::count();
        $skillUserCount = DB::table('skills_users')->count();
        $skillAnnouncementCount = DB::table('skills_announcements')->count();

        $statistics = Statistic::latest()->first();

        if (!$statistics) {
            Statistic::create([
                'user_count' => $userCount,
                'skill_count' => $skillCount,
                'application_count'=>$applyCount,
                'announcement_count' => $announcementCount,
                'skill_user_count' => $skillUserCount,
                'skill_announcement_count'=>$skillAnnouncementCount,
            ]);
        } else {
            $statistics->update([
                'user_count' => $userCount,
                'skill_count' => $skillCount,
                'application_count'=>$applyCount,
                'announcement_count' => $announcementCount,
                'skill_user_count' => $skillUserCount,
                'skill_announcement_count'=>$skillAnnouncementCount,
            ]);
        }
    }
}

