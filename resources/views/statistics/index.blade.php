@extends('companies.layout')

@section('content')
    <div class="container">
        <h1>Statistics</h1>

        @if ($statistics)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">User Count</th>
                        <th scope="col">Skill Count</th>
                        <th scope="col">Announcement Count</th>
                        <th scope="col">Application Count</th>
                        <th scope="col">Skill User Count</th>
                        <th scope="col">Skill Announcement Count</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $statistics->user_count }}</td>
                        <td>{{ $statistics->skill_count }}</td>
                        <td>{{ $statistics->announcement_count }}</td>
                        <td>{{ $statistics->application_count }}</td>
                        <td>{{ $statistics->skill_user_count }}</td>
                        <td>{{ $statistics->skill_announcement_count }}</td>
                    </tr>
                </tbody>
            </table>
        @else
            <p>No statistics available.</p>
        @endif
    </div>
@endsection
