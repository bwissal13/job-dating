
@extends('companies.layout')
@section('content')
<x-app-layout style='background-color:#DDECF2'>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Announcement') }}
        </h2>
    </x-slot>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            {{-- <div class="pull-left">
                <h2>Test view</h2>
            </div> --}}
            <style>
                .custom-button-color {
                    background-color: #B89A55;
                }
            
                .custom-button-color:hover {
                    background-color: #A98346;
                }
            </style>
            
            <div class="pull-right">
                <a class="btn custom-button-color text-white" href="{{ route('announcements.create') }}">Create New Announcement</a>
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
            <th>Title</th>
            <th>Description</th>
            <th>Date</th>
            <th>Company</th>
            <th>User</th>
            <th width="280px">Action</th>
        </tr>
        
        @foreach ($announcements as $announcement)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $announcement->title }}</td>
            <td>{{ $announcement->description}}</td>
            <td>{{ $announcement->date }}</td>
            <td>
                @foreach($companies as $company)
                    @if($company->id == $announcement->company_id)
                        {{ $company->name }}
                    @endif
                @endforeach
            </td>
            <td>
                @foreach($users as $user)
                @if($user->id == $announcement->user_id)
                {{$user->name}}
                @endif
                @endforeach
            </td>
            <td>
                <form action="{{ route('announcements.destroy',$announcement->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('announcements.show',$announcement->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('announcements.edit',$announcement->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $announcements->links() !!} 
      
 {{-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Announcement</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('announcements.index') }}"> Back</a>
        </div>
    </div>
</div> --}}
   
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
