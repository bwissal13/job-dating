<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->paginate(5);
        return view('students.index', compact('students'))  
         ->with('i',(request()->input('page',1) - 1 ) * 5);
    }

    public function create()
    {
        $skills = Skill::all();
        return view('students.create', compact('skills'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'bio' => 'nullable|string',
            'experience' => 'nullable|string',
            'education' => 'nullable|string',
            'level' => 'nullable|in:first_year,second_year',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user_id' => 'required|exists:users,id',
            'skills' => 'nullable|array',
            'skills.*' => 'exists:skills,id',
        ]);

        $studentData = $request->only(['bio', 'experience', 'education', 'level', 'user_id']);
        
        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('student_images', 'public');
            $studentData['image'] = $imagePath;
        }

        $student = Student::create($studentData);

        // Attach skills to the student
        if ($request->filled('skills')) {
            $student->skills()->attach($request->input('skills'));
        }

        return redirect()->route('students.index')->with('success', 'Student created successfully');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        $skills = Skill::all();
        return view('students.edit', compact('student','skills'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'bio' => 'nullable',
            'experience' => 'nullable',
            'education' => 'nullable',
            'level' => 'nullable|in:first_year,second_year',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $studentData = $request->all();

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('student_images', 'public');
            $studentData['image'] = $imagePath;
        }

        $student->update($studentData);

        return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }
}
