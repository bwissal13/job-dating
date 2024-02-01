<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnnouncementRequest;
use App\Models\Announcements;
use App\Http\Requests\StoreAnnouncementsRequest;
use App\Http\Requests\UpdateAnnouncementsRequest;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        $users=User::all();
        $announcements= Announcements::latest()->paginate(5);
        return view('announcements.index',compact('announcements', 'companies','users'))
                    ->with('i',(request()->input('page',1) - 1 ) * 5);
    }
   
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::all();
        return view('announcements.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AnnouncementRequest $request)
    {
        $companies = Company::all();
        $users=User::all();
       
        Announcements::create($request->all());

        return redirect()->route('announcements.create')
                            ->with('success','Announcement created successfully.');
    }
   

   
    
    /**
     * Display the specified resource.
     */
    public function show(Announcements $announcement)
    {
        $companies= Company::all();
        $users = Company::all();
     return view('announcements.show',compact('announcement','companies','users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcements $announcement)
    {
        $companies= Company::all();
        $users = Company::all();
      return view('announcements.edit',compact('announcement','companies','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AnnouncementRequest $request, Announcements $announcement)
    {
    
        $announcement->update($request->all());
        return redirect()->route('announcements.index')
                            ->with('success','Announcement updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcements $announcement)
    {
        $announcement->delete();
        return redirect()->route('announcements.index')
        ->with('success','Announcemment deleted successfully' );
    }
}
