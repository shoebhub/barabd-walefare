@extends('backend.layout.layout')
@section('content')

<div class="content-wrapper">
    <div class="container">
        <h2>Districts List</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('district.create') }}" class="btn btn-success mb-3">Add New District</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>District Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($districts as $district)
                <tr>
                    <td>{{ $district['id'] }}</td>
                    <td>{{ $district['name'] }}</td>
                    <td>
                        <a href="{{ route('district.edit', $district['id']) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('district.destroy', $district['id']) }}" method="POST" style="display:inline-block;">
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
