@extends('companies.layout')
  
@section('content')
{{-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New announcement</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('announcements.index') }}"> Back</a>
        </div>
    </div>
</div>
    --}}
    <style>
        .custom-border-color {
            border-color: #459AB3;
        }
    
        .custom-border-color:focus {
            border-color: #2D749E; 
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
    <a  class="btn ms-4 mt-4 custom-button-color text-white" href="{{ route('announcements.index') }}"> Back</a>
</div>
<x-guest-layout>
     
<form action="{{ route('announcements.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="block mt-1 w-full border custom-border-color focus:outline-none focus:ring focus:border-custom-border-focus" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <input type="text" name="description" class="block mt-1 w-full border custom-border-color focus:outline-none focus:ring focus:border-custom-border-focus" placeholder="Domain">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="text" name="date" class="block mt-1 w-full border custom-border-color focus:outline-none focus:ring focus:border-custom-border-focus" placeholder="Contact">
            </div>
           
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="company_id">Company</label>
                <select name="company_id" class="block mt-1 w-full border custom-border-color focus:outline-none focus:ring focus:border-custom-border-focus">
                    @foreach($companies as $company)
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
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