@extends('companies.layout')
@section('content')

<x-app-layout style='background-color:#DDECF2'>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Student Profile') }}
        </h2>
    </x-slot>

    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="d-flex justify-content-end">
                <a class="btn custom-button-color text-white" href="{{ route('students.index') }}">Back</a>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" value="{{ $student->user->name }}" class="form-control" readonly>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="bio">Bio:</label>
                <textarea name="bio" class="form-control" readonly>{{ $student->bio }}</textarea>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="experience">Experience:</label>
                <input type="text" name="experience" value="{{ $student->experience }}" class="form-control" readonly>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="education">Education:</label>
                <input type="text" name="education" value="{{ $student->education }}" class="form-control" readonly>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="level">Level:</label>
                <input type="text" name="level" value="{{ $student->level }}" class="form-control" readonly>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="image">Image:</label>
                @if ($student->image)
                    <img src="{{ asset('storage/' . $student->image) }}" alt="Student Image" class="img-fluid rounded-circle" style="max-width: 200px;">
                @else
                    No Image
                @endif
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="skills">Skills:</label>
                @forelse ($student->skills as $skill)
                    <span class="badge bg-info">{{ $skill->name }}</span>
                @empty
                    No Skills
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
@endsection
