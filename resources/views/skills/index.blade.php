
@extends('Companies.layout')
@section('content')

<x-app-layout style='background-color:#DDECF2'>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Skill') }}
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
                <a class="btn custom-button-color text-white" href="{{ route('skills.create') }}">Create New Skill</a>
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
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($skills as $skill)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $skill->name }}</td>
          
            <td>
                <form action="{{ route('skills.destroy',$skill->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('skills.show',$skill->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('skills.edit',$skill->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $skills->links() !!}
      

   
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