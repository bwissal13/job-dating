<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\User;
use App\Models\Announcements;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::latest()->paginate(5);
        return view('applications.index', compact('applications'))
        ->with('i',(request()->input('page',1) - 1 ) * 5);
    }


    public function create(Request $request)
{
    $users = User::all();
    $announcements = Announcements::all();
    $announcement_id = $request->input('announcement_id');

    return view('applications.create', compact('users', 'announcements', 'announcement_id'));
}


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'announcement_id' => 'required|exists:announcements,id',
            'cover_letter' => 'required',
            'status' => 'in:pending,accepted,rejected',
        ]);

        // Calculate match percentage
        $matchPercentage = $this->calculateMatchPercentage($request->user_id, $request->announcement_id);
        $validatedData['match_percentage'] = $matchPercentage;

        Application::create($validatedData);

        return redirect()->route('applications.index')->with('success', 'Application created successfully');
    }

    
    public function show(Application $application)
    {
        return view('applications.show', compact('application'));
    }

  
    public function edit(Application $application)
    {
       
        $users = User::all();
        $announcements = Announcements::all();

        return view('applications.edit', compact('application', 'users', 'announcements'));
    }

    
    public function update(Request $request, Application $application)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'announcement_id' => 'required|exists:announcements,id',
            'cover_letter' => 'required',
            'status' => 'in:pending,accepted,rejected',
        ]);

        // Calculate match percentage
        $matchPercentage = $this->calculateMatchPercentage($request->user_id, $request->announcement_id);
        $validatedData['match_percentage'] = $matchPercentage;

        $application->update($validatedData);

        return redirect()->route('applications.index')->with('success', 'Application updated successfully');
    }

    public function destroy(Application $application)
    {
        $application->delete();

        return redirect()->route('applications.index')->with('success', 'Application deleted successfully');
    }

    // Calculate match percentage based on skills
    private function calculateMatchPercentage($userId, $announcementId)
    {
        $user = User::findOrFail($userId);
        $announcement = Announcements::findOrFail($announcementId);

        // Get the skills of the user and announcement
        $userSkills = $user->skills->pluck('id')->toArray();
        $announcementSkills = $announcement->skills->pluck('id')->toArray();

        // Calculate the intersection of skills
        $matchedSkills = array_intersect($userSkills, $announcementSkills);

        // Calculate the match percentage
        $matchPercentage = count($matchedSkills) / count($announcementSkills) * 100;

        return round($matchPercentage, 2);
    }
}

