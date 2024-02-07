@extends('companies.layout')


@section('content')
    <div class="container">
        <h1>Edit Application Status</h1>

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

        <form action="{{ route('applications.update', $application->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="user_id" value="{{ $application->user_id }}">
            <input type="hidden" name="announcement_id" value="{{ $application->announcement_id }}">
            <input type="hidden" name="cover_letter" value="{{ $application->cover_letter }}">
            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" class="form-control">
                    <option value="pending" {{ $application->status === 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="accepted" {{ $application->status === 'accepted' ? 'selected' : '' }}>Accepted</option>
                    <option value="rejected" {{ $application->status === 'rejected' ? 'selected' : '' }}>Rejected</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Status</button>
        </form>
    </div>
@endsection
