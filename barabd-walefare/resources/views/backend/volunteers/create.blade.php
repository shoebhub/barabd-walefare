@extends('backend.layout.layout')
@section('content')


<div class="content-wrapper">
    <div class="container">
        <h2>{{ isset($volunteer) ? 'Edit Volunteer Type' : 'Create Volunteer Type' }}</h2>

        <form action="{{ isset($volunteer) ? route('volunteer.update', $volunteer->id) : route('volunteer.store') }}" method="POST">
            @csrf
            @if(isset($volunteer)) 
                @method('POST') 
            @endif

            <div class="mb-3">
                <label for="volunteer_type" class="form-label">Volunteer Type</label>
                <input type="text" class="form-control" id="volunteer_type" name="volunteer_type" value="{{ old('volunteer_type', $volunteer->volunteer_type ?? '') }}" required>
                @error('volunteer_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                {{ isset($volunteer) ? 'Update' : 'Create' }}
            </button>
        </form>
    </div>
</div>



@endsection