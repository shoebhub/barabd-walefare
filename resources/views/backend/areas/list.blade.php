@extends('backend.layout.layout')
@section('content')

<div class="content-wrapper">
    <div class="container">
        <h2>Areas List</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('area.create') }}" class="btn btn-success mb-3">Add New Area</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Area Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($areas as $area)
                <tr>
                    <td>{{ $area['id'] }}</td>
                    <td>{{ $area['area_name'] }}</td>
                    <td>
                        <a href="{{ route('area.edit', $area['id']) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('area.destroy', $area['id']) }}" method="POST" style="display:inline-block;">
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
