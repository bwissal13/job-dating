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
        <a  class="btn ms-4 mt-4 custom-button-color text-white" href="{{ route('skills.index') }}"> Back</a>
    </div>
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb ">
            <div class="pull-left">
                <h2>Edit a Skil</h2>
            </div>
           
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

    <form action="{{ route('skills.update',$skill->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $skill->name }}" class="block mt-1 w-full border custom-border-color focus:outline-none focus:ring focus:border-custom-border-focus" placeholder="Name">
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