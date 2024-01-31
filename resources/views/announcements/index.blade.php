
@extends('announcements.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Test view</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('announcements.create') }}"> Create New Company</a>
            </div>
        </div>
    </div>
   
    {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>tit</th>
            <th>Domain</th>
            <th>Contact</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($companies as $company)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $company->name }}</td>
            <td>{{ $company->domain }}</td>
            <td>{{ $company->contact }}</td>
            <td>
                <form action="{{ route('companies.destroy',$company->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('companies.show',$company->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $companies->links() !!} --}}
      
{{-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Announcement</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('companies.index') }}"> Back</a>
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
   

@endsection
