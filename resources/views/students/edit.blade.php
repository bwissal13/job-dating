@extends('companies.layout')
@section('content')

<x-app-layout style='background-color:#DDECF2'>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Edit Student Profile') }}
        </h2>
    </x-slot>

    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="d-flex justify-content-end">
                <a class="btn custom-button-color text-white" href="{{ route('students.index') }}">Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

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
                    <input type="text" name="bio" value="{{ $student->bio }}" class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="experience">Experience:</label>
                    <input type="text" name="experience" value="{{ $student->experience }}" class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="education">Education:</label>
                    <input type="text" name="education" value="{{ $student->education }}" class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="level">Level:</label>
                    <select name="level" class="form-control">
                        <option value="first_year" {{ $student->level === 'first_year' ? 'selected' : '' }}>First Year</option>
                        <option value="second_year" {{ $student->level === 'second_year' ? 'selected' : '' }}>Second Year</option>
                    </select>
                </div>
            </div>

          
    <div class="col-md-6">
        <div class="form-group">
            <label for="image">Image:</label>
            @if ($student->image)
                <img src="{{ asset('storage/' . $student->image) }}" alt="Current Student Image" class="img-fluid rounded-circle mb-2" style="max-width: 200px;">
            @else
                No Image
            @endif
            <input type="file" name="image" class="form-control">
        </div>
    </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="skills">Skills:</label>
                    <select id="select-skill" name="skills[]" multiple class="form-control">
                        @foreach ($skills as $skill)
                            <option value="{{ $skill->id }}" {{ in_array($skill->id, $student->skills->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $skill->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <button type="submit" class="btn custom-button-color text-white">Update</button>
            </div>
        </div>
    </form>
</x-app-layout>
@endsection
