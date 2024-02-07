{{-- {{-- @extends('companies.layout')

@section('content')

<style>
    .custom-border-color {
        border-color: #459AB3;
    }

    .custom-border-color:focus {
        border-color: #2D749E; 
    }

    .custom-button-color {
        background-color: #B89A55;
    }

    .custom-button-color:hover {
        background-color: #A98346; 
    }
</style>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="pull-right">
    <a class="btn ms-4 mt-4 custom-button-color text-white" href="{{ route('students.index') }}">Back</a>
</div>

<x-guest-layout>
    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="bio">Bio:</label>
                    <input type="text" name="bio" class="form-control custom-border-color" placeholder="Bio">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="experience">Experience:</label>
                    <input type="text" name="experience" class="form-control custom-border-color" placeholder="Experience">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="education">Education:</label>
                    <input type="text" name="education" class="form-control custom-border-color" placeholder="Education">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="level">Level:</label>
                    <select name="level" class="form-control custom-border-color">
                        <option value="first_year">First Year</option>
                        <option value="second_year">Second Year</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" class="form-control custom-border-color">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="skills">Skills:</label>
                    <select
                        id="select-skill"
                        name="skills[]"
                        multiple
                        placeholder="Select skills..."
                        autocomplete="off"
                        class="form-control custom-border-color"
                    >
                        @foreach ($skills as $skill)
                            <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <button type="submit" class="btn ms-4 mt-4 custom-button-color text-white">Submit</button>
            </div>
        </div>
    </form>
</x-guest-layout>
@endsection --}}
@extends('companies.layout')

@section('content')

<style>
    .custom-border-color {
        border-color: #459AB3;
    }

    .custom-border-color:focus {
        border-color: #2D749E; 
    }

    .custom-button-color {
        background-color: #B89A55;
    }

    .custom-button-color:hover {
        background-color: #A98346; 
    }
</style>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="pull-right">
    <a class="btn ms-4 mt-4 custom-button-color text-white" href="{{ route('students.index') }}">Back</a>
</div>

<x-guest-layout>
    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="bio">Bio:</label>
                    <input type="text" name="bio" class="form-control custom-border-color" placeholder="Bio">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="experience">Experience:</label>
                    <input type="text" name="experience" class="form-control custom-border-color" placeholder="Experience">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="education">Education:</label>
                    <input type="text" name="education" class="form-control custom-border-color" placeholder="Education">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="level">Level:</label>
                    <select name="level" class="form-control custom-border-color">
                        <option value="first_year">First Year</option>
                        <option value="second_year">Second Year</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" class="form-control custom-border-color">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="skills">Skills:</label>
                    <select
                        id="select-skill"
                        name="skills[]"
                        multiple
                        placeholder="Select skills..."
                        autocomplete="off"
                        class="form-control custom-border-color"
                    >
                        @foreach ($skills as $skill)
                            <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <button type="submit" class="btn ms-4 mt-4 custom-button-color text-white">Submit</button>
            </div>
        </div>
    </form>
</x-guest-layout>
@endsection
