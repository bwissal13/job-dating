@extends('companies.layout')
<style>
    .custom-border-color {
        border-color: #459AB3;
    }

    .custom-border-color:focus {
        border-color: #2D749E; 
    }
</style> 
<x-guest-layout>
    <div class="pull-right">
        <a  class="btn ms-4 mt-4 custom-button-color text-white" href="{{ route('announcements.index') }}"> Back</a>
    </div>
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit an Announcement</h2>
            </div>
            {{-- <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('announcements.index') }}"> Back</a>
            </div> --}}
        </div>
    </div>

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

    <form action="{{ route('announcements.update', $announcement->id) }}" method="POST">
        @csrf
        @method('PUT')
    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text"class="block mt-1 w-full border custom-border-color focus:outline-none focus:ring focus:border-custom-border-focus" name="title" value="{{ $announcement->title }}" class="block mt-1 w-full border custom-border-color focus:outline-none focus:ring focus:border-custom-border-focus" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <input type="text" name="description" value="{{ $announcement->description }}" class="block mt-1 w-full border custom-border-color focus:outline-none focus:ring focus:border-custom-border-focus" placeholder="Description">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date:</strong>
                    <input type="date" name="date" value="{{ $announcement->date }}" class="block mt-1 w-full border custom-border-color focus:outline-none focus:ring focus:border-custom-border-focus" placeholder="Date">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="company_id">Company</label>
                    <select name="company_id" class="block mt-1 w-full border custom-border-color focus:outline-none focus:ring focus:border-custom-border-focus">
                        @foreach($companies as $company)
                            <option value="{{ $company->id }}" {{ $company->id == $announcement->company_id ? 'selected' : '' }}>
                                {{ $company->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
    
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="hidden" name="user_id" value="{{ $announcement->user_id }}">
                </div>
            </div>
    
            <style>
                .custom-button-color {
                    background-color: #B89A55;
                }
            
                .custom-button-color:hover {
                    background-color: #A98346; 
                }
            </style>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn ms-4 mt-4 custom-button-color text-white">Submit</button>
            </div>
        </div>
    </form>
</x-guest-layout>
@endsection
