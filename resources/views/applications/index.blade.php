@extends('companies.layout')
@section('content')
<x-app-layout style='background-color:#DDECF2'>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Applications') }}
        </h2>
    </x-slot>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <style>
                .custom-button-color {
                    background-color: #B89A55;
                }
            
                .custom-button-color:hover {
                    background-color: #A98346;
                }
            </style>
            
            <div class="pull-right">
                <a class="btn custom-button-color text-white" href="{{ route('applications.create') }}">Create New Application</a>
            </div>
            
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Cover Letter</th>
            <th>Status</th>
            <th>Match Percentage</th>
            <th>Announcement</th>
            <th>User</th>
            <th width="280px">Action</th>
        </tr>
        
        @foreach ($applications as $application)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $application->cover_letter }}</td>
                <td>{{ $application->status }}</td>
                <td>{{ $application->match_percentage }}</td>
                <td>{{ $application->announcement->title }}</td>
                <td>{{ $application->user->name }}</td>
                <td>
                    <form action="{{ route('applications.destroy', $application->id) }}" method="POST">
    
                        <a class="btn btn-info" href="{{ route('applications.show', $application->id) }}">Show</a>
        
                        <a class="btn btn-primary" href="{{ route('applications.edit', $application->id) }}">Edit</a>
        
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $applications->links() !!} 
   
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
</x-app-layout>
@endsection
