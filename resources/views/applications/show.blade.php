@extends('companies.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Announcement</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('announcements.index') }}">Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $announcement->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $announcement->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                {{ $announcement->date }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Company:</strong>
                @foreach($companies as $company)
                    @if($company->id == $announcement->company_id)
                        {{ $company->name }}
                    @endif
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User:</strong>
                @foreach($users as $user)
                    @if($user->id == $announcement->user_id)
                        {{$user->name}}
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <!-- Add a button for creating applications -->
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <a class="btn btn-success" href="{{ route('applications.create', ['announcement_id' => $announcement->id]) }}">Apply</a>
            </div>
        </div>
    </div>
@endsection
