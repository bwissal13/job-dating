{{-- 
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
                <a class="btn custom-button-color text-white" href="{{ route('students.create') }}">Complete profile</a>
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
        @foreach ($students as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->user->name }}</td>
            <td>
                @foreach ($student->skills as $skill)
                    {{ $skill->name }}
                @endforeach
            </td>
            <td>
                @foreach ($student->skills as $skill)
                    {{ $skill->name }}
                @endforeach
    
            </td>
          
            <td>
                <form action="{{ route('students.destroy',$student->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
   
        
   

    {!! $students->links() !!}
      

   
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
@endsection --}}
@extends('companies.layout')
@section('content')

<x-app-layout style='background-color:#DDECF2'>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Skill') }}
        </h2>
    </x-slot>
    
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="d-flex justify-content-end">
                <a class="btn btn-success" href="{{ route('students.create') }}">Complete profile</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-3">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Bio</th>
                <th>Experience</th>
                <th>Education</th>
                <th>Level</th>
                <th>Skills</th>
                <th>Action</th>
                <th>image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $student->user->name }}</td>
                    <td>{{ $student->bio }}</td>
                    <td>{{ $student->experience }}</td>
                    <td>{{ $student->education }}</td>
                    <td>{{ $student->level }}</td>
                    <td>
                        @foreach ($student->skills as $skill)
                            <span class="badge bg-info">{{ $skill->name }}</span>
                        @endforeach
                    </td>
                
                   
                

                    <td>
                        <a class="btn btn-info" href="{{ route('students.show', $student->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <!-- ... other columns ... -->
                    <td>
                        @if ($student->image)
                            <img src="{{ asset('storage/' . $student->image) }}" alt="Student Image" style="max-width: 100px;">
                        @else
                            No Image
                        @endif
                    </td>
                    <!-- ... other columns ... -->
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-3">
        {!! $students->links() !!}
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

</x-app-layout>
@endsection
