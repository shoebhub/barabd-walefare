@extends('backend.layout.layout')
@section('content')

<div class="content-wrapper">
    <div class="container">
        <h2>Volunteer Type List</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('volunteer.create') }}" class="btn btn-success mb-3">Add New volunteer</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Volunteer Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($volunteers as $volunteer)
                <tr>
                    <td>{{ $volunteer['id'] }}</td>
                    <td>{{ $volunteer['volunteer_type'] }}</td>
                    <td>
                        <a href="{{ route('volunteer.edit', $volunteer['id']) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('volunteer.destroy', $volunteer['id']) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
