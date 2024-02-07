@extends('companies.layout')
  
@section('content')
    <div class="container">
        <h1>Create Application</h1>

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

        <form action="{{ route('applications.store') }}" method="POST">
            @csrf

            <input type="hidden" name="announcement_id" value="{{ $announcement_id }}">
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

            <div class="form-group">
                <label for="cover_letter">Cover Letter:</label>
                <textarea name="cover_letter" class="form-control" rows="5" placeholder="Enter your cover letter" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit Application</button>
        </form>
    </div>
@endsection
